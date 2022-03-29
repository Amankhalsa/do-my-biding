@extends('backend.admin_master')
@section('title', 'Add site Category')
@section('admin_section')
<div class="row">
    <div class="col-md-6">
       <h3 class="py-3 text-center">Add Category:</h2>

    <form method="post" action="{{route('store.add.category')}}">
      @csrf
      <!-- Category name English  -->
<div class="form-group">
<h5>Category name English <span class="text-danger">*</span></h5>
<div class="controls">
  <input  type="text"  name="category_name"  class="form-control" placeholder="Category name English"  > 
    @error('category_name')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
</div>

<div class="form-group">
<h5> Maximum images allowed <span class="text-danger">*</span></h5>
<div class="controls">
  <input  type="number"  name="maximum_images_allowed"  class="form-control" placeholder="Maximum images allowed"  > 
    @error('maximum_images_allowed')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
</div>
<!-- Category name English  -->

<div class="form-group pt-3">


  <button type="submit" class="btn btn-primary">Submit</button>

</div>


</form>

<!-- =========================== -->

    </div>
</div>
 


  @endsection