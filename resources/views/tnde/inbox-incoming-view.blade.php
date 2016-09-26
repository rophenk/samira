@extends('tnde.master')
@section('title', 'Inbox' )

@section('pagestyle')
        <link href="{{URL::asset('assets/apps/css/inbox.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Inbox</a>
                        </li>
@endsection

@section('content')
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div class="inbox">
                                    <div class="row">
                                        <div class="col-md-2">
                                            @include('tnde.inbox-sidebar')
                                        </div>
                                        <div class="col-md-10">
                                            <div class="inbox-body">
                                                <!--<div class="inbox-content"> </div>-->
                                                <div class="inbox-header inbox-view-header">
                                                    <h1 class="pull-left">{{ $incoming->incoming->subject }}
                                                        <a href="javascript:;"> Inbox </a>
                                                    </h1>
                                                    <div class="pull-right">
                                                        <a href="javascript:;" class="btn btn-icon-only dark btn-outline">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="inbox-view-info">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <!--<img src="{{URL::asset('assets/pages/media/users/avatar1.jpg')}}" class="inbox-author">-->
                                                            <span class="sbold">{{ $incoming->incoming->sender }}</span>
                                                            <?php
                                                            $FmyFunctions1 = new \App\Helpers\MyFunctions;
                                                            $dateSend = ($FmyFunctions1->calendar_time($incoming->dateSend));

                                                            ?>
                                                            &nbsp; -- {{ $dateSend }} 
                                                        </div>
                                                        <div class="col-md-5 inbox-info-btn">
                                                            <!--<div class="btn-group">
                                                                <button data-messageid="23" class="btn green reply-btn">
                                                                    <i class="fa fa-reply"></i> Disposisi
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;" data-messageid="23" class="reply-btn">
                                                                            <i class="fa fa-reply"></i> Reply </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-arrow-right reply-btn"></i> Forward </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-print"></i> Print </a>
                                                                    </li>
                                                                    <li class="divider"> </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-ban"></i> Spam </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                                    </li>
                                                                    <li>
                                                            </div>-->
                                                            <div class="actions">
                                                                <div class="btn-group">
                                                                    <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="/list-inbox-action/{{$incoming->uuid}}/approve"> Terima Surat</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/list-inbox-action/{{$incoming->uuid}}/reject-wrong-address"> Tolak Surat : Salah Alamat</a>
                                                                        </li>
                                                                        <li class="divider"> </li>
                                                                        <li>
                                                                            <a data-toggle="modal" href="#large">Disposisi</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inbox-view">
                                                    {{ $incoming->incoming->description }}
                                                </div>
                                                <hr>
                                                <div class="inbox-attached">
                                                    <div class="margin-bottom-15">
                                                        <span>attachments — </span>
                                                    </div>
                                                    @forelse($attachment as $attachment)
                                                        <div class="margin-bottom-25">
                                                            <!--<img src="{{URL::asset('assets/pages/media/gallery/image3.jpg')}}">-->
                                                            <div>
                                                                <strong>{{ $attachment->name }}</strong>
                                                                <span>
                                                                <?php
                                                                $size = ($FmyFunctions1->human_filesize($attachment->size));
                                                                ?>
                                                                {{ $size }} 
                                                                </span>
                                                                <a href="{{ $attachment->url }}" target="_blank">Download </a>
                                                            </div>
                                                        </div>
                                                    @empty
                                                    @endforelse
                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>

                            <div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form role="form" class="form-horizontal" action="/add-disposition" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Buat Disposisi</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div id="disposition_trait_id">    
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Sifat</label>
                                                        <div class="col-md-10">
                                                            <select id="disposition_trait_id" name="disposition_trait_id" class="form-control select2-multiple">
                                                                @forelse ($DispositionTrait as $DispositionTrait)
                                                                    <option value="{{ $DispositionTrait->id }}">{{ $DispositionTrait->trait }}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="disposition_degree_id">    
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Derajat</label>
                                                        <div class="col-md-10">
                                                            <select id="disposition_degree_id" name="disposition_degree_id" class="form-control select2-multiple">
                                                                @forelse ($DispositionDegree as $DispositionDegree)
                                                                    <option value="{{ $DispositionDegree->id }}">{{ $DispositionDegree->degree }}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="disposition_instruction">    
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Isi Disposisi</label>
                                                        <div class="col-md-10">
                                                            <select id="disposition_instruction" name="disposition_instruction[]" class="form-control select2-multiple" multiple>
                                                                @forelse ($DispositionInstruction as $DispositionInstruction)
                                                                    <option value="{{ $DispositionInstruction->instruction }}">{{ $DispositionInstruction->instruction }}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="receiver">    
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Tujuan Disposisi</label>
                                                        <div class="col-md-10">
                                                            <select id="receiver" name="receiver[]" class="form-control select2-multiple" multiple>
                                                                @forelse ($satker as $workunit)
                                                                    <option value="{{ $workunit->id }}">{{ $workunit->name }}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="note">    
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Pesan</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" rows="3" name="note"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                <input type="hidden" name="incoming_id" value="{{ $incoming->id }}" />
                                                <input type="hidden" name="incoming_uuid" value="{{ $incoming->uuid }}" />
                                                <input type="hidden" name="userID" value="{{ $user->id }}" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn green">Kirim Disposisi</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
@endsection

@section('page-scripts')
<script src="{{URL::asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/pages/scripts/ui-modals.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/apps/scripts/inbox.js')}}" type="text/javascript"></script>
        
@endsection