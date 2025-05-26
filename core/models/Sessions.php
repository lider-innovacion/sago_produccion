<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	class Sessions extends Models implements OCREND {
		public function __construct() {
			parent::__construct();
		}
		
		/**
		* Genera una sesión por un tiempo determinado para un usuario.
		*
		* @param int $id: Id de usuario para generar la sesión
		*
		* @return void
		*/
		public function generate_session(int $id) {
			$_SESSION[SESS_APP_ID] = $id;
			$var_t_session[d_azp_user_t_session] = time() + SESSION_TIME;
			$this->db->update(t_azp_user, $var_t_session, d_azp_user_id_azp_user . " = '" . $id . "'",'LIMIT 1');
		}

		/**
		* Chequea el uso de la sesión en un usuario.
		*
		* @param int $id: Id de usuario para generar la sesión
		*
		* @return bool: TRUE si el usuario tiene la sesión iniciada, FALSE si no
		*/
		public function session_in_use(int $id) : bool {
			$time = time();
			if ($this->db->rows($this->db->query("SELECT " . d_azp_user_id_azp_user . " FROM " . t_azp_user . " WHERE " . d_azp_user_id_azp_user . " = '" . $id . "' AND " . d_azp_user_t_session . " >= '" . $time . "' LIMIT 1;")) > 0) {
				return true;
			} else {
				return false;
			}
		}

		/**
		* Chequea la vida de una sesión, si ésta caduca se culmina la sesión existente.
		*
		* @param bool $force: Fuerza la culminación de una sesión que pueda existir.
		*
		* @return void
		*/
		public function check_life(bool $force = false) {
			if (isset($_SESSION[SESS_APP_ID])) {
				$id = $_SESSION[SESS_APP_ID];
				$time = time();
				if ($force || $this->db->rows($this->db->query("SELECT " . d_azp_user_id_azp_user . " FROM " . t_azp_user . " WHERE " . d_azp_user_id_azp_user . " = '" . $id . "' AND " . d_azp_user_t_session . " <= '" . $time . "' LIMIT 1;")) > 0) {
					$var_t_session[d_azp_user_t_session] = 0;
					$this->db->update(t_azp_user, $var_t_session, d_azp_user_id_azp_user . " = '" . $id . "'",'LIMIT 1');
					unset($_SESSION[SESS_APP_ID]);
					session_write_close();
					session_unset();
				}
			}
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>