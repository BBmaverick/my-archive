@extends('clients.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Clients Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $clients->name }}</h5>
        <p class="card-text">Address : {{ $clients->email }}</p>
        <p class="card-text">Mobile : {{ $clients->contactnumber }}</p>
        <p class="card-text">Mobile : {{ $clients->contactsource }}</p>
        <p class="card-text">Mobile : {{ $clients->industry }}</p>
        <p class="card-text">Mobile : {{ $clients->tags }}</p>
  </div>
       
    </hr>
  
  </div>
</div>