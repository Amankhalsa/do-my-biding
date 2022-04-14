
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

  <div class="tablesorter tablesorter_two">
    <div class="row align-items-center">
      <div class="col-auto">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" class="border-right">
        </div>
      </div>
      <div class="col">
        <span>Your alert filters </span>

      </div>
      <div class="col">
        <span> 	Created on </span>
      </div>
      <div class="col">
        <span class="border-right">Your region</span>
      </div>
      <div class="col">
        <span>Your category</span>
      </div>
      <p class="margin_none text-center">No alert at the moment</p>
    </div>
  </div>
  <div class="colspan_div">
    <div class="row">
      <div class="col-auto">
          <div class="tabsBtn">
            <button type="button" name="button">Create a new alert</button>
          </div>
      </div>
      </div>
    </div>
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
