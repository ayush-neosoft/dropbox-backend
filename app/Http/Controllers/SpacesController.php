<?php

namespace App\Http\Controllers;

use App\Space;
use Illuminate\Http\Request;

class SpacesController extends Controller
{
  public function index() {
  	$space = Space::where('space_id', auth()->user()->id)->first();

  	if(!$space){
  		$space = new Space;
  		$space->space_id = auth()->user()->id;
  		$space->save();
  	}

  	return response()->json([
  		'status' => true,
  		'content' => $space,
  		'message' => 'success'
		], 200);
  }
}
