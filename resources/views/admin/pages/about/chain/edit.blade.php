@extends('app')

@section('title')
Edit Chain
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Chain
        <small>Page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> About</a></li>
        <li class="active"> Chain</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 1</h3>
              </div>
              <form name="editChainFrom" action="{{action('ChainController@update')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id" value="{{$chain->id}}">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      {{ Form::text('title1', $chain->title1 , ['class' => 'form-control' , 'placeholder' => 'page title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Detail</label>
                      {{ Form::text('content1', $chain->content1 , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
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
                        <input type="file" name="image1">
                        <input type="hidden" name="image1_old" value="{{$chain->image1}}"><br/>
                        <img src="{{url('saved_images/chain')}}/{{$chain->image1}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>
                </div>
              </div>
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Tier 2</h3>
                  </div>
                
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      {{ Form::text('title2', $chain->title2 , ['class' => 'form-control' , 'placeholder' => 'page title']) }}
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Detail</label>
                      {{ Form::text('content2', $chain->content2 , ['class' => 'form-control' , 'placeholder' => 'sub title']) }}
                    </div>
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
                        <input type="file" name="image2">
                        <input type="hidden" name="image2_old" value="{{$chain->image2}}"><br/>
                        <img src="{{url('saved_images/chain')}}/{{$chain->image2}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>


            

          </div>
        </div>
         


      </section>
    </section>

  </div>
@endsection