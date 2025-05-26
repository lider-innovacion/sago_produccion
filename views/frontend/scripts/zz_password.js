function event_zz_password() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span>',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span>',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span>';
	$('#ajax_zz_password').removeClass('alert-danger');
	$('#ajax_zz_password').removeClass('alert-warning');
	$('#ajax_zz_password').addClass('alert-warning');
	$("#ajax_zz_password").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#ajax_zz_password').removeClass('hide');
	$('#ajax_zz_password').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/zz_password",
		data : $('#form_zz_password').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#ajax_zz_password').html(success_icon + obj.message);
				$("#ajax_zz_password").removeClass('alert-warning');
				$("#ajax_zz_password").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_password_new').value = '';
				document.getElementById('field_password_confirm').value = '';
				// Añadir y remover clases e inclusive html
				setTimeout(function() {
					window.location.href = "login/?field_id=password";
					//location.reload();
				},1500);
			} else {
				$('#ajax_zz_password').html(error_icon + obj.message);
				$("#ajax_zz_password").removeClass('alert-warning');
				$("#ajax_zz_password").addClass('alert-danger');
			}
		},
		error : function() {
			$('#ajax_zz_password').addClass('alert-danger');
			$("#ajax_zz_password").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#ajax_zz_password').removeClass('hide');
		}
	});
};

if (document.getElementById('btn_zz_password')) {
	document.getElementById('btn_zz_password').onclick = function(e) {
		e.preventDefault();
		event_zz_password();
	};
}

if (document.getElementById('form_zz_password')) {
	document.getElementById('form_zz_password').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_zz_password();
			return false;
		}
	};
}