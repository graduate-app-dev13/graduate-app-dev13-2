<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// LessonSearch 授業検索
use App\Http\Controllers\LessonSearchController;
//DomPDF　予約　申込書 授業確定書　PDFの生成
use App\Http\Controllers\PdfController;
//Reserve 授業予約
use App\Http\Controllers\ReserveController;
//Inquiry 問い合わせ
use App\Http\Controllers\InquiryController;
// WatchLater　あとでみる
use App\Http\Controllers\WatchLaterController;

//admin login　管理者のログイン
use App\Http\Controllers\LoginController;
//admin lesson 授業情報のcrud
use App\Http\Controllers\LessonController;
//admin company 会社企業情報crud
use App\Http\Controllers\CompanyController;
//admin matching 予約内容の管理
use App\Http\Controllers\MatchingController;
//admin mail mailの内容管理
use App\Http\Controllers\MailController;
//admin email mail通知
use App\Http\Controllers\InvoiceMailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 管理者の機能===============================================
    //admin 管理者のログイン・ログアウト
    Route::get('/admin/login', function () {
          return view('admin/adminLogin');
    })->middleware('guest:admin');

    Route::post('/admin/login', [\App\Http\Controllers\LoginController::class, 'adminLogin'])->name('admin.login');
    Route::get('/admin/logout', [\App\Http\Controllers\LoginController::class, 'adminLogout'])->name('admin.logout');
// 管理者のみの機能------------------------------------------
Route::middleware('admin_users')->group(function () {

    //ログイン時表示
    Route::get('/admin/dashboard', function () {
           return view('admin.dashboard');
    })->middleware('auth:admin')->name('admin.dashboard');

    //予約一覧
    Route::get('/admin/reserve/index',[ReserveController::class, 'adminIndex'])->name('admin.reserve.index');

    //授業情報の登録
    Route::get('/admin/lesson/create', [LessonController::class, 'create'])->name('admin.lesson.create');
    Route::get('/admin/lesson/index', [LessonController::class, 'index'])->name('admin.lesson.index');
    Route::get('/admin/lesson/lessonmenu', [LessonController::class, 'lessonmenu'])->name('admin.lesson.lessonmenu');
    Route::resource('/admin/lesson', LessonController::class);
    
    //授業予約の成立管理
    Route::get('/admin/matching/create/{id}', [MatchingController::class, 'create'])->name('admin.matching.create');
    Route::get('/admin/matching/check/{id}', [MatchingController::class, 'check'])->name('admin.matching.check');
    Route::get('/admin/matching/finish/{id}', [MatchingController::class, 'finish'])->name('admin.matching.finish');
    Route::get('/admin/matching/show', [MatchingController::class, 'show'])->name('admin.matching.show');
    Route::get('/admin/matching/index', [MatchingController::class, 'index'])->name('admin.matching.index');
    Route::resource('/admin/matching', MatchingController::class);
    
    //問い合わせ一覧
    Route::get('/inquiry/index', [InquiryController::class, 'index'])->name('inquiry.index');

    //mail機能
    Route::get('/admin/mailpost', [MailController::class, 'mailPost'])->name('admin.mailpost');
    Route::get('/admin/mail/send/{id}', [InvoiceMailController::class, 'send'])->name('admin.mail.send');
    
    //企業情報の登録
    Route::get('/admin/company/registar', [CompanyController::class, 'create'])->name('admin.company.registar');
    Route::get('/admin/company/index', [CompanyController::class, 'index'])->name('admin.company.index');
    Route::get('/admin/company/edit', [CompanyController::class, 'edit'])->name('admin.company.edit');
    Route::resource('/admin/company', CompanyController::class);
});

    //pdf matching 書類の作成
    Route::get('/pdf/matching/pdf/{id}', [PdfController::class, 'matchingpdf'])->name('pdf.matching.pdf');
    Route::get('/pdf/matching/output/{id}', [PdfController::class, 'matchingoutput'])->name('pdf.matching.output');
//ここまでが管理者の機能===============================================================

// ユーザーのみの機能===============================================================
//userのloginがないと使えない
Route::middleware('auth')->group(function () {

    //reserve 授業の予約
    Route::get('/reserve/input/{id}',[ReserveController::class, 'input'])->name('reserve.input');
    Route::get('/reserve/finish/{id}',[ReserveController::class, 'finish'])->name('reserve.finish');
    Route::get('/reserve/show/{id}',[ReserveController::class, 'show'])->name('reserve.show');
    Route::get('/reserve/.destory/{id}',[ReserveController::class, 'destory'])->name('reserve.destory');
    Route::get('/reserve/edit/{id}',[ReserveController::class, 'edit'])->name('reserve.edit');
    Route::get('userreserve',[ReserveController::class, 'userreserve'])->name('reserve.userreserve');
    Route::get('schoolreserve',[ReserveController::class, 'schoolreserve'])->name('reserve.schoolreserve');
    Route::resource('/reserve', ReserveController::class);
    
    //申込書のpdf書類作成
    Route::get('/pdf/pdf/{id}', [PdfController::class, 'pdf'])->name('pdf.pdf');
    Route::get('/pdf/output/{id}', [PdfController::class, 'output'])->name('pdf.output');
    
    //問い合わせ
    Route::get('/inquiry/input/{id}', [InquiryController::class, 'create'])->name('inquiry.input');
    Route::post('/inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');
    Route::get('/inquiry/check/{id}', [InquiryController::class, 'check'])->name('inquiry.check');
    Route::put('inquiry/{id}', [InquiryController::class, 'update'])->name('inquiry.update');
    Route::get('/inquiry/finish', [InquiryController::class, 'finish'])->name('inquiry.finish');
    Route::get('/inquiry/destroy/{id}', [InquiryController::class, 'destroy'])->name('inquiry.destroy');
    Route::get('/inquiry/update/{id}', [InquiryController::class, 'update'])->name('inquiry.update');
    Route::get('/inquiry/edit/{id}', [InquiryController::class, 'edit'])->name('inquiry.edit');
    Route::get('/inquiry/show/{id}', [InquiryController::class, 'show'])->name('inquiry.show');
    // Route::get('/inquiry/index', [InquiryController::class, 'index'])->name('inquiry.index');
    // Route::resource('/inquiry',InquiryController::class);
    
    //授業をあとでみる
    Route::post('/lesson/{lesson}/watchlater', [WatchLaterController::class, 'store'])->name('watchlater');
    Route::post('/lesson/{lesson}/unwatchlater', [WatchLaterController::class, 'destroy'])->name('unwatchlater');
    Route::get('/watchlater/index', [WatchLaterController::class, 'index'])->name('watchlater.index');

    //プロフィールの編集
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// //一覧表示のテスト画面＝＞本番では使わない
// Route::get('/testindex', [ReserveController::class, 'testindex'])->name('reserve.testindex');
//ユーザーのみの機能=======================================================================================

// ===// ログインなしでもみることができる==================================================================

    // LessonSearch 授業検索
    Route::get('/search/input', [LessonSearchController::class, 'input'])->name('search.input');
    Route::get('/search/index', [LessonSearchController::class, 'index'])->name('search.index');
    Route::get('/search/create', [LessonSearchController::class, 'create'])->name('search.create');
    Route::get('/search/show/{id}', [LessonSearchController::class, 'show'])->name('search.show');
    Route::resource('/search', LessonSearchController::class);

//topページ
Route::get('/top', function () {
    return view('top');
})->name('top');
Route::get('/', function () {
    return view('top');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
