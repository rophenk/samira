                                            <?php
                                                $inbox          = '';
                                                $disposition    = '';
                                                $uuid           = '';
                                                $routes         = $_SERVER['REQUEST_URI'];
                                                $explode_routes = explode("/",$routes);
                                                $routes         = $explode_routes[1];
                                                if(!empty($explode_routes[2])) {
                                                    $uuid       = $explode_routes[2];
                                                } else {
                                                    $uuid       = $user->uuid;
                                                }
                                                
                                                if($routes == "list-inbox" || $routes == "list-inbox-view") {
                                                    $inbox = '  class="active"';
                                                 } elseif($routes == "receiver-disposition") {
                                                    $disposition = ' class="active"';
                                                 }  else {

                                                 }
                                            ?>
                                            <div class="inbox-sidebar">
                                                <a href="javascript:;" data-title="Compose" class="btn red compose-btn btn-block">
                                                    <i class="fa fa-edit"></i> Compose </a>
                                                <ul class="inbox-nav">
                                                    <li<?php echo $inbox; ?>>
                                                        <a href="/list-inbox" data-type="inbox" data-title="Inbox"> Inbox
                                                            <span class="badge badge-success">
                                                                <?php
                                                                $MyFuncs = new \App\Helpers\MyFunctions;
                                                                echo $MyFuncs->getUnreadInbox($user->id);
                                                                ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li<?php echo $disposition; ?>>
                                                        <a href="/list-disposition/{{ $user->id }}" data-type="disposisi" data-title="Disposisi"> Disposisi 
                                                            <span class="badge badge-success">
                                                                <?php
                                                                $MyFuncs = new \App\Helpers\MyFunctions;
                                                                echo $MyFuncs->getUnreadDisposition($user->id);
                                                                ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!--<li>
                                                        <a href="javascript:;" data-type="sent" data-title="Sent"> Sent </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-type="draft" data-title="Draft"> Draft
                                                            <span class="badge badge-danger">8</span>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="javascript:;" class="sbold uppercase" data-title="Trash"> Trash
                                                            <span class="badge badge-info">23</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-type="inbox" data-title="Promotions"> Promotions
                                                            <span class="badge badge-warning">2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-type="inbox" data-title="News"> News </a>
                                                    </li>-->
                                                </ul>
                                            </div>