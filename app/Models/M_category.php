<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_category extends Model {
	use HasFactory;

	protected $table = 'm_category';
	protected $primaryKey = 'id_category';
	public $fillable = [
		'category_name',
		'created_at',
		'updated_at',
		'active'
	];
	public $timestamp = false;
}
