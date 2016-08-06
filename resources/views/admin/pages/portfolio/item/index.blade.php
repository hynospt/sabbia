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
                  <th>Logo</th>
                  <th>Background Image</th>
                  <th>Company Name</th>
                  <th>Content</th>
                  <th>Created</th>
                  <th>Updated</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                
                @foreach($items as $item)
                  <tr>
                    <td>{{$index++}}</td>
                    <td>{{$item->partnerLogo}}</td>
                    <td>{{$item->partnerBackgroundImage}}</td>
                    <td>{{$item->partnerCompanyName}}</td>
                    <td>{{$item->partnerContent}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>
                      <a href="{{ action('PortfolioController@item_edit' , $item->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                      
                      <a href="{{ action('PortfolioController@item_delete', $item->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
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