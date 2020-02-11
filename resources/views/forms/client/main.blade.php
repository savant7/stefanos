<form class="" method="POST" action="@if(isset($item)){{ route($type. 's.update', [$type => $item->id])}}@else{{ route($type. 's.store')}}@endif" role="form">
    @csrf
    @if(isset($item)) @method('PATCH') @endif
    <input name="user_id" type="hidden" value="{{Auth::id()}}" />

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Name</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input name='active' value='0' type="hidden" />
                                @if($item)
                                <input value="1" name="active" {{$item && $item->active ?'checked' : ''}} type="checkbox" class="custom-control-input" id="active">
                                @else
                                <input value="1" name="active" checked type="checkbox" class="custom-control-input" id="active">
                                @endif
                                <label class="custom-control-label" for="active">Status:</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fname" class="col-form-label">First name:</label>
                            <input value="{{$item?$item->firstname1 : old('firstname1')}}" name="firstname1" class="form-control" id="fname" placeholder="Firstname" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname" class="col-form-label">Last name:</label>
                            <input value="{{$item?$item->firstname1 : old('firstname1')}}" name="lastname1" class="form-control" id="lname" placeholder="Last name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fname" class="col-form-label">First name 2:</label>
                            <input value="{{$item?$item->firstname2 : old('firstname2')}}" name="firstname2" class="form-control" id="fname2" placeholder="First name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname" class="col-form-label">Last name 2:</label>
                            <input value="{{$item?$item->lastname2 : old('lastname2')}}" name="lastname2" class="form-control" id="lname2" placeholder="Last name">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Address</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Address 1:</label>
                            <input value="{{$item?$item->address1 : old('address1')}}" name="address1" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Address 2:</label>
                            <input value="{{$item?$item->address2 : old('address2')}}" name="address2" class="form-control" placeholder="Address 2">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">City:</label>
                            <input value="{{$item?$item->addresscity : old('addresscity')}}" name="addresscity" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Province:</label>
                            <input value="{{$item?$item->addressprov : old('addressprov')}}" name="addressprov" class="form-control" placeholder="Province">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Postal Code:</label>
                            <input value="{{$item?$item->addresspostal : old('addresspostal')}}" name="addresspostal" class="form-control" placeholder="Postal code">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">CRM</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Related Client:</label>
                            <select class="form-control select2bs4" name="relatedclient_id" >
                                <option value="none" @if($item && !$item->relatedclient_id)selected @endif>None</option>
                                @foreach(App\Client::where('user_id', Auth::id())->get() as $c)
                                <option value="{{$c->id}}" @if($item && $item->relatedclient_id === $c->id)selected {{$cname = $c->firstname1 . ' ' . $c->lastname1 }} @endif>{{$c->firstname1}} {{$c->lastname1}}</option>
                                @endforeach
                            </select>
                            @if($item && isset($cname))
                            <br>
                            <a target="_blank" class="btn btn-success" href="{{ route($type .'s.show', [$type => $item->relatedclient_id])}}">View {{$cname ?? ''}}</a>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">CRM Type:</label>
                            <select class="form-control select2bs4" name="admincrmtype_id">
                                @foreach(App\AdminCrmType::all() as $crm)
                                <option value="{{$crm->id}}" @if($item && $item->admincrmtype_id === $crm->id)selected @endif>{{$crm->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Client Type:</label>
                            <select class="form-control select2bs4" name="adminclienttype_id">
                                @foreach(App\AdminClientType::all() as $client)
                                <option value="{{$client->id}}" @if($item && $item->adminclienttype_id === $client->id)selected @endif>{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Client Rating Type:</label>
                            <select class="form-control select2bs4" name="adminclientratingtype_id" >
                                @foreach(App\AdminClientRatingType::all() as $client)
                                <option value="{{$client->id}}" @if($item && $item->adminclientratingtype_id === $client->id)selected @endif>{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Lead Type:</label>
                            <select class="form-control select2bs4" name="adminleadtype_id">
                                @foreach(App\AdminLeadType::all() as $lead)
                                <option value="{{$lead->id}}" @if($item && $item->adminleadtype_id === $lead->id)selected @endif>{{$lead->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Email</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email1" class="col-form-label">Email 1:</label>
                            <input value="{{$item?$item->email1 : old('email1')}}" name="email1" type="email" class="form-control" id="email1" placeholder="Email address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email2" class="col-form-label">Email 2:</label>
                            <input value="{{$item?$item->email2 : old('email2')}}" name="email2" type="email" class="form-control" id="email2" placeholder="Email address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email3" class="col-form-label">Email 3:</label>
                            <input value="{{$item?$item->email3 : old('email3')}}" name="email3" type="email" class="form-control" id="email3" placeholder="Email address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email4" class="col-form-label">Email 4:</label>
                            <input value="{{$item?$item->email4 : old('email4')}}" name="email4" type="email" class="form-control" id="email4" placeholder="Email address">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Birthday</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Birth Date 1:</label>
                            <input value="{{$item?$item->birthdate1 : old('birthdate1')}}" name="birthdate1" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Birth Date 2:</label>
                            <input value="{{$item?$item->birthdate2 : old('birthdate2')}}" name="birthdate2" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Phones</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Phone 1:</label>
                            <input value="{{$item?$item->phone1 : old('phone1')}}" name="phone1" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Phone 2:</label>
                            <input value="{{$item?$item->phone2 : old('phone2')}}" name="phone2" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Phone 3:</label>
                            <input value="{{$item?$item->phone3 : old('phone3')}}" name="phone3" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Phone 4:</label>
                            <input value="{{$item?$item->phone4 : old('phone4')}}" name="phone4" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Employer</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Name :</label>
                            <input value="{{$item?$item->employername : old('employername')}}" name="employername" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Title:</label>
                            <input value="{{$item?$item->employertitle : old('employertitle')}}" name="employertitle" class="form-control" placeholder="Address 2">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Phone:</label>
                            <input value="{{$item?$item->employerphone : old('employerphone')}}" name="employerphone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Address 1:</label>
                            <input value="{{$item?$item->employeraddress1 : old('employeraddress1')}}" name="employeraddress1" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
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
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
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
                            <label class="col-form-label">Child Birthdate 1:</label>
                            <input value="{{$item?$item->childbirthdate1 : old('childbirthdate1')}}" name="childbirthdate1" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Name 2:</label>
                            <input value="{{$item?$item->childname2 : old('childname2')}}" name="childname2" class="form-control" placeholder="Child name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Birthdate 2:</label>
                            <input value="{{$item?$item->childbirthdate2 : old('childbirthdate2')}}" name="childbirthdate2" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Name 3:</label>
                            <input value="{{$item?$item->childname3 : old('childname3')}}" name="childname3" class="form-control" placeholder="Child name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Birthdate 3:</label>
                            <input value="{{$item?$item->childbirthdate3 : old('childbirthdate3')}}" name="childbirthdate3" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Name 4:</label>
                            <input value="{{$item?$item->childname4 : old('childname4')}}" name="childname4" class="form-control" placeholder="Child name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Child Birthdate 4:</label>
                            <input value="{{$item?$item->childbirthdate4 : old('childbirthdate4')}}" name="childbirthdate4" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Custom Fields</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 1:</label>
                            <input value="{{$item?$item->customfield1 : old('customfield1')}}" name="customfield1" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 2:</label>
                            <input value="{{$item?$item->customfield2 : old('customfield2')}}" name="customfield2" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 3:</label>
                            <input value="{{$item?$item->customfield3 : old('customfield3')}}" name="customfield3" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 4:</label>
                            <input value="{{$item?$item->customfield4 : old('customfield4')}}" name="customfield4" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 5:</label>
                            <input value="{{$item?$item->customfield5 : old('customfield5')}}" name="customfield5" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 6:</label>
                            <input value="{{$item?$item->customfield6 : old('customfield6')}}" name="customfield6" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 7:</label>
                            <input value="{{$item?$item->customfield7 : old('customfield7')}}" name="customfield7" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 8:</label>
                            <input value="{{$item?$item->customfield8 : old('customfield8')}}" name="customfield8" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 9:</label>
                            <input value="{{$item?$item->customfield9 : old('customfield9')}}" name="customfield9" class="form-control" placeholder="Custom Field">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Custom Field 10:</label>
                            <input value="{{$item?$item->customfield10 : old('customfield10')}}" name="customfield10" class="form-control" placeholder="Custom Field">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Notes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label">Note 1:</label>
                            <textarea value="{{$item?$item->notes1 : old('notes1')}}" name="notes1" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-form-label">Note 2:</label>
                            <textarea value="{{$item?$item->notes2 : old('notes2')}}" name="notes2" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-form-label">Note 3:</label>
                            <textarea value="{{$item?$item->notes3 : old('notes3')}}" name="notes3" class="form-control"></textarea>
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