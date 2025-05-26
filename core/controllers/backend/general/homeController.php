<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrolador Programador');
	//------------------------------------------------
	class homeController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			Func::redir(URL . 'dashboard/');
			exit;
		}
	}
?>