@extends('app')

@section('title')
Edit Legal
@endsection

@section('body')
  <div class="content-wrapper">
    
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
         <form name="editLegalFrom" action="{{action('LegalController@update')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="mainTag" type="hidden" value="{{$legal->id}}" / ><br/>
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