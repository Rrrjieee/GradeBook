<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {   
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
        
        if($user){
          
                    $credentials = $request->only('email', 'password');
                    
                    if (Auth::attempt($credentials)) {
                        if (Auth::user()->type == 'teacher') {
                            return redirect()->route('dashboard');
                        } else if (Auth::user()->type == 'student') {
                            return redirect()->route('student_dashboard');
                        }
                       
                    }        
		
        }
        return redirect("/")->withSuccess('Login details are not valid');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
