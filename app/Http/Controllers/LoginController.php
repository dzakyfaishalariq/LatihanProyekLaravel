<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\LoginService;

class LoginController extends Controller
{
    protected $loginService;
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }
    public function login_system(Request $request)
    {
        $valid = $this->loginService->autentifik($request);
        if ($valid[0]->fails()) {
            notify()->error($valid[0]->errors()->first());
            return redirect()->intended(route('login'));
        }
        return $valid[1];
    }
    public function logout(Request $request)
    {
        $logout = $this->loginService->logout($request);
        return $logout;
    }
}
