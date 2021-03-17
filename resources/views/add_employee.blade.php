@extends("theme")

@section("content")


    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
    <table class="table table-borderless">
    <tr>
        <td>Empname</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Empcode</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Designation</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Salary</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type="date" class="form-control"></td>
    </tr>
    <tr>
        <td>Place</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Pincode</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Phone No</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-success">Submit</button></td>
    </tr>
    
    </table>
    </div>
    </div>
    </div>
    @endsection
