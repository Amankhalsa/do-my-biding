
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
                                @foreach($user_adds as $key => $adds)
    <tr>
    <td> {{$key+1}}</td>
    <td><img class=" mr-2" width="100" height="80" src="{{asset($adds->main_image)}}"><br>
     <span> {{$adds->post_title}}</span></td>
    <td>
      @if( $adds->status == 1)
      Published on: <br>
      {{Carbon\Carbon::parse($adds->created_at)->diffForHumans()}}<br>
      Expires on:
      @else
      <span class="text-danger ">Pending...</span>
      @endif
    </td>
    <td>Visits:	<br>
        Emails:	<br>
        Phone clicks:
    </td>
    <td>        
      <ul>
      <a href=""><li> VIP Carousel <i class="fa-solid fa-circle-question"></i></li></a>
      <a href=""><li>Featured <i class="fa-solid fa-circle-question"></i></li></a>
      <a href=""><li>Highlight <i class="fa-solid fa-circle-question"></i></li></a>
      <a href=""><li>Repost <i class="fa-solid fa-circle-question"></i></li></a>
      <a href=""><li>Urgent <i class="fa-solid fa-circle-question"></i></li></a>
      <a href=""><li>Website link <i class="fa-solid fa-circle-question"></i></li></a>
      </ul>
    </td>
    <td>
                                        
        <button class="btn btn-light" style="margin-left: 5px;" type="submit"  title="View">
          <a href="{{route('View.clasified.add',$adds->id)}}"> <i class=" fa fa-eye"> </i></a>
        </button>

        <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Modify">
          <a href="{{route('edit.clasified.add',$adds->id)}}"> <i class="fa fa-pencil-alt" style="font-size: 15px;"></i></a>
        </button>

        <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Delete">
          <a href="{{route('delete.clasified.add',$adds->id)}}" id="delete"><i class="fa fa-trash" style="font-size: 15px;"></i> </a>
        </button>
        
        <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Deactivate">
          <a href="" id="delete"><i class="fa fa-thumbs-up" style="font-size: 15px;"></i> </a>
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
  {{-- data table  --}}

</div>


</div>

</section>

<div class="backDrop"></div>




@endsection
