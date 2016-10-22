@extends('app')

@section('title')
Dashboard
@endsection

@section('body')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>
                <a href="/" alt="page hit counter" target="_blank" >
                  <embed src="http://s10.histats.com/601.swf"  flashvars="jver=1&acsid=3623078&domi=4"  quality="high"  width="110" height="30" name="601.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" />
                </a>
                <img  src="//sstatic1.histats.com/0.gif?3623078&101" alt="website stats" border="0">
            </h3>
            <p>Today Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <a href="/" alt="page hit counter" target="_blank" >
                <embed src="http://s10.histats.com/601.swf"  flashvars="jver=1&acsid=3623078&domi=4"  quality="high"  width="110" height="30" name="601.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" />
                </a>
              <img  src="//sstatic1.histats.com/0.gif?3623078&101" alt="website stats" border="0">
            </h3>
            <p>Online Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <a href="/" alt="page hit counter" target="_blank" >
                <embed src="http://s10.histats.com/601.swf"  flashvars="jver=1&acsid=3623078&domi=4"  quality="high"  width="110" height="30" name="601.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" />
              </a>
              <img  src="//sstatic1.histats.com/0.gif?3623078&101" alt="website stats" border="0">
            </h3>
            <p>Total Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">

        <!-- Map box -->
        <div class="box box-solid bg-light-blue-gradient">
          <div class="box-header">
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                <i class="fa fa-calendar"></i></button>
              <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></button>
            </div>
            <!-- /. tools -->

            <i class="fa fa-map-marker"></i>

            <h3 class="box-title">
              Visitors
            </h3>
          </div>
          <div class="box-body">
            <div id="world-map" style="height: 250px; width: 100%;"></div>
          </div>
          <!-- /.box-body-->
          <div class="box-footer no-border">
            <div class="row">
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <div id="sparkline-1"></div>
                <div class="knob-label">Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <div id="sparkline-2"></div>
                <div class="knob-label">Online</div>
              </div>
              <!-- ./col -->
              <div class="col-xs-4 text-center">
                <div id="sparkline-3"></div>
                <div class="knob-label">Exists</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
        </div>

      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
@endsection