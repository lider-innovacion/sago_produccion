<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class faqController extends Controllers {
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
			$var_m_zz_design = new m_zz_designModel;
			# Instanciando clases del modelo
			$var_m_azp_state = new m_azp_stateModel;
			# Instanciando clases del modelo
			$var_m_zz_faq = new m_zz_faqModel;  
			# Cargar en el metodo por url la plantilla con su contenido a visualizar
			echo $this->template->render('frontend/general/faq', array(
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_read' => $var_m_zz_faq->sql_controller_read()
			));
		}
	}
?>