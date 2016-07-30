@extends('app')

@section('title')
Portfolio Edit
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Portfolio Edit
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Portfolio Edit</li>
      </ol>

      <section class="content">
        <form action="{{action('PortfolioController@update')}}" method="post" name="editPortfolioPageForm">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          title  <input name="title" value="{{$portfolio->title}}"/> <br/>
          bgImage  <input name="bgImage" value="{{$portfolio->bgImage}}"/> <br/>
          logo  <input name="logo" value="{{$portfolio->logo}}"/> <br/>
          lastRowTitle  <input name="lastRowTitle" value="{{$portfolio->lastRowTitle}}"/> <br/>
          partners  <input name="partners" value="{{$portfolio->partners}}"/> <br/>
          type  <input name="type" value="{{$portfolio->type}}"/> <br/>
          <input type="submit">
        </form>
      
      </section>
    </section>

  </div>
@endsection