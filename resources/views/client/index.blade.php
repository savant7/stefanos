@extends('adminlte::page')

@section('title', 'Client List')

@section('content_header')
<h1>Client List</h1>
@stop
@section('plugins.Datatables', true)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="clients" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($clients as $c)
                        <tr>
                            <td>..</td>
                            <td>{{$c->firstname1}}</td>
                            <td>{{$c->lastname1}}</td>
                            <td>{{$c->phone1}}</td>
                            <td>{{$c->email1}}</td>
                            <td> 
                                <div class="btn-group">
                                    <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@stop


@section('js')
<script>
  $(function () {
    $('#clients').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@stop