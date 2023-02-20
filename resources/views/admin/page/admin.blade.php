<div class="row">
    <div class="col-md-3 mb-4 stretch-card transparent">
        <div class="card" style="background-color:#0b562b; color:#fff;">
            <div class="card-body">
                <h6 class="mb-4" style="font-size:20px; ">Total Regional</h6>
                <p class="fs-30 mb-4" style="font-size:35px;">{{ $regional->count() }}</p>
                <p>Telah terdaftar di platform</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4 stretch-card transparent">
        <div class="card" style="background-color:#215522; color:#fff;">
            <div class="card-body">
                <h6 class="mb-4" style="font-size:20px; ">Jumlah Media</h6>
                <p class="fs-30 mb-4" style="font-size:35px;">{{ $user->count() }}</p>
                <p>Yang telah bergabung</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4 stretch-card transparent">
        <div class="card" style="background-color:#258127; color:#fff;">
            <div class="card-body">
                <h6 class="mb-4" style="font-size:20px; ">Total Khodim</h6>
                <p class="fs-30 mb-4" style="font-size:35px;">{{ $khodim }}</p>
                <p>Keseluruhan Khodim</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4 stretch-card transparent">
        <div class="card" style="background-color:#208321; color:#fff;">
            <div class="card-body">
                <h6 class="mb-4" style="font-size:20px; ">Jumlah Kru Media</h6>
                <p class="fs-30 mb-4" style="font-size:35px;">{{ $profiles->sum('jumlah_kru') }}</p>
                <p>Dari semua media yang bergabung</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="grafik"></div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
            <div class="card-body">
                <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                    data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                    <div class="ml-xl-4 mt-3">
                                        <h1 class="card-title">Pesantren tiap regional</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem totam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                    <div class="ml-xl-4 mt-3">
                                        <h1 class="card-title">Kru Media Pondok Jatim</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem totam.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                <table class="table table-borderless report-table">
                                                    <tr>
                                                        <td class="text-muted">Illinois</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 70%" aria-valuenow="70"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">713</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Washington</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 30%" aria-valuenow="30"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">583</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Mississippi</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 95%" aria-valuenow="95"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">924</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">California</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                    style="width: 60%" aria-valuenow="60"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">664</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Maryland</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-primary"
                                                                    role="progressbar" style="width: 40%"
                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">560</h5>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('dashboard/js/highcart.js') }}"></script>
<script>
    var jumlah_kru = <?php echo json_encode($data_jumlah_kru); ?>;
    var month = <?php echo json_encode($month); ?>;

    Highcharts.chart('grafik', {
        title: {
            text: 'Grafik Kru Media Perbulan'
        },
        xAxis: {
            categories: month
        },
        yAxis: {
            title: {
                text: "Jumlah Kru Perbulan"
            }
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Jumlah Kru',
            data: jumlah_kru
        }]
    });
</script>
