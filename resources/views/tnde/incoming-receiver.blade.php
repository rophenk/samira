@extends('tnde.master')
@section('title', 'Penerima Surat Masuk' )

@section('pagestyle')
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
       <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Penerima Surat Masuk</a>
                        </li>
@endsection

@section('content')
<div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            @include('tnde.sidebar')
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                  <div class="row">
                                                <div class="col-md-12">
                                                    <!-- BEGIN PORTLET -->
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption caption-md">
                                                                <i class="icon-bar-chart theme-font hide"></i>
                                                                <span class="caption-subject font-blue-madison bold uppercase">Data Penerima Surat</span>
                                                                                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    
                                                                  
                                                                    <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> Tambah Penerima </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-scrollable table-scrollable-borderless">
                                                                <table class="table table-hover table-light">
                                                                    <thead>
                                                                        <tr class="uppercase">
                                                                            <th colspan="2"> Pengguna </th>
                                                                            <th> Satker </th>
                                                                            <th> Status </th>
                                                                            <th> Dibaca </th>
                                                                            <th> Respon </th>
                                                                        </tr>
                                                                    </thead>
                                                                    
                                                                        @forelse ($receiver as $receiver)
                                                                        <?php
                                                                        if($receiver->read < 1) {
                                                                          $read = '<label class="label label-danger">Belum Dibaca</label>';
                                                                        } else {
                                                                          $read = '<label class="label label-warning">Sudah Dibaca</label>';
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                          <td class="fit">
                                                                              <img class="user-pic" src="../assets/layouts/layout5/img/{{ $receiver->avatar }}"> </td>
                                                                          <td>
                                                                              <a href="javascript:;" class="primary-link">{{ $receiver->name }}</a>
                                                                          </td>
                                                                          <td> {{ $receiver->satker }}</td>
                                                                          <td> {{ $receiver->receiverStatus }} </td>
                                                                          <td> <?php echo $read; ?> </td>
                                                                          <td>
                                                                              <span class="bold theme-font">{{ $receiver->action }}</span>
                                                                          </td>
                                                                        </tr>
                                                                        @empty
                                                                        <tr>
                                                                          <td colspan="6">
                                                                            Belum Ada Penerima
                                                                          </td>
                                                                        </tr>
                                                                        @endforelse
                                                                        
                                                                    
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END PORTLET -->
                                                </div>
                                            </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>

                                                <div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <form role="form" class="form-horizontal" action="/receiver-incoming" method="post">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                    <h4 class="modal-title">Tambah Penerima</h4>
                                                                </div>
                                                                <div class="modal-body"> 
                                                                    <div id="receiver">    
                                                                        <div class="form-group form-md-line-input">
                                                                            <label class="col-md-2 control-label" for="form_control_1">Penerima</label>
                                                                            <div class="col-md-10">
                                                                                <select id="receiver" name="receiver[]  " class="form-control select2-multiple" multiple>
                                                                                    @forelse ($satker as $workunit)
                                                                                        <option value="{{ $workunit->id }}">{{ $workunit->name }}</option>
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="receiver">    
                                                                        <div class="form-group form-md-line-input">
                                                                            <label class="col-md-2 control-label" for="form_control_1">Tembusan</label>
                                                                            <div class="col-md-10">
                                                                                <select id="tembusan" name="tembusan[]" class="form-control select2-multiple" multiple>
                                                                                    @forelse ($satker as $workunit)
                                                                                        <option value="{{ $workunit->id }}">{{ $workunit->name }}</option>
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                                    <input type="hidden" name="incoming_id" value="{{ $incoming->id }}" />
                                                                    <input type="hidden" name="incoming_uuid" value="{{ $incoming->uuid }}" />
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn green">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                              
@endsection

@section('page-scripts')

        <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
        
@endsection