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
                                                        <p class="todo-red todo-inline"><a target="_blank" href="http://tnde.local/ehal/kompilasi/160608%20APBNP2016%20DAN%20PERSIAPAN%20IDUL%20FITRI-2.pptx">160608 APBNP2016 DAN PERSIAPAN IDUL FITRI-2.pptx</a></p>
                                                        <p class="todo-inline todo-float-r">Kirim
                                                            <a class="todo-add-button" href="#todo-members-modal1" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017</h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017</p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline"><a target="_blank" href="http://tnde.local/ehal/kompilasi/160613 RANCANGAN APBN-P 2016 DAN RAPBN 2017-rev4.pptx">160613 RANCANGAN APBN-P 2016 DAN RAPBN 2017-rev4.pptx</a></p>
                                                        <p class="todo-inline todo-float-r">Kirim
                                                            <a class="todo-add-button" href="#todo-members-modal1" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <div class="todo-projects-divider"></div>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komite II DPR RI Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri</h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komite II DPR RI Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri</p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline"><a target="_blank" href="http://tnde.local/ehal/kompilasi/160621 RAKER DPD PERSIAPAN IDUL FITRI-REV3.pptx">160621 RAKER DPD PERSIAPAN IDUL FITRI-REV3.pptx</a></p>
                                                        <p class="todo-inline todo-float-r">Kirim
                                                            <a class="todo-add-button" href="#todo-members-modal1" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <div class="todo-projects-divider"></div>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H </h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H </p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline"><a target="_blank" href="http://tnde.local/ehal/kompilasi/160622 RAKER APBNP 2016 DAN PERSIAPAN HARI RAYA-rev3.pptx">160622 RAKER APBNP 2016 DAN PERSIAPAN HARI RAYA-rev3.pptx</a></p>
                                                        <p class="todo-inline todo-float-r">Kirim
                                                            <a class="todo-add-button" href="#todo-members-modal1" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <div class="todo-projects-divider"></div>
                                                <li class="todo-projects-item">
                                                    <h3>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H </h3>
                                                    <p>Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H </p>
                                                    <div class="todo-project-item-foot">
                                                        <p class="todo-red todo-inline"><a target="_blank" href="http://tnde.local/ehal/kompilasi/160627 EVALUASI KUNKER SPESIFIK-rev 2.ppt">160627 EVALUASI KUNKER SPESIFIK-rev 2.ppt</a></p>
                                                        <p class="todo-inline todo-float-r">Kirim
                                                            <a class="todo-add-button" href="#todo-members-modal1" data-toggle="modal">+</a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="todo-tasks-container">
                                                <div class="todo-head">
                                                    <!--<button class="btn btn-square btn-sm red todo-bold" data-toggle="modal" href="#todo-task-modal">Tambah Pertanyaan</button>-->
                                                    <h3>
                                                        Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI RKA-KL Dalam RUU APBNP 2016 Dan Persiapan Ramadhan Dan Idul Fitri</h3>
                                                    <!--<p class="todo-inline">22 Members
                                                        <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                                                    </p>-->
                                                </div>
                                                <ul class="todo-tasks-content">
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal1">Mengenai harga daging sapi, Presiden mengatakan harganya dibawah Rp. 80 ribu karena ada info di Singapura harga daging Rp. 50 ribu/kg yang ternyata setelah saya cek salah info, harganya $3,2 untuk 100 gram bukan 1 kilogram. Mohon agar Kementan lebih awas dengan pemberitaan yang ada media</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Sudin 
                                                            <span class="todo-red">(Anggota/F-PDIP)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal2">Mengenai harga bawang, cabai dan sayur harganya agak termahal di Kalimantan Tengah, apakah bisa 2-3 kabupaten dijadikan sentra produksi, jadi tidak usah impor dari pulau Jawa.</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Sudin 
                                                            <span class="todo-red">(Anggota/F-PDIP)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal3">Mengenai harga apel, sekarang Rp. 65 ribu infonya dan katanya sudah impor, mohon penjelasan</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Sudin 
                                                            <span class="todo-red">(Anggota/F-PDIP)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal4">Mengenai kelangkaan bahan pangan yang masih terjadi, padahal sudah diantisipasi dengan perubahan anggaran dan lain-lain, mohon penjelasan. </a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Dr. Hermanto, SE, MM 
                                                            <span class="todo-green">(Anggota/F-PKS)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal5">Mengenai operasi pasar, banyak harga-harga yang ada di pasar masih tinggi, apakah karena operasi kaum kapitalis lebih berhasil atau bagaimana, mohon penjelasan. 
</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Dr. Hermanto, SE, MM 
                                                            <span class="todo-green">(Anggota/F-PKS)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal6">Mengenai demand dan perilaku konsumen, mohon agar diperbaiki dan berkoordinasi  dengan MUI dan YLKI untuk memberikan pencerahan kepada masyarakat agar tidak berpikir bulan Ramadhan bulan ibadah bukan bulan konsumsi. 
</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Dr. Hermanto, SE, MM 
                                                            <span class="todo-green">(Anggota/F-PKS)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal7">Mengenai pemotongan anggaran, mohon agar tidak memangkas hal-hal yang menyangkut produksi. </a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Dr. Hermanto, SE, MM 
                                                            <span class="todo-green">(Anggota/F-PKS)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal8">Mengenai penekanan harga, saya mengapresiasi adanya Toko Tani Indonesia, jumlahnya banyak bagaimana menghandlenya. 
 </a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Dr. Hermanto, SE, MM 
                                                            <span class="todo-green">(Anggota/F-PKS)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal9">Mengenai embung, mohon agar saling berkoordinasi antar Kementan dengan KLH. 
</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Dr. Hermanto, SE, MM 
                                                            <span class="todo-green">(Anggota/F-PKS)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal10">Mengenai pengurangan anggaran di Kebumen, mengenai anggarannya justru dikurangi, padahal ini daerah yang termasuk miskin, mohon penjelasan.
</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Ir. KRT. H. Darori Wonodipuro, MM 
                                                            <span class="todo-green">(Anggota/F-Gerindra)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal11">Mengenai bansos dan subsidi, saya mendapat laporan bahwa program ini malah merugikan rakyat. 
</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Ir. KRT. H. Darori Wonodipuro, MM 
                                                            <span class="todo-green">(Anggota/F-Gerindra)</span>
                                                        </p>
                                                    </li>
                                                    <li class="todo-tasks-item">
                                                        <p class="todo-inline">
                                                            <a data-toggle="modal" href="#todo-task-modal12">Mengenai harga daging sapi lokal, saya dapat laporan kalau memotong sapi lokal malah merugi, mohon penjelasan. 
</a>
                                                        </p>
                                                        <p class="todo-inline todo-float-r">Ir. KRT. H. Darori Wonodipuro, MM 
                                                            <span class="todo-green">(Anggota/F-Gerindra)</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal1" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Sudin (Anggota/F-PDIP)</a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>a. Mengenai harga daging sapi, Presiden mengatakan harganya dibawah Rp. 80 ribu karena ada info di Singapura harga daging Rp. 50 ribu/kg yang ternyata setelah saya cek salah info, harganya $3,2 untuk 100 gram bukan 1 kilogram. Mohon agar Kementan lebih awas dengan pemberitaan yang ada media.</strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />
Kementerian Pertanian menyampaikan terimakasih atas keprihatinan anggota Dewan terkait pemberitaan harga daging sapi di media. Menindaklanjuti perkembangan pemberitaan di media tersebut, Menteri Pertanian telah membentuk Tim yang diketuai oleh Dr. Rahmat Pambudi, yang bertugas melakukan pemantauan harga daging di beberapa lokasi di Singapura dan Malaysia serta beberapa daerah penting lainnya  Tim ini bertugas memberikan informasi dan masukan yang berguna dalam menetapkan kebijakan stabilisasi harga khususnya harga daging di Indonesia.
 </p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal2" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Sudin (Anggota/F-PDIP)</a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>b. Mengenai harga bawang, cabai dan sayur harganya agak termahal di Kalimantan Tengah, apakah bisa 2-3 kabupaten dijadikan sentra produksi, jadi tidak usah impor dari pulau Jawa.</strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />
Direktorat Jenderal Hortikultura mengalokasikan anggaran pengembangan kawasan aneka cabai dan bawang merah di hampir semua Provinsi dan Kabupaten/Kota di Indonesia dalam rangka pemenuhan kebutuhan komoditas strategis aneka cabai dan bawang merah yang dibutuhkan masyarakat setiap harinya. Untuk Provinsi Kalimantan Tengah, pengembangan kawasan aneka cabai dan bawang merah telah dilakukan di beberapa Kabupaten/Kota sejak tahun 2015 sampai saat ini. Untuk tahun 2017, akan terjadi penambahan Kabupaten/Kota sebagai lokasi kegiatan pengembangan aneka cabai dan bawang merah, dengan rincian sebagai berikut :

 </p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal3" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Sudin (Anggota/F-PDIP)</a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>c. Mengenai harga apel, sekarang Rp. 65 ribu infonya dan katanya sudah impor, mohon penjelasan</strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />
                                                  <ul>
<li>Direktorat Jenderal Hortikultura sudah menerbitkan Rekomendasi Impor Produk Hortikultura termasuk diantaranya apel untuk  Semester I tahun 2016  (periode Januari – Juni). </li>
<li>Telah terbit Permentan Nomor 04/Permentan/PP.340/2/2015 tentang Pengawasan Keamanan Pangan Terhadap Pemasukan dan Pengeluaran Pangan Segar Asal Tumbuhan (PSAT), yang salah satu pasalnya menyebutkan bahwa pemasukan produk/barang impor harus memenuhi sertifikasi dari laboratorium yang terakreditasi di negara asal, tidak terkecuali untuk negara yang selama ini sudah banyak mengekspor produk hortikultura seperti China. </li>
<li>Pada periode Januari-Juli, produk dari China yang diperbolehkan masuk hanya untuk bawang putih.  China tidak bisa mengekspor Apel ke Indonesia pada periode ini karena belum ada kerjasama dengan Badan Karantina terkait uji Laboratorium PSAT. </li>
<li>Dengan demikian pasokan Apel Impor berkurang sehingga mengakibatkan harga apel mahal.</li>
</ul>


 </p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal4" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Dr. Hermanto, SE, MM (Anggota/F-PKS) </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>a.  Mengenai kelangkaan bahan pangan yang masih terjadi, padahal sudah diantisipasi dengan perubahan anggaran dan lain-lain, mohon penjelasan. </strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Peningkatan anggaran dinilai berhasil meningkatkan produksi pangan. Di sisi lain, bahan pangan dari sisi produksi memang ada periode surplus dan defisit. Oleh karena itu, manajemen stock juga harus dibenahi sehingga ketersediaan pangan dapat memenuhi kebutuhan pada periode defisit. Manajemen stok ini melibatkan banyak pihak, terutama di luar Kementerian Pertanian. Ke depan, koordinasi tentang manajemen stock harus lebih ditingkatkan dan dikelola lebih serius.</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal5" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Dr. Hermanto, SE, MM (Anggota/F-PKS) </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>b.  Mengenai operasi pasar, banyak harga-harga yang ada di pasar masih tinggi, apakah karena operasi kaum kapitalis lebih berhasil atau bagaimana, mohon penjelasan. 
</strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Permainan harga pangan kita rasakan memang ada.  Apakah hal ini akibat pelaku bisnis yang memanfaatkan situasi, untuk ini bukan kewenangan Kementerian Pertanian untuk memberikan penjelasan.</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal6" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Dr. Hermanto, SE, MM (Anggota/F-PKS) </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>c.  Mengenai demand dan perilaku konsumen, mohon agar diperbaiki dan berkoordinasi  dengan MUI dan YLKI untuk memberikan pencerahan kepada masyarakat agar tidak berpikir bulan Ramadhan bulan ibadah bukan bulan konsumsi. </strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Usulan yang sangat baik dan sangat positif. Namun demikian, Kementerian Pertanian melihat waktu ini sebagai kesempatan bagi petani untuk meningkatkan pendapatannya. Di sisi lain, distribusi yang adil dan proporsional tetap harus dijaga.</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal7" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Dr. Hermanto, SE, MM (Anggota/F-PKS) </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>d.  Mengenai pemotongan anggaran, mohon agar tidak memangkas hal-hal yang menyangkut produksi. </strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Kebijakan Kementerian Pertanian dalam melakukan penghematan/pemotongan sudah sejalan dengan hal tersebut. Penghematan/pemotongan anggaran diprioritaskan terhadap kegiatan yang tidak berdampak langsung kepada masyarakat dan produksi.  Penghematan/pemotongan anggaran difokuskan pada pos-pos belanja: (1) belanja modal non-infrastruktur, seperti gedung perkantoran dan pengadaan kendaraan dinas, (2) kegiatan yang belum terikat kontrak, (3) belanja barang bantuan pemerintah pada pemda/masyarakat yang dapat dihemat alokasinya, (4) sisa kontrak/hasil lelang dan hasil optimalisasi/sisa dana swakelola, (5) honorarium kegiatan, perjalanan dinas, paket meeting, rapat seminar, workshop, (6) kegiatan-kegiatan yang diperkirakan tidak dapat dilaksanakan sebagian atau seluruhnya, misalnya satker yang tidak sanggup melaksanakan kegiatan tugas pembantuan, (7) kegiatan-kegiatan yang tidak mendesak atau dapat ditunda pada tahun anggaran berikutnya, misalnya kegiatan cetak sawah yang belum memiliki SID dan persyaratan bangun gedung yang belum tersedia, dan (8) output cadangan/masih blokir yang menjadi catatan pada DIPA. 
</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal8" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Dr. Hermanto, SE, MM (Anggota/F-PKS) </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>e.  Mengenai penekanan harga, saya mengapresiasi adanya Toko Tani Indonesia, jumlahnya banyak bagaimana menghandlenya. 
</strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Cara yang dilakukan adalah dengan terus meningkatkan koordinasi, monitoring dan pengawalan. Program ini disusun dalam rangka mengefektifkan rantai distribusi pangan antara Gapoktan sebagai pemasok pangan (beras) dengan Toko Tani Indonesia (TTI), sehingga petani memperoleh harga yang wajar serta kosumen mendapat beras yang berkualitas dengan harga terjangkau. Tahun ini kementan akan mendorong PUPM-TTI sebanyak 500 unit hampir diseluruh Indonesia, dan sudah berjalan sebagaimana di harapkan.</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal9" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Dr. Hermanto, SE, MM (Anggota/F-PKS) </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>f. Mengenai embung, mohon agar saling berkoordinasi antar Kementan dengan KLH. </strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Embung yang dibangun sektor pertanian adalah embung dengan kapasitas kecil. Tujuan utamanya adalah dalam rangka antisipasi anomali iklim/kekeringan, dengan sumber air dari curah hujan atau limpasan air sungai. Embung ini dibangun sendiri oleh kelompok tani dan lahan yang digunakan adalah milik kelompok tani/desa, serta tidak melakukan pembebasan tanah. Embung pertanian ini berbeda dengan embung besar (kapasitas besar) yang dibangun oleh Kementerian PUPR, yang sudah tentu perlu melakukan koordinasi dengan Kemen LHK, terkait status lahan dan dampak lingkungannya.</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal10" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Ir. KRT. H. Darori Wonodipuro, MM (Anggota/F-Gerindra)
 </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>a.  Mengenai pengurangan anggaran di Kebumen, mengenai anggarannya justru dikurangi, padahal ini daerah yang termasuk miskin, mohon penjelasan. </strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Daerah yang termasuk miskin, seperti Kebumen menjadi fokus prioritas program pembangunan pertanian. Sebagaimana menjawab eprtanyaan sebelumnya, pemotongan anggaran lebih banyak dilakukan di satker pusat terutama pada: honorarium kegiatan, perjalanan dinas, paket meeting, seminar,  dan workshop. 
</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal11" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Ir. KRT. H. Darori Wonodipuro, MM (Anggota/F-Gerindra)
 </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>b.  Mengenai bansos dan subsidi, saya mendapat laporan bahwa program ini malah merugikan rakyat. 
</strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Dari hasil evaluasi selama ini, secara umum kegiatan belanja sosial dan subsidi masih dirasakan sangat bermanfaat bagi kelompok tani. Program pemberian pupuk dan benih bersubsidi bertujuan untuk meringankan beban petani agar ketika memerlukan pupuk dan benih dapat tersedia dengan harga yang terjangkau. Alasan pupuk dan benih disediakan subsidi karena petani Indonesia umumnya masih kurang mampu membeli sesuai harga pasar. Untuk itu, pemerintah Indonesia memilih opsi memberikan subsidi harga pupuk dan benih untuk petani.
</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="todo-task-modal12" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content scroller" style="height: 100%;" data-always-visible="1" data-rail-visible="0">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <!--<button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>-->
                                                <p class="todo-task-modal-title todo-inline">Tanggal:
                                                    <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="08/06/2016" />
                                                </p>
                                                <p class="todo-task-modal-title todo-inline">Penanya:
                                                    <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Ir. KRT. H. Darori Wonodipuro, MM (Anggota/F-Gerindra)
 </a>
                                                </p>
                                            </div>
                                            <div class="modal-body todo-task-modal-body">
                                                <p class="todo-task-modal-bg"><strong>c.  Mengenai harga daging sapi lokal, saya dapat laporan kalau memotong sapi lokal malah merugi, mohon penjelasan. 
 </strong></p>
                                                <p class="todo-task-modal-bg"> Tanggapan:<br />Jika dilihat dari struktur biaya karkas sapi dan daging sapi, memotong sapi lokal tidak rugi. Contoh sapi dengan berat 400 Kg dengan harga Rp. 17.600,-/Kg.  Berat karkas utuh sekitar 200kg dengan harga karkas utuh sekitar Rp. 88.000,-/Kg., sedangkan harga Karkas Bersih sekitar Rp. 80.080,-/Kg. Total produk sampingan yang terdiri dari Harga Oval, Tulang, dan kulit yaitu Rp. 3.114,-/Kg. Total harga Daging didapatkan dari total harga sapi dikurangi total Harga Produk sampingan (Rp 17.600,-/Kg – Rp 3.114,-/Kg) yaitu Rp. 14.486,-/Kg dengan harga daging murninya di RPH sekitar Rp. 103.471,-/Kg. Harga jual Daging di Jagal menjadi Rp. 106.221,-/Kg dengan adanya margin keuntungan Jagal Rp. 2.750/Kg. Berikutnya ada biaya transport, penyusutan dll sebesar Rp. 2.000,- sehingga Harga Jual pedagang menjadi Rp. 108.221,-/Kg. Harga Jual ke konsumen akhir Rp. 111.121,-/Kg dengan keuntungan yang diperoleh sekitar Rp. 3.000,-.dapat disimpulkan terdapat margin keuntungan sebesar Rp. 2000,- sampai Rp. 3.000,-/Kg di Jagal dan pedagang akhir.

</p>
                                                <!--<h4>Attach File
                                                    <a class="todo-add-button" href="javascrip:;">+</a>
                                                </h4>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>
                                                <p class="todo-task-file">
                                                    <i class="fa fa-file-o todo-grey"></i> comments.jpg
                                                    <i class="fa fa-times todo-remove-file"></i>
                                                </p>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn green" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="todo-members-modal1" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Kirim ke Anggota</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Pilih Anggota</label>
                                                        <div class="col-md-8">
                                                            <select id="select2_sample2" class="form-control select2 select-height" multiple>
                                                                <optgroup label="Pimpinan Komisi IV">
                                                                    <option>EDHY PRABOWO MM, MBA (F.Gerindra)</option>
                                                                    <option>SITI HEDIATI SOEHARTO  SE (FPG)</option>
                                                                    <option>Ir. E. Herman Khaeron, M.Si (F-PD)</option>
                                                                    <option>VIVA YOGA MAULADI, M.Si (F-PAN)</option>
                                                                    <option>DANIEL JOHAN (F-PKB)</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi PDIP">
                                                                    <option>SUDIN</option>
                                                                    <option>Drs. I MADE URIP</option>
                                                                    <option>Ir. MINDO SIANIPAR</option>
                                                                    <option>ONO SURONO, ST</option>
                                                                    <option>IR. EFFENDI SIANIPAR</option>
                                                                    <option>H.YADI SRIMULYADI</option>
                                                                    <option>DRS.H.M DARDIANSYAH</option>
                                                                    <option>HENKY KURNIADI</option>
                                                                    <option>AGUSTINA WILUJENG PRAMESTUTI, SS</option>
                                                                    <option>RAHMAD HANDOYO, S.Pi, MM</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Golkar">
                                                                    <option>ROBERT JOPPY KARDINAL</option>
                                                                    <option>DELIA PRATIWI BR. SITEPU, SH</option>
                                                                    <option>FIRMAN SOEBAGYO, SE,MH</option>
                                                                    <option>IR.H.AZHAR ROMLI, M.Si</option>
                                                                    <option>ICHSAN FIRDAUS</option>
                                                                    <option>AA BAGUS ADHI MAHENDRA PUTRA</option>
                                                                    <option>H. MOHAMMAD SURYO ALAM,AK,MBA</option>
                                                                    <option>HJ.SANIATUL LATIVA</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Gerindra">
                                                                    <option>IR.KRT.DARORI WONODIPURO, MM</option>
                                                                    <option>LUTHER KOMBONG</option>
                                                                    <option>H.O.O SUTISNA, SH</option>
                                                                    <option>DRS.H. ANDI NAWIR, MP</option>
                                                                    <option>SUSI SYAHDONNA MARLENY</option>
                                                                    <option>DRS.H.SJACHRANI MATAJA, MM, MBA</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Demokrat">
                                                                    <option>DRS. GUNTUR SASONO</option>
                                                                    <option>VIVI SUMANTRI JAYABAYA, S.SOS</option>
                                                                    <option>H. SYOFWATILLAHMOHZAIB, S.SOS</option>
                                                                    <option>IR.H. MUHAMMAD MASYIT UMAR, SP</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Amanat Nasional">
                                                                    <option>EKO HENDRO PURNOMO, S.SOS</option>
                                                                    <option>INDIRA CHUNDA TITA SYAHRUL, SE</option>
                                                                    <option>H.JAMALUDDIN, SH,MH</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Kebangkitan Bangsa">
                                                                    <option>H. CUCUN AHMAD SYAMSURIJAL, S.Ag</option>
                                                                    <option>DRS.H.IBNU MULTAZAM</option>
                                                                    <option>DRS.H.TAUFIQ.R. ABDULAH</option>
                                                                    <option>H.ACEP ADANG RUHIAT, MSI</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Keadilan Sejahtera">
                                                                    <option>H.ANDI AKMAL PASLUDDIN, SP, MM</option>
                                                                    <option>DR.HERMANTO, SE,MM</option>
                                                                    <option>DR.H.SA'DUDDIN, MM</option>
                                                                    <option>DRS.MAHFUZ SIDIK, Msi</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Persatuan Pembangunan">
                                                                    <option>DRS.ZAINUT TAUHID SAADI, MSi</option>
                                                                    <option>H.FADLY NURZAL, S.Ag</option>
                                                                    <option>H. FANNY SAFRIANSYAH, SE</option>
                                                                    <option>Hj. Kasriah</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Nasional Demokrat">
                                                                    <option>DRS.FADHOLI</option>
                                                                    <option>SULAEMAN L HAMZAH</option>
                                                                    <option>H. HAMDANI, S.Ip, M.Sos</option>
                                                                </optgroup>
                                                                <optgroup label="Fraksi Partai Hati Nurani Rakyat">
                                                                    <option>SAMSUDIN SIREGAR, SH </option>
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
                                <!--<div id="todo-task-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
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
                                            <!-- BEGIN PORTLET
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
                                            <!-- END PORTLET
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
                                </div>-->
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