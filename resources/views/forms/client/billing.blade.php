<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="btn btn-warning" href="#">Add Bills</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <table id="clients" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Service Date</th>
                                <th>Billing Date</th>
                                <th>Paid Date</th>
                                <th>Total Amount</th>
                                <th>Total Tax</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($billings as $b)
                            <tr>
                                <td>{{$b->name}}</td>
                                <td>{{$b->dateservice}}</td>
                                <td>{{$b->datebilling}}</td>
                                <td>{{$b->datepaid }}</td>
                                <td>{{$b->totalamount }}</td>
                                <td>{{$b->totaltax }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <p>No Bills</p>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
</div>