<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_book extends Model {
	use HasFactory;

	protected $table = 'm_book';
	protected $primaryKey = 'id_book';
	public $fillable = [
		'book_name',
		'book_desc',
		'isbn',
		'writer',
		'publisher',
		'pages',
		'published_date',
		'created_at',
		'updated_at',
		'active'
	];
	public $timestamp = false;
}
