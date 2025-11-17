<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginEventListenerController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome', [
            'visitedBefore' => $this->hasLoggedInBefore($request),
        ]);
    }

    public function authenticated(Request $request, $user)
    {
        // Cookie für 180 Tage setzen (in Minuten)
        Cookie::queue('has_logged_in_before', true, 60 * 24 * 180);
    }

    public function hasLoggedInBefore(Request $request): bool
    {
        return (bool) $request->cookie('has_logged_in_before');
    }
}
