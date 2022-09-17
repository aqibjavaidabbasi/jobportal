@extends('layouts.layout')
@section('content')
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
      
      <form action="{{ url('user/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />

      <label>Name</label></br>
      <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
      <label>Email</label></br>
      <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
      <!-- <label>Phone</label></br>
      <input type="text" name="phone" id="phone" value="{{$students->phone}}" class="form-control"></br> -->
      <label>Password</label></br>
      <input type="text" name="password" id="password" value="{{$students->password}}" class="form-control"></br>

      <label>User Role Type</label></br>
        <select class="form-select" name="is_admin" aria-label="Default select example">
        <option selected>Select Role</option>
        <option value="0">User</option>
        <option value="1">Admin</option>
        </select> </br>

      <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
  
  </div>
</div>
@stop

