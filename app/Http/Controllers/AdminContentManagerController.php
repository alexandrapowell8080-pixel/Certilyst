<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Flashcard;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rule;

class AdminContentManagerController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->get('tab', 'questions');
        $questionExamId = $request->get('question_exam_id');
        $flashcardSubjectId = $request->get('flashcard_subject_id');
        $search = trim((string) $request->get('search', ''));

        $exams = Exam::orderBy('name')->get();
        $subjects = Subject::orderBy('name')->get();

        $questionMarkingEnabled = Schema::hasColumn('questions', 'is_marked');
        $questionStudyHintEnabled = Schema::hasColumn('questions', 'study_hint');

        $questionTypes = [
            'regular' => 'Regular',
            'single_choice' => 'Single Choice',
            'multiple_choice' => 'Multiple Choice',
            'true_false' => 'True / False',
            'fill_in_the_blank' => 'Fill in the Blank',
            'drag_and_drop' => 'Drag and Drop',
            'hotspot' => 'Hotspot',
            'case_study' => 'Case Study',
        ];

        $questions = Question::query()
            ->with('exam')
            ->when($questionExamId, function ($query) use ($questionExamId) {
                $query->where('exam_id', $questionExamId);
            })
            ->when($search, function ($query) use ($search) {
                $query->where(function ($sub) use ($search) {
                    $sub->where('question', 'like', "%{$search}%")
                        ->orWhere('choiceA', 'like', "%{$search}%")
                        ->orWhere('choiceB', 'like', "%{$search}%")
                        ->orWhere('choiceC', 'like', "%{$search}%")
                        ->orWhere('choiceD', 'like', "%{$search}%")
                        ->orWhere('correct_answer', 'like', "%{$search}%")
                        ->orWhere('question_type', 'like', "%{$search}%")
                        ->orWhere('rationale', 'like', "%{$search}%");
                });
            })
            ->orderBy('exam_id')
            ->orderBy('id')
            ->paginate(20, ['*'], 'questions_page')
            ->withQueryString();

        $flashcards = Flashcard::query()
            ->with('subject')
            ->when($flashcardSubjectId, function ($query) use ($flashcardSubjectId) {
                $query->where('subject_id', $flashcardSubjectId);
            })
            ->when($search, function ($query) use ($search) {
                $query->where(function ($sub) use ($search) {
                    $sub->where('question', 'like', "%{$search}%")
                        ->orWhere('answer', 'like', "%{$search}%")
                        ->orWhere('hint', 'like', "%{$search}%");
                });
            })
            ->orderBy('subject_id')
            ->orderBy('id')
            ->paginate(20, ['*'], 'flashcards_page')
            ->withQueryString();

        return view('admin.content-manager', compact(
            'tab',
            'search',
            'questionExamId',
            'flashcardSubjectId',
            'exams',
            'subjects',
            'questions',
            'flashcards',
            'questionMarkingEnabled',
            'questionStudyHintEnabled',
            'questionTypes'
        ));
    }

    public function updateQuestion(Request $request, Question $question)
    {
        $questionStudyHintEnabled = Schema::hasColumn('questions', 'study_hint');

        $rules = [
            'exam_id' => ['required', 'exists:exams,id'],
            'question' => ['required', 'string'],
            'choiceA' => ['nullable', 'string'],
            'choiceB' => ['nullable', 'string'],
            'choiceC' => ['nullable', 'string'],
            'choiceD' => ['nullable', 'string'],
            'correct_answer' => ['required', 'string', 'max:20'],
            'question_type' => [
                'required',
                Rule::in([
                    'regular',
                    'single_choice',
                    'multiple_choice',
                    'true_false',
                    'fill_in_the_blank',
                    'drag_and_drop',
                    'hotspot',
                    'case_study',
                ]),
            ],
            'rationale' => ['nullable', 'string'],
        ];

        if ($questionStudyHintEnabled) {
            $rules['study_hint'] = ['nullable', 'string'];
        }

        $validated = $request->validate($rules);

        $question->exam_id = $validated['exam_id'];
        $question->question = $validated['question'];
        $question->choiceA = $validated['choiceA'] ?? null;
        $question->choiceB = $validated['choiceB'] ?? null;
        $question->choiceC = $validated['choiceC'] ?? null;
        $question->choiceD = $validated['choiceD'] ?? null;
        $question->correct_answer = strtoupper(trim($validated['correct_answer']));
        $question->question_type = $validated['question_type'];
        $question->rationale = $validated['rationale'] ?? null;

        if ($questionStudyHintEnabled) {
            $question->study_hint = $validated['study_hint'] ?? null;
        }

        $question->save();

        return back()->with('success', "Question #{$question->id} updated successfully.");
    }

    public function toggleQuestionMark(Question $question)
    {
        if (!Schema::hasColumn('questions', 'is_marked')) {
            return back()->with('success', 'Question marking is not enabled yet. Add the is_marked column first.');
        }

        $question->is_marked = !((bool) $question->is_marked);
        $question->save();

        return back()->with('success', "Question #{$question->id} mark status updated.");
    }

    public function updateFlashcard(Request $request, Flashcard $flashcard)
    {
        $validated = $request->validate([
            'subject_id' => ['required', 'exists:subjects,id'],
            'question' => ['required', 'string'],
            'answer' => ['required', 'string'],
            'hint' => ['nullable', 'string'],
        ]);

        $flashcard->subject_id = $validated['subject_id'];
        $flashcard->question = $validated['question'];
        $flashcard->answer = $validated['answer'];
        $flashcard->hint = $validated['hint'] ?? null;
        $flashcard->save();

        return back()->with('success', "Flashcard #{$flashcard->id} updated successfully.");
    }

    public function toggleFlashcardMark(Flashcard $flashcard)
    {
        $flashcard->is_hard = !((bool) $flashcard->is_hard);
        $flashcard->save();

        return back()->with('success', "Flashcard #{$flashcard->id} hard/mark status updated.");
    }
}