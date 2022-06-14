@extends('layouts.appDash')

@section('css')
@endsection

@section('content')
    <!-- Main page content-->
    <div class="container-xl px-4 mt-5">
        {{-- @include('layouts.template.header_dashboard') --}}
        <div class="row">
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-primary border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white-50">Bilangan NOC Keseluruhan</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $noc }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 2-->
                <div class="card bg-success border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white-50">NOC dalam semakan</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocSemak }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-warning border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white-50">Penyediaan Ulasan NOC</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocSediaUlasan }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 2-->
                <div class="card bg-danger border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white-50">Maklumat Tambahan</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocTambahan }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 1-->
                <div class="card bg-black border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white-50">Penyediaan Memo NOC</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocMemo }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 mb-2">
                <!-- Dashboard info widget 2-->
                <div class="card bg-info border-0">
                    <div class="card-body text-center">
                        <h6 class="text-white-50">Modul NOC MyProjek</h6>
                        <div class=" mb-2">
                            <span class="display-4 text-white">{{ $nocModul }}</span>
                            {{-- <span class="text-white-50">per year</span> --}}
                        </div>
                        {{-- <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Report summary card example-->
                <div class="card mb-4">
                    <div class="card-header">NOC mengikut klasifikasi</div>
                    <div class="list-group list-group-flush small">
                        <div class="list-group-item list-group-item-action">
                            <i class="fas fa-dollar-sign fa-fw text-blue me-2"></i>
                            Earnings Reports
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-tag fa-fw text-purple me-2"></i>
                            Average Sale Price
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-mouse-pointer fa-fw text-green me-2"></i>
                            Engagement (Clicks &amp; Impressions)
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-percentage fa-fw text-yellow me-2"></i>
                            Conversion Rate
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-chart-pie fa-fw text-pink me-2"></i>
                            Segments
                        </div>
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header">NOC mengikut status</div>
                    <div class="list-group list-group-flush small">
                        <div class="list-group-item list-group-item-action">
                            <i class="fas fa-dollar-sign fa-fw text-blue me-2"></i>
                            Earnings Reports
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-tag fa-fw text-purple me-2"></i>
                            Average Sale Price
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-mouse-pointer fa-fw text-green me-2"></i>
                            Engagement (Clicks &amp; Impressions)
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-percentage fa-fw text-yellow me-2"></i>
                            Conversion Rate
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-chart-pie fa-fw text-pink me-2"></i>
                            Segments
                        </div>
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header">NOC mengikut Kementerian/Jabatan</div>
                    <div class="list-group list-group-flush small">
                        <div class="list-group-item list-group-item-action">
                            <i class="fas fa-dollar-sign fa-fw text-blue me-2"></i>
                            Earnings Reports
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-tag fa-fw text-purple me-2"></i>
                            Average Sale Price
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-mouse-pointer fa-fw text-green me-2"></i>
                            Engagement (Clicks &amp; Impressions)
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-percentage fa-fw text-yellow me-2"></i>
                            Conversion Rate
                        </div>
                        <div class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-chart-pie fa-fw text-pink me-2"></i>
                            Segments
                        </div>
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                Senarai NOC
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('sb-admin-pro/dist/assets/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sb-admin-pro/dist/js/litepicker.js') }}"></script>
@endsection
