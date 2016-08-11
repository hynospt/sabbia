@extends('app')

@section('title')
Edit Home
@endsection

@section('body')
  <div class="content-wrapper">
    @if (session()->has('flash_notification.message'))
      <div class="alert alert-{{ session('flash_notification.level') }}">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {!! session('flash_notification.message') !!}
      </div>
    @endif
    <section class="content-header">
      <h1>
        Home
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Homepage</li>
      </ol>

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 1</h3>
              </div>
              <form role="form" method="post" action="{{action('HomeController@update')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      <input class="form-control" id="headerRow1" name="headerRow1" placeholder="heading" type="text" value="{{$home->headerRow1}}">
                    </div>
                  </div>
                  

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Caption Left</label>
                      <input class="form-control" id="exampleInputPassword1" placeholder="caption" name="text1Row1" type="text" value="{{$home->text1Row1}}">
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Caption right</label>
                      <input class="form-control" id="exampleInputPassword1" placeholder="caption" name="text2Row1" type="text" value="{{$home->text2Row1}}">
                    </div>
                  </div>

                  

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">url video</label>
                      <input class="form-control" id="exampleInputPassword1" placeholder="url" type="text" name="videoUrl" value="{{$home->videoUrl}}">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Video caption</label>
                      <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text" name="videoText" value="{{$home->videoText}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <!-- <label for="exampleInputPassword1">Background Image</label> -->
                      <input class="form-control" id="exampleInputPassword1" name="oldImgBgRow1" placeholder="caption" type="hidden" value="{{$home->bgImageRow1}}">
                      <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">Background Image</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          </div><!-- /.box-tools -->
                        </div><!-- /.box-header -->
                        <div class="box-body txt-center">
                          <input class="" id="exampleInputPassword1" name="bgImageRow1" placeholder="caption" type="file">
                          <br/>
                          <img src="{{url('saved_images/home')}}/{{$home->bgImageRow1}}">
                        </div><!-- /.box-body -->
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <!-- <label for="exampleInputFile">Video Icon</label> -->
                      <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">Video Icon</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          </div><!-- /.box-tools -->
                        </div><!-- /.box-header -->
                        <div class="box-body txt-center">
                          <input id="exampleInputFile" name="videoIcon" type="file">
                          <br/>
                          <input name="oldVideoIcon" value="{{$home->videoIcon}}" type="hidden">
                          <img src="{{url('saved_images/home')}}/{{$home->videoIcon}}">
                        </div><!-- /.box-body -->
                      </div>

                      <!-- <p class="help-block">max size MB</p> -->
                    </div>
                  </div>

                  
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
          </div>

          
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 2</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Product Name</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="product name" type="text" value="{{$home->productName}}" name="productName">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">product price</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="product price" type="text" name="productPrice" value="{{$home->productPrice}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">unit type</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="unit type" type="text" name="unitType" value="{{$home->unitType}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">text 1 row 2</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="Text 1 row 2" type="text" name="text1Row2" value="{{$home->text1Row2}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">text 2 row 2</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="text 2 row 2" type="text" name="text2Row2" value="{{$home->text2Row2}}">
                </div>
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">bg img 2</label> -->
                  <input class="form-control" id="exampleInputPassword1" name="oldImgBgRow2" placeholder="caption" type="hidden" value="{{$home->bgImageRow2}}">
                      
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">Background Image</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body txt-center">
                      <input class="" id="exampleInputPassword1" placeholder="bg img 1" name="bgImageRow2" type="file" value="">
                      <br/>
                      <img src="{{url('saved_images/home')}}/{{$home->bgImageRow2}}">
                    </div><!-- /.box-body -->
                  </div>

                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 3</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">porto image</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="caption" type="text" name="portfolioImage" value="{{$home->portfolioImage}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">porto tag</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text" name="portfolioTag" value="{{$home->portfolioTag}}">
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