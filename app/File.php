<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	protected $fillable = ['user_id', 'space_id', 'folder_id', 'title', 'path', 'size'];

  public function user() {
  	return $this->belongsTo('App\User', 'user_id');
	}

	public function folder() {
  	return $this->belongsTo('App\Folder', 'folder_id');
	}
}
