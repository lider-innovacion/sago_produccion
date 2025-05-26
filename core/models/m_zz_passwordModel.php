<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_zz_passwordModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_recover(string $var_key_temp) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->select("*", t_azp_user, d_azp_user_m_temp . " = '2' AND " . d_azp_user_t_key_password . " = '" . $var_key_temp . "'", "LIMIT 1");

			if (false == $var_sql) {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'login/?field_id=url');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zz_password(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_key_password = $this->db->scape($data['field_key_password']);
				$empty_password_new = $this->db->scape($data['field_password_new']);
				$empty_password_confirm = $this->db->scape($data['field_password_confirm']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_password_new)) {
					throw new Exception('<b>Error:</b> El campo de contraseña es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password_new) < 10) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener minimo 10 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password_new) > 20) {
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 20 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_password_new, ' ')) {
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_password_new)) {
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[a-z]`', $empty_password_new)) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra minúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[A-Z]`', $empty_password_new)) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra mayúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[0-9]`', $empty_password_new)) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos caracter numérico.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password_confirm) < 10) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener minimo 10 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password_confirm) > 20) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña permite maximo hasta 20 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_password_confirm, ' ')) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[a-z]`', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra minúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[A-Z]`', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra mayúscula.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[0-9]`', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos caracter numérico.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if ($empty_password_new != $empty_password_confirm) {
					throw new Exception('<b>Error:</b> Las contraseñas digitidas no son iguales.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zz_password(array $data) : array {
			$var_error = $this->error_sql_zz_password($data);
			if (!is_bool($var_error)) { return $var_error; }
			#--------------------------------------------------------------------------------------------------------------------
			/*$empty_password_new = strtolower($this->db->scape($data['field_password_new']));
			$empty_password_confirm = strtolower($this->db->scape($data['field_password_confirm']));
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_azp_user_m_date_modified => DATE_HOUR,
				d_azp_user_m_temp => '1',
				d_azp_user_t_key_password => time(),
				d_azp_user_t_password => Strings::hash($data['field_password_new'])
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_azp_user, $var_array, d_azp_user_t_key_password . " = '" . $data['field_id'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');*/

			#--------------------------------------------------------------------------------------------------------------------
			$empty_key_password = $this->db->scape($data['field_key_password']);
			$empty_password_new = $this->db->scape($data['field_password_new']);
			$empty_password_confirm = $this->db->scape($data['field_password_confirm']);
			#--------------------------------------------------------------------------------------------------------------------
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_azp_user_m_date_modified => DATE_HOUR,
				d_azp_user_m_temp => '1',
				d_azp_user_t_key_password => time() . time() . time(),
				d_azp_user_t_password => Strings::hash($empty_password_new),
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_azp_user, $var_array, d_azp_user_t_key_password . " = '" . $empty_key_password . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Contraseña restaurada correctamente.');
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>