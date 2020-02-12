<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="btn btn-warning" href="#">Schedule Task</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <table id="clients" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Schedule Date</th>
                                <th>Email header</th>
                                <th>Email from</th>
                                <th>Email to</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($tasks as $t)
                            <tr>

                                <td>{{$t->scheduledate}}</td>
                                <td>{{$t->emailheader}}</td>
                                <td>{{$t->emailfrom}}</td>
                                <td>{{$t->emailto}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <p>No Tasks</p>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
</div>