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

if (document.getElementById('form_btn_plus')) {
	document.getElementById('form_btn_plus').onclick = function(e) {
		e.preventDefault();
		event_plus();
	};
}

if (document.getElementById('form_plus')) {
	document.getElementById('form_plus').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_plus();
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

if (document.getElementById('form_btn_fl_remove')) {
	document.getElementById('form_btn_fl_remove').onclick = function(e) {
		e.preventDefault();
		event_fl_remove();
	};
}

if (document.getElementById('form_fl_remove')) {
	document.getElementById('form_fl_remove').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_fl_remove();
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

if (document.getElementById('form_btn_save')) {
	document.getElementById('form_btn_save').onclick = function(e) {
		e.preventDefault();
		event_save();
	};
}

if (document.getElementById('form_save')) {
	document.getElementById('form_save').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_save();
			return false;
		}
	};
}

if (document.getElementById('form_btn_trash')) {
	document.getElementById('form_btn_trash').onclick = function(e) {
		e.preventDefault();
		event_trash();
	};
}

if (document.getElementById('form_trash')) {
	document.getElementById('form_trash').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_trash();
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

function action_checkbox_info() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_ck_checkbox_info').is(':checked')) {
		// Marcar todos los checkbox
		$('.dt_table_info').prop('checked', true);
		// Seleccionar todos los elementos checkeados
		//var list = document.querySelectorAll('#dt_info tr input[type=checkbox]');
		// Iterar y recorrer las filas
		//Array.prototype.forEach.call(list, function (item) {
			//item.checked = true;
			var querys = document.querySelector('#dt_info');
			var elements = querys.querySelectorAll('tr select, input[type="text"], input[type="number"]');
			[].forEach.call(elements, function(items) {
				items.className = 'form-control input-xs border-success';
				items.disabled = false;
			});

			var querys = document.querySelector('#dt_info');
			var elements = querys.querySelectorAll('tr td.lbl_azp_ibn_warranty_t_identification input');
			[].forEach.call(elements, function(items) {
				items.className = 'form-control input-xs';
				items.disabled = true;
			});
			
			var querys = document.querySelector('#dt_info');
			var elements = querys.querySelectorAll('tr td.lbl_azp_ibn_warranty_t_full_name input');
			[].forEach.call(elements, function(items) {
				items.className = 'form-control input-xs';
				items.disabled = true;
			});
		//});
	} else {
		// Marcar todos los checkbox
		$('.dt_table_info').prop('checked', false);
		// Seleccionar todos los elementos checkeados
		//var list = document.querySelectorAll('#dt_info tr input[type=checkbox]');
		// Iterar y recorrer las filas
		//Array.prototype.forEach.call(list, function (item) {
			//item.checked = false;
			var querys = document.querySelector('#dt_info');
			var elements = querys.querySelectorAll('tr select, input[type="text"], input[type="number"]');
			[].forEach.call(elements, function(items) {
				items.className = 'form-control input-xs';
				items.disabled = true;
			});
		//});
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
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
		//vtable.column(0).visible(false);
		$('#modal-id-change').modal('show');
		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azs_ibn_warranty_id_azs_ibn_warranty",
				data: "lbl_azs_ibn_warranty_id_azs_ibn_warranty",
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
				id: "lbl_azs_ibn_warranty_m_date_created",
				data: "lbl_azs_ibn_warranty_m_date_created",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Fecha Modificacion",
				id: "lbl_azs_ibn_warranty_m_date_modified",
				data: "lbl_azs_ibn_warranty_m_date_modified",
				type: "readonly",
				className: "text-dark",
				visible: false,
			},
			{
				title: "Descripcion",
				id: "lbl_azs_ibn_warranty_m_description",
				data: "lbl_azs_ibn_warranty_m_description",
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
				title: "Consecutivo",
				id: "lbl_azs_ibn_warranty_t_consecutive",
				data: "lbl_azs_ibn_warranty_t_consecutive",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Acreditor",
				id: "lbl_azs_ibn_warranty_t_creditor",
				data: "lbl_azs_ibn_warranty_t_creditor",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Fecha",
				id: "lbl_azs_ibn_warranty_t_date",
				data: "lbl_azs_ibn_warranty_t_date",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Nombre",
				id: "lbl_azs_ibn_warranty_t_full_name",
				data: "lbl_azs_ibn_warranty_t_full_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Cedula",
				id: "lbl_azs_ibn_warranty_t_identification",
				data: "lbl_azs_ibn_warranty_t_identification",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Concatenado",
				id: "lbl_azs_ibn_warranty_t_observation",
				data: "lbl_azs_ibn_warranty_t_observation",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien Detalle",
				id: "lbl_azs_ibn_warranty_t_well_detail",
				data: "lbl_azs_ibn_warranty_t_well_detail",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Bien",
				id: "lbl_azs_ibn_warranty_t_well_name",
				data: "lbl_azs_ibn_warranty_t_well_name",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Valor",
				id: "lbl_azs_ibn_warranty_t_value",
				data: "lbl_azs_ibn_warranty_t_value",
				type: "readonly",
				className: "text-dark",
				visible: true,
			},
			{
				title: "Estado",
				id: "lbl_azs_ibn_warranty_u_ibn_state",
				data: "lbl_azs_ibn_warranty_u_ibn_state",
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
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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
						url : "api/azp_ibn_warranty/create",
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
								if (obj.register > 0) {
									var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
									var ajaxurl = var_url + 'api' + var_controller + "crud/" + obj.register + "/";
									request.open("GET", ajaxurl, true);
									request.send();
									request.onreadystatechange = function(){
										if (request.readyState == 4 && request.status == 200) {
											var objData = JSON.parse(request.responseText);
											if (objData.status) {
												var v_concept = objData.data.lbl_azp_ibn_warranty_t_concept;
												if (v_concept == '') {
													// Configuracion de la ventana modal
													$('#modal-id-concept').modal('show');
													// Añadir y remover las clases incorporadas de las hojas de estilo
													$("#id_cp_concept").addClass('d-none');
													// Mensaje a mostrar una vez terminada la accion
													$("#form_ajax_concept").removeClass('alert-danger');
													$("#form_ajax_concept").removeClass('alert-success');
													$("#form_ajax_concept").removeClass('alert-warning');
													$('#form_ajax_concept').addClass('alert alert-danger');
													$("#form_ajax_concept").html(error_icon  + 'Error: Debes asignar textos o campos concatenados desde el modulo de clientes.');
												} else {
													// Configuracion de la ventana modal
													$('#modal-id-concept').modal('show');
													// Añadir y remover las clases incorporadas de las hojas de estilo
													$("#id_cp_concept").removeClass('d-none');
													// Mensaje a mostrar una vez terminada la accion
													$('#form_ajax_concept').removeClass('alert');
													$('#form_ajax_concept').addClass('hide');
													$('#form_ajax_concept').html('');
													// Asignacion de valores a la referencia del id
													document.querySelector("#lbl_cp_concept").innerHTML = v_concept;
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
						url : "api/azp_ibn_warranty/delete",
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
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
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
					// Ocultar la columna especificada de la tabla
					//var vtable = $('#dt_info').DataTable();
					//vtable.column(0).visible(false);
					$('#modal-id-detail').modal('show');
					document.querySelector("#lbl_azp_ibn_warranty_id_azp_ibn_warranty").innerHTML = objData.data.lbl_azp_ibn_warranty_id_azp_ibn_warranty;
					document.querySelector("#lbl_azp_user_t_login_created").innerHTML = objData.data.lbl_azp_user_t_login_created;
					document.querySelector("#lbl_azp_user_t_login_modified").innerHTML = objData.data.lbl_azp_user_t_login_modified;
					document.querySelector("#lbl_azp_ibn_warranty_m_date_created").innerHTML = objData.data.lbl_azp_ibn_warranty_m_date_created;
					document.querySelector("#lbl_azp_ibn_warranty_m_date_modified").innerHTML = objData.data.lbl_azp_ibn_warranty_m_date_modified;
					document.querySelector("#lbl_azp_ibn_warranty_m_description").innerHTML = objData.data.lbl_azp_ibn_warranty_m_description;
					document.querySelector("#lbl_azp_sys_state_t_name").innerHTML = objData.data.lbl_azp_sys_state_t_name;
					document.querySelector("#lbl_azp_ibn_warranty_t_comment_legal").innerHTML = objData.data.lbl_azp_ibn_warranty_t_comment_legal;
					document.querySelector("#lbl_azp_ibn_warranty_t_concept").innerHTML = objData.data.lbl_azp_ibn_warranty_t_concept;
					document.querySelector("#lbl_azp_ibn_warranty_t_consecutive").innerHTML = objData.data.lbl_azp_ibn_warranty_t_consecutive;
					document.querySelector("#lbl_azp_ibn_warranty_t_creditor").innerHTML = objData.data.lbl_azp_ibn_warranty_t_creditor;
					document.querySelector("#lbl_azp_ibn_warranty_t_date").innerHTML = objData.data.lbl_azp_ibn_warranty_t_date;
					document.querySelector("#lbl_azp_ibn_warranty_t_full_name").innerHTML = objData.data.lbl_azp_ibn_warranty_t_full_name;
					document.querySelector("#lbl_azp_ibn_warranty_t_identification").innerHTML = objData.data.lbl_azp_ibn_warranty_t_identification;
					document.querySelector("#lbl_azp_ibn_warranty_t_observation").innerHTML = objData.data.lbl_azp_ibn_warranty_t_observation;
					document.querySelector("#lbl_azp_ibn_warranty_t_well_detail").innerHTML = objData.data.lbl_azp_ibn_warranty_t_well_detail;
					document.querySelector("#lbl_azp_ibn_warranty_t_well_name").innerHTML = objData.data.lbl_azp_ibn_warranty_t_well_name;
					document.querySelector("#lbl_azp_ibn_warranty_t_value").innerHTML = objData.data.lbl_azp_ibn_warranty_t_value;
					document.querySelector("#lbl_azp_ibn_state_t_name").innerHTML = objData.data.lbl_azp_ibn_state_t_name;
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
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function event_finish() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_finish').removeClass('alert-danger');
	$('#form_ajax_finish').removeClass('alert-success');
	$('#form_ajax_finish').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_finish').addClass('alert-warning');
	$("#form_ajax_finish").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_finish').removeClass('hide');
	$('#form_ajax_finish').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-finish').modal('hide');
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
						$('#form_ajax_finish').removeClass('alert');
						$('#form_ajax_finish').addClass('hide');
						$('#form_ajax_finish').html('');
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
					$('#modal-id-finish').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_warranty/finish",
						data : $('#form_finish').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_finish').html(success_icon + obj.message);
								$("#form_ajax_finish").removeClass('alert-warning');
								$("#form_ajax_finish").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-finish').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_finish').removeClass('alert');
									$('#form_ajax_finish').addClass('hide');
									$('#form_ajax_finish').html('');
								}, 0);
								// Mensaje de audio para mostrar en la pagina web
								initApp.playSound('views/templates/smart/dist/media/sound', 'voice_on');
								bootbox.alert({
									title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Completado!</span>",
									message: "<span><strong>Exito:</strong> Haz finalizado exitosamente la base.</span>",
									centerVertical: true,
									className: "modal-alert",
									closeButton: false,
								});
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-finish').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_finish').html(error_icon + obj.message);
								$("#form_ajax_finish").removeClass('alert-warning');
								$("#form_ajax_finish").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_finish').addClass('alert-danger');
							$("#form_ajax_finish").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_finish').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_plus() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_plus').removeClass('alert-danger');
	$('#form_ajax_plus').removeClass('alert-success');
	$('#form_ajax_plus').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_plus').addClass('alert-warning');
	$("#form_ajax_plus").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_plus').removeClass('hide');
	$('#form_ajax_plus').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-plus').modal('hide');
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
						$('#form_ajax_plus').removeClass('alert');
						$('#form_ajax_plus').addClass('hide');
						$('#form_ajax_plus').html('');
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
					$('#modal-id-plus').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_warranty/plus",
						data : $('#form_plus').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_plus').html(success_icon + obj.message);
								$("#form_ajax_plus").removeClass('alert-warning');
								$("#form_ajax_plus").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-plus').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_plus').removeClass('alert');
									$('#form_ajax_plus').addClass('hide');
									$('#form_ajax_plus').html('');
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
								$('#modal-id-plus').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_plus').html(error_icon + obj.message);
								$("#form_ajax_plus").removeClass('alert-warning');
								$("#form_ajax_plus").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_plus').addClass('alert-danger');
							$("#form_ajax_plus").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_plus').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_fl_remove() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_capture').DataTable();
	//vtable.column(0).visible(true);
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_fl_remove').removeClass('alert-danger');
	$('#form_ajax_fl_remove').removeClass('alert-success');
	$('#form_ajax_fl_remove').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_fl_remove').addClass('alert-warning');
	$("#form_ajax_fl_remove").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_fl_remove').removeClass('hide');
	$('#form_ajax_fl_remove').addClass('alert');
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
						$('#form_ajax_fl_remove').removeClass('alert');
						$('#form_ajax_fl_remove').addClass('hide');
						$('#form_ajax_fl_remove').html('');
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
					$('#modal-id-fl_remove').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_warranty/fl_remove",
						data : $('#form_fl_remove').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Mostrar la columna especificada de la tabla
								//var vtable = $('#dt_capture').DataTable();
								//vtable.column(0).visible(false);
								// Recargar la tabla con nueva informacion
								if ($("#dt_capture").length) { $('#dt_capture').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_fl_remove').html(success_icon + obj.message);
								$("#form_ajax_fl_remove").removeClass('alert-warning');
								$("#form_ajax_fl_remove").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-fl_remove').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_fl_remove').removeClass('alert');
									$('#form_ajax_fl_remove').addClass('hide');
									$('#form_ajax_fl_remove').html('');
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
								$('#modal-id-fl_remove').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_fl_remove').html(error_icon + obj.message);
								$("#form_ajax_fl_remove").removeClass('alert-warning');
								$("#form_ajax_fl_remove").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_fl_remove').addClass('alert-danger');
							$("#form_ajax_fl_remove").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_fl_remove').removeClass('hide');
						},
					});
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
						url : "api/azp_ibn_warranty/remove",
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
						url : "api/azp_ibn_warranty/restore",
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

function event_save() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_save').removeClass('alert-danger');
	$('#form_ajax_save').removeClass('alert-success');
	$('#form_ajax_save').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_save').addClass('alert-warning');
	$("#form_ajax_save").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_save').removeClass('hide');
	$('#form_ajax_save').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-save').modal('hide');
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
		//vtable.column(0).visible(false);
		// Obtencion de los datos a traves de inputs
		var v_ibn_state = $("#dt_info tr.selected td.lbl_azp_ibn_state_t_name").find('select').val();
		var v_creditor = $("#dt_info tr.selected td.lbl_azp_ibn_warranty_t_creditor").find('input').val();
		var v_well_name = $("#dt_info tr.selected td.lbl_azp_ibn_warranty_t_well_name").find('input').val();
		var v_well_detail = $("#dt_info tr.selected td.lbl_azp_ibn_warranty_t_well_detail").find('input').val();
		var v_value = $("#dt_info tr.selected td.lbl_azp_ibn_warranty_t_value").find('input').val();
		var v_date = $("#dt_info tr.selected td.lbl_azp_ibn_warranty_t_date").find('input').val();
		var v_observation = $("#dt_info tr.selected td.lbl_azp_ibn_warranty_t_observation").find('input').val();
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
							$('#form_ajax_save').removeClass('alert');
							$('#form_ajax_save').addClass('hide');
							$('#form_ajax_save').html('');
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
							url : "api/azp_ibn_warranty/save",
							data : {
								field_sv_id: idtbl,
								field_sv_ibn_state: v_ibn_state,
								field_sv_creditor: v_creditor,
								field_sv_well_name: v_well_name,
								field_sv_well_detail: v_well_detail,
								field_sv_value: v_value,
								field_sv_date: v_date,
								field_sv_observation: v_observation,
							},
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_save').html(success_icon + obj.message);
									$("#form_ajax_save").removeClass('alert-warning');
									$("#form_ajax_save").addClass('alert-success');
									// Dejar campos vacios sobre los elementos id del formulario
									//document.querySelector("#form_save").reset();
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_save').removeClass('alert');
										$('#form_ajax_save').addClass('hide');
										$('#form_ajax_save').html('');
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
									$('#modal-id-save').modal('show');
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_save').html(error_icon + obj.message);
									$("#form_ajax_save").removeClass('alert-warning');
									$("#form_ajax_save").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_save').addClass('alert-danger');
								$("#form_ajax_save").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_save').removeClass('hide');
							},
						});
					},
				},
			},
			className: "modal-alert",
			closeButton: false,
		});
	} else {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function event_trash() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_trash').removeClass('alert-danger');
	$('#form_ajax_trash').removeClass('alert-success');
	$('#form_ajax_trash').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_trash').addClass('alert-warning');
	$("#form_ajax_trash").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_trash').removeClass('hide');
	$('#form_ajax_trash').addClass('alert');
	// Configuracion de la ventana modal
	//$('#modal-id-trash').modal('hide');
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
						$('#form_ajax_trash').removeClass('alert');
						$('#form_ajax_trash').addClass('hide');
						$('#form_ajax_trash').html('');
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
					$('#modal-id-trash').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_warranty/trash",
						data : $('#form_trash').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_trash').html(success_icon + obj.message);
								$("#form_ajax_trash").removeClass('alert-warning');
								$("#form_ajax_trash").addClass('alert-success');
								// Configuracion de la ventana modal
								$('#modal-id-trash').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_trash').removeClass('alert');
									$('#form_ajax_trash').addClass('hide');
									$('#form_ajax_trash').html('');
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
								$('#modal-id-trash').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_trash').html(error_icon + obj.message);
								$("#form_ajax_trash").removeClass('alert-warning');
								$("#form_ajax_trash").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_trash').addClass('alert-danger');
							$("#form_ajax_trash").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_trash').removeClass('hide');
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
					var querys = document.querySelector('#form_update');
					var elements = querys.querySelectorAll('select, input, textarea');
					[].forEach.call(elements, function(items) {
						items.disabled = false;
					});
					$.ajax({
						type : "POST",
						url : "api/azp_ibn_warranty/update",
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
								
								var v_ibn_state = document.getElementById('field_up_ibn_state').value;
								if (v_ibn_state == '' || v_ibn_state == '4' || v_ibn_state == '17') {
									var querys = document.querySelector('#form_update');
									var elements = querys.querySelectorAll('select, input, textarea');
									[].forEach.call(elements, function(items) {
										items.disabled = true;
									});
									$('#field_up_ibn_state').removeAttr('disabled', '');
									// Añadir atributos de botones en el fomrulario
									//$('#btn_up_reset').attr('disabled', '');
									//$('#btn_up_limitation').attr('disabled', '');
								} else {
									var querys = document.querySelector('#form_update');
									var elements = querys.querySelectorAll('select, input, textarea');
									[].forEach.call(elements, function(items) {
										items.disabled = false;
									});
									// Remover atributos de botones en el fomrulario
									//$('#btn_up_reset').removeAttr('disabled', '');
									//$('#btn_up_limitation').removeAttr('disabled', '');
								}

								if (obj.register > 0) {
									var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
									var ajaxurl = var_url + 'api' + var_controller + "crud/" + obj.register + "/";
									request.open("GET", ajaxurl, true);
									request.send();
									request.onreadystatechange = function(){
										if (request.readyState == 4 && request.status == 200) {
											var objData = JSON.parse(request.responseText);
											if (objData.status) {
												var v_concept = objData.data.lbl_azp_ibn_warranty_t_concept;
												if (v_concept == '') {
													// Configuracion de la ventana modal
													$('#modal-id-concept').modal('show');
													// Añadir y remover las clases incorporadas de las hojas de estilo
													$("#id_cp_concept").addClass('d-none');
													// Mensaje a mostrar una vez terminada la accion
													$("#form_ajax_concept").removeClass('alert-danger');
													$("#form_ajax_concept").removeClass('alert-success');
													$("#form_ajax_concept").removeClass('alert-warning');
													$('#form_ajax_concept').addClass('alert alert-danger');
													$("#form_ajax_concept").html(error_icon  + 'Error: Debes asignar textos o campos concatenados desde el modulo de clientes.');
												} else {
													// Configuracion de la ventana modal
													$('#modal-id-concept').modal('show');
													// Añadir y remover las clases incorporadas de las hojas de estilo
													$("#id_cp_concept").removeClass('d-none');
													// Mensaje a mostrar una vez terminada la accion
													$('#form_ajax_concept').removeClass('alert');
													$('#form_ajax_concept').addClass('hide');
													$('#form_ajax_concept').html('');
													// Asignacion de valores a la referencia del id
													document.querySelector("#lbl_cp_concept").innerHTML = v_concept;
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
							} else {
								// Configuracion de la ventana modal
								$('#modal-id-update').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_update').html(error_icon + obj.message);
								$("#form_ajax_update").removeClass('alert-warning');
								$("#form_ajax_update").addClass('alert-danger');

								var v_ibn_state = document.getElementById('field_up_ibn_state').value;
								if (v_ibn_state == '' || v_ibn_state == '4' || v_ibn_state == '17') {
									var querys = document.querySelector('#form_update');
									var elements = querys.querySelectorAll('select, input, textarea');
									[].forEach.call(elements, function(items) {
										items.disabled = true;
									});
									$('#field_up_ibn_state').removeAttr('disabled', '');
									// Añadir atributos de botones en el fomrulario
									//$('#btn_up_reset').attr('disabled', '');
									//$('#btn_up_limitation').attr('disabled', '');
								} else {
									var querys = document.querySelector('#form_update');
									var elements = querys.querySelectorAll('select, input, textarea');
									[].forEach.call(elements, function(items) {
										items.disabled = false;
									});
									// Remover atributos de botones en el fomrulario
									//$('#btn_up_reset').removeAttr('disabled', '');
									//$('#btn_up_limitation').removeAttr('disabled', '');
								}
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
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
		//vtable.column(0).visible(false);
		$('#modal-id-delete').modal('show');
		document.querySelector("#field_id_delete").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function modal_finish() {
	// Obtener el primer valor seleccionado de la tabla
	var idval =  document.getElementById('field_md_id').value;
	// Validar si el id es mayor a cero
	if (idval > 0) {
		$('#modal-id-finish').modal('show');
		document.querySelector("#field_id_finish").value = idval;
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

function modal_plus() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
		//vtable.column(0).visible(false);
		$('#modal-id-plus').modal('show');
		document.querySelector("#field_id_plus").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function modal_fl_remove() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_capture').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_capture tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_capture').DataTable();
		vtable.column(0).visible(false);
		$('#modal-id-fl_remove').modal('show');
		document.querySelector("#field_id_fl_remove").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		var vtable = $('#dt_capture').DataTable();
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

function modal_remove() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
		//vtable.column(0).visible(false);
		$('#modal-id-remove').modal('show');
		document.querySelector("#field_id_remove").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function modal_restore() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
		//vtable.column(0).visible(false);
		$('#modal-id-restore').modal('show');
		document.querySelector("#field_id_restore").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function modal_trash() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_info tr.selected td:first").find('input').val();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
		//vtable.column(0).visible(false);
		$('#modal-id-trash').modal('show');
		document.querySelector("#field_id_trash").value = idtbl;
	} else {
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function modal_update() {
	// Mostrar la columna especificada de la tabla
	//var vtable = $('#dt_info').DataTable();
	//vtable.column(0).visible(true);
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
					// Ocultar la columna especificada de la tabla
					//var vtable = $('#dt_info').DataTable();
					//vtable.column(0).visible(false);
					$('#modal-id-update').modal('show');
					document.querySelector("#field_fl_id").value = objData.data.lbl_azp_ibn_warranty_id_azp_ibn_warranty;
					document.querySelector('#field_fl_control').value = objData.data.lbl_azp_ibn_warranty_v_id_azp_ibn_control_panel;
					document.querySelector('#field_fl_detection').value = objData.data.lbl_azp_ibn_warranty_t_identification;

					document.querySelector("#field_up_id").value = objData.data.lbl_azp_ibn_warranty_id_azp_ibn_warranty;
					document.querySelector("#field_up_description").value = objData.data.lbl_azp_ibn_warranty_m_description;
					document.querySelector("#field_up_state").value = objData.data.lbl_azp_ibn_warranty_m_status;
					document.querySelector("#field_up_comment_legal").value = objData.data.lbl_azp_ibn_warranty_t_comment_legal;
					//document.querySelector("#field_up_concept").value = objData.data.lbl_azp_ibn_warranty_t_concept;
					document.querySelector("#field_up_consecutive").value = objData.data.lbl_azp_ibn_warranty_t_consecutive;
					document.querySelector("#field_up_creditor").value = objData.data.lbl_azp_ibn_warranty_t_creditor;
					document.querySelector("#field_up_date").value = objData.data.lbl_azp_ibn_warranty_t_date;
					document.querySelector("#field_up_full_name").value = objData.data.lbl_azp_ibn_warranty_t_full_name;
					document.querySelector("#field_up_identification").value = objData.data.lbl_azp_ibn_warranty_t_identification;
					document.querySelector("#field_up_limitation").value = objData.data.lbl_azp_ibn_warranty_t_limitation;
					document.querySelector("#field_up_observation").value = objData.data.lbl_azp_ibn_warranty_t_observation;
					document.querySelector("#field_up_well_detail").value = objData.data.lbl_azp_ibn_warranty_t_well_detail;
					document.querySelector("#field_up_well_name").value = objData.data.lbl_azp_ibn_warranty_t_well_name;
					document.querySelector("#field_up_value").value = objData.data.lbl_azp_ibn_warranty_t_value;
					//document.querySelector("#field_up_ibn_control_panel").value = objData.data.lbl_azp_ibn_warranty_v_id_azp_ibn_control_panel;
					document.querySelector("#field_up_ibn_state").value = objData.data.lbl_azp_ibn_warranty_v_id_azp_ibn_state;
					//event_state('update');
					event_val_value('update');
					event_pay_value('update');
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
		// Ocultar la columna especificada de la tabla
		//var vtable = $('#dt_info').DataTable();
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

function event_module(mvalue) {
	var id = document.getElementById('field_md_id').value;
	var url = var_url + 'azpibn' + mvalue + '/info/' + id + '/';
	window.location.href = url;
};

function event_check() {
	$("#dt_info input.dt_table_info").change(function () {
		if ($(this).prop("checked")) {
			$(this).closest('tr').find('td.lbl_azp_ibn_state_t_name select').prop('disabled', false);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_creditor input').prop('disabled', false);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_name input').prop('disabled', false);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_detail input').prop('disabled', false);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_value input').prop('disabled', false);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_date input').prop('disabled', false);

			$(this).closest('tr').find('td.lbl_azp_ibn_state_t_name select').addClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_creditor input').addClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_name input').addClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_detail input').addClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_value input').addClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_date input').addClass('border-success');

			//$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_plus button').prop('disabled', false);
			//$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_trash button').prop('disabled', false);
		} else {
			$(this).closest('tr').find('td.lbl_azp_ibn_state_t_name select').prop('disabled', true);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_creditor input').prop('disabled', true);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_name input').prop('disabled', true);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_detail input').prop('disabled', true);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_value input').prop('disabled', true);
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_date input').prop('disabled', true);

			$(this).closest('tr').find('td.lbl_azp_ibn_state_t_name select').removeClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_creditor input').removeClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_name input').removeClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_well_detail input').removeClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_value input').removeClass('border-success');
			$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_date input').removeClass('border-success');

			//$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_plus button').prop('disabled', true);
			//$(this).closest('tr').find('td.lbl_azp_ibn_warranty_t_trash button').prop('disabled', true);
		}
	});
};

function event_multiple() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Configuracion de la ventana modal
	//$('#modal-id-multiple').modal('hide');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.dt_table_info');
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
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_multiple').removeClass('alert-danger');
		$('#form_ajax_multiple').removeClass('alert-success');
		$('#form_ajax_multiple').removeClass('alert-warning');
		// Añadir y remover las clases incorporadas de las hojas de estilo
		$('#form_ajax_multiple').addClass('alert-warning');
		$("#form_ajax_multiple").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
		$('#form_ajax_multiple').removeClass('hide');
		$('#form_ajax_multiple').addClass('alert');
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
							$('#form_ajax_multiple').removeClass('alert');
							$('#form_ajax_multiple').addClass('hide');
							$('#form_ajax_multiple').html('');
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
							url : "api/azp_ibn_warranty/multiple",
							data : $('#form_table').serialize() + '&field_tb_ck=' + value_checked,
							success : function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_multiple').html(success_icon + obj.message);
									$("#form_ajax_multiple").removeClass('alert-warning');
									$("#form_ajax_multiple").addClass('alert-success');
									// Añadir y remover las clases incorporadas de las hojas de estilo
									setTimeout(function() {
										$('#form_ajax_multiple').removeClass('alert');
										$('#form_ajax_multiple').addClass('hide');
										$('#form_ajax_multiple').html('');
									}, 0);
									// Desmarcar el checkbox de seleccionar todos
									$('#field_ck_checkbox_info').prop('checked', false);
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
									$('#form_ajax_multiple').html(error_icon + obj.message);
									$("#form_ajax_multiple").removeClass('alert-warning');
									$("#form_ajax_multiple").addClass('alert-danger');
								}
							},
							error : function() {
								$('#form_ajax_multiple').addClass('alert-danger');
								$("#form_ajax_multiple").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
								$('#form_ajax_multiple').removeClass('hide');
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

function event_val_value(mvalue) {
	if (mvalue == 'create') {
		if ($('#check_cr_value').is(':checked')) {
			$("#field_cr_value").inputmask("remove");
			$('#field_cr_value').attr('placeholder','Digita el texto ...');
			$('#field_cr_value').attr('style','text-align: left;');
			document.getElementById('field_cr_value').value = 'SIN DETERMINAR';
		} else {
			$("#field_cr_value").inputmask("mask", { "currency": "$ 0" });
			//$(document).ready(function() { $('#field_cr_value').inputmask('$ 999.999.999.999', { numericInput: true }); });
		}
	} else if (mvalue == 'update') {
		if ($('#check_up_value').is(':checked')) {
			$("#field_up_value").inputmask("remove");
			$('#field_up_value').attr('placeholder','Digita el texto ...');
			$('#field_up_value').attr('style','text-align: left;');
			document.getElementById('field_up_value').value = 'SIN DETERMINAR';
		} else {
			$("#field_up_value").inputmask("mask", { "currency": "$ 0" });
			//$(document).ready(function() { $('#field_up_value').inputmask('$ 999.999.999.999', { numericInput: true }); });
		}
	}
};

function event_pay_value(mvalue) {
	if (mvalue == 'create') {
		if ($('#check_cr_value').is(':checked')) {
			$("#field_cr_value").inputmask("remove");
			$('#field_cr_value').attr('placeholder','Digita el texto ...');
			$('#field_cr_value').attr('style','text-align: left;');
			document.getElementById('field_cr_value').value = 'SIN DETERMINAR';
		} else {
			$("#field_cr_value").inputmask("mask", { "currency": "$ 0" });
			//$(document).ready(function() { $('#field_cr_value').inputmask('$ 999.999.999.999', { numericInput: true }); });
		}
	} else if (mvalue == 'update') {
		if ($('#check_up_value').is(':checked')) {
			$("#field_up_value").inputmask("remove");
			$('#field_up_value').attr('placeholder','Digita el texto ...');
			$('#field_up_value').attr('style','text-align: left;');
			document.getElementById('field_up_value').value = 'SIN DETERMINAR';
		} else {
			$("#field_up_value").inputmask("mask", { "currency": "$ 0" });
			//$(document).ready(function() { $('#field_up_value').inputmask('$ 999.999.999.999', { numericInput: true }); });
		}
	}
};

function event_state(mvalue) {
	if (mvalue == 'create') {
		var v_ibn_state = document.getElementById('field_cr_ibn_state').value;
		if (v_ibn_state == '' || v_ibn_state == '4' || v_ibn_state == '17') {
			var querys = document.querySelector('#form_create');
			var elements = querys.querySelectorAll('select, input, textarea');
			[].forEach.call(elements, function(items) {
				items.disabled = true;
			});
			$('#field_cr_ibn_state').removeAttr('disabled', '');
			// Añadir atributos de botones en el fomrulario
			//$('#btn_cr_reset').attr('disabled', '');
			//$('#btn_cr_limitation').attr('disabled', '');
			//$('#form_btn_create').attr('disabled', '');
		} else {
			var querys = document.querySelector('#form_create');
			var elements = querys.querySelectorAll('select, input, textarea');
			[].forEach.call(elements, function(items) {
				items.disabled = false;
			});
			// Remover atributos de botones en el fomrulario
			//$('#btn_cr_reset').removeAttr('disabled', '');
			//$('#btn_cr_limitation').removeAttr('disabled', '');
			//$('#form_btn_create').removeAttr('disabled', '');
		}
	}
	if (mvalue == 'update') {
		var v_ibn_state = document.getElementById('field_up_ibn_state').value;
		if (v_ibn_state == '' || v_ibn_state == '4' || v_ibn_state == '17') {
			var querys = document.querySelector('#form_update');
			var elements = querys.querySelectorAll('select, input, textarea');
			[].forEach.call(elements, function(items) {
				items.disabled = true;
			});
			$('#field_up_ibn_state').removeAttr('disabled', '');
			// Añadir atributos de botones en el fomrulario
			//$('#btn_up_reset').attr('disabled', '');
			//$('#btn_up_limitation').attr('disabled', '');
		} else {
			var querys = document.querySelector('#form_update');
			var elements = querys.querySelectorAll('select, input, textarea');
			[].forEach.call(elements, function(items) {
				items.disabled = false;
			});
			// Remover atributos de botones en el fomrulario
			//$('#btn_up_reset').removeAttr('disabled', '');
			//$('#btn_up_limitation').removeAttr('disabled', '');
		}
	}
	if (mvalue == 'table') {
		var v_ibn_state = document.getElementById('field_tb_ibn_state').value;
		if (v_ibn_state == '' || v_ibn_state == '4' || v_ibn_state == '17') {
			var querys = document.querySelector('#form_table');
			var elements = querys.querySelectorAll('select, input, textarea');
			[].forEach.call(elements, function(items) {
				items.disabled = true;
			});
			$('#field_tb_ibn_state').removeAttr('disabled', '');
		} else {
			var querys = document.querySelector('#form_table');
			var elements = querys.querySelectorAll('select, input, textarea');
			[].forEach.call(elements, function(items) {
				items.disabled = false;
			});
		}
	}
};

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

function modal_view(event) {
	var load = $("#field_fl_file")[0].files.length;
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var input = document.getElementById('field_fl_file');
	var path = input.value;
	var extensions = /(.pdf)$/i;
	if (load === 0) { $('#id_fl_embed').addClass('d-none'); } else {
		if (!extensions.exec(path)) {
			$("#form_ajax_file").removeClass('alert-success');
			$("#form_ajax_file").removeClass('alert-warning');
			$('#form_ajax_file').removeClass('hide');
			$('#form_ajax_file').addClass('alert');
			$('#form_ajax_file').addClass('alert-danger');
			$("#form_ajax_file").html(error_icon  + '<b>Error:</b> El campo de archivo solo acepta formatos pdf.');
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

function event_consult() {
	// Mostrar la columna especificada de la tabla
	var vtable = $('#dt_capture').DataTable();
	vtable.column(0).visible(true);
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = $("#dt_capture tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "cpdetail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					// Mostrar la columna especificada de la tabla
					var vtable = $('#dt_capture').DataTable();
					vtable.column(0).visible(false);
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
						// Asignacion de valores en un campo de texto
						document.getElementById('field_cn_id').value = idtbl;
						$('#modal-id-consult').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wname = objData.data.lbl_azp_ibn_capture_w_name;
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
		var vtable = $('#dt_capture').DataTable();
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

function event_download() {
	// Obtener el primer valor seleccionado de la tabla
	var idtbl = document.getElementById('field_cn_id').value;
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + 'api' + var_controller + "cpdetail/" + idtbl + "/";
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

function event_file() {
	var flid = document.getElementById('field_fl_id').value;
	var flcontrol = document.getElementById('field_fl_control').value;
	var fldetection = document.getElementById('field_fl_detection').value;
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
	//$('#modal-id-fl_create').modal('hide');
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
					$('#modal-id-fl_create').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					var load = $("#field_fl_file")[0].files.length;
					var input = document.getElementById('field_fl_file');
					var path = input.value;
					var extensions = /(.pdf)$/i;
					if (!extensions.exec(path)) { document.getElementById('field_fl_file').value = ''; } else {
						$.ajax({
							type: "POST",
							url: "api/azp_ibn_warranty/file",
							datatype: "HTML",
							data: new FormData(document.getElementById('form_file')),
							cache: false,
							contentType: false,
							processData: false,
							success: function(json) {
								var obj = jQuery.parseJSON(json);
								if (obj.success == 1) {
									// Recargar la tabla con nueva informacion
									if ($("#dt_capture").length) { $('#dt_capture').DataTable().ajax.reload(); }
									// Recargar la tabla con nueva informacion
									if ($("#dt_info").length) { $('#dt_info').DataTable().ajax.reload(); }
									// Mensaje a mostrar una vez terminada la accion
									$('#form_ajax_file').html(success_icon + obj.message);
									$("#form_ajax_file").removeClass('alert-warning');
									$("#form_ajax_file").addClass('alert-success');
									// Dejar campos vacios sobre los elementos id del formulario
									document.querySelector('#form_file').reset();
									document.getElementById('field_fl_id').value = flid;
									document.getElementById('field_fl_control').value = flcontrol;
									document.getElementById('field_fl_detection').value = fldetection;
									// Configuracion de la ventana modal
									$('#modal-id-fl_create').modal('hide');
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
									$('#modal-id-fl_create').modal('show');
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

function field_acount() {
	var se_field = document.getElementById('field_se_acount').value;
	let sf_field = document.getElementById('field_sf_acount');
	sf_field.value += "'" + se_field + "',";
};

function field_comment_legal() {
	var se_field = document.getElementById('field_se_comment_legal').value;
	let sf_field = document.getElementById('field_sf_comment_legal');
	sf_field.value += "'" + se_field + "',";
};

function field_concept() {
	var se_field = document.getElementById('field_se_concept').value;
	let sf_field = document.getElementById('field_sf_concept');
	sf_field.value += "'" + se_field + "',";
};

function field_consecutive() {
	var se_field = document.getElementById('field_se_consecutive').value;
	let sf_field = document.getElementById('field_sf_consecutive');
	sf_field.value += "'" + se_field + "',";
};

function field_creditor() {
	var se_field = document.getElementById('field_se_creditor').value;
	let sf_field = document.getElementById('field_sf_creditor');
	sf_field.value += "'" + se_field + "',";
};

function field_date() {
	var se_field = document.getElementById('field_se_date').value;
	let sf_field = document.getElementById('field_sf_date');
	sf_field.value += "'" + se_field + "',";
};

function field_full_name() {
	var se_field = document.getElementById('field_se_full_name').value;
	let sf_field = document.getElementById('field_sf_full_name');
	sf_field.value += "'" + se_field + "',";
};

function field_identification() {
	var se_field = document.getElementById('field_se_identification').value;
	let sf_field = document.getElementById('field_sf_identification');
	sf_field.value += "'" + se_field + "',";
};

function field_limitation() {
	var se_field = document.getElementById('field_se_limitation').value;
	let sf_field = document.getElementById('field_sf_limitation');
	sf_field.value += "'" + se_field + "',";
};

function field_observation() {
	var se_field = document.getElementById('field_se_observation').value;
	let sf_field = document.getElementById('field_sf_observation');
	sf_field.value += "'" + se_field + "',";
};

function field_policy_effective() {
	var se_field = document.getElementById('field_se_policy_effective').value;
	let sf_field = document.getElementById('field_sf_policy_effective');
	sf_field.value += "'" + se_field + "',";
};

function field_policy_final() {
	var se_field = document.getElementById('field_se_policy_final').value;
	let sf_field = document.getElementById('field_sf_policy_final');
	sf_field.value += "'" + se_field + "',";
};

function field_policy_viability() {
	var se_field = document.getElementById('field_se_policy_viability').value;
	let sf_field = document.getElementById('field_sf_policy_viability');
	sf_field.value += "'" + se_field + "',";
};

function field_well_detail() {
	var se_field = document.getElementById('field_se_well_detail').value;
	let sf_field = document.getElementById('field_sf_well_detail');
	sf_field.value += "'" + se_field + "',";
};

function field_well_name() {
	var se_field = document.getElementById('field_se_well_name').value;
	let sf_field = document.getElementById('field_sf_well_name');
	sf_field.value += "'" + se_field + "',";
};

function field_value() {
	var se_field = document.getElementById('field_se_value').value;
	let sf_field = document.getElementById('field_sf_value');
	sf_field.value += "'" + se_field + "',";
};

function field_ibn_control_panel() {
	var se_field = document.getElementById('field_se_ibn_control_panel').value;
	let sf_field = document.getElementById('field_sf_ibn_control_panel');
	sf_field.value += "'" + se_field + "',";
};

function field_ibn_state() {
	var se_field = document.getElementById('field_se_ibn_state').value;
	let sf_field = document.getElementById('field_sf_ibn_state');
	sf_field.value += "'" + se_field + "',";
};

function event_access(idtbl) {
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
						document.getElementById('field_ccn_id').value = idtbl;
						$('#modal-id-ccapture').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wroute = objData.data.lbl_azp_ibn_capture_w_route;
						$('#field_ccn_iframe').attr('src', var_url + wroute.replace('../','') + wfolder + wdocument);
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
						document.getElementById('field_ccn_id').value = idtbl;
						$('#modal-id-ccapture').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wroute = objData.data.lbl_azp_ibn_capture_w_route;
						$('#field_ccn_iframe').attr('src', var_url + wroute.replace('../','') + wfolder + wdocument);
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
						document.getElementById('field_ccn_id').value = idtbl;
						$('#modal-id-ccapture').modal('show');
						// Definiendo valores de la busqueda de resultados
						var wdocument = objData.data.lbl_azp_ibn_capture_w_document;
						var wfolder = objData.data.lbl_azp_ibn_capture_w_folder;
						var wroute = objData.data.lbl_azp_ibn_capture_w_route;
						$('#field_ccn_iframe').attr('src', var_url + wroute.replace('../','') + wfolder + wdocument);
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
	var idtbl = document.getElementById('field_ccn_id').value;
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