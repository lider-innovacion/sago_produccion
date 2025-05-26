if (document.getElementById('form_btn_create')) {
	document.getElementById('form_btn_create').onclick = function(e) {
		e.preventDefault();
		event_create();
	};
}

if (document.getElementById('form_create')) {
	document.getElementById('form_create').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_create();
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

if (document.getElementById('form_btn_enforce')) {
	document.getElementById('form_btn_enforce').onclick = function(e) {
		e.preventDefault();
		event_enforce();
	};
}

if (document.getElementById('form_enforce')) {
	document.getElementById('form_enforce').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_enforce();
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

if (document.getElementById('form_btn_remove')) {
	document.getElementById('form_btn_remove').onclick = function(e) {
		e.preventDefault();
		event_remove();
	};
}

if (document.getElementById('form_remove')) {
	document.getElementById('form_remove').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_remove();
			return false;
		}
	};
}

if (document.getElementById('form_btn_restore')) {
	document.getElementById('form_btn_restore').onclick = function(e) {
		e.preventDefault();
		event_restore();
	};
}

if (document.getElementById('form_restore')) {
	document.getElementById('form_restore').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_restore();
			return false;
		}
	};
}

if (document.getElementById('form_btn_update')) {
	document.getElementById('form_btn_update').onclick = function(e) {
		e.preventDefault();
		event_update();
	};
}

if (document.getElementById('form_update')) {
	document.getElementById('form_update').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_update();
			return false;
		}
	};
}

function event_change_action() {
	// Aplicar clases a los elementos requeridos
	$('#change_btn_page_length').addClass('d-none');
	$('#change_btn_colvis_column').addClass('d-none');
	$('#change_btn_column_toggle').addClass('d-none');
	$('#change_btn_colvis_restore').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#change_btn_sync').removeClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#change_btn_copy').addClass('d-none');
	$('#change_btn_pdf').addClass('d-none');
	$('#change_btn_excel').addClass('d-none');
	$('#change_btn_csv').addClass('d-none');
	$('#change_btn_print').addClass('d-none');
};

function event_change_export() {
	// Aplicar clases a los elementos requeridos
	$('#change_btn_page_length').addClass('d-none');
	$('#change_btn_colvis_column').addClass('d-none');
	$('#change_btn_column_toggle').addClass('d-none');
	$('#change_btn_colvis_restore').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#change_btn_sync').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#change_btn_copy').removeClass('d-none');
	$('#change_btn_pdf').removeClass('d-none');
	$('#change_btn_excel').removeClass('d-none');
	$('#change_btn_csv').removeClass('d-none');
	$('#change_btn_print').removeClass('d-none');
};

function event_change_visible() {
	// Aplicar clases a los elementos requeridos
	$('#change_btn_page_length').removeClass('d-none');
	$('#change_btn_colvis_column').removeClass('d-none');
	$('#change_btn_column_toggle').removeClass('d-none');
	$('#change_btn_colvis_restore').removeClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#change_btn_sync').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#change_btn_copy').addClass('d-none');
	$('#change_btn_pdf').addClass('d-none');
	$('#change_btn_excel').addClass('d-none');
	$('#change_btn_csv').addClass('d-none');
	$('#change_btn_print').addClass('d-none');
};

function event_create() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('create', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Configuracion de la ventana modal
	//$('#modal-id-create').modal('hide');
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: '<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>',
		size: 'large',
		buttons: {
			cancel: {
				label: 'Cancelar',
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Mensaje a mostrar una vez terminada la accion
					event_message('create', 'primary', 'fa-check-circle', 'Cancelado', 'cancels');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-times-circle text-warning mr-2"></i> <span class="text-warning fw-500">Accion: Cancelado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion no procesada debido a que detuviste la accion.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-create').modal('show');
				},
			},
			ok: {
				label: 'Completar',
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type: 'POST',
						url: 'api/azp_access_type/create',
						data: $('#form_create').serialize(),
						success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($('#dt_info').length) { $('#dt_info').DataTable().ajax.reload(); }
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector('#form_create').reset();
								// Mensaje a mostrar una vez terminada la accion
								event_message('create', 'success', 'fa-check-circle', 'Exito', obj.message);
								// Mensaje a mostrar una vez terminada la accion
								setTimeout(function() { event_trash('create'); }, 5000);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
									message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
									centerVertical: true,
									className: 'modal-alert',
									closeButton: false,
								});
								// Configuracion de la ventana modal
								$('#modal-id-create').modal('hide');
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-create').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								event_message('create', 'danger', 'fa-times-circle', 'Error', obj.message);
							}
						},
						error: function() {
							// Mensaje a mostrar una vez terminada la accion
							event_message('create', 'danger', 'fa-times-circle', 'Error', 'systems');
						},
					});
				},
			},
		},
		className: 'modal-alert',
		closeButton: false,
	});
};

function event_data_class() {
	// Capturar el valor del campo de datos
	const ft_data = document.getElementById('field_ft_data').value;
	// Validacion de valor obtenido
	if (ft_data == 1 || ft_data == 2) {
		// Aplicar clases a los elementos requeridos
		$('#table_btn_create').removeClass('d-none');
		$('#table_btn_update').removeClass('d-none');
		$('#table_btn_restore').addClass('d-none');
		$('#table_btn_remove').removeClass('d-none');
		$('#table_btn_delete').addClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#div_info_data').removeClass('d-none');
		$('#div_info_eliminate').addClass('d-none');
		$('#div_info_remove').addClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#field_ft_data').removeClass('border-danger');
		$('#field_ft_data').removeClass('border-warning');
		$('#field_ft_data').removeClass('border-success');
		$('#field_ft_data').addClass('border-success');
	} else if (ft_data == 3) {
		// Aplicar clases a los elementos requeridos
		$('#table_btn_create').addClass('d-none');
		$('#table_btn_update').addClass('d-none');
		$('#table_btn_restore').removeClass('d-none');
		$('#table_btn_remove').addClass('d-none');
		$('#table_btn_delete').removeClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#div_info_data').addClass('d-none');
		$('#div_info_eliminate').addClass('d-none');
		$('#div_info_remove').removeClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#field_ft_data').removeClass('border-danger');
		$('#field_ft_data').removeClass('border-warning');
		$('#field_ft_data').removeClass('border-success');
		$('#field_ft_data').addClass('border-warning');
	} else if (ft_data == 4) {
		// Aplicar clases a los elementos requeridos
		$('#table_btn_create').addClass('d-none');
		$('#table_btn_update').addClass('d-none');
		$('#table_btn_restore').addClass('d-none');
		$('#table_btn_remove').addClass('d-none');
		$('#table_btn_delete').addClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#div_info_data').addClass('d-none');
		$('#div_info_eliminate').removeClass('d-none');
		$('#div_info_remove').addClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#field_ft_data').removeClass('border-danger');
		$('#field_ft_data').removeClass('border-warning');
		$('#field_ft_data').removeClass('border-success');
		$('#field_ft_data').addClass('border-danger');
	} else {
		// Aplicar clases a los elementos requeridos
		$('#table_btn_create').removeClass('d-none');
		$('#table_btn_update').removeClass('d-none');
		$('#table_btn_restore').addClass('d-none');
		$('#table_btn_remove').removeClass('d-none');
		$('#table_btn_delete').addClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#div_info_data').removeClass('d-none');
		$('#div_info_eliminate').addClass('d-none');
		$('#div_info_remove').addClass('d-none');
		// Aplicar clases a los elementos requeridos
		$('#field_ft_data').removeClass('border-danger');
		$('#field_ft_data').removeClass('border-warning');
		$('#field_ft_data').removeClass('border-success');
		$('#field_ft_data').addClass('border-success');
	}
};

function event_delete() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('delete', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Configuracion de la ventana modal
	//$('#modal-id-delete').modal('hide');
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: '<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>',
		size: 'large',
		buttons: {
			cancel: {
				label: 'Cancelar',
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Mensaje a mostrar una vez terminada la accion
					event_message('delete', 'primary', 'fa-check-circle', 'Cancelado', 'cancels');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-times-circle text-warning mr-2"></i> <span class="text-warning fw-500">Accion: Cancelado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion no procesada debido a que detuviste la accion.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-delete').modal('show');
				},
			},
			ok: {
				label: 'Completar',
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type: 'POST',
						url: 'api/azp_access_type/delete',
						data: $('#form_delete').serialize(),
						success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($('#dt_info').length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								event_message('delete', 'success', 'fa-check-circle', 'Exito', obj.message);
								// Mensaje a mostrar una vez terminada la accion
								setTimeout(function() { event_trash('delete'); }, 5000);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
									message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
									centerVertical: true,
									className: 'modal-alert',
									closeButton: false,
								});
								// Configuracion de la ventana modal
								$('#modal-id-delete').modal('hide');
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-delete').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								event_message('delete', 'danger', 'fa-times-circle', 'Error', obj.message);
							}
						},
						error: function() {
							// Mensaje a mostrar una vez terminada la accion
							event_message('delete', 'danger', 'fa-times-circle', 'Error', 'systems');
						},
					});
				},
			},
		},
		className: 'modal-alert',
		closeButton: false,
	});
};

function event_enforce() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('proccess', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Configuracion de la ventana modal
	//$('#modal-id-proccess').modal('hide');
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: '<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>',
		size: 'large',
		buttons: {
			cancel: {
				label: 'Cancelar',
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Mensaje a mostrar una vez terminada la accion
					event_message('proccess', 'primary', 'fa-check-circle', 'Cancelado', 'cancels');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-times-circle text-warning mr-2"></i> <span class="text-warning fw-500">Accion: Cancelado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion no procesada debido a que detuviste la accion.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-proccess').modal('show');
				},
			},
			ok: {
				label: 'Completar',
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					//var querys = document.querySelector('#form_proccess');
					//var elements = querys.querySelectorAll('select, input, textarea');
					//[].forEach.call(elements, function(items) { items.disabled = false; });
					$.ajax({
						type: 'POST',
						url: 'api/azp_access_type/enforce',
						data: $('#form_proccess').serialize(),
						success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($('#dt_info').length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								event_message('proccess', 'success', 'fa-check-circle', 'Exito', obj.message);
								// Mensaje a mostrar una vez terminada la accion
								setTimeout(function() { event_trash('proccess'); }, 5000);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
									message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
									centerVertical: true,
									className: 'modal-alert',
									closeButton: false,
								});
								// Configuracion de la ventana modal
								$('#modal-id-proccess').modal('hide');
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-proccess').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								event_message('proccess', 'danger', 'fa-times-circle', 'Error', obj.message);
							}
						},
						error: function() {
							// Mensaje a mostrar una vez terminada la accion
							event_message('proccess', 'danger', 'fa-times-circle', 'Error', 'systems');
						},
					});
				},
			},
		},
		className: 'modal-alert',
		closeButton: false,
	});
};

function event_import() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('import', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Configuracion de la ventana modal
	//$('#modal-id-import').modal('hide');
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: '<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>',
		size: 'large',
		buttons: {
			cancel: {
				label: 'Cancelar',
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Mensaje a mostrar una vez terminada la accion
					event_message('import', 'primary', 'fa-check-circle', 'Cancelado', 'cancels');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-times-circle text-warning mr-2"></i> <span class="text-warning fw-500">Accion: Cancelado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion no procesada debido a que detuviste la accion.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-import').modal('show');
				},
			},
			ok: {
				label: 'Completar',
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var load = $("#field_im_file")[0].files.length;
					var input = document.getElementById('field_im_file');
					var path = input.value;
					var extensions = /(.csv)$/i;
					if (!extensions.exec(path)) { document.getElementById('field_im_file').value = ''; } else {
						$.ajax({
							type: 'POST',
							url: 'api/azp_access_type/import',
							datatype: "HTML",
							data: new FormData(document.getElementById('form_import')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($('#dt_info').length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								event_message('import', 'success', 'fa-check-circle', 'Exito', obj.message);
								// Mensaje a mostrar una vez terminada la accion
								setTimeout(function() { event_trash('import'); }, 5000);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
									message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
									centerVertical: true,
									className: 'modal-alert',
									closeButton: false,
								});
								// Configuracion de la ventana modal
								$('#modal-id-import').modal('hide');
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-import').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								event_message('import', 'danger', 'fa-times-circle', 'Error', obj.message);
							}
						},
						error: function() {
							// Mensaje a mostrar una vez terminada la accion
							event_message('import', 'danger', 'fa-times-circle', 'Error', 'systems');
						},
						});
					}
				},
			},
		},
		className: 'modal-alert',
		closeButton: false,
	});
};

function event_info_data() {
	// Aplicar clases a los elementos requeridos
	$('#table_btn_sub_menu').removeClass('d-none');
	$('#table_btn_report').removeClass('d-none');
	$('#table_btn_create').removeClass('d-none');
	$('#table_btn_update').removeClass('d-none');
	$('#table_btn_restore').addClass('d-none');
	$('#table_btn_remove').removeClass('d-none');
	$('#table_btn_delete').addClass('d-none');
	$('#table_btn_change').removeClass('d-none');
	$('#table_btn_detail').removeClass('d-none');
	$('#table_btn_sync').removeClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_copy').addClass('d-none');
	$('#table_btn_pdf').addClass('d-none');
	$('#table_btn_excel').addClass('d-none');
	$('#table_btn_csv').addClass('d-none');
	$('#table_btn_print').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_page_length').addClass('d-none');
	$('#table_btn_colvis_column').addClass('d-none');
	$('#table_btn_column_toggle').addClass('d-none');
	$('#table_btn_colvis_restore').addClass('d-none');
};

function event_info_eliminate() {
	// Aplicar clases a los elementos requeridos
	$('#table_btn_sub_menu').removeClass('d-none');
	$('#table_btn_report').removeClass('d-none');
	$('#table_btn_create').addClass('d-none');
	$('#table_btn_update').addClass('d-none');
	$('#table_btn_restore').addClass('d-none');
	$('#table_btn_remove').addClass('d-none');
	$('#table_btn_delete').addClass('d-none');
	$('#table_btn_change').removeClass('d-none');
	$('#table_btn_detail').removeClass('d-none');
	$('#table_btn_sync').removeClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_copy').addClass('d-none');
	$('#table_btn_pdf').addClass('d-none');
	$('#table_btn_excel').addClass('d-none');
	$('#table_btn_csv').addClass('d-none');
	$('#table_btn_print').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_page_length').addClass('d-none');
	$('#table_btn_colvis_column').addClass('d-none');
	$('#table_btn_column_toggle').addClass('d-none');
	$('#table_btn_colvis_restore').addClass('d-none');
};

function event_info_export() {
	// Aplicar clases a los elementos requeridos
	$('#table_btn_sub_menu').addClass('d-none');
	$('#table_btn_report').addClass('d-none');
	$('#table_btn_create').addClass('d-none');
	$('#table_btn_update').addClass('d-none');
	$('#table_btn_restore').addClass('d-none');
	$('#table_btn_remove').addClass('d-none');
	$('#table_btn_delete').addClass('d-none');
	$('#table_btn_change').addClass('d-none');
	$('#table_btn_detail').addClass('d-none');
	$('#table_btn_sync').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_copy').removeClass('d-none');
	$('#table_btn_pdf').removeClass('d-none');
	$('#table_btn_excel').removeClass('d-none');
	$('#table_btn_csv').removeClass('d-none');
	$('#table_btn_print').removeClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_page_length').addClass('d-none');
	$('#table_btn_colvis_column').addClass('d-none');
	$('#table_btn_column_toggle').addClass('d-none');
	$('#table_btn_colvis_restore').addClass('d-none');
};

function event_info_remove() {
	// Aplicar clases a los elementos requeridos
	$('#table_btn_sub_menu').removeClass('d-none');
	$('#table_btn_report').removeClass('d-none');
	$('#table_btn_create').addClass('d-none');
	$('#table_btn_update').addClass('d-none');
	$('#table_btn_restore').removeClass('d-none');
	$('#table_btn_remove').addClass('d-none');
	$('#table_btn_delete').removeClass('d-none');
	$('#table_btn_change').removeClass('d-none');
	$('#table_btn_detail').removeClass('d-none');
	$('#table_btn_sync').removeClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_copy').addClass('d-none');
	$('#table_btn_pdf').addClass('d-none');
	$('#table_btn_excel').addClass('d-none');
	$('#table_btn_csv').addClass('d-none');
	$('#table_btn_print').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_page_length').addClass('d-none');
	$('#table_btn_colvis_column').addClass('d-none');
	$('#table_btn_column_toggle').addClass('d-none');
	$('#table_btn_colvis_restore').addClass('d-none');
};

function event_info_visible() {
	// Aplicar clases a los elementos requeridos
	$('#table_btn_sub_menu').addClass('d-none');
	$('#table_btn_report').addClass('d-none');
	$('#table_btn_create').addClass('d-none');
	$('#table_btn_update').addClass('d-none');
	$('#table_btn_restore').addClass('d-none');
	$('#table_btn_remove').addClass('d-none');
	$('#table_btn_delete').addClass('d-none');
	$('#table_btn_change').addClass('d-none');
	$('#table_btn_detail').addClass('d-none');
	$('#table_btn_sync').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_copy').addClass('d-none');
	$('#table_btn_pdf').addClass('d-none');
	$('#table_btn_excel').addClass('d-none');
	$('#table_btn_csv').addClass('d-none');
	$('#table_btn_print').addClass('d-none');
	// Aplicar clases a los elementos requeridos
	$('#table_btn_page_length').removeClass('d-none');
	$('#table_btn_colvis_column').removeClass('d-none');
	$('#table_btn_column_toggle').removeClass('d-none');
	$('#table_btn_colvis_restore').removeClass('d-none');
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

function event_release() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('release', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.matter_table');
	// Array para cargar los valores obtenidos
	var value_checked = new Array();
	// Recorrer la variable con foreach
	value_table.forEach((e) => { if (e.checked == true) { value_checked.push(e.value); } });
	// Validacion para confirmar si estan chequeados o no
	if (value_checked == '') {
		// Mensaje a mostrar una vez terminada la accion
		setTimeout(function() { event_trash('release'); }, 5000);
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: 'small',
			title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
			message: '<span><strong>Motivo:</strong> Lo sentimos, pero no haz seleccionado ningun registro.</span>',
			centerVertical: true,
			className: 'modal-alert',
			closeButton: false,
		});
	} else if (value_checked != '') {
		// Codigo ajax
		$.ajax({
			type : "POST",
			url : "api/azp_access_type/release",
			data : $('#form_matter').serialize() + '&field_mt_chk=' + value_checked,
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					// Mensaje a mostrar una vez terminada la accion
					event_message('release', 'success', 'fa-check-circle', 'Exito', obj.message);
					// Mensaje a mostrar una vez terminada la accion
					setTimeout(function() { event_trash('release'); }, 5000);
					// Consultar y descargar el archivo generado
					var archive = $("<a>").attr("href", obj.compress.replace('../', '')).attr("download", obj.zipname).appendTo("body");
					archive[0].click(); archive.remove();
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-release').modal('hide');
				} else {
					// Configuracion de la ventana modal
					//$('#modal-id-update').modal('show');
					// Mensaje a mostrar una vez terminada la accion
					event_message('release', 'danger', 'fa-times-circle', 'Error', obj.message);
				}
			},
			error : function() {
				// Mensaje a mostrar una vez terminada la accion
				event_message('release', 'danger', 'fa-times-circle', 'Error', 'systems');
			},
		});
	}
};

function event_remove() {
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_' + datas).removeClass('alert-danger');
	$('#form_ajax_' + datas).removeClass('alert-dark');
	$('#form_ajax_' + datas).removeClass('alert-info');
	$('#form_ajax_' + datas).removeClass('alert-primary');
	$('#form_ajax_' + datas).removeClass('alert-warning');
	$('#form_ajax_' + datas).removeClass('alert-secondary');
	$('#form_ajax_' + datas).removeClass('alert-success');
	// Titulos de los mensajes principales
	var tittl = '<b>' + title + ':</b>';
	// Definir los iconos para los correspondientes mensajes
	var icons = '<span class="far ' + icone + '" aria-hidden="true"></span>';
	// Mensajes predeterminados sobre las acciones a realizar en el sistema o aplicacion
	const options = {
		'systems': () => 'Problema detectado en el sistema, comunicate con soporte.',
		'process': () => 'Estamos procesando tu información, aguarda un momento.',
		'cancels': () => 'Informacion no procesada debido a que detuviste la accion.',
		'succful': () => 'Informacion procesada correctamente en la base de datos.',
	};
	// Valor obetnido para cargar datos de la url
	var mesag = options[messg] ? options[messg]() : messg;
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_' + datas).removeClass('hide');
	$('#form_ajax_' + datas).addClass('alert');
	$('#form_ajax_' + datas).addClass('alert-' + alert);
	$('#form_ajax_' + datas).addClass('fade');
	$('#form_ajax_' + datas).addClass('show');
	$('#form_ajax_' + datas).addClass('p-2');
	$('#form_ajax_' + datas).addClass('rounded-0');
	$('#form_ajax_' + datas).addClass('mb-4');
	$('#form_ajax_' + datas).html(icons + ' ' + tittl + ' ' + mesag);
};

function event_remove() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('remove', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Configuracion de la ventana modal
	//$('#modal-id-remove').modal('hide');
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: '<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>',
		size: 'large',
		buttons: {
			cancel: {
				label: 'Cancelar',
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Mensaje a mostrar una vez terminada la accion
					event_message('remove', 'primary', 'fa-check-circle', 'Cancelado', 'cancels');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-times-circle text-warning mr-2"></i> <span class="text-warning fw-500">Accion: Cancelado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion no procesada debido a que detuviste la accion.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-remove').modal('show');
				},
			},
			ok: {
				label: 'Completar',
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type: 'POST',
						url: 'api/azp_access_type/remove',
						data: $('#form_remove').serialize(),
						success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($('#dt_info').length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								event_message('remove', 'success', 'fa-check-circle', 'Exito', obj.message);
								// Mensaje a mostrar una vez terminada la accion
								setTimeout(function() { event_trash('remove'); }, 5000);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
									message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
									centerVertical: true,
									className: 'modal-alert',
									closeButton: false,
								});
								// Configuracion de la ventana modal
								$('#modal-id-remove').modal('hide');
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-remove').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								event_message('remove', 'danger', 'fa-times-circle', 'Error', obj.message);
							}
						},
						error: function() {
							// Mensaje a mostrar una vez terminada la accion
							event_message('remove', 'danger', 'fa-times-circle', 'Error', 'systems');
						},
					});
				},
			},
		},
		className: 'modal-alert',
		closeButton: false,
	});
};

function event_reset() {
	// Resetear el estado de almacenamiento de la tabla
	$('#dt_info').DataTable().state.clear();
	// Dejar campos vacios sobre los elementos id del formulario
	document.querySelector('#form_reset').reset();
	// Funcionalidad para reiniciar datatable
	$('#dt_info').dataTable().fnDestroy();
	// Ejecutar funcion
	event_data_info();
};

function event_restore() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('restore', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Configuracion de la ventana modal
	//$('#modal-id-restore').modal('hide');
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: '<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>',
		size: 'large',
		buttons: {
			cancel: {
				label: 'Cancelar',
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Mensaje a mostrar una vez terminada la accion
					event_message('restore', 'primary', 'fa-check-circle', 'Cancelado', 'cancels');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-times-circle text-warning mr-2"></i> <span class="text-warning fw-500">Accion: Cancelado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion no procesada debido a que detuviste la accion.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-restore').modal('show');
				},
			},
			ok: {
				label: 'Completar',
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type: 'POST',
						url: 'api/azp_access_type/restore',
						data: $('#form_restore').serialize(),
						success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($('#dt_info').length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								event_message('restore', 'success', 'fa-check-circle', 'Exito', obj.message);
								// Mensaje a mostrar una vez terminada la accion
								setTimeout(function() { event_trash('restore'); }, 5000);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
									message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
									centerVertical: true,
									className: 'modal-alert',
									closeButton: false,
								});
								// Configuracion de la ventana modal
								$('#modal-id-restore').modal('hide');
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-restore').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								event_message('restore', 'danger', 'fa-times-circle', 'Error', obj.message);
							}
						},
						error: function() {
							// Mensaje a mostrar una vez terminada la accion
							event_message('restore', 'danger', 'fa-times-circle', 'Error', 'systems');
						},
					});
				},
			},
		},
		className: 'modal-alert',
		closeButton: false,
	});
};

function event_trash(data) {
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_' + data).removeClass('alert');
	$('#form_ajax_' + data).removeClass('fade');
	$('#form_ajax_' + data).removeClass('show');
	$('#form_ajax_' + data).removeClass('p-2');
	$('#form_ajax_' + data).removeClass('rounded-0');
	$('#form_ajax_' + data).removeClass('mb-4');
	$('#form_ajax_' + data).addClass('hide');
	$('#form_ajax_' + data).html('');
};

function event_update() {
	// Mensaje a mostrar una vez terminada la accion
	event_message('update', 'warning', 'fa-spinner fa-spin', 'Advertencia', 'process');
	// Configuracion de la ventana modal
	//$('#modal-id-update').modal('hide');
	// Mensaje de audio para mostrar en la pagina web
	initApp.playSound('views/templates/smart/dist/media/sound', 'bigbox');
	var dialog = bootbox.dialog({
		title: '¿Estas seguro de continuar con el proceso?',
		message: '<p>¡Una vez des clic en continuar, no podrás revertir la accion!.</p>',
		size: 'large',
		buttons: {
			cancel: {
				label: 'Cancelar',
				className: 'btn btn-sm btn-outline-danger',
				callback: function() {
					// Mensaje a mostrar una vez terminada la accion
					event_message('update', 'primary', 'fa-check-circle', 'Cancelado', 'cancels');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: '<i class="fal fa-times-circle text-warning mr-2"></i> <span class="text-warning fw-500">Accion: Cancelado!</span>',
						message: '<span><strong>Motivo:</strong> Informacion no procesada debido a que detuviste la accion.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
					// Configuracion de la ventana modal
					$('#modal-id-update').modal('show');
				},
			},
			ok: {
				label: 'Completar',
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type: 'POST',
						url: 'api/azp_access_type/update',
						data: $('#form_update').serialize(),
						success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($('#dt_info').length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								event_message('update', 'success', 'fa-check-circle', 'Exito', obj.message);
								// Mensaje a mostrar una vez terminada la accion
								setTimeout(function() { event_trash('update'); }, 5000);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: '<i class="fal fa-check-circle text-success mr-2"></i> <span class="text-success fw-500">Accion: Completado!</span>',
									message: '<span><strong>Motivo:</strong> Informacion procesada correctamente en la base de datos.</span>',
									centerVertical: true,
									className: 'modal-alert',
									closeButton: false,
								});
								// Configuracion de la ventana modal
								$('#modal-id-update').modal('hide');
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-update').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								event_message('update', 'danger', 'fa-times-circle', 'Error', obj.message);
							}
						},
						error: function() {
							// Mensaje a mostrar una vez terminada la accion
							event_message('update', 'danger', 'fa-times-circle', 'Error', 'systems');
						},
					});
				},
			},
		},
		className: 'modal-alert',
		closeButton: false,
	});
};

function modal_delete() {
	// Activar columnas especificadas de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $('#dt_info tr.selected td:first').html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		$('#modal-id-delete').modal('show');
		document.querySelector('#field_id_delete').value = idtbl;
	} else {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: 'small',
			title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
			message: '<span><strong>Motivo:</strong> Lo sentimos, pero no haz seleccionado ningun registro.</span>',
			centerVertical: true,
			className: 'modal-alert',
			closeButton: false,
		});
	}
};

function modal_detail() {
	// Activar columnas especificadas de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $('#dt_info tr.selected td:first').html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + 'detail/' + idtbl + '/';
		request.open('GET', ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-detail').modal('show');
					document.querySelector('#lbl_azp_access_type_id_azp_access_type').innerHTML = objData.data.lbl_azp_access_type_id_azp_access_type;
					document.querySelector('#lbl_azp_user_t_login_created').innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector('#lbl_azp_user_t_login_modified').innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector('#lbl_azp_access_type_m_date_created').innerHTML = objData.data.lbl_azp_access_type_m_date_created;
					document.querySelector('#lbl_azp_access_type_m_date_modified').innerHTML = objData.data.lbl_azp_access_type_m_date_modified;
					document.querySelector('#lbl_azp_access_type_m_description').innerHTML = objData.data.lbl_azp_access_type_m_description;
					document.querySelector('#lbl_azp_sys_state_t_name').innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector('#lbl_azp_access_type_t_name').innerHTML = objData.data.lbl_azp_access_type_t_name;
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: 'small',
						title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
						message: '<span><strong>Motivo:</strong>' + ' ' + objData.msg + '.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: 'small',
			title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
			message: '<span><strong>Motivo:</strong> Lo sentimos, pero no haz seleccionado ningun registro.</span>',
			centerVertical: true,
			className: 'modal-alert',
			closeButton: false,
		});
	}
};

function modal_remove() {
	// Activar columnas especificadas de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $('#dt_info tr.selected td:first').html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		$('#modal-id-remove').modal('show');
		document.querySelector('#field_id_remove').value = idtbl;
	} else {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: 'small',
			title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
			message: '<span><strong>Motivo:</strong> Lo sentimos, pero no haz seleccionado ningun registro.</span>',
			centerVertical: true,
			className: 'modal-alert',
			closeButton: false,
		});
	}
};

function modal_restore() {
	// Activar columnas especificadas de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $('#dt_info tr.selected td:first').html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		$('#modal-id-restore').modal('show');
		document.querySelector('#field_id_restore').value = idtbl;
	} else {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: 'small',
			title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
			message: '<span><strong>Motivo:</strong> Lo sentimos, pero no haz seleccionado ningun registro.</span>',
			centerVertical: true,
			className: 'modal-alert',
			closeButton: false,
		});
	}
};

function modal_update() {
	// Activar columnas especificadas de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $('#dt_info tr.selected td:first').html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + 'update/' + idtbl + '/';
		request.open('GET', ajaxurl, true);
		request.send();
		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-update').modal('show');
					document.querySelector('#field_up_id').value = objData.data.lbl_azp_access_type_id_azp_access_type;
					document.querySelector('#field_up_description').value = objData.data.lbl_azp_access_type_m_description;
					document.querySelector('#field_up_state').value = objData.data.lbl_azp_access_type_m_status;
					document.querySelector('#field_up_name').value = objData.data.lbl_azp_access_type_t_name;
				} else {
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: 'small',
						title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
						message: '<span><strong>Motivo:</strong>' + ' ' + objData.msg + '.</span>',
						centerVertical: true,
						className: 'modal-alert',
						closeButton: false,
					});
				}
			}
		}
	} else {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: 'small',
			title: '<i class="fal fa-times-circle text-danger mr-2"></i> <span class="text-danger fw-500">Accion: Error!</span>',
			message: '<span><strong>Motivo:</strong> Lo sentimos, pero no haz seleccionado ningun registro.</span>',
			centerVertical: true,
			className: 'modal-alert',
			closeButton: false,
		});
	}
};