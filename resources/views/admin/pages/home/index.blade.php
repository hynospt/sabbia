@extends('app')

@section('title')
Home
@endsection

@section('body')
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Home
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Homepage</li>
      </ol>

      <section class="content">
        text header tier 1 : {{$home->headerRow1}}<br/>
        text left tier 1 : {{$home->text1Row1}}<br/>
        text right tier 1 : {{$home->text2Row1}}<br/>
        video icon : {{$home->videoIcon}}<br/>
        video texxt : {{$home->videoText}}<br/>
        url vid : {{$home->videoUrl}}<br/>
        bg image tier 1: {{$home->bgImageRow1}}<br/>
        product price : {{$home->productPrice}}<br/>
        product name : {{$home->productName}}<br/>
        unit type : {{$home->unitType}}<br/>
        text 1 row 2 : {{$home->text1Row2}}<br/>
        text 2 row 2 : {{$home->text2Row2}}<br/>
        bg image tier 2 : {{$home->bgImageRow2}}<br/>
        tag porto : {{$home->portfolioTag}}<br/>
        image porto : {{$home->portfolioImage}}
      </section>
    </section>

  </div>
@endsection