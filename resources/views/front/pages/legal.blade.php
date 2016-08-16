@extends('front.app')

@section('title')
	Legal
@endsection

@section('body')
	<div class="row banner2"></div>
		<div class="margin-left-30" id ="legal">
			<div class="row">
				<div class="col-md-4 col-xs-12 margin-top-50 margin-left-50 padding-md-top-15">
					<h1 class="margin-top-10">Legal</h1>
					<hr class="thin bg-gray wdt-75 pull-left">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-12 margin-left-50">
					<h2>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
						nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
						erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
						tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
						consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
						velit esse molestie consequat, vel illum dolore eu feugiat nulla
						facilisis at vero eros et accumsan et.
					</h2>	
				</div>

				<div class="col-md-4 col-xs-12 pull-right txtAlgnCenter">
					<img src="{{url('assets')}}/sabbia/img/factory.jpg" class="wdt-75 hgt-75"/>
				</div>	
			</div>

			<br/>	

			<div class="row">
				<div class="col-md-6 col-xs-12 margin-left-50">
					<h2 class="color-bluedonker"><b>Terms of Services</b></h2>
					<h2>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
						nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
						erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
						tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
						consequat. 
					</h2>	
				</div>

				<div class="col-md-4 col-xs-12 pull-right txtAlgnCenter">
					<img src="{{url('assets')}}/sabbia/img/factory.jpg" class="wdt-75 hgt-75"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-xs-12 margin-left-50">
					<h2 class="color-bluedonker"><b>Privacy Policy</b></h2>
					<h2>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
						nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
						erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
						tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
						consequat. 
					</h2>	
				</div>
			</div>
		</div>
@endsection