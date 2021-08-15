<div id="tempat-modal"></div>

<div class="row">
        <?php if($userdata->idGrup == 'JBT04'){?>
            <?php if($userdata->status == 'terkunci'){?>
            <div class="col-lg-12 col-xs-12">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3 class="tagihan" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php echo $bayar->tagihan; ?></h3>
                        <p>Tagihan yang harus dibayar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            <?php } else { ?>
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 id="realtimeCountTagihan"></h3>
                    <p>Tagihan saat ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 id="realtimeCountDaya"></h3>
                    <p>Biogas terpakai</p>
                </div>
                <div class="icon">
                    <i class="ion ion-flame"></i>
                </div>
                <!-- <a href="<?php echo base_url('Trxkeluar') ?>" class="small-box-footer">Cek <i class="fa fa-arrow-circle-right"></i></a> -->
            </div>
        </div><!-- ./col -->
        <?php } ?>
        <?php 
        } else if ($userdata->idGrup == 'JBT01' || $userdata->idGrup == 'JBT02'){
        ?>
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 class="tagihan" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php $decodeBulan = json_decode($bulan); echo $decodeBulan[$minMonth]; ?></h3>
                    <p>Tagihan pelanggan bulan ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $pelanggan; ?> Pelanggan</h3>
                    <p>Terdaftar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
            </div>
        </div><!-- ./col -->
        <?php 
        } else {
        ?>
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php $decodeBulan = json_decode($bulan); echo $decodeBulan[$minMonth]; ?> m<sup>3</sup></h3>
                    <p>Penggunaan biogas di titik anda bulan ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-flame"></i>
                </div>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $pelangganPenyuplai; ?> Pelanggan</h3>
                    <p>Terdaftar di titik anda</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
            </div>
        </div><!-- ./col -->
        <?php 
        }
        ?>

    <?php if($userdata->status == 'terkunci'){?>
        <?php if($userdata->metode == 'tunai'){?>
        <div class="col-lg-12 col-xs-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-pie-chart"></i>
                <h3 class="box-title"> Cara pembayaran</h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img src="<?php echo base_url(); ?>assets/img/flow-payment/alur_tunai.png" class="img-responsive img-alur" alt="Alur pembayaran tunai">
                </div>
                <div class="col-md-1"></div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-3 col-xs-12"></div>
                <div class="col-md-6 col-xs-12">
                    <img src="<?php echo base_url(); ?>assets/img/flow-payment/alur_tunai@media.png" class="img-responsive img-alur-media" style="visibility: hidden;" alt="Alur pembayaran tunai">
                </div>
                <div class="col-md-3 col-xs-12"></div>
                </div>
            </div>
            </div>
        </div>
            <?php } else { ?>
            <div class="col-lg-12 col-xs-12">
                <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-pie-chart"></i>
                    <h3 class="box-title"> Cara pembayaran</h3>

                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <img src="<?php echo base_url(); ?>assets/img/flow-payment/alur_transfer.png" class="img-responsive img-alur" alt="Alur pembayaran tunai">
                    </div>
                    <div class="col-md-1"></div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3 col-xs-12"></div>
                    <div class="col-md-6 col-xs-12">
                        <img src="<?php echo base_url(); ?>assets/img/flow-payment/alur_transfer@media.png" class="img-responsive img-alur-media" style="visibility: hidden;" alt="Alur pembayaran tunai">
                    </div>
                    <div class="col-md-3 col-xs-12"></div>
                    </div>
                </div>
                </div>
            </div>
            <?php } ?>
    <?php } else { ?>
  <div class="col-lg-12 col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-area-chart"></i>
        <h3 class="box-title"><?php if($userdata->idGrup == 'JBT04') { echo 'Statistik Pembayaran Anda'; } else if ($userdata->idGrup == 'JBT01' || $userdata->idGrup == 'JBT02'){echo 'Statistik Pembayaran Pelanggan';} else {echo 'Statistik Penggunaan Biogas Pelanggan';}?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="chartWrapper">
            <div class="chartAreaWrapper">
                <canvas id="data-statistik" style="height: auto; width: 500px"></canvas>
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

<?php if($userdata->status != 'terkunci'){?>
<!-- Moment js -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/moment/min/moment.min.js"></script> -->
<!-- chart js -->
<script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.bundle.min.js"></script>
<script type="text/javascript">
  //data statistik pembayaran
  var lineChartCanvas = $("#data-statistik");
  var dataBayar = <?php echo $bulan; ?>;
  var color1 = <?php echo "'$color[0]'"; ?>;
  var color2 = <?php echo "'$color[1]'"; ?>;
  var idGrup = <?php echo "'$userdata->idGrup'"; ?>;

  var lineData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des", "Jan", "Feb", "Mar", "Apr", "Mei"],
            datasets: [
                {
                    label: "2018-2019",
                    backgroundColor: color1,
                    pointBackgroundColor: color2,
                    pointBorderColor: 'white',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    data: dataBayar
                    // data: [14888, 67123, 80820, 82973, 63829, 72893, 55803, 67002, 79080, 10200, 120837, 57720] //sample data
                }
            ]
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
                    if(idGrup != 'JBT03'){
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
                        if(idGrup != 'JBT03'){
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
</script>
<?php } ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.tagihan').autoNumeric('init');
    });
</script>