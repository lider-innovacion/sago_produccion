<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	# Incluyendo archivo del sistema
	require('dat_az.php');
	//------------------------------------------------
	# Incluyendo archivo del sistema
	require('dat_zv.php');
	//------------------------------------------------
	# Incluyendo archivo del sistema
	require('dat_zz.php');
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: az_authorized_permits
	$app->post('/az_role_az_a_p/update', function($request, $response) {
		$model = new m_az_roleModel;
		$response->withJson($model->sql_az_authorized_permits_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/azp_ibn_control_panel/archive", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_dsh_azp_ibn_control_panel_archive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/azp_ibn_control_panel/eliminate", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_dsh_azp_ibn_control_panel_eliminate($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/azp_ibn_control_panel/drop", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_dsh_azp_ibn_control_panel_drop($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/azp_ibn_control_panel/import", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_dsh_azp_ibn_control_panel_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/azp_ibn_control_panel/union", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_dsh_azp_ibn_control_panel_union($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/azp_ibn_data_main/delete", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_dsh_azp_ibn_data_main_delete($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: zv_gsc_follow_email
	$app->post("/zv_gsc_follow_email/pl_observation", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_azp_gsc_follow_email_pl_observation($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: zv_gsc_follow_email
	$app->post("/zv_gsc_follow_email/table", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_azp_gsc_follow_email_table($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_capture
	$app->post("/azp_crt_capture/certificate", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_certificate($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_capture
	$app->post("/azp_crt_capture/receipt", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_receipt($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/drop", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_drop($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/email_1", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_email_1($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/email_2", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_email_2($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/import", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/observation_internal", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_observation_internal($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/receipt", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_receipt($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/remision", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_remision($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/user", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_user($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/compress", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_compress($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/multiple", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_multiple($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/notary", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_notary($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/compress_1", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_compress_1($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/compress_4", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_compress_4($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/email", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_email($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/honorary", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_honorary($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/report_tcd", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_report_tcd($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/thirdparties", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_third_parties($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/up_all", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_up_all($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/user", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_user($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_registration
	$app->post("/azp_gsc_registration/import", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/email_1", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_1($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/email_2", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_2($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/email_3", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_3($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/email_4", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_4($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	/*$app->post("/azp_gsc_request/email_prex", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_prex($_POST));
		return $response;
	});*/
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	/*$app->post("/azp_gsc_request/email_rc", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_rc($_POST));
		return $response;
	});*/
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	/*$app->post("/azp_gsc_request/email_sexic", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_sexic($_POST));
		return $response;
	});*/
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	/*$app->post("/azp_gsc_request/email_sexpc", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_email_sexpc($_POST));
		return $response;
	});*/
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/remision", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_remision($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/supplier", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_supplier($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/extra_associate", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_extra_associate($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/extra_registration", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_extra_registration($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/import", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/observation_more", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_observation_more($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/report_follow_email", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_report_follow_email($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/thirdparties", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_third_parties($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/user", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_user($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fdp_benefits
	$app->post("/azp_fdp_benefits/extra_import", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_extra_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fdp_sxm
	$app->post("/azp_fdp_sxm/extra_import", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_extra_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/ld_upload", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_azp_ibn_information_ld_upload($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/lp_upload", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_azp_ibn_information_lp_upload($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/ld_remove", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_azp_ibn_information_ld_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: dashboard
	$app->post("/dashboard/lp_remove", function($request, $response) {
		$model = new m_zv_dashboardModel;
		$response->withJson($model->sql_azp_ibn_imagespress_lp_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_camera
	$app->post("/azp_ibn_camera/finish", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_finish($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_camera
	$app->post("/azp_ibn_camera/import", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_camera
	$app->post("/azp_ibn_camera/multiple", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_multiple($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_camera
	$app->post("/azp_ibn_camera/save", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_save($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_camera
	$app->post("/azp_ibn_camera/fl_remove", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_fl_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/concept_all", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_concept_all($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/concept_cam", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_concept_cam($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/concept_fur", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_concept_fur($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/concept_pro", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_concept_pro($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/concept_veh", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_concept_veh($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/concept_war", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_concept_war($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/format", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_format($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/policy_no", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_policy_no($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/policy_si", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_policy_si($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/regulation_no", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_regulation_no($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/regulation_si", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_regulation_si($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/archive", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_archive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/unstore", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_unstore($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_interface_dit
	$app->post("/azp_ibn_interface_dit/design", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_design($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/import", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/email", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_email($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/finish", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_finish($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/multiple_cp", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_multiple_cp($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/multiple_cn", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_multiple_cn($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/save", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_save($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/save_cp", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_save_cp($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/save_cn", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_save_cn($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/fl_remove", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_fl_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property
	$app->post("/azp_ibn_property/import", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property
	$app->post("/azp_ibn_property/finish", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_finish($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property
	$app->post("/azp_ibn_property/massive", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_massive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property
	$app->post("/azp_ibn_property/multiple", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_multiple($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property
	$app->post("/azp_ibn_property/save", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_save($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property
	$app->post("/azp_ibn_property/fl_remove", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_fl_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle
	$app->post("/azp_ibn_vehicle/import", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle
	$app->post("/azp_ibn_vehicle/finish", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_finish($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle
	$app->post("/azp_ibn_vehicle/massive", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_massive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle
	$app->post("/azp_ibn_vehicle/multiple", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_multiple($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle
	$app->post("/azp_ibn_vehicle/save", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_save($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle
	$app->post("/azp_ibn_vehicle/fl_remove", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_fl_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/import", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_import($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/finish", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_finish($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/multiple", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_multiple($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/plus", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_plus($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/trash", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_trash($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/save", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_save($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/fl_remove", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_fl_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_client
	$app->post("/azp_fct_client/tariff", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_tariff($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_client
	$app->post("/azp_fct_client/scale", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_scale($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_client
	$app->post("/azp_fct_client/drop", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_drop($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_client
	$app->post("/azp_fct_client/edit", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_edit($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_prefacture
	$app->post("/azp_fct_prefacture/calculate", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_calculate($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_prefacture
	$app->post("/azp_fct_prefacture/invoice", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_invoice($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_satisfaction
	$app->post("/azp_fct_satisfaction/calculate", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_calculate($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/multifold_unique", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_multifold_unique($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/multifold_various", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_multifold_various($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/multifold_doble", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_multifold_doble($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/duplicate", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_duplicate($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/approve", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_approve($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/acquittance", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_acquittance($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/receipt", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_receipt($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_exchange_portal
	$app->post("/azp_crt_exchange_portal/archive", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_archive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_exchange_portal
	$app->post("/azp_gsc_exchange_portal/archive", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_archive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_exchange_portal
	$app->post("/azp_ibn_exchange_portal/archive", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_archive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_exchange_portal
	$app->post("/azp_crt_exchange_portal/urchive", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_urchive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_exchange_portal
	$app->post("/azp_gsc_exchange_portal/urchive", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_urchive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_exchange_portal
	$app->post("/azp_ibn_exchange_portal/urchive", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_urchive($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/client_upload", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_information_client_upload($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/client_remove", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_information_client_remove($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request
	$app->post("/azp_crt_request/client_upload", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_information_client_upload($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request
	$app->post("/azp_crt_request/client_remove", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_information_client_remove($_POST));
		return $response;
	});
	//------------------------------------------------
?>