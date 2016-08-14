@extends('app')

@section('title')
Edit Service Icon
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Edit Service Icon
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Service Icon Page</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Service Icon</h3>
              </div>
              
              <form name="EditServiceIconForm" action="{{action('ServiceController@icon_update')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="services_id" value="1">
                  <input type="hidden" name="id" value="{{$icon->id}}">

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Background Image</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input class="" name="bgImage" type="file">
                        <input type="hidden" name="bgImage_old" value="{{$icon->bgImage}}"/>
                        <br/>
                        <img src="{{url('saved_images/services')}}/{{$icon->bgImage}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Cover Image</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input class="" name="coverImage" type="file">
                        <input type="hidden" name="coverImage_old" value="{{$icon->coverImage}}"/>
                        <br/>
                        <img src="{{url('saved_images/services')}}/{{$icon->coverImage}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      {{ Form::textarea('tag',$icon->tag,['class'=>'form-control','placeholder'=>'tag']) }}
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