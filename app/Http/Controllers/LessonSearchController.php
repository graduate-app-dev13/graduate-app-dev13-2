<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Lesson;
// 授業検索
class LessonSearchController extends Controller
{
    /**
     * 検索結果の表示(user)
     */
    public function index(Request $request)
    {
        $query = Lesson::query();

        // 学年と教科の選択
        $grade = $request->input('grade');
        $subject = $request->input('subject');
        $education = $request->input('education');

        if (!empty($grade)) {
            $query->where($grade, true);
        }

        if (!empty($subject)) {
            $query->where($subject, true);
        }

        if (!empty($education)) {
            $query->where($education, true);
        }

        $lessons = $query->paginate(10)->withPath();

        $Data = [
            'lessons' => $lessons,
        ];

        return view('search.search-index', $Data);
    }

    /**
     * 検索入力画面の表示（user)
     */
    public function input()
    {
        return response()->view('search.input');
    }

    /**
     * 授業詳細(user)
     */
    public function show(string $id)
    {
        $lesson = Lesson::with('company')->find($id);
        $educationTypes = Lesson::getEducationTypes();

        $Data = [
            'lesson' => $lesson,
            'educationTypes' => $educationTypes,
        ];

        return view('search.show', $Data);
    }
}
