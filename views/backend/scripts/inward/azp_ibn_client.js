if (document.getElementById('form_btn_concept_all')) {
	document.getElementById('form_btn_concept_all').onclick = function(e) {
		e.preventDefault();
		event_concept_all();
	};
}

if (document.getElementById('form_concept_all')) {
	document.getElementById('form_concept_all').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_concept_all();
			return false;
		}
	};
}

if (document.getElementById('form_btn_concept_cam')) {
	document.getElementById('form_btn_concept_cam').onclick = function(e) {
		e.preventDefault();
		event_concept_cam();
	};
}

if (document.getElementById('form_concept_cam')) {
	document.getElementById('form_concept_cam').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_concept_cam();
			return false;
		}
	};
}

if (document.getElementById('form_btn_concept_fur')) {
	document.getElementById('form_btn_concept_fur').onclick = function(e) {
		e.preventDefault();
		event_concept_fur();
	};
}

if (document.getElementById('form_concept_fur')) {
	document.getElementById('form_concept_fur').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_concept_fur();
			return false;
		}
	};
}

if (document.getElementById('form_btn_concept_pro')) {
	document.getElementById('form_btn_concept_pro').onclick = function(e) {
		e.preventDefault();
		event_concept_pro();
	};
}

if (document.getElementById('form_concept_pro')) {
	document.getElementById('form_concept_pro').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_concept_pro();
			return false;
		}
	};
}

if (document.getElementById('form_btn_concept_veh')) {
	document.getElementById('form_btn_concept_veh').onclick = function(e) {
		e.preventDefault();
		event_concept_veh();
	};
}

if (document.getElementById('form_concept_veh')) {
	document.getElementById('form_concept_veh').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_concept_veh();
			return false;
		}
	};
}

if (document.getElementById('form_btn_concept_war')) {
	document.getElementById('form_btn_concept_war').onclick = function(e) {
		e.preventDefault();
		event_concept_war();
	};
}

if (document.getElementById('form_concept_war')) {
	document.getElementById('form_concept_war').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_concept_war();
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

if (document.getElementById('form_btn_format')) {
	document.getElementById('form_btn_format').onclick = function(e) {
		e.preventDefault();
		event_format();
	};
}

if (document.getElementById('form_format')) {
	document.getElementById('form_format').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_format();
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

if (document.getElementById('form_btn_unstore')) {
	document.getElementById('form_btn_unstore').onclick = function(e) {
		e.preventDefault();
		event_unstore();
	};
}

if (document.getElementById('form_unstore')) {
	document.getElementById('form_unstore').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_unstore();
			return false;
		}
	};
}

function action_checkbox_pc_no() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_pc_no').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_policy_no').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_policy_no').prop('checked', false);
	}
};

function action_checkbox_pc_si() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_pc_si').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_policy_si').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_policy_si').prop('checked', false);
	}
};

function action_checkbox_rg_no() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_rg_no').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_regulation_no').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_regulation_no').prop('checked', false);
	}
};

function action_checkbox_rg_si() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_rg_si').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_regulation_si').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.dt_table_regulation_si').prop('checked', false);
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
				id: "lbl_azs_ibn_client_id_azs_ibn_client",
				data: "lbl_azs_ibn_client_id_azs_ibn_client",
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
				id: "lbl_azs_ibn_client_m_date_created",
				data: "lbl_azs_ibn_client_m_date_created",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azs_ibn_client_m_date_modified",
				data: "lbl_azs_ibn_client_m_date_modified",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azs_ibn_client_m_description",
				data: "lbl_azs_ibn_client_m_description",
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
				title: "Dias Cumplimiento",
				id: "lbl_azs_ibn_client_t_days",
				data: "lbl_azs_ibn_client_t_days",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre",
				id: "lbl_azs_ibn_client_t_name",
				data: "lbl_azs_ibn_client_t_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Sector",
				id: "lbl_azs_ibn_client_u_ibn_sector",
				data: "lbl_azs_ibn_client_u_ibn_sector",
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

function event_concept_all() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_all').removeClass('alert-danger');
	$('#form_ajax_concept_all').removeClass('alert-success');
	$('#form_ajax_concept_all').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_all').addClass('alert-warning');
	$("#form_ajax_concept_all").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_concept_all').removeClass('hide');
	$('#form_ajax_concept_all').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-concept_all').modal('hide');
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
						$('#form_ajax_concept_all').removeClass('alert');
						$('#form_ajax_concept_all').addClass('hide');
						$('#form_ajax_concept_all').html('');
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
					$('#modal-id-concept_all').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/concept_all",
						data : $('#form_concept_all').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_all').html(success_icon + obj.message);
								$("#form_ajax_concept_all").removeClass('alert-warning');
								$("#form_ajax_concept_all").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-concept_all').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_concept_all').removeClass('alert');
									$('#form_ajax_concept_all').addClass('hide');
									$('#form_ajax_concept_all').html('');
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
								$('#modal-id-concept_all').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_all').html(error_icon + obj.message);
								$("#form_ajax_concept_all").removeClass('alert-warning');
								$("#form_ajax_concept_all").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_concept_all').addClass('alert-danger');
							$("#form_ajax_concept_all").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_concept_all').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
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
						url : "api/azp_ibn_client/create",
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
						url : "api/azp_ibn_client/delete",
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
					document.querySelector("#lbl_azp_ibn_client_id_azp_ibn_client").innerHTML = objData.data.lbl_azp_ibn_client_id_azp_ibn_client;
					document.querySelector("#lbl_azp_user_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_user_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_ibn_client_m_date_created").innerHTML = objData.data.lbl_azp_ibn_client_m_date_created;
					document.querySelector("#lbl_azp_ibn_client_m_date_modified").innerHTML = objData.data.lbl_azp_ibn_client_m_date_modified;
					document.querySelector("#lbl_azp_ibn_client_m_description").innerHTML = objData.data.lbl_azp_ibn_client_m_description;
					document.querySelector("#lbl_azp_sys_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector("#lbl_azp_ibn_client_t_days").innerHTML = objData.data.lbl_azp_ibn_client_t_days;
					document.querySelector("#lbl_azp_ibn_client_t_name").innerHTML = objData.data.lbl_azp_ibn_client_t_name;
					document.querySelector("#lbl_azp_ibn_sector_t_name").innerHTML = objData.data.lbl_azp_ibn_sector_t_name;
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
						url : "api/azp_ibn_client/remove",
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
						url : "api/azp_ibn_client/restore",
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
						url : "api/azp_ibn_client/update",
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
	//$('#modal-id-archive').modal('hide');
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
					$('#modal-id-archive').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/archive",
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
									message: "<span><strong>Exito:</strong> Haz archivado exitosamente el registro.</span>",
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

function event_unstore() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_unstore').removeClass('alert-danger');
	$('#form_ajax_unstore').removeClass('alert-success');
	$('#form_ajax_unstore').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_unstore').addClass('alert-warning');
	$("#form_ajax_unstore").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_unstore').removeClass('hide');
	$('#form_ajax_unstore').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-unstore').modal('hide');
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
						$('#form_ajax_unstore').removeClass('alert');
						$('#form_ajax_unstore').addClass('hide');
						$('#form_ajax_unstore').html('');
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
					$('#modal-id-unstore').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/unstore",
						data : $('#form_unstore').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_unstore').html(success_icon + obj.message);
								$("#form_ajax_unstore").removeClass('alert-warning');
								$("#form_ajax_unstore").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-unstore').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_unstore').removeClass('alert');
									$('#form_ajax_unstore').addClass('hide');
									$('#form_ajax_unstore').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz archivado exitosamente el registro.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-unstore').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_unstore').html(error_icon + obj.message);
								$("#form_ajax_unstore").removeClass('alert-warning');
								$("#form_ajax_unstore").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_unstore').addClass('alert-danger');
							$("#form_ajax_unstore").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_unstore').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function modal_concept_all() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-concept_all').modal('show');
		document.getElementById('field_id_concept_all').value = idtbl;
		
		/*var request_m_cm = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl_m_cm = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=1";
		request_m_cm.open("GET", ajaxurl_m_cm, true);
		request_m_cm.send();
		request_m_cm.onreadystatechange = function(){
			if (request_m_cm.readyState == 4 && request_m_cm.status == 200) {
				var objData = JSON.parse(request_m_cm.responseText);
				if (objData.status) {
					document.querySelector("#field_m_cm_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
					document.querySelector("#field_m_cm_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
					document.querySelector("#field_m_cm_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
					document.querySelector("#field_m_cm_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
					document.querySelector("#field_m_cm_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
					document.querySelector("#field_m_cm_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
					document.querySelector("#field_m_cm_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
					document.querySelector("#field_m_cm_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
					document.querySelector("#field_m_cm_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
					document.querySelector("#field_m_cm_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
					document.querySelector("#field_m_cm_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
					document.querySelector("#field_m_cm_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
					document.querySelector("#field_m_cm_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
					document.querySelector("#field_m_cm_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
					document.querySelector("#field_m_cm_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
					document.querySelector("#field_m_cm_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
					document.querySelector("#field_m_cm_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
					document.querySelector("#field_m_cm_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
					document.querySelector("#field_m_cm_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
					document.querySelector("#field_m_cm_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
					document.querySelector("#field_m_cm_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
					document.querySelector("#field_m_cm_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

					var id = document.getElementById('field_m_cm_ibn_module').value;
					var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
					$.ajax({
						type: 'POST',
						url: ajaxurl,
					}).done(function(argument) {
						$('#field_m_cm_land_01').html(argument);
						$('#field_m_cm_land_02').html(argument);
						$('#field_m_cm_land_03').html(argument);
						$('#field_m_cm_land_04').html(argument);
						$('#field_m_cm_land_05').html(argument);
						$('#field_m_cm_land_06').html(argument);
						$('#field_m_cm_land_07').html(argument);
						$('#field_m_cm_land_08').html(argument);
						$('#field_m_cm_land_09').html(argument);
						$('#field_m_cm_land_10').html(argument);
						$('#field_m_cm_land_11').html(argument);
						$('#field_m_cm_land_12').html(argument);
						$('#field_m_cm_land_13').html(argument);
						$('#field_m_cm_land_14').html(argument);
						$('#field_m_cm_land_15').html(argument);
						$('#field_m_cm_land_16').html(argument);
						$('#field_m_cm_land_17').html(argument);
						$('#field_m_cm_land_18').html(argument);
						$('#field_m_cm_land_19').html(argument);
						$('#field_m_cm_land_20').html(argument);
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_01 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_01").value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_02 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_02").value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_03 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_03").value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_04 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_04").value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_05 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_05").value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_06 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_06").value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_07 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_07").value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_08 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_08").value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_09 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_09").value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_10 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_10").value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_11 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_11").value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_12 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_12").value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_13 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_13").value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_14 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_14").value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_15 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_15").value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_16 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_16").value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_17 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_17").value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_18 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_18").value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_19 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_19").value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_20 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_cm_land_20").value = objData.data.lbl_azp_ibn_concept_t_land_20;
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
		
		var request_m_ft = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl_m_ft = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=5";
		request_m_ft.open("GET", ajaxurl_m_ft, true);
		request_m_ft.send();
		request_m_ft.onreadystatechange = function(){
			if (request_m_ft.readyState == 4 && request_m_ft.status == 200) {
				var objData = JSON.parse(request_m_ft.responseText);
				if (objData.status) {
					document.querySelector("#field_m_ft_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
					document.querySelector("#field_m_ft_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
					document.querySelector("#field_m_ft_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
					document.querySelector("#field_m_ft_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
					document.querySelector("#field_m_ft_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
					document.querySelector("#field_m_ft_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
					document.querySelector("#field_m_ft_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
					document.querySelector("#field_m_ft_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
					document.querySelector("#field_m_ft_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
					document.querySelector("#field_m_ft_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
					document.querySelector("#field_m_ft_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
					document.querySelector("#field_m_ft_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
					document.querySelector("#field_m_ft_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
					document.querySelector("#field_m_ft_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
					document.querySelector("#field_m_ft_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
					document.querySelector("#field_m_ft_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
					document.querySelector("#field_m_ft_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
					document.querySelector("#field_m_ft_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
					document.querySelector("#field_m_ft_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
					document.querySelector("#field_m_ft_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
					document.querySelector("#field_m_ft_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
					document.querySelector("#field_m_ft_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

					var id = document.getElementById('field_m_ft_ibn_module').value;
					var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
					$.ajax({
						type: 'POST',
						url: ajaxurl,
					}).done(function(argument) {
						$('#field_m_ft_land_01').html(argument);
						$('#field_m_ft_land_02').html(argument);
						$('#field_m_ft_land_03').html(argument);
						$('#field_m_ft_land_04').html(argument);
						$('#field_m_ft_land_05').html(argument);
						$('#field_m_ft_land_06').html(argument);
						$('#field_m_ft_land_07').html(argument);
						$('#field_m_ft_land_08').html(argument);
						$('#field_m_ft_land_09').html(argument);
						$('#field_m_ft_land_10').html(argument);
						$('#field_m_ft_land_11').html(argument);
						$('#field_m_ft_land_12').html(argument);
						$('#field_m_ft_land_13').html(argument);
						$('#field_m_ft_land_14').html(argument);
						$('#field_m_ft_land_15').html(argument);
						$('#field_m_ft_land_16').html(argument);
						$('#field_m_ft_land_17').html(argument);
						$('#field_m_ft_land_18').html(argument);
						$('#field_m_ft_land_19').html(argument);
						$('#field_m_ft_land_20').html(argument);
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_01 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_01").value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_02 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_02").value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_03 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_03").value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_04 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_04").value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_05 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_05").value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_06 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_06").value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_07 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_07").value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_08 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_08").value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_09 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_09").value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_10 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_10").value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_11 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_11").value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_12 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_12").value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_13 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_13").value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_14 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_14").value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_15 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_15").value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_16 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_16").value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_17 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_17").value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_18 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_18").value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_19 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_19").value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_20 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_ft_land_20").value = objData.data.lbl_azp_ibn_concept_t_land_20;
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
		
		var request_m_pt = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl_m_pt = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=2";
		request_m_pt.open("GET", ajaxurl_m_pt, true);
		request_m_pt.send();
		request_m_pt.onreadystatechange = function(){
			if (request_m_pt.readyState == 4 && request_m_pt.status == 200) {
				var objData = JSON.parse(request_m_pt.responseText);
				if (objData.status) {
					document.querySelector("#field_m_pt_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
					document.querySelector("#field_m_pt_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
					document.querySelector("#field_m_pt_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
					document.querySelector("#field_m_pt_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
					document.querySelector("#field_m_pt_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
					document.querySelector("#field_m_pt_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
					document.querySelector("#field_m_pt_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
					document.querySelector("#field_m_pt_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
					document.querySelector("#field_m_pt_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
					document.querySelector("#field_m_pt_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
					document.querySelector("#field_m_pt_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
					document.querySelector("#field_m_pt_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
					document.querySelector("#field_m_pt_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
					document.querySelector("#field_m_pt_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
					document.querySelector("#field_m_pt_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
					document.querySelector("#field_m_pt_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
					document.querySelector("#field_m_pt_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
					document.querySelector("#field_m_pt_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
					document.querySelector("#field_m_pt_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
					document.querySelector("#field_m_pt_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
					document.querySelector("#field_m_pt_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
					document.querySelector("#field_m_pt_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

					var id = document.getElementById('field_m_pt_ibn_module').value;
					var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
					$.ajax({
						type: 'POST',
						url: ajaxurl,
					}).done(function(argument) {
						$('#field_m_pt_land_01').html(argument);
						$('#field_m_pt_land_02').html(argument);
						$('#field_m_pt_land_03').html(argument);
						$('#field_m_pt_land_04').html(argument);
						$('#field_m_pt_land_05').html(argument);
						$('#field_m_pt_land_06').html(argument);
						$('#field_m_pt_land_07').html(argument);
						$('#field_m_pt_land_08').html(argument);
						$('#field_m_pt_land_09').html(argument);
						$('#field_m_pt_land_10').html(argument);
						$('#field_m_pt_land_11').html(argument);
						$('#field_m_pt_land_12').html(argument);
						$('#field_m_pt_land_13').html(argument);
						$('#field_m_pt_land_14').html(argument);
						$('#field_m_pt_land_15').html(argument);
						$('#field_m_pt_land_16').html(argument);
						$('#field_m_pt_land_17').html(argument);
						$('#field_m_pt_land_18').html(argument);
						$('#field_m_pt_land_19').html(argument);
						$('#field_m_pt_land_20').html(argument);
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_01 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_01").value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_02 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_02").value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_03 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_03").value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_04 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_04").value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_05 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_05").value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_06 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_06").value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_07 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_07").value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_08 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_08").value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_09 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_09").value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_10 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_10").value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_11 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_11").value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_12 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_12").value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_13 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_13").value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_14 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_14").value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_15 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_15").value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_16 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_16").value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_17 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_17").value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_18 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_18").value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_19 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_19").value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_20 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_pt_land_20").value = objData.data.lbl_azp_ibn_concept_t_land_20;
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
		
		var request_m_vh = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl_m_vh = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=3";
		request_m_vh.open("GET", ajaxurl_m_vh, true);
		request_m_vh.send();
		request_m_vh.onreadystatechange = function(){
			if (request_m_vh.readyState == 4 && request_m_vh.status == 200) {
				var objData = JSON.parse(request_m_vh.responseText);
				if (objData.status) {
					document.querySelector("#field_m_vh_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
					document.querySelector("#field_m_vh_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
					document.querySelector("#field_m_vh_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
					document.querySelector("#field_m_vh_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
					document.querySelector("#field_m_vh_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
					document.querySelector("#field_m_vh_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
					document.querySelector("#field_m_vh_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
					document.querySelector("#field_m_vh_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
					document.querySelector("#field_m_vh_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
					document.querySelector("#field_m_vh_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
					document.querySelector("#field_m_vh_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
					document.querySelector("#field_m_vh_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
					document.querySelector("#field_m_vh_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
					document.querySelector("#field_m_vh_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
					document.querySelector("#field_m_vh_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
					document.querySelector("#field_m_vh_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
					document.querySelector("#field_m_vh_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
					document.querySelector("#field_m_vh_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
					document.querySelector("#field_m_vh_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
					document.querySelector("#field_m_vh_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
					document.querySelector("#field_m_vh_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
					document.querySelector("#field_m_vh_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

					var id = document.getElementById('field_m_vh_ibn_module').value;
					var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
					$.ajax({
						type: 'POST',
						url: ajaxurl,
					}).done(function(argument) {
						$('#field_m_vh_land_01').html(argument);
						$('#field_m_vh_land_02').html(argument);
						$('#field_m_vh_land_03').html(argument);
						$('#field_m_vh_land_04').html(argument);
						$('#field_m_vh_land_05').html(argument);
						$('#field_m_vh_land_06').html(argument);
						$('#field_m_vh_land_07').html(argument);
						$('#field_m_vh_land_08').html(argument);
						$('#field_m_vh_land_09').html(argument);
						$('#field_m_vh_land_10').html(argument);
						$('#field_m_vh_land_11').html(argument);
						$('#field_m_vh_land_12').html(argument);
						$('#field_m_vh_land_13').html(argument);
						$('#field_m_vh_land_14').html(argument);
						$('#field_m_vh_land_15').html(argument);
						$('#field_m_vh_land_16').html(argument);
						$('#field_m_vh_land_17').html(argument);
						$('#field_m_vh_land_18').html(argument);
						$('#field_m_vh_land_19').html(argument);
						$('#field_m_vh_land_20').html(argument);
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_01 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_01").value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_02 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_02").value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_03 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_03").value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_04 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_04").value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_05 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_05").value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_06 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_06").value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_07 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_07").value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_08 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_08").value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_09 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_09").value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_10 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_10").value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_11 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_11").value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_12 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_12").value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_13 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_13").value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_14 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_14").value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_15 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_15").value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_16 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_16").value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_17 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_17").value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_18 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_18").value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_19 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_19").value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_20 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_vh_land_20").value = objData.data.lbl_azp_ibn_concept_t_land_20;
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
		
		var request_m_wt = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl_m_wt = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=4";
		request_m_wt.open("GET", ajaxurl_m_wt, true);
		request_m_wt.send();
		request_m_wt.onreadystatechange = function(){
			if (request_m_wt.readyState == 4 && request_m_wt.status == 200) {
				var objData = JSON.parse(request_m_wt.responseText);
				if (objData.status) {
					document.querySelector("#field_m_wt_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
					document.querySelector("#field_m_wt_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
					document.querySelector("#field_m_wt_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
					document.querySelector("#field_m_wt_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
					document.querySelector("#field_m_wt_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
					document.querySelector("#field_m_wt_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
					document.querySelector("#field_m_wt_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
					document.querySelector("#field_m_wt_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
					document.querySelector("#field_m_wt_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
					document.querySelector("#field_m_wt_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
					document.querySelector("#field_m_wt_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
					document.querySelector("#field_m_wt_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
					document.querySelector("#field_m_wt_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
					document.querySelector("#field_m_wt_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
					document.querySelector("#field_m_wt_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
					document.querySelector("#field_m_wt_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
					document.querySelector("#field_m_wt_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
					document.querySelector("#field_m_wt_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
					document.querySelector("#field_m_wt_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
					document.querySelector("#field_m_wt_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
					document.querySelector("#field_m_wt_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
					document.querySelector("#field_m_wt_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

					var id = document.getElementById('field_m_wt_ibn_module').value;
					var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
					$.ajax({
						type: 'POST',
						url: ajaxurl,
					}).done(function(argument) {
						$('#field_m_wt_land_01').html(argument);
						$('#field_m_wt_land_02').html(argument);
						$('#field_m_wt_land_03').html(argument);
						$('#field_m_wt_land_04').html(argument);
						$('#field_m_wt_land_05').html(argument);
						$('#field_m_wt_land_06').html(argument);
						$('#field_m_wt_land_07').html(argument);
						$('#field_m_wt_land_08').html(argument);
						$('#field_m_wt_land_09').html(argument);
						$('#field_m_wt_land_10').html(argument);
						$('#field_m_wt_land_11').html(argument);
						$('#field_m_wt_land_12').html(argument);
						$('#field_m_wt_land_13').html(argument);
						$('#field_m_wt_land_14').html(argument);
						$('#field_m_wt_land_15').html(argument);
						$('#field_m_wt_land_16').html(argument);
						$('#field_m_wt_land_17').html(argument);
						$('#field_m_wt_land_18').html(argument);
						$('#field_m_wt_land_19').html(argument);
						$('#field_m_wt_land_20').html(argument);
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_01 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_01").value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_02 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_02").value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_03 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_03").value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_04 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_04").value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_05 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_05").value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_06 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_06").value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_07 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_07").value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_08 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_08").value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_09 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_09").value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_10 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_10").value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_11 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_11").value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_12 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_12").value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_13 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_13").value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_14 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_14").value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_15 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_15").value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_16 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_16").value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_17 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_17").value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_18 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_18").value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_19 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_19").value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});

					var ajaxurl = var_url + 'api' + var_controller + "tablefieldup/" + objData.data.lbl_azp_ibn_concept_t_land_20 + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_m_wt_land_20").value = objData.data.lbl_azp_ibn_concept_t_land_20;
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
		}*/
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

function modal_format() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-format').modal('show');
		document.getElementById('field_id_format').value = idtbl;
		
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "update/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					var fl_format = objData.data.lbl_azp_ibn_client_v_id_azp_ibn_format_file;
					document.querySelector("#field_fl_ibn_format_file_" + fl_format).value = objData.data.lbl_azp_ibn_client_v_id_azp_ibn_format_file;
					document.querySelector('#field_fl_ibn_format_file_' + fl_format).checked = true;
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

function modal_policy() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-policy').modal('show');
		document.getElementById('field_id_client').value = idtbl;
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_policy_id_azp_ibn_policy",
				data: "lbl_azp_ibn_policy_id_azp_ibn_policy",
				type: "text",
				className: "text-dark lbl_azp_ibn_policy_id_azp_ibn_policy",
				visible: true,
			},
			{
				title: "Politica",
				id: "lbl_azp_ibn_type_condition_t_name",
				data: "lbl_azp_ibn_type_condition_t_name",
				type: "text",
				className: "text-dark lbl_azp_ibn_type_condition_t_name",
				visible: true,
			},
			{
				title: "Modulo",
				id: "lbl_azp_ibn_module_t_name",
				data: "lbl_azp_ibn_module_t_name",
				type: "text",
				className: "text-dark lbl_azp_ibn_module_t_name",
				visible: true,
			},
			{
				title: "Operacion",
				id: "lbl_azp_ibn_conditional_t_union",
				data: "lbl_azp_ibn_conditional_t_union",
				type: "text",
				className: "text-dark lbl_azp_ibn_conditional_t_union",
				visible: true,
			},
			{
				title: "Condicion",
				id: "lbl_azp_ibn_policy_t_conditional",
				data: "lbl_azp_ibn_policy_t_conditional",
				type: "text",
				className: "text-dark lbl_azp_ibn_policy_t_conditional",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_policy_no').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "policyno/" + idtbl + "/",
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
			lengthMenu: [25, 50,],
			// Ordenar columnas en ascendente o descendente
			order: [[1, "desc",], [2, "asc",]],
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
					text: '<i class="far fa-plus"></i>',
					titleAttr: 'Añadir',
					className: 'btn-sm btn-outline-success',
					attr: {
						'id': 'table_btn_plus',
						'name': 'table_btn_plus',
						'onclick': 'event_policy_no();',
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
					extend: 'pageLength',
					text: '<i class="far fa-database"></i>',
					titleAttr: 'Mostrar',
					className: 'btn-sm btn-outline-info',
					attr: {
						'id': 'table_btn_page_length',
						'name': 'table_btn_page_length',
					},
				},
			],
			columnDefs: [
				{
					targets: 0,
					'render': function (data, type, full, meta) {
						return '' +
							'<input type="checkbox"' +
							'name="field_pc_no_id[]"' +
							'id="field_pc_no_id[]"' +
							'class="dt_table_policy_no"' +
							'value="' + $('<div/>').text(data).html() + '">'
						;
					},
				},
				{
					targets: 4,
					'render': function (data, type, full, meta) {
						var $result = $('<select name="field_pc_no_conditional[]" id="field_pc_no_conditional[]"' +
							'class="custom-select form-control input-xs" required="">' +
								'<option value="">Seleccionar</option>' +
								'<option value="O">O</option>' +
								'<option value="Y">Y</option>' +
							'</select>');
						$result.find('option[value="' + data + '"]').attr('selected', 'selected');
						return $result[0].outerHTML;
					},
				},
			],
		});
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_policy_id_azp_ibn_policy",
				data: "lbl_azp_ibn_policy_id_azp_ibn_policy",
				type: "text",
				className: "text-dark lbl_azp_ibn_policy_id_azp_ibn_policy",
				visible: true,
			},
			{
				title: "Politica",
				id: "lbl_azp_ibn_type_condition_t_name",
				data: "lbl_azp_ibn_type_condition_t_name",
				type: "text",
				className: "text-dark lbl_azp_ibn_type_condition_t_name",
				visible: true,
			},
			{
				title: "Modulo",
				id: "lbl_azp_ibn_module_t_name",
				data: "lbl_azp_ibn_module_t_name",
				type: "text",
				className: "text-dark lbl_azp_ibn_module_t_name",
				visible: true,
			},
			{
				title: "Operacion",
				id: "lbl_azp_ibn_conditional_t_union",
				data: "lbl_azp_ibn_conditional_t_union",
				type: "text",
				className: "text-dark lbl_azp_ibn_conditional_t_union",
				visible: true,
			},
			{
				title: "Condicion",
				id: "lbl_azp_ibn_policy_t_conditional",
				data: "lbl_azp_ibn_policy_t_conditional",
				type: "text",
				className: "text-dark lbl_azp_ibn_policy_t_conditional",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_policy_si').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "policysi/" + idtbl + "/",
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
			lengthMenu: [25, 50,],
			// Ordenar columnas en ascendente o descendente
			order: [[1, "desc",], [2, "asc",]],
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
					text: '<i class="far fa-trash-alt"></i>',
					titleAttr: 'Quitar',
					className: 'btn-sm btn-outline-danger',
					attr: {
						'id': 'table_btn_trash',
						'name': 'table_btn_trash',
						'onclick': 'event_policy_si();',
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
					extend: 'pageLength',
					text: '<i class="far fa-database"></i>',
					titleAttr: 'Mostrar',
					className: 'btn-sm btn-outline-info',
					attr: {
						'id': 'table_btn_page_length',
						'name': 'table_btn_page_length',
					},
				},
			],
			columnDefs: [
				{
					targets: 0,
					'render': function (data, type, full, meta) {
						return '' +
							'<input type="checkbox"' +
							'name="field_pc_si_id[]"' +
							'id="field_pc_si_id[]"' +
							'class="dt_table_policy_si"' +
							'value="' + $('<div/>').text(data).html() + '">'
						;
					},
				},
				/*{
					targets: 4,
					'render': function (data, type, full, meta) {
						var $result = $('<select name="field_pc_si_conditional[]" id="field_pc_si_conditional[]"' +
							'class="custom-select form-control input-xs" required="">' +
								'<option value="">Seleccionar</option>' +
								'<option value="O">O</option>' +
								'<option value="Y">Y</option>' +
							'</select>');
						$result.find('option[value="' + data + '"]').attr('selected', 'selected');
						return $result[0].outerHTML;
					},
				},*/
			],
		});

		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_regulation_id_azp_ibn_regulation",
				data: "lbl_azp_ibn_regulation_id_azp_ibn_regulation",
				type: "text",
				className: "text-dark lbl_azp_ibn_regulation_id_azp_ibn_regulation",
				visible: true,
			},
			{
				title: "Politica",
				id: "lbl_azp_ibn_type_condition_t_name",
				data: "lbl_azp_ibn_type_condition_t_name",
				type: "text",
				className: "text-dark lbl_azp_ibn_type_condition_t_name",
				visible: true,
			},
			{
				title: "Principal",
				id: "lbl_azp_ibn_calification_t_principal",
				data: "lbl_azp_ibn_calification_t_principal",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_principal",
				visible: true,
			},
			{
				title: "Concepto",
				id: "lbl_azp_ibn_calification_t_concept",
				data: "lbl_azp_ibn_calification_t_concept",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_concept",
				visible: true,
			},
			{
				title: "Secundaria",
				id: "lbl_azp_ibn_calification_t_secondary",
				data: "lbl_azp_ibn_calification_t_secondary",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_secondary",
				visible: true,
			},
			{
				title: "Concepto",
				id: "lbl_azp_ibn_calification_t_determination",
				data: "lbl_azp_ibn_calification_t_determination",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_determination",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_regulation_no').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "regulationno/" + idtbl + "/",
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
			lengthMenu: [25, 50,],
			// Ordenar columnas en ascendente o descendente
			order: [[1, "desc",], [2, "asc",]],
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
					text: '<i class="far fa-plus"></i>',
					titleAttr: 'Añadir',
					className: 'btn-sm btn-outline-success',
					attr: {
						'id': 'table_btn_plus',
						'name': 'table_btn_plus',
						'onclick': 'event_regulation_no();',
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
					extend: 'pageLength',
					text: '<i class="far fa-database"></i>',
					titleAttr: 'Mostrar',
					className: 'btn-sm btn-outline-info',
					attr: {
						'id': 'table_btn_page_length',
						'name': 'table_btn_page_length',
					},
				},
			],
			columnDefs: [
				{
					targets: 0,
					'render': function (data, type, full, meta) {
						return '' +
							'<input type="checkbox"' +
							'name="field_rg_no_id[]"' +
							'id="field_rg_no_id[]"' +
							'class="dt_table_regulation_no"' +
							'value="' + $('<div/>').text(data).html() + '">'
						;
					},
				},
				{
					targets: 3,
					'render': function (data, type, full, meta) {
						return '<textarea' + ' ' +
							'name="field_pc_no_concept[]"' + ' ' +
							'id="field_pc_no_concept[]"' + ' ' +
							'class="form-control input-xs"' + ' ' +
							'placeholder="Digita el texto ..."' +
							'rows="2"' +
							'required=""' +
							'disabled="">' +
								$('<div/>').text(data).html() + 
							'</textarea>';
					},
				},
				{
					targets: 5,
					'render': function (data, type, full, meta) {
						return '<textarea' + ' ' +
							'name="field_pc_no_determination[]"' + ' ' +
							'id="field_pc_no_determination[]"' + ' ' +
							'class="form-control input-xs"' + ' ' +
							'placeholder="Digita el texto ..."' +
							'rows="2"' +
							'required=""' +
							'disabled="">' +
								$('<div/>').text(data).html() + 
							'</textarea>';
					},
				},
			],
		});
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_ibn_regulation_id_azp_ibn_regulation",
				data: "lbl_azp_ibn_regulation_id_azp_ibn_regulation",
				type: "text",
				className: "text-dark lbl_azp_ibn_regulation_id_azp_ibn_regulation",
				visible: true,
			},
			{
				title: "Politica",
				id: "lbl_azp_ibn_type_condition_t_name",
				data: "lbl_azp_ibn_type_condition_t_name",
				type: "text",
				className: "text-dark lbl_azp_ibn_type_condition_t_name",
				visible: true,
			},
			{
				title: "Principal",
				id: "lbl_azp_ibn_calification_t_principal",
				data: "lbl_azp_ibn_calification_t_principal",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_principal",
				visible: true,
			},
			{
				title: "Concepto",
				id: "lbl_azp_ibn_calification_t_concept",
				data: "lbl_azp_ibn_calification_t_concept",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_concept",
				visible: true,
			},
			{
				title: "Secundaria",
				id: "lbl_azp_ibn_calification_t_secondary",
				data: "lbl_azp_ibn_calification_t_secondary",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_secondary",
				visible: true,
			},
			{
				title: "Concepto",
				id: "lbl_azp_ibn_calification_t_determination",
				data: "lbl_azp_ibn_calification_t_determination",
				type: "text",
				className: "text-dark lbl_azp_ibn_calification_t_determination",
				visible: true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_regulation_si').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + 'api' + var_controller + "regulationsi/" + idtbl + "/",
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
			lengthMenu: [25, 50,],
			// Ordenar columnas en ascendente o descendente
			order: [[1, "desc",], [2, "asc",]],
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
					text: '<i class="far fa-trash-alt"></i>',
					titleAttr: 'Quitar',
					className: 'btn-sm btn-outline-danger',
					attr: {
						'id': 'table_btn_trash',
						'name': 'table_btn_trash',
						'onclick': 'event_regulation_si();',
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
					extend: 'pageLength',
					text: '<i class="far fa-database"></i>',
					titleAttr: 'Mostrar',
					className: 'btn-sm btn-outline-info',
					attr: {
						'id': 'table_btn_page_length',
						'name': 'table_btn_page_length',
					},
				},
			],
			columnDefs: [
				{
					targets: 0,
					'render': function (data, type, full, meta) {
						return '' +
							'<input type="checkbox"' +
							'name="field_rg_si_id[]"' +
							'id="field_rg_si_id[]"' +
							'class="dt_table_regulation_si"' +
							'value="' + $('<div/>').text(data).html() + '">'
						;
					},
				},
				{
					targets: 3,
					'render': function (data, type, full, meta) {
						return '<textarea' + ' ' +
							'name="field_pc_si_concept[]"' + ' ' +
							'id="field_pc_si_concept[]"' + ' ' +
							'class="form-control input-xs"' + ' ' +
							'placeholder="Digita el texto ..."' +
							'rows="2"' +
							'required=""' +
							'disabled="">' +
								$('<div/>').text(data).html() + 
							'</textarea>';
					},
				},
				{
					targets: 5,
					'render': function (data, type, full, meta) {
						return '<textarea' + ' ' +
							'name="field_pc_si_determination[]"' + ' ' +
							'id="field_pc_si_determination[]"' + ' ' +
							'class="form-control input-xs"' + ' ' +
							'placeholder="Digita el texto ..."' +
							'rows="2"' +
							'required=""' +
							'disabled="">' +
								$('<div/>').text(data).html() + 
							'</textarea>';
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
					document.querySelector("#field_up_id").value = objData.data.lbl_azp_ibn_client_id_azp_ibn_client;
					document.querySelector("#field_up_description").value = objData.data.lbl_azp_ibn_client_m_description;
					document.querySelector("#field_up_state").value = objData.data.lbl_azp_ibn_client_m_status;
					document.querySelector("#field_up_days").value = objData.data.lbl_azp_ibn_client_t_days;
					document.querySelector("#field_up_name").value = objData.data.lbl_azp_ibn_client_t_name;
					document.querySelector("#field_up_ibn_sector").value = objData.data.lbl_azp_ibn_client_v_id_azp_ibn_sector;
					document.querySelector("#field_up_client").value = objData.data.lbl_azp_ibn_client_v_id_azp_fct_client;
					document.querySelector("#field_up_sector").value = objData.data.lbl_azp_ibn_client_v_id_azp_fct_sector;

					var id = document.getElementById('field_up_sector').value;
					var ajaxurl = var_url + 'api' + var_controller + "client/" + id + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) { $('#field_up_client').html(argument); });

					var ajaxurl = var_url + 'api' + var_controller + "client/" + objData.data.lbl_azp_ibn_client_v_id_azp_fct_sector + "/";
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector("#field_up_client").value = objData.data.lbl_azp_ibn_client_v_id_azp_fct_client;
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

function modal_archive() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
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

function modal_unstore() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		$('#modal-id-unstore').modal('show');
		document.querySelector("#field_id_unstore").value = idtbl;
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
		var ajaxurl = var_url + 'api' + var_controller + "update/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-file').modal('show');
					document.querySelector("#field_fl_id").value = objData.data.lbl_azp_ibn_client_id_azp_ibn_client;
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

function modal_view(event) {
	var load = $("#field_fl_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_file');
	var path = input.value;
	var extensions = /(.jpg||.jpge||.png)$/i;
	if (load === 0) { $('#id_fl_embed').addClass('d-none'); } else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos jpg, jpge, png.');
			// Añadir la clase al contenedor del archivo
			$('#id_fl_embed').addClass('d-none');
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
			let embed = document.getElementById("field_fl_embed");
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
					var fdocument = objData.data.lbl_azp_ibn_client_w_document;
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
						document.getElementById("field_cn_id").value = idtbl;
						$('#modal-id-consult').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_client_w_document;
						var wfolder = objData.data.lbl_azp_ibn_client_w_folder;
						var wroute = objData.data.lbl_azp_ibn_client_w_route;
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
	var idtbl = document.getElementById("field_cn_id").value;
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
					var fdocument = objData.data.lbl_azp_ibn_client_w_document;
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
						var wroute = objData.data.lbl_azp_ibn_client_w_route;
						var wdocument = objData.data.lbl_azp_ibn_client_w_document;
						var wfolder = objData.data.lbl_azp_ibn_client_w_folder;
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
					var load = $("#field_fl_file")[0].files.length;
					var input = document.getElementById('field_fl_file');
					var path = input.value;
					var extensions = /(.jpg||.jpge||.png)$/i;
					if (!extensions.exec(path)) { document.getElementById('field_fl_file').value = ''; } else {
						$.ajax({
							type : "POST",
							url : "api/azp_ibn_client/file",
							datatype: "HTML",
							data : new FormData(document.getElementById("form_file")),
							cache: false,
							contentType: false,
							processData: false,
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
									$('#id_fl_embed').addClass('d-none');
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
					}
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_policy_no() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_policy').removeClass('alert-danger');
	$('#form_ajax_policy').removeClass('alert-success');
	$('#form_ajax_policy').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_policy').addClass('alert-warning');
	$("#form_ajax_policy").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_policy').removeClass('hide');
	$('#form_ajax_policy').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-policy').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_policy_no');
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
							$('#form_ajax_policy').removeClass('alert');
							$('#form_ajax_policy').addClass('hide');
							$('#form_ajax_policy').html('');
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
							url : "api/azp_ibn_client/policy_no",
							data : $('#form_policy').serialize() + '&field_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_policy_no").length) { $('#dt_policy_no').DataTable().ajax.reload(); }
									if ($("#dt_policy_si").length) { $('#dt_policy_si').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(success_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-success');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_policy').removeClass('alert');
										$('#form_ajax_policy').addClass('hide');
										$('#form_ajax_policy').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_pc_no').prop('checked', false);
									$('#field_ck_pc_si').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz añadido exitosamente los datos.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(error_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_policy').addClass('alert-danger');
								$("#form_ajax_policy").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_policy').removeClass('hide');
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

function event_policy_si() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_policy').removeClass('alert-danger');
	$('#form_ajax_policy').removeClass('alert-success');
	$('#form_ajax_policy').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	/*$('#form_ajax_policy').addClass('alert-warning');
	$("#form_ajax_policy").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_policy').removeClass('hide');
	$('#form_ajax_policy').addClass('alert');*/
	// Configuracion de la ventana modal
	//$('#modal-id-policy').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_policy_si');
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
							$('#form_ajax_policy').removeClass('alert');
							$('#form_ajax_policy').addClass('hide');
							$('#form_ajax_policy').html('');
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
							url : "api/azp_ibn_client/policy_si",
							data : $('#form_policy').serialize() + '&field_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_policy_no").length) { $('#dt_policy_no').DataTable().ajax.reload(); }
									if ($("#dt_policy_si").length) { $('#dt_policy_si').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(success_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-success');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_policy').removeClass('alert');
										$('#form_ajax_policy').addClass('hide');
										$('#form_ajax_policy').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_pc_no').prop('checked', false);
									$('#field_ck_pc_si').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz quitado exitosamente los datos.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(error_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_policy').addClass('alert-danger');
								$("#form_ajax_policy").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_policy').removeClass('hide');
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

function event_format() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_format').removeClass('alert-danger');
	$('#form_ajax_format').removeClass('alert-success');
	$('#form_ajax_format').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_format').addClass('alert-warning');
	$("#form_ajax_format").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_format').removeClass('hide');
	$('#form_ajax_format').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-format').modal('hide');
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
						$('#form_ajax_format').removeClass('alert');
						$('#form_ajax_format').addClass('hide');
						$('#form_ajax_format').html('');
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
					$('#modal-id-format').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/format",
						data : $('#form_format').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_format').html(success_icon + obj.message);
								$("#form_ajax_format").removeClass('alert-warning');
								$("#form_ajax_format").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-format').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_format').removeClass('alert');
									$('#form_ajax_format').addClass('hide');
									$('#form_ajax_format').html('');
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
								$('#modal-id-format').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_format').html(error_icon + obj.message);
								$("#form_ajax_format").removeClass('alert-warning');
								$("#form_ajax_format").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_format').addClass('alert-danger');
							$("#form_ajax_format").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_format').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_regulation_no() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_policy').removeClass('alert-danger');
	$('#form_ajax_policy').removeClass('alert-success');
	$('#form_ajax_policy').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_policy').addClass('alert-warning');
	$("#form_ajax_policy").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_policy').removeClass('hide');
	$('#form_ajax_policy').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-regulation').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_regulation_no');
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
							$('#form_ajax_policy').removeClass('alert');
							$('#form_ajax_policy').addClass('hide');
							$('#form_ajax_policy').html('');
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
							url : "api/azp_ibn_client/regulation_no",
							data : $('#form_policy').serialize() + '&field_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_regulation_no").length) { $('#dt_regulation_no').DataTable().ajax.reload(); }
									if ($("#dt_regulation_si").length) { $('#dt_regulation_si').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(success_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-success');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_policy').removeClass('alert');
										$('#form_ajax_policy').addClass('hide');
										$('#form_ajax_policy').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_rg_no').prop('checked', false);
									$('#field_ck_rg_si').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz añadido exitosamente los datos.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(error_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_policy').addClass('alert-danger');
								$("#form_ajax_policy").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_policy').removeClass('hide');
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

function event_regulation_si() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_policy').removeClass('alert-danger');
	$('#form_ajax_policy').removeClass('alert-success');
	$('#form_ajax_policy').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_policy').addClass('alert-warning');
	$("#form_ajax_policy").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_policy').removeClass('hide');
	$('#form_ajax_policy').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-regulation').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_regulation_si');
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
							$('#form_ajax_policy').removeClass('alert');
							$('#form_ajax_policy').addClass('hide');
							$('#form_ajax_policy').html('');
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
							url : "api/azp_ibn_client/regulation_si",
							data : $('#form_policy').serialize() + '&field_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_regulation_no").length) { $('#dt_regulation_no').DataTable().ajax.reload(); }
									if ($("#dt_regulation_si").length) { $('#dt_regulation_si').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(success_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-success');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_policy').removeClass('alert');
										$('#form_ajax_policy').addClass('hide');
										$('#form_ajax_policy').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_rg_no').prop('checked', false);
									$('#field_ck_rg_si').prop('checked', false);
									// Mensaje de audio para mostrar en la pagina web
									initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
									bootbox.alert({
										title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
										message: "<span><strong>Exito:</strong> Haz quitado exitosamente los datos.</span>",
										centerVertical: true,
										className: "modal-alert",
										closeButton: false,
									});
								} else {
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_policy').html(error_icon + obj.message);
									$("#form_ajax_policy").removeClass('alert-warning');
									$("#form_ajax_policy").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_policy').addClass('alert-danger');
								$("#form_ajax_policy").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_policy').removeClass('hide');
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

function event_client(mvalue) {
	if (mvalue == 'create') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_cr_sector').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			var ajaxurl = var_url + 'api' + var_controller + "client/" + idtbl + "/";
			$.ajax({
				type: 'POST',
				url: ajaxurl,
			}
			).done(function(argument) {
				$('#field_cr_client').html(argument);
			});
		} else { document.getElementById('field_cr_client').value = ''; }
	} else if (mvalue == 'update') {
		// Obtener el primer valor seleccionado de la tabla
		var idtbl = document.getElementById('field_up_sector').value;
		// Validar si el id es mayor a cero
		if (idtbl > 0) {
			var ajaxurl = var_url + 'api' + var_controller + "client/" + idtbl + "/";
			$.ajax({
				type: 'POST',
				url: ajaxurl,
			}
			).done(function(argument) {
				$('#field_up_client').html(argument);
			});
		} else { document.getElementById('field_up_client').value = ''; }
	}
};

function modal_concept_cam() {
	$('#modal-id-concept_cam').modal('show');
	var idtbl = document.getElementById('field_id_concept_all').value;

	var request_m_cm = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl_m_cm = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=1";
	request_m_cm.open("GET", ajaxurl_m_cm, true);
	request_m_cm.send();
	request_m_cm.onreadystatechange = function(){
		if (request_m_cm.readyState == 4 && request_m_cm.status == 200) {
			var objData = JSON.parse(request_m_cm.responseText);
			if (objData.status) {
				document.querySelector("#field_m_cm_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
				document.querySelector("#field_m_cm_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
				document.querySelector("#field_m_cm_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
				document.querySelector("#field_m_cm_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
				document.querySelector("#field_m_cm_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
				document.querySelector("#field_m_cm_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
				document.querySelector("#field_m_cm_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
				document.querySelector("#field_m_cm_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
				document.querySelector("#field_m_cm_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
				document.querySelector("#field_m_cm_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
				document.querySelector("#field_m_cm_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
				document.querySelector("#field_m_cm_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
				document.querySelector("#field_m_cm_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
				document.querySelector("#field_m_cm_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
				document.querySelector("#field_m_cm_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
				document.querySelector("#field_m_cm_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
				document.querySelector("#field_m_cm_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
				document.querySelector("#field_m_cm_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
				document.querySelector("#field_m_cm_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
				document.querySelector("#field_m_cm_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
				document.querySelector("#field_m_cm_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
				document.querySelector("#field_m_cm_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

				var id = document.getElementById('field_m_cm_ibn_module').value;
				var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
				$.ajax({
					type: 'POST',
					url: ajaxurl,
				}).done(function(argument) {
					$('#field_m_cm_land_01').html(argument);
					$('#field_m_cm_land_02').html(argument);
					$('#field_m_cm_land_03').html(argument);
					$('#field_m_cm_land_04').html(argument);
					$('#field_m_cm_land_05').html(argument);
					$('#field_m_cm_land_06').html(argument);
					$('#field_m_cm_land_07').html(argument);
					$('#field_m_cm_land_08').html(argument);
					$('#field_m_cm_land_09').html(argument);
					$('#field_m_cm_land_10').html(argument);
					$('#field_m_cm_land_11').html(argument);
					$('#field_m_cm_land_12').html(argument);
					$('#field_m_cm_land_13').html(argument);
					$('#field_m_cm_land_14').html(argument);
					$('#field_m_cm_land_15').html(argument);
					$('#field_m_cm_land_16').html(argument);
					$('#field_m_cm_land_17').html(argument);
					$('#field_m_cm_land_18').html(argument);
					$('#field_m_cm_land_19').html(argument);
					$('#field_m_cm_land_20').html(argument);
				});

				if (objData.data.lbl_azp_ibn_concept_t_land_01 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_01 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_01').value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_02 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_02 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_02').value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_03 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_03 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_03').value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_04 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_04 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_04').value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_05 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_05 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_05').value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_06 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_06 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_06').value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_07 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_07 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_07').value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_08 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_08 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_08').value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_09 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_09 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_09').value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_10 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_10 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_10').value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_11 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_11 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_11').value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_12 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_12 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_12').value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_13 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_13 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_13').value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_14 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_14 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_14').value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_15 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_15 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_15').value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_16 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_16 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_16').value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_17 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_17 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_17').value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_18 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_18 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_18').value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_19 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_19 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_19').value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_20 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_20 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_cm_land_20').value = objData.data.lbl_azp_ibn_concept_t_land_20;
					});
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
};

function modal_concept_fur() {
	$('#modal-id-concept_fur').modal('show');
	var idtbl = document.getElementById('field_id_concept_all').value;
	var request_m_ft = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl_m_ft = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=5";
	request_m_ft.open("GET", ajaxurl_m_ft, true);
	request_m_ft.send();
	request_m_ft.onreadystatechange = function(){
		if (request_m_ft.readyState == 4 && request_m_ft.status == 200) {
			var objData = JSON.parse(request_m_ft.responseText);
			if (objData.status) {
				document.querySelector("#field_m_ft_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
				document.querySelector("#field_m_ft_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
				document.querySelector("#field_m_ft_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
				document.querySelector("#field_m_ft_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
				document.querySelector("#field_m_ft_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
				document.querySelector("#field_m_ft_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
				document.querySelector("#field_m_ft_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
				document.querySelector("#field_m_ft_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
				document.querySelector("#field_m_ft_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
				document.querySelector("#field_m_ft_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
				document.querySelector("#field_m_ft_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
				document.querySelector("#field_m_ft_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
				document.querySelector("#field_m_ft_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
				document.querySelector("#field_m_ft_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
				document.querySelector("#field_m_ft_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
				document.querySelector("#field_m_ft_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
				document.querySelector("#field_m_ft_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
				document.querySelector("#field_m_ft_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
				document.querySelector("#field_m_ft_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
				document.querySelector("#field_m_ft_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
				document.querySelector("#field_m_ft_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
				document.querySelector("#field_m_ft_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

				var id = document.getElementById('field_m_ft_ibn_module').value;
				var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
				$.ajax({
					type: 'POST',
					url: ajaxurl,
				}).done(function(argument) {
					$('#field_m_ft_land_01').html(argument);
					$('#field_m_ft_land_02').html(argument);
					$('#field_m_ft_land_03').html(argument);
					$('#field_m_ft_land_04').html(argument);
					$('#field_m_ft_land_05').html(argument);
					$('#field_m_ft_land_06').html(argument);
					$('#field_m_ft_land_07').html(argument);
					$('#field_m_ft_land_08').html(argument);
					$('#field_m_ft_land_09').html(argument);
					$('#field_m_ft_land_10').html(argument);
					$('#field_m_ft_land_11').html(argument);
					$('#field_m_ft_land_12').html(argument);
					$('#field_m_ft_land_13').html(argument);
					$('#field_m_ft_land_14').html(argument);
					$('#field_m_ft_land_15').html(argument);
					$('#field_m_ft_land_16').html(argument);
					$('#field_m_ft_land_17').html(argument);
					$('#field_m_ft_land_18').html(argument);
					$('#field_m_ft_land_19').html(argument);
					$('#field_m_ft_land_20').html(argument);
				});

				if (objData.data.lbl_azp_ibn_concept_t_land_01 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_01 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_01').value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_02 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_02 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_02').value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_03 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_03 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_03').value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_04 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_04 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_04').value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_05 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_05 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_05').value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_06 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_06 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_06').value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_07 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_07 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_07').value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_08 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_08 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_08').value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_09 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_09 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_09').value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_10 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_10 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_10').value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_11 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_11 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_11').value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_12 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_12 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_12').value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_13 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_13 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_13').value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_14 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_14 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_14').value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_15 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_15 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_15').value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_16 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_16 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_16').value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_17 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_17 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_17').value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_18 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_18 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_18').value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_19 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_19 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_19').value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_20 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_20 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_ft_land_20').value = objData.data.lbl_azp_ibn_concept_t_land_20;
					});
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
};

function modal_concept_pro() {
	$('#modal-id-concept_pro').modal('show');
	var idtbl = document.getElementById('field_id_concept_all').value;
	var request_m_pt = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl_m_pt = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=2";
	request_m_pt.open("GET", ajaxurl_m_pt, true);
	request_m_pt.send();
	request_m_pt.onreadystatechange = function(){
		if (request_m_pt.readyState == 4 && request_m_pt.status == 200) {
			var objData = JSON.parse(request_m_pt.responseText);
			if (objData.status) {
				document.querySelector("#field_m_pt_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
				document.querySelector("#field_m_pt_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
				document.querySelector("#field_m_pt_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
				document.querySelector("#field_m_pt_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
				document.querySelector("#field_m_pt_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
				document.querySelector("#field_m_pt_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
				document.querySelector("#field_m_pt_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
				document.querySelector("#field_m_pt_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
				document.querySelector("#field_m_pt_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
				document.querySelector("#field_m_pt_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
				document.querySelector("#field_m_pt_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
				document.querySelector("#field_m_pt_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
				document.querySelector("#field_m_pt_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
				document.querySelector("#field_m_pt_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
				document.querySelector("#field_m_pt_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
				document.querySelector("#field_m_pt_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
				document.querySelector("#field_m_pt_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
				document.querySelector("#field_m_pt_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
				document.querySelector("#field_m_pt_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
				document.querySelector("#field_m_pt_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
				document.querySelector("#field_m_pt_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
				document.querySelector("#field_m_pt_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

				var id = document.getElementById('field_m_pt_ibn_module').value;
				var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
				$.ajax({
					type: 'POST',
					url: ajaxurl,
				}).done(function(argument) {
					$('#field_m_pt_land_01').html(argument);
					$('#field_m_pt_land_02').html(argument);
					$('#field_m_pt_land_03').html(argument);
					$('#field_m_pt_land_04').html(argument);
					$('#field_m_pt_land_05').html(argument);
					$('#field_m_pt_land_06').html(argument);
					$('#field_m_pt_land_07').html(argument);
					$('#field_m_pt_land_08').html(argument);
					$('#field_m_pt_land_09').html(argument);
					$('#field_m_pt_land_10').html(argument);
					$('#field_m_pt_land_11').html(argument);
					$('#field_m_pt_land_12').html(argument);
					$('#field_m_pt_land_13').html(argument);
					$('#field_m_pt_land_14').html(argument);
					$('#field_m_pt_land_15').html(argument);
					$('#field_m_pt_land_16').html(argument);
					$('#field_m_pt_land_17').html(argument);
					$('#field_m_pt_land_18').html(argument);
					$('#field_m_pt_land_19').html(argument);
					$('#field_m_pt_land_20').html(argument);
				});

				if (objData.data.lbl_azp_ibn_concept_t_land_01 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_01 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_01').value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_02 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_02 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_02').value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_03 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_03 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_03').value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_04 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_04 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_04').value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_05 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_05 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_05').value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_06 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_06 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_06').value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_07 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_07 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_07').value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_08 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_08 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_08').value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_09 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_09 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_09').value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_10 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_10 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_10').value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_11 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_11 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_11').value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_12 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_12 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_12').value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_13 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_13 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_13').value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_14 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_14 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_14').value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_15 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_15 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_15').value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_16 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_16 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_16').value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_17 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_17 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_17').value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_18 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_18 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_18').value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_19 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_19 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_19').value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_20 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_20 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_pt_land_20').value = objData.data.lbl_azp_ibn_concept_t_land_20;
					});
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

};

function modal_concept_veh() {
	$('#modal-id-concept_veh').modal('show');
	var idtbl = document.getElementById('field_id_concept_all').value;
	var request_m_vh = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl_m_vh = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=3";
	request_m_vh.open("GET", ajaxurl_m_vh, true);
	request_m_vh.send();
	request_m_vh.onreadystatechange = function(){
		if (request_m_vh.readyState == 4 && request_m_vh.status == 200) {
			var objData = JSON.parse(request_m_vh.responseText);
			if (objData.status) {
				document.querySelector("#field_m_vh_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
				document.querySelector("#field_m_vh_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
				document.querySelector("#field_m_vh_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
				document.querySelector("#field_m_vh_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
				document.querySelector("#field_m_vh_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
				document.querySelector("#field_m_vh_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
				document.querySelector("#field_m_vh_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
				document.querySelector("#field_m_vh_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
				document.querySelector("#field_m_vh_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
				document.querySelector("#field_m_vh_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
				document.querySelector("#field_m_vh_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
				document.querySelector("#field_m_vh_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
				document.querySelector("#field_m_vh_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
				document.querySelector("#field_m_vh_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
				document.querySelector("#field_m_vh_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
				document.querySelector("#field_m_vh_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
				document.querySelector("#field_m_vh_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
				document.querySelector("#field_m_vh_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
				document.querySelector("#field_m_vh_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
				document.querySelector("#field_m_vh_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
				document.querySelector("#field_m_vh_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
				document.querySelector("#field_m_vh_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

				var id = document.getElementById('field_m_vh_ibn_module').value;
				var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
				$.ajax({
					type: 'POST',
					url: ajaxurl,
				}).done(function(argument) {
					$('#field_m_vh_land_01').html(argument);
					$('#field_m_vh_land_02').html(argument);
					$('#field_m_vh_land_03').html(argument);
					$('#field_m_vh_land_04').html(argument);
					$('#field_m_vh_land_05').html(argument);
					$('#field_m_vh_land_06').html(argument);
					$('#field_m_vh_land_07').html(argument);
					$('#field_m_vh_land_08').html(argument);
					$('#field_m_vh_land_09').html(argument);
					$('#field_m_vh_land_10').html(argument);
					$('#field_m_vh_land_11').html(argument);
					$('#field_m_vh_land_12').html(argument);
					$('#field_m_vh_land_13').html(argument);
					$('#field_m_vh_land_14').html(argument);
					$('#field_m_vh_land_15').html(argument);
					$('#field_m_vh_land_16').html(argument);
					$('#field_m_vh_land_17').html(argument);
					$('#field_m_vh_land_18').html(argument);
					$('#field_m_vh_land_19').html(argument);
					$('#field_m_vh_land_20').html(argument);
				});

				if (objData.data.lbl_azp_ibn_concept_t_land_01 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_01 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_01').value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_02 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_02 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_02').value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_03 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_03 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_03').value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_04 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_04 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_04').value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_05 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_05 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_05').value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_06 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_06 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_06').value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_07 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_07 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_07').value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_08 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_08 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_08').value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_09 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_09 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_09').value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_10 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_10 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_10').value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_11 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_11 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_11').value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_12 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_12 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_12').value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_13 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_13 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_13').value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_14 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_14 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_14').value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_15 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_15 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_15').value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_16 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_16 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_16').value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_17 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_17 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_17').value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_18 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_18 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_18').value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_19 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_19 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_19').value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_20 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_20 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_vh_land_20').value = objData.data.lbl_azp_ibn_concept_t_land_20;
					});
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
};

function modal_concept_war() {
	$('#modal-id-concept_war').modal('show');
	var idtbl = document.getElementById('field_id_concept_all').value;
	var request_m_wt = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxurl_m_wt = var_url + 'api' + var_controller + "concept/" + idtbl + "/?field_id_module=4";
	request_m_wt.open("GET", ajaxurl_m_wt, true);
	request_m_wt.send();
	request_m_wt.onreadystatechange = function(){
		if (request_m_wt.readyState == 4 && request_m_wt.status == 200) {
			var objData = JSON.parse(request_m_wt.responseText);
			if (objData.status) {
				document.querySelector("#field_m_wt_id").value = objData.data.lbl_azp_ibn_concept_id_azp_ibn_concept;
				document.querySelector("#field_m_wt_text_01").value = objData.data.lbl_azp_ibn_concept_t_text_01;
				document.querySelector("#field_m_wt_text_02").value = objData.data.lbl_azp_ibn_concept_t_text_02;
				document.querySelector("#field_m_wt_text_03").value = objData.data.lbl_azp_ibn_concept_t_text_03;
				document.querySelector("#field_m_wt_text_04").value = objData.data.lbl_azp_ibn_concept_t_text_04;
				document.querySelector("#field_m_wt_text_05").value = objData.data.lbl_azp_ibn_concept_t_text_05;
				document.querySelector("#field_m_wt_text_06").value = objData.data.lbl_azp_ibn_concept_t_text_06;
				document.querySelector("#field_m_wt_text_07").value = objData.data.lbl_azp_ibn_concept_t_text_07;
				document.querySelector("#field_m_wt_text_08").value = objData.data.lbl_azp_ibn_concept_t_text_08;
				document.querySelector("#field_m_wt_text_09").value = objData.data.lbl_azp_ibn_concept_t_text_09;
				document.querySelector("#field_m_wt_text_10").value = objData.data.lbl_azp_ibn_concept_t_text_10;
				document.querySelector("#field_m_wt_text_11").value = objData.data.lbl_azp_ibn_concept_t_text_11;
				document.querySelector("#field_m_wt_text_12").value = objData.data.lbl_azp_ibn_concept_t_text_12;
				document.querySelector("#field_m_wt_text_13").value = objData.data.lbl_azp_ibn_concept_t_text_13;
				document.querySelector("#field_m_wt_text_14").value = objData.data.lbl_azp_ibn_concept_t_text_14;
				document.querySelector("#field_m_wt_text_15").value = objData.data.lbl_azp_ibn_concept_t_text_15;
				document.querySelector("#field_m_wt_text_16").value = objData.data.lbl_azp_ibn_concept_t_text_16;
				document.querySelector("#field_m_wt_text_17").value = objData.data.lbl_azp_ibn_concept_t_text_17;
				document.querySelector("#field_m_wt_text_18").value = objData.data.lbl_azp_ibn_concept_t_text_18;
				document.querySelector("#field_m_wt_text_19").value = objData.data.lbl_azp_ibn_concept_t_text_19;
				document.querySelector("#field_m_wt_text_20").value = objData.data.lbl_azp_ibn_concept_t_text_20;
				document.querySelector("#field_m_wt_ibn_module").value = objData.data.lbl_azp_ibn_concept_v_id_azp_ibn_module;

				var id = document.getElementById('field_m_wt_ibn_module').value;
				var ajaxurl = var_url + 'api' + var_controller + "tablefieldrd/" + id + "/";
				$.ajax({
					type: 'POST',
					url: ajaxurl,
				}).done(function(argument) {
					$('#field_m_wt_land_01').html(argument);
					$('#field_m_wt_land_02').html(argument);
					$('#field_m_wt_land_03').html(argument);
					$('#field_m_wt_land_04').html(argument);
					$('#field_m_wt_land_05').html(argument);
					$('#field_m_wt_land_06').html(argument);
					$('#field_m_wt_land_07').html(argument);
					$('#field_m_wt_land_08').html(argument);
					$('#field_m_wt_land_09').html(argument);
					$('#field_m_wt_land_10').html(argument);
					$('#field_m_wt_land_11').html(argument);
					$('#field_m_wt_land_12').html(argument);
					$('#field_m_wt_land_13').html(argument);
					$('#field_m_wt_land_14').html(argument);
					$('#field_m_wt_land_15').html(argument);
					$('#field_m_wt_land_16').html(argument);
					$('#field_m_wt_land_17').html(argument);
					$('#field_m_wt_land_18').html(argument);
					$('#field_m_wt_land_19').html(argument);
					$('#field_m_wt_land_20').html(argument);
				});

				if (objData.data.lbl_azp_ibn_concept_t_land_01 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_01 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_01').value = objData.data.lbl_azp_ibn_concept_t_land_01;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_02 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_02 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_02').value = objData.data.lbl_azp_ibn_concept_t_land_02;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_03 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_03 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_03').value = objData.data.lbl_azp_ibn_concept_t_land_03;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_04 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_04 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_04').value = objData.data.lbl_azp_ibn_concept_t_land_04;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_05 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_05 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_05').value = objData.data.lbl_azp_ibn_concept_t_land_05;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_06 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_06 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_06').value = objData.data.lbl_azp_ibn_concept_t_land_06;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_07 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_07 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_07').value = objData.data.lbl_azp_ibn_concept_t_land_07;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_08 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_08 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_08').value = objData.data.lbl_azp_ibn_concept_t_land_08;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_09 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_09 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_09').value = objData.data.lbl_azp_ibn_concept_t_land_09;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_10 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_10 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_10').value = objData.data.lbl_azp_ibn_concept_t_land_10;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_11 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_11 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_11').value = objData.data.lbl_azp_ibn_concept_t_land_11;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_12 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_12 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_12').value = objData.data.lbl_azp_ibn_concept_t_land_12;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_13 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_13 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_13').value = objData.data.lbl_azp_ibn_concept_t_land_13;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_14 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_14 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_14').value = objData.data.lbl_azp_ibn_concept_t_land_14;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_15 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_15 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_15').value = objData.data.lbl_azp_ibn_concept_t_land_15;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_16 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_16 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_16').value = objData.data.lbl_azp_ibn_concept_t_land_16;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_17 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_17 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_17').value = objData.data.lbl_azp_ibn_concept_t_land_17;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_18 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_18 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_18').value = objData.data.lbl_azp_ibn_concept_t_land_18;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_19 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_19 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_19').value = objData.data.lbl_azp_ibn_concept_t_land_19;
					});
				}

				if (objData.data.lbl_azp_ibn_concept_t_land_20 != '') {
					var ajaxurl = var_url + 'api' + var_controller + 'tablefieldup/' + objData.data.lbl_azp_ibn_concept_t_land_20 + '/';
					$.ajax({ type: 'POST', url: ajaxurl, }).done(function(argument) {
						document.querySelector('#field_m_wt_land_20').value = objData.data.lbl_azp_ibn_concept_t_land_20;
					});
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
};

function event_concept_cam() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_cam').removeClass('alert-danger');
	$('#form_ajax_concept_cam').removeClass('alert-success');
	$('#form_ajax_concept_cam').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_cam').addClass('alert-warning');
	$("#form_ajax_concept_cam").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_concept_cam').removeClass('hide');
	$('#form_ajax_concept_cam').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-concept_cam').modal('hide');
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
						$('#form_ajax_concept_cam').removeClass('alert');
						$('#form_ajax_concept_cam').addClass('hide');
						$('#form_ajax_concept_cam').html('');
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
					$('#modal-id-concept_cam').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/concept_cam",
						data : $('#form_concept_cam').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_cam').html(success_icon + obj.message);
								$("#form_ajax_concept_cam").removeClass('alert-warning');
								$("#form_ajax_concept_cam").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-concept_cam').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_concept_cam').removeClass('alert');
									$('#form_ajax_concept_cam').addClass('hide');
									$('#form_ajax_concept_cam').html('');
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
								$('#modal-id-concept_cam').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_cam').html(error_icon + obj.message);
								$("#form_ajax_concept_cam").removeClass('alert-warning');
								$("#form_ajax_concept_cam").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_concept_cam').addClass('alert-danger');
							$("#form_ajax_concept_cam").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_concept_cam').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_concept_fur() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_fur').removeClass('alert-danger');
	$('#form_ajax_concept_fur').removeClass('alert-success');
	$('#form_ajax_concept_fur').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_fur').addClass('alert-warning');
	$("#form_ajax_concept_fur").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_concept_fur').removeClass('hide');
	$('#form_ajax_concept_fur').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-concept_fur').modal('hide');
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
						$('#form_ajax_concept_fur').removeClass('alert');
						$('#form_ajax_concept_fur').addClass('hide');
						$('#form_ajax_concept_fur').html('');
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
					$('#modal-id-concept_fur').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/concept_fur",
						data : $('#form_concept_fur').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_fur').html(success_icon + obj.message);
								$("#form_ajax_concept_fur").removeClass('alert-warning');
								$("#form_ajax_concept_fur").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-concept_fur').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_concept_fur').removeClass('alert');
									$('#form_ajax_concept_fur').addClass('hide');
									$('#form_ajax_concept_fur').html('');
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
								$('#modal-id-concept_fur').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_fur').html(error_icon + obj.message);
								$("#form_ajax_concept_fur").removeClass('alert-warning');
								$("#form_ajax_concept_fur").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_concept_fur').addClass('alert-danger');
							$("#form_ajax_concept_fur").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_concept_fur').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_concept_pro() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_pro').removeClass('alert-danger');
	$('#form_ajax_concept_pro').removeClass('alert-success');
	$('#form_ajax_concept_pro').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_pro').addClass('alert-warning');
	$("#form_ajax_concept_pro").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_concept_pro').removeClass('hide');
	$('#form_ajax_concept_pro').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-concept_pro').modal('hide');
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
						$('#form_ajax_concept_pro').removeClass('alert');
						$('#form_ajax_concept_pro').addClass('hide');
						$('#form_ajax_concept_pro').html('');
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
					$('#modal-id-concept_pro').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/concept_pro",
						data : $('#form_concept_pro').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_pro').html(success_icon + obj.message);
								$("#form_ajax_concept_pro").removeClass('alert-warning');
								$("#form_ajax_concept_pro").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-concept_pro').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_concept_pro').removeClass('alert');
									$('#form_ajax_concept_pro').addClass('hide');
									$('#form_ajax_concept_pro').html('');
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
								$('#modal-id-concept_pro').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_pro').html(error_icon + obj.message);
								$("#form_ajax_concept_pro").removeClass('alert-warning');
								$("#form_ajax_concept_pro").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_concept_pro').addClass('alert-danger');
							$("#form_ajax_concept_pro").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_concept_pro').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_concept_veh() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_veh').removeClass('alert-danger');
	$('#form_ajax_concept_veh').removeClass('alert-success');
	$('#form_ajax_concept_veh').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_veh').addClass('alert-warning');
	$("#form_ajax_concept_veh").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_concept_veh').removeClass('hide');
	$('#form_ajax_concept_veh').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-concept_veh').modal('hide');
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
						$('#form_ajax_concept_veh').removeClass('alert');
						$('#form_ajax_concept_veh').addClass('hide');
						$('#form_ajax_concept_veh').html('');
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
					$('#modal-id-concept_veh').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/concept_veh",
						data : $('#form_concept_veh').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_veh').html(success_icon + obj.message);
								$("#form_ajax_concept_veh").removeClass('alert-warning');
								$("#form_ajax_concept_veh").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-concept_veh').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_concept_veh').removeClass('alert');
									$('#form_ajax_concept_veh').addClass('hide');
									$('#form_ajax_concept_veh').html('');
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
								$('#modal-id-concept_veh').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_veh').html(error_icon + obj.message);
								$("#form_ajax_concept_veh").removeClass('alert-warning');
								$("#form_ajax_concept_veh").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_concept_veh').addClass('alert-danger');
							$("#form_ajax_concept_veh").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_concept_veh').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_concept_war() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_war').removeClass('alert-danger');
	$('#form_ajax_concept_war').removeClass('alert-success');
	$('#form_ajax_concept_war').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_concept_war').addClass('alert-warning');
	$("#form_ajax_concept_war").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_concept_war').removeClass('hide');
	$('#form_ajax_concept_war').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-concept_war').modal('hide');
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
						$('#form_ajax_concept_war').removeClass('alert');
						$('#form_ajax_concept_war').addClass('hide');
						$('#form_ajax_concept_war').html('');
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
					$('#modal-id-concept_war').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_client/concept_war",
						data : $('#form_concept_war').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_war').html(success_icon + obj.message);
								$("#form_ajax_concept_war").removeClass('alert-warning');
								$("#form_ajax_concept_war").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-concept_war').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_concept_war').removeClass('alert');
									$('#form_ajax_concept_war').addClass('hide');
									$('#form_ajax_concept_war').html('');
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
								$('#modal-id-concept_war').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_concept_war').html(error_icon + obj.message);
								$("#form_ajax_concept_war").removeClass('alert-warning');
								$("#form_ajax_concept_war").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_concept_war').addClass('alert-danger');
							$("#form_ajax_concept_war").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_concept_war').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};