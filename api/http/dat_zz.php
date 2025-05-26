<?php
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zz_contact
	$app->post('/zz_contact', function($request, $response) {
		$model = new m_zz_contactModel;
		$response->withJson($model->sql_zz_contact($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zz_contact
	$app->post('/zz_login', function($request, $response) {
		$model = new m_zz_loginModel;
		$response->withJson($model->sql_zz_login($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zz_password
	$app->post('/zz_password', function($request, $response) {
		$model = new m_zz_passwordModel;
		$response->withJson($model->sql_zz_password($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zv_recover
	$app->post('/zz_recover', function($request, $response) {
		$model = new m_zz_recoverModel;
		$response->withJson($model->sql_zz_recover($_POST));
		return $response;
	});
	//------------------------------------------------
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# zz_contact
	$app->post('/zz_register', function($request, $response) {
		$model = new m_zz_registerModel;
		$response->withJson($model->sql_zz_register($_POST));
		return $response;
	});
	//------------------------------------------------
?>