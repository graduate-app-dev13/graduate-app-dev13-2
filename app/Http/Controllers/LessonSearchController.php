<?php
// LessonSearchController.php
// 授業検索　ユーザー
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Company;

class LessonSearchController extends Controller
{
    /**
     * 検索結果の表示
     */
    public function index(Request $request)
    {
        $query = Lesson::query();

        // 学年と教科の選択を取得
        $grade = $request->input('grade');
        $subject = $request->input('subject');
        $education = $request->input('education');

        // 学年と教科の選択に応じてクエリを組み立てる
        if (!empty($grade)) {
            $query->where($grade, true);
        }

        if (!empty($subject)) {
            $query->where($subject, true);
        }

        if (!empty($education)) {
            $query->where($education, true);
        }

        $lessons = $query->get();

        return view('search.index', ['lessons' => $lessons]);
    }

    /**
     * 検索入力画面の表示
     */
    public function input()
    {
        //検索画面への移動
        return response()->view('search.input');
    }

    /**
     * //検索した授業の詳細表示
     */
    public function show(string $id)
    {
        // idに一致するレコードを取得
        $lesson = Lesson::find($id);

        $company = Company::find($lesson->company_id);

        // ビューにデータを渡す
        return view('search.show',
            [
            'lesson' => $lesson,
            'company'=>$company
            ]);
    }
}
