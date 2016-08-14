@extends('app')

@section('title')
Edit Board
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Edit About
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Board</li>
      </ol>

      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Chain</h3>
              </div>
              <form name="editBoardFrom" action="{{action('AboutController@update')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id" value="{{$board->id}}">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Main Tag</label>
                      {{ Form::text('mainTag', $board->mainTag , ['class' => 'form-control' , 'placeholder' => 'page title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Main Background</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="mainBgImage">
                        <input type="hidden" name="mainBgImage_old" value="{{$board->mainBgImage}}">
                        <br/>
                        <img src="{{url('saved_images/about')}}/{{$board->mainBgImage}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Main Logo</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="mainLogo">
                        <input type="hidden" name="mainLogo_old" value="{{$board->mainLogo}}"><br/>
                        <img src="{{url('saved_images/about')}}/{{$board->mainLogo}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title Row II</label>
                      {{ Form::text('titleRow2', $board->titleRow2 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title Row III</label>
                      {{ Form::text('titleRow3', $board->titleRow3 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content Row III</label>
                      {{ Form::text('contentRow3', $board->contentRow3 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Video Url I</label>
                      {{ Form::text('videoUrl1', $board->videoUrl1 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Video Url II</label>
                      {{ Form::text('videoUrl2', $board->videoUrl2 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Video Caption I</label>
                      {{ Form::text('videoCaption1', $board->videoCaption1 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Video Caption II</label>
                      {{ Form::text('videoCaption2', $board->videoCaption2 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Text 2 Row 2</label>
                      {{ Form::text('text2Row2', $board->text2Row2 , ['class' => 'form-control' , 'placeholder' => 'page title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Philosoppy Image</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="philosophyImg">
                        <input type="hidden" name="philosophyImg_old" value="{{$board->philosophyImg}}">
                        <br/>
                        <img src="{{url('saved_images/about')}}/{{$board->philosophyImg}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Philosoppy Title</label>
                      {{ Form::text('philosophyTitle', $board->philosophyTitle , ['class' => 'form-control' , 'placeholder' => 'sub title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Philosoppy Content</label>
                      {{ Form::text('philosophyContent', $board->philosophyContent , ['class' => 'form-control' , 'placeholder' => 'sub title']) }}
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