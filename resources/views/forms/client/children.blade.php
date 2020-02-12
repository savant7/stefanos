<form class="" method="POST" action="@if(isset($item)){{ route($type. 's.update', [$type => $item->id])}}@else{{ route($type. 's.store')}}@endif" role="form">
    @csrf
    @if(isset($item)) @method('PATCH') @endif
    <input name="user_id" type="hidden" value="{{Auth::id()}}" />


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Children</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Name 1:</label>
                            <input value="{{$item?$item->childname1 : old('childname1')}}" name="childname1" class="form-control" placeholder="Child name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Birth Date 1: @if(isset($item)){{age($item->childbirthdate1)}} @endif</label>
                            <input value="{{$item->childbirthdate1?$item->childbirthdate1->format('m-d-Y') : old('childbirthdate1')}}" name="childbirthdate1" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Name 2:</label>
                            <input value="{{$item?$item->childname2 : old('childname2')}}" name="childname2" class="form-control" placeholder="Child name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Birth Date 2:@if(isset($item)){{age($item->childbirthdate2)}} @endif </label>
                            <input value="{{$item->childbirthdate2?$item->childbirthdate2->format('m-d-Y') : old('childbirthdate2')}}" name="childbirthdate2" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Name 3:</label>
                            <input value="{{$item?$item->childname3 : old('childname3')}}" name="childname3" class="form-control" placeholder="Child name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Birth Date 3: @if(isset($item)){{age($item->childbirthdate3)}} @endif</label>
                            <input value="{{$item->childbirthdate3?$item->childbirthdate3->format('m-d-Y') : old('childbirthdate3')}}" name="childbirthdate3" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Name 4:</label>
                            <input value="{{$item?$item->childname4 : old('childname4')}}" name="childname4" class="form-control" placeholder="Child name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Birth Date 4: @if(isset($item)){{age($item->childbirthdate4)}} @endif</label>
                            <input value="{{$item->childbirthdate4?$item->childbirthdate4->format('m-d-Y') : old('childbirthdate4')}}" name="childbirthdate4" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm-dd-yyyy" data-mask>
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