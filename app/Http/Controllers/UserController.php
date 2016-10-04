<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create index page to login
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.login');
    }

    /**
     * Validate the user data
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function validateUserLogin(Request $request)
    {

        $user = DB::table('users')
            ->where('name', $request->get('name'))
            ->where('password', $request->get('password'))
            ->first();

        if ($user) {
            $request->session()->put('user', $user);

            return redirect('home');
        }

        return redirect('/');
    }
}
