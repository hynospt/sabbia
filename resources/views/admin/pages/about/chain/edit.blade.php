@extends('app')

@section('title')
Edit Chain
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Edit Chain
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Chain</li>
      </ol>

      <section class="content">
         <form name="editChainFrom" action="{{action('ChainController@update')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="mainTag" type="hidden" value="{{$chain->id}}" / ><br/>
        title1 <input name="title1" type="" value="{{$chain->title1}}" / ><br/>
        content1 <input name="content1" type="" value="{{$chain->content1}}" / ><br/>
        image1 <input name="image1" type="" value="{{$chain->image1}}" / ><br/>
        title2 <input name="title2" type="" value="{{$chain->title2}}" / ><br/>
        content2 <input name="content2" type="" value="{{$chain->content2}}" / ><br/>
        image2 <input name="image2" type="" value="{{$chain->image2}}" / ><br/>
        <br/>


        <input type="submit">
        </form>
      </section>
    </section>

  </div>
@endsection