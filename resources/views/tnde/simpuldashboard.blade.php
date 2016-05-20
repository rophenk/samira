@extends('tnde.mastersimpul')
@section('title', 'Dashboard' )

@section('pagestyle')
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="/home" class="active">Dashboard</a>
                        </li>
@endsection

@section('content')

                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7864">0</span>
                                            <small class="font-green-sharp">Juta</small>
                                        </h3>
                                        <small>TOTAL SERAPAN</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 24%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">24% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 24% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349">0</span>
                                            <small class="font-red-haze">Juta</small>
                                        </h3>
                                        <small>SERAPAN TERTINGGI</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 62%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">62% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 62% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"></span>
                                        </h3>
                                        <small>PROGRAM KEGIATAN</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> grow </div>
                                        <div class="status-number"> 45% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276"></span>
                                        </h3>
                                        <small>PENGGUNA ANGGARAN</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 57% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6 col-sm-6">
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <i class="icon-cursor font-dark hide"></i>
                                          <span class="caption-subject font-dark bold uppercase">Anggaran & Fisik</span>
                                      </div>
                                      <div class="actions">
                                          <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                                              <i class="fa fa-repeat"></i> Reload </a>
                                      </div>
                                  </div>
                                  <div class="portlet-body">
                                      <div class="row">
                                        <h4 align="center">Anggaran</h4>
                                          <div class="col-md-4">
                                              <div class="easy-pie-chart">
                                                  <div class="number transactions" data-percent="55">
                                                      <span>+55</span>% </div>
                                                  <a class="title" href="javascript:;"> Kondisi s/d Periode Lalu
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="margin-bottom-10 visible-sm"> </div>
                                          <div class="col-md-4">
                                              <div class="easy-pie-chart">
                                                  <div class="number visits" data-percent="70">
                                                      <span>+70</span>% </div>
                                                  <a class="title" href="javascript:;"> Kondisi s/d Periode Saat Ini
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="margin-bottom-10 visible-sm"> </div>
                                          <div class="col-md-4">
                                              <div class="easy-pie-chart">
                                                  <div class="number bounce" data-percent="90">
                                                      <span>90</span>% </div>
                                                  <a class="title" href="javascript:;"> Target Yang Akan Datang
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <h4 align="center">Fisik</h4>
                                          <div class="col-md-4">
                                              <div class="easy-pie-chart">
                                                  <div class="number transactions" data-percent="23">
                                                      <span>+23</span>% </div>
                                                  <a class="title" href="javascript:;"> Kondisi s/d Periode Lalu
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="margin-bottom-10 visible-sm"> </div>
                                          <div class="col-md-4">
                                              <div class="easy-pie-chart">
                                                  <div class="number visits" data-percent="42">
                                                      <span>+42</span>% </div>
                                                  <a class="title" href="javascript:;"> Kondisi s/d Periode Saat Ini
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="margin-bottom-10 visible-sm"> </div>
                                          <div class="col-md-4">
                                              <div class="easy-pie-chart">
                                                  <div class="number bounce" data-percent="50">
                                                      <span>50</span>% </div>
                                                  <a class="title" href="javascript:;"> Target Yang Akan Datang
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <!-- BEGIN PORTLET-->
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <i class="icon-share font-red-sunglo hide"></i>
                                          <span class="caption-subject font-dark bold uppercase">Kegiatan Utama</span>
                                          <span class="caption-helper">status bulanan...</span>
                                      </div>
                                      <div class="actions">
                                          <div class="btn-group">
                                              <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range
                                                  <span class="fa fa-angle-down"> </span>
                                              </a>
                                              <ul class="dropdown-menu pull-right">
                                                  <li>
                                                      <a href="javascript:;"> Q1 2014
                                                          <span class="label label-sm label-default"> past </span>
                                                      </a>
                                                  </li>
                                                  <li>
                                                      <a href="javascript:;"> Q2 2014
                                                          <span class="label label-sm label-default"> past </span>
                                                      </a>
                                                  </li>
                                                  <li class="active">
                                                      <a href="javascript:;"> Q3 2014
                                                          <span class="label label-sm label-success"> current </span>
                                                      </a>
                                                  </li>
                                                  <li>
                                                      <a href="javascript:;"> Q4 2014
                                                          <span class="label label-sm label-warning"> upcoming </span>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="portlet-body">
                                      <div id="site_activities_loading">
                                          <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                                      <div id="site_activities_content" class="display-none">
                                          <div id="site_activities" style="height: 228px;"> </div>
                                      </div>
                                      <div style="margin: 20px 0 10px 30px">
                                          <div class="row">
                                              <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                  <span class="label label-sm label-success"> Pagu: </span>
                                                  <h3>13,234 Juta</h3>
                                              </div>
                                              <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                  <span class="label label-sm label-info"> Realisasi: </span>
                                                  <h3>4,923 Juta</h3>
                                              </div>
                                              <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                  <span class="label label-sm label-danger"> Sisa: </span>
                                                  <h3>8,311 Juta</h3>
                                              </div>
                                              <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                  <span class="label label-sm label-warning"> Program: </span>
                                                  <h3>243</h3>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- END PORTLET-->
                          </div>
                          

                      </div>

                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <i class="icon-equalizer font-dark hide"></i>
                                          <span class="caption-subject font-dark bold uppercase">Rekap Serapan</span>
                                          <span class="caption-helper">status bulanan...</span>
                                      </div>
                                      <div class="tools">
                                          <a href="" class="collapse"> </a>
                                          <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                          <a href="" class="reload"> </a>
                                          <a href="" class="remove"> </a>
                                      </div>
                                  </div>
                                  <div class="portlet-body">
                                      <div class="row">
                                        <h4 align="center">Anggaran</h4>
                                          <div class="col-md-4">
                                              <div class="sparkline-chart">
                                                  <div class="number" id="sparkline_bar5"></div>
                                                  <a class="title" href="javascript:;"> Realisasi
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="margin-bottom-10 visible-sm"> </div>
                                          <div class="col-md-4">
                                              <div class="sparkline-chart">
                                                  <div class="number" id="sparkline_bar6"></div>
                                                  <a class="title" href="javascript:;"> Sisa
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="margin-bottom-10 visible-sm"> </div>
                                          <div class="col-md-4">
                                              <div class="sparkline-chart">
                                                  <div class="number" id="sparkline_line"></div>
                                                  <a class="title" href="javascript:;"> Pertumbuhan
                                                      <i class="icon-arrow-right"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>

@endsection

@section('page-scripts')

        <script src="../assets/pages/scripts/dashboard.js" type="text/javascript"></script>
@endsection