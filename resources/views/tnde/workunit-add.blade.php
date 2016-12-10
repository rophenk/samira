@extends('tnde.master')
@section('title', 'Tambah Satuan Kerja' )

@section('pagestyle')
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Tambah Satuan Kerja</a>
                        </li>
@endsection

@section('content')
<!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                  <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div id="tab-1" class="tab-content current">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-green-haze">
                                                    <i class="icon-settings font-green-haze"></i>
                                                    <span class="caption-subject bold uppercase"> Satuan Kerja</span>
                                                </div>
                                                <div class="actions">
                                                    <!--<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>-->
                                                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form" class="form-horizontal" action="/add-workunit" method="post">
                                                    <div class="form-body">
                                                        <div id="internal-sender">    
                                                            <div class="form-group form-md-line-input">
                                                                <label class="col-md-2 control-label" for="form_control_1">Parent</label>
                                                                <div class="col-md-10">
                                                                    <!--<input type="text" name="sender" class="form-control" id="form_control_1" placeholder="Nama / Institusi Pengirim">
                                                                    <div class="form-control-focus"> </div>
                                                                    <span class="help-block">Internal Sender...</span>-->
                                                                    <select id="parent" name="parent_id" class="form-control select2">
                                                                        @forelse ($satker as $workunit)
                                                                            <option value="{{ $workunit->id }}">{{ $workunit->name }}</option>
                                                                        @empty
                                                                        @endforelse
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Satuan Kerja</label>
                                                            <div class="col-md-10">
                                                                <input type="text" name="name" class="form-control" id="form_control_1" placeholder="Isi nama Satuan Kerja">
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-2 col-md-10">
                                                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                                <input type="hidden" name="user_id" value="{{ $user->id }}" />
                                                                <button type="reset" class="btn default">Cancel</button>
                                                                <button type="submit" class="btn blue">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        </div>

                                        <!--<div id="tab-2" class="tab-content">
                                          lalala
                                        </div>-->
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->
@endsection

@section('page-scripts')
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
@endsection