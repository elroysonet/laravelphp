<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaculityModel;

class FaculityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties=FaculityModel::all();

        return view('viewallfaculties',compact('faculties'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
       $getfname=request('fname') ;

       $faculties=FaculityModel::query()->where('fname','LIKE',"%{$getfname}%")->get();

       return view('viewallfaculties',compact('faculties'));
    }


    public function store(Request $request)
    {
        $getName= request('fnam');
        $getDesignation=request('fdes');
        $getCollege=request('fcol');
        $getContact=request('fcon');

        echo $getName;
        echo "<br>";
        echo $getDesignation;
        echo "<br>";
        echo $getCollege;
        echo "<br>";
        echo $getContact;

        $faculity =new FaculityModel();
        $faculity->fname=$getName;
        $faculity->fdesignation=$getDesignation;
        $faculity->fcollege=$getCollege;
        $faculity->fcontact=$getContact;
        $faculity->save();
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
        $faculties=FaculityModel::find($id);
        return view('facultyeditview',compact('faculties'));
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
        $faculity=FaculityModel::find($id);

        $getName= request('fnam');
        $getDesignation=request('fdes');
        $getCollege=request('fcol');
        $getContact=request('fcon');

        echo $getName;
        echo "<br>";
        echo $getDesignation;
        echo "<br>";
        echo $getCollege;
        echo "<br>";
        echo $getContact;

        
        $faculity->fname=$getName;
        $faculity->fdesignation=$getDesignation;
        $faculity->fcollege=$getCollege;
        $faculity->fcontact=$getContact;
        $faculity->save();
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
