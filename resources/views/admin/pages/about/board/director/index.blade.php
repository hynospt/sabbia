@extends('app')

@section('title')
Home
@endsection

@section('loadCss')
  <link rel="stylesheet" href="{{url('assets')}}/plugins/datatables/dataTables.bootstrap.css">
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Fullname</th>
                  <th>Role</th>
                  <th>Content</th>
                  <th>Created</th>
                  <th>Updated</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                
                @foreach($directors as $director)
                  <tr>
                    <td>{{$index++}}</td>
                    <td>{{$director->fullname}}</td>
                    <td>{{$director->role}}</td>
                    <td>{{$director->text}}</td>
                    <td>{{$director->created_at}}</td>
                    <td>{{$director->updated_at}}</td>
                    <td>
                      <button type="button" class="btn btn-warning"><a href="{{ action('DirectorController@edit' , $director->id) }}">Edit</a></button>
                      <button type="button" class="btn btn-danger"><a href="{{action('DirectorController@delete', $director->id)}}">Delete</a></button>
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