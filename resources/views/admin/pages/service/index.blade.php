@extends('app')

@section('title')
Service Page
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Service
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Service Page</li>
      </ol>

      <section class="content">
        title : {{$service->title}} <br/>
        subTitle : {{$service->subTitle}} <br/>

        ICON :
        @foreach($icons as $icon)
          {{$icon->bgImage}} <br/>
          {{$icon->coverImage}} <br/>
        @endforeach
      </section>
    </section>

  </div>
@endsection