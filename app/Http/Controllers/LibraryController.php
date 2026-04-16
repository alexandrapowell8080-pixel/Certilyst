<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\school;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LibraryController extends Controller
{
    public $questions = [
        [
            'id' => 1,
            'question' => 'What is the capital city of Kenya?',
            'choiceA' => 'Mombasa',
            'choiceB' => 'Nairobi',
            'choiceC' => 'Kisumu',
            'choiceD' => 'Nakuru',
            'correct_answer' => 'B',
            'rationale' => 'Nairobi is the capital and largest city of Kenya.',
            'study_coach' => "Focus on national capitals. Nairobi is both Kenya's capital and its main economic hub.",
            'study_tip' => 'Use flashcards to memorize capitals of African countries.',
            'study_hint' => "Think of Kenya's largest business and political city.",
        ],
        [
            'id' => 2,
            'question' => 'Which planet is known as the Red Planet?',
            'choiceA' => 'Earth',
            'choiceB' => 'Venus',
            'choiceC' => 'Mars',
            'choiceD' => 'Jupiter',
            'correct_answer' => 'C',
            'rationale' => 'Mars appears red due to iron oxide on its surface.',
            'study_coach' => 'Remember key planetary nicknames. Mars = Red Planet because of iron-rich dust.',
            'study_tip' => 'Associate planets with visuals to improve memory retention.',
            'study_hint' => 'Look for the planet that looks reddish in the night sky.',
        ],
        [
            'id' => 3,
            'question' => 'What is the chemical symbol for water?',
            'choiceA' => 'O2',
            'choiceB' => 'H2O',
            'choiceC' => 'CO2',
            'choiceD' => 'NaCl',
            'correct_answer' => 'B',
            'rationale' => 'Water is made of two hydrogen atoms and one oxygen atom.',
            'study_coach' => 'Memorize common chemical compounds. H2O is fundamental in chemistry.',
            'study_tip' => 'Break chemical formulas into parts to understand them better.',
            'study_hint' => 'It always contains hydrogen and oxygen in a 2:1 ratio.',
        ],
        [
            'id' => 4,
            'question' => "Who wrote 'Romeo and Juliet'?",
            'choiceA' => 'Charles Dickens',
            'choiceB' => 'William Shakespeare',
            'choiceC' => 'Jane Austen',
            'choiceD' => 'Mark Twain',
            'correct_answer' => 'B',
            'rationale' => "William Shakespeare wrote the famous play 'Romeo and Juliet'.",
            'study_coach' => 'Shakespeare is essential in English literature exams.',
            'study_tip' => 'Read summaries of classic plays instead of full texts when revising.',
            'study_hint' => 'He is a famous English playwright from the Elizabethan era.',
        ],
        [
            'id' => 5,
            'question' => 'What is 9 x 7?',
            'choiceA' => '56',
            'choiceB' => '63',
            'choiceC' => '72',
            'choiceD' => '49',
            'correct_answer' => 'B',
            'rationale' => '9 multiplied by 7 equals 63.',
            'study_coach' => 'Practice multiplication tables regularly.',
            'study_tip' => 'Use repetition drills for faster mental math.',
            'study_hint' => 'Think of 9 groups of 7 or 7 groups of 9.',
        ],
        [
            'id' => 6,
            'question' => 'Which gas do plants absorb during photosynthesis?',
            'choiceA' => 'Oxygen',
            'choiceB' => 'Nitrogen',
            'choiceC' => 'Carbon dioxide',
            'choiceD' => 'Hydrogen',
            'correct_answer' => 'C',
            'rationale' => 'Plants use carbon dioxide to produce food.',
            'study_coach' => 'Understand the process of photosynthesis step by step.',
            'study_tip' => 'Draw diagrams of photosynthesis to remember better.',
            'study_hint' => 'It is the gas we exhale when breathing.',
        ],
        [
            'id' => 7,
            'question' => 'Which continent is the Sahara Desert located in?',
            'choiceA' => 'Asia',
            'choiceB' => 'Africa',
            'choiceC' => 'Australia',
            'choiceD' => 'South America',
            'correct_answer' => 'B',
            'rationale' => 'The Sahara Desert is in northern Africa.',
            'study_coach' => 'Learn major deserts and their locations.',
            'study_tip' => 'Use world maps frequently during revision.',
            'study_hint' => 'It is the same continent as the Nile River.',
        ],
        [
            'id' => 8,
            'question' => 'What is the boiling point of water at sea level?',
            'choiceA' => '90°C',
            'choiceB' => '100°C',
            'choiceC' => '110°C',
            'choiceD' => '120°C',
            'correct_answer' => 'B',
            'rationale' => 'Water boils at 100°C under normal atmospheric pressure.',
            'study_coach' => 'This is a key physics fact for exams.',
            'study_tip' => 'Group science constants together for easier memorization.',
            'study_hint' => 'It is a standard physics constant at normal pressure.',
        ],
        [
            'id' => 9,
            'question' => 'Which organ pumps blood in the human body?',
            'choiceA' => 'Lungs',
            'choiceB' => 'Brain',
            'choiceC' => 'Heart',
            'choiceD' => 'Liver',
            'correct_answer' => 'C',
            'rationale' => 'The heart circulates blood throughout the body.',
            'study_coach' => 'Understand major organ functions clearly.',
            'study_tip' => 'Use labeled diagrams of the human body when studying.',
            'study_hint' => 'It beats continuously to circulate blood.',
        ],
        [
            'id' => 10,
            'question' => 'Which language is used for styling web pages?',
            'choiceA' => 'HTML',
            'choiceB' => 'Python',
            'choiceC' => 'CSS',
            'choiceD' => 'PHP',
            'correct_answer' => 'C',
            'rationale' => 'CSS is used to style and design web pages.',
            'study_coach' => 'HTML structures content, CSS styles it, JS adds behavior.',
            'study_tip' => 'Build small web pages to practice HTML and CSS together.',
            'study_hint' => 'It controls colors, layouts, and design of web pages.',
        ],
    ];

    /**
     * Libary Page
     */
    public function index(): View
    {
        $schools = school::with('course.subject.exam')->get();

        return view('library.index', compact('schools'));
    }


    /**
     * Question with the related flashcard
     *
     * @param string $school
     * @param string $course
     * @param string $exam
     * @return View
     */
    public function questions(string $school, string $course, string $exam): View
    {
        $questions = $this->questions;
        $questions_count = count($questions);
        $question = $questions[0];

        // Flashcard by exam
        $currentExam = Exam::with('subject')->where('slug', $exam)->firstOrFail();
     
        $subject_slug = $currentExam->subject->slug;

        return view('library.exam.questions', compact('question', 'questions_count', 'subject_slug', 'school'));
    }

    public function examAnswers(Request $request): JsonResponse
    {
        $data = $request->validate([
            'question_id' => 'required',
            'user_answer' => 'required',
        ]);

        foreach ($this->questions as $key => $value) {
            if ($value['id'] == $data['question_id']) {
                if ($data['user_answer'] == $value['correct_answer']) {
                    return response()->json([
                        'status' => 'correct',
                        'rationale' => $value['rationale'],
                    ]);
                } else {
                    return response()->json([
                        'status' => 'wrong',
                        'rationale' => $value['rationale'],
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

        $nextId = $questionId + 1;

        foreach ($this->questions as $question) {
            if ($question['id'] == $nextId) {
                return response()->json($question);
            }
        }

        return response()->json(['message' => 'No more questions'], 404);
    }
}
