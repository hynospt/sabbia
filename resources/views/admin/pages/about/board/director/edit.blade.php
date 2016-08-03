@extends('app')

@section('title')
Edit Director
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
              
              <form name="directorUpdateForm" action="{{action('DirectorController@update')}}" method="post">
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