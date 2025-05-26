<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class contactController extends Controllers {
		public function __construct() {
			parent::__construct();
			# Variable convertida en global y ser consultada
			global $router;
			# Detección del controlador actual
			$var_router = $router->getController();
			# Reemplazar la palabra Controller
			$var_controller = str_replace("Controller", "/", $var_router);
			# Deteccion del metodo actual y concatenado del controlador
			$var_url = $var_controller . $this->method . '/';
			# Variable Get para cargar el id
			$_GET['field_id'] = $this->route->getId();
			# Instanciando clases del modelo
			$var_m_zz_contact = new m_zz_contactModel;
			# Instanciando clases del modelo
			$var_m_azp_state = new m_azp_stateModel;
			# Cargar en el metodo por url la plantilla con su contenido a visualizar
			echo $this->template->render('frontend/general/contact', array(
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_select_tc_azp_country' => $var_m_zz_contact->sql_select_tc_azp_country(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_select_tc_azp_transact' => $var_m_zz_contact->sql_select_tc_azp_transact()
			));
		}
	}
?>