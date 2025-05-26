<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class systemController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			echo $this->template->render('frontend/message/system');
		}
	}
?>