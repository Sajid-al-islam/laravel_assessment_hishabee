@extends('layouts.app')
   <!--Start sidebar-wrapper-->
   
   <!--End sidebar-wrapper-->

<!--Start topbar header-->

<!--End topbar header-->
@section('content')
<div class="clearfix"></div>
	
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
   <div class="row pt-2 pb-2">
      <div class="col-sm-9">
          <h4 class="page-title">Data Tables</h4>
         
     </div>
     <div class="col-sm-3">
     <div class="btn-group float-sm-right">
      <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
      <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
      <span class="caret"></span>
      </button>
      <div class="dropdown-menu">
        <a href="javaScript:void();" class="dropdown-item">Action</a>
        <a href="javaScript:void();" class="dropdown-item">Another action</a>
        <a href="javaScript:void();" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
      </div>
    </div>
   </div>
   </div>
  <!-- End Breadcrumb-->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><i class="fa fa-table"></i>Total Average Users lifespan</div>
          <div class="card-body">
            <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              <thead>
                  <tr>
                      <th>User Id</th>
                      <th>Average Lifespan (Days)</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ $key  }}</td>
                        <td>{{ $value }}</td>
                        {{-- <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td> --}}
                    </tr>
                  @endforeach
                  
              </tbody>
              <tfoot>
                  <tr>
                    <th>User Id</th>
                    <th>Average Lifespan (Days)</th>
                  </tr>
              </tfoot>
          </table>
          </div>
          </div>
        </div>
      </div>
    </div><!-- End Row-->

<!--start overlay-->
@endsection


	  