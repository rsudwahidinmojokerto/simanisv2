<div id="tempat-modal"></div>

<!-- <div class="row">
    <h1>
        <center>RUANG KERTAWIJAYA</center>
    </h1>
    <br>
</div> -->

<div class="row">
    <?php if ($userdata->idGrup == 'JBT04') { ?>
        <?php if ($userdata->status == 'terkunci') { ?>
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
            <!-- <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 id="realtimeCountTagihan"></h3>
                    <p>Tagihan saat ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
        </div> -->
            <?php
            $k = 1;
            foreach ($kamar as $km) { ?>
                <div class="col-lg-1 col-xs-1">
                    <div class="small-box bg-<?php echo ($km['Terpakai'] == 'Y') ? 'red' : 'green'; ?>">
                        <div class="inner">
                            <h2>
                                <center><?= $km['KodeUnit']; ?>-<?= $k; ?></center>
                            </h2>
                            <!-- <h3 id="realtimeCountDaya"></h3> -->
                            <!-- <p>Biogas terpakai</p> -->
                        </div>
                        <!-- <div class="icon">
                        <i class="ion ion-flame"></i>
                    </div> -->
                        <!-- <a href="<?php echo base_url('Trxkeluar') ?>" class="small-box-footer-green"><i class="fa fa-arrow-circle-right"></i></a> -->
                        <!-- <a href="<?php echo base_url('Trxkeluar') ?>" class="small-box-footer-green">Terpakai</a>
                            <a href="<?php echo base_url('Trxkeluar') ?>" class="small-box-footer-red">Kosong</i></a>
                            <a href="<?php echo base_url('Trxkeluar') ?>" class="small-box-footer-yellow">Perbaikan</i></a> -->
                    </div>
                </div>
            <?php $k++;
            } ?>
            <div class="col-lg-5 col-xs-5"></div>
            <div class="col-lg-1 col-xs-1">
                <div style="width:20px; height:20px; background-color: #DD4B39;">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terisi</h4>
                </div>
            </div>
            <div class="col-lg-1 col-xs-1">
                <div style="width:20px; height:20px; background-color: #00A65A;">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kosong</h4>
                </div>
            </div>
            <div class="col-lg-5 col-xs-5"></div>
        <?php
        } ?>
    <?php
    } else if ($userdata->idGrup == 'JBT01' || $userdata->idGrup == 'JBT02') {
    ?>
        <!-- <div class="row">
            <h1>
                <center>RUANG KERTAWIJAYA</center>
            </h1>
            <br>
        </div> -->

        <!-- <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 class="tagihan" data-a-sign="Rp. " data-a-dec="," data-a-sep="."><?php $decodeBulan = json_decode($bulan);
                                                                                            echo $decodeBulan[$minMonth]; ?></h3>
                    <p>Tagihan pelanggan bulan ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $pelanggan; ?> Pelanggan</h3>
                    <p>Terdaftar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="splide" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <!-- RUANG TRIBHUWANA -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG TRIBHUWANA</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b id="jumlahBedRU001">TERISI: <?= $ruangRU001terisi->jumlah; ?>, KOSONG: <?= $ruangRU001kosong->jumlah; ?></b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="box box-warning">
                                                <div class="box-header">
                                                    <center>
                                                        <h2>VVIP</h2>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="col-sm-6">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>TRBW-01</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001001->status == 'kosong') ? 'green' : (($bedBD001001001->status == 'terisi') ? 'purple' : (($bedBD001001001->status == 'perbaikan') ? 'yellow' : (($bedBD001001001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001001" id="BD001001001"><?php echo ($bedBD001001001->status == 'kosong') ? 'Kosong' : (($bedBD001001001->status == 'terisi') ? 'Terisi' : (($bedBD001001001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>TRBW-02</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001002->status == 'kosong') ? 'green' : (($bedBD001001002->status == 'terisi') ? 'purple' : (($bedBD001001002->status == 'perbaikan') ? 'yellow' : (($bedBD001001002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001002" id="BD001001002"><?php echo ($bedBD001001002->status == 'kosong') ? 'Kosong' : (($bedBD001001002->status == 'terisi') ? 'Terisi' : (($bedBD001001002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>TRBW-03</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001003->status == 'kosong') ? 'green' : (($bedBD001001003->status == 'terisi') ? 'purple' : (($bedBD001001003->status == 'perbaikan') ? 'yellow' : (($bedBD001001003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001003" id="BD001001003"><?php echo ($bedBD001001003->status == 'kosong') ? 'Kosong' : (($bedBD001001003->status == 'terisi') ? 'Terisi' : (($bedBD001001003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>TRBW-04</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001004->status == 'kosong') ? 'green' : (($bedBD001001004->status == 'terisi') ? 'purple' : (($bedBD001001004->status == 'perbaikan') ? 'yellow' : (($bedBD001001004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001004" id="BD001001004"><?php echo ($bedBD001001004->status == 'kosong') ? 'Kosong' : (($bedBD001001004->status == 'terisi') ? 'Terisi' : (($bedBD001001004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="box box-warning">
                                                <div class="box-header">
                                                    <center>
                                                        <h2>VIP</h2>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-1"></div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-09</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002001->status == 'kosong') ? 'green' : (($bedBD001002001->status == 'terisi') ? 'purple' : (($bedBD001002001->status == 'perbaikan') ? 'yellow' : (($bedBD001002001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002001" id="BD001002001"><?php echo ($bedBD001002001->status == 'kosong') ? 'Kosong' : (($bedBD001002001->status == 'terisi') ? 'Terisi' : (($bedBD001002001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-11</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002002->status == 'kosong') ? 'green' : (($bedBD001002002->status == 'terisi') ? 'purple' : (($bedBD001002002->status == 'perbaikan') ? 'yellow' : (($bedBD001002002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002002" id="BD001002002"><?php echo ($bedBD001002002->status == 'kosong') ? 'Kosong' : (($bedBD001002002->status == 'terisi') ? 'Terisi' : (($bedBD001002002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-13</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002003->status == 'kosong') ? 'green' : (($bedBD001002003->status == 'terisi') ? 'purple' : (($bedBD001002003->status == 'perbaikan') ? 'yellow' : (($bedBD001002003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002003" id="BD001002003"><?php echo ($bedBD001002003->status == 'kosong') ? 'Kosong' : (($bedBD001002003->status == 'terisi') ? 'Terisi' : (($bedBD001002003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-15</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002004->status == 'kosong') ? 'green' : (($bedBD001002004->status == 'terisi') ? 'purple' : (($bedBD001002004->status == 'perbaikan') ? 'yellow' : (($bedBD001002004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002004" id="BD001002004"><?php echo ($bedBD001002004->status == 'kosong') ? 'Kosong' : (($bedBD001002004->status == 'terisi') ? 'Terisi' : (($bedBD001002004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-17</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002005->status == 'kosong') ? 'green' : (($bedBD001002005->status == 'terisi') ? 'purple' : (($bedBD001002005->status == 'perbaikan') ? 'yellow' : (($bedBD001002005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002005" id="BD001002005"><?php echo ($bedBD001002005->status == 'kosong') ? 'Kosong' : (($bedBD001002005->status == 'terisi') ? 'Terisi' : (($bedBD001002005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-1"></div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-10</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002006->status == 'kosong') ? 'green' : (($bedBD001002006->status == 'terisi') ? 'purple' : (($bedBD001002006->status == 'perbaikan') ? 'yellow' : (($bedBD001002006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002006" id="BD001002006"><?php echo ($bedBD001002006->status == 'kosong') ? 'Kosong' : (($bedBD001002006->status == 'terisi') ? 'Terisi' : (($bedBD001002006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-12</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002007->status == 'kosong') ? 'green' : (($bedBD001002007->status == 'terisi') ? 'purple' : (($bedBD001002007->status == 'perbaikan') ? 'yellow' : (($bedBD001002007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002007" id="BD001002007"><?php echo ($bedBD001002007->status == 'kosong') ? 'Kosong' : (($bedBD001002007->status == 'terisi') ? 'Terisi' : (($bedBD001002007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-14</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002008->status == 'kosong') ? 'green' : (($bedBD001002008->status == 'terisi') ? 'purple' : (($bedBD001002008->status == 'perbaikan') ? 'yellow' : (($bedBD001002008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002008" id="BD001002008"><?php echo ($bedBD001002008->status == 'kosong') ? 'Kosong' : (($bedBD001002008->status == 'terisi') ? 'Terisi' : (($bedBD001002008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-16</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002009->status == 'kosong') ? 'green' : (($bedBD001002009->status == 'terisi') ? 'purple' : (($bedBD001002009->status == 'perbaikan') ? 'yellow' : (($bedBD001002009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002009" id="BD001002009"><?php echo ($bedBD001002009->status == 'kosong') ? 'Kosong' : (($bedBD001002009->status == 'terisi') ? 'Terisi' : (($bedBD001002009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="box">
                                                                <div class="box-header">
                                                                    <h4>
                                                                        <center>TRBW-18</center>
                                                                    </h4>
                                                                </div>
                                                                <div class="box-body">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002010->status == 'kosong') ? 'green' : (($bedBD001002010->status == 'terisi') ? 'purple' : (($bedBD001002010->status == 'perbaikan') ? 'yellow' : (($bedBD001002010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002010" id="BD001002010"><?php echo ($bedBD001002010->status == 'kosong') ? 'Kosong' : (($bedBD001002010->status == 'terisi') ? 'Terisi' : (($bedBD001002010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    // $k = 1;
                                    //foreach ($kamar as $km) { 
                                    ?>
                                    <!-- <div class="col-lg-1 col-xs-1">
                                            <div class="small-box bg-<?php echo ($km['Terpakai'] == 'Y') ? 'red' : 'aqua'; ?>">
                                                <div class="inner">
                                                    <h2>
                                                        <center><?= $km['KodeUnit']; ?>-<?= $km['Bed']; ?></center>
                                                    </h2>
                                                    <div class="form-group">
                                                        <div class="form-inline">
                                                            <button class="btn btn-success">o</button>
                                                        </div>
                                                        <div class="form-inline">
                                                            <button class="btn btn-warning">!</button>
                                                        </div>
                                                        <div class="form-inline">
                                                            <button class="btn btn-danger">x</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <?php //$k++;
                                    //} 
                                    ?>
                                </li>
                                <!-- RUANG RADEN WIJAYA -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG RADEN WIJAYA</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 7, KOSONG: 8</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="box box-warning">
                                            <div class="box-header">
                                                <center>
                                                    <h2>VIP</h2>
                                                </center>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-01</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-03</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-05</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-07</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-09</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-11</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-13</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-15</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-1" style="width: 12.499999995%"></div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-02</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-04</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-06</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-08</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-10</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-12</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-14</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG KENCONO WUNGU -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG KENCONO WUNGU</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 11, KOSONG: 19</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class="box box-success">
                                            <div class="box-header">
                                                <center>
                                                    <h2>KELAS 1</h2>
                                                </center>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-01</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-02</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-03</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-04</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-05</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-06</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-07</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-08</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-09</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-10</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-11</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-12</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-red btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-13</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-14</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="width: 12.499999995%">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>KWG-15</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box bg-aqua btn-block" style="height: 50px;"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG HAYAM WURUK -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG HAYAM WURUK</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 13, KOSONG: 20</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-01</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-6"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="width: 12.499999995%">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-03</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                            <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="width: 12.499999995%">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-05</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                            <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-07</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-09</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1" style="width: 12.499999995%"></div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="width: 12.499999995%">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-04</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                            <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-06</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>HWK-08</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG JAYANEGARA -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG JAYANEGARA (ISOLASI COVID)</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 3, KOSONG: 11</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI COVID JAYANEGARA</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>ISO-JYN-03</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-5">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI COVID JAYANEGARA</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>ISO-JYN-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-4">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-4">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="box box-danger" style="height: 260px;">
                                                <div class="box-body">
                                                    <div style="margin-top: 100px; margin-bottom: auto;">
                                                        <center>
                                                            <h2>
                                                                RUANG ICU (ISOLASI COVID)
                                                            </h2>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI COVID JAYANEGARA</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>ISO-JYN-01</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-6">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-6">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG KERTAWIJAYA -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG KERTAWIJAYA</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 3, KOSONG: 11</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI (DEWASA)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KWJ-06</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3 (DEWASA)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KWJ-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2 (DEWASA)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KWJ-03</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI (ANAK)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KWJ-06</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3 (ANAK)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KWJ-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2 (ANAK)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KWJ-03</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG KERTABHUMI -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG KERTABHUMI</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 14, KOSONG: 15</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2 (L)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-01</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-03</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-04</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-05</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2 (P)</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-09</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-08</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>KTBM-07</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG GAYATRI -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG GAYATRI</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 5, KOSONG: 14</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 2</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>GYTR-04</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-4">
                                            <div class="box" style="height: 220px;">
                                                <div class="box-body">
                                                    <div style="margin-top: 75px; margin-bottom: auto;">
                                                        <center>
                                                            <h3>
                                                                RUANG PERINATAL
                                                            </h3>
                                                            <h4>
                                                                PRNT-01
                                                            </h4>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>GYTR-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="box box-success">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 1</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>GYTR-01</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3">
                                            <div class="box box-danger" style="height: 220px;">
                                                <div class="box-body">
                                                    <div style="margin-top: 60px; margin-bottom: auto;">
                                                        <center>
                                                            <h3>
                                                                RUANG PERINATAL (ISOLASI COVID)
                                                            </h3>
                                                            <h4>
                                                                PRNT-02
                                                            </h4>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>GYTR-03</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG PERINATAL -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG PERINATAL</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 3, KOSONG: 11</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="box box-primary" style="height: 170px;">
                                                <div class="box-body">
                                                    <div style="margin-top: 33px; margin-bottom: auto;">
                                                        <center>
                                                            <h3>
                                                                RUANG GAYATRI
                                                            </h3>
                                                            <h4>
                                                                GYTR-04
                                                            </h4>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-4">
                                            <div class="box">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>KELAS 3</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>PRNT-01</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box" style="height: 220px;">
                                                <div class="box-body">
                                                    <div style="margin-top: 75px; margin-bottom: auto;">
                                                        <center>
                                                            <h3>
                                                                RUANG GAYATRI
                                                            </h3>
                                                            <h4>
                                                                GYTR-02
                                                            </h4>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="box box-success" style="height: 220px;">
                                                <div class="box-body">
                                                    <div style="margin-top: 60px; margin-bottom: auto;">
                                                        <center>
                                                            <h3>
                                                                RUANG GAYATRI
                                                            </h3>
                                                            <h4>
                                                                GYTR-01
                                                            </h4>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-3">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI COVID PERINATAL</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>PRNT-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box" style="height: 220px;">
                                                <div class="box-body">
                                                    <div style="margin-top: 70px; margin-bottom: auto;">
                                                        <center>
                                                            <h3>
                                                                RUANG GAYATRI
                                                            </h3>
                                                            <h4>
                                                                GYTR-03
                                                            </h4>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG ICU, ICCU, HCU, PICU -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG HCU, ICU, ICCU, PICU</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 6, KOSONG: 6</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h3>HCU</h3>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h3>ICU</h3>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h3>ICCU</h3>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h3>PICU</h3>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box bg-red btn-block" style="height: 30px;">Terisi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG ISOLASI COVID ICU -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG ICU (ISOLASI COVID)</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 0, KOSONG: 8</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">
                                            <div class="box box-danger" style="height: 200px;">
                                                <div style="margin-top: 78px; margin-bottom: auto;">
                                                    <center>
                                                        <h4>
                                                            RUANG JAYANEGARA (ISOLASI COVID)
                                                        </h4>
                                                        <h5>
                                                            ISO-JYN-03
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-5">
                                            <div class="box box-danger" style="height: 270px;">
                                                <div style="margin-top: 110px; margin-bottom: auto;">
                                                    <center>
                                                        <h4>
                                                            RUANG JAYANEGARA (ISOLASI COVID)
                                                        </h4>
                                                        <h5>
                                                            ISO-JYN-02
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>ISOLASI COVID ICU</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>ISO-ICU-01</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">
                                            <div class="box box-danger" style="height: 260px;">
                                                <div style="margin-top: 110px; margin-bottom: auto;">
                                                    <center>
                                                        <h4>
                                                            RUANG JAYANEGARA (ISOLASI COVID)
                                                        </h4>
                                                        <h5>
                                                            ISO-JYN-01
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- RUANG NICU -->
                                <li class="splide__slide">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1>
                                                <center>RUANG NICU</center>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4>
                                                <center><b>TERISI: 2, KOSONG: 6</b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-4">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>NICU NON INFEKSI</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>NICU-01</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>NICU INTERMEDIATE</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>NICU-02</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-red btn-block" style="height: 50px;">Terisi</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>NICU INFEKSI</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>NICU-03</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-8">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-2">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    <center>
                                                        <h4>NICU INFEKSI</h4>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>NICU-04</h5>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-8">
                                                                    <button class="small-box bg-aqua btn-block" style="height: 50px;">Kosong</button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xs-5"></div>
                    <div class="col-lg-1 col-xs-1">
                        <div style="width:20px; height:20px; background-color: #03B0D8;">
                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kosong</h4>
                        </div>
                    </div>
                    <div class="col-lg-1 col-xs-1">
                        <div style="width:20px; height:20px; background-color: #DD4B39;">
                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terisi</h4>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xs-5"></div>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php $decodeBulan = json_decode($bulan);
                        echo $decodeBulan[$minMonth]; ?> m<sup>3</sup></h3>
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

    <?php if ($userdata->status == 'terkunci') { ?>
        <?php if ($userdata->metode == 'tunai') { ?>
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
    <!-- <div class="col-lg-12 col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-area-chart"></i>
                <h3 class="box-title"><?php if ($userdata->idGrup == 'JBT04') {
                                            echo 'Statistik Pembayaran Anda';
                                        } else if ($userdata->idGrup == 'JBT01' || $userdata->idGrup == 'JBT02') {
                                            echo 'Statistik Pembayaran Pelanggan';
                                        } else {
                                            echo 'Statistik Penggunaan Biogas Pelanggan';
                                        } ?></h3>

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
    </div> -->
<?php } ?>
</div>

<?php if ($userdata->status != 'terkunci') { ?>
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
    </script>
<?php } ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.tagihan').autoNumeric('init');
        new Splide('#splide', {
            type: 'loop',
            autoplay: true,
        }).mount();
    });
</script>