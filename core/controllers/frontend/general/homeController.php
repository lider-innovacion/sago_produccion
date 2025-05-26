<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class homeController extends Controllers {
		public function __construct() {
			parent::__construct();
			#echo $this->template->render('frontend/general/home');
			Func::redir(URL . 'login/');
			exit();
		}
	}
?>