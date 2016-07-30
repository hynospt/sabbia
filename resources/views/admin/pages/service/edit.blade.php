@extends('app')

@section('title')
Edit Service Page
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Edit Service Page
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Service Page</li>
      </ol>

      <section class="content">
      	<form name="editServicePageForm" action="{{action('ServiceController@update')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
      		
      		title : <input name="title" value="{{$service->title}}"/><br/>
      		subtitle : <input name="subTitle" value="{{$service->subTitle}}"/><br/>

      		<input type="submit">
      	</form>
      </section>
    </section>

  </div>
@endsection