<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getname=request('sname');
        $getrollno=request('srollno');
        $getcourse=request('scourse');
        $getadmissionno=request('sadmissionno');
        $getcollege=request('scollege');
        $getcontact=request('scontact');
        echo  $getname;
        echo "<br>";
        echo  $getrollno;
        echo "<br>";
        echo  $getcourse;
        echo "<br>";
        echo  $getadmissionno;
        echo "<br>";
        echo   $getcollege;
        echo "<br>";
        echo  $getcontact;
        echo "<br>";

        $studentdisp=new StudentModel();
        $studentdisp->name=$getname;
        $studentdisp->rollno=$getrollno;
        $studentdisp->course=$getcourse;
        $studentdisp->admissionno=$getadmissionno;
        $studentdisp->college=$getcollege;
        $studentdisp->contact=$getcontact;
        $studentdisp->save();
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
}
