<?php
//InvoiceMailController.php
//メール通知
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailForm;

use App\Models\Matching;
use App\Models\LessonUserReservation;
use App\Models\User;
use App\Models\School;

class InvoiceMailController extends Controller
{
    /**
     * メールの送信
     */
    public function send($id)
    {
        //Matchnigモデルのidに合わせてデータを取得
        $matching = Matching::find($id);

        //Userモデルの情報
        $reserve = LessonUserReservation::find($matching->lesson_user_reservations_id);

        //$reserveのuser_idに合わせて、Userモデルのidのデータ取得
        $user = User::find($reserve->user_id);
        $email = $user->email;
        $school = School::find($user->school_id);

        // メールの雛形
        $data = [
            'school_name' => $school->school_name .'小学校',
            'user_name' => $user->name .'様',
            'content' => '予約の内容は、以下の通りURLよりご確認いただけます。',
            'url' => 'https://tokidokineko.sakura.ne.jp/project/pdf/matching/output/'.$id
        ];

        Mail::to($email)->send(new MailForm($data));

        return redirect('/admin/dashboard');

    }
}
