@extends('front.app')

@section('title')
Home
@endsection

@section('body')
	<div class ="row index-part1">
		<div class="col-xl-5 col-md-4 col-xs-12 margin-top-150 margin-left-100 padding-md-top-15" id="homeLeftHeader">
			<h1>Headings</h1>
			<hr class="wdt-100 pull-left">
			<h2 class="main-text">
			<i class="whiteTxt">
				Lorem ipsum dolor sit amet, consectetuer
				adipiscing elit, sed diam nonummy nibh
				euismod tincidunt ut laoreet dolore magna
				aliquam erat volutpat.
			</i>
			</h2>
			<hr class="wdt-100 pull-left">
			<div id="watchOurStoryDiv">
				<a href="#" class="color-white" id="watchOurStoryLink">
					<img src ="{{url('assets')}}/sabbia/img/youtube-red.jpg" style="width:8%;height:8%;" class="br-50 margin-right-10"/>
					<i class="whiteTxt">Watch Our Story Here</i>
				</a>
			</div>
		</div>
		<div class="col-xl-4 col-md-3 col-xs-12 margin-top-395 margin-left-50 padding-md-bottom-15">
				<hr class="thick pull-left wdt-100 bg-white">
				<h3 class="secondary-text">
					Lorem ipsum dolor sit amet, consectetuer
					adipiscing elit, sed diam nonummy nibh
					euismod tincidunt ut laoreet dolore magna
					aliquam erat volutpat.
				</h3>
		</div>
	</div>

	<div class="row banner1"></div>

	<div class="row index-part2">
		<div class="col-md-5 col-xs-12 margin-left-550 margin-top-200 padding-md-top-15">
			<h1 id="increasingAmount" class="font-xs-24 pull-right">Rp <span id ="increasing">0</span></h1>
			<hr class="thick pull-left wdt-100 bg-white">
			<h3>
				<b class ="pull-left">Diesel Fuel Floor Price</b><font class="pull-right">per Barel</font>
			</h3>
		</div>

		<div class="col-md-5 col-xs-12 margin-left-550 margin-top-100">
			<hr class="thin wdt-100">
			<div class="lg-padding-left-120">
				<h3 class="lg-txtAlign-right">
					Lorem ipsum dolor sit amet, consectetuer
					adipiscing elit, sed diam nonummy nibh
					euismod tincidunt ut laoreet dolore magna
					aliquam erat volutpat.
				</h3>
			</div>
		</div>

		<div id="productTagLeft" class="col-md-4 col-xs-12 margin-left-50 padding-md-bottom-15">
			<hr class="thin wdt-100">
			<div>
				<h3 class="lg-txtAlign-left">
					Lorem ipsum dolor sit amet, consectetuer
					adipiscing elit, sed diam nonummy nibh
					euismod tincidunt ut laoreet dolore magna
					aliquam erat volutpat.
				</h3>
			</div>
		</div>
	</div>

	<div class="row banner2"></div>

	<div class="row index-part3 margin-top-30 margin-bottom-30">
		<div class="col-md-5 col-xs-12 pd-0">
			<img id="mainPortfolioImage" class="img-responsive" src ="{{url('assets')}}/sabbia/img/service.jpg" class="wdt-100"/>
		</div>
		<div class="col-md-7 hgt-100 col-xs-12 bg-gray lg-no-padding-right" id="portfolioPanel">
			<h2><b>Portfolio</b></h2>
			<h2 class="margin-right-300">
				Every sector of the industry that is
				in need of refined oil will be able to
				engage with our services.
			</h2>
			
			<div class="seeAllContent">
				<h3 class="br-1">
					<a href="{{url('/portfolio')}}"><b>See All</b>
						<img class="rightArrowImage" src="{{url('assets')}}/sabbia/img/buttone.gif"/>
					</a>
				<h3>
			</div>
		</div>
	</div>
@endsection