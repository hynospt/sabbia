@extends('app')

@section('title')
Edit Board
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Edit Board
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Board</li>
      </ol>

      <section class="content">

        <form name="editBoardFrom" action="{{action('AboutController@update')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          mainTag <input name="mainTag" type="" value="{{$board->mainTag}}" / ><br/>
        mainLogo <input name="mainBgImage" type="" value="{{$board->mainBgImage}}" / ><br/>
        mainLogo<input name="mainLogo" type="" value="{{$board->mainLogo}}" / ><br/>
        titleRow2<input name="titleRow2" type="" value="{{$board->titleRow2}}" / ><br/>
        titleRow3<input name="titleRow3" type="" value="{{$board->titleRow3}}" / ><br/>
       contentRow3 <input name="contentRow3" type="" value="{{$board->contentRow3}}" / ><br/>
        videoUrl1<input name="videoUrl1" type="" value="{{$board->videoUrl1}}" / ><br/>
        videoUrl2<input name="videoUrl2" type="" value="{{$board->videoUrl2}}" / ><br/>
        videoCaption1<input name="videoCaption1" type="" value="{{$board->videoCaption1}}" / ><br/>
        videoCaption2<input name="videoCaption2" type="" value="{{$board->videoCaption2}}" / ><br/>
        text2Row2<input name="text2Row2" type="" value="{{$board->text2Row2}}" / ><br/>
        philosophyImg<input name="philosophyImg" type="" value="{{$board->philosophyImg}}" / ><br/>
        philosophyTitle<input name="philosophyTitle" type="" value="{{$board->philosophyTitle}}" / ><br/>
        philosophyContent<input name="philosophyContent" type="" value="{{$board->philosophyContent}}" / ><br/>
        <br/>


        <input type="submit">
        </form>

      </section>
    </section>

  </div>
@endsection