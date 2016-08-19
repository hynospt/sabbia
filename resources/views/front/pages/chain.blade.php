@extends('front.app')

@section('title')
	Chain
@endsection

@section('body')
	<div class="margin-left-50 margin-bottom-100" id ="virtual">
		<div class="row">
			<div class="col-md-6 col-xs-12 margin-top-10">
				<h1 class="margin-top-10">{{$chain->title1}}</h1>
				<hr class="thin bg-gray wdt-100 pull-left">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-xs-12">
				<h2>
					<i>
						{{$chain->content1}}
					</i>
				</h2>
			</div>
		</div>

		<div class="row margin-top-10">
			<img class="img-responsive" src="{{url('saved_images/chain', $chain->image1)}}">
		</div>
	</div>

	<div class="margin-left-50 margin-bottom-xs-20" id ="distribution">
		<div class="row">
			<div class="col-md-4 col-xs-12 margin-top-10">
				<h1 class="margin-top-10">{{$chain->title2}}</h1>
				<hr class="thin bg-gray wdt-100 pull-left">
				<h2>
					<i>
						{{$chain->content2}}
					</i>
				</h2>
			</div>

			<div class="col-md-8 col-xs-12 distributionimage margin-left-100">
				<img class="img-responsive" src="{{url('saved_images/chain', $chain->image2)}}">
			</div>

		</div>
	</div>
@endsection