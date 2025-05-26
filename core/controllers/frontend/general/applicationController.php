<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class applicationController extends Controllers {
		public function __construct() {
			parent::__construct(true);
		}
	}
?>