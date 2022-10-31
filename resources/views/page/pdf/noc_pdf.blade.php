@extends('layouts.appPdf')

@section('css')
    <style>
        .grid-container {
            display: grid;
        }

        .header {
            grid-column: 1 / span 2;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
@endsection

@section('content')
    <div class="grid-container">
        <div class="header">
            Test Header
        </div>
        <div class="main">
            test main 1
        </div>
        <div class="main2">
            test main 2
        </div>
    </div>
@endsection

@section('js')
@endsection
