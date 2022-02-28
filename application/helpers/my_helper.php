<?php
// MSG
function show_msg($content = '', $type = 'success', $icon = 'fa-info-circle', $size = '14px')
{
	if ($content != '') {
		return  '<p class="box-msg">
				      <div class="info-box alert-' . $type . '">
					      <div class="info-box-icon">
					      	<i class="fa ' . $icon . '"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' . $size . '">
				        	' . $content
			. '</div>
					  </div>
				    </p>';
	}
}

function show_succ_msg($content = '', $size = '14px')
{
	if ($content != '') {
		return   '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' . $size . '">
				        	' . $content
			. '</div>
					  </div>
				    </p>';
	}
}

function show_err_msg($content = '', $size = '14px')
{
	if ($content != '') {
		return   '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' . $size . '">
				        	' . $content
			. '</div>
					  </div>
				    </p>';
	}
}

function show_succ_msg_custom($content = '', $size = '14px', $id, $password)
{
	if ($content != '') {
		return   '<p class="box-msg">
							<button type="button" class="close msg-close" style="margin-right: 7px"><span aria-hidden="true">&times;</span></button>
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' . $size . '">
				        	' . $content
			. '</div>
								<div class="info-box-content" style="font-size: 13px">ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
				        	' . $id
			. '</div>
								<div class="info-box-content" style="font-size: 13px">Password&nbsp;&nbsp;&nbsp;: 
				        	' . $password
			. '</div>
					  </div>
				    </p>';
	}
}

// MODAL
function show_my_modal($content = '', $id = '', $data = '', $size = 'lg')
{
	$_ci = &get_instance();

	if ($content != '') {
		$view_content = $_ci->load->view($content, $data, TRUE);

		return '<div class="modal fade" id="' . $id . '" role="dialog">
					  <div class="modal-dialog modal-' . $size . '" role="document">
					    <div class="modal-content">
					        ' . $view_content . '
					    </div>
					  </div>
					</div>';
	}
}

function show_my_confirm($id = '', $class = '', $title = 'Konfirmasi', $yes = 'Ya', $no = 'Tidak')
{
	$_ci = &get_instance();

	if ($id != '') {
		echo '<div class="modal fade" id="' . $id . '" role="dialog">
					  <div class="modal-dialog modal-md" role="document">
					    <div class="modal-content">
							<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
						      <h3 style="display:block; text-align:center;">' . $title . '</h3>
						      <div class="col-md-6">
						        <button class="form-control btn btn-primary ' . $class . '"> <i class="glyphicon glyphicon-ok-sign"></i> ' . $yes . '</button>
						      </div>
						      <div class="col-md-6">
						        <button class="form-control btn btn-danger" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> ' . $no . '</button>
						      </div>
						    </div>
					    </div>
					  </div>
					</div>';
	}
}

function show_bukti($content = '', $id = '', $data = '', $size = 'md')
{
	$_ci = &get_instance();

	if ($content != '') {
		$view_content = $_ci->load->view($content, $data, TRUE);

		return '<div class="modal fade" id="' . $id . '" role="dialog">
					  <div class="modal-dialog modal-' . $size . '" role="document">
					    <div class="modal-content">
					        ' . $view_content . '
					    </div>
					  </div>
					</div>';
	}
}
