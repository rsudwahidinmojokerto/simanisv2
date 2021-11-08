<div id="tempat-modal"></div>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="splide" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php if (!empty($userdata->id_ruang) == 'RU001' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999' || $userdata == '') {
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
                            if (!empty($userdata->id_ruang) == 'RU002' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999' || $userdata == '') {
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
                            if (!empty($userdata->id_ruang) == 'RU003' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999' || $userdata == '') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU004' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU005' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU006' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU007' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU008' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU009' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU010' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU010' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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
                            <?php
                            }
                            if (!empty($userdata->id_ruang) == 'RU014' || !empty($userdata->id_ruang) == 'RU998' || !empty($userdata->id_ruang) == 'RU999') {
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