@extends('backend.admin_master')
@section('title', 'Add site Sub Category')
@section('admin_section')
<div class="row">
    <div class="col-md-6">
       <h3 class="py-3 text-center">Add Sub Category:</h2>

    <form method="post" action="{{route('store.front.subcategory')}}">
      @csrf
      <!-- sub Category name English  -->

<div class="form-group">
<h5>Sub Category name <span class="text-danger">*</span></h5>
<div class="controls">

<select name="category_id"   class="form-control" aria-invalid="false">
  <option selected="" disabled="">Select Your Category</option>
  @foreach($fetch_category as $key => $value)

  <option value="{{$value->id}}">{{$value->category_name}}</option>
  @endforeach

</select>
  @error('category_id')
    <span class="text-danger"> {{$message}}</span>
    @enderror


</div>
</div>


<div class="form-group pt-3">
<h5>Sub Category name <span class="text-danger">*</span></h5>
<div class="controls">
  <input  type="text"  name="subcategory_name"  class="form-control" placeholder="Category name English"  > 
    @error('subcategory_name')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
</div>


<!-- sub Category name English  -->

<div class="form-group pt-3">


  <button type="submit" class="btn btn-primary">Add</button>

</div>


</form>

<!-- =========================== -->

    </div>
</div>
 


  @endsection