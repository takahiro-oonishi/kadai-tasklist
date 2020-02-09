<?php
//ログイン認証のコンローラー
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';//ログイン後は、トップページにリダイレクトされます。

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*
        「logout アクション以外では guest である必要がある」という条件を持ったミドルウェアが設定されていることになります。
         guest とは、ログイン認証されていなuet閲覧者のことです。
         つまり「 logout アクション以外では  ログイン認証されていない  ことが必要」という条件です。
        */
        $this->middleware('guest')->except('logout');
    }
}
