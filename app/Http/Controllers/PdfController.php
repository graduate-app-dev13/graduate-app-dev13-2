<?php
//　申込書　確定書のpdf生成
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\School;
use App\Models\Matching;
use App\Models\Lesson;
use App\Models\LessonUserReservation;
use App\Models\User;
use App\Models\Company;
use Auth;
use TCPDF;
use TCPDF_FONTS;

// use setasign\Fpdi\TcpdfFpdi;


class PdfController extends Controller
{
    /**
     * pdfにする申し込み用紙をhtmlで作成
     * 画面に必要なデータを渡す
     */
    public function pdf($id)
    {
        //
        // LessonUserReservationsテーブルの$idの情報を取得 予約id
        $reserve = LessonUserReservation::find($id);
        //ログインしているユーザーの情報取得
        $teacher = auth()->user();
        //申し込みをする人に応じて学校データ取得 School
        $school = School::find($teacher->school_id);
        if (!$school) {
        return redirect()->back()->with('error', '学校の情報が見つかりませんでした。');
        }

        $lesson = Lesson::find($reserve->lesson_id);
        if (!$lesson) {
        return redirect()->back()->with('error', 'レッスンが見つかりませんでした。');
    }

        $company = Company::find($lesson->company_id);
        if (!$company) {
        return redirect()->back()->with('error', '会社の情報が見つかりませんでした。');
    }

        return response()->view('pdf.pdf',compact('lesson', 'school', 'teacher', 'reserve','company'));
    }
    /**
     * pdfにする（申し込み用紙）
     */
    public function output($id)
    {
        $reserve = LessonUserReservation::find($id);
        if (!$reserve) {
            return redirect()->back()->with('error', 'LessonUserReservation not found!');
        }

        $teacher = auth()->user();

        $school = School::find($teacher->school_id);
        if (!$school) {
        return redirect()->back()->with('error', '学校の情報が見つかりませんでした。');
        }

        $lesson = Lesson::find($reserve->lesson_id);
        if (!$lesson) {
        return redirect()->back()->with('error', 'レッスンが見つかりませんでした。');
        }

        $company = Company::find($lesson->company_id);
        if (!$company) {
        return redirect()->back()->with('error', '会社の情報が見つかりませんでした。');
        }

         //すべてのレコードが見つかった場合の処理
        if ($reserve && $teacher && $school && $lesson && $company) {
            //pdfにする
            // $pdf = \TcpdfFpdi::loadView('pdf.pdf', [
            //     'reserve' => $reserve,
            //     'lesson' => $lesson,
            //     'school' => $school,
            //     'teacher' => $teacher,
            //     'company' => $company,
            //     ]);
            // // ->setOptions(['font-family' => 'ipag']);

            // $pdf->setPaper('A4');
            // $pdf->setOption('isPhpEnabled', true);
            // return $pdf->stream();

            // $pdf = new TCPDF();
            // $pdf->AddPage();
            // $pdf->SetFont('helvetica', '', 12);
            // $pdf->Cell(0, 10, 'Hello TCPDF!', 0, 1);
            // return $pdf->Output('hello_world.pdf', 'I');

            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Your Application');
            $pdf->SetTitle('予約詳細');
            $pdf->SetSubject('予約情報');
            $pdf->SetKeywords('予約, レッスン, 学校');
            $pdf->AddPage();

            // $pdf->AddFont('ipag', '', 'ipag.ttf', true);
            // $pdf->SetFont('ipag', '', 12);

            $fontPath = storage_path('fonts/ipag.ttf');
            $fontname = TCPDF_FONTS::addTTFfont($fontPath, 'TrueTypeUnicode', '', 32);

            if ($fontname === false) {
                die('Error: Could not include font definition file: ipag');
            }
            $pdf->SetFont($fontname, '', 12);

            // $pdf->SetFont('helvetica', '', 12);
            // $pdf->Cell(0, 10, 'Hello, TCPDF!', 0, 1);

            // $html = '<h1>Welcome to TCPDF</h1>
            // <p>This is a <b>sample</b> paragraph.</p>';
                // コンテンツの追加
            $html = "
            <h1>予約詳細</h1>
            <table>
                <tr><th>予約ID</th><td>{$reserve->id}</td></tr>
                <tr><th>レッスン</th><td>{$lesson->name}</td></tr>
                <tr><th>学校</th><td>{$school->name}</td></tr>
                <tr><th>講師</th><td>{$teacher->name}</td></tr>
                <tr><th>会社</th><td>{$company->name}</td></tr>
            </table>
            ";

            $pdf->writeHTML($html, true, false, true, false, '');

            return $pdf->Output('example.pdf', 'I');

        } else {
            return abort(404);
        }
    }

    /**
     * pdfにする授業確定書をhtmlで作成
     * 画面に必要なデータを渡す
     */
    public function matchingpdf($id)
    {
        $matching = Matching::find($id);
          if (!$matching) {
            return redirect()->back()->with('error', 'Matching not found!');
        }

        $reserveId = $matching->lesson_user_reservations_id;

        $lessonuserreservation = LessonUserReservation::find($reserveId);
        if (!$lessonuserreservation) {
            return redirect()->back()->with('error', 'LessonUserReservation not found!');
        }

        $lesson = Lesson::find( $lessonuserreservation->lesson_id);
        if (!$lesson) {
            return redirect()->back()->with('error', 'Lesson not found!');
        }

        $user = User::find($lessonuserreservation->user_id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        $company = Company::find( $lesson->company_id);

        if (!$company) {
            return redirect()->back()->with('error', 'Company not found!');
        }

        $school = School::find($user->school_id);
        if (!$school) {
            return redirect()->back()->with('error', 'School not found!');
        }

            return response()->view('pdf.matchingpdf',compact('matching','lesson','user','company','school','lessonuserreservation'));
    }

    /**
     * pdfにする（授業確定書）
     */
    public function matchingoutput($id)
    {
        // routeで渡されたid番号のMatchingモデルの中のreserve_idを取得
        $matching = Matching::find($id);
        if (!$matching) {
            // エラー
            return redirect()->back()->with('error', 'Matching not found!');
        }

        $reserveId = $matching->lesson_user_reservations_id;

        // LessonUserReservationモデルから対応するレコードを取得
        $lessonuserreservation = LessonUserReservation::find($reserveId);
        if (!$lessonuserreservation) {
            // エラー
            return redirect()->back()->with('error', 'LessonUserReservation not found!');
        }

        // 取得したreserve_idのカラムのlesson_idに合わせて、Lessonモデルの情報を取得
        $lesson = Lesson::find($lessonuserreservation->lesson_id);
        if (!$lesson) {
            // エラー
            return redirect()->back()->with('error', 'Lesson not found!');
        }

        // 取得したreserve_idのuser_idに合わせて、Userモデルの情報を取得
        $user = User::find($lessonuserreservation->user_id);
        if (!$user) {
            // エラー
            return redirect()->back()->with('error', 'User not found!');
        }

        // 取得したlesson_idのカラムcompany_idに合わせてCompanyモデルの情報の取得
        $company = Company::find( $lesson->company_id);

        if (!$company) {
            // エラー
            return redirect()->back()->with('error', 'Company not found!');
        }

        // 申し込みをする人に応じて学校データ取得
        $school = School::find($user->school_id);

        if (!$school) {
        // エラー
        return redirect()->back()->with('error', 'School not found!');
        }

        // すべてのレコードが見つかった場合の処理
        if ($matching && $user && $school && $lesson && $company) {
            //pdf.matchingpdfのviewをpdfにする
            $pdf = \PDF::loadView('pdf.matchingpdf',[
                'matching' => $matching,
                'lesson' => $lesson,
                'school' => $school,
                'user' => $user,
                'company' => $company,
                'lessonuserreservation'=>$lessonuserreservation
            ]);
            // ->setOptions(['font-family' => 'ipag']);

            $pdf->setPaper('A4');
            $pdf->setOption('isPhpEnabled', true);
            return $pdf->stream();
        } else {
            // レコードが見つからない場合
            return abort(404); //エラーページを表示
        }
    }
}
