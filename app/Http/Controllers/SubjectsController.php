<?php

namespace App\Http\Controllers;

use App\Models\StuClass;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index(){

        $all = Subject::get();

        return view('subjects.all_subjects',compact('all'));

    }
    public function create(){

        $get_all_class = StuClass::get();
        return view('subjects.create',compact('get_all_class'));

    }
    public function store(Request $request){

        $request->validate([
            'class_id'=>'required',
            'name'=>'required|unique:subjects|max:15',
        ]);
        $sub = new Subject();
        $sub->class_id    = $request->class_id;
        $sub->name    = $request->name;
        $sub->save();

        return redirect()->route('sub.all');

    }
    public function findById(){

    }
    public function update(){

    }
    public function remove(){

    }
}
