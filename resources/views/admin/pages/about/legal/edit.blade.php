@extends('app')

@section('title')
Edit Legal
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Legal
        <small>Page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> About</a></li>
        <li class="active">Legal</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 1</h3>
              </div>
              
              <form name="editLegalFrom" action="{{action('LegalController@update')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id" value="{{$legal->id}}">
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      {{ Form::text('title', $legal->title , ['class' => 'form-control' , 'placeholder' => 'page title']) }}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading Details</label>
                      {{ Form::text('mainTitle', $legal->mainTitle , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subheading I</label>
                      {{ Form::text('subTitle1', $legal->subTitle1 , ['class' => 'form-control' , 'placeholder' => 'sub title']) }}
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subheading II</label>
                      {{ Form::text('subTitle2', $legal->subTitle2 , ['class' => 'form-control' , 'placeholder' => 'sub title']) }}
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subdetail I</label>
                      {{ Form::textarea('subContent1', $legal->subContent1 , ['class' => 'form-control' , 'placeholder' => 'sub content']) }}
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subdetail II</label>
                      {{ Form::textarea('subContent2', $legal->subContent2 , ['class' => 'form-control' , 'placeholder' => 'sub content']) }}
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Image I</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="image1">
                        <input type="hidden" name="image1_old" value="{{$legal->image1}}">
                        <br/>
                        <img src="{{url('saved_images/legal')}}/{{$legal->image1}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Image II</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input type="file" name="image2">
                        <input type="hidden" name="image2_old" value="{{$legal->image2}}">
                        <br/>
                        <img src="{{url('saved_images/legal')}}/{{$legal->image2}}">
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