@extends('layouts.appDash')

@section('css')
@endsection

@section('content')
    <!-- Main page content-->
    <div class="container-xl px-4 mt-5">
        {{-- @include('layouts.template.header_dashboard') --}}
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">Permohonan NOC</div>
                                <div class="h1">4,390</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 2-->
                <div class="card border-start-lg border-start-secondary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-secondary mb-1">Semakan NOC</div>
                                <div class="h1">27.00</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-tag fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 3-->
                <div class="card border-start-lg border-start-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-success mb-1">Penyediaan ulasan NOC</div>
                                <div class="h1">11,291</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-mouse-pointer fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 4-->
                <div class="card border-start-lg border-start-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-info mb-1">Penyediaan memo kelulusan</div>
                                <div class="h1">100</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-percentage fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Illustration card example-->
                <div class="card mb-4">
                    <div class="card-body text-center p-5">
                        <img class="img-fluid mb-5" src="assets/img/illustrations/data-report.svg" />
                        <h4>Report generation</h4>
                        <p class="mb-4">Ready to get started? Let us know now! It's time to start building that
                            dashboard you've been waiting to create!</p>
                        <a class="btn btn-primary p-3" href="#!">Continue</a>
                    </div>
                </div>
                <!-- Report summary card example-->
                <div class="card mb-4">
                    <div class="card-header">Affiliate Reports</div>
                    <div class="list-group list-group-flush small">
                        <a class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-dollar-sign fa-fw text-blue me-2"></i>
                            Earnings Reports
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-tag fa-fw text-purple me-2"></i>
                            Average Sale Price
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-mouse-pointer fa-fw text-green me-2"></i>
                            Engagement (Clicks &amp; Impressions)
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-percentage fa-fw text-yellow me-2"></i>
                            Conversion Rate
                        </a>
                        <a class="list-group-item list-group-item-action" href="#!">
                            <i class="fas fa-chart-pie fa-fw text-pink me-2"></i>
                            Segments
                        </a>
                    </div>
                    <div class="card-footer position-relative border-top-0">
                        <a class="stretched-link" href="#!">
                            <div class="text-xs d-flex align-items-center justify-content-between">
                                View More Reports
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Progress card example-->
                <div class="card bg-primary border-0">
                    <div class="card-body">
                        <h5 class="text-white-50">Budget Overview</h5>
                        <div class="mb-4">
                            <span class="display-4 text-white">$48k</span>
                            <span class="text-white-50">per year</span>
                        </div>
                        <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
                            <div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-4">
                <!-- Area chart example-->
                <div class="card mb-4">
                    <div class="card-header">Revenue Summary</div>
                    <div class="card-body">
                        <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Bar chart example-->
                        <div class="card h-100">
                            <div class="card-header">Sales Reporting</div>
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas>
                                </div>
                            </div>
                            <div class="card-footer position-relative">
                                <a class="stretched-link" href="#!">
                                    <div class="text-xs d-flex align-items-center justify-content-between">
                                        View More Reports
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Pie chart example-->
                        <div class="card h-100">
                            <div class="card-header">Traffic Sources</div>
                            <div class="card-body">
                                <div class="chart-pie mb-4"><canvas id="myPieChart" width="100%" height="50"></canvas>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div
                                        class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                        <div class="me-3">
                                            <i class="fas fa-circle fa-sm me-1 text-blue"></i>
                                            Direct
                                        </div>
                                        <div class="fw-500 text-dark">55%</div>
                                    </div>
                                    <div
                                        class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                        <div class="me-3">
                                            <i class="fas fa-circle fa-sm me-1 text-purple"></i>
                                            Social
                                        </div>
                                        <div class="fw-500 text-dark">15%</div>
                                    </div>
                                    <div
                                        class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                        <div class="me-3">
                                            <i class="fas fa-circle fa-sm me-1 text-green"></i>
                                            Referral
                                        </div>
                                        <div class="fw-500 text-dark">30%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('sb-admin-pro/dist/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sb-admin-pro/dist/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="{{asset('sb-admin-pro/dist/assets/demo/chart-pie-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="{{asset('sb-admin-pro/dist/js/litepicker.js')}}"></script>
@endsection
