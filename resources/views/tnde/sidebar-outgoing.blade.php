<div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <?php
                                    $detail = '';
                                    $attribute = '';
                                    $attachment = '';
                                     $routes = $_SERVER['REQUEST_URI'];
                        
                                     $explode_routes = explode("/",$routes);
                                     $routes = $explode_routes[1];

                                     if($routes == "add-outgoing" || $routes == "edit-outgoing") {
                                        $detail = '  class="active"';
                                     } elseif($routes == "attribute-outgoing") {
                                        $attribute = ' class="active"';
                                     } elseif($routes == "attachment-outgoing") {
                                        $attachment = ' class="active"';
                                     }else {

                                     }
                                    ?>
                                    <ul class="nav navbar-nav margin-bottom-35 tabs">
                                        <li<?php echo $detail; ?> data-tab="tab-1">
                                            <a href="#">
                                                <i class="icon-envelope-letter"></i> Detail Surat </a>
                                        </li>
                                        <?php 
                                        if(isset($outgoing->uuid)) {
                                        ?>
                                        <li<?php echo $attribute; ?> data-tab="tab-2">
                                            <a href="/attribute-outgoing/{{ $outgoing->uuid }}">
                                                <i class="icon-tag "></i> Atribut Surat </a>
                                        </li>
                                        <li data-tab="tab-3">
                                            <a href="/receiver-outgoing/{{ $outgoing->uuid }}">
                                                <i class="icon-user"></i> Penerima </a>
                                        </li>
                                        <li<?php echo $attachment; ?> data-tab="tab-5">
                                            <a href="/attachment-outgoing/{{ $outgoing->uuid }}">
                                                <i class="fa fa-paperclip"></i> Lampiran </a>
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