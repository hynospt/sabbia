@extends('front.app')

@section('title')
	Connect
@endsection

@section('body')
	<div class="row">
		<div class="col-md-4 col-xs-12 padding-md-top-15 lg-padding-top-25 padding-xs-50">
			<h1 style="color:rgb(8, 73, 117)">Connect</h1>
			<hr class="wdt-100 pull-left" style="border-top:1px solid #000">
			<h2 class="main-text" >
			<i class="whiteTxt" style="color:#878888">
				contact@sabbia.co.id <br/>
				<br/>
				Sabbia Building <br/>
				Jalan Dr. Saharjo no. 123A <br/>
				Manggarai Selatan | Jakarta Selatan <br/>
				12860 | Indonesia <br/>
				<br/>
				Tel. : +62 21 835 7324 <br/>
				Fax  : +62 21 835 7322
			</i>
			</h2>
		</div>
		<div class="col-md-8 col-xs-12 connect">
			<img class="img-responsive" src="{{url('assets')}}/sabbia/img/bg-connect.jpg">
		</div>
	</div>
@endsection