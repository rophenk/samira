
                                            <div class="inbox-sidebar">
                                                <a href="javascript:;" data-title="Compose" class="btn red compose-btn btn-block">
                                                    <i class="fa fa-edit"></i> Compose </a>
                                                <ul class="inbox-nav">
                                                    <li class="active">
                                                        <a href="/list-inbox" data-type="inbox" data-title="Inbox"> Inbox
                                                            <span class="badge badge-success">
                                                                <?php
                                                                $MyFuncs = new \App\Helpers\MyFunctions;
                                                                echo $MyFuncs->getUnreadInbox($user->id);
                                                                ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/list-disposisi" data-type="disposisi" data-title="Disposisi"> Disposisi </a>
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