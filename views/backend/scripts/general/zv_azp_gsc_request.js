function event_gsc_default_state() {
	var id = document.getElementById('state_request').value;
	var ajaxurl = var_url + "dashboard/gscdfstate/" + id + "/";
	var chartj, options;

	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			options.series[0].data = data;
			chartj = new Highcharts.chart(options);
		}
	});

	options = {
		chart: {
			renderTo: 'gsc_graphic_state',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
		},
		title: {
			text: 'Reporte Grafico',
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			},
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false,
				},
				showInLegend: true,
			},
		},
		series: [
			{
				name: 'Total',
				colorByPoint: true,
				data: [],
			}
		]
	};
};

function event_gsc_graphic_state() {
	var date_since = document.getElementById('state_since').value;
	var date_until = document.getElementById('state_until').value;
	var control = document.getElementById('state_base').value;

	if (date_since != '' && date_until != '') {
		var ajaxurl = var_url + "dashboard/gscgpgraphic/" + control + "/?date_since=" + date_since + '&date_until=' + date_until;
	} else {
		var ajaxurl = var_url + "dashboard/gscgpgraphic/" + control + "/";
	}

	var chartj, options;

	$.ajax({
		url: ajaxurl,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			options.series[0].data = data;
			chartj = new Highcharts.chart(options);
		}
	});

	options = {
		chart: {
			renderTo: 'gsc_graphic_state',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
		},
		title: {
			text: 'Reporte Grafico',
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			},
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false,
				},
				showInLegend: true,
			},
		},
		series: [
			{
				name: 'Total',
				colorByPoint: true,
				data: [],
			}
		]
	};
};

function event_gsc_graphic_reset() {
	document.getElementById('state_since').value = '';
	document.getElementById('state_until').value = '';
	document.getElementById('state_base').value = '';
};

function event_gsc_graphic_causal_d() {
	// Obtener datos de un elemento especifico por id y asignacion de valores
	var ft_data = document.getElementById("causal_client").value;
	// Capturar el valor del campo de datos
	const ft_causal = document.getElementById("causal_base").value;
	// Control de validacion de datos
	if (ft_causal != '') { my_url = ft_causal; } else { my_url = ft_data; }
	// Busqueda de datos a traves de url y por ajax
	var val_ajax = var_url + "dashboard/" + "gscgpcausals/" + my_url + "/";
	var val_chart, val_options;
	// Enviar datos por ajax
	$.ajax({
		url: val_ajax,
		type: 'POST',
		dataType: 'json',
		success: function(data) {
			val_options.xAxis.categories = data;
			val_options.series[0].data = data;
			val_chart = new Highcharts.chart(val_options);
		}
	});
	//Highcharts.chart('hig_qpm_dy_column_stacked', {
	val_options = {
		chart: {
			renderTo: 'hig_gsc_causal',
			type: 'column',
		},
		title: {
			text: 'Resultado',
		},
		subtitle: {
			text: 'Valores graficados con datos de la base.',
		},
		xAxis: {
			categories: [],
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Total fruit consumption',
			},
			stackLabels: {
				enabled: true,
				style: {
					fontWeight: 'bold',
					color: (Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color) || 'gray',
				},
			},
		},
		legend: {
			align: 'right',
			x: -30,
			verticalAlign: 'top',
			y: 25,
			floating: true,
			backgroundColor:
			Highcharts.defaultOptions.legend.backgroundColor || 'white',
			borderColor: '#CCC',
			borderWidth: 1,
			shadow: false,
		},
		tooltip: {
			headerFormat: '<b>{point.x}</b><br/>',
			pointFormat: '{series.name}: {point.y}',
		},
		plotOptions: {
			column: {
				stacking: 'normal',
				dataLabels: {
					enabled: true,
				},
			},
		},
		series: [
			{
				name: 'Total',
				data: [],
			},
		],
	};
	//});
};

function event_gsc_graphic_causal_r() {
	document.getElementById('causal_base').value = '';
};

function event_gsc_graphic_causal_t() {
	document.getElementById('causal_base').value = '';

	event_gsc_default_causal_s();
	event_gsc_default_causal_i();
	event_gsc_graphic_causal_d();
};