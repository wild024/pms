<?php

namespace App\Http\Controllers;

use App\Models\StuClass;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $users = User::get();
        return view('users.allusers', compact('users'));

    }
    public function create(){
        $get_all_class = StuClass::get();
        return view('users.create',compact('get_all_class'));

    }
    public function storing(Request $request){
        
        $val = $request->validate([
            
            'name'=>'required',
            'contact'=>'required|unique:users|max:14',
            'email'=>'required|unique:users',
            'password'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'user_type'=>'required',
            'class_id'=>'required',
        ]);
        if ($val) {

         $user = new User();
        $user->name    = $request->name;
        $user->contact    = $request->contact;
        $user->email    = $request->email;
        $user->password    = $request->password;
        $user->address    = $request->address;
        $user->gender    = $request->gender;
        $user->user_type    = $request->user_type;
        $user->class_id    = $request->class_id;
        $ok = $user->save();
           
        } else {
           return redirect()->route('class.all');
        }
        

        

        if ($ok) {
            //return redirect()->route('user.all'); 
            return "OK";
        }else{
            return "404";
        }

        

    }
    public function findById(){

    }
    public function update(){

    }
    public function remove(){

    }
}
