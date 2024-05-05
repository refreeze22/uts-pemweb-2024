<?php

namespace App\Http\Controllers;

use App\Models\M_book;
use App\Models\M_category;
use Illuminate\Http\Request;

class Books extends Controller {
	public function index() {
		$books = M_book::all();
		$categories = M_category::all();

		return view('book', ['books' => $books, 'categories' => $categories]);
	}

	public function save(Request $request, $id = null) {
		$validateData = $request->validate([
			'id_category' => 'required',
			'book_name' => 'required',
			'book_desc' => 'required',
			'isbn' => 'required',
			'writer' => 'required',
			'publisher' => 'required',
			'pages' => 'required',
			'published_date' => 'required'
		]);

		$data = [
			'id_category' => $request->id_category,
			'book_name' => $request->book_name,
			'book_desc' => $request->book_desc,
			'isbn' => $request->isbn,
			'writer' => $request->writer,
			'publisher' => $request->publisher,
			'pages' => $request->pages,
			'published_date' => $request->published_date,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'active' => '1'
		];

		var_dump($data);
		die();

		$save = M_book::findOrNew($id)->fill($data);
		$save->save();

		return redirect('/books');
	}

	public function delete(Request $request, $id) {
		$book = M_book::findOrFail($id);
		$book->delete();

		return redirect('/books');
	}
}
