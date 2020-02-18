<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
  	'user_id', 
  	'content', 
  	'due_at', 
  	'completed_at'
  ];

  public function user() {
  	return $this->belongsTo('App\User');
	}
}
