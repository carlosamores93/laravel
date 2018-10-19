<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;


class UsersController extends Controller{
    public function index(){
        $users = User::orderBy('id', 'ASC')->paginate(5);
        //$users = DB::table('users')->paginate(2);
        //$users = DB::table('users')->simplePaginate(2);
        //$users = DB::table('users')->paginate(2, null, "page", 1);
        //$users->withPath('');
    	return view('users.index', compact('users'));
    }

    public function show($id){
        $user = User::where('id', $id)->first();
        if($user == null){
    	   return view('users.create');
        }else{
           return view('users.edit', compact('user'));
        }

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

        // https://github.com/laracasts/flash
        //Flash::success('Usuario creado correctamente');
        flash('Usuario creado')->success()->important();
        //flash()->overlay('Usuario creado correctamente', 'Modal Title');
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $user = User::find($id);
        $user->name = $input['name'];
        $user->slug = str_slug($input['name']);
        $user->email = $input['email'];
        $user->type = $input['type'];
        // Enciptamos la contraseña, solo si existe
        if($input['password'] != null){
            $user->password = bcrypt($input['password']);
        }
        $user->save();
        flash('Usuario actualizado')->warning()->important();
        return redirect()->route('users.index');
    }


    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        // https://github.com/laracasts/flash
        flash('Usuario borrado')->error()->important();
        return redirect()->route('users.index');  
    }
}


/*
flash('Message')->success(): Set the flash theme to "success".
flash('Message')->error(): Set the flash theme to "danger".
flash('Message')->warning(): Set the flash theme to "warning".
flash('Message')->overlay(): Render the message as an overlay.
flash()->overlay('Modal Message', 'Modal Title'): Display a modal overlay with a title.
flash('Message')->important(): Add a close button to the flash message.
flash('Message')->error()->important(): Render a "danger" flash message that must be dismissed.
 */