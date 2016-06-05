@extends('tnde.master')
@section('title', 'Tinjau Berkas Lampiran' )

@section('pagestyle')
        <link href="../assets/pages/css/document-viewer-style.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Tinjau Berkas Lampiran</a>
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
                                                                <span class="caption-subject font-blue-madison bold uppercase">Berkas Lampiran</span>
                                                                                                                            </div>
                                                            <!--<div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    
                                                                  
                                                                    <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> Tambah Penerima </a>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                        <div class="portlet-body">
                                                            <a href="../tnde/{{ $attachment->incoming_uuid }}/{{ $attachment->name }}"><button class="btn blue">Unduh Berkas</button></a><br />
                                                            <a class="media" href="../tnde/{{ $attachment->incoming_uuid }}/{{ $attachment->name }}">Unduh Berkas</a>
                                                            <!--<div id="container"></div>-->
                                                        </div>
                                                    </div>
                                                    <!-- END PORTLET -->
                                                </div>
                                            </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>

@endsection

@section('page-scripts')

        <script src="../assets/pages/scripts/jquery.media.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/jquery.metadata.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('a.media').media({width:800, height:800});
            });
        </script>
        <script src="../assets/pages/scripts/yepnope.1.5.3-min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/ttw-document-viewer.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {




                var documentList =  [
                    {
                        "path": "../tnde/{{ $attachment->incoming_uuid }}/{{ $attachment->name }}"
                    },
                    {
                        "path": "sample-files/sintel_trailer-720p.mp4"
                    },
                    {
                        "path": "sample-files/Finding_the_Balance.mp3"
                    },
                    {
                        "path": "sample-files/1.jpg"
                    },
                    {
                        "path": "sample-files/two-cities.txt"
                    },
                    {
                        "path": "sample-files/zippy.zip"
                    }
                ];



                var viewer = new DocumentViewer({
                    $anchor: $('#container'),
                    width:600
                });

                viewer.load('../tnde/{{ $attachment->incoming_uuid }}/{{ $attachment->name }}');

            });

        </script>
@endsection