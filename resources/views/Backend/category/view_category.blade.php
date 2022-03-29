@extends('backend.admin_master')
@section('title', 'View site Category')
@section('admin_section')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
<!--data table -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <div id="wrapper">
  
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
          
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Manage Site/Category </h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        
                        <p class="text-primary m-0 font-weight-bold"><a href="{{route('add.front.category')}}" class="btn btn-success" >

                        Add Category </a> </p>
                       
                    </div>
                    <div class="card-body">

                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Parent cat  id  </th>
                                        <th>Category Name</th>
                                        
                                        <th>Maximum img allowed  </th>
                                        <th>Post validity interval in days   </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($get_category as $key => $value)
                                    <tr>
<td>
{{$key+1}}</td>
<td>    </td>
<td> {{$value->category_name}} </td>
<td class="text-center">  {{$value->maximum_images_allowed}}</td>
<td>  </td>

<td>



<button class="btn btn-light" style="margin-left: 5px;" type="submit">
<a href="{{route('edit.front.category',$value->id)}}">
    <i class="fa fa-pencil-alt" style="font-size: 15px;"></i>
</a>
</button>
<button class="btn btn-light" style="margin-left: 5px;" type="submit">
<a href="{{route('delete.front.category',$value->id)}}" id="delete">
    <i class="fa fa-trash" style="font-size: 15px;"></i> 
</a>
</button>

</td>
                                    </tr>   
                        @endforeach
                                </tbody>
                            
                            </table>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
  
 


  @endsection