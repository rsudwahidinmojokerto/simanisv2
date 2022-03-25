<script type="text/javascript">
	var MyTable = $('#list-data').dataTable();

	window.onload = function() {
		tampilKetersediaanBed();
		// getJumlahRuangKelas();

		tampilPelanggan();
		tampilPenyuplai();
		tampilKaurKeuangan();
		tampilAdmin();
		tampilVerifikasi();
		tampilHarga();
		tampilRiwayatBayar();
		tampilRiwayatGuna();
		tampilInbox();
		tampilSent();
		// tampilDropdown();
		<?php
		if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		}
		?>
	}

	function refresh() {
		MyTable = $('#list-data').dataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": true,
			"scrollX": true,
			"columnDefs": [{
				"orderable": false,
				"targets": [5, 6]
			}]
		});

		// var MyTable2 = $('.ketersediaanBed').dataTable({
		// 	"columnDefs": [{
		// 		"orderable": false,
		// 		"targets": [5, 6]
		// 	}]
		// })
	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() {
			$('.form-msg').fadeOut(1000);
		}, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() {
			$('.msg').fadeOut(1000);
		}, 3000);
	}

	function effect_msg2() {
		// $('.msg').hide();
		$('.msg').show(1000);
		// setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	//////////////////////// GANTI STATUS BED /////////////////////////

	$(document).on("click", ".gantiStatusBed", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('home/updateBed'); ?>",
				data: "id_bed=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#update-bed').modal('show');
			})
	})

	$(document).on('submit', '#form-status-bed', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('home/prosesUbahBed'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					var bed = out.idBed;
					if (out.statusBed == 'kosong') {
						$('#' + bed).removeClass(function(index, css) {
							return (css.match(/(^|\s)bg-\S+/g) || []).join(' ');
						});

						if (bed.substr(0, 8) != 'BD002004' && bed.substr(0, 8) != 'BD002015' && bed.substr(0, 8) != 'BD003004') {
							$('#' + bed).text('Kosong');
						}
						$('#' + bed).addClass('bg-green');
						$('#jumlahBed' + out.ruangBed).text('TERISI: ' + out.countTerisi['jumlah'] + ', KOSONG: ' + out.countKosong['jumlah']);
					} else if (out.statusBed == 'terisi') {
						$('#' + bed).removeClass(function(index, css) {
							return (css.match(/(^|\s)bg-\S+/g) || []).join(' ');
						});

						if (bed.substr(0, 8) != 'BD002004' && bed.substr(0, 8) != 'BD002015' && bed.substr(0, 8) != 'BD003004') {
							$('#' + bed).text('Terisi');
						}
						$('#' + bed).addClass('bg-purple');
						$('#jumlahBed' + out.ruangBed).text('TERISI: ' + out.countTerisi['jumlah'] + ', KOSONG: ' + out.countKosong['jumlah']);
					} else if (out.statusBed == 'perbaikan') {
						$('#' + bed).removeClass(function(index, css) {
							return (css.match(/(^|\s)bg-\S+/g) || []).join(' ');
						});

						if (bed.substr(0, 8) != 'BD002004' && bed.substr(0, 8) != 'BD002015' && bed.substr(0, 8) != 'BD003004') {
							$('#' + bed).text('Perbaikan');
						}
						$('#' + bed).addClass('bg-yellow');
						$('#jumlahBed' + out.ruangBed).text('TERISI: ' + out.countTerisi['jumlah'] + ', KOSONG: ' + out.countKosong['jumlah']);
					} else if (out.statusBed == 'siapkrs') {
						$('#' + bed).removeClass(function(index, css) {
							return (css.match(/(^|\s)bg-\S+/g) || []).join(' ');
						});

						if (bed.substr(0, 8) != 'BD002004' && bed.substr(0, 8) != 'BD002015' && bed.substr(0, 8) != 'BD003004') {
							$('#' + bed).text('Siap KRS');
						}
						$('#' + bed).addClass('bg-aqua');
						$('#jumlahBed' + out.ruangBed).text('TERISI: ' + out.countTerisi['jumlah'] + ', KOSONG: ' + out.countKosong['jumlah']);
					} else if (out.statusBed == 'siapmrs') {
						$('#' + bed).removeClass(function(index, css) {
							return (css.match(/(^|\s)bg-\S+/g) || []).join(' ');
						});

						if (bed.substr(0, 8) != 'BD002004' && bed.substr(0, 8) != 'BD002015' && bed.substr(0, 8) != 'BD003004') {
							$('#' + bed).text('Siap MRS');
						}
						$('#' + bed).addClass('bg-red');
						$('#jumlahBed' + out.ruangBed).text('TERISI: ' + out.countTerisi['jumlah'] + ', KOSONG: ' + out.countKosong['jumlah']);
					}
					$('#update-bed').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})
		e.preventDefault();
	});

	////////////////////////// END STATUS BED /////////////////////////////

	//////////////////////// START STATUS BED 2 ///////////////////////////

	function tampilKetersediaanBed() {
		$.get('<?php echo base_url('ketersediaanBed/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-ketersediaanBed').html(data);
			refresh();
		});
	}

	///////////////////////// END STATUS BED 2 ////////////////////////////

	///////////////////// START TAMBAH KELAS RUANG ////////////////////////

	$('#form-tambah-kelasRuang').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('ketersediaanBed/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilKetersediaanBed();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-kelasRuang").reset();
					$('#tambah-ketersediaanBed').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})
		e.preventDefault();
	});

	///////////////////////// END TAMBAH KELAS RUANG //////////////////////////////

	///////////////////////// START UPDATE KAPASITAS //////////////////////////////

	$(document).on("click", '.update-dataKetersediaanBed', function(e) {
		var id = $(this).attr("data-id");
		var table = $('.ketersediaanBed').DataTable();
		var kapasitas = table.row($(this).closest("td")).nodes().to$().find('#kapasitas').val();
		var tersedia = table.row($(this).closest("td")).nodes().to$().find('#tersedia').val();

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('ketersediaanBed/updateKetersediaanBed'); ?>",
				data: {
					idRuangKelas: id,
					kapasitas: kapasitas,
					tersedia: tersedia
				}
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);
				tampilKetersediaanBed();
				$('.msg').html(out.msg);
				effect_msg();
			})
		e.preventDefault();
	})

	////////////////////////// END UPDATE KAPASITAS ///////////////////////////////

	/////////////////////////// START HAPUS RUANG /////////////////////////////////

	var idRuangKelasHapus;
	$(document).on("click", ".konfirmasiHapus-ketersediaanBed", function() {
		idRuangKelasHapus = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataKetersediaanBed", function() {
		var id = idRuangKelasHapus;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('ketersediaanBed/delete'); ?>",
				data: "idRuangKelas=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				// $('.header-kaurkeuangan').show(1000);
				tampilKetersediaanBed();
				$('.msg').html(data);
				effect_msg();
			})
	})

	//////////////////////////// END HAPUS RUANG //////////////////////////////////

	/////////////////////// START REALTIME JUMLAH BED /////////////////////////////

	// var map = [];

	// // var jumlahRuangKelas;
	// // $.get('<?php echo base_url('ketersediaanBed/jumlahRuangKelas'); ?>', function(data) {
	// // 	jumlahRuangKelas = data;
	// // 	return jumlahRuangKelas;
	// // });

	// var options = {
	// 	useEasing: true,
	// 	useGrouping: true,
	// 	separator: '.',
	// 	decimal: ',',
	// 	prefix: '',
	// 	suffix: ''
	// };

	// for (let i = 1; i <= 1000; i++) {
	// 	map[i] = new CountUp('realtimeJumlahRuangKelas' + i, 0, 0, 0, 5, options);
	// 	map[i].start();
	// }

	// function realtimeJumlahBed() {
	// 	$.ajax({
	// 		method: 'POST',
	// 		url: "<?php echo base_url('ketersediaanBed/cekJumlahBed'); ?>",
	// 		dataType: 'json',
	// 		cache: false,
	// 		success: function(data) {
	// 			for (let i = 1; i <= data.jumlahBed; i++) {
	// 				map[i].update(data.jumlahRuangKelas[i]);
	// 			}
	// 		}
	// 	})
	// }

	// setInterval(function() {
	// 	realtimeJumlahBed();
	// }, 10000);

	// scroll.on('move', function() {
	// 	$.ajax({
	// 		method: 'POST',
	// 		url: "<?php echo base_url('ketersediaanBed/cekJumlahBed'); ?>",
	// 		dataType: 'json',
	// 		cache: false,
	// 		success: function(data) {
	// 			for (let i = 1; i <= data.jumlahBed; i++) {
	// 				map[i].update(data.jumlahRuangKelas[i]);
	// 			}
	// 		}
	// 	})
	// });

	//////////////////////// END REALTIME JUMLAH BED //////////////////////////////

	// window.setInterval(function() {
	// 	var elem = document.getElementById('scroll-container');
	// 	elem.scrollTop = elem.scrollHeight;
	// }, 5000);

	// window.scrollTo(0, document.body.scrollHeight);

	// $("html, body").animate({
	// 	scrollTop: $(document).height()
	// }, 15000);
	// setTimeout(function() {
	// 	$('html, body').animate({
	// 		scrollTop: 0
	// 	}, 15000);
	// }, 15000);

	// var scrolltopbottom = setInterval(function() {
	// 	// 4000 - it will take 4 secound in total from the top of the page to the bottom
	// 	$("html, body").animate({
	// 		scrollTop: $(document).height()
	// 	}, 50000);
	// 	// setTimeout(function() {
	// 	$('html, body').animate({
	// 		scrollTop: 0
	// 	}, 0);
	// 	// }, 5000);

	// }, 0);

	// var demo = new Scroller('#scroll-container');

	// $(".scroller").scroller({
	// 	// target container
	// 	"element": "#scroll-container",
	// 	// 3000ms
	// 	"delay": 3000,
	// 	// 100px
	// 	"amount": "100"
	// });

	// $(".scroller").scroller();

	// $("[data-autoscroll]").autoscroll({
	// 	interval: 100,
	// 	hideScrollbar: false,
	// 	handlerIn: null,
	// 	handlerOut: null
	// });

	//scroll dipake
	// $('html, body').animate({
	// 	scrollTop: $(document).height() - $(window).height()
	// }, 100000, function() {
	// 	$(this).animate({
	// 		scrollTop: 0
	// 	}, 1000);
	// });



	// function autoRefresh_div() {
	// 	$("#testtest").load("<?php echo base_url('home'); ?>");
	// }
	// setInterval(autoRefresh_div, 5000); // every 5 seconds
	// autoRefresh_div(); // on load

	// function autoRefresh_div() {
	// 	$("#testtest").load("<?php echo base_url('home'); ?>", function() {
	// 		setTimeout(autoRefresh_div, 25000);
	// 	});
	// }

	// autoRefresh_div();

	// $(function() {
	// 	// don't cache ajax or content won't be fresh
	// 	$.ajaxSetup({
	// 		cache: false
	// 	});
	// 	var ajax_load = "<img src='http://i.imgur.com/pKopwXp.gif' alt='loading...' />";

	// 	// load() functions
	// 	var loadUrl = "http://fiddle.jshell.net/dvb0wpLs/show/";
	// 	$("#loadbasic").click(function() {
	// 		$("#result").html(ajax_load).load(loadUrl);
	// 	});

	// 	// end  
	// });

	// setInterval(function() {
	// 	$.ajaxSetup({
	// 		cache: false
	// 	});
	// 	var loadUrl = '<?php echo base_url('home'); ?>';
	// 	$("#splide").load(loadUrl);
	// 	// location.reload();
	// }, 5000);

	// setInterval(function() {
	// 	location.reload();
	// }, 5000);

	// function autoLoadPage() {
	// 	$.ajax({
	// 		cache: false,
	// 		// url: '<?php echo base_url('home'); ?>',
	// 		url: '<?php echo base_url('home/prosesUbahBed'); ?>',
	// 		type: 'post'
	// 	});

	// 	// 	// $.ajaxSetup({
	// 	// 	// 	cache: false
	// 	// 	// 	// url: '<?php echo base_url('home'); ?>',
	// 	// 	// });
	// 	// 	// var loadUrl = '<?php echo base_url('home'); ?>';
	// 	// 	// $("#splide").load(loadUrl);
	// 	// 	// // location.reload();
	// }

	// $(document).ready(function() {
	// 	setInterval(autoLoadPage, 5000);
	// });


	// $.ajax({
	// 	url: 'http://example.com/refresh.php',
	// 	success: function(data) {
	// 		$('#container').html(data).delay(2000);
	// 	}
	// });

	// $.ajax({
	// 	cache: false,
	// 	// url: '<?php echo base_url('home'); ?>',
	// 	url: '<?php echo base_url('home/prosesUbahBed'); ?>',
	// 	success: function(data) {
	// 		$('#container_splide').html(data).delay(5000);
	// 	}
	// });

















































	//////////////////////////////////// Start Profil ///////////////////////////////////////
	// ubah profil
	$(document).on('submit', '#form-ubah-profil', function(e) {
		e.preventDefault();
		var data = new FormData(this);

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_profil/ubahProfil'); ?>',
				data: data,
				asnyc: false,
				cache: false,
				contentType: false,
				processData: false
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);
				$('.msg').html(out.msg);
				effect_msg();
			})
	});

	// ubah password
	$(document).on('submit', '#form-ubah-password', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_profil/ubahPassword'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);
				document.getElementById("form-ubah-password").reset();
				$('.msg').html(out.msg);
				effect_msg();
			})
		e.preventDefault();
	});
	///////////////////////////////////// End Profil ////////////////////////////////////////

	//////////////////////////////// Start Data Pelanggan ///////////////////////////////////
	//tampil pelanggan
	function tampilPelanggan() {
		$.get('<?php echo base_url('c_dtpelanggan/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-pelanggan').html(data);
			refresh();
		});
	}

	// tambah data pelanggan
	$('#form-tambah-pelanggan').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtpelanggan/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPelanggan();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-pelanggan").reset();
					$('#tambah-pelanggan').modal('hide');
					$('.msg').html(out.msg);
					effect_msg2();
				}
			})
		e.preventDefault();
	});

	// event message close
	$(document).on("click", ".msg-close", function() {
		$('.msg').fadeOut(1000);
	})

	// hapus data pelanggan
	var id_pelanggan;
	$(document).on("click", ".konfirmasiHapus-pelanggan", function() {
		id_pelanggan = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataPelanggan", function() {
		var id = id_pelanggan;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtpelanggan/delete'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				tampilPelanggan();
				$('.msg').html(data);
				effect_msg();
			})
	})

	// update data pelanggan
	$(document).on("click", ".update-dataPelanggan", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtpelanggan/update'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#update-pelanggan').modal('show');
			})
	})

	$(document).on('submit', '#form-update-pelanggan', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtpelanggan/prosesUpdate'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPelanggan();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-update-pelanggan").reset();
					$('#update-pelanggan').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})
		e.preventDefault();
	});

	$('#tambah-pelanggan').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	$('#update-pelanggan').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	///////////////////////////////// End Data Pelanggan ////////////////////////////////////

	//////////////////////////////// Start Data Penyuplai ///////////////////////////////////
	//tampil penyuplai
	function tampilPenyuplai() {
		$.get('<?php echo base_url('c_dtpenyuplai/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-penyuplai').html(data);
			refresh();
		});
	}

	// tambah data penyuplai
	$('#form-tambah-penyuplai').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtpenyuplai/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPenyuplai();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-penyuplai").reset();
					$('#tambah-penyuplai').modal('hide');
					$('.msg').html(out.msg);
					effect_msg2();
				}
			})
		e.preventDefault();
	});

	// event message close
	$(document).on("click", ".msg-close", function() {
		$('.msg').fadeOut(1000);
	})

	// hapus data penyuplai
	var id_penyuplai;
	$(document).on("click", ".konfirmasiHapus-penyuplai", function() {
		id_penyuplai = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataPenyuplai", function() {
		var id = id_penyuplai;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtpenyuplai/delete'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				tampilPenyuplai();
				$('.msg').html(data);
				effect_msg();
			})
	})

	// update data penyuplai
	$(document).on("click", ".update-dataPenyuplai", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtpenyuplai/update'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#update-penyuplai').modal('show');
			})
	})

	$(document).on('submit', '#form-update-penyuplai', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtpenyuplai/prosesUpdate'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPenyuplai();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-update-penyuplai").reset();
					$('#update-penyuplai').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})
		e.preventDefault();
	});

	$('#tambah-penyuplai').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	$('#update-penyuplai').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	//////////////////////////////// End Data Penyuplai ///////////////////////////////////

	///////////////////////////// Start Data Kaur Keuangan ////////////////////////////////
	//tampil kaurkeuangan
	function tampilKaurKeuangan() {
		$.get('<?php echo base_url('c_dtkaurkeuangan/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-kaurkeuangan').html(data);
			refresh();
			if (data == 0) {
				$('.header-kaurkeuangan').show(1000);
			} else {
				$('.header-kaurkeuangan').hide(1000);
			}
		});
	}

	// tambah data kaurkeuangan
	$('#form-tambah-kaurkeuangan').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtkaurkeuangan/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilKaurKeuangan();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-kaurkeuangan").reset();
					$('#tambah-kaurkeuangan').modal('hide');
					$('.msg').html(out.msg);
					effect_msg2();
				}
			})
		e.preventDefault();
	});

	// event message close
	$(document).on("click", ".msg-close", function() {
		$('.msg').fadeOut(1000);
	})

	// hapus data kaur keuangan
	var id_kaurkeuangan;
	$(document).on("click", ".konfirmasiHapus-kaurkeuangan", function() {
		id_kaurkeuangan = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataKaurKeuangan", function() {
		var id = id_kaurkeuangan;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtkaurkeuangan/delete'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				$('.header-kaurkeuangan').show(1000);
				tampilKaurKeuangan();
				$('.msg').html(data);
				effect_msg();
			})
	})

	// update data kaurkeuangan
	$(document).on("click", ".update-dataKaurKeuangan", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtkaurkeuangan/update'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#update-kaurkeuangan').modal('show');
			})
	})

	$(document).on('submit', '#form-update-kaurkeuangan', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtkaurkeuangan/prosesUpdate'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilKaurKeuangan();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-update-kaurkeuangan").reset();
					$('#update-kaurkeuangan').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})
		e.preventDefault();
	});

	$('#tambah-kaurkeuangan').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	$('#update-kaurkeuangan').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	///////////////////////////// End Data Kaur Keuangan ////////////////////////////////

	//////////////////////////////// Start Data Admin ///////////////////////////////////
	//tampil admin
	function tampilAdmin() {
		$.get('<?php echo base_url('c_dtadmin/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-admin').html(data);
			refresh();
		});
	}

	// tambah data admin
	$('#form-tambah-admin').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtadmin/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilAdmin();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-admin").reset();
					$('#tambah-admin').modal('hide');
					$('.msg').html(out.msg);
					effect_msg2();
				}
			})
		e.preventDefault();
	});

	// event message close
	$(document).on("click", ".msg-close", function() {
		$('.msg').fadeOut(1000);
	})

	// hapus data admin
	var id_admin;
	$(document).on("click", ".konfirmasiHapus-admin", function() {
		id_admin = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataAdmin", function() {
		var id = id_admin;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtadmin/delete'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				tampilAdmin();
				$('.msg').html(data);
				effect_msg();
			})
	})

	// update data admin
	$(document).on("click", ".update-dataAdmin", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_dtadmin/update'); ?>",
				data: "idUser=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#update-admin').modal('show');
			})
	})

	$(document).on('submit', '#form-update-admin', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_dtadmin/prosesUpdate'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilAdmin();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-update-admin").reset();
					$('#update-admin').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})
		e.preventDefault();
	});

	$('#tambah-admin').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	$('#update-admin').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	////////////////////////////////// End Data Admin /////////////////////////////////////

	///////////////////////////////// Start Bayar Tunai ///////////////////////////////////
	// Bayar Tunai
	var id_pelanggan;
	var tagihan_bio;
	var daya_bio;
	$(document).on("click", ".konfirmasiBayarTunai", function() {
		id_pelanggan = $(this).attr("data-id");
		tagihan_bio = $('.tagihan').autoNumeric('get');
		daya_bio = $('.daya').text();
	})

	$(document).on("click", ".bayar-tunai", function() {
		$('.bayar-tunai').fadeOut(1000);

		var id = id_pelanggan;
		var tagih = tagihan_bio;
		var daya = daya_bio;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_bayarTunai/prosesBayar'); ?>",
				data: {
					idUser: id,
					tagihan: tagih,
					daya: daya
				}
			})
			.error(function(data) {
				$('.bayar-tunai').fadeIn(1000);
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				$('#konfirmasiBayar').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
				setTimeout(function() {
					window.location = "<?php echo base_url('home'); ?>"
				}, 5000);
			})
	})
	////////////////////////////////// End Bayar Tunai ////////////////////////////////////

	/////////////////////////////// Start Bayar Transfer //////////////////////////////////
	// form transfer
	$(document).on("click", ".kirimBukti", function() {
		$('#idUser').val($(this).attr("data-id"));
		$('#tagihan').val($('.tagihan').autoNumeric('get'));
		$('#daya').val($('.daya').text());
	})

	$('#form-bayar-transfer').submit(function(e) {
		$('.submitTransfer').fadeOut(1000);

		var jmltrf = $('.jumlahTransferBukti').autoNumeric('get');

		var data = new FormData(this);
		data.append('jmltrf', jmltrf);

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_bayarTransfer/prosesBayar'); ?>',
				data: data,
				asnyc: false,
				cache: false,
				contentType: false,
				processData: false
			})
			.error(function(data) {
				$('.submitTransfer').fadeIn(1000);
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
					$('.submitTransfer').fadeIn(1000);
				} else {
					document.getElementById("form-bayar-transfer").reset();
					$('#bayar-transfer').modal('hide');
					$('.msg-warning').fadeOut();
					$('.msg').html(out.msg);
					effect_msg();
					setTimeout(function() {
						window.location = "<?php echo base_url('home'); ?>"
					}, 5000);
				}
			})
		e.preventDefault();
	});
	//////////////////////////////// End Bayar Transfer ///////////////////////////////////

	//////////////////////////// Start Verifikasi Pembayaran //////////////////////////////
	//tampil verifikasi
	function tampilVerifikasi() {
		$.get('<?php echo base_url('c_verifikasi/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-verifikasi').html(data);
			refresh();
		});
	}

	//bukti transfer
	$(document).on("click", ".bukti-verifikasi", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_verifikasi/bukti'); ?>",
				data: "idTagihan=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#bukti-transfer').modal('show');
			})
	})

	//verifikasi bayar
	var id_user;
	$(document).on("click", ".konfirmasi-verifikasi", function() {
		id_user = $(this).attr("data-id");
	})

	$(document).on("click", ".verifikasi-bayar", function() {
		$('.verifikasi-bayar').fadeOut(1000);

		var id = id_user;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_verifikasi/prosesVerifikasi'); ?>",
				data: "idUser=" + id
			})
			.error(function(data) {
				var out = jQuery.parseJSON(data);

				$('.verifikasi-bayar').fadeIn(1000);
				$('.form-msg').html(out.msg);
				effect_msg_form();
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				$('#konfirmasiVerifikasi').modal('hide');
				tampilVerifikasi();
				$('.msg').html(out.msg);
				effect_msg();
			})
	})
	///////////////////////////// End Verifikasi Pembayaran ///////////////////////////////

	///////////////////////////////// Start Ubah Harga ////////////////////////////////////
	//tampil harga
	function tampilHarga() {
		$.get('<?php echo base_url('c_ubahHarga/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-harga').html(data);
			refresh();
		});
	}

	// ubah harga
	var nilai_ubah;
	var user;
	$(document).on("click", ".konfirmasiUbahHarga", function() {
		nilai_ubah = $(".harga").autoNumeric('get');
		user = $(this).attr("data-id");
	})
	$(document).on("click", ".ubah-harga", function(e) {
		var harga = nilai_ubah;
		var id = user;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_ubahHarga/prosesUbah'); ?>",
				data: {
					idUser: id,
					harga: harga
				}
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					$('#konfirmasiUbah').modal('hide');
					tampilHarga();
					$('.hargaTerakhir').autoNumeric('set', harga);
					$('.msg').html(out.msg);
					effect_msg();
				}
			})
		e.preventDefault();
	})

	$('#korfimasiUbah').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})
	////////////////////////////////// End Ubah Harga /////////////////////////////////////

	//////////////////////////////// Start Riwayat Bayar //////////////////////////////////
	function tampilRiwayatBayar() {
		$.get('<?php echo base_url('c_riwayatBayar/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-riwayatBayar').html(data);
			refresh();
		});
	}
	///////////////////////////////// End Riwayat Bayar ///////////////////////////////////

	///////////////////////////////// Start Riwayat Guna //////////////////////////////////
	function tampilRiwayatGuna() {
		$.get('<?php echo base_url('c_riwayatGuna/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-riwayatGuna').html(data);
			refresh();
		});
	}
	////////////////////////////////// End Riwayat Guna ///////////////////////////////////

	///////////////////////////////// Start Perpesanan ////////////////////////////////////
	function tampilInbox() {
		$.get('<?php echo base_url('c_perpesanan/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-kotakMasuk').html(data);
			refresh();
		});
	}

	function tampilSent() {
		$.get('<?php echo base_url('c_perpesanan/tampil_sent'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-kotakKeluar').html(data);
			refresh();
		});
	}

	//tulis pesan
	$('#form-tulis-pesan').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('c_perpesanan/prosesKirim'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilKaurKeuangan();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tulis-pesan").reset();
					$('.select2-tujuan').val('').trigger('change');
					$('#tulis-pesan').modal('hide');
					tampilInbox();
					tampilSent();
					$('.msg').html(out.msg);
					effect_msg();
					kirimNotifikasi();
				}
			})
		e.preventDefault();
	});

	//notifikasi

	function kirimNotifikasi(view = '') {
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('c_perpesanan/pushNotif'); ?>',
			data: {
				view: view
			},
			dataType: 'json',
			cache: false,
			success: function(data) {
				$('.menu-notif').html(data.notification);
				if (data.unseen_notification > 0) {
					$('.count-notif').html(data.unseen_notification);
				}
			}
		})
	}

	$(document).on('click', '.toggle-message', function() {
		$('.count-notif').html('');
		kirimNotifikasi('yes');
	});

	// setInterval(function() {
	// 	kirimNotifikasi();
	// }, 5000);

	//end notifikasi

	// read inbox and sent

	$(document).on("click", ".lihat-pesanInbox", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/readInbox'); ?>",
				data: "idPesan=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#lihat-inbox').modal('show');
			})
	})

	$(document).on("click", ".lihat-pesanSent", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/readSent'); ?>",
				data: "idPesan=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#lihat-sent').modal('show');
			})
	})

	// delete inbox and sent

	var id_pesan;
	var id_pengirim;
	var id_penerima;

	$(document).on("click", ".konfirmasiHapus-inbox", function() {
		id_pesan = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-inbox", function() {
		var id = id_pesan;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/deleteInbox'); ?>",
				data: "idPesan=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				$('.konfirmasiHapus-someInbox').hide();
				tampilInbox();
				$('.msg').html(data);
				effect_msg();
			})
	})

	$(document).on("click", ".hapus-someInbox", function() {
		var arr_pesan = [];
		$('.icheckbox').each(function() {
			if (jQuery(this).is(":checked")) {
				var id = $(this).attr("data-id");
				arr_pesan.push(id);
			}
		})
		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/deleteSomeInbox'); ?>",
				data: {
					arr_pesan: arr_pesan
				}
			})
			.done(function(data) {
				$('#konfirmasiHapusSebagian').modal('hide');
				$('.konfirmasiHapus-someInbox').hide();
				tampilInbox();
				$('.msg').html(data);
				effect_msg();
			})
	})

	$(document).on("click", ".konfirmasiHapus-allInbox", function() {
		id_penerima = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-allInbox", function() {
		var id = id_penerima;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/deleteAllInbox'); ?>",
				data: "idPenerima=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapusSemua').modal('hide');
				$('.konfirmasiHapus-someInbox').hide();
				tampilInbox();
				$('.msg').html(data);
				effect_msg();
			})
	})

	////// end inbox // 

	$(document).on("click", ".konfirmasiHapus-sent", function() {
		id_pesan = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-sent", function() {
		var id = id_pesan;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/deleteSent'); ?>",
				data: "idPesan=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				$('.konfirmasiHapus-someSent').hide();
				tampilSent();
				$('.msg').html(data);
				effect_msg();
			})
	})

	$(document).on("click", ".hapus-someSent", function() {
		var arr_pesan = [];
		$('.icheckbox').each(function() {
			if (jQuery(this).is(":checked")) {
				var id = $(this).attr("data-id");
				arr_pesan.push(id);
			}
		})
		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/deleteSomeSent'); ?>",
				data: {
					arr_pesan: arr_pesan
				}
			})
			.done(function(data) {
				$('#konfirmasiHapusSebagian').modal('hide');
				$('.konfirmasiHapus-someSent').hide();
				tampilSent();
				$('.msg').html(data);
				effect_msg();
			})
	})

	$(document).on("click", ".konfirmasiHapus-allSent", function() {
		id_pengirim = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-allSent", function() {
		var id = id_pengirim;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('c_perpesanan/deleteAllSent'); ?>",
				data: "idPengirim=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapusSemua').modal('hide');
				$('.konfirmasiHapus-someSent').hide();
				tampilSent();
				$('.msg').html(data);
				effect_msg();
			})
	})

	////// end sent //

	////////////////////////////////// End Perpesanan /////////////////////////////////////

	/////////////////////////////////// Begin Count up ////////////////////////////////////
	// var options1 = {
	// 	useEasing: true,
	// 	useGrouping: true,
	// 	separator: '.',
	// 	decimal: ',',
	// 	prefix: 'Rp. ',
	// 	suffix: ''
	// };
	// var options2 = {
	// 	useEasing: true,
	// 	useGrouping: true,
	// 	separator: '.',
	// 	decimal: ',',
	// 	prefix: '',
	// 	suffix: ' m³'
	// };
	// var countTagih = new CountUp('realtimeCountTagihan', 0, 0, 2, 5, options1);
	// var countDaya = new CountUp('realtimeCountDaya', 0, 0, 5, 5, options2);
	// countTagih.start();
	// countDaya.start();

	// //notif cek tagihan daya
	// function realtimeTagihanDaya() {
	// 	$.ajax({
	// 		method: 'POST',
	// 		url: "<?php echo base_url('home/cekTagihanDaya'); ?>",
	// 		dataType: 'json',
	// 		cache: false,
	// 		success: function(data) {
	// 			countTagih.update(data.tagihan);
	// 			countDaya.update(data.daya);
	// 		}
	// 	})
	// }

	// setInterval(function() {
	// 	realtimeTagihanDaya();
	// }, 5000);
	//////////////////////////////////// End Count up /////////////////////////////////////
</script>