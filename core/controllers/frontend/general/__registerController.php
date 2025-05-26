<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class registerController extends Controllers {
		public function __construct() {
			parent::__construct(false);
			# Instanciando clases del modelo
			$var_m_zz_register = new m_zz_registerModel;
			# Formulario
			if (!isset($_SESSION[SESS_APP_ID])) {
				echo $this->template->render('frontend/general/register', array(
					# Consultar registros de la tabla por medio del modelo instanciado
					'df_sql_select_tc_azp_country' => $var_m_zz_register->sql_select_tc_azp_country(),
					# Consultar registros de la tabla por medio del modelo instanciado
					'df_sql_select_tc_azp_document_type' => $var_m_zz_register->sql_select_tc_azp_document_type()
				));
			} else {
				Func::redir(URL . 'dashboard/');
				exit;
			}
		}
	}
?>