@extends('front.app')

@section('title')
About
@endsection

@section('body')
	<div id="about" class ="row col-xs-hide" style="background-image:url('{{url('saved_images/about', $about->mainBgImage)}}')">
		<div class="col-md-3 col-xs-12 pull-right margin-top-50 padding-md-top-75">
			<h1> {{ $about->mainTag }} </h1>
		</div>
			<img id="aboutIcon" src="{{url('saved_images/about', $about->mainLogo)}}" class="wdt-10"/>
	</div>

	<div id="board" class="row">
		<div class="row md-no-margin">
			<div class="col-md-4 col-xs-12 margin-top-10 margin-left-50 txtAlgnCenter">
				<h1 class="margin-top-10">{{ $about->titleRow2 }}</h1>
				<hr class="veryThin bg-black wdt-100">
			</div>
		</div>

		@foreach($directors as $index => $director)
			{{-- */$index ++;/* --}}
			@if($index % 2 !=0)
				<div class="row md-no-margin director-row-padding-left margin-bottom-10">
			@endif
				<div class="col-md-2 col-xs-12 txtAlgnCenter">
					<img class="img-responsive" src="{{url('saved_images/directors', $director->photo)}}" class="margin-top-10 margin-left-50" />
				</div>
				<div class="col-md-4 col-xs-12 paddingLeftRight40 justifyTxtAlight">
					<h2 class="txtAlgnCenter director-heading"><b>{{$director->fullname}}</b></h2>
					<h3 class="director-sub-heading">{{$director->role}}</h3>
					<h4>
						{{$director->text}}
					</h4>
				</div>	
			@if($index % 2 == 0)
				</div>
			@endif
		@endforeach
		@if($index % 2 != 0)
			</div>
		@endif

	</div>

	<div class="banner3 row margin-bottom-30 margin-top-10"></div>
	
	<div id="glance"class="row">
		<div class="col-md-6 col-xs-12 margin-top-10">
			<h1 class="margin-top-10">{{ $about->titleRow3 }}</h1>
			<hr class="thin bg-gray wdt-75 pull-left">
			<h2 class="justifyTxtAlight"><i></br></br></br>
				{{$about->text2Row2}}
			</i>
			</h2>
		</div>
		
		<div class="col-md-6 col-xs-12 xl-padding-left-365 md-padding-left-100">
			<div class="col-md-12 col-xs-12 margin-top-50 mPadding10p25p">
				<div id="stories-about" class="">
					<a href="{{$about->videoUrl1}}" class="color-white">
						<img src ="{{url('assets')}}/sabbia/img/youtube.png" style="width:8%;height:8%;" class="br-50 margin-right-10"/>{{$about->videoCaption1}}
					</a>
					</br>
					</br>
					<a href="{{$about->videoUrl2}}" class="color-white">
						<img src ="{{url('assets')}}/sabbia/img/youtube.png" style="width:8%;height:8%;" class="br-50 margin-right-10"/>{{$about->videoCaption2}}
					</a>
				</div>	
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="bg-gray margin-top-50 philosophy padding-md-top-15 md-padding-15">
					<img src="{{url('saved_images/about', $about->philosophyImg)}}" class="margin-top-10 margin-right-10 padding-md-right-15"/>
					<h4 class="ta-l pos-abs">{{$about->philosophyTitle}}</h4>
					<h2 class="lg-balancing-philosopy">
						{{$about->philosophyContent}}
					</h2>
				</div>
			</div>
		</div>
			
	</div>
@endsection