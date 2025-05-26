if (document.getElementById('form_btn_zv_gsc_follow_email')) {
	document.getElementById('form_btn_zv_gsc_follow_email').onclick = function(e) {
		e.preventDefault();
		zv_gsc_follow_email();
	};
}

if (document.getElementById('form_zv_gsc_follow_email')) {
	document.getElementById('form_zv_gsc_follow_email').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode != '13') {
			zv_gsc_follow_email();
			return false;
		}
	};
}

function fm_action_checkbox_all_read() {
	// Control de validacion del checkbox seleccionado
	if ($('#field_fm_checkbox_all_read').is(':checked')) {
		// Marcar todos los checkbox
		$('.fm_table_read').prop('checked', true);
	} else {
		// Marcar todos los checkbox
		$('.fm_table_read').prop('checked', false);
	}
};

function zv_gsc_follow_email() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_gsc_follow_email').removeClass('alert-danger');
	$('#form_ajax_zv_gsc_follow_email').removeClass('alert-success');
	$('#form_ajax_zv_gsc_follow_email').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_gsc_follow_email').addClass('alert-warning');
	$("#form_ajax_zv_gsc_follow_email").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_gsc_follow_email').removeClass('hide');
	$('#form_ajax_zv_gsc_follow_email').addClass('alert');

	var date_since = document.getElementById('field_fm_date_since').value;
	var date_until = document.getElementById('field_fm_date_until').value;

	if (date_since == '') {
		$("#form_ajax_zv_gsc_follow_email").removeClass('alert-warning');
		$('#form_ajax_zv_gsc_follow_email').addClass('alert-danger');
		$("#form_ajax_zv_gsc_follow_email").html(error_icon  + '<b>Error:</b> El campo de fecha desde es obligatorio');
		$('#form_ajax_zv_gsc_follow_email').removeClass('hide');
	} else {
		if (date_until == '') {
			$("#form_ajax_zv_gsc_follow_email").removeClass('alert-warning');
			$('#form_ajax_zv_gsc_follow_email').addClass('alert-danger');
			$("#form_ajax_zv_gsc_follow_email").html(error_icon  + '<b>Error:</b> El campo de fecha hasta es obligatorio');
			$('#form_ajax_zv_gsc_follow_email').removeClass('hide');
		} else {
			if (date_since > date_until) {
				$("#form_ajax_zv_gsc_follow_email").removeClass('alert-warning');
				$('#form_ajax_zv_gsc_follow_email').addClass('alert-danger');
				$("#form_ajax_zv_gsc_follow_email").html(error_icon  + '<b>Error:</b> La fecha desde no debe ser mayor a la fecha hasta.');
				$('#form_ajax_zv_gsc_follow_email').removeClass('hide');
			} else {
				$("#form_ajax_zv_gsc_follow_email").removeClass('alert-danger');
				$("#form_ajax_zv_gsc_follow_email").removeClass('alert-warning');
				$('#form_ajax_zv_gsc_follow_email').addClass('alert-success');
				$("#form_ajax_zv_gsc_follow_email").html(success_icon  + 'Exito: Reporte generado correctamente.');
				$('#form_ajax_zv_gsc_follow_email').removeClass('hide');
				// Dejar campos vacios sobre los elementos id del formulario
				document.querySelector("#form_zv_gsc_follow_email").reset();
				// Añadir y remover las clases incorporadas de las hojas de estilo
				setTimeout(function() {
					$('#form_ajax_zv_gsc_follow_email').removeClass('alert');
					$('#form_ajax_zv_gsc_follow_email').addClass('hide');
					$('#form_ajax_zv_gsc_follow_email').html('');
				}, 0);

				$('#div_jtf_dt_4').removeClass('d-none');

				// Column Definitions
				var columnSet = [
					{
						title: "",
						id: "lbl_azp_report_gsc_follow_email_id_azp_report_gsc_follow_email",
						data: "lbl_azp_report_gsc_follow_email_id_azp_report_gsc_follow_email",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Seleccion",
						id: "lbl_azp_report_gsc_follow_email_id_azp_report_gsc_follow_email",
						data: "lbl_azp_report_gsc_follow_email_id_azp_report_gsc_follow_email",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Numero Solicitud",
						id: "lbl_azp_report_gsc_follow_email_t_number_request",
						data: "lbl_azp_report_gsc_follow_email_t_number_request",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Cliente",
						id: "lbl_azp_report_gsc_follow_email_u_gsc_client",
						data: "lbl_azp_report_gsc_follow_email_u_gsc_client",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Fecha Solicitud",
						id: "lbl_azp_report_gsc_follow_email_t_request_date",
						data: "lbl_azp_report_gsc_follow_email_t_request_date",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Cedula",
						id: "lbl_azp_report_gsc_follow_email_t_identification",
						data: "lbl_azp_report_gsc_follow_email_t_identification",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Nombre Completo",
						id: "lbl_azp_report_gsc_follow_email_t_full_name",
						data: "lbl_azp_report_gsc_follow_email_t_full_name",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Serial",
						id: "lbl_azp_report_gsc_follow_email_t_serial",
						data: "lbl_azp_report_gsc_follow_email_t_serial",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Notaria",
						id: "lbl_azp_report_gsc_follow_email_t_notary",
						data: "lbl_azp_report_gsc_follow_email_t_notary",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Ciudad",
						id: "lbl_azp_report_gsc_follow_email_t_city",
						data: "lbl_azp_report_gsc_follow_email_t_city",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Fecha Defuncion",
						id: "lbl_azp_report_gsc_follow_email_t_death_date",
						data: "lbl_azp_report_gsc_follow_email_t_death_date",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Observaciones",
						id: "lbl_azp_report_gsc_follow_email_t_observation_internal",
						data: "lbl_azp_report_gsc_follow_email_t_observation_internal",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Estado",
						id: "lbl_azp_report_gsc_follow_email_u_gsc_state",
						data: "lbl_azp_report_gsc_follow_email_u_gsc_state",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Causal",
						id: "lbl_azp_report_gsc_follow_email_u_gsc_causal",
						data: "lbl_azp_report_gsc_follow_email_u_gsc_causal",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "# Correos Existencia",
						id: "lbl_azp_report_gsc_follow_email_t_number_sexic",
						data: "lbl_azp_report_gsc_follow_email_t_number_sexic",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "# Correos Expedicion",
						id: "lbl_azp_report_gsc_follow_email_t_number_sexpc",
						data: "lbl_azp_report_gsc_follow_email_t_number_sexpc",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Ultima Fecha Gestion",
						id: "lbl_azp_report_gsc_follow_email_t_mg_last_date",
						data: "lbl_azp_report_gsc_follow_email_t_mg_last_date",
						type: "readonly",
						className: "text-dark",
						"visible": true,
					},
					{
						title: "Plan Accion",
						id: "lbl_azp_report_gsc_follow_email_t_plan_action",
						data: "lbl_azp_report_gsc_follow_email_t_plan_action",
						type: "readonly",
						className: "text-dark",
						"visible": false,
					},
				];
				// Inicializar tabla de datos
				var myTable = $('#dt_report_follow_email').dataTable({
					// Reinicialiar los datos de la tabla
					destroy: true,
					// Estructura de las columnas para el DOOM
					dom: "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center'B>>"
						+ "<'row mb-3'<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-start'f>"
							+ "<'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-end'l>>"
						+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'tr>>"
						+ "<'row mb-3'<'col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4'i><'col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8'p>>",
					// Leer datos de prácticamente cualquier fuente de datos JSON
					ajax: var_url + "dashboard/reportfollowemail/?field_fm_date_sice=" + date_since + "&field_fm_date_until=" + date_until,
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
					select: false,
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
					stateSave: false,
					// Botones que usan clases de bootstrap
					buttons: [
						{
							text: '<i class="far fa-search"></i>',
							titleAttr: 'Buscar',
							className: 'btn-sm btn-outline-dark',
							attr: {
								'id': 'change_btn_sync',
								'name': 'change_btn_sync',
								'data-toggle': 'modal',
								'data-target': '.modal-div-fm_filter',
							},
						},
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
							exportOptions: {
								format: {
									body: function(data) {
										var valor = data.toString();
										valor = valor.replace("<br/>","\n");
										return valor;
									},
								},
							},
						},
					],
					columnDefs: [
						{
							targets: 1,
							searchable: false,
							orderable: false,
							className: 'dt-body-center',
							'render': function (data, type, full, meta) {
								return '<input type="checkbox" name="field_fm_id" id="field_fm_id" class="fm_table_read" value="' + $('<div/>').text(data).html() + '">';
							},
						},
					],
				});

				$('#dt_report_follow_email').on('click', 'tr', function(){
					var dato = $(this).find('td:first').html();
					event_fm_detail(dato);
				});
			}
		}
	}
};

function zv_gsc_plan_action() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_gsc_follow_email').removeClass('alert-danger');
	$('#form_ajax_zv_gsc_follow_email').removeClass('alert-success');
	$('#form_ajax_zv_gsc_follow_email').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_zv_gsc_follow_email').addClass('alert-warning');
	$("#form_ajax_zv_gsc_follow_email").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_gsc_follow_email').removeClass('hide');
	$('#form_ajax_zv_gsc_follow_email').addClass('alert');
	// Obtener inputs seleccionados de la tabla
	var value_table = document.querySelectorAll('.fm_table_read');
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
			url : "api/zv_gsc_follow_email/table",
			data: { field_tb_id: value_checked, },
			success : function(json) {
				var obj = jQuery.parseJSON(json);
				if (obj.success == 1) {
					// Añadir y remover las clases incorporadas de las hojas de estilo
					setTimeout(function() {
						$('#form_ajax_zv_gsc_follow_email').removeClass('alert');
						$('#form_ajax_zv_gsc_follow_email').addClass('hide');
						$('#form_ajax_zv_gsc_follow_email').html('');
					}, 0);
					// Configuracion de la ventana modal
					$('#modal-id-plan_action').modal('show');
				} else {
					// Mensaje a mostrar una vez terminada la accion
					$('#form_ajax_zv_gsc_follow_email').html(error_icon + obj.message);
					$("#form_ajax_zv_gsc_follow_email").removeClass('alert-warning');
					$("#form_ajax_zv_gsc_follow_email").addClass('alert-danger');
				}
			},
			error : function() {
				$('#form_ajax_zv_gsc_follow_email').addClass('alert-danger');
				$("#form_ajax_zv_gsc_follow_email").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
				$('#form_ajax_zv_gsc_follow_email').removeClass('hide');
			}
		});
	}
};

if (document.getElementById('form_btn_pl_observation')) {
	document.getElementById('form_btn_pl_observation').onclick = function(e) {
		e.preventDefault();
		event_pl_observation();
	};
}

if (document.getElementById('form_pl_observation')) {
	document.getElementById('form_pl_observation').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_pl_observation();
			return false;
		}
	};
}

function event_pl_observation() {
	// Definir los iconos para los correspondientes mensajes
	var error_icon = '<span class="far fa-times-circle" aria-hidden="true"></span>' + ' ';
	var success_icon = '<span class="far fa-check-circle" aria-hidden="true"></span>' + ' ';
	var process_icon = '<span class="far fa-spinner fa-spin" aria-hidden="true"></span>' + ' ';
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_pl_observation').removeClass('alert-danger');
	$('#form_ajax_pl_observation').removeClass('alert-success');
	$('#form_ajax_pl_observation').removeClass('alert-warning');
	// Añadir y remover las clases incorporadas de las hojas de estilo
	$('#form_ajax_pl_observation').addClass('alert-warning');
	$("#form_ajax_pl_observation").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pl_observation').removeClass('hide');
	$('#form_ajax_pl_observation').addClass('alert');
	// Configuracion de la ventana modal
	$('#modal-id-pl_observation').modal('hide');
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
						$('#form_ajax_pl_observation').removeClass('alert');
						$('#form_ajax_pl_observation').addClass('hide');
						$('#form_ajax_pl_observation').html('');
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
					$('#modal-id-pl_observation').modal('show');
				},
			},
			ok: {
				label: "Completar",
				className: 'btn btn-sm btn-outline-success',
				callback: function() {
					$.ajax({
						type : "POST",
						url : "api/zv_gsc_follow_email/pl_observation",
						data : $('#form_pl_observation').serialize(),
						success : function(json) {
							var obj = jQuery.parseJSON(json);
							if (obj.success == 1) {
								// Recargar la tabla con nueva informacion
								if ($("#dt_report_follow_email").length) { $('#dt_report_follow_email').DataTable().ajax.reload(); }
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_pl_observation').html(success_icon + obj.message);
								$("#form_ajax_pl_observation").removeClass('alert-warning');
								$("#form_ajax_pl_observation").addClass('alert-success');
								// Dejar campos vacios sobre los elementos id del formulario
								document.querySelector("#form_pl_observation").reset();
								// Configuracion de la ventana modal
								$('#modal-id-pl_observation').modal('hide');
								// Añadir y remover las clases incorporadas de las hojas de estilo
								setTimeout(function() {
									$('#form_ajax_pl_observation').removeClass('alert');
									$('#form_ajax_pl_observation').addClass('hide');
									$('#form_ajax_pl_observation').html('');
								}, 0);
								// Desmarcar el checkbox de seleccionar todos
								$('#field_fm_checkbox_all_read').prop('checked', false);
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
								// Configuracion de la ventana modal
								$('#modal-id-pl_observation').modal('show');
								// Mensaje a mostrar una vez terminada la accion
								$('#form_ajax_pl_observation').html(error_icon + obj.message);
								$("#form_ajax_pl_observation").removeClass('alert-warning');
								$("#form_ajax_pl_observation").addClass('alert-danger');
							}
						},
						error : function() {
							$('#form_ajax_pl_observation').addClass('alert-danger');
							$("#form_ajax_pl_observation").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
							$('#form_ajax_pl_observation').removeClass('hide');
						},
					});
				},
			},
		},
		className: "modal-alert",
		closeButton: false,
	});
};

function event_fm_detail(idtbl) {
	// Obtener el primer valor seleccionado de la tabla
	//var idtbl = $("tr.selected td:first").html();
	// Validar si el id es mayor a cero
	if (idtbl > 0) {
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxurl = var_url + "dashboard/detail/" + idtbl + "/";
		request.open("GET", ajaxurl, true);
		request.send();
		//$('#modal-id-detail').modal('show');
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modal-id-fm_detail').modal('show');
					document.querySelector("#lbl_azp_report_gsc_follow_email_t_observation_internal").innerHTML = objData.data.lbl_azp_report_gsc_follow_email_t_observation_internal;
					document.querySelector("#lbl_azp_report_gsc_follow_email_t_plan_action").innerHTML = objData.data.lbl_azp_report_gsc_follow_email_t_plan_action;
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