<form class="" method="POST" action="@if(isset($item)){{ route($type. 's.update', [$type => $item->id])}}@else{{ route($type. 's.store')}}@endif" role="form">
    @csrf
    @if(isset($item)) @method('PATCH') @endif
    <input name="user_id" type="hidden" value="{{Auth::id()}}" />

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Custom Fields</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield1']}} :</label>
                            <input value="{{$item?$item->customfield1 : old('customfield1')}}" name="customfield1" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield2']}}:</label>
                            <input value="{{$item?$item->customfield2 : old('customfield2')}}" name="customfield2" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield3']}}:</label>
                            <input value="{{$item?$item->customfield3 : old('customfield3')}}" name="customfield3" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield4']}}:</label>
                            <input value="{{$item?$item->customfield4 : old('customfield4')}}" name="customfield4" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield5']}}:</label>
                            <input value="{{$item?$item->customfield5 : old('customfield5')}}" name="customfield5" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield6']}}:</label>
                            <input value="{{$item?$item->customfield6 : old('customfield6')}}" name="customfield6" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield7']}}:</label>
                            <input value="{{$item?$item->customfield7 : old('customfield7')}}" name="customfield7" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield8']}}:</label>
                            <input value="{{$item?$item->customfield8 : old('customfield8')}}" name="customfield8" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield9']}}:</label>
                            <input value="{{$item?$item->customfield9 : old('customfield9')}}" name="customfield9" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">{{ $labels['customfield10']}}:</label>
                            <input value="{{$item?$item->customfield10 : old('customfield10')}}" name="customfield10" class="form-control" placeholder="Custom Field">
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