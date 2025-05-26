if (document.getElementById('form_btn_update_zv_firm')) {
	document.getElementById('form_btn_update_zv_firm').onclick = function(e) {
		e.preventDefault();
		_ini_update_zv_firm();
	};
}

if (document.getElementById('form_update_zv_firm')) {
	document.getElementById('form_update_zv_firm').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode != '13') {
			_ini_update_zv_firm();
			return false;
		}
	};
}

function _ini_update_zv_firm() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_firm').removeClass('alert-danger');
	$('#form_ajax_zv_firm').removeClass('alert-success');
	$('#form_ajax_zv_firm').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_firm').addClass('alert-warning');
	$("#form_ajax_zv_firm").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_firm').removeClass('hide');
	$('#form_ajax_zv_firm').addClass('alert');
	var ajaxurl = var_url + 'profile/document/';
	var formData = new FormData(document.getElementById("form_update_zv_firm"));
	var load_file = $("#field_firm")[0].files.length;
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: "<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>",
		size: 'large',
		buttons: {
			cancel: {
				label: "Cancelar",
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_zv_firm').removeClass('alert');
						$('#form_ajax_zv_firm').addClass('hide');
						$('#form_ajax_zv_firm').html('');
					}, 0);
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Cancelado!</span>",
						message: "<span><strong>Exito:</strong> Haz cancelado exitosamente la accion.</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var fileInput = document.getElementById('field_firm');
					var filePath = fileInput.value;
					var allowedExtensions = /(.png)$/i;

					if (load_file === 0) {
						$("#form_ajax_zv_firm").removeClass('alert-warning');
						$('#form_ajax_zv_firm').addClass('alert-danger');
						$("#form_ajax_zv_firm").html(error_icon  + '<b>Error:</b> El campo de archivo imagen es obligatorio');
						$('#form_ajax_zv_firm').removeClass('hide');
					} else {
						if (!allowedExtensions.exec(filePath)) {
							$("#form_ajax_zv_firm").removeClass('alert-warning');
							$('#form_ajax_zv_firm').addClass('alert-danger');
							$("#form_ajax_zv_firm").html(error_icon  + '<b>Error:</b> El campo de archivo imagen solo acepta formatos png.');
							$('#form_ajax_zv_firm').removeClass('hide');
							fileInput.value = '';
						} else {
							$.ajax({
								url: ajaxurl,
								type: "POST",
								datatype: "HTML",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,
								success: function(data) {
									$.ajax({
										type : "POST",
										url : "api/zv_firm/update",
										data : $('#form_update_zv_firm').serialize(),
										success : function(json) {
											var obj = jQuery.parseJSON(json);
											if (obj.success == 1) {
												// Añadir y remover las clases incorporadas de las hojas de estilo
												$('#form_ajax_zv_firm').html(success_icon + obj.message);
												$("#form_ajax_zv_firm").removeClass('alert-warning');
												$("#form_ajax_zv_firm").addClass('alert-success');
												// Añadir y remover las clases incorporadas de las hojas de estilo
												setTimeout(function() {
													$('#form_ajax_zv_firm').removeClass('alert');
													$('#form_ajax_zv_firm').addClass('hide');
													$('#form_ajax_zv_firm').html('');
												}, 5000);
												// Mensaje de audio para mostrar en la pagina web
												initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
												bootbox.alert({
													title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
													message: "<span><strong>Exito:</strong> Haz actualizado exitosamente los datos.</span>",
													centerVertical: true,
													className: "modal-alert",
													closeButton: false,
												});
											} else {
												$('#form_ajax_zv_firm').html(error_icon + obj.message);
												$("#form_ajax_zv_firm").removeClass('alert-warning');
												$("#form_ajax_zv_firm").addClass('alert-danger');
											}
										},
										error : function() {
											$('#form_ajax_zv_firm').addClass('alert-danger');
											$("#form_ajax_zv_firm").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
											$('#form_ajax_zv_firm').removeClass('hide');
										},
									});
								},
								error: function() {
									$('#form_ajax_zv_firm').addClass('alert-danger');
									$("#form_ajax_zv_firm").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
									$('#form_ajax_zv_firm').removeClass('hide');
								}
							});
						}
					}
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};