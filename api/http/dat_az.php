<?php
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_access_permits
	$app->post("/azp_access_permits/create", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_insert($_POST));
		return $response;
	});
	$app->post("/azp_access_permits/delete", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_delete($_POST));
		return $response;
	});
	$app->post("/azp_access_permits/file", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_file($_POST));
		return $response;
	});
	$app->post("/azp_access_permits/remove", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_remove($_POST));
		return $response;
	});
	$app->post("/azp_access_permits/restore", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_restore($_POST));
		return $response;
	});
	$app->post("/azp_access_permits/state", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_state($_POST));
		return $response;
	});
	$app->post("/azp_access_permits/table", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_table($_POST));
		return $response;
	});
	$app->post("/azp_access_permits/update", function($request, $response) {
		$model = new m_azp_access_permitsModel;
		$response->withJson($model->sql_azp_access_permits_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_access_type
	$app->post("/azp_access_type/create", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_insert($_POST));
		return $response;
	});
	$app->post("/azp_access_type/delete", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_delete($_POST));
		return $response;
	});
	$app->post("/azp_access_type/file", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_file($_POST));
		return $response;
	});
	$app->post("/azp_access_type/remove", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_remove($_POST));
		return $response;
	});
	$app->post("/azp_access_type/restore", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_restore($_POST));
		return $response;
	});
	$app->post("/azp_access_type/state", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_state($_POST));
		return $response;
	});
	$app->post("/azp_access_type/table", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_table($_POST));
		return $response;
	});
	$app->post("/azp_access_type/update", function($request, $response) {
		$model = new m_azp_access_typeModel;
		$response->withJson($model->sql_azp_access_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_application
	$app->post("/azp_application/create", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_insert($_POST));
		return $response;
	});
	$app->post("/azp_application/delete", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_delete($_POST));
		return $response;
	});
	$app->post("/azp_application/file", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_file($_POST));
		return $response;
	});
	$app->post("/azp_application/remove", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_remove($_POST));
		return $response;
	});
	$app->post("/azp_application/restore", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_restore($_POST));
		return $response;
	});
	$app->post("/azp_application/state", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_state($_POST));
		return $response;
	});
	$app->post("/azp_application/table", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_table($_POST));
		return $response;
	});
	$app->post("/azp_application/update", function($request, $response) {
		$model = new m_azp_applicationModel;
		$response->withJson($model->sql_azp_application_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_authorized_permits
	$app->post("/azp_authorized_permits/create", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_insert($_POST));
		return $response;
	});
	$app->post("/azp_authorized_permits/delete", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_delete($_POST));
		return $response;
	});
	$app->post("/azp_authorized_permits/file", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_file($_POST));
		return $response;
	});
	$app->post("/azp_authorized_permits/remove", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_remove($_POST));
		return $response;
	});
	$app->post("/azp_authorized_permits/restore", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_restore($_POST));
		return $response;
	});
	$app->post("/azp_authorized_permits/state", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_state($_POST));
		return $response;
	});
	$app->post("/azp_authorized_permits/table", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_table($_POST));
		return $response;
	});
	$app->post("/azp_authorized_permits/update", function($request, $response) {
		$model = new m_azp_authorized_permitsModel;
		$response->withJson($model->sql_azp_authorized_permits_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_button_dimension
	$app->post("/azp_button_dimension/create", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_insert($_POST));
		return $response;
	});
	$app->post("/azp_button_dimension/delete", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_delete($_POST));
		return $response;
	});
	$app->post("/azp_button_dimension/file", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_file($_POST));
		return $response;
	});
	$app->post("/azp_button_dimension/remove", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_remove($_POST));
		return $response;
	});
	$app->post("/azp_button_dimension/restore", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_restore($_POST));
		return $response;
	});
	$app->post("/azp_button_dimension/state", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_state($_POST));
		return $response;
	});
	$app->post("/azp_button_dimension/table", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_table($_POST));
		return $response;
	});
	$app->post("/azp_button_dimension/update", function($request, $response) {
		$model = new m_azp_button_dimensionModel;
		$response->withJson($model->sql_azp_button_dimension_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_button_property
	$app->post("/azp_button_property/create", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_insert($_POST));
		return $response;
	});
	$app->post("/azp_button_property/delete", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_delete($_POST));
		return $response;
	});
	$app->post("/azp_button_property/file", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_file($_POST));
		return $response;
	});
	$app->post("/azp_button_property/remove", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_remove($_POST));
		return $response;
	});
	$app->post("/azp_button_property/restore", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_restore($_POST));
		return $response;
	});
	$app->post("/azp_button_property/state", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_state($_POST));
		return $response;
	});
	$app->post("/azp_button_property/table", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_table($_POST));
		return $response;
	});
	$app->post("/azp_button_property/update", function($request, $response) {
		$model = new m_azp_button_propertyModel;
		$response->withJson($model->sql_azp_button_property_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_alert
	$app->post("/azp_configuration_alert/create", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_alert/delete", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_alert/file", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_alert/remove", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_alert/restore", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_alert/state", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_alert/table", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_alert/update", function($request, $response) {
		$model = new m_azp_configuration_alertModel;
		$response->withJson($model->sql_azp_configuration_alert_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_button
	$app->post("/azp_configuration_button/create", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_button/delete", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_button/file", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_button/remove", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_button/restore", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_button/state", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_button/table", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_button/update", function($request, $response) {
		$model = new m_azp_configuration_buttonModel;
		$response->withJson($model->sql_azp_configuration_button_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_color
	$app->post("/azp_configuration_color/create", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_color/delete", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_color/file", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_color/remove", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_color/restore", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_color/state", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_color/table", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_color/update", function($request, $response) {
		$model = new m_azp_configuration_colorModel;
		$response->withJson($model->sql_azp_configuration_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_design
	$app->post("/azp_configuration_design/create", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_design/delete", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_design/file", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_design/remove", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_design/restore", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_design/state", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_design/table", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_design/update", function($request, $response) {
		$model = new m_azp_configuration_designModel;
		$response->withJson($model->sql_azp_configuration_design_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_dimension
	$app->post("/azp_configuration_dimension/create", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_dimension/delete", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_dimension/file", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_dimension/remove", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_dimension/restore", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_dimension/state", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_dimension/table", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_dimension/update", function($request, $response) {
		$model = new m_azp_configuration_dimensionModel;
		$response->withJson($model->sql_azp_configuration_dimension_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_email
	$app->post("/azp_configuration_email/create", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_email/delete", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_email/file", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_email/remove", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_email/restore", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_email/state", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_email/table", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_email/update", function($request, $response) {
		$model = new m_azp_configuration_emailModel;
		$response->withJson($model->sql_azp_configuration_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_modal
	$app->post("/azp_configuration_modal/create", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_modal/delete", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_modal/file", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_modal/remove", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_modal/restore", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_modal/state", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_modal/table", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_modal/update", function($request, $response) {
		$model = new m_azp_configuration_modalModel;
		$response->withJson($model->sql_azp_configuration_modal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_panel
	$app->post("/azp_configuration_panel/create", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_panel/delete", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_panel/file", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_panel/remove", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_panel/restore", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_panel/state", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_panel/table", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_panel/update", function($request, $response) {
		$model = new m_azp_configuration_panelModel;
		$response->withJson($model->sql_azp_configuration_panel_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_table
	$app->post("/azp_configuration_table/create", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_table/delete", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_table/file", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_table/remove", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_table/restore", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_table/state", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_table/table", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_table/update", function($request, $response) {
		$model = new m_azp_configuration_tableModel;
		$response->withJson($model->sql_azp_configuration_table_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_configuration_theme
	$app->post("/azp_configuration_theme/create", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_insert($_POST));
		return $response;
	});
	$app->post("/azp_configuration_theme/delete", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_delete($_POST));
		return $response;
	});
	$app->post("/azp_configuration_theme/file", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_file($_POST));
		return $response;
	});
	$app->post("/azp_configuration_theme/remove", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_remove($_POST));
		return $response;
	});
	$app->post("/azp_configuration_theme/restore", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_restore($_POST));
		return $response;
	});
	$app->post("/azp_configuration_theme/state", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_state($_POST));
		return $response;
	});
	$app->post("/azp_configuration_theme/table", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_table($_POST));
		return $response;
	});
	$app->post("/azp_configuration_theme/update", function($request, $response) {
		$model = new m_azp_configuration_themeModel;
		$response->withJson($model->sql_azp_configuration_theme_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_contact
	$app->post("/azp_contact/create", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_insert($_POST));
		return $response;
	});
	$app->post("/azp_contact/delete", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_delete($_POST));
		return $response;
	});
	$app->post("/azp_contact/file", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_file($_POST));
		return $response;
	});
	$app->post("/azp_contact/remove", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_remove($_POST));
		return $response;
	});
	$app->post("/azp_contact/restore", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_restore($_POST));
		return $response;
	});
	$app->post("/azp_contact/state", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_state($_POST));
		return $response;
	});
	$app->post("/azp_contact/table", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_table($_POST));
		return $response;
	});
	$app->post("/azp_contact/update", function($request, $response) {
		$model = new m_azp_contactModel;
		$response->withJson($model->sql_azp_contact_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_country
	$app->post("/azp_country/create", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_insert($_POST));
		return $response;
	});
	$app->post("/azp_country/delete", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_delete($_POST));
		return $response;
	});
	$app->post("/azp_country/file", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_file($_POST));
		return $response;
	});
	$app->post("/azp_country/remove", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_remove($_POST));
		return $response;
	});
	$app->post("/azp_country/restore", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_restore($_POST));
		return $response;
	});
	$app->post("/azp_country/state", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_state($_POST));
		return $response;
	});
	$app->post("/azp_country/table", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_table($_POST));
		return $response;
	});
	$app->post("/azp_country/update", function($request, $response) {
		$model = new m_azp_countryModel;
		$response->withJson($model->sql_azp_country_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_alert
	$app->post("/azp_crt_alert/create", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_alert/delete", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_alert/file", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_alert/remove", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_alert/restore", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_alert/state", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_alert/table", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_alert/update", function($request, $response) {
		$model = new m_azp_crt_alertModel;
		$response->withJson($model->sql_azp_crt_alert_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_bank
	$app->post("/azp_crt_bank/create", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_bank/delete", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_bank/file", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_bank/remove", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_bank/restore", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_bank/state", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_bank/table", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_bank/update", function($request, $response) {
		$model = new m_azp_crt_bankModel;
		$response->withJson($model->sql_azp_crt_bank_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_binnacle
	$app->post("/azp_crt_binnacle/create", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_binnacle/delete", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_binnacle/file", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_binnacle/remove", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_binnacle/restore", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_binnacle/state", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_binnacle/table", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_binnacle/update", function($request, $response) {
		$model = new m_azp_crt_binnacleModel;
		$response->withJson($model->sql_azp_crt_binnacle_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_capture
	$app->post("/azp_crt_capture/create", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_capture/delete", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_capture/file", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_capture/remove", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_capture/restore", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_capture/state", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_capture/table", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_capture/update", function($request, $response) {
		$model = new m_azp_crt_captureModel;
		$response->withJson($model->sql_azp_crt_capture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_city
	$app->post("/azp_crt_city/create", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_city/delete", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_city/file", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_city/remove", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_city/restore", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_city/state", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_city/table", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_city/update", function($request, $response) {
		$model = new m_azp_crt_cityModel;
		$response->withJson($model->sql_azp_crt_city_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_client
	$app->post("/azp_crt_client/create", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_client/delete", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_client/file", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_client/remove", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_client/restore", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_client/state", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_client/table", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_client/update", function($request, $response) {
		$model = new m_azp_crt_clientModel;
		$response->withJson($model->sql_azp_crt_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_copy_client
	$app->post("/azp_crt_copy_client/create", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_copy_client/delete", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_copy_client/file", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_copy_client/remove", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_copy_client/restore", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_copy_client/state", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_copy_client/table", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_copy_client/update", function($request, $response) {
		$model = new m_azp_crt_copy_clientModel;
		$response->withJson($model->sql_azp_crt_copy_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_department
	$app->post("/azp_crt_department/create", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_department/delete", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_department/file", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_department/remove", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_department/restore", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_department/state", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_department/table", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_department/update", function($request, $response) {
		$model = new m_azp_crt_departmentModel;
		$response->withJson($model->sql_azp_crt_department_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_email_copy
	$app->post("/azp_crt_email_copy/create", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_copy/delete", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_copy/file", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_copy/remove", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_copy/restore", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_copy/state", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_copy/table", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_copy/update", function($request, $response) {
		$model = new m_azp_crt_email_copyModel;
		$response->withJson($model->sql_azp_crt_email_copy_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_email_request
	$app->post("/azp_crt_email_request/create", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_request/delete", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_request/file", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_request/remove", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_request/restore", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_request/state", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_request/table", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_email_request/update", function($request, $response) {
		$model = new m_azp_crt_email_requestModel;
		$response->withJson($model->sql_azp_crt_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_exchange_portal
	$app->post("/azp_crt_exchange_portal/create", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_exchange_portal/delete", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_exchange_portal/file", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_exchange_portal/remove", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_exchange_portal/restore", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_exchange_portal/state", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_exchange_portal/table", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_exchange_portal/update", function($request, $response) {
		$model = new m_azp_crt_exchange_portalModel;
		$response->withJson($model->sql_azp_crt_exchange_portal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_expiration
	$app->post("/azp_crt_expiration/create", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_expiration/delete", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_expiration/file", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_expiration/remove", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_expiration/restore", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_expiration/state", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_expiration/table", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_expiration/update", function($request, $response) {
		$model = new m_azp_crt_expirationModel;
		$response->withJson($model->sql_azp_crt_expiration_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_generated_files
	$app->post("/azp_crt_generated_files/create", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_generated_files/delete", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_generated_files/file", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_generated_files/remove", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_generated_files/restore", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_generated_files/state", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_generated_files/table", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_generated_files/update", function($request, $response) {
		$model = new m_azp_crt_generated_filesModel;
		$response->withJson($model->sql_azp_crt_generated_files_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_information
	$app->post("/azp_crt_information/create", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_information/delete", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_information/file", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_information/remove", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_information/restore", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_information/state", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_information/table", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_information/update", function($request, $response) {
		$model = new m_azp_crt_informationModel;
		$response->withJson($model->sql_azp_crt_information_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_log_email
	$app->post("/azp_crt_log_email/create", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_log_email/delete", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_log_email/file", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_log_email/remove", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_log_email/restore", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_log_email/state", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_log_email/table", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_log_email/update", function($request, $response) {
		$model = new m_azp_crt_log_emailModel;
		$response->withJson($model->sql_azp_crt_log_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_observation_internal
	$app->post("/azp_crt_observation_internal/create", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_internal/delete", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_internal/file", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_internal/remove", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_internal/restore", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_internal/state", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_internal/table", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_internal/update", function($request, $response) {
		$model = new m_azp_crt_observation_internalModel;
		$response->withJson($model->sql_azp_crt_observation_internal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_observation_type
	$app->post("/azp_crt_observation_type/create", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_type/delete", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_type/file", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_type/remove", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_type/restore", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_type/state", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_type/table", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_observation_type/update", function($request, $response) {
		$model = new m_azp_crt_observation_typeModel;
		$response->withJson($model->sql_azp_crt_observation_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_phase
	$app->post("/azp_crt_phase/create", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_phase/delete", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_phase/file", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_phase/remove", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_phase/restore", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_phase/state", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_phase/table", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_phase/update", function($request, $response) {
		$model = new m_azp_crt_phaseModel;
		$response->withJson($model->sql_azp_crt_phase_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_report_inform
	$app->post("/azp_crt_report_inform/create", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_report_inform/delete", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_report_inform/file", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_report_inform/remove", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_report_inform/restore", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_report_inform/state", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_report_inform/table", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_report_inform/update", function($request, $response) {
		$model = new m_azp_crt_report_informModel;
		$response->withJson($model->sql_azp_crt_report_inform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_data
	$app->post("/azp_crt_request_data/create", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_data/delete", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_data/file", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_data/remove", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_data/restore", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_data/state", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_data/table", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_data/update", function($request, $response) {
		$model = new m_azp_crt_request_dataModel;
		$response->withJson($model->sql_azp_crt_request_data_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_import
	$app->post("/azp_crt_request_import/create", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_import/delete", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_import/file", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_import/remove", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_import/restore", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_import/state", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_import/table", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_import/update", function($request, $response) {
		$model = new m_azp_crt_request_importModel;
		$response->withJson($model->sql_azp_crt_request_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_type
	$app->post("/azp_crt_request_type/create", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_type/delete", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_type/file", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_type/remove", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_type/restore", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_type/state", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_type/table", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_type/update", function($request, $response) {
		$model = new m_azp_crt_request_typeModel;
		$response->withJson($model->sql_azp_crt_request_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_request_update
	$app->post("/azp_crt_request_update/create", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_update/delete", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_update/file", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_update/remove", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_update/restore", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_update/state", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_update/table", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_request_update/update", function($request, $response) {
		$model = new m_azp_crt_request_updateModel;
		$response->withJson($model->sql_azp_crt_request_update_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_third_parties
	$app->post("/azp_crt_third_parties/create", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_parties/delete", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_parties/file", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_parties/remove", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_parties/restore", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_parties/state", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_parties/table", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_parties/update", function($request, $response) {
		$model = new m_azp_crt_third_partiesModel;
		$response->withJson($model->sql_azp_crt_third_parties_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_crt_third_type
	$app->post("/azp_crt_third_type/create", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_insert($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_type/delete", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_delete($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_type/file", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_file($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_type/remove", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_remove($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_type/restore", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_restore($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_type/state", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_state($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_type/table", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_table($_POST));
		return $response;
	});
	$app->post("/azp_crt_third_type/update", function($request, $response) {
		$model = new m_azp_crt_third_typeModel;
		$response->withJson($model->sql_azp_crt_third_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_data_personal
	$app->post("/azp_data_personal/create", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_insert($_POST));
		return $response;
	});
	$app->post("/azp_data_personal/delete", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_delete($_POST));
		return $response;
	});
	$app->post("/azp_data_personal/file", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_file($_POST));
		return $response;
	});
	$app->post("/azp_data_personal/remove", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_remove($_POST));
		return $response;
	});
	$app->post("/azp_data_personal/restore", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_restore($_POST));
		return $response;
	});
	$app->post("/azp_data_personal/state", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_state($_POST));
		return $response;
	});
	$app->post("/azp_data_personal/table", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_table($_POST));
		return $response;
	});
	$app->post("/azp_data_personal/update", function($request, $response) {
		$model = new m_azp_data_personalModel;
		$response->withJson($model->sql_azp_data_personal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_def_email_request
	$app->post("/azp_def_email_request/create", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_def_email_request/delete", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_def_email_request/file", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_file($_POST));
		return $response;
	});
	$app->post("/azp_def_email_request/remove", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_def_email_request/restore", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_def_email_request/state", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_state($_POST));
		return $response;
	});
	$app->post("/azp_def_email_request/table", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_table($_POST));
		return $response;
	});
	$app->post("/azp_def_email_request/update", function($request, $response) {
		$model = new m_azp_def_email_requestModel;
		$response->withJson($model->sql_azp_def_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_document_type
	$app->post("/azp_document_type/create", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_insert($_POST));
		return $response;
	});
	$app->post("/azp_document_type/delete", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_delete($_POST));
		return $response;
	});
	$app->post("/azp_document_type/file", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_file($_POST));
		return $response;
	});
	$app->post("/azp_document_type/remove", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_remove($_POST));
		return $response;
	});
	$app->post("/azp_document_type/restore", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_restore($_POST));
		return $response;
	});
	$app->post("/azp_document_type/state", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_state($_POST));
		return $response;
	});
	$app->post("/azp_document_type/table", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_table($_POST));
		return $response;
	});
	$app->post("/azp_document_type/update", function($request, $response) {
		$model = new m_azp_document_typeModel;
		$response->withJson($model->sql_azp_document_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_email_request
	$app->post("/azp_email_request/create", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_email_request/delete", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_email_request/file", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_file($_POST));
		return $response;
	});
	$app->post("/azp_email_request/remove", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_email_request/restore", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_email_request/state", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_state($_POST));
		return $response;
	});
	$app->post("/azp_email_request/table", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_table($_POST));
		return $response;
	});
	$app->post("/azp_email_request/update", function($request, $response) {
		$model = new m_azp_email_requestModel;
		$response->withJson($model->sql_azp_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_faq
	$app->post("/azp_faq/create", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_insert($_POST));
		return $response;
	});
	$app->post("/azp_faq/delete", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_delete($_POST));
		return $response;
	});
	$app->post("/azp_faq/file", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_file($_POST));
		return $response;
	});
	$app->post("/azp_faq/remove", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_remove($_POST));
		return $response;
	});
	$app->post("/azp_faq/restore", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_restore($_POST));
		return $response;
	});
	$app->post("/azp_faq/state", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_state($_POST));
		return $response;
	});
	$app->post("/azp_faq/table", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_table($_POST));
		return $response;
	});
	$app->post("/azp_faq/update", function($request, $response) {
		$model = new m_azp_faqModel;
		$response->withJson($model->sql_azp_faq_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_certificate
	$app->post("/azp_fct_certificate/create", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_certificate/delete", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_certificate/file", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_certificate/remove", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_certificate/restore", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_certificate/state", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_certificate/table", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_certificate/update", function($request, $response) {
		$model = new m_azp_fct_certificateModel;
		$response->withJson($model->sql_azp_fct_certificate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_client
	$app->post("/azp_fct_client/create", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_client/delete", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_client/file", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_client/remove", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_client/restore", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_client/state", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_client/table", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_client/update", function($request, $response) {
		$model = new m_azp_fct_clientModel;
		$response->withJson($model->sql_azp_fct_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_coverage
	$app->post("/azp_fct_coverage/create", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_coverage/delete", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_coverage/file", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_coverage/remove", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_coverage/restore", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_coverage/state", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_coverage/table", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_coverage/update", function($request, $response) {
		$model = new m_azp_fct_coverageModel;
		$response->withJson($model->sql_azp_fct_coverage_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_defunction
	$app->post("/azp_fct_defunction/create", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_defunction/delete", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_defunction/file", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_defunction/remove", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_defunction/restore", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_defunction/state", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_defunction/table", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_defunction/update", function($request, $response) {
		$model = new m_azp_fct_defunctionModel;
		$response->withJson($model->sql_azp_fct_defunction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_honorary
	$app->post("/azp_fct_honorary/create", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_honorary/delete", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_honorary/file", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_honorary/remove", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_honorary/restore", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_honorary/state", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_honorary/table", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_honorary/update", function($request, $response) {
		$model = new m_azp_fct_honoraryModel;
		$response->withJson($model->sql_azp_fct_honorary_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_investigation
	$app->post("/azp_fct_investigation/create", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_investigation/delete", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_investigation/file", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_investigation/remove", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_investigation/restore", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_investigation/state", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_investigation/table", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_investigation/update", function($request, $response) {
		$model = new m_azp_fct_investigationModel;
		$response->withJson($model->sql_azp_fct_investigation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_invoice
	$app->post("/azp_fct_invoice/create", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_invoice/delete", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_invoice/file", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_invoice/remove", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_invoice/restore", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_invoice/state", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_invoice/table", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_invoice/update", function($request, $response) {
		$model = new m_azp_fct_invoiceModel;
		$response->withJson($model->sql_azp_fct_invoice_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_prefacture
	$app->post("/azp_fct_prefacture/create", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_prefacture/delete", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_prefacture/file", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_prefacture/remove", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_prefacture/restore", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_prefacture/state", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_prefacture/table", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_prefacture/update", function($request, $response) {
		$model = new m_azp_fct_prefactureModel;
		$response->withJson($model->sql_azp_fct_prefacture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_research
	$app->post("/azp_fct_research/create", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_research/delete", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_research/file", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_research/remove", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_research/restore", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_research/state", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_research/table", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_research/update", function($request, $response) {
		$model = new m_azp_fct_researchModel;
		$response->withJson($model->sql_azp_fct_research_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_result
	$app->post("/azp_fct_result/create", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_result/delete", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_result/file", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_result/remove", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_result/restore", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_result/state", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_result/table", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_result/update", function($request, $response) {
		$model = new m_azp_fct_resultModel;
		$response->withJson($model->sql_azp_fct_result_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_satisfactiom
	$app->post("/azp_fct_satisfactiom/create", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfactiom/delete", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfactiom/file", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfactiom/remove", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfactiom/restore", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfactiom/state", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfactiom/table", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfactiom/update", function($request, $response) {
		$model = new m_azp_fct_satisfactiomModel;
		$response->withJson($model->sql_azp_fct_satisfactiom_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_satisfaction
	$app->post("/azp_fct_satisfaction/create", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfaction/delete", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfaction/file", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfaction/remove", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfaction/restore", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfaction/state", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfaction/table", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_satisfaction/update", function($request, $response) {
		$model = new m_azp_fct_satisfactionModel;
		$response->withJson($model->sql_azp_fct_satisfaction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_scale
	$app->post("/azp_fct_scale/create", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_scale/delete", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_scale/file", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_scale/remove", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_scale/restore", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_scale/state", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_scale/table", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_scale/update", function($request, $response) {
		$model = new m_azp_fct_scaleModel;
		$response->withJson($model->sql_azp_fct_scale_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_scertificate
	$app->post("/azp_fct_scertificate/create", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_scertificate/delete", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_scertificate/file", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_scertificate/remove", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_scertificate/restore", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_scertificate/state", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_scertificate/table", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_scertificate/update", function($request, $response) {
		$model = new m_azp_fct_scertificateModel;
		$response->withJson($model->sql_azp_fct_scertificate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_sdefunction
	$app->post("/azp_fct_sdefunction/create", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_sdefunction/delete", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_sdefunction/file", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_sdefunction/remove", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_sdefunction/restore", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_sdefunction/state", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_sdefunction/table", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_sdefunction/update", function($request, $response) {
		$model = new m_azp_fct_sdefunctionModel;
		$response->withJson($model->sql_azp_fct_sdefunction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_sector
	$app->post("/azp_fct_sector/create", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_sector/delete", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_sector/file", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_sector/remove", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_sector/restore", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_sector/state", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_sector/table", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_sector/update", function($request, $response) {
		$model = new m_azp_fct_sectorModel;
		$response->withJson($model->sql_azp_fct_sector_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_service
	$app->post("/azp_fct_service/create", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_service/delete", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_service/file", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_service/remove", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_service/restore", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_service/state", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_service/table", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_service/update", function($request, $response) {
		$model = new m_azp_fct_serviceModel;
		$response->withJson($model->sql_azp_fct_service_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_sinvestigation
	$app->post("/azp_fct_sinvestigation/create", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_sinvestigation/delete", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_sinvestigation/file", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_sinvestigation/remove", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_sinvestigation/restore", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_sinvestigation/state", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_sinvestigation/table", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_sinvestigation/update", function($request, $response) {
		$model = new m_azp_fct_sinvestigationModel;
		$response->withJson($model->sql_azp_fct_sinvestigation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_sub_coverage
	$app->post("/azp_fct_sub_coverage/create", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_coverage/delete", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_coverage/file", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_coverage/remove", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_coverage/restore", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_coverage/state", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_coverage/table", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_coverage/update", function($request, $response) {
		$model = new m_azp_fct_sub_coverageModel;
		$response->withJson($model->sql_azp_fct_sub_coverage_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_sub_satisfaction
	$app->post("/azp_fct_sub_satisfaction/create", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_satisfaction/delete", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_satisfaction/file", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_satisfaction/remove", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_satisfaction/restore", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_satisfaction/state", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_satisfaction/table", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_satisfaction/update", function($request, $response) {
		$model = new m_azp_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azp_fct_sub_satisfaction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_sub_service
	$app->post("/azp_fct_sub_service/create", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_service/delete", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_service/file", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_service/remove", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_service/restore", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_service/state", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_service/table", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_sub_service/update", function($request, $response) {
		$model = new m_azp_fct_sub_serviceModel;
		$response->withJson($model->sql_azp_fct_sub_service_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fct_tariff
	$app->post("/azp_fct_tariff/create", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_insert($_POST));
		return $response;
	});
	$app->post("/azp_fct_tariff/delete", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_delete($_POST));
		return $response;
	});
	$app->post("/azp_fct_tariff/file", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_file($_POST));
		return $response;
	});
	$app->post("/azp_fct_tariff/remove", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_remove($_POST));
		return $response;
	});
	$app->post("/azp_fct_tariff/restore", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_restore($_POST));
		return $response;
	});
	$app->post("/azp_fct_tariff/state", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_state($_POST));
		return $response;
	});
	$app->post("/azp_fct_tariff/table", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_table($_POST));
		return $response;
	});
	$app->post("/azp_fct_tariff/update", function($request, $response) {
		$model = new m_azp_fct_tariffModel;
		$response->withJson($model->sql_azp_fct_tariff_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fdp_benefits
	$app->post("/azp_fdp_benefits/create", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_insert($_POST));
		return $response;
	});
	$app->post("/azp_fdp_benefits/delete", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_delete($_POST));
		return $response;
	});
	$app->post("/azp_fdp_benefits/file", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_file($_POST));
		return $response;
	});
	$app->post("/azp_fdp_benefits/remove", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_remove($_POST));
		return $response;
	});
	$app->post("/azp_fdp_benefits/restore", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_restore($_POST));
		return $response;
	});
	$app->post("/azp_fdp_benefits/state", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_state($_POST));
		return $response;
	});
	$app->post("/azp_fdp_benefits/table", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_table($_POST));
		return $response;
	});
	$app->post("/azp_fdp_benefits/update", function($request, $response) {
		$model = new m_azp_fdp_benefitsModel;
		$response->withJson($model->sql_azp_fdp_benefits_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_fdp_sxm
	$app->post("/azp_fdp_sxm/create", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_insert($_POST));
		return $response;
	});
	$app->post("/azp_fdp_sxm/delete", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_delete($_POST));
		return $response;
	});
	$app->post("/azp_fdp_sxm/file", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_file($_POST));
		return $response;
	});
	$app->post("/azp_fdp_sxm/remove", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_remove($_POST));
		return $response;
	});
	$app->post("/azp_fdp_sxm/restore", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_restore($_POST));
		return $response;
	});
	$app->post("/azp_fdp_sxm/state", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_state($_POST));
		return $response;
	});
	$app->post("/azp_fdp_sxm/table", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_table($_POST));
		return $response;
	});
	$app->post("/azp_fdp_sxm/update", function($request, $response) {
		$model = new m_azp_fdp_sxmModel;
		$response->withJson($model->sql_azp_fdp_sxm_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_alert
	$app->post("/azp_gsc_alert/create", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_alert/delete", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_alert/file", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_alert/remove", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_alert/restore", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_alert/state", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_alert/table", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_alert/update", function($request, $response) {
		$model = new m_azp_gsc_alertModel;
		$response->withJson($model->sql_azp_gsc_alert_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_capture
	$app->post("/azp_gsc_capture/create", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_capture/delete", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_capture/file", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_capture/remove", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_capture/restore", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_capture/state", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_capture/table", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_capture/update", function($request, $response) {
		$model = new m_azp_gsc_captureModel;
		$response->withJson($model->sql_azp_gsc_capture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_causal
	$app->post("/azp_gsc_causal/create", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_causal/delete", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_causal/file", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_causal/remove", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_causal/restore", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_causal/state", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_causal/table", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_causal/update", function($request, $response) {
		$model = new m_azp_gsc_causalModel;
		$response->withJson($model->sql_azp_gsc_causal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_city
	$app->post("/azp_gsc_city/create", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_city/delete", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_city/file", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_city/remove", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_city/restore", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_city/state", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_city/table", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_city/update", function($request, $response) {
		$model = new m_azp_gsc_cityModel;
		$response->withJson($model->sql_azp_gsc_city_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_client
	$app->post("/azp_gsc_client/create", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_client/delete", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_client/file", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_client/remove", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_client/restore", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_client/state", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_client/table", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_client/update", function($request, $response) {
		$model = new m_azp_gsc_clientModel;
		$response->withJson($model->sql_azp_gsc_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_consignment
	$app->post("/azp_gsc_consignment/create", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_consignment/delete", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_consignment/file", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_consignment/remove", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_consignment/restore", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_consignment/state", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_consignment/table", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_consignment/update", function($request, $response) {
		$model = new m_azp_gsc_consignmentModel;
		$response->withJson($model->sql_azp_gsc_consignment_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_department
	$app->post("/azp_gsc_department/create", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_department/delete", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_department/file", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_department/remove", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_department/restore", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_department/state", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_department/table", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_department/update", function($request, $response) {
		$model = new m_azp_gsc_departmentModel;
		$response->withJson($model->sql_azp_gsc_department_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_duplicate
	$app->post("/azp_gsc_duplicate/create", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_duplicate/delete", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_duplicate/file", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_duplicate/remove", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_duplicate/restore", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_duplicate/state", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_duplicate/table", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_duplicate/update", function($request, $response) {
		$model = new m_azp_gsc_duplicateModel;
		$response->withJson($model->sql_azp_gsc_duplicate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_email_copy
	$app->post("/azp_gsc_email_copy/create", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_copy/delete", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_copy/file", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_copy/remove", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_copy/restore", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_copy/state", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_copy/table", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_copy/update", function($request, $response) {
		$model = new m_azp_gsc_email_copyModel;
		$response->withJson($model->sql_azp_gsc_email_copy_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_email_request
	$app->post("/azp_gsc_email_request/create", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_request/delete", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_request/file", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_request/remove", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_request/restore", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_request/state", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_request/table", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_email_request/update", function($request, $response) {
		$model = new m_azp_gsc_email_requestModel;
		$response->withJson($model->sql_azp_gsc_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_exchange_portal
	$app->post("/azp_gsc_exchange_portal/create", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_exchange_portal/delete", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_exchange_portal/file", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_exchange_portal/remove", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_exchange_portal/restore", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_exchange_portal/state", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_exchange_portal/table", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_exchange_portal/update", function($request, $response) {
		$model = new m_azp_gsc_exchange_portalModel;
		$response->withJson($model->sql_azp_gsc_exchange_portal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_expiration
	$app->post("/azp_gsc_expiration/create", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_expiration/delete", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_expiration/file", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_expiration/remove", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_expiration/restore", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_expiration/state", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_expiration/table", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_expiration/update", function($request, $response) {
		$model = new m_azp_gsc_expirationModel;
		$response->withJson($model->sql_azp_gsc_expiration_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_follow_email
	$app->post("/azp_gsc_follow_email/create", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_follow_email/delete", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_follow_email/file", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_follow_email/remove", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_follow_email/restore", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_follow_email/state", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_follow_email/table", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_follow_email/update", function($request, $response) {
		$model = new m_azp_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_gsc_follow_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_generated_files
	$app->post("/azp_gsc_generated_files/create", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_generated_files/delete", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_generated_files/file", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_generated_files/remove", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_generated_files/restore", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_generated_files/state", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_generated_files/table", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_generated_files/update", function($request, $response) {
		$model = new m_azp_gsc_generated_filesModel;
		$response->withJson($model->sql_azp_gsc_generated_files_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_group_by
	$app->post("/azp_gsc_group_by/create", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_group_by/delete", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_group_by/file", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_group_by/remove", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_group_by/restore", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_group_by/state", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_group_by/table", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_group_by/update", function($request, $response) {
		$model = new m_azp_gsc_group_byModel;
		$response->withJson($model->sql_azp_gsc_group_by_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_import
	$app->post("/azp_gsc_import/create", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_import/delete", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_import/file", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_import/remove", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_import/restore", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_import/state", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_import/table", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_import/update", function($request, $response) {
		$model = new m_azp_gsc_importModel;
		$response->withJson($model->sql_azp_gsc_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_information
	$app->post("/azp_gsc_information/create", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_information/delete", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_information/file", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_information/remove", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_information/restore", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_information/state", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_information/table", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_information/update", function($request, $response) {
		$model = new m_azp_gsc_informationModel;
		$response->withJson($model->sql_azp_gsc_information_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_label
	$app->post("/azp_gsc_label/create", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_label/delete", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_label/file", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_label/remove", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_label/restore", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_label/state", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_label/table", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_label/update", function($request, $response) {
		$model = new m_azp_gsc_labelModel;
		$response->withJson($model->sql_azp_gsc_label_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_log_email
	$app->post("/azp_gsc_log_email/create", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_log_email/delete", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_log_email/file", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_log_email/remove", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_log_email/restore", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_log_email/state", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_log_email/table", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_log_email/update", function($request, $response) {
		$model = new m_azp_gsc_log_emailModel;
		$response->withJson($model->sql_azp_gsc_log_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_logs_request
	$app->post("/azp_gsc_logs_request/create", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_logs_request/delete", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_logs_request/file", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_logs_request/remove", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_logs_request/restore", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_logs_request/state", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_logs_request/table", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_logs_request/update", function($request, $response) {
		$model = new m_azp_gsc_logs_requestModel;
		$response->withJson($model->sql_azp_gsc_logs_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_notary
	$app->post("/azp_gsc_notary/create", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_notary/delete", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_notary/file", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_notary/remove", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_notary/restore", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_notary/state", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_notary/table", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_notary/update", function($request, $response) {
		$model = new m_azp_gsc_notaryModel;
		$response->withJson($model->sql_azp_gsc_notary_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_observation_internal
	$app->post("/azp_gsc_observation_internal/create", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_observation_internal/delete", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_observation_internal/file", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_observation_internal/remove", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_observation_internal/restore", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_observation_internal/state", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_observation_internal/table", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_observation_internal/update", function($request, $response) {
		$model = new m_azp_gsc_observation_internalModel;
		$response->withJson($model->sql_azp_gsc_observation_internal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_phase
	$app->post("/azp_gsc_phase/create", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_phase/delete", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_phase/file", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_phase/remove", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_phase/restore", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_phase/state", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_phase/table", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_phase/update", function($request, $response) {
		$model = new m_azp_gsc_phaseModel;
		$response->withJson($model->sql_azp_gsc_phase_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_plan_action
	$app->post("/azp_gsc_plan_action/create", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_plan_action/delete", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_plan_action/file", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_plan_action/remove", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_plan_action/restore", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_plan_action/state", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_plan_action/table", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_plan_action/update", function($request, $response) {
		$model = new m_azp_gsc_plan_actionModel;
		$response->withJson($model->sql_azp_gsc_plan_action_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_registration
	$app->post("/azp_gsc_registration/create", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration/delete", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration/file", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration/remove", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration/restore", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration/state", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration/table", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration/update", function($request, $response) {
		$model = new m_azp_gsc_registrationModel;
		$response->withJson($model->sql_azp_gsc_registration_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_registration_import
	$app->post("/azp_gsc_registration_import/create", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration_import/delete", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration_import/file", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration_import/remove", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration_import/restore", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration_import/state", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration_import/table", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_registration_import/update", function($request, $response) {
		$model = new m_azp_gsc_registration_importModel;
		$response->withJson($model->sql_azp_gsc_registration_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_report_inform
	$app->post("/azp_gsc_report_inform/create", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_report_inform/delete", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_report_inform/file", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_report_inform/remove", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_report_inform/restore", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_report_inform/state", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_report_inform/table", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_report_inform/update", function($request, $response) {
		$model = new m_azp_gsc_report_informModel;
		$response->withJson($model->sql_azp_gsc_report_inform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_request
	$app->post("/azp_gsc_request/create", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_request/delete", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_request/file", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_request/remove", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_request/restore", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_request/state", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_request/table", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_request/update", function($request, $response) {
		$model = new m_azp_gsc_requestModel;
		$response->withJson($model->sql_azp_gsc_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_state
	$app->post("/azp_gsc_state/create", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_state/delete", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_state/file", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_state/remove", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_state/restore", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_state/state", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_state/table", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_state/update", function($request, $response) {
		$model = new m_azp_gsc_stateModel;
		$response->withJson($model->sql_azp_gsc_state_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_third_parties
	$app->post("/azp_gsc_third_parties/create", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_third_parties/delete", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_third_parties/file", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_third_parties/remove", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_third_parties/restore", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_third_parties/state", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_third_parties/table", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_third_parties/update", function($request, $response) {
		$model = new m_azp_gsc_third_partiesModel;
		$response->withJson($model->sql_azp_gsc_third_parties_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_type_third
	$app->post("/azp_gsc_type_third/create", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_type_third/delete", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_type_third/file", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_type_third/remove", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_type_third/restore", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_type_third/state", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_type_third/table", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_type_third/update", function($request, $response) {
		$model = new m_azp_gsc_type_thirdModel;
		$response->withJson($model->sql_azp_gsc_type_third_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_update
	$app->post("/azp_gsc_update/create", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_update/delete", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_update/file", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_update/remove", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_update/restore", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_update/state", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_update/table", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_update/update", function($request, $response) {
		$model = new m_azp_gsc_updateModel;
		$response->withJson($model->sql_azp_gsc_update_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_gsc_web_service
	$app->post("/azp_gsc_web_service/create", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_insert($_POST));
		return $response;
	});
	$app->post("/azp_gsc_web_service/delete", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_delete($_POST));
		return $response;
	});
	$app->post("/azp_gsc_web_service/file", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_file($_POST));
		return $response;
	});
	$app->post("/azp_gsc_web_service/remove", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_remove($_POST));
		return $response;
	});
	$app->post("/azp_gsc_web_service/restore", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_restore($_POST));
		return $response;
	});
	$app->post("/azp_gsc_web_service/state", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_state($_POST));
		return $response;
	});
	$app->post("/azp_gsc_web_service/table", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_table($_POST));
		return $response;
	});
	$app->post("/azp_gsc_web_service/update", function($request, $response) {
		$model = new m_azp_gsc_web_serviceModel;
		$response->withJson($model->sql_azp_gsc_web_service_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_binnacle
	$app->post("/azp_ibn_binnacle/create", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_binnacle/delete", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_binnacle/file", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_binnacle/remove", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_binnacle/restore", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_binnacle/state", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_binnacle/table", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_binnacle/update", function($request, $response) {
		$model = new m_azp_ibn_binnacleModel;
		$response->withJson($model->sql_azp_ibn_binnacle_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_calendar_festive
	$app->post("/azp_ibn_calendar_festive/create", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calendar_festive/delete", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calendar_festive/file", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calendar_festive/remove", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calendar_festive/restore", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calendar_festive/state", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calendar_festive/table", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calendar_festive/update", function($request, $response) {
		$model = new m_azp_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azp_ibn_calendar_festive_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_calification
	$app->post("/azp_ibn_calification/create", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calification/delete", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calification/file", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calification/remove", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calification/restore", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calification/state", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calification/table", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_calification/update", function($request, $response) {
		$model = new m_azp_ibn_calificationModel;
		$response->withJson($model->sql_azp_ibn_calification_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_camera
	$app->post("/azp_ibn_camera/create", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera/delete", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera/file", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera/remove", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera/restore", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera/state", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera/table", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera/update", function($request, $response) {
		$model = new m_azp_ibn_cameraModel;
		$response->withJson($model->sql_azp_ibn_camera_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_camera_import
	$app->post("/azp_ibn_camera_import/create", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera_import/delete", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera_import/file", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera_import/remove", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera_import/restore", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera_import/state", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera_import/table", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_camera_import/update", function($request, $response) {
		$model = new m_azp_ibn_camera_importModel;
		$response->withJson($model->sql_azp_ibn_camera_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_capture
	$app->post("/azp_ibn_capture/create", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_capture/delete", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_capture/file", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_capture/remove", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_capture/restore", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_capture/state", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_capture/table", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_capture/update", function($request, $response) {
		$model = new m_azp_ibn_captureModel;
		$response->withJson($model->sql_azp_ibn_capture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_client
	$app->post("/azp_ibn_client/create", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_client/delete", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_client/file", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_client/remove", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_client/restore", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_client/state", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_client/table", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_client/update", function($request, $response) {
		$model = new m_azp_ibn_clientModel;
		$response->withJson($model->sql_azp_ibn_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_compress
	$app->post("/azp_ibn_compress/create", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_compress/delete", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_compress/file", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_compress/remove", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_compress/restore", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_compress/state", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_compress/table", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_compress/update", function($request, $response) {
		$model = new m_azp_ibn_compressModel;
		$response->withJson($model->sql_azp_ibn_compress_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_concept
	$app->post("/azp_ibn_concept/create", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_concept/delete", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_concept/file", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_concept/remove", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_concept/restore", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_concept/state", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_concept/table", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_concept/update", function($request, $response) {
		$model = new m_azp_ibn_conceptModel;
		$response->withJson($model->sql_azp_ibn_concept_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_conditional
	$app->post("/azp_ibn_conditional/create", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_conditional/delete", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_conditional/file", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_conditional/remove", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_conditional/restore", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_conditional/state", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_conditional/table", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_conditional/update", function($request, $response) {
		$model = new m_azp_ibn_conditionalModel;
		$response->withJson($model->sql_azp_ibn_conditional_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_control_panel
	$app->post("/azp_ibn_control_panel/create", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_control_panel/delete", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_control_panel/file", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_control_panel/remove", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_control_panel/restore", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_control_panel/state", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_control_panel/table", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_control_panel/update", function($request, $response) {
		$model = new m_azp_ibn_control_panelModel;
		$response->withJson($model->sql_azp_ibn_control_panel_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_data_main
	$app->post("/azp_ibn_data_main/create", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_data_main/delete", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_data_main/file", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_data_main/remove", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_data_main/restore", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_data_main/state", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_data_main/table", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_data_main/update", function($request, $response) {
		$model = new m_azp_ibn_data_mainModel;
		$response->withJson($model->sql_azp_ibn_data_main_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_email
	$app->post("/azp_ibn_email/create", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email/delete", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email/file", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email/remove", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email/restore", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email/state", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email/table", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email/update", function($request, $response) {
		$model = new m_azp_ibn_emailModel;
		$response->withJson($model->sql_azp_ibn_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_email_request
	$app->post("/azp_ibn_email_request/create", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email_request/delete", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email_request/file", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email_request/remove", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email_request/restore", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email_request/state", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email_request/table", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_email_request/update", function($request, $response) {
		$model = new m_azp_ibn_email_requestModel;
		$response->withJson($model->sql_azp_ibn_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_evaluation
	$app->post("/azp_ibn_evaluation/create", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_evaluation/delete", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_evaluation/file", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_evaluation/remove", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_evaluation/restore", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_evaluation/state", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_evaluation/table", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_evaluation/update", function($request, $response) {
		$model = new m_azp_ibn_evaluationModel;
		$response->withJson($model->sql_azp_ibn_evaluation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_exchange_portal
	$app->post("/azp_ibn_exchange_portal/create", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_exchange_portal/delete", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_exchange_portal/file", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_exchange_portal/remove", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_exchange_portal/restore", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_exchange_portal/state", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_exchange_portal/table", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_exchange_portal/update", function($request, $response) {
		$model = new m_azp_ibn_exchange_portalModel;
		$response->withJson($model->sql_azp_ibn_exchange_portal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_files
	$app->post("/azp_ibn_files/create", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_files/delete", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_files/file", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_files/remove", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_files/restore", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_files/state", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_files/table", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_files/update", function($request, $response) {
		$model = new m_azp_ibn_filesModel;
		$response->withJson($model->sql_azp_ibn_files_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_format_file
	$app->post("/azp_ibn_format_file/create", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_file/delete", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_file/file", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_file/remove", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_file/restore", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_file/state", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_file/table", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_file/update", function($request, $response) {
		$model = new m_azp_ibn_format_fileModel;
		$response->withJson($model->sql_azp_ibn_format_file_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_format_gantt
	$app->post("/azp_ibn_format_gantt/create", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_gantt/delete", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_gantt/file", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_gantt/remove", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_gantt/restore", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_gantt/state", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_gantt/table", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_gantt/update", function($request, $response) {
		$model = new m_azp_ibn_format_ganttModel;
		$response->withJson($model->sql_azp_ibn_format_gantt_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_format_type
	$app->post("/azp_ibn_format_type/create", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_type/delete", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_type/file", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_type/remove", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_type/restore", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_type/state", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_type/table", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_format_type/update", function($request, $response) {
		$model = new m_azp_ibn_format_typeModel;
		$response->withJson($model->sql_azp_ibn_format_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture
	$app->post("/azp_ibn_furniture/create", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture/delete", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture/file", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture/remove", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture/restore", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture/state", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture/table", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture/update", function($request, $response) {
		$model = new m_azp_ibn_furnitureModel;
		$response->withJson($model->sql_azp_ibn_furniture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_furniture_import
	$app->post("/azp_ibn_furniture_import/create", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture_import/delete", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture_import/file", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture_import/remove", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture_import/restore", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture_import/state", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture_import/table", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_furniture_import/update", function($request, $response) {
		$model = new m_azp_ibn_furniture_importModel;
		$response->withJson($model->sql_azp_ibn_furniture_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_imagespress
	$app->post("/azp_ibn_imagespress/create", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_imagespress/delete", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_imagespress/file", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_imagespress/remove", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_imagespress/restore", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_imagespress/state", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_imagespress/table", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_imagespress/update", function($request, $response) {
		$model = new m_azp_ibn_imagespressModel;
		$response->withJson($model->sql_azp_ibn_imagespress_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_information
	$app->post("/azp_ibn_information/create", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_information/delete", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_information/file", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_information/remove", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_information/restore", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_information/state", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_information/table", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_information/update", function($request, $response) {
		$model = new m_azp_ibn_informationModel;
		$response->withJson($model->sql_azp_ibn_information_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_interface_dit
	$app->post("/azp_ibn_interface_dit/create", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_interface_dit/delete", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_interface_dit/file", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_interface_dit/remove", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_interface_dit/restore", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_interface_dit/state", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_interface_dit/table", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_interface_dit/update", function($request, $response) {
		$model = new m_azp_ibn_interface_ditModel;
		$response->withJson($model->sql_azp_ibn_interface_dit_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_limitation
	$app->post("/azp_ibn_limitation/create", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_limitation/delete", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_limitation/file", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_limitation/remove", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_limitation/restore", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_limitation/state", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_limitation/table", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_limitation/update", function($request, $response) {
		$model = new m_azp_ibn_limitationModel;
		$response->withJson($model->sql_azp_ibn_limitation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_mass_load
	$app->post("/azp_ibn_mass_load/create", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_mass_load/delete", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_mass_load/file", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_mass_load/remove", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_mass_load/restore", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_mass_load/state", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_mass_load/table", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_mass_load/update", function($request, $response) {
		$model = new m_azp_ibn_mass_loadModel;
		$response->withJson($model->sql_azp_ibn_mass_load_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_module
	$app->post("/azp_ibn_module/create", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_module/delete", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_module/file", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_module/remove", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_module/restore", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_module/state", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_module/table", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_module/update", function($request, $response) {
		$model = new m_azp_ibn_moduleModel;
		$response->withJson($model->sql_azp_ibn_module_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_observation
	$app->post("/azp_ibn_observation/create", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_observation/delete", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_observation/file", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_observation/remove", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_observation/restore", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_observation/state", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_observation/table", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_observation/update", function($request, $response) {
		$model = new m_azp_ibn_observationModel;
		$response->withJson($model->sql_azp_ibn_observation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_outcome
	$app->post("/azp_ibn_outcome/create", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_outcome/delete", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_outcome/file", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_outcome/remove", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_outcome/restore", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_outcome/state", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_outcome/table", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_outcome/update", function($request, $response) {
		$model = new m_azp_ibn_outcomeModel;
		$response->withJson($model->sql_azp_ibn_outcome_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_pdf_cell
	$app->post("/azp_ibn_pdf_cell/create", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_cell/delete", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_cell/file", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_cell/remove", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_cell/restore", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_cell/state", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_cell/table", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_cell/update", function($request, $response) {
		$model = new m_azp_ibn_pdf_cellModel;
		$response->withJson($model->sql_azp_ibn_pdf_cell_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_pdf_fill_color
	$app->post("/azp_ibn_pdf_fill_color/create", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_fill_color/delete", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_fill_color/file", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_fill_color/remove", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_fill_color/restore", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_fill_color/state", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_fill_color/table", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_fill_color/update", function($request, $response) {
		$model = new m_azp_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_fill_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_pdf_font
	$app->post("/azp_ibn_pdf_font/create", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_font/delete", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_font/file", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_font/remove", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_font/restore", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_font/state", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_font/table", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_font/update", function($request, $response) {
		$model = new m_azp_ibn_pdf_fontModel;
		$response->withJson($model->sql_azp_ibn_pdf_font_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_pdf_text_color
	$app->post("/azp_ibn_pdf_text_color/create", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_text_color/delete", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_text_color/file", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_text_color/remove", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_text_color/restore", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_text_color/state", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_text_color/table", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_pdf_text_color/update", function($request, $response) {
		$model = new m_azp_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azp_ibn_pdf_text_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_policy
	$app->post("/azp_ibn_policy/create", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_policy/delete", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_policy/file", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_policy/remove", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_policy/restore", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_policy/state", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_policy/table", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_policy/update", function($request, $response) {
		$model = new m_azp_ibn_policyModel;
		$response->withJson($model->sql_azp_ibn_policy_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property
	$app->post("/azp_ibn_property/create", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property/delete", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property/file", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property/remove", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property/restore", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property/state", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property/table", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property/update", function($request, $response) {
		$model = new m_azp_ibn_propertyModel;
		$response->withJson($model->sql_azp_ibn_property_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_property_import
	$app->post("/azp_ibn_property_import/create", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property_import/delete", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property_import/file", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property_import/remove", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property_import/restore", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property_import/state", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property_import/table", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_property_import/update", function($request, $response) {
		$model = new m_azp_ibn_property_importModel;
		$response->withJson($model->sql_azp_ibn_property_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_rank
	$app->post("/azp_ibn_rank/create", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_rank/delete", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_rank/file", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_rank/remove", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_rank/restore", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_rank/state", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_rank/table", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_rank/update", function($request, $response) {
		$model = new m_azp_ibn_rankModel;
		$response->withJson($model->sql_azp_ibn_rank_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_regime
	$app->post("/azp_ibn_regime/create", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regime/delete", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regime/file", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regime/remove", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regime/restore", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regime/state", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regime/table", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regime/update", function($request, $response) {
		$model = new m_azp_ibn_regimeModel;
		$response->withJson($model->sql_azp_ibn_regime_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_regulation
	$app->post("/azp_ibn_regulation/create", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regulation/delete", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regulation/file", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regulation/remove", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regulation/restore", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regulation/state", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regulation/table", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_regulation/update", function($request, $response) {
		$model = new m_azp_ibn_regulationModel;
		$response->withJson($model->sql_azp_ibn_regulation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_consolidated
	$app->post("/azp_ibn_report_consolidated/create", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_consolidated/delete", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_consolidated/file", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_consolidated/remove", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_consolidated/restore", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_consolidated/state", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_consolidated/table", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_consolidated/update", function($request, $response) {
		$model = new m_azp_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azp_ibn_report_consolidated_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_gantt
	$app->post("/azp_ibn_report_gantt/create", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_gantt/delete", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_gantt/file", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_gantt/remove", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_gantt/restore", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_gantt/state", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_gantt/table", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_gantt/update", function($request, $response) {
		$model = new m_azp_ibn_report_ganttModel;
		$response->withJson($model->sql_azp_ibn_report_gantt_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_general
	$app->post("/azp_ibn_report_general/create", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_general/delete", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_general/file", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_general/remove", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_general/restore", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_general/state", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_general/table", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_general/update", function($request, $response) {
		$model = new m_azp_ibn_report_generalModel;
		$response->withJson($model->sql_azp_ibn_report_general_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_inform
	$app->post("/azp_ibn_report_inform/create", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_inform/delete", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_inform/file", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_inform/remove", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_inform/restore", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_inform/state", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_inform/table", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_inform/update", function($request, $response) {
		$model = new m_azp_ibn_report_informModel;
		$response->withJson($model->sql_azp_ibn_report_inform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_agrario
	$app->post("/azp_ibn_report_structure_agrario/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_agrario/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_agrario/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_agrario/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_agrario/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_agrario/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_agrario/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_agrario/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_agrario_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_banco_bbva
	$app->post("/azp_ibn_report_structure_banco_bbva/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bbva/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bbva/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bbva/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bbva/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bbva/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bbva/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bbva/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bbva_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_banco_bogota
	$app->post("/azp_ibn_report_structure_banco_bogota/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bogota/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bogota/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bogota/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bogota/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bogota/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bogota/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_bogota/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_bogota_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_banco_popular
	$app->post("/azp_ibn_report_structure_banco_popular/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_popular/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_popular/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_popular/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_popular/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_popular/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_popular/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_banco_popular/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azp_ibn_report_structure_banco_popular_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_coface
	$app->post("/azp_ibn_report_structure_coface/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_coface/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_coface/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_coface/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_coface/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_coface/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_coface/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_coface/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azp_ibn_report_structure_coface_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_comercial
	$app->post("/azp_ibn_report_structure_comercial/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_comercial/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_comercial/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_comercial/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_comercial/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_comercial/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_comercial/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_comercial/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azp_ibn_report_structure_comercial_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_fincomercio
	$app->post("/azp_ibn_report_structure_fincomercio/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_fincomercio/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_fincomercio/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_fincomercio/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_fincomercio/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_fincomercio/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_fincomercio/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_fincomercio/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azp_ibn_report_structure_fincomercio_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_ics_bogota
	$app->post("/azp_ibn_report_structure_ics_bogota/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_ics_bogota/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_ics_bogota/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_ics_bogota/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_ics_bogota/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_ics_bogota/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_ics_bogota/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_ics_bogota/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_ics_bogota_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_propia
	$app->post("/azp_ibn_report_structure_propia/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_propia/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_propia/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_propia/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_propia/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_propia/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_propia/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_propia/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_propia_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_report_structure_protecsa
	$app->post("/azp_ibn_report_structure_protecsa/create", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_protecsa/delete", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_protecsa/file", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_protecsa/remove", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_protecsa/restore", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_protecsa/state", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_protecsa/table", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_report_structure_protecsa/update", function($request, $response) {
		$model = new m_azp_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azp_ibn_report_structure_protecsa_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_sector
	$app->post("/azp_ibn_sector/create", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_sector/delete", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_sector/file", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_sector/remove", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_sector/restore", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_sector/state", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_sector/table", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_sector/update", function($request, $response) {
		$model = new m_azp_ibn_sectorModel;
		$response->withJson($model->sql_azp_ibn_sector_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_state
	$app->post("/azp_ibn_state/create", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_state/delete", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_state/file", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_state/remove", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_state/restore", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_state/state", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_state/table", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_state/update", function($request, $response) {
		$model = new m_azp_ibn_stateModel;
		$response->withJson($model->sql_azp_ibn_state_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_supplier
	$app->post("/azp_ibn_supplier/create", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_supplier/delete", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_supplier/file", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_supplier/remove", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_supplier/restore", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_supplier/state", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_supplier/table", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_supplier/update", function($request, $response) {
		$model = new m_azp_ibn_supplierModel;
		$response->withJson($model->sql_azp_ibn_supplier_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_table_field
	$app->post("/azp_ibn_table_field/create", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_table_field/delete", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_table_field/file", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_table_field/remove", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_table_field/restore", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_table_field/state", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_table_field/table", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_table_field/update", function($request, $response) {
		$model = new m_azp_ibn_table_fieldModel;
		$response->withJson($model->sql_azp_ibn_table_field_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_type_affiliate
	$app->post("/azp_ibn_type_affiliate/create", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_affiliate/delete", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_affiliate/file", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_affiliate/remove", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_affiliate/restore", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_affiliate/state", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_affiliate/table", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_affiliate/update", function($request, $response) {
		$model = new m_azp_ibn_type_affiliateModel;
		$response->withJson($model->sql_azp_ibn_type_affiliate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_type_certified
	$app->post("/azp_ibn_type_certified/create", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_certified/delete", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_certified/file", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_certified/remove", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_certified/restore", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_certified/state", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_certified/table", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_certified/update", function($request, $response) {
		$model = new m_azp_ibn_type_certifiedModel;
		$response->withJson($model->sql_azp_ibn_type_certified_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_type_concept
	$app->post("/azp_ibn_type_concept/create", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_concept/delete", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_concept/file", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_concept/remove", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_concept/restore", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_concept/state", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_concept/table", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_concept/update", function($request, $response) {
		$model = new m_azp_ibn_type_conceptModel;
		$response->withJson($model->sql_azp_ibn_type_concept_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_type_condition
	$app->post("/azp_ibn_type_condition/create", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_condition/delete", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_condition/file", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_condition/remove", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_condition/restore", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_condition/state", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_condition/table", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_condition/update", function($request, $response) {
		$model = new m_azp_ibn_type_conditionModel;
		$response->withJson($model->sql_azp_ibn_type_condition_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_type_contributor
	$app->post("/azp_ibn_type_contributor/create", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_contributor/delete", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_contributor/file", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_contributor/remove", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_contributor/restore", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_contributor/state", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_contributor/table", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_contributor/update", function($request, $response) {
		$model = new m_azp_ibn_type_contributorModel;
		$response->withJson($model->sql_azp_ibn_type_contributor_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_type_property
	$app->post("/azp_ibn_type_property/create", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_property/delete", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_property/file", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_property/remove", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_property/restore", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_property/state", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_property/table", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_type_property/update", function($request, $response) {
		$model = new m_azp_ibn_type_propertyModel;
		$response->withJson($model->sql_azp_ibn_type_property_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle
	$app->post("/azp_ibn_vehicle/create", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle/delete", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle/file", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle/remove", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle/restore", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle/state", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle/table", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle/update", function($request, $response) {
		$model = new m_azp_ibn_vehicleModel;
		$response->withJson($model->sql_azp_ibn_vehicle_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_vehicle_import
	$app->post("/azp_ibn_vehicle_import/create", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle_import/delete", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle_import/file", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle_import/remove", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle_import/restore", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle_import/state", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle_import/table", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_vehicle_import/update", function($request, $response) {
		$model = new m_azp_ibn_vehicle_importModel;
		$response->withJson($model->sql_azp_ibn_vehicle_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty
	$app->post("/azp_ibn_warranty/create", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty/delete", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty/file", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty/remove", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty/restore", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty/state", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty/table", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty/update", function($request, $response) {
		$model = new m_azp_ibn_warrantyModel;
		$response->withJson($model->sql_azp_ibn_warranty_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_ibn_warranty_import
	$app->post("/azp_ibn_warranty_import/create", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_insert($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty_import/delete", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_delete($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty_import/file", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_file($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty_import/remove", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_remove($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty_import/restore", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_restore($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty_import/state", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_state($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty_import/table", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_table($_POST));
		return $response;
	});
	$app->post("/azp_ibn_warranty_import/update", function($request, $response) {
		$model = new m_azp_ibn_warranty_importModel;
		$response->withJson($model->sql_azp_ibn_warranty_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_icon_category
	$app->post("/azp_icon_category/create", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_insert($_POST));
		return $response;
	});
	$app->post("/azp_icon_category/delete", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_delete($_POST));
		return $response;
	});
	$app->post("/azp_icon_category/file", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_file($_POST));
		return $response;
	});
	$app->post("/azp_icon_category/remove", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_remove($_POST));
		return $response;
	});
	$app->post("/azp_icon_category/restore", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_restore($_POST));
		return $response;
	});
	$app->post("/azp_icon_category/state", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_state($_POST));
		return $response;
	});
	$app->post("/azp_icon_category/table", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_table($_POST));
		return $response;
	});
	$app->post("/azp_icon_category/update", function($request, $response) {
		$model = new m_azp_icon_categoryModel;
		$response->withJson($model->sql_azp_icon_category_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_icon_code
	$app->post("/azp_icon_code/create", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_insert($_POST));
		return $response;
	});
	$app->post("/azp_icon_code/delete", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_delete($_POST));
		return $response;
	});
	$app->post("/azp_icon_code/file", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_file($_POST));
		return $response;
	});
	$app->post("/azp_icon_code/remove", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_remove($_POST));
		return $response;
	});
	$app->post("/azp_icon_code/restore", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_restore($_POST));
		return $response;
	});
	$app->post("/azp_icon_code/state", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_state($_POST));
		return $response;
	});
	$app->post("/azp_icon_code/table", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_table($_POST));
		return $response;
	});
	$app->post("/azp_icon_code/update", function($request, $response) {
		$model = new m_azp_icon_codeModel;
		$response->withJson($model->sql_azp_icon_code_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_menu_crud
	$app->post("/azp_menu_crud/create", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_insert($_POST));
		return $response;
	});
	$app->post("/azp_menu_crud/delete", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_delete($_POST));
		return $response;
	});
	$app->post("/azp_menu_crud/file", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_file($_POST));
		return $response;
	});
	$app->post("/azp_menu_crud/remove", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_remove($_POST));
		return $response;
	});
	$app->post("/azp_menu_crud/restore", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_restore($_POST));
		return $response;
	});
	$app->post("/azp_menu_crud/state", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_state($_POST));
		return $response;
	});
	$app->post("/azp_menu_crud/table", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_table($_POST));
		return $response;
	});
	$app->post("/azp_menu_crud/update", function($request, $response) {
		$model = new m_azp_menu_crudModel;
		$response->withJson($model->sql_azp_menu_crud_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_menu_main
	$app->post("/azp_menu_main/create", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_insert($_POST));
		return $response;
	});
	$app->post("/azp_menu_main/delete", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_delete($_POST));
		return $response;
	});
	$app->post("/azp_menu_main/file", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_file($_POST));
		return $response;
	});
	$app->post("/azp_menu_main/remove", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_remove($_POST));
		return $response;
	});
	$app->post("/azp_menu_main/restore", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_restore($_POST));
		return $response;
	});
	$app->post("/azp_menu_main/state", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_state($_POST));
		return $response;
	});
	$app->post("/azp_menu_main/table", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_table($_POST));
		return $response;
	});
	$app->post("/azp_menu_main/update", function($request, $response) {
		$model = new m_azp_menu_mainModel;
		$response->withJson($model->sql_azp_menu_main_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_menu_profile
	$app->post("/azp_menu_profile/create", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_insert($_POST));
		return $response;
	});
	$app->post("/azp_menu_profile/delete", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_delete($_POST));
		return $response;
	});
	$app->post("/azp_menu_profile/file", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_file($_POST));
		return $response;
	});
	$app->post("/azp_menu_profile/remove", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_remove($_POST));
		return $response;
	});
	$app->post("/azp_menu_profile/restore", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_restore($_POST));
		return $response;
	});
	$app->post("/azp_menu_profile/state", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_state($_POST));
		return $response;
	});
	$app->post("/azp_menu_profile/table", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_table($_POST));
		return $response;
	});
	$app->post("/azp_menu_profile/update", function($request, $response) {
		$model = new m_azp_menu_profileModel;
		$response->withJson($model->sql_azp_menu_profile_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_message_general
	$app->post("/azp_message_general/create", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_insert($_POST));
		return $response;
	});
	$app->post("/azp_message_general/delete", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_delete($_POST));
		return $response;
	});
	$app->post("/azp_message_general/file", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_file($_POST));
		return $response;
	});
	$app->post("/azp_message_general/remove", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_remove($_POST));
		return $response;
	});
	$app->post("/azp_message_general/restore", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_restore($_POST));
		return $response;
	});
	$app->post("/azp_message_general/state", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_state($_POST));
		return $response;
	});
	$app->post("/azp_message_general/table", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_table($_POST));
		return $response;
	});
	$app->post("/azp_message_general/update", function($request, $response) {
		$model = new m_azp_message_generalModel;
		$response->withJson($model->sql_azp_message_general_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_message_get
	$app->post("/azp_message_get/create", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_insert($_POST));
		return $response;
	});
	$app->post("/azp_message_get/delete", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_delete($_POST));
		return $response;
	});
	$app->post("/azp_message_get/file", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_file($_POST));
		return $response;
	});
	$app->post("/azp_message_get/remove", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_remove($_POST));
		return $response;
	});
	$app->post("/azp_message_get/restore", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_restore($_POST));
		return $response;
	});
	$app->post("/azp_message_get/state", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_state($_POST));
		return $response;
	});
	$app->post("/azp_message_get/table", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_table($_POST));
		return $response;
	});
	$app->post("/azp_message_get/update", function($request, $response) {
		$model = new m_azp_message_getModel;
		$response->withJson($model->sql_azp_message_get_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_modal_category
	$app->post("/azp_modal_category/create", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_insert($_POST));
		return $response;
	});
	$app->post("/azp_modal_category/delete", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_delete($_POST));
		return $response;
	});
	$app->post("/azp_modal_category/file", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_file($_POST));
		return $response;
	});
	$app->post("/azp_modal_category/remove", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_remove($_POST));
		return $response;
	});
	$app->post("/azp_modal_category/restore", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_restore($_POST));
		return $response;
	});
	$app->post("/azp_modal_category/state", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_state($_POST));
		return $response;
	});
	$app->post("/azp_modal_category/table", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_table($_POST));
		return $response;
	});
	$app->post("/azp_modal_category/update", function($request, $response) {
		$model = new m_azp_modal_categoryModel;
		$response->withJson($model->sql_azp_modal_category_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_modal_code
	$app->post("/azp_modal_code/create", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_insert($_POST));
		return $response;
	});
	$app->post("/azp_modal_code/delete", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_delete($_POST));
		return $response;
	});
	$app->post("/azp_modal_code/file", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_file($_POST));
		return $response;
	});
	$app->post("/azp_modal_code/remove", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_remove($_POST));
		return $response;
	});
	$app->post("/azp_modal_code/restore", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_restore($_POST));
		return $response;
	});
	$app->post("/azp_modal_code/state", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_state($_POST));
		return $response;
	});
	$app->post("/azp_modal_code/table", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_table($_POST));
		return $response;
	});
	$app->post("/azp_modal_code/update", function($request, $response) {
		$model = new m_azp_modal_codeModel;
		$response->withJson($model->sql_azp_modal_code_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_pallet_color
	$app->post("/azp_pallet_color/create", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_insert($_POST));
		return $response;
	});
	$app->post("/azp_pallet_color/delete", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_delete($_POST));
		return $response;
	});
	$app->post("/azp_pallet_color/file", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_file($_POST));
		return $response;
	});
	$app->post("/azp_pallet_color/remove", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_remove($_POST));
		return $response;
	});
	$app->post("/azp_pallet_color/restore", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_restore($_POST));
		return $response;
	});
	$app->post("/azp_pallet_color/state", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_state($_POST));
		return $response;
	});
	$app->post("/azp_pallet_color/table", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_table($_POST));
		return $response;
	});
	$app->post("/azp_pallet_color/update", function($request, $response) {
		$model = new m_azp_pallet_colorModel;
		$response->withJson($model->sql_azp_pallet_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_platform
	$app->post("/azp_platform/create", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_insert($_POST));
		return $response;
	});
	$app->post("/azp_platform/delete", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_delete($_POST));
		return $response;
	});
	$app->post("/azp_platform/file", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_file($_POST));
		return $response;
	});
	$app->post("/azp_platform/remove", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_remove($_POST));
		return $response;
	});
	$app->post("/azp_platform/restore", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_restore($_POST));
		return $response;
	});
	$app->post("/azp_platform/state", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_state($_POST));
		return $response;
	});
	$app->post("/azp_platform/table", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_table($_POST));
		return $response;
	});
	$app->post("/azp_platform/update", function($request, $response) {
		$model = new m_azp_platformModel;
		$response->withJson($model->sql_azp_platform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_report_client_daily
	$app->post("/azp_report_client_daily/create", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_insert($_POST));
		return $response;
	});
	$app->post("/azp_report_client_daily/delete", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_delete($_POST));
		return $response;
	});
	$app->post("/azp_report_client_daily/file", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_file($_POST));
		return $response;
	});
	$app->post("/azp_report_client_daily/remove", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_remove($_POST));
		return $response;
	});
	$app->post("/azp_report_client_daily/restore", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_restore($_POST));
		return $response;
	});
	$app->post("/azp_report_client_daily/state", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_state($_POST));
		return $response;
	});
	$app->post("/azp_report_client_daily/table", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_table($_POST));
		return $response;
	});
	$app->post("/azp_report_client_daily/update", function($request, $response) {
		$model = new m_azp_report_client_dailyModel;
		$response->withJson($model->sql_azp_report_client_daily_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_report_consignment
	$app->post("/azp_report_consignment/create", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_insert($_POST));
		return $response;
	});
	$app->post("/azp_report_consignment/delete", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_delete($_POST));
		return $response;
	});
	$app->post("/azp_report_consignment/file", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_file($_POST));
		return $response;
	});
	$app->post("/azp_report_consignment/remove", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_remove($_POST));
		return $response;
	});
	$app->post("/azp_report_consignment/restore", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_restore($_POST));
		return $response;
	});
	$app->post("/azp_report_consignment/state", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_state($_POST));
		return $response;
	});
	$app->post("/azp_report_consignment/table", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_table($_POST));
		return $response;
	});
	$app->post("/azp_report_consignment/update", function($request, $response) {
		$model = new m_azp_report_consignmentModel;
		$response->withJson($model->sql_azp_report_consignment_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_report_gsc_follow_email
	$app->post("/azp_report_gsc_follow_email/create", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_insert($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_follow_email/delete", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_delete($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_follow_email/file", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_file($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_follow_email/remove", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_remove($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_follow_email/restore", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_restore($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_follow_email/state", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_state($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_follow_email/table", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_table($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_follow_email/update", function($request, $response) {
		$model = new m_azp_report_gsc_follow_emailModel;
		$response->withJson($model->sql_azp_report_gsc_follow_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_report_gsc_request
	$app->post("/azp_report_gsc_request/create", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_insert($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_request/delete", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_delete($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_request/file", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_file($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_request/remove", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_remove($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_request/restore", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_restore($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_request/state", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_state($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_request/table", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_table($_POST));
		return $response;
	});
	$app->post("/azp_report_gsc_request/update", function($request, $response) {
		$model = new m_azp_report_gsc_requestModel;
		$response->withJson($model->sql_azp_report_gsc_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_role
	$app->post("/azp_role/create", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_insert($_POST));
		return $response;
	});
	$app->post("/azp_role/delete", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_delete($_POST));
		return $response;
	});
	$app->post("/azp_role/file", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_file($_POST));
		return $response;
	});
	$app->post("/azp_role/remove", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_remove($_POST));
		return $response;
	});
	$app->post("/azp_role/restore", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_restore($_POST));
		return $response;
	});
	$app->post("/azp_role/state", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_state($_POST));
		return $response;
	});
	$app->post("/azp_role/table", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_table($_POST));
		return $response;
	});
	$app->post("/azp_role/update", function($request, $response) {
		$model = new m_azp_roleModel;
		$response->withJson($model->sql_azp_role_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_rols
	$app->post("/azp_rols/create", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_insert($_POST));
		return $response;
	});
	$app->post("/azp_rols/delete", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_delete($_POST));
		return $response;
	});
	$app->post("/azp_rols/file", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_file($_POST));
		return $response;
	});
	$app->post("/azp_rols/remove", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_remove($_POST));
		return $response;
	});
	$app->post("/azp_rols/restore", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_restore($_POST));
		return $response;
	});
	$app->post("/azp_rols/state", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_state($_POST));
		return $response;
	});
	$app->post("/azp_rols/table", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_table($_POST));
		return $response;
	});
	$app->post("/azp_rols/update", function($request, $response) {
		$model = new m_azp_rolsModel;
		$response->withJson($model->sql_azp_rols_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_script
	$app->post("/azp_script/create", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_insert($_POST));
		return $response;
	});
	$app->post("/azp_script/delete", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_delete($_POST));
		return $response;
	});
	$app->post("/azp_script/file", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_file($_POST));
		return $response;
	});
	$app->post("/azp_script/remove", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_remove($_POST));
		return $response;
	});
	$app->post("/azp_script/restore", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_restore($_POST));
		return $response;
	});
	$app->post("/azp_script/state", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_state($_POST));
		return $response;
	});
	$app->post("/azp_script/table", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_table($_POST));
		return $response;
	});
	$app->post("/azp_script/update", function($request, $response) {
		$model = new m_azp_scriptModel;
		$response->withJson($model->sql_azp_script_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_social_media
	$app->post("/azp_social_media/create", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_insert($_POST));
		return $response;
	});
	$app->post("/azp_social_media/delete", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_delete($_POST));
		return $response;
	});
	$app->post("/azp_social_media/file", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_file($_POST));
		return $response;
	});
	$app->post("/azp_social_media/remove", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_remove($_POST));
		return $response;
	});
	$app->post("/azp_social_media/restore", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_restore($_POST));
		return $response;
	});
	$app->post("/azp_social_media/state", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_state($_POST));
		return $response;
	});
	$app->post("/azp_social_media/table", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_table($_POST));
		return $response;
	});
	$app->post("/azp_social_media/update", function($request, $response) {
		$model = new m_azp_social_mediaModel;
		$response->withJson($model->sql_azp_social_media_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_sub_menu_crud
	$app->post("/azp_sub_menu_crud/create", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_insert($_POST));
		return $response;
	});
	$app->post("/azp_sub_menu_crud/delete", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_delete($_POST));
		return $response;
	});
	$app->post("/azp_sub_menu_crud/file", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_file($_POST));
		return $response;
	});
	$app->post("/azp_sub_menu_crud/remove", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_remove($_POST));
		return $response;
	});
	$app->post("/azp_sub_menu_crud/restore", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_restore($_POST));
		return $response;
	});
	$app->post("/azp_sub_menu_crud/state", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_state($_POST));
		return $response;
	});
	$app->post("/azp_sub_menu_crud/table", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_table($_POST));
		return $response;
	});
	$app->post("/azp_sub_menu_crud/update", function($request, $response) {
		$model = new m_azp_sub_menu_crudModel;
		$response->withJson($model->sql_azp_sub_menu_crud_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_sys_answer
	$app->post("/azp_sys_answer/create", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_insert($_POST));
		return $response;
	});
	$app->post("/azp_sys_answer/delete", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_delete($_POST));
		return $response;
	});
	$app->post("/azp_sys_answer/file", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_file($_POST));
		return $response;
	});
	$app->post("/azp_sys_answer/remove", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_remove($_POST));
		return $response;
	});
	$app->post("/azp_sys_answer/restore", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_restore($_POST));
		return $response;
	});
	$app->post("/azp_sys_answer/state", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_state($_POST));
		return $response;
	});
	$app->post("/azp_sys_answer/table", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_table($_POST));
		return $response;
	});
	$app->post("/azp_sys_answer/update", function($request, $response) {
		$model = new m_azp_sys_answerModel;
		$response->withJson($model->sql_azp_sys_answer_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_sys_deleted
	$app->post("/azp_sys_deleted/create", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_insert($_POST));
		return $response;
	});
	$app->post("/azp_sys_deleted/delete", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_delete($_POST));
		return $response;
	});
	$app->post("/azp_sys_deleted/file", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_file($_POST));
		return $response;
	});
	$app->post("/azp_sys_deleted/remove", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_remove($_POST));
		return $response;
	});
	$app->post("/azp_sys_deleted/restore", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_restore($_POST));
		return $response;
	});
	$app->post("/azp_sys_deleted/state", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_state($_POST));
		return $response;
	});
	$app->post("/azp_sys_deleted/table", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_table($_POST));
		return $response;
	});
	$app->post("/azp_sys_deleted/update", function($request, $response) {
		$model = new m_azp_sys_deletedModel;
		$response->withJson($model->sql_azp_sys_deleted_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_sys_level
	$app->post("/azp_sys_level/create", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_insert($_POST));
		return $response;
	});
	$app->post("/azp_sys_level/delete", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_delete($_POST));
		return $response;
	});
	$app->post("/azp_sys_level/file", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_file($_POST));
		return $response;
	});
	$app->post("/azp_sys_level/remove", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_remove($_POST));
		return $response;
	});
	$app->post("/azp_sys_level/restore", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_restore($_POST));
		return $response;
	});
	$app->post("/azp_sys_level/state", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_state($_POST));
		return $response;
	});
	$app->post("/azp_sys_level/table", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_table($_POST));
		return $response;
	});
	$app->post("/azp_sys_level/update", function($request, $response) {
		$model = new m_azp_sys_levelModel;
		$response->withJson($model->sql_azp_sys_level_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_sys_state
	$app->post("/azp_sys_state/create", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_insert($_POST));
		return $response;
	});
	$app->post("/azp_sys_state/delete", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_delete($_POST));
		return $response;
	});
	$app->post("/azp_sys_state/file", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_file($_POST));
		return $response;
	});
	$app->post("/azp_sys_state/remove", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_remove($_POST));
		return $response;
	});
	$app->post("/azp_sys_state/restore", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_restore($_POST));
		return $response;
	});
	$app->post("/azp_sys_state/state", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_state($_POST));
		return $response;
	});
	$app->post("/azp_sys_state/table", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_table($_POST));
		return $response;
	});
	$app->post("/azp_sys_state/update", function($request, $response) {
		$model = new m_azp_sys_stateModel;
		$response->withJson($model->sql_azp_sys_state_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_sys_temp
	$app->post("/azp_sys_temp/create", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_insert($_POST));
		return $response;
	});
	$app->post("/azp_sys_temp/delete", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_delete($_POST));
		return $response;
	});
	$app->post("/azp_sys_temp/file", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_file($_POST));
		return $response;
	});
	$app->post("/azp_sys_temp/remove", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_remove($_POST));
		return $response;
	});
	$app->post("/azp_sys_temp/restore", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_restore($_POST));
		return $response;
	});
	$app->post("/azp_sys_temp/state", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_state($_POST));
		return $response;
	});
	$app->post("/azp_sys_temp/table", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_table($_POST));
		return $response;
	});
	$app->post("/azp_sys_temp/update", function($request, $response) {
		$model = new m_azp_sys_tempModel;
		$response->withJson($model->sql_azp_sys_temp_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_system_message
	$app->post("/azp_system_message/create", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_insert($_POST));
		return $response;
	});
	$app->post("/azp_system_message/delete", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_delete($_POST));
		return $response;
	});
	$app->post("/azp_system_message/file", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_file($_POST));
		return $response;
	});
	$app->post("/azp_system_message/remove", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_remove($_POST));
		return $response;
	});
	$app->post("/azp_system_message/restore", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_restore($_POST));
		return $response;
	});
	$app->post("/azp_system_message/state", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_state($_POST));
		return $response;
	});
	$app->post("/azp_system_message/table", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_table($_POST));
		return $response;
	});
	$app->post("/azp_system_message/update", function($request, $response) {
		$model = new m_azp_system_messageModel;
		$response->withJson($model->sql_azp_system_message_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_table_prefix
	$app->post("/azp_table_prefix/create", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_insert($_POST));
		return $response;
	});
	$app->post("/azp_table_prefix/delete", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_delete($_POST));
		return $response;
	});
	$app->post("/azp_table_prefix/file", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_file($_POST));
		return $response;
	});
	$app->post("/azp_table_prefix/remove", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_remove($_POST));
		return $response;
	});
	$app->post("/azp_table_prefix/restore", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_restore($_POST));
		return $response;
	});
	$app->post("/azp_table_prefix/state", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_state($_POST));
		return $response;
	});
	$app->post("/azp_table_prefix/table", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_table($_POST));
		return $response;
	});
	$app->post("/azp_table_prefix/update", function($request, $response) {
		$model = new m_azp_table_prefixModel;
		$response->withJson($model->sql_azp_table_prefix_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_table_type_data
	$app->post("/azp_table_type_data/create", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_insert($_POST));
		return $response;
	});
	$app->post("/azp_table_type_data/delete", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_delete($_POST));
		return $response;
	});
	$app->post("/azp_table_type_data/file", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_file($_POST));
		return $response;
	});
	$app->post("/azp_table_type_data/remove", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_remove($_POST));
		return $response;
	});
	$app->post("/azp_table_type_data/restore", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_restore($_POST));
		return $response;
	});
	$app->post("/azp_table_type_data/state", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_state($_POST));
		return $response;
	});
	$app->post("/azp_table_type_data/table", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_table($_POST));
		return $response;
	});
	$app->post("/azp_table_type_data/update", function($request, $response) {
		$model = new m_azp_table_type_dataModel;
		$response->withJson($model->sql_azp_table_type_data_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_transact
	$app->post("/azp_transact/create", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_insert($_POST));
		return $response;
	});
	$app->post("/azp_transact/delete", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_delete($_POST));
		return $response;
	});
	$app->post("/azp_transact/file", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_file($_POST));
		return $response;
	});
	$app->post("/azp_transact/remove", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_remove($_POST));
		return $response;
	});
	$app->post("/azp_transact/restore", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_restore($_POST));
		return $response;
	});
	$app->post("/azp_transact/state", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_state($_POST));
		return $response;
	});
	$app->post("/azp_transact/table", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_table($_POST));
		return $response;
	});
	$app->post("/azp_transact/update", function($request, $response) {
		$model = new m_azp_transactModel;
		$response->withJson($model->sql_azp_transact_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azp_user
	$app->post("/azp_user/create", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_insert($_POST));
		return $response;
	});
	$app->post("/azp_user/delete", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_delete($_POST));
		return $response;
	});
	$app->post("/azp_user/file", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_file($_POST));
		return $response;
	});
	$app->post("/azp_user/remove", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_remove($_POST));
		return $response;
	});
	$app->post("/azp_user/restore", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_restore($_POST));
		return $response;
	});
	$app->post("/azp_user/state", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_state($_POST));
		return $response;
	});
	$app->post("/azp_user/table", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_table($_POST));
		return $response;
	});
	$app->post("/azp_user/update", function($request, $response) {
		$model = new m_azp_userModel;
		$response->withJson($model->sql_azp_user_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_access_permits
	$app->post("/azs_access_permits/create", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_insert($_POST));
		return $response;
	});
	$app->post("/azs_access_permits/delete", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_delete($_POST));
		return $response;
	});
	$app->post("/azs_access_permits/file", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_file($_POST));
		return $response;
	});
	$app->post("/azs_access_permits/remove", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_remove($_POST));
		return $response;
	});
	$app->post("/azs_access_permits/restore", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_restore($_POST));
		return $response;
	});
	$app->post("/azs_access_permits/state", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_state($_POST));
		return $response;
	});
	$app->post("/azs_access_permits/table", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_table($_POST));
		return $response;
	});
	$app->post("/azs_access_permits/update", function($request, $response) {
		$model = new m_azs_access_permitsModel;
		$response->withJson($model->sql_azs_access_permits_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_access_type
	$app->post("/azs_access_type/create", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_insert($_POST));
		return $response;
	});
	$app->post("/azs_access_type/delete", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_delete($_POST));
		return $response;
	});
	$app->post("/azs_access_type/file", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_file($_POST));
		return $response;
	});
	$app->post("/azs_access_type/remove", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_remove($_POST));
		return $response;
	});
	$app->post("/azs_access_type/restore", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_restore($_POST));
		return $response;
	});
	$app->post("/azs_access_type/state", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_state($_POST));
		return $response;
	});
	$app->post("/azs_access_type/table", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_table($_POST));
		return $response;
	});
	$app->post("/azs_access_type/update", function($request, $response) {
		$model = new m_azs_access_typeModel;
		$response->withJson($model->sql_azs_access_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_application
	$app->post("/azs_application/create", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_insert($_POST));
		return $response;
	});
	$app->post("/azs_application/delete", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_delete($_POST));
		return $response;
	});
	$app->post("/azs_application/file", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_file($_POST));
		return $response;
	});
	$app->post("/azs_application/remove", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_remove($_POST));
		return $response;
	});
	$app->post("/azs_application/restore", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_restore($_POST));
		return $response;
	});
	$app->post("/azs_application/state", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_state($_POST));
		return $response;
	});
	$app->post("/azs_application/table", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_table($_POST));
		return $response;
	});
	$app->post("/azs_application/update", function($request, $response) {
		$model = new m_azs_applicationModel;
		$response->withJson($model->sql_azs_application_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_authorized_permits
	$app->post("/azs_authorized_permits/create", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_insert($_POST));
		return $response;
	});
	$app->post("/azs_authorized_permits/delete", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_delete($_POST));
		return $response;
	});
	$app->post("/azs_authorized_permits/file", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_file($_POST));
		return $response;
	});
	$app->post("/azs_authorized_permits/remove", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_remove($_POST));
		return $response;
	});
	$app->post("/azs_authorized_permits/restore", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_restore($_POST));
		return $response;
	});
	$app->post("/azs_authorized_permits/state", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_state($_POST));
		return $response;
	});
	$app->post("/azs_authorized_permits/table", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_table($_POST));
		return $response;
	});
	$app->post("/azs_authorized_permits/update", function($request, $response) {
		$model = new m_azs_authorized_permitsModel;
		$response->withJson($model->sql_azs_authorized_permits_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_button_dimension
	$app->post("/azs_button_dimension/create", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_insert($_POST));
		return $response;
	});
	$app->post("/azs_button_dimension/delete", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_delete($_POST));
		return $response;
	});
	$app->post("/azs_button_dimension/file", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_file($_POST));
		return $response;
	});
	$app->post("/azs_button_dimension/remove", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_remove($_POST));
		return $response;
	});
	$app->post("/azs_button_dimension/restore", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_restore($_POST));
		return $response;
	});
	$app->post("/azs_button_dimension/state", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_state($_POST));
		return $response;
	});
	$app->post("/azs_button_dimension/table", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_table($_POST));
		return $response;
	});
	$app->post("/azs_button_dimension/update", function($request, $response) {
		$model = new m_azs_button_dimensionModel;
		$response->withJson($model->sql_azs_button_dimension_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_button_property
	$app->post("/azs_button_property/create", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_insert($_POST));
		return $response;
	});
	$app->post("/azs_button_property/delete", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_delete($_POST));
		return $response;
	});
	$app->post("/azs_button_property/file", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_file($_POST));
		return $response;
	});
	$app->post("/azs_button_property/remove", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_remove($_POST));
		return $response;
	});
	$app->post("/azs_button_property/restore", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_restore($_POST));
		return $response;
	});
	$app->post("/azs_button_property/state", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_state($_POST));
		return $response;
	});
	$app->post("/azs_button_property/table", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_table($_POST));
		return $response;
	});
	$app->post("/azs_button_property/update", function($request, $response) {
		$model = new m_azs_button_propertyModel;
		$response->withJson($model->sql_azs_button_property_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_alert
	$app->post("/azs_configuration_alert/create", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_alert/delete", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_alert/file", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_alert/remove", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_alert/restore", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_alert/state", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_alert/table", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_alert/update", function($request, $response) {
		$model = new m_azs_configuration_alertModel;
		$response->withJson($model->sql_azs_configuration_alert_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_button
	$app->post("/azs_configuration_button/create", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_button/delete", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_button/file", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_button/remove", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_button/restore", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_button/state", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_button/table", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_button/update", function($request, $response) {
		$model = new m_azs_configuration_buttonModel;
		$response->withJson($model->sql_azs_configuration_button_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_color
	$app->post("/azs_configuration_color/create", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_color/delete", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_color/file", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_color/remove", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_color/restore", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_color/state", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_color/table", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_color/update", function($request, $response) {
		$model = new m_azs_configuration_colorModel;
		$response->withJson($model->sql_azs_configuration_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_design
	$app->post("/azs_configuration_design/create", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_design/delete", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_design/file", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_design/remove", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_design/restore", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_design/state", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_design/table", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_design/update", function($request, $response) {
		$model = new m_azs_configuration_designModel;
		$response->withJson($model->sql_azs_configuration_design_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_dimension
	$app->post("/azs_configuration_dimension/create", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_dimension/delete", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_dimension/file", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_dimension/remove", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_dimension/restore", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_dimension/state", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_dimension/table", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_dimension/update", function($request, $response) {
		$model = new m_azs_configuration_dimensionModel;
		$response->withJson($model->sql_azs_configuration_dimension_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_email
	$app->post("/azs_configuration_email/create", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_email/delete", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_email/file", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_email/remove", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_email/restore", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_email/state", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_email/table", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_email/update", function($request, $response) {
		$model = new m_azs_configuration_emailModel;
		$response->withJson($model->sql_azs_configuration_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_modal
	$app->post("/azs_configuration_modal/create", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_modal/delete", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_modal/file", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_modal/remove", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_modal/restore", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_modal/state", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_modal/table", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_modal/update", function($request, $response) {
		$model = new m_azs_configuration_modalModel;
		$response->withJson($model->sql_azs_configuration_modal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_panel
	$app->post("/azs_configuration_panel/create", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_panel/delete", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_panel/file", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_panel/remove", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_panel/restore", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_panel/state", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_panel/table", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_panel/update", function($request, $response) {
		$model = new m_azs_configuration_panelModel;
		$response->withJson($model->sql_azs_configuration_panel_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_table
	$app->post("/azs_configuration_table/create", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_table/delete", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_table/file", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_table/remove", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_table/restore", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_table/state", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_table/table", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_table/update", function($request, $response) {
		$model = new m_azs_configuration_tableModel;
		$response->withJson($model->sql_azs_configuration_table_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_configuration_theme
	$app->post("/azs_configuration_theme/create", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_insert($_POST));
		return $response;
	});
	$app->post("/azs_configuration_theme/delete", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_delete($_POST));
		return $response;
	});
	$app->post("/azs_configuration_theme/file", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_file($_POST));
		return $response;
	});
	$app->post("/azs_configuration_theme/remove", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_remove($_POST));
		return $response;
	});
	$app->post("/azs_configuration_theme/restore", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_restore($_POST));
		return $response;
	});
	$app->post("/azs_configuration_theme/state", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_state($_POST));
		return $response;
	});
	$app->post("/azs_configuration_theme/table", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_table($_POST));
		return $response;
	});
	$app->post("/azs_configuration_theme/update", function($request, $response) {
		$model = new m_azs_configuration_themeModel;
		$response->withJson($model->sql_azs_configuration_theme_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_contact
	$app->post("/azs_contact/create", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_insert($_POST));
		return $response;
	});
	$app->post("/azs_contact/delete", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_delete($_POST));
		return $response;
	});
	$app->post("/azs_contact/file", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_file($_POST));
		return $response;
	});
	$app->post("/azs_contact/remove", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_remove($_POST));
		return $response;
	});
	$app->post("/azs_contact/restore", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_restore($_POST));
		return $response;
	});
	$app->post("/azs_contact/state", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_state($_POST));
		return $response;
	});
	$app->post("/azs_contact/table", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_table($_POST));
		return $response;
	});
	$app->post("/azs_contact/update", function($request, $response) {
		$model = new m_azs_contactModel;
		$response->withJson($model->sql_azs_contact_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_country
	$app->post("/azs_country/create", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_insert($_POST));
		return $response;
	});
	$app->post("/azs_country/delete", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_delete($_POST));
		return $response;
	});
	$app->post("/azs_country/file", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_file($_POST));
		return $response;
	});
	$app->post("/azs_country/remove", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_remove($_POST));
		return $response;
	});
	$app->post("/azs_country/restore", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_restore($_POST));
		return $response;
	});
	$app->post("/azs_country/state", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_state($_POST));
		return $response;
	});
	$app->post("/azs_country/table", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_table($_POST));
		return $response;
	});
	$app->post("/azs_country/update", function($request, $response) {
		$model = new m_azs_countryModel;
		$response->withJson($model->sql_azs_country_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_alert
	$app->post("/azs_crt_alert/create", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_alert/delete", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_alert/file", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_alert/remove", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_alert/restore", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_alert/state", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_alert/table", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_alert/update", function($request, $response) {
		$model = new m_azs_crt_alertModel;
		$response->withJson($model->sql_azs_crt_alert_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_bank
	$app->post("/azs_crt_bank/create", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_bank/delete", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_bank/file", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_bank/remove", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_bank/restore", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_bank/state", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_bank/table", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_bank/update", function($request, $response) {
		$model = new m_azs_crt_bankModel;
		$response->withJson($model->sql_azs_crt_bank_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_binnacle
	$app->post("/azs_crt_binnacle/create", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_binnacle/delete", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_binnacle/file", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_binnacle/remove", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_binnacle/restore", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_binnacle/state", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_binnacle/table", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_binnacle/update", function($request, $response) {
		$model = new m_azs_crt_binnacleModel;
		$response->withJson($model->sql_azs_crt_binnacle_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_capture
	$app->post("/azs_crt_capture/create", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_capture/delete", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_capture/file", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_capture/remove", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_capture/restore", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_capture/state", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_capture/table", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_capture/update", function($request, $response) {
		$model = new m_azs_crt_captureModel;
		$response->withJson($model->sql_azs_crt_capture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_city
	$app->post("/azs_crt_city/create", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_city/delete", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_city/file", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_city/remove", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_city/restore", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_city/state", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_city/table", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_city/update", function($request, $response) {
		$model = new m_azs_crt_cityModel;
		$response->withJson($model->sql_azs_crt_city_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_client
	$app->post("/azs_crt_client/create", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_client/delete", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_client/file", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_client/remove", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_client/restore", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_client/state", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_client/table", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_client/update", function($request, $response) {
		$model = new m_azs_crt_clientModel;
		$response->withJson($model->sql_azs_crt_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_copy_client
	$app->post("/azs_crt_copy_client/create", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_copy_client/delete", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_copy_client/file", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_copy_client/remove", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_copy_client/restore", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_copy_client/state", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_copy_client/table", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_copy_client/update", function($request, $response) {
		$model = new m_azs_crt_copy_clientModel;
		$response->withJson($model->sql_azs_crt_copy_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_department
	$app->post("/azs_crt_department/create", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_department/delete", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_department/file", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_department/remove", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_department/restore", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_department/state", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_department/table", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_department/update", function($request, $response) {
		$model = new m_azs_crt_departmentModel;
		$response->withJson($model->sql_azs_crt_department_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_email_copy
	$app->post("/azs_crt_email_copy/create", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_copy/delete", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_copy/file", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_copy/remove", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_copy/restore", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_copy/state", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_copy/table", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_copy/update", function($request, $response) {
		$model = new m_azs_crt_email_copyModel;
		$response->withJson($model->sql_azs_crt_email_copy_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_email_request
	$app->post("/azs_crt_email_request/create", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_request/delete", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_request/file", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_request/remove", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_request/restore", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_request/state", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_request/table", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_email_request/update", function($request, $response) {
		$model = new m_azs_crt_email_requestModel;
		$response->withJson($model->sql_azs_crt_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_exchange_portal
	$app->post("/azs_crt_exchange_portal/create", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_exchange_portal/delete", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_exchange_portal/file", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_exchange_portal/remove", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_exchange_portal/restore", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_exchange_portal/state", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_exchange_portal/table", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_exchange_portal/update", function($request, $response) {
		$model = new m_azs_crt_exchange_portalModel;
		$response->withJson($model->sql_azs_crt_exchange_portal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_expiration
	$app->post("/azs_crt_expiration/create", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_expiration/delete", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_expiration/file", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_expiration/remove", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_expiration/restore", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_expiration/state", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_expiration/table", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_expiration/update", function($request, $response) {
		$model = new m_azs_crt_expirationModel;
		$response->withJson($model->sql_azs_crt_expiration_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_generated_files
	$app->post("/azs_crt_generated_files/create", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_generated_files/delete", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_generated_files/file", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_generated_files/remove", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_generated_files/restore", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_generated_files/state", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_generated_files/table", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_generated_files/update", function($request, $response) {
		$model = new m_azs_crt_generated_filesModel;
		$response->withJson($model->sql_azs_crt_generated_files_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_information
	$app->post("/azs_crt_information/create", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_information/delete", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_information/file", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_information/remove", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_information/restore", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_information/state", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_information/table", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_information/update", function($request, $response) {
		$model = new m_azs_crt_informationModel;
		$response->withJson($model->sql_azs_crt_information_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_log_email
	$app->post("/azs_crt_log_email/create", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_log_email/delete", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_log_email/file", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_log_email/remove", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_log_email/restore", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_log_email/state", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_log_email/table", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_log_email/update", function($request, $response) {
		$model = new m_azs_crt_log_emailModel;
		$response->withJson($model->sql_azs_crt_log_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_observation_internal
	$app->post("/azs_crt_observation_internal/create", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_internal/delete", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_internal/file", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_internal/remove", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_internal/restore", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_internal/state", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_internal/table", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_internal/update", function($request, $response) {
		$model = new m_azs_crt_observation_internalModel;
		$response->withJson($model->sql_azs_crt_observation_internal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_observation_type
	$app->post("/azs_crt_observation_type/create", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_type/delete", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_type/file", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_type/remove", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_type/restore", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_type/state", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_type/table", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_observation_type/update", function($request, $response) {
		$model = new m_azs_crt_observation_typeModel;
		$response->withJson($model->sql_azs_crt_observation_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_phase
	$app->post("/azs_crt_phase/create", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_phase/delete", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_phase/file", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_phase/remove", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_phase/restore", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_phase/state", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_phase/table", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_phase/update", function($request, $response) {
		$model = new m_azs_crt_phaseModel;
		$response->withJson($model->sql_azs_crt_phase_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_report_inform
	$app->post("/azs_crt_report_inform/create", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_report_inform/delete", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_report_inform/file", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_report_inform/remove", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_report_inform/restore", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_report_inform/state", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_report_inform/table", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_report_inform/update", function($request, $response) {
		$model = new m_azs_crt_report_informModel;
		$response->withJson($model->sql_azs_crt_report_inform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_request_data
	$app->post("/azs_crt_request_data/create", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_data/delete", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_data/file", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_data/remove", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_data/restore", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_data/state", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_data/table", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_data/update", function($request, $response) {
		$model = new m_azs_crt_request_dataModel;
		$response->withJson($model->sql_azs_crt_request_data_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_request_import
	$app->post("/azs_crt_request_import/create", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_import/delete", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_import/file", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_import/remove", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_import/restore", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_import/state", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_import/table", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_import/update", function($request, $response) {
		$model = new m_azs_crt_request_importModel;
		$response->withJson($model->sql_azs_crt_request_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_request_type
	$app->post("/azs_crt_request_type/create", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_type/delete", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_type/file", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_type/remove", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_type/restore", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_type/state", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_type/table", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_type/update", function($request, $response) {
		$model = new m_azs_crt_request_typeModel;
		$response->withJson($model->sql_azs_crt_request_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_request_update
	$app->post("/azs_crt_request_update/create", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_update/delete", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_update/file", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_update/remove", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_update/restore", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_update/state", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_update/table", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_request_update/update", function($request, $response) {
		$model = new m_azs_crt_request_updateModel;
		$response->withJson($model->sql_azs_crt_request_update_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_third_parties
	$app->post("/azs_crt_third_parties/create", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_parties/delete", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_parties/file", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_parties/remove", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_parties/restore", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_parties/state", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_parties/table", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_parties/update", function($request, $response) {
		$model = new m_azs_crt_third_partiesModel;
		$response->withJson($model->sql_azs_crt_third_parties_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_crt_third_type
	$app->post("/azs_crt_third_type/create", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_insert($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_type/delete", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_delete($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_type/file", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_file($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_type/remove", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_remove($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_type/restore", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_restore($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_type/state", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_state($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_type/table", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_table($_POST));
		return $response;
	});
	$app->post("/azs_crt_third_type/update", function($request, $response) {
		$model = new m_azs_crt_third_typeModel;
		$response->withJson($model->sql_azs_crt_third_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_data_personal
	$app->post("/azs_data_personal/create", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_insert($_POST));
		return $response;
	});
	$app->post("/azs_data_personal/delete", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_delete($_POST));
		return $response;
	});
	$app->post("/azs_data_personal/file", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_file($_POST));
		return $response;
	});
	$app->post("/azs_data_personal/remove", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_remove($_POST));
		return $response;
	});
	$app->post("/azs_data_personal/restore", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_restore($_POST));
		return $response;
	});
	$app->post("/azs_data_personal/state", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_state($_POST));
		return $response;
	});
	$app->post("/azs_data_personal/table", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_table($_POST));
		return $response;
	});
	$app->post("/azs_data_personal/update", function($request, $response) {
		$model = new m_azs_data_personalModel;
		$response->withJson($model->sql_azs_data_personal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_def_email_request
	$app->post("/azs_def_email_request/create", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azs_def_email_request/delete", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azs_def_email_request/file", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_file($_POST));
		return $response;
	});
	$app->post("/azs_def_email_request/remove", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azs_def_email_request/restore", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azs_def_email_request/state", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_state($_POST));
		return $response;
	});
	$app->post("/azs_def_email_request/table", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_table($_POST));
		return $response;
	});
	$app->post("/azs_def_email_request/update", function($request, $response) {
		$model = new m_azs_def_email_requestModel;
		$response->withJson($model->sql_azs_def_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_document_type
	$app->post("/azs_document_type/create", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_insert($_POST));
		return $response;
	});
	$app->post("/azs_document_type/delete", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_delete($_POST));
		return $response;
	});
	$app->post("/azs_document_type/file", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_file($_POST));
		return $response;
	});
	$app->post("/azs_document_type/remove", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_remove($_POST));
		return $response;
	});
	$app->post("/azs_document_type/restore", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_restore($_POST));
		return $response;
	});
	$app->post("/azs_document_type/state", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_state($_POST));
		return $response;
	});
	$app->post("/azs_document_type/table", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_table($_POST));
		return $response;
	});
	$app->post("/azs_document_type/update", function($request, $response) {
		$model = new m_azs_document_typeModel;
		$response->withJson($model->sql_azs_document_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_email_request
	$app->post("/azs_email_request/create", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azs_email_request/delete", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azs_email_request/file", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_file($_POST));
		return $response;
	});
	$app->post("/azs_email_request/remove", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azs_email_request/restore", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azs_email_request/state", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_state($_POST));
		return $response;
	});
	$app->post("/azs_email_request/table", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_table($_POST));
		return $response;
	});
	$app->post("/azs_email_request/update", function($request, $response) {
		$model = new m_azs_email_requestModel;
		$response->withJson($model->sql_azs_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_faq
	$app->post("/azs_faq/create", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_insert($_POST));
		return $response;
	});
	$app->post("/azs_faq/delete", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_delete($_POST));
		return $response;
	});
	$app->post("/azs_faq/file", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_file($_POST));
		return $response;
	});
	$app->post("/azs_faq/remove", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_remove($_POST));
		return $response;
	});
	$app->post("/azs_faq/restore", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_restore($_POST));
		return $response;
	});
	$app->post("/azs_faq/state", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_state($_POST));
		return $response;
	});
	$app->post("/azs_faq/table", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_table($_POST));
		return $response;
	});
	$app->post("/azs_faq/update", function($request, $response) {
		$model = new m_azs_faqModel;
		$response->withJson($model->sql_azs_faq_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_certificate
	$app->post("/azs_fct_certificate/create", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_certificate/delete", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_certificate/file", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_certificate/remove", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_certificate/restore", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_certificate/state", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_certificate/table", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_certificate/update", function($request, $response) {
		$model = new m_azs_fct_certificateModel;
		$response->withJson($model->sql_azs_fct_certificate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_client
	$app->post("/azs_fct_client/create", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_client/delete", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_client/file", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_client/remove", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_client/restore", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_client/state", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_client/table", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_client/update", function($request, $response) {
		$model = new m_azs_fct_clientModel;
		$response->withJson($model->sql_azs_fct_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_coverage
	$app->post("/azs_fct_coverage/create", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_coverage/delete", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_coverage/file", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_coverage/remove", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_coverage/restore", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_coverage/state", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_coverage/table", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_coverage/update", function($request, $response) {
		$model = new m_azs_fct_coverageModel;
		$response->withJson($model->sql_azs_fct_coverage_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_defunction
	$app->post("/azs_fct_defunction/create", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_defunction/delete", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_defunction/file", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_defunction/remove", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_defunction/restore", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_defunction/state", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_defunction/table", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_defunction/update", function($request, $response) {
		$model = new m_azs_fct_defunctionModel;
		$response->withJson($model->sql_azs_fct_defunction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_honorary
	$app->post("/azs_fct_honorary/create", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_honorary/delete", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_honorary/file", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_honorary/remove", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_honorary/restore", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_honorary/state", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_honorary/table", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_honorary/update", function($request, $response) {
		$model = new m_azs_fct_honoraryModel;
		$response->withJson($model->sql_azs_fct_honorary_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_investigation
	$app->post("/azs_fct_investigation/create", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_investigation/delete", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_investigation/file", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_investigation/remove", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_investigation/restore", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_investigation/state", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_investigation/table", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_investigation/update", function($request, $response) {
		$model = new m_azs_fct_investigationModel;
		$response->withJson($model->sql_azs_fct_investigation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_invoice
	$app->post("/azs_fct_invoice/create", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_invoice/delete", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_invoice/file", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_invoice/remove", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_invoice/restore", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_invoice/state", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_invoice/table", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_invoice/update", function($request, $response) {
		$model = new m_azs_fct_invoiceModel;
		$response->withJson($model->sql_azs_fct_invoice_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_prefacture
	$app->post("/azs_fct_prefacture/create", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_prefacture/delete", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_prefacture/file", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_prefacture/remove", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_prefacture/restore", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_prefacture/state", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_prefacture/table", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_prefacture/update", function($request, $response) {
		$model = new m_azs_fct_prefactureModel;
		$response->withJson($model->sql_azs_fct_prefacture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_research
	$app->post("/azs_fct_research/create", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_research/delete", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_research/file", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_research/remove", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_research/restore", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_research/state", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_research/table", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_research/update", function($request, $response) {
		$model = new m_azs_fct_researchModel;
		$response->withJson($model->sql_azs_fct_research_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_result
	$app->post("/azs_fct_result/create", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_result/delete", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_result/file", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_result/remove", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_result/restore", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_result/state", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_result/table", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_result/update", function($request, $response) {
		$model = new m_azs_fct_resultModel;
		$response->withJson($model->sql_azs_fct_result_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_satisfactiom
	$app->post("/azs_fct_satisfactiom/create", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfactiom/delete", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfactiom/file", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfactiom/remove", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfactiom/restore", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfactiom/state", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfactiom/table", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfactiom/update", function($request, $response) {
		$model = new m_azs_fct_satisfactiomModel;
		$response->withJson($model->sql_azs_fct_satisfactiom_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_satisfaction
	$app->post("/azs_fct_satisfaction/create", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfaction/delete", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfaction/file", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfaction/remove", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfaction/restore", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfaction/state", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfaction/table", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_satisfaction/update", function($request, $response) {
		$model = new m_azs_fct_satisfactionModel;
		$response->withJson($model->sql_azs_fct_satisfaction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_scale
	$app->post("/azs_fct_scale/create", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_scale/delete", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_scale/file", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_scale/remove", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_scale/restore", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_scale/state", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_scale/table", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_scale/update", function($request, $response) {
		$model = new m_azs_fct_scaleModel;
		$response->withJson($model->sql_azs_fct_scale_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_scertificate
	$app->post("/azs_fct_scertificate/create", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_scertificate/delete", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_scertificate/file", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_scertificate/remove", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_scertificate/restore", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_scertificate/state", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_scertificate/table", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_scertificate/update", function($request, $response) {
		$model = new m_azs_fct_scertificateModel;
		$response->withJson($model->sql_azs_fct_scertificate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_sdefunction
	$app->post("/azs_fct_sdefunction/create", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_sdefunction/delete", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_sdefunction/file", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_sdefunction/remove", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_sdefunction/restore", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_sdefunction/state", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_sdefunction/table", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_sdefunction/update", function($request, $response) {
		$model = new m_azs_fct_sdefunctionModel;
		$response->withJson($model->sql_azs_fct_sdefunction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_sector
	$app->post("/azs_fct_sector/create", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_sector/delete", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_sector/file", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_sector/remove", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_sector/restore", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_sector/state", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_sector/table", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_sector/update", function($request, $response) {
		$model = new m_azs_fct_sectorModel;
		$response->withJson($model->sql_azs_fct_sector_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_service
	$app->post("/azs_fct_service/create", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_service/delete", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_service/file", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_service/remove", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_service/restore", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_service/state", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_service/table", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_service/update", function($request, $response) {
		$model = new m_azs_fct_serviceModel;
		$response->withJson($model->sql_azs_fct_service_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_sinvestigation
	$app->post("/azs_fct_sinvestigation/create", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_sinvestigation/delete", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_sinvestigation/file", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_sinvestigation/remove", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_sinvestigation/restore", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_sinvestigation/state", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_sinvestigation/table", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_sinvestigation/update", function($request, $response) {
		$model = new m_azs_fct_sinvestigationModel;
		$response->withJson($model->sql_azs_fct_sinvestigation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_sub_coverage
	$app->post("/azs_fct_sub_coverage/create", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_coverage/delete", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_coverage/file", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_coverage/remove", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_coverage/restore", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_coverage/state", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_coverage/table", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_coverage/update", function($request, $response) {
		$model = new m_azs_fct_sub_coverageModel;
		$response->withJson($model->sql_azs_fct_sub_coverage_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_sub_satisfaction
	$app->post("/azs_fct_sub_satisfaction/create", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_satisfaction/delete", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_satisfaction/file", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_satisfaction/remove", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_satisfaction/restore", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_satisfaction/state", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_satisfaction/table", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_satisfaction/update", function($request, $response) {
		$model = new m_azs_fct_sub_satisfactionModel;
		$response->withJson($model->sql_azs_fct_sub_satisfaction_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_sub_service
	$app->post("/azs_fct_sub_service/create", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_service/delete", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_service/file", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_service/remove", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_service/restore", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_service/state", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_service/table", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_sub_service/update", function($request, $response) {
		$model = new m_azs_fct_sub_serviceModel;
		$response->withJson($model->sql_azs_fct_sub_service_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fct_tariff
	$app->post("/azs_fct_tariff/create", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_insert($_POST));
		return $response;
	});
	$app->post("/azs_fct_tariff/delete", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_delete($_POST));
		return $response;
	});
	$app->post("/azs_fct_tariff/file", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_file($_POST));
		return $response;
	});
	$app->post("/azs_fct_tariff/remove", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_remove($_POST));
		return $response;
	});
	$app->post("/azs_fct_tariff/restore", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_restore($_POST));
		return $response;
	});
	$app->post("/azs_fct_tariff/state", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_state($_POST));
		return $response;
	});
	$app->post("/azs_fct_tariff/table", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_table($_POST));
		return $response;
	});
	$app->post("/azs_fct_tariff/update", function($request, $response) {
		$model = new m_azs_fct_tariffModel;
		$response->withJson($model->sql_azs_fct_tariff_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fdp_benefits
	$app->post("/azs_fdp_benefits/create", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_insert($_POST));
		return $response;
	});
	$app->post("/azs_fdp_benefits/delete", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_delete($_POST));
		return $response;
	});
	$app->post("/azs_fdp_benefits/file", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_file($_POST));
		return $response;
	});
	$app->post("/azs_fdp_benefits/remove", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_remove($_POST));
		return $response;
	});
	$app->post("/azs_fdp_benefits/restore", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_restore($_POST));
		return $response;
	});
	$app->post("/azs_fdp_benefits/state", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_state($_POST));
		return $response;
	});
	$app->post("/azs_fdp_benefits/table", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_table($_POST));
		return $response;
	});
	$app->post("/azs_fdp_benefits/update", function($request, $response) {
		$model = new m_azs_fdp_benefitsModel;
		$response->withJson($model->sql_azs_fdp_benefits_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_fdp_sxm
	$app->post("/azs_fdp_sxm/create", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_insert($_POST));
		return $response;
	});
	$app->post("/azs_fdp_sxm/delete", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_delete($_POST));
		return $response;
	});
	$app->post("/azs_fdp_sxm/file", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_file($_POST));
		return $response;
	});
	$app->post("/azs_fdp_sxm/remove", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_remove($_POST));
		return $response;
	});
	$app->post("/azs_fdp_sxm/restore", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_restore($_POST));
		return $response;
	});
	$app->post("/azs_fdp_sxm/state", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_state($_POST));
		return $response;
	});
	$app->post("/azs_fdp_sxm/table", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_table($_POST));
		return $response;
	});
	$app->post("/azs_fdp_sxm/update", function($request, $response) {
		$model = new m_azs_fdp_sxmModel;
		$response->withJson($model->sql_azs_fdp_sxm_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_alert
	$app->post("/azs_gsc_alert/create", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_alert/delete", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_alert/file", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_alert/remove", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_alert/restore", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_alert/state", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_alert/table", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_alert/update", function($request, $response) {
		$model = new m_azs_gsc_alertModel;
		$response->withJson($model->sql_azs_gsc_alert_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_capture
	$app->post("/azs_gsc_capture/create", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_capture/delete", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_capture/file", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_capture/remove", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_capture/restore", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_capture/state", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_capture/table", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_capture/update", function($request, $response) {
		$model = new m_azs_gsc_captureModel;
		$response->withJson($model->sql_azs_gsc_capture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_causal
	$app->post("/azs_gsc_causal/create", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_causal/delete", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_causal/file", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_causal/remove", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_causal/restore", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_causal/state", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_causal/table", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_causal/update", function($request, $response) {
		$model = new m_azs_gsc_causalModel;
		$response->withJson($model->sql_azs_gsc_causal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_city
	$app->post("/azs_gsc_city/create", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_city/delete", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_city/file", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_city/remove", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_city/restore", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_city/state", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_city/table", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_city/update", function($request, $response) {
		$model = new m_azs_gsc_cityModel;
		$response->withJson($model->sql_azs_gsc_city_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_client
	$app->post("/azs_gsc_client/create", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_client/delete", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_client/file", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_client/remove", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_client/restore", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_client/state", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_client/table", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_client/update", function($request, $response) {
		$model = new m_azs_gsc_clientModel;
		$response->withJson($model->sql_azs_gsc_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_consignment
	$app->post("/azs_gsc_consignment/create", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_consignment/delete", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_consignment/file", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_consignment/remove", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_consignment/restore", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_consignment/state", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_consignment/table", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_consignment/update", function($request, $response) {
		$model = new m_azs_gsc_consignmentModel;
		$response->withJson($model->sql_azs_gsc_consignment_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_department
	$app->post("/azs_gsc_department/create", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_department/delete", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_department/file", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_department/remove", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_department/restore", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_department/state", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_department/table", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_department/update", function($request, $response) {
		$model = new m_azs_gsc_departmentModel;
		$response->withJson($model->sql_azs_gsc_department_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_duplicate
	$app->post("/azs_gsc_duplicate/create", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_duplicate/delete", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_duplicate/file", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_duplicate/remove", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_duplicate/restore", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_duplicate/state", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_duplicate/table", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_duplicate/update", function($request, $response) {
		$model = new m_azs_gsc_duplicateModel;
		$response->withJson($model->sql_azs_gsc_duplicate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_email_copy
	$app->post("/azs_gsc_email_copy/create", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_copy/delete", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_copy/file", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_copy/remove", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_copy/restore", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_copy/state", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_copy/table", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_copy/update", function($request, $response) {
		$model = new m_azs_gsc_email_copyModel;
		$response->withJson($model->sql_azs_gsc_email_copy_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_email_request
	$app->post("/azs_gsc_email_request/create", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_request/delete", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_request/file", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_request/remove", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_request/restore", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_request/state", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_request/table", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_email_request/update", function($request, $response) {
		$model = new m_azs_gsc_email_requestModel;
		$response->withJson($model->sql_azs_gsc_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_exchange_portal
	$app->post("/azs_gsc_exchange_portal/create", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_exchange_portal/delete", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_exchange_portal/file", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_exchange_portal/remove", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_exchange_portal/restore", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_exchange_portal/state", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_exchange_portal/table", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_exchange_portal/update", function($request, $response) {
		$model = new m_azs_gsc_exchange_portalModel;
		$response->withJson($model->sql_azs_gsc_exchange_portal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_expiration
	$app->post("/azs_gsc_expiration/create", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_expiration/delete", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_expiration/file", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_expiration/remove", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_expiration/restore", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_expiration/state", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_expiration/table", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_expiration/update", function($request, $response) {
		$model = new m_azs_gsc_expirationModel;
		$response->withJson($model->sql_azs_gsc_expiration_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_follow_email
	$app->post("/azs_gsc_follow_email/create", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_follow_email/delete", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_follow_email/file", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_follow_email/remove", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_follow_email/restore", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_follow_email/state", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_follow_email/table", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_follow_email/update", function($request, $response) {
		$model = new m_azs_gsc_follow_emailModel;
		$response->withJson($model->sql_azs_gsc_follow_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_generated_files
	$app->post("/azs_gsc_generated_files/create", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_generated_files/delete", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_generated_files/file", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_generated_files/remove", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_generated_files/restore", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_generated_files/state", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_generated_files/table", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_generated_files/update", function($request, $response) {
		$model = new m_azs_gsc_generated_filesModel;
		$response->withJson($model->sql_azs_gsc_generated_files_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_import
	$app->post("/azs_gsc_import/create", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_import/delete", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_import/file", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_import/remove", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_import/restore", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_import/state", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_import/table", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_import/update", function($request, $response) {
		$model = new m_azs_gsc_importModel;
		$response->withJson($model->sql_azs_gsc_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_information
	$app->post("/azs_gsc_information/create", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_information/delete", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_information/file", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_information/remove", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_information/restore", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_information/state", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_information/table", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_information/update", function($request, $response) {
		$model = new m_azs_gsc_informationModel;
		$response->withJson($model->sql_azs_gsc_information_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_label
	$app->post("/azs_gsc_label/create", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_label/delete", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_label/file", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_label/remove", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_label/restore", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_label/state", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_label/table", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_label/update", function($request, $response) {
		$model = new m_azs_gsc_labelModel;
		$response->withJson($model->sql_azs_gsc_label_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_log_email
	$app->post("/azs_gsc_log_email/create", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_log_email/delete", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_log_email/file", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_log_email/remove", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_log_email/restore", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_log_email/state", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_log_email/table", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_log_email/update", function($request, $response) {
		$model = new m_azs_gsc_log_emailModel;
		$response->withJson($model->sql_azs_gsc_log_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_logs_request
	$app->post("/azs_gsc_logs_request/create", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_logs_request/delete", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_logs_request/file", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_logs_request/remove", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_logs_request/restore", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_logs_request/state", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_logs_request/table", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_logs_request/update", function($request, $response) {
		$model = new m_azs_gsc_logs_requestModel;
		$response->withJson($model->sql_azs_gsc_logs_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_notary
	$app->post("/azs_gsc_notary/create", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_notary/delete", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_notary/file", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_notary/remove", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_notary/restore", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_notary/state", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_notary/table", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_notary/update", function($request, $response) {
		$model = new m_azs_gsc_notaryModel;
		$response->withJson($model->sql_azs_gsc_notary_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_observation_internal
	$app->post("/azs_gsc_observation_internal/create", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_observation_internal/delete", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_observation_internal/file", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_observation_internal/remove", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_observation_internal/restore", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_observation_internal/state", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_observation_internal/table", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_observation_internal/update", function($request, $response) {
		$model = new m_azs_gsc_observation_internalModel;
		$response->withJson($model->sql_azs_gsc_observation_internal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_phase
	$app->post("/azs_gsc_phase/create", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_phase/delete", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_phase/file", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_phase/remove", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_phase/restore", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_phase/state", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_phase/table", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_phase/update", function($request, $response) {
		$model = new m_azs_gsc_phaseModel;
		$response->withJson($model->sql_azs_gsc_phase_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_plan_action
	$app->post("/azs_gsc_plan_action/create", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_plan_action/delete", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_plan_action/file", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_plan_action/remove", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_plan_action/restore", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_plan_action/state", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_plan_action/table", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_plan_action/update", function($request, $response) {
		$model = new m_azs_gsc_plan_actionModel;
		$response->withJson($model->sql_azs_gsc_plan_action_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_registration
	$app->post("/azs_gsc_registration/create", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration/delete", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration/file", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration/remove", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration/restore", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration/state", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration/table", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration/update", function($request, $response) {
		$model = new m_azs_gsc_registrationModel;
		$response->withJson($model->sql_azs_gsc_registration_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_registration_import
	$app->post("/azs_gsc_registration_import/create", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration_import/delete", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration_import/file", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration_import/remove", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration_import/restore", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration_import/state", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration_import/table", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_registration_import/update", function($request, $response) {
		$model = new m_azs_gsc_registration_importModel;
		$response->withJson($model->sql_azs_gsc_registration_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_report_inform
	$app->post("/azs_gsc_report_inform/create", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_report_inform/delete", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_report_inform/file", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_report_inform/remove", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_report_inform/restore", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_report_inform/state", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_report_inform/table", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_report_inform/update", function($request, $response) {
		$model = new m_azs_gsc_report_informModel;
		$response->withJson($model->sql_azs_gsc_report_inform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_request
	$app->post("/azs_gsc_request/create", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_request/delete", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_request/file", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_request/remove", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_request/restore", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_request/state", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_request/table", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_request/update", function($request, $response) {
		$model = new m_azs_gsc_requestModel;
		$response->withJson($model->sql_azs_gsc_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_state
	$app->post("/azs_gsc_state/create", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_state/delete", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_state/file", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_state/remove", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_state/restore", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_state/state", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_state/table", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_state/update", function($request, $response) {
		$model = new m_azs_gsc_stateModel;
		$response->withJson($model->sql_azs_gsc_state_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_third_parties
	$app->post("/azs_gsc_third_parties/create", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_third_parties/delete", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_third_parties/file", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_third_parties/remove", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_third_parties/restore", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_third_parties/state", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_third_parties/table", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_third_parties/update", function($request, $response) {
		$model = new m_azs_gsc_third_partiesModel;
		$response->withJson($model->sql_azs_gsc_third_parties_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_type_third
	$app->post("/azs_gsc_type_third/create", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_type_third/delete", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_type_third/file", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_type_third/remove", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_type_third/restore", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_type_third/state", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_type_third/table", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_type_third/update", function($request, $response) {
		$model = new m_azs_gsc_type_thirdModel;
		$response->withJson($model->sql_azs_gsc_type_third_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_update
	$app->post("/azs_gsc_update/create", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_update/delete", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_update/file", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_update/remove", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_update/restore", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_update/state", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_update/table", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_update/update", function($request, $response) {
		$model = new m_azs_gsc_updateModel;
		$response->withJson($model->sql_azs_gsc_update_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_gsc_web_service
	$app->post("/azs_gsc_web_service/create", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_insert($_POST));
		return $response;
	});
	$app->post("/azs_gsc_web_service/delete", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_delete($_POST));
		return $response;
	});
	$app->post("/azs_gsc_web_service/file", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_file($_POST));
		return $response;
	});
	$app->post("/azs_gsc_web_service/remove", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_remove($_POST));
		return $response;
	});
	$app->post("/azs_gsc_web_service/restore", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_restore($_POST));
		return $response;
	});
	$app->post("/azs_gsc_web_service/state", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_state($_POST));
		return $response;
	});
	$app->post("/azs_gsc_web_service/table", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_table($_POST));
		return $response;
	});
	$app->post("/azs_gsc_web_service/update", function($request, $response) {
		$model = new m_azs_gsc_web_serviceModel;
		$response->withJson($model->sql_azs_gsc_web_service_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_binnacle
	$app->post("/azs_ibn_binnacle/create", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_binnacle/delete", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_binnacle/file", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_binnacle/remove", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_binnacle/restore", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_binnacle/state", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_binnacle/table", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_binnacle/update", function($request, $response) {
		$model = new m_azs_ibn_binnacleModel;
		$response->withJson($model->sql_azs_ibn_binnacle_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_calendar_festive
	$app->post("/azs_ibn_calendar_festive/create", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calendar_festive/delete", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calendar_festive/file", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calendar_festive/remove", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calendar_festive/restore", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calendar_festive/state", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calendar_festive/table", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calendar_festive/update", function($request, $response) {
		$model = new m_azs_ibn_calendar_festiveModel;
		$response->withJson($model->sql_azs_ibn_calendar_festive_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_calification
	$app->post("/azs_ibn_calification/create", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calification/delete", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calification/file", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calification/remove", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calification/restore", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calification/state", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calification/table", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_calification/update", function($request, $response) {
		$model = new m_azs_ibn_calificationModel;
		$response->withJson($model->sql_azs_ibn_calification_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_camera
	$app->post("/azs_ibn_camera/create", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera/delete", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera/file", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera/remove", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera/restore", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera/state", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera/table", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera/update", function($request, $response) {
		$model = new m_azs_ibn_cameraModel;
		$response->withJson($model->sql_azs_ibn_camera_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_camera_import
	$app->post("/azs_ibn_camera_import/create", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera_import/delete", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera_import/file", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera_import/remove", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera_import/restore", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera_import/state", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera_import/table", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_camera_import/update", function($request, $response) {
		$model = new m_azs_ibn_camera_importModel;
		$response->withJson($model->sql_azs_ibn_camera_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_capture
	$app->post("/azs_ibn_capture/create", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_capture/delete", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_capture/file", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_capture/remove", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_capture/restore", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_capture/state", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_capture/table", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_capture/update", function($request, $response) {
		$model = new m_azs_ibn_captureModel;
		$response->withJson($model->sql_azs_ibn_capture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_client
	$app->post("/azs_ibn_client/create", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_client/delete", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_client/file", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_client/remove", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_client/restore", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_client/state", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_client/table", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_client/update", function($request, $response) {
		$model = new m_azs_ibn_clientModel;
		$response->withJson($model->sql_azs_ibn_client_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_compress
	$app->post("/azs_ibn_compress/create", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_compress/delete", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_compress/file", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_compress/remove", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_compress/restore", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_compress/state", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_compress/table", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_compress/update", function($request, $response) {
		$model = new m_azs_ibn_compressModel;
		$response->withJson($model->sql_azs_ibn_compress_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_concept
	$app->post("/azs_ibn_concept/create", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_concept/delete", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_concept/file", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_concept/remove", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_concept/restore", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_concept/state", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_concept/table", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_concept/update", function($request, $response) {
		$model = new m_azs_ibn_conceptModel;
		$response->withJson($model->sql_azs_ibn_concept_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_conditional
	$app->post("/azs_ibn_conditional/create", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_conditional/delete", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_conditional/file", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_conditional/remove", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_conditional/restore", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_conditional/state", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_conditional/table", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_conditional/update", function($request, $response) {
		$model = new m_azs_ibn_conditionalModel;
		$response->withJson($model->sql_azs_ibn_conditional_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_control_panel
	$app->post("/azs_ibn_control_panel/create", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_control_panel/delete", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_control_panel/file", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_control_panel/remove", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_control_panel/restore", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_control_panel/state", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_control_panel/table", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_control_panel/update", function($request, $response) {
		$model = new m_azs_ibn_control_panelModel;
		$response->withJson($model->sql_azs_ibn_control_panel_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_data_main
	$app->post("/azs_ibn_data_main/create", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_data_main/delete", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_data_main/file", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_data_main/remove", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_data_main/restore", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_data_main/state", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_data_main/table", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_data_main/update", function($request, $response) {
		$model = new m_azs_ibn_data_mainModel;
		$response->withJson($model->sql_azs_ibn_data_main_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_email
	$app->post("/azs_ibn_email/create", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email/delete", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email/file", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email/remove", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email/restore", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email/state", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email/table", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email/update", function($request, $response) {
		$model = new m_azs_ibn_emailModel;
		$response->withJson($model->sql_azs_ibn_email_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_email_request
	$app->post("/azs_ibn_email_request/create", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email_request/delete", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email_request/file", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email_request/remove", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email_request/restore", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email_request/state", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email_request/table", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_email_request/update", function($request, $response) {
		$model = new m_azs_ibn_email_requestModel;
		$response->withJson($model->sql_azs_ibn_email_request_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_evaluation
	$app->post("/azs_ibn_evaluation/create", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_evaluation/delete", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_evaluation/file", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_evaluation/remove", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_evaluation/restore", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_evaluation/state", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_evaluation/table", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_evaluation/update", function($request, $response) {
		$model = new m_azs_ibn_evaluationModel;
		$response->withJson($model->sql_azs_ibn_evaluation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_exchange_portal
	$app->post("/azs_ibn_exchange_portal/create", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_exchange_portal/delete", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_exchange_portal/file", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_exchange_portal/remove", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_exchange_portal/restore", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_exchange_portal/state", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_exchange_portal/table", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_exchange_portal/update", function($request, $response) {
		$model = new m_azs_ibn_exchange_portalModel;
		$response->withJson($model->sql_azs_ibn_exchange_portal_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_files
	$app->post("/azs_ibn_files/create", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_files/delete", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_files/file", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_files/remove", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_files/restore", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_files/state", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_files/table", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_files/update", function($request, $response) {
		$model = new m_azs_ibn_filesModel;
		$response->withJson($model->sql_azs_ibn_files_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_format_file
	$app->post("/azs_ibn_format_file/create", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_file/delete", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_file/file", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_file/remove", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_file/restore", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_file/state", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_file/table", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_file/update", function($request, $response) {
		$model = new m_azs_ibn_format_fileModel;
		$response->withJson($model->sql_azs_ibn_format_file_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_format_gantt
	$app->post("/azs_ibn_format_gantt/create", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_gantt/delete", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_gantt/file", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_gantt/remove", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_gantt/restore", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_gantt/state", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_gantt/table", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_gantt/update", function($request, $response) {
		$model = new m_azs_ibn_format_ganttModel;
		$response->withJson($model->sql_azs_ibn_format_gantt_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_format_type
	$app->post("/azs_ibn_format_type/create", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_type/delete", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_type/file", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_type/remove", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_type/restore", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_type/state", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_type/table", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_format_type/update", function($request, $response) {
		$model = new m_azs_ibn_format_typeModel;
		$response->withJson($model->sql_azs_ibn_format_type_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_furniture
	$app->post("/azs_ibn_furniture/create", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture/delete", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture/file", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture/remove", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture/restore", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture/state", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture/table", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture/update", function($request, $response) {
		$model = new m_azs_ibn_furnitureModel;
		$response->withJson($model->sql_azs_ibn_furniture_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_furniture_import
	$app->post("/azs_ibn_furniture_import/create", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture_import/delete", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture_import/file", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture_import/remove", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture_import/restore", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture_import/state", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture_import/table", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_furniture_import/update", function($request, $response) {
		$model = new m_azs_ibn_furniture_importModel;
		$response->withJson($model->sql_azs_ibn_furniture_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_imagespress
	$app->post("/azs_ibn_imagespress/create", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_imagespress/delete", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_imagespress/file", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_imagespress/remove", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_imagespress/restore", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_imagespress/state", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_imagespress/table", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_imagespress/update", function($request, $response) {
		$model = new m_azs_ibn_imagespressModel;
		$response->withJson($model->sql_azs_ibn_imagespress_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_information
	$app->post("/azs_ibn_information/create", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_information/delete", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_information/file", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_information/remove", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_information/restore", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_information/state", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_information/table", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_information/update", function($request, $response) {
		$model = new m_azs_ibn_informationModel;
		$response->withJson($model->sql_azs_ibn_information_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_interface_dit
	$app->post("/azs_ibn_interface_dit/create", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_interface_dit/delete", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_interface_dit/file", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_interface_dit/remove", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_interface_dit/restore", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_interface_dit/state", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_interface_dit/table", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_interface_dit/update", function($request, $response) {
		$model = new m_azs_ibn_interface_ditModel;
		$response->withJson($model->sql_azs_ibn_interface_dit_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_limitation
	$app->post("/azs_ibn_limitation/create", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_limitation/delete", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_limitation/file", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_limitation/remove", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_limitation/restore", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_limitation/state", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_limitation/table", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_limitation/update", function($request, $response) {
		$model = new m_azs_ibn_limitationModel;
		$response->withJson($model->sql_azs_ibn_limitation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_mass_load
	$app->post("/azs_ibn_mass_load/create", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_mass_load/delete", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_mass_load/file", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_mass_load/remove", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_mass_load/restore", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_mass_load/state", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_mass_load/table", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_mass_load/update", function($request, $response) {
		$model = new m_azs_ibn_mass_loadModel;
		$response->withJson($model->sql_azs_ibn_mass_load_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_module
	$app->post("/azs_ibn_module/create", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_module/delete", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_module/file", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_module/remove", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_module/restore", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_module/state", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_module/table", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_module/update", function($request, $response) {
		$model = new m_azs_ibn_moduleModel;
		$response->withJson($model->sql_azs_ibn_module_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_observation
	$app->post("/azs_ibn_observation/create", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_observation/delete", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_observation/file", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_observation/remove", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_observation/restore", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_observation/state", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_observation/table", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_observation/update", function($request, $response) {
		$model = new m_azs_ibn_observationModel;
		$response->withJson($model->sql_azs_ibn_observation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_outcome
	$app->post("/azs_ibn_outcome/create", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_outcome/delete", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_outcome/file", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_outcome/remove", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_outcome/restore", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_outcome/state", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_outcome/table", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_outcome/update", function($request, $response) {
		$model = new m_azs_ibn_outcomeModel;
		$response->withJson($model->sql_azs_ibn_outcome_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_pdf_cell
	$app->post("/azs_ibn_pdf_cell/create", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_cell/delete", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_cell/file", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_cell/remove", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_cell/restore", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_cell/state", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_cell/table", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_cell/update", function($request, $response) {
		$model = new m_azs_ibn_pdf_cellModel;
		$response->withJson($model->sql_azs_ibn_pdf_cell_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_pdf_fill_color
	$app->post("/azs_ibn_pdf_fill_color/create", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_fill_color/delete", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_fill_color/file", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_fill_color/remove", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_fill_color/restore", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_fill_color/state", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_fill_color/table", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_fill_color/update", function($request, $response) {
		$model = new m_azs_ibn_pdf_fill_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_fill_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_pdf_font
	$app->post("/azs_ibn_pdf_font/create", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_font/delete", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_font/file", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_font/remove", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_font/restore", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_font/state", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_font/table", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_font/update", function($request, $response) {
		$model = new m_azs_ibn_pdf_fontModel;
		$response->withJson($model->sql_azs_ibn_pdf_font_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_pdf_text_color
	$app->post("/azs_ibn_pdf_text_color/create", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_text_color/delete", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_text_color/file", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_text_color/remove", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_text_color/restore", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_text_color/state", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_text_color/table", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_pdf_text_color/update", function($request, $response) {
		$model = new m_azs_ibn_pdf_text_colorModel;
		$response->withJson($model->sql_azs_ibn_pdf_text_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_policy
	$app->post("/azs_ibn_policy/create", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_policy/delete", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_policy/file", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_policy/remove", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_policy/restore", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_policy/state", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_policy/table", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_policy/update", function($request, $response) {
		$model = new m_azs_ibn_policyModel;
		$response->withJson($model->sql_azs_ibn_policy_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_property
	$app->post("/azs_ibn_property/create", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property/delete", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property/file", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property/remove", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property/restore", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property/state", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property/table", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property/update", function($request, $response) {
		$model = new m_azs_ibn_propertyModel;
		$response->withJson($model->sql_azs_ibn_property_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_property_import
	$app->post("/azs_ibn_property_import/create", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property_import/delete", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property_import/file", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property_import/remove", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property_import/restore", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property_import/state", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property_import/table", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_property_import/update", function($request, $response) {
		$model = new m_azs_ibn_property_importModel;
		$response->withJson($model->sql_azs_ibn_property_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_rank
	$app->post("/azs_ibn_rank/create", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_rank/delete", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_rank/file", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_rank/remove", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_rank/restore", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_rank/state", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_rank/table", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_rank/update", function($request, $response) {
		$model = new m_azs_ibn_rankModel;
		$response->withJson($model->sql_azs_ibn_rank_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_regime
	$app->post("/azs_ibn_regime/create", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regime/delete", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regime/file", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regime/remove", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regime/restore", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regime/state", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regime/table", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regime/update", function($request, $response) {
		$model = new m_azs_ibn_regimeModel;
		$response->withJson($model->sql_azs_ibn_regime_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_regulation
	$app->post("/azs_ibn_regulation/create", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regulation/delete", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regulation/file", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regulation/remove", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regulation/restore", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regulation/state", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regulation/table", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_regulation/update", function($request, $response) {
		$model = new m_azs_ibn_regulationModel;
		$response->withJson($model->sql_azs_ibn_regulation_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_consolidated
	$app->post("/azs_ibn_report_consolidated/create", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_consolidated/delete", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_consolidated/file", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_consolidated/remove", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_consolidated/restore", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_consolidated/state", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_consolidated/table", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_consolidated/update", function($request, $response) {
		$model = new m_azs_ibn_report_consolidatedModel;
		$response->withJson($model->sql_azs_ibn_report_consolidated_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_gantt
	$app->post("/azs_ibn_report_gantt/create", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_gantt/delete", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_gantt/file", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_gantt/remove", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_gantt/restore", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_gantt/state", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_gantt/table", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_gantt/update", function($request, $response) {
		$model = new m_azs_ibn_report_ganttModel;
		$response->withJson($model->sql_azs_ibn_report_gantt_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_general
	$app->post("/azs_ibn_report_general/create", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_general/delete", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_general/file", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_general/remove", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_general/restore", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_general/state", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_general/table", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_general/update", function($request, $response) {
		$model = new m_azs_ibn_report_generalModel;
		$response->withJson($model->sql_azs_ibn_report_general_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_inform
	$app->post("/azs_ibn_report_inform/create", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_inform/delete", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_inform/file", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_inform/remove", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_inform/restore", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_inform/state", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_inform/table", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_inform/update", function($request, $response) {
		$model = new m_azs_ibn_report_informModel;
		$response->withJson($model->sql_azs_ibn_report_inform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_agrario
	$app->post("/azs_ibn_report_structure_agrario/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_agrario/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_agrario/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_agrario/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_agrario/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_agrario/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_agrario/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_agrario/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_agrarioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_agrario_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_banco_bbva
	$app->post("/azs_ibn_report_structure_banco_bbva/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bbva/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bbva/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bbva/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bbva/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bbva/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bbva/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bbva/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bbvaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bbva_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_banco_bogota
	$app->post("/azs_ibn_report_structure_banco_bogota/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bogota/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bogota/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bogota/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bogota/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bogota/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bogota/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_bogota/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_bogota_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_banco_popular
	$app->post("/azs_ibn_report_structure_banco_popular/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_popular/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_popular/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_popular/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_popular/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_popular/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_popular/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_banco_popular/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_banco_popularModel;
		$response->withJson($model->sql_azs_ibn_report_structure_banco_popular_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_coface
	$app->post("/azs_ibn_report_structure_coface/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_coface/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_coface/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_coface/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_coface/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_coface/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_coface/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_coface/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_cofaceModel;
		$response->withJson($model->sql_azs_ibn_report_structure_coface_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_comercial
	$app->post("/azs_ibn_report_structure_comercial/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_comercial/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_comercial/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_comercial/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_comercial/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_comercial/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_comercial/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_comercial/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_comercialModel;
		$response->withJson($model->sql_azs_ibn_report_structure_comercial_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_fincomercio
	$app->post("/azs_ibn_report_structure_fincomercio/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_fincomercio/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_fincomercio/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_fincomercio/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_fincomercio/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_fincomercio/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_fincomercio/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_fincomercio/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_fincomercioModel;
		$response->withJson($model->sql_azs_ibn_report_structure_fincomercio_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_ics_bogota
	$app->post("/azs_ibn_report_structure_ics_bogota/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_ics_bogota/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_ics_bogota/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_ics_bogota/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_ics_bogota/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_ics_bogota/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_ics_bogota/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_ics_bogota/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_ics_bogotaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_ics_bogota_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_propia
	$app->post("/azs_ibn_report_structure_propia/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_propia/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_propia/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_propia/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_propia/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_propia/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_propia/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_propia/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_propiaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_propia_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_report_structure_protecsa
	$app->post("/azs_ibn_report_structure_protecsa/create", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_protecsa/delete", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_protecsa/file", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_protecsa/remove", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_protecsa/restore", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_protecsa/state", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_protecsa/table", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_report_structure_protecsa/update", function($request, $response) {
		$model = new m_azs_ibn_report_structure_protecsaModel;
		$response->withJson($model->sql_azs_ibn_report_structure_protecsa_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_sector
	$app->post("/azs_ibn_sector/create", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_sector/delete", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_sector/file", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_sector/remove", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_sector/restore", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_sector/state", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_sector/table", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_sector/update", function($request, $response) {
		$model = new m_azs_ibn_sectorModel;
		$response->withJson($model->sql_azs_ibn_sector_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_state
	$app->post("/azs_ibn_state/create", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_state/delete", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_state/file", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_state/remove", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_state/restore", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_state/state", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_state/table", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_state/update", function($request, $response) {
		$model = new m_azs_ibn_stateModel;
		$response->withJson($model->sql_azs_ibn_state_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_supplier
	$app->post("/azs_ibn_supplier/create", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_supplier/delete", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_supplier/file", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_supplier/remove", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_supplier/restore", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_supplier/state", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_supplier/table", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_supplier/update", function($request, $response) {
		$model = new m_azs_ibn_supplierModel;
		$response->withJson($model->sql_azs_ibn_supplier_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_table_field
	$app->post("/azs_ibn_table_field/create", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_table_field/delete", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_table_field/file", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_table_field/remove", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_table_field/restore", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_table_field/state", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_table_field/table", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_table_field/update", function($request, $response) {
		$model = new m_azs_ibn_table_fieldModel;
		$response->withJson($model->sql_azs_ibn_table_field_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_type_affiliate
	$app->post("/azs_ibn_type_affiliate/create", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_affiliate/delete", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_affiliate/file", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_affiliate/remove", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_affiliate/restore", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_affiliate/state", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_affiliate/table", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_affiliate/update", function($request, $response) {
		$model = new m_azs_ibn_type_affiliateModel;
		$response->withJson($model->sql_azs_ibn_type_affiliate_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_type_certified
	$app->post("/azs_ibn_type_certified/create", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_certified/delete", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_certified/file", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_certified/remove", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_certified/restore", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_certified/state", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_certified/table", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_certified/update", function($request, $response) {
		$model = new m_azs_ibn_type_certifiedModel;
		$response->withJson($model->sql_azs_ibn_type_certified_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_type_concept
	$app->post("/azs_ibn_type_concept/create", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_concept/delete", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_concept/file", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_concept/remove", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_concept/restore", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_concept/state", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_concept/table", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_concept/update", function($request, $response) {
		$model = new m_azs_ibn_type_conceptModel;
		$response->withJson($model->sql_azs_ibn_type_concept_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_type_condition
	$app->post("/azs_ibn_type_condition/create", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_condition/delete", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_condition/file", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_condition/remove", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_condition/restore", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_condition/state", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_condition/table", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_condition/update", function($request, $response) {
		$model = new m_azs_ibn_type_conditionModel;
		$response->withJson($model->sql_azs_ibn_type_condition_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_type_contributor
	$app->post("/azs_ibn_type_contributor/create", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_contributor/delete", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_contributor/file", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_contributor/remove", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_contributor/restore", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_contributor/state", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_contributor/table", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_contributor/update", function($request, $response) {
		$model = new m_azs_ibn_type_contributorModel;
		$response->withJson($model->sql_azs_ibn_type_contributor_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_type_property
	$app->post("/azs_ibn_type_property/create", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_property/delete", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_property/file", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_property/remove", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_property/restore", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_property/state", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_property/table", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_type_property/update", function($request, $response) {
		$model = new m_azs_ibn_type_propertyModel;
		$response->withJson($model->sql_azs_ibn_type_property_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_vehicle
	$app->post("/azs_ibn_vehicle/create", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle/delete", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle/file", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle/remove", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle/restore", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle/state", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle/table", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle/update", function($request, $response) {
		$model = new m_azs_ibn_vehicleModel;
		$response->withJson($model->sql_azs_ibn_vehicle_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_vehicle_import
	$app->post("/azs_ibn_vehicle_import/create", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle_import/delete", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle_import/file", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle_import/remove", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle_import/restore", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle_import/state", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle_import/table", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_vehicle_import/update", function($request, $response) {
		$model = new m_azs_ibn_vehicle_importModel;
		$response->withJson($model->sql_azs_ibn_vehicle_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_warranty
	$app->post("/azs_ibn_warranty/create", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty/delete", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty/file", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty/remove", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty/restore", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty/state", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty/table", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty/update", function($request, $response) {
		$model = new m_azs_ibn_warrantyModel;
		$response->withJson($model->sql_azs_ibn_warranty_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_ibn_warranty_import
	$app->post("/azs_ibn_warranty_import/create", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_insert($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty_import/delete", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_delete($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty_import/file", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_file($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty_import/remove", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_remove($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty_import/restore", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_restore($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty_import/state", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_state($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty_import/table", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_table($_POST));
		return $response;
	});
	$app->post("/azs_ibn_warranty_import/update", function($request, $response) {
		$model = new m_azs_ibn_warranty_importModel;
		$response->withJson($model->sql_azs_ibn_warranty_import_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_icon_category
	$app->post("/azs_icon_category/create", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_insert($_POST));
		return $response;
	});
	$app->post("/azs_icon_category/delete", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_delete($_POST));
		return $response;
	});
	$app->post("/azs_icon_category/file", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_file($_POST));
		return $response;
	});
	$app->post("/azs_icon_category/remove", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_remove($_POST));
		return $response;
	});
	$app->post("/azs_icon_category/restore", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_restore($_POST));
		return $response;
	});
	$app->post("/azs_icon_category/state", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_state($_POST));
		return $response;
	});
	$app->post("/azs_icon_category/table", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_table($_POST));
		return $response;
	});
	$app->post("/azs_icon_category/update", function($request, $response) {
		$model = new m_azs_icon_categoryModel;
		$response->withJson($model->sql_azs_icon_category_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_icon_code
	$app->post("/azs_icon_code/create", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_insert($_POST));
		return $response;
	});
	$app->post("/azs_icon_code/delete", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_delete($_POST));
		return $response;
	});
	$app->post("/azs_icon_code/file", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_file($_POST));
		return $response;
	});
	$app->post("/azs_icon_code/remove", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_remove($_POST));
		return $response;
	});
	$app->post("/azs_icon_code/restore", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_restore($_POST));
		return $response;
	});
	$app->post("/azs_icon_code/state", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_state($_POST));
		return $response;
	});
	$app->post("/azs_icon_code/table", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_table($_POST));
		return $response;
	});
	$app->post("/azs_icon_code/update", function($request, $response) {
		$model = new m_azs_icon_codeModel;
		$response->withJson($model->sql_azs_icon_code_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_menu_crud
	$app->post("/azs_menu_crud/create", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_insert($_POST));
		return $response;
	});
	$app->post("/azs_menu_crud/delete", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_delete($_POST));
		return $response;
	});
	$app->post("/azs_menu_crud/file", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_file($_POST));
		return $response;
	});
	$app->post("/azs_menu_crud/remove", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_remove($_POST));
		return $response;
	});
	$app->post("/azs_menu_crud/restore", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_restore($_POST));
		return $response;
	});
	$app->post("/azs_menu_crud/state", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_state($_POST));
		return $response;
	});
	$app->post("/azs_menu_crud/table", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_table($_POST));
		return $response;
	});
	$app->post("/azs_menu_crud/update", function($request, $response) {
		$model = new m_azs_menu_crudModel;
		$response->withJson($model->sql_azs_menu_crud_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_menu_main
	$app->post("/azs_menu_main/create", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_insert($_POST));
		return $response;
	});
	$app->post("/azs_menu_main/delete", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_delete($_POST));
		return $response;
	});
	$app->post("/azs_menu_main/file", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_file($_POST));
		return $response;
	});
	$app->post("/azs_menu_main/remove", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_remove($_POST));
		return $response;
	});
	$app->post("/azs_menu_main/restore", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_restore($_POST));
		return $response;
	});
	$app->post("/azs_menu_main/state", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_state($_POST));
		return $response;
	});
	$app->post("/azs_menu_main/table", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_table($_POST));
		return $response;
	});
	$app->post("/azs_menu_main/update", function($request, $response) {
		$model = new m_azs_menu_mainModel;
		$response->withJson($model->sql_azs_menu_main_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_menu_profile
	$app->post("/azs_menu_profile/create", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_insert($_POST));
		return $response;
	});
	$app->post("/azs_menu_profile/delete", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_delete($_POST));
		return $response;
	});
	$app->post("/azs_menu_profile/file", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_file($_POST));
		return $response;
	});
	$app->post("/azs_menu_profile/remove", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_remove($_POST));
		return $response;
	});
	$app->post("/azs_menu_profile/restore", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_restore($_POST));
		return $response;
	});
	$app->post("/azs_menu_profile/state", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_state($_POST));
		return $response;
	});
	$app->post("/azs_menu_profile/table", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_table($_POST));
		return $response;
	});
	$app->post("/azs_menu_profile/update", function($request, $response) {
		$model = new m_azs_menu_profileModel;
		$response->withJson($model->sql_azs_menu_profile_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_message_general
	$app->post("/azs_message_general/create", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_insert($_POST));
		return $response;
	});
	$app->post("/azs_message_general/delete", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_delete($_POST));
		return $response;
	});
	$app->post("/azs_message_general/file", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_file($_POST));
		return $response;
	});
	$app->post("/azs_message_general/remove", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_remove($_POST));
		return $response;
	});
	$app->post("/azs_message_general/restore", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_restore($_POST));
		return $response;
	});
	$app->post("/azs_message_general/state", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_state($_POST));
		return $response;
	});
	$app->post("/azs_message_general/table", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_table($_POST));
		return $response;
	});
	$app->post("/azs_message_general/update", function($request, $response) {
		$model = new m_azs_message_generalModel;
		$response->withJson($model->sql_azs_message_general_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_message_get
	$app->post("/azs_message_get/create", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_insert($_POST));
		return $response;
	});
	$app->post("/azs_message_get/delete", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_delete($_POST));
		return $response;
	});
	$app->post("/azs_message_get/file", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_file($_POST));
		return $response;
	});
	$app->post("/azs_message_get/remove", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_remove($_POST));
		return $response;
	});
	$app->post("/azs_message_get/restore", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_restore($_POST));
		return $response;
	});
	$app->post("/azs_message_get/state", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_state($_POST));
		return $response;
	});
	$app->post("/azs_message_get/table", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_table($_POST));
		return $response;
	});
	$app->post("/azs_message_get/update", function($request, $response) {
		$model = new m_azs_message_getModel;
		$response->withJson($model->sql_azs_message_get_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_modal_category
	$app->post("/azs_modal_category/create", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_insert($_POST));
		return $response;
	});
	$app->post("/azs_modal_category/delete", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_delete($_POST));
		return $response;
	});
	$app->post("/azs_modal_category/file", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_file($_POST));
		return $response;
	});
	$app->post("/azs_modal_category/remove", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_remove($_POST));
		return $response;
	});
	$app->post("/azs_modal_category/restore", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_restore($_POST));
		return $response;
	});
	$app->post("/azs_modal_category/state", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_state($_POST));
		return $response;
	});
	$app->post("/azs_modal_category/table", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_table($_POST));
		return $response;
	});
	$app->post("/azs_modal_category/update", function($request, $response) {
		$model = new m_azs_modal_categoryModel;
		$response->withJson($model->sql_azs_modal_category_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_modal_code
	$app->post("/azs_modal_code/create", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_insert($_POST));
		return $response;
	});
	$app->post("/azs_modal_code/delete", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_delete($_POST));
		return $response;
	});
	$app->post("/azs_modal_code/file", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_file($_POST));
		return $response;
	});
	$app->post("/azs_modal_code/remove", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_remove($_POST));
		return $response;
	});
	$app->post("/azs_modal_code/restore", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_restore($_POST));
		return $response;
	});
	$app->post("/azs_modal_code/state", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_state($_POST));
		return $response;
	});
	$app->post("/azs_modal_code/table", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_table($_POST));
		return $response;
	});
	$app->post("/azs_modal_code/update", function($request, $response) {
		$model = new m_azs_modal_codeModel;
		$response->withJson($model->sql_azs_modal_code_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_pallet_color
	$app->post("/azs_pallet_color/create", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_insert($_POST));
		return $response;
	});
	$app->post("/azs_pallet_color/delete", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_delete($_POST));
		return $response;
	});
	$app->post("/azs_pallet_color/file", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_file($_POST));
		return $response;
	});
	$app->post("/azs_pallet_color/remove", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_remove($_POST));
		return $response;
	});
	$app->post("/azs_pallet_color/restore", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_restore($_POST));
		return $response;
	});
	$app->post("/azs_pallet_color/state", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_state($_POST));
		return $response;
	});
	$app->post("/azs_pallet_color/table", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_table($_POST));
		return $response;
	});
	$app->post("/azs_pallet_color/update", function($request, $response) {
		$model = new m_azs_pallet_colorModel;
		$response->withJson($model->sql_azs_pallet_color_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_password
	$app->post("/azs_password/create", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_insert($_POST));
		return $response;
	});
	$app->post("/azs_password/delete", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_delete($_POST));
		return $response;
	});
	$app->post("/azs_password/file", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_file($_POST));
		return $response;
	});
	$app->post("/azs_password/remove", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_remove($_POST));
		return $response;
	});
	$app->post("/azs_password/restore", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_restore($_POST));
		return $response;
	});
	$app->post("/azs_password/state", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_state($_POST));
		return $response;
	});
	$app->post("/azs_password/table", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_table($_POST));
		return $response;
	});
	$app->post("/azs_password/update", function($request, $response) {
		$model = new m_azs_passwordModel;
		$response->withJson($model->sql_azs_password_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_platform
	$app->post("/azs_platform/create", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_insert($_POST));
		return $response;
	});
	$app->post("/azs_platform/delete", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_delete($_POST));
		return $response;
	});
	$app->post("/azs_platform/file", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_file($_POST));
		return $response;
	});
	$app->post("/azs_platform/remove", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_remove($_POST));
		return $response;
	});
	$app->post("/azs_platform/restore", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_restore($_POST));
		return $response;
	});
	$app->post("/azs_platform/state", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_state($_POST));
		return $response;
	});
	$app->post("/azs_platform/table", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_table($_POST));
		return $response;
	});
	$app->post("/azs_platform/update", function($request, $response) {
		$model = new m_azs_platformModel;
		$response->withJson($model->sql_azs_platform_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_role
	$app->post("/azs_role/create", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_insert($_POST));
		return $response;
	});
	$app->post("/azs_role/delete", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_delete($_POST));
		return $response;
	});
	$app->post("/azs_role/file", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_file($_POST));
		return $response;
	});
	$app->post("/azs_role/remove", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_remove($_POST));
		return $response;
	});
	$app->post("/azs_role/restore", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_restore($_POST));
		return $response;
	});
	$app->post("/azs_role/state", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_state($_POST));
		return $response;
	});
	$app->post("/azs_role/table", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_table($_POST));
		return $response;
	});
	$app->post("/azs_role/update", function($request, $response) {
		$model = new m_azs_roleModel;
		$response->withJson($model->sql_azs_role_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_rols
	$app->post("/azs_rols/create", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_insert($_POST));
		return $response;
	});
	$app->post("/azs_rols/delete", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_delete($_POST));
		return $response;
	});
	$app->post("/azs_rols/file", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_file($_POST));
		return $response;
	});
	$app->post("/azs_rols/remove", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_remove($_POST));
		return $response;
	});
	$app->post("/azs_rols/restore", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_restore($_POST));
		return $response;
	});
	$app->post("/azs_rols/state", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_state($_POST));
		return $response;
	});
	$app->post("/azs_rols/table", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_table($_POST));
		return $response;
	});
	$app->post("/azs_rols/update", function($request, $response) {
		$model = new m_azs_rolsModel;
		$response->withJson($model->sql_azs_rols_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_script
	$app->post("/azs_script/create", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_insert($_POST));
		return $response;
	});
	$app->post("/azs_script/delete", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_delete($_POST));
		return $response;
	});
	$app->post("/azs_script/file", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_file($_POST));
		return $response;
	});
	$app->post("/azs_script/remove", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_remove($_POST));
		return $response;
	});
	$app->post("/azs_script/restore", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_restore($_POST));
		return $response;
	});
	$app->post("/azs_script/state", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_state($_POST));
		return $response;
	});
	$app->post("/azs_script/table", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_table($_POST));
		return $response;
	});
	$app->post("/azs_script/update", function($request, $response) {
		$model = new m_azs_scriptModel;
		$response->withJson($model->sql_azs_script_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_social_media
	$app->post("/azs_social_media/create", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_insert($_POST));
		return $response;
	});
	$app->post("/azs_social_media/delete", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_delete($_POST));
		return $response;
	});
	$app->post("/azs_social_media/file", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_file($_POST));
		return $response;
	});
	$app->post("/azs_social_media/remove", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_remove($_POST));
		return $response;
	});
	$app->post("/azs_social_media/restore", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_restore($_POST));
		return $response;
	});
	$app->post("/azs_social_media/state", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_state($_POST));
		return $response;
	});
	$app->post("/azs_social_media/table", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_table($_POST));
		return $response;
	});
	$app->post("/azs_social_media/update", function($request, $response) {
		$model = new m_azs_social_mediaModel;
		$response->withJson($model->sql_azs_social_media_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_sub_menu_crud
	$app->post("/azs_sub_menu_crud/create", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_insert($_POST));
		return $response;
	});
	$app->post("/azs_sub_menu_crud/delete", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_delete($_POST));
		return $response;
	});
	$app->post("/azs_sub_menu_crud/file", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_file($_POST));
		return $response;
	});
	$app->post("/azs_sub_menu_crud/remove", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_remove($_POST));
		return $response;
	});
	$app->post("/azs_sub_menu_crud/restore", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_restore($_POST));
		return $response;
	});
	$app->post("/azs_sub_menu_crud/state", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_state($_POST));
		return $response;
	});
	$app->post("/azs_sub_menu_crud/table", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_table($_POST));
		return $response;
	});
	$app->post("/azs_sub_menu_crud/update", function($request, $response) {
		$model = new m_azs_sub_menu_crudModel;
		$response->withJson($model->sql_azs_sub_menu_crud_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_sys_answer
	$app->post("/azs_sys_answer/create", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_insert($_POST));
		return $response;
	});
	$app->post("/azs_sys_answer/delete", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_delete($_POST));
		return $response;
	});
	$app->post("/azs_sys_answer/file", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_file($_POST));
		return $response;
	});
	$app->post("/azs_sys_answer/remove", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_remove($_POST));
		return $response;
	});
	$app->post("/azs_sys_answer/restore", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_restore($_POST));
		return $response;
	});
	$app->post("/azs_sys_answer/state", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_state($_POST));
		return $response;
	});
	$app->post("/azs_sys_answer/table", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_table($_POST));
		return $response;
	});
	$app->post("/azs_sys_answer/update", function($request, $response) {
		$model = new m_azs_sys_answerModel;
		$response->withJson($model->sql_azs_sys_answer_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_sys_deleted
	$app->post("/azs_sys_deleted/create", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_insert($_POST));
		return $response;
	});
	$app->post("/azs_sys_deleted/delete", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_delete($_POST));
		return $response;
	});
	$app->post("/azs_sys_deleted/file", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_file($_POST));
		return $response;
	});
	$app->post("/azs_sys_deleted/remove", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_remove($_POST));
		return $response;
	});
	$app->post("/azs_sys_deleted/restore", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_restore($_POST));
		return $response;
	});
	$app->post("/azs_sys_deleted/state", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_state($_POST));
		return $response;
	});
	$app->post("/azs_sys_deleted/table", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_table($_POST));
		return $response;
	});
	$app->post("/azs_sys_deleted/update", function($request, $response) {
		$model = new m_azs_sys_deletedModel;
		$response->withJson($model->sql_azs_sys_deleted_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_sys_level
	$app->post("/azs_sys_level/create", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_insert($_POST));
		return $response;
	});
	$app->post("/azs_sys_level/delete", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_delete($_POST));
		return $response;
	});
	$app->post("/azs_sys_level/file", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_file($_POST));
		return $response;
	});
	$app->post("/azs_sys_level/remove", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_remove($_POST));
		return $response;
	});
	$app->post("/azs_sys_level/restore", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_restore($_POST));
		return $response;
	});
	$app->post("/azs_sys_level/state", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_state($_POST));
		return $response;
	});
	$app->post("/azs_sys_level/table", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_table($_POST));
		return $response;
	});
	$app->post("/azs_sys_level/update", function($request, $response) {
		$model = new m_azs_sys_levelModel;
		$response->withJson($model->sql_azs_sys_level_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_sys_state
	$app->post("/azs_sys_state/create", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_insert($_POST));
		return $response;
	});
	$app->post("/azs_sys_state/delete", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_delete($_POST));
		return $response;
	});
	$app->post("/azs_sys_state/file", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_file($_POST));
		return $response;
	});
	$app->post("/azs_sys_state/remove", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_remove($_POST));
		return $response;
	});
	$app->post("/azs_sys_state/restore", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_restore($_POST));
		return $response;
	});
	$app->post("/azs_sys_state/state", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_state($_POST));
		return $response;
	});
	$app->post("/azs_sys_state/table", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_table($_POST));
		return $response;
	});
	$app->post("/azs_sys_state/update", function($request, $response) {
		$model = new m_azs_sys_stateModel;
		$response->withJson($model->sql_azs_sys_state_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_sys_temp
	$app->post("/azs_sys_temp/create", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_insert($_POST));
		return $response;
	});
	$app->post("/azs_sys_temp/delete", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_delete($_POST));
		return $response;
	});
	$app->post("/azs_sys_temp/file", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_file($_POST));
		return $response;
	});
	$app->post("/azs_sys_temp/remove", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_remove($_POST));
		return $response;
	});
	$app->post("/azs_sys_temp/restore", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_restore($_POST));
		return $response;
	});
	$app->post("/azs_sys_temp/state", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_state($_POST));
		return $response;
	});
	$app->post("/azs_sys_temp/table", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_table($_POST));
		return $response;
	});
	$app->post("/azs_sys_temp/update", function($request, $response) {
		$model = new m_azs_sys_tempModel;
		$response->withJson($model->sql_azs_sys_temp_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_system_message
	$app->post("/azs_system_message/create", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_insert($_POST));
		return $response;
	});
	$app->post("/azs_system_message/delete", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_delete($_POST));
		return $response;
	});
	$app->post("/azs_system_message/file", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_file($_POST));
		return $response;
	});
	$app->post("/azs_system_message/remove", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_remove($_POST));
		return $response;
	});
	$app->post("/azs_system_message/restore", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_restore($_POST));
		return $response;
	});
	$app->post("/azs_system_message/state", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_state($_POST));
		return $response;
	});
	$app->post("/azs_system_message/table", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_table($_POST));
		return $response;
	});
	$app->post("/azs_system_message/update", function($request, $response) {
		$model = new m_azs_system_messageModel;
		$response->withJson($model->sql_azs_system_message_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_table_prefix
	$app->post("/azs_table_prefix/create", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_insert($_POST));
		return $response;
	});
	$app->post("/azs_table_prefix/delete", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_delete($_POST));
		return $response;
	});
	$app->post("/azs_table_prefix/file", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_file($_POST));
		return $response;
	});
	$app->post("/azs_table_prefix/remove", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_remove($_POST));
		return $response;
	});
	$app->post("/azs_table_prefix/restore", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_restore($_POST));
		return $response;
	});
	$app->post("/azs_table_prefix/state", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_state($_POST));
		return $response;
	});
	$app->post("/azs_table_prefix/table", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_table($_POST));
		return $response;
	});
	$app->post("/azs_table_prefix/update", function($request, $response) {
		$model = new m_azs_table_prefixModel;
		$response->withJson($model->sql_azs_table_prefix_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_table_type_data
	$app->post("/azs_table_type_data/create", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_insert($_POST));
		return $response;
	});
	$app->post("/azs_table_type_data/delete", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_delete($_POST));
		return $response;
	});
	$app->post("/azs_table_type_data/file", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_file($_POST));
		return $response;
	});
	$app->post("/azs_table_type_data/remove", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_remove($_POST));
		return $response;
	});
	$app->post("/azs_table_type_data/restore", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_restore($_POST));
		return $response;
	});
	$app->post("/azs_table_type_data/state", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_state($_POST));
		return $response;
	});
	$app->post("/azs_table_type_data/table", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_table($_POST));
		return $response;
	});
	$app->post("/azs_table_type_data/update", function($request, $response) {
		$model = new m_azs_table_type_dataModel;
		$response->withJson($model->sql_azs_table_type_data_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_transact
	$app->post("/azs_transact/create", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_insert($_POST));
		return $response;
	});
	$app->post("/azs_transact/delete", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_delete($_POST));
		return $response;
	});
	$app->post("/azs_transact/file", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_file($_POST));
		return $response;
	});
	$app->post("/azs_transact/remove", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_remove($_POST));
		return $response;
	});
	$app->post("/azs_transact/restore", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_restore($_POST));
		return $response;
	});
	$app->post("/azs_transact/state", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_state($_POST));
		return $response;
	});
	$app->post("/azs_transact/table", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_table($_POST));
		return $response;
	});
	$app->post("/azs_transact/update", function($request, $response) {
		$model = new m_azs_transactModel;
		$response->withJson($model->sql_azs_transact_update($_POST));
		return $response;
	});
	
	# Return devuelve un json con información acerca del éxito o posibles errores.
	# Tabla: azs_user
	$app->post("/azs_user/create", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_insert($_POST));
		return $response;
	});
	$app->post("/azs_user/delete", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_delete($_POST));
		return $response;
	});
	$app->post("/azs_user/file", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_file($_POST));
		return $response;
	});
	$app->post("/azs_user/remove", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_remove($_POST));
		return $response;
	});
	$app->post("/azs_user/restore", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_restore($_POST));
		return $response;
	});
	$app->post("/azs_user/state", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_state($_POST));
		return $response;
	});
	$app->post("/azs_user/table", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_table($_POST));
		return $response;
	});
	$app->post("/azs_user/update", function($request, $response) {
		$model = new m_azs_userModel;
		$response->withJson($model->sql_azs_user_update($_POST));
		return $response;
	});
?>