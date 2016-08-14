@extends('app')

@section('title')
Edit Profile
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Edit Profile
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profile</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Account Info</h3>
              </div>
              <form action="{{action('ProfileController@update')}}" method="post" name="editProfilePageForm" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="name" type="text" value="{{$user->name}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="email" type="email" name="email" value="{{$user->email}}">
                  </div>

                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Photo</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body txt-center">
                      <input type="file" name="photo">
                      <input type="hidden" name="photo_old" value="{{$user->photo}}">
                      <br/>
                      <img src="{{url('saved_images/user')}}/{{$user->photo}}">
                    </div><!-- /.box-body -->
                  </div>

                </div>
              
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

             
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Change Password</h3>
              </div>
              <form action="{{action('ProfileController@update_password')}}" method="post" name="editProfilePageForm" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Old Password</label>
                    <input disabled class="form-control" id="exampleInputPassword1" placeholder="password" type="password" name="old_password" value="{{$user->password}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="password" type="password" name="password" value="">
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