@extends('tnde.master')
@section('title', 'Pertanyaan RAKER')

@section('pagestyle')
        
        <link href="{{URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/global/plugins/jquery-multi-select/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/apps/css/todo.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Pertanyaan RAKER</a>
                        </li>
@endsection

@section('content')
<div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            <!--<div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <!--<ul class="nav navbar-nav margin-bottom-35">
                                        <li class="active">
                                            <a href="index.html">
                                                <i class="icon-home"></i> Home </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-note "></i> Reports </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> User Activity </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-basket "></i> Marketplace </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Templates </a>
                                        </li>
                                    </ul>
                                    <h3>Quick Actions</h3>
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="#">
                                                <i class="icon-envelope "></i> Inbox
                                                <label class="label label-danger">New</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-paper-clip "></i> Task </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-star"></i> Projects </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-pin"></i> Events
                                                <span class="badge badge-success">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>-->
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <!--<div class="todo-main-header">
                                    <h3>ToDo App</h3>
                                    <ul class="todo-breadcrumb">
                                        <li>
                                            <a href="javascrip:;">Home</a>
                                        </li>
                                        <li>
                                            <a href="javascrip:;">Extra</a>
                                        </li>
                                        <li>
                                            <a class="todo-active" href="javascrip:;">Todo</a>
                                        </li>
                                    </ul>
                                </div>-->
                                <div class="todo-container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <ul class="todo-projects-container">
                                                <li class="todo-padding-b-0">
                                                    <div class="todo-head">
                                                        <button class="btn btn-square btn-sm green todo-bold">Tambah Kegiatan</button>
                                                        <h3>Kegiatan</h3>
                                                        <!--<p>4 Waiting Attention</p>-->
                                                    </div>
                                                </li>
                                                <div class="todo-projects-divider"></div>
                                                <li class="todo-projects-item todo-active">
                                                    <h3 class="todo-blue">Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI RKA-KL Dalam RUU APBNP 2016 Dan Persiapan Ramadhan Dan Idul Fitri</h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI RKA-KL Dalam RUU APBNP 2016 Dan Persiapan Ramadhan Dan Idul Fitri</p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline"><a href="http://tnde.local/ehal/kompilasi/160608%20APBNP2016%20DAN%20PERSIAPAN%20IDUL%20FITRI-2.pptx">160608 APBNP2016 DAN PERSIAPAN IDUL FITRI-2.pptx</a></p>
                                                        <p class="todo-inline todo-float-r">32 Members
                                                            <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017</h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017</p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline">17 Tasks Remaining</p>
                                                        <p class="todo-inline todo-float-r">16 Members
                                                            <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <div class="todo-projects-divider"></div>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komite II DPR RI Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri</h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komite II DPR RI Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri</p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline">5 Tasks Remaining</p>
                                                        <p class="todo-inline todo-float-r">9 Members
                                                            <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <div class="todo-projects-divider"></div>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H </h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H </p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline">27 Tasks Remaining</p>
                                                        <p class="todo-inline todo-float-r">54 Members
                                                            <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <div class="todo-projects-divider"></div>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H </h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H </p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline">11 Tasks Remaining</p>
                                                        <p class="todo-inline todo-float-r">9 Members
                                                            <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="todo-tasks-container">
                                                <div class="todo-head">
                                                    <button class="btn btn-square btn-sm red todo-bold" data-toggle="modal" href="#todo-task-modal">New Task</button>
                                                    <h3>
                                                        <span class="todo-grey">Task:</span> Williams Logistics CRM</h3>
                                                    <p class="todo-inline">22 Members
                                                        <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                                    </p>
                                                </div>
                                                <ul class="todo-tasks-content">
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Design for full featured ToDo Page with something</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Bob,
                                                            <span class="todo-red">TODAY</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Owl carousel pagination animation issue(clients logo, testimonials)</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Shane,
                                                            <span class="todo-red">TODAY</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Non fixed Home 2 header layout</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Sean,
                                                            <span class="todo-green">01 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Sample Images for Mega Menu Components Category</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Shane,
                                                            <span class="todo-green">03 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Browser & Device Compatibility</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Bob,
                                                            <span class="todo-green">07 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Sidebar Menu for Mobile</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Alice,
                                                            <span class="todo-green">08 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Sidebar Toggler optimization</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Luke,
                                                            <span class="todo-green">08 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Modals integration</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">John,
                                                            <span class="todo-green">10 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Modals form functionality</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Rudy,
                                                            <span class="todo-green">12 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Responsive Optimization</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Bob,
                                                            <span class="todo-green">15 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">Search and filter functionality testing</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Hiro,
                                                            <span class="todo-green">24 OCT</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <h4 class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal">User Acceptance Test Documentation</a>
                                                        </h4>
                                                        <p class="todo-inline todo-float-r">Kathy,
                                                            <span class="todo-green">28 OCT</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>
                                                <p class="todo-task-modal-title todo-inline">Due:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="10/01/2015" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Assign:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Luke</a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <h3 class="todo-task-modal-bg">Sample Images for Mega Menu Components Category</h3>
                                                <p class="todo-task-modal-bg"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                                    <br>
                                                    <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                                    <br>
                                                    <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                                <h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                            </div>
                                            <!-- BEGIN PORTLET-->
                                            <div class="portlet light bordered">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="icon-bubble font-hide hide"></i>
                                                        <span class="caption-subject font-hide bold uppercase">Chats</span>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="portlet-input input-inline">
                                                            <div class="input-icon right">
                                                                <i class="icon-magnifier"></i>
                                                                <input type="text" class="form-control input-circle" placeholder="search..."> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="portlet-body" id="chats">
                                                    <div class="scroller" style="height: 525px;" data-always-visible="1" data-rail-visible1="1">
                                                        <ul class="chats">
                                                            <li class="out">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar2.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Lisa Wong </a>
                                                                    <span class="datetime"> at 20:11 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="out">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar2.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Lisa Wong </a>
                                                                    <span class="datetime"> at 20:11 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="in">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar1.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                                                    <span class="datetime"> at 20:30 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="in">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar1.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                                                    <span class="datetime"> at 20:30 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="out">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar3.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Richard Doe </a>
                                                                    <span class="datetime"> at 20:33 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="in">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar3.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Richard Doe </a>
                                                                    <span class="datetime"> at 20:35 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="out">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar1.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                                                    <span class="datetime"> at 20:40 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="in">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar3.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Richard Doe </a>
                                                                    <span class="datetime"> at 20:40 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                                                </div>
                                                            </li>
                                                            <li class="out">
                                                                <img class="avatar" alt="" src="{{URL::asset('assets/layouts/layout/img/avatar1.jpg')}}" />
                                                                <div class="message">
                                                                    <span class="arrow"> </span>
                                                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                                                    <span class="datetime"> at 20:54 </span>
                                                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt
                                                                        ut laoreet. </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="chat-form">
                                                        <div class="input-cont">
                                                            <input class="form-control" type="text" placeholder="Type a message here..." /> </div>
                                                        <div class="btn-cont">
                                                            <span class="arrow"> </span>
                                                            <a href="" class="btn blue icn-only">
                                                                <i class="fa fa-check icon-white"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET-->
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-members-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Select a Member</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Selected Members</label>
                                                        <div class="col-md-8">
                                                            <select id="select2_sample2" class="form-control select2 select-height" multiple>
                                                                <optgroup label="Senior Developers">
                                                                    <option>Rudy</option>
                                                                    <option>Shane</option>
                                                                    <option>Sean</option>
                                                                </optgroup>
                                                                <optgroup label="Technical Team">
                                                                    <option>Kathy</option>
                                                                    <option>Luke</option>
                                                                    <option>John</option>
                                                                    <option>Darren</option>
                                                                </optgroup>
                                                                <optgroup label="Design Team">
                                                                    <option>Bob</option>
                                                                    <option>Carolina</option>
                                                                    <option>Randy</option>
                                                                    <option>Michael</option>
                                                                </optgroup>
                                                                <optgroup label="Testers">
                                                                    <option>Chris</option>
                                                                    <option>Louis</option>
                                                                    <option>Greg</option>
                                                                    <option>Ashe</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
@endsection

@section('page-scripts')
<script src="{{URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/apps/scripts/todo.min.js" type="text/javascript')}}"></script>
        <script src="{{URL::asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
@endsection