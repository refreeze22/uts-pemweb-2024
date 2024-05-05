<?php

namespace App\Http\Controllers;

use App\Models\M_transaction;
use App\Models\M_book;
use Illuminate\Http\Request;

class Reviews extends Controller {
	public function index() {
		$reviews = M_transaction::all();
		$books = M_book::all();

		return view('review', [
			'reviews' => $reviews,
			'books' => $books
		]);
	}

	public function save(Request $request, $id = null) {
		if ($id == null || $id == 0) {
			$validateData = $request->validate([
				'id_book' => 'required',
				'book_name' => 'required',
				'rating' => 'required',
				'review' => 'required'
			]);

			$data = [
				'id_user' => '1',
				'id_book' => $request->input('id_book'),
				'book_name' => $request->input('book_name'),
				'rating' => $request->input('rating'),
				'review' => $request->input('review'),
				'user_name' => 'Amagi Ichiya',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'active' => '1'
			];
		} else {
			$validateData = $request->validate([
				'rating' => 'required',
				'review' => 'required'
			]);

			$data = [
				'rating' => $request->input('rating'),
				'review' => $request->input('review'),
				'updated_at' => date('Y-m-d H:i:s')
			];
		}

		$save = M_transaction::findOrNew($id)->fill($data);
		$save->save();

		return redirect('/reviews');
	}

	public function delete(Request $request, $id) {
		$data = M_transaction::findOrFail($id);
		$data->delete();

		return redirect('/reviews');
	}

}
