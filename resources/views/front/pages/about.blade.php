@extends('front.app')

@section('title')
About
@endsection

@section('body')
	<div id="about" class ="row col-xs-hide">
		<div class="col-md-3 col-xs-12 pull-right margin-top-50 padding-md-top-75">
			<h1> manfaat abadi </h1>
		</div>
			<img id="aboutIcon" src="{{url('assets')}}/sabbia/img/sabbia-white.gif" class="wdt-10"/>
	</div>

	<div id="board" class="row">
		<div class="row md-no-margin">
			<div class="col-md-4 col-xs-12 margin-top-10 margin-left-50 txtAlgnCenter">
				<h1 class="margin-top-10">The Board</h1>
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
			<h1 class="margin-top-10">In A Glance</h1>
			<hr class="thin bg-gray wdt-75 pull-left">
			<h2 class="justifyTxtAlight"><i></br></br></br>
				PT Sabbia Dharma Industries is a downstream oil trading
				company operating within the area of greater Indonesia.
				We specialize in providing solutions for businesses in need of
				quality refined oil supply. Together with our strategic principals,
				we commit to provide one stop refined oil supply related
				services for your needs.The scope of our services range from
				securing quality and cost-friendly sources, logistics and transportation
				management, and the successful and timely delivery of our products
				right to your doorstep.</br></br>
				PT Sabbia Dharma Industries downstream oil division
				trades under the banner of PT TITAN TUNAS MAJU,
				a bearer of Izin Niaga Umum (INU) no. 278.K/10.01/DJM.O/2013
				which endorses legal security in all of our company’s services.
			</i>
			</h2>
		</div>
		
		<div class="col-md-6 col-xs-12 xl-padding-left-365 md-padding-left-100">
			<div class="col-md-12 col-xs-12 margin-top-50 mPadding10p25p">
				<div id="stories-about" class="">
					<a href="#" class="color-white">
						<img src ="{{url('assets')}}/sabbia/img/youtube.png" style="width:8%;height:8%;" class="br-50 margin-right-10"/>Watch Our Story Here!
					</a>
					</br>
					</br>
					<a href="#" class="color-white">
						<img src ="{{url('assets')}}/sabbia/img/youtube.png" style="width:8%;height:8%;" class="br-50 margin-right-10"/>Download Company Profile!
					</a>
				</div>	
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="bg-gray margin-top-50 philosophy padding-md-top-15 md-padding-15">
					<img src="{{url('assets')}}/sabbia/img/philo.png" class="margin-top-10 margin-right-10 padding-md-right-15"/>
					<h4 class="ta-l pos-abs">Sabbia <br/> Philosophy</h4>
					<h2 class="lg-balancing-philosopy">
						Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit, sed
						diam nonummy nibh euismod
						tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim
						ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit
						lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem
						vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie
						consequat, vel illum dolore eu
						feugiat nulla facilisis at vero eros et
						accumsan et.
					</h2>
				</div>
			</div>
		</div>
			
	</div>
@endsection