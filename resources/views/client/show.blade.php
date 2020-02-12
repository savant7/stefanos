@extends('adminlte::page')

@section('title', $title)

@section('content_header')
<h1>{{$title}}</h1>
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
                    @if($ucustoms && $ucustoms->tabchildren)
                    <li class="nav-item"><a class="nav-link" href="#children" data-toggle="tab">Children</a></li>
                    @endif
                    @if($ucustoms && $ucustoms->tabemployment)
                    <li class="nav-item"><a class="nav-link" href="#employment" data-toggle="tab">Employment</a></li>
                    @endif
                    @if($ucustoms && $ucustoms->tabcustom)
                    <li class="nav-item"><a class="nav-link" href="#customs" data-toggle="tab">Customs</a></li>
                    @endif
                    @if($ucustoms && $ucustoms->tabnote)
                    <li class="nav-item"><a class="nav-link" href="#notes" data-toggle="tab">Notes</a></li>
                    @endif
                    @if($ucustoms && $ucustoms->tabbilling)
                    <li class="nav-item"><a class="nav-link" href="#billings" data-toggle="tab">Billings</a></li>
                    @endif
                    @if($ucustoms && $ucustoms->tabcampaign)
                    <li class="nav-item"><a class="nav-link" href="#campaigns" data-toggle="tab">Campaigns</a></li>
                    @endif
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="main">
                    {{--
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        --}}
                        @include('forms.client.main')
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
                    @if($ucustoms && $ucustoms->tabchildren)
                    <div class="tab-pane" id="children">
                        @include('forms.client.children')
                    </div>
                    @endif
                    <!-- /.tab-pane -->
                    @if($ucustoms && $ucustoms->tabemployment)
                    <div class="tab-pane" id="employment">
                        @include('forms.client.employment')
                    </div>
                    @endif
                    <!-- /.tab-pane -->
                    @if($ucustoms && $ucustoms->tabcustom)
                    <div class="tab-pane" id="customs">
                        @include('forms.client.customs')
                    </div>
                    @endif
                    <!-- /.tab-pane -->
                    @if($ucustoms && $ucustoms->tabnote)
                    <div class="tab-pane" id="notes">
                        @include('forms.client.notes')
                    </div>
                    @endif
                    <!-- /.tab-pane -->
                    @if($ucustoms && $ucustoms->tabbilling)
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
                    @endif
                    <!-- /.tab-pane -->
                    @if($ucustoms && $ucustoms->tabcampaign)
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
                    @endif
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