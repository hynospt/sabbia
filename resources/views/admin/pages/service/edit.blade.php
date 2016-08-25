@extends('app')

@section('title')
Edit Service Page
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Service
        <small>Page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Services</a></li>
        <li class="active">Edit Page</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
              </div>
              <form name="editServicePageForm" action="{{action('ServiceController@update')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Heading</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="page title" type="text" value="{{$service->title}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subheading</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="page content" type="text" name="subTitle" value="{{$service->subTitle}}">
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