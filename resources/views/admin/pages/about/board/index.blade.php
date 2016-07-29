@extends('app')

@section('title')
Board
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Board
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Board</li>
      </ol>

      <section class="content">
      	PAGE : <br/>
      	mainTag : {{$board->mainTag}} <br/>
        mainLogo : {{$board->mainBgImage}} <br/>
        mainLogo : {{$board->mainLogo}} <br/>
        titleRow2 : {{$board->titleRow2}} <br/>
        titleRow3 : {{$board->titleRow3}} <br/>
       contentRow3 : {{$board->contentRow3}}<br/>
        videoUrl1 : {{$board->videoUrl1}} <br/>
        videoUrl2 : {{$board->videoUrl2}} <br/>
        videoCaption1 : {{$board->videoCaption1}} <br/>
        videoCaption2 : {{$board->videoCaption2}} <br/>
        text2Row2 : {{$board->text2Row2}} <br/>
        philosophyImg : {{$board->philosophyImg}} <br/>
        philosophyTitle : {{$board->philosophyTitle}} <br/>
        philosophyContent : {{$board->philosophyContent}} <br/>
        <br/>
      	DIRECTOR : <br/>
      	@foreach($directors as $director)
      		direcor id {{$director->id}} <br/>
      		direcor fullname {{$director->fullname}}<br/>
      		direcor role {{$director->role}}<br/>
      		direcor text {{$director->text}}<br/>
      		<br/>
      	@endforeach
      </section>
    </section>

  </div>
@endsection