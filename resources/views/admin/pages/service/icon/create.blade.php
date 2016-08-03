@extends('app')

@section('title')
Create Service Icon Page
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
        Create Service Icon Page
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Service Icon Page</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Add Service Icon</h3>
              </div>
              
              <form name="addServiceIconForm" action="{{action('ServiceController@store')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="services_id" value="1">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Background Image</label>
                      <input class="" name="bgImage" type="file">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Cover Image</label>
                      <input class="" name="coverImage" type="file">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      {{ Form::textarea('tag',null,['class'=>'form-control','placeholder'=>'tag']) }}
                    </div>
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