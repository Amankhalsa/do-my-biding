@extends('backend.admin_master')
@section('title', 'Add Logo')
@section('admin_section')

 <h3 class="py-3">Edit and update Frontend site logo:</h2>
<div class="row">
<div class="col-md-8">
<form action="{{route('update.site.logo',$edit_logo->id)}}" method="post" enctype="multipart/form-data">
  @csrf

        <input type="hidden" name="old_image" value="{{$edit_logo->logo}}">
      <div class="form-group">
      <label for="logo">Select  logo</label>
      <input type="file" class="form-control" id="logo"  name="logo" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            @error('logo')
            <span class="text-danger"> {{$message}}</span>
            @enderror
      </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
      <div class="col-md-4">
          <div class="form-group">
          <img id="output" src="{{asset($edit_logo->logo)}}" width="100" height="100">
          </div>
      </div>
</div>
  @endsection


