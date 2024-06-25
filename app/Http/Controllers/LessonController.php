<?php
//LessonController.php
//授業crud
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Lesson;
use App\Models\Company;

class LessonController extends Controller
{
    /**
     * 授業の登録管理（管理者）
     */
    public function lessonmenu()
    {
        return response()->view('lesson.lessonmenu');
    }
    /**
     * 授業の一覧（ユーザー）
     */
    public function index()
    {
        $lessons = Lesson::getAllOrderByUpdated_at()->paginate(10)->setPageName('lessonIndex');
        return response()->view('lesson.index', compact('lessons'));
    }
    /**
     * //授業の登録画面(管理者)
     */
    public function create()
    {
        $companies = Company::all();
        return response()->view('lesson.create', compact('companies'));
    }
    /**
     * //授業の登録処理
     */
    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'lesson_name' => 'required|max:191',
            'lesson_detail' => 'required',
            'lesson_type' => 'required|in:対面,オンライン',
            'supports_career_edu' => 'boolean',
            'japanease' => 'boolean',
            'math' =>  'boolean',
            'society' =>  'boolean',
            'science' =>  'boolean',
            'english' =>  'boolean',
            'music' =>  'boolean',
            'art_and_crafts' =>  'boolean',
            'home_economics' =>  'boolean',
            'physical_education' =>  'boolean',
            'life_skills' =>  'boolean',
            'ethics' =>  'boolean',
            'integrated_studies' =>  'boolean',
            'special_activities' =>  'boolean',
            'club_activities' =>  'boolean',
            'one' => 'boolean',
            'two' =>  'boolean',
            'three' =>  'boolean',
            'four' =>  'boolean',
            'five' =>  'boolean',
            'six' =>  'boolean',
            'seven' =>  'boolean',
            'started_date' => 'required|date',
            'finished_date' => 'required|date',
        ]);

        // supports_career_edu がリクエストデータに存在しない場合、0 を設定
        if (!$request->has('supports_career_edu')) {
            $request->merge(['supports_career_edu' => 0]);
        }

        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('lesson.create')
                ->withInput()
                ->withErrors($validator);
        }

        $result = Lesson::create($request->all());

        return redirect()->route('lesson.index');
    }
    /**
     * 授業の詳細表示
     */
    public function show(string $id)
    {
        $lesson = Lesson::where('id',$id)
        ->with('company');

        return view('lesson.show', compact('lesson'));
    }
    /**
     * 授業情報の更新画面
     */
    public function edit(string $id)
    {
        $lesson = Lesson::find($id);
        return view('lesson.edit', compact('lesson'));
    }
    /**
     * 授業登録内容の更新（管理者）
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'lesson_name' => 'required|max:191',
            'lesson_detail' => 'required',
            'lesson_type' => 'required|in:対面,オンライン',
            'supports_career_edu' => 'boolean',
            'japanease' => 'boolean',
            'math' =>  'boolean',
            'society' =>  'boolean',
            'science' =>  'boolean',
            'english' =>  'boolean',
            'music' =>  'boolean',
            'art_and_crafts' =>  'boolean',
            'home_economics' =>  'boolean',
            'physical_education' =>  'boolean',
            'life_skills' =>  'boolean',
            'ethics' =>  'boolean',
            'integrated_studies' =>  'boolean',
            'special_activities' =>  'boolean',
            'club_activities' =>  'boolean',
            'one' => 'boolean',
            'two' =>  'boolean',
            'three' =>  'boolean',
            'four' =>  'boolean',
            'five' =>  'boolean',
            'six' =>  'boolean',
            'seven' =>  'boolean',
            'started_date' => 'required|date',
            'finished_date' => 'required|date',
        ]);
        $lesson = Lesson::find($id);
        $lesson->update($validatedData);

        return redirect()->route('lesson.index');
    }
    /**
     * 授業情報の削除
     */
    public function destroy(string $id)
    {
        Lesson::find($id)->delete();
        return redirect()->route('lesson.index');
    }
}
