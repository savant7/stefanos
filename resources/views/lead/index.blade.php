@extends('adminlte::page')

@section('title', 'Web Lead List')

@section('content_header')
<h1>Web Lead List</h1>
@stop
@section('plugins.Datatables', true)
@section('plugins.Toastr', true)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a  class="btn btn-info" href="{{ route('leads.create')}}">Add New</a>
                    <a  class="btn btn-warning" href="#">Schedule Email</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="clients" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox" >
                                        <input id="check-all" class="custom-control-input" type="checkbox" />
                                        <label for="check-all" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </div>
                            </th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($leads as $c)
                        <tr>
                            <td>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox" >
                                        <input id="{{$c->id}}" value="o" class="custom-control-input check-item" type="checkbox" />
                                        <label for="{{$c->id}}" class="custom-control-label">&nbsp;</label>
                                    </div>
                                </div>
                            </td>
                            <td>{{$c->firstname1}}</td>
                            <td>{{$c->lastname1}}</td>
                            <td>{{$c->phone1}}</td>
                            <td>{{$c->email1}}</td>
                            <td> 
                                <div class="btn-group">
                                    <a href="{{ route('leads.edit', ['lead' => $c->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger nodelete"><i class="fas fa-trash"></i></a>
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
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    
    $('.nodelete').click(function(e) {
        e.preventDefault();
        toastr.error('No deleting allowed.  Make the record Inactive to appear at bottom of list.');
  });
    $('#check-all').on('click', function(){
        $('.check-item').click();
    });
  });
</script>
@stop