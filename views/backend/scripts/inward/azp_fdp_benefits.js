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
				id: "lbl_azs_fdp_benefits_id_azs_fdp_benefits",
				data: "lbl_azs_fdp_benefits_id_azs_fdp_benefits",
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
				id: "lbl_azs_fdp_benefits_m_date_created",
				data: "lbl_azs_fdp_benefits_m_date_created",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azs_fdp_benefits_m_date_modified",
				data: "lbl_azs_fdp_benefits_m_date_modified",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azs_fdp_benefits_m_description",
				data: "lbl_azs_fdp_benefits_m_description",
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
			/*{
				title: "Año Prestacion",
				id: "lbl_azs_fdp_benefits_t_ano_prestacion",
				data: "lbl_azs_fdp_benefits_t_ano_prestacion",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			{
				title: "Radicado Ipe",
				id: "lbl_azs_fdp_benefits_t_radicado_ipe",
				data: "lbl_azs_fdp_benefits_t_radicado_ipe",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nvez",
				id: "lbl_azs_fdp_benefits_t_nvez",
				data: "lbl_azs_fdp_benefits_t_nvez",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Ipe+Nvez",
				id: "lbl_azs_fdp_benefits_t_ipe_nvez",
				data: "lbl_azs_fdp_benefits_t_ipe_nvez",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Documento Identidad",
				id: "lbl_azs_fdp_benefits_t_documento_identidad",
				data: "lbl_azs_fdp_benefits_t_documento_identidad",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Docente",
				id: "lbl_azs_fdp_benefits_t_docente",
				data: "lbl_azs_fdp_benefits_t_docente",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Radicado Docente",
				id: "lbl_azs_fdp_benefits_t_fecha_radicado_docente",
				data: "lbl_azs_fdp_benefits_t_fecha_radicado_docente",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			/*{
				title: "Prestacion Fomag1",
				id: "lbl_azs_fdp_benefits_t_prestacion_fomag1",
				data: "lbl_azs_fdp_benefits_t_prestacion_fomag1",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Tipo De Solicitud",
				id: "lbl_azs_fdp_benefits_t_tipo_de_solicitud",
				data: "lbl_azs_fdp_benefits_t_tipo_de_solicitud",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Estado Prestación Fomag 1",
				id: "lbl_azs_fdp_benefits_t_estado_prestacion_fomag_1",
				data: "lbl_azs_fdp_benefits_t_estado_prestacion_fomag_1",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Estado Tramite Fomag 1",
				id: "lbl_azs_fdp_benefits_t_estado_tramite_fomag_1",
				data: "lbl_azs_fdp_benefits_t_estado_tramite_fomag_1",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Fecha De Tramite Fomag 1",
				id: "lbl_azs_fdp_benefits_t_fecha_de_tramite_fomag_1",
				data: "lbl_azs_fdp_benefits_t_fecha_de_tramite_fomag_1",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Observaciones Sustanciador",
				id: "lbl_azs_fdp_benefits_t_observaciones_sustanciador",
				data: "lbl_azs_fdp_benefits_t_observaciones_sustanciador",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Fecha De Estudio Fomag 2",
				id: "lbl_azs_fdp_benefits_t_fecha_de_estudio_fomag_2",
				data: "lbl_azs_fdp_benefits_t_fecha_de_estudio_fomag_2",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Estado Fomag 2",
				id: "lbl_azs_fdp_benefits_t_estado_fomag_2",
				data: "lbl_azs_fdp_benefits_t_estado_fomag_2",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Bandeja On Base",
				id: "lbl_azs_fdp_benefits_t_bandeja_on_base",
				data: "lbl_azs_fdp_benefits_t_bandeja_on_base",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Estado On Base",
				id: "lbl_azs_fdp_benefits_t_estado_on_base",
				data: "lbl_azs_fdp_benefits_t_estado_on_base",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Fecha De Pago Fomag 1",
				id: "lbl_azs_fdp_benefits_t_fecha_de_pago_fomag_1",
				data: "lbl_azs_fdp_benefits_t_fecha_de_pago_fomag_1",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Informacion Al Consumidor Financiero",
				id: "lbl_azs_fdp_benefits_t_informacion_al_consumidor_financiero",
				data: "lbl_azs_fdp_benefits_t_informacion_al_consumidor_financiero",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Fecha De Pago",
				id: "lbl_azs_fdp_benefits_t_fecha_de_pago",
				data: "lbl_azs_fdp_benefits_t_fecha_de_pago",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Modalidad",
				id: "lbl_azs_fdp_benefits_t_modalidad",
				data: "lbl_azs_fdp_benefits_t_modalidad",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Banco",
				id: "lbl_azs_fdp_benefits_t_banco",
				data: "lbl_azs_fdp_benefits_t_banco",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Fecha Maxima De Pago",
				id: "lbl_azs_fdp_benefits_t_fecha_maxima_de_pago",
				data: "lbl_azs_fdp_benefits_t_fecha_maxima_de_pago",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},*/
			/*{
				title: "Estado Global",
				id: "lbl_azs_fdp_benefits_t_estado_global",
				data: "lbl_azs_fdp_benefits_t_estado_global",
				type: "readonly",
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
						url : "api/azp_fdp_benefits/create",
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
						url : "api/azp_fdp_benefits/delete",
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
					document.querySelector("#lbl_azp_fdp_benefits_id_azp_fdp_benefits").innerHTML = objData.data.lbl_azp_fdp_benefits_id_azp_fdp_benefits;
					document.querySelector("#lbl_azp_user_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_user_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_fdp_benefits_m_date_created").innerHTML = objData.data.lbl_azp_fdp_benefits_m_date_created;
					document.querySelector("#lbl_azp_fdp_benefits_m_date_modified").innerHTML = objData.data.lbl_azp_fdp_benefits_m_date_modified;
					document.querySelector("#lbl_azp_fdp_benefits_m_description").innerHTML = objData.data.lbl_azp_fdp_benefits_m_description;
					document.querySelector("#lbl_azp_sys_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;

					document.querySelector("#lbl_azp_fdp_benefits_t_docente").innerHTML = objData.data.lbl_azp_fdp_benefits_t_docente;
					document.querySelector("#lbl_azp_fdp_benefits_t_documento_identidad").innerHTML = objData.data.lbl_azp_fdp_benefits_t_documento_identidad;
					document.querySelector("#lbl_azp_fdp_benefits_t_radicado_ipe").innerHTML = objData.data.lbl_azp_fdp_benefits_t_radicado_ipe;
					document.querySelector("#lbl_azp_fdp_benefits_t_nvez").innerHTML = objData.data.lbl_azp_fdp_benefits_t_nvez;
					document.querySelector("#lbl_azp_fdp_benefits_t_ipe_nvez").innerHTML = objData.data.lbl_azp_fdp_benefits_t_ipe_nvez;
					document.querySelector("#lbl_azp_fdp_benefits_t_ano_prestacion").innerHTML = objData.data.lbl_azp_fdp_benefits_t_ano_prestacion;
					document.querySelector("#lbl_azp_fdp_benefits_t_fecha_radicado_docente").innerHTML = objData.data.lbl_azp_fdp_benefits_t_fecha_radicado_docente;
					document.querySelector("#lbl_azp_fdp_benefits_t_prestacion_fomag1").innerHTML = objData.data.lbl_azp_fdp_benefits_t_prestacion_fomag1;
					document.querySelector("#lbl_azp_fdp_benefits_t_tipo_de_solicitud").innerHTML = objData.data.lbl_azp_fdp_benefits_t_tipo_de_solicitud;
					document.querySelector("#lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1").innerHTML = objData.data.lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1;
					document.querySelector("#lbl_azp_fdp_benefits_t_estado_tramite_fomag_1").innerHTML = objData.data.lbl_azp_fdp_benefits_t_estado_tramite_fomag_1;
					document.querySelector("#lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1").innerHTML = objData.data.lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1;
					document.querySelector("#lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1").innerHTML = objData.data.lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1;
					document.querySelector("#lbl_azp_fdp_benefits_t_observaciones_sustanciador").innerHTML = objData.data.lbl_azp_fdp_benefits_t_observaciones_sustanciador;
					document.querySelector("#lbl_azp_fdp_benefits_t_estado_fomag_2").innerHTML = objData.data.lbl_azp_fdp_benefits_t_estado_fomag_2;
					document.querySelector("#lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2").innerHTML = objData.data.lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2;
					document.querySelector("#lbl_azp_fdp_benefits_t_estado_on_base").innerHTML = objData.data.lbl_azp_fdp_benefits_t_estado_on_base;
					document.querySelector("#lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero").innerHTML = objData.data.lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero;

					var ditbl = objData.data.lbl_azp_fdp_benefits_t_documento_identidad;

					var sequest = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
					var bjaxurl = var_url + 'api' + var_controller + "sxminner/" + ditbl + "/";
					sequest.open("GET", bjaxurl, true);
					sequest.send();
					sequest.onreadystatechange = function(){
						if (sequest.readyState == 4 && sequest.status == 200) {
							var pbjData = JSON.parse(sequest.responseText);
							if (pbjData.status) {
								document.querySelector("#lbl_azp_fdp_sxm_t_base").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_base;
								document.querySelector("#lbl_azp_fdp_sxm_t_remitente").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_remitente;
								document.querySelector("#lbl_azp_fdp_sxm_t_radicado_de_entrada").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_radicado_de_entrada;
								document.querySelector("#lbl_azp_fdp_sxm_t_fecha_radicado_de_entrada").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_fecha_radicado_de_entrada;
								document.querySelector("#lbl_azp_fdp_sxm_t_nombre_docente").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_nombre_docente;
								document.querySelector("#lbl_azp_fdp_sxm_t_ced_docente").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_ced_docente;
								document.querySelector("#lbl_azp_fdp_sxm_t_res").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_res;
								document.querySelector("#lbl_azp_fdp_sxm_t_fecha_resolucion").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_fecha_resolucion;
								document.querySelector("#lbl_azp_fdp_sxm_t_tipo_cesantia").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_tipo_cesantia;
								document.querySelector("#lbl_azp_fdp_sxm_t_nombre_de_apoderado").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_nombre_de_apoderado;
								document.querySelector("#lbl_azp_fdp_sxm_t_firma").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_firma;
								document.querySelector("#lbl_azp_fdp_sxm_t_resultado_estudio").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_resultado_estudio;
								document.querySelector("#lbl_azp_fdp_sxm_t_analisis_sustanciador_negadas").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_analisis_sustanciador_negadas;
								document.querySelector("#lbl_azp_fdp_sxm_t_medio_de_liquidacion").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_medio_de_liquidacion;
								document.querySelector("#lbl_azp_fdp_sxm_t_ocasion_del_pago").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_ocasion_del_pago;
								document.querySelector("#lbl_azp_fdp_sxm_t_fecha_de_actualizacion_dpe").innerHTML = pbjData.data.lbl_azp_fdp_sxm_t_fecha_de_actualizacion_dpe;
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
	var ajaxurl = var_url + var_controller + "import/";
	//var formData = new FormData(document.getElementById("form_import"));
	var formData = new FormData($("#form_import")[0]);
	var load_file = $("#field_file_excel")[0].files.length;
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
					var fileInput = document.getElementById('field_file_excel');
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
						if (!allowedExtensions.exec(filePath)){
							$("#form_ajax_import").removeClass('alert-warning');
							$('#form_ajax_import').addClass('alert-danger');
							$("#form_ajax_import").html(error_icon  + 'Error: El campo de archivo excel acepta solo el formato csv.');
							$('#form_ajax_import').removeClass('hide');
							// Configuracion de la ventana modal
							$('#modal-id-import').modal('show');
							fileInput.value = '';
						} else {
							/*var total_data = $('#total_data').text();
							var width = Math.round((data/total_data)*100);
							$('#process_data').text(data);
							$('.progress-bar').css('width', width + '%');
							//clear_timer = setInterval(get_import_data, 2000);
							if (width >= 100) {
								aler("guardado");
							}*/

							//var clear_timer;

							$.ajax({
								url: ajaxurl,
								type: "POST",
								datatype: "HTML",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,
								success: function(data) {
									//$('"total_data').text(data.total_line);
									$.ajax({
										type : "POST",
										url : "api/azp_fdp_benefits/extra_import",
										data : $('#form_import').serialize(),
										success : function(json) {
											var obj = jQuery.parseJSON(json);
											if (obj.success == 1) {
												// Recargar la tabla con nueva informacion
												if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
												if ($("#dt_sxm_read").length) { $('#dt_sxm_read').DataTable().ajax.reload(); }
												// Mensaje a mostrar una vez terminada la accion
												$('#form_ajax_import').html(success_icon + obj.message);
												$("#form_ajax_import").removeClass('alert-warning');
												$("#form_ajax_import").addClass('alert-success');
												// Dejar campos vacios sobre los elementos id del formulario
												document.querySelector("#form_import").reset();
												// Configuracion de la ventana modal
												$('#modal-id-import').modal('hide');
												// Añadir y remover las clases incorporadas de las hojas de estilo
												setTimeout(function() {
													$('#form_ajax_import').removeClass('alert');
													$('#form_ajax_import').addClass('hide');
													$('#form_ajax_import').html('');
												}, 0);
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
						url : "api/azp_fdp_benefits/remove",
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
						url : "api/azp_fdp_benefits/restore",
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

function event_sxm() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "sxmdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-sxm-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-sxm-detail').modal('show');
					document.querySelector("#lbl_azp_fdp_sxm_detail_id_azp_fdp_sxm").innerHTML = objData.data.lbl_azp_fdp_sxm_id_azp_fdp_sxm;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_fdp_sxm_detail_m_date_created").innerHTML = objData.data.lbl_azp_fdp_sxm_m_date_created;
					document.querySelector("#lbl_azp_fdp_sxm_detail_m_date_modified").innerHTML = objData.data.lbl_azp_fdp_sxm_m_date_modified;
					document.querySelector("#lbl_azp_fdp_sxm_detail_m_description").innerHTML = objData.data.lbl_azp_fdp_sxm_m_description;
					document.querySelector("#lbl_azp_fdp_sxm_detail_level_t_name").innerHTML = objData.data.lbl_azp_sys_level_t_name;
					document.querySelector("#lbl_azp_fdp_sxm_detail_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_base").innerHTML = objData.data.lbl_azp_fdp_sxm_t_base;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_remitente").innerHTML = objData.data.lbl_azp_fdp_sxm_t_remitente;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_radicado_de_entrada").innerHTML = objData.data.lbl_azp_fdp_sxm_t_radicado_de_entrada;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_fecha_radicado_de_entrada").innerHTML = objData.data.lbl_azp_fdp_sxm_t_fecha_radicado_de_entrada;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_nombre_docente").innerHTML = objData.data.lbl_azp_fdp_sxm_t_nombre_docente;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_ced_docente").innerHTML = objData.data.lbl_azp_fdp_sxm_t_ced_docente;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_res").innerHTML = objData.data.lbl_azp_fdp_sxm_t_res;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_fecha_resolucion").innerHTML = objData.data.lbl_azp_fdp_sxm_t_fecha_resolucion;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_tipo_cesantia").innerHTML = objData.data.lbl_azp_fdp_sxm_t_tipo_cesantia;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_nombre_de_apoderado").innerHTML = objData.data.lbl_azp_fdp_sxm_t_nombre_de_apoderado;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_firma").innerHTML = objData.data.lbl_azp_fdp_sxm_t_firma;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_resultado_estudio").innerHTML = objData.data.lbl_azp_fdp_sxm_t_resultado_estudio;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_analisis_sustanciador_negadas").innerHTML = objData.data.lbl_azp_fdp_sxm_t_analisis_sustanciador_negadas;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_medio_de_liquidacion").innerHTML = objData.data.lbl_azp_fdp_sxm_t_medio_de_liquidacion;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_ocasion_del_pago").innerHTML = objData.data.lbl_azp_fdp_sxm_t_ocasion_del_pago;
					document.querySelector("#lbl_azp_fdp_sxm_detail_t_fecha_de_actualizacion_dpe").innerHTML = objData.data.lbl_azp_fdp_sxm_t_fecha_de_actualizacion_dpe;
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
						url : "api/azp_fdp_benefits/update",
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

function modal_remove() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_read tr.selected td:first").html();
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

function modal_update() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_read tr.selected td:first").html();
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
					document.querySelector("#field_up_id").value = objData.data.lbl_azp_fdp_benefits_id_azp_fdp_benefits;
					document.querySelector("#field_up_description").value = objData.data.lbl_azp_fdp_benefits_m_description;
					//document.querySelector("#field_up_state").value = objData.data.lbl_azp_fdp_benefits_m_status;
					document.querySelector("#field_up_ano_prestacion").value = objData.data.lbl_azp_fdp_benefits_t_ano_prestacion;
					document.querySelector("#field_up_radicado_ipe").value = objData.data.lbl_azp_fdp_benefits_t_radicado_ipe;
					document.querySelector("#field_up_nvez").value = objData.data.lbl_azp_fdp_benefits_t_nvez;
					document.querySelector("#field_up_ipe_nvez").value = objData.data.lbl_azp_fdp_benefits_t_ipe_nvez;
					document.querySelector("#field_up_documento_identidad").value = objData.data.lbl_azp_fdp_benefits_t_documento_identidad;
					document.querySelector("#field_up_docente").value = objData.data.lbl_azp_fdp_benefits_t_docente;
					document.querySelector("#field_up_fecha_radicado_docente").value = objData.data.lbl_azp_fdp_benefits_t_fecha_radicado_docente;
					document.querySelector("#field_up_prestacion_fomag1").value = objData.data.lbl_azp_fdp_benefits_t_prestacion_fomag1;
					document.querySelector("#field_up_tipo_de_solicitud").value = objData.data.lbl_azp_fdp_benefits_t_tipo_de_solicitud;
					document.querySelector("#field_up_estado_prestacion_fomag_1").value = objData.data.lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1;
					document.querySelector("#field_up_estado_tramite_fomag_1").value = objData.data.lbl_azp_fdp_benefits_t_estado_tramite_fomag_1;
					document.querySelector("#field_up_fecha_de_tramite_fomag_1").value = objData.data.lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1;
					document.querySelector("#field_up_observaciones_sustanciador").value = objData.data.lbl_azp_fdp_benefits_t_observaciones_sustanciador;
					document.querySelector("#field_up_fecha_de_estudio_fomag_2").value = objData.data.lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2;
					document.querySelector("#field_up_estado_fomag_2").value = objData.data.lbl_azp_fdp_benefits_t_estado_fomag_2;
					document.querySelector("#field_up_bandeja_on_base").value = objData.data.lbl_azp_fdp_benefits_t_bandeja_on_base;
					document.querySelector("#field_up_estado_on_base").value = objData.data.lbl_azp_fdp_benefits_t_estado_on_base;
					document.querySelector("#field_up_fecha_de_pago_fomag_1").value = objData.data.lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1;
					document.querySelector("#field_up_informacion_al_consumidor_financiero").value = objData.data.lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero;
					document.querySelector("#field_up_fecha_de_pago").value = objData.data.lbl_azp_fdp_benefits_t_fecha_de_pago;
					document.querySelector("#field_up_modalidad").value = objData.data.lbl_azp_fdp_benefits_t_modalidad;
					document.querySelector("#field_up_banco").value = objData.data.lbl_azp_fdp_benefits_t_banco;
					document.querySelector("#field_up_fecha_maxima_de_pago").value = objData.data.lbl_azp_fdp_benefits_t_fecha_maxima_de_pago;
					document.querySelector("#field_up_estado_global").value = objData.data.lbl_azp_fdp_benefits_t_estado_global;
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

function modal_vent_close() {
	// Recargar la tabla con nueva informacion
	if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
	if ($("#dt_sxm_read").length) { $('#dt_sxm_read').DataTable().ajax.reload(); }
};