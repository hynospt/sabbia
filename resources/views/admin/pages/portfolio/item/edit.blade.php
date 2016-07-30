@extends('app')

@section('title')
Edit Portfolio
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Edit Portfolio
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Portfolio</li>
      </ol>

      <section class="content">
      	<form name="editServiceIconForm" action="{{action('PortfolioController@item_update')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
      		<input type="hidden" name="id" value="{{$item->id}}">
          partnerLogo : <input name="partnerLogo" value="{{$item->partnerLogo}}"/><br/>
          partnerCompanyName : <input name="partnerCompanyName" value="{{$item->partnerCompanyName}}"/><br/>
          partnerContent : <input name="partnerContent" value="{{$item->partnerContent}}"/><br/>
          partnerBackgroundImage : <input name="partnerBackgroundImage" value="{{$item->partnerBackgroundImage}}"/><br/>

      		<input type="submit">
      	</form>
      </section>
    </section>

  </div>
@endsection