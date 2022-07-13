@extends('clients.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Clients Page</div>
  <div class="card-body">
      
      <form action="{{ url('client') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contactnumber" id="contactnumber" class="form-control"></br>
        <label>Contact Source</label></br>
        <input type="text" name="contactsource" id="contactsource" class="form-control"></br>
        <label>Industry</label></br>
        <input type="text" name="industry" id="industry" class="form-control"></br>
        <label>Tags</label></br>
        <select class="form-control" name="tags" id="tags">
        <option selected>Pick tags</option>
        <option value="prospect">prospect</option>
        <option value="client">client</option>
        <option value="personal contact">personal contact</option>
    </select>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop