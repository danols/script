<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Script extends Model 
{
	protected $table = 'scripts';
	protected $fillable = [
		'name', 'code', 'description', 'syntax', 'user_id',
	];

	public function user {
		return $this->belongsTo('App\User');
	}
}
