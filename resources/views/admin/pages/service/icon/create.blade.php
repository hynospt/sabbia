@extends('app')

@section('title')
Create Service Icon Page
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Create Service Icon Page
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Service Icon Page</li>
      </ol>

      <section class="content">
      	<form name="addServiceIconForm" action="{{action('ServiceController@store')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
      		bgImage : <input name="bgImage" /><br/>
      		coverImage : <input name="coverImage" /><br/>

      		<input type="submit">
      	</form>
      </section>
    </section>

  </div>
@endsection