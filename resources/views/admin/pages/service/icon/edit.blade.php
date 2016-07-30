@extends('app')

@section('title')
Edit Service Icon
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Edit Service Icon
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Service Icon Page</li>
      </ol>

      <section class="content">
      	<form name="editServiceIconForm" action="{{action('ServiceController@icon_update')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
      		<input type="hidden" name="id" value="{{$icon->id}}">
      		bgImage : <input name="bgImage" value="{{$icon->bgImage}}"/><br/>
      		coverImage : <input name="coverImage" value="{{$icon->coverImage}}"/><br/>

      		<input type="submit">
      	</form>
      </section>
    </section>

  </div>
@endsection