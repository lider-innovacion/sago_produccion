if (document.getElementById('form_btn_consignment')) {
	document.getElementById('form_btn_consignment').onclick = function(e) {
		e.preventDefault();
		event_consignment();
	};
}

if (document.getElementById('form_consignment')) {
	document.getElementById('form_consignment').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_consignment();
			return false;
		}
	};
}

if (document.getElementById('form_btn_honorary')) {
	document.getElementById('form_btn_honorary').onclick = function(e) {
		e.preventDefault();
		event_honorary();
	};
}

if (document.getElementById('form_honorary')) {
	document.getElementById('form_honorary').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_honorary();
			return false;
		}
	};
}

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

if (document.getElementById('form_btn_email')) {
	document.getElementById('form_btn_email').onclick = function(e) {
		e.preventDefault();
		event_email();
	};
}

if (document.getElementById('form_email')) {
	document.getElementById('form_email').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_email();
			return false;
		}
	};
}

if (document.getElementById('form_btn_file')) {
	document.getElementById('form_btn_file').onclick = function(e) {
		e.preventDefault();
		event_file();
	};
}

if (document.getElementById('form_file')) {
	document.getElementById('form_file').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_file();
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

if (document.getElementById('form_btn_report_tcd')) {
	document.getElementById('form_btn_report_tcd').onclick = function(e) {
		e.preventDefault();
		event_report_tcd();
	};
}

if (document.getElementById('form_report_tcd')) {
	document.getElementById('form_report_tcd').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_report_tcd();
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

if (document.getElementById('form_btn_notary')) {
	document.getElementById('form_btn_notary').onclick = function(e) {
		e.preventDefault();
		event_notary();
	};
}

if (document.getElementById('form_notary')) {
	document.getElementById('form_notary').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_notary();
			return false;
		}
	};
}

if (document.getElementById('form_btn_multiple')) {
	document.getElementById('form_btn_multiple').onclick = function(e) {
		e.preventDefault();
		event_multiple();
	};
}

if (document.getElementById('form_multiple')) {
	document.getElementById('form_multiple').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_multiple();
			return false;
		}
	};
}

if (document.getElementById('form_btn_dispatch')) {
	document.getElementById('form_btn_dispatch').onclick = function(e) {
		e.preventDefault();
		event_dispatch();
	};
}

if (document.getElementById('form_dispatch')) {
	document.getElementById('form_dispatch').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_dispatch();
			return false;
		}
	};
}

if (document.getElementById('form_btn_notaries')) {
	document.getElementById('form_btn_notaries').onclick = function(e) {
		e.preventDefault();
		event_notaries();
	};
}

if (document.getElementById('form_notaries')) {
	document.getElementById('form_notaries').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_notaries();
			return false;
		}
	};
}

if (document.getElementById('form_btn_multifold_unique')) {
	document.getElementById('form_btn_multifold_unique').onclick = function(e) {
		e.preventDefault();
		event_multifold_unique();
	};
}

if (document.getElementById('form_multifold')) {
	document.getElementById('form_multifold').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_multifold_unique();
			return false;
		}
	};
}

if (document.getElementById('form_btn_multifold_various')) {
	document.getElementById('form_btn_multifold_various').onclick = function(e) {
		e.preventDefault();
		event_multifold_various();
	};
}

if (document.getElementById('form_multifold')) {
	document.getElementById('form_multifold').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_multifold_various();
			return false;
		}
	};
}

function event_class_alerts(data) {
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_' + data).removeClass('alert-danger');
	$('#form_ajax_' + data).removeClass('alert-dark');
	$('#form_ajax_' + data).removeClass('alert-info');
	$('#form_ajax_' + data).removeClass('alert-primary');
	$('#form_ajax_' + data).removeClass('alert-warning');
	$('#form_ajax_' + data).removeClass('alert-secondary');
	$('#form_ajax_' + data).removeClass('alert-success');
};

function action_checkbox_all_read() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_checkbox_all_read').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_read').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_read').prop('checked', false);
	}
};

function action_checkbox_third_parties() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_checkbox_third_parties').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_third_parties').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_third_parties').prop('checked', false);
	}
};

function action_checkbox_user() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_checkbox_user').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_user').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_user').prop('checked', false);
	}
};

function event_consignment() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').removeClass('alert-danger');
	$('#form_ajax_consignment').removeClass('alert-success');
	$('#form_ajax_consignment').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').addClass('alert-warning');
	$("#form_ajax_consignment").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_consignment').removeClass('hide');
	$('#form_ajax_consignment').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-consignment').modal('hide');
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
						$('#form_ajax_consignment').removeClass('alert');
						$('#form_ajax_consignment').addClass('hide');
						$('#form_ajax_consignment').html('');
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
					$('#modal-id-consignment').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/up_all",
						data : $('#form_consignment').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_consignment').html(success_icon + obj.message);
								$("#form_ajax_consignment").removeClass('alert-warning');
								$("#form_ajax_consignment").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_consignment").reset();
								// Configuracion de la ventana modal
								$('#modal-id-consignment').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_consignment').removeClass('alert');
									$('#form_ajax_consignment').addClass('hide');
									$('#form_ajax_consignment').html('');
								}, 0);
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
								// Configuracion de la ventana modal
								$('#modal-id-consignment').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_consignment').html(error_icon + obj.message);
								$("#form_ajax_consignment").removeClass('alert-warning');
								$("#form_ajax_consignment").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_consignment').addClass('alert-danger');
							$("#form_ajax_consignment").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_consignment').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_honorary() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_honorary').removeClass('alert-danger');
	$('#form_ajax_honorary').removeClass('alert-success');
	$('#form_ajax_honorary').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_honorary').addClass('alert-warning');
	$("#form_ajax_honorary").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_honorary').removeClass('hide');
	$('#form_ajax_honorary').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-honorary').modal('hide');
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
						$('#form_ajax_honorary').removeClass('alert');
						$('#form_ajax_honorary').addClass('hide');
						$('#form_ajax_honorary').html('');
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
					$('#modal-id-honorary').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/honorary",
						data : $('#form_honorary').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_honorary').html(success_icon + obj.message);
								$("#form_ajax_honorary").removeClass('alert-warning');
								$("#form_ajax_honorary").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_honorary").reset();
								// Configuracion de la ventana modal
								$('#modal-id-honorary').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_honorary').removeClass('alert');
									$('#form_ajax_honorary').addClass('hide');
									$('#form_ajax_honorary').html('');
								}, 0);
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
								// Configuracion de la ventana modal
								$('#modal-id-honorary').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_honorary').html(error_icon + obj.message);
								$("#form_ajax_honorary").removeClass('alert-warning');
								$("#form_ajax_honorary").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_honorary').addClass('alert-danger');
							$("#form_ajax_honorary").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_honorary').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_change_action() {
	// Aplicar clases a los elementos requeridos
	$('#change_btn_page_length').addClass('d-none');
	$('#change_btn_colvis').addClass('d-none');
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

function event_change_data() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-change').modal('show');
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azs_gsc_consignment_id_azs_gsc_consignment",
				data: "lbl_azs_gsc_consignment_id_azs_gsc_consignment",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Creado Por",
				id: "lbl_azp_user_t_login_created",
				data: "lbl_azp_user_t_login_created",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Modificado Por",
				id: "lbl_azp_user_t_login_modified",
				data: "lbl_azp_user_t_login_modified",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Creacion",
				id: "lbl_azs_gsc_consignment_m_date_created",
				data: "lbl_azs_gsc_consignment_m_date_created",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azs_gsc_consignment_m_date_modified",
				data: "lbl_azs_gsc_consignment_m_date_modified",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azs_gsc_consignment_m_description",
				data: "lbl_azs_gsc_consignment_m_description",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Estado",
				id: "lbl_azp_sys_state_t_name",
				data: "lbl_azp_sys_state_t_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Numero Cuenta",
				id: "lbl_azs_gsc_consignment_t_account_number",
				data: "lbl_azs_gsc_consignment_t_account_number",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo De Cuenta",
				id: "lbl_azs_gsc_consignment_t_account_type",
				data: "lbl_azs_gsc_consignment_t_account_type",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Valor Cerrado",
				id: "lbl_azs_gsc_consignment_t_closed_value",
				data: "lbl_azs_gsc_consignment_t_closed_value",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Entidad Consignada",
				id: "lbl_azs_gsc_consignment_t_consigned_entity",
				data: "lbl_azs_gsc_consignment_t_consigned_entity",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Item Consignacion",
				id: "lbl_azs_gsc_consignment_t_consignment_item",
				data: "lbl_azs_gsc_consignment_t_consignment_item",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nit O Cedula",
				id: "lbl_azs_gsc_consignment_t_nit_identification",
				data: "lbl_azs_gsc_consignment_t_nit_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "A Quien Se Consigno",
				id: "lbl_azs_gsc_consignment_t_to_consigned",
				data: "lbl_azs_gsc_consignment_t_to_consigned",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_change').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "change/" + idtbl + "/",
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
			lengthMenu: [100, 200, 300, 400, 500,],
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
			stateSave: true,
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
					className: 'd-none btn-sm btn-outline-success',
					attr: {
						'id': 'change_btn_excel',
						'name': 'change_btn_excel',
					},
				},
				{
					extend: 'csvHtml5',
					text: '<i class="far fa-file-csv"></i>',
					titleAttr: 'CSV',
					className: 'd-none btn-sm btn-outline-info',
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
				{
					columns: [1, 2, 3, 5,],
					extend: 'columnToggle',
					text: '<i class="far fa-low-vision"></i>',
					titleAttr: 'Extender',
					className: 'd-none btn-sm btn-outline-primary',
					attr: {
						'id': 'change_btn_column_toggle',
						'name': 'change_btn_column_toggle',
					},
				},
				{
					extend: 'colvisRestore',
					text: '<i class="far fa-low-vision"></i>',
					titleAttr: 'Restaurar',
					className: 'd-none btn-sm btn-outline-success',
					attr: {
						'id': 'change_btn_colvis_restore',
						'name': 'change_btn_colvis_restore',
					},
				},
				{
					extend: 'colvis',
					text: '<i class="far fa-low-vision"></i>',
					titleAttr: 'Visible',
					className: 'd-none btn-sm btn-outline-dark',
					attr: {
						'id': 'change_btn_colvis',
						'name': 'change_btn_colvis',
					},
				},
				{
					extend: 'pageLength',
					text: '<i class="far fa-database"></i>',
					titleAttr: 'Mostrar',
					className: 'd-none btn-sm btn-outline-info',
					attr: {
						'id': 'change_btn_page_length',
						'name': 'change_btn_page_length',
					},
				},
			],
			columnDefs: [
				{
					targets: 7,
					render: function(data, type, full, meta) {
						var badge = {
							"Activo": {
								'title': 'Activo',
								'class': 'badge-success'
							},
							"Inactivo": {
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

function event_change_export() {
	// Aplicar clases a los elementos requeridos
	$('#change_btn_page_length').addClass('d-none');
	$('#change_btn_colvis').addClass('d-none');
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
	$('#change_btn_colvis').removeClass('d-none');
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
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_create').removeClass('alert-danger');
	$('#form_ajax_create').removeClass('alert-success');
	$('#form_ajax_create').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_create').addClass('alert-warning');
	$("#form_ajax_create").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_create').removeClass('hide');
	$('#form_ajax_create').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-create').modal('hide');
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
						$('#form_ajax_create').removeClass('alert');
						$('#form_ajax_create').addClass('hide');
						$('#form_ajax_create').html('');
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
					$('#modal-id-create').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/create",
						data : $('#form_create').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_create').html(success_icon + obj.message);
								$("#form_ajax_create").removeClass('alert-warning');
								$("#form_ajax_create").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_create").reset();
								// Configuracion de la ventana modal
								$('#modal-id-create').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_create').removeClass('alert');
									$('#form_ajax_create').addClass('hide');
									$('#form_ajax_create').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz registrado exitosamente los datos.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-create').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_create').html(error_icon + obj.message);
								$("#form_ajax_create").removeClass('alert-warning');
								$("#form_ajax_create").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_create').addClass('alert-danger');
							$("#form_ajax_create").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_create').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_data_class() {
	// Capturar el valor del campo de datos
	const ft_data = document.getElementById("field_ft_data").value;
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
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_delete').removeClass('alert-danger');
	$('#form_ajax_delete').removeClass('alert-success');
	$('#form_ajax_delete').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_delete').addClass('alert-warning');
	$("#form_ajax_delete").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_delete').removeClass('hide');
	$('#form_ajax_delete').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-delete').modal('hide');
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
						$('#form_ajax_delete').removeClass('alert');
						$('#form_ajax_delete').addClass('hide');
						$('#form_ajax_delete').html('');
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
					$('#modal-id-delete').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/delete",
						data : $('#form_delete').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_delete').html(success_icon + obj.message);
								$("#form_ajax_delete").removeClass('alert-warning');
								$("#form_ajax_delete").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-delete').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_delete').removeClass('alert');
									$('#form_ajax_delete').addClass('hide');
									$('#form_ajax_delete').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz eliminado exitosamente el registro.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-delete').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_delete').html(error_icon + obj.message);
								$("#form_ajax_delete").removeClass('alert-warning');
								$("#form_ajax_delete").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_delete').addClass('alert-danger');
							$("#form_ajax_delete").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_delete').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_detail() {
	//document.getElementById("lbl_azp_gsc_consignment_t_document").innerHTML = "";
	//$(".lbl_azp_gsc_consignment_t_document").remove();
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "detail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-detail').modal('show');
					document.querySelector("#lbl_azp_gsc_consignment_id_azp_gsc_consignment").innerHTML = objData.data.lbl_azp_gsc_consignment_id_azp_gsc_consignment;
					document.querySelector("#lbl_azp_user_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_user_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_gsc_consignment_m_date_created").innerHTML = objData.data.lbl_azp_gsc_consignment_m_date_created;
					document.querySelector("#lbl_azp_gsc_consignment_m_date_modified").innerHTML = objData.data.lbl_azp_gsc_consignment_m_date_modified;
					document.querySelector("#lbl_azp_gsc_consignment_m_description").innerHTML = objData.data.lbl_azp_gsc_consignment_m_description;
					document.querySelector("#lbl_azp_sys_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector("#lbl_azp_gsc_consignment_t_account_number").innerHTML = objData.data.lbl_azp_gsc_consignment_t_account_number;
					document.querySelector("#lbl_azp_gsc_consignment_t_account_type").innerHTML = objData.data.lbl_azp_gsc_consignment_t_account_type;
					document.querySelector("#lbl_azp_gsc_consignment_t_closed_value").innerHTML = objData.data.lbl_azp_gsc_consignment_t_closed_value;
					document.querySelector("#lbl_azp_gsc_consignment_t_consigned_entity").innerHTML = objData.data.lbl_azp_gsc_consignment_t_consigned_entity;
					document.querySelector("#lbl_azp_gsc_consignment_t_consignment_item").innerHTML = objData.data.lbl_azp_gsc_consignment_t_consignment_item;
					document.querySelector("#lbl_azp_gsc_consignment_t_honorary").innerHTML = objData.data.lbl_azp_gsc_consignment_t_honorary;
					document.querySelector("#lbl_azp_gsc_consignment_t_nit_identification").innerHTML = objData.data.lbl_azp_gsc_consignment_t_nit_identification;
					document.querySelector("#lbl_azp_gsc_consignment_t_to_consigned").innerHTML = objData.data.lbl_azp_gsc_consignment_t_to_consigned;
					document.querySelector("#lbl_azp_gsc_request_t_city").innerHTML = objData.data.lbl_azp_gsc_request_t_city;
					document.querySelector("#lbl_azp_gsc_request_t_full_name").innerHTML = objData.data.lbl_azp_gsc_request_t_full_name;
					document.querySelector("#lbl_azp_gsc_request_t_identification").innerHTML = objData.data.lbl_azp_gsc_request_t_identification;
					document.querySelector("#lbl_azp_gsc_request_t_notary").innerHTML = objData.data.lbl_azp_gsc_request_t_notary;
					document.querySelector("#lbl_azp_gsc_request_t_number_request").innerHTML = objData.data.lbl_azp_gsc_request_t_number_request;
					document.querySelector("#lbl_azp_gsc_request_t_serial").innerHTML = objData.data.lbl_azp_gsc_request_t_serial;
					document.querySelector("#lbl_azp_gsc_client_t_name").innerHTML = objData.data.lbl_azp_gsc_client_t_name;
					$('#lbl_azp_gsc_consignment_s_file_document').attr('src', objData.data.lbl_azp_gsc_consignment_s_file_document);
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

function event_email() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').removeClass('alert-danger');
	$('#form_ajax_email').removeClass('alert-success');
	$('#form_ajax_email').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').addClass('alert-warning');
	$("#form_ajax_email").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email').removeClass('hide');
	$('#form_ajax_email').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-email').modal('hide');

	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_user');
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
						$('#form_ajax_email').removeClass('alert');
						$('#form_ajax_email').addClass('hide');
						$('#form_ajax_email').html('');
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
					$('#modal-id-email').modal('show');
				}
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					// Obtener inputs seleccionados de la tabla
					var value_table_tp = document.querySelectorAll('.dt_table_third_parties');
					// Array para cargar los valores obtenidos
					var value_checked_tp = new Array();
					// Recorrer la variable con foreach
					value_table_tp.forEach((e) => {
						// Validacion de si estan chequeados
						if (e.checked == true) {
							// Obtener valores chequeados
							value_checked_tp.push(e.value);
						}
					});
					if (value_checked_tp == '') {
						$("#form_ajax_email").removeClass('alert-warning');
						$('#form_ajax_email').addClass('alert-danger');
						$("#form_ajax_email").html(error_icon  + '<b>Error:</b> Debes seleccionar minimo un correo electronico de terceros');
						$('#form_ajax_email').removeClass('hide');
						// Configuracion de la ventana modal
						$('#modal-id-email').modal('show');
					} else if (value_checked_tp != '') {
						$.ajax({
							type : "POST",
							url : "api/azp_gsc_consignment/email",
							data : $('#form_email').serialize() + '&field_em_id=' + value_checked + '&field_tp_id=' + value_checked_tp,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_email').html(success_icon + obj.message);
									$("#form_ajax_email").removeClass('alert-warning');
									$("#form_ajax_email").addClass('alert-success');
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector("#form_email").reset();
									// Configuracion de la ventana modal
									$('#modal-id-email').modal('hide');
									// Configuracion de la ventana modal
									$('#modal-id-confirm').modal('hide');
									// Añadir y remover clases e inclusive html
									setTimeout(function() {
										$('#form_ajax_email').removeClass('alert');
										$('#form_ajax_email').addClass('hide');
										$('#form_ajax_email').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_checkbox_all_read').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz enviado exitosamente el correo electronico.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Configuracion de la ventana modal
									$('#modal-id-email').modal('show');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_email').html(error_icon + obj.message);
									$("#form_ajax_email").removeClass('alert-warning');
									$("#form_ajax_email").addClass('alert-danger');
								}
							},
							error : function() {
								// Configuracion de la ventana modal
								$('#modal-id-email').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_email').addClass('alert-danger');
								$("#form_ajax_email").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_email').removeClass('hide');
							}
						});
					}
				}
			}
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_file() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_file').removeClass('alert-danger');
	$('#form_ajax_file').removeClass('alert-success');
	$('#form_ajax_file').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_file').addClass('alert-warning');
	$("#form_ajax_file").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_file').removeClass('hide');
	$('#form_ajax_file').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-file').modal('hide');
	var ajaxurl = var_url + var_controller + "document/";
	var formData = new FormData(document.getElementById("form_file"));
	var load_file = $("#field_fl_1_file")[0].files.length;
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
						$('#form_ajax_file').removeClass('alert');
						$('#form_ajax_file').addClass('hide');
						$('#form_ajax_file').html('');
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
					$('#modal-id-file').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var fileInput = document.getElementById('field_fl_1_file');
					var filePath = fileInput.value;
					var allowedExtensions = /(.pdf)$/i;

					if (load_file === 0) {
						$("#form_ajax_file").removeClass('alert-warning');
						$('#form_ajax_file').addClass('alert-danger');
						$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo es obligatorio');
						$('#form_ajax_file').removeClass('hide');
						// Configuracion de la ventana modal
						$('#modal-id-file').modal('show');
					} else {
						if (!allowedExtensions.exec(filePath)) {
							$("#form_ajax_file").removeClass('alert-warning');
							$('#form_ajax_file').addClass('alert-danger');
							$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
							$('#form_ajax_file').removeClass('hide');
							fileInput.value = '';
							// Configuracion de la ventana modal
							$('#modal-id-file').modal('show');
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
										url : "api/azp_gsc_consignment/file",
										data : $('#form_file').serialize(),
										success : function(json) {
											var obj = jQuery.parseJSON(json);
											if (obj.success == 1) {
												// Recargar la tabla con nueva informacion
												if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
												// Mensaje a mostrar una vez terminada la accion
												$('#form_ajax_file').html(success_icon + obj.message);
												$("#form_ajax_file").removeClass('alert-warning');
												$("#form_ajax_file").addClass('alert-success');
												// Dejar campos vacios sobre los elementos id del formulario
												document.querySelector("#form_file").reset();
												// Configuracion de la ventana modal
												$('#modal-id-file').modal('hide');
												// Añadir la clase al contenedor del archivo
												$('#id_fl_1_embed').addClass('d-none');
												$('#id_fl_2_embed').addClass('d-none');
												$('#id_fl_3_embed').addClass('d-none');
												$('#id_fl_4_embed').addClass('d-none');
												$('#id_fl_5_embed').addClass('d-none');
												$('#id_fl_6_embed').addClass('d-none');

												document.getElementById('field_fl_2_load_file').value = 'No';
												$('#field_fl_2_nro_receipt').prop('disabled', true);
												$('#field_fl_2_file').prop('disabled', true);
												document.getElementById('field_fl_2_nro_receipt').value = '';
												document.getElementById('field_fl_2_file').value = '';
												// Añadir la clase al contenedor del archivo
												$('#id_fl_2_embed').addClass('d-none');

												document.getElementById('field_fl_3_load_file').value = 'No';
												$('#field_fl_3_nro_receipt').prop('disabled', true);
												$('#field_fl_3_file').prop('disabled', true);
												document.getElementById('field_fl_3_nro_receipt').value = '';
												document.getElementById('field_fl_3_file').value = '';
												// Añadir la clase al contenedor del archivo
												$('#id_fl_3_embed').addClass('d-none');

												document.getElementById('field_fl_4_load_file').value = 'No';
												$('#field_fl_4_nro_receipt').prop('disabled', true);
												$('#field_fl_4_file').prop('disabled', true);
												document.getElementById('field_fl_4_nro_receipt').value = '';
												document.getElementById('field_fl_4_file').value = '';
												// Añadir la clase al contenedor del archivo
												$('#id_fl_4_embed').addClass('d-none');

												document.getElementById('field_fl_5_load_file').value = 'No';
												$('#field_fl_5_nro_receipt').prop('disabled', true);
												$('#field_fl_5_file').prop('disabled', true);
												document.getElementById('field_fl_5_nro_receipt').value = '';
												document.getElementById('field_fl_5_file').value = '';
												// Añadir la clase al contenedor del archivo
												$('#id_fl_5_embed').addClass('d-none');

												document.getElementById('field_fl_6_load_file').value = 'No';
												$('#field_fl_6_nro_receipt').prop('disabled', true);
												$('#field_fl_6_file').prop('disabled', true);
												document.getElementById('field_fl_6_nro_receipt').value = '';
												document.getElementById('field_fl_6_file').value = '';
												// Añadir la clase al contenedor del archivo
												$('#id_fl_6_embed').addClass('d-none');
												// Añadir y remover las clases incorporadas de las hojas de estilo
												setTimeout(function() {
													$('#form_ajax_file').removeClass('alert');
													$('#form_ajax_file').addClass('hide');
													$('#form_ajax_file').html('');
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
												$('#modal-id-file').modal('show');
												// Mensaje a mostrar una vez terminada la accion
												$('#form_ajax_file').html(error_icon + obj.message);
												$("#form_ajax_file").removeClass('alert-warning');
												$("#form_ajax_file").addClass('alert-danger');
											}
										},
										error : function() {
											$('#form_ajax_file').addClass('alert-danger');
											$("#form_ajax_file").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
											$('#form_ajax_file').removeClass('hide');
										},
									});
								},
								error: function() {
									$('#form_ajax_file').addClass('alert-danger');
									$("#form_ajax_file").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
									$('#form_ajax_file').removeClass('hide');
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

function event_remove() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_remove').removeClass('alert-danger');
	$('#form_ajax_remove').removeClass('alert-success');
	$('#form_ajax_remove').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_remove').addClass('alert-warning');
	$("#form_ajax_remove").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_remove').removeClass('hide');
	$('#form_ajax_remove').addClass('alert');
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
						$('#form_ajax_remove').removeClass('alert');
						$('#form_ajax_remove').addClass('hide');
						$('#form_ajax_remove').html('');
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
					$('#modal-id-remove').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/remove",
						data : $('#form_remove').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_remove').html(success_icon + obj.message);
								$("#form_ajax_remove").removeClass('alert-warning');
								$("#form_ajax_remove").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-remove').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_remove').removeClass('alert');
									$('#form_ajax_remove').addClass('hide');
									$('#form_ajax_remove').html('');
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
								$('#modal-id-remove').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_remove').html(error_icon + obj.message);
								$("#form_ajax_remove").removeClass('alert-warning');
								$("#form_ajax_remove").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_remove').addClass('alert-danger');
							$("#form_ajax_remove").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_remove').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_report_tcd() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_report_tcd').removeClass('alert-danger');
	$('#form_ajax_report_tcd').removeClass('alert-success');
	$('#form_ajax_report_tcd').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_report_tcd').addClass('alert-warning');
	$("#form_ajax_report_tcd").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_report_tcd').removeClass('hide');
	$('#form_ajax_report_tcd').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-report_tcd').modal('show');
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
						$('#form_ajax_report_tcd').removeClass('alert');
						$('#form_ajax_report_tcd').addClass('hide');
						$('#form_ajax_report_tcd').html('');
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
					$('#modal-id-report_tcd').modal('show');
				}
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/report_tcd",
						data : $('#form_report_tcd').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_report_tcd').html(success_icon + obj.message);
								$("#form_ajax_report_tcd").removeClass('alert-warning');
								$("#form_ajax_report_tcd").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-report_tcd').modal('show');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_report_tcd').removeClass('alert');
									$('#form_ajax_report_tcd').addClass('hide');
									$('#form_ajax_report_tcd').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Reporte generado correctamente.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
								$('#modal-id-report_tcd').modal('show');
								$('#form_btn_consolidated').removeClass('d-none');

								// Column Definitions
								var columnSet = [
									{
										title: "Entidad",
										id: "lbl_azp_report_consignment_s_entity",
										data: "lbl_azp_report_consignment_s_entity",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Solicitud",
										id: "lbl_azp_report_consignment_s_number_request",
										data: "lbl_azp_report_consignment_s_number_request",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Cedula",
										id: "lbl_azp_report_consignment_s_identification",
										data: "lbl_azp_report_consignment_s_identification",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Nombre",
										id: "lbl_azp_report_consignment_s_full_name",
										data: "lbl_azp_report_consignment_s_full_name",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Serial",
										id: "lbl_azp_report_consignment_s_serial",
										data: "lbl_azp_report_consignment_s_serial",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "A Quien Se Consigno",
										id: "lbl_azp_report_consignment_t_to_consigned",
										data: "lbl_azp_report_consignment_t_to_consigned",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Nit O Cedula",
										id: "lbl_azp_report_consignment_t_nit_identification",
										data: "lbl_azp_report_consignment_t_nit_identification",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Entidad Consignada",
										id: "lbl_azp_report_consignment_t_consigned_entity",
										data: "lbl_azp_report_consignment_t_consigned_entity",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Tipo De Cuenta",
										id: "lbl_azp_report_consignment_t_account_type",
										data: "lbl_azp_report_consignment_t_account_type",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Cuenta",
										id: "lbl_azp_report_consignment_t_account_number",
										data: "lbl_azp_report_consignment_t_account_number",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Valor Indiviual",
										id: "lbl_azp_report_consignment_t_value_unique",
										data: "lbl_azp_report_consignment_t_value_unique",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Valor Cerrado",
										id: "lbl_azp_report_consignment_t_closed_value",
										data: "lbl_azp_report_consignment_t_closed_value",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Notaria",
										id: "lbl_azp_report_consignment_s_notary",
										data: "lbl_azp_report_consignment_s_notary",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Ciudad",
										id: "lbl_azp_report_consignment_s_city",
										data: "lbl_azp_report_consignment_s_city",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Item Consignacion",
										id: "lbl_azp_report_consignment_t_consignment_item",
										data: "lbl_azp_report_consignment_t_consignment_item",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
									{
										title: "Honorarios",
										id: "lbl_azp_report_consignment_t_honorary",
										data: "lbl_azp_report_consignment_t_honorary",
										type: "readonly",
										className: "text-dark",
										visible: true,
									},
								];
								// Inicializar tabla de datos
								var myTable = $('#dt_report_tcd').dataTable({
									// Reinicialiar los datos de la tabla
									destroy: true,
									// Estructura de las columnas para el DOOM
									dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
										+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
											+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
										+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
										+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
									// Leer datos de prácticamente cualquier fuente de datos JSON
									ajax: var_url + 'api' + var_controller + "reporttcd/",
									// Cargar columnas del encabezado
									columns: columnSet,
									// Opciones para crear, editar, borrar y sincronizar
									altEditor: false,
									// Combinar valores en las demas celdas
									autoFill: false,
									// Control de funciones Manejo inteligente del ancho de columna
									autoWidth: false,
									// Movilizar columnas en la tabla
									colReorder: false,
									// Creará todos los elementos HTML necesarios por adelantado
									deferRender: false,
									// Fijar columnas en la tabla
									fixedColumns: false,
									// Fijar columnas en la parte superior de la tabla
									fixedHeader: false,
									// Mostrar entradas de los registros
									info: false,
									// Focalizar una celda de la tabla
									keys: false,
									// Cambiar numero de registros por pagina
									lengthChange: false,
									// Definir cantidad de registros por paginacion
									lengthMenu: [10, 20, 30, 40, 50,],
									// Ordenar columnas en ascendente o descendente
									order: [[0, "asc",],[1, "asc",],[13, "asc",],[12, "asc",],],
									// Controlar si las tablas de datos deben usar celda única superior
									orderCellsTop: false,
									// Ordenar segun columna los registros
									ordering: false,
									// Paginar registros limitadamente
									paging: false,
									// Procesando informacion de registros
									processing: false,
									// Control para el tamaño de la tabla de datos
									responsive: true,
									// Agrupar las filas de los registros
									rowGroup: false,
									// Control de busqueda de registros
									searching: true,
									// Selccionar varias filas de registro
									select: false,
									// Procesamiento del lado del servidor
									serverSide: false,
									// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
									//scroller: false,
									// Control para el desplazamiento medido de arriba abajo
									//scrollCollapse: false,
									// Control para el desplazamiento de derecha a izquiera
									//scrollX: false,
									// Control para el desplazamiento medido de arriba abajo
									//scrollY: false,
									// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
									stateSave: false,
									// Botones que usan clases de bootstrap
									buttons: [
										/*{
											extend: 'excelHtml5',
											text: '<i class="far fa-file-excel"></i>',
											titleAttr: 'Excel',
											className: 'btn-sm btn-outline-primary',
										},
										{
											extend: 'csvHtml5',
											text: '<i class="far fa-file-csv"></i>',
											titleAttr: 'CSV',
											className: 'btn-sm btn-outline-primary',
										},*/
									],
									columnDefs: [
										{
											targets: 10,
											render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
										},
										{
											targets: 11,
											render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
										},
										{
											targets: 15,
											render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
										},
									],
								});

								$('#div_report_group_total').addClass('d-none');
								$('#div_report_group_city').addClass('d-none');
								$('#div_report_group_notary').addClass('d-none');
								var groupby = document.getElementById('field_rp_tcd_group_by').value;
								// Condicion para visualizar datos
								if (groupby == 1) {
									// Remover las clases de los elementos
									$('#div_report_group_total').removeClass('d-none');
									// Column Definitions
									var columnSet = [
										/*{
											title: "Entidad",
											id: "lbl_azp_report_consignment_s_entity",
											data: "lbl_azp_report_consignment_s_entity",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Solicitud",
											id: "lbl_azp_report_consignment_s_number_request",
											data: "lbl_azp_report_consignment_s_number_request",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Cedula",
											id: "lbl_azp_report_consignment_s_identification",
											data: "lbl_azp_report_consignment_s_identification",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Nombre",
											id: "lbl_azp_report_consignment_s_full_name",
											data: "lbl_azp_report_consignment_s_full_name",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Serial",
											id: "lbl_azp_report_consignment_s_serial",
											data: "lbl_azp_report_consignment_s_serial",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										{
											title: "A Quien Se Consigno",
											id: "lbl_azp_report_consignment_t_to_consigned",
											data: "lbl_azp_report_consignment_t_to_consigned",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Nit O Cedula",
											id: "lbl_azp_report_consignment_t_nit_identification",
											data: "lbl_azp_report_consignment_t_nit_identification",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Entidad Consignada",
											id: "lbl_azp_report_consignment_t_consigned_entity",
											data: "lbl_azp_report_consignment_t_consigned_entity",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Tipo De Cuenta",
											id: "lbl_azp_report_consignment_t_account_type",
											data: "lbl_azp_report_consignment_t_account_type",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Cuenta",
											id: "lbl_azp_report_consignment_t_account_number",
											data: "lbl_azp_report_consignment_t_account_number",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Valor Cerrado",
											id: "lbl_azp_report_consignment_t_closed_value",
											data: "lbl_azp_report_consignment_t_closed_value",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										/*{
											title: "Ciudad",
											id: "lbl_azp_report_consignment_s_city",
											data: "lbl_azp_report_consignment_s_city",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Notaria",
											id: "lbl_azp_report_consignment_s_notary",
											data: "lbl_azp_report_consignment_s_notary",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Item Consignacion",
											id: "lbl_azp_report_consignment_t_consignment_item",
											data: "lbl_azp_report_consignment_t_consignment_item",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Honorarios",
											id: "lbl_azp_report_consignment_t_honorary",
											data: "lbl_azp_report_consignment_t_honorary",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
									];
									// Inicializar tabla de datos
									var myTable = $('#dt_report_group_total').dataTable({
										// Reinicialiar los datos de la tabla
										destroy: true,
										// Estructura de las columnas para el DOOM
										dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
												+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
										// Leer datos de prácticamente cualquier fuente de datos JSON
										ajax: var_url + 'api' + var_controller + "reportgroup/",
										// Cargar columnas del encabezado
										columns: columnSet,
										// Opciones para crear, editar, borrar y sincronizar
										altEditor: false,
										// Combinar valores en las demas celdas
										autoFill: false,
										// Control de funciones Manejo inteligente del ancho de columna
										autoWidth: false,
										// Movilizar columnas en la tabla
										colReorder: false,
										// Creará todos los elementos HTML necesarios por adelantado
										deferRender: false,
										// Fijar columnas en la tabla
										fixedColumns: false,
										// Fijar columnas en la parte superior de la tabla
										fixedHeader: false,
										// Mostrar entradas de los registros
										info: false,
										// Focalizar una celda de la tabla
										keys: false,
										// Cambiar numero de registros por pagina
										lengthChange: false,
										// Definir cantidad de registros por paginacion
										lengthMenu: [10, 20, 30, 40, 50,],
										// Ordenar columnas en ascendente o descendente
										//order: [[0, "asc",],[1, "asc",],[13, "asc",],[12, "asc",],],
										// Controlar si las tablas de datos deben usar celda única superior
										orderCellsTop: false,
										// Ordenar segun columna los registros
										ordering: false,
										// Paginar registros limitadamente
										paging: false,
										// Procesando informacion de registros
										processing: false,
										// Control para el tamaño de la tabla de datos
										responsive: true,
										// Agrupar las filas de los registros
										rowGroup: false,
										// Control de busqueda de registros
										searching: true,
										// Selccionar varias filas de registro
										select: false,
										// Procesamiento del lado del servidor
										serverSide: false,
										// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
										//scroller: false,
										// Control para el desplazamiento medido de arriba abajo
										//scrollCollapse: false,
										// Control para el desplazamiento de derecha a izquiera
										//scrollX: false,
										// Control para el desplazamiento medido de arriba abajo
										//scrollY: false,
										// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
										stateSave: false,
										// Botones que usan clases de bootstrap
										buttons: [
											/*{
												extend: 'excelHtml5',
												text: '<i class="far fa-file-excel"></i>',
												titleAttr: 'Excel',
												className: 'btn-sm btn-outline-primary',
											},
											{
												extend: 'csvHtml5',
												text: '<i class="far fa-file-csv"></i>',
												titleAttr: 'CSV',
												className: 'btn-sm btn-outline-primary',
											},*/
										],
										columnDefs: [
											{
												targets: 5,
												render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
											},
											/*{
												targets: 14,
												render: $.fn.dataTable.render.number(',', '.', 0, '$', ''),
											},*/
										],
									});
								}
								// Condicion para visualizar datos
								if (groupby == 2) {
									// Remover las clases de los elementos
									$('#div_report_group_city').removeClass('d-none');
									// Column Definitions
									var columnSet = [
										/*{
											title: "Entidad",
											id: "lbl_azp_report_consignment_s_entity",
											data: "lbl_azp_report_consignment_s_entity",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Solicitud",
											id: "lbl_azp_report_consignment_s_number_request",
											data: "lbl_azp_report_consignment_s_number_request",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Cedula",
											id: "lbl_azp_report_consignment_s_identification",
											data: "lbl_azp_report_consignment_s_identification",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Nombre",
											id: "lbl_azp_report_consignment_s_full_name",
											data: "lbl_azp_report_consignment_s_full_name",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Serial",
											id: "lbl_azp_report_consignment_s_serial",
											data: "lbl_azp_report_consignment_s_serial",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										{
											title: "A Quien Se Consigno",
											id: "lbl_azp_report_consignment_t_to_consigned",
											data: "lbl_azp_report_consignment_t_to_consigned",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Nit O Cedula",
											id: "lbl_azp_report_consignment_t_nit_identification",
											data: "lbl_azp_report_consignment_t_nit_identification",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Entidad Consignada",
											id: "lbl_azp_report_consignment_t_consigned_entity",
											data: "lbl_azp_report_consignment_t_consigned_entity",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Tipo De Cuenta",
											id: "lbl_azp_report_consignment_t_account_type",
											data: "lbl_azp_report_consignment_t_account_type",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Cuenta",
											id: "lbl_azp_report_consignment_t_account_number",
											data: "lbl_azp_report_consignment_t_account_number",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Valor Cerrado",
											id: "lbl_azp_report_consignment_t_closed_value",
											data: "lbl_azp_report_consignment_t_closed_value",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Ciudad",
											id: "lbl_azp_report_consignment_s_city",
											data: "lbl_azp_report_consignment_s_city",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										/*{
											title: "Notaria",
											id: "lbl_azp_report_consignment_s_notary",
											data: "lbl_azp_report_consignment_s_notary",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Item Consignacion",
											id: "lbl_azp_report_consignment_t_consignment_item",
											data: "lbl_azp_report_consignment_t_consignment_item",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Honorarios",
											id: "lbl_azp_report_consignment_t_honorary",
											data: "lbl_azp_report_consignment_t_honorary",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
									];
									// Inicializar tabla de datos
									var myTable = $('#dt_report_group_city').dataTable({
										// Reinicialiar los datos de la tabla
										destroy: true,
										// Estructura de las columnas para el DOOM
										dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
												+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
										// Leer datos de prácticamente cualquier fuente de datos JSON
										ajax: var_url + 'api' + var_controller + "reportgroup/",
										// Cargar columnas del encabezado
										columns: columnSet,
										// Opciones para crear, editar, borrar y sincronizar
										altEditor: false,
										// Combinar valores en las demas celdas
										autoFill: false,
										// Control de funciones Manejo inteligente del ancho de columna
										autoWidth: false,
										// Movilizar columnas en la tabla
										colReorder: false,
										// Creará todos los elementos HTML necesarios por adelantado
										deferRender: false,
										// Fijar columnas en la tabla
										fixedColumns: false,
										// Fijar columnas en la parte superior de la tabla
										fixedHeader: false,
										// Mostrar entradas de los registros
										info: false,
										// Focalizar una celda de la tabla
										keys: false,
										// Cambiar numero de registros por pagina
										lengthChange: false,
										// Definir cantidad de registros por paginacion
										lengthMenu: [10, 20, 30, 40, 50,],
										// Ordenar columnas en ascendente o descendente
										//order: [[0, "asc",],[1, "asc",],[13, "asc",],[12, "asc",],],
										// Controlar si las tablas de datos deben usar celda única superior
										orderCellsTop: false,
										// Ordenar segun columna los registros
										ordering: false,
										// Paginar registros limitadamente
										paging: false,
										// Procesando informacion de registros
										processing: false,
										// Control para el tamaño de la tabla de datos
										responsive: true,
										// Agrupar las filas de los registros
										rowGroup: false,
										// Control de busqueda de registros
										searching: true,
										// Selccionar varias filas de registro
										select: false,
										// Procesamiento del lado del servidor
										serverSide: false,
										// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
										//scroller: false,
										// Control para el desplazamiento medido de arriba abajo
										//scrollCollapse: false,
										// Control para el desplazamiento de derecha a izquiera
										//scrollX: false,
										// Control para el desplazamiento medido de arriba abajo
										//scrollY: false,
										// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
										stateSave: false,
										// Botones que usan clases de bootstrap
										buttons: [
											/*{
												extend: 'excelHtml5',
												text: '<i class="far fa-file-excel"></i>',
												titleAttr: 'Excel',
												className: 'btn-sm btn-outline-primary',
											},
											{
												extend: 'csvHtml5',
												text: '<i class="far fa-file-csv"></i>',
												titleAttr: 'CSV',
												className: 'btn-sm btn-outline-primary',
											},*/
										],
										columnDefs: [
											{
												targets: 5,
												render: $.fn.dataTable.render.number(',', '.', 0, '$', ''),
											},
											/*{
												targets: 14,
												render: $.fn.dataTable.render.number(',', '.', 0, '$', ''),
											},*/
										],
									});
								}
								// Condicion para visualizar datos
								if (groupby == 3) {
									// Remover las clases de los elementos
									$('#div_report_group_notary').removeClass('d-none');
									// Column Definitions
									var columnSet = [
										/*{
											title: "Entidad",
											id: "lbl_azp_report_consignment_s_entity",
											data: "lbl_azp_report_consignment_s_entity",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Solicitud",
											id: "lbl_azp_report_consignment_s_number_request",
											data: "lbl_azp_report_consignment_s_number_request",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Cedula",
											id: "lbl_azp_report_consignment_s_identification",
											data: "lbl_azp_report_consignment_s_identification",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Nombre",
											id: "lbl_azp_report_consignment_s_full_name",
											data: "lbl_azp_report_consignment_s_full_name",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Serial",
											id: "lbl_azp_report_consignment_s_serial",
											data: "lbl_azp_report_consignment_s_serial",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										{
											title: "A Quien Se Consigno",
											id: "lbl_azp_report_consignment_t_to_consigned",
											data: "lbl_azp_report_consignment_t_to_consigned",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Nit O Cedula",
											id: "lbl_azp_report_consignment_t_nit_identification",
											data: "lbl_azp_report_consignment_t_nit_identification",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Entidad Consignada",
											id: "lbl_azp_report_consignment_t_consigned_entity",
											data: "lbl_azp_report_consignment_t_consigned_entity",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Tipo De Cuenta",
											id: "lbl_azp_report_consignment_t_account_type",
											data: "lbl_azp_report_consignment_t_account_type",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Cuenta",
											id: "lbl_azp_report_consignment_t_account_number",
											data: "lbl_azp_report_consignment_t_account_number",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Valor Cerrado",
											id: "lbl_azp_report_consignment_t_closed_value",
											data: "lbl_azp_report_consignment_t_closed_value",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Ciudad",
											id: "lbl_azp_report_consignment_s_city",
											data: "lbl_azp_report_consignment_s_city",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										{
											title: "Notaria",
											id: "lbl_azp_report_consignment_s_notary",
											data: "lbl_azp_report_consignment_s_notary",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},
										/*{
											title: "Item Consignacion",
											id: "lbl_azp_report_consignment_t_consignment_item",
											data: "lbl_azp_report_consignment_t_consignment_item",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
										/*{
											title: "Honorarios",
											id: "lbl_azp_report_consignment_t_honorary",
											data: "lbl_azp_report_consignment_t_honorary",
											type: "readonly",
											className: "text-dark",
											visible: true,
										},*/
									];
									// Inicializar tabla de datos
									var myTable = $('#dt_report_group_notary').dataTable({
										// Reinicialiar los datos de la tabla
										destroy: true,
										// Estructura de las columnas para el DOOM
										dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
												+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
											+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
										// Leer datos de prácticamente cualquier fuente de datos JSON
										ajax: var_url + 'api' + var_controller + "reportgroup/",
										// Cargar columnas del encabezado
										columns: columnSet,
										// Opciones para crear, editar, borrar y sincronizar
										altEditor: false,
										// Combinar valores en las demas celdas
										autoFill: false,
										// Control de funciones Manejo inteligente del ancho de columna
										autoWidth: false,
										// Movilizar columnas en la tabla
										colReorder: false,
										// Creará todos los elementos HTML necesarios por adelantado
										deferRender: false,
										// Fijar columnas en la tabla
										fixedColumns: false,
										// Fijar columnas en la parte superior de la tabla
										fixedHeader: false,
										// Mostrar entradas de los registros
										info: false,
										// Focalizar una celda de la tabla
										keys: false,
										// Cambiar numero de registros por pagina
										lengthChange: false,
										// Definir cantidad de registros por paginacion
										lengthMenu: [10, 20, 30, 40, 50,],
										// Ordenar columnas en ascendente o descendente
										//order: [[0, "asc",],[1, "asc",],[13, "asc",],[12, "asc",],],
										// Controlar si las tablas de datos deben usar celda única superior
										orderCellsTop: false,
										// Ordenar segun columna los registros
										ordering: false,
										// Paginar registros limitadamente
										paging: false,
										// Procesando informacion de registros
										processing: false,
										// Control para el tamaño de la tabla de datos
										responsive: true,
										// Agrupar las filas de los registros
										rowGroup: false,
										// Control de busqueda de registros
										searching: true,
										// Selccionar varias filas de registro
										select: false,
										// Procesamiento del lado del servidor
										serverSide: false,
										// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
										//scroller: false,
										// Control para el desplazamiento medido de arriba abajo
										//scrollCollapse: false,
										// Control para el desplazamiento de derecha a izquiera
										//scrollX: false,
										// Control para el desplazamiento medido de arriba abajo
										//scrollY: false,
										// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
										stateSave: false,
										// Botones que usan clases de bootstrap
										buttons: [
											/*{
												extend: 'excelHtml5',
												text: '<i class="far fa-file-excel"></i>',
												titleAttr: 'Excel',
												className: 'btn-sm btn-outline-primary',
											},
											{
												extend: 'csvHtml5',
												text: '<i class="far fa-file-csv"></i>',
												titleAttr: 'CSV',
												className: 'btn-sm btn-outline-primary',
											},*/
										],
										columnDefs: [
											{
												targets: 5,
												render: $.fn.dataTable.render.number(',', '.', 0, '$', ''),
											},
											/*{
												targets: 14,
												render: $.fn.dataTable.render.number(',', '.', 0, '$', ''),
											},*/
										],
									});
								}
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-report_tcd').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_report_tcd').html(error_icon + obj.message);
								$("#form_ajax_report_tcd").removeClass('alert-warning');
								$("#form_ajax_report_tcd").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_report_tcd').addClass('alert-danger');
							$("#form_ajax_report_tcd").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_report_tcd').removeClass('hide');
						}
					});
				}
			}
		},
		className: "modal-alert",
		closeButton: false,
	});
}

function event_restore() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_restore').removeClass('alert-danger');
	$('#form_ajax_restore').removeClass('alert-success');
	$('#form_ajax_restore').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_restore').addClass('alert-warning');
	$("#form_ajax_restore").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_restore').removeClass('hide');
	$('#form_ajax_restore').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-restore').modal('hide');
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
						$('#form_ajax_restore').removeClass('alert');
						$('#form_ajax_restore').addClass('hide');
						$('#form_ajax_restore').html('');
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
					$('#modal-id-restore').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/restore",
						data : $('#form_restore').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_restore').html(success_icon + obj.message);
								$("#form_ajax_restore").removeClass('alert-warning');
								$("#form_ajax_restore").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-restore').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_restore').removeClass('alert');
									$('#form_ajax_restore').addClass('hide');
									$('#form_ajax_restore').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz restaurado exitosamente el registro.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-restore').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_restore').html(error_icon + obj.message);
								$("#form_ajax_restore").removeClass('alert-warning');
								$("#form_ajax_restore").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_restore').addClass('alert-danger');
							$("#form_ajax_restore").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_restore').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_update() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_update').removeClass('alert-danger');
	$('#form_ajax_update').removeClass('alert-success');
	$('#form_ajax_update').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_update').addClass('alert-warning');
	$("#form_ajax_update").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_update').removeClass('hide');
	$('#form_ajax_update').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-update').modal('hide');
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
						$('#form_ajax_update').removeClass('alert');
						$('#form_ajax_update').addClass('hide');
						$('#form_ajax_update').html('');
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
					$('#modal-id-update').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_gsc_consignment/update",
						data : $('#form_update').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_update').html(success_icon + obj.message);
								$("#form_ajax_update").removeClass('alert-warning');
								$("#form_ajax_update").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-update').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_update').removeClass('alert');
									$('#form_ajax_update').addClass('hide');
									$('#form_ajax_update').html('');
								}, 0);
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
								// Configuracion de la ventana modal
								$('#modal-id-update').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_update').html(error_icon + obj.message);
								$("#form_ajax_update").removeClass('alert-warning');
								$("#form_ajax_update").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_update').addClass('alert-danger');
							$("#form_ajax_update").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_update').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_multiple() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_consignment').DataTable();
	vtable.column(0).visible(true);
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').removeClass('alert-danger');
	$('#form_ajax_consignment').removeClass('alert-success');
	$('#form_ajax_consignment').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').addClass('alert-warning');
	$("#form_ajax_consignment").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_consignment').removeClass('hide');
	$('#form_ajax_consignment').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-multiple').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.td_consignment');
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
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_consignment').DataTable();
		vtable.column(0).visible(false);
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
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_consignment').DataTable();
						vtable.column(0).visible(false);
						// Añadir y remover las clases incorporadas de las hojas de estilo
						setTimeout(function() {
							$('#form_ajax_consignment').removeClass('alert');
							$('#form_ajax_consignment').addClass('hide');
							$('#form_ajax_consignment').html('');
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
							url : "api/azp_gsc_consignment/multiple",
							data : $('#form_consignment').serialize() + '&field_tb_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Mostrar la columna especificada de la tabla
									var vtable = $('#dt_consignment').DataTable();
									vtable.column(0).visible(false);
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_consignment').html(success_icon + obj.message);
									$("#form_ajax_consignment").removeClass('alert-warning');
									$("#form_ajax_consignment").addClass('alert-success');
									// Configuracion de la ventana modal
									$('#modal-id-consignment').modal('hide');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_consignment').removeClass('alert');
										$('#form_ajax_consignment').addClass('hide');
										$('#form_ajax_consignment').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_checkbox_all_read').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz alamcenado exitosamente los datos.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_consignment').html(error_icon + obj.message);
									$("#form_ajax_consignment").removeClass('alert-warning');
									$("#form_ajax_consignment").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_consignment').addClass('alert-danger');
								$("#form_ajax_consignment").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_consignment').removeClass('hide');
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

function modal_consignment() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').removeClass('alert-danger');
	$('#form_ajax_consignment').removeClass('alert-success');
	$('#form_ajax_consignment').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').addClass('alert-warning');
	$("#form_ajax_consignment").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_consignment').removeClass('hide');
	$('#form_ajax_consignment').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-consignment').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_read');
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
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					setTimeout(function() {
						$('#form_ajax_consignment').removeClass('alert');
						$('#form_ajax_consignment').addClass('hide');
						$('#form_ajax_consignment').html('');
					}, 0);
					// Configuracion de la ventana modal
					event_data_receipt();
					// Configuracion de la ventana modal
					event_data_notary();
					$('#modal-id-dispatch').modal('show');
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_consignment').html(error_icon + obj.message);
					$("#form_ajax_consignment").removeClass('alert-warning');
					$("#form_ajax_consignment").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_consignment').addClass('alert-danger');
				$("#form_ajax_consignment").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_consignment').removeClass('hide');
			}
		});
	}
};

function modal_honorary() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_honorary').removeClass('alert-danger');
	$('#form_ajax_honorary').removeClass('alert-success');
	$('#form_ajax_honorary').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_honorary').addClass('alert-warning');
	$("#form_ajax_honorary").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_honorary').removeClass('hide');
	$('#form_ajax_honorary').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-honorary').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_read');
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
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_honorary').removeClass('alert');
						$('#form_ajax_honorary').addClass('hide');
						$('#form_ajax_honorary').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-honorary').modal('show');
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_honorary').html(error_icon + obj.message);
					$("#form_ajax_honorary").removeClass('alert-warning');
					$("#form_ajax_honorary").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_honorary').addClass('alert-danger');
				$("#form_ajax_honorary").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_honorary').removeClass('hide');
			}
		});
	}
};

function modal_delete() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-delete').modal('show');
		document.querySelector("#field_id_delete").value = idtbl;
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

function event_file_zip() {
	var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl = var_url + 'api' + var_controller + "filezip/";
	request.open("GET", ajaxurl, true);
	request.send();
	//$('#modal-id-detail').modal('show');
	request.onreadystatechange = function(){
		if (request.readyState == 4 && request.status == 200) {
			var objData = JSON.parse(request.responseText);
			if (objData.status) {
				// Asignacion de valores con el texto por defecto
				var t_encode = objData.data.lbl_azp_gsc_generated_files_t_encode;
				var t_name_file = objData.data.lbl_azp_gsc_generated_files_t_name_file;
				var t_route = objData.data.lbl_azs_gsc_generated_files_t_route;
				var file_new = t_route + t_name_file;
				var a = $("<a>").attr("href", "data:application/zip;base64," + t_encode).attr("download", t_name_file).appendTo("body");
				a[0].click();
				a.remove();
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
};

function modal_file() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_file').removeClass('alert-danger');
	$('#form_ajax_file').removeClass('alert-success');
	$('#form_ajax_file').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_file').addClass('alert-warning');
	$("#form_ajax_file").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_file').removeClass('hide');
	$('#form_ajax_file').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-file').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_read');
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
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					// Cargar vista del archivo a traves de url en el campo de la vista
					/*document.querySelector('#field_fl_file').addEventListener('change', () =>  {
						let pdffFile = document.querySelector('#field_fl_file').files[0];
						let pdffURL = URL.createObjectURL(pdffFile) + "#toolbar=0";
						document.querySelector('#field_fl_embed').setAttribute('src', pdffURL);
					});*/
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_file').removeClass('alert');
						$('#form_ajax_file').addClass('hide');
						$('#form_ajax_file').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-file').modal('show');
					// Column Definitions
					var columnSet = [
						{
							title: "Entidad",
							id: "lbl_azp_gsc_client_t_name",
							data: "lbl_azp_gsc_client_t_name",
							type: "readonly",
							visible: true,
						},
						{
							title: "Solicitud",
							id: "lbl_azp_gsc_update_t_number_request",
							data: "lbl_azp_gsc_update_t_number_request",
							type: "readonly",
							visible: true,
						},
						{
							title: "Cedula",
							id: "lbl_azp_gsc_update_t_identification",
							data: "lbl_azp_gsc_update_t_identification",
							type: "readonly",
							visible: true,
						},
						{
							title: "Nombre",
							id: "lbl_azp_gsc_update_t_full_name",
							data: "lbl_azp_gsc_update_t_full_name",
							type: "readonly",
							visible: true,
						},
					];
					// Inicializar tabla de datos
					var myTable = $('#dt_file').dataTable({
						// Reinicialiar los datos de la tabla
						destroy: true,
						// Estructura de las columnas para el DOOM
						dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center justify-content-start'f><'col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 d-flex align-items-center justify-content-end'B>>" +
							"<'row'<'col-sm-12'tr>>" +
							"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
						ajax: var_url + 'api' + var_controller + "file/",
						columns: columnSet,
						// Mostrar botones encima del buscador
						//dom: 'Bfrtip',
						// Mostrar selector de la cantidad de registros
						//dom: 'lBfrtip',
						// Cambiar numero de registros por pagina
						//lengthChange: true,
						// Definir cantidad de registros por paginacion
						//lengthMenu: [10, 20, 30, 40, 50],
						// Control para el tamaño de la tabla de datos
						responsive: false,
						// Control para el desplazamiento medido de arriba abajo
						//scrollY: 250,
						// Control para el desplazamiento medido de arriba abajo
						scrollCollapse: false,
						// Control para el desplazamiento de derecha a izquiera
						scrollX: false,
						// Selccionar varias filas de registro
						select: false,
						// Opciones para crear, editar, borrar y sincronizar
						altEditor: false,
						// Control de busqueda de registros
						searching: false,
						// Ordenar segun columna los registros
						ordering: false,
						// Paginar registros limitadamente
						paging: false,
						// Fijar columnas en la parte superior de la tabla
						fixedHeader: false,
						// Movilizar columnas en la tabla
						colReorder: false,
						// Mostrar entradas de los registros
						info: false,
						// Procesando informacion de registros
						processing: false,
						// Agrupar las filas de los registros
						rowGroup: false,
						// Focalizar una celda de la tabla
						keys: false,
						// Fijar columnas en la tabla
						fixedColumns: false,
						// Combinar valores en las demas celdas
						autoFill: false,
						// Botones que usan clases de bootstrap
						buttons: [],
					});
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_file').html(error_icon + obj.message);
					$("#form_ajax_file").removeClass('alert-warning');
					$("#form_ajax_file").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_file').addClass('alert-danger');
				$("#form_ajax_file").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_file').removeClass('hide');
			}
		});
	}
};

function modal_remove() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-remove').modal('show');
		document.querySelector("#field_id_remove").value = idtbl;
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

function modal_report_tcd() {
	// Configuracion de la ventana modal
	$('#modal-id-report').modal('hide');
	// Configuracion de la ventana modal
	$('#modal-id-report_tcd').modal('show');
};

function modal_restore() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-restore').modal('show');
		document.querySelector("#field_id_restore").value = idtbl;
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

function modal_update() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "update/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-update').modal('show');
					document.querySelector("#field_up_id").value = objData.data.lbl_azp_gsc_consignment_id_azp_gsc_consignment;
					document.querySelector("#field_up_description").value = objData.data.lbl_azp_gsc_consignment_m_description;
					//document.querySelector("#field_up_state").value = objData.data.lbl_azp_gsc_consignment_m_status;
					document.querySelector("#field_up_account_number").value = objData.data.lbl_azp_gsc_consignment_t_account_number;
					document.querySelector("#field_up_account_type").value = objData.data.lbl_azp_gsc_consignment_t_account_type;
					document.querySelector("#field_up_closed_value").value = objData.data.lbl_azp_gsc_consignment_t_closed_value;
					document.querySelector("#field_up_consigned_entity").value = objData.data.lbl_azp_gsc_consignment_t_consigned_entity;
					document.querySelector("#field_up_consignment_item").value = objData.data.lbl_azp_gsc_consignment_t_consignment_item;
					document.querySelector("#field_up_nit_identification").value = objData.data.lbl_azp_gsc_consignment_t_nit_identification;
					document.querySelector("#field_up_to_consigned").value = objData.data.lbl_azp_gsc_consignment_t_to_consigned;
					document.querySelector("#field_up_gsc_request").value = objData.data.lbl_azp_gsc_consignment_v_id_azp_gsc_request;
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

function event_list_email() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_em_business_name').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var field_em_business_name = $('#field_em_business_name').val();
		var ajaxurl = var_url + 'api' + var_controller + "dataget/?field_em_id=" + idtbl + "/";
		$.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {field_em_business_name: field_em_business_name}
		}).done(function(argument) {
			$('#field_em_email').html(argument);
		});

		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "dataget/?field_em_business_name=" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					document.querySelector("#lbl_data_gsc_third_parties_t_business_name").innerHTML = objData.data.lbl_azp_gsc_third_parties_t_business_name;
				}
			}
		}
	}
};

function event_intern() {
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_user_id_azp_user",
			data: "lbl_azp_user_id_azp_user",
			type: "readonly",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Seleccion",
			id: "lbl_azp_user_id_azp_user",
			data: "lbl_azp_user_id_azp_user",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_user_t_email",
			data: "lbl_azp_user_t_email",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_user').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: "api" + var_controller + "user/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		altEditor: false,
		// Combinar valores en las demas celdas
		autoFill: false,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: false,
		// Movilizar columnas en la tabla
		colReorder: false,
		// Creará todos los elementos HTML necesarios por adelantado
		deferRender: false,
		// Fijar columnas en la tabla
		fixedColumns: false,
		// Fijar columnas en la parte superior de la tabla
		fixedHeader: false,
		// Mostrar entradas de los registros
		info: false,
		// Focalizar una celda de la tabla
		keys: false,
		// Cambiar numero de registros por pagina
		lengthChange: false,
		// Definir cantidad de registros por paginacion
		lengthMenu: [10, 20, 30, 40, 50,],
		// Ordenar columnas en ascendente o descendente
		order: [[0, "asc",]],
		// Controlar si las tablas de datos deben usar celda única superior
		orderCellsTop: false,
		// Ordenar segun columna los registros
		ordering: false,
		// Paginar registros limitadamente
		paging: false,
		// Procesando informacion de registros
		processing: false,
		// Control para el tamaño de la tabla de datos
		responsive: true,
		// Agrupar las filas de los registros
		rowGroup: false,
		// Control de busqueda de registros
		searching: false,
		// Selccionar varias filas de registro
		select: false,
		// Procesamiento del lado del servidor
		serverSide: false,
		// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
		//scroller: false,
		// Control para el desplazamiento medido de arriba abajo
		//scrollCollapse: false,
		// Control para el desplazamiento de derecha a izquiera
		//scrollX: false,
		// Control para el desplazamiento medido de arriba abajo
		//scrollY: false,
		// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
		stateSave: false,
		// Botones que usan clases de bootstrap
		buttons: [],
		columnDefs: [
			{
				targets: 1,
				'searchable': false,
				'orderable': false,
				'className': 'dt-body-center',
				'render': function (data, type, full, meta) {
					return '<input type="checkbox" name="field_us_id" id="field_us_id" class="dt_table_user" value="' + $('<div/>').text(data).html() + '">';
				}
			},
		],
	});
};

function event_summernote() {
	var isChecked = document.getElementById('field_ck_checkbox_summernote').checked;
	if (isChecked) {
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#field_em_summernote').addClass('js-summernote');

		document.getElementById("field_tx_summernote").innerHTML = '<div class="form-group">'
			+ ' <textarea name="field_em_summernote" id="field_em_summernote" class="form-control js-summernote" placeholder="Digita el texto ..." rows="5"></textarea>'
			+ '</div>';
	} else {
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#field_em_summernote').removeClass('js-summernote');
	}
};

function event_third_parties_email() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById("field_em_business_name").value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-third_parties').modal('show');
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
				data: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Seleccion",
				id: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
				data: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Correo Electronico",
				id: "lbl_azp_gsc_third_parties_t_email",
				data: "lbl_azp_gsc_third_parties_t_email",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_third_parties').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "thirdparties/" + idtbl + "/",
			// Cargar columnas del encabezado
			columns: columnSet,
			// Opciones para crear, editar, borrar y sincronizar
			altEditor: false,
			// Combinar valores en las demas celdas
			autoFill: false,
			// Control de funciones Manejo inteligente del ancho de columna
			autoWidth: false,
			// Movilizar columnas en la tabla
			colReorder: false,
			// Creará todos los elementos HTML necesarios por adelantado
			deferRender: false,
			// Fijar columnas en la tabla
			fixedColumns: false,
			// Fijar columnas en la parte superior de la tabla
			fixedHeader: false,
			// Mostrar entradas de los registros
			info: false,
			// Focalizar una celda de la tabla
			keys: false,
			// Cambiar numero de registros por pagina
			lengthChange: false,
			// Definir cantidad de registros por paginacion
			lengthMenu: [10, 20, 30, 40, 50,],
			// Ordenar columnas en ascendente o descendente
			order: [[0, "asc",]],
			// Controlar si las tablas de datos deben usar celda única superior
			orderCellsTop: false,
			// Ordenar segun columna los registros
			ordering: false,
			// Paginar registros limitadamente
			paging: false,
			// Procesando informacion de registros
			processing: false,
			// Control para el tamaño de la tabla de datos
			responsive: true,
			// Agrupar las filas de los registros
			rowGroup: false,
			// Control de busqueda de registros
			searching: false,
			// Selccionar varias filas de registro
			select: false,
			// Procesamiento del lado del servidor
			serverSide: false,
			// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
			//scroller: false,
			// Control para el desplazamiento medido de arriba abajo
			//scrollCollapse: false,
			// Control para el desplazamiento de derecha a izquiera
			//scrollX: false,
			// Control para el desplazamiento medido de arriba abajo
			//scrollY: false,
			// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
			stateSave: false,
			// Botones que usan clases de bootstrap
			buttons: [],
			columnDefs: [
				{
					targets: 1,
					'searchable': false,
					'orderable': false,
					'className': 'dt-body-center',
					'render': function (data, type, full, meta) {
						return '<input type="checkbox" name="field_tp_id" id="field_tp_id" class="dt_table_third_parties" value="' + $('<div/>').text(data).html() + '">';
					}
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

function event_email_intern() {
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_gsc_email_copy_id_azp_gsc_email_copy",
			data: "lbl_azp_gsc_email_copy_id_azp_gsc_email_copy",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Seleccion",
			id: "lbl_azp_gsc_email_copy_id_azp_gsc_email_copy",
			data: "lbl_azp_gsc_email_copy_id_azp_gsc_email_copy",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_gsc_email_copy_t_email",
			data: "lbl_azp_gsc_email_copy_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Nombres",
			id: "lbl_azp_gsc_email_copy_t_names",
			data: "lbl_azp_gsc_email_copy_t_names",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Apellidos",
			id: "lbl_azp_gsc_email_copy_t_surnames",
			data: "lbl_azp_gsc_email_copy_t_surnames",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_user').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: "api" + "azpgscemailcopy/" + "read/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		altEditor: false,
		// Combinar valores en las demas celdas
		autoFill: false,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: false,
		// Movilizar columnas en la tabla
		colReorder: false,
		// Creará todos los elementos HTML necesarios por adelantado
		deferRender: false,
		// Fijar columnas en la tabla
		fixedColumns: false,
		// Fijar columnas en la parte superior de la tabla
		fixedHeader: false,
		// Mostrar entradas de los registros
		info: false,
		// Focalizar una celda de la tabla
		keys: false,
		// Cambiar numero de registros por pagina
		lengthChange: false,
		// Definir cantidad de registros por paginacion
		lengthMenu: [10, 20, 30, 40, 50,],
		// Ordenar columnas en ascendente o descendente
		order: [[0, "asc",]],
		// Controlar si las tablas de datos deben usar celda única superior
		orderCellsTop: false,
		// Ordenar segun columna los registros
		ordering: false,
		// Paginar registros limitadamente
		paging: false,
		// Procesando informacion de registros
		processing: false,
		// Control para el tamaño de la tabla de datos
		responsive: true,
		// Agrupar las filas de los registros
		rowGroup: false,
		// Control de busqueda de registros
		searching: false,
		// Selccionar varias filas de registro
		select: false,
		// Procesamiento del lado del servidor
		serverSide: false,
		// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
		//scroller: false,
		// Control para el desplazamiento medido de arriba abajo
		//scrollCollapse: false,
		// Control para el desplazamiento de derecha a izquiera
		//scrollX: false,
		// Control para el desplazamiento medido de arriba abajo
		//scrollY: false,
		// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
		stateSave: false,
		// Botones que usan clases de bootstrap
		buttons: [],
		columnDefs: [
			{
				targets: 1,
				'searchable': false,
				'orderable': false,
				'className': 'dt-body-center',
				'render': function (data, type, full, meta) {
					return '<input type="checkbox" name="field_us_id" id="field_us_id" class="dt_table_user" value="' + $('<div/>').text(data).html() + '">';
				}
			},
		],
	});
};

function event_email_third_parties() {
	// Obtener el primer valor seleccionado de la tabla
	var ide = document.getElementById("field_em_third_type").value;
	// Validar si el id es mayor a cero
	if (ide > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + 'thirdpartiescount/' + ide + '/';
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					count = objData.data.lbl_count;
					if (count > 0) {
						// Configuracion de la ventana modal
						$('#modal-id-third_parties').modal('show');
						// Column Definitions
						var columnSet = [
							{
								title: "Id",
								id: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
								data: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
								type: "text",
								className: "text-dark",
								visible: false,
							},
							{
								title: "Seleccion",
								id: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
								data: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
								type: "text",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Contacto",
								id: "lbl_azp_gsc_third_parties_t_contact",
								data: "lbl_azp_gsc_third_parties_t_contact",
								type: "text",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Correo Electronico",
								id: "lbl_azp_gsc_third_parties_t_email",
								data: "lbl_azp_gsc_third_parties_t_email",
								type: "text",
								className: "text-dark",
								visible: true,
							},
						];
						// Inicializar tabla de datos
						var myTable = $('#dt_third_parties').dataTable({
							// Reinicialiar los datos de la tabla
							destroy: true,
							// Estructura de las columnas para el DOOM
							dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
								+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
									+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
								+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
								+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
							// Leer datos de prácticamente cualquier fuente de datos JSON
							ajax: var_url + 'api' + var_controller + 'thirdparties/' + ide + '/',
							// Cargar columnas del encabezado
							columns: columnSet,
							// Opciones para crear, editar, borrar y sincronizar
							altEditor: false,
							// Combinar valores en las demas celdas
							autoFill: false,
							// Control de funciones Manejo inteligente del ancho de columna
							autoWidth: false,
							// Movilizar columnas en la tabla
							colReorder: false,
							// Creará todos los elementos HTML necesarios por adelantado
							deferRender: false,
							// Fijar columnas en la tabla
							fixedColumns: false,
							// Fijar columnas en la parte superior de la tabla
							fixedHeader: false,
							// Mostrar entradas de los registros
							info: false,
							// Focalizar una celda de la tabla
							keys: false,
							// Cambiar numero de registros por pagina
							lengthChange: false,
							// Definir cantidad de registros por paginacion
							lengthMenu: [10, 20, 30, 40, 50,],
							// Ordenar columnas en ascendente o descendente
							order: [[0, "asc",]],
							// Controlar si las tablas de datos deben usar celda única superior
							orderCellsTop: false,
							// Ordenar segun columna los registros
							ordering: false,
							// Paginar registros limitadamente
							paging: false,
							// Procesando informacion de registros
							processing: false,
							// Control para el tamaño de la tabla de datos
							responsive: true,
							// Agrupar las filas de los registros
							rowGroup: false,
							// Control de busqueda de registros
							searching: false,
							// Selccionar varias filas de registro
							select: false,
							// Procesamiento del lado del servidor
							serverSide: false,
							// Permite dibujar grandes conjuntos de datos en la pantalla muy rápidamente
							//scroller: false,
							// Control para el desplazamiento medido de arriba abajo
							//scrollCollapse: false,
							// Control para el desplazamiento de derecha a izquiera
							//scrollX: false,
							// Control para el desplazamiento medido de arriba abajo
							//scrollY: false,
							// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
							stateSave: false,
							// Botones que usan clases de bootstrap
							buttons: [],
							columnDefs: [
								{
									targets: 1,
									'searchable': false,
									'orderable': false,
									'className': 'dt-body-center',
									'render': function (data, type, full, meta) {
										return '<input type="checkbox" name="field_tp_id" id="field_tp_id" class="dt_table_third_parties" value="' + $('<div/>').text(data).html() + '">';
									}
								},
							],
						});
					} else {
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos:</strong> La razon social seleccionado no tiene asociado ningun correo.</span>",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					}
				} else {
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
						message: "<span><strong>Error:</strong> Problema detectado en el sistema, por favor comuniquese con el administrador.</span>",
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
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ninguna razon social.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function modal_email() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').removeClass('alert-danger');
	$('#form_ajax_email').removeClass('alert-success');
	$('#form_ajax_email').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').addClass('alert-warning');
	$("#form_ajax_email").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email').removeClass('hide');
	$('#form_ajax_email').addClass('alert');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_0').removeClass('alert-danger');
	$('#form_ajax_email_0').removeClass('alert-success');
	$('#form_ajax_email_0').removeClass('alert-warning');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_email_0').removeClass('alert');
	$('#form_ajax_email_0').addClass('hide');
	$('#form_ajax_email_0').html('');
	// Configuracion de la ventana modal
	//$('#modal-id-email').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_read');
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
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
					var ajaxurl = var_url + 'api' + var_controller + "value/";
					request.open("GET", ajaxurl, true);
					request.send();
					//$('#modal-id-detail').modal('show');
					request.onreadystatechange = function(){
						if (request.readyState == 4 && request.status == 200) {
							var objData = JSON.parse(request.responseText);
							if (objData.status) {
								// Asignacion de valores con el texto por defecto
								var closed_value = new Intl.NumberFormat().format(objData.data.lbl_azp_gsc_report_consignment_t_closed_value);
								// Defincion del texto a recargar en el campo de texto
								var summernote_1 = '<p></p>' +
									'<p>De acuerdo con confirmación de la existencia de (los) siguiente(s) ' +
									'certificado(s) en referencia en esa notaria, adjuntamos ' +
									'consignación por $ ' + closed_value + ', solicitando la expedición y envío de los mismos.</p>'
								;
								// Borrar el codigo del campo de texto
								$("#field_em_summernote_1").summernote("code", summernote_1);
								// Añadir un texto definido en el campo de texto
								//$('#field_em_summernote_1').summernote('insertText', '');
								// Añadir un texto definido en el campo de texto
								//$('#field_em_summernote_1').summernote('pasteHTML', summernote);
								// Añadir propiedades al campo de texto
								$('#field_em_summernote_1').summernote({
									placeholder: 'Digita el texto ...',
									tabsize: 2,
									height: 125,
								});
								// Defincion del texto a recargar en el campo de texto
								var summernote_2 = '<p></p>' +
									'<p>Quedo atento a cualquier comentario.</p>' +
									'<p>Cordialmente,</p>'
								;
								// Borrar el codigo del campo de texto
								$("#field_em_summernote_2").summernote("code", summernote_2);
								// Añadir un texto definido en el campo de texto
								//$('#field_em_summernote_2').summernote('insertText', '');
								// Añadir un texto definido en el campo de texto
								//$('#field_em_summernote_2').summernote('pasteHTML', summernote);
								// Añadir propiedades al campo de texto
								$('#field_em_summernote_2').summernote({
									placeholder: 'Digita el texto ...',
									tabsize: 2,
									height: 125,
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

					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_email').removeClass('alert');
						$('#form_ajax_email').addClass('hide');
						$('#form_ajax_email').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-email').modal('show');
					// Column Definitions
					var columnSet = [
						{
							title: "Cedula",
							id: "lbl_azp_gsc_update_t_identification",
							data: "lbl_azp_gsc_update_t_identification",
							type: "readonly",
							visible: true,
						},
						{
							title: "Nombre",
							id: "lbl_azp_gsc_update_t_full_name",
							data: "lbl_azp_gsc_update_t_full_name",
							type: "readonly",
							visible: true,
						},
						{
							title: "Serial",
							id: "lbl_azp_gsc_update_t_serial",
							data: "lbl_azp_gsc_update_t_serial",
							type: "readonly",
							visible: true,
						},
						{
							title: "Notaria",
							id: "lbl_azp_gsc_update_t_notary",
							data: "lbl_azp_gsc_update_t_notary",
							type: "readonly",
							visible: true,
						},
						{
							title: "Ciudad",
							id: "lbl_azp_gsc_update_t_city",
							data: "lbl_azp_gsc_update_t_city",
							type: "readonly",
							visible: true,
						},
					];
					// Inicializar tabla de datos
					var myTable = $('#dt_email').dataTable({
						// Reinicialiar los datos de la tabla
						destroy: true,
						// Estructura de las columnas para el DOOM
						dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center justify-content-start'f><'col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 d-flex align-items-center justify-content-end'B>>" +
							"<'row'<'col-sm-12'tr>>" +
							"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
						ajax: var_url + 'api' + var_controller + "email/",
						columns: columnSet,
						// Mostrar botones encima del buscador
						//dom: 'Bfrtip',
						// Mostrar selector de la cantidad de registros
						//dom: 'lBfrtip',
						// Cambiar numero de registros por pagina
						//lengthChange: true,
						// Definir cantidad de registros por paginacion
						//lengthMenu: [10, 20, 30, 40, 50],
						// Control para el tamaño de la tabla de datos
						responsive: false,
						// Control para el desplazamiento medido de arriba abajo
						//scrollY: 250,
						// Control para el desplazamiento medido de arriba abajo
						scrollCollapse: false,
						// Control para el desplazamiento de derecha a izquiera
						scrollX: false,
						// Selccionar varias filas de registro
						select: false,
						// Opciones para crear, editar, borrar y sincronizar
						altEditor: false,
						// Control de busqueda de registros
						searching: false,
						// Ordenar segun columna los registros
						ordering: false,
						// Paginar registros limitadamente
						paging: false,
						// Fijar columnas en la parte superior de la tabla
						fixedHeader: false,
						// Movilizar columnas en la tabla
						colReorder: false,
						// Mostrar entradas de los registros
						info: false,
						// Procesando informacion de registros
						processing: false,
						// Agrupar las filas de los registros
						rowGroup: false,
						// Focalizar una celda de la tabla
						keys: false,
						// Fijar columnas en la tabla
						fixedColumns: false,
						// Combinar valores en las demas celdas
						autoFill: false,
						// Botones que usan clases de bootstrap
						buttons: [],
					});
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_email').html(error_icon + obj.message);
					$("#form_ajax_email").removeClass('alert-warning');
					$("#form_ajax_email").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_email').addClass('alert-danger');
				$("#form_ajax_email").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_email').removeClass('hide');
			}
		});
		// Añadir y remover las clases incorporadas de las hojas de estilo
		setTimeout(function() {
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email_0').removeClass('alert');
			$('#form_ajax_email_0').addClass('hide');
			$('#form_ajax_email_0').html('');
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email').removeClass('alert');
			$('#form_ajax_email').addClass('hide');
			$('#form_ajax_email').html('');
		}, 0);
		// Configuracion de la ventana modal
		$('#modal-id-email').modal('show');
	}
};

/*function modal_email__() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').removeClass('alert-danger');
	$('#form_ajax_email').removeClass('alert-success');
	$('#form_ajax_email').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').addClass('alert-warning');
	$("#form_ajax_email").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email').removeClass('hide');
	$('#form_ajax_email').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-email').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_read');
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
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
					var ajaxurl = var_url + 'api' + var_controller + "value/";
					request.open("GET", ajaxurl, true);
					request.send();
					//$('#modal-id-detail').modal('show');
					request.onreadystatechange = function(){
						if (request.readyState == 4 && request.status == 200) {
							var objData = JSON.parse(request.responseText);
							if (objData.status) {
								// Asignacion de valores con el texto por defecto
								console.log(objData.data.lbl_azp_gsc_report_consignment_t_closed_value);
								var closed_value = new Intl.NumberFormat().format(objData.data.lbl_azp_gsc_report_consignment_t_closed_value);
								console.log(closed_value);
								var text_modified = 'De acuerdo con confirmación de la existencia de (los) siguiente(s) certificado(s) en referencia en esa notaria, adjuntamos consignación por $ ' + closed_value + ', solicitando la expedición y envío de los mismos.';
								// Borrar el codigo del campo de texto
								$("#field_em_summernote").summernote("code", "");
								// Añadir un texto definido en el campo de texto
								$('#field_em_summernote').summernote('insertText', text_modified);
								// Añadir propiedades al campo de texto
								$('#field_em_summernote').summernote({
									placeholder: 'Digita el texto ...',
									tabsize: 2,
									height: 125,
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

					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_email').removeClass('alert');
						$('#form_ajax_email').addClass('hide');
						$('#form_ajax_email').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-email').modal('show');
					// Column Definitions
					var columnSet = [
						{
							title: "Cedula",
							id: "lbl_azp_gsc_update_t_identification",
							data: "lbl_azp_gsc_update_t_identification",
							type: "readonly",
							visible: true,
						},
						{
							title: "Nombre",
							id: "lbl_azp_gsc_update_t_full_name",
							data: "lbl_azp_gsc_update_t_full_name",
							type: "readonly",
							visible: true,
						},
						{
							title: "Serial",
							id: "lbl_azp_gsc_update_t_serial",
							data: "lbl_azp_gsc_update_t_serial",
							type: "readonly",
							visible: true,
						},
						{
							title: "Notaria",
							id: "lbl_azp_gsc_update_t_notary",
							data: "lbl_azp_gsc_update_t_notary",
							type: "readonly",
							visible: true,
						},
						{
							title: "Ciudad",
							id: "lbl_azp_gsc_update_t_city",
							data: "lbl_azp_gsc_update_t_city",
							type: "readonly",
							visible: true,
						},
					];
					// Inicializar tabla de datos
					var myTable = $('#dt_email').dataTable({
						// Reinicialiar los datos de la tabla
						destroy: true,
						// Estructura de las columnas para el DOOM
						dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center justify-content-start'f><'col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 d-flex align-items-center justify-content-end'B>>" +
							"<'row'<'col-sm-12'tr>>" +
							"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
						ajax: var_url + 'api' + var_controller + "email/",
						columns: columnSet,
						// Mostrar botones encima del buscador
						//dom: 'Bfrtip',
						// Mostrar selector de la cantidad de registros
						//dom: 'lBfrtip',
						// Cambiar numero de registros por pagina
						//lengthChange: true,
						// Definir cantidad de registros por paginacion
						//lengthMenu: [10, 20, 30, 40, 50],
						// Control para el tamaño de la tabla de datos
						responsive: false,
						// Control para el desplazamiento medido de arriba abajo
						//scrollY: 250,
						// Control para el desplazamiento medido de arriba abajo
						scrollCollapse: false,
						// Control para el desplazamiento de derecha a izquiera
						scrollX: false,
						// Selccionar varias filas de registro
						select: false,
						// Opciones para crear, editar, borrar y sincronizar
						altEditor: false,
						// Control de busqueda de registros
						searching: false,
						// Ordenar segun columna los registros
						ordering: false,
						// Paginar registros limitadamente
						paging: false,
						// Fijar columnas en la parte superior de la tabla
						fixedHeader: false,
						// Movilizar columnas en la tabla
						colReorder: false,
						// Mostrar entradas de los registros
						info: false,
						// Procesando informacion de registros
						processing: false,
						// Agrupar las filas de los registros
						rowGroup: false,
						// Focalizar una celda de la tabla
						keys: false,
						// Fijar columnas en la tabla
						fixedColumns: false,
						// Combinar valores en las demas celdas
						autoFill: false,
						// Botones que usan clases de bootstrap
						buttons: [],
					});
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_email').html(error_icon + obj.message);
					$("#form_ajax_email").removeClass('alert-warning');
					$("#form_ajax_email").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_email').addClass('alert-danger');
				$("#form_ajax_email").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_email').removeClass('hide');
			}
		});
	}
};*/

function modal_view_1(event) {
	var load = $("#field_fl_1_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_1_file');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) {
		// Añadir la clase al contenedor del archivo
		$('#id_fl_1_embed').addClass('d-none');
	} else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_1_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_file').removeClass('alert');
				$('#form_ajax_file').addClass('hide');
				$('#form_ajax_file').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_fl_1_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				$('#id_fl_1_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_fl_1_embed').addClass('d-none');
			}
		}
	}
};

function modal_view_2(event) {
	var load = $("#field_fl_2_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_2_file');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) {
		// Añadir la clase al contenedor del archivo
		$('#id_fl_2_embed').addClass('d-none');
	} else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_2_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_file').removeClass('alert');
				$('#form_ajax_file').addClass('hide');
				$('#form_ajax_file').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_fl_2_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				$('#id_fl_2_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_fl_2_embed').addClass('d-none');
			}
		}
	}
};

function modal_view_3(event) {
	var load = $("#field_fl_3_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_3_file');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) {
		// Añadir la clase al contenedor del archivo
		$('#id_fl_3_embed').addClass('d-none');
	} else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_3_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_file').removeClass('alert');
				$('#form_ajax_file').addClass('hide');
				$('#form_ajax_file').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_fl_3_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				$('#id_fl_3_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_fl_3_embed').addClass('d-none');
			}
		}
	}
};

function modal_view_4(event) {
	var load = $("#field_fl_4_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_4_file');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) {
		// Añadir la clase al contenedor del archivo
		$('#id_fl_4_embed').addClass('d-none');
	} else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_4_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_file').removeClass('alert');
				$('#form_ajax_file').addClass('hide');
				$('#form_ajax_file').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_fl_4_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				$('#id_fl_4_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_fl_4_embed').addClass('d-none');
			}
		}
	}
};

function modal_view_5(event) {
	var load = $("#field_fl_5_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_5_file');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) {
		// Añadir la clase al contenedor del archivo
		$('#id_fl_5_embed').addClass('d-none');
	} else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_5_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_file').removeClass('alert');
				$('#form_ajax_file').addClass('hide');
				$('#form_ajax_file').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_fl_5_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				$('#id_fl_5_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_fl_5_embed').addClass('d-none');
			}
		}
	}
};

function modal_view_6(event) {
	var load = $("#field_fl_6_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_6_file');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) {
		// Añadir la clase al contenedor del archivo
		$('#id_fl_6_embed').addClass('d-none');
	} else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_6_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_file').removeClass('alert');
				$('#form_ajax_file').addClass('hide');
				$('#form_ajax_file').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_fl_6_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				$('#id_fl_6_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_fl_6_embed').addClass('d-none');
			}
		}
	}
};

function event_consult() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "detail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_gsc_consignment_s_file_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo de consignacion.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Asignacion de valores en un campo de texto
						document.getElementById("field_dcrt_id").value = idtbl;
						document.getElementById("field_dcrt_receipt").value = objData.data.lbl_azp_gsc_consignment_t_nro_receipt;
						document.getElementById("field_dcrt_document").value = objData.data.lbl_azp_gsc_consignment_s_file_document;
						$('#modal-id-file_consignment').modal('show');
						// Definiendo valores de la busqueda de resultados
						var route = var_url + objData.data.lbl_azp_gsc_consignment_s_file_route;
						var file = objData.data.lbl_azp_gsc_consignment_s_file_document;
						var name = objData.data.lbl_azp_gsc_consignment_s_file_name;
						$('#iframe_file_consignment').attr('src', route + file);
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

function event_download() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById("field_dcrt_id").value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "detail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_gsc_consignment_s_file_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo de consignacion.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Definiendo valores de la busqueda de resultados
						var route = var_url + objData.data.lbl_azp_gsc_consignment_s_file_route;
						var file = objData.data.lbl_azp_gsc_consignment_s_file_document;
						var name = objData.data.lbl_azp_gsc_consignment_s_file_name;
						var a = $("<a>").attr("href", route + file).attr("download", file).appendTo("body");
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

function modal_compress() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').removeClass('alert-danger');
	$('#form_ajax_email').removeClass('alert-success');
	$('#form_ajax_email').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email').addClass('alert-warning');
	$("#form_ajax_email").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email').removeClass('hide');
	$('#form_ajax_email').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/azp_gsc_consignment/compress",
		data : $('#form_email').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				var a = $("<a>").attr("href", "data:application/zip;base64," + obj.encode).attr("download", obj.compressed).appendTo("body");
				a[0].click();
				a.remove();
				// Mensaje a mostrar una vez terminada la accion
				$('#form_ajax_email').html(success_icon + obj.message);
				$("#form_ajax_email").removeClass('alert-warning');
				$("#form_ajax_email").addClass('alert-success');
			} else {
				// Mensaje a mostrar una vez terminada la accion
				$('#form_ajax_email').html(error_icon + obj.message);
				$("#form_ajax_email").removeClass('alert-warning');
				$("#form_ajax_email").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_email').addClass('alert-danger');
			$("#form_ajax_email").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_email').removeClass('hide');
		},
	});
}

function event_client() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_ft_client').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + 'api' + var_controller + "clientnr/" + idtbl + "/";
		$.ajax({
			type: 'POST',
			url: ajaxurl,
		}).done(function(argument) {
			$('#field_ft_number_request').html(argument);
		});
	}
};

function event_number_request() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_ft_number_request').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + 'api' + var_controller + "filternr/" + idtbl + "/";
		$.ajax({
			type: 'POST',
			url: ajaxurl,
		}).done(function(argument) {
			$('#field_ft_request_date').html(argument);
		});
	}
};

function event_confirm() {
	$('#modal-id-confirm').modal('show');

	// Obtener inputs seleccionados de la tabla
	var value_table_tp = document.querySelectorAll('.dt_table_third_parties');
	// Array para cargar los valores obtenidos
	var value_checked_tp = new Array();
	// Recorrer la variable con foreach
	value_table_tp.forEach((e) => {
		// Validacion de si estan chequeados
		if (e.checked == true) {
			// Obtener valores chequeados
			value_checked_tp.push(e.value);
		}
	});

	// Obtener inputs seleccionados de la tabla
	var value_table_us = document.querySelectorAll('.dt_table_user');
	// Array para cargar los valores obtenidos
	var value_checked_us = new Array();
	// Recorrer la variable con foreach
	value_table_us.forEach((e) => {
		// Validacion de si estan chequeados
		if (e.checked == true) {
			// Obtener valores chequeados
			value_checked_us.push(e.value);
		}
	});

	console.log(value_checked_tp);
	console.log(value_checked_us);

	var columnSet_main = [
		{
			title: "Id",
			id: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
			data: "lbl_azp_gsc_third_parties_id_azp_gsc_third_parties",
			type: "text",
			className: "text-dark",
			visible: false,
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
			id: "lbl_azp_gsc_third_parties_m_date_created",
			data: "lbl_azp_gsc_third_parties_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_gsc_third_parties_m_date_modified",
			data: "lbl_azp_gsc_third_parties_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_gsc_third_parties_m_description",
			data: "lbl_azp_gsc_third_parties_m_description",
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
			title: "Contacto",
			id: "lbl_azp_gsc_third_parties_t_contact",
			data: "lbl_azp_gsc_third_parties_t_contact",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_gsc_third_parties_t_email",
			data: "lbl_azp_gsc_third_parties_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable_main = $('#dt_confirm_main').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "confirmmain/?field_id=" + value_checked_tp,
		// Cargar columnas del encabezado
		columns: columnSet_main,
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
		lengthChange: false,
		// Definir cantidad de registros por paginacion
		lengthMenu: [[10, 20, 30, 40, 50, -1,], [10, 20, 30, 40, 50, 'Todo',],],
		// Ordenar columnas en ascendente o descendente
		order: [[0, 'desc',]],
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
		//scrollY: 300,
		// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
		stateSave: false,
		// Botones que usan clases de bootstrap
		buttons: [],
		columnDefs: [
			{
				targets: 6,
				render: function(data, type, full, meta) {
					var info = {
						'Activo': {
							'class': 'badge badge-success badge-pill',
							'title': 'Activo',
						},
						'Inactivo': {
							'class': 'badge badge-warning badge-pill',
							'title': 'Inactivo',
						},
					};
					if (typeof info[data] === 'undefined') { return data; }
					return '<span class="' + info[data].class + '">' + info[data].title + '</span>';
				},
			},
		],
	});

	var columnSet_intern = [
		{
			title: "Id",
			id: "lbl_azp_gsc_email_copy_id_azp_gsc_email_copy",
			data: "lbl_azp_gsc_email_copy_id_azp_gsc_email_copy",
			type: "text",
			className: "text-dark",
			visible: false,
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
			id: "lbl_azp_gsc_email_copy_m_date_created",
			data: "lbl_azp_gsc_email_copy_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_gsc_email_copy_m_date_modified",
			data: "lbl_azp_gsc_email_copy_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_gsc_email_copy_m_description",
			data: "lbl_azp_gsc_email_copy_m_description",
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
			title: "Nombres",
			id: "lbl_azp_gsc_email_copy_t_names",
			data: "lbl_azp_gsc_email_copy_t_names",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Apellidos",
			id: "lbl_azp_gsc_email_copy_t_surnames",
			data: "lbl_azp_gsc_email_copy_t_surnames",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_gsc_email_copy_t_email",
			data: "lbl_azp_gsc_email_copy_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable_intern = $('#dt_confirm_intern').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "confirmintern/?field_id=" + value_checked_us,
		// Cargar columnas del encabezado
		columns: columnSet_intern,
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
		lengthChange: false,
		// Definir cantidad de registros por paginacion
		lengthMenu: [[10, 20, 30, 40, 50, -1,], [10, 20, 30, 40, 50, 'Todo',],],
		// Ordenar columnas en ascendente o descendente
		order: [[0, 'desc',]],
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
		//scrollY: 300,
		// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
		stateSave: false,
		// Botones que usan clases de bootstrap
		buttons: [],
		columnDefs: [
			{
				targets: 6,
				render: function(data, type, full, meta) {
					var info = {
						'Activo': {
							'class': 'badge badge-success badge-pill',
							'title': 'Activo',
						},
						'Inactivo': {
							'class': 'badge badge-warning badge-pill',
							'title': 'Inactivo',
						},
					};
					if (typeof info[data] === 'undefined') { return data; }
					return '<span class="' + info[data].class + '">' + info[data].title + '</span>';
				},
			},
		],
	});
};

function event_value_closed() {
	if ($('#check_upall_value_check').is(':checked')) {
		$('#field_upall_value_divided').attr('readonly','');
		$('#field_upall_value_unique').removeAttr('readonly','');
		$('#div_upall_value_unique').removeClass('d-none');
		document.getElementById('field_upall_value_check').value = 'SI';
	} else {
		$('#field_upall_value_divided').removeAttr('readonly','');
		$('#field_upall_value_unique').attr('readonly','');
		$('#div_upall_value_unique').addClass('d-none');
		document.getElementById('field_upall_value_unique').value = '0';
		document.getElementById('field_upall_value_check').value = 'NO';
	}
};

function event_value_closed_1() {
	if ($('#check_upall_1_value_check').is(':checked')) {
		$('#field_upall_1_value_divided').attr('readonly','');
		$('#field_upall_1_value_unique').removeAttr('readonly','');
		$('#div_upall_1_value_unique').removeClass('d-none');
		document.getElementById('field_upall_1_value_check').value = 'SI';
	} else {
		$('#field_upall_1_value_divided').removeAttr('readonly','');
		$('#field_upall_1_value_unique').attr('readonly','');
		$('#div_upall_1_value_unique').addClass('d-none');
		document.getElementById('field_upall_1_value_unique').value = '0';
		document.getElementById('field_upall_1_value_check').value = 'NO';
	}
};

function event_value_closed_2() {
	if ($('#check_upall_2_value_check').is(':checked')) {
		$('#field_upall_2_value_divided').attr('readonly','');
		$('#field_upall_2_value_unique').removeAttr('readonly','');
		$('#div_upall_2_value_unique').removeClass('d-none');
		document.getElementById('field_upall_2_value_check').value = 'SI';
	} else {
		$('#field_upall_2_value_divided').removeAttr('readonly','');
		$('#field_upall_2_value_unique').attr('readonly','');
		$('#div_upall_2_value_unique').addClass('d-none');
		document.getElementById('field_upall_2_value_unique').value = '0';
		document.getElementById('field_upall_2_value_check').value = 'NO';
	}
};

function event_value_closed_3() {
	if ($('#check_upall_3_value_check').is(':checked')) {
		$('#field_upall_3_value_divided').attr('readonly','');
		$('#field_upall_3_value_unique').removeAttr('readonly','');
		$('#div_upall_3_value_unique').removeClass('d-none');
		document.getElementById('field_upall_3_value_check').value = 'SI';
	} else {
		$('#field_upall_3_value_divided').removeAttr('readonly','');
		$('#field_upall_3_value_unique').attr('readonly','');
		$('#div_upall_3_value_unique').addClass('d-none');
		document.getElementById('field_upall_3_value_unique').value = '0';
		document.getElementById('field_upall_3_value_check').value = 'NO';
	}
};

function event_value_closed_4() {
	if ($('#check_upall_4_value_check').is(':checked')) {
		$('#field_upall_4_value_divided').attr('readonly','');
		$('#field_upall_4_value_unique').removeAttr('readonly','');
		$('#div_upall_4_value_unique').removeClass('d-none');
		document.getElementById('field_upall_4_value_check').value = 'SI';
	} else {
		$('#field_upall_4_value_divided').removeAttr('readonly','');
		$('#field_upall_4_value_unique').attr('readonly','');
		$('#div_upall_4_value_unique').addClass('d-none');
		document.getElementById('field_upall_4_value_unique').value = '0';
		document.getElementById('field_upall_4_value_check').value = 'NO';
	}
};

function event_value_closed_5() {
	if ($('#check_upall_5_value_check').is(':checked')) {
		$('#field_upall_5_value_divided').attr('readonly','');
		$('#field_upall_5_value_unique').removeAttr('readonly','');
		$('#div_upall_5_value_unique').removeClass('d-none');
		document.getElementById('field_upall_5_value_check').value = 'SI';
	} else {
		$('#field_upall_5_value_divided').removeAttr('readonly','');
		$('#field_upall_5_value_unique').attr('readonly','');
		$('#div_upall_5_value_unique').addClass('d-none');
		document.getElementById('field_upall_5_value_unique').value = '0';
		document.getElementById('field_upall_5_value_check').value = 'NO';
	}
};

function event_value_closed_6() {
	if ($('#check_upall_6_value_check').is(':checked')) {
		$('#field_upall_6_value_divided').attr('readonly','');
		$('#field_upall_6_value_unique').removeAttr('readonly','');
		$('#div_upall_6_value_unique').removeClass('d-none');
		document.getElementById('field_upall_6_value_check').value = 'SI';
	} else {
		$('#field_upall_6_value_divided').removeAttr('readonly','');
		$('#field_upall_6_value_unique').attr('readonly','');
		$('#div_upall_6_value_unique').addClass('d-none');
		document.getElementById('field_upall_6_value_unique').value = '0';
		document.getElementById('field_upall_6_value_check').value = 'NO';
	}
};

function check_file_2() {
	if ($('#check_fl_2_load_file').is(':checked')) {
		document.getElementById('field_fl_2_load_file').value = 'Si';
		$('#field_fl_2_nro_receipt').prop('disabled', false);
		$('#field_fl_2_file').prop('disabled', false);
		// Añadir la clase al contenedor del archivo
		$('#id_fl_2_embed').removeClass('d-none');
	} else {
		document.getElementById('field_fl_2_load_file').value = 'No';
		$('#field_fl_2_nro_receipt').prop('disabled', true);
		$('#field_fl_2_file').prop('disabled', true);
		document.getElementById('field_fl_2_nro_receipt').value = '';
		document.getElementById('field_fl_2_file').value = '';
		// Añadir la clase al contenedor del archivo
		$('#id_fl_2_embed').addClass('d-none');
	}
};

function check_file_3() {
	if ($('#check_fl_3_load_file').is(':checked')) {
		document.getElementById('field_fl_3_load_file').value = 'Si';
		$('#field_fl_3_nro_receipt').prop('disabled', false);
		$('#field_fl_3_file').prop('disabled', false);
		// Añadir la clase al contenedor del archivo
		$('#id_fl_3_embed').removeClass('d-none');
	} else {
		document.getElementById('field_fl_3_load_file').value = 'No';
		$('#field_fl_3_nro_receipt').prop('disabled', true);
		$('#field_fl_3_file').prop('disabled', true);
		document.getElementById('field_fl_3_nro_receipt').value = '';
		document.getElementById('field_fl_3_file').value = '';
		// Añadir la clase al contenedor del archivo
		$('#id_fl_3_embed').addClass('d-none');
	}
};

function check_file_4() {
	if ($('#check_fl_4_load_file').is(':checked')) {
		document.getElementById('field_fl_4_load_file').value = 'Si';
		$('#field_fl_4_nro_receipt').prop('disabled', false);
		$('#field_fl_4_file').prop('disabled', false);
		// Añadir la clase al contenedor del archivo
		$('#id_fl_4_embed').removeClass('d-none');
	} else {
		document.getElementById('field_fl_4_load_file').value = 'No';
		$('#field_fl_4_nro_receipt').prop('disabled', true);
		$('#field_fl_4_file').prop('disabled', true);
		document.getElementById('field_fl_4_nro_receipt').value = '';
		document.getElementById('field_fl_4_file').value = '';
		// Añadir la clase al contenedor del archivo
		$('#id_fl_4_embed').addClass('d-none');
	}
};

function check_file_5() {
	if ($('#check_fl_5_load_file').is(':checked')) {
		document.getElementById('field_fl_5_load_file').value = 'Si';
		$('#field_fl_5_nro_receipt').prop('disabled', false);
		$('#field_fl_5_file').prop('disabled', false);
		// Añadir la clase al contenedor del archivo
		$('#id_fl_5_embed').removeClass('d-none');
	} else {
		document.getElementById('field_fl_5_load_file').value = 'No';
		$('#field_fl_5_nro_receipt').prop('disabled', true);
		$('#field_fl_5_file').prop('disabled', true);
		document.getElementById('field_fl_5_nro_receipt').value = '';
		document.getElementById('field_fl_5_file').value = '';
		// Añadir la clase al contenedor del archivo
		$('#id_fl_5_embed').addClass('d-none');
	}
};

function check_file_6() {
	if ($('#check_fl_6_load_file').is(':checked')) {
		document.getElementById('field_fl_6_load_file').value = 'Si';
		$('#field_fl_6_nro_receipt').prop('disabled', false);
		$('#field_fl_6_file').prop('disabled', false);
		// Añadir la clase al contenedor del archivo
		$('#id_fl_6_embed').removeClass('d-none');
	} else {
		document.getElementById('field_fl_6_load_file').value = 'No';
		$('#field_fl_6_nro_receipt').prop('disabled', true);
		$('#field_fl_6_file').prop('disabled', true);
		document.getElementById('field_fl_6_nro_receipt').value = '';
		document.getElementById('field_fl_6_file').value = '';
		// Añadir la clase al contenedor del archivo
		$('#id_fl_6_embed').addClass('d-none');
	}
};

function event_consolidated() {
	var groupby = document.getElementById('field_rp_tcd_group_by').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_report_tcd').removeClass('alert-danger');
	$('#form_ajax_report_tcd').removeClass('alert-success');
	$('#form_ajax_report_tcd').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_report_tcd').addClass('alert-warning');
	$("#form_ajax_report_tcd").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_report_tcd').removeClass('hide');
	$('#form_ajax_report_tcd').addClass('alert');
	//var ajaxclient = var_url + "dashboard/formatconsolidated/" + idtbl + "/";
	//$.ajax({ type: 'POST', url: ajaxclient, }).done(function(data) {
		var ajaxurl = var_url + var_controller + "consolidated/?field_gp=" + groupby;
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
			$('#form_ajax_report_tcd').removeClass('alert-danger');
			$('#form_ajax_report_tcd').removeClass('alert-success');
			$('#form_ajax_report_tcd').removeClass('alert-warning');
			$('#form_ajax_report_tcd').addClass('alert-success');
			$("#form_ajax_report_tcd").html(success_icon  + 'Exito: Reporte generado correctamente.');
			$('#form_ajax_report_tcd').removeClass('hide');
			setTimeout(function() {
				$('#form_ajax_report_tcd').removeClass('alert');
				$('#form_ajax_report_tcd').addClass('hide');
				$('#form_ajax_report_tcd').html('');
			}, 5000);
			var a = $("<a>").attr("href", argument).attr("download", 'Reporte Consolidado').appendTo("body");
			a[0].click(); a.remove();
			// Recargar la tabla con nueva informacion
			//if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
			//if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
			// Cerrar ventana modal en la interfaz
			//$('#modal-id-consolidated').modal('hide');
			// Desmarcar el checkbox de seleccionar todos
			//$('#field_ck_info').prop('checked', false);
		});
	//});
};

/*function modal_multifold() {
	// Añadir elementos sobre los elementos
	$('#div_mt_row_file').addClass('d-none');
	$('#id_mt_file_embed').addClass('d-none');
	// Añadir elementos sobre los elementos
	$('#div_mt_message').addClass('d-none');
	$('#div_mt_register').addClass('d-none');
	document.getElementById('field_mt_register').value = '1';
	// Añadir elementos sobre los elementos
	$('#div_mt_row_file').addClass('d-none');
	document.getElementById('field_mt_nro_receipt').value = '';
	document.getElementById('field_mt_file_system').value = '';
	// Añadir elementos sobre los elementos
	$('#div_md_row_file').addClass('d-none');
	document.getElementById('field_md_file_nro').value = '';
	document.getElementById('field_md_nro_receipt').value = '';
	document.getElementById('field_md_file_system').value = '';
	// Añadir elementos sobre los elementos
	document.getElementById('field_mt_count').value = '';
	// Deshabilitar bloqueo de botones y campos
	$('#field_mt_count').removeAttr('disabled','');
	$('#btn_quality').removeAttr('disabled','');
	// Añadir elementos sobre los elementos
	$('#div_md_row_approve').addClass('d-none');

	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_read');
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
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					setTimeout(function() {
						$('#form_ajax_multifold').removeClass('alert');
						$('#form_ajax_multifold').addClass('hide');
						$('#form_ajax_multifold').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-multifold').modal('show');
					// Validacion de mensajes o alertas
					var request_at_rt_yes = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
					var ajaxurl_at_rt_yes = var_url + 'api' + var_controller + "alertreceiptyes/";
					request_at_rt_yes.open("GET", ajaxurl_at_rt_yes, true);
					request_at_rt_yes.send();
					//$('#modal-id-detail').modal('show');
					request_at_rt_yes.onreadystatechange = function() {
						if (request_at_rt_yes.readyState == 4 && request_at_rt_yes.status == 200) {
							var objData_at_rt_yes = JSON.parse(request_at_rt_yes.responseText);
							if (objData_at_rt_yes.status) {
								var count_receipt = objData_at_rt_yes.data.lbl_count;
								if (count_receipt > 0) {
									$('#div_mt_message').removeClass('d-none');
									$('#div_mt_register').removeClass('d-none');
									document.getElementById('field_mt_register').value = '1';
								} else {
									$('#div_mt_message').addClass('d-none');
									$('#div_mt_register').addClass('d-none');
									document.getElementById('field_mt_register').value = '1';
									// Validacion de mensajes o alertas
									var request_at_rt_not = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
									var ajaxurl_at_rt_not = var_url + 'api' + var_controller + "alertreceiptnot/";
									request_at_rt_not.open("GET", ajaxurl_at_rt_not, true);
									request_at_rt_not.send();
									//$('#modal-id-detail').modal('show');
									request_at_rt_not.onreadystatechange = function() {
										if (request_at_rt_not.readyState == 4 && request_at_rt_not.status == 200) {
											var objData_at_rt_not = JSON.parse(request_at_rt_not.responseText);
											if (objData_at_rt_not.status) {
												var count_receipt = objData_at_rt_not.data.lbl_count;
												if (count_receipt > 0) {
													$('#div_mt_row_file').removeClass('d-none');
													//$('#div_mt_nro_receipt').removeClass('d-none');
													//$('#div_mt_file_system').removeClass('d-none');
													document.getElementById('field_mt_nro_receipt').value = '';
													document.getElementById('field_mt_file_system').value = '';
												} else {
													$('#div_mt_row_file').addClass('d-none');
													//$('#div_mt_nro_receipt').addClass('d-none');
													//$('#div_mt_file_system').addClass('d-none');
													document.getElementById('field_mt_nro_receipt').value = '';
													document.getElementById('field_mt_file_system').value = '';
												}
											} else {
												initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
												bootbox.alert({
													size: "small",
													title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
													message: "<span><strong>Error:</strong> Problema detectado en el sistema, por favor comuniquese con el administrador.</span>",
													centerVertical: true,
													className: "modal-alert",
													closeButton: false,
												});
											}
										}
									}
								}
							} else {
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									size: "small",
									title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
									message: "<span><strong>Error:</strong> Problema detectado en el sistema, por favor comuniquese con el administrador.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							}
						}
					}
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_multifold').html(error_icon + obj.message);
					$("#form_ajax_multifold").removeClass('alert-warning');
					$("#form_ajax_multifold").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_multifold').addClass('alert-danger');
				$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_multifold').removeClass('hide');
			}
		});
	}
};*/

function event_receipt_not() {
	var vdata = document.getElementById('field_mt_register').value;
	if (vdata == '2') {
		// Añadir la clase al contenedor del archivo
		$('#div_mt_row_file').removeClass('d-none');
		//$('#field_mt_file_embed').removeClass('d-none');
		document.getElementById('field_mt_nro_receipt').value = '';
		document.getElementById('field_mt_file_system').value = '';
	} else {
		// Añadir la clase al contenedor del archivo
		$('#div_mt_row_file').addClass('d-none');
		//$('#field_mt_file_embed').addClass('d-none');
		document.getElementById('field_mt_nro_receipt').value = '';
		document.getElementById('field_mt_file_system').value = '';
	}
}

function modal_unique(event) {
	$('#id_mt_file_embed').removeClass('d-none');
	// Añadir la clase al contenedor del archivo
	//$('#field_mt_file_embed').removeClass('d-none');
	var load = $("#field_mt_file_system")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_mt_file_system');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) { $('#id_mt_file_embed').addClass('d-none'); } else {
		if (!extensions.exec(path)) {
			// Acciones para las clases html
			event_class_alerts('acquittance');
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_acquittance').removeClass('hide');
			$('#form_ajax_acquittance').addClass('alert');
			$('#form_ajax_acquittance').addClass('alert-danger');
			$("#form_ajax_acquittance").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_mt_file_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_acquittance').removeClass('alert');
				$('#form_ajax_acquittance').addClass('hide');
				$('#form_ajax_acquittance').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_mt_file_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				//$('#id_mt_file_embed').removeClass('d-none');
				// Leer el archivo de forma local
				//myfile.readAsDataURL(event.target.files[0]);

				//document.querySelector('#field_mt_file_system').addEventListener('change', () => {
					let pdffFile = document.querySelector('#field_mt_file_system').files[0];
					let pdffURL = URL.createObjectURL(pdffFile);
					document.querySelector('#field_mt_file_embed').setAttribute('src', pdffURL);
					console.log(pdffURL);
				//});
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_mt_file_embed').addClass('d-none');
			}
		}
	}

	/*$('#id_mt_file_embed').removeClass('d-none');

	document.querySelector('#field_mt_file_system').addEventListener('change', () => {
		let pdffFile = document.querySelector('#field_mt_file_system').files[0];
		let pdffURL = URL.createObjectURL(pdffFile);
		document.querySelector('#field_mt_file_embed').setAttribute('src', pdffURL);
		console.log(pdffURL);
	});*/
};

function modal_various(event) {
	var load = $("#field_md_file_system")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_md_file_system');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) {
		// Añadir la clase al contenedor del archivo
		$('#id_md_file_embed').addClass('d-none');
	} else {
		if (!extensions.exec(path)) {
			// Acciones para las clases html
			event_class_alerts('multifold');
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_multifold').removeClass('hide');
			$('#form_ajax_multifold').addClass('alert');
			$('#form_ajax_multifold').addClass('alert-danger');
			$("#form_ajax_multifold").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
			// Añadir la clase al contenedor del archivo
			$('#id_md_file_embed').addClass('d-none');
			input.value = '';
		} else {
			// Añadir y remover las clases incorporadas de las hojas de estilo
			setTimeout(function() {
				$('#form_ajax_multifold').removeClass('alert');
				$('#form_ajax_multifold').addClass('hide');
				$('#form_ajax_multifold').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById("field_md_file_embed");
			// Preguntar si el archivo ha sido cargado
			myfile.onload = () => {
				// Validar el estado del archivo
				if (myfile.readyState == 2) {
					// Asignar el archivo en el atributo
					embed.src = myfile.result;
				}
			}
			// Validar si el archivo esta cargado
			if (event.target.files[0]) {
				// Remover la clase al contenedor del archivo
				$('#id_md_file_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_md_file_embed').addClass('d-none');
			}
		}
	}
};

function event_multifold_unique() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Acciones para las clases html
	event_class_alerts('multifold');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_multifold').removeClass('hide');
	$('#form_ajax_multifold').addClass('alert');
	$('#form_ajax_multifold').addClass('alert-warning');
	$("#form_ajax_multifold").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
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
						$('#form_ajax_multifold').removeClass('alert');
						$('#form_ajax_multifold').addClass('hide');
						$('#form_ajax_multifold').html('');
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
					var load = $("#field_mt_file_system")[0].files.length;
					var input = document.getElementById('field_mt_file_system');
					var path = input.value;
					var extensions = /(.pdf)$/i;
					if (!extensions.exec(path)) {
						// Acciones para las clases html
						event_class_alerts('multifold');
						// Mensaje a mostrar una vez terminada la accion
						$('#form_ajax_multifold').removeClass('hide');
						$('#form_ajax_multifold').addClass('alert');
						$('#form_ajax_multifold').addClass('alert-danger');
						$("#form_ajax_multifold").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
						document.getElementById('field_mt_file_system').value = '';
						// Añadir la clase al contenedor del archivo
						$('#id_mt_file_embed').addClass('d-none');
						input.value = '';
					} else {
						$.ajax({
							type: "POST",
							url: "api/azp_gsc_consignment/multifold_unique",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_multifold')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Acciones para las clases html
									event_class_alerts('multifold');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_multifold').removeClass('hide');
									$('#form_ajax_multifold').addClass('alert');
									$('#form_ajax_multifold').addClass('alert-success');
									$('#form_ajax_multifold').html(success_icon + obj.message);
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_multifold').reset();
									// Mensaje a mostrar una vez terminada la accion
									setTimeout(function() {
										$('#form_ajax_multifold').removeClass('alert');
										$('#form_ajax_multifold').addClass('hide');
										$('#form_ajax_multifold').html('');
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
									// Añadir elementos sobre los elementos
									$('#div_mt_row_file').addClass('d-none');
									$('#id_mt_file_embed').addClass('d-none');
									// Añadir la clase al contenedor del archivo
									//$('#field_mt_file_embed').addClass('d-none');
								} else {
									// Acciones para las clases html
									event_class_alerts('multifold');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_multifold').removeClass('hide');
									$('#form_ajax_multifold').addClass('alert');
									$('#form_ajax_multifold').addClass('alert-danger');
									$("#form_ajax_multifold").html(error_icon  + obj.message);
								}
							},
							error: function() {
								// Acciones para las clases html
								event_class_alerts('multifold');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_multifold').removeClass('hide');
								$('#form_ajax_multifold').addClass('alert');
								$('#form_ajax_multifold').addClass('alert-danger');
								$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
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

function event_multifold_various() {
	var vcount = document.getElementById('field_mt_count').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Acciones para las clases html
	event_class_alerts('multifold');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_multifold').removeClass('hide');
	$('#form_ajax_multifold').addClass('alert');
	$('#form_ajax_multifold').addClass('alert-warning');
	$("#form_ajax_multifold").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
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
						$('#form_ajax_multifold').removeClass('alert');
						$('#form_ajax_multifold').addClass('hide');
						$('#form_ajax_multifold').html('');
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
					var load = $("#field_md_file_system")[0].files.length;
					var input = document.getElementById('field_md_file_system');
					var path = input.value;
					var extensions = /(.pdf)$/i;
					if (!extensions.exec(path)) {
						// Acciones para las clases html
						event_class_alerts('multifold');
						// Mensaje a mostrar una vez terminada la accion
						$('#form_ajax_multifold').removeClass('hide');
						$('#form_ajax_multifold').addClass('alert');
						$('#form_ajax_multifold').addClass('alert-danger');
						$("#form_ajax_multifold").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
						document.getElementById('field_md_file_system').value = '';
						// Añadir la clase al contenedor del archivo
						$('#id_md_file_embed').addClass('d-none');
						input.value = '';
					} else {
						$.ajax({
							type: "POST",
							url: "api/azp_gsc_consignment/multifold_various",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_multifold')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Acciones para las clases html
									event_class_alerts('multifold');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_multifold').removeClass('hide');
									$('#form_ajax_multifold').addClass('alert');
									$('#form_ajax_multifold').addClass('alert-success');
									$('#form_ajax_multifold').html(success_icon + obj.message);
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_multifold').reset();
									// Mensaje a mostrar una vez terminada la accion
									setTimeout(function() {
										$('#form_ajax_multifold').removeClass('alert');
										$('#form_ajax_multifold').addClass('hide');
										$('#form_ajax_multifold').html('');
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
									// Añadir elementos sobre los elementos
									$('#div_md_row_file').addClass('d-none');
									$('#id_md_file_embed').addClass('d-none');
									// Añadir la clase al contenedor del archivo
									$('#field_md_file_embed').addClass('d-none');

									// Validacion de mensajes o alertas
									var request_at_register = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
									var ajaxurl_at_register = var_url + 'api' + var_controller + "alertregister/";
									request_at_register.open("GET", ajaxurl_at_register, true);
									request_at_register.send();
									//$('#modal-id-detail').modal('show');
									request_at_register.onreadystatechange = function() {
										if (request_at_register.readyState == 4 && request_at_register.status == 200) {
											var objData_at_register = JSON.parse(request_at_register.responseText);
											if (objData_at_register.status) {
												var vmin = objData_at_register.data.lbl_min;
												if (vmin > 0) {
													document.getElementById('field_md_file_nro').value = vmin;
													$.ajax({
														type: "POST",
														url: "api/azp_gsc_consignment/duplicate",
														datatype: "HTML",
														data: new FormData(document.getElementById('form_multifold')),
														cache: false,
														contentType: false,
														processData: false,
														success: function(json) {
															var obj = jQuery.parseJSON(json);
															if (obj.success == 1) {
																// Añadir la clase al contenedor del archivo
																$('#div_md_row_file').removeClass('d-none');
																$('#field_md_file_embed').removeClass('d-none');
																document.getElementById('field_md_nro_receipt').value = '';
																document.getElementById('field_md_file_system').value = '';
																$('#div_md_row_approve').removeClass('d-none');

																document.getElementById('field_mt_count').value = vcount;
															} else {
																// Acciones para las clases html
																event_class_alerts('multifold');
																// Mensaje a mostrar una vez terminada la accion
																$('#form_ajax_multifold').removeClass('hide');
																$('#form_ajax_multifold').addClass('alert');
																$('#form_ajax_multifold').addClass('alert-danger');
																$("#form_ajax_multifold").html(error_icon  + obj.message);
															}
														},
														error: function() {
															// Acciones para las clases html
															event_class_alerts('multifold');
															// Mensaje a mostrar una vez terminada la accion
															$('#form_ajax_multifold').removeClass('hide');
															$('#form_ajax_multifold').addClass('alert');
															$('#form_ajax_multifold').addClass('alert-danger');
															$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
														},
													});
													
												} else {
													document.getElementById('field_md_file_nro').value = '0';
												}
											} else {
												initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
												bootbox.alert({
													size: "small",
													title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
													message: "<span><strong>Error:</strong> Problema detectado en el sistema, por favor comuniquese con el administrador.</span>",
													centerVertical: true,
													className: "modal-alert",
													closeButton: false,
												});
											}
										}
									}
									// Recargar la tabla con nueva informacion
									if ($("#dt_aprprove").length) { $('#dt_aprprove').DataTable().ajax.reload(); }
								} else {
									// Acciones para las clases html
									event_class_alerts('multifold');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_multifold').removeClass('hide');
									$('#form_ajax_multifold').addClass('alert');
									$('#form_ajax_multifold').addClass('alert-danger');
									$("#form_ajax_multifold").html(error_icon  + obj.message);
								}
							},
							error: function() {
								// Acciones para las clases html
								event_class_alerts('multifold');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_multifold').removeClass('hide');
								$('#form_ajax_multifold').addClass('alert');
								$('#form_ajax_multifold').addClass('alert-danger');
								$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
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

function event_qualify() {
	// Añadir la clase al contenedor del archivo
	var vcount = document.getElementById('field_mt_count').value;
	$('#div_md_row_file').addClass('d-none');
	$('#field_md_file_embed').addClass('d-none');
	document.getElementById('field_md_file_nro').value = '';
	document.getElementById('field_md_nro_receipt').value = '';
	document.getElementById('field_md_file_system').value = '';
	$('#div_md_row_approve').addClass('d-none');
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Acciones para las clases html
	event_class_alerts('multifold');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_multifold').removeClass('hide');
	$('#form_ajax_multifold').addClass('alert');
	$('#form_ajax_multifold').addClass('alert-warning');
	$("#form_ajax_multifold").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
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
						$('#form_ajax_multifold').removeClass('alert');
						$('#form_ajax_multifold').addClass('hide');
						$('#form_ajax_multifold').html('');
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
						type: "POST",
						url: "api/azp_gsc_consignment/multifold_doble",
						datatype: "HTML",
						data: new FormData(document.getElementById('form_multifold')),
						cache: false,
						contentType: false,
						processData: false,
						success: function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								$.ajax({
									type: "POST",
									url: "api/azp_gsc_consignment/duplicate",
									datatype: "HTML",
									data: new FormData(document.getElementById('form_multifold')),
									cache: false,
									contentType: false,
									processData: false,
									success: function(json) {
										var obj = jQuery.parseJSON(json);
										if (obj.success == 1) {
											// Validacion de mensajes o alertas
											var request_at_register = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
											var ajaxurl_at_register = var_url + 'api' + var_controller + "alertregister/";
											request_at_register.open("GET", ajaxurl_at_register, true);
											request_at_register.send();
											//$('#modal-id-detail').modal('show');
											request_at_register.onreadystatechange = function() {
												if (request_at_register.readyState == 4 && request_at_register.status == 200) {
													var objData_at_register = JSON.parse(request_at_register.responseText);
													if (objData_at_register.status) {
														var vmin = objData_at_register.data.lbl_min;
														if (vmin > 0) {
															document.getElementById('field_md_file_nro').value = vmin;
															// Habilitar bloqueo de campos y botones
															$('#field_mt_count').attr('disabled','');
															$('#btn_quality').attr('disabled','');
															// Acciones para las clases html
															event_class_alerts('multifold');
															// Mensaje a mostrar una vez terminada la accion
															$('#form_ajax_multifold').removeClass('hide');
															$('#form_ajax_multifold').addClass('alert');
															$('#form_ajax_multifold').addClass('alert-success');
															$('#form_ajax_multifold').html(success_icon + obj.message);
															// Mensaje a mostrar una vez terminada la accion
															setTimeout(function() {
																$('#form_ajax_multifold').removeClass('alert');
																$('#form_ajax_multifold').addClass('hide');
																$('#form_ajax_multifold').html('');
															}, 0);
															// Añadir la clase al contenedor del archivo
															$('#div_md_row_file').removeClass('d-none');
															$('#field_md_file_embed').removeClass('d-none');
															document.getElementById('field_md_nro_receipt').value = '';
															document.getElementById('field_md_file_system').value = '';
															document.getElementById('field_mt_count').value = vcount;
															$('#div_md_row_approve').removeClass('d-none');
														} else {
															document.getElementById('field_md_file_nro').value = '0';
														}
													} else {
														initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
														bootbox.alert({
															size: "small",
															title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
															message: "<span><strong>Error:</strong> Problema detectado en el sistema, por favor comuniquese con el administrador.</span>",
															centerVertical: true,
															className: "modal-alert",
															closeButton: false,
														});
													}
												}
											}
										} else {
											// Acciones para las clases html
											event_class_alerts('multifold');
											// Mensaje a mostrar una vez terminada la accion
											$('#form_ajax_multifold').removeClass('hide');
											$('#form_ajax_multifold').addClass('alert');
											$('#form_ajax_multifold').addClass('alert-danger');
											$("#form_ajax_multifold").html(error_icon  + obj.message);
										}
									},
									error: function() {
										// Acciones para las clases html
										event_class_alerts('multifold');
										// Mensaje a mostrar una vez terminada la accion
										$('#form_ajax_multifold').removeClass('hide');
										$('#form_ajax_multifold').addClass('alert');
										$('#form_ajax_multifold').addClass('alert-danger');
										$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
									},
								});
								// Column Definitions
								var columnSet = [
									{
										title: "Id",
										id: "lbl_azp_gsc_consignment_id_azp_gsc_consignment",
										data: "lbl_azp_gsc_consignment_id_azp_gsc_consignment",
										type: "readonly",
										visible: true,
									},
									{
										title: "Archivo Nro",
										id: "lbl_azp_gsc_consignment_t_register",
										data: "lbl_azp_gsc_consignment_t_register",
										type: "readonly",
										visible: true,
									},
									{
										title: "Nro Recibo",
										id: "lbl_azp_gsc_consignment_t_nro_receipt",
										data: "lbl_azp_gsc_consignment_t_nro_receipt",
										type: "readonly",
										visible: true,
									},
									{
										title: "Documento",
										id: "lbl_azp_gsc_consignment_s_file_document",
										data: "lbl_azp_gsc_consignment_s_file_document",
										type: "readonly",
										visible: true,
									},
								];
								// Inicializar tabla de datos
								var myTable = $('#dt_aprprove').dataTable({
									// Reinicialiar los datos de la tabla
									destroy: true,
									// Estructura de las columnas para el DOOM
									dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
										//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
										//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
										+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
										+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
									ajax: var_url + 'api' + var_controller + "approve/",
									columns: columnSet,
									// Mostrar botones encima del buscador
									//dom: 'Bfrtip',
									// Mostrar selector de la cantidad de registros
									//dom: 'lBfrtip',
									// Cambiar numero de registros por pagina
									//lengthChange: true,
									// Definir cantidad de registros por paginacion
									//lengthMenu: [10, 20, 30, 40, 50],
									// Control para el tamaño de la tabla de datos
									responsive: false,
									// Control para el desplazamiento medido de arriba abajo
									//scrollY: 250,
									// Control para el desplazamiento medido de arriba abajo
									scrollCollapse: false,
									// Control para el desplazamiento de derecha a izquiera
									scrollX: false,
									// Selccionar varias filas de registro
									select: false,
									// Opciones para crear, editar, borrar y sincronizar
									altEditor: false,
									// Control de busqueda de registros
									searching: false,
									// Ordenar segun columna los registros
									ordering: false,
									// Paginar registros limitadamente
									paging: true,
									// Fijar columnas en la parte superior de la tabla
									fixedHeader: false,
									// Movilizar columnas en la tabla
									colReorder: false,
									// Mostrar entradas de los registros
									info: false,
									// Procesando informacion de registros
									processing: false,
									// Agrupar las filas de los registros
									rowGroup: false,
									// Focalizar una celda de la tabla
									keys: false,
									// Fijar columnas en la tabla
									fixedColumns: false,
									// Combinar valores en las demas celdas
									autoFill: false,
									// Botones que usan clases de bootstrap
									buttons: [
										{
											text: '<i class="far fa-sync"></i> Sincronizar',
											titleAttr: 'Sincronizar',
											name: 'refresh',
											className: 'btn-sm btn-outline-primary',
											attr: {
												'id': 'table_btn_sync',
												'name': 'table_btn_sync',
											},
										},
										{
											text: '<i class="far fa-plus"></i> Aprobar',
											titleAttr: 'Aprobar',
											className: 'btn-sm btn-outline-success',
											attr: { 'onclick': 'modal_approve();', },
										},
									],
									// Establecer propiedades de inicialización de definición de columna.
									columnDefs: [
										{
											targets: 0,
											'render': function (data, type, full, meta) {
												return '<input type="checkbox"' +
													'name="field_ma_id[]"' +
													'id="field_ma_id[]"' +
													'class="multifold_table"' +
													'checked=""' +
													'value="' + data + '">';
											},
										},
									],
								});
							} else {
								// Acciones para las clases html
								event_class_alerts('multifold');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_multifold').removeClass('hide');
								$('#form_ajax_multifold').addClass('alert');
								$('#form_ajax_multifold').addClass('alert-danger');
								$("#form_ajax_multifold").html(error_icon  + obj.message);
							}
						},
						error: function() {
							// Acciones para las clases html
							event_class_alerts('multifold');
							// Mensaje a mostrar una vez terminada la accion
							$('#form_ajax_multifold').removeClass('hide');
							$('#form_ajax_multifold').addClass('alert');
							$('#form_ajax_multifold').addClass('alert-danger');
							$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_registers() {
	$('#modal-id-register').modal('show');
	// Column Definitions
	var columnSet = [
		{
			title: "Entidad",
			id: "lbl_azp_gsc_client_t_name",
			data: "lbl_azp_gsc_client_t_name",
			type: "readonly",
			visible: true,
		},
		{
			title: "Solicitud",
			id: "lbl_azp_gsc_update_t_number_request",
			data: "lbl_azp_gsc_update_t_number_request",
			type: "readonly",
			visible: true,
		},
		{
			title: "Cedula",
			id: "lbl_azp_gsc_update_t_identification",
			data: "lbl_azp_gsc_update_t_identification",
			type: "readonly",
			visible: true,
		},
		{
			title: "Nombre",
			id: "lbl_azp_gsc_update_t_full_name",
			data: "lbl_azp_gsc_update_t_full_name",
			type: "readonly",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_file').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		ajax: var_url + 'api' + var_controller + "file/",
		columns: columnSet,
		// Mostrar botones encima del buscador
		//dom: 'Bfrtip',
		// Mostrar selector de la cantidad de registros
		//dom: 'lBfrtip',
		// Cambiar numero de registros por pagina
		//lengthChange: true,
		// Definir cantidad de registros por paginacion
		//lengthMenu: [10, 20, 30, 40, 50],
		// Control para el tamaño de la tabla de datos
		responsive: false,
		// Control para el desplazamiento medido de arriba abajo
		//scrollY: 250,
		// Control para el desplazamiento medido de arriba abajo
		scrollCollapse: false,
		// Control para el desplazamiento de derecha a izquiera
		scrollX: false,
		// Selccionar varias filas de registro
		select: false,
		// Opciones para crear, editar, borrar y sincronizar
		altEditor: false,
		// Control de busqueda de registros
		searching: false,
		// Ordenar segun columna los registros
		ordering: false,
		// Paginar registros limitadamente
		paging: true,
		// Fijar columnas en la parte superior de la tabla
		fixedHeader: false,
		// Movilizar columnas en la tabla
		colReorder: false,
		// Mostrar entradas de los registros
		info: false,
		// Procesando informacion de registros
		processing: false,
		// Agrupar las filas de los registros
		rowGroup: false,
		// Focalizar una celda de la tabla
		keys: false,
		// Fijar columnas en la tabla
		fixedColumns: false,
		// Combinar valores en las demas celdas
		autoFill: false,
		// Botones que usan clases de bootstrap
		buttons: [],
	});
};

function modal_approve() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Acciones para las clases html
	event_class_alerts('multifold');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_multifold').removeClass('hide');
	$('#form_ajax_multifold').addClass('alert');
	$('#form_ajax_multifold').addClass('alert-warning');
	$("#form_ajax_multifold").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.multifold_table');
	// Array para cargar los valores obtenidos
	var value_checked = new Array();
	// Recorrer la variable con foreach
	value_table.forEach((e) => { if (e.checked == true) { value_checked.push(e.value); } });
	// Validacion para confirmar si estan chequeados o no
	if (value_checked == '') {
		// Mensaje a mostrar una vez terminada la accion
		setTimeout(function() {
			$('#form_ajax_multifold').removeClass('alert');
			$('#form_ajax_multifold').addClass('hide');
			$('#form_ajax_multifold').html('');
		}, 0);
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
		// Codigo ajax
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/approve",
			data : $('#form_multifold').serialize() + '&field_mt_chk=' + value_checked,
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					// Recargar la tabla con nueva informacion
					if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_multifold').html(success_icon + obj.message);
					$("#form_ajax_multifold").removeClass('alert-warning');
					$("#form_ajax_multifold").addClass('alert-success');
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_multifold').removeClass('alert');
						$('#form_ajax_multifold').addClass('hide');
						$('#form_ajax_multifold').html('');
					}, 5000);
					// Configuracion de la ventana modal
					$('#modal-id-multifold').modal('hide');
					// Mensaje de audio para mostrar en la pagina web
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
						message: "<span><strong>Exito:</strong> Haz aprobado exitosamente los archivos.</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
				} else {
					// Acciones para las clases html
					event_class_alerts('multifold');
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_multifold').removeClass('hide');
					$('#form_ajax_multifold').addClass('alert');
					$('#form_ajax_multifold').addClass('alert-danger');
					$("#form_ajax_multifold").html(error_icon  + obj.message);
				}
			},
			error : function() {
				// Acciones para las clases html
				event_class_alerts('multifold');
				// Mensaje a mostrar una vez terminada la accion
				$('#form_ajax_multifold').removeClass('hide');
				$('#form_ajax_multifold').addClass('alert');
				$('#form_ajax_multifold').addClass('alert-danger');
				$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			},
		});
	}
};

function event_item() {
	if ($('#check_mt_item').is(':checked')) {
		document.getElementById('field_mt_check').value = 'Si';
	} else {
		document.getElementById('field_mt_check').value = 'No';
	}
};

function modal_compensation() {
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_read');
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
		$.ajax({
			type : "POST",
			url : "api/azp_gsc_consignment/receipt",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					setTimeout(function() {
						$('#form_ajax_multifold').removeClass('alert');
						$('#form_ajax_multifold').addClass('hide');
						$('#form_ajax_multifold').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-compensation').modal('show');
					event_data_compensation();
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_multifold').html(error_icon + obj.message);
					$("#form_ajax_multifold").removeClass('alert-warning');
					$("#form_ajax_multifold").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_multifold').addClass('alert-danger');
				$("#form_ajax_multifold").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_multifold').removeClass('hide');
			}
		});
	}			
};

function event_file_rg() {
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_comp');
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
		var checked = $(".dt_table_comp:checked").length;
		if (checked > 1) {
			initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
			bootbox.alert({
				size: "small",
				title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
				message: "<span><strong>Lo sentimos:</strong> No se puede chequear más de una vez.</span>",
				centerVertical: true,
				className: "modal-alert",
				closeButton: false,
			});
		} else {
			$('#modal-id-acquittance').modal('show');
			document.getElementById('field_id_acquittance').value = value_checked;
		}
	}
};

function event_acquittance() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Acciones para las clases html
	event_class_alerts('acquittance');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_acquittance').removeClass('hide');
	$('#form_ajax_acquittance').addClass('alert');
	$('#form_ajax_acquittance').addClass('alert-warning');
	$("#form_ajax_acquittance").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
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
						$('#form_ajax_acquittance').removeClass('alert');
						$('#form_ajax_acquittance').addClass('hide');
						$('#form_ajax_acquittance').html('');
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
					var load = $("#field_mt_file_system")[0].files.length;
					var input = document.getElementById('field_mt_file_system');
					var path = input.value;
					var extensions = /(.pdf)$/i;
					if (!extensions.exec(path)) {
						// Acciones para las clases html
						event_class_alerts('acquittance');
						// Mensaje a mostrar una vez terminada la accion
						$('#form_ajax_acquittance').removeClass('hide');
						$('#form_ajax_acquittance').addClass('alert');
						$('#form_ajax_acquittance').addClass('alert-danger');
						$("#form_ajax_acquittance").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
						document.getElementById('field_mt_file_system').value = '';
						// Añadir la clase al contenedor del archivo
						$('#id_mt_file_embed').addClass('d-none');
						input.value = '';
					} else {
						$.ajax({
							type: "POST",
							url: "api/azp_gsc_consignment/acquittance",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_acquittance')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_compensation").length) { $('#dt_compensation').DataTable().ajax.reload(); }
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Acciones para las clases html
									event_class_alerts('acquittance');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_acquittance').removeClass('hide');
									$('#form_ajax_acquittance').addClass('alert');
									$('#form_ajax_acquittance').addClass('alert-success');
									$('#form_ajax_acquittance').html(success_icon + obj.message);
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_acquittance').reset();
									//document.getElementById('field_mt_nro_receipt').value = '';
									// Mensaje a mostrar una vez terminada la accion
									setTimeout(function() {
										$('#form_ajax_acquittance').removeClass('alert');
										$('#form_ajax_acquittance').addClass('hide');
										$('#form_ajax_acquittance').html('');
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
									$('#modal-id-acquittance').modal('hide');
									$('#id_mt_file_embed').addClass('d-none');
									// Añadir la clase al contenedor del archivo
									//$('#field_mt_file_embed').addClass('d-none');
								} else {
									// Acciones para las clases html
									event_class_alerts('acquittance');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_acquittance').removeClass('hide');
									$('#form_ajax_acquittance').addClass('alert');
									$('#form_ajax_acquittance').addClass('alert-danger');
									$("#form_ajax_acquittance").html(error_icon  + obj.message);
								}
							},
							error: function() {
								// Acciones para las clases html
								event_class_alerts('acquittance');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_acquittance').removeClass('hide');
								$('#form_ajax_acquittance').addClass('alert');
								$('#form_ajax_acquittance').addClass('alert-danger');
								$("#form_ajax_acquittance").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
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

function event_individual() {
	$('#dt_consignment tr').each(function () {
		let vinformation = $(this).find('td').eq(0).text();
		let vindividual = $(this).find('#field_tb_value_check').val();

		if (vindividual == 'Si') {
			$(this).closest('tr').find('td input.field_tb_value_unique').prop('readOnly', false);
			//$(this).closest('tr').find('td input.field_tb_value_unique').value = '0';
		} else {
			$(this).closest('tr').find('td input.field_tb_value_unique').prop('readOnly', true);
			$(this).closest('tr').find('td input.field_tb_value_unique').val('0');
			//$(this).closest('tr').find('td input.field_tb_value_unique').value = '0';
		}
	});
};

function event_dispatch() {
	//$('#modal-id-dispatch').modal('hide');
	$('#modal-id-consignment').modal('show');
	$('#div_multiple').removeClass('d-none');

	$("#tab_consignment a:first").tab('show');
	$('#form_btn_multiple').removeClass('d-none');
	$('#form_btn_notary').addClass('d-none');

	$('#dt_consignment tr').each(function () {
		let vinformation = $(this).find('td').eq(0).text();
		let vindividual = $(this).find('#field_tb_value_check').val();

		if (vinformation == 'Adicional') {
			$(this).closest('tr').find('td input.cs_tb_notary_consigned').prop('readOnly', true);
			$(this).closest('tr').find('td input.cs_tb_notary_identification').prop('readOnly', true);
			$(this).closest('tr').find('td input.cs_tb_notary_receipt').prop('readOnly', true);
		}

		if (vindividual == 'Si') {
			$(this).closest('tr').find('td input.field_tb_value_unique').prop('readOnly', false);
			//$(this).closest('tr').find('td input.field_tb_value_unique').value = '0';
		} else {
			$(this).closest('tr').find('td input.field_tb_value_unique').prop('readOnly', true);
			//$(this).closest('tr').find('td input.field_tb_value_unique').value = '0';
		}
	});
};

function event_notaries() {
	//$('#modal-id-dispatch').modal('hide');
	$('#modal-id-notary').modal('show');
};

function event_notary() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_notary').DataTable();
	vtable.column(0).visible(true);
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').removeClass('alert-danger');
	$('#form_ajax_consignment').removeClass('alert-success');
	$('#form_ajax_consignment').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_consignment').addClass('alert-warning');
	$("#form_ajax_consignment").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_consignment').removeClass('hide');
	$('#form_ajax_consignment').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-multiple').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.td_consignment');
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
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_notary').DataTable();
		vtable.column(0).visible(false);
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
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_notary').DataTable();
						vtable.column(0).visible(false);
						// Añadir y remover las clases incorporadas de las hojas de estilo
						setTimeout(function() {
							$('#form_ajax_consignment').removeClass('alert');
							$('#form_ajax_consignment').addClass('hide');
							$('#form_ajax_consignment').html('');
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
							url : "api/azp_gsc_consignment/notary",
							data : $('#form_consignment').serialize() + '&field_tb_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Mostrar la columna especificada de la tabla
									var vtable = $('#dt_notary').DataTable();
									vtable.column(0).visible(false);
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_consignment').html(success_icon + obj.message);
									$("#form_ajax_consignment").removeClass('alert-warning');
									$("#form_ajax_consignment").addClass('alert-success');
									// Configuracion de la ventana modal
									$('#modal-id-consignment').modal('hide');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_consignment').removeClass('alert');
										$('#form_ajax_consignment').addClass('hide');
										$('#form_ajax_consignment').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_checkbox_all_read').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz alamcenado exitosamente los datos.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_consignment').html(error_icon + obj.message);
									$("#form_ajax_consignment").removeClass('alert-warning');
									$("#form_ajax_consignment").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_consignment').addClass('alert-danger');
								$("#form_ajax_consignment").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_consignment').removeClass('hide');
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

function event_csn_one() {
	$('#form_btn_multiple').removeClass('d-none');
	$('#form_btn_notary').addClass('d-none');
};

function event_csn_two() {
	$('#form_btn_multiple').addClass('d-none');
	$('#form_btn_notary').removeClass('d-none');
};