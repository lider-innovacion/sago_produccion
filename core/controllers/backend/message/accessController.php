<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrolador Programador');
	//------------------------------------------------
	class accessController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			echo $this->template->render('backend/message/access');
		}
	}
?>