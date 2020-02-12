<form method="POST" action="@if(isset($item)){{ route($type. 's.update', [$type => $item->id])}}@else{{ route($type. 's.store')}}@endif" role="form">
    @csrf
    @if(isset($item)) @method('PATCH') @endif
    <input name="user_id" type="hidden" value="{{Auth::id()}}" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employer</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Company Name :</label>
                            <input value="{{$item?$item->employername : old('employername')}}" name="employername" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Job Title:</label>
                            <input value="{{$item?$item->employertitle : old('employertitle')}}" name="employertitle" class="form-control" placeholder="Address 2">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Phone:</label>
                            <input value="{{$item?$item->employerphone : old('employerphone')}}" name="employerphone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="col-form-label">Address 1:</label>
                            <input value="{{$item?$item->employeraddress1 : old('employeraddress1')}}" name="employeraddress1" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="col-form-label">Address 2:</label>
                            <input value="{{$item?$item->employeraddress2 : old('employeraddress2')}}" name="employeraddress2" class="form-control" placeholder="Address 2">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">City:</label>
                            <input value="{{$item?$item->employeraddresscity : old('employeraddresscity')}}" name="employeraddresscity" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Province:</label>
                            <input value="{{$item?$item->employeraddressprov : old('employeraddressprov')}}" name="employeraddressprov" class="form-control" placeholder="Province">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Postal Code:</label>
                            <input value="{{$item?$item->employeraddresspostal : old('employeraddresspostal')}}" name="employeraddresspostal" class="form-control" placeholder="Postal code">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Company Phone:</label>
                            <input value="{{$item?$item->employerphone : old('employerphone')}}" name="employerphone" class="form-control" placeholder="Company Phone">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    <div class="form-group row">
        <div class="offset-sm-5">
            <button type="submit" class="btn btn-lg btn-danger">Submit</button>
        </div>
    </div>
</form>