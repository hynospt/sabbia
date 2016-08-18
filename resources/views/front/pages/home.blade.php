@extends('front.app')

@section('title')
Home
@endsection

@section('body')
	<div class ="row index-part1" style="background-image:url('{{url('saved_images/home', $home->bgImageRow1)}}')">
		<div class="col-xl-5 col-md-4 col-xs-12 margin-top-150 margin-left-100 padding-md-top-15" id="homeLeftHeader">
			<h1>{{$home->headerRow1}}</h1>
			<hr class="wdt-100 pull-left">
			<h2 class="main-text">
			<div class="whiteTxt">
				{!! $home->text1Row1 !!}
			</div>
			</h2>
			<hr class="wdt-100 pull-left">
			<div id="watchOurStoryDiv">
				<a href="{{$home->videoUrl}}" class="color-white" id="watchOurStoryLink">
					<img src ="{{url('assets')}}/sabbia/img/youtube-red.jpg" style="width:8%;height:8%;" class="br-50 margin-right-10"/>
					<i class="whiteTxt">{!! $home->videoText !!}</i>
				</a>
			</div>
		</div>
		<div class="col-xl-4 col-md-3 col-xs-12 margin-top-395 margin-left-50 padding-md-bottom-15">
				<hr class="thick pull-left wdt-100 bg-white">
				<div class="secondary-text">{!! $home->text2Row1 !!}</div>
		</div>
	</div>

	<div class="row banner1"></div>

	<div class="row index-part2" style="background-image:url('{{url('saved_images/home', $home->bgImageRow2)}}')">
		<div class="col-md-5 col-xs-12 margin-left-550 margin-top-200 padding-md-top-15">
			<h1 id="increasingAmount" class="font-xs-24 pull-right">Rp <span id ="increasing">0</span></h1>
			<hr class="thick pull-left wdt-100 bg-white">
			<h3>
				<b class ="pull-left">{!! $home->productName !!}</b><font class="pull-right">{!! $home->unitType !!}</font>
			</h3>
		</div>

		<div class="col-md-5 col-xs-12 margin-left-550 margin-top-100">
			<hr class="thin wdt-100">
			<div class="lg-padding-left-120">
				
				<div class="lg-txtAlight-right">
					{!! $home->text1Row2 !!}
				</div>
			</div>
		</div>

		<div id="productTagLeft" class="col-md-4 col-xs-12 margin-left-50 padding-md-bottom-15">
			<hr class="thin wdt-100">
			<div>
				<h3 class="lg-txtAlign-left">
					
				</h3>
				<div>
					{!! $home->text2Row2 !!}
				</div>
			</div>
		</div>
	</div>

	<div class="row banner2"></div>

	<div class="row index-part3 margin-top-30 margin-bottom-30">
		<div class="col-md-5 col-xs-12 pd-0">
			<img id="mainPortfolioImage" class="img-responsive" src ="{{url('saved_images/home' , $home->portfolioImage)}}" class="wdt-100"/>
		</div>
		<div class="col-md-7 hgt-100 col-xs-12 bg-gray lg-no-padding-right" id="portfolioPanel">
			<h2><b>Portfolio</b></h2>
			<div class="margin-right-300">
				{!! $home->portfolioTag !!}
			</div>
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

@section('customScript')
<script>
    $(window).scroll(function() {
    if ($('#increasing').is(':visible')) {
        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
            $('#increasing').animateNumber(
              {
                number: {{$home->productPrice}},
                numberStep: comma_separator_number_step
              }
            );
        }
    });
    if($(window).width() < 1200){
        if ($('#increasing').is(':visible')) {
        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
            $('#increasing').animateNumber(
              {
                number: {{$home->productPrice}},
                numberStep: comma_separator_number_step
              }
            );
        }
    }
    $("a[href='#top']").click(function() {
          $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
    });
</script>
@endsection