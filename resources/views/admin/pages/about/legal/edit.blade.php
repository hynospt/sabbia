@extends('app')

@section('title')
Edit Legal
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
        Edit Legal
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Legal</li>
      </ol>

      <section class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Legal</h3>
              </div>
              
              <form name="editLegalFrom" action="{{action('LegalController@update')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id" value="{{$legal->id}}">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Page Title</label>
                      {{ Form::text('title', $legal->title , ['class' => 'form-control' , 'placeholder' => 'page title']) }}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Main Title</label>
                      {{ Form::text('mainTitle', $legal->mainTitle , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">subTitle1</label>
                      {{ Form::text('mainTitle', $legal->mainTitle , ['class' => 'form-control' , 'placeholder' => 'main title']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">subTitle1</label>
                      {{ Form::textarea('tag',$icon->tag,['class'=>'form-control','placeholder'=>'tag']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">subTitle1</label>
                      {{ Form::textarea('tag',$icon->tag,['class'=>'form-control','placeholder'=>'tag']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">subTitle2</label>
                      {{ Form::textarea('tag',$icon->tag,['class'=>'form-control','placeholder'=>'tag']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">subContent1</label>
                      {{ Form::textarea('tag',$icon->tag,['class'=>'form-control','placeholder'=>'tag']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">subContent2</label>
                      {{ Form::textarea('tag',$icon->tag,['class'=>'form-control','placeholder'=>'tag']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image 1</label>
                      {{ Form::textarea('tag',$icon->tag,['class'=>'form-control','placeholder'=>'tag']) }}
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image 2</label>
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
         <form name="editLegalFrom" action="{{action('LegalController@update')}}" method="post">
        title <input name="title" type="" value="{{$legal->title}}" / ><br/>
        mainTitle<input name="mainTitle" type="" value="{{$legal->mainTitle}}" / ><br/>
        subTitle1<input name="subTitle1" type="" value="{{$legal->subTitle1}}" / ><br/>
        subTitle2<input name="subTitle2" type="" value="{{$legal->subTitle2}}" / ><br/>
       subContent1 <input name="subContent1" type="" value="{{$legal->subContent1}}" / ><br/>
        subContent2<input name="subContent2" type="" value="{{$legal->subContent2}}" / ><br/>
        image1<input name="image1" type="" value="{{$legal->image1}}" / ><br/>
        image2<input name="image2" type="" value="{{$legal->image2}}" / ><br/>
        <br/>


        <input type="submit">
        </form>
      </section>
    </section>

  </div>
@endsection