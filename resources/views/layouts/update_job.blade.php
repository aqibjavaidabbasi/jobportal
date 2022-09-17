@extends('layouts.layout')
@section('content')
<br>
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">

  <div class="row">
    <div class="col-6 col-md-5">

  <form action="{{ url('job/' .$apps->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")

       <input type="hidden" name="id" id="id" value="{{$apps->id}}" id="id" />

        <label>Company Name</label></br>
        <input type="text" name="company" id="company" value="{{$apps->company}}" class="form-control" require></br>
        <label>Locatiom</label></br>
        <input type="text" name="location" id="location" value="{{$apps->location}}"class="form-control" require></br>
        <label>Position Title</label></br>
        <input type="text" name="title" id="title" value="{{$apps->title}}" class="form-control" require></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" value="{{$apps->category}}" class="form-control" require></br>
       
        <label>Job Description</label></br>
        <textarea name="jobd" id="jobd" value="" class="form-control" require> {{$apps->jobd}} </textarea></br>
        <label>Qualification/Experience</label></br>
        <textarea name="qf" id="qf"  value=""class="form-control" require> {{$apps->qf}} </textarea></br>
       </div>

        <div class="col-6 col-md-5">
        <label>Job Type</label></br>
        <select class="form-select" name="jobt" value="" aria-label="Default select example">
        <!-- <option selected>Select Type</option> -->
        <option value="Part-Time" <?php echo ($apps->jobt=='Part-Time') ? 'selected="true"' : '' ; ?>>Part-Time</option>
        <option value="Full-Time" <?php echo ($apps->jobt=='Full-Time') ? 'selected="true"' : '' ; ?>>Full-Time</option>
        </select><br>

        <label>Gender</label></br>
        <select class="form-select" name="gender" aria-label="Default select example">
        <!-- <option selected>Select Gender</option> -->
        <option value="Male" <?php echo ($apps->gender=='Male') ? 'selected="true"' : '' ; ?>>Male</option>
        <option value="Female" <?php echo ($apps->gender=='Female') ? 'selected="true"' : '' ; ?>>Female</option></br> 
        </select><br>

        <label>Vacancy</label></br>
        <input type="text" name="vacancy" id="vacancy" value="{{$apps->vacancy}}" class="form-control" require></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" value="{{$apps->salary}}" class="form-control" require></br>
        <label>Application Deadline</label></br>
        <input type="text" name="ad" id="ad" value="{{$apps->ad}}" class="form-control" require></br>
        <label>Joining Date</label></br>
        <input type="text" name="joind" id="joind" value="{{$apps->joind}}" class="form-control" require></br>
        <!-- <label>Job Status</label></br>
        <input type="text" name="js" id="js" class="form-control" require></br> -->
        <br><br>
        <input type="submit" value="Save" class="btn btn-success btn-lg">     
    </form>
    </div>
    </div>
    
    </div>
  </div>
</div></br> 
@stop

