<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
	public function user() {
  	return $this->belongsTo('App\User', 'user_id');
	}

	public function files() {
		return $this->hasMany('App\File');
	}
}
