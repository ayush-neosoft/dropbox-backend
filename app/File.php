<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	protected $fillable = [ 
		'folder_id', 
		'title', 
		'path', 
		'size'
	];

	public function folder() {
  	return $this->belongsTo('App\Folder', 'folder_id');
	}
}
