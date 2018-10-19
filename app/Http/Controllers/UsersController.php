<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	return view('users.index');
    }

    public function show(){
    	return view('users.create');
    }


    public function store(Request $request){

    	$input = $request->all();
    	$user = new User();
    	$user->name = $input['name'];
    	$user->slug = str_slug($input['name']);
    	$user->email = $input['email'];
    	$user->type = $input['type'];
    	// Enciptamos la contraseña
    	$user->password = bcrypt($input['password']);
    	$user->save();

    	dd('Exito al guardar el usuario.');
    	dd($input);
    }
}
