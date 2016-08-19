@extends('front.app')

@section('title')
	Legal
@endsection

@section('body')
	<div class="row banner2"></div>
		<div class="margin-left-30" id ="legal">
			<div class="row">
				<div class="col-md-4 col-xs-12 margin-top-50 margin-left-50 padding-md-top-15">
					<h1 class="margin-top-10">{{$legal->title}}</h1>
					<hr class="thin bg-gray wdt-75 pull-left">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-12 margin-left-50">
					<h2>
						{{$legal->mainTitle}}
					</h2>	
				</div>

				<div class="col-md-4 col-xs-12 pull-right txtAlgnCenter">
					<img src="{{url('saved_images/legal', $legal->image1)}}" class="wdt-75 hgt-75"/>
				</div>	
			</div>

			<br/>	

			<div class="row">
				<div class="col-md-6 col-xs-12 margin-left-50">
					<h2 class="color-bluedonker"><b>{{$legal->subTitle1}}</b></h2>
					<h2>
						{{$legal->subContent1}} 
					</h2>	
				</div>

				<div class="col-md-4 col-xs-12 pull-right txtAlgnCenter">
					<img src="{{url('saved_images/legal', $legal->image2)}}" class="wdt-75 hgt-75"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-xs-12 margin-left-50">
					<h2 class="color-bluedonker"><b>{{$legal->subTitle2}}</b></h2>
					<h2>
						{{$legal->subContent2}}
					</h2>	
				</div>
			</div>
		</div>
@endsection