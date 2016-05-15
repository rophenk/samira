@extends('tnde.master')
@section('title', 'Lampiran Surat Masuk' )

@section('pagestyle')
        <link href="../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Lampiran Surat Masuk</a>
                        </li>
@endsection

@section('content')
                    @forelse ($incoming as $incoming)
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
                                                    <i class="fa fa-paperclip font-green-haze"></i>
                                                    <span class="caption-subject bold uppercase"> Lampiran Surat</span>
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
                                            <div class="portlet box">
                                            <div class="portlet-body">
                                                <div class="tabbable-line">
                                                    <ul class="nav nav-tabs ">
                                                        <li class="active">
                                                            <a href="#tab_15_1" data-toggle="tab"> Unggah Lampiran</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_15_2" data-toggle="tab"> Lihat Lampiran</a>
                                                        </li>
                                                        <!--<li>
                                                            <a href="#tab_15_3" data-toggle="tab"> Section 3 </a>
                                                        </li>-->
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_15_1">
                                                            <form id="upload" action="/attachment-incoming/{{ $incoming->uuid }}" enctype="multipart/form-data" class="form-horizontal">
                                          <div class="form-body">
                                            
                                            <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Berkas Lampiran</label>
                                                            <div class="col-md-10">
                                                                <input type="file" name="file[]" multiple>
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                            <div class="form-actions">
                                                          <div class="row">
                                                              <div class="col-md-offset-2 col-md-10">
                                                                  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                                                  <input type="hidden" name="user_id" value="{{ $user->id }}" />
                                                                  <input type="hidden" name="uuid" value="{{ $incoming->uuid }}" />
                                                                  <button type="reset" class="btn default">Cancel</button>
                                                                  <button type="submit" class="btn blue">Submit</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                          </div>
                                        </form>
                                        <div id="message"></div>
                                        <hr />
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Catatan Upload Lampiran Surat</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ul>
                                                    <li> Ukuran Maksimum File
                                                        <strong>2 MB</strong> </li>
                                                    <li> Hanya menerima file dengan extension (
                                                        <strong>JPG, GIF, PNG, PDF</strong>)  </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab_15_2">
                                                            <p> Berkas Lampiran </p>
                                                            <p> 
                                                              <ul>
                                                                @forelse ($attachment as $lampiran)
                                                                <li><a href="/attachment-show-incoming/{{ $lampiran->uuid }}">{{ $lampiran->name }}</a></li>
                                                                @empty
                                                                @endforelse
                                                              </ul>
                                                            </p>
                                                            <!--<p>
                                                                <a class="btn green" href="ui_tabs_accordions_navs.html#tab_15_2" target="_blank"> Activate this tab via URL </a>
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- The blueimp Gallery widget -->
                                <!--<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                    <div class="slides"> </div>
                                    <h3 class="title"></h3>
                                    <a class="prev"> ‹ </a>
                                    <a class="next"> › </a>
                                    <a class="close white"> </a>
                                    <a class="play-pause"> </a>
                                    <ol class="indicator"> </ol>
                                </div>-->
                                <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
                                <!--<script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                                    <tr class="template-upload fade">
                                        <td>
                                            <span class="preview"></span>
                                        </td>
                                        <td>
                                            <p class="name">{%=file.name%}</p>
                                            <strong class="error text-danger label label-danger"></strong>
                                        </td>
                                        <td>
                                            <p class="size">Processing...</p>
                                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                            </div>
                                        </td>
                                        <td> {% if (!i && !o.options.autoUpload) { %}
                                            <button class="btn blue start" disabled>
                                                <i class="fa fa-upload"></i>
                                                <span>Start</span>
                                            </button> {% } %} {% if (!i) { %}
                                            <button class="btn red cancel">
                                                <i class="fa fa-ban"></i>
                                                <span>Cancel</span>
                                            </button> {% } %} </td>
                                    </tr> {% } %} </script>-->
                                <!-- The template to display files available for download -->
                                <!--<script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                                    <tr class="template-download fade">
                                        <td>
                                            <span class="preview"> {% if (file.thumbnailUrl) { %}
                                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                                                    <img src="{%=file.thumbnailUrl%}">
                                                </a> {% } %} </span>
                                        </td>
                                        <td>
                                            <p class="name"> {% if (file.url) { %}
                                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                                                <span>{%=file.name%}</span> {% } %} </p> {% if (file.error) { %}
                                            <div>
                                                <span class="label label-danger">Error</span> {%=file.error%}</div> {% } %} </td>
                                        <td>
                                            <span class="size">{%=o.formatFileSize(file.size)%}</span>
                                        </td>
                                        <td> {% if (file.deleteUrl) { %}
                                            <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'
                                                {% } %}>
                                                <i class="fa fa-trash-o"></i>
                                                <span>Delete</span>
                                            </button>
                                            <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                                            <button class="btn yellow cancel btn-sm">
                                                <i class="fa fa-ban"></i>
                                                <span>Cancel</span>
                                            </button> {% } %} </td>
                                    </tr> {% } %} </script>
                                                        </div>
                                                        <div class="tab-pane" id="tab_15_2">
                                                            <p> Howdy, I'm in Section 2. </p>
                                                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                                                                esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation. </p>
                                                            <p>
                                                                <a class="btn green" href="ui_tabs_accordions_navs.html#tab_15_2" target="_blank"> Activate this tab via URL </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                            <!-- BEGIN PAGE BASE CONTENT -->
                                
                                <!-- END PAGE BASE CONTENT -->
                                        </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                      </div>

                    @empty

                    @endforelse
@endsection

@section('page-scripts')
 <script src="../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
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
        <script src="../assets/pages/scripts/form-fileupload.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js" type="text/javascript"></script>
        <script type="text/javascript">
          var form = document.getElementById('upload');
          var request = new XMLHttpRequest();

          form.addEventListener('submit', function(e){
            document.getElementById('message').innerHTML = "Uploading .. Please Wait"; 
            
            e.preventDefault();
            var formdata = new FormData(form);

            request.open('post', '/attachment-incoming/{{ $incoming->uuid }}');
            request.addEventListener("load", transferComplete);
            request.send(formdata);

          });

          function transferComplete(data) {
            response = JSON.parse(data.currentTarget.response);
            if(response.success){
              document.getElementById('message').innerHTML = "Berkas Lampiran Berhasil Diunggah";
              $('#list').load('/attachment-outgoing-list/{{ $outgoing->uuid }}');
            }
          }
        </script>
        
@endsection