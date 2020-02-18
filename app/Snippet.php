<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
  protected $fillable = [
		'user_id', 'title', 
		'content', 
		'stars', 
		'is_private', 
		'is_pinned', 
		'forked_from_uid'
	];

	public function user() {
    return $this->belongsTo('App\User');
  }
}
