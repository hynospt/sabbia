<!-- navbar -->     
<nav class="main navbar navbar-default sidebar" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <img id="brand" src="{{url('assets')}}/sabbia/img/sabbia.PNG" class="" href="index.html"/>
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}">Home<span style="font-size:16px;"></span></a></li>
        <li class="dropdown">
          <a href="about.html" class="dropdown-toggle" data-toggle="dropdown">About <span class="caret"></span><span style="font-size:16px;"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="{{url('/about#board')}}">Board</a></li>
            <li><a href="{{url('/about#glance')}}">In a Glance</a></li>
            <li><a href="{{url('/legal')}}">Legal</a></li>
            <li><a href="{{url('/chain#virtual')}}">Virtual Supply Chain</a></li>
            <li><a href="{{url('/chain#distribution')}}">Distribution Chain</a></li>
          </ul>
        </li>     
        <li ><a href="{{url('/services')}}">Services<span style="font-size:16px;" ></span></a></li>
        <li ><a href="{{url('/portfolio')}}">Portofolios<span style="font-size:16px;" ></span></a></li>
        <li class="push"><a href="{{url('/connect')}}">Connect<span style="font-size:16px;" ></span></a></li>
        <li class="ta-c footer">
        	<span style="font-size:9px; margin-top:100%; margin-bottom:0;letter-spacing:0.25px;word-spacing:0.5px; color: #084975">
        		&copy; PT. Sabbia Dharma Industries, 2015
    		</span>
    	</li>
      </ul>
    </div>
  </div>
</nav>
<!-- /navbar -->