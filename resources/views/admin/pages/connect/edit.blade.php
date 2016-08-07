@extends('app')

@section('title')
Connect Edit
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
        Connect Edit
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Connect Edit</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 2</h3>
              </div>
              <form action="{{action('ConnectController@update')}}" method="post" name="editConnectPageForm" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Page Title</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="page title" type="text" value="{{$connect->title}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Page Content</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="page content" type="text" name="content" value="{{$connect->content}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Background Image</label>
                    <input type="file" name="bgImage">
                    <input type="hidden" name="bgImage_old" value="{{$connect->bgImage}}">
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