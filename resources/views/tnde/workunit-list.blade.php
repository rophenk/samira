@extends('tnde.master')
@section('title', 'Satuan Kerja' )

@section('pagestyle')
        <link href="../assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Satuan Kerja</a>
                        </li>
@endsection

@section('content')
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-bubble font-purple"></i>
                                                    <span class="caption-subject font-purple sbold uppercase">Data Satuan Kerja</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">New</label>
                                                        <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="dd" id="nestable_list_3">
                                                    <ol class="dd-list">
                                                      @forelse ($satker as $workunit)
                                                        <?php

                                                          $FmyFunctions1 = new \App\Helpers\MyFunctions;
                                                          $renderNode = ($FmyFunctions1->renderNode($workunit));
                                                        ?>
                                                        <?php echo $renderNode; ?>
                                                      @empty

                                                      @endforelse
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endsection

@section('page-scripts')
<script src="../assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/ui-nestable.min.js" type="text/javascript"></script>
        
@endsection