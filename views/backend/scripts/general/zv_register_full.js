if (document.getElementById('form_btn_zv_register_full')) {
	document.getElementById('form_btn_zv_register_full').onclick = function(e) {
		e.preventDefault();
		zv_register_full();
	};
}

if (document.getElementById('form_zv_register_full')) {
	document.getElementById('form_zv_register_full').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode != '13') {
			zv_register_full();
			return false;
		}
	};
}

function zv_register_full() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_register_full').removeClass('alert-danger');
	$('#form_ajax_zv_register_full').removeClass('alert-success');
	$('#form_ajax_zv_register_full').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_register_full').addClass('alert-warning');
	$("#form_ajax_zv_register_full").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_register_full').removeClass('hide');
	$('#form_ajax_zv_register_full').addClass('alert');

	var date_since = document.getElementById('field_rf_date_sice').value;
	var date_until = document.getElementById('field_rf_date_until').value;

	if (date_since == '') {
		$("#form_ajax_zv_register_full").removeClass('alert-warning');
		$('#form_ajax_zv_register_full').addClass('alert-danger');
		$("#form_ajax_zv_register_full").html(error_icon  + '<b>Error:</b> El campo de fecha desde es obligatorio');
		$('#form_ajax_zv_register_full').removeClass('hide');
	} else {
		if (date_until == '') {
			$("#form_ajax_zv_register_full").removeClass('alert-warning');
			$('#form_ajax_zv_register_full').addClass('alert-danger');
			$("#form_ajax_zv_register_full").html(error_icon  + '<b>Error:</b> El campo de fecha hasta es obligatorio');
			$('#form_ajax_zv_register_full').removeClass('hide');
		} else {
			if (date_since > date_until) {
				$("#form_ajax_zv_register_full").removeClass('alert-warning');
				$('#form_ajax_zv_register_full').addClass('alert-danger');
				$("#form_ajax_zv_register_full").html(error_icon  + '<b>Error:</b> La fecha desde no debe ser mayor a la fecha hasta.');
				$('#form_ajax_zv_register_full').removeClass('hide');
			} else {
				$("#form_ajax_zv_register_full").removeClass('alert-danger');
				$("#form_ajax_zv_register_full").removeClass('alert-warning');
				$('#form_ajax_zv_register_full').addClass('alert-success');
				$("#form_ajax_zv_register_full").html(success_icon  + 'Exito: Reporte generado correctamente.');
				$('#form_ajax_zv_register_full').removeClass('hide');
				// Dejar campos vacios sobre los elementos id del formulario
				document.querySelector("#form_zv_register_full").reset();
				// Añadir y remover las clases incorporadas de las hojas de estilo
				setTimeout(function() {
					$('#form_ajax_zv_register_full').removeClass('alert');
					$('#form_ajax_zv_register_full').addClass('hide');
					$('#form_ajax_zv_register_full').html('');
				}, 0);

				$("#div_rf_filter").removeClass('d-none');
				$('#div_jtf_4_request').addClass('d-none');
				$('#div_jtf_4_full').removeClass('d-none');

				// Column Definitions
				var columnSet = [
					{
						title: "",
						id: "lbl_azp_report_gsc_request_id_azp_report_gsc_request",
						data: "lbl_azp_report_gsc_request_id_azp_report_gsc_request",
						type: "readonly",
						"visible": true,
					},
					{
						title: "Entidad",
						id: "lbl_azp_report_gsc_request_t_client",
						data: "lbl_azp_report_gsc_request_t_client",
						type: "readonly",
						"visible": true,
					},
					/*{
						title: "Solicitud",
						id: "lbl_azp_report_gsc_request_t_request",
						data: "lbl_azp_report_gsc_request_t_request",
						type: "readonly",
						"visible": true,
					},*/
					/*{
						title: "Fecha",
						id: "lbl_azp_report_gsc_request_t_date",
						data: "lbl_azp_report_gsc_request_t_date",
						type: "readonly",
						"visible": true,
					},*/
					{
						title: "Cedulas",
						id: "lbl_azp_report_gsc_request_t_identification_sum",
						data: "lbl_azp_report_gsc_request_t_identification_sum",
						type: "readonly",
						"visible": true,
					},
					{
						title: "Entregado",
						id: "lbl_azp_report_gsc_request_t_c_delivered_sum",
						data: "lbl_azp_report_gsc_request_t_c_delivered_sum",
						type: "readonly",
						"visible": true,
					},
					{
						title: "En Tramite",
						id: "lbl_azp_report_gsc_request_t_c_in_process_sum",
						data: "lbl_azp_report_gsc_request_t_c_in_process_sum",
						type: "readonly",
						"visible": true,
					},
					{
						title: "Sin Entregar",
						id: "lbl_azp_report_gsc_request_t_c_without_sum",
						data: "lbl_azp_report_gsc_request_t_c_without_sum",
						type: "readonly",
						"visible": true,
					},
					{
						title: "Solicitud",
						id: "lbl_azp_report_gsc_request_t_c_request_sum",
						data: "lbl_azp_report_gsc_request_t_c_request_sum",
						type: "readonly",
						"visible": true,
					},
					{
						title: "Estado",
						id: "lbl_azp_report_gsc_request_t_state",
						data: "lbl_azp_report_gsc_request_t_state",
						type: "readonly",
						"visible": true,
					},
					{
						title: "Porcentaje",
						id: "lbl_azp_report_gsc_request_t_percentage",
						data: "lbl_azp_report_gsc_request_t_percentage",
						type: "readonly",
						"visible": true,
					},
				];
				// Inicializar tabla de datos
				var myTable = $('#dt_report_full').dataTable({
					// Reinicialiar los datos de la tabla
					destroy: true,
					// Estructura de las columnas para el DOOM
					dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
						+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
							+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
						+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
						+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
					// Leer datos de prácticamente cualquier fuente de datos JSON
					ajax: var_url + "dashboard/reportgscfull/?field_rf_date_sice=" + date_since + "&field_rf_date_until=" + date_until,
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
					fixedColumns: true,
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
					scrollX: true,
					// Control para el desplazamiento medido de arriba abajo
					scrollY: 325,
					// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
					//stateSave: true,
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
					columnDefs: [
						{
							targets: 7,
							render: function(data, type, full, meta) {
								var badge = {
									"1": {
										'title': 'Activa',
										'class': 'badge-success'
									},
									"2": {
										'title': 'Cerrada',
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
		}
	}
};

function filter_register_full() {
	var filter = document.getElementById("field_rf_filter").value;
	// Column Definitions
	var columnSet = [
		{
			title: "",
			id: "lbl_azp_report_gsc_request_id_azp_report_gsc_request",
			data: "lbl_azp_report_gsc_request_id_azp_report_gsc_request",
			type: "readonly",
			"visible": true,
		},
		{
			title: "Entidad",
			id: "lbl_azp_report_gsc_request_t_client",
			data: "lbl_azp_report_gsc_request_t_client",
			type: "readonly",
			"visible": true,
		},
		/*{
			title: "Solicitud",
			id: "lbl_azp_report_gsc_request_t_request",
			data: "lbl_azp_report_gsc_request_t_request",
			type: "readonly",
			"visible": true,
		},*/
		/*{
			title: "Fecha",
			id: "lbl_azp_report_gsc_request_t_date",
			data: "lbl_azp_report_gsc_request_t_date",
			type: "readonly",
			"visible": true,
		},*/
		{
			title: "Cedulas",
			id: "lbl_azp_report_gsc_request_t_identification_sum",
			data: "lbl_azp_report_gsc_request_t_identification_sum",
			type: "readonly",
			"visible": true,
		},
		{
			title: "Entregado",
			id: "lbl_azp_report_gsc_request_t_c_delivered_sum",
			data: "lbl_azp_report_gsc_request_t_c_delivered_sum",
			type: "readonly",
			"visible": true,
		},
		{
			title: "En Tramite",
			id: "lbl_azp_report_gsc_request_t_c_in_process_sum",
			data: "lbl_azp_report_gsc_request_t_c_in_process_sum",
			type: "readonly",
			"visible": true,
		},
		{
			title: "Sin Entregar",
			id: "lbl_azp_report_gsc_request_t_c_without_sum",
			data: "lbl_azp_report_gsc_request_t_c_without_sum",
			type: "readonly",
			"visible": true,
		},
		{
			title: "Solicitud",
			id: "lbl_azp_report_gsc_request_t_c_request_sum",
			data: "lbl_azp_report_gsc_request_t_c_request_sum",
			type: "readonly",
			"visible": true,
		},
		{
			title: "Estado",
			id: "lbl_azp_report_gsc_request_t_state",
			data: "lbl_azp_report_gsc_request_t_state",
			type: "readonly",
			"visible": true,
		},
		{
			title: "Porcentaje",
			id: "lbl_azp_report_gsc_request_t_percentage",
			data: "lbl_azp_report_gsc_request_t_percentage",
			type: "readonly",
			"visible": true,
		},
	];
	// Inicializar tabla de datos
	var myTable = $('#dt_report_full').dataTable({
		// Reinicialiar los datos de la tabla
		destroy: true,
		// Estructura de las columnas para el DOOM
		dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
				+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
			+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
		// Leer datos de prácticamente cualquier fuente de datos JSON
		ajax: var_url + "dashboard/reportfilterfull/?field_rf_filter=" + filter,
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
		fixedColumns: true,
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
		scrollX: true,
		// Control para el desplazamiento medido de arriba abajo
		scrollY: 325,
		// Guardar el estado de una tabla (su posición de paginación, estado de pedido, etc.)
		//stateSave: true,
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
		columnDefs: [
			{
				targets: 7,
				render: function(data, type, full, meta) {
					var badge = {
						"1": {
							'title': 'Activa',
							'class': 'badge-success'
						},
						"2": {
							'title': 'Cerrada',
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