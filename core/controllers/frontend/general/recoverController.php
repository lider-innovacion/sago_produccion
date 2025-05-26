<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class recoverController extends Controllers {
		public function __construct() {
			parent::__construct(false, true);
			# Instanciando clases del modelo
			$var_m_zz_recoverModel = new m_zz_recoverModel;
			# Cargar en el metodo por url la plantilla con su contenido a visualizar
			echo $this->template->render('frontend/general/recover', array(
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_password_update' => $var_m_zz_recoverModel->sql_zz_recover_password()
			));
		}
	}
?>
