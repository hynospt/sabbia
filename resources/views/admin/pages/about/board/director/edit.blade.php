@extends('app')

@section('title')
Home
@endsection

@section('body')
  <div class="content-wrapper">
    
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
        <form name="directorUpdateForm" action="{{action('DirectorController@update')}}" method="post">
        	<input type="hidden" name="id" value="{{$director->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        	fullname = <input type="text" name="fullname" value="{{$director->fullname}}">
        	role = <input type="text" name="role" value="{{$director->role}}">
        	text = <input type="text" name="text" value="{{$director->text}}">
        	<input type="submit">
        </form>
      </section>
    </section>

  </div>
@endsection