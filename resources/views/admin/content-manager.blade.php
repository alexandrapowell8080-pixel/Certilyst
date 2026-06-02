<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Content Manager</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        :root{
            --primary:#6a0dad;
            --primary-2:#9333ea;
            --accent:#ec4899;
            --bg:#f8fafc;
            --card:#ffffff;
            --line:#e5e7eb;
            --text:#0f172a;
            --muted:#64748b;
            --success:#15803d;
            --warning:#d97706;
            --danger:#dc2626;
            --shadow:0 10px 30px rgba(15,23,42,.08);
            --radius:18px;
        }

        *{box-sizing:border-box;margin:0;padding:0}

        body{
            font-family: Inter, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height:1.5;
        }

        .page{
            max-width: 1520px;
            margin: 0 auto;
            padding: 24px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:16px;
            margin-bottom:24px;
            flex-wrap:wrap;
        }

        .title-wrap h1{
            font-size: 28px;
            font-weight: 800;
        }

        .title-wrap p{
            color: var(--muted);
            font-size: 14px;
            margin-top: 4px;
        }

        .badge{
            display:inline-flex;
            align-items:center;
            gap:8px;
            background: linear-gradient(135deg,var(--primary),var(--accent));
            color:#fff;
            padding:8px 14px;
            border-radius:999px;
            font-size:13px;
            font-weight:700;
        }

        .alert{
            padding:14px 16px;
            border-radius:14px;
            margin-bottom:18px;
            font-size:14px;
            font-weight:600;
        }

        .alert-success{
            background:#dcfce7;
            color:#166534;
            border:1px solid #bbf7d0;
        }

        .alert-danger{
            background:#fee2e2;
            color:#991b1b;
            border:1px solid #fecaca;
        }

        .layout{
            display:grid;
            grid-template-columns: 310px 1fr;
            gap:24px;
        }

        .sidebar, .main-card{
            background: var(--card);
            border:1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .sidebar{
            padding:20px;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .sidebar h3{
            font-size:16px;
            margin-bottom:12px;
        }

        .filter-form{
            display:flex;
            flex-direction:column;
            gap:14px;
        }

        .label{
            font-size:13px;
            color:var(--muted);
            margin-bottom:6px;
            display:block;
            font-weight:600;
        }

        select, input[type="text"], textarea{
            width:100%;
            padding:12px 14px;
            border:1px solid var(--line);
            border-radius:12px;
            outline:none;
            background:#fff;
            font-size:14px;
        }

        select:focus, input[type="text"]:focus, textarea:focus{
            border-color: var(--primary-2);
            box-shadow: 0 0 0 3px rgba(147,51,234,.12);
        }

        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:8px;
            border:none;
            border-radius:12px;
            padding:12px 16px;
            cursor:pointer;
            font-size:14px;
            font-weight:700;
            text-decoration:none;
            transition:.2s ease;
        }

        .btn:hover{
            transform: translateY(-1px);
        }

        .btn-primary{
            background: linear-gradient(135deg,var(--primary),var(--primary-2));
            color:#fff;
        }

        .btn-secondary{
            background:#f3e8ff;
            color:var(--primary);
        }

        .btn-warning{
            background:#fff7ed;
            color:var(--warning);
        }

        .tab-buttons{
            display:flex;
            gap:10px;
            flex-wrap:wrap;
            margin-top:18px;
        }

        .tab-link{
            padding:10px 14px;
            border-radius:999px;
            text-decoration:none;
            font-size:13px;
            font-weight:700;
            border:1px solid var(--line);
            color:var(--muted);
            background:#fff;
        }

        .tab-link.active{
            background: linear-gradient(135deg,var(--primary),var(--accent));
            color:#fff;
            border-color:transparent;
        }

        .stats-box{
            margin-top:18px;
            display:grid;
            gap:10px;
        }

        .stat{
            border:1px solid var(--line);
            border-radius:14px;
            padding:12px 14px;
            background:#fafafa;
        }

        .stat .k{
            font-size:12px;
            color:var(--muted);
        }

        .stat .v{
            font-size:20px;
            font-weight:800;
            margin-top:4px;
        }

        .main-card{
            padding:20px;
        }

        .main-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:12px;
            margin-bottom:18px;
            flex-wrap:wrap;
        }

        .main-header h2{
            font-size:22px;
            font-weight:800;
        }

        .count-pill{
            background:#f3e8ff;
            color:var(--primary);
            padding:8px 12px;
            border-radius:999px;
            font-size:13px;
            font-weight:700;
        }

        .items{
            display:flex;
            flex-direction:column;
            gap:18px;
        }

        .item-card{
            border:1px solid var(--line);
            border-radius:18px;
            background:#fff;
            overflow:hidden;
        }

        .item-top{
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            gap:14px;
            padding:16px 18px;
            background:#fcfcff;
            border-bottom:1px solid var(--line);
            flex-wrap:wrap;
        }

        .item-number{
            width:40px;
            height:40px;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            background: linear-gradient(135deg,var(--primary),var(--accent));
            color:#fff;
            font-weight:800;
            flex-shrink:0;
        }

        .item-title-wrap{
            display:flex;
            gap:14px;
            align-items:flex-start;
            flex:1;
            min-width: 300px;
        }

        .item-meta{
            display:flex;
            flex-wrap:wrap;
            gap:8px;
            margin-top:6px;
        }

        .meta-pill{
            font-size:12px;
            padding:6px 10px;
            border-radius:999px;
            background:#f8fafc;
            border:1px solid var(--line);
            color:var(--muted);
            font-weight:700;
        }

        .meta-pill.marked{
            background:#fff7ed;
            color:var(--warning);
            border-color:#fdba74;
        }

        .item-actions{
            display:flex;
            gap:10px;
            flex-wrap:wrap;
        }

        .item-body{
            padding:18px;
        }

        .grid-2{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:14px;
        }

        .field{
            margin-bottom:14px;
        }

        .field textarea{
            min-height:88px;
            resize:vertical;
        }

        .field textarea.question-box{
            min-height:110px;
        }

        .submit-row{
            display:flex;
            justify-content:flex-end;
            gap:10px;
            margin-top:8px;
            flex-wrap:wrap;
        }

        .empty{
            padding:40px 20px;
            text-align:center;
            border:1px dashed var(--line);
            border-radius:18px;
            color:var(--muted);
            background:#fff;
        }

        .pagination-wrap{
            margin-top:22px;
        }

        .error-list{
            margin-top:8px;
            padding-left:18px;
        }

        .error-list li{
            font-size:14px;
        }

        .small-note{
            font-size:12px;
            color:var(--muted);
            margin-top:8px;
            line-height:1.5;
        }

        @media (max-width: 1100px){
            .layout{
                grid-template-columns: 1fr;
            }

            .sidebar{
                position: static;
            }
        }

        @media (max-width: 768px){
            .grid-2{
                grid-template-columns:1fr;
            }

            .item-title-wrap{
                min-width: unset;
            }

            .page{
                padding:14px;
            }

            .main-card,
            .sidebar{
                padding:14px;
            }
        }
    </style>
</head>
<body>
<div class="page">
    <div class="topbar">
        <div class="title-wrap">
            <h1>Admin Content Manager</h1>
            <p>Manage all questions and flashcards from one page.</p>
        </div>
        <div class="badge">Certilyst Admin</div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Please fix the following:</strong>
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="layout">
        <aside class="sidebar">
            <h3>Filters</h3>

            <form method="GET" action="{{ route('admin.content.manager') }}" class="filter-form">
                <input type="hidden" name="tab" value="{{ $tab }}">

                <div>
                    <label class="label">Search</label>
                    <input type="text" name="search" value="{{ $search }}" placeholder="Search content...">
                </div>

                <div>
                    <label class="label">Question Exam</label>
                    <select name="question_exam_id">
                        <option value="">All Exams</option>
                        @foreach($exams as $exam)
                            <option value="{{ $exam->id }}" {{ (string)$questionExamId === (string)$exam->id ? 'selected' : '' }}>
                                {{ $exam->name ?? ('Exam #' . $exam->id) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="label">Flashcard Subject</label>
                    <select name="flashcard_subject_id">
                        <option value="">All Subjects</option>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}" {{ (string)$flashcardSubjectId === (string)$subject->id ? 'selected' : '' }}>
                                {{ $subject->name ?? ('Subject #' . $subject->id) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Apply Filters</button>
                <a href="{{ route('admin.content.manager') }}" class="btn btn-secondary">Reset</a>
            </form>

            <div class="tab-buttons">
                <a
                    href="{{ route('admin.content.manager', ['question_exam_id' => $questionExamId, 'flashcard_subject_id' => $flashcardSubjectId, 'search' => $search, 'tab' => 'questions']) }}"
                    class="tab-link {{ $tab === 'questions' ? 'active' : '' }}"
                >
                    Questions
                </a>

                <a
                    href="{{ route('admin.content.manager', ['question_exam_id' => $questionExamId, 'flashcard_subject_id' => $flashcardSubjectId, 'search' => $search, 'tab' => 'flashcards']) }}"
                    class="tab-link {{ $tab === 'flashcards' ? 'active' : '' }}"
                >
                    Flashcards
                </a>
            </div>

            <div class="stats-box">
                <div class="stat">
                    <div class="k">Questions</div>
                    <div class="v">{{ $questions->total() }}</div>
                </div>

                <div class="stat">
                    <div class="k">Flashcards</div>
                    <div class="v">{{ $flashcards->total() }}</div>
                </div>
            </div>

            <div class="small-note">
                Flashcards use the existing <strong>is_hard</strong> field as the mark button.<br>
                Questions use <strong>is_marked</strong> only if that column exists in the database.
            </div>
        </aside>

        <main class="main-card">
            @if($tab === 'questions')
                <div class="main-header">
                    <h2>Questions</h2>
                    <div class="count-pill">{{ $questions->total() }} total</div>
                </div>

                @if($questions->count())
                    <div class="items">
                        @foreach($questions as $index => $question)
                            <div class="item-card">
                                <div class="item-top">
                                    <div class="item-title-wrap">
                                        <div class="item-number">
                                            {{ ($questions->firstItem() ?? 0) + $index }}
                                        </div>

                                        <div>
                                            <div style="font-weight:800;font-size:16px;">
                                                Question #{{ $question->id }}
                                            </div>

                                            <div class="item-meta">
                                                <span class="meta-pill">
                                                    Exam: {{ $question->exam->name ?? ('Exam #' . $question->exam_id) }}
                                                </span>

                                                <span class="meta-pill">
                                                    Correct: {{ $question->correct_answer ?? 'N/A' }}
                                                </span>

                                                @if($questionMarkingEnabled && $question->is_marked)
                                                    <span class="meta-pill marked">Marked</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-actions">
                                        @if($questionMarkingEnabled)
                                            <form method="POST" action="{{ route('admin.content.manager.questions.toggle-mark', $question) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn {{ $question->is_marked ? 'btn-warning' : 'btn-secondary' }}">
                                                    {{ $question->is_marked ? 'Unmark' : 'Mark' }}
                                                </button>
                                            </form>
                                        @else
                                            <span class="meta-pill">Marking not enabled</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="item-body">
                                    <form method="POST" action="{{ route('admin.content.manager.questions.update', $question) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="field">
                                            <label class="label">Exam</label>
                                            <select name="exam_id" required>
                                                @foreach($exams as $exam)
                                                    <option value="{{ $exam->id }}" {{ $question->exam_id == $exam->id ? 'selected' : '' }}>
                                                        {{ $exam->name ?? ('Exam #' . $exam->id) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label class="label">Question</label>
                                            <textarea name="question" class="question-box" required>{{ old('question', $question->question) }}</textarea>
                                        </div>

                                        <div class="grid-2">
                                            <div class="field">
                                                <label class="label">Choice A</label>
                                                <textarea name="choiceA">{{ old('choiceA', $question->choiceA) }}</textarea>
                                            </div>

                                            <div class="field">
                                                <label class="label">Choice B</label>
                                                <textarea name="choiceB">{{ old('choiceB', $question->choiceB) }}</textarea>
                                            </div>

                                            <div class="field">
                                                <label class="label">Choice C</label>
                                                <textarea name="choiceC">{{ old('choiceC', $question->choiceC) }}</textarea>
                                            </div>

                                            <div class="field">
                                                <label class="label">Choice D</label>
                                                <textarea name="choiceD">{{ old('choiceD', $question->choiceD) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="grid-2">
                                            <div class="field">
                                                <label class="label">Correct Answer</label>
                                                <select name="correct_answer" required>
                                                    <option value="A" {{ $question->correct_answer === 'A' ? 'selected' : '' }}>A</option>
                                                    <option value="B" {{ $question->correct_answer === 'B' ? 'selected' : '' }}>B</option>
                                                    <option value="C" {{ $question->correct_answer === 'C' ? 'selected' : '' }}>C</option>
                                                    <option value="D" {{ $question->correct_answer === 'D' ? 'selected' : '' }}>D</option>
                                                </select>
                                            </div>

                                            @if($questionStudyHintEnabled)
                                                <div class="field">
                                                    <label class="label">Study Hint</label>
                                                    <textarea name="study_hint">{{ old('study_hint', $question->study_hint) }}</textarea>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <label class="label">Rationale</label>
                                            <textarea name="rationale">{{ old('rationale', $question->rationale) }}</textarea>
                                        </div>

                                        <div class="submit-row">
                                            <button type="submit" class="btn btn-primary">Update Question</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="pagination-wrap">
                        {{ $questions->links() }}
                    </div>
                @else
                    <div class="empty">
                        No questions found for this filter.
                    </div>
                @endif
            @endif

            @if($tab === 'flashcards')
                <div class="main-header">
                    <h2>Flashcards</h2>
                    <div class="count-pill">{{ $flashcards->total() }} total</div>
                </div>

                @if($flashcards->count())
                    <div class="items">
                        @foreach($flashcards as $index => $flashcard)
                            <div class="item-card">
                                <div class="item-top">
                                    <div class="item-title-wrap">
                                        <div class="item-number">
                                            {{ ($flashcards->firstItem() ?? 0) + $index }}
                                        </div>

                                        <div>
                                            <div style="font-weight:800;font-size:16px;">
                                                Flashcard #{{ $flashcard->id }}
                                            </div>

                                            <div class="item-meta">
                                                <span class="meta-pill">
                                                    Subject: {{ $flashcard->subject->name ?? ('Subject #' . $flashcard->subject_id) }}
                                                </span>

                                                @if($flashcard->is_hard)
                                                    <span class="meta-pill marked">Marked / Hard</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-actions">
                                        <form method="POST" action="{{ route('admin.content.manager.flashcards.toggle-mark', $flashcard) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn {{ $flashcard->is_hard ? 'btn-warning' : 'btn-secondary' }}">
                                                {{ $flashcard->is_hard ? 'Unmark' : 'Mark' }}
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="item-body">
                                    <form method="POST" action="{{ route('admin.content.manager.flashcards.update', $flashcard) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="field">
                                            <label class="label">Subject</label>
                                            <select name="subject_id" required>
                                                @foreach($subjects as $subject)
                                                    <option value="{{ $subject->id }}" {{ $flashcard->subject_id == $subject->id ? 'selected' : '' }}>
                                                        {{ $subject->name ?? ('Subject #' . $subject->id) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label class="label">Question / Front</label>
                                            <textarea name="question" class="question-box" required>{{ old('question', $flashcard->question) }}</textarea>
                                        </div>

                                        <div class="field">
                                            <label class="label">Answer / Back</label>
                                            <textarea name="answer" required>{{ old('answer', $flashcard->answer) }}</textarea>
                                        </div>

                                        <div class="field">
                                            <label class="label">Hint</label>
                                            <textarea name="hint">{{ old('hint', $flashcard->hint) }}</textarea>
                                        </div>

                                        <div class="submit-row">
                                            <button type="submit" class="btn btn-primary">Update Flashcard</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="pagination-wrap">
                        {{ $flashcards->links() }}
                    </div>
                @else
                    <div class="empty">
                        No flashcards found for this filter.
                    </div>
                @endif
            @endif
        </main>
    </div>
</div>
</body>
</html>