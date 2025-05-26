function event_zz_login() {
	var error_icon = '<span class="ti-alert" aria-hidden="true"></span> ',
	success_icon = '<span class="ti-check" aria-hidden="true"></span> ',
	process_icon = '<span class="ti-reload" aria-hidden="true"></span> ';
	$('#ajax_zz_login').removeClass('alert-danger');
	$('#ajax_zz_login').removeClass('alert-warning');
	$('#ajax_zz_login').addClass('alert-warning');
	$("#ajax_zz_login").html(process_icon  + 'Iniciando sesión, por favor espere...');
	$('#ajax_zz_login').removeClass('hide');
	$.ajax({
		type : "POST",
		url : "api/zz_login",
		data : $('#form_zz_login').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#ajax_zz_login').html(success_icon + obj.message);
				$("#ajax_zz_login").removeClass('alert-warning');
				$("#ajax_zz_login").addClass('alert-success');
				setTimeout(function(){
					location.reload();
				},1000);
			} else {
				$('#ajax_zz_login').html(error_icon  + obj.message);
				$("#ajax_zz_login").removeClass('alert-warning');
				$("#ajax_zz_login").addClass('alert-danger');
			}
		},
		error : function() {
			$('#ajax_zz_login').addClass('alert-danger');
			$("#ajax_zz_login").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#ajax_zz_login').removeClass('hide');
		}
	});
};
if (document.getElementById('btn_zz_login')) {
	document.getElementById('btn_zz_login').onclick = function(e) {
		e.preventDefault();
		event_zz_login();
	};
}
if (document.getElementById('form_zz_login')) {
	document.getElementById('form_zz_login').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_zz_login();
			return false;
		}
	};
}