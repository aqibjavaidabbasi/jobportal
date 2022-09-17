@extends('layouts.layout')
@section('content')
 <br><br><br>
<!-- <div class="card" style="width: 40rem;"> -->
  <div class="card" >
  <div class="card-header">User Page</div>
  <div class="card-body">
      
      <form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}

        <div class="col-6 col-md-3">
        <label>Company Name</label></br>
        <input type="text" name="company" id="company" class="form-control" require></br>
        <label>Locatiom</label></br>
        <input type="text" name="loc" id="loc" class="form-control" require></br>
        <label>Position Title</label></br>
        <input type="text" name="title" id="title" class="form-control" require></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" class="form-control" require></br>
        <label>Job Description</label></br>
        <textarea name="jd" id="jd" class="form-control" require></br>
        <label>Qualification</label></br>
        <textarea name="qf" id="qf" class="form-control" require></br>
        </div>

        <div class="col-6 col-md-3">
        <label>Job Type</label></br>
        <select class="form-select" name="jt" aria-label="Default select example">
        <option selected>Select Type</option>
        <option value="Part-Time">Part-Time</option>
        <option value="Full-Time">Part-Time</option>

        <label>Gender</label></br>
        <select class="form-select" name="gender" aria-label="Default select example">
        <option selected>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select> </br>

        <label>Vacancy</label></br>
        <textarea name="vac" id="vac" class="form-control" require></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" class="form-control" require></br>
        <label>Application Deadline</label></br>
        <input type="text" name="ad" id="ad" class="form-control" require></br>
        <label>Joining Date</label></br>
        <input type="text" name="jd" id="jd" class="form-control" require></br>
        </div>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop