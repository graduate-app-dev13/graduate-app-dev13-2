<?php
//InquiryController.php
//問い合わせ
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Models\School;
use App\Models\Teacher;
use App\Models\Lesson;
use App\Models\LessonUserInquiry;
use App\Models\Category;
use App\Models\User;
use App\Models\AdminUser;

//問い合わせ機能
class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //問い合わせ一覧
        $inquirys = LessonUserInquiry::getAllOrderByUpdated_at();
        return response()->view('inquiry.index',compact('inquirys'));
    }

    /**
     * Show the form for creating a new resource.//問い合わせを作成する画面
     */
    public function create($id)
    {
        //問い合わせを作成する画面
         //選択に応じて授業データ取得
        $lesson = Lesson::find($id);
        //ログインしているユーザーの情報取得
        $teacher = auth()->user();
        //申し込みをする人に応じて学校データ取得
        $school = School::find($teacher->school_id);

        // データが見つかった場合
        if ($lesson) {
            // ビューにデータを渡して表示
            return view('inquiry.input', [
                'lesson' => $lesson,
                'school' => $school,
                'teacher' => $teacher,
            ]);
        } else {
            //データが見つからない場合、カスタムエラーページを表示する
            return response()->view('errors.403', [], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //問い合わせを保存
        // db登録
        $user_id = auth()->user()->id;

        //フォームから送信されたデータを取得
        $category_id = $request->input('category_id');
        $category = Category::find($category_id);
        $category_name = $category->category_name;

        $inquiry = LessonUserInquiry::create([
            //input.bladeで存在しているlesson_id
            'lesson_id' => $request->input('lesson_id'),
            'user_id' => $user_id,
            'category_id' => $category_id,
            'category_name' => $category_name,
            'inquiry_detail' => $request->input('inquiry_detail'),
        ]);

        // 確認画面にリダイレクト
        return redirect()->route('inquiry.check', ['id' => $inquiry->id]);

    }

    /**
     *
     *問い合わせ内容の確認（ユーザー）
     */
    public function check(string $id)
    {
        $inquiry = LessonUserInquiry::find($id);
        return response()->view('inquiry.check',['inquiry' =>  $inquiry]);
    }

    /**
     * 問い合わせの修正（ユーザー）
     */
    public function edit(string $id)
    {
        //問い合わせ内容の編集
                // LessonUserReservationsテーブルの$idの情報を取得
        $inquiry = LessonUserInquiry::find($id);
        //ログインしているユーザーの情報取得
        $teacher = auth()->user();
        //申し込みをする人に応じて学校データ取得
        $school = School::find($teacher->school_id);
        $lesson = Lesson::find($inquiry->lesson_id);

        return response()->view('inquiry.edit', [
            'inquiry' => $inquiry,
            'lesson' => $lesson,
            'school' => $school,
            'teacher' => $teacher,
        ]);
    }

    /**
     * 問い合わせ内容の修正（ユーザー）
     */
    public function update(Request $request, string $id)
    {
        //問い合わせ内容の取得
        $inquiry = LessonUserInquiry::find($id);

        // カテゴリー情報の取得
        $category_id = $request->input('category_id');
        $category = Category::find($category_id);
        $category_name = $category->category_name;

        // 問い合わせ内容の更新
        $inquiry->update([
            'category_id' => $category_id,
            'category_name' => $category_name,
            'inquiry_detail' => $request->input('inquiry_detail'),
        ]);

        // 確認画面にリダイレクト
        return redirect()->route('inquiry.check' ,['id' => $inquiry->id]);
        // ['inquiry' => $inquiry->id]
    }

    /**
     * 問い合わせ内容のキャンセル・削除
     */
    public function destroy(string $id)
    {
        //lesson_user_reservationsのdbから削除
        $inquiry = LessonUserInquiry::find($id);
        $inquiry -> delete();

        return redirect()->view('top');
    }

    /**
     * 問い合わせ完了画面
     */
    public function finish()
    {
        return response()->view('inquiry.finish');
    }
}
