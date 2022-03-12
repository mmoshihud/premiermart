@extends('admin\adminNavbar')
@section('title','View buyer')
@section('body')

<div class="btn-group" role="group" aria-label="Basic example">
    
    <a href=""><button type="button" class="btn btn-secondary">Delete Buyer</button></a>
    <a href=""><button type="button" class="btn btn-secondary">Edit Buyer</button></a>
    <a href=""><button type="button" class="btn btn-secondary">Buyer List</button></a>
    
    <form method="POST" action="#" class="form-inline my-2 my-lg-0" >
        <input class="form-control mr-sm-2" type="search" placeholder="Search" style="margin-left: 5px">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    
  </div>






@endsection