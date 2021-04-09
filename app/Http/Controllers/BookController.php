<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
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
        return view('bookadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getbooktitle= request('boo');
        $getauthor= request('aut');
        $getdescription= request('desc');
        $getdistributor= request('dist');
        $getprice= request('bprice');

        echo $getbooktitle;
        echo "<br>";
        echo $getauthor;
        echo "<br>";
        echo  $getdescription;
        echo "<br>";
        echo $getdistributor;
        echo "<br>";
        echo $getprice;

        $book =new BookModel();
        $book->booktitle=$getbooktitle;
        $book->author=$getauthor;
        $book->description=$getdescription;
        $book->distributor=$getdistributor;
        $book->price=$getprice;
        $book->save();
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
