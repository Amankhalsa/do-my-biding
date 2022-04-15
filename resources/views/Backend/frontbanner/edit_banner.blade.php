@extends('backend.admin_master')
@section('title', 'Edit Banner')
@section('admin_section')

 <h3 class="py-3">Edit Frontend site Banner:</h2>
<div class="row">
<div class="col-md-8">
<form action="{{route('update.front.banner',$edit_banner->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="banner_old_image" value="{{$edit_banner->banner}}">
      <div class="form-group">
      <label for="logo">Select banner</label>
      <input type="file" class="form-control" id="logo"  name="banner" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            @error('banner')
            <span class="text-danger"> {{$message}}</span>
            @enderror
      </div>

      <div class="form-group">
            <label for="title">Change Title</label>
            <input type="text" class="form-control"  name="title" value="{{$edit_banner->title}}"  placeholder="Title">
                  @error('title')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
            </div>
            <div class="form-group">
              <label for="discription">Change Discription</label>
              <input type="text" class="form-control"   name="discription" value="{{$edit_banner->discription}}"  placeholder="Discription">
                    @error('discription')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
              </div>


      <button type="submit" class="btn btn-primary">Update</button>
</form>
   <div class="form-group pt-5">
          <img id="output" src="{{asset($edit_banner->banner)}}" class="img-fluid" style="width:300px;" >
          </div>
</div>

       
  
</div>
  @endsection


