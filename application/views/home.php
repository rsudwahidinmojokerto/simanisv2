<div id="tempat-modal"></div>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="splide" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php if (($userdata->id_ruang) == 'RU001' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001001->status == 'kosong') ? 'green' : (($bedBD001001001->status == 'terisi') ? 'purple' : (($bedBD001001001->status == 'perbaikan') ? 'yellow' : (($bedBD001001001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001001" id="BD001001001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001001001->status == 'kosong') ? 'Kosong' : (($bedBD001001001->status == 'terisi') ? 'Terisi' : (($bedBD001001001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001002->status == 'kosong') ? 'green' : (($bedBD001001002->status == 'terisi') ? 'purple' : (($bedBD001001002->status == 'perbaikan') ? 'yellow' : (($bedBD001001002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001002" id="BD001001002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001001002->status == 'kosong') ? 'Kosong' : (($bedBD001001002->status == 'terisi') ? 'Terisi' : (($bedBD001001002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001003->status == 'kosong') ? 'green' : (($bedBD001001003->status == 'terisi') ? 'purple' : (($bedBD001001003->status == 'perbaikan') ? 'yellow' : (($bedBD001001003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001003" id="BD001001003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001001003->status == 'kosong') ? 'Kosong' : (($bedBD001001003->status == 'terisi') ? 'Terisi' : (($bedBD001001003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001001004->status == 'kosong') ? 'green' : (($bedBD001001004->status == 'terisi') ? 'purple' : (($bedBD001001004->status == 'perbaikan') ? 'yellow' : (($bedBD001001004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001001004" id="BD001001004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001001004->status == 'kosong') ? 'Kosong' : (($bedBD001001004->status == 'terisi') ? 'Terisi' : (($bedBD001001004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001001004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002001->status == 'kosong') ? 'green' : (($bedBD001002001->status == 'terisi') ? 'purple' : (($bedBD001002001->status == 'perbaikan') ? 'yellow' : (($bedBD001002001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002001" id="BD001002001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002001->status == 'kosong') ? 'Kosong' : (($bedBD001002001->status == 'terisi') ? 'Terisi' : (($bedBD001002001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002002->status == 'kosong') ? 'green' : (($bedBD001002002->status == 'terisi') ? 'purple' : (($bedBD001002002->status == 'perbaikan') ? 'yellow' : (($bedBD001002002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002002" id="BD001002002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002002->status == 'kosong') ? 'Kosong' : (($bedBD001002002->status == 'terisi') ? 'Terisi' : (($bedBD001002002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002003->status == 'kosong') ? 'green' : (($bedBD001002003->status == 'terisi') ? 'purple' : (($bedBD001002003->status == 'perbaikan') ? 'yellow' : (($bedBD001002003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002003" id="BD001002003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002003->status == 'kosong') ? 'Kosong' : (($bedBD001002003->status == 'terisi') ? 'Terisi' : (($bedBD001002003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002004->status == 'kosong') ? 'green' : (($bedBD001002004->status == 'terisi') ? 'purple' : (($bedBD001002004->status == 'perbaikan') ? 'yellow' : (($bedBD001002004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002004" id="BD001002004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002004->status == 'kosong') ? 'Kosong' : (($bedBD001002004->status == 'terisi') ? 'Terisi' : (($bedBD001002004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002005->status == 'kosong') ? 'green' : (($bedBD001002005->status == 'terisi') ? 'purple' : (($bedBD001002005->status == 'perbaikan') ? 'yellow' : (($bedBD001002005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002005" id="BD001002005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002005->status == 'kosong') ? 'Kosong' : (($bedBD001002005->status == 'terisi') ? 'Terisi' : (($bedBD001002005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002006->status == 'kosong') ? 'green' : (($bedBD001002006->status == 'terisi') ? 'purple' : (($bedBD001002006->status == 'perbaikan') ? 'yellow' : (($bedBD001002006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002006" id="BD001002006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002006->status == 'kosong') ? 'Kosong' : (($bedBD001002006->status == 'terisi') ? 'Terisi' : (($bedBD001002006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002007->status == 'kosong') ? 'green' : (($bedBD001002007->status == 'terisi') ? 'purple' : (($bedBD001002007->status == 'perbaikan') ? 'yellow' : (($bedBD001002007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002007" id="BD001002007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002007->status == 'kosong') ? 'Kosong' : (($bedBD001002007->status == 'terisi') ? 'Terisi' : (($bedBD001002007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002008->status == 'kosong') ? 'green' : (($bedBD001002008->status == 'terisi') ? 'purple' : (($bedBD001002008->status == 'perbaikan') ? 'yellow' : (($bedBD001002008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002008" id="BD001002008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002008->status == 'kosong') ? 'Kosong' : (($bedBD001002008->status == 'terisi') ? 'Terisi' : (($bedBD001002008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002009->status == 'kosong') ? 'green' : (($bedBD001002009->status == 'terisi') ? 'purple' : (($bedBD001002009->status == 'perbaikan') ? 'yellow' : (($bedBD001002009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002009" id="BD001002009" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002009->status == 'kosong') ? 'Kosong' : (($bedBD001002009->status == 'terisi') ? 'Terisi' : (($bedBD001002009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD001002010->status == 'kosong') ? 'green' : (($bedBD001002010->status == 'terisi') ? 'purple' : (($bedBD001002010->status == 'perbaikan') ? 'yellow' : (($bedBD001002010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD001002010" id="BD001002010" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD001002010->status == 'kosong') ? 'Kosong' : (($bedBD001002010->status == 'terisi') ? 'Terisi' : (($bedBD001002010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD001002010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU002' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU002">TERISI: <?= $ruangRU002terisi->jumlah; ?>, KOSONG: <?= $ruangRU002kosong->jumlah; ?></b></center>
                                            </h4>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-5">
                                        <div class="box box-warning">
                                            <div class="box-header">
                                                <center>
                                                    <h2>VIP</h2>
                                                </center>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-01</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002002001->status == 'kosong') ? 'green' : (($bedBD002002001->status == 'terisi') ? 'purple' : (($bedBD002002001->status == 'perbaikan') ? 'yellow' : (($bedBD002002001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002002001" id="BD002002001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD002002001->status == 'kosong') ? 'Kosong' : (($bedBD002002001->status == 'terisi') ? 'Terisi' : (($bedBD002002001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD002002001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-03</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002002003->status == 'kosong') ? 'green' : (($bedBD002002003->status == 'terisi') ? 'purple' : (($bedBD002002003->status == 'perbaikan') ? 'yellow' : (($bedBD002002003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002002003" id="BD002002003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD002002003->status == 'kosong') ? 'Kosong' : (($bedBD002002003->status == 'terisi') ? 'Terisi' : (($bedBD002002003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD002002003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-05</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002002005->status == 'kosong') ? 'green' : (($bedBD002002005->status == 'terisi') ? 'purple' : (($bedBD002002005->status == 'perbaikan') ? 'yellow' : (($bedBD002002005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002002005" id="BD002002005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD002002005->status == 'kosong') ? 'Kosong' : (($bedBD002002005->status == 'terisi') ? 'Terisi' : (($bedBD002002005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD002002005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-07</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002002007->status == 'kosong') ? 'green' : (($bedBD002002007->status == 'terisi') ? 'purple' : (($bedBD002002007->status == 'perbaikan') ? 'yellow' : (($bedBD002002007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002002007" id="BD002002007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD002002007->status == 'kosong') ? 'Kosong' : (($bedBD002002007->status == 'terisi') ? 'Terisi' : (($bedBD002002007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD002002007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"></div>
                                                    <div class="col-sm-3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-02</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002002002->status == 'kosong') ? 'green' : (($bedBD002002002->status == 'terisi') ? 'purple' : (($bedBD002002002->status == 'perbaikan') ? 'yellow' : (($bedBD002002002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002002002" id="BD002002002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD002002002->status == 'kosong') ? 'Kosong' : (($bedBD002002002->status == 'terisi') ? 'Terisi' : (($bedBD002002002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD002002002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-04</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002002004->status == 'kosong') ? 'green' : (($bedBD002002004->status == 'terisi') ? 'purple' : (($bedBD002002004->status == 'perbaikan') ? 'yellow' : (($bedBD002002004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002002004" id="BD002002004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD002002004->status == 'kosong') ? 'Kosong' : (($bedBD002002004->status == 'terisi') ? 'Terisi' : (($bedBD002002004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD002002004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-06</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002002006->status == 'kosong') ? 'green' : (($bedBD002002006->status == 'terisi') ? 'purple' : (($bedBD002002006->status == 'perbaikan') ? 'yellow' : (($bedBD002002006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002002006" id="BD002002006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD002002006->status == 'kosong') ? 'Kosong' : (($bedBD002002006->status == 'terisi') ? 'Terisi' : (($bedBD002002006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD002002006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="box box-success">
                                            <div class="box-header">
                                                <center>
                                                    <h2>KELAS 1</h2>
                                                </center>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-09</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004003->status == 'kosong') ? 'green' : (($bedBD002004003->status == 'terisi') ? 'purple' : (($bedBD002004003->status == 'perbaikan') ? 'yellow' : (($bedBD002004003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004003" id="BD002004003" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004004->status == 'kosong') ? 'green' : (($bedBD002004004->status == 'terisi') ? 'purple' : (($bedBD002004004->status == 'perbaikan') ? 'yellow' : (($bedBD002004004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004004" id="BD002004004" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-11</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004007->status == 'kosong') ? 'green' : (($bedBD002004007->status == 'terisi') ? 'purple' : (($bedBD002004007->status == 'perbaikan') ? 'yellow' : (($bedBD002004007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004007" id="BD002004007" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004008->status == 'kosong') ? 'green' : (($bedBD002004008->status == 'terisi') ? 'purple' : (($bedBD002004008->status == 'perbaikan') ? 'yellow' : (($bedBD002004008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004008" id="BD002004008" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-13</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004011->status == 'kosong') ? 'green' : (($bedBD002004011->status == 'terisi') ? 'purple' : (($bedBD002004011->status == 'perbaikan') ? 'yellow' : (($bedBD002004011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004011" id="BD002004011" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004012->status == 'kosong') ? 'green' : (($bedBD002004012->status == 'terisi') ? 'purple' : (($bedBD002004012->status == 'perbaikan') ? 'yellow' : (($bedBD002004012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004012" id="BD002004012" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-08</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004001->status == 'kosong') ? 'green' : (($bedBD002004001->status == 'terisi') ? 'purple' : (($bedBD002004001->status == 'perbaikan') ? 'yellow' : (($bedBD002004001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004001" id="BD002004001" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004002->status == 'kosong') ? 'green' : (($bedBD002004002->status == 'terisi') ? 'purple' : (($bedBD002004002->status == 'perbaikan') ? 'yellow' : (($bedBD002004002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004002" id="BD002004002" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-10</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004005->status == 'kosong') ? 'green' : (($bedBD002004005->status == 'terisi') ? 'purple' : (($bedBD002004005->status == 'perbaikan') ? 'yellow' : (($bedBD002004005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004005" id="BD002004005" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004006->status == 'kosong') ? 'green' : (($bedBD002004006->status == 'terisi') ? 'purple' : (($bedBD002004006->status == 'perbaikan') ? 'yellow' : (($bedBD002004006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004006" id="BD002004006" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-12</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004009->status == 'kosong') ? 'green' : (($bedBD002004009->status == 'terisi') ? 'purple' : (($bedBD002004009->status == 'perbaikan') ? 'yellow' : (($bedBD002004009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004009" id="BD002004009" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004010->status == 'kosong') ? 'green' : (($bedBD002004010->status == 'terisi') ? 'purple' : (($bedBD002004010->status == 'perbaikan') ? 'yellow' : (($bedBD002004010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002004010" id="BD002004010" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                </div>
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
                                                    <h2>ISO REG</h2>
                                                </center>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-15</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002015003->status == 'kosong') ? 'green' : (($bedBD002015003->status == 'terisi') ? 'purple' : (($bedBD002015003->status == 'perbaikan') ? 'yellow' : (($bedBD002015003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002015003" id="BD002015003" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002015004->status == 'kosong') ? 'green' : (($bedBD002015004->status == 'terisi') ? 'purple' : (($bedBD002015004->status == 'perbaikan') ? 'yellow' : (($bedBD002015004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002015004" id="BD002015004" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h4>
                                                                    <center>RWJ-14</center>
                                                                </h4>
                                                            </div>
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002015001->status == 'kosong') ? 'green' : (($bedBD002015001->status == 'terisi') ? 'purple' : (($bedBD002015001->status == 'perbaikan') ? 'yellow' : (($bedBD002015001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002015001" id="BD002015001" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002015002->status == 'kosong') ? 'green' : (($bedBD002015002->status == 'terisi') ? 'purple' : (($bedBD002015002->status == 'perbaikan') ? 'yellow' : (($bedBD002015002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD002015002" id="BD002015002" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU003' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU003">TERISI: <?= $ruangRU003terisi->jumlah; ?>, KOSONG: <?= $ruangRU003kosong->jumlah; ?></b></center>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004001->status == 'kosong') ? 'green' : (($bedBD003004001->status == 'terisi') ? 'purple' : (($bedBD003004001->status == 'perbaikan') ? 'yellow' : (($bedBD003004001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004001" id="BD003004001" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004002->status == 'kosong') ? 'green' : (($bedBD003004002->status == 'terisi') ? 'purple' : (($bedBD003004002->status == 'perbaikan') ? 'yellow' : (($bedBD003004002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004002" id="BD003004002" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD002004003->status == 'kosong') ? 'green' : (($bedBD002004003->status == 'terisi') ? 'purple' : (($bedBD002004003->status == 'perbaikan') ? 'yellow' : (($bedBD002004003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004003" id="BD003004003" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004004->status == 'kosong') ? 'green' : (($bedBD003004004->status == 'terisi') ? 'purple' : (($bedBD003004004->status == 'perbaikan') ? 'yellow' : (($bedBD003004004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004004" id="BD003004004" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004005->status == 'kosong') ? 'green' : (($bedBD003004005->status == 'terisi') ? 'purple' : (($bedBD003004005->status == 'perbaikan') ? 'yellow' : (($bedBD003004005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004005" id="BD003004005" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004006->status == 'kosong') ? 'green' : (($bedBD003004006->status == 'terisi') ? 'purple' : (($bedBD003004006->status == 'perbaikan') ? 'yellow' : (($bedBD003004006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004006" id="BD003004006" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004007->status == 'kosong') ? 'green' : (($bedBD003004007->status == 'terisi') ? 'purple' : (($bedBD003004007->status == 'perbaikan') ? 'yellow' : (($bedBD003004007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004007" id="BD003004007" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004008->status == 'kosong') ? 'green' : (($bedBD003004008->status == 'terisi') ? 'purple' : (($bedBD003004008->status == 'perbaikan') ? 'yellow' : (($bedBD003004008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004008" id="BD003004008" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004009->status == 'kosong') ? 'green' : (($bedBD003004009->status == 'terisi') ? 'purple' : (($bedBD003004009->status == 'perbaikan') ? 'yellow' : (($bedBD003004009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004009" id="BD003004009" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004010->status == 'kosong') ? 'green' : (($bedBD003004010->status == 'terisi') ? 'purple' : (($bedBD003004010->status == 'perbaikan') ? 'yellow' : (($bedBD003004010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004010" id="BD003004010" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004011->status == 'kosong') ? 'green' : (($bedBD003004011->status == 'terisi') ? 'purple' : (($bedBD003004011->status == 'perbaikan') ? 'yellow' : (($bedBD003004011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004011" id="BD003004011" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004012->status == 'kosong') ? 'green' : (($bedBD003004012->status == 'terisi') ? 'purple' : (($bedBD003004012->status == 'perbaikan') ? 'yellow' : (($bedBD003004012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004012" id="BD003004012" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004013->status == 'kosong') ? 'green' : (($bedBD003004013->status == 'terisi') ? 'purple' : (($bedBD003004013->status == 'perbaikan') ? 'yellow' : (($bedBD003004013->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004013" id="BD003004013" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004014->status == 'kosong') ? 'green' : (($bedBD003004014->status == 'terisi') ? 'purple' : (($bedBD003004014->status == 'perbaikan') ? 'yellow' : (($bedBD003004014->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004014" id="BD003004014" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004015->status == 'kosong') ? 'green' : (($bedBD003004015->status == 'terisi') ? 'purple' : (($bedBD003004015->status == 'perbaikan') ? 'yellow' : (($bedBD003004015->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004015" id="BD003004015" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004016->status == 'kosong') ? 'green' : (($bedBD003004016->status == 'terisi') ? 'purple' : (($bedBD003004016->status == 'perbaikan') ? 'yellow' : (($bedBD003004016->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004016" id="BD003004016" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004017->status == 'kosong') ? 'green' : (($bedBD003004017->status == 'terisi') ? 'purple' : (($bedBD003004017->status == 'perbaikan') ? 'yellow' : (($bedBD003004017->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004017" id="BD003004017" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004018->status == 'kosong') ? 'green' : (($bedBD003004018->status == 'terisi') ? 'purple' : (($bedBD003004018->status == 'perbaikan') ? 'yellow' : (($bedBD003004018->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004018" id="BD003004018" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004019->status == 'kosong') ? 'green' : (($bedBD003004019->status == 'terisi') ? 'purple' : (($bedBD003004019->status == 'perbaikan') ? 'yellow' : (($bedBD003004019->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004019" id="BD003004019" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004020->status == 'kosong') ? 'green' : (($bedBD003004020->status == 'terisi') ? 'purple' : (($bedBD003004020->status == 'perbaikan') ? 'yellow' : (($bedBD003004020->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004020" id="BD003004020" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004021->status == 'kosong') ? 'green' : (($bedBD003004021->status == 'terisi') ? 'purple' : (($bedBD003004021->status == 'perbaikan') ? 'yellow' : (($bedBD003004021->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004021" id="BD003004021" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004022->status == 'kosong') ? 'green' : (($bedBD003004022->status == 'terisi') ? 'purple' : (($bedBD003004022->status == 'perbaikan') ? 'yellow' : (($bedBD003004022->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004022" id="BD003004022" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004023->status == 'kosong') ? 'green' : (($bedBD003004023->status == 'terisi') ? 'purple' : (($bedBD003004023->status == 'perbaikan') ? 'yellow' : (($bedBD003004023->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004023" id="BD003004023" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004024->status == 'kosong') ? 'green' : (($bedBD003004024->status == 'terisi') ? 'purple' : (($bedBD003004024->status == 'perbaikan') ? 'yellow' : (($bedBD003004024->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004024" id="BD003004024" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004025->status == 'kosong') ? 'green' : (($bedBD003004025->status == 'terisi') ? 'purple' : (($bedBD003004025->status == 'perbaikan') ? 'yellow' : (($bedBD003004025->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004025" id="BD003004025" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004026->status == 'kosong') ? 'green' : (($bedBD003004026->status == 'terisi') ? 'purple' : (($bedBD003004026->status == 'perbaikan') ? 'yellow' : (($bedBD003004026->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004026" id="BD003004026" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004027->status == 'kosong') ? 'green' : (($bedBD003004027->status == 'terisi') ? 'purple' : (($bedBD003004027->status == 'perbaikan') ? 'yellow' : (($bedBD003004027->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004027" id="BD003004027" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004028->status == 'kosong') ? 'green' : (($bedBD003004028->status == 'terisi') ? 'purple' : (($bedBD003004028->status == 'perbaikan') ? 'yellow' : (($bedBD003004028->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004028" id="BD003004028" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004029->status == 'kosong') ? 'green' : (($bedBD003004029->status == 'terisi') ? 'purple' : (($bedBD003004029->status == 'perbaikan') ? 'yellow' : (($bedBD003004029->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004029" id="BD003004029" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD003004030->status == 'kosong') ? 'green' : (($bedBD003004030->status == 'terisi') ? 'purple' : (($bedBD003004030->status == 'perbaikan') ? 'yellow' : (($bedBD003004030->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD003004030" id="BD003004030" <?php if ($userdata == '') { ?> disabled <?php } ?>></button>
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
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU004' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU004">TERISI: <?= $ruangRU004terisi->jumlah; ?>, KOSONG: <?= $ruangRU004kosong->jumlah; ?></b></center>
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
                                                                    <!-- <div class="col-sm-6"> -->
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006001->status == 'kosong') ? 'green' : (($bedBD004006001->status == 'terisi') ? 'purple' : (($bedBD004006001->status == 'perbaikan') ? 'yellow' : (($bedBD004006001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006001" id="BD004006001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006001->status == 'kosong') ? 'Kosong' : (($bedBD004006001->status == 'terisi') ? 'Terisi' : (($bedBD004006001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                    <!-- </div> -->
                                                                    <!-- <button class="small-box bg-aqua btn-block" style="height: 30px;">Kosong</button> -->
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006002->status == 'kosong') ? 'green' : (($bedBD004006002->status == 'terisi') ? 'purple' : (($bedBD004006002->status == 'perbaikan') ? 'yellow' : (($bedBD004006002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006002" id="BD004006002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006002->status == 'kosong') ? 'Kosong' : (($bedBD004006002->status == 'terisi') ? 'Terisi' : (($bedBD004006002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006003->status == 'kosong') ? 'green' : (($bedBD004006003->status == 'terisi') ? 'purple' : (($bedBD004006003->status == 'perbaikan') ? 'yellow' : (($bedBD004006003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006003" id="BD004006003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006003->status == 'kosong') ? 'Kosong' : (($bedBD004006003->status == 'terisi') ? 'Terisi' : (($bedBD004006003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006004->status == 'kosong') ? 'green' : (($bedBD004006004->status == 'terisi') ? 'purple' : (($bedBD004006004->status == 'perbaikan') ? 'yellow' : (($bedBD004006004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006004" id="BD004006004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006004->status == 'kosong') ? 'Kosong' : (($bedBD004006004->status == 'terisi') ? 'Terisi' : (($bedBD004006004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006005->status == 'kosong') ? 'green' : (($bedBD004006005->status == 'terisi') ? 'purple' : (($bedBD004006005->status == 'perbaikan') ? 'yellow' : (($bedBD004006005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006005" id="BD004006005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006005->status == 'kosong') ? 'Kosong' : (($bedBD004006005->status == 'terisi') ? 'Terisi' : (($bedBD004006005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                            <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005001->status == 'kosong') ? 'green' : (($bedBD004005001->status == 'terisi') ? 'purple' : (($bedBD004005001->status == 'perbaikan') ? 'yellow' : (($bedBD004005001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005001" id="BD004005001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005001->status == 'kosong') ? 'Kosong' : (($bedBD004005001->status == 'terisi') ? 'Terisi' : (($bedBD004005001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005002->status == 'kosong') ? 'green' : (($bedBD004005002->status == 'terisi') ? 'purple' : (($bedBD004005002->status == 'perbaikan') ? 'yellow' : (($bedBD004005002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005002" id="BD004005002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005002->status == 'kosong') ? 'Kosong' : (($bedBD004005002->status == 'terisi') ? 'Terisi' : (($bedBD004005002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                            <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005003->status == 'kosong') ? 'green' : (($bedBD004005003->status == 'terisi') ? 'purple' : (($bedBD004005003->status == 'perbaikan') ? 'yellow' : (($bedBD004005003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005003" id="BD004005003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005003->status == 'kosong') ? 'Kosong' : (($bedBD004005003->status == 'terisi') ? 'Terisi' : (($bedBD004005003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005004->status == 'kosong') ? 'green' : (($bedBD004005004->status == 'terisi') ? 'purple' : (($bedBD004005004->status == 'perbaikan') ? 'yellow' : (($bedBD004005004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005004" id="BD004005004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005004->status == 'kosong') ? 'Kosong' : (($bedBD004005004->status == 'terisi') ? 'Terisi' : (($bedBD004005004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006006->status == 'kosong') ? 'green' : (($bedBD004006006->status == 'terisi') ? 'purple' : (($bedBD004006006->status == 'perbaikan') ? 'yellow' : (($bedBD004006006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006006" id="BD004006006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006006->status == 'kosong') ? 'Kosong' : (($bedBD004006006->status == 'terisi') ? 'Terisi' : (($bedBD004006006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006007->status == 'kosong') ? 'green' : (($bedBD004006007->status == 'terisi') ? 'purple' : (($bedBD004006007->status == 'perbaikan') ? 'yellow' : (($bedBD004006007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006007" id="BD004006007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006007->status == 'kosong') ? 'Kosong' : (($bedBD004006007->status == 'terisi') ? 'Terisi' : (($bedBD004006007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006008->status == 'kosong') ? 'green' : (($bedBD004006008->status == 'terisi') ? 'purple' : (($bedBD004006008->status == 'perbaikan') ? 'yellow' : (($bedBD004006008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006008" id="BD004006008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006008->status == 'kosong') ? 'Kosong' : (($bedBD004006008->status == 'terisi') ? 'Terisi' : (($bedBD004006008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006009->status == 'kosong') ? 'green' : (($bedBD004006009->status == 'terisi') ? 'purple' : (($bedBD004006009->status == 'perbaikan') ? 'yellow' : (($bedBD004006009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006009" id="BD004006009" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006009->status == 'kosong') ? 'Kosong' : (($bedBD004006009->status == 'terisi') ? 'Terisi' : (($bedBD004006009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006010->status == 'kosong') ? 'green' : (($bedBD004006010->status == 'terisi') ? 'purple' : (($bedBD004006010->status == 'perbaikan') ? 'yellow' : (($bedBD004006010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006010" id="BD004006010" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006010->status == 'kosong') ? 'Kosong' : (($bedBD004006010->status == 'terisi') ? 'Terisi' : (($bedBD004006010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006011->status == 'kosong') ? 'green' : (($bedBD004006011->status == 'terisi') ? 'purple' : (($bedBD004006011->status == 'perbaikan') ? 'yellow' : (($bedBD004006011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006011" id="BD004006011" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006011->status == 'kosong') ? 'Kosong' : (($bedBD004006011->status == 'terisi') ? 'Terisi' : (($bedBD004006011->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006011->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006012->status == 'kosong') ? 'green' : (($bedBD004006012->status == 'terisi') ? 'purple' : (($bedBD004006012->status == 'perbaikan') ? 'yellow' : (($bedBD004006012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006012" id="BD004006012" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006012->status == 'kosong') ? 'Kosong' : (($bedBD004006012->status == 'terisi') ? 'Terisi' : (($bedBD004006012->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006012->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006013->status == 'kosong') ? 'green' : (($bedBD004006013->status == 'terisi') ? 'purple' : (($bedBD004006013->status == 'perbaikan') ? 'yellow' : (($bedBD004006013->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006013" id="BD004006013" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006013->status == 'kosong') ? 'Kosong' : (($bedBD004006013->status == 'terisi') ? 'Terisi' : (($bedBD004006013->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006013->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006014->status == 'kosong') ? 'green' : (($bedBD004006014->status == 'terisi') ? 'purple' : (($bedBD004006014->status == 'perbaikan') ? 'yellow' : (($bedBD004006014->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006014" id="BD004006014" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006014->status == 'kosong') ? 'Kosong' : (($bedBD004006014->status == 'terisi') ? 'Terisi' : (($bedBD004006014->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006014->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006015->status == 'kosong') ? 'green' : (($bedBD004006015->status == 'terisi') ? 'purple' : (($bedBD004006015->status == 'perbaikan') ? 'yellow' : (($bedBD004006015->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006015" id="BD004006015" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006015->status == 'kosong') ? 'Kosong' : (($bedBD004006015->status == 'terisi') ? 'Terisi' : (($bedBD004006015->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006015->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006016->status == 'kosong') ? 'green' : (($bedBD004006016->status == 'terisi') ? 'purple' : (($bedBD004006016->status == 'perbaikan') ? 'yellow' : (($bedBD004006016->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006016" id="BD004006016" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006016->status == 'kosong') ? 'Kosong' : (($bedBD004006016->status == 'terisi') ? 'Terisi' : (($bedBD004006016->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006016->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006017->status == 'kosong') ? 'green' : (($bedBD004006017->status == 'terisi') ? 'purple' : (($bedBD004006017->status == 'perbaikan') ? 'yellow' : (($bedBD004006017->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006017" id="BD004006017" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006017->status == 'kosong') ? 'Kosong' : (($bedBD004006017->status == 'terisi') ? 'Terisi' : (($bedBD004006017->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006017->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006018->status == 'kosong') ? 'green' : (($bedBD004006018->status == 'terisi') ? 'purple' : (($bedBD004006018->status == 'perbaikan') ? 'yellow' : (($bedBD004006018->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006018" id="BD004006018" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006018->status == 'kosong') ? 'Kosong' : (($bedBD004006018->status == 'terisi') ? 'Terisi' : (($bedBD004006018->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006018->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006019->status == 'kosong') ? 'green' : (($bedBD004006019->status == 'terisi') ? 'purple' : (($bedBD004006019->status == 'perbaikan') ? 'yellow' : (($bedBD004006019->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006019" id="BD004006019" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006019->status == 'kosong') ? 'Kosong' : (($bedBD004006019->status == 'terisi') ? 'Terisi' : (($bedBD004006019->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006019->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006020->status == 'kosong') ? 'green' : (($bedBD004006020->status == 'terisi') ? 'purple' : (($bedBD004006020->status == 'perbaikan') ? 'yellow' : (($bedBD004006020->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006020" id="BD004006020" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006020->status == 'kosong') ? 'Kosong' : (($bedBD004006020->status == 'terisi') ? 'Terisi' : (($bedBD004006020->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006020->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                            <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005005->status == 'kosong') ? 'green' : (($bedBD004005005->status == 'terisi') ? 'purple' : (($bedBD004005005->status == 'perbaikan') ? 'yellow' : (($bedBD004005005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005005" id="BD004005005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005005->status == 'kosong') ? 'Kosong' : (($bedBD004005005->status == 'terisi') ? 'Terisi' : (($bedBD004005005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005006->status == 'kosong') ? 'green' : (($bedBD004005006->status == 'terisi') ? 'purple' : (($bedBD004005006->status == 'perbaikan') ? 'yellow' : (($bedBD004005006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005006" id="BD004005006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005006->status == 'kosong') ? 'Kosong' : (($bedBD004005006->status == 'terisi') ? 'Terisi' : (($bedBD004005006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006021->status == 'kosong') ? 'green' : (($bedBD004006021->status == 'terisi') ? 'purple' : (($bedBD004006021->status == 'perbaikan') ? 'yellow' : (($bedBD004006021->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006021" id="BD004006021" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006021->status == 'kosong') ? 'Kosong' : (($bedBD004006021->status == 'terisi') ? 'Terisi' : (($bedBD004006021->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006021->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006022->status == 'kosong') ? 'green' : (($bedBD004006022->status == 'terisi') ? 'purple' : (($bedBD004006022->status == 'perbaikan') ? 'yellow' : (($bedBD004006022->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006022" id="BD004006022" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006022->status == 'kosong') ? 'Kosong' : (($bedBD004006022->status == 'terisi') ? 'Terisi' : (($bedBD004006022->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006022->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006023->status == 'kosong') ? 'green' : (($bedBD004006023->status == 'terisi') ? 'purple' : (($bedBD004006023->status == 'perbaikan') ? 'yellow' : (($bedBD004006023->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006023" id="BD004006023" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006023->status == 'kosong') ? 'Kosong' : (($bedBD004006023->status == 'terisi') ? 'Terisi' : (($bedBD004006023->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006023->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006024->status == 'kosong') ? 'green' : (($bedBD004006024->status == 'terisi') ? 'purple' : (($bedBD004006024->status == 'perbaikan') ? 'yellow' : (($bedBD004006024->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006024" id="BD004006024" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006024->status == 'kosong') ? 'Kosong' : (($bedBD004006024->status == 'terisi') ? 'Terisi' : (($bedBD004006024->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006024->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004006025->status == 'kosong') ? 'green' : (($bedBD004006025->status == 'terisi') ? 'purple' : (($bedBD004006025->status == 'perbaikan') ? 'yellow' : (($bedBD004006025->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004006025" id="BD004006025" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004006025->status == 'kosong') ? 'Kosong' : (($bedBD004006025->status == 'terisi') ? 'Terisi' : (($bedBD004006025->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004006025->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005007->status == 'kosong') ? 'green' : (($bedBD004005007->status == 'terisi') ? 'purple' : (($bedBD004005007->status == 'perbaikan') ? 'yellow' : (($bedBD004005007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005007" id="BD004005007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005007->status == 'kosong') ? 'Kosong' : (($bedBD004005007->status == 'terisi') ? 'Terisi' : (($bedBD004005007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD004005008->status == 'kosong') ? 'green' : (($bedBD004005008->status == 'terisi') ? 'purple' : (($bedBD004005008->status == 'perbaikan') ? 'yellow' : (($bedBD004005008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD004005008" id="BD004005008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD004005008->status == 'kosong') ? 'Kosong' : (($bedBD004005008->status == 'terisi') ? 'Terisi' : (($bedBD004005008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD004005008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU005' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU005">TERISI: <?= $ruangRU005terisi->jumlah; ?>, KOSONG: <?= $ruangRU005kosong->jumlah; ?></b></center>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015001->status == 'kosong') ? 'green' : (($bedBD005015001->status == 'terisi') ? 'purple' : (($bedBD005015001->status == 'perbaikan') ? 'yellow' : (($bedBD005015001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015001" id="BD005015001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015001->status == 'kosong') ? 'Kosong' : (($bedBD005015001->status == 'terisi') ? 'Terisi' : (($bedBD005015001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015002->status == 'kosong') ? 'green' : (($bedBD005015002->status == 'terisi') ? 'purple' : (($bedBD005015002->status == 'perbaikan') ? 'yellow' : (($bedBD005015002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015002" id="BD005015002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015002->status == 'kosong') ? 'Kosong' : (($bedBD005015002->status == 'terisi') ? 'Terisi' : (($bedBD005015002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015003->status == 'kosong') ? 'green' : (($bedBD005015003->status == 'terisi') ? 'purple' : (($bedBD005015003->status == 'perbaikan') ? 'yellow' : (($bedBD005015003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015003" id="BD005015003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015003->status == 'kosong') ? 'Kosong' : (($bedBD005015003->status == 'terisi') ? 'Terisi' : (($bedBD005015003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015004->status == 'kosong') ? 'green' : (($bedBD005015004->status == 'terisi') ? 'purple' : (($bedBD005015004->status == 'perbaikan') ? 'yellow' : (($bedBD005015004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015004" id="BD005015004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015004->status == 'kosong') ? 'Kosong' : (($bedBD005015004->status == 'terisi') ? 'Terisi' : (($bedBD005015004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015005->status == 'kosong') ? 'green' : (($bedBD005015005->status == 'terisi') ? 'purple' : (($bedBD005015005->status == 'perbaikan') ? 'yellow' : (($bedBD005015005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015005" id="BD005015005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015005->status == 'kosong') ? 'Kosong' : (($bedBD005015005->status == 'terisi') ? 'Terisi' : (($bedBD005015005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015006->status == 'kosong') ? 'green' : (($bedBD005015006->status == 'terisi') ? 'purple' : (($bedBD005015006->status == 'perbaikan') ? 'yellow' : (($bedBD005015006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015006" id="BD005015006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015006->status == 'kosong') ? 'Kosong' : (($bedBD005015006->status == 'terisi') ? 'Terisi' : (($bedBD005015006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-4">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015007->status == 'kosong') ? 'green' : (($bedBD005015007->status == 'terisi') ? 'purple' : (($bedBD005015007->status == 'perbaikan') ? 'yellow' : (($bedBD005015007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015007" id="BD005015007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015007->status == 'kosong') ? 'Kosong' : (($bedBD005015007->status == 'terisi') ? 'Terisi' : (($bedBD005015007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015008->status == 'kosong') ? 'green' : (($bedBD005015008->status == 'terisi') ? 'purple' : (($bedBD005015008->status == 'perbaikan') ? 'yellow' : (($bedBD005015008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015008" id="BD005015008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015008->status == 'kosong') ? 'Kosong' : (($bedBD005015008->status == 'terisi') ? 'Terisi' : (($bedBD005015008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015009->status == 'kosong') ? 'green' : (($bedBD005015009->status == 'terisi') ? 'purple' : (($bedBD005015009->status == 'perbaikan') ? 'yellow' : (($bedBD005015009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015009" id="BD005015009" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015009->status == 'kosong') ? 'Kosong' : (($bedBD005015009->status == 'terisi') ? 'Terisi' : (($bedBD005015009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015010->status == 'kosong') ? 'green' : (($bedBD005015010->status == 'terisi') ? 'purple' : (($bedBD005015010->status == 'perbaikan') ? 'yellow' : (($bedBD005015010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015010" id="BD005015010" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015010->status == 'kosong') ? 'Kosong' : (($bedBD005015010->status == 'terisi') ? 'Terisi' : (($bedBD005015010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015011->status == 'kosong') ? 'green' : (($bedBD005015011->status == 'terisi') ? 'purple' : (($bedBD005015011->status == 'perbaikan') ? 'yellow' : (($bedBD005015011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015011" id="BD005015011" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015011->status == 'kosong') ? 'Kosong' : (($bedBD005015011->status == 'terisi') ? 'Terisi' : (($bedBD005015011->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015011->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-6">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015012->status == 'kosong') ? 'green' : (($bedBD005015012->status == 'terisi') ? 'purple' : (($bedBD005015012->status == 'perbaikan') ? 'yellow' : (($bedBD005015012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015012" id="BD005015012" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015012->status == 'kosong') ? 'Kosong' : (($bedBD005015012->status == 'terisi') ? 'Terisi' : (($bedBD005015012->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015012->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD005015013->status == 'kosong') ? 'green' : (($bedBD005015013->status == 'terisi') ? 'purple' : (($bedBD005015013->status == 'perbaikan') ? 'yellow' : (($bedBD005015013->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD005015013" id="BD005015013" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD005015013->status == 'kosong') ? 'Kosong' : (($bedBD005015013->status == 'terisi') ? 'Terisi' : (($bedBD005015013->status == 'perbaikan') ? 'Perbaikan' : (($bedBD005015013->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU006' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU006">TERISI: <?= $ruangRU006terisi->jumlah; ?>, KOSONG: <?= $ruangRU006kosong->jumlah; ?></b></center>
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
                                                                <h5>KWJ-05</h5>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006015001->status == 'kosong') ? 'green' : (($bedBD006015001->status == 'terisi') ? 'purple' : (($bedBD006015001->status == 'perbaikan') ? 'yellow' : (($bedBD006015001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006015001" id="BD006015001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006015001->status == 'kosong') ? 'Kosong' : (($bedBD006015001->status == 'terisi') ? 'Terisi' : (($bedBD006015001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006015001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006015002->status == 'kosong') ? 'green' : (($bedBD006015002->status == 'terisi') ? 'purple' : (($bedBD006015002->status == 'perbaikan') ? 'yellow' : (($bedBD006015002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006015002" id="BD006015002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006015002->status == 'kosong') ? 'Kosong' : (($bedBD006015002->status == 'terisi') ? 'Terisi' : (($bedBD006015002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006015002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <h5>KWJ-03</h5>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006001->status == 'kosong') ? 'green' : (($bedBD006006001->status == 'terisi') ? 'purple' : (($bedBD006006001->status == 'perbaikan') ? 'yellow' : (($bedBD006006001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006001" id="BD006006001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006001->status == 'kosong') ? 'Kosong' : (($bedBD006006001->status == 'terisi') ? 'Terisi' : (($bedBD006006001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006002->status == 'kosong') ? 'green' : (($bedBD006006002->status == 'terisi') ? 'purple' : (($bedBD006006002->status == 'perbaikan') ? 'yellow' : (($bedBD006006002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006002" id="BD006006002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006002->status == 'kosong') ? 'Kosong' : (($bedBD006006002->status == 'terisi') ? 'Terisi' : (($bedBD006006002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006003->status == 'kosong') ? 'green' : (($bedBD006006003->status == 'terisi') ? 'purple' : (($bedBD006006003->status == 'perbaikan') ? 'yellow' : (($bedBD006006003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006003" id="BD006006003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006003->status == 'kosong') ? 'Kosong' : (($bedBD006006003->status == 'terisi') ? 'Terisi' : (($bedBD006006003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006004->status == 'kosong') ? 'green' : (($bedBD006006004->status == 'terisi') ? 'purple' : (($bedBD006006004->status == 'perbaikan') ? 'yellow' : (($bedBD006006004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006004" id="BD006006004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006004->status == 'kosong') ? 'Kosong' : (($bedBD006006004->status == 'terisi') ? 'Terisi' : (($bedBD006006004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006005->status == 'kosong') ? 'green' : (($bedBD006006005->status == 'terisi') ? 'purple' : (($bedBD006006005->status == 'perbaikan') ? 'yellow' : (($bedBD006006005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006005" id="BD006006005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006005->status == 'kosong') ? 'Kosong' : (($bedBD006006005->status == 'terisi') ? 'Terisi' : (($bedBD006006005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006006->status == 'kosong') ? 'green' : (($bedBD006006006->status == 'terisi') ? 'purple' : (($bedBD006006006->status == 'perbaikan') ? 'yellow' : (($bedBD006006006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006006" id="BD006006006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006006->status == 'kosong') ? 'Kosong' : (($bedBD006006006->status == 'terisi') ? 'Terisi' : (($bedBD006006006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006007->status == 'kosong') ? 'green' : (($bedBD006006007->status == 'terisi') ? 'purple' : (($bedBD006006007->status == 'perbaikan') ? 'yellow' : (($bedBD006006007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006007" id="BD006006007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006007->status == 'kosong') ? 'Kosong' : (($bedBD006006007->status == 'terisi') ? 'Terisi' : (($bedBD006006007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006008->status == 'kosong') ? 'green' : (($bedBD006006008->status == 'terisi') ? 'purple' : (($bedBD006006008->status == 'perbaikan') ? 'yellow' : (($bedBD006006008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006008" id="BD006006008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006008->status == 'kosong') ? 'Kosong' : (($bedBD006006008->status == 'terisi') ? 'Terisi' : (($bedBD006006008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006009->status == 'kosong') ? 'green' : (($bedBD006006009->status == 'terisi') ? 'purple' : (($bedBD006006009->status == 'perbaikan') ? 'yellow' : (($bedBD006006009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006009" id="BD006006009" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006009->status == 'kosong') ? 'Kosong' : (($bedBD006006009->status == 'terisi') ? 'Terisi' : (($bedBD006006009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006010->status == 'kosong') ? 'green' : (($bedBD006006010->status == 'terisi') ? 'purple' : (($bedBD006006010->status == 'perbaikan') ? 'yellow' : (($bedBD006006010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006010" id="BD006006010" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006010->status == 'kosong') ? 'Kosong' : (($bedBD006006010->status == 'terisi') ? 'Terisi' : (($bedBD006006010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <h5>KWJ-01</h5>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005001->status == 'kosong') ? 'green' : (($bedBD006005001->status == 'terisi') ? 'purple' : (($bedBD006005001->status == 'perbaikan') ? 'yellow' : (($bedBD006005001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005001" id="BD006005001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005001->status == 'kosong') ? 'Kosong' : (($bedBD006005001->status == 'terisi') ? 'Terisi' : (($bedBD006005001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005002->status == 'kosong') ? 'green' : (($bedBD006005002->status == 'terisi') ? 'purple' : (($bedBD006005002->status == 'perbaikan') ? 'yellow' : (($bedBD006005002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005002" id="BD006005002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005002->status == 'kosong') ? 'Kosong' : (($bedBD006005002->status == 'terisi') ? 'Terisi' : (($bedBD006005002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005003->status == 'kosong') ? 'green' : (($bedBD006005003->status == 'terisi') ? 'purple' : (($bedBD006005003->status == 'perbaikan') ? 'yellow' : (($bedBD006005003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005003" id="BD006005003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005003->status == 'kosong') ? 'Kosong' : (($bedBD006005003->status == 'terisi') ? 'Terisi' : (($bedBD006005003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005004->status == 'kosong') ? 'green' : (($bedBD006005004->status == 'terisi') ? 'purple' : (($bedBD006005004->status == 'perbaikan') ? 'yellow' : (($bedBD006005004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005004" id="BD006005004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005004->status == 'kosong') ? 'Kosong' : (($bedBD006005004->status == 'terisi') ? 'Terisi' : (($bedBD006005004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006015003->status == 'kosong') ? 'green' : (($bedBD006015003->status == 'terisi') ? 'purple' : (($bedBD006015003->status == 'perbaikan') ? 'yellow' : (($bedBD006015003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006015003" id="BD006015003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006015003->status == 'kosong') ? 'Kosong' : (($bedBD006015003->status == 'terisi') ? 'Terisi' : (($bedBD006015003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006015003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006015004->status == 'kosong') ? 'green' : (($bedBD006015004->status == 'terisi') ? 'purple' : (($bedBD006015004->status == 'perbaikan') ? 'yellow' : (($bedBD006015004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006015004" id="BD006015004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006015004->status == 'kosong') ? 'Kosong' : (($bedBD006015004->status == 'terisi') ? 'Terisi' : (($bedBD006015004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006015004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <h5>KWJ-04</h5>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006011->status == 'kosong') ? 'green' : (($bedBD006006011->status == 'terisi') ? 'purple' : (($bedBD006006011->status == 'perbaikan') ? 'yellow' : (($bedBD006006011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006011" id="BD006006011" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006011->status == 'kosong') ? 'Kosong' : (($bedBD006006011->status == 'terisi') ? 'Terisi' : (($bedBD006006011->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006011->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006012->status == 'kosong') ? 'green' : (($bedBD006006012->status == 'terisi') ? 'purple' : (($bedBD006006012->status == 'perbaikan') ? 'yellow' : (($bedBD006006012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006012" id="BD006006012" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006012->status == 'kosong') ? 'Kosong' : (($bedBD006006012->status == 'terisi') ? 'Terisi' : (($bedBD006006012->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006012->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006013->status == 'kosong') ? 'green' : (($bedBD006006013->status == 'terisi') ? 'purple' : (($bedBD006006013->status == 'perbaikan') ? 'yellow' : (($bedBD006006013->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006013" id="BD006006013" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006013->status == 'kosong') ? 'Kosong' : (($bedBD006006013->status == 'terisi') ? 'Terisi' : (($bedBD006006013->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006013->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006014->status == 'kosong') ? 'green' : (($bedBD006006014->status == 'terisi') ? 'purple' : (($bedBD006006014->status == 'perbaikan') ? 'yellow' : (($bedBD006006014->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006014" id="BD006006014" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006014->status == 'kosong') ? 'Kosong' : (($bedBD006006014->status == 'terisi') ? 'Terisi' : (($bedBD006006014->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006014->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006015->status == 'kosong') ? 'green' : (($bedBD006006015->status == 'terisi') ? 'purple' : (($bedBD006006015->status == 'perbaikan') ? 'yellow' : (($bedBD006006015->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006015" id="BD006006015" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006015->status == 'kosong') ? 'Kosong' : (($bedBD006006015->status == 'terisi') ? 'Terisi' : (($bedBD006006015->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006015->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006016->status == 'kosong') ? 'green' : (($bedBD006006016->status == 'terisi') ? 'purple' : (($bedBD006006016->status == 'perbaikan') ? 'yellow' : (($bedBD006006016->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006016" id="BD006006016" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006016->status == 'kosong') ? 'Kosong' : (($bedBD006006016->status == 'terisi') ? 'Terisi' : (($bedBD006006016->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006016->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006017->status == 'kosong') ? 'green' : (($bedBD006006017->status == 'terisi') ? 'purple' : (($bedBD006006017->status == 'perbaikan') ? 'yellow' : (($bedBD006006017->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006017" id="BD006006017" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006017->status == 'kosong') ? 'Kosong' : (($bedBD006006017->status == 'terisi') ? 'Terisi' : (($bedBD006006017->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006017->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006018->status == 'kosong') ? 'green' : (($bedBD006006018->status == 'terisi') ? 'purple' : (($bedBD006006018->status == 'perbaikan') ? 'yellow' : (($bedBD006006018->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006018" id="BD006006018" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006018->status == 'kosong') ? 'Kosong' : (($bedBD006006018->status == 'terisi') ? 'Terisi' : (($bedBD006006018->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006018->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006019->status == 'kosong') ? 'green' : (($bedBD006006019->status == 'terisi') ? 'purple' : (($bedBD006006019->status == 'perbaikan') ? 'yellow' : (($bedBD006006019->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006019" id="BD006006019" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006019->status == 'kosong') ? 'Kosong' : (($bedBD006006019->status == 'terisi') ? 'Terisi' : (($bedBD006006019->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006019->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006006020->status == 'kosong') ? 'green' : (($bedBD006006020->status == 'terisi') ? 'purple' : (($bedBD006006020->status == 'perbaikan') ? 'yellow' : (($bedBD006006020->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006006020" id="BD006006020" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006006020->status == 'kosong') ? 'Kosong' : (($bedBD006006020->status == 'terisi') ? 'Terisi' : (($bedBD006006020->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006006020->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                <h5>KWJ-02</h5>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005005->status == 'kosong') ? 'green' : (($bedBD006005005->status == 'terisi') ? 'purple' : (($bedBD006005005->status == 'perbaikan') ? 'yellow' : (($bedBD006005005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005005" id="BD006005005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005005->status == 'kosong') ? 'Kosong' : (($bedBD006005005->status == 'terisi') ? 'Terisi' : (($bedBD006005005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005006->status == 'kosong') ? 'green' : (($bedBD006005006->status == 'terisi') ? 'purple' : (($bedBD006005006->status == 'perbaikan') ? 'yellow' : (($bedBD006005006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005006" id="BD006005006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005006->status == 'kosong') ? 'Kosong' : (($bedBD006005006->status == 'terisi') ? 'Terisi' : (($bedBD006005006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005007->status == 'kosong') ? 'green' : (($bedBD006005007->status == 'terisi') ? 'purple' : (($bedBD006005007->status == 'perbaikan') ? 'yellow' : (($bedBD006005007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005007" id="BD006005007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005007->status == 'kosong') ? 'Kosong' : (($bedBD006005007->status == 'terisi') ? 'Terisi' : (($bedBD006005007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD006005008->status == 'kosong') ? 'green' : (($bedBD006005008->status == 'terisi') ? 'purple' : (($bedBD006005008->status == 'perbaikan') ? 'yellow' : (($bedBD006005008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD006005008" id="BD006005008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD006005008->status == 'kosong') ? 'Kosong' : (($bedBD006005008->status == 'terisi') ? 'Terisi' : (($bedBD006005008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD006005008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU007' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU007">TERISI: <?= $ruangRU007terisi->jumlah; ?>, KOSONG: <?= $ruangRU007kosong->jumlah; ?></b></center>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005001->status == 'kosong') ? 'green' : (($bedBD007005001->status == 'terisi') ? 'purple' : (($bedBD007005001->status == 'perbaikan') ? 'yellow' : (($bedBD007005001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005001" id="BD007005001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005001->status == 'kosong') ? 'Kosong' : (($bedBD007005001->status == 'terisi') ? 'Terisi' : (($bedBD007005001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005002->status == 'kosong') ? 'green' : (($bedBD007005002->status == 'terisi') ? 'purple' : (($bedBD007005002->status == 'perbaikan') ? 'yellow' : (($bedBD007005002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005002" id="BD007005002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005002->status == 'kosong') ? 'Kosong' : (($bedBD007005002->status == 'terisi') ? 'Terisi' : (($bedBD007005002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005003->status == 'kosong') ? 'green' : (($bedBD007005003->status == 'terisi') ? 'purple' : (($bedBD007005003->status == 'perbaikan') ? 'yellow' : (($bedBD007005003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005003" id="BD007005003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005003->status == 'kosong') ? 'Kosong' : (($bedBD007005003->status == 'terisi') ? 'Terisi' : (($bedBD007005003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005004->status == 'kosong') ? 'green' : (($bedBD007005004->status == 'terisi') ? 'purple' : (($bedBD007005004->status == 'perbaikan') ? 'yellow' : (($bedBD007005004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005004" id="BD007005004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005004->status == 'kosong') ? 'Kosong' : (($bedBD007005004->status == 'terisi') ? 'Terisi' : (($bedBD007005004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007015001->status == 'kosong') ? 'green' : (($bedBD007015001->status == 'terisi') ? 'purple' : (($bedBD007015001->status == 'perbaikan') ? 'yellow' : (($bedBD007015001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007015001" id="BD007015001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007015001->status == 'kosong') ? 'Kosong' : (($bedBD007015001->status == 'terisi') ? 'Terisi' : (($bedBD007015001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007015001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007015002->status == 'kosong') ? 'green' : (($bedBD007015002->status == 'terisi') ? 'purple' : (($bedBD007015002->status == 'perbaikan') ? 'yellow' : (($bedBD007015002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007015002" id="BD007015002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007015002->status == 'kosong') ? 'Kosong' : (($bedBD007015002->status == 'terisi') ? 'Terisi' : (($bedBD007015002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007015002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007015003->status == 'kosong') ? 'green' : (($bedBD007015003->status == 'terisi') ? 'purple' : (($bedBD007015003->status == 'perbaikan') ? 'yellow' : (($bedBD007015003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007015003" id="BD007015003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007015003->status == 'kosong') ? 'Kosong' : (($bedBD007015003->status == 'terisi') ? 'Terisi' : (($bedBD007015003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007015003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007015004->status == 'kosong') ? 'green' : (($bedBD007015004->status == 'terisi') ? 'purple' : (($bedBD007015004->status == 'perbaikan') ? 'yellow' : (($bedBD007015004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007015004" id="BD007015004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007015004->status == 'kosong') ? 'Kosong' : (($bedBD007015004->status == 'terisi') ? 'Terisi' : (($bedBD007015004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007015004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006001->status == 'kosong') ? 'green' : (($bedBD007006001->status == 'terisi') ? 'purple' : (($bedBD007006001->status == 'perbaikan') ? 'yellow' : (($bedBD007006001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006001" id="BD007006001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006001->status == 'kosong') ? 'Kosong' : (($bedBD007006001->status == 'terisi') ? 'Terisi' : (($bedBD007006001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006002->status == 'kosong') ? 'green' : (($bedBD007006002->status == 'terisi') ? 'purple' : (($bedBD007006002->status == 'perbaikan') ? 'yellow' : (($bedBD007006002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006002" id="BD007006002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006002->status == 'kosong') ? 'Kosong' : (($bedBD007006002->status == 'terisi') ? 'Terisi' : (($bedBD007006002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006003->status == 'kosong') ? 'green' : (($bedBD007006003->status == 'terisi') ? 'purple' : (($bedBD007006003->status == 'perbaikan') ? 'yellow' : (($bedBD007006003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006003" id="BD007006003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006003->status == 'kosong') ? 'Kosong' : (($bedBD007006003->status == 'terisi') ? 'Terisi' : (($bedBD007006003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006004->status == 'kosong') ? 'green' : (($bedBD007006004->status == 'terisi') ? 'purple' : (($bedBD007006004->status == 'perbaikan') ? 'yellow' : (($bedBD007006004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006004" id="BD007006004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006004->status == 'kosong') ? 'Kosong' : (($bedBD007006004->status == 'terisi') ? 'Terisi' : (($bedBD007006004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006005->status == 'kosong') ? 'green' : (($bedBD007006005->status == 'terisi') ? 'purple' : (($bedBD007006005->status == 'perbaikan') ? 'yellow' : (($bedBD007006005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006005" id="BD007006005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006005->status == 'kosong') ? 'Kosong' : (($bedBD007006005->status == 'terisi') ? 'Terisi' : (($bedBD007006005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006006->status == 'kosong') ? 'green' : (($bedBD007006006->status == 'terisi') ? 'purple' : (($bedBD007006006->status == 'perbaikan') ? 'yellow' : (($bedBD007006006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006006" id="BD007006006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006006->status == 'kosong') ? 'Kosong' : (($bedBD007006006->status == 'terisi') ? 'Terisi' : (($bedBD007006006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006007->status == 'kosong') ? 'green' : (($bedBD007006007->status == 'terisi') ? 'purple' : (($bedBD007006007->status == 'perbaikan') ? 'yellow' : (($bedBD007006007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006007" id="BD007006007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006007->status == 'kosong') ? 'Kosong' : (($bedBD007006007->status == 'terisi') ? 'Terisi' : (($bedBD007006007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006008->status == 'kosong') ? 'green' : (($bedBD007006008->status == 'terisi') ? 'purple' : (($bedBD007006008->status == 'perbaikan') ? 'yellow' : (($bedBD007006008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006008" id="BD007006008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006008->status == 'kosong') ? 'Kosong' : (($bedBD007006008->status == 'terisi') ? 'Terisi' : (($bedBD007006008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006009->status == 'kosong') ? 'green' : (($bedBD007006009->status == 'terisi') ? 'purple' : (($bedBD007006009->status == 'perbaikan') ? 'yellow' : (($bedBD007006009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006009" id="BD007006009" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006009->status == 'kosong') ? 'Kosong' : (($bedBD007006009->status == 'terisi') ? 'Terisi' : (($bedBD007006009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006010->status == 'kosong') ? 'green' : (($bedBD007006010->status == 'terisi') ? 'purple' : (($bedBD007006010->status == 'perbaikan') ? 'yellow' : (($bedBD007006010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006010" id="BD007006010" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006010->status == 'kosong') ? 'Kosong' : (($bedBD007006010->status == 'terisi') ? 'Terisi' : (($bedBD007006010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005005->status == 'kosong') ? 'green' : (($bedBD007005005->status == 'terisi') ? 'purple' : (($bedBD007005005->status == 'perbaikan') ? 'yellow' : (($bedBD007005005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005005" id="BD007005005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005005->status == 'kosong') ? 'Kosong' : (($bedBD007005005->status == 'terisi') ? 'Terisi' : (($bedBD007005005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005006->status == 'kosong') ? 'green' : (($bedBD007005006->status == 'terisi') ? 'purple' : (($bedBD007005006->status == 'perbaikan') ? 'yellow' : (($bedBD007005006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005006" id="BD007005006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005006->status == 'kosong') ? 'Kosong' : (($bedBD007005006->status == 'terisi') ? 'Terisi' : (($bedBD007005006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005007->status == 'kosong') ? 'green' : (($bedBD007005007->status == 'terisi') ? 'purple' : (($bedBD007005007->status == 'perbaikan') ? 'yellow' : (($bedBD007005007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005007" id="BD007005007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005007->status == 'kosong') ? 'Kosong' : (($bedBD007005007->status == 'terisi') ? 'Terisi' : (($bedBD007005007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007005008->status == 'kosong') ? 'green' : (($bedBD007005008->status == 'terisi') ? 'purple' : (($bedBD007005008->status == 'perbaikan') ? 'yellow' : (($bedBD007005008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007005008" id="BD007005008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007005008->status == 'kosong') ? 'Kosong' : (($bedBD007005008->status == 'terisi') ? 'Terisi' : (($bedBD007005008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007005008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007015005->status == 'kosong') ? 'green' : (($bedBD007015005->status == 'terisi') ? 'purple' : (($bedBD007015005->status == 'perbaikan') ? 'yellow' : (($bedBD007015005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007015005" id="BD007015005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007015005->status == 'kosong') ? 'Kosong' : (($bedBD007015005->status == 'terisi') ? 'Terisi' : (($bedBD007015005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007015005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007015006->status == 'kosong') ? 'green' : (($bedBD007015006->status == 'terisi') ? 'purple' : (($bedBD007015006->status == 'perbaikan') ? 'yellow' : (($bedBD007015006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007015006" id="BD007015006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007015006->status == 'kosong') ? 'Kosong' : (($bedBD007015006->status == 'terisi') ? 'Terisi' : (($bedBD007015006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007015006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006011->status == 'kosong') ? 'green' : (($bedBD007006011->status == 'terisi') ? 'purple' : (($bedBD007006011->status == 'perbaikan') ? 'yellow' : (($bedBD007006011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006011" id="BD007006011" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006011->status == 'kosong') ? 'Kosong' : (($bedBD007006011->status == 'terisi') ? 'Terisi' : (($bedBD007006011->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006011->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006012->status == 'kosong') ? 'green' : (($bedBD007006012->status == 'terisi') ? 'purple' : (($bedBD007006012->status == 'perbaikan') ? 'yellow' : (($bedBD007006012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006012" id="BD007006012" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006012->status == 'kosong') ? 'Kosong' : (($bedBD007006012->status == 'terisi') ? 'Terisi' : (($bedBD007006012->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006012->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006013->status == 'kosong') ? 'green' : (($bedBD007006013->status == 'terisi') ? 'purple' : (($bedBD007006013->status == 'perbaikan') ? 'yellow' : (($bedBD007006013->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006013" id="BD007006013" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006013->status == 'kosong') ? 'Kosong' : (($bedBD007006013->status == 'terisi') ? 'Terisi' : (($bedBD007006013->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006013->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006014->status == 'kosong') ? 'green' : (($bedBD007006014->status == 'terisi') ? 'purple' : (($bedBD007006014->status == 'perbaikan') ? 'yellow' : (($bedBD007006014->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006014" id="BD007006014" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006014->status == 'kosong') ? 'Kosong' : (($bedBD007006014->status == 'terisi') ? 'Terisi' : (($bedBD007006014->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006014->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD007006015->status == 'kosong') ? 'green' : (($bedBD007006015->status == 'terisi') ? 'purple' : (($bedBD007006015->status == 'perbaikan') ? 'yellow' : (($bedBD007006015->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD007006015" id="BD007006015" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD007006015->status == 'kosong') ? 'Kosong' : (($bedBD007006015->status == 'terisi') ? 'Terisi' : (($bedBD007006015->status == 'perbaikan') ? 'Perbaikan' : (($bedBD007006015->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU008' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU008">TERISI: <?= $ruangRU008terisi->jumlah; ?>, KOSONG: <?= $ruangRU008kosong->jumlah; ?></b></center>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008005001->status == 'kosong') ? 'green' : (($bedBD008005001->status == 'terisi') ? 'purple' : (($bedBD008005001->status == 'perbaikan') ? 'yellow' : (($bedBD008005001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008005001" id="BD008005001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008005001->status == 'kosong') ? 'Kosong' : (($bedBD008005001->status == 'terisi') ? 'Terisi' : (($bedBD008005001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008005001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008005002->status == 'kosong') ? 'green' : (($bedBD008005002->status == 'terisi') ? 'purple' : (($bedBD008005002->status == 'perbaikan') ? 'yellow' : (($bedBD008005002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008005002" id="BD008005002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008005002->status == 'kosong') ? 'Kosong' : (($bedBD008005002->status == 'terisi') ? 'Terisi' : (($bedBD008005002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008005002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006001->status == 'kosong') ? 'green' : (($bedBD008006001->status == 'terisi') ? 'purple' : (($bedBD008006001->status == 'perbaikan') ? 'yellow' : (($bedBD008006001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006001" id="BD008006001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006001->status == 'kosong') ? 'Kosong' : (($bedBD008006001->status == 'terisi') ? 'Terisi' : (($bedBD008006001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006002->status == 'kosong') ? 'green' : (($bedBD008006002->status == 'terisi') ? 'purple' : (($bedBD008006002->status == 'perbaikan') ? 'yellow' : (($bedBD008006002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006002" id="BD008006002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006002->status == 'kosong') ? 'Kosong' : (($bedBD008006002->status == 'terisi') ? 'Terisi' : (($bedBD008006002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006003->status == 'kosong') ? 'green' : (($bedBD008006003->status == 'terisi') ? 'purple' : (($bedBD008006003->status == 'perbaikan') ? 'yellow' : (($bedBD008006003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006003" id="BD008006003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006003->status == 'kosong') ? 'Kosong' : (($bedBD008006003->status == 'terisi') ? 'Terisi' : (($bedBD008006003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4"></div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006004->status == 'kosong') ? 'green' : (($bedBD008006004->status == 'terisi') ? 'purple' : (($bedBD008006004->status == 'perbaikan') ? 'yellow' : (($bedBD008006004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006004" id="BD008006004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006004->status == 'kosong') ? 'Kosong' : (($bedBD008006004->status == 'terisi') ? 'Terisi' : (($bedBD008006004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006005->status == 'kosong') ? 'green' : (($bedBD008006005->status == 'terisi') ? 'purple' : (($bedBD008006005->status == 'perbaikan') ? 'yellow' : (($bedBD008006005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006005" id="BD008006005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006005->status == 'kosong') ? 'Kosong' : (($bedBD008006005->status == 'terisi') ? 'Terisi' : (($bedBD008006005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008004001->status == 'kosong') ? 'green' : (($bedBD008004001->status == 'terisi') ? 'purple' : (($bedBD008004001->status == 'perbaikan') ? 'yellow' : (($bedBD008004001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008004001" id="BD008004001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008004001->status == 'kosong') ? 'Kosong' : (($bedBD008004001->status == 'terisi') ? 'Terisi' : (($bedBD008004001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008004001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008004002->status == 'kosong') ? 'green' : (($bedBD008004002->status == 'terisi') ? 'purple' : (($bedBD008004002->status == 'perbaikan') ? 'yellow' : (($bedBD008004002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008004002" id="BD008004002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008004002->status == 'kosong') ? 'Kosong' : (($bedBD008004002->status == 'terisi') ? 'Terisi' : (($bedBD008004002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008004002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006006->status == 'kosong') ? 'green' : (($bedBD008006006->status == 'terisi') ? 'purple' : (($bedBD008006006->status == 'perbaikan') ? 'yellow' : (($bedBD008006006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006006" id="BD008006006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006006->status == 'kosong') ? 'Kosong' : (($bedBD008006006->status == 'terisi') ? 'Terisi' : (($bedBD008006006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006007->status == 'kosong') ? 'green' : (($bedBD008006007->status == 'terisi') ? 'purple' : (($bedBD008006007->status == 'perbaikan') ? 'yellow' : (($bedBD008006007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006007" id="BD008006007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006007->status == 'kosong') ? 'Kosong' : (($bedBD008006007->status == 'terisi') ? 'Terisi' : (($bedBD008006007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006008->status == 'kosong') ? 'green' : (($bedBD008006008->status == 'terisi') ? 'purple' : (($bedBD008006008->status == 'perbaikan') ? 'yellow' : (($bedBD008006008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006008" id="BD008006008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006008->status == 'kosong') ? 'Kosong' : (($bedBD008006008->status == 'terisi') ? 'Terisi' : (($bedBD008006008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006009->status == 'kosong') ? 'green' : (($bedBD008006009->status == 'terisi') ? 'purple' : (($bedBD008006009->status == 'perbaikan') ? 'yellow' : (($bedBD008006009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006009" id="BD008006009" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006009->status == 'kosong') ? 'Kosong' : (($bedBD008006009->status == 'terisi') ? 'Terisi' : (($bedBD008006009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006010->status == 'kosong') ? 'green' : (($bedBD008006010->status == 'terisi') ? 'purple' : (($bedBD008006010->status == 'perbaikan') ? 'yellow' : (($bedBD008006010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006010" id="BD008006010" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006010->status == 'kosong') ? 'Kosong' : (($bedBD008006010->status == 'terisi') ? 'Terisi' : (($bedBD008006010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006011->status == 'kosong') ? 'green' : (($bedBD008006011->status == 'terisi') ? 'purple' : (($bedBD008006011->status == 'perbaikan') ? 'yellow' : (($bedBD008006011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006011" id="BD008006011" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006011->status == 'kosong') ? 'Kosong' : (($bedBD008006011->status == 'terisi') ? 'Terisi' : (($bedBD008006011->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006011->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006012->status == 'kosong') ? 'green' : (($bedBD008006012->status == 'terisi') ? 'purple' : (($bedBD008006012->status == 'perbaikan') ? 'yellow' : (($bedBD008006012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006012" id="BD008006012" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006012->status == 'kosong') ? 'Kosong' : (($bedBD008006012->status == 'terisi') ? 'Terisi' : (($bedBD008006012->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006012->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006013->status == 'kosong') ? 'green' : (($bedBD008006013->status == 'terisi') ? 'purple' : (($bedBD008006013->status == 'perbaikan') ? 'yellow' : (($bedBD008006013->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006013" id="BD008006013" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006013->status == 'kosong') ? 'Kosong' : (($bedBD008006013->status == 'terisi') ? 'Terisi' : (($bedBD008006013->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006013->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006014->status == 'kosong') ? 'green' : (($bedBD008006014->status == 'terisi') ? 'purple' : (($bedBD008006014->status == 'perbaikan') ? 'yellow' : (($bedBD008006014->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006014" id="BD008006014" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006014->status == 'kosong') ? 'Kosong' : (($bedBD008006014->status == 'terisi') ? 'Terisi' : (($bedBD008006014->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006014->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD008006015->status == 'kosong') ? 'green' : (($bedBD008006015->status == 'terisi') ? 'purple' : (($bedBD008006015->status == 'perbaikan') ? 'yellow' : (($bedBD008006015->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD008006015" id="BD008006015" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD008006015->status == 'kosong') ? 'Kosong' : (($bedBD008006015->status == 'terisi') ? 'Terisi' : (($bedBD008006015->status == 'perbaikan') ? 'Perbaikan' : (($bedBD008006015->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU009' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU009">TERISI: <?= $ruangRU009terisi->jumlah; ?>, KOSONG: <?= $ruangRU009kosong->jumlah; ?></b></center>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006001->status == 'kosong') ? 'green' : (($bedBD009006001->status == 'terisi') ? 'purple' : (($bedBD009006001->status == 'perbaikan') ? 'yellow' : (($bedBD009006001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006001" id="BD009006001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006001->status == 'kosong') ? 'Kosong' : (($bedBD009006001->status == 'terisi') ? 'Terisi' : (($bedBD009006001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006002->status == 'kosong') ? 'green' : (($bedBD009006002->status == 'terisi') ? 'purple' : (($bedBD009006002->status == 'perbaikan') ? 'yellow' : (($bedBD009006002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006002" id="BD009006002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006002->status == 'kosong') ? 'Kosong' : (($bedBD009006002->status == 'terisi') ? 'Terisi' : (($bedBD009006002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006003->status == 'kosong') ? 'green' : (($bedBD009006003->status == 'terisi') ? 'purple' : (($bedBD009006003->status == 'perbaikan') ? 'yellow' : (($bedBD009006003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006003" id="BD009006003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006003->status == 'kosong') ? 'Kosong' : (($bedBD009006003->status == 'terisi') ? 'Terisi' : (($bedBD009006003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006004->status == 'kosong') ? 'green' : (($bedBD009006004->status == 'terisi') ? 'purple' : (($bedBD009006004->status == 'perbaikan') ? 'yellow' : (($bedBD009006004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006004" id="BD009006004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006004->status == 'kosong') ? 'Kosong' : (($bedBD009006004->status == 'terisi') ? 'Terisi' : (($bedBD009006004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006005->status == 'kosong') ? 'green' : (($bedBD009006005->status == 'terisi') ? 'purple' : (($bedBD009006005->status == 'perbaikan') ? 'yellow' : (($bedBD009006005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006005" id="BD009006005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006005->status == 'kosong') ? 'Kosong' : (($bedBD009006005->status == 'terisi') ? 'Terisi' : (($bedBD009006005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006006->status == 'kosong') ? 'green' : (($bedBD009006006->status == 'terisi') ? 'purple' : (($bedBD009006006->status == 'perbaikan') ? 'yellow' : (($bedBD009006006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006006" id="BD009006006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006006->status == 'kosong') ? 'Kosong' : (($bedBD009006006->status == 'terisi') ? 'Terisi' : (($bedBD009006006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006007->status == 'kosong') ? 'green' : (($bedBD009006007->status == 'terisi') ? 'purple' : (($bedBD009006007->status == 'perbaikan') ? 'yellow' : (($bedBD009006007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006007" id="BD009006007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006007->status == 'kosong') ? 'Kosong' : (($bedBD009006007->status == 'terisi') ? 'Terisi' : (($bedBD009006007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009006008->status == 'kosong') ? 'green' : (($bedBD009006008->status == 'terisi') ? 'purple' : (($bedBD009006008->status == 'perbaikan') ? 'yellow' : (($bedBD009006008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009006008" id="BD009006008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009006008->status == 'kosong') ? 'Kosong' : (($bedBD009006008->status == 'terisi') ? 'Terisi' : (($bedBD009006008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009006008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009015001->status == 'kosong') ? 'green' : (($bedBD009015001->status == 'terisi') ? 'purple' : (($bedBD009015001->status == 'perbaikan') ? 'yellow' : (($bedBD009015001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009015001" id="BD009015001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009015001->status == 'kosong') ? 'Kosong' : (($bedBD009015001->status == 'terisi') ? 'Terisi' : (($bedBD009015001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009015001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009015002->status == 'kosong') ? 'green' : (($bedBD009015002->status == 'terisi') ? 'purple' : (($bedBD009015002->status == 'perbaikan') ? 'yellow' : (($bedBD009015002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009015002" id="BD009015002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009015002->status == 'kosong') ? 'Kosong' : (($bedBD009015002->status == 'terisi') ? 'Terisi' : (($bedBD009015002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009015002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009015003->status == 'kosong') ? 'green' : (($bedBD009015003->status == 'terisi') ? 'purple' : (($bedBD009015003->status == 'perbaikan') ? 'yellow' : (($bedBD009015003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009015003" id="BD009015003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009015003->status == 'kosong') ? 'Kosong' : (($bedBD009015003->status == 'terisi') ? 'Terisi' : (($bedBD009015003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009015003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009015004->status == 'kosong') ? 'green' : (($bedBD009015004->status == 'terisi') ? 'purple' : (($bedBD009015004->status == 'perbaikan') ? 'yellow' : (($bedBD009015004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009015004" id="BD009015004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009015004->status == 'kosong') ? 'Kosong' : (($bedBD009015004->status == 'terisi') ? 'Terisi' : (($bedBD009015004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009015004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009015005->status == 'kosong') ? 'green' : (($bedBD009015005->status == 'terisi') ? 'purple' : (($bedBD009015005->status == 'perbaikan') ? 'yellow' : (($bedBD009015005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009015005" id="BD009015005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009015005->status == 'kosong') ? 'Kosong' : (($bedBD009015005->status == 'terisi') ? 'Terisi' : (($bedBD009015005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009015005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD009015006->status == 'kosong') ? 'green' : (($bedBD009015006->status == 'terisi') ? 'purple' : (($bedBD009015006->status == 'perbaikan') ? 'yellow' : (($bedBD009015006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD009015006" id="BD009015006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD009015006->status == 'kosong') ? 'Kosong' : (($bedBD009015006->status == 'terisi') ? 'Terisi' : (($bedBD009015006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD009015006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU010' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU010">TERISI: <?= $ruangRU010terisi->jumlah; ?>, KOSONG: <?= $ruangRU010kosong->jumlah; ?></b></center>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010014001->status == 'kosong') ? 'green' : (($bedBD010014001->status == 'terisi') ? 'purple' : (($bedBD010014001->status == 'perbaikan') ? 'yellow' : (($bedBD010014001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010014001" id="BD010014001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010014001->status == 'kosong') ? 'Kosong' : (($bedBD010014001->status == 'terisi') ? 'Terisi' : (($bedBD010014001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010014001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010014002->status == 'kosong') ? 'green' : (($bedBD010014002->status == 'terisi') ? 'purple' : (($bedBD010014002->status == 'perbaikan') ? 'yellow' : (($bedBD010014002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010014002" id="BD010014002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010014002->status == 'kosong') ? 'Kosong' : (($bedBD010014002->status == 'terisi') ? 'Terisi' : (($bedBD010014002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010014002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010014003->status == 'kosong') ? 'green' : (($bedBD010014003->status == 'terisi') ? 'purple' : (($bedBD010014003->status == 'perbaikan') ? 'yellow' : (($bedBD010014003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010014003" id="BD010014003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010014003->status == 'kosong') ? 'Kosong' : (($bedBD010014003->status == 'terisi') ? 'Terisi' : (($bedBD010014003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010014003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010007001->status == 'kosong') ? 'green' : (($bedBD010007001->status == 'terisi') ? 'purple' : (($bedBD010007001->status == 'perbaikan') ? 'yellow' : (($bedBD010007001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010007001" id="BD010007001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010007001->status == 'kosong') ? 'Kosong' : (($bedBD010007001->status == 'terisi') ? 'Terisi' : (($bedBD010007001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010007001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010007002->status == 'kosong') ? 'green' : (($bedBD010007002->status == 'terisi') ? 'purple' : (($bedBD010007002->status == 'perbaikan') ? 'yellow' : (($bedBD010007002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010007002" id="BD010007002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010007002->status == 'kosong') ? 'Kosong' : (($bedBD010007002->status == 'terisi') ? 'Terisi' : (($bedBD010007002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010007002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010007003->status == 'kosong') ? 'green' : (($bedBD010007003->status == 'terisi') ? 'purple' : (($bedBD010007003->status == 'perbaikan') ? 'yellow' : (($bedBD010007003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010007003" id="BD010007003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010007003->status == 'kosong') ? 'Kosong' : (($bedBD010007003->status == 'terisi') ? 'Terisi' : (($bedBD010007003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010007003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010008001->status == 'kosong') ? 'green' : (($bedBD010008001->status == 'terisi') ? 'purple' : (($bedBD010008001->status == 'perbaikan') ? 'yellow' : (($bedBD010008001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010008001" id="BD010008001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010008001->status == 'kosong') ? 'Kosong' : (($bedBD010008001->status == 'terisi') ? 'Terisi' : (($bedBD010008001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010008001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010008002->status == 'kosong') ? 'green' : (($bedBD010008002->status == 'terisi') ? 'purple' : (($bedBD010008002->status == 'perbaikan') ? 'yellow' : (($bedBD010008002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010008002" id="BD010008002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010008002->status == 'kosong') ? 'Kosong' : (($bedBD010008002->status == 'terisi') ? 'Terisi' : (($bedBD010008002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010008002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010008003->status == 'kosong') ? 'green' : (($bedBD010008003->status == 'terisi') ? 'purple' : (($bedBD010008003->status == 'perbaikan') ? 'yellow' : (($bedBD010008003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010008003" id="BD010008003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010008003->status == 'kosong') ? 'Kosong' : (($bedBD010008003->status == 'terisi') ? 'Terisi' : (($bedBD010008003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010008003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010008004->status == 'kosong') ? 'green' : (($bedBD010008004->status == 'terisi') ? 'purple' : (($bedBD010008004->status == 'perbaikan') ? 'yellow' : (($bedBD010008004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010008004" id="BD010008004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010008004->status == 'kosong') ? 'Kosong' : (($bedBD010008004->status == 'terisi') ? 'Terisi' : (($bedBD010008004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010008004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010010001->status == 'kosong') ? 'green' : (($bedBD010010001->status == 'terisi') ? 'purple' : (($bedBD010010001->status == 'perbaikan') ? 'yellow' : (($bedBD010010001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010010001" id="BD010010001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010010001->status == 'kosong') ? 'Kosong' : (($bedBD010010001->status == 'terisi') ? 'Terisi' : (($bedBD010010001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010010001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD010010002->status == 'kosong') ? 'green' : (($bedBD010010002->status == 'terisi') ? 'purple' : (($bedBD010010002->status == 'perbaikan') ? 'yellow' : (($bedBD010010002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 30px;" data-id="BD010010002" id="BD010010002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD010010002->status == 'kosong') ? 'Kosong' : (($bedBD010010002->status == 'terisi') ? 'Terisi' : (($bedBD010010002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD010010002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU011' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU011">TERISI: <?= $ruangRU011terisi->jumlah; ?>, KOSONG: <?= $ruangRU011kosong->jumlah; ?></b></center>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009001->status == 'kosong') ? 'green' : (($bedBD011009001->status == 'terisi') ? 'purple' : (($bedBD011009001->status == 'perbaikan') ? 'yellow' : (($bedBD011009001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009001" id="BD011009001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009001->status == 'kosong') ? 'Kosong' : (($bedBD011009001->status == 'terisi') ? 'Terisi' : (($bedBD011009001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009002->status == 'kosong') ? 'green' : (($bedBD011009002->status == 'terisi') ? 'purple' : (($bedBD011009002->status == 'perbaikan') ? 'yellow' : (($bedBD011009002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009002" id="BD011009002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009002->status == 'kosong') ? 'Kosong' : (($bedBD011009002->status == 'terisi') ? 'Terisi' : (($bedBD011009002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009003->status == 'kosong') ? 'green' : (($bedBD011009003->status == 'terisi') ? 'purple' : (($bedBD011009003->status == 'perbaikan') ? 'yellow' : (($bedBD011009003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009003" id="BD011009003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009003->status == 'kosong') ? 'Kosong' : (($bedBD011009003->status == 'terisi') ? 'Terisi' : (($bedBD011009003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009004->status == 'kosong') ? 'green' : (($bedBD011009004->status == 'terisi') ? 'purple' : (($bedBD011009004->status == 'perbaikan') ? 'yellow' : (($bedBD011009004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009004" id="BD011009004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009004->status == 'kosong') ? 'Kosong' : (($bedBD011009004->status == 'terisi') ? 'Terisi' : (($bedBD011009004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009005->status == 'kosong') ? 'green' : (($bedBD011009005->status == 'terisi') ? 'purple' : (($bedBD011009005->status == 'perbaikan') ? 'yellow' : (($bedBD011009005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009005" id="BD011009005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009005->status == 'kosong') ? 'Kosong' : (($bedBD011009005->status == 'terisi') ? 'Terisi' : (($bedBD011009005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009006->status == 'kosong') ? 'green' : (($bedBD011009006->status == 'terisi') ? 'purple' : (($bedBD011009006->status == 'perbaikan') ? 'yellow' : (($bedBD011009006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009006" id="BD011009006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009006->status == 'kosong') ? 'Kosong' : (($bedBD011009006->status == 'terisi') ? 'Terisi' : (($bedBD011009006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009007->status == 'kosong') ? 'green' : (($bedBD011009007->status == 'terisi') ? 'purple' : (($bedBD011009007->status == 'perbaikan') ? 'yellow' : (($bedBD011009007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009007" id="BD011009007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009007->status == 'kosong') ? 'Kosong' : (($bedBD011009007->status == 'terisi') ? 'Terisi' : (($bedBD011009007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                                                                    <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD011009008->status == 'kosong') ? 'green' : (($bedBD011009008->status == 'terisi') ? 'purple' : (($bedBD011009008->status == 'perbaikan') ? 'yellow' : (($bedBD011009008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD011009008" id="BD011009008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD011009008->status == 'kosong') ? 'Kosong' : (($bedBD011009008->status == 'terisi') ? 'Terisi' : (($bedBD011009008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD011009008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                            <?php
                            }
                            if (($userdata->id_ruang) == 'RU013' || ($userdata->id_ruang) == 'RU998' || ($userdata->id_ruang) == 'RU999' || $userdata == '') {
                            ?>
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
                                                <center><b id="jumlahBedRU013">TERISI: <?= $ruangRU013terisi->jumlah; ?>, KOSONG: <?= $ruangRU013kosong->jumlah; ?></b></center>
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
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015001->status == 'kosong') ? 'green' : (($bedBD013015001->status == 'terisi') ? 'purple' : (($bedBD013015001->status == 'perbaikan') ? 'yellow' : (($bedBD013015001->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015001" id="BD013015001" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015001->status == 'kosong') ? 'Kosong' : (($bedBD013015001->status == 'terisi') ? 'Terisi' : (($bedBD013015001->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015001->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015002->status == 'kosong') ? 'green' : (($bedBD013015002->status == 'terisi') ? 'purple' : (($bedBD013015002->status == 'perbaikan') ? 'yellow' : (($bedBD013015002->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015002" id="BD013015002" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015002->status == 'kosong') ? 'Kosong' : (($bedBD013015002->status == 'terisi') ? 'Terisi' : (($bedBD013015002->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015002->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015003->status == 'kosong') ? 'green' : (($bedBD013015003->status == 'terisi') ? 'purple' : (($bedBD013015003->status == 'perbaikan') ? 'yellow' : (($bedBD013015003->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015003" id="BD013015003" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015003->status == 'kosong') ? 'Kosong' : (($bedBD013015003->status == 'terisi') ? 'Terisi' : (($bedBD013015003->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015003->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015004->status == 'kosong') ? 'green' : (($bedBD013015004->status == 'terisi') ? 'purple' : (($bedBD013015004->status == 'perbaikan') ? 'yellow' : (($bedBD013015004->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015004" id="BD013015004" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015004->status == 'kosong') ? 'Kosong' : (($bedBD013015004->status == 'terisi') ? 'Terisi' : (($bedBD013015004->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015004->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015005->status == 'kosong') ? 'green' : (($bedBD013015005->status == 'terisi') ? 'purple' : (($bedBD013015005->status == 'perbaikan') ? 'yellow' : (($bedBD013015005->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015005" id="BD013015005" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015005->status == 'kosong') ? 'Kosong' : (($bedBD013015005->status == 'terisi') ? 'Terisi' : (($bedBD013015005->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015005->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015006->status == 'kosong') ? 'green' : (($bedBD013015006->status == 'terisi') ? 'purple' : (($bedBD013015006->status == 'perbaikan') ? 'yellow' : (($bedBD013015006->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015006" id="BD013015006" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015006->status == 'kosong') ? 'Kosong' : (($bedBD013015006->status == 'terisi') ? 'Terisi' : (($bedBD013015006->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015006->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015007->status == 'kosong') ? 'green' : (($bedBD013015007->status == 'terisi') ? 'purple' : (($bedBD013015007->status == 'perbaikan') ? 'yellow' : (($bedBD013015007->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015007" id="BD013015007" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015007->status == 'kosong') ? 'Kosong' : (($bedBD013015007->status == 'terisi') ? 'Terisi' : (($bedBD013015007->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015007->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015008->status == 'kosong') ? 'green' : (($bedBD013015008->status == 'terisi') ? 'purple' : (($bedBD013015008->status == 'perbaikan') ? 'yellow' : (($bedBD013015008->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015008" id="BD013015008" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015008->status == 'kosong') ? 'Kosong' : (($bedBD013015008->status == 'terisi') ? 'Terisi' : (($bedBD013015008->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015008->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015009->status == 'kosong') ? 'green' : (($bedBD013015009->status == 'terisi') ? 'purple' : (($bedBD013015009->status == 'perbaikan') ? 'yellow' : (($bedBD013015009->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015009" id="BD013015009" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015009->status == 'kosong') ? 'Kosong' : (($bedBD013015009->status == 'terisi') ? 'Terisi' : (($bedBD013015009->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015009->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015010->status == 'kosong') ? 'green' : (($bedBD013015010->status == 'terisi') ? 'purple' : (($bedBD013015010->status == 'perbaikan') ? 'yellow' : (($bedBD013015010->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015010" id="BD013015010" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015010->status == 'kosong') ? 'Kosong' : (($bedBD013015010->status == 'terisi') ? 'Terisi' : (($bedBD013015010->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015010->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015011->status == 'kosong') ? 'green' : (($bedBD013015011->status == 'terisi') ? 'purple' : (($bedBD013015011->status == 'perbaikan') ? 'yellow' : (($bedBD013015011->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015011" id="BD013015011" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015011->status == 'kosong') ? 'Kosong' : (($bedBD013015011->status == 'terisi') ? 'Terisi' : (($bedBD013015011->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015011->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="small-box btn-block gantiStatusBed bg-<?php echo ($bedBD013015012->status == 'kosong') ? 'green' : (($bedBD013015012->status == 'terisi') ? 'purple' : (($bedBD013015012->status == 'perbaikan') ? 'yellow' : (($bedBD013015012->status == 'siapkrs') ? 'aqua' : 'red'))); ?>" style="height: 50px;" data-id="BD013015012" id="BD013015012" <?php if ($userdata == '') { ?> disabled <?php } ?>><?php echo ($bedBD013015012->status == 'kosong') ? 'Kosong' : (($bedBD013015012->status == 'terisi') ? 'Terisi' : (($bedBD013015012->status == 'perbaikan') ? 'Perbaikan' : (($bedBD013015012->status == 'siapkrs') ? 'Siap KRS' : "Siap MRS"))); ?></button>
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
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-xs-5"></div>
                <div class="col-lg-1 col-xs-1">
                    <div style="width:20px; height:20px; background-color: #605CA8;">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terisi</h4>
                    </div>
                </div>
                <div class="col-lg-1 col-xs-1">
                    <div style="width:20px; height:20px; background-color: #00A65A;">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kosong</h4>
                    </div>
                </div>
                <div class="col-lg-5 col-xs-5"></div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        new Splide('#splide', {
            type: 'loop',
            autoplay: true,
        }).mount();
    });
</script>