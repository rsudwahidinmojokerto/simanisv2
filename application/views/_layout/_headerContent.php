<?php if ($userdata != '' || $userdata != null) { ?>
	<section class="content-header" <?php if ($judul == "Dashboard" && $userdata->id_ruang == "") {
										echo "style='padding-top: 40px'";
									} ?>>
		<h1>
			Halaman <?php echo @$judul; ?>
			<small><?php echo @$deskripsi; ?></small>
		</h1>
		<ol class="breadcrumb" <?php if ($judul == "Dashboard" && $userdata->id_ruang == "") {
									echo "style='padding-top: 32px'";
								} ?>>
			<?php
			for ($i = 0; $i < count($this->session->flashdata('segment')); $i++) {
				if ($i == 0) {
			?>
					<li><i class="fa fa-dashboard"></i> <?php echo $this->session->flashdata('segment')[$i]; ?></li>
				<?php
				} elseif ($i == (count($this->session->flashdata('segment')) - 1)) {
				?>
					<li class="active"> <?php echo $this->session->flashdata('segment')[$i]; ?> </li>
				<?php
				} else {
				?>
					<li> <?php echo $this->session->flashdata('segment')[$i]; ?> </li>
				<?php
				}

				if ($i == 0 && $i == (count($this->session->flashdata('segment')) - 1)) {
				?>
					<li class="active"> <?php echo @$judul ?> </li>
			<?php
				}
			}
			?>
		</ol>
	</section>
<?php } else { ?>
	<br>
	<br>
	<br>
<?php } ?>