@extends('front.app')

@section('title')
About
@endsection

@section('body')
	<div id="about" class ="row col-xs-hide" style="background-image:url('{{url('saved_images/about', $about->mainBgImage)}}')">
		<div class="col-md-3 col-xs-12 pull-right margin-top-50 padding-md-top-75">
			<h1> {{ $about->mainTag }} </h1>
		</div>
			<img id="aboutIcon" src="{{url('saved_images/about', $about->mainLogo)}}" class="wdt-10"/>
	</div>

	<div id="board" class="row">
		<div class="row md-no-margin">
			<div class="col-md-4 col-xs-12 margin-top-10 margin-left-50 txtAlgnCenter">
				<h1 class="margin-top-10">{{ $about->titleRow2 }}</h1>
				<hr class="veryThin bg-black wdt-100">
			</div>
		</div>
		<div class="row md-no-margin">
			<div class="col-md-2 col-xs-12 txtAlgnCenter">
				<img src="{{url('assets')}}/sabbia/img/karaeng1.png" class="margin-top-10 margin-left-50" />
			</div>
			<div class="col-md-4 col-xs-12 paddingLeftRight40 justifyTxtAlight">
				<h2 class="txtAlgnCenter director-heading"><b>Karaeng R. Adjie</b></h2>
				<h3 class="director-sub-heading">Chief Executive Officer</h3>
				<h4>
					A trained chemical engineer, Mr. Adjie is educated in the
					engineering faculty of the University of Indonesia. A dedicated
					Problem slayer within the company, Mr. Adjie holds the role in
					envisioning the company’s grand strategic goals and its
					execution in ruthless precision. An avid enthusiast of
					Engineering, Energy and Technology, Mr. Adjie is deeply rooted
					in the spirit of measurable innovation and drives the delivery of
					the company’s services with a perpetual sense of
					continuous-improvement.
				</h4>
			</div>	
			<div class="col-md-2 col-xs-12 txtAlgnCenter padding-md-top-15">
				<img src="{{url('assets')}}/sabbia/img/faisal1.png" class="margin-top-10 margin-left-50" />
			</div>
			<div class="col-md-4 col-xs-12 paddingLeftRight40 justifyTxtAlight">
				<h2 class="txtAlgnCenter director-heading"><b>M. Faisal Suhaeli Kalla</b></h2>
				<h3 class="director-sub-heading">Chief Financial Officer</h3>
				<h4>
					A wielder of the art of economics, graduated from the University
					of Indonesia and the University of Queensland in flying colors.
					Mr. Faisal is responsible to engineer and uphold strategic
					financial integrity across the company. As a meticulous man of
					finance, Mr. Faisal presses the delivery of the company’s
					services through carefully managing financial risks and
					opportunities from his iron-clad style of financial management.
				</h4>
			</div>	
		</div>
		
		<div class="row margin-top-10 md-no-margin">
			<div class="col-md-2 col-xs-12 txtAlgnCenter padding-md-top-15">
				<img src="{{url('assets')}}/sabbia/img/febry1.png" class="margin-top-10 margin-left-50" />
			</div>
			<div class="col-md-4 col-xs-12 paddingLeftRight40 justifyTxtAlight">
				<h2 class="txtAlgnCenter director-heading"><b>Akhmad Febry M. Nara</b></h2>
				<h3 class="director-sub-heading">Business Development Director</h3>
				<h4>
					Educated in the art of Law from the university of Trisakti. A
					formidable lawyer-turned-businessman, Mr. Febry is responsible
					for developing and seizing strategic partnerships and
					opportunities to secure sustainable growth across the company.
					A keen eye for politics and law, Mr. Febry draws his drive to
					deliver the company’s services by utilizing his talent for
					negotiation and innate ease of social engagement to sustain the
					company’s progressive development.
				</h4>
			</div>	
			<div class="col-md-2 col-xs-12 txtAlgnCenter padding-md-top-15">
				<img src="{{url('assets')}}/sabbia/img/zakaria1.png" class="margin-top-10 margin-left-50" />
			</div>
			<div class="col-md-4 col-xs-12 paddingLeftRight40 justifyTxtAlight padding-md-top-15">
				<h2 class="txtAlgnCenter director-heading"><b>Zakaria Niode</b></h2>
				<h3 class="director-sub-heading">President Commissioner</h3>
				<h4>
					A trained civil engineer and a seasoned businessman, Mr.
					Zakaria is educated within the walls of the engineering campus
					of the University of Indonesia. He holds the role as the watchful
					eye that maintains bird’s eye perspective throughout the
					company’s operation. As a bearer of wisdom, Mr. Zakaria instills
					and upholds the company’s culture and morale and is dedicated
					to help make sure the company runs in its intended tracks.
				</h4>
			</div>	
		</div>
	</div>
	<div class="banner3 row margin-bottom-30 margin-top-10"></div>
	
	<div id="glance"class="row">
		<div class="col-md-6 col-xs-12 margin-top-10">
			<h1 class="margin-top-10">{{ $about->titleRow3 }}</h1>
			<hr class="thin bg-gray wdt-75 pull-left">
			<h2 class="justifyTxtAlight"><i></br></br></br>
				{{$about->text2Row2}}
			</i>
			</h2>
		</div>
		
		<div class="col-md-6 col-xs-12 xl-padding-left-365 md-padding-left-100">
			<div class="col-md-12 col-xs-12 margin-top-50 mPadding10p25p">
				<div id="stories-about" class="">
					<a href="{{$about->videoUrl1}}" class="color-white">
						<img src ="{{url('assets')}}/sabbia/img/youtube.png" style="width:8%;height:8%;" class="br-50 margin-right-10"/>{{$about->videoCaption1}}
					</a>
					</br>
					</br>
					<a href="{{$about->videoUrl2}}" class="color-white">
						<img src ="{{url('assets')}}/sabbia/img/youtube.png" style="width:8%;height:8%;" class="br-50 margin-right-10"/>{{$about->videoCaption2}}
					</a>
				</div>	
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="bg-gray margin-top-50 philosophy padding-md-top-15 md-padding-15">
					<img src="{{url('saved_images/about/philosophy', $about->philosophyImg)}}" class="margin-top-10 margin-right-10 padding-md-right-15"/>
					<h4 class="ta-l pos-abs">{{$about->philosophyTitle}}</h4>
					<h2 class="lg-balancing-philosopy">
						{{$about->philosophyContent}}
					</h2>
				</div>
			</div>
		</div>
			
	</div>
@endsection