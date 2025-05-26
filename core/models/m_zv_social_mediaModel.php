<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	# Url Reemplazo _ para la palabra completa del modulo
	define('d_zv_social_media_url_delete', str_replace('_', '', 'zv_social_media/eliminate/delete/'));
	define('d_zv_social_media_url_remove', str_replace('_', '', 'zv_social_media/read/remove/'));
	define('d_zv_social_media_url_query', str_replace('_', '', 'zv_social_media/read/query/'));
	//------------------------------------------------
	final class m_zv_social_mediaModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_social_media_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_facebook = $this->db->scape($data['field_facebook']);
				$empty_google_plus = $this->db->scape($data['field_google_plus']);
				$empty_linked_in = $this->db->scape($data['field_linked_in']);
				$empty_twitter = $this->db->scape($data['field_twitter']);
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_facebook) > 255) {
					throw new Exception('<b>Error:</b> El campo de facebook permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_facebook, ' ')) {
					throw new Exception('<b>Error:</b> El campo de facebook no permite tener ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_facebook)) {
					throw new Exception('<b>Error:</b> El campo de facebook no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_google_plus) > 255) {
					throw new Exception('<b>Error:</b> El campo de google plus permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_google_plus, ' ')) {
					throw new Exception('<b>Error:</b> El campo de google plus no permite tener ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_google_plus)) {
					throw new Exception('<b>Error:</b> El campo de google plus no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_linked_in) > 255) {
					throw new Exception('<b>Error:</b> El campo de linked in permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_linked_in, ' ')) {
					throw new Exception('<b>Error:</b> El campo de linked in no permite tener ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_linked_in)) {
					throw new Exception('<b>Error:</b> El campo de linked in no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_twitter) > 255) {
					throw new Exception('<b>Error:</b> El campo de twitter permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_twitter, ' ')) {
					throw new Exception('<b>Error:</b> El campo de twitter no permite tener ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_twitter)) {
					throw new Exception('<b>Error:</b> El campo de twitter no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_social_media_update(array $data) : array {
			$var_error = $this->error_sql_zv_social_media_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_facebook = $this->db->scape($data['field_facebook']);
				$empty_google_plus = $this->db->scape($data['field_google_plus']);
				$empty_linked_in = $this->db->scape($data['field_linked_in']);
				$empty_twitter = $this->db->scape($data['field_twitter']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_social_media_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_social_media_m_date_modified => DATE_HOUR,
					d_azp_social_media_t_facebook => $empty_facebook,
					d_azp_social_media_t_google_plus => $empty_google_plus,
					d_azp_social_media_t_linked_in => $empty_linked_in,
					d_azp_social_media_t_twitter => $empty_twitter,
				);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_social_media, $var_array, d_azp_social_media_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#--------------------------------------------------------------------------------------------------------------------
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
				#--------------------------------------------------------------------------------------------------------------------
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>