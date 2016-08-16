@extends('front.app')

@section('title')
	Chain
@endsection

@section('body')
	<div class="margin-left-50 margin-bottom-100" id ="virtual">
		<div class="row">
			<div class="col-md-6 col-xs-12 margin-top-10">
				<h1 class="margin-top-10">Virtual Supply Chain</h1>
				<hr class="thin bg-gray wdt-100 pull-left">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-xs-12">
				<h2>
					<i>
						We gather the best quality oil supply in Indonesia from these ten
						following cities : Dumai, Jambi, Palembang, Jakarta, Pontianak
						Betau, Sangkulirang, Loa Duri, Balikpapan and Bajarmasin.
					</i>
				</h2>
			</div>
		</div>

		<div class="row margin-top-10">
			<img class="img-responsive" src="{{url('assets')}}/sabbia/img/map.jpg">
		</div>
	</div>

	<div class="margin-left-50 margin-bottom-xs-20" id ="distribution">
		<div class="row">
			<div class="col-md-4 col-xs-12 margin-top-10">
				<h1 class="margin-top-10">Distribution Chain</h1>
				<hr class="thin bg-gray wdt-100 pull-left">
				<h2>
					<i>
						Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit, sed diam nonummy nibh
						euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat.
					</i>
				</h2>
			</div>

			<div class="col-md-8 col-xs-12 distributionimage margin-left-100">
				<img class="img-responsive" src="{{url('assets')}}/sabbia/img/distribution.png">
			</div>

		</div>
	</div>
@endsection