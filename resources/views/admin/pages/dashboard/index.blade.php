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
      <!-- Left col -->
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">

        <!-- Map box -->
        <div class="box box-solid bg-light-blue-gradient">
          <div class="box-header">
            <!-- tools box -->
            <div class="pull-right box-tools">
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
            <div id="world-map" style="height: 250px; width: 100%; padding-left: 140px;
padding-top: 75px;">
                 <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                  <!-- Histats.com  START  (aync)-->
                  <script type="text/javascript">var _Hasync= _Hasync|| [];
                  _Hasync.push(['Histats.start', '1,3623078,4,605,110,55,00011001']);
                  _Hasync.push(['Histats.fasi', '1']);
                  _Hasync.push(['Histats.track_hits', '']);
                  (function() {
                  var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                  hs.src = ('//s10.histats.com/js15_as.js');
                  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                  })();</script>
                  <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3623078&101" alt="free geoip" border="0"></a></noscript>
                  <!-- Histats.com  END  -->
            </div>
          </div>
          <!-- /.box-body-->
          <div class="box-footer no-border">
            <div class="row">
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <div id="sparkline-1"></div>
                <div class="knob-label">Today Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <div id="sparkline-2"></div>
                <div class="knob-label">Total Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-xs-4 text-center">
                <div id="sparkline-3"></div>
                <div class="knob-label">Online</div>
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