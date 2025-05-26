<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrolador Programador');
	//------------------------------------------------
	class recoverController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			echo $this->template->render('frontend/general/recover');
		}
	}
?>