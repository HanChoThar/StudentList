<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentListController extends Controller
{
    // For Register Page
    public function index() { 
        return view('studentlists.index');
    }

    // Validate Register Form and Inserting to Databasee
    public function register(Request $request) {
        $validator = validator($request->all(), [
            'name' => 'required',
            'birth' => 'required',
            'nrc' => 'required',
            'email' => 'required|email|unique:users',
            'courses'=> 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        
        $courses = $request->courses;
        $sub = "";
        foreach($courses as $course) {
            $sub .= $course.", ";
        }
        $name = $request->name;
        $birth = $request->birth;
        $nrc = $request->nrc;
        $email = $request->email;
        $courses = $sub;
        $date = date('Y-m-d H:i:s');

        DB::insert("INSERT INTO students (name, birth, nrc, email, courses, created_at, updated_at)
                    VALUES (?, ?, ?, ?, ?, ?, ?)", [ $name, $birth, $nrc, $email, $courses, $date, $date ]);

        return redirect('/lists')->with('info', 'Register Successful!');
    }
      
    // Get Table Data From Database
    public function table() {
        $data = DB::select("SELECT * FROM students");
    
        return view('studentlists.tablelist', [
            'tablelists' => $data
        ]); 

    }

    // search function for various kinds of data in table
    public function search() {
        $search_text = request()->search;
        $results = DB::select("SELECT * FROM students WHERE concat(name,email,nrc,birth,courses) LIKE '%$search_text%' ");
            return view('studentlists.search', [
                'searchlists' => $results,
            ]);
    }
}
