@extends('app')

@section('title')
Portfolio Edit
@endsection

@section('body')
  <div class="content-wrapper">
    @if (session()->has('flash_notification.message'))
      <div class="alert alert-{{ session('flash_notification.level') }}">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

          {!! session('flash_notification.message') !!}
          <ul style="list-style:none;">
            <li><B>Errors: </B></li>
          </uil>
          <ul>
            @foreach($errors->messages() as $key=>$value)
              <li>{!! sprintf("%s - %s", $key, $value[0]) !!}</li>
            @endforeach
          </ul>
      </div>
    @endif
    <section class="content-header">
      <h1>
        Portfolio Edit
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Portfolio Edit</li>
      </ol>

      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 2</h3>
              </div>
              <form action="{{action('PortfolioController@update')}}" method="post" name="editPortfolioPageForm" enctype = "multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Page Title</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="page title" type="text" value="{{$portfolio->title}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Partner</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="page content" type="text" name="partners" value="{{$portfolio->partners}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Background Image</label>
                    <input type="file" name="bgImage">
                    <input type="hidden" name="bgImage_old" value="{{$portfolio->bgImage}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <input type="file" name="logo">
                    <input type="hidden" name="logo_old" value="{{$portfolio->logo}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Row Title</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="page content" type="text" name="lastRowTitle" value="{{$portfolio->lastRowTitle}}">
                  </div>
                </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

              </form>
            </div>
          </div>
        </div>
        
      </section>
    </section>

  </div>
@endsection