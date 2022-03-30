@extends('backend.admin_master')
@section('title', 'Edit Location')
@section('admin_section')
<div class="row">
    <div class="col-md-6">
       <h3 class="py-3 text-center">Edit Location:</h2>

    <form method="post" action="{{route('update.all.location',$editlocation->id)}}">
      @csrf
      <!-- Category name English  -->
<div class="form-group">
<h5>Change location name  <span class="text-danger">*</span></h5>
<div class="controls">
  <input  type="text"  name="name" value="{{$editlocation->name}}" class="form-control" placeholder="Location name"  > 
    @error('name')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
</div>

<div class="form-group pt-3">


  <button type="submit" class="btn btn-primary">Update</button>

</div>


</form>

<!-- =========================== -->

    </div>
</div>
 


  @endsection