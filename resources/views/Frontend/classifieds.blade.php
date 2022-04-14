
@extends('frontend.home_master')
@section('title', 'Dashboard' )
@section('home_content')
<!-- section 1 -->
@include('frontend.body.navigation')
{{-- <div class="headerHeight"></div> --}}
<section>
  <div class="vs_account_banners">
    <div class="container">
@include('frontend.body.message')
  
@include('frontend.body.message2')

<div class="tablesorter">
  {{-- <div class="row align-items-center">
    <div class="col-auto">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" class="border-right">
      </div>
    </div>
    <div class="col text-center">
      <span>Details </span>
    </div>
    <div class="col text-center">
      <span>Status </span>
    </div>
    <div class="col text-center">
      <span class="border-right">Statistics</span>
    </div>
    <div class="col text-center">
      <span>Premium Upgrade Options</span>
    </div>
    <div class="col text-center">
      <span>Action  </span>
    </div>

  </div> --}}
  {{-- data table  --}}
  <div id="wrapper">
  
    

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
      
        <div class="container-fluid">
     
            <div class="card shadow">
              
                <div class="card-body">
  
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                  <th scope="col" width="5%">S. no</th>
                                  <th scope="col" width="20%">Details</th>
                                  <th scope="col" width="15%">Status</th>
                                  <th scope="col" width="15%">Statistics</th>
                                  <th scope="col" width="15%">Premium Upgrade Options</th>
                                  <th scope="col" width="5%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                      
                                <tr>
                                    <td> 1</td>
                                    <td> <img class=" mr-2" width="100" height="80" src=""> Detail</td>
                                    <td>{{$user->name}}</td>
                                    <td></td>
                                    <td>        <ul>
                                      <a href=""> <li> VIP Carousel <i class="fa-solid fa-circle-question"></i></li></a>
                                      <a href="">   <li>Featured <i class="fa-solid fa-circle-question"></i></li></a>
                                      <a href="">  <li>Highlight <i class="fa-solid fa-circle-question"></i></li></a>
                                      <a href="">  <li>Repost <i class="fa-solid fa-circle-question"></i></li></a>
                                      <a href="">  <li>Urgent <i class="fa-solid fa-circle-question"></i></li></a>
                                      <a href="">  <li>Website link <i class="fa-solid fa-circle-question"></i></li></a>
                                     </ul></td>
                                    <td>
                                        
                                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                                        <a href="">    <i class=" fa fa-eye"> </i></a>
                                        </button>
  
                                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                                    <a href="">
                                        <i class="fa fa-pencil-alt" style="font-size: 15px;"></i>
                                         </a>
                                        </button>
                            
                                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                                        <a href="" id="delete">
                                       
                                        <i class="fa fa-trash" style="font-size: 15px;"></i> </a>
                                        </button>
                                       
                                          <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                                            <a href="" id="delete">
                                           
                                            <i class="fa fa-thumbs-up" style="font-size: 15px;"></i> </a>
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
  {{-- data table  --}}

</div>

<div class="colspan_div">
  <div class="row">
    <div class="col-auto">
        <div class="tabsBtn">
          <button type="button" name="button">repost</button>
        </div>
    </div>
    <div class="col-auto">
        <div class="tabsBtn">
          <button type="button" name="button">Repost all eligible ads</button>
        </div>
    </div>
    <div class="col-auto">
        <div class="tabsBtn">
          <button type="button" name="button">Deactivate</button>
        </div>
    </div>
  </div>
</div>
</div>

</section>

<div class="backDrop"></div>




@endsection
