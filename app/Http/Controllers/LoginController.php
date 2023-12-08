<?php
// LoginController.php
// 管理者ログイン
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    //
     /**
     * 認証の処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([ // 入力内容のチェック
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {// ログイン試行
            if ($request->user('admin')) { // 管理権限レベルが0でないか
                $request->session()->regenerate(); // セッション更新

                return redirect()->intended('admin/dashboard'); // ダッシュボードへ

                return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
            } else {
                Auth::guard('admin')->logout();

                $request->session()->regenerate(); // セッション更新

                return back()->withErrors([ // 権限レベルが0の場合
                    'error' => 'You do not have permission to log in.',
                ]);
            }
        }

        return back()->withErrors([ // ログインに失敗した場合
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

    public function __construct()
    {
        $this->middleware('guest:admin')->except('adminLogout');
    }
    // ログアウトをした後の処理
    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}