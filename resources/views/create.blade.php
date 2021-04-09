@extends('theme')
@section('content')
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

<form action="/faculityread" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<br><br><br>
<tr>
    <td>Name</td>
    <td><input name="fnam" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Designation</td>
    <td><input name="fdes" type="text" class="form-control"></td>
</tr>
<tr>
    <td>College</td>
    <td><input name="fcol" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Contact</td>
    <td><input name="fcon" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-outline-success">SUBMIT</button></td>
</tr>
</table>

</form>


</div>
</div>
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
@endsection