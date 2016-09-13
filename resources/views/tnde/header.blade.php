<header class="page-header">
                <nav class="navbar mega-menu" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix navbar-fixed-top">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            <a id="index" class="page-logo" href="index.html">
                                <img src="/assets/layouts/layout5/img/logo.png" alt="Logo"> </a>
                            <!-- END LOGO -->
                            <!-- BEGIN SEARCH -->
                            <form class="search" action="extra_search.html" method="GET">
                                <input type="name" class="form-control" name="query" placeholder="Search...">
                                <a href="javascript:;" class="btn submit md-skip">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                            <!-- END SEARCH -->
                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class="topbar-actions">
                                <!-- BEGIN GROUP NOTIFICATION -->
                                <!--<div class="btn-group-notification btn-group" id="header_notification_bar">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-bell"></i>
                                        <span class="badge">7</span>
                                    </button>
                                    <ul class="dropdown-menu-v2">
                                        <li class="external">
                                            <h3>
                                                <span class="bold">12 pending</span> notifications</h3>
                                            <a href="#">view all</a>
                                        </li>
                                        <li>
                                            <ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-success md-skip">
                                                                <i class="fa fa-plus"></i>
                                                            </span> New user registered. </span>
                                                        <span class="time">just now</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Server #12 overloaded. </span>
                                                        <span class="time">3 mins</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning md-skip">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Server #2 not responding. </span>
                                                        <span class="time">10 mins</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span> Application error. </span>
                                                        <span class="time">14 hrs</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Database overloaded 68%. </span>
                                                        <span class="time">2 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> A user IP blocked. </span>
                                                        <span class="time">3 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-warning md-skip">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                        <span class="time">4 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span> System Error. </span>
                                                        <span class="time">5 days</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="details">
                                                            <span class="label label-sm label-icon label-danger md-skip">
                                                                <i class="fa fa-bolt"></i>
                                                            </span> Storage server failed. </span>
                                                        <span class="time">9 days</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>-->
                                <!-- END GROUP NOTIFICATION -->
                                <!-- BEGIN GROUP INFORMATION -->
                                <?php
                                if($user->role_id == 1 || $user->role_id == 2) {
                                ?>
                                <div class="btn-group-red btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <!--<li class="active">
                                            <a href="/add-incoming">Tambah Surat Masuk</a>
                                        </li>
                                        <li>
                                            <a href="#">New Comment</a>
                                        </li>
                                        <li>
                                            <a href="#">Share</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Feedbacks
                                                <span class="badge badge-danger">2</span>
                                            </a>
                                        </li>-->
                                    </ul>
                                </div>

                                <?php
                                }
                                ?>
                                <!-- END GROUP INFORMATION -->
                                <!-- BEGIN USER PROFILE -->
                                <div class="btn-group-img btn-group">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <span>Hi, {{ $user->name }}</span>
                                        <img src="{{ $user->avatar }}" alt=""> </button>
                                    <ul class="dropdown-menu-v2" role="menu">
                                        <li>
                                            <a href="/list-inbox">
                                                <i class="icon-envelope-open"></i> My Inbox
                                                <span class="badge badge-danger">
                                                 <?php
                                                 $myFuncs = new \App\Helpers\MyFunctions;
                                                 echo ($myFuncs->getUnreadInbox($user->id));
                                                 ?> 
                                                </span>
                                            </a>
                                        </li>
                                        <!--li>
                                            <a href="page_user_profile_1.html">
                                                <i class="icon-user"></i> My Profile
                                                <span class="badge badge-danger">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="app_calendar.html">
                                                <i class="icon-calendar"></i> My Calendar </a>
                                        </li>
                                        <li>
                                            <a href="app_todo_2.html">
                                                <i class="icon-rocket"></i> My Tasks
                                                <span class="badge badge-success"> 7 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="page_user_lock_1.html">
                                                <i class="icon-lock"></i> Lock Screen </a>
                                        </li>-->
                                        <li>
                                            <a href="/logout">
                                                <i class="icon-key"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END USER PROFILE -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                <!--<button type="button" class="quick-sidebar-toggler md-skip" data-toggle="collapse">
                                    <span class="sr-only">Toggle Quick Sidebar</span>
                                    <i class="icon-logout"></i>
                                </button>-->
                                <!-- END QUICK SIDEBAR TOGGLER -->
                            </div>
                            <!-- END TOPBAR ACTIONS -->
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        <?php 
                        $routes = $_SERVER['REQUEST_URI'];
                        
                        $explode_routes = explode("/",$routes);
                        $routes = $explode_routes[1];
                        $evicentertab = '';
                        $tndetab = '';
                        $ehaltab = '';
                        if($routes == "dashboard") {
                            $dashboard = ' active open selected';
                        } elseif($routes == "add-incoming" || $routes == "list-incoming" || $routes == "edit-incoming" || $routes == "attribute-incoming" || $routes == "attachment-incoming" || $routes == "attachment-show-incoming" || $routes == "list-outgoing" || $routes == "add-outgoing" || $routes == "edit-outgoing" || $routes == "attribute-outgoing" || $routes == "attachment-outgoing" || $routes == "attachment-show-outgoing" || $routes == "list-workunit" || $routes == "list-users" || $routes == "receiver-incoming" || $routes == "list-inbox" || $routes == "list-inbox-view" || $routes == "list-disposition" || $routes == "receiver-disposition" || $routes == "list-disposition-view" ) {
                            $tndetab = ' active open selected';
                        } elseif($routes == "events-list" || $routes == "events-timeline") {
                            $evicentertab = ' active open selected';
                        } elseif($routes == "speakers-list" || $routes == "speaker-view" || $routes == "workmeeting-list" || $routes == "workmeeting-view" || $routes == "workmeeting-questions" || $routes == "add-workmeeting" || $routes == "attachment-workmeeting") {
                            $ehaltab = ' active open selected';
                        }else {

                        }
                        
                        ?>
                        <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown dropdown-fw<?php echo $dashboard; ?>">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-home"></i> Dashboard </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li>
                                            <a href="/dashboard">
                                                <i class="icon-envelope-open"></i> TANDEM</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <i class="icon-bulb"></i> EVICENTER</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <i class="icon-size-fullscreen"></i> e-HAL</a>
                                        </li>
                                        <!--<li>
                                            <a href="dashboard_3.html">
                                                <i class="icon-graph"></i> Dashboard 3 </a>
                                        </li>-->
                                    </ul>
                                </li>
                                <?php
                                if (strpos($user->modules,'tnde') !== false) {
                                ?>
                                <li class="dropdown dropdown-fw<?php echo $tndetab; ?>">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-envelope-open"></i> TANDEM </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="fa fa-download"></i> Surat Masuk </a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                if($user->role_id == 1 || $user->role_id == 2) {
                                                ?>
                                                <li>
                                                    <a href="/list-incoming"> Data Surat Masuk </a>
                                                </li>
                                                
                                                <li>
                                                    <a href="/add-incoming"> Tambah Surat Masuk </a>
                                                </li>
                                                
                                                <li class="divider"></li>
                                                <?php
                                                }
                                                ?>
                                                <li>
                                                    <a href="/list-inbox"> Kotak Surat (Inbox) </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="fa fa-upload"></i> Surat Keluar </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/list-outgoing"> Data Surat Keluar </a>
                                                </li>
                                                <li>
                                                    <a href="/add-outgoing"> Tambah Surat Keluar </a>
                                                </li>
                                                <li class="divider"></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="fa fa-mail-forward"></i> Disposisi </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/list-disposition/{{ $user->id }}"> Data Disposisi </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="?p=">
                                                <i class="icon-settings"></i> Setting </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/list-workunit"> Satuan Kerja </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Template </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="icon-users"></i> Pengguna </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/list-users"> Data Pengguna </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                ?>
                                <?php
                                if (strpos($user->modules,'evicenter') !== false) {
                                ?>
                                <li class="dropdown dropdown-fw<?php echo $evicentertab; ?>">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-camera"></i> EVICENTER </a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="fa fa-calendar"></i> Kegiatan </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/events-timeline"> Timeline Kegiatan </a>
                                                </li>
                                                <li>
                                                    <a href="/events-list"> Data Kegiatan </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Tambah Kegiatan </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                ?>

                                <?php
                                if (strpos($user->modules,'ehal') !== false) {
                                ?>
                                <li class="dropdown dropdown-fw<?php echo $ehaltab; ?>">
                                    <a href="javascript:;" class="text-uppercase">
                                        <i class="icon-size-fullscreen"></i> e-HAL</a>
                                    <ul class="dropdown-menu dropdown-menu-fw">
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Data Raker </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/workmeeting-list"> Tabel Raker </a>
                                                </li>
                                                <li>
                                                    <a href="/workmeeting-questions"> Pertanyaan Raker </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown more-dropdown-sub">
                                            <a href="javascript:;">
                                                <i class="fa fa-users"></i> Data Anggota </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/speakers-list"> Tabel Anggota </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                }
                                ?>
                                
                            </ul>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>