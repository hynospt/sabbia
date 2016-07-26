@extends('app')

@section('title')
Edit Home
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

        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Tier 1</h3>
              </div>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Heading</label>
                    <input class="form-control" id="exampleInputEmail1" placeholder="heading" type="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Caption Left</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Caption right</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Video Icon</label>
                    <input id="exampleInputFile" type="file">

                    <p class="help-block">max size MB</p>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">url video</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="url" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Video caption</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">bg img 1</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="caption" type="file">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Name</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">product price</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">unit type</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">text 1 row 2</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">text 2 row 2</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">bg img 1</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="caption" type="file">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">porto image</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="caption" type="file">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">porto tag</label>
                    <input class="form-control" id="exampleInputPassword1" placeholder="video caption" type="text">
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
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