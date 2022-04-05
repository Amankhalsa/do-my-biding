@extends('backend.admin_master')
@section('title', 'Add site Sub Category')
@section('admin_section')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="row">
    <div class="col-md-6">
       <h3 class="py-3 text-center">Edit Sub SubCategory:</h2>

    <form method="post" action="{{route('update.sub.subcategory',$editsub_subcat->id)}}">
      @csrf
      <!-- sub Category name English  -->


  <div class="form-group">
      <h5>Category Select <span class="text-danger">*</span></h5>
      <div class="controls">
      <select name="category_id"   class="form-control" aria-invalid="false" required="">
      <option selected="" disabled="">Select Your Category</option>
        @foreach($fetch_category as  $value)
        <option value="{{$value->id}}" {{$editsub_subcat->category_id ==  $value->id ?'selected' : ''}}>{{$value->category_name}}</option>
        @endforeach
        </select>
        @error('category_id')
        <span class="text-danger"> {{$message}}</span>
        @enderror
      </div>
  </div>

{{-- ================================= --}}
<div class="form-group">
    <h5>Sub  Category Name <span class="text-danger">*</span></h5>
    <div class="controls">
    <select name="subcategory_id"   class="form-control" aria-invalid="false">
      <option selected="" disabled="">Select Your Sub subCategory</option>
      @foreach($sub_subcategory as  $value)
      <option value="{{$value->id}}" {{$editsub_subcat->subcategory_id ==  $value->id ?'selected' : ''}}>{{$value->subcategory_name}}</option>
      @endforeach

  
    </select>
      @error('subcategory_id')
        <span class="text-danger"> {{$message}}</span>
        @enderror
    </div>
    </div>

{{-- ================================= --}}
<div class="form-group pt-3">
<h5>Sub sub Category Name <span class="text-danger">*</span></h5>
<div class="controls">
  <input  type="text"  name="sub_subcategory_name"  class="form-control" value="{{$editsub_subcat->sub_subcategory_name}}"  > 

    @error('sub_subcategory_name')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
</div>

{{-- ============================= --}}

<!-- sub Category name English  -->

<div class="form-group pt-3">


  <button type="submit" class="btn btn-primary">Add</button>

</div>


</form>

<!-- =========================== -->

    </div>
</div>

<script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            console.log(category_id);
            if(category_id) {
                $.ajax({
                    url: "{{  url('admin/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="subcategory_id"]').html('')
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
});
</script>

  @endsection
