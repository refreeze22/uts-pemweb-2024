<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_transaction extends Model {
	use HasFactory;

	protected $table = 'tb_review';
	protected $primaryKey = 'id_review';
	public $fillable = [
		'id_book',
		'id_user',
		'book_name',
		'user_name',
		'rating',
		'review',
		'created_at',
		'updated_at',
		'active'
	];
	public $timestamps = false;
}
