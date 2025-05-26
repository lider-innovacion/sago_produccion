function event_zz_register() {
	var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
	success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
	process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#ajax_zz_register').removeClass('alert-danger');
	$('#ajax_zz_register').removeClass('alert-warning');
	$('#ajax_zz_register').addClass('alert-warning');
	$("#ajax_zz_register").html(process_icon  + 'Procesando información, por favor espere...');
	$('#ajax_zz_register').removeClass('hide');
	$.ajax({
		type : "POST",
		url : "api/zz_register",
		data : $('#form_zz_register').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#ajax_zz_register').html(success_icon + obj.message);
				$("#ajax_zz_register").removeClass('alert-warning');
				$("#ajax_zz_register").addClass('alert-success');
				setTimeout(function() {
					window.location.href = "login/";
					//location.reload();
				},2500);
			} else {
				$('#ajax_zz_register').html(error_icon  + obj.message);
				$("#ajax_zz_register").removeClass('alert-warning');
				$("#ajax_zz_register").addClass('alert-danger');
			}
		},
		error : function() {
			$('#ajax_zz_register').addClass('alert-danger');
			$("#ajax_zz_register").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#ajax_zz_register').removeClass('hide');
		}
	});
};

if (document.getElementById('btn_zz_register')) {
	document.getElementById('btn_zz_register').onclick = function(e) {
		e.preventDefault();
		event_zz_register();
	};
}

if (document.getElementById('form_zz_register')) {
	document.getElementById('form_zz_register').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_zz_register();
			return false;
		}
	};
}