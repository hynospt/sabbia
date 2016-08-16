@extends('front.app')

@section('title')
	Service
@endsection

@section('body')
	<div id="service">
		<div class="row">
			<div class="col-md-6 col-xs-12 lg-no-padding">
				<div id="first-col-service" class="height-xs-auto service-panel padding-md-top-15 padding-md-bottom-15 padding-md-left-10 padding-md-right-10">
					<h1 style="color:white">Services</h1>
					<hr class="wdt-100 pull-left" />
					<h2 style="color:white">Fuel Procurement Distribution and Stock</h2>
				</div>
			</div>
			<div id="icon0" class="col-md-6 col-xs-12 lg-no-padding">
				<div class="service-panel bg-service">
					<img id="firstImage" class="img-responsive icon-service" src="{{url('assets')}}/sabbia/img/icon-service/Assurance.png">
				</div>
				<div class="iconServiceTagPanel" id="servicePanel0">
					<div>
						<h1>Assurance</h1>
						<div class="col-xs-12 lg-no-padding">
							<hr class="service-tag-line">
						</div>
						<h2>Together with our strategic principals we
							manage your availability of long term stock.
						</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div id="icon1" class="col-md-6 col-xs-12 lg-no-padding">
				<div class="service-panel bg-service">
					<img class="img-responsive icon-service" src="{{url('assets')}}/sabbia/img/icon-service/Accessability.png">
				</div>
				<div class="iconServiceTagPanel" id="servicePanel1">
					<div>
						<h1>Accessability</h1>
						<div class="col-xs-12 lg-no-padding">
							<hr class="service-tag-line">
						</div>
						<h2>Gain access to feed stock from different sources to secure the lowest cost supplies.</h2>
					</div>
				</div>
			</div>
			<div id="icon2" class="col-md-6 col-xs-12 lg-no-padding">
				<div class="service-panel bg-service">
					<img class="img-responsive icon-service" src="{{url('assets')}}/sabbia/img/icon-service/Network.png">
				</div>
				<div class="iconServiceTagPanel" id="servicePanel2">
					<div>
						<h1>Network</h1>
						<div class="col-xs-12 lg-no-padding">
							<hr class="service-tag-line">
						</div>
						<h2>Alliance with suppliers who can provide
							logistics, storage and shipping services.
						</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div id="icon3" class="col-md-6 col-xs-12 lg-no-padding">
				<div class="service-panel bg-service">
					<img class="img-responsive icon-service" src="{{url('assets')}}/sabbia/img/icon-service/Logistic.png">
				</div>
				<div class="iconServiceTagPanel" id="servicePanel3">
					<div>
						<h1>Logistic</h1>
						<div class="col-xs-12 lg-no-padding">
							<hr class="service-tag-line">
						</div>
						<h2>Provide dedicated transport from stockist
							terminat to client discharge facilities.
						</h2>
					</div>
				</div>
			</div>
			<div id="icon4" class="col-md-6 col-xs-12 lg-no-padding">
				<div class="service-panel bg-service">
					<img class="img-responsive icon-service" src="{{url('assets')}}/sabbia/img/icon-service/Speed.png">
				</div>
				<div class="iconServiceTagPanel" id="servicePanel4">
					<div>
						<h1>Assurance</h1>
						<div class="col-xs-12 lg-no-padding">
							<hr class="service-tag-line">
						</div>
						<h2>We manage the shortest way to deliver
							fuel to client’s locations.
						</h2>
					</div>
				</div>						
			</div>
		</div>
	</div>
@endsection