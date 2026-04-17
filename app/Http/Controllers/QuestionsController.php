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
        $examRecord = Exam::where('slug', $exam)->first(['id', 'name']);

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
     
        return view('library.exam.questions', compact('question', 'questions_count', 'subject_slug', 'school','school_name','subject_name','course_name','exam_name','school_slug','course_slug','exam_slug'));
    }

    public function examAnswers(Request $request): JsonResponse
    {
        $data = $request->validate([
            'question_id' => 'required',
            'user_answer' => 'required',
            'exam_id' => 'required',
        ]);

        $questions = Question::where('exam_id', $data['exam_id'])->get();

        foreach ($questions as $key => $question) {
            if ($question['id'] == $data['question_id']) {
                if ($data['user_answer'] == $question['correct_answer']) {
                    return response()->json([
                        'status' => 'correct',
                        'rationale' => $question['rationale'],
                    ]);
                } else {
                    return response()->json([
                        'status' => 'wrong',
                        'correct_answer' => $question['correct_answer'],
                        'rationale' => $question['rationale'],
                    ]);
                }
            }
        }

        return response()->json([
            'message' => 'invalid',
        ]);
    }

    public function nextQuestion(int $questionId)
    {

        $current = Question::find($questionId);

        $question = Question::where('exam_id', $current->exam_id)
            ->where('id', '>', $current->id)
            ->orderBy('id', 'asc')
            ->first();
        if ($question == null) {
            return response()->json(['message' => 'No more questions'], 200);
        }
        return response()->json($question);

    }
}
