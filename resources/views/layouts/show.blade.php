@extends('layouts.layout')
@section('content')
 
 <br><br><br>
 <div class="container">
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
 
  <div class="card-body">
  <ol class="list-group list-group-numbered">

  <li class="list-group-item" > Name : {{ $students->name }} </li>
  <li class="list-group-item" > Email : {{ $students->email }} </li>
  <li class="list-group-item"> Password : {{ $students->password }} </li>
  <li class="list-group-item"> Role : {{ $students->is_admin }} </li>

</ol>
        <!-- <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">Phone : {{ $students->phone }}</p>
        <p class="card-text">Password : {{ $students->password }}</p> -->

      </div>
       
    </hr>
  
  </div>
</div>
</div>