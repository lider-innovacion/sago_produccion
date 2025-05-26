function event_zz_contact() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#ajax_zz_contact').removeClass('alert-danger');
	$('#ajax_zz_contact').removeClass('alert-warning');
	$('#ajax_zz_contact').addClass('alert-warning');
	$("#ajax_zz_contact").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#ajax_zz_contact').removeClass('hide');
	$('#ajax_zz_contact').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/zz_contact",
		data : $('#form_zz_contact').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#ajax_zz_contact').html(success_icon + obj.message);
				$("#ajax_zz_contact").removeClass('alert-warning');
				$("#ajax_zz_contact").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_names').value = '';
				document.getElementById('field_surnames').value = '';
				document.getElementById('field_phone_fixed').value = '';
				document.getElementById('field_phone_movil').value = '';
				document.getElementById('field_email').value = '';
				document.getElementById('field_country').value = '0';
				document.getElementById('field_affair').value = '';
				document.getElementById('field_transact').value = '0';
				document.getElementById('field_message').value = '';
			} else {
				$('#ajax_zz_contact').html(error_icon + obj.message);
				$("#ajax_zz_contact").removeClass('alert-warning');
				$("#ajax_zz_contact").addClass('alert-danger');
			}
		},
		error : function() {
			$('#ajax_zz_contact').addClass('alert-danger');
			$("#ajax_zz_contact").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#ajax_zz_contact').removeClass('hide');
		}
	});
};

if (document.getElementById('btn_zz_contact')) {
	document.getElementById('btn_zz_contact').onclick = function(e) {
		e.preventDefault();
		event_zz_contact();
	};
}

if (document.getElementById('form_zz_contact')) {
	document.getElementById('form_zz_contact').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			event_zz_contact();
			return false;
		}
	};
}