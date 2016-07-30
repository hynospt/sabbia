@extends('app')

@section('title')
Connect Edit
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Connect Edit
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Connect Edit</li>
      </ol>

      <section class="content">
        <form action="{{action('ConnectController@update')}}" method="post" name="editConnectPageForm">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          title  <input name="title" value="{{$connect->title}}"/> <br/>
          content  <input name="content" value="{{$connect->content}}"/> <br/>
          bgImage  <input name="bgImage" value="{{$connect->bgImage}}"/> <br/>
          <input type="submit">
        </form>
      
      </section>
    </section>

  </div>
@endsection