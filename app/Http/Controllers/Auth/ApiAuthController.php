<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{  	
	public function login(){ 
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
			$user = Auth::user(); 
			$token =  $user->createToken('MyApp')->accessToken; 
			return response()->json([
			 	'message' => 'Login Successful',
			 	'user' => $user,
			 	'token' => $token
			 ], 200); 
		} else { 
			return response()->json(['message'=>'Unauthorised'], 401); 
		} 
	}
	
	public function register(Request $request) 
	{ 
		$validator = Validator::make($request->all(), [ 
			'name' => 'required|max:255', 
			'email' => 'required|email|max:255',
			'password' => 'required', 
			'c_password' => 'required|same:password'
		]);

		if ($validator->fails()) { 
			return response()->json(['error'=>$validator->errors()], 401);            
		}

		$input = $request->all();
		$input['team_id'] = rand(1,4);
		$input['password'] = bcrypt($input['password']); 
		$user = User::create($input); 
		if($user) {
			$token =  $user->createToken('MyApp')->accessToken; 
			return response()->json([
				'message' => 'Register Success',
				'user' => $user,
				'token' => $token
			], 200); 
		} else { 
			return response()->json(['error'=>'Unauthorised'], 401); 
		}
	}
		
	public function me() 
	{ 
    $user = Auth::user();
    if($user) {
      return response()->json([
        'status' => true, 
        'message' => 'User Authenticated', 
        'user' => auth()->user()
      ], 200);
    } else {
    	return response()->json(['error'=>'Unauthorised'], 401);
    }
	} 

	public function logout() {
		auth()->logout();
	}
}
