@extends('theme')
@section('content')
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <table class="table">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>COLLEGE</th>
        <th>CONTACT</th>
    </tr>
    @foreach($faculties as $faculty)
    <tr>
        <td>{{$faculty->fname}}</td>
        <td>{{$faculty->fdesignation}}</td>
        <td>{{$faculty->fcollege}}</td>
        <td>{{$faculty->fcontact}}</td>
        <td><a class="btn btn-warning" href="/faculty/{{$faculty->id}}/edit">Edit</a></td>
    </tr>
    @endforeach
    
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    </div>
    </div>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
@endsection