if (document.getElementById('form_btn_update_zv_setting_design')) {
	document.getElementById('form_btn_update_zv_setting_design').onclick = function(e) {
		e.preventDefault();
		_ini_update_zv_setting_design();
	};
}

if (document.getElementById('form_update_zv_setting_design')) {
	document.getElementById('form_update_zv_setting_design').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode != '13') {
			_ini_update_zv_setting_design();
			return false;
		}
	};
}

function _ini_update_zv_setting_design() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_setting_design').removeClass('alert-danger');
	$('#form_ajax_zv_setting_design').removeClass('alert-success');
	$('#form_ajax_zv_setting_design').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_setting_design').addClass('alert-warning');
	$("#form_ajax_zv_setting_design").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_setting_design').removeClass('hide');
	$('#form_ajax_zv_setting_design').addClass('alert');
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
						$('#form_ajax_zv_setting_design').removeClass('alert');
						$('#form_ajax_zv_setting_design').addClass('hide');
						$('#form_ajax_zv_setting_design').html('');
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
					$.ajax({
						type : "POST",
						url : "api/zv_setting_design/update",
						data : $('#form_update_zv_setting_design').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Añadir y remover las clases incorporadas de las hojas de estilo
								$('#form_ajax_zv_setting_design').html(success_icon + obj.message);
								$("#form_ajax_zv_setting_design").removeClass('alert-warning');
								$("#form_ajax_zv_setting_design").addClass('alert-success');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_zv_setting_design').removeClass('alert');
									$('#form_ajax_zv_setting_design').addClass('hide');
									$('#form_ajax_zv_setting_design').html('');
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
								$('#form_ajax_zv_setting_design').html(error_icon + obj.message);
								$("#form_ajax_zv_setting_design").removeClass('alert-warning');
								$("#form_ajax_zv_setting_design").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_zv_setting_design').addClass('alert-danger');
							$("#form_ajax_zv_setting_design").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_zv_setting_design').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};