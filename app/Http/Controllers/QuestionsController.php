<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuestionsController extends Controller
{
    /**
     * Question for specific question
     */
    public function questions(string $school, string $course, string $exam): View|RedirectResponse
    {
        $examRecord = Exam::where('slug', $exam)->first(['id', 'name', 'slug']);

        if ($examRecord == null) {
            return redirect()->route('library')
                ->with('exam_message', 'No such exam exists');
        }
        $query = Question::where('exam_id', $examRecord->id);

        if ($query->count() == 0) {
            return back()->with('message', 'No questions available at the moment for '.$examRecord->name);
        }
        $question = $query->first();
        $questions_count = $query->count();

        // Flashcard by exam
        $currentExam = Exam::with('subject.course.school')->where('slug', $exam)->firstOrFail();

        $subject_slug = $currentExam->subject->slug;
        $school_name = $currentExam->subject->course->school->name;
        $school_slug = $currentExam->subject->course->school->slug;
        $subject_name = $currentExam->subject->name;
        $course_name = $currentExam->subject->course->name;
        $course_slug = $currentExam->subject->course->slug;
        $exam_name = $examRecord->name;
        $exam_slug = $examRecord->slug;

        $questions = collect();

        $examIds = Question::where('exam_id', '!=', $examRecord->exam_id)
            ->distinct()
            ->pluck('exam_id');

        foreach ($examIds as $examId) {
            $q = Question::with('exam')->where('exam_id', $examId)
                ->orderBy('id') 
                ->first();
        
            if ($q) {
                $questions->push($q);
            }
        }

        $q_r  = [];
        foreach ($questions as $key => $quiz) {
            logger($quiz);
            $q_r[] = [
                '@type' => 'Question',
                'name' => $quiz->question,
                'url' => $quiz->question_url,
            ];
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'QAPage',
            'name' => $question->question.' | '.env('APP_NAME'),
            'url' => url($school_slug.'/'.$course_slug.'/'.$exam_slug),
            'description' => 'Ace your '.$course_name.' using '.$exam_name,
            'mainEntity' => [
                '@type' => 'Question',
                'name' => $question->question,
                'text' => $question->question,
                'eduQuestionType' => 'Multiple choice',
                'answerCount' => 1,
                'upvoteCount' => 5,
                'datePublished' => $question->created_at,
                'author' => [
                    '@type' => 'Person',
                    'name' => env('APP_NAME'),
                    'url' => env('APP_URL'),
                ],
                'about' => [
                    '@type' => 'Thing',
                    'name' => $currentExam->subject->name,
                ],
                'educationalAlignment' => [
                    [
                        '@type' => 'AlignmentObject',
                        'alignmentType' => 'educationalSubject',
                        'targetName' => $currentExam->name,
                    ],
                ],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $question->correct_answer.' Rationale: '.$question->rationale,
                    'upvoteCount' => 10,
                    'datePublished' => $question->created_at,
                    'author' => [
                        '@type' => 'Organization',
                        'name' => env('APP_NAME'),
                        'url' => env('APP_URL'),
                    ]],

            ],
            'relatedLink' =>  $q_r,
        ];

        return view('library.exam.questions', compact('question', 'questions_count', 'subject_slug', 'school', 'school_name', 'subject_name', 'course_name', 'exam_name', 'school_slug', 'course_slug', 'exam_slug', 'schema'));
    }

    public function examAnswers(Request $request): JsonResponse
    {
        $data = $request->validate([
            'question_id' => 'required',
            'user_answer' => 'required',
            'exam_id' => 'required',
        ]);

        $question = Question::where('exam_id', $data['exam_id'])
            ->where('id', $data['question_id'])
            ->first();

        if (! $question) {
            return response()->json([
                'message' => 'invalid',
            ]);
        }

        $isCorrect = $this->isAnswerCorrect($question, $data['user_answer']);

        return response()->json([
            'status' => $isCorrect ? 'correct' : 'wrong',
            'correct_answer' => $isCorrect ? null : $question['correct_answer'],
            'rationale' => $question['rationale'],
        ]);
    }

    private function isAnswerCorrect($question, $userAnswer): bool
    {
        if ($question['question_type'] === 'Multiple Choice') {
            $correct = array_filter(array_map('trim', explode(',', $question['correct_answer'])));
            $user = array_filter(array_map('trim', explode(' ', $userAnswer)));

            sort($correct);
            sort($user);

            return $correct === $user;
        }

        return trim($userAnswer) === trim($question['correct_answer']);
    }

    public function nextQuestion(int $questionId)
    {

        $current = Question::find($questionId);

        $question = Question::where('exam_id', $current->exam_id)
            ->where('id', '>', $current->id)
            
            ->orderBy('id', 'asc')
            ->first(['exam_id', 'extract', 'question', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 'choiceE', 'choiceF', 'choiceG', 'rationale', 'question_type', 'image', 'url', 'id']);
        if ($question == null) {
            return response()->json(['message' => 'No more questions'], 200);
        }

        return response()->json($question);

    }

    public function previousQuestion(int $exam_id, int $question_id)
    {
        $current = Question::find($question_id);

        $question = Question::where('exam_id', $current->exam_id)
            ->where('id', '<', $current->id)
            ->orderBy('id', 'desc')
            
            ->first(['exam_id', 'extract', 'question', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 'choiceE', 'choiceF', 'choiceG', 'rationale', 'question_type', 'image', 'url', 'id']);
        if ($question == null) {
            return response()->json(['message' => 'No more questions'], 200);
        }

        return response()->json($question);
    }
}
