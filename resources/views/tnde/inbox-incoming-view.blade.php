@extends('tnde.master')
@section('title', 'Inbox' )

@section('pagestyle')
        <link href="../assets/apps/css/inbox.min.css" rel="stylesheet" type="text/css" />
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
                                                            <!--<img src="../assets/pages/media/users/avatar1.jpg" class="inbox-author">-->
                                                            <span class="sbold">{{ $incoming->incoming->sender }}</span>
                                                            &nbsp; -- {{ $incoming->dateSend }} 
                                                        </div>
                                                        <div class="col-md-5 inbox-info-btn">
                                                            <div class="btn-group">
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
                                                            <!--<img src="../assets/pages/media/gallery/image3.jpg">-->
                                                            <div>
                                                                <strong>{{ $attachment->name }}</strong>
                                                                <span>{{ $attachment->size }} </span>
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
@endsection

@section('page-scripts')
<script src="../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>

        <!--<script src="../assets/apps/scripts/inbox.js" type="text/javascript"></script>-->
        
@endsection