@extends('backend.admin_master')
@section('title', 'Edit site Category')
@section('admin_section')
<div class="row">
    <div class="col-md-6">
       <h3 class="py-3 text-center">Edit Category:</h2>

    <form method="post" action="{{route('update.add.category',$edit_catdata->id)}}">
      @csrf
      <!-- Category name English  -->
<div class="form-group">
<h5>Category name English <span class="text-danger">*</span></h5>
<div class="controls">
  <input  type="text"  name="category_name" value="{{$edit_catdata->category_name}}" class="form-control" placeholder="Category name English"  > 
 
</div>
</div>

<div class="form-group">
<h5> Maximum images allowed <span class="text-danger">*</span></h5>
<div class="controls">
  <input  type="number"  name="maximum_images_allowed" value="{{$edit_catdata->maximum_images_allowed}}" class="form-control" placeholder="Maximum images allowed"  > 

</div>
</div>
<!-- Category name English  -->

<div class="form-group pt-3">


  <button type="submit" class="btn btn-primary">Update</button>

</div>


</form>

<!-- =========================== -->

    </div>
</div>
 


  @endsection