<?php
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_firm
	$app->post('/zv_firm/update', function($request, $response) {
		$model = new m_zv_firmModel;
		$response->withJson($model->sql_zv_firm_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_password
	$app->post('/zv_password/update', function($request, $response) {
		$model = new m_zv_passwordModel;
		$response->withJson($model->sql_zv_password_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_personal
	$app->post('/zv_personal/update', function($request, $response) {
		$model = new m_zv_personalModel;
		$response->withJson($model->sql_zv_personal_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_profile
	$app->post('/zv_profile/update', function($request, $response) {
		$model = new m_zv_profileModel;
		$response->withJson($model->sql_zv_profile_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_setting
	$app->post('/zv_setting_button/update', function($request, $response) {
		$model = new m_zv_settingModel;
		$response->withJson($model->sql_zv_setting_button_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_setting
	$app->post('/zv_setting_design/update', function($request, $response) {
		$model = new m_zv_settingModel;
		$response->withJson($model->sql_zv_setting_design_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_setting
	$app->post('/zv_setting_modal/update', function($request, $response) {
		$model = new m_zv_settingModel;
		$response->withJson($model->sql_zv_setting_modal_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_setting
	$app->post('/zv_setting_panel/update', function($request, $response) {
		$model = new m_zv_settingModel;
		$response->withJson($model->sql_zv_setting_panel_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_setting
	$app->post('/zv_setting_table/update', function($request, $response) {
		$model = new m_zv_settingModel;
		$response->withJson($model->sql_zv_setting_table_update($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_social_media
	$app->post('/zv_social_media/update', function($request, $response) {
		$model = new m_zv_social_mediaModel;
		$response->withJson($model->sql_zv_social_media_update($_POST));
		return $response;
	});
	//------------------------------------------------
?>