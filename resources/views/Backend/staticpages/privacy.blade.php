
@extends('backend.admin_master')
@section('title', 'Manage Privacy')
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
                <h3 class="text-dark mb-4">Manage Static Page/Privacy </h3>
                <div class="card shadow">
                    <div class="card-header py-3">  
                        <p class="text-primary m-0 font-weight-bold">
                            <a href="{{route('admin.dashboard')}}" class="btn btn-info">Back </a> 
                            <a href="" class="btn btn-success">Add Page </a></p>
                    </div>
              <p>this is  pending task</p>   
                    <div class="card-body">

                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No </th>
                                        <th>Page name</th>
                                        <th>Created at </th>
                                        <th>updated at</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <span class="badge badge-pill badge-success">Active</span>
                                            <span class="badge badge-pill badge-danger">Inactive</span>
                                        </td>
                                        <td>
                                  
                                    <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Active">
                                        <a href=""><i class=" fa fa-eye" style='font-size:20px;color:rgb(3, 99, 24)'> </i> </a>
                                    </button>
                               
                                    <button class="btn btn-light" style="margin-left: 5px;" type="submit"  title="Inactive">
                                        <a href=""><i class=" fa fa-eye-slash" style='font-size:20px;color:red'> </i></a>
                                    </button>
                                  
                                    <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Edit">
                                        <a href=""><i class="fa fa-pencil-alt" style="font-size: 15px;"></i></a>
                                    </button>

                                    <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Delete">
                                        <a href="" id="delete"><i class="fa fa-trash" style="font-size: 15px;"></i> </a>
                                    </button>
                                        </td>
                                    </tr>
                                </tbody>
                            
                            </table>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
  

  @endsection