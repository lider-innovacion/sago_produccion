<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class {{controller}} extends Controllers {
		public function __construct() {
			parent::__construct();
			echo $this->template->render('{{view}}/{{view}}');
		}
	}
?>