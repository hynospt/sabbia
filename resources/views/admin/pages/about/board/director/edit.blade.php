@extends('app')

@section('title')
Edit Director
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Edit Director
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Director</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Director Form</h3>
              </div>
              
              <form name="directorUpdateForm" action="{{action('DirectorController@update')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="board_id" value="1">
                  <input type="hidden" name="id" value="{{$director->id}}">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Fullname</label>
                      {{ Form::text('fullname',$director->fullname,['class'=>'form-control','placeholder'=>'fullname']) }}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Role</label>
                      {{ Form::text('role',$director->role,['class'=>'form-control','placeholder'=>'Role']) }}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      {{ Form::textarea('text',$director->text,['class'=>'form-control','placeholder'=>'content']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Photo</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="photo">
                        <input type="hidden" name="photo_old" value="{{$director->photo}}">
                        <br/>
                        <img src="{{url('saved_images/directors')}}/{{$director->photo}}">
                      </div><!-- /.box-body -->
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