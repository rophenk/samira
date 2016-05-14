@extends('tnde.master')
@section('title', 'Attribute Surat Masuk' )

@section('pagestyle')

@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Attribute Surat Masuk</a>
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
                                                    <i class="icon-settings font-green-haze"></i>
                                                    <span class="caption-subject bold uppercase"> Attribute Surat</span>
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
                                            <div class="portlet-body form">
                                              <?php
                                              $sbm = '';
                                              $nd = '';
                                              $im = '';
                                              $st = '';
                                              $bbs = '';
                                              $rhs = '';
                                              $bsa = '';
                                              $klt = '';

                                              $dpt = '';
                                              $fax = '';
                                              $lsg = '';
                                              $pkt = '';
                                              $pos = '';

                                              $rk1 = '';
                                              $rk2 = '';
                                              $rk3 = '';
                                              $rk4 = '';
                                              $rk5 = '';

                                              if($incoming->letter_type == "Surat Biasa Masuk") {$sbm = ' selected="yes"';}
                                              elseif($incoming->letter_type == "Nota Dinas") {$nd = ' selected="yes"';}
                                              elseif($incoming->letter_type == "Internal Memo") {$im = ' selected="yes"';}
                                              elseif($incoming->letter_type == "Surat Telegram") {$st = ' selected="yes"';}

                                              if($incoming->letter_classification == "Bebas") {$bbs = ' selected="yes"';}
                                              elseif($incoming->letter_classification == "Rahasia") {$rhs = ' selected="yes"';}

                                              if($incoming->letter_character == "Biasa") {$bsa = ' selected="yes"';}
                                              elseif($incoming->letter_character == "Kilat") {$klt = ' selected="yes"';}

                                              if($incoming->letter_expedition == "Departemen") {$dpt = ' selected="yes"';}
                                              elseif($incoming->letter_expedition == "Faximile") {$fax = ' selected="yes"';}
                                              elseif($incoming->letter_expedition == "Langsung") {$lsg = ' selected="yes"';}
                                              elseif($incoming->letter_expedition == "Paket") {$pkt = ' selected="yes"';}
                                              elseif($incoming->letter_expedition == "Pos") {$pos = ' selected="yes"';}

                                              if($incoming->letter_storage == "Rak 01") {$rk1 = ' selected="yes"';}
                                              elseif($incoming->letter_storage == "Rak 02") {$rk2 = ' selected="yes"';}
                                              elseif($incoming->letter_storage == "Rak 03") {$rk3 = ' selected="yes"';}
                                              elseif($incoming->letter_storage == "Rak 04") {$rk4 = ' selected="yes"';}
                                              elseif($incoming->letter_storage == "Rak 05") {$rk5 = ' selected="yes"';}
                                              
                                              ?>
                                                <form role="form" class="form-horizontal" action="/attribute-incoming" method="post">
                                                    <div class="form-body">
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Jenis Surat</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control" id="form_control_1" name="letter_type">
                                                                    <option value=""></option>
                                                                    <option value="Surat Biasa Masuk"<?php echo $sbm; ?>>Surat Biasa Masuk</option>
                                                                    <option value="Nota Dinas"<?php echo $nd; ?>>Nota Dinas</option>
                                                                    <option value="Internal Memo"<?php echo $im; ?>>Internal Memo</option>
                                                                    <option value="Surat Telegram"<?php echo $st; ?>>Surat Telegram</option>
                                                                </select>
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Klasifikasi Surat</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control" id="form_control_1" name="letter_classification">
                                                                    <option value=""></option>
                                                                    <option value="Bebas"<?php echo $bbs; ?>>Bebas</option>
                                                                    <option value="Rahasia"<?php echo $rhs; ?>>Rahasia</option>
                                                                </select>
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Sifat Surat</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control" id="form_control_1" name="letter_character">
                                                                    <option value=""></option>
                                                                    <option value="Biasa"<?php echo $bsa; ?>>Biasa</option>
                                                                    <option value="Kilat"<?php echo $klt; ?>>Kilat</option>
                                                                </select>
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Ekspedisi Surat</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control" id="form_control_1" name="letter_expedition">
                                                                    <option value=""></option>
                                                                    <option value="Departemen"<?php echo $dpt; ?>>Departemen</option>
                                                                    <option value="Faximile"<?php echo $fax; ?>>Faximile</option>
                                                                    <option value="Langsung"<?php echo $lsg; ?>>Langsung</option>
                                                                    <option value="Paket"<?php echo $pkt; ?>>Paket</option>
                                                                    <option value="Pos"<?php echo $pos; ?>>Pos</option>
                                                                </select>
                                                                <div class="form-control-focus"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-2 control-label" for="form_control_1">Penyimpanan Surat</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control" id="form_control_1" name="letter_storage">
                                                                    <option value=""></option>
                                                                    <option value="Rak 01"<?php echo $rk1; ?>>Rak 01</option>
                                                                    <option value="Rak 02"<?php echo $rk2; ?>>Rak 02</option>
                                                                    <option value="Rak 03"<?php echo $rk3; ?>>Rak 03</option>
                                                                    <option value="Rak 04"<?php echo $rk4; ?>>Rak 04</option>
                                                                    <option value="Rak 05"<?php echo $rk5; ?>>Rak 05</option>
                                                                </select>
                                                                <div class="form-control-focus"> </div>
                                                            </div>
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
                                                </form>
                                            </div>
                                        </div>
                                        </div>

                                        <!--<div id="tab-2" class="tab-content">
                                          lalala
                                        </div>-->
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

@endsection