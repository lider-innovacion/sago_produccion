<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	# Url Reemplazo _ para la palabra completa del modulo
	define('d_zv_firm_url_delete', str_replace('_', '', 'zv_firm/eliminate/delete/'));
	define('d_zv_firm_url_remove', str_replace('_', '', 'zv_firm/read/remove/'));
	define('d_zv_firm_url_query', str_replace('_', '', 'zv_firm/read/query/'));
	//------------------------------------------------
	final class m_zv_firmModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_firm_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_firm_update(array $data) : array {
			$var_error = $this->error_sql_zv_firm_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
				#--------------------------------------------------------------------------------------------------------------------
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_zv_firm_document(string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				Helper::load('files');
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_data_personal_t_firm => 'views/backend/images/firms/' . $_SESSION[SESS_APP_ID] . '.png',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_data_personal, $var_array, d_azp_data_personal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#-------------------------------------------------------------------------#
				$var_folder = 'views/backend/images/firms/';
				Files::upload_file(trim(preg_replace('/\s+/',' ', $_SESSION[SESS_APP_ID] . '.png')), $var_tmp_name, $var_folder, true);
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>