<form class="" method="POST" action="@if(isset($item)){{ route($type. 's.update', [$type => $item->id])}}@else{{ route($type. 's.store')}}@endif" role="form">
    @csrf
    @if(isset($item)) @method('PATCH') @endif
    <input name="user_id" type="hidden" value="{{Auth::id()}}" />

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Notes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label">{{ $labels['notelabel1']}}:</label>
                            <textarea name="notes1" class="form-control">{{$item?$item->notes1 : old('notes1')}}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-form-label">{{ $labels['notelabel2']}}:</label>
                            <textarea name="notes2" class="form-control">{{$item?$item->notes2 : old('notes2')}}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-form-label">{{ $labels['notelabel3']}}:</label>
                            <textarea name="notes3" class="form-control">{{$item?$item->notes3 : old('notes3')}}</textarea>
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