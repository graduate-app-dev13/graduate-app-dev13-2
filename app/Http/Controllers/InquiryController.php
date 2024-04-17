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
        return response()->view('inquiry.index', compact('inquirys'));
    }

    /**
     * Show the form for creating a new resource.//問い合わせを作成する画面
     */
    public function create($id)
    {
        //問い合わせを作成する画面
        $lesson = Lesson::find($id);
        $teacher = auth()->user();
        $school = School::find($teacher->school_id);

        if ($lesson) {
            return view('inquiry.input', [
                'lesson' => $lesson,
                'school' => $school,
                'teacher' => $teacher,
            ]);
        } else {
            return response()->view('errors.403', [], 403);
        }
    }

    /**
     * 問い合わせ内容をdbに保存
     */
    public function store(Request $request)
    {
        try {
            $user_id = auth()->user()->id;
            $category_id = $request->input('category_id');
            $category = Category::find($category_id);
            $category_name = $category->category_name;

            $inquiry = LessonUserInquiry::create([
                'lesson_id' => $request->input('lesson_id'),
                'user_id' => $user_id,
                'category_id' => $category_id,
                'category_name' => $category_name,
                'inquiry_detail' => $request->input('inquiry_detail'),
            ]);
            return redirect()->route('inquiry.check', ['id' => $inquiry->id]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '問い合わせできませんでした。');
        }
    }
    /**
     *
     *問い合わせ内容の確認（ユーザー）
     */
    public function check(string $id)
    {
        $inquiry = LessonUserInquiry::find($id);
        return response()->view('inquiry.check', ['inquiry' =>  $inquiry]);
    }
    /**
     * 問い合わせの修正（ユーザー）
     */
    public function edit(string $id)
    {
        $inquiry = LessonUserInquiry::find($id);
        $teacher = auth()->user();
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
        $inquiry = LessonUserInquiry::find($id);
        $category_id = $request->input('category_id');
        $category = Category::find($category_id);
        $category_name = $category->category_name;

        $inquiry->update([
            'category_id' => $category_id,
            'category_name' => $category_name,
            'inquiry_detail' => $request->input('inquiry_detail'),
        ]);

        return redirect()->route('inquiry.check', ['id' => $inquiry->id]);
    }
    /**
     * 問い合わせ内容のキャンセル・削除
     */
    public function destroy(string $id)
    {
        $inquiry = LessonUserInquiry::find($id);
        $inquiry->delete();

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
