<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="btn btn-warning" href="#">Schedule Campaign</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <table id="clients" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Schedule Date</th>
                                <th>Schedule Time</th>
                                <th>Template Subject</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($emails as $e)
                            <tr>

                                <td>{{$e->scheduledate}}</td>
                                <td>{{$e->scheduletime}}</td>
                                <td>{{$e->templatesubject }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <p>No Campaigns</p>
                            </tr>
                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Schedule Date</th>
                                <th>Email header</th>
                                <th>Email from</th>
                                <th>Email to</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>   
</div>