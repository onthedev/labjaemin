<?php

namespace App\Http\Controllers;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class lecturerController extends Controller
{
    public function index(){
        $Lecturer = lecturer::all();
        $count = lecturer::count();
        return view('lecturer' , compact('Lecturer','count'));
    }
    public function insert(Request $request){
        $lecturers = new lecturer;
        $lecturers->lec_name = $request->lec_name;
        $lecturers->email = $request->email;
        $lecturers->major = $request->major;
        $lecturers->save();

        return redirect('lecturers');
    }
    public function delete($id){
        lecturer::destroy($id);
        return redirect('lecturers');
    }
}
