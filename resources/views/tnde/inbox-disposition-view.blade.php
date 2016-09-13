@extends('tnde.master')
@section('title', 'Disposition Detail' )

@section('pagestyle')
        <link href="{{URL::asset('assets/apps/css/inbox.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Disposition Detail</a>
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
                                                    <h1 class="pull-left">{{ $incomingDisposition[0]->subject }}
                                                        <!--<a href="javascript:;"> Disposition Detail </a>-->
                                                    </h1>
                                                    <div class="pull-right">
                                                        <a href="/list-disposition-print/{{ $incomingDisposition[0]->uuid }}" class="btn btn-icon-only dark btn-outline" target="_blank">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="inbox-view-info">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <!--<img src="{{URL::asset('assets/pages/media/users/avatar1.jpg')}}" class="inbox-author">-->
                                                            <span class="sbold">{{ $incomingDisposition[0]->sender }}</span>
                                                            <?php
                                                            $dateSend = MyFunctions::calendar_time($disposition->dateSend);

                                                            //$letter_date = MyFunctions::calendar_time($incomingDisposition->letter_date);
                                                            $letter_date = MyFunctions::reverse_date($incomingDisposition[0]->letter_date);
                                                            ?>
                                                            &nbsp; -- {{ $dateSend }} 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inbox-view">

                                                    @include('tnde.inbox-disposition-print')
                                                    
                                                </div>
                                                <hr>
                                                
                                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
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