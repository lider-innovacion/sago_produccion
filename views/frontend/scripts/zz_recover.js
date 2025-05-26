function event_zz_recover() {
	var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
		success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#ajax_zz_recover').removeClass('alert-danger');
	$('#ajax_zz_recover').removeClass('alert-warning');
	$('#ajax_zz_recover').addClass('alert-warning');
	$("#ajax_zz_recover").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#ajax_zz_recover').removeClass('hide');
	$('#ajax_zz_recover').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/zz_recover",
		data : $('#zz_recover_form').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if(obj.success == 1) {
				$('#ajax_zz_recover').html(success_icon + obj.message);
				$('#ajax_zz_recover').removeClass('alert-warning');
				$('#ajax_zz_recover').addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_email').value = '';
				document.getElementById('field_login').value = '';
				/*setTimeout(function(){
					location.reload();
				},3000);*/
			} else {
				$('#ajax_zz_recover').html(error_icon  + obj.message);
				$('#ajax_zz_recover').removeClass('alert-warning');
				$('#ajax_zz_recover').addClass('alert-danger');
			}
		},
		error : function() {
			//window.alert('#zz_recover Error');
			$('#ajax_zz_recover').addClass('alert-danger');
			$("#ajax_zz_recover").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#ajax_zz_recover').removeClass('hide');
		}
	});
}

if(document.getElementById('btn_zz_recover')) {
	document.getElementById('btn_zz_recover').onclick = function(e) {
		e.preventDefault();
	  event_zz_recover();
	};
}

if(document.getElementById('zz_recover_form')) {
	document.getElementById('zz_recover_form').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13'){
			event_zz_recover();
			return false;
		}
	};
}