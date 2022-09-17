@extends('layouts.layout')
@section('content')

 <br>
 <div class="container">
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">

  <div class="card-body">
  <ol class="list-group list-group-numbered">

  <li class="list-group-item" > Company Name : {{ $apps->company}} </li>
  <li class="list-group-item" > Locatiom : {{ $apps->location }} </li>
  <li class="list-group-item"> Position Title : {{ $apps->title }} </li>
  <li class="list-group-item"> Category : {{ $apps->category }} </li>

  <li class="list-group-item" > Job Description : {{ $apps->jobd }} </li>
  <li class="list-group-item" > Qualification : {{ $apps->qf }} </li>
  <li class="list-group-item"> Job Type : {{ $apps->jobt }} </li>
  <li class="list-group-item"> Gender : {{ $apps->gender }} </li>

  <li class="list-group-item" > Vacancy : {{ $apps->vacancy }} </li>
  <li class="list-group-item" > Salary : {{ $apps->emasalaryil }} </li>
  <li class="list-group-item"> Application Deadline : {{ $apps->ad }} </li>
  <li class="list-group-item"> Joining Date : {{ $apps->joind }} </li>

</ol>
      </div>
    </hr>
  </div>
</div>
</div><br>

 
