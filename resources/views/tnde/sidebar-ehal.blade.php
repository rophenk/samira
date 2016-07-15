<div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <?php
                                    $detail = '';
                                    $attribute = '';
                                    $attachment_route = '';
                                    $receiver = '';

                                    if(isset($incoming->uuid)) {
                                        $incoming_uuid = $incoming->uuid;
                                    } else {
                                        $incoming_uuid = '';
                                    }

                                    if(isset($attachment->uuid)) {
                                        $attachment_uuid = $attachment->uuid;
                                    } else {
                                        $attachment_uuid = '';
                                    }

                                     $routes = $_SERVER['REQUEST_URI'];
                        
                                     $explode_routes = explode("/",$routes);
                                     $routes = $explode_routes[1];

                                     if($routes == "add-incoming" || $routes == "edit-incoming") {
                                        $detail = '  class="active"';
                                     } elseif($routes == "attribute-incoming") {
                                        $attribute = ' class="active"';
                                     } elseif($routes == "attachment-incoming" || $routes == "attachment-show-incoming") {
                                        $attachment_route = ' class="active"';
                                     } elseif($routes == "receiver-incoming") {
                                        $receiver = ' class="active"';
                                     } else {

                                     }
                                    ?>
                                    <ul class="nav navbar-nav margin-bottom-35 tabs">
                                        <?php 
                                        if(!empty($incoming_uuid) || !empty($attachment_uuid) ) {                
                                        ?>
                                        <li<?php echo $detail; ?> data-tab="tab-1">
                                            <a href="/edit-incoming/{{ $incoming->uuid }}">
                                                <i class="icon-envelope-letter"></i> Detail Surat </a>
                                        </li>
                                        
                                        <li<?php echo $attribute; ?> data-tab="tab-2">
                                            <a href="/attribute-incoming/{{ $incoming->uuid }}">
                                                <i class="icon-tag "></i> Atribut Surat </a>
                                        </li>
                                        <li<?php echo $attachment_route; ?> data-tab="tab-5">
                                            <a href="/attachment-incoming/{{ $incoming->uuid }}">
                                                <i class="fa fa-paperclip"></i> Lampiran </a>
                                        </li>
                                        <li<?php echo $receiver; ?>  data-tab="tab-3">
                                            <a href="/receiver-incoming/{{ $incoming->uuid }}">
                                                <i class="icon-user"></i> Penerima </a>
                                        </li>
                                        <?php 
                                        } else {
                                        ?>
                                        <li<?php echo $detail; ?> data-tab="tab-1">
                                            <a href="/add-workmeeting">
                                                <i class="icon-envelope-letter"></i> Detail Kegiatan </a>
                                        </li>
                                        <li data-tab="tab-5">
                                            <a href="/attachment-workmeeting/1">
                                                <i class="fa fa-paperclip"></i> Berkas Kompilasi </a>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                    <!--<h3>Quick Actions</h3>
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
                                    </ul>-->
                                </nav>
                            </div>