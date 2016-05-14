@extends('tnde.master')
@section('title', 'Tinjau Berkas Lampiran' )

@section('pagestyle')
        
@endsection

@section('breadcrumb')

                        <li>
                            <a href="#" class="active">Tinjau Berkas Lampiran</a>
                        </li>
@endsection

@section('content')
<a href="../tnde/{{ $attachment->incoming_uuid }}/{{ $attachment->name }}"><button class="btn blue">Unduh Berkas</button></a><br />
<a class="media" href="../tnde/{{ $attachment->incoming_uuid }}/{{ $attachment->name }}">Unduh Berkas</a>
@endsection

@section('page-scripts')

        <script src="../assets/pages/scripts/jquery.media.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/jquery.metadata.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('a.media').media({width:800, height:800});
            });
        </script>

@endsection