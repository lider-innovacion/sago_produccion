<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class passwordController extends Controllers {
		public function __construct() {
			parent::__construct(false, true);
			# Variable Get para cargar el id
			$var_method = $this->method;
			# Instanciando clases del modelo
			$var_m_zz_passwordModel = new m_zz_passwordModel;
			# Restricción alfanumérica
			if ($this->method) {
				$var_m_zz_passwordModel->sql_controller_recover($var_method);
				# Cargar en el metodo por url la plantilla con su contenido a visualizar
				echo $this->template->render('frontend/general/password', array('df_var_method' => $var_method));
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'login/error/');
				# Detener la ejecucion
				exit();
			}
		}
	}
?>
