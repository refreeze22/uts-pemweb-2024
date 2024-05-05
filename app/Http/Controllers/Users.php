<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller {
	public function index() {
		return view('users');
	}

	public function save(Request $request) {
		$post = new Post;
		$post->name = $request->name;
		$post->username = $request->username;
		$post->password = $request->password;
		$post->save();

		return response()->json(['success' => 'Post saved successfully.']);
	}

	public function delete(Request $request) {
		$post = new Post;
		$post->delete($request->id);

		return response()->json(['success' => 'Post deleted successfully.']);
	}
}
