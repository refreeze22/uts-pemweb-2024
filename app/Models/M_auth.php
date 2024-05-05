<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_auth extends Model {
	use HasFactory;

	protected $table = 'm_user';
	protected $primaryKey = 'id_user';
	public $fillable = [
		'username',
		'password',
		'name',
		'created_at',
		'updated_at',
		'active'
	];
	public $timestamp = false;
}
