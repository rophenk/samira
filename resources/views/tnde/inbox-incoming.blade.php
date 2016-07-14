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
                                                <div class="inbox-header">
                                                    <h1 class="pull-left">Inbox</h1>
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
            <th colspan="1">
                <!--<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-group-checkbox" />
                    <span></span>
                </label>
                <div class="btn-group input-actions">
                    <a class="btn btn-sm blue btn-outline dropdown-toggle sbold" href="javascript:;" data-toggle="dropdown"> Actions
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-pencil"></i> Mark as Read </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-ban"></i> Spam </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-trash-o"></i> Delete </a>
                        </li>
                    </ul>
                </div>-->
            </th>
            <th class="pagination-control" colspan="3">
                <span class="pagination-info"> 1-30 of {{ $incoming->count() }}</span>
                <!--<a class="btn btn-sm blue btn-outline">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="btn btn-sm blue btn-outline">
                    <i class="fa fa-angle-right"></i>
                </a>-->
                {!! $incoming->links() !!}
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($incoming as $incoming)
        <?php 
          if($incoming->incoming->attachment_count > 0) {
            $attachment = '<i class="fa fa-paperclip"></i>';
          } else {
            $attachment = '';
          }

          if($incoming->read > 0) {
            $read = '';
          } else {
            $read = 'class="unread"';
          }
          $FmyFunctions1 = new \App\Helpers\MyFunctions;
          $dateSend = ($FmyFunctions1->calendar_time($incoming->dateSend));
                                                        
        ?>
        
        <tr <?php echo $read; ?> data-messageid="{{ $incoming->incoming->id }}">
            <!--<td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>-->
            <td class=""> <a href="/list-inbox-view/{{ $incoming->uuid }}">{{ $incoming->incoming->sender }}</a></td>
            <td class=""> <a href="/list-inbox-view/{{ $incoming->uuid }}">{{ $incoming->incoming->subject }}</a></td>
            <td class="view-message inbox-small-cells">
              <?php echo $attachment; ?>
                
            </td>
            <td class="text-right"> {{ $dateSend }}</td>
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