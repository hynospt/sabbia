@extends('app')

@section('title')
Create Portfolio
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Portfolio
        <small>Portfolio</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Portfolio</a></li>
        <li class="active"> Add Portfolio</li>
      </ol>

      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Add Portfolio Form</h3>
              </div>
              
              <form name="addPortfolioForm" action="{{action('PortfolioController@item_store')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="board_id" value="1">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Partner Logo</label>
                      <input class="" name="partnerLogo" type="file">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Partner Name</label>
                      {{ Form::text('partnerCompanyName',null,['class'=>'form-control','placeholder'=>'partner company name']) }}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Partner Detail</label>
                      {{ Form::textarea('partnerContent',null,['class'=>'form-control','placeholder'=>'content']) }}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Background Image</label>
                        <input class="" name="partnerBackgroundImage" type="file">
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