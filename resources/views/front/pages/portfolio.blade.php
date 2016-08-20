@extends('front.app')

@section('title')
	Portfolio
@endsection

@section('body')
<div id="firstPortfolio" class ="portfolio row" style="background-image:url('{{url('saved_images/portfolio', $portfolio->bgImage)}}')">
	<div class="col-md-3 col-xs-12 pull-right margin-top-50 padding-md-top-75">
		<h1 class="txtAlgnCenter"> {{$portfolio->title}} </h1>
	</div>
	<img id="portfolioIcon" src="{{url('saved_images/portfolio' , $portfolio->logo)}}" class="wdt-10"/>
</div>

<div class="row banner1"></div>

@foreach($items as $key => $item)
	{{-- */ $key ++;/* --}}

	@if($key < 9)
		{{-- */ $key = '0'.$key ;/* --}}
	@endif
	<div class="bg-gray row otherPortfolio portfolio">
		<hr class="thin wdt-25 bg-darkgray pull-left overrideWidth30">
		<hr class="thin wdt-70 bg-darkgray pull-right">
		<div class="col-md-3 col-xs-6 txtAlgnCenter">
			<font class="color-white margin-left-30">{{$key}}</font>
		</div>

		<div class="col-md-3 col-xs-6 margin-left-50 txtAlgnCenter">
			<img src="{{url('saved_images/portfolio/item' , $item->partnerLogo)}}" class="wdt-75 hgt-75 margin-top-30"/>
		</div>

		<div class="col-md-4 col-xs-12 margin-left-50 txtAlgnCenter padding-md-top-15 padding-md-bottom-15">

		<h1 style="font-size:40px;" class="color-darkgray">{{$item->partnerCompanyName}}</h1>
			<h2>
				<i>
					{{!! $item->partnerContent !!}}
				</i>
			</h2>
		</div>
		<img class="img-responsive" src ="{{url('saved_images/portfolio/item' , $item->partnerBackgroundImage)}}" >
	</div>
@endforeach


<!-- <div class="bg-gray row otherPortfolio portfolio">
	<hr class="thin wdt-25 bg-darkgray pull-left overrideWidth30">
	<hr class="thin wdt-70 bg-darkgray pull-right">
	<div class="col-md-3 col-xs-6 txtAlgnCenter">
		<font class="color-white margin-left-30">02</font>
	</div>
	<div class="col-md-3 col-xs-6 margin-left-50">
		<img src="{{url('assets')}}/sabbia/img/logo2.gif" class="wdt-75 hgt-75 margin-top-30"/>
	</div>
	<div class="col-md-4 col-xs-12 margin-left-50 txtAlgnCenter padding-md-top-15 padding-md-bottom-15">
	<h1 style="font-size:40px;" class="color-darkgray">PT Bukaka Teknik Utama</h1>
		<h2>
			<i>
				Lorem ipsum dolor sit amet, consectetuer
				adipiscing elit, sed diam nonummy nibh
				euismod tincidunt ut laoreet dolore magna
				aliquam erat volutpat.
			</i>
		</h2>
	</div>
	<img class="img-responsive" src ="{{url('assets')}}/sabbia/img/boatcrop.jpg" >
</div>

<div class="bg-gray row otherPortfolio portfolio">
	<hr class="thin wdt-25 bg-darkgray pull-left overrideWidth30">
	<hr class="thin wdt-70 bg-darkgray pull-right">
	<div class="col-md-3 col-xs-6 txtAlgnCenter">
		<font class="color-white margin-left-30">03</font>
	</div>
	<div class="col-md-3 col-xs-6 margin-left-50">
		<img src="{{url('assets')}}/sabbia/img/logo3.png" class="wdt-75 hgt-75 margin-top-30"/>
	</div>
	<div class="col-md-4 col-xs-12 margin-left-50 txtAlgnCenter padding-md-top-15 padding-md-bottom-15">
	<h1 style="font-size:40px;" class="color-darkgray">PT Nusa Konstruksi Enjinering Tbk</h1>
		<h2>
			<i>
				Lorem ipsum dolor sit amet, consectetuer
				adipiscing elit, sed diam nonummy nibh
				euismod tincidunt ut laoreet dolore magna
				aliquam erat volutpat.
			</i>
		</h2>
	</div>
	<img class="img-responsive" src ="{{url('assets')}}/sabbia/img/boatcrop.jpg" >
</div> -->

<div class="bg-gray row portfoliolast">
	<hr class="thin wdt-25 bg-darkgray pull-left">
	<hr class="thin wdt-70 bg-darkgray pull-right">
	<div class="col-md-3 col-xs-12">
		<h1 style="font-size:80px;color:#fff;">{{$portfolio->lastRowTitle}}</h1>
	</div>
	<div class="col-md-4 col-xs-12 margin-left-50">
		<h2>
			<i>
				{!! $portfolio->partners !!}
			</i>
		</h2>
	</div>
</div>
@endsection