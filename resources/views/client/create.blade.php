@extends('adminlte::page')

@section('title', 'Add new Client')

@section('content_header')
<h1>Add Client</h1>
@stop
@section('plugins.Select2', true)
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#main" data-toggle="tab">Main</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tasks" data-toggle="tab">Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="#emails" data-toggle="tab">Emails</a></li>
                    <li class="nav-item"><a class="nav-link" href="#children" data-toggle="tab">Children</a></li>
                    <li class="nav-item"><a class="nav-link" href="#employment" data-toggle="tab">Employment</a></li>
                    <li class="nav-item"><a class="nav-link" href="#customs" data-toggle="tab">Customs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#notes" data-toggle="tab">Notes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#billings" data-toggle="tab">Billings</a></li>
                    <li class="nav-item"><a class="nav-link" href="#campaigns" data-toggle="tab">Campaigns</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="main">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="" method="POST" action="{{ route('clients.store')}}" role="form">
                            @csrf
                            <input name="user_id" type="hidden" value="{{Auth::id()}}" />
                            <input name="active" type="hidden" value="1" />
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
                                                <div class="form-group col-md-6">
                                                    <label for="fname" class="col-form-label">First name:</label>
                                                    <input name="firstname1" type="text" class="form-control" id="fname" placeholder="Firstname" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lname" class="col-form-label">Last name:</label>
                                                    <input name="lastname1" type="text" class="form-control" id="lname" placeholder="Last name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="fname" class="col-form-label">First name 2:</label>
                                                    <input name="firstname2" type="text" class="form-control" id="fname2" placeholder="First name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lname" class="col-form-label">Last name 2:</label>
                                                    <input name="lastname2" type="text" class="form-control" id="lname2" placeholder="Last name">
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
                                                    <input name="address1" type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Address 2:</label>
                                                    <input name="address2" type="text" class="form-control" placeholder="Address 2">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="col-form-label">City:</label>
                                                    <input name="addresscity" type="text" class="form-control" placeholder="City">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="col-form-label">Province:</label>
                                                    <input name="addressprov" type="text" class="form-control" placeholder="Province">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="col-form-label">Postal Code:</label>
                                                    <input name="addresspostal" type="text" class="form-control" placeholder="Postal code">
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
                                                        @foreach(App\Client::where('user_id', Auth::id())->get() as $c)
                                                        <option value="{{$c->id}}">{{$c->firstname1}} {{$c->lastname1}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">CRM Type:</label>
                                                    <select class="form-control select2bs4" name="admincrmtype_id">
                                                        @foreach(App\AdminCrmType::all() as $crm)
                                                        <option value="{{$crm->id}}">{{$crm->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Client Type:</label>
                                                    <select class="form-control select2bs4" name="adminclienttype_id">
                                                        @foreach(App\AdminClientType::all() as $client)
                                                        <option value="{{$client->id}}">{{$client->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Client Rating Type:</label>
                                                    <select class="form-control select2bs4" name="adminclientratingtype_id" >
                                                        @foreach(App\AdminClientRatingType::all() as $client)
                                                        <option value="{{$client->id}}">{{$client->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Lead Type:</label>
                                                    <select class="form-control select2bs4" name="adminleadtype_id">
                                                        @foreach(App\AdminLeadType::all() as $lead)
                                                        <option value="{{$lead->id}}">{{$lead->name}}</option>
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
                                                    <input name="email1" type="email" class="form-control" id="email1" placeholder="Email address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email2" class="col-form-label">Email 2:</label>
                                                    <input name="email2" type="email" class="form-control" id="email2" placeholder="Email address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email3" class="col-form-label">Email 3:</label>
                                                    <input name="email3" type="email" class="form-control" id="email3" placeholder="Email address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email4" class="col-form-label">Email 4:</label>
                                                    <input name="email4" type="email" class="form-control" id="email4" placeholder="Email address">
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
                                                    <input type="text" name="birthdate1" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Birth Date 2:</label>
                                                    <input type="text" name="birthdate2" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                                                    <input name="phone1" type="text" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Phone 2:</label>
                                                    <input name="phone2" type="text" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Phone 3:</label>
                                                    <input name="phone3" type="text" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Phone 4:</label>
                                                    <input name="phone4" type="text" class="form-control" placeholder="Phone">
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
                                                    <input name="employername" type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Title:</label>
                                                    <input name="employertitle" type="text" class="form-control" placeholder="Address 2">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Phone:</label>
                                                    <input name="employerphone" type="text" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Address 1:</label>
                                                    <input name="employeraddress1" type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Address 2:</label>
                                                    <input name="employeraddress2" type="text" class="form-control" placeholder="Address 2">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">City:</label>
                                                    <input name="employeraddresscity" type="text" class="form-control" placeholder="City">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Province:</label>
                                                    <input name="employeraddressprov" type="text" class="form-control" placeholder="Province">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Postal Code:</label>
                                                    <input name="employeraddresspostal" type="text" class="form-control" placeholder="Postal code">
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
                                                    <input name="childname1" type="text" class="form-control" placeholder="Child name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Child Birthdate 1:</label>
                                                    <input type="text" name="childbirthdate1" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Child Name 2:</label>
                                                    <input name="childname2" type="text" class="form-control" placeholder="Child name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Child Birthdate 2:</label>
                                                    <input type="text" name="childbirthdate2" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Child Name 3:</label>
                                                    <input name="childname3" type="text" class="form-control" placeholder="Child name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Child Birthdate 3:</label>
                                                    <input type="text" name="childbirthdate3" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Child Name 4:</label>
                                                    <input name="childname4" type="text" class="form-control" placeholder="Child name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Child Birthdate 4:</label>
                                                    <input type="text" name="childbirthdate4" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                                                    <input name="customfield1" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 2:</label>
                                                    <input name="customfield2" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 3:</label>
                                                    <input name="customfield3" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 4:</label>
                                                    <input name="customfield4" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 5:</label>
                                                    <input name="customfield5" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 6:</label>
                                                    <input name="customfield6" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 7:</label>
                                                    <input name="customfield7" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 8:</label>
                                                    <input name="customfield8" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 9:</label>
                                                    <input name="customfield9" type="text" class="form-control" placeholder="Custom Field">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="col-form-label">Custom Field 10:</label>
                                                    <input name="customfield10" type="text" class="form-control" placeholder="Custom Field">
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
                                                    <textarea name="notes1" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="col-form-label">Note 2:</label>
                                                    <textarea name="notes2" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="col-form-label">Note 3:</label>
                                                    <textarea name="notes3" class="form-control"></textarea>
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
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tasks">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="emails">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="children">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="employment">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="customs">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="notes">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="billings">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="campaigns">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@stop

@section('js')
<script src="/vendor/jquery/jquery.inputmask.min.js"></script>
<script>
    $('[data-mask]').inputmask();
    $('.select2bs4').select2({ theme: 'bootstrap4' })
</script>
@stop