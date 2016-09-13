@extends('tnde.master')
@section('title', 'Disposition' )

@section('pagestyle')
        <link href="../assets/apps/css/inbox.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Disposition</a>
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
                                                <div class="inbox-header">
                                                    <h1 class="pull-left">Disposition</h1>
                                                    <!--<form class="form-inline pull-right" action="index.html">
                                                        <div class="input-group input-medium">
                                                            <input type="text" class="form-control" placeholder="Password">
                                                            <span class="input-group-btn">
                                                                <button type="submit" class="btn green">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </form>-->
                                                </div>
                                                <!--<div class="inbox-content"> </div>-->
                                                <table class="table table-striped table-advance table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Surat Masuk
                                                            </th>
                                                            <th>
                                                                Disposisi
                                                            </th>
                                                            <th>
                                                                Catatan
                                                            </th>
                                                            <th class="pagination-control">
                                                                <span class="pagination-info"> 1-30 of {{ $disposition->count() }}</span>
                                                                
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($incoming as $incomingDisposition)
                                                        <?php 
                                                        if($incomingDisposition->read > 0) {
                                                            $read = '';
                                                          } else {
                                                            $read = 'class="unread"';
                                                          }
                                                         
                                                        $instruction = json_decode($incomingDisposition->disposition_instruction);
                                                                                                        
                                                        ?>
                                                        
                                                        <tr <?php echo $read; ?>  data-messageid="{{ $incomingDisposition->disposition_id }}">
                                                            <td class=""> Pengirim : {{ $incomingDisposition->subject }}<br />
                                                                <a href="/list-inbox-view/{{ $incomingDisposition->incoming_activities_uuid }}">
                                                                {{ $incomingDisposition->subject }}
                                                                </a>
                                                            </td>
                                                            <td class=""> 
                                                                <a href="/list-disposition-view/{{ $incomingDisposition->uuid }}">
                                                                <ul>
                                                                @forelse($instruction as $instruction)
                                                                    <li>{{ $instruction }}</li>
                                                                @empty
                                                                @endforelse
                                                                </ul>
                                                                </a>
                                                            </td>
                                                            <td class="">
                                                            {{ $incomingDisposition->note }}

                                                            </td>
                                                            <td class="">
                                                            &nbsp;

                                                            </td>
                                                        </tr>
                                                        
                                                        @empty
                                                        @endforelse
                                                        
                                                    </tbody>
                                                </table>
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

        <script src="../assets/apps/scripts/inbox.js" type="text/javascript"></script>
        
@endsection