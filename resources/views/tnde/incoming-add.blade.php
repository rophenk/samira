@extends('tnde.master')
@section('title', 'Tambah Surat Masuk' )

@section('pagestyle')
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Tambah Surat Masuk</a>
                        </li>
@endsection

@section('content')
<!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            @include('tnde.sidebar')
                            <!-- END PAGE SIDEBAR -->
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
                                                    <span class="caption-subject bold uppercase"> Detail Surat</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form" class="form-horizontal" action="/add-incoming" method="post">
                                                    <div class="form-body">
                                                        <!--<div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Tanggal Input</label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="form_control_1" placeholder="Tanggal Input">
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>-->
                                                        <?php
                                                        $today = date("d-m-Y");
                                                        ?>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-2" for="form_control_1">Tanggal Input</label>
                                                            <div class="col-md-2">
                                                                <div class="input-group input-medium date date-picker" data-date="<?php echo $today; ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                    <input type="text" name="input_date" value="<?php echo $today; ?>" class="form-control" readonly>
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                                <!-- /input-group -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Nomor Agenda</label>
                                                            <div class="col-md-10">
                                                                <input type="text" name="agenda_number" class="form-control" id="form_control_1" placeholder="Nomor Agenda">
                                                                <div class="form-control-focus"> </div>
                                                                <span class="help-block">Some help goes here...</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Nomor Surat</label>
                                                            <div class="col-md-10">
                                                                <input type="text" name="letter_number" class="form-control" id="form_control_1" placeholder="Nomor Surat">
                                                                <div class="form-control-focus"> </div>
                                                                <span class="help-block">Some help goes here...</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-2" for="form_control_1">Tanggal Surat</label>
                                                            <div class="col-md-2">
                                                                <div class="col-md-10 input-group input-medium date date-picker" data-date="<?php echo $today; ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                    <input type="text" name="letter_date" value="<?php echo $today; ?>" class="form-control" readonly>
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                                <!-- /input-group -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group  form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Tipe Surat</label>
                                                            <div class="col-md-10">
                                                                <div class="md-radio-inline">
                                                                        <div class="md-radio has-warning">
                                                                            <input type="radio" id="internal" name="type" class="md-radiobtn" value="internal">
                                                                            <label for="internal">
                                                                                <span></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> Internal </label>
                                                                        </div>
                                                                        <div class="md-radio has-error">
                                                                            <input type="radio" id="eksternal" name="type" class="md-radiobtn" value="eksternal">
                                                                            <label for="eksternal">
                                                                                <span></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> Eksternal </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <div id="external-sender" style="display:none">    
                                                            <div class="form-group form-md-line-input">
                                                                <label class="col-md-2 control-label" for="form_control_1">Pengirim</label>
                                                                <div class="col-md-10">
                                                                    <input type="text" name="external_sender" class="form-control" id="form_control_1" placeholder="Nama / Institusi Pengirim">
                                                                    <div class="form-control-focus"> </div>
                                                                    <span class="help-block">External Sender..</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="internal-sender" style="display:none">    
                                                            <div class="form-group form-md-line-input">
                                                                <label class="col-md-2 control-label" for="form_control_1">Pengirim</label>
                                                                <div class="col-md-10">
                                                                    <!--<input type="text" name="sender" class="form-control" id="form_control_1" placeholder="Nama / Institusi Pengirim">
                                                                    <div class="form-control-focus"> </div>
                                                                    <span class="help-block">Internal Sender...</span>-->
                                                                    <select id="internal" name="internal_sender" class="form-control select2-multiple" multiple>
                                                                        @forelse ($satker as $workunit)
                                                                            <option value="{{ $workunit->name }}">{{ $workunit->name }}</option>
                                                                        @empty
                                                                        @endforelse
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Tujuan</label>
                                                            <div class="col-md-10">
                                                                <input type="text" name="receiver" class="form-control" id="form_control_1" placeholder="Nama / Institusi Tujuan">
                                                                <div class="form-control-focus"> </div>
                                                                <span class="help-block">Some help goes here...</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-2">Halaman</label>
                                                            <div class="col-md-10">
                                                                <input id="touchspin_12" type="text" value="1" name="page_count"> </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-2">Lampiran</label>
                                                            <div class="col-md-10">
                                                                <input id="touchspin_3" type="text" value="0" name="attachment_count"> </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <label class="col-md-2 control-label" for="form_control_1">Perihal</label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control" name="subject" rows="3"></textarea>
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input has-success">
                                                            <label class="control-label col-md-2" for="form_control_1">Ringkasan</label>
                                                            <div class="col-md-10">
                                                                <textarea class="wysihtml5 form-control" name="description" rows="6"></textarea>
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

        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fuelux/js/spinner.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript">
        </script>
        <script src="../assets/pages/scripts/components-bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {

                $("input[name='type']").click(function () {

                    if ($("#internal").is(":checked")) {
                        $("#internal-sender").show();
                        $("#external-sender").hide();
                    } else {
                        $("#internal-sender").hide();
                        $("#external-sender").show();
                    }
                });
            });
        </script>
        <script type="text/javascript">

                $('#internal-select').select2({
                    placeholder: 'Ketik Nama Satuan Kerja',
                    ajax: {
                        dataType: 'json',
                        url: '{{ url("/select-workunit") }}',
                        delay: 100,
                        data: function(params) {
                            return {
                                term: params.term
                            }
                        },
                        processResults: function (data, page) {
                          return {
                            results: data
                          };
                        },
                    }
        });
        </script>
@endsection