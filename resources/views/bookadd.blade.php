<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

<form action="/bookread" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<br><br><br>
<tr>
    <td>Book Title</td>
    <td><input name="boo" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Author</td>
    <td><input name="aut" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Description</td>
    <td><input name="desc" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Distributor</td>
    <td><input name="dist" type="text" class="form-control"></td>
</tr>
<tr>
    <td>price</td>
    <td><input name="bprice" type="text" class="form-control"></td>
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
</body>
</html>