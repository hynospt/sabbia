@extends('app')

@section('title')
Add Director
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Add Director
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Director</li>
      </ol>

      <section class="content">
        <form name="addDirectorForm" action="store" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          fullname
          <input type="text" name="fullname">
          role
          <input type="text" name="role">
          text
          <input type="textarea" name="text">
          <input type="submit">
        </form>
      </section>
    </section>

  </div>
@endsection