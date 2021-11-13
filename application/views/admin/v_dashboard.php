<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title text-white">Welcome Back <?= $user['nama'] ?></h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Starter Page</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="page-category">Inner page content goes here</div> -->

            <!-- start card -->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="" data-toggle="tooltip" data-original-title="Klik untuk detail">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="flaticon-users"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category text-white">Jumlah Pengguna</p>
                                            <h4 class="card-title"><?= $this->db->count_all('tb_pengguna'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-3">
                    <a href="" data-toggle="tooltip" data-original-title="Klik untuk detail">
                        <div class="card card-stats card-primary card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Imam</p>
                                            <h4 class="card-title"><?= $this->db->count_all('tb_imam'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-3">
                    <a href="" data-toggle="tooltip" data-original-title="Klik untuk detail">
                        <div class="card card-stats card-info card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Khatib</p>
                                            <h4 class="card-title"><?= $this->db->count_all('tb_khatib'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-3">
                    <a href="" data-toggle="tooltip" data-original-title="Klik untuk detail">
                        <div class="card card-stats card-success card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Pengurus</p>
                                            <h4 class="card-title"><?= $this->db->count_all('tb_pengurus'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-3">
                    <a href="" data-toggle="tooltip" data-original-title="Klik untuk detail">
                        <div class="card card-stats card-secondary card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-user-astronaut"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Muazin</p>
                                            <h4 class="card-title"><?= $this->db->count_all('tb_muazin'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-5 col-md-3">
                    <a href="" data-toggle="tooltip" data-original-title="Klik untuk detail">
                        <div class="card card-stats card-round" style="background: #0e8bab;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-users" style="color: white;"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category text-white">Jumlah Remaja Masjid</p>
                                            <h4 class="card-title"><?= $this->db->count_all('tb_remajamasjid'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- end card -->

            <!-- Row Card No Padding -->
            <a href="" data-toggle="tooltip" data-original-title="Klik untuk detail">
                <div class="row row-card-no-pd">
                    <div class="col-sm-9 col-md-8">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-coins text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-5 col-stats">
                                        <div class="numbers">
                                            <p style="font-size: 20px;" class="card-category">Total Kas Masjid</p>
                                            <h4 class="card-title">Rp
                                                <?= rupiah($kas['tot_kas']); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- end row card -->

            <!-- total incame -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Grafik Rata-rata Kas Bulanan Tahun <?= date('Y') ?></div>
                        </div>
                        <div class="card-body">
                            <div class="row py-4 px-4">
                                <div class="col-md-4 d-flex flex-column justify-content-around">
                                    <div>
                                        <h6 class="fw-bold text-uppercase text-success op-8">Total Pemasukan</h6>
                                        <h3 class="fw-bold">Rp <?= rupiah($kasmasuk['tot_masuk']); ?></h3>
                                    </div>

                                </div>
                                <div class="col-md-4 d-flex flex-column justify-content-around">
                                    <div>
                                        <h6 class="fw-bold text-uppercase text-danger op-8">Total Pengeluaran</h6>
                                        <h3 class="fw-bold">Rp <?= rupiah($kaskeluar['tot_keluar']); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart-container">
                                    <canvas id="totalIncomeChart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Line Chart</div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Grafik Jemaah</div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- end total incame -->

            <!-- script total income -->
            <script>
                var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

                var mytotalIncomeChart = new Chart(totalIncomeChart, {
                    type: 'bar',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "sep", "Okt", "Nov", "Des"],
                        datasets: [{
                            label: "Total Income",
                            backgroundColor: '#ff9e27',
                            borderColor: 'rgb(23, 125, 255)',
                            data: ['<?= $jan['total1'] ?>', '<?= $Feb['total2'] ?>', '<?= $Mar['total3'] ?>', '<?= $Apr['total4'] ?>', '<?= $Mei['total5'] ?>', '<?= $Jun['total6'] ?>', '<?= $Jul['total7'] ?>', '<?= $Aug['total8'] ?>', '<?= $Sep['total9'] ?>', '<?= $Okt['total10'] ?>', '<?= $Nov['total11'] ?>', '<?= $Des['total12'] ?>'],
                        }],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    display: false //this will remove only the label
                                },
                                gridLines: {
                                    drawBorder: false,
                                    display: false
                                }
                            }],
                            xAxes: [{
                                gridLines: {
                                    drawBorder: false,
                                    display: false
                                }
                            }]
                        },
                    }
                });
            </script>
            <!-- Chart Kas Mingguah -->
            <script>
                var lineChart = document.getElementById('lineChart').getContext('2d');

                var myLineChart = new Chart(lineChart, {
                    type: 'line',
                    data: {
                        labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
                        datasets: [{
                            label: "Active Users",
                            borderColor: "#1d7af3",
                            pointBorderColor: "#FFF",
                            pointBackgroundColor: "#1d7af3",
                            pointBorderWidth: 2,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 1,
                            pointRadius: 4,
                            backgroundColor: 'transparent',
                            fill: true,
                            borderWidth: 2,
                            data: [542, 480, 430, 550, 530, 453, 380]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 10,
                                fontColor: '#1d7af3',
                            }
                        },
                        tooltips: {
                            bodySpacing: 4,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest",
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        layout: {
                            padding: {
                                left: 15,
                                right: 15,
                                top: 15,
                                bottom: 15
                            }
                        }
                    }
                });
            </script>
            <!-- script grafik jemaah -->
            <script>
                var pieChart = document.getElementById('pieChart').getContext('2d')
                var myPieChart = new Chart(pieChart, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: ['<?= $imam ?>', '<?= $khatib ?>', '<?= $muazin ?>', '<?= $pengurus ?>', '<?= $remajamasjid ?>'],
                            backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b", "#3ba867", "#687d4d"],
                            borderWidth: 0
                        }],
                        labels: ['Imam', 'Khatib', 'Muazin', 'Pengurus', 'Remaja Masjid']
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position: 'bottom',
                            labels: {
                                fontColor: 'rgb(154, 154, 154)',
                                fontSize: 11,
                                usePointStyle: true,
                                padding: 20
                            }
                        },
                        pieceLabel: {
                            render: 'percentage',
                            fontColor: 'white',
                            fontSize: 14,
                        },
                        tooltips: false,
                        layout: {
                            padding: {
                                left: 20,
                                right: 20,
                                top: 20,
                                bottom: 20
                            }
                        }
                    }
                })
            </script>


        </div>