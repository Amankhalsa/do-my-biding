@php
$getcat = DB::table('categories')->get();
$getsubcat = DB::table('sub_categories')->get();

@endphp
@extends('backend.admin_master')
@section('title', 'Edit Post')
@section('admin_section')

{{-- ajax for append sub category  --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- ajax for append sub category  --}}
<!-- row start  -->
<div class="row">
    <div class="col-md-12">
        <div class="container rounded bg-white mb-5">
            <div class="row">
            
                <div class="col-md-6 border-right">
                    <form action="{{route('update.front.bidpost',$edit_posts->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
            <input type="hidden" name="old_image" value="{{$edit_posts->main_image}}">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right"> Edit User Post || <span> Add id : {{$edit_posts->add_id}}  ||</span></h4>
                            </div>
                            <div class="row mt-2">
 <!-- =========================== Category ============================================= -->
                                <div class="col-md-6"><label class="labels">Our Category</label>
                                     {{-- ================ --}}
                                     <select id="posting_category_select"  name="category_id"  class="form-select">
                                        {{-- ========== Category select ========= --}}

                                        <option class="title" disabled="disabled" 
                                            selected="selected">Select Categories</option>
                                        @foreach($getcat as $catvalue)
                                        <option value="{{$catvalue->id}}" {{ $catvalue->id == $edit_posts->category_id ?'selected':''}}>{{$catvalue->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>
 <!-- =========================== Category ============================================= -->
                                 
                                <div class="col-md-6">
                                    <label for="categoryFld" class="form-label"> Our Sub Category</label>
                                    <select name="sub_category_id" class="form-select">
                                        {{-- ========== sub Category select ========= --}}
                                      <option class="title" disabled="disabled" selected="selected">Select Sub Categories</option>
                                      @foreach($getsubcat as $subcat)
                                      <option value="{{$subcat->id}}" {{ $subcat->id == $edit_posts->sub_category_id ?'selected':''}}>{{$subcat->subcategory_name}}</option>
                                      @endforeach
                                    </select>
                                    @error('sub_category_id')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror

                                  
                                </div>
                            </div>
                            {{-- ================================= --}}
                            <div class="row mt-2">
                                <!-- name -->
                                <div class="col-md-6"><label class="labels">Name</label>
                                    <input type="text" class="form-control" 
                                        value="{{$edit_posts['userdetail']['name']}}" disabled>
                                </div>
                                <div class="col-md-6"><label class="labels">Your you are </label>
                                    <!-- gender -->
                               

                                    <input type="text" class="form-control" 
                                    value="{{$edit_posts->you_are}}" disabled>
                                </div>
                            </div>
                            {{-- ========================================== --}}
                            <div class="row mt-2">
                                 {{-- Price --}}
                                <div class="col-md-6"><label class="labels">Price</label>
                                    <input type="text" class="form-control" name="expected_price"
                                        value="{{$edit_posts->expected_price}}">
                                </div>
                                {{-- Price --}}
                                {{-- Phone --}}
                                <div class="col-md-6"><label class="labels">Phone</label>
                                    <input type="text" class="form-control" name="phone"
                                        value="{{$edit_posts->phone}}">
                                </div>
                                @error('phone')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                                {{-- Phone --}}
                            
                            </div>
                            {{-- =============================================== --}}
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Title</label>
                                    {{-- <!-- Title  --> --}}
                                    <textarea class="form-control" rows="3" name="post_title">{!!$edit_posts->post_title!!}</textarea>
                                    {{-- <!-- Title  --> --}}
                                    @error('post_title')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror

                                </div>
                                 {{-- Post detail  --}}
                                <div class="col-md-12"><label class="labels">Post detail </label>
                                  
                                    <textarea class="form-control" rows="3" name="post_detail">{!!$edit_posts->post_detail!!}</textarea>
                                    @error('post_detail')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>

                                {{-- Post detail  --}}
                                {{-- Post Created Date  --}}
                                <div class="col-md-12 pt-2"><label class="labels">	Post Created Date </label>
                                    <!-- DOB -->
                                    <input disabled type="date" class="form-control"  value="{{date($edit_posts->create_date)}}">
                                </div>
                                {{-- Post Created Date  --}}




                            </div>
                         
                         
                        </div>
                </div>

                <!-- ==================== -->
                
                <div class="col-md-6">
                    <div class="p-3 pt-5 mt-5">
                   
            
                      
                        {{-- Post detail  --}}
                           {{-- Postcode --}}
                           <div class="col-md-12"><label class="labels">Postcode</label>
                          
                            <textarea class="form-control" rows="3" name="postcode">{!!$edit_posts->postcode!!}
                             </textarea>
                             @error('postcode')
                             <span class="text-danger"> {{$message}}</span>
                             @enderror
                        </div>
                        {{-- Postcode --}}
                        {{-- Edit Main post image --}}
                        <div class="col-md-12">
                            <label class="labels">Edit Main post image </label>
                        
                            <input name="main_image" class="form-control" type="file"
                                accept="image/*"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        @error('main_image')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror

                        <div class="col-md-12">
                            <img class=" mt-2" width="150px" id="output"
                            src="{{(!empty($edit_posts->main_image)) ? asset($edit_posts->main_image):url('upload/no_image.jpg')}}"
                            >
                        </div>
                            {{-- Edit Main post image --}}
                          {{-- active  --}}
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" value="1"
                             {{$edit_posts->status == 1 ?"checked" :""}} >
                            <label class="form-check-label" for="exampleCheck1">Active/Inactive</label>
                          </div>
                        {{-- active  --}}
                    </div>
                    <div class="mt-5 text-center">
                        <input type="submit" name="submit" class="btn btn-primary profile-button"
                            value="Submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- row end  -->

<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="category_id"]').on('change', function () {
            var category_id = $(this).val();
            console.log(category_id);
            if (category_id) {
                $.ajax({
                    url: "{{  url('/ajax') }}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="sub_category_id"]').html('')
                        var d = $('select[name="sub_category_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="sub_category_id"]').append(
                                '<option value="' + value.id + '">' + value.subcategory_name + '</option>');
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
