<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_zz_loginModel extends Models implements OCREND {
		private $var_user;
		private $session = null;
		private $var_this;
		public function __construct() {
			parent::__construct();
		}

		# Control de errores
		final private function error_sql_zz_login(array $data) {
			try {
				Helper::load('strings');
				$this->var_user = $this->db->scape($data['field_login']);
				$this->var_this = $this->db->select(d_azp_user_id_azp_user . ', ' . d_azp_user_t_password, t_azp_user, d_azp_user_t_login . " = '" . $this->var_user . "'",'LIMIT 1');
				if (false == $this->var_this or !Strings::chash($this->var_this[0][1], $data['field_password'])) {
					throw new Exception('<b>Error:</b> Credenciales incorrectas.');
				}
				if (DB_SESSION) {
					$this->session = new Sessions;
					if ($this->session->session_in_use($this->var_this[0][0])) {
						throw new Exception('<b>Error:</b> Ya tiene una sesión iniciada.');
					}
				}
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		# Inicio de sesión
		final public function sql_zz_login(array $data) : array {
			$error = $this->error_sql_zz_login($data);
			if (!is_bool($error)) { return $error; }
			if (DB_SESSION) {
				$this->session->generate_session($this->var_this[0][0]);
			} else {
				$_SESSION[SESS_APP_ID] = $this->var_this[0][0];
			}
			return array('success' => 1, 'message' => '<b>Conectado:</b> Te estamos redireccionando.');
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>