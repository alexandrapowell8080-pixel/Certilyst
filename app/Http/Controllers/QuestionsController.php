<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Subject;
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
        $start = microtime(true);
        $examRecord = Exam::with('subject.course.school')
            ->where('slug', $exam)
            ->first();

        if (! $examRecord) {
            abort(404);
        }

        $query = Question::where('exam_id', $examRecord->id)
            ->where('question_type', '!=', 'List Selection');

        $question = (clone $query)->first();

        if (! $question) {
              abort(404);
        }

        $questions_count = $query->count();

        $currentExam = $examRecord;

        $schoolId = $examRecord->subject->course->school->id;

        $exams = Exam::whereHas('subject.course', function ($q) use ($schoolId) {
            $q->where('school_id', $schoolId);
        })->pluck('id');

        $subject_slug = $currentExam->subject->slug;
        $school_name = $currentExam->subject->course->school->name;
        $school_slug = $currentExam->subject->course->school->slug;
        $subject_name = $currentExam->subject->name;
        $course_name = $currentExam->subject->course->name;
        $course_slug = $currentExam->subject->course->slug;
        $exam_name = $examRecord->name;
        $exam_slug = $examRecord->slug;

        $questions = $exams->map(function ($id) {
            return Question::where('exam_id', $id)
                ->inRandomOrder()
                ->first();
        })->filter();

        $q_r = [];
        foreach ($questions as $key => $quiz) {
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
            'relatedLink' => $q_r,
        ];
        $responseTime = round((microtime(true) - $start) * 1000, 2);
        // logger('responseTime: '.$responseTime);

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
        } elseif ($question['question_type'] === 'List Selection') {
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
            ->whereNot('question_type', 'List Selection')
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
            ->whereNot('question_type', 'List Selection')
            ->orderBy('id', 'desc')

            ->first(['exam_id', 'extract', 'question', 'choiceA', 'choiceB', 'choiceC', 'choiceD', 'choiceE', 'choiceF', 'choiceG', 'rationale', 'question_type', 'image', 'url', 'id']);
        if ($question == null) {
            return response()->json(['message' => 'No more questions'], 200);
        }

        return response()->json($question);
    }

    /**
     * Individual question
     */
    public function individualQuestions(string $url): View
    {
        $path = '/'.request()->path();

        $question = Question::with('exam.subject.course.school')
            ->where('url', $path)
            ->whereNot('question_type', 'List Selection')
            ->firstOrFail();

        // Extract relationships once
        $exam = $question->exam;
        $subject = $exam->subject;
        $course = $subject->course;
        $school = $course->school;

        $related_questions = Question::where('id', '>', $question->id)
            ->whereNot('question_type', 'List Selection')
            ->take(5)
            ->get(['question', 'url']);

        $subjects = Subject::with([
            'exam.questions' => fn ($query) => $query
                ->orderBy('id', 'asc')
                ->limit(1)
                ->select('id', 'exam_id', 'url'),
        ])
            ->with('exam')
            ->where('id', $subject->id)
            ->get();

        $subject_exams = Exam::with([
            'questions' => fn ($query) => $query->limit(1),
        ])
            ->where('subject_id', $subject->id)
            ->get();

        $course_exams = Subject::with([
            'exam.questions' => fn ($query) => $query->limit(1),
        ])
            ->where('course_id', $course->id)
            ->take(5)
            ->get();

        return view('questions.index', [
            'question' => $question,
            'related_questions' => $related_questions,
            'exam_name' => $exam->name,
            'school' => $school,
            'subject_slug' => $subject->slug,
            'questions_count' => '',
            'school_name' => $school->name,
            'subject_name' => $subject->name,
            'course_name' => $course->name,
            'subjects' => $subjects,
            'subject_exams' => $subject_exams,
            'course_exams' => $course_exams,
        ]);
    }
}
