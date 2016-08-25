@extends('front.app')

@section('title')
	Service
@endsection

@section('body')
	<div id="service">
		<div class="row">
			<div class="col-md-6 col-xs-12 lg-no-padding">
				<div id="first-col-service" class="height-xs-auto service-panel padding-md-top-15 padding-md-bottom-15 padding-md-left-10 padding-md-right-10">
					<h1 style="color:white">{{$services->title}}</h1>
					<hr class="wdt-100 pull-left" />
					<h2 style="color:white">{{$services->subTitle}}</h2>
				</div>
			</div>

			@foreach($items as $key => $item)
				{{-- */$isFirst = $key == 0 ? 'first-image' : '';/* --}}

				@if($key > 0)
					<div class="row">
				@endif
				<div id="icon{{$key}}" class="col-md-6 col-xs-12 lg-no-padding">
					<div class="service-panel bg-service" style="background-image:url('{{url('saved_images/services', $item->bgImage)}}')">
						<img id="{{$isFirst}}" class="img-responsive icon-service" src="{{url('saved_images/services' , $item->coverImage)}}">
					</div>
					<div class="iconServiceTagPanel" id="servicePanel{{$key}}">
						<div>
							<h1>{{$item->title}}</h1>
							<div class="col-xs-12 lg-no-padding">
								<hr class="service-tag-line">
							</div>
							<h2>{!! $item->tag !!}
							</h2>
						</div>
					</div>
				</div>

				@if($key == 0)
					</div> <!-- First Row -->
				@endif

				@if($key != 0 AND $key % 2 == 0)
					</div>
				@endif
			
			@endforeach
	</div>
@endsection

@section('customScript')
	<script type="text/javascript">

		@foreach($items as $key => $item)
			$('#servicePanel{{$key}}').css('opacity', 0);
			$('#icon{{$key}} .service-panel').on({
		        mouseenter: function () {
		            $("#servicePanel{{$key}}").css('z-index', 0).animate({
		              bottom:'0',
		              opacity:'1'
		            }, 50);
		        }
		  	});

			$('#icon{{$key}}').on({
		  		mouseleave: function () {
		            $("#servicePanel{{$key}}").animate({
		              bottom:'-200px',
		              opacity:'0'
		            }, 50);
		        }
		  	});
		        
		@endforeach
	</script>
@endsection