@extends('tnde.master')
@section('title', 'Linimasa Kegiatan' )

@section('pagestyle')
        
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Linimasa Kegiatan</a>
                        </li>
@endsection

@section('content')
                              <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-microphone font-green"></i>
                                            <span class="caption-subject bold font-green uppercase"> Linimasa Kegiatan</span>
                                            <!--<span class="caption-helper">Alternating Vertical Timeline</span>-->
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <!--<label class="btn red btn-outline btn-circle btn-sm active">
                                                    <input type="radio" name="options" class="toggle" id="option1">Tambah </label>-->
                                                <label class="btn  red btn-outline btn-circle btn-sm">
                                                    <input type="radio" name="options" class="toggle" id="option2">Tambah Kegiatan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-timeline-2">
                                            <div class="mt-timeline-line border-grey-steel"></div>
                                            <ul class="mt-container">
                                              @forelse($events as $events)
                                              <li class="mt-item">
                                                    <div class="mt-timeline-icon bg-{{ $events->color }} bg-font-{{ $events->color }} border-grey-steel">
                                                        <i class="{{ $events->icon }}"></i>
                                                    </div>
                                                    <div class="mt-timeline-content">
                                                        <div class="mt-content-container bg-{{ $events->color }} bg-font-{{ $events->color }} border-left-before-{{ $events->color }} border-{{ $events->color }}">
                                                            <div class="mt-title">
                                                                <h3 class="mt-content-title">{{ $events->name }}</h3>
                                                            </div>
                                                            <div class="mt-author">
                                                                <div class="mt-avatar">
                                                                    <img src="{{ $events->avatar }}" />
                                                                </div>
                                                                <div class="mt-author-name">
                                                                    <a href="javascript:;" class="font-white">{{ $events->user_name }}</a>
                                                                </div>
                                                                <div class="mt-author-notes font-white">{{ $events->start_date_format }} s/d<br />{{ $events->end_date_format }}</div>
                                                            </div>
                                                            <div class="mt-content border-white">
                                                                <p>{{ $events->description }}</p>
                                                                <a href="/event-detail" class="btn btn-circle white">Read More</a>
                                                                <a href="/event-add-docs" class="btn btn-circle btn-icon-only blue">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @empty

                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
@endsection

@section('page-scripts')

        
@endsection