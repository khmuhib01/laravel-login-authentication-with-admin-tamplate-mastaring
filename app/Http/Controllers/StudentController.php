<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->get();
        //$students = DB::table('students')->leftJoin('results')->get();
        //$students = DB::table('students')->exits;
        

        //$students = DB::table('students')->where('name', 'shifa')->union($student)->get();
        //$students = DB::table('students')->where('name', 'test')->orWhere('name', 'shakib')->whereBetween('id', [2,4])->get();
        //$students = DB::table('students')->whereBetween('id', [2,4])->get();
        //$students = DB::table('students')->whereNotBetween('id', [2,4])->get();
        // $students = DB::table('students')->where(
        //     function ($query) {
        //         $query -> where('age', '>', 60);
        //     }
        // )->get();

        //dd($students);
        return view('admin.students.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'age' => $request->age
        );

        $result = DB::table('students')->insert($data);

        return redirect()->route('admin.student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $student = DB::table('students')->find($id);
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'age' => $request->age
        );

        $result = DB::table('students')->where('id', $id)->update($data);

        return redirect()->route('admin.student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $result = DB::table('students')->where('id', $id)->delete();

        return redirect()->route('admin.student.index');
    }
}
