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

if (document.getElementById('form_btn_email_1')) {
	document.getElementById('form_btn_email_1').onclick = function(e) {
		e.preventDefault();
		event_email_1();
	};
}

if (document.getElementById('form_email_1')) {
	document.getElementById('form_email_1').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_email_1();
			return false;
		}
	};
}

if (document.getElementById('form_btn_email_2')) {
	document.getElementById('form_btn_email_2').onclick = function(e) {
		e.preventDefault();
		event_email_2();
	};
}

if (document.getElementById('form_email_2')) {
	document.getElementById('form_email_2').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_email_2();
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

if (document.getElementById('form_btn_observation_internal')) {
	document.getElementById('form_btn_observation_internal').onclick = function(e) {
		e.preventDefault();
		event_observation_internal();
	};
}

if (document.getElementById('form_observation_internal')) {
	document.getElementById('form_observation_internal').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_observation_internal();
			return false;
		}
	};
}

if (document.getElementById('form_btn_receipt')) {
	document.getElementById('form_btn_receipt').onclick = function(e) {
		e.preventDefault();
		event_receipt();
	};
}

if (document.getElementById('form_receipt')) {
	document.getElementById('form_receipt').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_receipt();
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

if (document.getElementById('form_btn_state')) {
	document.getElementById('form_btn_state').onclick = function(e) {
		e.preventDefault();
		event_state();
	};
}

if (document.getElementById('form_state')) {
	document.getElementById('form_state').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_state();
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

if (document.getElementById('form_btn_client_remove')) {
	document.getElementById('form_btn_client_remove').onclick = function(e) {
		e.preventDefault();
		event_client_remove();
	};
}

if (document.getElementById('form_client_remove')) {
	document.getElementById('form_client_remove').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_client_remove();
			return false;
		}
	};
}

if (document.getElementById('form_btn_client_upload')) {
	document.getElementById('form_btn_client_upload').onclick = function(e) {
		e.preventDefault();
		event_client_upload();
	};
}

if (document.getElementById('form_client_upload')) {
	document.getElementById('form_client_upload').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_client_upload();
			return false;
		}
	};
}

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

function action_checkbox_client() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_checkbox_client').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_client').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_client').prop('checked', false);
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
				id: "lbl_azs_crt_request_data_id_azs_crt_request_data",
				data: "lbl_azs_crt_request_data_id_azs_crt_request_data",
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
				id: "lbl_azs_crt_request_data_m_date_created",
				data: "lbl_azs_crt_request_data_m_date_created",
				type: "text",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azs_crt_request_data_m_date_modified",
				data: "lbl_azs_crt_request_data_m_date_modified",
				type: "text",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azs_crt_request_data_m_description",
				data: "lbl_azs_crt_request_data_m_description",
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
				visible: true,
			},
			/*{
				title: "No Solicitud",
				id: "lbl_azs_crt_request_data_t_request_nro",
				data: "lbl_azs_crt_request_data_t_request_nro",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "No Cedula",
				id: "lbl_azs_crt_request_data_t_identification",
				data: "lbl_azs_crt_request_data_t_identification",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre",
				id: "lbl_azs_crt_request_data_t_full_name",
				data: "lbl_azs_crt_request_data_t_full_name",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "No Obligacion",
				id: "lbl_azs_crt_request_data_t_nro_oblitation",
				data: "lbl_azs_crt_request_data_t_nro_oblitation",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Placa-Matricula",
				id: "lbl_azs_crt_request_data_t_plaque_enrollment",
				data: "lbl_azs_crt_request_data_t_plaque_enrollment",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Ciudad",
				id: "lbl_azs_crt_request_data_t_city",
				data: "lbl_azs_crt_request_data_t_city",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Solicitante Entidad",
				id: "lbl_azs_crt_request_data_t_applicant_entity",
				data: "lbl_azs_crt_request_data_t_applicant_entity",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Solicitud Cliente",
				id: "lbl_azs_crt_request_data_t_request_date",
				data: "lbl_azs_crt_request_data_t_request_date",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Tipo Certificado",
				id: "lbl_azs_crt_request_data_u_crt_request_type",
				data: "lbl_azs_crt_request_data_u_crt_request_type",
				type: "text",
				className: "text-dark",
				visible: true,
			},*/
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

function event_consecutive() {
	// Obtener el primer valor seleccionado de la tabla
	var ide = document.getElementById("field_em_1_third_type").value;
	// Validar si el id es mayor a cero
	if (ide > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + 'consecutive/' + ide + '/';
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					consecutive = objData.data.lbl_azp_crt_third_parties_t_consecutive;
					document.getElementById("field_em_1_file_nro").value = consecutive;
				} else {
					document.getElementById("field_em_1_file_nro").value = '';
				}
			}
		}
	} else {
		// Mensaje de audio para mostrar en la pagina web
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun tipo de proveedor.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
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
						url : "api/azp_crt_request_data/create",
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
								// Ocultar los campos sobre los elementos id del formulario
								$('#div_cr_observation_other').addClass('d-none');
								$('#div_cr_observation_value').addClass('d-none');
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

function event_bank_send() {
	var idtbl = document.getElementById("field_em_2_bank").value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + 'azpcrtbank/' + "detail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var zend = objData.data.lbl_azp_crt_bank_t_send;
					if (idtbl == "") {
						$('#div_em_2_date_delivery').addClass('d-none');
						//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
						document.getElementById("field_em_2_date_validate").value = '';
					} else if (zend == 1) {
						$('#div_em_2_date_delivery').addClass('d-none');
						//$('#div_em_2_date_delivery').removeClass('d-none');
						//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
						document.getElementById("field_em_2_date_validate").value = zend;
					} else if (zend == 2) {
						$('#div_em_2_date_delivery').addClass('d-none');
						//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
						document.getElementById("field_em_2_date_validate").value = zend;
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
		$('#div_em_2_date_delivery').addClass('d-none');
		//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
		document.getElementById("field_em_2_date_validate").value = '';
	}
};

function event_client_email() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_em_2_bank').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + 'api' + var_controller + "databank/" + idtbl + "/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_em_2_email').html(argument); });
	}
}

function event_client_send() {
	var idtbl = document.getElementById("field_em_2_email").value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + 'azpcrtclient/' + "detail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var zend = objData.data.lbl_azp_crt_client_t_send;
					if (idtbl == "") {
						$('#div_em_2_date_delivery').addClass('d-none');
						//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
						document.getElementById("field_em_2_date_validate").value = '';
					} else if (zend == 1) {
						$('#div_em_2_date_delivery').addClass('d-none');
						//$('#div_em_2_date_delivery').removeClass('d-none');
						//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
						document.getElementById("field_em_2_date_validate").value = zend;
					} else if (zend == 2) {
						$('#div_em_2_date_delivery').addClass('d-none');
						//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
						document.getElementById("field_em_2_date_validate").value = zend;
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
		$('#div_em_2_date_delivery').addClass('d-none');
		//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
		document.getElementById("field_em_2_date_validate").value = '';
	}
};

function event_date_validate() {
	var value = document.getElementById("field_em_2_date_validate").value;
	if (value == "") {
		$('#div_em_2_date_delivery').addClass('d-none');
		//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
	} else if (value == 1) {
		$('#div_em_2_date_delivery').addClass('d-none');
		//$('#div_em_2_date_delivery').removeClass('d-none');
		//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
	} else if (value == 2) {
		$('#div_em_2_date_delivery').addClass('d-none');
		//document.getElementById("field_em_2_date_delivery").value = 'aaaa-mm-dd';
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
						url : "api/azp_crt_request_data/delete",
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
					document.querySelector("#lbl_azp_crt_request_data_id_azp_crt_request_data").innerHTML = objData.data.lbl_azp_crt_request_data_id_azp_crt_request_data;
					document.querySelector("#lbl_azp_user_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_user_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_crt_request_data_m_date_created").innerHTML = objData.data.lbl_azp_crt_request_data_m_date_created;
					document.querySelector("#lbl_azp_crt_request_data_m_date_modified").innerHTML = objData.data.lbl_azp_crt_request_data_m_date_modified;
					document.querySelector("#lbl_azp_crt_request_data_m_description").innerHTML = objData.data.lbl_azp_crt_request_data_m_description;
					document.querySelector("#lbl_azp_sys_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector("#lbl_azp_crt_request_data_t_applicant_code").innerHTML = objData.data.lbl_azp_crt_request_data_t_applicant_code;
					document.querySelector("#lbl_azp_crt_request_data_t_applicant_entity").innerHTML = objData.data.lbl_azp_crt_request_data_t_applicant_entity;
					document.querySelector("#lbl_azp_crt_request_data_t_bilable").innerHTML = objData.data.lbl_azp_crt_request_data_t_bilable;
					//document.querySelector("#lbl_azp_crt_request_data_t_certificate_type").innerHTML = objData.data.lbl_azp_crt_request_data_t_certificate_type;
					//document.querySelector("#lbl_azp_crt_request_data_t_city").innerHTML = objData.data.lbl_azp_crt_request_data_t_city;
					//document.querySelector("#lbl_azp_crt_request_data_t_client_code").innerHTML = objData.data.lbl_azp_crt_request_data_t_client_code;
					//document.querySelector("#lbl_azp_crt_request_data_t_client_name").innerHTML = objData.data.lbl_azp_crt_request_data_t_client_name;
					document.querySelector("#lbl_azp_crt_request_data_t_entity_dispatcher").innerHTML = objData.data.lbl_azp_crt_request_data_t_entity_dispatcher;
					document.querySelector("#lbl_azp_crt_request_data_t_full_name").innerHTML = objData.data.lbl_azp_crt_request_data_t_full_name;
					document.querySelector("#lbl_azp_crt_request_data_t_identification").innerHTML = objData.data.lbl_azp_crt_request_data_t_identification;
					document.querySelector("#lbl_azp_crt_request_data_t_nro_oblitation").innerHTML = objData.data.lbl_azp_crt_request_data_t_nro_oblitation;
					document.querySelector("#lbl_azp_crt_request_data_t_observation").innerHTML = objData.data.lbl_azp_crt_request_data_t_observation;
					document.querySelector("#lbl_azp_crt_request_data_t_plaque_enrollment").innerHTML = objData.data.lbl_azp_crt_request_data_t_plaque_enrollment;
					document.querySelector("#lbl_azp_crt_request_data_t_process").innerHTML = objData.data.lbl_azp_crt_request_data_t_process;
					document.querySelector("#lbl_azp_crt_request_data_t_provider_class").innerHTML = objData.data.lbl_azp_crt_request_data_t_provider_class;
					document.querySelector("#lbl_azp_crt_request_data_t_provider_name").innerHTML = objData.data.lbl_azp_crt_request_data_t_provider_name;
					document.querySelector("#lbl_azp_crt_request_data_t_refundable").innerHTML = objData.data.lbl_azp_crt_request_data_t_refundable;
					document.querySelector("#lbl_azp_crt_request_data_t_request_date").innerHTML = objData.data.lbl_azp_crt_request_data_t_request_date;
					document.querySelector("#lbl_azp_crt_request_data_t_request_id").innerHTML = objData.data.lbl_azp_crt_request_data_t_request_id;
					document.querySelector("#lbl_azp_crt_request_data_t_request_nro").innerHTML = objData.data.lbl_azp_crt_request_data_t_request_nro;
					document.querySelector("#lbl_azp_crt_request_data_t_send_city").innerHTML = objData.data.lbl_azp_crt_request_data_t_send_city;
					document.querySelector("#lbl_azp_crt_bank_t_name").innerHTML = objData.data.lbl_azp_crt_bank_t_name;
					document.querySelector("#lbl_azp_crt_city_t_name").innerHTML = objData.data.lbl_azp_crt_city_t_name;
					document.querySelector("#lbl_azp_crt_client_t_code").innerHTML = objData.data.lbl_azp_crt_client_t_code;
					document.querySelector("#lbl_azp_crt_request_type_t_name").innerHTML = objData.data.lbl_azp_crt_request_type_t_name;
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

function event_client_consult() {
	// Activar columnas especificadas de la tabla
	var vtable = $('#dt_info').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Activar columnas especificadas de la tabla
		var vtable = $('#dt_info').DataTable();
		vtable.column(0).visible(false);
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "archive/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_crt_request_data_t_crt_document;
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
						// Asignacion de valores en un campo de texto
						document.getElementById("field_dc_id").value = idtbl;
						document.getElementById("field_dc_document").value = objData.data.lbl_azp_crt_request_data_t_crt_document;
						$('#modal-id-file_document').modal('show');
						// Definiendo valores de la busqueda de resultados
						var route = var_url + objData.data.lbl_azp_crt_request_data_t_crt_route;
						var file = objData.data.lbl_azp_crt_request_data_t_crt_document;
						var name = objData.data.lbl_azp_crt_request_data_t_crt_name;
						$('#iframe_file_document').attr('src', route + file);
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
		// Activar columnas especificadas de la tabla
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

function event_document_consult() {
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
					var fdocument = objData.data.lbl_azp_crt_request_data_t_crt_document;
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
						// Asignacion de valores en un campo de texto
						document.getElementById("field_dc_id").value = idtbl;
						document.getElementById("field_dc_document").value = objData.data.lbl_azp_crt_request_data_t_crt_document;
						$('#modal-id-file_document').modal('show');
						// Definiendo valores de la busqueda de resultados
						var route = var_url + objData.data.lbl_azp_crt_request_data_t_crt_route;
						var file = objData.data.lbl_azp_crt_request_data_t_crt_document;
						var name = objData.data.lbl_azp_crt_request_data_t_crt_name;
						$('#iframe_file_document').attr('src', route + file);
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

function event_document_download() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById("field_dc_id").value;
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
					var fdocument = objData.data.lbl_azp_crt_request_data_t_crt_document;
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
						var route = var_url + objData.data.lbl_azp_crt_request_data_t_crt_route;
						var file = objData.data.lbl_azp_crt_request_data_t_crt_document;
						var name = objData.data.lbl_azp_crt_request_data_t_crt_name;
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

function event_email_1() {
	var file_date = document.getElementById("field_em_1_file_date").value;
	var file_name = document.getElementById("field_em_1_file_name").value;
	var file_nro = document.getElementById("field_em_1_file_nro").value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_1').removeClass('alert-danger');
	$('#form_ajax_email_1').removeClass('alert-success');
	$('#form_ajax_email_1').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_1').addClass('alert-warning');
	$("#form_ajax_email_1").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email_1').removeClass('hide');
	$('#form_ajax_email_1').addClass('alert');
	if (file_date == '' || file_name == '' || file_nro == '') {
		// Mensaje a mostrar una vez terminada la accion
		$('#form_ajax_email_1').removeClass('alert');
		$('#form_ajax_email_1').addClass('hide');
		$('#form_ajax_email_1').html('');
		/*if (file_date == '') {
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email_1').removeClass('alert-success');
			$('#form_ajax_email_1').removeClass('alert-warning');
			$('#form_ajax_email_1').addClass('alert-danger');
			$("#form_ajax_email_1").html('<b>Error:</b> El campo de formato fecha es oblgitario');
			$('#form_ajax_email_1').removeClass('hide');
		} else if (file_name == '') {
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email_1').removeClass('alert-success');
			$('#form_ajax_email_1').removeClass('alert-warning');
			$('#form_ajax_email_1').addClass('alert-danger');
			$("#form_ajax_email_1").html('<b>Error:</b> El campo de nombre archivo es oblgitario');
			$('#form_ajax_email_1').removeClass('hide');
		} else if (file_nro == '') {
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email_1').removeClass('alert-success');
			$('#form_ajax_email_1').removeClass('alert-warning');
			$('#form_ajax_email_1').addClass('alert-danger');
			$("#form_ajax_email_1").html('<b>Error:</b> El campo de consecutivo es oblgitario');
			$('#form_ajax_email_1').removeClass('hide');
		}*/
	} else {
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
		if (value_checked != '') {
			$.ajax({
				type : "POST",
				url : "api/azp_crt_request_data/user",
				data: { field_us_id: value_checked, },
				success : function(json) {
					var obj = jQuery.parseJSON(json);
					if (obj.success == 1) {
						console.log("Correos electronicos actualizados correctamente.");
					}
				},
				error : function() {
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
			});
		}
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
							$('#form_ajax_email_1').removeClass('alert');
							$('#form_ajax_email_1').addClass('hide');
							$('#form_ajax_email_1').html('');
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
					}
				},
				ok: {
					label: "Completar",
					className: 'btn btn-sm btn-outline-success',
					callback: function() {
						var idtbl = document.getElementById('field_em_1_third_type').value;
						/*if (idtbl == 0 || idtbl == '') {
							// Mensaje a mostrar una vez terminada la accion
							$('#form_ajax_email_1').removeClass('alert-warning');
							$('#form_ajax_email_1').removeClass('alert-success');
							$('#form_ajax_email_1').addClass('alert-danger');
							$("#form_ajax_email_1").html('<b>Error:</b> El campo de correo electronico es oblgitario.');
							$('#form_ajax_email_1').removeClass('hide');
						} else if (idtbl > 0) {*/
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
							// Mensaje a mostrar una vez terminada la accion
							$('#form_ajax_email_1').removeClass('alert-warning');
							$('#form_ajax_email_1').removeClass('alert-success');
							$('#form_ajax_email_1').addClass('alert-danger');
							$("#form_ajax_email_1").html(error_icon  + '<b>Error:</b> Debes seleccionar minimo un correo electronico de proveedor.');
							$('#form_ajax_email_1').removeClass('hide');
						} else if (value_checked_tp != '') {							
							var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
							var ajaxurl = var_url + 'api' + var_controller + 'thirdpartiesid/' + idtbl + "/";
							request.open("GET", ajaxurl, true);
							request.send();
							//$('#modal-id-detail').modal('show');
							request.onreadystatechange = function(){
								if (request.readyState == 4 && request.status == 200) {
									var proccess_date = file_date.replace(/\s+/g, '');
									var proccess_name = file_name.replace(/\s+/g, '');
									var proccess_nro = file_nro.replace(/\s+/g, '');
									var file_proccess = proccess_nro + proccess_name + proccess_date;
									var objData = JSON.parse(request.responseText);
									if (objData.status) {
										console.log(objData.data.lbl_azp_crt_third_parties_id_azp_crt_third_parties);
										var password = objData.data.lbl_azp_crt_third_parties_id_azp_crt_third_parties;
										$.ajax({
											type : "POST",
											url: var_url + var_controller + "xlsxemailone/?field_em_id=" + password + "&field_em_con=" + file_nro + "&field_em_file=" + file_proccess,
											success : function(json) {
												$.ajax({
													type : "POST",
													url : "api/azp_crt_request_data/email_1",
													data : $('#form_email_1').serialize() + '&field_tp_id=' + value_checked_tp,
													//data : $('#form_email_1').serialize(),
													success : function(json) {
														var obj = jQuery.parseJSON(json);
														if (obj.success == 1) {
															// Recargar la tabla con nueva informacion
															if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
															// Mensaje a mostrar una vez terminada la accion
															$('#form_ajax_email_1').html(success_icon + obj.message);
															$("#form_ajax_email_1").removeClass('alert-warning');
															$("#form_ajax_email_1").addClass('alert-success');
															// Dejar campos vacios sobre los elementos id del formulario
															document.querySelector("#form_email_1").reset();
															// Configuracion de la ventana modal
															$('#modal-id-email_1').modal('hide');
															// Configuracion de la ventana modal
															$('#modal-id-confirm_1').modal('hide');
															// Añadir y remover clases e inclusive html
															setTimeout(function() {
																$('#form_ajax_email_1').removeClass('alert');
																$('#form_ajax_email_1').addClass('hide');
																$('#form_ajax_email_1').html('');
															}, 0);
															// Desmarcar el checkbox de seleccionar todos
															$('#field_ck_checkbox_all_read').prop('checked', false);
															$('#field_ck_checkbox_client').prop('checked', false);
															$('#field_ck_checkbox_third_parties').prop('checked', false);
															$('#field_ck_checkbox_user').prop('checked', false);
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
															$('#modal-id-email_1').modal('show');
															// Mensaje a mostrar una vez terminada la accion
															$('#form_ajax_email_1').html(error_icon + obj.message);
															$("#form_ajax_email_1").removeClass('alert-warning');
															$("#form_ajax_email_1").addClass('alert-danger');
														}
													},
													error : function() {
														// Configuracion de la ventana modal
														$('#modal-id-email_1').modal('show');
														// Mensaje a mostrar una vez terminada la accion
														$('#form_ajax_email_1').addClass('alert-danger');
														$("#form_ajax_email_1").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
														$('#form_ajax_email_1').removeClass('hide');
													}
												});
											},
											error: function() {
												// Configuracion de la ventana modal
												$('#modal-id-email_1').modal('show');
												// Mensaje a mostrar una vez terminada la accion
												$('#form_ajax_email_1').addClass('alert-danger');
												$("#form_ajax_email_1").html(process_icon  + 'Error: Archivo generado incorrectamente.');
												$('#form_ajax_email_1').removeClass('hide');
											}
										});
									}
								}
							}
						}
					}
				}
			},
			className: "modal-alert",
			closeButton: false,
		});
	}
};

function event_email_2() {
	var file_date = document.getElementById("field_em_2_file_date").value;
	var file_name = document.getElementById("field_em_2_file_name").value;
	//var file_nro = document.getElementById("field_em_2_file_nro").value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_2').removeClass('alert-danger');
	$('#form_ajax_email_2').removeClass('alert-success');
	$('#form_ajax_email_2').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_2').addClass('alert-warning');
	$("#form_ajax_email_2").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email_2').removeClass('hide');
	$('#form_ajax_email_2').addClass('alert');
	/*if (file_date == '' || file_name == '' || file_nro == '') {
		if (file_date == '') {
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email_1').removeClass('alert-success');
			$('#form_ajax_email_1').removeClass('alert-warning');
			$('#form_ajax_email_1').addClass('alert-danger');
			$("#form_ajax_email_1").html('<b>Error:</b> El campo de formato fecha es oblgitario');
			$('#form_ajax_email_1').removeClass('hide');
		} else if (file_name == '') {
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email_1').removeClass('alert-success');
			$('#form_ajax_email_1').removeClass('alert-warning');
			$('#form_ajax_email_1').addClass('alert-danger');
			$("#form_ajax_email_1").html('<b>Error:</b> El campo de nombre archivo es oblgitario');
			$('#form_ajax_email_1').removeClass('hide');
		} else if (file_nro == '') {
			// Mensaje a mostrar una vez terminada la accion
			$('#form_ajax_email_1').removeClass('alert-success');
			$('#form_ajax_email_1').removeClass('alert-warning');
			$('#form_ajax_email_1').addClass('alert-danger');
			$("#form_ajax_email_1").html('<b>Error:</b> El campo de consecutivo es oblgitario');
			$('#form_ajax_email_1').removeClass('hide');
		}
	} else {*/
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

		// Obtener inputs seleccionados de la tabla
		var value_table_tp = document.querySelectorAll('.dt_table_client');
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
							$('#form_ajax_email_2').removeClass('alert');
							$('#form_ajax_email_2').addClass('hide');
							$('#form_ajax_email_2').html('');
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
					}
				},
				ok: {
					label: "Completar",
					className: 'btn btn-sm btn-outline-success',
					callback: function() {
						var idtbl = document.getElementById('field_em_2_email').value;
						if (idtbl == 0 || idtbl == '') {
							// Mensaje a mostrar una vez terminada la accion
							$('#form_ajax_email_2').removeClass('alert-warning');
							$('#form_ajax_email_2').removeClass('alert-success');
							$('#form_ajax_email_2').addClass('alert-danger');
							$("#form_ajax_email_2").html('<b>Error:</b> El campo de correo electronico es oblgitario.');
							$('#form_ajax_email_2').removeClass('hide');
						} else if (idtbl > 0) {
							var requestfs = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
							var ajaxurlfs = var_url + 'api' + var_controller + "filesize/";
							requestfs.open("GET", ajaxurlfs, true);
							requestfs.send();
							//$('#modal-id-detail').modal('show');
							requestfs.onreadystatechange = function(){
								if (requestfs.readyState == 4 && requestfs.status == 200) {
									var objDatafs = JSON.parse(requestfs.responseText);
									if (objDatafs.status) {
										var size = objDatafs.data.lbl_azp_crt_request_t_crt_size;
										if (size > var_size_files) {
											// Mensaje de audio para mostrar en la pagina web
											initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
											bootbox.alert({
												size: "small",
												title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
												message: "<span><strong>Lo sentimos:</strong> No se puede realizar el envio ya que supera el limite maximo de " + var_size_letter + ".</span>",
												centerVertical: true,
												className: "modal-alert",
												closeButton: false,
											});
										} else {
											var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
											var ajaxurl = var_url + 'api' + 'azpcrtclient/' + 'update/' + idtbl + "/";
											request.open("GET", ajaxurl, true);
											request.send();
											//$('#modal-id-detail').modal('show');
											request.onreadystatechange = function(){
												if (request.readyState == 4 && request.status == 200) {
													var proccess_date = file_date.replace(/\s+/g, '');
													var proccess_name = file_name.replace(/\s+/g, '');
													//var proccess_nro = file_nro.replace(/\s+/g, '');
													var file_proccess = proccess_name + proccess_date;
													var objData = JSON.parse(request.responseText);
													if (objData.status) {
														var password = objData.data.lbl_azp_crt_client_id_azp_crt_client;
														$.ajax({
															type : "POST",
															url: var_url + var_controller + "xlsxemailtwo/?field_em_id=" + password + "&field_em_file=" + file_proccess,
															success : function(json) {
																$.ajax({
																	type : "POST",
																	url : "api/azp_crt_request_data/email_2",
																	data : $('#form_email_2').serialize() + '&field_us_id=' + value_checked_us + '&field_tp_id=' + value_checked_tp,
																	success : function(json) {
																		var obj = jQuery.parseJSON(json);
																		if (obj.success == 1) {
																			// Recargar la tabla con nueva informacion
																			if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
																			// Mensaje a mostrar una vez terminada la accion
																			$('#form_ajax_email_2').html(success_icon + obj.message);
																			$("#form_ajax_email_2").removeClass('alert-warning');
																			$("#form_ajax_email_2").addClass('alert-success');
																			// Dejar campos vacios sobre los elementos id del formulario
																			document.querySelector("#form_email_2").reset();
																			// Configuracion de la ventana modal
																			$('#modal-id-email_2').modal('hide');
																			// Configuracion de la ventana modal
																			$('#modal-id-confirm_2').modal('hide');
																			// Configuracion de la ventana modal
																			$('#div_em_2_date_delivery').addClass('d-none');
																			// Añadir y remover clases e inclusive html
																			setTimeout(function() {
																				$('#form_ajax_email_2').removeClass('alert');
																				$('#form_ajax_email_2').addClass('hide');
																				$('#form_ajax_email_2').html('');
																			}, 0);
																			// Desmarcar el checkbox de seleccionar todos
																			$('#field_ck_checkbox_all_read').prop('checked', false);
																			$('#field_ck_checkbox_client').prop('checked', false);
																			$('#field_ck_checkbox_third_parties').prop('checked', false);
																			$('#field_ck_checkbox_user').prop('checked', false);
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
																			$('#modal-id-email_2').modal('show');
																			// Mensaje a mostrar una vez terminada la accion
																			$('#form_ajax_email_2').html(error_icon + obj.message);
																			$("#form_ajax_email_2").removeClass('alert-warning');
																			$("#form_ajax_email_2").addClass('alert-danger');
																		}
																	},
																	error : function() {
																		// Configuracion de la ventana modal
																		$('#modal-id-email_2').modal('show');
																		// Mensaje a mostrar una vez terminada la accion
																		$('#form_ajax_email_2').addClass('alert-danger');
																		$("#form_ajax_email_2").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
																		$('#form_ajax_email_2').removeClass('hide');
																	}
																});
															},
															error: function() {
																// Configuracion de la ventana modal
																$('#modal-id-email_2').modal('show');
																// Mensaje a mostrar una vez terminada la accion
																$('#form_ajax_email_2').addClass('alert-danger');
																$("#form_ajax_email_2").html(process_icon  + 'Error: Archivo generado incorrectamente.');
																$('#form_ajax_email_2').removeClass('hide');
															}
														});	
													}
												}
											}
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
						}
					}
				}
			},
			className: "modal-alert",
			closeButton: false,
		});
	//}
};

function event_email_client() {
	// Obtener el primer valor seleccionado de la tabla
	var ide = document.getElementById("field_em_2_email").value;
	// Validar si el id es mayor a cero
	if (ide > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + 'clientcount/' + ide + '/';
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					/*count = objData.data.lbl_count;
					if (count > 1) {*/
						// Configuracion de la ventana modal
						$('#modal-id-client').modal('show');
						// Column Definitions
						var columnSet = [
							{
								title: "Id",
								id: "lbl_azp_crt_client_id_azp_crt_client",
								data: "lbl_azp_crt_client_id_azp_crt_client",
								type: "text",
								className: "text-dark",
								visible: false,
							},
							{
								title: "Seleccion",
								id: "lbl_azp_crt_client_id_azp_crt_client",
								data: "lbl_azp_crt_client_id_azp_crt_client",
								type: "text",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Correo Electronico",
								id: "lbl_azp_crt_client_t_email",
								data: "lbl_azp_crt_client_t_email",
								type: "text",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Persona",
								id: "lbl_azp_crt_client_t_person",
								data: "lbl_azp_crt_client_t_person",
								type: "text",
								className: "text-dark",
								visible: true,
							},
						];
						// Inicializar tabla de datos
						var myTable = $('#dt_client').dataTable({
							// Reinicialiar los datos de la tabla
							destroy: true,
							// Estructura de las columnas para el DOOM
							dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
								+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
									+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
								+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
								+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
							// Leer datos de prácticamente cualquier fuente de datos JSON
							ajax: var_url + 'api' + var_controller + 'clientresult/' + ide + '/',
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
										return '<input type="checkbox" name="field_cl_id" id="field_cl_id" class="dt_table_client" value="' + $('<div/>').text(data).html() + '">';
									}
								},
							],
						});
					/*} else {
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos:</strong> El cliente seleccionado no tiene asociado ningun correo.</span>",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					}*/
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
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun cliente.</span>",
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
			id: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
			data: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Seleccion",
			id: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
			data: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_crt_email_copy_t_email",
			data: "lbl_azp_crt_email_copy_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Nombres",
			id: "lbl_azp_crt_email_copy_t_names",
			data: "lbl_azp_crt_email_copy_t_names",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Apellidos",
			id: "lbl_azp_crt_email_copy_t_surnames",
			data: "lbl_azp_crt_email_copy_t_surnames",
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
		ajax: "api" + "azpcrtemailcopy/" + "read/",
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
	var ide = document.getElementById("field_em_1_third_type").value;
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
								id: "lbl_azp_crt_third_parties_id_azp_crt_third_parties",
								data: "lbl_azp_crt_third_parties_id_azp_crt_third_parties",
								type: "text",
								className: "text-dark",
								visible: false,
							},
							{
								title: "Seleccion",
								id: "lbl_azp_crt_third_parties_id_azp_crt_third_parties",
								data: "lbl_azp_crt_third_parties_id_azp_crt_third_parties",
								type: "text",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Contacto",
								id: "lbl_azp_crt_third_parties_t_contact",
								data: "lbl_azp_crt_third_parties_t_contact",
								type: "text",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Correo Electronico",
								id: "lbl_azp_crt_third_parties_t_email",
								data: "lbl_azp_crt_third_parties_t_email",
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
							message: "<span><strong>Lo sentimos:</strong> El tipo de proveedor seleccionado no tiene asociado ningun correo.</span>",
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
			message: "<span><strong>Lo sentimos:</strong> No haz seleccionado ningun tipo de proveedor.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	}
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
	var ajaxurl = var_url + var_controller + "archive/";
	var formData = new FormData(document.getElementById("form_file"));
	var load_file = $("#field_fl_file")[0].files.length;
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
					var fileInput = document.getElementById('field_fl_file');
					var filePath = fileInput.value;
					var allowedExtensions = /(.pdf)$/i;

					if (load_file === 0) {
						$("#form_ajax_file").removeClass('alert-warning');
						$('#form_ajax_file').addClass('alert-danger');
						$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de certificado de defuncion es obligatorio');
						$('#form_ajax_file').removeClass('hide');
						// Configuracion de la ventana modal
						$('#modal-id-file').modal('show');
					} else {
						if (!allowedExtensions.exec(filePath)) {
							$("#form_ajax_file").removeClass('alert-warning');
							$('#form_ajax_file').addClass('alert-danger');
							$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de certificado solo acepta formatos pdf.');
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
										url : "api/azp_crt_request_data/file",
										data : $('#form_file').serialize(),
										success : function(json) {
											var obj = jQuery.parseJSON(json);
											if (obj.success == 1) {
												// Mensaje de audio para mostrar en la pagina web
												initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
												var dialog = bootbox.dialog({
													title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
													message: "<span><strong>Exito:</strong> Haz almacenado exitosamente los datos.</span>",
													size: 'large',
													buttons: {
														ok: {
															label: "Ok",
															className: 'btn btn-md btn-outline-primary',
															callback: function() {
																location.reload();
															},
														},
													},
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
	//$('#table_btn_e_report').addClass('d-none');
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
	//$('#table_btn_e_report').addClass('d-none');
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
	//$('#table_btn_e_report').removeClass('d-none');
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
	//$('#table_btn_e_report').addClass('d-none');
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
	//$('#table_btn_e_report').addClass('d-none');
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
	var ajaxurl = var_url + var_controller + "document/";
	//var formData = new FormData(document.getElementById("form_import"));
	var formData = new FormData($("#form_import")[0]);
	var load_file = $("#field_im_file")[0].files.length;
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
					var value = 1;
					var fileInput = document.getElementById('field_im_file');
					var filePath = fileInput.value;
					var allowedExtensions = /(.csv)$/i;

					if (load_file === 0) {
						$("#form_ajax_import").removeClass('alert-warning');
						$('#form_ajax_import').addClass('alert-danger');
						$("#form_ajax_import").html(error_icon  + 'Error: El campo de archivo es obligatorio');
						$('#form_ajax_import').removeClass('hide');
						// Configuracion de la ventana modal
						$('#modal-id-import').modal('show');
					} else {
						if (!allowedExtensions.exec(filePath)) {
							$("#form_ajax_import").removeClass('alert-warning');
							$('#form_ajax_import').addClass('alert-danger');
							$("#form_ajax_import").html(error_icon  + 'Error: El campo de archivo excel acepta solo el formato csv.');
							$('#form_ajax_import').removeClass('hide');
							// Configuracion de la ventana modal
							$('#modal-id-import').modal('show');
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
										url : "api/azp_crt_request_data/import",
										data : $('#form_import').serialize(),
										success : function(json) {
											var obj = jQuery.parseJSON(json);
											if (obj.success == 1) {
												// Recargar la tabla con nueva informacion
												if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
												// Mensaje a mostrar una vez terminada la accion
												$('#form_ajax_import').html(success_icon + obj.message);
												$("#form_ajax_import").removeClass('alert-warning');
												$("#form_ajax_import").addClass('alert-success');
												// Dejar campos vacios sobre los elementos id del formulario
												document.querySelector("#form_import").reset();
												// Configuracion de la ventana modal
												$('#modal-id-import').modal('show');
												// Añadir y remover las clases incorporadas de las hojas de estilo
												$('#div-template_crt_request_data').addClass('d-none');
												$('#div-template_crt_request_supplier').addClass('d-none');
												// Añadir y remover las clases incorporadas de las hojas de estilo
												/*setTimeout(function() {
													$('#form_ajax_import').removeClass('alert');
													$('#form_ajax_import').addClass('hide');
													$('#form_ajax_import').html('');
												}, 0);*/
												// Mensaje de audio para mostrar en la pagina web
												initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
												bootbox.alert({
													title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
													message: "<span><strong>Exito:</strong> Haz importado exitosamente el archivo.</span>",
													centerVertical: true,
													className: "modal-alert",
													closeButton: false,
												});
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
										}
									});
								},
								error: function() {
									$('#form_ajax_import').addClass('alert-danger');
									$("#form_ajax_import").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
									$('#form_ajax_import').removeClass('hide');
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

function event_observation_internal() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_observation_internal').removeClass('alert-danger');
	$('#form_ajax_observation_internal').removeClass('alert-success');
	$('#form_ajax_observation_internal').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_observation_internal').addClass('alert-warning');
	$("#form_ajax_observation_internal").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_observation_internal').removeClass('hide');
	$('#form_ajax_observation_internal').addClass('alert');
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
						$('#form_ajax_observation_internal').removeClass('alert');
						$('#form_ajax_observation_internal').addClass('hide');
						$('#form_ajax_observation_internal').html('');
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
						url : "api/azp_crt_request_data/observation_internal",
						data : $('#form_observation_internal').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_observation_internal").length) { $('#dt_observation_internal').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_observation_internal').html(success_icon + obj.message);
								$("#form_ajax_observation_internal").removeClass('alert-warning');
								$("#form_ajax_observation_internal").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_observation_internal").reset();
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_observation_internal').removeClass('alert');
									$('#form_ajax_observation_internal').addClass('hide');
									$('#form_ajax_observation_internal').html('');
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
								$('#form_ajax_observation_internal').html(error_icon + obj.message);
								$("#form_ajax_observation_internal").removeClass('alert-warning');
								$("#form_ajax_observation_internal").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_observation_internal').addClass('alert-danger');
							$("#form_ajax_observation_internal").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_observation_internal').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_observation_list() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Asignar un valor obtenido a otro campo de texto
		document.getElementById("field_oi_id").value = idtbl;
		// Ventana modal para visualizacion de campos
		$('#modal-id-observation_internal').modal('show');
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_crt_observation_internal_id_azp_crt_observation_internal",
				data: "lbl_azp_crt_observation_internal_id_azp_crt_observation_internal",
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
				visible: true,
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
				id: "lbl_azp_crt_observation_internal_m_date_created",
				data: "lbl_azp_crt_observation_internal_m_date_created",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azp_crt_observation_internal_m_date_modified",
				data: "lbl_azp_crt_observation_internal_m_date_modified",
				type: "text",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azp_crt_observation_internal_m_description",
				data: "lbl_azp_crt_observation_internal_m_description",
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
				title: "No Cedula",
				id: "lbl_azp_crt_observation_internal_t_identification",
				data: "lbl_azp_crt_observation_internal_t_identification",
				type: "text",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Observacion",
				id: "lbl_azp_crt_observation_internal_t_observation",
				data: "lbl_azp_crt_observation_internal_t_observation",
				type: "text",
				className: "text-dark",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_observation_internal').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "observationlist/" + idtbl + "/",
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

function event_observation_type_create() {
	var value = document.getElementById("field_cr_crt_observation_type").value;
	if (value == '2') {
		$('#div_cr_observation_other').removeClass('d-none');
		$('#div_cr_observation_value').removeClass('d-none');
	} else {
		$('#div_cr_observation_other').addClass('d-none');
		$('#div_cr_observation_value').addClass('d-none');
	}
};

function event_observation_type_update() {
	var value = document.getElementById("field_up_crt_observation_type").value;
	if (value == '2') {
		$('#div_up_observation_other').removeClass('d-none');
		$('#div_up_observation_value').removeClass('d-none');
	} else {
		$('#div_up_observation_other').addClass('d-none');
		$('#div_up_observation_value').addClass('d-none');
	}
};

function event_quittance_consult() {
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
					var fdocument = objData.data.lbl_azp_crt_request_data_t_rcb_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo de recibo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Asignacion de valores en un campo de texto
						document.getElementById("field_qc_id").value = idtbl;
						document.getElementById("field_qc_document").value = objData.data.lbl_azp_crt_request_data_t_rcb_document;
						$('#modal-id-file_quittance').modal('show');
						// Definiendo valores de la busqueda de resultados
						var route = var_url + objData.data.lbl_azp_crt_request_data_t_rcb_route;
						var file = objData.data.lbl_azp_crt_request_data_t_rcb_document;
						var name = objData.data.lbl_azp_crt_request_data_t_rcb_name;
						$('#iframe_file_quittance').attr('src', route + file);
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

function event_quittance_download() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById("field_qc_id").value;
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
					var fdocument = objData.data.lbl_azp_crt_request_data_t_rcb_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene archivo de recibo.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Definiendo valores de la busqueda de resultados
						var route = var_url + objData.data.lbl_azp_crt_request_data_t_rcb_route;
						var file = objData.data.lbl_azp_crt_request_data_t_rcb_document;
						var name = objData.data.lbl_azp_crt_request_data_t_rcb_name;
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

function event_receipt() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_receipt').removeClass('alert-danger');
	$('#form_ajax_receipt').removeClass('alert-success');
	$('#form_ajax_receipt').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_receipt').addClass('alert-warning');
	$("#form_ajax_receipt").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_receipt').removeClass('hide');
	$('#form_ajax_receipt').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-receipt').modal('hide');
	var ajaxurl = var_url + var_controller + "quittance/";
	var formData = new FormData(document.getElementById("form_receipt"));
	var load_receipt = $("#field_rb_receipt")[0].files.length;
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
						$('#form_ajax_receipt').removeClass('alert');
						$('#form_ajax_receipt').addClass('hide');
						$('#form_ajax_receipt').html('');
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
					$('#modal-id-receipt').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var receiptInput = document.getElementById('field_rb_receipt');
					var receiptPath = receiptInput.value;
					var allowedExtensions = /(.pdf)$/i;

					if (load_receipt === 0) {
						$("#form_ajax_receipt").removeClass('alert-warning');
						$('#form_ajax_receipt').addClass('alert-danger');
						$("#form_ajax_receipt").html(error_icon  + '<b>Error:</b> El campo de certificado de defuncion es obligatorio');
						$('#form_ajax_receipt').removeClass('hide');
						// Configuracion de la ventana modal
						$('#modal-id-receipt').modal('show');
					} else {
						if (!allowedExtensions.exec(receiptPath)) {
							$("#form_ajax_receipt").removeClass('alert-warning');
							$('#form_ajax_receipt').addClass('alert-danger');
							$("#form_ajax_receipt").html(error_icon  + '<b>Error:</b> El campo de certificado solo acepta formatos pdf.');
							$('#form_ajax_receipt').removeClass('hide');
							receiptInput.value = '';
							// Configuracion de la ventana modal
							$('#modal-id-receipt').modal('show');
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
										url : "api/azp_crt_request_data/receipt",
										data : $('#form_receipt').serialize(),
										success : function(json) {
											var obj = jQuery.parseJSON(json);
											if (obj.success == 1) {
												// Mensaje de audio para mostrar en la pagina web
												initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
												var dialog = bootbox.dialog({
													title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
													message: "<span><strong>Exito:</strong> Haz almacenado exitosamente los datos.</span>",
													size: 'large',
													buttons: {
														ok: {
															label: "Ok",
															className: 'btn btn-md btn-outline-primary',
															callback: function() {
																location.reload();
															},
														},
													},
													className: "modal-alert",
													closeButton: false,
												});
											} else {
												// Configuracion de la ventana modal
												$('#modal-id-receipt').modal('show');
												// Mensaje a mostrar una vez terminada la accion
												$('#form_ajax_receipt').html(error_icon + obj.message);
												$("#form_ajax_receipt").removeClass('alert-warning');
												$("#form_ajax_receipt").addClass('alert-danger');
											}
										},
										error : function() {
											$('#form_ajax_receipt').addClass('alert-danger');
											$("#form_ajax_receipt").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
											$('#form_ajax_receipt').removeClass('hide');
										},
									});
								},
								error: function() {
									$('#form_ajax_receipt').addClass('alert-danger');
									$("#form_ajax_receipt").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
									$('#form_ajax_receipt').removeClass('hide');
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
						url : "api/azp_crt_request_data/remove",
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
						url : "api/azp_crt_request_data/restore",
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

function event_templates() {
	var value = document.getElementById("field_im_template").value;
	if (value == "") {
		$('#div-template_crt_request_data').addClass('d-none');
		$('#div-template_crt_request_supplier').addClass('d-none');
	} else if (value == 1) {
		$('#div-template_crt_request_data').removeClass('d-none');
		$('#div-template_crt_request_supplier').addClass('d-none');
	} else if (value == 2) {
		$('#div-template_crt_request_data').addClass('d-none');
		$('#div-template_crt_request_supplier').removeClass('d-none');
	}
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
						url : "api/azp_crt_request_data/update",
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
			url : "api/azp_crt_request_data/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {

					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_email').removeClass('alert');
						$('#form_ajax_email').addClass('hide');
						$('#form_ajax_email').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-email').modal('show');
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
};

function modal_email_1() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_1').removeClass('alert-danger');
	$('#form_ajax_email_1').removeClass('alert-success');
	$('#form_ajax_email_1').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_1').addClass('alert-warning');
	$("#form_ajax_email_1").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email_1').removeClass('hide');
	$('#form_ajax_email_1').addClass('alert');
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
	// Defincion del texto a recargar en el campo de texto
	var summernote = '<p></p>' +
		'<p>Buen día</p>' +
		'<p>Adjunto archivo para expedición de certificados</p>' +
		'<p>Quedo atenta</p>' +
		'<p>Gracias</p>' +
		'<p>Cordialmente</p>'		
	;
	// Borrar el codigo del campo de texto
	$("#field_em_1_summernote").summernote("code", summernote);
	// Añadir un texto definido en el campo de texto
	/*$('#field_em_1_summernote').summernote('insertText', '');
	// Añadir un texto definido en el campo de texto
	$('#field_em_1_summernote').summernote('pasteHTML', summernote);*/
	// Añadir propiedades al campo de texto
	$('#field_em_1_summernote').summernote({
		placeholder: 'Digita el texto ...',
		tabsize: 2,
		height: 125,
	});
	// Añadir y remover las clases incorporadas de las hojas de estilo
	setTimeout(function() {
		// Mensaje a mostrar una vez terminada la accion
		$('#form_ajax_email_0').removeClass('alert');
		$('#form_ajax_email_0').addClass('hide');
		$('#form_ajax_email_0').html('');
		// Mensaje a mostrar una vez terminada la accion
		$('#form_ajax_email_1').removeClass('alert');
		$('#form_ajax_email_1').addClass('hide');
		$('#form_ajax_email_1').html('');
	}, 0);
	// Configuracion de la ventana modal
	$('#modal-id-email_1').modal('show');
};

function modal_email_2() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_2').removeClass('alert-danger');
	$('#form_ajax_email_2').removeClass('alert-success');
	$('#form_ajax_email_2').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_2').addClass('alert-warning');
	$("#form_ajax_email_2").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_email_2').removeClass('hide');
	$('#form_ajax_email_2').addClass('alert');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_email_0').removeClass('alert-danger');
	$('#form_ajax_email_0').removeClass('alert-success');
	$('#form_ajax_email_0').removeClass('alert-warning');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_email_0').removeClass('alert');
	$('#form_ajax_email_0').addClass('hide');
	$('#form_ajax_email_0').html('');
	var requestacl = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurlacl = var_url + 'api' + var_controller + "alertclient/";
	requestacl.open("GET", ajaxurlacl, true);
	requestacl.send();
	//$('#modal-id-detail').modal('show');
	requestacl.onreadystatechange = function() {
		if (requestacl.readyState == 4 && requestacl.status == 200) {
			var objDataacl = JSON.parse(requestacl.responseText);
			if (objDataacl.status) {
				cmax = objDataacl.data.lbl_count;
				if (cmax > 1) {
					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
					bootbox.alert({
						size: "small",
						title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
						message: "<span><strong>Lo sentimos:</strong> No se puede seleccionar mas de un cliente al mismo tiempo.</span>",
						centerVertical: true,
						className: "modal-alert",
						closeButton: false,
					});
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_email_0').removeClass('alert');
					$('#form_ajax_email_0').addClass('hide');
					$('#form_ajax_email_0').html('');
				} else {
					var requestami = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
					var ajaxurlami = var_url + 'api' + var_controller + "alertmarkimage/";
					requestami.open("GET", ajaxurlami, true);
					requestami.send();
					//$('#modal-id-detail').modal('show');
					requestami.onreadystatechange = function() {
						if (requestami.readyState == 4 && requestami.status == 200) {
							var objDataami = JSON.parse(requestami.responseText);
							if (objDataami.status) {
								cmax = objDataami.data.lbl_count;
								if (cmax > 0) {
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										size: "small",
										title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
										message: "<span><strong>Lo sentimos:</strong> De los registros seleccionados " + cmax + " son volver a escanear.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_email_0').removeClass('alert');
									$('#form_ajax_email_0').addClass('hide');
									$('#form_ajax_email_0').html('');
								} else {
									var requestacr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
									var ajaxurlacr = var_url + 'api' + var_controller + "alertcertificate/";
									requestacr.open("GET", ajaxurlacr, true);
									requestacr.send();
									//$('#modal-id-detail').modal('show');
									requestacr.onreadystatechange = function() {
										if (requestacr.readyState == 4 && requestacr.status == 200) {
											var objDataacr = JSON.parse(requestacr.responseText);
											if (objDataacr.status) {
												cmax = objDataacr.data.lbl_count;
												if (cmax > 0) {
													initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
													bootbox.alert({
														size: "small",
														title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
														message: "<span><strong>Lo sentimos:</strong> De los registros seleccionados " + cmax + " no tienen certificado.</span>",
														centerVertical: true,
														className: "modal-alert",
														closeButton: false,
													});
													// Mensaje a mostrar una vez terminada la accion
													$('#form_ajax_email_0').addClass('alert');
													$('#form_ajax_email_0').removeClass('alert-danger');
													$('#form_ajax_email_0').removeClass('alert-success');
													$('#form_ajax_email_0').addClass('alert-warning');
													$("#form_ajax_email_0").html('Datos Sin Certificados' +
														' <a onclick="event_alert_certificate();" style="color:#0078FF;">Consultar<a/>.');
													$('#form_ajax_email_0').removeClass('hide');
												} else {
													/*var requestarc = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
													var ajaxurlarc = var_url + 'api' + var_controller + "alertreceipt/";
													requestarc.open("GET", ajaxurlarc, true);
													requestarc.send();
													//$('#modal-id-detail').modal('show');
													requestarc.onreadystatechange = function() {
														if (requestarc.readyState == 4 && requestarc.status == 200) {
															var objDataarc = JSON.parse(requestarc.responseText);
															if (objDataarc.status) {
																cmax = objDataarc.data.lbl_count;
																if (cmax > 0) {
																	initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
																	bootbox.alert({
																		size: "small",
																		title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
																		message: "<span><strong>Lo sentimos:</strong> De los registros seleccionados " + cmax + " no tienen recibo.</span>",
																		centerVertical: true,
																		className: "modal-alert",
																		closeButton: false,
																	});
																	// Mensaje a mostrar una vez terminada la accion
																	$('#form_ajax_email_0').addClass('alert');
																	$('#form_ajax_email_0').removeClass('alert-danger');
																	$('#form_ajax_email_0').removeClass('alert-success');
																	$('#form_ajax_email_0').addClass('alert-warning');
																	$("#form_ajax_email_0").html('Datos Sin Recibo' +
																		' <a onclick="event_alert_receipt();" style="color:#0078FF;">Consultar<a/>.');
																	$('#form_ajax_email_0').removeClass('hide');
																} else {*/
																	var requestart = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
																	var ajaxurlart = var_url + 'api' + var_controller + "alerttypecertificate/";
																	requestart.open("GET", ajaxurlart, true);
																	requestart.send();
																	//$('#modal-id-detail').modal('show');
																	requestart.onreadystatechange = function() {
																		if (requestart.readyState == 4 && requestart.status == 200) {
																			var objDataart = JSON.parse(requestart.responseText);
																			if (objDataart.status) {
																				cmax = objDataart.data.lbl_count;
																				if (cmax > 1) {
																					initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
																					bootbox.alert({
																						size: "small",
																						title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
																						message: "<span><strong>Lo sentimos:</strong> No se puede seleccionar mas de un tipo de certificado al mismo tiempo.</span>",
																						centerVertical: true,
																						className: "modal-alert",
																						closeButton: false,
																					});
																					// Mensaje a mostrar una vez terminada la accion
																					$('#form_ajax_email_0').removeClass('alert');
																					$('#form_ajax_email_0').addClass('hide');
																					$('#form_ajax_email_0').html('');
																				} else {
																					var requestatc = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
																					var ajaxurlatc = var_url + 'api' + var_controller + "typecertificate/";
																					requestatc.open("GET", ajaxurlatc, true);
																					requestatc.send();
																					//$('#modal-id-detail').modal('show');
																					requestatc.onreadystatechange = function() {
																						if (requestatc.readyState == 4 && requestatc.status == 200) {
																							var objDataatc = JSON.parse(requestatc.responseText);
																							if (objDataatc.status) {
																								cmax = objDataatc.data.lbl_t_name.toLowerCase();
																								// Configuracion de la ventana modal
																								$('#modal-id-email').modal('hide');
																								// Defincion del texto a recargar en el campo de texto
																								var summernote_1 = '<p></p>' +
																									'<p>Buen día</p>' +
																									'<p>Adjunto imágenes de certificado de ' + cmax + ' según solicitud</p>'
																								;
																								// Borrar el codigo del campo de texto
																								$("#field_em_2_summernote_1").summernote("code", summernote_1);
																								// Añadir un texto definido en el campo de texto
																								/*$('#field_em_2_summernote_1').summernote('insertText', '');
																								// Añadir un texto definido en el campo de texto
																								$('#field_em_2_summernote_1').summernote('pasteHTML', summernote_1);*/
																								// Añadir propiedades al campo de texto
																								$('#field_em_2_summernote_1').summernote({
																									placeholder: 'Digita el texto ...',
																									tabsize: 2,
																									height: 125,
																								});
																								// Defincion del texto a recargar en el campo de texto
																								var summernote_2 = '<p></p>' +
																									'<p>Cualquier inquietud con gusto será atendida</p>' +
																									'<p>Cordialmente</p>'
																								;
																								// Borrar el codigo del campo de texto
																								$("#field_em_2_summernote_2").summernote("code", summernote_2);
																								// Añadir un texto definido en el campo de texto
																								/*$('#field_em_2_summernote_2').summernote('insertText', '');
																								// Añadir un texto definido en el campo de texto
																								$('#field_em_2_summernote_2').summernote('pasteHTML', summernote_2);*/
																								// Añadir propiedades al campo de texto
																								$('#field_em_2_summernote_2').summernote({
																									placeholder: 'Digita el texto ...',
																									tabsize: 2,
																									height: 125,
																								});
																								// Añadir y remover las clases incorporadas de las hojas de estilo
																								setTimeout(function() {
																									// Mensaje a mostrar una vez terminada la accion
																									$('#form_ajax_email_0').removeClass('alert');
																									$('#form_ajax_email_0').addClass('hide');
																									$('#form_ajax_email_0').html('');
																									// Mensaje a mostrar una vez terminada la accion
																									$('#form_ajax_email_2').removeClass('alert');
																									$('#form_ajax_email_2').addClass('hide');
																									$('#form_ajax_email_2').html('');
																								}, 0);
																								// Configuracion de la ventana modal
																								$('#modal-id-email_2').modal('show');

																								var ajaxurl = var_url + 'api' + var_controller + "dataclient/";
																								$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
																									$('#field_em_2_bank').html(argument);
																									event_bank_send();
																									event_client_email();
																								});

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
																/*}
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
													}*/
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
};

function modal_file() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "file/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {

					$('#modal-id-file').modal('show');

					document.querySelector("#field_fl_id").value = objData.data.lbl_azp_crt_request_data_id_azp_crt_request_data;

					document.querySelector('#field_fl_file').addEventListener('change', () =>  {
						//console.log('detecte algo');
						let pdffFile = document.querySelector('#field_fl_file').files[0];
						let pdffURL = URL.createObjectURL(pdffFile);
						document.querySelector('#field_fl_embed').setAttribute('src', pdffURL);
						//console.log(pdffURL);
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

function modal_receipt() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "receipt/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {

					$('#modal-id-receipt').modal('show');

					document.querySelector("#field_rb_id").value = objData.data.lbl_azp_crt_request_data_id_azp_crt_request_data;

					document.querySelector('#field_rb_receipt').addEventListener('change', () =>  {
						//console.log('detecte algo');
						let pdffFile = document.querySelector('#field_rb_receipt').files[0];
						let pdffURL = URL.createObjectURL(pdffFile);
						document.querySelector('#field_rb_embed').setAttribute('src', pdffURL);
						//console.log(pdffURL);
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

function modal_table_1() {
	$('#modal-id-table_1').modal('show');
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_crt_request_update_id_azp_crt_request_update",
			data: "lbl_azp_crt_request_update_id_azp_crt_request_update",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Solicitud",
			id: "lbl_azp_crt_request_update_t_request_date",
			data: "lbl_azp_crt_request_update_t_request_date",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Codigo Cliente",
			id: "lbl_azp_crt_request_update_t_client_code",
			data: "lbl_azp_crt_request_update_t_client_code",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "No Cedula",
			id: "lbl_azp_crt_request_update_t_identification",
			data: "lbl_azp_crt_request_update_t_identification",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Nombre",
			id: "lbl_azp_crt_request_update_t_full_name",
			data: "lbl_azp_crt_request_update_t_full_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Placa-Matricula",
			id: "lbl_azp_crt_request_update_t_plaque_enrollment",
			data: "lbl_azp_crt_request_update_t_plaque_enrollment",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Ciudad",
			id: "lbl_azp_crt_request_update_t_city",
			data: "lbl_azp_crt_request_update_t_city",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Valor Total Servicio",
			id: "lbl_azp_crt_request_update_m_description",
			data: "lbl_azp_crt_request_update_m_description",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Valor Total Reintegro",
			id: "lbl_azp_crt_request_update_m_description",
			data: "lbl_azp_crt_request_update_m_description",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Recibo",
			id: "lbl_azp_crt_request_update_m_description",
			data: "lbl_azp_crt_request_update_m_description",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Imagen",
			id: "lbl_azp_crt_request_update_m_description",
			data: "lbl_azp_crt_request_update_m_description",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Observacion",
			id: "lbl_azp_crt_request_update_m_description",
			data: "lbl_azp_crt_request_update_m_description",
			type: "text",
			className: "text-dark",
			visible: false,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_table_1').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "table/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		//altEditor: true,
		// Combinar valores en las demas celdas
		//autoFill: true,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: true,
		// Movilizar columnas en la tabla
		//colReorder: true,
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
		//select: 'single',
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
		buttons: [],
		columnDefs: [],
	});
};

function modal_table_2() {
	$('#modal-id-table_2').modal('show');
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_crt_request_update_id_azp_crt_request_update",
			data: "lbl_azp_crt_request_update_id_azp_crt_request_update",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Id_ICS",
			id: "lbl_azp_crt_request_update_t_identification",
			data: "lbl_azp_crt_request_update_t_identification",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Nombre",
			id: "lbl_azp_crt_request_update_t_full_name",
			data: "lbl_azp_crt_request_update_t_full_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Matricula",
			id: "lbl_azp_crt_request_update_t_plaque_enrollment",
			data: "lbl_azp_crt_request_update_t_plaque_enrollment",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Ciudad",
			id: "lbl_azp_crt_request_update_t_city",
			data: "lbl_azp_crt_request_update_t_city",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Solicitante",
			id: "lbl_azp_crt_request_update_t_applicant_entity",
			data: "lbl_azp_crt_request_update_t_applicant_entity",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Radicado",
			id: "lbl_azp_crt_request_update_t_request_nro",
			data: "lbl_azp_crt_request_update_t_request_nro",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_table_2').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "table/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		//altEditor: true,
		// Combinar valores en las demas celdas
		//autoFill: true,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: true,
		// Movilizar columnas en la tabla
		//colReorder: true,
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
		//select: 'single',
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
		buttons: [],
		columnDefs: [],
	});
};

function modal_update() {
	$('#div_up_observation_other').addClass('d-none');
	$('#div_up_observation_value').addClass('d-none');
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
					document.querySelector("#field_up_id").value = objData.data.lbl_azp_crt_request_data_id_azp_crt_request_data;
					document.querySelector("#field_up_description").value = objData.data.lbl_azp_crt_request_data_m_description;
					document.querySelector("#field_up_state").value = objData.data.lbl_azp_crt_request_data_m_status;
					document.querySelector("#field_up_applicant_code").value = objData.data.lbl_azp_crt_request_data_t_applicant_code;
					document.querySelector("#field_up_applicant_entity").value = objData.data.lbl_azp_crt_request_data_t_applicant_entity;
					document.querySelector("#field_up_bilable").value = objData.data.lbl_azp_crt_request_data_t_bilable;
					//document.querySelector("#field_up_certificate_type").value = objData.data.lbl_azp_crt_request_data_t_certificate_type;
					//document.querySelector("#field_up_city").value = objData.data.lbl_azp_crt_request_data_t_city;
					//document.querySelector("#field_up_client_code").value = objData.data.lbl_azp_crt_request_data_t_client_code;
					//document.querySelector("#field_up_client_name").value = objData.data.lbl_azp_crt_request_data_t_client_name;
					document.querySelector("#field_up_entity_dispatcher").value = objData.data.lbl_azp_crt_request_data_t_entity_dispatcher;
					document.querySelector("#field_up_full_name").value = objData.data.lbl_azp_crt_request_data_t_full_name;
					document.querySelector("#field_up_identification").value = objData.data.lbl_azp_crt_request_data_t_identification;
					document.querySelector("#field_up_nro_oblitation").value = objData.data.lbl_azp_crt_request_data_t_nro_oblitation;
					document.querySelector("#field_up_observation").value = objData.data.lbl_azp_crt_request_data_t_observation;
					document.querySelector("#field_up_plaque_enrollment").value = objData.data.lbl_azp_crt_request_data_t_plaque_enrollment;
					document.querySelector("#field_up_process").value = objData.data.lbl_azp_crt_request_data_t_process;
					document.querySelector("#field_up_provider_class").value = objData.data.lbl_azp_crt_request_data_t_provider_class;
					document.querySelector("#field_up_provider_name").value = objData.data.lbl_azp_crt_request_data_t_provider_name;
					document.querySelector("#field_up_refundable").value = objData.data.lbl_azp_crt_request_data_t_refundable;
					document.querySelector("#field_up_request_date").value = objData.data.lbl_azp_crt_request_data_t_request_date;
					document.querySelector("#field_up_request_id").value = objData.data.lbl_azp_crt_request_data_t_request_id;
					document.querySelector("#field_up_request_nro").value = objData.data.lbl_azp_crt_request_data_t_request_nro;
					document.querySelector("#field_up_send_city").value = objData.data.lbl_azp_crt_request_data_t_send_city;
					document.querySelector("#field_up_crt_city").value = objData.data.lbl_azp_crt_request_data_v_id_azp_crt_city;
					document.querySelector("#field_up_crt_client").value = objData.data.lbl_azp_crt_request_data_v_id_azp_crt_client;
					document.querySelector("#field_up_crt_observation_type").value = objData.data.lbl_azp_crt_request_data_v_id_azp_crt_observation_type;
					document.querySelector("#field_up_crt_request_type").value = objData.data.lbl_azp_crt_request_data_v_id_azp_crt_request_type;
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

function modal_state() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_state').removeClass('alert-danger');
	$('#form_ajax_state').removeClass('alert-success');
	$('#form_ajax_state').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_state').addClass('alert-warning');
	$("#form_ajax_state").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_state').removeClass('hide');
	$('#form_ajax_state').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-state').modal('hide');
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
			url : "api/azp_crt_request_data/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_state').removeClass('alert');
						$('#form_ajax_state').addClass('hide');
						$('#form_ajax_state').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-state').modal('show');
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_state').html(error_icon + obj.message);
					$("#form_ajax_state").removeClass('alert-warning');
					$("#form_ajax_state").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_state').addClass('alert-danger');
				$("#form_ajax_state").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_state').removeClass('hide');
			}
		});
	}
};

function event_state() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_state').removeClass('alert-danger');
	$('#form_ajax_state').removeClass('alert-success');
	$('#form_ajax_state').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_state').addClass('alert-warning');
	$("#form_ajax_state").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_state').removeClass('hide');
	$('#form_ajax_state').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-state').modal('hide');
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
						$('#form_ajax_state').removeClass('alert');
						$('#form_ajax_state').addClass('hide');
						$('#form_ajax_state').html('');
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
					$('#modal-id-state').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_crt_request_data/state",
						data : $('#form_state').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_state').html(success_icon + obj.message);
								$("#form_ajax_state").removeClass('alert-warning');
								$("#form_ajax_state").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_state").reset();
								// Configuracion de la ventana modal
								$('#modal-id-state').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_state').removeClass('alert');
									$('#form_ajax_state').addClass('hide');
									$('#form_ajax_state').html('');
								}, 0);
								// Desmarcar el checkbox de seleccionar todos
								$('#field_ck_checkbox_all_read').prop('checked', false);
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
								$('#modal-id-state').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_state').html(error_icon + obj.message);
								$("#form_ajax_state").removeClass('alert-warning');
								$("#form_ajax_state").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_state').addClass('alert-danger');
							$("#form_ajax_state").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_state').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_plaque() {
	$('#modal-id-plaque').modal('show');
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_crt_request_data_id_azp_crt_request_data",
			data: "lbl_azp_crt_request_data_id_azp_crt_request_data",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "No Solicitud",
			id: "lbl_azp_crt_request_data_t_request_nro",
			data: "lbl_azp_crt_request_data_t_request_nro",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "No Cedula",
			id: "lbl_azp_crt_request_data_t_identification",
			data: "lbl_azp_crt_request_data_t_identification",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Banco",
			id: "lbl_azp_crt_bank_t_name",
			data: "lbl_azp_crt_bank_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Fecha Solicitud",
			id: "lbl_azp_crt_request_data_t_request_date",
			data: "lbl_azp_crt_request_data_t_request_date",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Placa-Matricula",
			id: "lbl_azp_crt_request_data_t_plaque_enrollment",
			data: "lbl_azp_crt_request_data_t_plaque_enrollment",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_plaque').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "plaque/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		//altEditor: true,
		// Combinar valores en las demas celdas
		//autoFill: true,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: true,
		// Movilizar columnas en la tabla
		//colReorder: true,
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
		searching: false,
		// Selccionar varias filas de registro
		//select: 'single',
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
				title: 'Placas_' + var_date,
				extend: 'excelHtml5',
				text: '<i class="far fa-file-excel"></i>',
				titleAttr: 'Excel',
				className: 'btn-sm btn-outline-success',
				attr: {
					'id': 'change_btn_excel',
					'name': 'change_btn_excel',
				},
				customize:function (xlsx) { 
					var sheet = xlsx.xl.worksheets['sheet1.xml'];
					$('row c[r^="A"]', sheet).attr('s', '52');
					$('row c[r^="B"]', sheet).attr('s', '52');
					$('row c[r^="C"]', sheet).attr('s', '52');
					$('row c[r^="D"]', sheet).attr('s', '52');
					//$('row c[r^="E"]', sheet).attr('s', '52');

					$('row c[r=A2]', sheet).attr('s', '2');
					$('row c[r=B2]', sheet).attr('s', '2');
					$('row c[r=C2]', sheet).attr('s', '2');
					$('row c[r=D2]', sheet).attr('s', '2');
					$('row c[r=E2]', sheet).attr('s', '2');

					$('row c[r=A1]', sheet).attr('s', '51');
				},
			},
			{
				title: 'Placas_' + var_date,
				extend: 'csvHtml5',
				text: '<i class="far fa-file-csv"></i>',
				titleAttr: 'CSV',
				className: 'btn-sm btn-outline-info',
				attr: {
					'id': 'change_btn_csv',
					'name': 'change_btn_csv',
				},
			},
		],
		columnDefs: [],
	});
};

function event_alert_certificate() {
	$('#modal-id-alert_certificate').modal('show');
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_crt_request_update_v_id_azp_crt_request_data",
			data: "lbl_azp_crt_request_update_v_id_azp_crt_request_data",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "No Solicitud",
			id: "lbl_azp_crt_request_update_t_request_nro",
			data: "lbl_azp_crt_request_update_t_request_nro",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "No Cedula",
			id: "lbl_azp_crt_request_update_t_identification",
			data: "lbl_azp_crt_request_update_t_identification",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_alert_certificate').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "calertcertificate/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		//altEditor: true,
		// Combinar valores en las demas celdas
		//autoFill: true,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: true,
		// Movilizar columnas en la tabla
		//colReorder: true,
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
		searching: false,
		// Selccionar varias filas de registro
		//select: 'single',
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
		],
		columnDefs: [],
	});
};

function event_alert_receipt() {
	$('#modal-id-alert_receipt').modal('show');
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_crt_request_update_v_id_azp_crt_request_data",
			data: "lbl_azp_crt_request_update_v_id_azp_crt_request_data",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "No Solicitud",
			id: "lbl_azp_crt_request_update_t_request_nro",
			data: "lbl_azp_crt_request_update_t_request_nro",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "No Cedula",
			id: "lbl_azp_crt_request_update_t_identification",
			data: "lbl_azp_crt_request_update_t_identification",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_alert_receipt').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "calertreceipt/",
		// Cargar columnas del encabezado
		columns: columnSet,
		// Opciones para crear, editar, borrar y sincronizar
		//altEditor: true,
		// Combinar valores en las demas celdas
		//autoFill: true,
		// Control de funciones Manejo inteligente del ancho de columna
		autoWidth: true,
		// Movilizar columnas en la tabla
		//colReorder: true,
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
		searching: false,
		// Selccionar varias filas de registro
		//select: 'single',
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
		],
		columnDefs: [],
	});
};

function modal_drop() {
	$('#modal-id-drop').modal('show');
};

function data_bank() {
	$('#field_dp_base').html('Seleccionar');
	//$('#field_dp_certificate').html('Seleccionar');
	document.getElementById('field_dp_base').value = '';
	//document.getElementById('field_dp_certificate').value = '';
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_dp_bank').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + 'api' + var_controller + "dpbank/" + idtbl + "/";
		$.ajax({
			type: 'POST',
			url: ajaxurl,
		}).done(function(argument) {
			$('#field_dp_base').html(argument);
		});
	}
};

function data_base() {
	$('#field_dp_certificate').html('Seleccionar');
	document.getElementById('field_dp_certificate').value = '';
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_dp_base').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var ajaxurl = var_url + 'api' + var_controller + "dpbase/" + idtbl + "/";
		$.ajax({
			type: 'POST',
			url: ajaxurl,
		}).done(function(argument) {
			$('#field_dp_certificate').html(argument);
		});
	}
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
					$('#modal-id-drop').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_crt_request_data/drop",
						data : $('#form_drop').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_drop').html(success_icon + obj.message);
								$("#form_ajax_drop").removeClass('alert-warning');
								$("#form_ajax_drop").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_drop").reset();
								// Configuracion de la ventana modal
								$('#modal-id-drop').modal('show');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								/*setTimeout(function() {
									$('#form_ajax_drop').removeClass('alert');
									$('#form_ajax_drop').addClass('hide');
									$('#form_ajax_drop').html('');
								}, 0)*/;
								/*// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz removido exitosamente el registro.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});*/
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

function event_confirm_1() {
	$('#modal-id-confirm_1').modal('show');

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
			id: "lbl_azp_crt_third_parties_id_azp_crt_third_parties",
			data: "lbl_azp_crt_third_parties_id_azp_crt_third_parties",
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
			id: "lbl_azp_crt_third_parties_m_date_created",
			data: "lbl_azp_crt_third_parties_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_crt_third_parties_m_date_modified",
			data: "lbl_azp_crt_third_parties_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_crt_third_parties_m_description",
			data: "lbl_azp_crt_third_parties_m_description",
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
			id: "lbl_azp_crt_third_parties_t_contact",
			data: "lbl_azp_crt_third_parties_t_contact",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_crt_third_parties_t_email",
			data: "lbl_azp_crt_third_parties_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable_main = $('#dt_confirm_1_main').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "confirmonemain/?field_id=" + value_checked_tp,
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
			id: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
			data: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
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
			id: "lbl_azp_crt_email_copy_m_date_created",
			data: "lbl_azp_crt_email_copy_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_crt_email_copy_m_date_modified",
			data: "lbl_azp_crt_email_copy_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_crt_email_copy_m_description",
			data: "lbl_azp_crt_email_copy_m_description",
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
			id: "lbl_azp_crt_email_copy_t_names",
			data: "lbl_azp_crt_email_copy_t_names",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Apellidos",
			id: "lbl_azp_crt_email_copy_t_surnames",
			data: "lbl_azp_crt_email_copy_t_surnames",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_crt_email_copy_t_email",
			data: "lbl_azp_crt_email_copy_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable_intern = $('#dt_confirm_1_intern').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "confirmoneintern/?field_id=" + value_checked_us,
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

function event_confirm_2() {
	$('#modal-id-confirm_2').modal('show');

	var idtbl = document.getElementById('field_em_2_email').value;
	
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

	// Obtener inputs seleccionados de la tabla
	var value_table_tp = document.querySelectorAll('.dt_table_client');
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

	console.log(value_checked_tp);
	console.log(value_checked_us);

	var columnSet_main = [
		{
			title: "Id",
			id: "lbl_azp_crt_client_id_azp_crt_client",
			data: "lbl_azp_crt_client_id_azp_crt_client",
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
			id: "lbl_azp_crt_client_m_date_created",
			data: "lbl_azp_crt_client_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_crt_client_m_date_modified",
			data: "lbl_azp_crt_client_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_crt_client_m_description",
			data: "lbl_azp_crt_client_m_description",
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
			id: "lbl_azp_crt_client_t_person",
			data: "lbl_azp_crt_client_t_person",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_crt_client_t_email",
			data: "lbl_azp_crt_client_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable_main = $('#dt_confirm_2_main').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "confirmtwomain/?field_id=" + idtbl,
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

	var columnSet_copy = [
		{
			title: "Id",
			id: "lbl_azp_crt_client_id_azp_crt_client",
			data: "lbl_azp_crt_client_id_azp_crt_client",
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
			id: "lbl_azp_crt_client_m_date_created",
			data: "lbl_azp_crt_client_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_crt_client_m_date_modified",
			data: "lbl_azp_crt_client_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_crt_client_m_description",
			data: "lbl_azp_crt_client_m_description",
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
			id: "lbl_azp_crt_client_t_person",
			data: "lbl_azp_crt_client_t_person",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_crt_client_t_email",
			data: "lbl_azp_crt_client_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable_copy = $('#dt_confirm_2_copy').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "confirmtwocopy/?field_id=" + value_checked_tp,
		// Cargar columnas del encabezado
		columns: columnSet_copy,
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
			id: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
			data: "lbl_azp_crt_email_copy_id_azp_crt_email_copy",
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
			id: "lbl_azp_crt_email_copy_m_date_created",
			data: "lbl_azp_crt_email_copy_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_crt_email_copy_m_date_modified",
			data: "lbl_azp_crt_email_copy_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_crt_email_copy_m_description",
			data: "lbl_azp_crt_email_copy_m_description",
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
			id: "lbl_azp_crt_email_copy_t_names",
			data: "lbl_azp_crt_email_copy_t_names",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Apellidos",
			id: "lbl_azp_crt_email_copy_t_surnames",
			data: "lbl_azp_crt_email_copy_t_surnames",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Correo Electronico",
			id: "lbl_azp_crt_email_copy_t_email",
			data: "lbl_azp_crt_email_copy_t_email",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable_intern = $('#dt_confirm_2_intern').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			//+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
			//+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "confirmtwointern/?field_id=" + value_checked_us,
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

function modal_my_inform() { window.location.href = 'dashboard/crtclient/'; };

function modal_client_inform() {
	document.getElementById('field_cl_im_data').value = '';
	document.getElementById('field_cl_im_base').value = '';
	document.getElementById('field_cl_im_search').value = '';
	$('#modal-id-client_inform').modal('show');
	var client =  document.getElementById('field_cl_im_data').value;
	event_client_default(client);
}

function event_client_default(vclient) {
	var ajaxurl = var_url + 'api' + var_controller + "imgbase/" + vclient + '/';
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_cl_im_base').html(argument); });
};

function event_client_inform() {
	var client =  document.getElementById('field_cl_im_data').value;
	var ajaxurl = var_url + 'api' + var_controller + "imgbase/" + client + '/';
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_cl_im_base').html(argument); });
};

function event_client_search() {
	var client = document.getElementById('field_cl_im_data').value;
	var search = document.getElementById('field_cl_im_search').value;
	if (client == '') {
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No has seleccionado ningun cliente.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	} else {
		var ajaxurl = var_url + 'api' + var_controller + "imgbase/" + client + '/?field_rq=' + search;
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_cl_im_base').html(argument); });
	}
};

function event_client_trash() {
	var client = document.getElementById('field_cl_im_data').value;
	document.getElementById('field_cl_im_search').value = '';
	var ajaxurl = var_url + 'api' + var_controller + "imgbase/" + client + '/';
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_cl_im_base').html(argument); });
};

function event_client_data() {
	var vbase =  document.getElementById('field_cl_im_base').value;
	if (vbase == '') {
		initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
		bootbox.alert({
			size: "small",
			title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-500'>Error!</span>",
			message: "<span><strong>Lo sentimos:</strong> No has seleccionado ninguna base.</span>",
			centerVertical: true,
			className: "modal-alert",
			closeButton: false,
		});
	} else {
		$('#modal-id-client_data').modal('show');
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_cl_im_data').value;
		document.getElementById('field_client_up_id').value = idtbl;
		document.getElementById('field_client_up_bs').value = vbase;
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_crt_information_id_azp_crt_information",
				data: "lbl_azp_crt_information_id_azp_crt_information",
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
				id: "lbl_azp_crt_information_m_date_created",
				data: "lbl_azp_crt_information_m_date_created",
				type: "text",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azp_crt_information_m_date_modified",
				data: "lbl_azp_crt_information_m_date_modified",
				type: "text",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azp_crt_information_m_description",
				data: "lbl_azp_crt_information_m_description",
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
				title: "Nombre",
				id: "lbl_azp_crt_information_w_name",
				data: "lbl_azp_crt_information_w_name",
				type: "text",
				className: "text-dark",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_client_inform').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "inforead/" + idtbl + "/?fd_base=" + vbase,
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
			lengthMenu: [[10, 20, 30, 40, 50, -1,], [10, 20, 30, 40, 50, 'Todo',]],
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
					text: '<i class="far fa-upload"></i>',
					titleAttr: 'Archivo',
					className: 'btn-sm btn-outline-success',
					attr: {
						'id': 'table_btn_client_upload',
						'name': 'table_btn_client_upload',
						'data-toggle': 'modal',
						'data-target': '.modal-div-client_upload',
					},
				},
				{
					text: '<i class="far fa-trash"></i>',
					titleAttr: 'Remover',
					className: 'btn-sm btn-outline-warning',
					attr: {
						'id': 'table_btn_client_remove',
						'name': 'table_btn_client_remove',
						'onclick': 'modal_client_remove();',
					},
				},
				{
					text: '<i class="far fa-download"></i>',
					titleAttr: 'Descargar',
					className: 'btn-sm btn-outline-danger',
					attr: {
						'id': 'table_btn_client_download',
						'name': 'table_btn_client_download',
						'onclick': 'event_client_download();',
					},
				},
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
	}
};

function event_client_remove() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_client_inform').DataTable();
	//vtable.column(0).visible(true);
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_client_remove').removeClass('alert-danger');
	$('#form_ajax_client_remove').removeClass('alert-success');
	$('#form_ajax_client_remove').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_client_remove').addClass('alert-warning');
	$("#form_ajax_client_remove").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_client_remove').removeClass('hide');
	$('#form_ajax_client_remove').addClass('alert');
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
						$('#form_ajax_client_remove').removeClass('alert');
						$('#form_ajax_client_remove').addClass('hide');
						$('#form_ajax_client_remove').html('');
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
					$('#modal-id-client_remove').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_crt_request/client_remove",
						data : $('#form_client_remove').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Mostrar la columna especificada de la tabla
								//var vtable = $('#dt_client_inform').DataTable();
								//vtable.column(0).visible(false);
								// Recargar la tabla con nueva informacion
								if ($("#dt_client_inform").length) { $('#dt_client_inform').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_client_remove').html(success_icon + obj.message);
								$("#form_ajax_client_remove").removeClass('alert-warning');
								$("#form_ajax_client_remove").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-client_remove').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_client_remove').removeClass('alert');
									$('#form_ajax_client_remove').addClass('hide');
									$('#form_ajax_client_remove').html('');
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
								$('#modal-id-client_remove').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_client_remove').html(error_icon + obj.message);
								$("#form_ajax_client_remove").removeClass('alert-warning');
								$("#form_ajax_client_remove").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_client_remove').addClass('alert-danger');
							$("#form_ajax_client_remove").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_client_remove').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function modal_client_remove() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_client_inform').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_client_inform tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_client_inform').DataTable();
		vtable.column(0).visible(false);
		$('#modal-id-client_remove').modal('show');
		document.querySelector("#field_id_client_remove").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_client_inform').DataTable();
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

function event_client_upload() {
	var flcontrol = document.getElementById('field_client_up_id').value;
	var flbase = document.getElementById('field_client_up_bs').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_client_upload').removeClass('alert-danger');
	$('#form_ajax_client_upload').removeClass('alert-success');
	$('#form_ajax_client_upload').removeClass('alert-warning');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_client_upload').addClass('alert-warning');
	$("#form_ajax_client_upload").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_client_upload').removeClass('hide');
	$('#form_ajax_client_upload').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-client_upload').modal('hide');
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
						$('#form_ajax_client_upload').removeClass('alert');
						$('#form_ajax_client_upload').addClass('hide');
						$('#form_ajax_client_upload').html('');
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
					$('#modal-id-client_upload').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var load = $("#field_client_up_fl")[0].files.length;
					var input = document.getElementById('field_client_up_fl');
					var path = input.value;
					var extensions = /(.xls|.xlsx|.csv|.pdf|.zip)$/i;
					if (!extensions.exec(path)) {
						$('#form_ajax_client_upload').removeClass('alert-danger');
						$('#form_ajax_client_upload').removeClass('alert-success');
						$('#form_ajax_client_upload').removeClass('alert-warning');
						$('#form_ajax_client_upload').addClass('alert-danger');
						$("#form_ajax_client_upload").html(error_icon  + 'Error: El campo de archivo solo acepta formatos .xls|.xlsx|.csv|.pdf|.zip');
						$('#form_ajax_client_upload').removeClass('hide');
						document.getElementById('field_client_up_fl').value = '';
					} else {
						$.ajax({
							type: "POST",
							url : "api/azp_crt_request/client_upload",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_client_upload')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_client_inform").length) { $('#dt_client_inform').DataTable().ajax.reload(); }
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_client_upload').html(success_icon + obj.message);
									$("#form_ajax_client_upload").removeClass('alert-warning');
									$("#form_ajax_client_upload").addClass('alert-success');
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_client_upload').reset();
									document.getElementById('field_client_up_id').value = flcontrol;
									document.getElementById('field_client_up_bs').value = flbase;
									// Configuracion de la ventana modal
									$('#modal-id-client_upload').modal('hide');
									// Añadir la clase al contenedor del archivo
									//$('#id_ld_embed').addClass('d-none');
									// Mensaje a mostrar una vez terminada la accion
									setTimeout(function() {
										$('#form_ajax_client_upload').removeClass('alert');
										$('#form_ajax_client_upload').addClass('hide');
										$('#form_ajax_client_upload').html('');
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
									$('#modal-id-client_upload').modal('show');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_client_upload').html(error_icon + obj.message);
									$("#form_ajax_client_upload").removeClass('alert-warning');
									$("#form_ajax_client_upload").addClass('alert-danger');
								}
							},
							error: function() {
								$('#form_ajax_client_upload').addClass('alert-danger');
								$("#form_ajax_client_upload").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_client_upload').removeClass('hide');
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

function event_client_download() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_client_inform').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_client_inform tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "infodetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_crt_information_w_document;
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
						var vtable = $('#dt_client_inform').DataTable();
						vtable.column(0).visible(false);
					} else {
						// Mostrar la columna especificada de la tabla
						var vtable = $('#dt_client_inform').DataTable();
						vtable.column(0).visible(false);
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_crt_information_w_document;
						var wfolder = objData.data.lbl_azp_crt_information_w_folder;
						var wname = objData.data.lbl_azp_crt_information_w_name;
						var wroute = objData.data.lbl_azp_crt_information_w_route;
						console.log(wroute + wfolder + wdocument);
						var a = $("<a>").attr("href", var_url + wroute.replace('../','') + wfolder + wdocument).attr("download", wname).appendTo("body");
						a[0].click();
						a.remove();
					}
				} else {
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_client_inform').DataTable();
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
		var vtable = $('#dt_client_inform').DataTable();
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

function modal_climages() {
	$('#modal-id-images').modal('show');
	var client =  document.getElementById('field_im_crt_client').value;
	event_clgimage(client);
};

function event_clgimage(vclient) {
	var request =  document.getElementById('field_im_request').value;
	var ajaxurl = var_url + 'api' + var_controller + "imgclbase/" + vclient + '/?field_rq=' + request;
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_im_crt_base').html(argument); });
};

function event_climages() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_images').removeClass('alert-danger');
	$('#form_ajax_images').removeClass('alert-success');
	$('#form_ajax_images').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_images').addClass('alert-warning');
	$("#form_ajax_images").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_images').removeClass('hide');
	$('#form_ajax_images').addClass('alert');

	var idsol = document.getElementById('field_im_request').value;
	var client = document.getElementById('field_im_crt_client').value;
	var vvbase = document.getElementById('field_im_crt_base').value;

	if (client == '' && vvbase == '') {
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_images').removeClass('alert-danger');
		$('#form_ajax_images').removeClass('alert-success');
		$('#form_ajax_images').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_images').addClass('alert-danger');
		$("#form_ajax_images").html(error_icon  + '<b>Error:</b> El campo de base es obligatorio.');
		$('#form_ajax_images').removeClass('hide');
		$('#form_ajax_images').addClass('alert');
	} else {
		var ajaxurl = var_url + 'api' + var_controller + "imgdownloadcl/" + client + "/?field_base=" + vvbase + "&field_rq=" + idsol;
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(count) {
			if (count == 0) {
				// Añadir y remover las clases incorporadas de las hojas de estilo
				$('#form_ajax_images').removeClass('alert-danger');
				$('#form_ajax_images').removeClass('alert-success');
				$('#form_ajax_images').removeClass('alert-warning');
				// Añadir y remover las clases incorporadas de las hojas de estilo
				$('#form_ajax_images').addClass('alert-danger');
				$("#form_ajax_images").html(error_icon  + '<b>Error:</b> No se encontraron imagenes cargadas a comprimir.');
				$('#form_ajax_images').removeClass('hide');
				$('#form_ajax_images').addClass('alert');
			} else {
				var xlsxurl = var_url + var_controller + "xlsxidentificationcl/" + client + "/?field_base=" + vvbase + "&field_rq=" + idsol
				$.ajax({ type: 'POST', url: xlsxurl, }).done(function(dataxlsx) {
					var ajaxurl = var_url + var_controller + "zipimagescl/" + client + "/?field_base=" + vvbase + "&field_xlsx=" + dataxlsx + "&field_rq=" + idsol
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						var vdownload = $("<a>").attr("href", argument).attr("download", 'Z_' + var_sdate + '_' + var_shourn).appendTo("body");
						vdownload[0].click(); vdownload.remove();
						// Añadir y remover las clases incorporadas de las hojas de estilo
						$('#form_ajax_images').removeClass('alert-danger');
						$('#form_ajax_images').removeClass('alert-success');
						$('#form_ajax_images').removeClass('alert-warning');
						// Añadir y remover las clases incorporadas de las hojas de estilo
						$('#form_ajax_images').addClass('alert-success');
						$("#form_ajax_images").html(success_icon + '<b>Exito:</b> Archivo comprimido correctamente.');
						$('#form_ajax_images').removeClass('hide');
						$('#form_ajax_images').addClass('alert');
						// Añadir y remover las clases incorporadas de las hojas de estilo
						setTimeout(function() {
							$('#form_ajax_images').removeClass('alert');
							$('#form_ajax_images').addClass('hide');
							$('#form_ajax_images').html('');
						}, 5000);
					});
				});

				
			}
		});
	}
}