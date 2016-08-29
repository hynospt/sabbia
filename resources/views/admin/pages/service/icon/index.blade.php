@extends('app')

@section('title')
Service Icon Modify
@endsection

@section('loadCss')
  <link rel="stylesheet" href="{{url('assets')}}/plugins/datatables/dataTables.bootstrap.css">
@endsection

@section('body')
  <div class="content-wrapper">
    @include('errors.formErrors')
    <section class="content-header">
      <h1>
        Service
        <small>Modify</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Services</a></li>
        <li class="active"> Modify Service</li>
      </ol>

      <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table Service</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Background Image</th>
                  <th>Cover Image</th>
                  <th>Tag</th>
                  <th>Updated</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                
                @foreach($icons as $icon)
                  <tr>
                    <td>{{$index++}}</td>
                    <td><img class="img-responsive" height="300" src="{{url('saved_images/services', $icon->bgImage)}}"></td>
                    <td><img class="img-responsive" height="300" src="{{url('saved_images/services', $icon->coverImage)}}"></td>
                    <td>{!! $icon->tag !!}</td>
                    <td>{{$icon->updated_at}}</td>
                    <td style="display:inline-flex">
                      <a href="{{ action('ServiceController@icon_edit' , $icon->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                      
                      <a href="{{ action('ServiceController@icon_delete', $icon->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </section>

    </section>

  </div>
@endsection

@section('scriptJs')
  <script src="{{url('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{url('assets')}}/plugins/datatables/dataTables.bootstrap.min.js"> </script>

  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
@endsection