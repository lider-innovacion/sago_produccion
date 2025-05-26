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

if (document.getElementById('form_btn_scale')) {
	document.getElementById('form_btn_scale').onclick = function(e) {
		e.preventDefault();
		event_scale();
	};
}

if (document.getElementById('form_scale')) {
	document.getElementById('form_scale').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_scale();
			return false;
		}
	};
}

if (document.getElementById('form_btn_tariff')) {
	document.getElementById('form_btn_tariff').onclick = function(e) {
		e.preventDefault();
		event_tariff();
	};
}

if (document.getElementById('form_tariff')) {
	document.getElementById('form_tariff').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_tariff();
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

if (document.getElementById('form_btn_edit')) {
	document.getElementById('form_btn_edit').onclick = function(e) {
		e.preventDefault();
		event_edit();
	};
}

if (document.getElementById('form_edit')) {
	document.getElementById('form_edit').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_edit();
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
				id: "lbl_azs_fct_client_id_azs_fct_client",
				data: "lbl_azs_fct_client_id_azs_fct_client",
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
				id: "lbl_azs_fct_client_m_date_created",
				data: "lbl_azs_fct_client_m_date_created",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azs_fct_client_m_date_modified",
				data: "lbl_azs_fct_client_m_date_modified",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azs_fct_client_m_description",
				data: "lbl_azs_fct_client_m_description",
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
				title: "Nombre",
				id: "lbl_azs_fct_client_t_name",
				data: "lbl_azs_fct_client_t_name",
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
						url : "api/azp_fct_client/create",
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
						url : "api/azp_fct_client/delete",
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
					document.querySelector("#lbl_azp_fct_client_id_azp_fct_client").innerHTML = objData.data.lbl_azp_fct_client_id_azp_fct_client;
					document.querySelector("#lbl_azp_user_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_user_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_fct_client_m_date_created").innerHTML = objData.data.lbl_azp_fct_client_m_date_created;
					document.querySelector("#lbl_azp_fct_client_m_date_modified").innerHTML = objData.data.lbl_azp_fct_client_m_date_modified;
					document.querySelector("#lbl_azp_fct_client_m_description").innerHTML = objData.data.lbl_azp_fct_client_m_description;
					document.querySelector("#lbl_azp_sys_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector("#lbl_azp_fct_client_t_name").innerHTML = objData.data.lbl_azp_fct_client_t_name;
					document.querySelector("#lbl_azp_fct_sector_t_name").innerHTML = objData.data.lbl_azp_fct_sector_t_name;
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

function event_file() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_file').removeClass('alert-danger');
	$('#form_ajax_file').removeClass('alert-success');
	$('#form_ajax_file').removeClass('alert-warning');
	// Mensaje a mostrar una vez terminada la accion
	$('#form_ajax_file').addClass('alert-warning');
	$("#form_ajax_file").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_file').removeClass('hide');
	$('#form_ajax_file').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-file').modal('hide');
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
					var load = $("#field_fl_file")[0].files.length;
					var input = document.getElementById('field_fl_file');
					var path = input.value;
					var extensions = /(.png|.jpg|.jpeg|.jpe)$/i;
					if (!extensions.exec(path)) { document.getElementById('field_fl_file').value = ''; } else {
						$.ajax({
							type: "POST",
							url: "api/azp_fct_client/file",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_file')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_file').html(success_icon + obj.message);
									$("#form_ajax_file").removeClass('alert-warning');
									$("#form_ajax_file").addClass('alert-success');
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_file').reset();
									// Configuracion de la ventana modal
									$('#modal-id-file').modal('hide');
									// Añadir la clase al contenedor del archivo
									$('#id_fl_embed').addClass('d-none');
									// Mensaje a mostrar una vez terminada la accion
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
							error: function() {
								$('#form_ajax_file').addClass('alert-danger');
								$("#form_ajax_file").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_file').removeClass('hide');
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
						url : "api/azp_fct_client/remove",
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
						url : "api/azp_fct_client/restore",
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
	//$('#modal-id-drop').modal('hide');
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
						url : "api/azp_fct_client/drop",
						data : $('#form_drop').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								if ($("#dt_certificate").length) { $('#dt_certificate').DataTable().ajax.reload(); }
								if ($("#dt_defunction").length) { $('#dt_defunction').DataTable().ajax.reload(); }
								if ($("#dt_investigation").length) { $('#dt_investigation').DataTable().ajax.reload(); }
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
									message: "<span><strong>Exito:</strong> Haz eliminado exitosamente el registro.</span>",
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

function event_edit() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_edit').removeClass('alert-danger');
	$('#form_ajax_edit').removeClass('alert-success');
	$('#form_ajax_edit').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_edit').addClass('alert-warning');
	$("#form_ajax_edit").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_edit').removeClass('hide');
	$('#form_ajax_edit').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-edit').modal('hide');
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
						$('#form_ajax_edit').removeClass('alert');
						$('#form_ajax_edit').addClass('hide');
						$('#form_ajax_edit').html('');
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
					$('#modal-id-edit').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_fct_client/edit",
						data : $('#form_edit').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								if ($("#dt_certificate").length) { $('#dt_certificate').DataTable().ajax.reload(); }
								if ($("#dt_defunction").length) { $('#dt_defunction').DataTable().ajax.reload(); }
								if ($("#dt_investigation").length) { $('#dt_investigation').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_edit').html(success_icon + obj.message);
								$("#form_ajax_edit").removeClass('alert-warning');
								$("#form_ajax_edit").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-edit').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_edit').removeClass('alert');
									$('#form_ajax_edit').addClass('hide');
									$('#form_ajax_edit').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz actualizado exitosamente el registro.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-edit').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_edit').html(error_icon + obj.message);
								$("#form_ajax_edit").removeClass('alert-warning');
								$("#form_ajax_edit").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_edit').addClass('alert-danger');
							$("#form_ajax_edit").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_edit').removeClass('hide');
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
						url : "api/azp_fct_client/update",
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
					document.querySelector('#field_fl_id').value = objData.data.lbl_azp_fct_client_id_azp_fct_client;
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

function modal_drop(mvalue) {
	if (mvalue == 'certificate') {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_certificate').DataTable();
		vtable.column(0).visible(true);
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = $("#dt_certificate tr.selected td:first").html();
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			$('#modal-id-drop').modal('show');
			document.querySelector("#field_id_drop").value = idtbl;
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_certificate').DataTable();
			vtable.column(0).visible(false);
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
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_certificate').DataTable();
			vtable.column(0).visible(false);
		}
	} else if (mvalue == 'defunction') {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_defunction').DataTable();
		vtable.column(0).visible(true);
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = $("#dt_defunction tr.selected td:first").html();
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			$('#modal-id-drop').modal('show');
			document.querySelector("#field_id_drop").value = idtbl;
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_defunction').DataTable();
			vtable.column(0).visible(false);
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
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_defunction').DataTable();
			vtable.column(0).visible(false);
		}
	} else if (mvalue == 'investigation') {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_investigation').DataTable();
		vtable.column(0).visible(true);
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = $("#dt_investigation tr.selected td:first").html();
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			$('#modal-id-drop').modal('show');
			document.querySelector("#field_id_drop").value = idtbl;
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_investigation').DataTable();
			vtable.column(0).visible(false);
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
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_investigation').DataTable();
			vtable.column(0).visible(false);
		}
	}	
};

function modal_edit(mvalue) {
	document.querySelector("#form_edit").reset();
	if (mvalue == 'certificate') {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_certificate').DataTable();
		vtable.column(0).visible(true);
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = $("#dt_certificate tr.selected td:first").html();
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_certificate').DataTable();
			vtable.column(0).visible(false);
			var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
			var ajaxurl = var_url + 'api' + var_controller + "edit/" + idtbl + "/";
			request.open("GET", ajaxurl, true);
			request.send();
			request.onreadystatechange = function(){
				if (request.readyState == 4 && request.status == 200) {
					var objData = JSON.parse(request.responseText);
					if (objData.status) {
						$('#modal-id-edit').modal('show');
						document.querySelector("#field_et_id").value = objData.data.lbl_azp_fct_tariff_id_azp_fct_tariff;
						document.querySelector("#field_et_description").value = objData.data.lbl_azp_fct_tariff_m_description;
						document.querySelector("#field_et_iva").value = objData.data.lbl_azp_fct_tariff_t_iva;
						document.querySelector("#field_et_sub_check").value = objData.data.lbl_azp_fct_tariff_t_sub_check;
						document.querySelector("#field_et_value").value = objData.data.lbl_azp_fct_tariff_t_value;
						document.querySelector("#field_et_client").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_client;
						document.querySelector("#field_et_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_coverage;
						document.querySelector("#field_et_investigation").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_investigation;
						document.querySelector("#field_et_result").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_result;
						document.querySelector("#field_et_scale").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale;
						document.querySelector("#field_et_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_service;
						document.querySelector("#field_et_sub_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage;
						document.querySelector("#field_et_sub_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service;

						var ajaxurl = var_url + 'api' + var_controller + "service/1/";
						$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
							$('#field_et_service').html(argument);
							document.getElementById('field_et_service').value = 1;
							
							info_sub_service('update'); info_investigation('update'); info_result('update'); info_sub_service('update'); info_scale('update'); info_sub_coverage('update');

							var ajaxurl = var_url + 'api' + var_controller + "subservice/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_sub_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service;
							});

							var ajaxurl = var_url + 'api' + var_controller + "scale/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_scale").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale;
							});

							var ajaxurl = var_url + 'api' + var_controller + "sub_coverage/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_sub_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage;
							});

							$("#div_ck_et_sub_check").addClass('d-none');
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
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_certificate').DataTable();
			vtable.column(0).visible(false);
		}
	} else if (mvalue == 'defunction') {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_defunction').DataTable();
		vtable.column(0).visible(true);
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = $("#dt_defunction tr.selected td:first").html();
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_defunction').DataTable();
			vtable.column(0).visible(false);
			var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
			var ajaxurl = var_url + 'api' + var_controller + "edit/" + idtbl + "/";
			request.open("GET", ajaxurl, true);
			request.send();
			request.onreadystatechange = function(){
				if (request.readyState == 4 && request.status == 200) {
					var objData = JSON.parse(request.responseText);
					if (objData.status) {
						$('#modal-id-edit').modal('show');
						document.querySelector("#field_et_id").value = objData.data.lbl_azp_fct_tariff_id_azp_fct_tariff;
						document.querySelector("#field_et_description").value = objData.data.lbl_azp_fct_tariff_m_description;
						document.querySelector("#field_et_iva").value = objData.data.lbl_azp_fct_tariff_t_iva;
						document.querySelector("#field_et_sub_check").value = objData.data.lbl_azp_fct_tariff_t_sub_check;
						document.querySelector("#field_et_value").value = objData.data.lbl_azp_fct_tariff_t_value;
						document.querySelector("#field_et_client").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_client;
						document.querySelector("#field_et_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_coverage;
						document.querySelector("#field_et_investigation").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_investigation;
						document.querySelector("#field_et_result").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_result;
						document.querySelector("#field_et_scale").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale;
						document.querySelector("#field_et_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_service;
						document.querySelector("#field_et_sub_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage;
						document.querySelector("#field_et_sub_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service;

						var ajaxurl = var_url + 'api' + var_controller + "service/2/";
						$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
							$('#field_et_service').html(argument);
							document.getElementById('field_et_service').value = 2;
							info_investigation('update'); info_result('update'); info_sub_service('update'); info_scale('update'); info_sub_coverage('update');

							var ajaxurl = var_url + 'api' + var_controller + "subservice/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_sub_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service;
							});

							var ajaxurl = var_url + 'api' + var_controller + "scale/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_scale").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale;
							});

							var ajaxurl = var_url + 'api' + var_controller + "sub_coverage/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_sub_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage;
							});

							$("#div_ck_et_sub_check").addClass('d-none');
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
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_defunction').DataTable();
			vtable.column(0).visible(false);
		}
	} else if (mvalue == 'investigation') {
		// Mostrar la columna especificada de la tabla
		var vtable = $('#dt_investigation').DataTable();
		vtable.column(0).visible(true);
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = $("#dt_investigation tr.selected td:first").html();
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_investigation').DataTable();
			vtable.column(0).visible(false);
			var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
			var ajaxurl = var_url + 'api' + var_controller + "edit/" + idtbl + "/";
			request.open("GET", ajaxurl, true);
			request.send();
			request.onreadystatechange = function(){
				if (request.readyState == 4 && request.status == 200) {
					var objData = JSON.parse(request.responseText);
					if (objData.status) {
						$('#modal-id-edit').modal('show');
						document.querySelector("#field_et_id").value = objData.data.lbl_azp_fct_tariff_id_azp_fct_tariff;
						document.querySelector("#field_et_description").value = objData.data.lbl_azp_fct_tariff_m_description;
						document.querySelector("#field_et_iva").value = objData.data.lbl_azp_fct_tariff_t_iva;
						document.querySelector("#field_et_sub_check").value = objData.data.lbl_azp_fct_tariff_t_sub_check;
						document.querySelector("#field_et_value").value = objData.data.lbl_azp_fct_tariff_t_value;
						document.querySelector("#field_et_client").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_client;
						document.querySelector("#field_et_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_coverage;
						document.querySelector("#field_et_investigation").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_investigation;
						document.querySelector("#field_et_result").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_result;
						document.querySelector("#field_et_scale").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale;
						document.querySelector("#field_et_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_service;
						document.querySelector("#field_et_sub_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage;
						document.querySelector("#field_et_sub_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service;

						var ajaxurl = var_url + 'api' + var_controller + "service/3/";
						$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
							$('#field_et_service').html(argument);
							document.getElementById('field_et_service').value = 3;
							info_investigation('update'); info_result('update'); info_sub_service('update'); info_scale('update'); info_sub_coverage('update');

							$("#div_ck_et_sub_check").removeClass('d-none');
							if (objData.data.lbl_azp_fct_tariff_t_sub_check == 'NO') { var ck_sub = '14'; } else { var ck_sub = ''; }

							var ajaxurl = var_url + 'api' + var_controller + "subservice/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service + "/?field_ck=" + ck_sub;
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_sub_service").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_service;
							});

							var ajaxurl = var_url + 'api' + var_controller + "scale/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_scale").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_scale;
							});

							var ajaxurl = var_url + 'api' + var_controller + "subcoverage/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_sub_coverage").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_sub_coverage;
							});

							var ajaxurl = var_url + 'api' + var_controller + "investigationall/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_investigation + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_investigation").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_investigation;
							});

							var ajaxurl = var_url + 'api' + var_controller + "resultall/" + objData.data.lbl_azp_fct_tariff_v_id_azp_fct_result + "/";
							$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
								document.querySelector("#field_et_result").value = objData.data.lbl_azp_fct_tariff_v_id_azp_fct_result;
							});

							if (objData.data.lbl_azp_fct_tariff_t_sub_check == 'SI') {
								$('#check_et_sub_check').prop('checked', true);
							} else {
								$('#check_et_sub_check').prop('checked', false);
							}
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
			// Mostrar la columna especificada de la tabla
			var vtable = $('#dt_investigation').DataTable();
			vtable.column(0).visible(false);
		}
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
					document.querySelector("#field_up_id").value = objData.data.lbl_azp_fct_client_id_azp_fct_client;
					document.querySelector("#field_up_description").value = objData.data.lbl_azp_fct_client_m_description;
					document.querySelector("#field_up_state").value = objData.data.lbl_azp_fct_client_m_status;
					document.querySelector("#field_up_certificate").value = objData.data.lbl_azp_fct_client_t_certificate;
					document.querySelector("#field_up_defunction").value = objData.data.lbl_azp_fct_client_t_defunction;
					document.querySelector("#field_up_investigation").value = objData.data.lbl_azp_fct_client_t_investigation;
					document.querySelector("#field_up_name").value = objData.data.lbl_azp_fct_client_t_name;
					document.querySelector("#field_up_sector").value = objData.data.lbl_azp_fct_client_v_id_azp_fct_sector;

					console.log(objData.data.lbl_azp_fct_client_t_certificate);
					console.log(objData.data.lbl_azp_fct_client_t_defunction);
					console.log(objData.data.lbl_azp_fct_client_t_investigation);
					
					if (objData.data.lbl_azp_fct_client_t_certificate == 'SI') {
						$('#check_up_certificate').prop('checked', true);
					} else {
						//document.getElementById('field_up_certificate').value = 'NO';
						$('#check_up_certificate').prop('checked', false);
					}


					if (objData.data.lbl_azp_fct_client_t_defunction == 'SI') {
						$('#check_up_defunction').prop('checked', true);
					} else {
						//document.getElementById('field_up_defunction').value = 'NO';
						$('#check_up_defunction').prop('checked', false);
					}


					if (objData.data.lbl_azp_fct_client_t_investigation == 'SI') {
						$('#check_up_investigation').prop('checked', true);
					} else {
						//document.getElementById('field_up_investigation').value = 'NO';
						$('#check_up_investigation').prop('checked', false);
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

function event_scale() {
	var idtbl = document.getElementById('field_sc_client').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_scale').removeClass('alert-danger');
	$('#form_ajax_scale').removeClass('alert-success');
	$('#form_ajax_scale').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_scale').addClass('alert-warning');
	$("#form_ajax_scale").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_scale').removeClass('hide');
	$('#form_ajax_scale').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-scale').modal('hide');
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
						$('#form_ajax_scale').removeClass('alert');
						$('#form_ajax_scale').addClass('hide');
						$('#form_ajax_scale').html('');
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
					$('#modal-id-scale').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_fct_client/scale",
						data : $('#form_scale').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_scale').html(success_icon + obj.message);
								$("#form_ajax_scale").removeClass('alert-warning');
								$("#form_ajax_scale").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_scale").reset();
								// Configuracion de la ventana modal
								$('#modal-id-scale').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_scale').removeClass('alert');
									$('#form_ajax_scale').addClass('hide');
									$('#form_ajax_scale').html('');
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
								document.getElementById('field_sc_client').value = idtbl;
								// Validar si el id es mayor a cero
								if (idtbl > 0) {
									var ajaxurl = var_url + 'api' + var_controller + "scale/" + idtbl + "/";
									$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
										$('#field_tf_scale').html(argument);
									});
								}
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-scale').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_scale').html(error_icon + obj.message);
								$("#form_ajax_scale").removeClass('alert-warning');
								$("#form_ajax_scale").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_scale').addClass('alert-danger');
							$("#form_ajax_scale").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_scale').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_tariff() {
	var idtbl = document.getElementById('field_tf_client').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_tariff').removeClass('alert-danger');
	$('#form_ajax_tariff').removeClass('alert-success');
	$('#form_ajax_tariff').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_tariff').addClass('alert-warning');
	$("#form_ajax_tariff").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_tariff').removeClass('hide');
	$('#form_ajax_tariff').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-tariff').modal('hide');
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
						$('#form_ajax_tariff').removeClass('alert');
						$('#form_ajax_tariff').addClass('hide');
						$('#form_ajax_tariff').html('');
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
					$('#modal-id-tariff').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_fct_client/tariff",
						data : $('#form_tariff').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Recargar la tabla con nueva informacion
								if ($("#dt_certificate").length) { $('#dt_certificate').DataTable().ajax.reload(); }
								if ($("#dt_defunction").length) { $('#dt_defunction').DataTable().ajax.reload(); }
								if ($("#dt_investigation").length) { $('#dt_investigation').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_tariff').html(success_icon + obj.message);
								$("#form_ajax_tariff").removeClass('alert-warning');
								$("#form_ajax_tariff").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_tariff").reset();
								// Configuracion de la ventana modal
								$('#modal-id-tariff').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_tariff').removeClass('alert');
									$('#form_ajax_tariff').addClass('hide');
									$('#form_ajax_tariff').html('');
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
								document.getElementById('field_tf_client').value = idtbl;
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-tariff').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_tariff').html(error_icon + obj.message);
								$("#form_ajax_tariff").removeClass('alert-warning');
								$("#form_ajax_tariff").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_tariff').addClass('alert-danger');
							$("#form_ajax_tariff").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_tariff').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function data_certificate() {
	// Capturar el valor del campo de datos
	const idtbl = document.getElementById("field_tf_client").value;
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_fct_tariff_id_azp_fct_tariff",
			data: "lbl_azp_fct_tariff_id_azp_fct_tariff",
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
			id: "lbl_azp_fct_tariff_m_date_created",
			data: "lbl_azp_fct_tariff_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_fct_tariff_m_date_modified",
			data: "lbl_azp_fct_tariff_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_fct_tariff_m_description",
			data: "lbl_azp_fct_tariff_m_description",
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
			title: "Servicio",
			id: "lbl_azp_fct_service_t_name",
			data: "lbl_azp_fct_service_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Sub Servicio",
			id: "lbl_azp_fct_sub_service_t_name",
			data: "lbl_azp_fct_sub_service_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Escala",
			id: "lbl_azp_fct_scale_t_name",
			data: "lbl_azp_fct_scale_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Cobertura",
			id: "lbl_azp_fct_coverage_t_name",
			data: "lbl_azp_fct_coverage_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Otras Ciudades",
			id: "lbl_azp_fct_sub_coverage_t_name",
			data: "lbl_azp_fct_sub_coverage_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Tarifa",
			id: "lbl_azp_fct_tariff_t_value",
			data: "lbl_azp_fct_tariff_t_value",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Iva",
			id: "lbl_azp_fct_tariff_t_iva",
			data: "lbl_azp_fct_tariff_t_iva",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_certificate').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "tariff/" + idtbl + "/?fd_service=1",
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
		order: [[0, "asc",],],
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
				text: '<i class="far fa-plus"></i>',
				titleAttr: 'Nuevo',
				className: 'btn-sm btn-outline-warning',
				attr: {
					'id': 'table_btn_serivce',
					'name': 'table_btn_serivce',
					'onclick': 'modal_tariff(' + "'1'" + ');',
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
			{
				extend: 'excelHtml5',
				text: '<i class="far fa-file-excel"></i>',
				titleAttr: 'Excel',
				className: 'btn-sm btn-outline-success',
				attr: {
					'id': 'table_btn_excel',
					'name': 'table_btn_excel',
				},
			},
			{
				text: '<i class="far fa-edit"></i>',
				titleAttr: 'Actualizar',
				className: 'btn-sm btn-outline-info',
				attr: {
					'id': 'table_btn_edit',
					'name': 'table_btn_edit',
					'onclick': 'modal_edit(' + "'certificate'" + ');',
				},
			},
			{
				text: '<i class="far fa-trash-alt"></i>',
				titleAttr: 'Eliminar',
				className: 'btn-sm btn-outline-danger',
				attr: {
					'id': 'table_btn_drop',
					'name': 'table_btn_drop',
					'onclick': 'modal_drop(' + "'certificate'" + ');',
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
			{
				targets: 11,
				render: function(data, type, full, meta) {
					var badge = {
						'BOGOTA': {
							'title': '',
							'class': 'badge-text'
						},
						'TODO': {
							'title': '',
							'class': 'badge-text'
						},
					};
					if (typeof badge[data] === 'undefined') { return data; }
					return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
				},
			},
			{
				targets: 12,
				render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
			},
		],
	});
};

function data_defunction() {
	// Capturar el valor del campo de datos
	const idtbl = document.getElementById("field_tf_client").value;
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_fct_tariff_id_azp_fct_tariff",
			data: "lbl_azp_fct_tariff_id_azp_fct_tariff",
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
			id: "lbl_azp_fct_tariff_m_date_created",
			data: "lbl_azp_fct_tariff_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_fct_tariff_m_date_modified",
			data: "lbl_azp_fct_tariff_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_fct_tariff_m_description",
			data: "lbl_azp_fct_tariff_m_description",
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
			title: "Servicio",
			id: "lbl_azp_fct_service_t_name",
			data: "lbl_azp_fct_service_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Sub Servicio",
			id: "lbl_azp_fct_sub_service_t_name",
			data: "lbl_azp_fct_sub_service_t_name",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Escala",
			id: "lbl_azp_fct_scale_t_name",
			data: "lbl_azp_fct_scale_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Cobertura",
			id: "lbl_azp_fct_coverage_t_name",
			data: "lbl_azp_fct_coverage_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Otras Ciudades",
			id: "lbl_azp_fct_sub_coverage_t_name",
			data: "lbl_azp_fct_sub_coverage_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Tarifa",
			id: "lbl_azp_fct_tariff_t_value",
			data: "lbl_azp_fct_tariff_t_value",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Iva",
			id: "lbl_azp_fct_tariff_t_iva",
			data: "lbl_azp_fct_tariff_t_iva",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_defunction').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "tariff/" + idtbl + "/?fd_service=2",
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
		order: [[0, "asc",],],
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
				text: '<i class="far fa-plus"></i>',
				titleAttr: 'Nuevo',
				className: 'btn-sm btn-outline-warning',
				attr: {
					'id': 'table_btn_serivce',
					'name': 'table_btn_serivce',
					'onclick': 'modal_tariff(' + "'2'" + ');',
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
			{
				extend: 'excelHtml5',
				text: '<i class="far fa-file-excel"></i>',
				titleAttr: 'Excel',
				className: 'btn-sm btn-outline-success',
				attr: {
					'id': 'table_btn_excel',
					'name': 'table_btn_excel',
				},
			},
			{
				text: '<i class="far fa-edit"></i>',
				titleAttr: 'Actualizar',
				className: 'btn-sm btn-outline-info',
				attr: {
					'id': 'table_btn_edit',
					'name': 'table_btn_edit',
					'onclick': 'modal_edit(' + "'defunction'" + ');',
				},
			},
			{
				text: '<i class="far fa-trash-alt"></i>',
				titleAttr: 'Eliminar',
				className: 'btn-sm btn-outline-danger',
				attr: {
					'id': 'table_btn_drop',
					'name': 'table_btn_drop',
					'onclick': 'modal_drop(' + "'defunction'" + ');',
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
			{
				targets: 11,
				render: function(data, type, full, meta) {
					var badge = {
						'BOGOTA': {
							'title': '',
							'class': 'badge-text'
						},
						'TODO': {
							'title': '',
							'class': 'badge-text'
						},
					};
					if (typeof badge[data] === 'undefined') { return data; }
					return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
				},
			},
			{
				targets: 12,
				render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
			},
		],
	});
};

function data_investigation() {
	// Capturar el valor del campo de datos
	const idtbl = document.getElementById("field_tf_client").value;
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_fct_tariff_id_azp_fct_tariff",
			data: "lbl_azp_fct_tariff_id_azp_fct_tariff",
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
			id: "lbl_azp_fct_tariff_m_date_created",
			data: "lbl_azp_fct_tariff_m_date_created",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Fecha Modificacion",
			id: "lbl_azp_fct_tariff_m_date_modified",
			data: "lbl_azp_fct_tariff_m_date_modified",
			type: "text",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Descripcion",
			id: "lbl_azp_fct_tariff_m_description",
			data: "lbl_azp_fct_tariff_m_description",
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
			title: "Servicio",
			id: "lbl_azp_fct_service_t_name",
			data: "lbl_azp_fct_service_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Sub Servicio",
			id: "lbl_azp_fct_sub_service_t_name",
			data: "lbl_azp_fct_sub_service_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Investigacion",
			id: "lbl_azp_fct_investigation_t_name",
			data: "lbl_azp_fct_investigation_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Resultado",
			id: "lbl_azp_fct_result_t_name",
			data: "lbl_azp_fct_result_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Escala",
			id: "lbl_azp_fct_scale_t_name",
			data: "lbl_azp_fct_scale_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Cobertura",
			id: "lbl_azp_fct_coverage_t_name",
			data: "lbl_azp_fct_coverage_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Otras Ciudades",
			id: "lbl_azp_fct_sub_coverage_t_name",
			data: "lbl_azp_fct_sub_coverage_t_name",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Tarifa",
			id: "lbl_azp_fct_tariff_t_value",
			data: "lbl_azp_fct_tariff_t_value",
			type: "text",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Iva",
			id: "lbl_azp_fct_tariff_t_iva",
			data: "lbl_azp_fct_tariff_t_iva",
			type: "text",
			className: "text-dark",
			visible: true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_investigation').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + 'api' + var_controller + "tariff/" + idtbl + "/?fd_service=3",
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
		order: [[0, "asc",],],
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
				text: '<i class="far fa-plus"></i>',
				titleAttr: 'Nuevo',
				className: 'btn-sm btn-outline-warning',
				attr: {
					'id': 'table_btn_serivce',
					'name': 'table_btn_serivce',
					'onclick': 'modal_tariff(' + "'3'" + ');',
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
			{
				extend: 'excelHtml5',
				text: '<i class="far fa-file-excel"></i>',
				titleAttr: 'Excel',
				className: 'btn-sm btn-outline-success',
				attr: {
					'id': 'table_btn_excel',
					'name': 'table_btn_excel',
				},
			},
			{
				text: '<i class="far fa-edit"></i>',
				titleAttr: 'Actualizar',
				className: 'btn-sm btn-outline-info',
				attr: {
					'id': 'table_btn_edit',
					'name': 'table_btn_edit',
					'onclick': 'modal_edit(' + "'investigation'" + ');',
				},
			},
			{
				text: '<i class="far fa-trash-alt"></i>',
				titleAttr: 'Eliminar',
				className: 'btn-sm btn-outline-danger',
				attr: {
					'id': 'table_btn_drop',
					'name': 'table_btn_drop',
					'onclick': 'modal_drop(' + "'investigation'" + ');',
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
			{
				targets: 13,
				render: function(data, type, full, meta) {
					var badge = {
						'BOGOTA': {
							'title': '',
							'class': 'badge-text'
						},
						'TODO': {
							'title': '',
							'class': 'badge-text'
						},
					};
					if (typeof badge[data] === 'undefined') { return data; }
					return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
				},
			},
			{
				targets: 14,
				render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
			},
		],
	});
};

function modal_service() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-service').modal('show');
		document.getElementById('field_tf_client').value = idtbl;
		document.getElementById('field_sc_client').value = idtbl;
		data_certificate(); data_defunction(); data_investigation();
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

function modal_tariff(mvalue) {
	$('#modal-id-tariff').modal('show');
	info_scale('create');
	var idtbl = document.getElementById('field_tf_client').value;
	document.querySelector("#form_tariff").reset();
	if (mvalue == 1) {
		var ajaxurl = var_url + 'api' + var_controller + "service/1/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
			$('#field_tf_service').html(argument);
			document.getElementById('field_tf_service').value = 1;
			info_sub_service('create');
			info_investigation('create');
			info_result('create');
		});
	}
	if (mvalue == 2) {
		var ajaxurl = var_url + 'api' + var_controller + "service/2/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
			$('#field_tf_service').html(argument);
			document.getElementById('field_tf_service').value = 2;
			info_sub_service('create');
			info_investigation('create');
			info_result('create');
		});
	}
	if (mvalue == 3) {
		var ajaxurl = var_url + 'api' + var_controller + "service/3/";
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
			$('#field_tf_service').html(argument);
			document.getElementById('field_tf_service').value = 3;
			info_sub_service('create');
			info_investigation('create');
			info_result('create');
		});
	}
	document.getElementById('field_tf_client').value = idtbl;
};

function info_scale(mvalue) {
	if (mvalue == 'create') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_tf_client').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			var ajaxurl = var_url + 'api' + var_controller + "scale/" + idtbl + "/";
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#field_tf_scale').html(argument);
			});
		}
	}

	if (mvalue == 'update') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_et_client').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			var ajaxurl = var_url + 'api' + var_controller + "scale/" + idtbl + "/";
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#field_et_scale').html(argument);
			});
		}
	}
	
};

/*function event_service() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_tf_service').value;
	// Obtener el primer valor seleccionado de la tabla
	var idtcl = document.getElementById('field_tf_client').value;
};*/

function info_sub_coverage(mvalue) {
	if (mvalue == 'create') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_tf_coverage').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			var ajaxurl = var_url + 'api' + var_controller + "subcoverage/" + idtbl + "/";
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#field_tf_sub_coverage').html(argument);
				// Validar si el id es mayor a cero
				if (idtbl == 1) {
					document.getElementById('field_tf_sub_coverage').value = '1';
					$("#div_ft_sub_coverage").addClass('d-none');
				} else if (idtbl == 2) {
					document.getElementById('field_tf_sub_coverage').value = '';
					$("#div_ft_sub_coverage").removeClass('d-none');
				} else if (idtbl == 3) {
					document.getElementById('field_tf_sub_coverage').value = '2';
					$("#div_ft_sub_coverage").addClass('d-none');
				} else {
					document.getElementById('field_tf_sub_coverage').value = '';
					$("#div_ft_sub_coverage").addClass('d-none');
				}
			});
		}
	}
	if (mvalue == 'update') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_et_coverage').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			var ajaxurl = var_url + 'api' + var_controller + "subcoverage/" + idtbl + "/";
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#field_et_sub_coverage').html(argument);
				// Validar si el id es mayor a cero
				if (idtbl == 1) {
					document.getElementById('field_et_sub_coverage').value = '1';
					$("#div_te_sub_coverage").addClass('d-none');
				} else if (idtbl == 2) {
					document.getElementById('field_et_sub_coverage').value = '';
					$("#div_te_sub_coverage").removeClass('d-none');
				} else if (idtbl == 3) {
					document.getElementById('field_et_sub_coverage').value = '2';
					$("#div_te_sub_coverage").addClass('d-none');
				} else {
					document.getElementById('field_et_sub_coverage').value = '';
					$("#div_te_sub_coverage").addClass('d-none');
				}
			});
		}
	}
	
};

function info_sub_service(mvalue) {
	if (mvalue == 'create') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_tf_service').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			if (idtbl == 3) {
				$("#div_ck_tf_sub_check").removeClass('d-none');
				var check = document.getElementById('field_tf_sub_check').value;
				if (check == 'NO') { var ck_sub = '14'; } else { var ck_sub = ''; }
				var ajaxurl = var_url + 'api' + var_controller + "subservice/" + idtbl + "/?field_ck=" + ck_sub;
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_tf_sub_service').html(argument);
					//document.getElementById('field_tf_sub_service').value = '';
				});
			} else {
				$("#div_ck_tf_sub_check").addClass('d-none');
				var ajaxurl = var_url + 'api' + var_controller + "subservice/" + idtbl + "/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_tf_sub_service').html(argument);
					// Validar si el id es mayor a cero
					if (idtbl == 2) {
						document.getElementById('field_tf_sub_service').value = '1';
						//$("#div_ft_sub_service").addClass('d-none');
					} /*else if (idtbl == 3) {
						document.getElementById('field_tf_sub_service').value = '';
						//$("#div_ft_sub_service").removeClass('d-none');
					} */else {
						document.getElementById('field_tf_sub_service').value = '';
						//$("#div_ft_sub_service").removeClass('d-none');
					}
				});
			}
		}
	}
		
	if (mvalue == 'update') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_et_service').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			if (idtbl == 3) {
				$("#div_ck_et_sub_check").removeClass('d-none');
				var check = document.getElementById('field_et_sub_check').value;
				if (check == 'NO') { var ck_sub = '14'; } else { var ck_sub = ''; }
				var ajaxurl = var_url + 'api' + var_controller + "subservice/" + idtbl + "/?field_ck=" + ck_sub;
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_et_sub_service').html(argument);
					document.getElementById('field_et_sub_service').value = '';
				});
			} else {
				$("#div_ck_et_sub_check").addClass('d-none');
				var ajaxurl = var_url + 'api' + var_controller + "subservice/" + idtbl + "/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_et_sub_service').html(argument);
					// Validar si el id es mayor a cero
					if (idtbl == 2) {
						document.getElementById('field_et_sub_service').value = '1';
						//$("#div_ft_sub_service").addClass('d-none');
					} /*else if (idtbl == 3) {
						document.getElementById('field_et_sub_service').value = '';
						//$("#div_ft_sub_service").removeClass('d-none');
					} */else {
						document.getElementById('field_et_sub_service').value = '';
						//$("#div_ft_sub_service").removeClass('d-none');
					}
				});
			}
		}
	}
};

function event_ck_sub_service(mvalue) {
	if (mvalue == 'create') {
		if ($('#check_tf_sub_check').is(':checked')) {
			document.getElementById('field_tf_sub_check').value = 'SI';
		} else {
			document.getElementById('field_tf_sub_check').value = 'NO';
		}
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_tf_service').value;
		//$("#div_ck_tf_sub_check").removeClass('d-none');
		var check = document.getElementById('field_tf_sub_check').value;
		if (check == 'NO') { var ck_sub = '14'; } else { var ck_sub = ''; }
		var ajaxurl = var_url + 'api' + var_controller + "subservice/" + idtbl + "/?field_ck=" + ck_sub;
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
			$('#field_tf_sub_service').html(argument);
			//document.getElementById('field_tf_sub_service').value = '';
		});
	}
	if (mvalue == 'update') {
		if ($('#check_et_sub_check').is(':checked')) {
			document.getElementById('field_et_sub_check').value = 'SI';
		} else {
			document.getElementById('field_et_sub_check').value = 'NO';
		}
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_et_service').value;
		//$("#div_ck_et_sub_check").removeClass('d-none');
		var check = document.getElementById('field_et_sub_check').value;
		if (check == 'NO') { var ck_sub = '14'; } else { var ck_sub = ''; }
		var ajaxurl = var_url + 'api' + var_controller + "subservice/" + idtbl + "/?field_ck=" + ck_sub;
		$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
			$('#field_et_sub_service').html(argument);
			//document.getElementById('field_et_sub_service').value = '';
		});
	}
};

function info_result(mvalue) {
	if (mvalue == 'create') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_tf_service').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			// Validar si el id es mayor a cero
			if (idtbl == 3) {
				var ajaxurl = var_url + 'api' + var_controller + "resultall/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_tf_result').html(argument);
					$("#div_ft_result").removeClass('d-none');
				});
			} else if (idtbl == 1 || idtbl == 2) {
				var ajaxurl = var_url + 'api' + var_controller + "resultone/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_tf_result').html(argument);
					$("#div_ft_result").addClass('d-none');
				});
			} else {
				$('#field_tf_result').html('');
			}
		}
	}
	if (mvalue == 'update') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_et_service').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			// Validar si el id es mayor a cero
			if (idtbl == 3) {
				var ajaxurl = var_url + 'api' + var_controller + "resultall/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_et_result').html(argument);
					$("#div_te_result").removeClass('d-none');
				});
			} else if (idtbl == 1 || idtbl == 2) {
				var ajaxurl = var_url + 'api' + var_controller + "resultone/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_et_result').html(argument);
					$("#div_te_result").addClass('d-none');
				});
			} else {
				$('#field_et_result').html('');
			}
		}
	}
};

function info_investigation(mvalue) {
	if (mvalue == 'create') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_tf_service').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			// Validar si el id es mayor a cero
			if (idtbl == 3) {
				var ajaxurl = var_url + 'api' + var_controller + "investigationall/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_tf_investigation').html(argument);
					$("#div_ft_investigation").removeClass('d-none');
				});
			} else if (idtbl == 1 || idtbl == 2) {
				var ajaxurl = var_url + 'api' + var_controller + "investigationone/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_tf_investigation').html(argument);
					$("#div_ft_investigation").addClass('d-none');
				});
			} else {
				$('#field_tf_investigation').html('');
			}
		}
	}

	if (mvalue == 'update') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_et_service').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			// Validar si el id es mayor a cero
			if (idtbl == 3) {
				var ajaxurl = var_url + 'api' + var_controller + "investigationall/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_et_investigation').html(argument);
					$("#div_te_investigation").removeClass('d-none');
				});
			} else if (idtbl == 1 || idtbl == 2) {
				var ajaxurl = var_url + 'api' + var_controller + "investigationone/";
				$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
					$('#field_et_investigation').html(argument);
					$("#div_te_investigation").addClass('d-none');
				});
			} else {
				$('#field_et_investigation').html('');
			}
		}
	}
	
};

function event_coverage() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_tf_service').value;
	// Validar si el id es mayor a cero
	if (idtbl == 3) {
		document.getElementById('field_tf_coverage').value = '';
		$("#div_ft_coverage").removeClass('d-none');
	} else {
		document.getElementById('field_tf_coverage').value = '1';
		$("#div_ft_coverage").addClass('d-none');
	}
};

function event_certificate(mvalue) {
	if (mvalue == 'create') {
		if ($('#check_cr_certificate').is(':checked')) {
			document.getElementById('field_cr_certificate').value = 'SI';
		} else {
			document.getElementById('field_cr_certificate').value = 'NO';
		}
	} else if (mvalue == 'update') {
		if ($('#check_up_certificate').is(':checked')) {
			document.getElementById('field_up_certificate').value = 'SI';
		} else {
			document.getElementById('field_up_certificate').value = 'NO';
		}
	}
};

function event_defunction(mvalue) {
	if (mvalue == 'create') {
		if ($('#check_cr_defunction').is(':checked')) {
			document.getElementById('field_cr_defunction').value = 'SI';
		} else {
			document.getElementById('field_cr_defunction').value = 'NO';
		}
	} else if (mvalue == 'update') {
		if ($('#check_up_defunction').is(':checked')) {
			document.getElementById('field_up_defunction').value = 'SI';
		} else {
			document.getElementById('field_up_defunction').value = 'NO';
		}
	}
};

function event_investigation(mvalue) {
	if (mvalue == 'create') {
		if ($('#check_cr_investigation').is(':checked')) {
			document.getElementById('field_cr_investigation').value = 'SI';
		} else {
			document.getElementById('field_cr_investigation').value = 'NO';
		}
	} else if (mvalue == 'update') {
		if ($('#check_up_investigation').is(':checked')) {
			document.getElementById('field_up_investigation').value = 'SI';
		} else {
			document.getElementById('field_up_investigation').value = 'NO';
		}
	}
};

function modal_view(event) {
	var load = $("#field_fl_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_file');
	var path = input.value;
	var extensions = /(.png|.jpg|.jpeg|.jpe)$/i;
	if (load === 0) { $('#id_fl_embed').addClass('d-none'); } else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos png, jpg, jpge, jpe.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_embed').addClass('d-none');
			input.value = '';
		} else {
			// Mensaje a mostrar una vez terminada la accion
			setTimeout(function() {
				$('#form_ajax_file').removeClass('alert');
				$('#form_ajax_file').addClass('hide');
				$('#form_ajax_file').html('');
			}, 0);
			// Crear un objeto para el earchivo
			let myfile = new FileReader();
			// Llamar al contenedor para visualizar el archivo
			let embed = document.getElementById('field_fl_embed');
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
				$('#id_fl_embed').removeClass('d-none');
				// Leer el archivo de forma local
				myfile.readAsDataURL(event.target.files[0]);
			} else {
				// Añadir la clase al contenedor del archivo
				$('#id_fl_embed').addClass('d-none');
			}
		}
	}
};

function modal_consult() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "file/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_fct_client_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene ningun archivo cargado.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Asignacion de valores en un campo de texto
						document.getElementById('field_cn_id').value = idtbl;
						$('#modal-id-consult').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_fct_client_w_document;
						var wfolder = objData.data.lbl_azp_fct_client_w_folder;
						var wroute = objData.data.lbl_azp_fct_client_w_route;
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
	var idtbl = document.getElementById('field_cn_id').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "file/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fdocument = objData.data.lbl_azp_fct_client_w_document;
					if (fdocument == '' || fdocument == 'null') {
						// Mensaje de audio para mostrar en la pagina web
						initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
						bootbox.alert({
							size: "small",
							title: "<i class='fal fa-times-circle text-warning mr-2'></i> <span class='text-warning fw-500'>Advertencia!</span>",
							message: "<span><strong>Lo sentimos: El registro no contiene ningun archivo cargado.",
							centerVertical: true,
							className: "modal-alert",
							closeButton: false,
						});
					} else {
						// Definiendo valores de la busqueda de resultados
						var wroute = objData.data.lbl_azp_fct_client_w_route;
						var wdocument = objData.data.lbl_azp_fct_client_w_document;
						var wfolder = objData.data.lbl_azp_fct_client_w_folder;
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