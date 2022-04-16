@extends('layouts.app')

@section('content')

	
<div class="content-wrapper">
  <div class="container-fluid">
    
    <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card">
          <div class="card-body">
              <p class="text-white mb-0">Average Lifespan of user <span class="float-right badge badge-light">Daily</span></p>
               <div class="">
               <h4 class="mb-0 py-3">{{ $average  }} <span class="float-right"><i class="fa fa-user"></i></span></h4>
               </div>
               <div class="progress-wrapper">
                <div class="progress" style="height:5px;">
                <div class="progress-bar" style="width:60%"></div>
                 </div>
              </div>
              <p class="mb-0 mt-2 text-white small-font">Compare to last month <span class="float-right">+15% <i class="fa fa-long-arrow-up"></i></span></p>
            </div>
          </div>
         </div>
    
    
         <div class="col-12 col-lg-6 col-xl-4">
          <div class="card">
          <div class="card-body">
              <p class="text-white mb-0">Total User <span class="float-right badge badge-light">Overall</span></p>
               <div class="">
               <h4 class="mb-0 py-3">{{ $user }}  <span class="float-right"><i class="fa fa-user-group"></i></span></h4>
               </div>
               <div class="progress-wrapper">
                <div class="progress" style="height:5px;">
                <div class="progress-bar" style="width:80%"></div>
                 </div>
              </div>
              <p class="mb-0 mt-2 text-white small-font">Compare to yesterday <span class="float-right">+43% <i class="fa fa-long-arrow-up"></i></span></p>
            </div>
          </div>
         </div>
    
         <div class="col-12 col-lg-6 col-xl-4">
          <div class="card">
          <div class="card-body">
              <p class="text-white mb-0">Total Purchase <span class="float-right badge badge-light">Overall</span></p>
               <div class="">
               <h4 class="mb-0 py-3">{{$purchase}} <span class="float-right"><i class="fa fa-usd"></i></span></h4>
               </div>
               <div class="progress-wrapper">
                <div class="progress" style="height:5px;">
                <div class="progress-bar" style="width:45%"></div>
                 </div>
              </div>
              <p class="mb-0 mt-2 text-white small-font">Compare to last week <span class="float-right">+32% <i class="fa fa-long-arrow-up"></i></span></p>
            </div>
          </div>
         </div>
         
        <div class="col-md-12">
            <a href="{{ route('details') }}" class="btn btn-white btn-sm btn-round btn-block waves-effect waves-light m-1">See all data</a>
        </div>
        
       </div>
</div>

@endsection
