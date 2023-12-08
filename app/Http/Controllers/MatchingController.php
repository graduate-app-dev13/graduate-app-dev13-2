<?php
// MatchingController.php
//管理者授業の予約確定処理
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\OrderShipped;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Mail;

use App\Models\LessonUserReservation;
use App\Models\Matching;

use Validator;
use Auth;

use App\Models\School;
use App\Models\Teacher;
use App\Models\Lesson;
use App\Models\Company;

use App\Models\User;




class MatchingController extends Controller
{
    /**
     * 予約完了の一覧
     */
    public function index()
    {
        $matchings=[];
        return view('matching.index', compact('matchings'));
    }

    /**
     * 予約確定処理
     */
    public function create($id)
    {
        // 送られたidに合わせて、LessonUserReservationで探す
        $reserve = LessonUserReservation::find($id);

         // reservesテーブルのlesson_idに合わせて、Lessonモデルの情報を取得
        $reserve->lesson = Lesson::find($reserve->lesson_id);

         // reservesテーブルのlesson_idに合わせて、Lessonモデルの情報を取得
        $reserve->company = Company::find($reserve->lesson->compnay_id);

         // reservesテーブルのuser_idに合わせて、Userモデルの情報を取得
        $reserve->user = User::find($reserve->user_id);

        // reservesテーブルのuser_idに合わせて、Userモデルが持っているschoolo-idの情報に合わせたSchoolの情報を取得
        $reserve->user->school = School::find($reserve->user->school_id);

        return view('matching.create', compact('reserve'));
    }

    /**
     * dbに登録　
     */
    public function store(Request $request)
    {

        $reserveId = $request->input('lesson_user_reservations_id');

        $matchingDateTime = $request->input('matching_date_time');

        // もし配列なら、最初の要素を取得
        if (is_array($matchingDateTime)) {
            $matchingDateTime = $matchingDateTime[0];
        }

        // " - " で分割して、開始時刻と終了時刻を取得
        $timeParts = explode(' - ', $matchingDateTime);
        if (count($timeParts) != 2) {
            return redirect()
                ->route('admin.matching.create', ['id' => $reserveId])
                ->withInput()
                ->withErrors(['matching_date_time' => '選択された日時のフォーマットが無効です。']);
        }

        $startTimeWithDate = $timeParts[0]; // "2023-10-14 12:44:00" の形式
        $endTimePart = $timeParts[1];   // "13:44:00" の形式

        // 分割して、日付部分と開始時刻を取得
        $dateAndStartTime = explode(' ', $startTimeWithDate);
        $datePart = $dateAndStartTime[0];
        $startTimePart = $dateAndStartTime[1];

        // 保存するデータを作成
        $data = [
            'lesson_user_reservations_id' => $reserveId,
            'matching_date' => $datePart,
            'start_time' => $startTimePart,
            'finish_time' => $endTimePart,
        ];

        // DBに保存
        $matching = Matching::create($data);

        if (!$matching) {
            return redirect()
                ->route('admin.matching.create', ['id' => $reserveId])
                ->withInput()
                ->withErrors(['database' => 'データの保存に失敗しました。']);
        }

        return redirect()->route('admin.matching.check', ['id' => $matching->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * 予約確定確認画面
     */
    public function check($id)
    {
        // matchingテーブルにあるLessonUserReservationのid
        $reserve = LessonUserReservation::find($id);
        return response()->view('matching.check',compact('id'));
    }

    /**
     * 予約確定完了画面
     */
    public function finish($id)
    {
        return response()->view('matching.finish',compact('id'));
    }
}
