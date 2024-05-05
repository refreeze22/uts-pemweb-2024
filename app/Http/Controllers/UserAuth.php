<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_auth;
use Illuminate\Support\Facades\Auth;

class UserAuth extends Controller {
	public function register(Request $request) {
		$request->validate([
			'name' => 'required|string',
			'username' => 'required|unique:users',
			'password' => 'required|string|confirmed',
		]);

		$user = M_auth::create([
			'name' => $request->input('name'),
			'username' => $request->input('usesrname'),
			'password' => bcrypt($request->input('password')),
		]);

		Auth::login($user);

		return redirect()->route('home');
	}

	public function login(Request $request) {
		$credentials = $request->only(['email', 'password']);

		if (Auth::attempt($credentials)) {
			$user = Auth::user();
			return redirect()->intended(route('home'));
		}

		return back()->withErrors(['email' => 'Invalid credentials']);
	}

	public function logout() {
		Auth::logout();
		return redirect()->route('login');
	}
}
