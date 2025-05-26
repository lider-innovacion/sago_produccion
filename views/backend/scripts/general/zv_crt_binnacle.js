if (document.getElementById('form_btn_zv_crt_binnacle')) {
	document.getElementById('form_btn_zv_crt_binnacle').onclick = function(e) {
		e.preventDefault();
		zv_crt_binnacle();
	};
}

if (document.getElementById('form_zv_crt_binnacle')) {
	document.getElementById('form_zv_crt_binnacle').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode != '13') {
			zv_crt_binnacle();
			return false;
		}
	};
}

function zv_crt_binnacle() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_crt_binnacle').removeClass('alert-danger');
	$('#form_ajax_zv_crt_binnacle').removeClass('alert-success');
	$('#form_ajax_zv_crt_binnacle').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_crt_binnacle').addClass('alert-warning');
	$("#form_ajax_zv_crt_binnacle").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_crt_binnacle').removeClass('hide');
	$('#form_ajax_zv_crt_binnacle').addClass('alert');

	var date_since = document.getElementById('field_bn_date_sice').value;

	if (date_since == '') {
		$("#form_ajax_zv_crt_binnacle").removeClass('alert-warning');
		$('#form_ajax_zv_crt_binnacle').addClass('alert-danger');
		$("#form_ajax_zv_crt_binnacle").html(error_icon  + '<b>Error:</b> El campo de fecha mes es obligatorio');
		$('#form_ajax_zv_crt_binnacle').removeClass('hide');
	} else {
		$("#form_ajax_zv_crt_binnacle").removeClass('alert-danger');
		$("#form_ajax_zv_crt_binnacle").removeClass('alert-warning');
		$('#form_ajax_zv_crt_binnacle').addClass('alert-success');
		$("#form_ajax_zv_crt_binnacle").html(success_icon  + 'Exito: Reporte generado correctamente.');
		$('#form_ajax_zv_crt_binnacle').removeClass('hide');
		// Dejar campos vacios sobre los elementos id del formulario
		document.querySelector("#form_zv_crt_binnacle").reset();
		// Añadir y remover las clases incorporadas de las hojas de estilo
		setTimeout(function() {
			$('#form_ajax_zv_crt_binnacle').removeClass('alert');
			$('#form_ajax_zv_crt_binnacle').addClass('hide');
			$('#form_ajax_zv_crt_binnacle').html('');
		}, 0);

		$('#div_jtf_dt_2').removeClass('d-none');

		// Column Definitions
		var columnSet = [
			{
				title: "Id",
				id: "lbl_azp_crt_binnacle_id_azp_crt_binnacle",
				data: "lbl_azp_crt_binnacle_id_azp_crt_binnacle",
				type: "readonly",
				"visible": false,
			},
			{
				title: "Codigo Cliente",
				id: "lbl_azp_crt_binnacle_t_client_code",
				data: "lbl_azp_crt_binnacle_t_client_code",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Cedula",
				id: "lbl_azp_crt_binnacle_t_identification",
				data: "lbl_azp_crt_binnacle_t_identification",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Nombre",
				id: "lbl_azp_crt_binnacle_t_full_name",
				data: "lbl_azp_crt_binnacle_t_full_name",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Placa Matricula",
				id: "lbl_azp_crt_binnacle_t_plaque_enrollment",
				data: "lbl_azp_crt_binnacle_t_plaque_enrollment",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Ciudad",
				id: "lbl_azp_crt_binnacle_t_city",
				data: "lbl_azp_crt_binnacle_t_city",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Tipo Certificado",
				id: "lbl_azp_crt_binnacle_t_request_type",
				data: "lbl_azp_crt_binnacle_t_request_type",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Nombre Proveedor",
				id: "lbl_azp_crt_binnacle_t_provider_name",
				data: "lbl_azp_crt_binnacle_t_provider_name",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Fecha Solicitud",
				id: "lbl_azp_crt_binnacle_t_request_date",
				data: "lbl_azp_crt_binnacle_t_request_date",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Fecha Entrega",
				id: "lbl_azp_crt_binnacle_t_date_delivery",
				data: "lbl_azp_crt_binnacle_t_date_delivery",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Tipo Observacion",
				id: "lbl_azp_crt_binnacle_t_observation_type",
				data: "lbl_azp_crt_binnacle_t_observation_type",
				type: "readonly",
				"visible": true,
			},
			{
				title: "Recibo",
				id: "lbl_azp_crt_binnacle_t_rcb_receipt",
				data: "lbl_azp_crt_binnacle_t_rcb_receipt",
				type: "readonly",
				"visible": true,
			},
		];
		// Inicializar tabla de datos
		var myTable = $('#dt_report_crt_binnacle').dataTable({
			// Reinicialiar los datos de la tabla
			destroy: true,
			// Estructura de las columnas para el DOOM
			dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
					+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
				+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
			// Leer datos de prácticamente cualquier fuente de datos JSON
			ajax: var_url + "dashboard/reportcrtbinnacle/?field_date_binnacle=" + date_since,
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
			lengthMenu: [10, 20, 30, 40, 50,],
			// Ordenar columnas en ascendente o descendente
			order: [[0, "asc",]],
			// Controlar si las tablas de datos deben usar celda única superior
			//orderCellsTop: true,
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
					title: 'Bitacora_' + var_date,
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
						$('row c[r^="E"]', sheet).attr('s', '52');
						$('row c[r^="F"]', sheet).attr('s', '52');
						$('row c[r^="G"]', sheet).attr('s', '52');
						$('row c[r^="H"]', sheet).attr('s', '52');
						//$('row c[r^="I"]', sheet).attr('s', '52');
						//$('row c[r^="J"]', sheet).attr('s', '52');
						$('row c[r^="K"]', sheet).attr('s', '52');

						$('row c[r=A2]', sheet).attr('s', '2');
						$('row c[r=B2]', sheet).attr('s', '2');
						$('row c[r=C2]', sheet).attr('s', '2');
						$('row c[r=D2]', sheet).attr('s', '2');
						$('row c[r=E2]', sheet).attr('s', '2');
						$('row c[r=F2]', sheet).attr('s', '2');
						$('row c[r=G2]', sheet).attr('s', '2');
						$('row c[r=H2]', sheet).attr('s', '2');
						$('row c[r=I2]', sheet).attr('s', '2');
						$('row c[r=J2]', sheet).attr('s', '2');
						$('row c[r=K2]', sheet).attr('s', '2');

						$('row c[r=A1]', sheet).attr('s', '51');
					},
				},
				{
					title: 'Bitacora_' + var_date,
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
	}
};