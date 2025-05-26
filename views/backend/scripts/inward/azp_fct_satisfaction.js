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

if (document.getElementById('form_btn_calculate')) {
	document.getElementById('form_btn_calculate').onclick = function(e) {
		e.preventDefault();
		event_calculate();
	};
}

if (document.getElementById('form_calculate')) {
	document.getElementById('form_calculate').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_calculate();
			return false;
		}
	};
}

function event_checkbox_info() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_info').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_tb_info').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_tb_info').prop('checked', false);
	}
};

function event_checkbox_infu() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_infu').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_tb_infu').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_tb_infu').prop('checked', false);
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
				id: "lbl_azs_fct_satisfaction_id_azs_fct_satisfaction",
				data: "lbl_azs_fct_satisfaction_id_azs_fct_satisfaction",
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
				id: "lbl_azs_fct_satisfaction_m_date_created",
				data: "lbl_azs_fct_satisfaction_m_date_created",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azs_fct_satisfaction_m_date_modified",
				data: "lbl_azs_fct_satisfaction_m_date_modified",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azs_fct_satisfaction_m_description",
				data: "lbl_azs_fct_satisfaction_m_description",
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
				id: "lbl_azs_fct_satisfaction_t_name",
				data: "lbl_azs_fct_satisfaction_t_name",
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
						url : "api/azp_fct_satisfaction/create",
						data : $('#form_create').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
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
						url : "api/azp_fct_satisfaction/delete",
						data : $('#form_delete').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
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
					document.querySelector("#lbl_azp_fct_satisfaction_id_azp_fct_satisfaction").innerHTML = objData.data.lbl_azp_fct_satisfaction_id_azp_fct_satisfaction;
					document.querySelector("#lbl_azp_user_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_user_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_fct_satisfaction_m_date_created").innerHTML = objData.data.lbl_azp_fct_satisfaction_m_date_created;
					document.querySelector("#lbl_azp_fct_satisfaction_m_date_modified").innerHTML = objData.data.lbl_azp_fct_satisfaction_m_date_modified;
					document.querySelector("#lbl_azp_fct_satisfaction_m_description").innerHTML = objData.data.lbl_azp_fct_satisfaction_m_description;
					document.querySelector("#lbl_azp_sys_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector("#lbl_azp_fct_satisfaction_t_name").innerHTML = objData.data.lbl_azp_fct_satisfaction_t_name;
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
						url : "api/azp_fct_satisfaction/remove",
						data : $('#form_remove').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
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
						url : "api/azp_fct_satisfaction/restore",
						data : $('#form_restore').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
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
						url : "api/azp_fct_satisfaction/update",
						data : $('#form_update').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
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
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
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
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
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
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
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
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
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
					document.querySelector("#field_up_id").value = objData.data.lbl_azp_fct_satisfaction_id_azp_fct_satisfaction;
					document.querySelector("#field_up_description").value = objData.data.lbl_azp_fct_satisfaction_m_description;
					document.querySelector("#field_up_state").value = objData.data.lbl_azp_fct_satisfaction_m_status;
					document.querySelector("#field_up_name").value = objData.data.lbl_azp_fct_satisfaction_t_name;
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

function event_calculate() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_calculate').removeClass('alert-danger');
	$('#form_ajax_calculate').removeClass('alert-success');
	$('#form_ajax_calculate').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_calculate').addClass('alert-warning');
	$("#form_ajax_calculate").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_calculate').removeClass('hide');
	$('#form_ajax_calculate').addClass('alert');

	$.ajax({
		type : "POST",
		url : "api/azp_fct_satisfaction/calculate",
		data : $('#form_calculate').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				// Recargar la tabla con nueva informacion
				if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
				if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
				if ($("#dt_infu").length) { $('#dt_infu').DataTable().ajax.reload(); }
				// Mensaje a mostrar una vez terminada la accion
				$('#form_ajax_calculate').html(success_icon + obj.message);
				$("#form_ajax_calculate").removeClass('alert-warning');
				$("#form_ajax_calculate").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.querySelector("#form_calculate").reset();
				// Configuracion de la ventana modal
				$('#modal-id-calculate').modal('hide');
				// Ejecutar funcion
				graphic_group_by();
				// Añadir y remover las clases incorporadas de las hojas de estilo
				setTimeout(function() {
					$('#form_ajax_calculate').removeClass('alert');
					$('#form_ajax_calculate').addClass('hide');
					$('#form_ajax_calculate').html('');
				}, 0);
				// Modulo de servicio de certificados
				document.getElementById('field_ct_certificate').value = 'NO';
				$("#field_cd_certificate").addClass('d-none');
				$("#field_cs_certificate").addClass('d-none');
				$("#field_ps_certificate").addClass('d-none');
				document.getElementById('field_cd_certificate').value = '';
				document.getElementById('field_cs_certificate').value = '';
				document.getElementById('field_ps_certificate').value = '';
				// Modulo de servicio de defuncion
				document.getElementById('field_ct_defunction').value = 'NO';
				$("#field_cd_defunction").addClass('d-none');
				$("#field_cs_defunction").addClass('d-none');
				document.getElementById('field_cd_defunction').value = '';
				document.getElementById('field_cs_defunction').value = '';
				// Modulo de servicio de investigacion
				document.getElementById('field_ct_investigation').value = 'NO';
				$("#field_cd_investigation").addClass('d-none');
				$("#field_cs_investigation").addClass('d-none');
				document.getElementById('field_cd_investigation').value = '';
				document.getElementById('field_cs_investigation').value = '';
				// Mensaje de audio para mostrar en la pagina web
				initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
				bootbox.alert({
					title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
					message: "<span><strong>Exito:</strong> Haz calculado exitosamente los datos.</span>",
					centerVertical: true,
					className: "modal-alert",
					closeButton: false,
				});
			} else {
				// Configuracion de la ventana modal
				$('#modal-id-calculate').modal('show');
				// Mensaje a mostrar una vez terminada la accion
				$('#form_ajax_calculate').html(error_icon + obj.message);
				$("#form_ajax_calculate").removeClass('alert-warning');
				$("#form_ajax_calculate").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_calculate').addClass('alert-danger');
			$("#form_ajax_calculate").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_calculate').removeClass('hide');
		},
	});
};

function modal_vision() {
	document.getElementById('field_ct_refundable').value = '';
	document.getElementById('field_it_refundable').value = '';
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
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
					document.getElementById('field_vs_register').value = idtbl;
					$('#modal-id-vision').modal('show');
					var idfct = objData.data.lbl_azp_fct_satisfaction_id_azp_fct_satisfaction;
					var imodule = objData.data.lbl_azp_fct_satisfaction_t_module;
					var service = objData.data.lbl_azp_fct_service_t_name;
					$("#div_certificate").addClass('d-none');
					$("#div_defunction").addClass('d-none');
					$("#div_investigation").addClass('d-none');
					// Añadir clases a los elementos
					//$("#div_certificate").addClass('d-none');
					//$("#div_defunction").addClass('d-none');
					$("#form_btn_certificate").addClass('d-none');
					$("#form_btn_investigation").addClass('d-none');
					// Control de validacion de la condicion
					if (service == 'CERTIFICADOS') {
						document.getElementById('field_vs_module').value = 'Ninguno';
						$("#div_certificate").removeClass('d-none');
						$("#form_btn_certificate").removeClass('d-none');
						// Column Definitions
						var columnSet = [
							{
								title: "Id",
								id: "lbl_azp_crt_request_data_id_azp_crt_request_data",
								data: "lbl_azp_crt_request_data_id_azp_crt_request_data",
								type: "readonly",
								className: "text-dark",
								visible: false,
							},
							{
								title: "Cliente",
								id: "lbl_azp_crt_bank_t_name",
								data: "lbl_azp_crt_bank_t_name",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Nro Solicitud",
								id: "lbl_azp_crt_request_data_t_request_nro",
								data: "lbl_azp_crt_request_data_t_request_nro",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Fecha Solicitud",
								id: "lbl_azp_crt_request_data_t_request_date",
								data: "lbl_azp_crt_request_data_t_request_date",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Fecha Entrega",
								id: "lbl_azp_crt_request_data_t_date_delivery",
								data: "lbl_azp_crt_request_data_t_date_delivery",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Cedula",
								id: "lbl_azp_crt_request_data_t_identification",
								data: "lbl_azp_crt_request_data_t_identification",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Nombre",
								id: "lbl_azp_crt_request_data_t_full_name",
								data: "lbl_azp_crt_request_data_t_full_name",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Obligacion",
								id: "lbl_azp_crt_request_data_t_nro_oblitation",
								data: "lbl_azp_crt_request_data_t_nro_oblitation",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Id_ICS",
								id: "lbl_azp_crt_request_data_t_request_id",
								data: "lbl_azp_crt_request_data_t_request_id",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Tipo Certificado",
								id: "lbl_azp_crt_request_type_t_name",
								data: "lbl_azp_crt_request_type_t_name",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Detalle Certificado",
								id: "lbl_azp_crt_request_data_t_plaque_enrollment",
								data: "lbl_azp_crt_request_data_t_plaque_enrollment",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Ciudad FMI",
								id: "lbl_azp_crt_city_t_name",
								data: "lbl_azp_crt_city_t_name",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Solicitante",
								id: "lbl_azp_crt_request_data_t_applicant_entity",
								data: "lbl_azp_crt_request_data_t_applicant_entity",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Facturables",
								id: "lbl_azp_crt_request_data_t_bilable",
								data: "lbl_azp_crt_request_data_t_bilable",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Reembolsable",
								id: "lbl_azp_crt_request_data_t_refundable",
								data: "lbl_azp_crt_request_data_t_refundable",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Proveedor",
								id: "lbl_azp_crt_request_data_t_provider_name",
								data: "lbl_azp_crt_request_data_t_provider_name",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "No Recibo",
								id: "lbl_azp_crt_request_data_t_rcb_nro_receipt",
								data: "lbl_azp_crt_request_data_t_rcb_nro_receipt",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Servicios",
								id: "lbl_azp_crt_request_data_t_fct_service",
								data: "lbl_azp_crt_request_data_t_fct_service",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Valor Certificado",
								id: "lbl_azp_crt_request_data_t_rcb_amount",
								data: "lbl_azp_crt_request_data_t_rcb_amount",
								type: "readonly",
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
							ajax: var_url + 'api' + var_controller + "certificate/" + idfct + "/?field_value=",
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
								/*{
									targets: 6,
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
								},*/
								{
									targets: 17,
									render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
								},
								{
									targets: 18,
									render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
								},
							],
						});
					}
					// Control de validacion de la condicion
					if (service == 'DEFUNCION') {
						document.getElementById('field_vs_module').value = 'Ninguno';
						$("#div_defunction").removeClass('d-none');
						// Column Definitions
						var columnSet = [
							{
								title: "Id",
								id: "lbl_azp_gsc_request_id_azp_gsc_request",
								data: "lbl_azp_gsc_request_id_azp_gsc_request",
								type: "readonly",
								className: "text-dark",
								visible: false,
							},
							{
								title: "No",
								id: "lbl_azp_gsc_consignment_t_consignment_item",
								data: "lbl_azp_gsc_consignment_t_consignment_item",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Entidad",
								id: "lbl_azp_fct_client_t_name",
								data: "lbl_azp_fct_client_t_name",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Base",
								id: "lbl_azp_gsc_request_t_number_request",
								data: "lbl_azp_gsc_request_t_number_request",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Cedula",
								id: "lbl_azp_gsc_request_t_identification",
								data: "lbl_azp_gsc_request_t_identification",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Vr Certificado",
								id: "lbl_azp_gsc_consignment_t_value_total",
								data: "lbl_azp_gsc_consignment_t_value_total",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Vr Consignacion",
								id: "lbl_azp_gsc_consignment_t_closed_value",
								data: "lbl_azp_gsc_consignment_t_closed_value",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Nombre",
								id: "lbl_azp_gsc_consignment_t_to_consigned",
								data: "lbl_azp_gsc_consignment_t_to_consigned",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Cedula",
								id: "lbl_azp_gsc_consignment_t_nit_identification",
								data: "lbl_azp_gsc_consignment_t_nit_identification",
								type: "text",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Entidad",
								id: "lbl_azp_gsc_consignment_t_consigned_entity",
								data: "lbl_azp_gsc_consignment_t_consigned_entity",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Recibo",
								id: "lbl_azp_gsc_consignment_t_nro_receipt",
								data: "lbl_azp_gsc_consignment_t_nro_receipt",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Fecha",
								id: "lbl_azp_gsc_consignment_t_consignment_date",
								data: "lbl_azp_gsc_consignment_t_consignment_date",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Notaria",
								id: "lbl_azp_gsc_request_t_notary",
								data: "lbl_azp_gsc_request_t_notary",
								type: "readonly",
								className: "text-dark",
								visible: true,
							},
							{
								title: "Ciudad",
								id: "lbl_azp_gsc_request_t_city",
								data: "lbl_azp_gsc_request_t_city",
								type: "readonly",
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
							ajax: var_url + 'api' + var_controller + "defunction/" + idfct + "/",
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
							order: [[1, "desc",],[10, "asc",],],
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
								/*{
									targets: 6,
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
								},*/
								{
									targets: 5,
									render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
								},
								{
									targets: 6,
									render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
								},
							],
						});
					}
					// Control de validacion de la condicion
					if (service == 'INVESTIGACION BIENES') {
						$("#div_investigation").removeClass('d-none');
						$("#form_btn_investigation").removeClass('d-none');
						// Control de validacion de la condicion
						if (imodule == 'CAMARAS') {
							document.getElementById('field_vs_module').value = 'Camaras';
							// Column Definitions
							var columnSet = [
								{
									title: "Id",
									id: "lbl_azp_ibn_camera_id_azp_ibn_camera",
									data: "lbl_azp_ibn_camera_id_azp_ibn_camera",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Item",
									id: "lbl_azp_ibn_camera_m_description",
									data: "lbl_azp_ibn_camera_m_description",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Cliente",
									id: "lbl_azp_fct_client_t_name",
									data: "lbl_azp_fct_client_t_name",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nro Solicitud",
									id: "lbl_azp_ibn_control_panel_t_code_research",
									data: "lbl_azp_ibn_control_panel_t_code_research",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Fecha Solicitud",
									id: "lbl_azp_ibn_control_panel_t_date_arrival",
									data: "lbl_azp_ibn_control_panel_t_date_arrival",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Fecha Entrega",
									id: "lbl_azp_ibn_control_panel_t_date_general",
									data: "lbl_azp_ibn_control_panel_t_date_general",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Identificacion Titular",
									id: "lbl_azp_ibn_camera_t_identification",
									data: "lbl_azp_ibn_camera_t_identification",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nombre Titular",
									id: "lbl_azp_ibn_camera_t_full_name",
									data: "lbl_azp_ibn_camera_t_full_name",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Obligacion",
									id: "lbl_azp_ibn_data_main_t_nro_obligation",
									data: "lbl_azp_ibn_data_main_t_nro_obligation",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Id Cliente",
									id: "lbl_azp_ibn_data_main_t_code",
									data: "lbl_azp_ibn_data_main_t_code",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Identificacion Investigado",
									id: "lbl_azp_ibn_camera_t_identification",
									data: "lbl_azp_ibn_camera_t_identification",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Nombre Investigado",
									id: "lbl_azp_ibn_camera_t_full_name",
									data: "lbl_azp_ibn_camera_t_full_name",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Ciudad",
									id: "lbl_azp_ibn_camera_t_city",
									data: "lbl_azp_ibn_camera_t_city",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Consecutivo",
									id: "lbl_azp_ibn_camera_t_consecutive",
									data: "lbl_azp_ibn_camera_t_consecutive",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Matricula Placa",
									id: "lbl_azp_ibn_camera_t_nro_registration",
									data: "lbl_azp_ibn_camera_t_nro_registration",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Clase Certificado",
									id: "lbl_azp_fct_satisfaction_t_module",
									data: "lbl_azp_fct_satisfaction_t_module",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Reembolsable",
									id: "lbl_azp_ibn_camera_t_st_returnable",
									data: "lbl_azp_ibn_camera_t_st_returnable",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nro Recibo",
									id: "lbl_azp_ibn_camera_t_st_receipt",
									data: "lbl_azp_ibn_camera_t_st_receipt",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Valor",
									id: "lbl_azp_ibn_camera_t_st_value",
									data: "lbl_azp_ibn_camera_t_st_value",
									type: "readonly",
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
								ajax: var_url + 'api' + var_controller + "investigationcamera/" + idfct + "/?field_value=",
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
									/*{
										targets: 6,
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
									},*/
									{
										targets: 18,
										render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
									},
								],
							});
						}
						// Control de validacion de la condicion
						if (imodule == 'INMUEBLES') {
							document.getElementById('field_vs_module').value = 'Inmuebles';
							// Column Definitions
							var columnSet = [
								{
									title: "Id",
									id: "lbl_azp_ibn_property_id_azp_ibn_property",
									data: "lbl_azp_ibn_property_id_azp_ibn_property",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Item",
									id: "lbl_azp_ibn_property_m_description",
									data: "lbl_azp_ibn_property_m_description",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Cliente",
									id: "lbl_azp_fct_client_t_name",
									data: "lbl_azp_fct_client_t_name",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nro Solicitud",
									id: "lbl_azp_ibn_control_panel_t_code_research",
									data: "lbl_azp_ibn_control_panel_t_code_research",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Fecha Solicitud",
									id: "lbl_azp_ibn_control_panel_t_date_arrival",
									data: "lbl_azp_ibn_control_panel_t_date_arrival",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Fecha Entrega",
									id: "lbl_azp_ibn_control_panel_t_date_general",
									data: "lbl_azp_ibn_control_panel_t_date_general",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Identificacion Titular",
									id: "lbl_azp_ibn_property_t_identification",
									data: "lbl_azp_ibn_property_t_identification",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nombre Titular",
									id: "lbl_azp_ibn_property_t_full_name",
									data: "lbl_azp_ibn_property_t_full_name",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Obligacion",
									id: "lbl_azp_ibn_data_main_t_nro_obligation",
									data: "lbl_azp_ibn_data_main_t_nro_obligation",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Id Cliente",
									id: "lbl_azp_ibn_data_main_t_code",
									data: "lbl_azp_ibn_data_main_t_code",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Identificacion Investigado",
									id: "lbl_azp_ibn_property_t_identification",
									data: "lbl_azp_ibn_property_t_identification",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Nombre Investigado",
									id: "lbl_azp_ibn_property_t_full_name",
									data: "lbl_azp_ibn_property_t_full_name",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Ciudad",
									id: "lbl_azp_ibn_property_t_municipality",
									data: "lbl_azp_ibn_property_t_municipality",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Consecutivo",
									id: "lbl_azp_ibn_property_t_consecutive",
									data: "lbl_azp_ibn_property_t_consecutive",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Matricula Placa",
									id: "lbl_azp_ibn_property_t_nro_registration",
									data: "lbl_azp_ibn_property_t_nro_registration",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Clase Certificado",
									id: "lbl_azp_fct_satisfaction_t_module",
									data: "lbl_azp_fct_satisfaction_t_module",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Reembolsable",
									id: "lbl_azp_ibn_property_t_st_returnable",
									data: "lbl_azp_ibn_property_t_st_returnable",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nro Recibo",
									id: "lbl_azp_ibn_property_t_st_receipt",
									data: "lbl_azp_ibn_property_t_st_receipt",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Valor",
									id: "lbl_azp_ibn_property_t_st_value",
									data: "lbl_azp_ibn_property_t_st_value",
									type: "readonly",
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
								ajax: var_url + 'api' + var_controller + "investigationproperty/" + idfct + "/?field_value=",
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
									/*{
										targets: 6,
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
									},*/
									{
										targets: 18,
										render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
									},
								],
							});
						}
						// Control de validacion de la condicion
						if (imodule == 'VEHICULOS') {
							document.getElementById('field_vs_module').value = 'Vehiculos';
							// Column Definitions
							var columnSet = [
								{
									title: "Id",
									id: "lbl_azp_ibn_vehicle_id_azp_ibn_vehicle",
									data: "lbl_azp_ibn_vehicle_id_azp_ibn_vehicle",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Item",
									id: "lbl_azp_ibn_vehicle_m_description",
									data: "lbl_azp_ibn_vehicle_m_description",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Cliente",
									id: "lbl_azp_fct_client_t_name",
									data: "lbl_azp_fct_client_t_name",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nro Solicitud",
									id: "lbl_azp_ibn_control_panel_t_code_research",
									data: "lbl_azp_ibn_control_panel_t_code_research",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Fecha Solicitud",
									id: "lbl_azp_ibn_control_panel_t_date_arrival",
									data: "lbl_azp_ibn_control_panel_t_date_arrival",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Fecha Entrega",
									id: "lbl_azp_ibn_control_panel_t_date_general",
									data: "lbl_azp_ibn_control_panel_t_date_general",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Identificacion Titular",
									id: "lbl_azp_ibn_vehicle_t_identification",
									data: "lbl_azp_ibn_vehicle_t_identification",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nombre Titular",
									id: "lbl_azp_ibn_vehicle_t_full_name",
									data: "lbl_azp_ibn_vehicle_t_full_name",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Obligacion",
									id: "lbl_azp_ibn_data_main_t_nro_obligation",
									data: "lbl_azp_ibn_data_main_t_nro_obligation",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Id Cliente",
									id: "lbl_azp_ibn_data_main_t_code",
									data: "lbl_azp_ibn_data_main_t_code",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Identificacion Investigado",
									id: "lbl_azp_ibn_vehicle_t_identification",
									data: "lbl_azp_ibn_vehicle_t_identification",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Nombre Investigado",
									id: "lbl_azp_ibn_vehicle_t_full_name",
									data: "lbl_azp_ibn_vehicle_t_full_name",
									type: "readonly",
									className: "text-dark",
									visible: false,
								},
								{
									title: "Ciudad",
									id: "lbl_azp_ibn_vehicle_t_city",
									data: "lbl_azp_ibn_vehicle_t_city",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Consecutivo",
									id: "lbl_azp_ibn_vehicle_t_consecutive",
									data: "lbl_azp_ibn_vehicle_t_consecutive",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Matricula Placa",
									id: "lbl_azp_ibn_vehicle_t_plaque",
									data: "lbl_azp_ibn_vehicle_t_plaque",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Clase Certificado",
									id: "lbl_azp_fct_satisfaction_t_module",
									data: "lbl_azp_fct_satisfaction_t_module",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Reembolsable",
									id: "lbl_azp_ibn_vehicle_t_st_returnable",
									data: "lbl_azp_ibn_vehicle_t_st_returnable",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Nro Recibo",
									id: "lbl_azp_ibn_vehicle_t_st_receipt",
									data: "lbl_azp_ibn_vehicle_t_st_receipt",
									type: "readonly",
									className: "text-dark",
									visible: true,
								},
								{
									title: "Valor",
									id: "lbl_azp_ibn_vehicle_t_st_value",
									data: "lbl_azp_ibn_vehicle_t_st_value",
									type: "readonly",
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
								ajax: var_url + 'api' + var_controller + "investigationvehicle/" + idfct + "/?field_value=",
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
									/*{
										targets: 6,
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
									},*/
									{
										targets: 18,
										render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
									},
								],
							});
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

function event_investigation() {
	var idvision = document.getElementById('field_vs_register').value;
	var idmodule = document.getElementById('field_vs_module').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_vision').removeClass('alert-danger');
	$('#form_ajax_vision').removeClass('alert-success');
	$('#form_ajax_vision').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_vision').addClass('alert-warning');
	$("#form_ajax_vision").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_vision').removeClass('hide');
	$('#form_ajax_vision').addClass('alert');
	var ajaxurl = var_url + var_controller + "xlsxinvestigation/" + idvision + '/?field_module=' + idmodule;
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
		$('#form_ajax_vision').removeClass('alert-danger');
		$('#form_ajax_vision').removeClass('alert-success');
		$('#form_ajax_vision').removeClass('alert-warning');
		$('#form_ajax_vision').addClass('alert-success');
		$("#form_ajax_vision").html(success_icon  + 'Exito: Reporte generado correctamente.');
		$('#form_ajax_vision').removeClass('hide');
		setTimeout(function() {
			$('#form_ajax_vision').removeClass('alert');
			$('#form_ajax_vision').addClass('hide');
			$('#form_ajax_vision').html('');
		}, 5000);
		var a = $("<a>").attr("href", argument).attr("download", 'Reembolsos Investigacion').appendTo("body");
		a[0].click(); a.remove();
		// Recargar la tabla con nueva informacion
		if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
		if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
	});
};

function event_certificate() {
	var idvision = document.getElementById('field_vs_register').value;
	var idmodule = document.getElementById('field_vs_module').value;
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_vision').removeClass('alert-danger');
	$('#form_ajax_vision').removeClass('alert-success');
	$('#form_ajax_vision').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_vision').addClass('alert-warning');
	$("#form_ajax_vision").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_vision').removeClass('hide');
	$('#form_ajax_vision').addClass('alert');
	var ajaxurl = var_url + var_controller + "xlsxcertificate/" + idvision + '/?field_module=' + idmodule;
	$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
		$('#form_ajax_vision').removeClass('alert-danger');
		$('#form_ajax_vision').removeClass('alert-success');
		$('#form_ajax_vision').removeClass('alert-warning');
		$('#form_ajax_vision').addClass('alert-success');
		$("#form_ajax_vision").html(success_icon  + 'Exito: Reporte generado correctamente.');
		$('#form_ajax_vision').removeClass('hide');
		setTimeout(function() {
			$('#form_ajax_vision').removeClass('alert');
			$('#form_ajax_vision').addClass('hide');
			$('#form_ajax_vision').html('');
		}, 5000);
		var a = $("<a>").attr("href", argument).attr("download", 'Reembolsos Certificados').appendTo("body");
		a[0].click(); a.remove();
		// Recargar la tabla con nueva informacion
		if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
		if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
	});
};

function info_certificate() {
	var sregister = document.getElementById('field_vs_register').value;
	var srefundable = document.getElementById('field_ct_refundable').value;
	document.getElementById('field_vs_module').value = 'Ninguno';
	$("#div_certificate").removeClass('d-none');
	// Column Definitions
	var columnSet = [
		{
			title: "Id",
			id: "lbl_azp_crt_request_data_id_azp_crt_request_data",
			data: "lbl_azp_crt_request_data_id_azp_crt_request_data",
			type: "readonly",
			className: "text-dark",
			visible: false,
		},
		{
			title: "Cliente",
			id: "lbl_azp_crt_bank_t_name",
			data: "lbl_azp_crt_bank_t_name",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Nro Solicitud",
			id: "lbl_azp_crt_request_data_t_request_nro",
			data: "lbl_azp_crt_request_data_t_request_nro",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Fecha Solicitud",
			id: "lbl_azp_crt_request_data_t_request_date",
			data: "lbl_azp_crt_request_data_t_request_date",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Fecha Entrega",
			id: "lbl_azp_crt_request_data_t_date_delivery",
			data: "lbl_azp_crt_request_data_t_date_delivery",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Cedula",
			id: "lbl_azp_crt_request_data_t_identification",
			data: "lbl_azp_crt_request_data_t_identification",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Nombre",
			id: "lbl_azp_crt_request_data_t_full_name",
			data: "lbl_azp_crt_request_data_t_full_name",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Obligacion",
			id: "lbl_azp_crt_request_data_t_nro_oblitation",
			data: "lbl_azp_crt_request_data_t_nro_oblitation",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Id_ICS",
			id: "lbl_azp_crt_request_data_t_request_id",
			data: "lbl_azp_crt_request_data_t_request_id",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Tipo Certificado",
			id: "lbl_azp_crt_request_type_t_name",
			data: "lbl_azp_crt_request_type_t_name",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Detalle Certificado",
			id: "lbl_azp_crt_request_data_t_plaque_enrollment",
			data: "lbl_azp_crt_request_data_t_plaque_enrollment",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Ciudad FMI",
			id: "lbl_azp_crt_city_t_name",
			data: "lbl_azp_crt_city_t_name",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Solicitante",
			id: "lbl_azp_crt_request_data_t_applicant_entity",
			data: "lbl_azp_crt_request_data_t_applicant_entity",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Facturables",
			id: "lbl_azp_crt_request_data_t_bilable",
			data: "lbl_azp_crt_request_data_t_bilable",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Reembolsable",
			id: "lbl_azp_crt_request_data_t_refundable",
			data: "lbl_azp_crt_request_data_t_refundable",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Proveedor",
			id: "lbl_azp_crt_request_data_t_provider_name",
			data: "lbl_azp_crt_request_data_t_provider_name",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "No Recibo",
			id: "lbl_azp_crt_request_data_t_rcb_nro_receipt",
			data: "lbl_azp_crt_request_data_t_rcb_nro_receipt",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Servicios",
			id: "lbl_azp_crt_request_data_t_fct_service",
			data: "lbl_azp_crt_request_data_t_fct_service",
			type: "readonly",
			className: "text-dark",
			visible: true,
		},
		{
			title: "Valor Certificado",
			id: "lbl_azp_crt_request_data_t_rcb_amount",
			data: "lbl_azp_crt_request_data_t_rcb_amount",
			type: "readonly",
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
		ajax: var_url + 'api' + var_controller + "certificate/" + sregister + "/?field_value=" + srefundable,
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
			/*{
				targets: 6,
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
			},*/
			{
				targets: 17,
				render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
			},
			{
				targets: 18,
				render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
			},
		],
	});
};

function info_investigation() {
	var sregister = document.getElementById('field_vs_register').value;
	var imodule = document.getElementById('field_vs_module').value;
	var srefundable = document.getElementById('field_it_refundable').value;
	console.log(sregister);
	console.log(imodule);
	console.log(srefundable);
	// Control de validacion de la condicion
	if (imodule == 'Camaras') {
		//document.getElementById('field_vs_module').value = 'Camaras';
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_camera_id_azp_ibn_camera",
				data: "lbl_azp_ibn_camera_id_azp_ibn_camera",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Item",
				id: "lbl_azp_ibn_camera_m_description",
				data: "lbl_azp_ibn_camera_m_description",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Cliente",
				id: "lbl_azp_fct_client_t_name",
				data: "lbl_azp_fct_client_t_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Solicitud",
				id: "lbl_azp_ibn_control_panel_t_code_research",
				data: "lbl_azp_ibn_control_panel_t_code_research",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Solicitud",
				id: "lbl_azp_ibn_control_panel_t_date_arrival",
				data: "lbl_azp_ibn_control_panel_t_date_arrival",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Entrega",
				id: "lbl_azp_ibn_control_panel_t_date_general",
				data: "lbl_azp_ibn_control_panel_t_date_general",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Identificacion Titular",
				id: "lbl_azp_ibn_camera_t_identification",
				data: "lbl_azp_ibn_camera_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre Titular",
				id: "lbl_azp_ibn_camera_t_full_name",
				data: "lbl_azp_ibn_camera_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Obligacion",
				id: "lbl_azp_ibn_data_main_t_nro_obligation",
				data: "lbl_azp_ibn_data_main_t_nro_obligation",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Id Cliente",
				id: "lbl_azp_ibn_data_main_t_code",
				data: "lbl_azp_ibn_data_main_t_code",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Identificacion Investigado",
				id: "lbl_azp_ibn_camera_t_identification",
				data: "lbl_azp_ibn_camera_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Nombre Investigado",
				id: "lbl_azp_ibn_camera_t_full_name",
				data: "lbl_azp_ibn_camera_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Ciudad",
				id: "lbl_azp_ibn_camera_t_city",
				data: "lbl_azp_ibn_camera_t_city",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Consecutivo",
				id: "lbl_azp_ibn_camera_t_consecutive",
				data: "lbl_azp_ibn_camera_t_consecutive",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},

			{
				title: "Matricula Placa",
				id: "lbl_azp_ibn_camera_t_nro_registration",
				data: "lbl_azp_ibn_camera_t_nro_registration",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Clase Certificado",
				id: "lbl_azp_fct_satisfaction_t_module",
				data: "lbl_azp_fct_satisfaction_t_module",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Reembolsable",
				id: "lbl_azp_ibn_camera_t_st_returnable",
				data: "lbl_azp_ibn_camera_t_st_returnable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Recibo",
				id: "lbl_azp_ibn_camera_t_st_receipt",
				data: "lbl_azp_ibn_camera_t_st_receipt",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Valor",
				id: "lbl_azp_ibn_camera_t_st_value",
				data: "lbl_azp_ibn_camera_t_st_value",
				type: "readonly",
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
			ajax: var_url + 'api' + var_controller + "investigationcamera/" + sregister + "/?field_value=" + srefundable,
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
				/*{
					targets: 6,
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
				},*/
				{
					targets: 18,
					render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
				},
			],
		});
	}
	// Control de validacion de la condicion
	if (imodule == 'Inmuebles') {
		//document.getElementById('field_vs_module').value = 'Inmuebles';
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_property_id_azp_ibn_property",
				data: "lbl_azp_ibn_property_id_azp_ibn_property",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Item",
				id: "lbl_azp_ibn_property_m_description",
				data: "lbl_azp_ibn_property_m_description",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Cliente",
				id: "lbl_azp_fct_client_t_name",
				data: "lbl_azp_fct_client_t_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Solicitud",
				id: "lbl_azp_ibn_control_panel_t_code_research",
				data: "lbl_azp_ibn_control_panel_t_code_research",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Solicitud",
				id: "lbl_azp_ibn_control_panel_t_date_arrival",
				data: "lbl_azp_ibn_control_panel_t_date_arrival",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Entrega",
				id: "lbl_azp_ibn_control_panel_t_date_general",
				data: "lbl_azp_ibn_control_panel_t_date_general",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Identificacion Titular",
				id: "lbl_azp_ibn_property_t_identification",
				data: "lbl_azp_ibn_property_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre Titular",
				id: "lbl_azp_ibn_property_t_full_name",
				data: "lbl_azp_ibn_property_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Obligacion",
				id: "lbl_azp_ibn_data_main_t_nro_obligation",
				data: "lbl_azp_ibn_data_main_t_nro_obligation",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Id Cliente",
				id: "lbl_azp_ibn_data_main_t_code",
				data: "lbl_azp_ibn_data_main_t_code",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Identificacion Investigado",
				id: "lbl_azp_ibn_property_t_identification",
				data: "lbl_azp_ibn_property_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Nombre Investigado",
				id: "lbl_azp_ibn_property_t_full_name",
				data: "lbl_azp_ibn_property_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Ciudad",
				id: "lbl_azp_ibn_property_t_municipality",
				data: "lbl_azp_ibn_property_t_municipality",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Consecutivo",
				id: "lbl_azp_ibn_property_t_consecutive",
				data: "lbl_azp_ibn_property_t_consecutive",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Matricula Placa",
				id: "lbl_azp_ibn_property_t_nro_registration",
				data: "lbl_azp_ibn_property_t_nro_registration",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Clase Certificado",
				id: "lbl_azp_fct_satisfaction_t_module",
				data: "lbl_azp_fct_satisfaction_t_module",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Reembolsable",
				id: "lbl_azp_ibn_property_t_st_returnable",
				data: "lbl_azp_ibn_property_t_st_returnable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Recibo",
				id: "lbl_azp_ibn_property_t_st_receipt",
				data: "lbl_azp_ibn_property_t_st_receipt",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Valor",
				id: "lbl_azp_ibn_property_t_st_value",
				data: "lbl_azp_ibn_property_t_st_value",
				type: "readonly",
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
			ajax: var_url + 'api' + var_controller + "investigationproperty/" + sregister + "/?field_value=" + srefundable,
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
				/*{
					targets: 6,
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
				},*/
				{
					targets: 18,
					render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
				},
			],
		});
	}
	// Control de validacion de la condicion
	if (imodule == 'Vehiculos') {
		//document.getElementById('field_vs_module').value = 'Vehiculos';
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_vehicle_id_azp_ibn_vehicle",
				data: "lbl_azp_ibn_vehicle_id_azp_ibn_vehicle",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Item",
				id: "lbl_azp_ibn_vehicle_m_description",
				data: "lbl_azp_ibn_vehicle_m_description",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Cliente",
				id: "lbl_azp_fct_client_t_name",
				data: "lbl_azp_fct_client_t_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Solicitud",
				id: "lbl_azp_ibn_control_panel_t_code_research",
				data: "lbl_azp_ibn_control_panel_t_code_research",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Solicitud",
				id: "lbl_azp_ibn_control_panel_t_date_arrival",
				data: "lbl_azp_ibn_control_panel_t_date_arrival",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha Entrega",
				id: "lbl_azp_ibn_control_panel_t_date_general",
				data: "lbl_azp_ibn_control_panel_t_date_general",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Identificacion Titular",
				id: "lbl_azp_ibn_vehicle_t_identification",
				data: "lbl_azp_ibn_vehicle_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre Titular",
				id: "lbl_azp_ibn_vehicle_t_full_name",
				data: "lbl_azp_ibn_vehicle_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Obligacion",
				id: "lbl_azp_ibn_data_main_t_nro_obligation",
				data: "lbl_azp_ibn_data_main_t_nro_obligation",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Id Cliente",
				id: "lbl_azp_ibn_data_main_t_code",
				data: "lbl_azp_ibn_data_main_t_code",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Identificacion Investigado",
				id: "lbl_azp_ibn_vehicle_t_identification",
				data: "lbl_azp_ibn_vehicle_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Nombre Investigado",
				id: "lbl_azp_ibn_vehicle_t_full_name",
				data: "lbl_azp_ibn_vehicle_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Ciudad",
				id: "lbl_azp_ibn_vehicle_t_city",
				data: "lbl_azp_ibn_vehicle_t_city",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Consecutivo",
				id: "lbl_azp_ibn_vehicle_t_consecutive",
				data: "lbl_azp_ibn_vehicle_t_consecutive",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Matricula Placa",
				id: "lbl_azp_ibn_vehicle_t_plaque",
				data: "lbl_azp_ibn_vehicle_t_plaque",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Clase Certificado",
				id: "lbl_azp_fct_satisfaction_t_module",
				data: "lbl_azp_fct_satisfaction_t_module",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Reembolsable",
				id: "lbl_azp_ibn_vehicle_t_st_returnable",
				data: "lbl_azp_ibn_vehicle_t_st_returnable",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nro Recibo",
				id: "lbl_azp_ibn_vehicle_t_st_receipt",
				data: "lbl_azp_ibn_vehicle_t_st_receipt",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Valor",
				id: "lbl_azp_ibn_vehicle_t_st_value",
				data: "lbl_azp_ibn_vehicle_t_st_value",
				type: "readonly",
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
			ajax: var_url + 'api' + var_controller + "investigationvehicle/" + sregister + "/?field_value=" + srefundable,
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
				/*{
					targets: 6,
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
				},*/
				{
					targets: 18,
					render: $.fn.dataTable.render.number(',', '.', 2, '$', ''),
				},
			],
		});
	}
}

function modal_consolidated() {
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_tb_info');
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
		// Validacion de mensajes o alertas
		/*var requestacl = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurlacl = var_url + 'api' + var_controller + "alertclient/?field_check=" + value_checked;
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
					} else {*/
						// Visualizar ventana modal en la interfaz
						$('#modal-id-consolidated').modal('show');
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
};

function event_consolidated() {
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_tb_info');
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
	} else {
		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_consolidated').removeClass('alert-danger');
		$('#form_ajax_consolidated').removeClass('alert-success');
		$('#form_ajax_consolidated').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_consolidated').addClass('alert-warning');
		$("#form_ajax_consolidated").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_consolidated').removeClass('hide');
		$('#form_ajax_consolidated').addClass('alert');
		//var ajaxclient = var_url + "dashboard/formatconsolidated/" + idtbl + "/";
		//$.ajax({ type: 'POST', url: ajaxclient, }).done(function(data) {
			var ajaxurl = var_url + var_controller + "consolidated/?field_check=" + value_checked;
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#form_ajax_consolidated').removeClass('alert-danger');
				$('#form_ajax_consolidated').removeClass('alert-success');
				$('#form_ajax_consolidated').removeClass('alert-warning');
				$('#form_ajax_consolidated').addClass('alert-success');
				$("#form_ajax_consolidated").html(success_icon  + 'Exito: Reporte generado correctamente.');
				$('#form_ajax_consolidated').removeClass('hide');
				setTimeout(function() {
					$('#form_ajax_consolidated').removeClass('alert');
					$('#form_ajax_consolidated').addClass('hide');
					$('#form_ajax_consolidated').html('');
				}, 5000);
				var a = $("<a>").attr("href", argument).attr("download", 'Reporte Reembolsos').appendTo("body");
				a[0].click(); a.remove();
				// Recargar la tabla con nueva informacion
				if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
				if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
				// Cerrar ventana modal en la interfaz
				$('#modal-id-consolidated').modal('hide');
				// Desmarcar el checkbox de seleccionar todos
				$('#field_ck_info').prop('checked', false);
			});
		//});
	}
};

function graphic_group_by() {
	// Obtener datos de un elemento especifico por id y asignacion de valores
	var var_ajax_client = var_url + 'api' + var_controller + "gpclient/";
	var var_ajax_service = var_url + 'api' + var_controller + "gpservice/";
	var val_ajax_certificate = var_ajax_service + '?field_service=1';
	var val_ajax_defunction = var_ajax_service + '?field_service=2';
	var val_ajax_investigation = var_ajax_service + '?field_service=3';
	// Enviar datos por ajax
	$.ajax({
		url: var_ajax_client,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			console.log(data);
			val_options.xAxis.categories = data;
			val_chart = new Highcharts.chart(val_options);
		}
	});
	// Enviar datos por ajax
	$.ajax({
		url: val_ajax_certificate,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			val_options.series[0].data = data;
			val_chart = new Highcharts.chart(val_options);
		}
	});
	// Enviar datos por ajax
	$.ajax({
		url: val_ajax_defunction,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			val_options.series[1].data = data;
			val_chart = new Highcharts.chart(val_options);
		}
	});
	// Enviar datos por ajax
	$.ajax({
		url: val_ajax_investigation,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			val_options.series[2].data = data;
			val_chart = new Highcharts.chart(val_options);
		}
	});
	val_options = {
		//Highcharts.chart('gp_group_by', {
			chart: {
				renderTo: 'gp_group_by',
				type: 'column',
			},
			title: {
				text: 'Datos Graficos',
			},
			subtitle: {
				text: 'Informacion Agrupada',
			},
			xAxis: {
				categories: [],
				crosshair: true,
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Valores Extraidos',
				},
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>$ {point.y:.2f}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true,
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
				},
			},
			series: [
				{
					type: 'column',
					name: 'Certificados',
					data: [],
				},
				{
					type: 'column',
					name: 'Defuncion',
					data: [],
				},
				{
					type: 'column',
					name: 'Investigacion',
					data: [],
				},
			]
		//});
	};
};


















function modal_consolidatud() {
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_tb_infu');
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
		// Validacion de mensajes o alertas
		/*var requestacl = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurlacl = var_url + 'api' + var_controller + "alertclient/?field_check=" + value_checked;
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
					} else {*/
						// Visualizar ventana modal en la interfaz
						$('#modal-id-consolidatud').modal('show');
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
};

function event_consolidatud() {
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_tb_infu');
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
	} else {
		// Definir los iconos para los correspondientes mensajes
		var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
		var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
		var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_consolidatud').removeClass('alert-danger');
		$('#form_ajax_consolidatud').removeClass('alert-success');
		$('#form_ajax_consolidatud').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_consolidatud').addClass('alert-warning');
		$("#form_ajax_consolidatud").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_consolidatud').removeClass('hide');
		$('#form_ajax_consolidatud').addClass('alert');
		//var ajaxclient = var_url + "dashboard/formatconsolidatud/" + idtbl + "/";
		//$.ajax({ type: 'POST', url: ajaxclient, }).done(function(data) {
			var ajaxurl = var_url + var_controller + "consolidatud/?field_check=" + value_checked;
			$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
				$('#form_ajax_consolidatud').removeClass('alert-danger');
				$('#form_ajax_consolidatud').removeClass('alert-success');
				$('#form_ajax_consolidatud').removeClass('alert-warning');
				$('#form_ajax_consolidatud').addClass('alert-success');
				$("#form_ajax_consolidatud").html(success_icon  + 'Exito: Reporte generado correctamente.');
				$('#form_ajax_consolidatud').removeClass('hide');
				setTimeout(function() {
					$('#form_ajax_consolidatud').removeClass('alert');
					$('#form_ajax_consolidatud').addClass('hide');
					$('#form_ajax_consolidatud').html('');
				}, 5000);
				var a = $("<a>").attr("href", argument).attr("download", 'Reporte Reembolsos').appendTo("body");
				a[0].click(); a.remove();
				// Recargar la tabla con nueva informacion
				if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
				if ($("#dt_group").length) { $('#dt_group').DataTable().ajax.reload(); }
				// Cerrar ventana modal en la interfaz
				$('#modal-id-consolidatud').modal('hide');
				// Desmarcar el checkbox de seleccionar todos
				$('#field_ck_info').prop('checked', false);
			});
		//});
	}
};