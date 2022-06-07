<?php

namespace App\Http\Controllers;

use App\Models\StuClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){

        $all = StuClass::get();

        return view('stu_class.all_classes',compact('all'));

    }
    public function create(){

        return view('stu_class.create');

    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required|unique:stu_classes|max:15',
        ]);
        $stu = new StuClass();
        $stu->name    = $request->name;
        $stu->save();

        return redirect()->route('class.all');

    }
    public function findById(){

    }
    public function update(){

    }
    public function remove(){

    }
}
