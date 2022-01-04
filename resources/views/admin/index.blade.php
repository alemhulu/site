@extends('admin.layouts.dashboard')
@section('style')
@livewireStyle
@endsection

@section('script')
@livewireScript
@endsection

@section('content')

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>
  <div class="row">
    <div class="col-6">@livewire('monthly-views-chart')</div>
    <div class="col-6">@livewire('monthly-views-chart')</div>
  </div>
  
  
  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white yellow o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-comments"></i>
          </div>
          <div class="mr-5">Grade 9</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white red o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5">Grade 10</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white lblue o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-shopping-cart"></i>
          </div>
          <div class="mr-5">Grade 11</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white dblue o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-life-ring"></i>
          </div>
          <div class="mr-5">Grade 12</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- Area Chart Example
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-area"></i>
      Area Chart Example</div>
    <div class="card-body">
      <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div> -->

  <!-- DataTables Example -->
  <div class="card mb-3">
    <!-- <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example</div> -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Descripition</th>
              <th>Thumbnail</th>

              <th>Grade</th>
              <th>Course</th>
              <th>Download</th>
              <th>View</th>
              <th>Like</th>
              <th>Deslike</th>
              
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Descripition</th>
              <th>Thumbnail</th>
              <th>Grade</th>
              <th>Course</th>
              <th>Download</th>
              <th>View</th>
              <th>Like</th>
               <th>Deslike</th>
               
            </tr>
          </tfoot>
          <tbody>
          @foreach($resources as $resource)
            <tr>
              <td >{{$resource->description}}</td>
               <td><img src="{{$resource->thumbnailLocation}}" alt="{{ $resource['image_url'] }}" width="100" height="60px"></td>
              @if($resource->grade_id!=null)
              <td>G-{{$resource->grade->name}}</td>
              @else
              <td>All</td>
              @endif
              <td>{{$resource->course->name}}</td>
              <td class="yellow">{{$resource->download}}</td>
              <td class="red">{{$resource->view}}</td>
              <td class="lblue">{{$resource->like}}</td>
              <td class="dblue">{{$resource->deslike}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

@endsection