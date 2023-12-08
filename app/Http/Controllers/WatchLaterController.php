<?php
// お気に入り.  あとでみる機能
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Lesson;
use App\Models\User;

class WatchLaterController extends Controller
{
    /**
     * あとでみる一覧
     */
    public function index()
    {
        // ログインしているユーザーの情報を取得
        $user = Auth::user();
        // 中間テーブルでログインユーザーのidと紐づいいている Lesson の情報を取得
        $lessons = $user->lessons;

        return view('watchlater.index', ['lessons' => $lessons]);

    }

    /**
     * 登録
     */
    public function store(Lesson $lesson)
    {
        //あとでみるに保存する
        $lesson->users()->attach(Auth::id());
        return redirect()->back();
    }

    /**
     * 削除
     */
    public function destroy(Lesson $lesson)
    {
        //あとでみるを解除する
        $lesson->users()->detach(Auth::id());
        return redirect()->route('reserve.testindex');
    }
}
