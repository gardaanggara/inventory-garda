<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $code="160613001"
    private $name="Ana"
    private $course;
    private $task;
    private $quiz;
    private $mid_term;
    private $final;
    private $grade;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "this is index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "ini create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myCourse($course, $task, $quiz, $mid_term, $final){
        $code = $this-> code;
        $name = $this-> name;
        $this -> course = $course
        $this -> task = $task
        $this -> quiz = $quiz
        $this -> mid_term = $mid_term;
        $this -> final = $final
        $grade = $this -> grade();

        return view('student.my_view'. compact('code', 'name', 'course', 'task', 'quiz', 'mid_term', 'final', 'grade'));
    }

    private function grade(){
        $course = $this -> course;
        $task = $this -> task;
        $quiz = $this -> quiz;
        $mid_term = $this -> mid_term;
        $final = $this -> final;
        $this -> grade = ($task *0.1)+($quiz * 0.1)+($mid_term *0.1)+($final);
        return $this -> grade;
    }
}
