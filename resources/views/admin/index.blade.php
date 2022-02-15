@extends('admin.layouts.dashboard')


@section('content')

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>
  <div class="row ">
    <div class="col-12">@livewire('monthly-views-chart')</div>
    <div class="col-12 mb-4">@livewire('resources-by-grade')</div>
    <div class="col-12 mb-4">@livewire('video-status-chart')</div>
    <div class="col-12 mb-4">@livewire('document-status-chart')</div>
  </div>
@endsection