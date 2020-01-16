<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
  public function store() {
  	// return request()->all();
  	$user_id = auth()->user()->id;
  	$dir = $user_id.'/'.date("Y").'/'.date("F");

  	for($i=0; $i < count(request()->file('files')); $i++) {
  		$file = request()->file('files')[$i];
  		File::create([
  			'user_id' => $user_id,
  			'space_id' => 1,	
  			'folder_id' => 1,
  			'title' => $file->getClientOriginalName(),
	  	  'path' => $file->store($dir),
	  	  'size' => $file->getSize()
	  	]);
  	}
  	
  	return response()->json('sucesss');
  }
}
