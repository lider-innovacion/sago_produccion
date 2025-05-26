<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	# Url Reemplazo _ para la palabra completa del modulo
	define('d_zv_password_url_delete', str_replace('_', '', 'zv_password/eliminate/delete/'));
	define('d_zv_password_url_remove', str_replace('_', '', 'zv_password/read/remove/'));
	define('d_zv_password_url_query', str_replace('_', '', 'zv_password/read/query/'));
	//------------------------------------------------
	final class m_zv_passwordModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_password_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_password_current = $this->db->scape($data['field_password_current']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_password_new'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_password_new']) < 10) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener minimo 10 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_password_new']) > 20) {
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 20 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($data['field_password_new'], ' ')) {
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $data['field_password_new'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[a-z]`', $data['field_password_new'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra minúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[A-Z]`', $data['field_password_new'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra mayúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[0-9]`', $data['field_password_new'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos caracter numérico.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_password_confirm'])) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_password_confirm']) < 10) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener minimo 10 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_password_confirm']) > 20) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña permite maximo hasta 20 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($data['field_password_confirm'], ' ')) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $data['field_password_confirm'])) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[a-z]`', $data['field_password_confirm'])) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra minúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[A-Z]`', $data['field_password_confirm'])) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra mayúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[0-9]`', $data['field_password_confirm'])) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos caracter numérico.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if ($data['field_password_new'] != $data['field_password_confirm']) {
					throw new Exception('<b>Error:</b> Las contraseñas digitidas no son iguales.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_password_current'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña actual es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar en la base de datos si existen el registro
				$sql_password_current = $this->db->select(d_azp_user_id_azp_user . ", " . d_azp_user_t_password, t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
				if (false == $sql_password_current || !Strings::chash($sql_password_current[0][1],$empty_password_current)) {
					throw new Exception('<b>Error:</b> La contraseña actual digitada no es la correcta.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_password_update(array $data) : array {
			$var_error = $this->error_sql_zv_password_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_password_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_password_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_password_m_date_created => DATE_HOUR,
							d_azs_password_m_date_modified => DATE_HOUR,
							d_azs_password_m_deleted => $key_sql_select[d_azp_user_m_deleted],
							d_azs_password_m_description => $key_sql_select[d_azp_user_m_description],
							d_azs_password_m_level => $key_sql_select[d_azp_user_m_level],
							d_azs_password_m_status => $key_sql_select[d_azp_user_m_status],
							d_azs_password_m_temp => $key_sql_select[d_azp_user_m_temp],
							d_azs_password_t_used_password => $key_sql_select[d_azp_user_t_password],
							d_azs_password_v_id_azp_user => $_SESSION[SESS_APP_ID],
						);
						# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_password, $var_array);
					endforeach;
				}
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(d_azp_user_t_password => Strings::hash($data['field_password_new']));
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>