if (document.getElementById('form_btn_archive')) {
	document.getElementById('form_btn_archive').onclick = function(e) {
		e.preventDefault();
		event_archive();
	};
}

if (document.getElementById('form_archive')) {
	document.getElementById('form_archive').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_archive();
			return false;
		}
	};
}

if (document.getElementById('form_btn_delete')) {
	document.getElementById('form_btn_delete').onclick = function(e) {
		e.preventDefault();
		event_delete();
	};
}

if (document.getElementById('form_delete')) {
	document.getElementById('form_delete').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_delete();
			return false;
		}
	};
}

if (document.getElementById('form_btn_drop')) {
	document.getElementById('form_btn_drop').onclick = function(e) {
		e.preventDefault();
		event_drop();
	};
}

if (document.getElementById('form_drop')) {
	document.getElementById('form_drop').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_drop();
			return false;
		}
	};
}

if (document.getElementById('form_btn_eliminate')) {
	document.getElementById('form_btn_eliminate').onclick = function(e) {
		e.preventDefault();
		event_eliminate();
	};
}

if (document.getElementById('form_eliminate')) {
	document.getElementById('form_eliminate').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_eliminate();
			return false;
		}
	};
}

if (document.getElementById('form_btn_import')) {
	document.getElementById('form_btn_import').onclick = function(e) {
		e.preventDefault();
		event_import();
	};
}

if (document.getElementById('form_import')) {
	document.getElementById('form_import').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_import();
			return false;
		}
	};
}

function action_ck_data() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_data').is(':checked')) {
		// Marcar todos los checkbox
		$('.tb_data').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.tb_data').prop('checked', false);
	}
};

function action_ck_backup() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_backup').is(':checked')) {
		// Marcar todos los checkbox
		$('.tb_backup').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.tb_backup').prop('checked', false);
	}
};

function event_archive() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_archive').removeClass('alert-danger');
	$('#form_ajax_archive').removeClass('alert-success');
	$('#form_ajax_archive').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_archive').addClass('alert-warning');
	$("#form_ajax_archive").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_archive').removeClass('hide');
	$('#form_ajax_archive').addClass('alert');
	// Configuracion de la ventana modal
	$('#modal-id-archive').modal('hide');
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
						$('#form_ajax_archive').removeClass('alert');
						$('#form_ajax_archive').addClass('hide');
						$('#form_ajax_archive').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-archive').modal('hide');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/dashboard/azp_ibn_control_panel/archive",
						data : $('#form_archive').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_archive').html(success_icon + obj.message);
								$("#form_ajax_archive").removeClass('alert-warning');
								$("#form_ajax_archive").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-archive').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_archive').removeClass('alert');
									$('#form_ajax_archive').addClass('hide');
									$('#form_ajax_archive').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz archivado exitosamente la base.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-archive').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_archive').html(error_icon + obj.message);
								$("#form_ajax_archive").removeClass('alert-warning');
								$("#form_ajax_archive").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_archive').addClass('alert-danger');
							$("#form_ajax_archive").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_archive').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_delete() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_data').removeClass('alert-danger');
	$('#form_ajax_data').removeClass('alert-success');
	$('#form_ajax_data').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	/*$('#form_ajax_data').addClass('alert-warning');
	$("#form_ajax_data").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_data').removeClass('hide');
	$('#form_ajax_data').addClass('alert');*/
	// Configuracion de la ventana modal
	//$('#modal-id-delete').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.tb_data');
	// Array para cargar los valores obtenidos
	var value_checked = new Array();
	// Recorrer la variable con foreach
	value_table.forEach((e) => {
		// Validacion de si estan chequeados
		if (e.checked == true) {
			// Obtener valores chequeados
			value_checked.push(e.value);
		}
	});
	// Validacion para confirmar si estan chequeados o no
	if (value_checked == '') {
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	} else if (value_checked != '') {
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
							$('#form_ajax_data').removeClass('alert');
							$('#form_ajax_data').addClass('hide');
							$('#form_ajax_data').html('');
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
						// Configuracion de la ventana modal
						//$('#modal-id-delete').modal('hide');
					},
				},
				ok: {
					label: "Completar",
					className: 'btn btn-sm btn-outline-success',
					callback: function() {
						$.ajax({
							type : "POST",
							url : "api/dashboard/azp_ibn_data_main/delete",
							data : $('#form_data').serialize() + '&field_tb_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_data").length) { $('#dt_data').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_data').html(success_icon + obj.message);
									$("#form_ajax_data").removeClass('alert-warning');
									$("#form_ajax_data").addClass('alert-success');
									// Configuracion de la ventana modal
									//$('#modal-id-delete').modal('hide');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_data').removeClass('alert');
										$('#form_ajax_data').addClass('hide');
										$('#form_ajax_data').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_data').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz eliminado exitosamente la base.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Configuracion de la ventana modal
									//$('#modal-id-delete').modal('show');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_data').html(error_icon + obj.message);
									$("#form_ajax_data").removeClass('alert-warning');
									$("#form_ajax_data").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_data').addClass('alert-danger');
								$("#form_ajax_data").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_data').removeClass('hide');
							},
						});
					},
				},
			},
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_eliminate() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_eliminate').removeClass('alert-danger');
	$('#form_ajax_eliminate').removeClass('alert-success');
	$('#form_ajax_eliminate').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_eliminate').addClass('alert-warning');
	$("#form_ajax_eliminate").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_eliminate').removeClass('hide');
	$('#form_ajax_eliminate').addClass('alert');
	// Configuracion de la ventana modal
	$('#modal-id-eliminate').modal('hide');
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
						$('#form_ajax_eliminate').removeClass('alert');
						$('#form_ajax_eliminate').addClass('hide');
						$('#form_ajax_eliminate').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-eliminate').modal('hide');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/dashboard/azp_ibn_control_panel/eliminate",
						data : $('#form_eliminate').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Recargar la tabla con nueva informacion
								//if ($("#dt_base").length) { $('#dt_base').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_eliminate').html(success_icon + obj.message);
								$("#form_ajax_eliminate").removeClass('alert-warning');
								$("#form_ajax_eliminate").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-eliminate').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_eliminate').removeClass('alert');
									$('#form_ajax_eliminate').addClass('hide');
									$('#form_ajax_eliminate').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz eliminado exitosamente la base.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-eliminate').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_eliminate').html(error_icon + obj.message);
								$("#form_ajax_eliminate").removeClass('alert-warning');
								$("#form_ajax_eliminate").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_eliminate').addClass('alert-danger');
							$("#form_ajax_eliminate").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_eliminate').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_drop() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_drop').removeClass('alert-danger');
	$('#form_ajax_drop').removeClass('alert-success');
	$('#form_ajax_drop').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_drop').addClass('alert-warning');
	$("#form_ajax_drop").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_drop').removeClass('hide');
	$('#form_ajax_drop').addClass('alert');
	// Configuracion de la ventana modal
	$('#modal-id-drop').modal('hide');
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
						$('#form_ajax_drop').removeClass('alert');
						$('#form_ajax_drop').addClass('hide');
						$('#form_ajax_drop').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-drop').modal('hide');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/dashboard/azp_ibn_control_panel/drop",
						data : $('#form_drop').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Recargar la tabla con nueva informacion
								if ($("#dt_base").length) { $('#dt_base').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_drop').html(success_icon + obj.message);
								$("#form_ajax_drop").removeClass('alert-warning');
								$("#form_ajax_drop").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-drop').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_drop').removeClass('alert');
									$('#form_ajax_drop').addClass('hide');
									$('#form_ajax_drop').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz eliminado exitosamente la base.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-drop').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_drop').html(error_icon + obj.message);
								$("#form_ajax_drop").removeClass('alert-warning');
								$("#form_ajax_drop").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_drop').addClass('alert-danger');
							$("#form_ajax_drop").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_drop').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_import() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_import').removeClass('alert-danger');
	$('#form_ajax_import').removeClass('alert-success');
	$('#form_ajax_import').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_import').addClass('alert-warning');
	$("#form_ajax_import").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_import').removeClass('hide');
	$('#form_ajax_import').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-import').modal('hide');
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
						$('#form_ajax_import').removeClass('alert');
						$('#form_ajax_import').addClass('hide');
						$('#form_ajax_import').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-import').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var load = $("#field_im_file")[0].files.length;
					var input = document.getElementById('field_im_file');
					var path = input.value;
					var extensions = /(.csv)$/i;
					if (load === 0) {
						// Configuracion de la ventana modal
						$('#modal-id-import').modal('show');
						// Mensaje a mostrar una vez terminada la accion
						$("#form_ajax_import").removeClass('alert-danger');
						$("#form_ajax_import").removeClass('alert-success');
						$("#form_ajax_import").removeClass('alert-warning');
						$("#form_ajax_import").addClass('alert-danger');
						$("#form_ajax_import").html(error_icon  + 'Error: El campo de archivo es obligatorio.');
					} else {
						if (!extensions.exec(path)) {
							// Configuracion de la ventana modal
							$('#modal-id-import').modal('show');
							// Mensaje a mostrar una vez terminada la accion
							$("#form_ajax_import").removeClass('alert-danger');
							$("#form_ajax_import").removeClass('alert-success');
							$("#form_ajax_import").removeClass('alert-warning');
							$("#form_ajax_import").addClass('alert-danger');
							$("#form_ajax_import").html(error_icon  + 'Error: El campo de archivo excel acepta solo el formato csv.');
							// Dejar campos vacios sobre los elementos id del formulario
							document.getElementById('field_im_file').value = '';
							// Configuracion de la ventana modal
							$('#modal-id-import').modal('show');
						} else {
							$.ajax({
								type : "POST",
								url : "api/dashboard/azp_ibn_control_panel/import",
								datatype: "HTML",
								data : new FormData(document.getElementById("form_import")),
								cache: false,
								contentType: false,
								processData: false,
								success : function(json) {
									var obj = jQuery.parseJSON(json);
									if (obj.success == 1) {
										// Recargar la tabla con nueva informacion
										if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
										// Mensaje a mostrar una vez terminada la accion
										$('#form_ajax_import').html(success_icon + obj.message);
										$("#form_ajax_import").removeClass('alert-danger');
										$("#form_ajax_import").removeClass('alert-success');
										$("#form_ajax_import").removeClass('alert-warning');
										$("#form_ajax_import").addClass('alert-success');
										// Dejar campos vacios sobre los elementos id del formulario
										document.querySelector("#form_import").reset();
										// Configuracion de la ventana modal
										$('#modal-id-import').modal('show');
										// Añadir y remover las clases incorporadas de las hojas de estilo
										/*setTimeout(function() {
											$('#form_ajax_import').removeClass('alert');
											$('#form_ajax_import').addClass('hide');
											$('#form_ajax_import').html('');
										}, 0);*/
										// Mensaje de audio para mostrar en la pagina web
										/*initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
										bootbox.alert({
											title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
											message: "<span><strong>Exito:</strong> Haz importado exitosamente el archivo.</span>",
											centerVertical: true,
											className: "modal-alert",
											closeButton: false,
										});*/
									} else {
										// Configuracion de la ventana modal
										$('#modal-id-import').modal('show');
										// Mensaje a mostrar una vez terminada la accion
										$('#form_ajax_import').html(error_icon + obj.message);
										$("#form_ajax_import").removeClass('alert-warning');
										$("#form_ajax_import").addClass('alert-danger');
									}
								},
								error : function() {
									$('#form_ajax_import').addClass('alert-danger');
									$("#form_ajax_import").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
									$('#form_ajax_import').removeClass('hide');
								},
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

function event_filter_column(i) {
	// Validar el campo de texto chequeado
	var smart = $('#col_' + i + '_smart').prop('checked');
	// Control de validacion de filtros
	if (smart == false) {
		$('#col_' + i + '_filter').value = '';
		$('#col_' + i + '_filter').attr('disabled','');
	} else if (smart == true) {
		$('#col_' + i + '_filter').value = '';
		$('#col_' + i + '_filter').removeAttr('disabled','');
	}
	// Funcionalidad para encontrar resultados
	$('#dt_info').DataTable().column(i).search(
		$('#col_' + i + '_filter').val(),
		$('#col_' + i + '_regex').prop('checked'),
		$('#col_' + i + '_smart').prop('checked'),
	).draw();
};

function event_module(mvalue) {
	var id = document.getElementById('field_md_id').value;
	var url = var_url + 'azpibn' + mvalue + '/info/' + id + '/';
	window.location.href = url;
};

function event_sector() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_ibn_sector').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + "dashboard/cpgetclient/" + idtbl + "/";
		$.ajax({
			type: 'POST',
			url: ajaxurl,
		}
		).done(function(argument) {
			$('#field_ibn_client').html(argument);
		});
	}
};

function event_sector_two() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_ibnt_sector').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + "dashboard/cpgetclienttwo/" + idtbl + "/";
		$.ajax({
			type: 'POST',
			url: ajaxurl,
		}
		).done(function(argument) {
			$('#field_ibnt_client').html(argument);
		});
	}
};

function modal_cp_client() {
	var idtbl = $("#dt_base tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/cpdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-module').modal('show');
					document.querySelector("#field_md_id").value = objData.data.lbl_azp_ibn_control_panel_id_azp_ibn_control_panel;
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_cp_module() {
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/cpdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-module').modal('show');
					document.querySelector("#field_md_id").value = objData.data.lbl_azp_ibn_control_panel_id_azp_ibn_control_panel;
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_archive() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		$('#modal-id-archive').modal('show');
		document.querySelector("#field_id_archive").value = idtbl;
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_found() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_data tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		$('#modal-id-found').modal('show');
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_data_main_id_azp_ibn_data_main",
				data: "lbl_azp_ibn_data_main_id_azp_ibn_data_main",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Cliente",
				id: "lbl_azp_ibn_client_t_name",
				data: "lbl_azp_ibn_client_t_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Cargue",
				id: "lbl_azp_ibn_control_panel_t_date_arrival",
				data: "lbl_azp_ibn_control_panel_t_date_arrival",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Codigo Investigacion",
				id: "lbl_azp_ibn_control_panel_t_code_research",
				data: "lbl_azp_ibn_control_panel_t_code_research",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Cedula",
				id: "lbl_azp_ibn_data_main_t_identification",
				data: "lbl_azp_ibn_data_main_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre",
				id: "lbl_azp_ibn_data_main_t_full_name",
				data: "lbl_azp_ibn_data_main_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_found').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + "dashboard/cpfound/" + idtbl + "/",
			// Cargar columnas del encabezado
			columns: columnSet,
			// Opciones para crear, editar, borrar y sincronizar
			altEditor: true,
			// Combinar valores en las demas celdas
			//autoFill: true,
			// Control de funciones Manejo inteligente del ancho de columna
			autoWidth: true,
			// Movilizar columnas en la tabla
			colReorder: true,
			// Creará todos los elementos HTML necesarios por adelantado
			deferRender: true,
			// Fijar columnas en la tabla
			//fixedColumns: true,
			// Fijar columnas en la parte superior de la tabla
			fixedHeader: true,
			// Mostrar entradas de los registros
			info: true,
			// Focalizar una celda de la tabla
			//keys: true,
			// Cambiar numero de registros por pagina
			lengthChange: true,
			// Definir cantidad de registros por paginacion
			lengthMenu: [10, 20, 30, 40, 50, 100, 200, 300, 400, 500,],
			// Ordenar columnas en ascendente o descendente
			order: [[0, "asc",]],
			// Controlar si las tablas de datos deben usar celda única superior
			orderCellsTop: true,
			// Ordenar segun columna los registros
			ordering: true,
			// Paginar registros limitadamente
			paging: true,
			// Procesando informacion de registros
			processing: true,
			// Control para el tamaño de la tabla de datos
			responsive: true,
			// Agrupar las filas de los registros
			//rowGroup: true,
			// Control de busqueda de registros
			searching: true,
			// Selccionar varias filas de registro
			select: false,
			// Procesamiento del lado del servidor
			//serverSide: true,
			// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
			//scroller: true,
			// Control para el desplazamiento medido de arriba abajo
			//scrollCollapse: true,
			// Control para el desplazamiento de derecha a izquiera
			//scrollX: true,
			// Control para el desplazamiento medido de arriba abajo
			//scrollY: 325,
			// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
			stateSave: false,
			// Botones que usan clases de bootstrap
			buttons: [
				{
					text: '<i class="far fa-sync"></i>',
					titleAttr: 'Sincronizar',
					name: 'refresh',
					className: 'btn-sm btn-outline-primary',
					attr: {
						'id': 'change_btn_sync',
						'name': 'change_btn_sync',
					},
				},
				{
					extend: 'copyHtml5',
					text: '<i class="far fa-copy"></i>',
					titleAttr: 'Copiar',
					className: 'd-none btn-sm btn-outline-primary',
					attr: {
						'id': 'change_btn_copy',
						'name': 'change_btn_copy',
					},
				},
				{
					extend: 'pdfHtml5',
					text: '<i class="far fa-file-pdf"></i>',
					titleAttr: 'PDF',
					className: 'd-none btn-sm btn-outline-danger',
					attr: {
						'id': 'change_btn_pdf',
						'name': 'change_btn_pdf',
					},
				},
				{
					extend: 'excelHtml5',
					text: '<i class="far fa-file-excel"></i>',
					titleAttr: 'Excel',
					className: 'btn-sm btn-outline-success',
					attr: {
						'id': 'change_btn_excel',
						'name': 'change_btn_excel',
					},
				},
				{
					extend: 'csvHtml5',
					text: '<i class="far fa-file-csv"></i>',
					titleAttr: 'CSV',
					className: 'btn-sm btn-outline-info',
					attr: {
						'id': 'change_btn_csv',
						'name': 'change_btn_csv',
					},
				},
				{
					extend: 'print',
					text: '<i class="far fa-print"></i>',
					titleAttr: 'Imprimir',
					className: 'd-none btn-sm btn-outline-dark',
					attr: {
						'id': 'change_btn_print',
						'name': 'change_btn_print',
					},
					autoPrint: true,
				},
			],
			columnDefs: [],
		});
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_eliminate(dtvalue) {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#" + dtvalue + " tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		$('#modal-id-eliminate').modal('show');
		document.querySelector("#field_id_eliminate").value = idtbl;
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_drop(dtvalue) {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#" + dtvalue + " tr.selected td:first").find('input').val();;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		$('#modal-id-drop').modal('show');
		document.querySelector("#field_id_drop").value = idtbl;
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_dit_detail() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_data').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_data tr.selected td:first").find('input').val();
	var iddata = document.getElementById('field_id_data').value;
	var videnti = $("#dt_data tr.selected td.lbl_azp_ibn_data_main_t_identification").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {

		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_image').removeClass('alert-danger');
		$('#form_ajax_image').removeClass('alert-success');
		$('#form_ajax_image').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_image').addClass('alert-warning');
		$("#form_ajax_image").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_image').removeClass('hide');
		$('#form_ajax_image').addClass('alert');

		var iddata = document.getElementById('field_id_image').value;
		var ajaxurl = var_url + "dashboard/clientimage/" + iddata + "/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(data) {
			if (data == 0) {
				$('#form_ajax_image').removeClass('alert-danger');
				$('#form_ajax_image').removeClass('alert-success');
				$('#form_ajax_image').removeClass('alert-warning');
				// Añadir y remover las clases incorporadas de las hojas de estilo
				$('#form_ajax_image').addClass('alert-danger');
				$("#form_ajax_image").html(error_icon  + 'Error: El cliente no cuenta con un logo cargado para el diseño de los dits.');
				$('#form_ajax_image').removeClass('hide');
				$('#form_ajax_image').addClass('alert');
			} else {

				// Añadir y remover las clases incorporadas de las hojas de estilo
				setTimeout(function() {
					$('#form_ajax_image').removeClass('alert');
					$('#form_ajax_image').addClass('hide');
					$('#form_ajax_image').html('');
				}, 0);

				// Ocultar la columna especificada de la tabla
				//var vtable = $('#dt_data').DataTable();
				//vtable.column(0).visible(false);
				var vurl = var_url + "dashboard/cpdit/" + iddata + "/?field_identification=" + videnti;
				// Ocultar la columna especificada de la tabla
				$('#modal-id-dit').modal('show');
				// Definiendo valores de la busqueda de resultados
				$('#iframe_dit').attr('src', vurl);
			}
		});
	} else {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_data').DataTable();
		//vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_dit_image() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_image').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_image tr.selected td:first").html();
	var iddata = document.getElementById('field_id_image').value;
	var videnti = $("#dt_image tr.selected td.lbl_azp_ibn_data_main_t_identification").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {

		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_image').removeClass('alert-danger');
		$('#form_ajax_image').removeClass('alert-success');
		$('#form_ajax_image').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_image').addClass('alert-warning');
		$("#form_ajax_image").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_image').removeClass('hide');
		$('#form_ajax_image').addClass('alert');

		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_image').DataTable();
		vtable.column(0).visible(false);

		var iddata = document.getElementById('field_id_image').value;
		var ajaxurl = var_url + "dashboard/clientimage/" + iddata + "/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(data) {
			if (data == 0) {
				$('#form_ajax_image').removeClass('alert-danger');
				$('#form_ajax_image').removeClass('alert-success');
				$('#form_ajax_image').removeClass('alert-warning');
				// Añadir y remover las clases incorporadas de las hojas de estilo
				$('#form_ajax_image').addClass('alert-danger');
				$("#form_ajax_image").html(error_icon  + 'Error: El cliente no cuenta con un logo cargado para el diseño de los dits.');
				$('#form_ajax_image').removeClass('hide');
				$('#form_ajax_image').addClass('alert');
			} else {

				// Añadir y remover las clases incorporadas de las hojas de estilo
				setTimeout(function() {
					$('#form_ajax_image').removeClass('alert');
					$('#form_ajax_image').addClass('hide');
					$('#form_ajax_image').html('');
				}, 0);

				var vurl = var_url + "dashboard/cpdit/" + iddata + "/?field_identification=" + videnti;
				// Ocultar la columna especificada de la tabla
				$('#modal-id-dit').modal('show');
				// Definiendo valores de la busqueda de resultados
				$('#iframe_dit').attr('src', vurl);
			}
		});
	} else {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_image').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_download_base() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_backup').removeClass('alert-danger');
	$('#form_ajax_backup').removeClass('alert-success');
	$('#form_ajax_backup').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_backup').addClass('alert-warning');
	$("#form_ajax_backup").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_backup').removeClass('hide');
	$('#form_ajax_backup').addClass('alert');

	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_tb_base');
	// Array para cargar los valores obtenidos
	var value_checked = new Array();
	// Recorrer la variable con foreach
	value_table.forEach((e) => {
		// Validacion de si estan chequeados
		if (e.checked == true) {
			// Obtener valores chequeados
			value_checked.push(e.value);
		}
	});

	// Validar si el id es mayor a cero
	if (value_checked != '') {
		$.ajax({
			type : "POST",
			url : "api/dashboard/azp_ibn_control_panel/union",
			data : $('#form_backup').serialize() + '&field_ck=' + value_checked,
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_backup').html(success_icon + obj.message);
					$("#form_ajax_backup").removeClass('alert-warning');
					$("#form_ajax_backup").addClass('alert-success');
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_backup').removeClass('alert');
						$('#form_ajax_backup').addClass('hide');
						$('#form_ajax_backup').html('');
					}, 0);
					// Desmarcar el checkbox de seleccionar todos
					//$('#field_ck_pc_no').prop('checked', false);
					// Mensaje de audio para mostrar en la pagina web
					/*initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
						message: "<span><strong>Exito:</strong> Haz añadido exitosamente los datos.</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});*/
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_backup').html(error_icon + obj.message);
					$("#form_ajax_backup").removeClass('alert-warning');
					$("#form_ajax_backup").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_backup').addClass('alert-danger');
				$("#form_ajax_backup").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_backup').removeClass('hide');
			},
		});
		// Ocultar la columna especificada de la tabla
		$('#modal-id-union').modal('show');
		// Column Definitions
		var columnSet = [
			{
				title: "Base",
				id: "lbl_azp_ibn_report_consolidated_t_inf_base",
				data: "lbl_azp_ibn_report_consolidated_t_inf_base",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha",
				id: "lbl_azp_ibn_report_consolidated_t_inf_fecha",
				data: "lbl_azp_ibn_report_consolidated_t_inf_fecha",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Consecutivo",
				id: "lbl_azp_ibn_report_consolidated_t_inf_consecutive",
				data: "lbl_azp_ibn_report_consolidated_t_inf_consecutive",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Entidad",
				id: "lbl_azp_ibn_report_consolidated_t_inf_entity",
				data: "lbl_azp_ibn_report_consolidated_t_inf_entity",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Cedula",
				id: "lbl_azp_ibn_report_consolidated_t_inf_identification",
				data: "lbl_azp_ibn_report_consolidated_t_inf_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre",
				id: "lbl_azp_ibn_report_consolidated_t_inf_full_name",
				data: "lbl_azp_ibn_report_consolidated_t_inf_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo Inmueble",
				id: "lbl_azp_ibn_report_consolidated_t_pro_type_property",
				data: "lbl_azp_ibn_report_consolidated_t_pro_type_property",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Matricula",
				id: "lbl_azp_ibn_report_consolidated_t_pro_enrollment",
				data: "lbl_azp_ibn_report_consolidated_t_pro_enrollment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Direccion",
				id: "lbl_azp_ibn_report_consolidated_t_pro_address",
				data: "lbl_azp_ibn_report_consolidated_t_pro_address",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio",
				id: "lbl_azp_ibn_report_consolidated_t_pro_municipality",
				data: "lbl_azp_ibn_report_consolidated_t_pro_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Departamento",
				id: "lbl_azp_ibn_report_consolidated_t_pro_department",
				data: "lbl_azp_ibn_report_consolidated_t_pro_department",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Area",
				id: "lbl_azp_ibn_report_consolidated_t_pro_area",
				data: "lbl_azp_ibn_report_consolidated_t_pro_area",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Anotacion Compra",
				id: "lbl_azp_ibn_report_consolidated_t_pro_purchase",
				data: "lbl_azp_ibn_report_consolidated_t_pro_purchase",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Titularidad",
				id: "lbl_azp_ibn_report_consolidated_t_pro_ownership",
				data: "lbl_azp_ibn_report_consolidated_t_pro_ownership",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Vr Comercial",
				id: "lbl_azp_ibn_report_consolidated_t_pro_vr_market",
				data: "lbl_azp_ibn_report_consolidated_t_pro_vr_market",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Gravamen",
				id: "lbl_azp_ibn_report_consolidated_t_pro_assessment",
				data: "lbl_azp_ibn_report_consolidated_t_pro_assessment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable",
				id: "lbl_azp_ibn_report_consolidated_t_pro_viable",
				data: "lbl_azp_ibn_report_consolidated_t_pro_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable",
				id: "lbl_azp_ibn_report_consolidated_t_pro_well",
				data: "lbl_azp_ibn_report_consolidated_t_pro_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_consolidated_t_pro_comment",
				data: "lbl_azp_ibn_report_consolidated_t_pro_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Inmueble",
				id: "lbl_azp_ibn_report_consolidated_t_pro_concept",
				data: "lbl_azp_ibn_report_consolidated_t_pro_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concepto Inmueble",
				id: "lbl_azp_ibn_report_consolidated_t_pro_unified",
				data: "lbl_azp_ibn_report_consolidated_t_pro_unified",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Placa",
				id: "lbl_azp_ibn_report_consolidated_t_veh_plaque",
				data: "lbl_azp_ibn_report_consolidated_t_veh_plaque",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Clase",
				id: "lbl_azp_ibn_report_consolidated_t_veh_class",
				data: "lbl_azp_ibn_report_consolidated_t_veh_class",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Marca",
				id: "lbl_azp_ibn_report_consolidated_t_veh_mark",
				data: "lbl_azp_ibn_report_consolidated_t_veh_mark",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Modelo",
				id: "lbl_azp_ibn_report_consolidated_t_veh_model",
				data: "lbl_azp_ibn_report_consolidated_t_veh_model",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Ciudad",
				id: "lbl_azp_ibn_report_consolidated_t_veh_city",
				data: "lbl_azp_ibn_report_consolidated_t_veh_city",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Servicio",
				id: "lbl_azp_ibn_report_consolidated_t_veh_service",
				data: "lbl_azp_ibn_report_consolidated_t_veh_service",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Color",
				id: "lbl_azp_ibn_report_consolidated_t_veh_color",
				data: "lbl_azp_ibn_report_consolidated_t_veh_color",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Linea",
				id: "lbl_azp_ibn_report_consolidated_t_veh_line",
				data: "lbl_azp_ibn_report_consolidated_t_veh_line",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Confecamaras",
				id: "lbl_azp_ibn_report_consolidated_t_veh_make",
				data: "lbl_azp_ibn_report_consolidated_t_veh_make",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Vlr Gravamen",
				id: "lbl_azp_ibn_report_consolidated_t_veh_value",
				data: "lbl_azp_ibn_report_consolidated_t_veh_value",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Gravamen",
				id: "lbl_azp_ibn_report_consolidated_t_veh_assessment",
				data: "lbl_azp_ibn_report_consolidated_t_veh_assessment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Vlr Vehiculo",
				id: "lbl_azp_ibn_report_consolidated_t_veh_vehicle",
				data: "lbl_azp_ibn_report_consolidated_t_veh_vehicle",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable",
				id: "lbl_azp_ibn_report_consolidated_t_veh_viable",
				data: "lbl_azp_ibn_report_consolidated_t_veh_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable",
				id: "lbl_azp_ibn_report_consolidated_t_veh_well",
				data: "lbl_azp_ibn_report_consolidated_t_veh_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_consolidated_t_veh_comment",
				data: "lbl_azp_ibn_report_consolidated_t_veh_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Vehiculo",
				id: "lbl_azp_ibn_report_consolidated_t_veh_concept",
				data: "lbl_azp_ibn_report_consolidated_t_veh_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concepto Vehiculo",
				id: "lbl_azp_ibn_report_consolidated_t_veh_unified",
				data: "lbl_azp_ibn_report_consolidated_t_veh_unified",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo De Certificado",
				id: "lbl_azp_ibn_report_consolidated_t_cam_certified",
				data: "lbl_azp_ibn_report_consolidated_t_cam_certified",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo De Sociedad",
				id: "lbl_azp_ibn_report_consolidated_t_cam_company",
				data: "lbl_azp_ibn_report_consolidated_t_cam_company",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo De Organizacion",
				id: "lbl_azp_ibn_report_consolidated_t_cam_organization",
				data: "lbl_azp_ibn_report_consolidated_t_cam_organization",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Matricula",
				id: "lbl_azp_ibn_report_consolidated_t_cam_enrollment",
				data: "lbl_azp_ibn_report_consolidated_t_cam_enrollment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Renovacion",
				id: "lbl_azp_ibn_report_consolidated_t_cam_renewal",
				data: "lbl_azp_ibn_report_consolidated_t_cam_renewal",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nit Empresa Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_nit",
				data: "lbl_azp_ibn_report_consolidated_t_cam_nit",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Razon Social Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_business",
				data: "lbl_azp_ibn_report_consolidated_t_cam_business",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre Establecimiento Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_establishment",
				data: "lbl_azp_ibn_report_consolidated_t_cam_establishment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Ciudad Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_city",
				data: "lbl_azp_ibn_report_consolidated_t_cam_city",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_municipality",
				data: "lbl_azp_ibn_report_consolidated_t_cam_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Departamento Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_department",
				data: "lbl_azp_ibn_report_consolidated_t_cam_department",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Direccion Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_address",
				data: "lbl_azp_ibn_report_consolidated_t_cam_address",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Telefono Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_phone",
				data: "lbl_azp_ibn_report_consolidated_t_cam_phone",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Activo Total",
				id: "lbl_azp_ibn_report_consolidated_t_cam_active",
				data: "lbl_azp_ibn_report_consolidated_t_cam_active",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Rup",
				id: "lbl_azp_ibn_report_consolidated_t_cam_rup",
				data: "lbl_azp_ibn_report_consolidated_t_cam_rup",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Representante Legal",
				id: "lbl_azp_ibn_report_consolidated_t_cam_rp_full_name",
				data: "lbl_azp_ibn_report_consolidated_t_cam_rp_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Cedula R Legal",
				id: "lbl_azp_ibn_report_consolidated_t_cam_rp_identification",
				data: "lbl_azp_ibn_report_consolidated_t_cam_rp_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Gravamen",
				id: "lbl_azp_ibn_report_consolidated_t_cam_assessment",
				data: "lbl_azp_ibn_report_consolidated_t_cam_assessment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_viable",
				data: "lbl_azp_ibn_report_consolidated_t_cam_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_well",
				data: "lbl_azp_ibn_report_consolidated_t_cam_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_consolidated_t_cam_comment",
				data: "lbl_azp_ibn_report_consolidated_t_cam_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Camara",
				id: "lbl_azp_ibn_report_consolidated_t_cam_concept",
				data: "lbl_azp_ibn_report_consolidated_t_cam_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nit Empresa Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_nit",
				data: "lbl_azp_ibn_report_consolidated_t_fur_nit",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Razon Social Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_business",
				data: "lbl_azp_ibn_report_consolidated_t_fur_business",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Telefono Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_phone",
				data: "lbl_azp_ibn_report_consolidated_t_fur_phone",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Direccion Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_address",
				data: "lbl_azp_ibn_report_consolidated_t_fur_address",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_municipality",
				data: "lbl_azp_ibn_report_consolidated_t_fur_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Departamento Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_department",
				data: "lbl_azp_ibn_report_consolidated_t_fur_department",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Sueldo Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_salary",
				data: "lbl_azp_ibn_report_consolidated_t_fur_salary",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo Cotizante Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_contributor",
				data: "lbl_azp_ibn_report_consolidated_t_fur_contributor",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_viable",
				data: "lbl_azp_ibn_report_consolidated_t_fur_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_well",
				data: "lbl_azp_ibn_report_consolidated_t_fur_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 1",
				id: "lbl_azp_ibn_report_general_t_fur_text_one",
				data: "lbl_azp_ibn_report_general_t_fur_text_one",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 2",
				id: "lbl_azp_ibn_report_general_t_fur_text_two",
				data: "lbl_azp_ibn_report_general_t_fur_text_two",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_consolidated_t_fur_comment",
				data: "lbl_azp_ibn_report_consolidated_t_fur_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Salario",
				id: "lbl_azp_ibn_report_consolidated_t_fur_concept",
				data: "lbl_azp_ibn_report_consolidated_t_fur_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Resultado",
				id: "lbl_azp_ibn_report_consolidated_t_adr_outcome",
				data: "lbl_azp_ibn_report_consolidated_t_adr_outcome",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Estado",
				id: "lbl_azp_ibn_report_consolidated_t_adr_state",
				data: "lbl_azp_ibn_report_consolidated_t_adr_state",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio",
				id: "lbl_azp_ibn_report_consolidated_t_adr_municipality",
				data: "lbl_azp_ibn_report_consolidated_t_adr_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Regimen",
				id: "lbl_azp_ibn_report_consolidated_t_adr_regime",
				data: "lbl_azp_ibn_report_consolidated_t_adr_regime",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Entidad",
				id: "lbl_azp_ibn_report_consolidated_t_adr_entity",
				data: "lbl_azp_ibn_report_consolidated_t_adr_entity",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo Afiliado",
				id: "lbl_azp_ibn_report_consolidated_t_adr_affiliate",
				data: "lbl_azp_ibn_report_consolidated_t_adr_affiliate",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Estado",
				id: "lbl_azp_ibn_report_consolidated_t_war_state",
				data: "lbl_azp_ibn_report_consolidated_t_war_state",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Acreedor",
				id: "lbl_azp_ibn_report_consolidated_t_war_creditor",
				data: "lbl_azp_ibn_report_consolidated_t_war_creditor",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien",
				id: "lbl_azp_ibn_report_consolidated_t_war_well",
				data: "lbl_azp_ibn_report_consolidated_t_war_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Detalle Bien",
				id: "lbl_azp_ibn_report_consolidated_t_war_detail",
				data: "lbl_azp_ibn_report_consolidated_t_war_detail",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Valor",
				id: "lbl_azp_ibn_report_consolidated_t_war_value",
				data: "lbl_azp_ibn_report_consolidated_t_war_value",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha",
				id: "lbl_azp_ibn_report_consolidated_t_war_date",
				data: "lbl_azp_ibn_report_consolidated_t_war_date",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_consolidated_t_war_comment",
				data: "lbl_azp_ibn_report_consolidated_t_war_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concatenado",
				id: "lbl_azp_ibn_report_consolidated_t_war_concept",
				data: "lbl_azp_ibn_report_consolidated_t_war_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable Completo",
				id: "lbl_azp_ibn_report_consolidated_t_inf_well_viable",
				data: "lbl_azp_ibn_report_consolidated_t_inf_well_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concepto Completo",
				id: "lbl_azp_ibn_report_consolidated_t_inf_concept",
				data: "lbl_azp_ibn_report_consolidated_t_inf_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Calificacion Efectividad",
				id: "lbl_azp_ibn_report_consolidated_t_inf_effective",
				data: "lbl_azp_ibn_report_consolidated_t_inf_effective",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Calificacion Viabilidad",
				id: "lbl_azp_ibn_report_consolidated_t_inf_viability",
				data: "lbl_azp_ibn_report_consolidated_t_inf_viability",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_union').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + "dashboard/cpunion/",
			// Cargar columnas del encabezado
			columns: columnSet,
			// Opciones para crear, editar, borrar y sincronizar
			altEditor: true,
			// Combinar valores en las demas celdas
			//autoFill: true,
			// Control de funciones Manejo inteligente del ancho de columna
			autoWidth: true,
			// Movilizar columnas en la tabla
			colReorder: true,
			// Creará todos los elementos HTML necesarios por adelantado
			deferRender: true,
			// Fijar columnas en la tabla
			//fixedColumns: true,
			// Fijar columnas en la parte superior de la tabla
			fixedHeader: true,
			// Mostrar entradas de los registros
			info: true,
			// Focalizar una celda de la tabla
			//keys: true,
			// Cambiar numero de registros por pagina
			lengthChange: true,
			// Definir cantidad de registros por paginacion
			lengthMenu: [10, 20, 30, 40, 50, 100, 200, 300, 400, 500,],
			// Ordenar columnas en ascendente o descendente
			order: [[0, "asc",]],
			// Controlar si las tablas de datos deben usar celda única superior
			orderCellsTop: true,
			// Ordenar segun columna los registros
			ordering: true,
			// Paginar registros limitadamente
			paging: true,
			// Procesando informacion de registros
			processing: true,
			// Control para el tamaño de la tabla de datos
			responsive: false,
			// Agrupar las filas de los registros
			//rowGroup: true,
			// Control de busqueda de registros
			searching: true,
			// Selccionar varias filas de registro
			select: false,
			// Procesamiento del lado del servidor
			//serverSide: true,
			// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
			//scroller: true,
			// Control para el desplazamiento medido de arriba abajo
			//scrollCollapse: true,
			// Control para el desplazamiento de derecha a izquiera
			//scrollX: true,
			// Control para el desplazamiento medido de arriba abajo
			//scrollY: 325,
			// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
			stateSave: false,
			// Botones que usan clases de bootstrap
			buttons: [
				{
					text: '<i class="far fa-sync"></i>',
					titleAttr: 'Sincronizar',
					name: 'refresh',
					className: 'btn-sm btn-outline-primary',
					attr: {
						'id': 'change_btn_sync',
						'name': 'change_btn_sync',
					},
				},
				{
					extend: 'copyHtml5',
					text: '<i class="far fa-copy"></i>',
					titleAttr: 'Copiar',
					className: 'd-none btn-sm btn-outline-primary',
					attr: {
						'id': 'change_btn_copy',
						'name': 'change_btn_copy',
					},
				},
				{
					extend: 'pdfHtml5',
					text: '<i class="far fa-file-pdf"></i>',
					titleAttr: 'PDF',
					className: 'd-none btn-sm btn-outline-danger',
					attr: {
						'id': 'change_btn_pdf',
						'name': 'change_btn_pdf',
					},
				},
				{
					extend: 'excelHtml5',
					text: '<i class="far fa-file-excel"></i>',
					titleAttr: 'Excel',
					className: 'btn-sm btn-outline-success',
					attr: {
						'id': 'change_btn_excel',
						'name': 'change_btn_excel',
					},
				},
				{
					extend: 'csvHtml5',
					text: '<i class="far fa-file-csv"></i>',
					titleAttr: 'CSV',
					className: 'btn-sm btn-outline-info',
					attr: {
						'id': 'change_btn_csv',
						'name': 'change_btn_csv',
					},
				},
				{
					extend: 'print',
					text: '<i class="far fa-print"></i>',
					titleAttr: 'Imprimir',
					className: 'd-none btn-sm btn-outline-dark',
					attr: {
						'id': 'change_btn_print',
						'name': 'change_btn_print',
					},
					autoPrint: true,
				},
			],
			columnDefs: [
				{
					targets: 87,
					render: function(data, type, full, meta) {
						var badge = {
							"POSITIVO": {
								'title': 'POSITIVO',
								'class': 'badge-success'
							},
							"NEGATIVO": {
								'title': 'NEGATIVO',
								'class': 'badge-danger'
							},
						};
						if (typeof badge[data] === 'undefined') { return data; }
						return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
					},
				},
				{
					targets: 88,
					render: function(data, type, full, meta) {
						var badge = {
							"POSITIVO": {
								'title': 'POSITIVO',
								'class': 'badge-success'
							},
							"NEGATIVO": {
								'title': 'NEGATIVO',
								'class': 'badge-danger'
							},
						};
						if (typeof badge[data] === 'undefined') { return data; }
						return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
					},
				},
			],
		});
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_row_dit_img() {
	var iddata = document.getElementById('field_id_image').value;
	var ajaxurl = var_url + "dashboard/dwrownum/" + iddata + "/";
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {});
	var ajaxdel = var_url + "dashboard/dwdelete/" + iddata + "/";
	$.ajax({ type: 'POST', url: ajaxdel, }).done(function(argument) {});
	// Recargar la tabla con nueva informacion
	if ($("#dt_compress").length) { $('#dt_compress').DataTable().ajax.reload(); }
	modal_download_dit_img();
};

function modal_download_dit_img() {
	$('#compress_btn_sync').prop('disabled', true);
	$('#compress_btn_download').prop('disabled', true);
	$('#download_press').prop('disabled', true);
	var iddata = document.getElementById('field_id_image').value;
	var request_vl = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl_vl = var_url + "dashboard/dwvalidatetm/" + iddata + "/";
	request_vl.open("GET", ajaxurl_vl, true);
	request_vl.send();
	//$('#modal-id-detail').modal('show');
	request_vl.onreadystatechange = function(){
		if (request_vl.readyState == 4 && request_vl.status == 200) {
			var objData = JSON.parse(request_vl.responseText);
			if (objData.status) {
				if (objData.data.lbl_count > 0) {
					// Definir los iconos para los correspondientes mensajes
					var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
					var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
					var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
					// Añadir y remover las clases incorporadas de las hojas de estilo
					$('#form_ajax_image').removeClass('alert-danger');
					$('#form_ajax_image').removeClass('alert-success');
					$('#form_ajax_image').removeClass('alert-warning');
					// Añadir y remover las clases incorporadas de las hojas de estilo
					$('#form_ajax_image').addClass('alert-warning');
					$("#form_ajax_image").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
					$('#form_ajax_image').removeClass('hide');
					$('#form_ajax_image').addClass('alert');
					var ajaxurl = var_url + "dashboard/clientimage/" + iddata + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(data) {
						if (data == 0) {
							$('#form_ajax_image').removeClass('alert-danger');
							$('#form_ajax_image').removeClass('alert-success');
							$('#form_ajax_image').removeClass('alert-warning');
							// Añadir y remover las clases incorporadas de las hojas de estilo
							$('#form_ajax_image').addClass('alert-danger');
							$("#form_ajax_image").html(error_icon  + 'Error: El cliente no cuenta con un logo cargado para el diseño de los dits.');
							$('#form_ajax_image').removeClass('hide');
							$('#form_ajax_image').addClass('alert');
						} else {
							var ajaxurl = var_url + "dashboard/dwdit/" + iddata + "/?field_data=" + iddata;
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {});
							var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
							var ajaxurl = var_url + "dashboard/cpdownload/" + iddata + "/";
							request.open("GET", ajaxurl, true);
							request.send();
							//$('#modal-id-detail').modal('show');
							request.onreadystatechange = function(){
								if (request.readyState == 4 && request.status == 200) {
									var objData = JSON.parse(request.responseText);
									if (objData.status) {
										// Asignacion de valores con el texto por defecto
										/*var t_document = objData.data.lbl_azp_ibn_control_panel_t_document;
										var t_encode = objData.data.lbl_azp_ibn_control_panel_t_encode;
										var t_route = objData.data.lbl_azp_ibn_control_panel_t_route;
										var a = $("<a>").attr("href", t_route + t_document).attr("download", t_document).appendTo("body");
										a[0].click(); a.remove();*/
										// Añadir y remover las clases incorporadas de las hojas de estilo
										setTimeout(function() {
											$('#form_ajax_image').removeClass('alert');
											$('#form_ajax_image').addClass('hide');
											$('#form_ajax_image').html('');
										}, 0);
										// Recargar la tabla con nueva informacion
										if ($("#dt_compress").length) { $('#dt_compress').DataTable().ajax.reload(); }
										// Mensaje de audio para mostrar en la pagina web
										/*initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
										bootbox.alert({
											title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
											message: "<span><strong>Exito:</strong> Haz generado exitosamente los datos.</span>",
											centerVertical: true,
											className: "modal-alert",
											closeButton: false,
										});*/
										event_more_dit_img();
									} else {
										// Mensaje de audio para mostrar en la pagina web
										initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
										bootbox.alert({
											size: "small",
											title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
											message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
											centerVertical: true,
											className: "modal-alert",
											closeButton: false,
										});
									}
								}
							}
						}
					});
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
						message: "<span><strong>Exito:</strong> Haz generado exitosamente los datos.</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
					$('#compress_btn_sync').prop('disabled', false);
					$('#compress_btn_download').prop('disabled', false);
					$('#download_press').prop('disabled', false);
				}
			} else {
				// Mensaje de audio para mostrar en la pagina web
				initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
				bootbox.alert({
					size: "small",
					title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
					message: "<span><strong>Exito:</strong> Haz generado exitosamente los datos.</span>",
					centerVertical: true,
					className: "modal-alert",
					closeButton: false,
				});
			}
		}
	}
};

function event_more_dit_img() { modal_download_dit_img(); };

function modal_row_dit_all() {
	var iddata = document.getElementById('field_id_image').value;
	var ajaxurl = var_url + "dashboard/dwrownum/" + iddata + "/";
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {});
	var ajaxdel = var_url + "dashboard/dwdelete/" + iddata + "/";
	$.ajax({ type: 'POST', url: ajaxdel, }).done(function(argument) {});
	// Recargar la tabla con nueva informacion
	if ($("#dt_compress").length) { $('#dt_compress').DataTable().ajax.reload(); }
	modal_download_dit_all();
};

function modal_download_press(mvalue) {
	let date = new Date()
	let year = date.getFullYear();
	let month = `${(date.getMonth() + 1)}`.padStart(2,'0');
	let day = `${(date.getDate())}`.padStart(2,'0');
	var ym = year + '-' + month;
	var ymd = year + '-' + month + '-' + day;
	var route = 'systemfiles/filesproject/azp_ibn_control_panel/compressed/';
	var tdocument = mvalue.replace(route + year + '/' + ym + '/' + ymd + '/', '');
	var a = $("<a>").attr("href", var_url + mvalue).attr("download", tdocument).appendTo("body");
	a[0].click(); a.remove();
};

function modal_download_all() {
	var vcontrol = document.getElementById('field_id_image').value;
	var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl = var_url + "dashboard/ibncompress/" + vcontrol + "/";
	request.open("GET", ajaxurl, true);
	request.send();
	request.onreadystatechange = function() {
		if (request.readyState == 4 && request.status == 200) {
			var objData = JSON.parse(request.responseText);
			for (var vitem of objData.data) {
				var vdocument = vitem['lbl_azp_ibn_compress_t_document'];
				var vroute = vitem['lbl_azp_ibn_compress_t_route'];
				var a = $("<a>").attr("href", var_url + vroute).attr("download", vdocument).appendTo("body");
				a[0].click(); a.remove();
			}
		}
	};
}

function modal_download_dit_all() {
	$('#compress_btn_sync').prop('disabled', true);
	$('#compress_btn_download').prop('disabled', true);
	$('#download_press').prop('disabled', true);
	var iddata = document.getElementById('field_id_image').value;
	var request_vl = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl_vl = var_url + "dashboard/dwvalidatetm/" + iddata + "/";
	request_vl.open("GET", ajaxurl_vl, true);
	request_vl.send();
	//$('#modal-id-detail').modal('show');
	request_vl.onreadystatechange = function(){
		if (request_vl.readyState == 4 && request_vl.status == 200) {
			var objData = JSON.parse(request_vl.responseText);
			if (objData.status) {
				if (objData.data.lbl_count > 0) {
					// Definir los iconos para los correspondientes mensajes
					var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
					var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
					var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
					// Añadir y remover las clases incorporadas de las hojas de estilo
					$('#form_ajax_image').removeClass('alert-danger');
					$('#form_ajax_image').removeClass('alert-success');
					$('#form_ajax_image').removeClass('alert-warning');
					// Añadir y remover las clases incorporadas de las hojas de estilo
					$('#form_ajax_image').addClass('alert-warning');
					$("#form_ajax_image").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
					$('#form_ajax_image').removeClass('hide');
					$('#form_ajax_image').addClass('alert');

					var ajaxurl = var_url + "dashboard/clientimage/" + iddata + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(data) {
						if (data == 0) {
							$('#form_ajax_image').removeClass('alert-danger');
							$('#form_ajax_image').removeClass('alert-success');
							$('#form_ajax_image').removeClass('alert-warning');
							// Añadir y remover las clases incorporadas de las hojas de estilo
							$('#form_ajax_image').addClass('alert-danger');
							$("#form_ajax_image").html(error_icon  + 'Error: El cliente no cuenta con un logo cargado para el diseño de los dits.');
							$('#form_ajax_image').removeClass('hide');
							$('#form_ajax_image').addClass('alert');
						} else {
							var ajaxurl = var_url + "dashboard/dwarchive/" + iddata + "/?field_data=" + iddata;
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {});
							var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
							var ajaxurl = var_url + "dashboard/cparchive/" + iddata + "/";
							request.open("GET", ajaxurl, true);
							request.send();
							//$('#modal-id-detail').modal('show');
							request.onreadystatechange = function(){
								if (request.readyState == 4 && request.status == 200) {
									var objData = JSON.parse(request.responseText);
									if (objData.status) {
										// Asignacion de valores con el texto por defecto
										/*var t_document = objData.data.lbl_azp_ibn_control_panel_t_document;
										var t_encode = objData.data.lbl_azp_ibn_control_panel_t_encode;
										var t_route = objData.data.lbl_azp_ibn_control_panel_t_route;
										var a = $("<a>").attr("href", t_route + t_document).attr("download", t_document).appendTo("body");
										a[0].click(); a.remove();*/
										// Añadir y remover las clases incorporadas de las hojas de estilo
										setTimeout(function() {
											$('#form_ajax_image').removeClass('alert');
											$('#form_ajax_image').addClass('hide');
											$('#form_ajax_image').html('');
										}, 0);
										// Recargar la tabla con nueva informacion
										if ($("#dt_compress").length) { $('#dt_compress').DataTable().ajax.reload(); }
										// Mensaje de audio para mostrar en la pagina web
										/*initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
										bootbox.alert({
											title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
											message: "<span><strong>Exito:</strong> Haz generado exitosamente los datos.</span>",
											centerVertical: true,
											className: "modal-alert",
											closeButton: false,
										});*/
										event_more_dit_all();
										
									} else {
										// Mensaje de audio para mostrar en la pagina web
										initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
										bootbox.alert({
											size: "small",
											title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
											message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
											centerVertical: true,
											className: "modal-alert",
											closeButton: false,
										});
									}
								}
							}
						}
					});
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
						message: "<span><strong>Exito:</strong> Haz generado exitosamente los datos.</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
					$('#compress_btn_sync').prop('disabled', false);
					$('#compress_btn_download').prop('disabled', false);
					$('#download_press').prop('disabled', false);
				}
			} else {
				// Mensaje de audio para mostrar en la pagina web
				initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
				bootbox.alert({
					size: "small",
					title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
					message: "<span><strong>Exito:</strong> Haz generado exitosamente los datos.</span>",
					centerVertical: true,
					className: "modal-alert",
					closeButton: false,
				});
			}
		}
	}
};

function event_more_dit_all() { modal_download_dit_all(); };

function modal_download_image() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_data').removeClass('alert-danger');
	$('#form_ajax_data').removeClass('alert-success');
	$('#form_ajax_data').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_data').addClass('alert-warning');
	$("#form_ajax_data").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_data').removeClass('hide');
	$('#form_ajax_data').addClass('alert');
	// Obtener el primer valor seleccionado de la tabla
	//var idtbl = $("#dt_data tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	//if (idtbl > 0) {
		//alert(idtbl);
	//} else {
		var iddata = document.getElementById('field_id_data').value;
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/cpdwimageall/" + iddata + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					// Asignacion de valores con el texto por defecto
					var t_document = objData.data.lbl_azp_ibn_control_panel_t_document;
					var t_encode = objData.data.lbl_azp_ibn_control_panel_t_encode;
					var t_route = objData.data.lbl_azp_ibn_control_panel_t_route;
					var a = $("<a>").attr("href", t_route + t_document).attr("download", t_document).appendTo("body");
					a[0].click(); a.remove();
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_data').removeClass('alert');
						$('#form_ajax_data').addClass('hide');
						$('#form_ajax_data').html('');
					}, 0);
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
						message: "<span><strong>Exito:</strong> Haz generado exitosamente los datos.</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	//}
};

function event_general() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_md_id').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		$('#modal-id-general').modal('show');
		// Column Definitions
		var columnSet = [
			{
				title: "Consecutivo",
				id: "lbl_azp_ibn_report_general_t_inf_consecutive",
				data: "lbl_azp_ibn_report_general_t_inf_consecutive",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Entidad",
				id: "lbl_azp_ibn_report_general_t_inf_entity",
				data: "lbl_azp_ibn_report_general_t_inf_entity",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Cedula",
				id: "lbl_azp_ibn_report_general_t_inf_identification",
				data: "lbl_azp_ibn_report_general_t_inf_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre",
				id: "lbl_azp_ibn_report_general_t_inf_full_name",
				data: "lbl_azp_ibn_report_general_t_inf_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo Inmueble",
				id: "lbl_azp_ibn_report_general_t_pro_type_property",
				data: "lbl_azp_ibn_report_general_t_pro_type_property",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Matricula",
				id: "lbl_azp_ibn_report_general_t_pro_enrollment",
				data: "lbl_azp_ibn_report_general_t_pro_enrollment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Direccion",
				id: "lbl_azp_ibn_report_general_t_pro_address",
				data: "lbl_azp_ibn_report_general_t_pro_address",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio",
				id: "lbl_azp_ibn_report_general_t_pro_municipality",
				data: "lbl_azp_ibn_report_general_t_pro_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Departamento",
				id: "lbl_azp_ibn_report_general_t_pro_department",
				data: "lbl_azp_ibn_report_general_t_pro_department",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Area",
				id: "lbl_azp_ibn_report_general_t_pro_area",
				data: "lbl_azp_ibn_report_general_t_pro_area",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Anotacion Compra",
				id: "lbl_azp_ibn_report_general_t_pro_purchase",
				data: "lbl_azp_ibn_report_general_t_pro_purchase",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Titularidad",
				id: "lbl_azp_ibn_report_general_t_pro_ownership",
				data: "lbl_azp_ibn_report_general_t_pro_ownership",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Vr Comercial",
				id: "lbl_azp_ibn_report_general_t_pro_vr_market",
				data: "lbl_azp_ibn_report_general_t_pro_vr_market",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Gravamen",
				id: "lbl_azp_ibn_report_general_t_pro_assessment",
				data: "lbl_azp_ibn_report_general_t_pro_assessment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable",
				id: "lbl_azp_ibn_report_general_t_pro_viable",
				data: "lbl_azp_ibn_report_general_t_pro_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable",
				id: "lbl_azp_ibn_report_general_t_pro_well",
				data: "lbl_azp_ibn_report_general_t_pro_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 1",
				id: "lbl_azp_ibn_report_general_t_pro_text_one",
				data: "lbl_azp_ibn_report_general_t_pro_text_one",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 1",
				id: "lbl_azp_ibn_report_general_t_pro_sel_one",
				data: "lbl_azp_ibn_report_general_t_pro_sel_one",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 2",
				id: "lbl_azp_ibn_report_general_t_pro_sel_two",
				data: "lbl_azp_ibn_report_general_t_pro_sel_two",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 2",
				id: "lbl_azp_ibn_report_general_t_pro_text_two",
				data: "lbl_azp_ibn_report_general_t_pro_text_two",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 3",
				id: "lbl_azp_ibn_report_general_t_pro_sel_three",
				data: "lbl_azp_ibn_report_general_t_pro_sel_three",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 4",
				id: "lbl_azp_ibn_report_general_t_pro_sel_four",
				data: "lbl_azp_ibn_report_general_t_pro_sel_four",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 3",
				id: "lbl_azp_ibn_report_general_t_pro_text_three",
				data: "lbl_azp_ibn_report_general_t_pro_text_three",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 4",
				id: "lbl_azp_ibn_report_general_t_pro_text_four",
				data: "lbl_azp_ibn_report_general_t_pro_text_four",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 5",
				id: "lbl_azp_ibn_report_general_t_pro_text_five",
				data: "lbl_azp_ibn_report_general_t_pro_text_five",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 6",
				id: "lbl_azp_ibn_report_general_t_pro_text_six",
				data: "lbl_azp_ibn_report_general_t_pro_text_six",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 7",
				id: "lbl_azp_ibn_report_general_t_pro_text_seven",
				data: "lbl_azp_ibn_report_general_t_pro_text_seven",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 8",
				id: "lbl_azp_ibn_report_general_t_pro_text_eight",
				data: "lbl_azp_ibn_report_general_t_pro_text_eight",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 5",
				id: "lbl_azp_ibn_report_general_t_pro_sel_five",
				data: "lbl_azp_ibn_report_general_t_pro_sel_five",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_general_t_pro_comment",
				data: "lbl_azp_ibn_report_general_t_pro_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Inmueble",
				id: "lbl_azp_ibn_report_general_t_pro_concept",
				data: "lbl_azp_ibn_report_general_t_pro_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concepto Inmueble",
				id: "lbl_azp_ibn_report_general_t_pro_unified",
				data: "lbl_azp_ibn_report_general_t_pro_unified",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Placa",
				id: "lbl_azp_ibn_report_general_t_veh_plaque",
				data: "lbl_azp_ibn_report_general_t_veh_plaque",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Clase",
				id: "lbl_azp_ibn_report_general_t_veh_class",
				data: "lbl_azp_ibn_report_general_t_veh_class",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Marca",
				id: "lbl_azp_ibn_report_general_t_veh_mark",
				data: "lbl_azp_ibn_report_general_t_veh_mark",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Modelo",
				id: "lbl_azp_ibn_report_general_t_veh_model",
				data: "lbl_azp_ibn_report_general_t_veh_model",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Ciudad",
				id: "lbl_azp_ibn_report_general_t_veh_city",
				data: "lbl_azp_ibn_report_general_t_veh_city",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Servicio",
				id: "lbl_azp_ibn_report_general_t_veh_service",
				data: "lbl_azp_ibn_report_general_t_veh_service",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Color",
				id: "lbl_azp_ibn_report_general_t_veh_color",
				data: "lbl_azp_ibn_report_general_t_veh_color",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Linea",
				id: "lbl_azp_ibn_report_general_t_veh_line",
				data: "lbl_azp_ibn_report_general_t_veh_line",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Confecamaras",
				id: "lbl_azp_ibn_report_general_t_veh_make",
				data: "lbl_azp_ibn_report_general_t_veh_make",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Vlr Gravamen",
				id: "lbl_azp_ibn_report_general_t_veh_value",
				data: "lbl_azp_ibn_report_general_t_veh_value",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Gravamen",
				id: "lbl_azp_ibn_report_general_t_veh_assessment",
				data: "lbl_azp_ibn_report_general_t_veh_assessment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Vlr Vehiculo",
				id: "lbl_azp_ibn_report_general_t_veh_vehicle",
				data: "lbl_azp_ibn_report_general_t_veh_vehicle",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable",
				id: "lbl_azp_ibn_report_general_t_veh_viable",
				data: "lbl_azp_ibn_report_general_t_veh_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable",
				id: "lbl_azp_ibn_report_general_t_veh_well",
				data: "lbl_azp_ibn_report_general_t_veh_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 1",
				id: "lbl_azp_ibn_report_general_t_veh_text_one",
				data: "lbl_azp_ibn_report_general_t_veh_text_one",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 2",
				id: "lbl_azp_ibn_report_general_t_veh_text_two",
				data: "lbl_azp_ibn_report_general_t_veh_text_two",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 3",
				id: "lbl_azp_ibn_report_general_t_veh_text_three",
				data: "lbl_azp_ibn_report_general_t_veh_text_three",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 4",
				id: "lbl_azp_ibn_report_general_t_veh_text_four",
				data: "lbl_azp_ibn_report_general_t_veh_text_four",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 5",
				id: "lbl_azp_ibn_report_general_t_veh_text_five",
				data: "lbl_azp_ibn_report_general_t_veh_text_five",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 1",
				id: "lbl_azp_ibn_report_general_t_veh_sel_one",
				data: "lbl_azp_ibn_report_general_t_veh_sel_one",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 2",
				id: "lbl_azp_ibn_report_general_t_veh_sel_two",
				data: "lbl_azp_ibn_report_general_t_veh_sel_two",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Lista 3",
				id: "lbl_azp_ibn_report_general_t_veh_sel_three",
				data: "lbl_azp_ibn_report_general_t_veh_sel_three",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_general_t_veh_comment",
				data: "lbl_azp_ibn_report_general_t_veh_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Vehiculo",
				id: "lbl_azp_ibn_report_general_t_veh_concept",
				data: "lbl_azp_ibn_report_general_t_veh_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concepto Vehiculo",
				id: "lbl_azp_ibn_report_general_t_veh_unified",
				data: "lbl_azp_ibn_report_general_t_veh_unified",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo De Certificado",
				id: "lbl_azp_ibn_report_general_t_cam_certified",
				data: "lbl_azp_ibn_report_general_t_cam_certified",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo De Sociedad",
				id: "lbl_azp_ibn_report_general_t_cam_company",
				data: "lbl_azp_ibn_report_general_t_cam_company",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo De Organizacion",
				id: "lbl_azp_ibn_report_general_t_cam_organization",
				data: "lbl_azp_ibn_report_general_t_cam_organization",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Matricula",
				id: "lbl_azp_ibn_report_general_t_cam_enrollment",
				data: "lbl_azp_ibn_report_general_t_cam_enrollment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Renovacion",
				id: "lbl_azp_ibn_report_general_t_cam_renewal",
				data: "lbl_azp_ibn_report_general_t_cam_renewal",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nit Empresa Camara",
				id: "lbl_azp_ibn_report_general_t_cam_nit",
				data: "lbl_azp_ibn_report_general_t_cam_nit",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Razon Social Camara",
				id: "lbl_azp_ibn_report_general_t_cam_business",
				data: "lbl_azp_ibn_report_general_t_cam_business",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre Establecimiento Camara",
				id: "lbl_azp_ibn_report_general_t_cam_establishment",
				data: "lbl_azp_ibn_report_general_t_cam_establishment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Ciudad Camara",
				id: "lbl_azp_ibn_report_general_t_cam_city",
				data: "lbl_azp_ibn_report_general_t_cam_city",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio Camara",
				id: "lbl_azp_ibn_report_general_t_cam_municipality",
				data: "lbl_azp_ibn_report_general_t_cam_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Departamento Camara",
				id: "lbl_azp_ibn_report_general_t_cam_department",
				data: "lbl_azp_ibn_report_general_t_cam_department",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Direccion Camara",
				id: "lbl_azp_ibn_report_general_t_cam_address",
				data: "lbl_azp_ibn_report_general_t_cam_address",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Telefono Camara",
				id: "lbl_azp_ibn_report_general_t_cam_phone",
				data: "lbl_azp_ibn_report_general_t_cam_phone",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Activo Total",
				id: "lbl_azp_ibn_report_general_t_cam_active",
				data: "lbl_azp_ibn_report_general_t_cam_active",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Rup",
				id: "lbl_azp_ibn_report_general_t_cam_rup",
				data: "lbl_azp_ibn_report_general_t_cam_rup",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Representante Legal",
				id: "lbl_azp_ibn_report_general_t_cam_rp_full_name",
				data: "lbl_azp_ibn_report_general_t_cam_rp_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Cedula R Legal",
				id: "lbl_azp_ibn_report_general_t_cam_rp_identification",
				data: "lbl_azp_ibn_report_general_t_cam_rp_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Gravamen",
				id: "lbl_azp_ibn_report_general_t_cam_assessment",
				data: "lbl_azp_ibn_report_general_t_cam_assessment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable Camara",
				id: "lbl_azp_ibn_report_general_t_cam_viable",
				data: "lbl_azp_ibn_report_general_t_cam_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable Camara",
				id: "lbl_azp_ibn_report_general_t_cam_well",
				data: "lbl_azp_ibn_report_general_t_cam_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_general_t_cam_comment",
				data: "lbl_azp_ibn_report_general_t_cam_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Camara",
				id: "lbl_azp_ibn_report_general_t_cam_concept",
				data: "lbl_azp_ibn_report_general_t_cam_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nit Empresa Salario",
				id: "lbl_azp_ibn_report_general_t_fur_nit",
				data: "lbl_azp_ibn_report_general_t_fur_nit",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Razon Social Salario",
				id: "lbl_azp_ibn_report_general_t_fur_business",
				data: "lbl_azp_ibn_report_general_t_fur_business",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Telefono Salario",
				id: "lbl_azp_ibn_report_general_t_fur_phone",
				data: "lbl_azp_ibn_report_general_t_fur_phone",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Direccion Salario",
				id: "lbl_azp_ibn_report_general_t_fur_address",
				data: "lbl_azp_ibn_report_general_t_fur_address",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio Salario",
				id: "lbl_azp_ibn_report_general_t_fur_municipality",
				data: "lbl_azp_ibn_report_general_t_fur_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Departamento Salario",
				id: "lbl_azp_ibn_report_general_t_fur_department",
				data: "lbl_azp_ibn_report_general_t_fur_department",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Sueldo Salario",
				id: "lbl_azp_ibn_report_general_t_fur_salary",
				data: "lbl_azp_ibn_report_general_t_fur_salary",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo Cotizante Salario",
				id: "lbl_azp_ibn_report_general_t_fur_contributor",
				data: "lbl_azp_ibn_report_general_t_fur_contributor",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Viable Salario",
				id: "lbl_azp_ibn_report_general_t_fur_viable",
				data: "lbl_azp_ibn_report_general_t_fur_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable Salario",
				id: "lbl_azp_ibn_report_general_t_fur_well",
				data: "lbl_azp_ibn_report_general_t_fur_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 1",
				id: "lbl_azp_ibn_report_general_t_fur_text_one",
				data: "lbl_azp_ibn_report_general_t_fur_text_one",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Campo 2",
				id: "lbl_azp_ibn_report_general_t_fur_text_two",
				data: "lbl_azp_ibn_report_general_t_fur_text_two",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_general_t_fur_comment",
				data: "lbl_azp_ibn_report_general_t_fur_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion Salario",
				id: "lbl_azp_ibn_report_general_t_fur_concept",
				data: "lbl_azp_ibn_report_general_t_fur_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Resultado",
				id: "lbl_azp_ibn_report_general_t_adr_outcome",
				data: "lbl_azp_ibn_report_general_t_adr_outcome",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Estado",
				id: "lbl_azp_ibn_report_general_t_adr_state",
				data: "lbl_azp_ibn_report_general_t_adr_state",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Municipio",
				id: "lbl_azp_ibn_report_general_t_adr_municipality",
				data: "lbl_azp_ibn_report_general_t_adr_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Regimen",
				id: "lbl_azp_ibn_report_general_t_adr_regime",
				data: "lbl_azp_ibn_report_general_t_adr_regime",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Entidad",
				id: "lbl_azp_ibn_report_general_t_adr_entity",
				data: "lbl_azp_ibn_report_general_t_adr_entity",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo Afiliado",
				id: "lbl_azp_ibn_report_general_t_adr_affiliate",
				data: "lbl_azp_ibn_report_general_t_adr_affiliate",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Estado",
				id: "lbl_azp_ibn_report_general_t_war_state",
				data: "lbl_azp_ibn_report_general_t_war_state",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Acreedor",
				id: "lbl_azp_ibn_report_general_t_war_creditor",
				data: "lbl_azp_ibn_report_general_t_war_creditor",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien",
				id: "lbl_azp_ibn_report_general_t_war_well",
				data: "lbl_azp_ibn_report_general_t_war_well",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Detalle Bien",
				id: "lbl_azp_ibn_report_general_t_war_detail",
				data: "lbl_azp_ibn_report_general_t_war_detail",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Valor",
				id: "lbl_azp_ibn_report_general_t_war_value",
				data: "lbl_azp_ibn_report_general_t_war_value",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha",
				id: "lbl_azp_ibn_report_general_t_war_date",
				data: "lbl_azp_ibn_report_general_t_war_date",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Comentario Juridico",
				id: "lbl_azp_ibn_report_general_t_war_comment",
				data: "lbl_azp_ibn_report_general_t_war_comment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concatenado",
				id: "lbl_azp_ibn_report_general_t_war_concept",
				data: "lbl_azp_ibn_report_general_t_war_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Viable Completo",
				id: "lbl_azp_ibn_report_general_t_inf_well_viable",
				data: "lbl_azp_ibn_report_general_t_inf_well_viable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concepto Completo",
				id: "lbl_azp_ibn_report_general_t_inf_concept",
				data: "lbl_azp_ibn_report_general_t_inf_concept",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Calificacion Viabilidad",
				id: "lbl_azp_ibn_report_general_t_inf_viability",
				data: "lbl_azp_ibn_report_general_t_inf_viability",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Calificacion Efectividad",
				id: "lbl_azp_ibn_report_general_t_inf_effective",
				data: "lbl_azp_ibn_report_general_t_inf_effective",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_general').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + "dashboard/cpgeneral/" + idtbl + "/",
			// Cargar columnas del encabezado
			columns: columnSet,
			// Opciones para crear, editar, borrar y sincronizar
			altEditor: true,
			// Combinar valores en las demas celdas
			//autoFill: true,
			// Control de funciones Manejo inteligente del ancho de columna
			autoWidth: true,
			// Movilizar columnas en la tabla
			colReorder: true,
			// Creará todos los elementos HTML necesarios por adelantado
			deferRender: true,
			// Fijar columnas en la tabla
			//fixedColumns: true,
			// Fijar columnas en la parte superior de la tabla
			fixedHeader: true,
			// Mostrar entradas de los registros
			info: true,
			// Focalizar una celda de la tabla
			//keys: true,
			// Cambiar numero de registros por pagina
			lengthChange: true,
			// Definir cantidad de registros por paginacion
			lengthMenu: [[100, 200, 300, 400, 500, 1000, 2000, 3000, 4000, 5000, -1,], [100, 200, 300, 400, 500, 1000, 2000, 3000, 4000, 5000, 'Todo',]],
			// Ordenar columnas en ascendente o descendente
			order: [[0, "asc",]],
			// Controlar si las tablas de datos deben usar celda única superior
			orderCellsTop: true,
			// Ordenar segun columna los registros
			ordering: true,
			// Paginar registros limitadamente
			paging: true,
			// Procesando informacion de registros
			processing: true,
			// Control para el tamaño de la tabla de datos
			responsive: false,
			// Agrupar las filas de los registros
			//rowGroup: true,
			// Control de busqueda de registros
			searching: true,
			// Selccionar varias filas de registro
			select: false,
			// Procesamiento del lado del servidor
			//serverSide: true,
			// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
			//scroller: true,
			// Control para el desplazamiento medido de arriba abajo
			//scrollCollapse: true,
			// Control para el desplazamiento de derecha a izquiera
			//scrollX: true,
			// Control para el desplazamiento medido de arriba abajo
			//scrollY: 325,
			// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
			stateSave: false,
			// Botones que usan clases de bootstrap
			buttons: [
				{
					text: '<i class="far fa-sync"></i>',
					titleAttr: 'Sincronizar',
					name: 'refresh',
					className: 'btn-sm btn-outline-primary',
					attr: {
						'id': 'change_btn_sync',
						'name': 'change_btn_sync',
					},
				},
				{
					extend: 'copyHtml5',
					text: '<i class="far fa-copy"></i>',
					titleAttr: 'Copiar',
					className: 'd-none btn-sm btn-outline-primary',
					attr: {
						'id': 'change_btn_copy',
						'name': 'change_btn_copy',
					},
				},
				{
					extend: 'pdfHtml5',
					text: '<i class="far fa-file-pdf"></i>',
					titleAttr: 'PDF',
					className: 'd-none btn-sm btn-outline-danger',
					attr: {
						'id': 'change_btn_pdf',
						'name': 'change_btn_pdf',
					},
				},
				{
					extend: 'excelHtml5',
					text: '<i class="far fa-file-excel"></i>',
					titleAttr: 'Excel',
					className: 'btn-sm btn-outline-success',
					attr: {
						'id': 'change_btn_excel',
						'name': 'change_btn_excel',
					},
					title: null,
				},
				{
					extend: 'csvHtml5',
					text: '<i class="far fa-file-csv"></i>',
					titleAttr: 'CSV',
					className: 'btn-sm btn-outline-info',
					attr: {
						'id': 'change_btn_csv',
						'name': 'change_btn_csv',
					},
				},
				{
					extend: 'print',
					text: '<i class="far fa-print"></i>',
					titleAttr: 'Imprimir',
					className: 'd-none btn-sm btn-outline-dark',
					attr: {
						'id': 'change_btn_print',
						'name': 'change_btn_print',
					},
					autoPrint: true,
				},
			],
			columnDefs: [
				{
					targets: 85,
					render: function(data, type, full, meta) {
						var badge = {
							"POSITIVO": {
								'title': 'POSITIVO',
								'class': 'badge-success'
							},
							"NEGATIVO": {
								'title': 'NEGATIVO',
								'class': 'badge-danger'
							},
						};
						if (typeof badge[data] === 'undefined') { return data; }
						return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
					},
				},
				{
					targets: 86,
					render: function(data, type, full, meta) {
						var badge = {
							"POSITIVO": {
								'title': 'POSITIVO',
								'class': 'badge-success'
							},
							"NEGATIVO": {
								'title': 'NEGATIVO',
								'class': 'badge-danger'
							},
						};
						if (typeof badge[data] === 'undefined') { return data; }
						return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
					},
				},
			],
		});
		// Recargar la tabla con nueva informacion
		if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_entity() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_md_id').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_module').removeClass('alert-danger');
		$('#form_ajax_module').removeClass('alert-success');
		$('#form_ajax_module').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_module').addClass('alert-warning');
		$("#form_ajax_module").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_module').removeClass('hide');
		$('#form_ajax_module').addClass('alert');
		var ajaxclient = var_url + "dashboard/formatentity/" + idtbl + "/";
		$.ajax({ type: 'POST', url: ajaxclient, }).done(function(data) {
			var ajaxurl = var_url + "dashboard/reportentity/" + idtbl + "/";
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#form_ajax_module').removeClass('alert-danger');
				$('#form_ajax_module').removeClass('alert-success');
				$('#form_ajax_module').removeClass('alert-warning');
				$('#form_ajax_module').addClass('alert-success');
				$("#form_ajax_module").html(success_icon  + 'Exito: Reporte generado correctamente.');
				$('#form_ajax_module').removeClass('hide');
				setTimeout(function() {
					$('#form_ajax_module').removeClass('alert');
					$('#form_ajax_module').addClass('hide');
					$('#form_ajax_module').html('');
				}, 5000);
				//console.log(argument);
				var a = $("<a>").attr("href", argument).attr("download", data).appendTo("body");
				a[0].click(); a.remove();
				if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
			});
		});
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_cl_entity() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	//var idtbl = document.getElementById('field_md_id').value;
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_control').removeClass('alert-danger');
		$('#form_ajax_control').removeClass('alert-success');
		$('#form_ajax_control').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_control').addClass('alert-warning');
		$("#form_ajax_control").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_control').removeClass('hide');
		$('#form_ajax_control').addClass('alert');
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		var ajaxclient = var_url + "dashboard/formatentity/" + idtbl + "/";
		$.ajax({ type: 'POST', url: ajaxclient, }).done(function(data) {
			var ajaxurl = var_url + "dashboard/reportentity/" + idtbl + "/";
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#form_ajax_control').removeClass('alert-danger');
				$('#form_ajax_control').removeClass('alert-success');
				$('#form_ajax_control').removeClass('alert-warning');
				$('#form_ajax_control').addClass('alert-success');
				$("#form_ajax_control").html(success_icon  + 'Exito: Reporte generado correctamente.');
				$('#form_ajax_control').removeClass('hide');
				setTimeout(function() {
					$('#form_ajax_control').removeClass('alert');
					$('#form_ajax_control').addClass('hide');
					$('#form_ajax_control').html('');
				}, 5000);
				var a = $("<a>").attr("href", argument).attr("download", data).appendTo("body");
				a[0].click(); a.remove();
			});
		});
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_cl_information() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	//var idtbl = document.getElementById('field_md_id').value;
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_control').removeClass('alert-danger');
		$('#form_ajax_control').removeClass('alert-success');
		$('#form_ajax_control').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_control').addClass('alert-warning');
		$("#form_ajax_control").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_control').removeClass('hide');
		$('#form_ajax_control').addClass('alert');
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/cpcdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_ibn_information_w_document;
					if (fdocument == '' || fdocument == 'null') {
						setTimeout(function() {
							$('#form_ajax_control').removeClass('alert');
							$('#form_ajax_control').addClass('hide');
							$('#form_ajax_control').html('');
						}, 0);
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_info').DataTable();
						vtable.column(0).visible(false);
					} else {
						$('#form_ajax_control').removeClass('alert-danger');
						$('#form_ajax_control').removeClass('alert-success');
						$('#form_ajax_control').removeClass('alert-warning');
						$('#form_ajax_control').addClass('alert-success');
						$("#form_ajax_control").html(success_icon  + 'Exito: Archivo encontrado correctamente.');
						$('#form_ajax_control').removeClass('hide');
						setTimeout(function() {
							$('#form_ajax_control').removeClass('alert');
							$('#form_ajax_control').addClass('hide');
							$('#form_ajax_control').html('');
						}, 5000);
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_info').DataTable();
						vtable.column(0).visible(false);
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_information_w_document;
						var wfolder = objData.data.lbl_azp_ibn_information_w_folder;
						var wname = objData.data.lbl_azp_ibn_information_w_name;
						var wroute = objData.data.lbl_azp_ibn_information_w_route;
						console.log(wroute + wfolder + wdocument);
						var a = $("<a>").attr("href", var_url + wroute.replace('../','') + wfolder + wdocument).attr("download", wname).appendTo("body");
						a[0].click();
						a.remove();
					}
				} else {
					setTimeout(function() {
						$('#form_ajax_control').removeClass('alert');
						$('#form_ajax_control').addClass('hide');
						$('#form_ajax_control').html('');
					}, 0);
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_info').DataTable();
					vtable.column(0).visible(false);
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_cl_imagespress() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	//var idtbl = document.getElementById('field_md_id').value;
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_control').removeClass('alert-danger');
		$('#form_ajax_control').removeClass('alert-success');
		$('#form_ajax_control').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_control').addClass('alert-warning');
		$("#form_ajax_control").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_control').removeClass('hide');
		$('#form_ajax_control').addClass('alert');
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/cpcimages/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_ibn_imagespress_w_document;
					if (fdocument == '' || fdocument == 'null') {
						setTimeout(function() {
							$('#form_ajax_control').removeClass('alert');
							$('#form_ajax_control').addClass('hide');
							$('#form_ajax_control').html('');
						}, 0);
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_info').DataTable();
						vtable.column(0).visible(false);
					} else {
						$('#form_ajax_control').removeClass('alert-danger');
						$('#form_ajax_control').removeClass('alert-success');
						$('#form_ajax_control').removeClass('alert-warning');
						$('#form_ajax_control').addClass('alert-success');
						$("#form_ajax_control").html(success_icon  + 'Exito: Archivo encontrado correctamente.');
						$('#form_ajax_control').removeClass('hide');
						setTimeout(function() {
							$('#form_ajax_control').removeClass('alert');
							$('#form_ajax_control').addClass('hide');
							$('#form_ajax_control').html('');
						}, 5000);
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_info').DataTable();
						vtable.column(0).visible(false);
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_imagespress_w_document;
						var wfolder = objData.data.lbl_azp_ibn_imagespress_w_folder;
						var wname = objData.data.lbl_azp_ibn_imagespress_w_name;
						var wroute = objData.data.lbl_azp_ibn_imagespress_w_route;
						console.log(wroute + wfolder + wdocument);
						var a = $("<a>").attr("href", var_url + wroute.replace('../','') + wfolder + wdocument).attr("download", wname).appendTo("body");
						a[0].click();
						a.remove();
					}
				} else {
					setTimeout(function() {
						$('#form_ajax_control').removeClass('alert');
						$('#form_ajax_control').addClass('hide');
						$('#form_ajax_control').html('');
					}, 0);
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_info').DataTable();
					vtable.column(0).visible(false);
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_gantt() {
	var vmonth = document.getElementById('field_gnt_month').value;
	if (vmonth == '') {
		$('#form_ajax_gantt').addClass('alert alert-danger');
		$("#form_ajax_gantt").html('Error: El campo de mes es obligatorio');
		$('#form_ajax_gantt').removeClass('hide');
	} else {
		var ajaxurl = var_url + "dashboard/cpxlsxgantt/?field_gnt_month=" + vmonth;
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { console.log(argument); });
		// Añadir y remover las clases incorporadas de las hojas de estilo
		setTimeout(function() {
			$('#form_ajax_gantt').removeClass('alert');
			$('#form_ajax_gantt').addClass('hide');
			$('#form_ajax_gantt').html('');
		}, 0);
		// Recargar la tabla con nueva informacion
		if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
		if ($("#dt_gantt").length) { $('#dt_gantt').DataTable().ajax.reload(); }
	}
};

function event_gnt_consult() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_gantt').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_gantt tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = "dashboard/cpdtgantt/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					// Mostrar la columna especificada de la tabla
					//var vtable = $('#dt_gantt').DataTable();
					//vtable.column(0).visible(false);
					var fdocument = objData.data.lbl_azp_ibn_format_gantt_w_document;
					var fname = objData.data.lbl_azp_ibn_format_gantt_w_name;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Asignacion de valores en un campo de texto
						document.getElementById('field_gt_id').value = idtbl;
						//$('#modal-id-consult').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_format_gantt_w_document;
						var wfolder = objData.data.lbl_azp_ibn_format_gantt_w_folder;
						var wname = objData.data.lbl_azp_ibn_format_gantt_w_name;
						var wroute = objData.data.lbl_azp_ibn_format_gantt_w_route;
						//$('#field_gt_iframe').attr('src', var_url + wroute.replace('../','') + wdocument);
						//$('#field_gt_panel').attr('src', var_url + wroute.replace('../','') + wname);

						var var_document = $("<a>").attr("href", var_url + wroute.replace('../','') + wdocument).attr("download", wdocument).appendTo("body");
						var_document[0].click();
						var_document.remove();
						
						//var var_name = $("<a>").attr("href", var_url + wroute.replace('../','') + wname).attr("download", wname).appendTo("body");
						//var_name[0].click();
						//var_name.remove();
					}
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		//var vtable = $('#dt_gantt').DataTable();
		//vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_gnt_download() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_gt_id').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = "dashboard/cpdtgantt/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_ibn_format_gantt_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Definiendo valores de la busqueda de resultados
						var wroute = objData.data.lbl_azp_ibn_format_gantt_w_route;
						var wdocument = objData.data.lbl_azp_ibn_format_gantt_w_document;
						var wfolder = objData.data.lbl_azp_ibn_format_gantt_w_folder;
						var a = $("<a>").attr("href", var_url + wroute.replace('../','') + wdocument).attr("download", wdocument).appendTo("body");
						a[0].click();
						a.remove();
					}
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_gantt() {
	$('#modal-id-gantt').modal('show');
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_ibn_format_gantt_id_azp_ibn_format_gantt",
			data: "lbl_azp_ibn_format_gantt_id_azp_ibn_format_gantt",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Creado Por",
			id: "lbl_azp_user_t_login_created",
			data: "lbl_azp_user_t_login_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Modificado Por",
			id: "lbl_azp_user_t_login_modified",
			data: "lbl_azp_user_t_login_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Creacion",
			id: "lbl_azp_ibn_format_gantt_m_date_created",
			data: "lbl_azp_ibn_format_gantt_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_ibn_format_gantt_m_date_modified",
			data: "lbl_azp_ibn_format_gantt_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_ibn_format_gantt_m_description",
			data: "lbl_azp_ibn_format_gantt_m_description",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Estado",
			id: "lbl_azp_sys_state_t_name",
			data: "lbl_azp_sys_state_t_name",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Mensual",
			id: "lbl_azp_ibn_format_gantt_t_date_month",
			data: "lbl_azp_ibn_format_gantt_t_date_month",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Generado",
			id: "lbl_azp_ibn_format_gantt_w_document",
			data: "lbl_azp_ibn_format_gantt_w_document",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_gantt').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: "dashboard/cpgantt/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		altEditor: true,
		// Combinar valores en las demas celdas
		//autoFill: true,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: true,
		// Movilizar columnas en la tabla
		colReorder: true,
		// Creará todos los elementos HTML necesarios por adelantado
		deferRender: true,
		// Fijar columnas en la tabla
		//fixedColumns: true,
		// Fijar columnas en la parte superior de la tabla
		fixedHeader: true,
		// Mostrar entradas de los registros
		info: true,
		// Focalizar una celda de la tabla
		//keys: true,
		// Cambiar numero de registros por pagina
		lengthChange: true,
		// Definir cantidad de registros por paginacion
		lengthMenu: [10, 20, 30, 40, 50,],
		// Ordenar columnas en ascendente o descendente
		order: [[0, "desc",]],
		// Controlar si las tablas de datos deben usar celda única superior
		orderCellsTop: true,
		// Ordenar segun columna los registros
		ordering: true,
		// Paginar registros limitadamente
		paging: true,
		// Procesando informacion de registros
		processing: true,
		// Control para el tamaño de la tabla de datos
		//responsive: true,
		// Agrupar las filas de los registros
		//rowGroup: true,
		// Control de busqueda de registros
		searching: true,
		// Selccionar varias filas de registro
		select: 'single',
		// Procesamiento del lado del servidor
		//serverSide: true,
		// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
		//scroller: true,
		// Control para el desplazamiento medido de arriba abajo
		//scrollCollapse: true,
		// Control para el desplazamiento de derecha a izquiera
		//scrollX: true,
		// Control para el desplazamiento medido de arriba abajo
		//scrollY: 325,
		// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
		stateSave: false,
		// Botones que usan clases de bootstrap
		buttons: [
			{
				text: '<i class="far fa-sync"></i>',
				titleAttr: 'Sincronizar',
				name: 'refresh',
				className: 'btn-sm btn-outline-primary',
				attr: {
					'id': 'table_btn_sync',
					'name': 'table_btn_sync',
				},
			},
			{
				text: '<i class="far fa-file-excel"></i>',
				titleAttr: 'Gantt',
				className: 'btn-sm btn-outline-success',
				attr: {
					'id': 'table_btn_gantt',
					'name': 'table_btn_gantt',
					'onclick': 'event_gnt_consult();',
				},
			},
		],
		columnDefs: [
			{
				targets: 6,
				render: function(data, type, full, meta) {
					var badge = {
						'Activo': {
							'title': 'Activo',
							'class': 'badge-success'
						},
						'Inactivo': {
							'title': 'Inactivo',
							'class': 'badge-warning'
						},
					};
					if (typeof badge[data] === 'undefined') { return data; }
					return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
				},
			},
		],
	});
};










function event_cam_consult() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_cp_camera').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_cp_camera tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = "dashboard/capdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_cp_camera').DataTable();
					vtable.column(0).visible(false);
					var fdocument = objData.data.lbl_azp_ibn_capture_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Asignacion de valores en un campo de texto
						document.getElementById('field_cn_id').value = idtbl;
						$('#modal-id-capture').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wroute = objData.data.lbl_azp_ibn_capture_w_route;
						$('#field_cn_iframe').attr('src', var_url + wroute.replace('../','') + wfolder + wdocument);
					}
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_cp_camera').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_pro_consult() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_cp_property').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_cp_property tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = "dashboard/capdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_cp_property').DataTable();
					vtable.column(0).visible(false);
					var fdocument = objData.data.lbl_azp_ibn_capture_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Asignacion de valores en un campo de texto
						document.getElementById('field_cn_id').value = idtbl;
						$('#modal-id-capture').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wroute = objData.data.lbl_azp_ibn_capture_w_route;
						$('#field_cn_iframe').attr('src', var_url + wroute.replace('../','') + wfolder + wdocument);
					}
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_cp_property').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_veh_consult() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_cp_vehicle').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_cp_vehicle tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = "dashboard/capdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_cp_vehicle').DataTable();
					vtable.column(0).visible(false);
					var fdocument = objData.data.lbl_azp_ibn_capture_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Asignacion de valores en un campo de texto
						document.getElementById('field_cn_id').value = idtbl;
						$('#modal-id-capture').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wroute = objData.data.lbl_azp_ibn_capture_w_route;
						$('#field_cn_iframe').attr('src', var_url + wroute.replace('../','') + wfolder + wdocument);
					}
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_cp_vehicle').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_mod_download() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_cn_id').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = "dashboard/capdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_ibn_capture_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo de certificado.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Definiendo valores de la busqueda de resultados
						var wroute = objData.data.lbl_azp_ibn_capture_w_route;
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wname = objData.data.lbl_azp_ibn_capture_w_name;
						var a = $("<a>").attr("href", var_url + wroute.replace('../','') + wfolder + wdocument).attr("download", wdocument).appendTo("body");
						a[0].click();
						a.remove();
					}
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};










function event_gp_vi_client() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_gp_client').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + "dashboard/cpgpviclient/" + idtbl + "/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_gp_control').html(argument); });
	}
};

function event_gp_po_client() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_gp_client').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + "dashboard/cpgppoclient/" + idtbl + "/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_gp_control').html(argument); });
	}
};

function event_graphic_viability() {
	var date_since = document.getElementById('field_gp_date_since').value;
	var date_until = document.getElementById('field_gp_date_until').value;
	var control = document.getElementById('field_gp_control').value;

	if (date_since != '' && date_until != '') {
		var ajaxurl = var_url + "dashboard/cpgpvigraphic/" + control + "/?date_since=" + date_since + '&date_until=' + date_until;
	} else {
		var ajaxurl = var_url + "dashboard/cpgpvigraphic/" + control + "/";
	}

	var chartj, options;

	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			options.series[0].data = data;
			chartj = new Highcharts.chart(options);
		}
	});

	options = {
		chart: {
			renderTo: 'graphic_viability',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
		},
		title: {
			text: 'Reporte Grafico Viabilidad',
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			},
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false,
				},
				showInLegend: true,
			},
		},
		series: [
			{
				name: 'Brands',
				colorByPoint: true,
				data: [],
			}
		]
	};
};

function event_graphic_posession() {
	var date_since = document.getElementById('field_gp_date_since').value;
	var date_until = document.getElementById('field_gp_date_until').value;
	var control = document.getElementById('field_gp_control').value;

	if (date_since != '' && date_until != '') {
		var ajaxurl = var_url + "dashboard/cpgppographic/" + control + "/?date_since=" + date_since + '&date_until=' + date_until;
	} else {
		var ajaxurl = var_url + "dashboard/cpgppographic/" + control + "/";
	}

	/*var chartj, options;

	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			options.series[0].data = data;
			chartj = new Highcharts.chart(options);
		}
	});

	options = {
		chart: {
			renderTo: 'graphic_posession',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
		},
		title: {
			text: 'Reporte Grafico Bienes',
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			},
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false,
				},
				showInLegend: true,
			},
		},
		series: [
			{
				name: 'Brands',
				colorByPoint: true,
				data: [],
			}
		]
	};*/








	var val_chart, val_options;
	
	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			val_options.series[0].data = data;
			val_chart = new Highcharts.chart(val_options);
		}
	});
	//Highcharts.chart('hig_qpm_rm_radius_pie', {
	val_options = {
		chart: {
			renderTo: 'graphic_posession',
			type: 'variablepie',
		},
		title: {
			text: 'Reporte Grafico Bienes',
		},
		tooltip: {
			headerFormat: '',
			pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
			'Cantidad: <b>{point.y}</b><br/>',
		},
		series: [
			{
				minPointSize: 10,
				innerSize: '20%',
				zMin: 0,
				name: 'countries',
				data: [],
			},
		],
	};
	//});
};










function event_default_viability() {
	var control = document.getElementById('field_cpdf_client').value;
	var ajaxurl = var_url + "dashboard/cpdfvigraphic/" + control + "/";
	var chartj, options;

	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			options.series[0].data = data;
			chartj = new Highcharts.chart(options);
		}
	});

	options = {
		chart: {
			renderTo: 'graphic_viability',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
		},
		title: {
			text: 'Reporte Grafico Viabilidad',
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			},
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false,
				},
				showInLegend: true,
			},
		},
		series: [
			{
				name: 'Brands',
				colorByPoint: true,
				data: [],
			}
		]
	};
};

function event_default_posession() {
	var control = document.getElementById('field_cpdf_client').value;
	var ajaxurl = var_url + "dashboard/cpdfpographic/" + control + "/";
	/*var chartj, options;

	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			options.series[0].data = data;
			chartj = new Highcharts.chart(options);
		}
	});

	options = {
		chart: {
			renderTo: 'graphic_posession',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
		},
		title: {
			text: 'Reporte Grafico Bienes',
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			},
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false,
				},
				showInLegend: true,
			},
		},
		series: [
			{
				name: 'Brands',
				colorByPoint: true,
				data: [],
			}
		]
	};*/



	var val_chart, val_options;
	
	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			val_options.series[0].data = data;
			val_chart = new Highcharts.chart(val_options);
		}
	});
	//Highcharts.chart('hig_qpm_rm_radius_pie', {
	val_options = {
		chart: {
			renderTo: 'graphic_posession',
			type: 'variablepie',
		},
		title: {
			text: 'Reporte Grafico Bienes',
		},
		tooltip: {
			headerFormat: '',
			pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
			'Cantidad: <b>{point.y}</b><br/>',
		},
		series: [
			{
				minPointSize: 10,
				innerSize: '20%',
				zMin: 0,
				name: 'countries',
				data: [],
			},
		],
	};
	//});
};







function envet_graphic_reset() {
	document.getElementById('field_gp_control').value = '';
	document.getElementById('field_gp_date_since').value = '';
	document.getElementById('field_gp_date_until').value = '';
};

function event_trash() {
	var since = document.getElementById('field_bs_since').value = '';
	var until = document.getElementById('field_bs_until').value = '';
	var identification = document.getElementById('field_bs_idntf').value = '';
	event_data_info();
};

if (document.getElementById('form_btn_ld_remove')) {
	document.getElementById('form_btn_ld_remove').onclick = function(e) {
		e.preventDefault();
		event_ld_remove();
	};
}

if (document.getElementById('form_ld_remove')) {
	document.getElementById('form_ld_remove').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_ld_remove();
			return false;
		}
	};
}

function event_ld_remove() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_iinformation').DataTable();
	//vtable.column(0).visible(true);
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_ld_remove').removeClass('alert-danger');
	$('#form_ajax_ld_remove').removeClass('alert-success');
	$('#form_ajax_ld_remove').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_ld_remove').addClass('alert-warning');
	$("#form_ajax_ld_remove").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_ld_remove').removeClass('hide');
	$('#form_ajax_ld_remove').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-remove').modal('hide');
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
						$('#form_ajax_ld_remove').removeClass('alert');
						$('#form_ajax_ld_remove').addClass('hide');
						$('#form_ajax_ld_remove').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-ld_remove').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/dashboard/ld_remove",
						data : $('#form_ld_remove').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Mostrar la columna especificada de la tabla
								//var vtable = $('#dt_iinformation').DataTable();
								//vtable.column(0).visible(false);
								// Recargar la tabla con nueva informacion
								if ($("#dt_iinformation").length) { $('#dt_iinformation').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_ld_remove').html(success_icon + obj.message);
								$("#form_ajax_ld_remove").removeClass('alert-warning');
								$("#form_ajax_ld_remove").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-ld_remove').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_ld_remove').removeClass('alert');
									$('#form_ajax_ld_remove').addClass('hide');
									$('#form_ajax_ld_remove').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz removido exitosamente el registro.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-ld_remove').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_ld_remove').html(error_icon + obj.message);
								$("#form_ajax_ld_remove").removeClass('alert-warning');
								$("#form_ajax_ld_remove").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_ld_remove').addClass('alert-danger');
							$("#form_ajax_ld_remove").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_ld_remove').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function modal_ld_remove() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_iinformation').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_iinformation tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_iinformation').DataTable();
		vtable.column(0).visible(false);
		$('#modal-id-ld_remove').modal('show');
		document.querySelector("#field_id_ld_remove").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_iinformation').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

if (document.getElementById('form_btn_lp_remove')) {
	document.getElementById('form_btn_lp_remove').onclick = function(e) {
		e.preventDefault();
		event_lp_remove();
	};
}

if (document.getElementById('form_lp_remove')) {
	document.getElementById('form_lp_remove').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_lp_remove();
			return false;
		}
	};
}

function event_lp_remove() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_iinformation').DataTable();
	//vtable.column(0).visible(true);
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_lp_remove').removeClass('alert-danger');
	$('#form_ajax_lp_remove').removeClass('alert-success');
	$('#form_ajax_lp_remove').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_lp_remove').addClass('alert-warning');
	$("#form_ajax_lp_remove").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_lp_remove').removeClass('hide');
	$('#form_ajax_lp_remove').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-remove').modal('hide');
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
						$('#form_ajax_lp_remove').removeClass('alert');
						$('#form_ajax_lp_remove').addClass('hide');
						$('#form_ajax_lp_remove').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-lp_remove').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/dashboard/lp_remove",
						data : $('#form_lp_remove').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Mostrar la columna especificada de la tabla
								//var vtable = $('#dt_imagespress').DataTable();
								//vtable.column(0).visible(false);
								// Recargar la tabla con nueva informacion
								if ($("#dt_imagespress").length) { $('#dt_imagespress').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_lp_remove').html(success_icon + obj.message);
								$("#form_ajax_lp_remove").removeClass('alert-warning');
								$("#form_ajax_lp_remove").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-lp_remove').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_lp_remove').removeClass('alert');
									$('#form_ajax_lp_remove').addClass('hide');
									$('#form_ajax_lp_remove').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz removido exitosamente el registro.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-lp_remove').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_lp_remove').html(error_icon + obj.message);
								$("#form_ajax_lp_remove").removeClass('alert-warning');
								$("#form_ajax_lp_remove").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_lp_remove').addClass('alert-danger');
							$("#form_ajax_lp_remove").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_lp_remove').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function modal_lp_remove() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_imagespress').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_imagespress tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_imagespress').DataTable();
		vtable.column(0).visible(false);
		$('#modal-id-lp_remove').modal('show');
		document.querySelector("#field_id_lp_remove").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_imagespress').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

if (document.getElementById('form_btn_ld_upload')) {
	document.getElementById('form_btn_ld_upload').onclick = function(e) {
		e.preventDefault();
		event_ld_upload();
	};
}

if (document.getElementById('form_ld_upload')) {
	document.getElementById('form_ld_upload').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_ld_upload();
			return false;
		}
	};
}

function event_ld_upload() {
	var flcontrol = document.getElementById('field_ld_control').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_upload').removeClass('alert-danger');
	$('#form_ajax_upload').removeClass('alert-success');
	$('#form_ajax_upload').removeClass('alert-warning');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_upload').addClass('alert-warning');
	$("#form_ajax_upload").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_upload').removeClass('hide');
	$('#form_ajax_upload').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-ld_upload').modal('hide');
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
					// Mensaje a mostrar una vez terminada la accion
					setTimeout(function() {
						$('#form_ajax_upload').removeClass('alert');
						$('#form_ajax_upload').addClass('hide');
						$('#form_ajax_upload').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-ld_upload').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var load = $("#field_ld_file")[0].files.length;
					var input = document.getElementById('field_ld_file');
					var path = input.value;
					var extensions = /(.xls|.xlsx|.csv|.pdf|.zip)$/i;
					if (!extensions.exec(path)) {
						$('#form_ajax_upload').removeClass('alert-danger');
						$('#form_ajax_upload').removeClass('alert-success');
						$('#form_ajax_upload').removeClass('alert-warning');
						$('#form_ajax_upload').addClass('alert-danger');
						$("#form_ajax_upload").html(error_icon  + 'Error: El campo de archivo solo acepta formatos .xls|.xlsx|.csv|.pdf|.zip');
						$('#form_ajax_upload').removeClass('hide');
						document.getElementById('field_ld_file').value = '';
					} else {
						$.ajax({
							type: "POST",
							url: "api/dashboard/ld_upload",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_file')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_iinformation").length) { $('#dt_iinformation').DataTable().ajax.reload(); }
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_upload').html(success_icon + obj.message);
									$("#form_ajax_upload").removeClass('alert-warning');
									$("#form_ajax_upload").addClass('alert-success');
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_file').reset();
									document.getElementById('field_ld_control').value = flcontrol;
									// Configuracion de la ventana modal
									$('#modal-id-ld_upload').modal('hide');
									// Añadir la clase al contenedor del archivo
									$('#id_ld_embed').addClass('d-none');
									// Mensaje a mostrar una vez terminada la accion
									setTimeout(function() {
										$('#form_ajax_upload').removeClass('alert');
										$('#form_ajax_upload').addClass('hide');
										$('#form_ajax_upload').html('');
									}, 0);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz almacenado exitosamente el archivo.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Configuracion de la ventana modal
									$('#modal-id-ld_upload').modal('show');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_upload').html(error_icon + obj.message);
									$("#form_ajax_upload").removeClass('alert-warning');
									$("#form_ajax_upload").addClass('alert-danger');
								}
							},
							error: function() {
								$('#form_ajax_upload').addClass('alert-danger');
								$("#form_ajax_upload").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_upload').removeClass('hide');
							},
						});
					}
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_ld_download() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_iinformation').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_iinformation tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/cpidetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_ibn_information_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_iinformation').DataTable();
						vtable.column(0).visible(false);
					} else {
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_iinformation').DataTable();
						vtable.column(0).visible(false);
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_information_w_document;
						var wfolder = objData.data.lbl_azp_ibn_information_w_folder;
						var wname = objData.data.lbl_azp_ibn_information_w_name;
						var wroute = objData.data.lbl_azp_ibn_information_w_route;
						console.log(wroute + wfolder + wdocument);
						var a = $("<a>").attr("href", var_url + wroute.replace('../','') + wfolder + wdocument).attr("download", wname).appendTo("body");
						a[0].click();
						a.remove();
					}
				} else {
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_iinformation').DataTable();
					vtable.column(0).visible(false);
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_iinformation').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

if (document.getElementById('form_btn_lp_upload')) {
	document.getElementById('form_btn_lp_upload').onclick = function(e) {
		e.preventDefault();
		event_lp_upload();
	};
}

if (document.getElementById('form_lp_upload')) {
	document.getElementById('form_lp_upload').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_lp_upload();
			return false;
		}
	};
}

function event_lp_upload() {
	var flcontrol = document.getElementById('field_lp_control').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_upimage').removeClass('alert-danger');
	$('#form_ajax_upimage').removeClass('alert-success');
	$('#form_ajax_upimage').removeClass('alert-warning');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_upimage').addClass('alert-warning');
	$("#form_ajax_upimage").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_upimage').removeClass('hide');
	$('#form_ajax_upimage').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-ld_upload').modal('hide');
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
					// Mensaje a mostrar una vez terminada la accion
					setTimeout(function() {
						$('#form_ajax_upimage').removeClass('alert');
						$('#form_ajax_upimage').addClass('hide');
						$('#form_ajax_upimage').html('');
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
					// Configuracion de la ventana modal
					$('#modal-id-lp_upload').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var load = $("#field_lp_file")[0].files.length;
					var input = document.getElementById('field_lp_file');
					var path = input.value;
					var extensions = /(.zip|.rar|.7z)$/i;
					if (!extensions.exec(path)) {
						$('#form_ajax_upimage').removeClass('alert-danger');
						$('#form_ajax_upimage').removeClass('alert-success');
						$('#form_ajax_upimage').removeClass('alert-warning');
						$('#form_ajax_upimage').addClass('alert-danger');
						$("#form_ajax_upimage").html(error_icon  + 'Error: El campo de archivo solo acepta formatos .zip|.rar|.7z');
						$('#form_ajax_upimage').removeClass('hide');
						document.getElementById('field_lp_file').value = '';
					} else {
						$.ajax({
							type: "POST",
							url: "api/dashboard/lp_upload",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_iimage')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_imagespress").length) { $('#dt_imagespress').DataTable().ajax.reload(); }
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_upimage').html(success_icon + obj.message);
									$("#form_ajax_upimage").removeClass('alert-warning');
									$("#form_ajax_upimage").addClass('alert-success');
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_iimage').reset();
									document.getElementById('field_lp_control').value = flcontrol;
									// Configuracion de la ventana modal
									$('#modal-id-lp_upload').modal('hide');
									// Añadir la clase al contenedor del archivo
									$('#id_ld_embed').addClass('d-none');
									// Mensaje a mostrar una vez terminada la accion
									setTimeout(function() {
										$('#form_ajax_upimage').removeClass('alert');
										$('#form_ajax_upimage').addClass('hide');
										$('#form_ajax_upimage').html('');
									}, 0);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz almacenado exitosamente el archivo.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Configuracion de la ventana modal
									$('#modal-id-lp_upload').modal('show');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_upimage').html(error_icon + obj.message);
									$("#form_ajax_upimage").removeClass('alert-warning');
									$("#form_ajax_upimage").addClass('alert-danger');
								}
							},
							error: function() {
								$('#form_ajax_upimage').addClass('alert-danger');
								$("#form_ajax_upimage").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_upimage').removeClass('hide');
							},
						});
					}
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_lp_download() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_imagespress').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_imagespress tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/cpimgdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_ibn_imagespress_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_imagespress').DataTable();
						vtable.column(0).visible(false);
					} else {
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_imagespress').DataTable();
						vtable.column(0).visible(false);
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_imagespress_w_document;
						var wfolder = objData.data.lbl_azp_ibn_imagespress_w_folder;
						var wname = objData.data.lbl_azp_ibn_imagespress_w_name;
						var wroute = objData.data.lbl_azp_ibn_imagespress_w_route;
						console.log(wroute + wfolder + wdocument);
						var a = $("<a>").attr("href", var_url + wroute.replace('../','') + wfolder + wdocument).attr("download", wname).appendTo("body");
						a[0].click();
						a.remove();
					}
				} else {
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_imagespress').DataTable();
					vtable.column(0).visible(false);
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Lo sentimos:</strong>" + objData.msg + ".</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_imagespress').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun registro.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};