<?php
//  Http/Controllers/ReserveController.php
//  授業の予約と管理　crud
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Auth;

use App\Models\School;
use App\Models\Teacher;
use App\Models\Lesson;
use App\Models\Company;
use App\Models\LessonUserReservation;
use App\Models\User;

class ReserveController extends Controller
{
    /**
     *  //予約情報一覧画面表示（管理者用）
     */
    public function adminIndex()
    {
        //reservesテーブルを全て取得
        $reserves = LessonUserReservation::getAllOrderByUpdated_at();

        foreach ($reserves as $reserve) {
            // reservesテーブルのlesson_idに合わせて、Lessonモデルの情報を取得
            $reserve->lesson = Lesson::find($reserve->lesson_id);

            // reservesテーブルのuser_idに合わせて、Userモデルの情報を取得
            $reserve->user = User::find($reserve->user_id);

            //// reservesテーブルのuser_idに合わせて、Userモデルのschool_idの情報を取得
            //、Userモデルのschool_idにあわせて、Schoolモデルの情報を取得
            $reserve->user->school = School::find($reserve->user->school_id);
        }

        return response()->view('reserve.index',compact('reserves'));

    }

    /**
     * /予約情報一覧画面表示(Userに合わせて)
     */
    public function userreserve()
    {

        $reservations = User::query()
            ->find(Auth::user()->id)
            ->userLessonUserReservations()
            ->orderBy('created_at','desc')
            ->get();

        $lesson_ids = $reservations->pluck('lesson_id');
        $lessons = Lesson::whereIn('id', $lesson_ids)->get();

        return response()->view('reserve.userreserve',['reservations' => $reservations,'lessons' => $lessons]);

    }

    /**
     * 認証されたユーザーの関連付けられた学校IDに基づいて予約履歴の一覧表示
     */
    public function schoolreserve()
    {
        // 認証されたユーザーの学校IDを取得します
        $schoolId = Auth::user()->school_id;

        // 学校IDに基づいて他のユーザーを取得します
        $userIds = User::where('school_id', $schoolId)->pluck('id');

         // 取得したユーザーIDを使用して予約を取得します
        $reservations = LessonUserReservation::whereIn('user_id', $userIds)
            ->with('lesson')
            ->orderBy('created_at', 'desc')
            ->get();

        // 取得した予約からレッスンIDを抽出し、該当するレッスンを取得します
        $lesson_ids = $reservations->pluck('lesson_id');
        $lessons = Lesson::whereIn('id', $lesson_ids)->get();

        // 予約とレッスンのデータを含むビューを返します
        return response()->view('reserve.schoolreserve', ['reservations' => $reservations, 'lessons' => $lessons]);
    }
    //授業の一覧画面テスト用
    public function testindex()
    {
        //授業一覧ページ（試し用)
        $lessons = Lesson::getAllOrderByUpdated_at();
        return response()->view('reserve.testindex',['lessons' => $lessons]);
    }
    /**
     *
     */
    public function input($id)
    {
        //選択に応じて授業データ取得
        $lesson = Lesson::find($id);
        //ログインしているユーザーの情報取得
        $user = auth()->user();
        //申し込みをする人に応じて学校データ取得
        $school = School::find($user->school_id);

        // $lessonデータが見つかった場合
        if ($lesson) {
            // ビューにデータを渡して表示
            return view('reserve.reserve-input', [
                'lesson' => $lesson,
                'school' => $school,
                'user' => $user,
            ]);
        } else {
            // $lessonデータが見つからない場合、エラーページ表示
            return response()->view('errors.403', [], 403);
        }
    }

    /**
     * 予約情報のDBへの登録
     */
    public function store(Request $request)
    {
       // バリデーション
        $rules = [
            'first_choice_date' => 'required|date',
            'first_choice_start_time' => 'required|date_format:H:i',
            'first_choice_end_time' => 'required|date_format:H:i',

            'second_choice_date' => 'required|date',
            'second_choice_start_time' => 'required|date_format:H:i',
            'second_choice_end_time' => 'required|date_format:H:i',

            'third_choice_date' => 'required|date',
            'third_choice_start_time' => 'required|date_format:H:i',
            'third_choice_end_time' => 'required|date_format:H:i',
        ];

        // 表示するメッセージ
        $messages = [
            'required' => ':attribute を入力してください。',
            'date' => ':attribute は日付形式で入力してください。',
            'date_format' => ':attribute は時間形式で入力してください。',
            'first_choice_date.required' => '第１授業希望日が入力してください。',
            'second_choice_date.required' => '第２授業希望日が入力してください。',
            'third_choice_date.required' => '第３授業希望日が入力してください。',
            'first_choice_start_time.required' => '第１授業希望日の開始時間を入力してください。',
            'first_choice_end_time.required' => '第１授業希望日の終了時間を入力してください。',
            'second_choice_start_time.required' => '第２授業希望日の開始時間を入力してください。',
            'second_choice_end_time.required' => '第２授業希望日の終了時間を入力してください。',
            'third_choice_start_time.required' => '第３授業希望日の開始時間を入力してください。',
            'third_choice_end_time.required' => '第３授業希望日の終了時間を入力してください。',
        ];

        // // バリデーションを実行
        $validator = Validator::make($request->all(), $rules, $messages);

        // バリデーションエラーがある場合
        if ($validator->fails()) {
             // 入力された情報を保持する
            return back()
                ->withErrors($validator)
                ->withInput();
        }


        // dbに登録　LessonUserReservation
        $user_id = auth()->user()->id;

        $reserve = LessonUserReservation::create([
            'user_id' => $user_id,
            'first_choice_date' => $request->first_choice_date,
            'first_choice_start_time' => $request->input('first_choice_start_time'),
            'first_choice_end_time' => $request->first_choice_end_time,
            'second_choice_date' => $request->second_choice_date,
            'second_choice_start_time' => $request->second_choice_start_time,
            'second_choice_end_time' => $request->second_choice_end_time,
            'third_choice_date'  => $request->third_choice_date,
            'third_choice_start_time' => $request->third_choice_start_time,
            'third_choice_end_time' => $request->third_choice_end_time,
            'number_student'=> $request->number_student,
            'graduate'=> $request->graduate,
            'subject'=> $request->subject,
            'lesson_id' => $request->lesson_id,//input.bladeで存在しているlesson_id
        ]);

        // 確認画面に移動
        return redirect()->route('reserve.show',['reserve' => $reserve->id]);
    }

    /**
     *予約の情報の確認画面
     */
    public function show($id)
    {
        // LessonUserReservationsテーブルの$idの情報を取得
        $reserve = LessonUserReservation::find($id);
        //ログインしているユーザーの情報取得
        $user = auth()->user();
        //申し込みをする人に応じて学校データ取得
        $school = School::find($user->school_id);

        // $reserveが見つからない場合のエラーハンドリング
        if (!$reserve) {
            return abort(404);
        }

        // LessonUserReservationsテーブルのidを指定のlesson_idの授業を情報をlessonsテーブルから取得
        $lesson = Lesson::find($reserve->lesson_id);
        $company = Company::find($lesson->company_id);

        // $lessonが見つからない場合のエラーハンドリング
        if (!$lesson) {
            return abort(404);
        }

        // reserve/show.blade ビューを表示
        return view('reserve.show', [
            'reserve' => $reserve,
            'lesson' => $lesson,
            'school' => $school,
            'user' => $user,
            'company' => $company,
        ]);
    }

    /**
     * 予約の終了画面
     */
     public function finish($id)
    {
        //予約の完了画面
        // LessonUserReservationsテーブルの$idの情報を取得
        $reserve = LessonUserReservation::find($id);

        if ($reserve) {
            // LessonUserReservationsテーブルのidを指定のlesson_idの授業を情報をlessonsテーブルから取得

            //reserve/show.bladeを表示する処理
            return response()->view('reserve.finish', ['reserve' => $reserve]);
        } else {
            // $lessonが見つからない場合のエラーハンドリング
            return abort(404);
        }
    }

    /**
     * 予約情報の再編集画面
     */
    public function edit(string $id)
    {
        //
        // LessonUserReservationsテーブルの$idの情報を取得
        $reserve = LessonUserReservation::find($id);
        //ログインしているユーザーの情報取得
        $teacher = auth()->user();
        //申し込みをする人に応じて学校データ取得
        $school = School::find($teacher->school_id);

        $lesson = Lesson::find($reserve->lesson_id);

        return response()->view('reserve.edit', [
            'reserve' => $reserve,
            'lesson' => $lesson,
            'school' => $school,
            'teacher' => $teacher,
        ]);
    }

    /**
     * 予約情報を修正後、dbに登録する
     */
    public function update(Request $request, $id)
    {
       // バリデーション
        $rules = [
            'first_choice_date' => 'required|date',
            // 'first_choice_time' => 'required',
            'second_choice_date' => 'required|date',
            // 'second_choice_time' => 'required',
            'third_choice_date' => 'required|date',
            // 'third_choice_time' => 'required',
        ];

        // バリデーションメッセージ
        $messages = [
            'required' => ':attribute を入力してください。',
            'first_choice_date.required' => '第１授業希望日が入力してください。',
            'second_choice_date.required' => '第２授業希望日が入力してください。',
            'third_choice_date.required' => '第３授業希望日が入力してください。',
            'date' => ':attribute は日付形式で入力してください。',
        ];

        // // バリデーション実行
        $validator = Validator::make($request->all(), $rules, $messages);

        // バリデーションエラーがある場合
        if ($validator->fails()) {
             // 入力された情報を保持する
            return route('reserve.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $result =  LessonUserReservation::find($id)->update($request->all());

        // 確認画面へ移動
        return redirect()->route('reserve.show',['reserve' => $reserve->id]);
    }

    /**
     *　予約の中止を行う処理
     */
    public function destroy($id)
    {
        //lesson_user_reservationsのdbから削除
        $reserve = LessonUserReservation::find($id);
        $reserve -> delete();

        return redirect()->route('dashboard');
    }
}
