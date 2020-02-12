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
                    @if(isset($item))
                    <li class="nav-item"><a class="nav-link" href="#tasks" data-toggle="tab">Tasks</a></li>
                    @endif
                    @if(isset($item))
                    <li class="nav-item"><a class="nav-link" href="#emails" data-toggle="tab">Emails</a></li>
                    @endif
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
                    @if(isset($item) && $ucustoms && $ucustoms->tabbilling && $type == 'client')
                    <li class="nav-item"><a class="nav-link" href="#billings" data-toggle="tab">Billings</a></li>
                    @endif
                    @if(isset($item) && $ucustoms && $ucustoms->tabcampaign)
                    <li class="nav-item"><a class="nav-link" href="#campaigns" data-toggle="tab">Campaigns</a></li>
                    @endif
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="main">
                        @include('forms.client.main')
                    </div>
                    <!-- /.tab-pane -->
                    @if(isset($item))
                    <div class="tab-pane" id="tasks">
                       @include('forms.client.task')
                    </div>
                    @endif
                    <!-- /.tab-pane -->
                    @if(isset($item))
                    <div class="tab-pane" id="emails">
                        @include('forms.client.email')
                    </div>
                    @endif
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
                    @if($type == 'client' && isset($item) && $ucustoms && $ucustoms->tabbilling)
                    <div class="tab-pane" id="billings">
                        @include('forms.client.billing')
                    </div>
                    @endif
                    <!-- /.tab-pane -->
                    @if(isset($item) && $ucustoms && $ucustoms->tabcampaign)
                    <div class="tab-pane" id="campaigns">
                        @include('forms.client.campaign')
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