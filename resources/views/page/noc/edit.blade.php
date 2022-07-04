@extends('layouts.appDash')

@section('css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
@endsection

@section('icon', 'plus-square')
@section('tajuk', $tajuk)
@section('button')
    @if ($form == 'noc_edit')
        <a class="btn btn-sm btn-light text-primary" href="{{ route('noc.index') }}">
            <i class="me-1" data-feather="arrow-left"></i>
            Kembali Senarai
        </a>
    @endif
@endsection

@section('content')
    @include('layouts.template.header_compact')
    <div class="container-fluid px-4 mt-4">

        @if ($form == 'noc_edit')
            @include('page.noc.import.editNOC')
        @endif

        @if ($form == 'noc_1')
            @include('page.noc.import.editSemak')
        @endif

        @if ($form == 'noc_2')
            @include('page.noc.import.editMohonUlasan')
        @endif

        @if ($form == 'noc_3')
            @include('page.noc.import.editSemakUlasan')
        @endif

        @if ($form == 'noc_4')
            @include('page.noc.import.editSediaUlasan')
        @endif

        @if ($form == 'noc_5')
            @include('page.noc.import.editHantarUlasan')
        @endif

        @if ($form == 'noc_6')
            @include('page.noc.import.editSediaMemo')
        @endif

        @if ($form == 'noc_7')
            @include('page.noc.import.editHantarMemo')
        @endif

        @if ($form == 'noc_8')
            @include('page.noc.import.editTerimaMemo')
        @endif

        @if ($form == 'noc_9')
            @include('page.noc.import.editSediaSurat')
        @endif

        @if ($form == 'noc_10')
            @include('page.noc.import.editHantarSurat')
        @endif

        @if ($form == 'noc_11')
            @include('page.noc.import.editMohonModul')
        @endif

    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tarikh').datepicker({
                format: 'dd/mm/yyyy',
            });
        });
        $(document).ready(function() {
            $('#tarikhMohonNOC').datepicker({
                format: 'dd/mm/yyyy',
            });
        });
        $(document).ready(function() {
            $('#tarikhSuratMohon').datepicker({
                format: 'dd/mm/yyyy',
            });
        });
    </script>


@endsection
