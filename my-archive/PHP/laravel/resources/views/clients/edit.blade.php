@extends('clients.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('client/' .$clients->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$clients->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$clients->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$clients->email}}" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contactnumber" id="contactnumber" value="{{$clients->contactnumber}}" class="form-control"></br>
        <label>Contact Source</label></br>
        <input type="text" name="contactsource" id="contactsource" value="{{$clients->contactsource}}" class="form-control"></br>
        <label>Industry</label></br>
        <input type="text" name="industry" id="industry" value="{{$clients->industry}}" class="form-control"></br>
        <label>Tags</label></br>
        <select class="form-control" name="tags" id="tags" value="{{$clients->tags}}">
        <option selected>Pick tags</option>
        <option value="prospect">prospect</option>
        <option value="client">client</option>
        <option value="personal contact">personal contact</option>
    </select>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop