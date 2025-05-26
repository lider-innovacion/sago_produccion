<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	# Url Reemplazo _ para la palabra completa del modulo
	define('d_zv_personal_url_delete', str_replace('_', '', 'zv_personal/eliminate/delete/'));
	define('d_zv_personal_url_remove', str_replace('_', '', 'zv_personal/read/remove/'));
	define('d_zv_personal_url_query', str_replace('_', '', 'zv_personal/read/query/'));
	//------------------------------------------------
	final class m_zv_personalModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_personal_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_address = $this->db->scape($data['field_address']);
				$empty_birth_date = $this->db->scape($data['field_birth_date']);
				$empty_phone_fixed = $this->db->scape($data['field_phone_fixed']);
				$empty_phone_movil = $this->db->scape($data['field_phone_movil']);
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_phone_fixed) < 1) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo debe tener minimo 1 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_phone_fixed) > 8) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo permite maximo hasta 8 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_phone_fixed, ' ')) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_phone_fixed)) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_phone_movil)) {
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_phone_movil)) {
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_phone_movil) != 10) {
					throw new Exception('<b>Error:</b> El campo de telefono movil permite solamente 10 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_phone_movil, ' ')) {
					throw new Exception('<b>Error:</b> El campo de telefono movil no permite ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_address)) {
					throw new Exception('<b>Error:</b> El campo de direccion es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_address) > 255) {
					throw new Exception('<b>Error:</b> El campo de direccion permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_address, '  ')) {
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener más de un espacio en blanco seguido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_address)) {
					throw new Exception('<b>Error:</b> El campo de direccion no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_birth_date) || $empty_birth_date == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_birth_date) < 10 || strlen($empty_birth_date) > 10) {
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_personal_update(array $data) : array {
			$var_error = $this->error_sql_zv_personal_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_address = $this->db->scape($data['field_address']);
				$empty_birth_date = $this->db->scape($data['field_birth_date']);
				$empty_phone_fixed = $this->db->scape($data['field_phone_fixed']);
				$empty_phone_movil = $this->db->scape($data['field_phone_movil']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_data_personal_m_date_modified => DATE_HOUR,
					d_azp_data_personal_t_address => $empty_address,
					d_azp_data_personal_t_birth_date => $empty_birth_date,
					d_azp_data_personal_t_phone_fixed => $empty_phone_fixed,
					d_azp_data_personal_t_phone_movil => $empty_phone_movil,
				);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_data_personal, $var_array, d_azp_data_personal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
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