@extends('app')

@section('title')
Create Portfolio
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Create Portfolio
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Portfolio</li>
      </ol>

      <section class="content">
      	<form name="addPortfolioForm" action="{{action('PortfolioController@item_store')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
      		partnerLogo : <input name="partnerLogo" /><br/>
          partnerCompanyName : <input name="partnerCompanyName" /><br/>
          partnerContent : <input name="partnerContent" /><br/>
          partnerBackgroundImage : <input name="partnerBackgroundImage" /><br/>


      		<input type="submit">
      	</form>
      </section>
    </section>

  </div>
@endsection