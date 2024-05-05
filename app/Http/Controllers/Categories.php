<?php

namespace App\Http\Controllers;

use App\Models\M_category;
use Illuminate\Http\Request;

class Categories extends Controller {
	public function index() {
		$categories = M_category::all();

		return view('category', ['categories' => $categories]);
	}

	public function save(Request $request, $id = null) {
		$validateData = $request->validate([
			'category_name' => 'required'
		]);

		$data = [
			'category_name' => $request->category_name,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'active' => '1'
		];

		$save = M_category::findOrNew($id)->fill($data);
		$save->save();

		return redirect('/categories');
	}

	public function delete(Request $request, $id) {
		$category = M_category::findOrFail($id);
		$category->delete();

		return redirect('/categories');
	}

}
