<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // khai báo biến 
        $students = [
            ['name'=>'Nguyễn Văn A','gender'=>true],
            ['name'=>'Nguyễn Thị Tâm','gender'=>false],
            ['name'=>'Nguyễn Văn Căn','gender'=>true]
        ];
        return view('student',compact('students'));
    }
     
    public function add ()
    {
        return view('add-student');
    }
    public function create(Request $req)
    {
        $students = DB::table('student')->insert([
            'name'=>$req->name,
            'gender'=>$req->gender
        ]);
 
        return redirect()->route('student.index');
    }
    public function update($id)
    {
        $student = DB::table('student')->find($id);
        return view('edit-student',compact('student'));
    }
    public function edit(Request $req,$id)
    {
       
        $student = DB::table('student')->where('id',$id)->update([
            'name'=>$req->name,
            'gender'=>$req->gender
        ]);
 
        return redirect()->route('student.index');
    }


}
