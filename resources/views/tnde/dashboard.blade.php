@extends('tnde.master')
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
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                <div class="visual">
                                    <i class="glyphicon glyphicon-import"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ $totalIncoming }}">0</span>
                                    </div>
                                    <div class="desc"> Total Surat Masuk </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                <div class="visual">
                                    <i class="glyphicon glyphicon-export"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ $totalOutgoing }}">0</span></div>
                                    <div class="desc"> Total Surat Keluar</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                <div class="visual">
                                    <i class="glyphicon glyphicon-share-alt"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ $totalDisposition }}">0</span>
                                    </div>
                                    <div class="desc"> Total Disposisi</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                <div class="visual">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{ $totalUsers }}">0</span></div>
                                    <div class="desc"> Total Pengguna </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bar-chart font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Surat Masuk</span>
                                        <span class="caption-helper">Data Bulanan</span>
                                    </div>
                                    <!--<div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn red btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">New</label>
                                            <label class="btn red btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="portlet-body">
                                    <div id="site_statistics_loading">
                                        <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                                    <div id="site_statistics_content" class="display-none">
                                        <div id="site_statistics" class="chart" style="height: 228px;"> </div>
                                    </div>
                                    <div style="margin: 20px 0 10px 30px">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-success"> Kementan </span>
                                                <h3>{{ $countIncomingInternal }}</h3>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-info"> Eksternal </span>
                                                <h3>{{ $countIncomingExternal }}</h3>
                                            </div>
                                        </div>
                                        <!--<div class="row">
                                        Data Surat Keluar
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Surat Keluar</span>
                                        <span class="caption-helper">Data Bulanan</span>
                                    </div>
                                    <!--<div class="actions">
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
                                    </div>-->
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
                                                <span class="label label-sm label-success"> Kementan </span>
                                                <h3>{{ $countOutgoingInternal }}</h3>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-info"> Eksternal </span>
                                                <h3>{{ $countOutgoingInternal }}</h3>
                                            </div>
                                            <!--<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-danger"> Shipment: </span>
                                                <h3>$1,134</h3>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-warning"> Orders: </span>
                                                <h3>235090</h3>
                                            </div>-->
                                        </div>
                                        <!--<div class="row">
                                        Data Surat Keluar
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Surat Masuk Terbaru</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#portlet_comments_1" data-toggle="tab"> Internal </a>
                                        </li>
                                        <li>
                                            <a href="#portlet_comments_2" data-toggle="tab"> External </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                            @forelse ($incomingInternal as $incomingInternal)
                                            	<div class="mt-comment">
                                                    <!--<div class="mt-comment-img">
                                                        <img src="../assets/pages/media/users/avatar1.jpg" /> </div>-->
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{ $incomingInternal->sender }}</span>
                                                            <span class="mt-comment-date">{{ $incomingInternal->letter_date }}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> {{ $incomingInternal->subject }} </div>
                                                        <div class="mt-comment-details">
                                                            <span class="mt-comment-status mt-comment-status-pending">Ditujukan : {{ $incomingInternal->receiver }}</span>
                                                            <ul class="mt-comment-actions">
                                                                <li>
                                                                    <a href="/edit-incoming/{{ $incomingInternal->uuid }} ">DETAIL</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                        <div class="tab-pane" id="portlet_comments_2">
                                            <!-- BEGIN: Comments -->
                                            	<div class="mt-comments">
                                                @forelse ($incomingExternal as $incomingExternal)
                                                <div class="mt-comment">
                                                    <!--<div class="mt-comment-img">
                                                        <img src="../assets/pages/media/users/avatar1.jpg" /> </div>-->
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{ $incomingExternal->sender }}</span>
                                                            <span class="mt-comment-date">{{ $incomingExternal->letter_date }}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> {{ $incomingExternal->subject }} </div>
                                                        <div class="mt-comment-details">
                                                            <span class="mt-comment-status mt-comment-status-pending">Ditujukan : {{ $incomingExternal->receiver }}</span>
                                                            <ul class="mt-comment-actions">
                                                                <li>
                                                                    <a href="/edit-incoming/{{ $incomingExternal->uuid }} ">DETAIL</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Surat Keluar Terbaru</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#portlet_comments_3" data-toggle="tab"> Internal </a>
                                        </li>
                                        <li>
                                            <a href="#portlet_comments_4" data-toggle="tab"> External </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_3">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                            @forelse ($outgoingInternal as $outgoingInternal)
                                            	<div class="mt-comment">
                                                    <!--<div class="mt-comment-img">
                                                        <img src="../assets/pages/media/users/avatar1.jpg" /> </div>-->
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{ $outgoingInternal->sender }}</span>
                                                            <span class="mt-comment-date">{{ $outgoingInternal->letter_date }}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> {{ $outgoingInternal->subject }} </div>
                                                        <div class="mt-comment-details">
                                                            <span class="mt-comment-status mt-comment-status-pending">Ditujukan : {{ $outgoingInternal->receiver }}</span>
                                                            <ul class="mt-comment-actions">
                                                                <li>
                                                                    <a href="/edit-outgoing/{{ $outgoingInternal->uuid }} ">DETAIL</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                        <div class="tab-pane" id="portlet_comments_4">
                                            <!-- BEGIN: Comments -->
                                            	<div class="mt-comments">
                                                @forelse ($outgoingExternal as $outgoingExternal)
                                                <div class="mt-comment">
                                                    <!--<div class="mt-comment-img">
                                                        <img src="../assets/pages/media/users/avatar1.jpg" /> </div>-->
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{ $outgoingExternal->sender }}</span>
                                                            <span class="mt-comment-date">{{ $outgoingExternal->letter_date }}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> {{ $outgoingExternal->subject }} </div>
                                                        <div class="mt-comment-details">
                                                            <span class="mt-comment-status mt-comment-status-pending">Ditujukan : {{ $outgoingExternal->receiver }}</span>
                                                            <ul class="mt-comment-actions">
                                                                <li>
                                                                    <a href="/edit-outgoing/{{ $outgoingExternal->uuid }} ">DETAIL</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('page-scripts')

        <!--<script src="../assets/pages/scripts/dashboard.js" type="text/javascript"></script>-->
<script type="text/javascript">
var Dashboard = function() {
    return {
        initCharts: function() {
            if (!jQuery.plot) {
                return;
            }

            function showChartTooltip(x, y, xValue, yValue) {
                $('<div id="tooltip" class="chart-tooltip">' + yValue + '<\/div>').css({
                    position: 'absolute',
                    display: 'none',
                    top: y - 40,
                    left: x - 40,
                    border: '0px solid #ccc',
                    padding: '2px 6px',
                    'background-color': '#fff'
                }).appendTo("body").fadeIn(200);
            }

            var data = [];
            var totalPoints = 250;

            // random data generator for plot charts

            function getRandomData() {
                if (data.length > 0) data = data.slice(1);
                // do a random walk
                while (data.length < totalPoints) {
                    var prev = data.length > 0 ? data[data.length - 1] : 50;
                    var y = prev + Math.random() * 10 - 5;
                    if (y < 0) y = 0;
                    if (y > 100) y = 100;
                    data.push(y);
                }
                // zip the generated y values with the x values
                var res = [];
                for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
                return res;
            }

            function randValue() {
                return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
            }

            var visitors = [

        @foreach ($incomingGraphData[0] as $key => $val)
        ['{{$key}}', {{$val}}],
        @endforeach
    ];


            if ($('#site_statistics').size() != 0) {

                $('#site_statistics_loading').hide();
                $('#site_statistics_content').show();

                var plot_statistics = $.plot($("#site_statistics"), [{
                        data: visitors,
                        lines: {
                            fill: 0.6,
                            lineWidth: 0
                        },
                        color: ['#f89f9f']
                    }, {
                        data: visitors,
                        points: {
                            show: true,
                            fill: true,
                            radius: 5,
                            fillColor: "#f89f9f",
                            lineWidth: 3
                        },
                        color: '#fff',
                        shadowSize: 0
                    }],

                    {
                        xaxis: {
                            tickLength: 0,
                            tickDecimals: 0,
                            mode: "categories",
                            min: 0,
                            font: {
                                lineHeight: 14,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A"
                            }
                        },
                        yaxis: {
                            ticks: 5,
                            tickDecimals: 0,
                            tickColor: "#eee",
                            font: {
                                lineHeight: 14,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A"
                            }
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#eee",
                            borderColor: "#eee",
                            borderWidth: 1
                        }
                    });

                var previousPoint = null;
                $("#site_statistics").bind("plothover", function(event, pos, item) {
                    $("#x").text(pos.x.toFixed(2));
                    $("#y").text(pos.y.toFixed(2));
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;

                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                            showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + '');
                        }
                    } else {
                        $("#tooltip").remove();
                        previousPoint = null;
                    }
                });
            }


            if ($('#site_activities').size() != 0) {
                //site activities
                var previousPoint2 = null;
                $('#site_activities_loading').hide();
                $('#site_activities_content').show();

                var data1 = [
                    @foreach ($outgoingGraphData[0] as $key => $val)
        ['{{$key}}', {{$val}}],
        @endforeach
    ];


                var plot_statistics = $.plot($("#site_activities"),

                    [{
                        data: data1,
                        lines: {
                            fill: 0.2,
                            lineWidth: 0,
                        },
                        color: ['#BAD9F5']
                    }, {
                        data: data1,
                        points: {
                            show: true,
                            fill: true,
                            radius: 4,
                            fillColor: "#9ACAE6",
                            lineWidth: 2
                        },
                        color: '#9ACAE6',
                        shadowSize: 1
                    }, {
                        data: data1,
                        lines: {
                            show: true,
                            fill: false,
                            lineWidth: 3
                        },
                        color: '#9ACAE6',
                        shadowSize: 0
                    }],

                    {

                        xaxis: {
                            tickLength: 0,
                            tickDecimals: 0,
                            mode: "categories",
                            min: 0,
                            font: {
                                lineHeight: 18,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A"
                            }
                        },
                        yaxis: {
                            ticks: 5,
                            tickDecimals: 0,
                            tickColor: "#eee",
                            font: {
                                lineHeight: 14,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A"
                            }
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#eee",
                            borderColor: "#eee",
                            borderWidth: 1
                        }
                    });

                $("#site_activities").bind("plothover", function(event, pos, item) {
                    $("#x").text(pos.x.toFixed(2));
                    $("#y").text(pos.y.toFixed(2));
                    if (item) {
                        if (previousPoint2 != item.dataIndex) {
                            previousPoint2 = item.dataIndex;
                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);
                            showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + '');
                        }
                    }
                });

                $('#site_activities').bind("mouseleave", function() {
                    $("#tooltip").remove();
                });
            }
        },

        init: function() {

            this.initCharts();
        }

    };
}();
    if (App.isAngularJsApp() === false) {
        jQuery(document).ready(function() {
            Dashboard.init(); // init metronic core componets
        });
    }
</script>
@endsection