@extends('tnde.master')
@section('title', 'Tabel Rapat Kerja' )

@section('pagestyle')
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="/home" class="active">Tabel Rapat Kerja</a>
                        </li>
@endsection

@section('content')
                                  <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject bold uppercase"> Rapat Kerja</span>
                                                </div>
                                                <!--<div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                    </div>
                                                </div>-->
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-toolbar">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="btn-group">
                                                                <a href="/add-workmeeting">
                                                                  <button id="sample_editable_1_new" class="btn sbold green"> Tambah Rapat Kerja
                                                                    <i class="fa fa-plus"></i>
                                                                  </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!--<div class="col-md-6">
                                                            <div class="btn-group pull-right">
                                                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-print"></i> Print </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th> 
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th> No. </th>
                                                            <th> Nama Kegiatan </th>
                                                            <th> Pelaksanaan </th>
                                                            <th> Lokasi </th>
                                                            <th> Actions </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="left"> 5</td>
                                                            <td width="40%" class="left">
                                                                <a href="#">  Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Evaluasi Hasil Kunjungan Kerja Spesifik Mengenai Ketersediaan Bahan Pangan Dan Harga Pangan Selama Bulan Ramadhan Dan Hari Raya Idul Fitri 1437 H </a>
                                                            </td>
                                                            <td width="20%" class="left"> 27 Juni 2016 </td>
                                                            <td width="20%" class="left"> Kementerian Pertanian </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="left"> 4</td>
                                                            <td width="40%" class="left">
                                                                <a href="#">  Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI Perubahan Alokasi TA 2016 Dan Ketersediaan Bahan Pangan Dan Harga Pangan Selama Ramadhan Dan Idul Fitri 1437 H </a>
                                                            </td>
                                                            <td width="20%" class="left"> 22 Juni 2016 </td>
                                                            <td width="20%" class="left"> Kementerian Pertanian </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="left"> 3</td>
                                                            <td width="40%" class="left">
                                                                <a href="#">  Rapat Kerja Menteri Pertanian RI Dengan Komite II DPR RI Pelaksanaan UU NO. 39 Tahun 2014 Dan Kesiapan Pemerintah Menjelang Hari Raya Idul Fitri </a>
                                                            </td>
                                                            <td width="20%" class="left"> 21 Juni 2016 </td>
                                                            <td width="20%" class="left"> Kementerian Pertanian </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="left"> 2</td>
                                                            <td width="40%" class="left">
                                                                <a href="#">  Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI APBN Perubahan 2016 Dan Rancangan Program Dan Anggaran Kementerian Pertanian TA 2017</a>
                                                            </td>
                                                            <td width="20%" class="left"> 13 Juni 2016 </td>
                                                            <td width="20%" class="left"> Kementerian Pertanian </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td class="left"> 1</td>
                                                            <td width="40%" class="left">
                                                                <a href="/workmeeting-questions">  Rapat Kerja Menteri Pertanian RI Dengan Komisi IV DPR RI RKA-KL Dalam RUU APBNP 2016 Dan Persiapan Ramadhan Dan Idul Fitri  </a>
                                                            </td>
                                                            <td width="20%" class="left"> 08 Juni 2016 </td>
                                                            <td width="20%" class="left"> Kementerian Pertanian </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="/workmeeting-questions">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <?php 
                                                    /* 
                                                    <!--
                                                    <tbody>
                                                      @forelse ($incoming as $incoming)
                                                      <tr class="odd gradeX">
                                                            <td width="25%" class="left"> {{ $incoming->agenda_number }} </td>
                                                            <td>
                                                              {{ $incoming->sender }}<br />
                                                                <a href="/edit-incoming/{{ $incoming->uuid }}">  {{ $incoming->subject }} </a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success"> Approved </span>
                                                            </td>
                                                            <td class="center"> {{ $incoming->letter_date }} </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li>
                                                                            <a href="/edit-incoming/{{ $incoming->uuid }}">
                                                                                <i class="fa fa-edit"></i> Edit </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/attachment-incoming/{{ $incoming->uuid }}">
                                                                                <i class="fa fa-paperclip"></i> Lampiran </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/receiver-incoming/{{ $incoming->uuid }}">
                                                                                <i class="icon-user"></i> Penerima </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/attribute-incoming/{{ $incoming->uuid }}">
                                                                                <i class="icon-tag"></i> Atribut
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                      @empty
                                                      <tr class="odd gradeX">
                                                            <td> </td>
                                                            <td>
                                                                <a href="#"> BELUM ADA DATA</a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-sm label-success">  </span>
                                                            </td>
                                                            <td class="center">  </td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                      @endforelse
                                                    </tbody>-->
                                                    */ ?>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
@endsection

@section('page-scripts')

        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/table-datatables-managed.js" type="text/javascript"></script>
@endsection