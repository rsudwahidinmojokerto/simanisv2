<div id="tempat-modal"></div>
<!-- <div class="AutoScroll scroller" id="dashboard1" name="scroll-container" style="height:850px; width:100%; overflow:hidden"> -->
<div class="splide">
    <div class="splide__track">
        <div class="splide__list">
            <?php
            $j = 1;
            for ($i = 0; $i < count($jumlahRuang); $i++) {
            ?>
                <li class="splide__slide">
                    <div class="box">
                        <div class="box-header">
                            <h1 style="font-size: 45px;">
                                <b>
                                    <center><?= $jumlahRuang[$i]->namaruang; ?></center>
                                </b>
                            </h1>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <?php
                                foreach ($ketersediaanBed as $kb) {
                                    if ($jumlahRuang[$i]->koderuang == $kb->koderuang) { ?>
                                        <div class="col-sm-<?= 12 / $jumlahKelasRuang[$i]; ?>">
                                            <div class="col-lg-12 col-xs-12">
                                                <div class="small-box bg-<?= $kb->warna; ?>">
                                                    <div class="inner">
                                                        <center>
                                                            <h2><?= $kb->nama_kelas; ?></h2>
                                                            <?php if ($kb->keterangan != null || $kb->keterangan != '') { ?>
                                                                <h3 style="font-size: 25px;"><b><?= ' (' . $kb->keterangan . ')'; ?></b></h3>
                                                            <?php } else { ?>
                                                                <br><br>
                                                            <?php } ?>
                                                            <h3 style="font-size: 25px;">Tersedia</h3>
                                                            <h1><b id="realtimeJumlahRuangKelas<?= $j; ?>">0</b></h1>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php $j++;
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </div>
    </div>
</div>

<div>
    <a class="float" data-toggle="modal" data-target="#tampil-resumeRuang">
        <i class="fa fa-search btn-float"></i>
    </a>
</div>

<?php echo $modal_tampil_resume_ruang; ?>

<script type="text/javascript">
    var map = [];

    var options = {
        useEasing: true,
        useGrouping: true,
        separator: '.',
        decimal: ',',
        prefix: '',
        suffix: ''
    };

    for (let i = 1; i <= 1000; i++) {
        map[i] = new CountUp('realtimeJumlahRuangKelas' + i, 0, 0, 0, 5, options);
        map[i].start();
    }

    function realtimeJumlahBed() {
        $.ajax({
            method: 'POST',
            url: "<?php echo base_url('ketersediaanBed/cekJumlahBed'); ?>",
            dataType: 'json',
            cache: false,
            success: function(data) {
                for (let i = 1; i <= data.jumlahBed; i++) {
                    map[i].update(data.jumlahRuangKelas[i]);
                }
            }
        })
    }

    setInterval(function() {
        realtimeJumlahBed();
    }, 10000);

    const scroll = new Splide('.splide', {
        autoplay: true,
        direction: 'ttb',
        height: '850px',
        type: 'loop',
        drag: 'free',
        focus: 'top',
        arrows: false,
        pagination: false,
        autoHeight: true,
        perPage: 3,
        autoScroll: {
            speed: 2
        }
    });

    scroll.mount();

    // $(function() {
    //     var interval = setInterval(function() {
    //         if ($("#dashboard1").scrollTop() != $('#dashboard1')[0].scrollHeight) {
    //             $("#dashboard1").scrollTop($("#dashboard1").scrollTop() + 10);
    //         } else {
    //             clearInterval(interval);
    //         }
    //     }, 5000);
    // });
</script>





<?php //if ($userdata->status != 'terkunci') { 
?>
<!-- Moment js -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/moment/min/moment.min.js"></script> -->
<!-- chart js -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.bundle.min.js"></script>
    <script type="text/javascript">
        //data statistik pembayaran
        var lineChartCanvas = $("#data-statistik");
        var dataBayar = <?php echo $bulan; ?>;
        var color1 = <?php echo "'$color[0]'"; ?>;
        var color2 = <?php echo "'$color[1]'"; ?>;
        var idGrup = <?php echo "'$userdata->idGrup'"; ?>;

        var lineData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des", "Jan", "Feb", "Mar", "Apr", "Mei"],
            datasets: [{
                label: "2018-2019",
                backgroundColor: color1,
                pointBackgroundColor: color2,
                pointBorderColor: 'white',
                pointBorderWidth: 2,
                pointRadius: 5,
                data: dataBayar
                // data: [14888, 67123, 80820, 82973, 63829, 72893, 55803, 67002, 79080, 10200, 120837, 57720] //sample data
            }]
        };

        var lineOptions = {
            responsive: true,
            hover: {
                mode: 'nearest',
                intersect: true
            },
            tooltips: {
                mode: 'index',
                intersect: false,
                label: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                callbacks: {
                    label: function(t, d) {
                        if (idGrup != 'JBT03') {
                            var xLabel = d.datasets[t.datasetIndex].label;
                            var yLabel = t.yLabel >= 1000 ? 'Rp. ' + t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") : 'Rp. ' + t.yLabel;
                            return xLabel + ': ' + yLabel;
                        } else {
                            var xLabel = d.datasets[t.datasetIndex].label;
                            var yLabel = t.yLabel >= 0 ? t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : t.yLabel + ' m³';
                            return xLabel + ': ' + yLabel;
                        }
                    }
                }
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Bulan'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: (idGrup == 'JBT03') ? 'Besar Penggunaan' : 'Besar Pembayaran'
                    },
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (idGrup != 'JBT03') {
                                if (parseInt(value) >= 1000) {
                                    return 'Rp.' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                } else {
                                    return 'Rp.' + value;
                                }
                            } else {
                                return value + ' m³';
                            }
                        }
                    }
                }]
            }
        };

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineData,
            options: lineOptions
        });
    </script> -->
<?php //} 
?>