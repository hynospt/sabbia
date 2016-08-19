@extends('front.app')

@section('title')
	Connect
@endsection

@section('body')
	<div class="row">
		<div class="col-md-4 col-xs-12 padding-md-top-15 lg-padding-top-25 padding-xs-50">
			<h1 style="color:rgb(8, 73, 117)">{{$connect->title}}</h1>
			<hr class="wdt-100 pull-left" style="border-top:1px solid #000">
			<h2 class="main-text" >
			<i class="whiteTxt" style="color:#878888">
				{{$connect->content}}
			</i>
			</h2>
		</div>
		<div class="col-md-8 col-xs-12">
			<img class="img-responsive" src="{{url('saved_images/connect', $connect->bgImage)}}">
		</div>
	</div>
@endsection