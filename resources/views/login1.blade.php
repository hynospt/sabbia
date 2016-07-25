<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flat Login Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="{{url('assets')}}/css/login/style.css">
    
  </head>

  <body>

    
<div class="container">
  <div class="info">

@if (session('errMsg'))
    <div class="alert alert-success">
        {{ session('errMsg') }}
    </div>
@endif


    <h1>Sabbia Login Form</h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <!-- <form class="register-form" action="">
    <input type="text" placeholder="name"/>
    <input type="password" placeholder="password"/>
    <input type="text" placeholder="email address"/>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form> -->

  {{Form::open(array('url' => 'login', 'method' => 'post'))}}
    <input type="text" placeholder="username" name="username" />
    <input type="password" placeholder="password" name="password" />
    <button>login</button>
    <p class="message">Forget password ? <a href="#">Reset your password</a></p>
  {{ Form::close() }}

 <!--  <form class="login-form">
    <input type="text" placeholder="username"/>
    <input type="password" placeholder="password"/>
    <button>login</button>
    <p class="message">Forget password ? <a href="#">Reset your password</a></p>
  </form> -->
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="{{url('assets')}}/js/login/index.js"></script>

    
    
    
  </body>
</html>
