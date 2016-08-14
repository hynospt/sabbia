@extends('app')

@section('title')
Edit Portfolio
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Edit Portfolio
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Portfolio</li>
      </ol>

      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Service Icon</h3>
              </div>
              
              <form name="editServiceIconForm" action="{{action('PortfolioController@item_update')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="pageId" value="1">
                  <input type="hidden" name="id" value="{{$item->id}}">
                  

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Background Image</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input class="" name="partnerBackgroundImage" type="file">
                        <input type="hidden" name="partnerBackgroundImage_old" value="{{$item->partnerBackgroundImage}}"/>
                        <br/>
                        <img src="{{url('saved_images/portfolio/item')}}/{{$item->partnerBackgroundImage}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Partner Logo</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body txt-center">
                        <input class="" name="partnerLogo" type="file">
                        <input ty=e"hidden name="partnerLogo_old" value="{{$item->partnerLogo}}"/>
                        <br/>
                        <img src="{{url('saved_images/portfolio/item')}}/{{$item->partnerLogo}}">
                      </div><!-- /.box-body -->
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      {{ Form::textarea('partnerContent',$item->partnerContent,['class'=>'form-control','placeholder'=>'partner content']) }}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Partner Company Name</label>
                      {{ Form::textarea('partnerCompanyName',$item->partnerCompanyName,['class'=>'form-control','placeholder'=>'partner company']) }}
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