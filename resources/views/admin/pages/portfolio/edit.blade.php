@extends('app')

@section('title')
Portfolio Edit
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
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

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Background Image</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="bgImage">
                        <input type="hidden" name="bgImage_old" value="{{$portfolio->bgImage}}">
                        <br/>
                        <img src="{{url('saved_images/portfolio')}}/{{$portfolio->bgImage}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Logo</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="logo">
                        <input type="hidden" name="logo_old" value="{{$portfolio->logo}}">
                        <br/>
                        <img src="{{url('saved_images/portfolio')}}/{{$portfolio->logo}}">
                      </div><!-- /.box-body -->
                    </div>
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