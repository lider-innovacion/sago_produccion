<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	# Url Reemplazo _ para la palabra completa del modulo
	define('d_zv_profile_url_delete', str_replace('_', '', 'zv_profile/eliminate/delete/'));
	define('d_zv_profile_url_remove', str_replace('_', '', 'zv_profile/read/remove/'));
	define('d_zv_profile_url_query', str_replace('_', '', 'zv_profile/read/query/'));
	//------------------------------------------------
	final class m_zv_profileModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
					tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
					tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
					tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
					tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
					tc_azp_role." . d_azp_role_t_name . " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . " AS 'lbl_azp_data_personal_v_id_azp_country',
					tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . " AS 'lbl_azp_data_personal_v_id_azp_document_type',
					tc_azp_social_media." . d_azp_social_media_t_facebook . " AS 'lbl_azp_social_media_t_facebook',
					tc_azp_social_media." . d_azp_social_media_t_google_plus . " AS 'lbl_azp_social_media_t_google_plus',
					tc_azp_social_media." . d_azp_social_media_t_linked_in . " AS 'lbl_azp_social_media_t_linked_in',
					tc_azp_social_media." . d_azp_social_media_t_twitter . " AS 'lbl_azp_social_media_t_twitter'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_user." . d_azp_user_m_by_created . " = tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_user." . d_azp_user_m_by_modified . " = tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_user." . d_azp_user_m_level . " = tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . " = tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role ." tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal ." tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . " = tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_social_media ." tc_azp_social_media
					ON tc_azp_user." . d_azp_user_id_azp_user . " = tc_azp_social_media." . d_azp_social_media_v_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $this->id . "'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'profile/update/' . $_SESSION[SESS_APP_ID] . '/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_user." . d_azp_user_m_status . " = tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_user." . d_azp_user_id_azp_user . " AS 'lbl_azp_user_id_azp_user',
					tc_azp_user." . d_azp_user_m_by_created . " AS 'lbl_azp_user_m_by_created',
					tc_azp_user." . d_azp_user_m_by_modified . " AS 'lbl_azp_user_m_by_modified',
					tc_azp_user." . d_azp_user_m_date_created . " AS 'lbl_azp_user_m_date_created',
					tc_azp_user." . d_azp_user_m_date_modified . " AS 'lbl_azp_user_m_date_modified',
					tc_azp_user." . d_azp_user_m_deleted . " AS 'lbl_azp_user_m_deleted',
					tc_azp_user." . d_azp_user_m_description . " AS 'lbl_azp_user_m_description',
					tc_azp_user." . d_azp_user_m_level . " AS 'lbl_azp_user_m_level',
					tc_azp_user." . d_azp_user_m_status . " AS 'lbl_azp_user_m_status',
					tc_azp_user." . d_azp_user_m_temp . " AS 'lbl_azp_user_m_temp',
					tc_azp_user." . d_azp_user_t_email . " AS 'lbl_azp_user_t_email',
					tc_azp_user." . d_azp_user_t_key_active . " AS 'lbl_azp_user_t_key_active',
					tc_azp_user." . d_azp_user_t_key_password . " AS 'lbl_azp_user_t_key_password',
					tc_azp_user." . d_azp_user_t_key_password_temp . " AS 'lbl_azp_user_t_key_password_temp',
					tc_azp_user." . d_azp_user_t_key_status . " AS 'lbl_azp_user_t_key_status',
					tc_azp_user." . d_azp_user_t_last_connection . " AS 'lbl_azp_user_t_last_connection',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login',
					tc_azp_user." . d_azp_user_t_password . " AS 'lbl_azp_user_t_password',
					tc_azp_user." . d_azp_user_t_session . " AS 'lbl_azp_user_t_session',
					tc_azp_role." . d_azp_role_t_name. " AS 'lbl_azp_role_t_name',
					tc_azp_data_personal." . d_azp_data_personal_t_address . " AS 'lbl_azp_data_personal_t_address',
					tc_azp_data_personal." . d_azp_data_personal_t_birth_date . " AS 'lbl_azp_data_personal_t_birth_date',
					tc_azp_data_personal." . d_azp_data_personal_t_identification . " AS 'lbl_azp_data_personal_t_identification',
					tc_azp_data_personal." . d_azp_data_personal_t_names . " AS 'lbl_azp_data_personal_t_names',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_fixed . " AS 'lbl_azp_data_personal_t_phone_fixed',
					tc_azp_data_personal." . d_azp_data_personal_t_phone_movil . " AS 'lbl_azp_data_personal_t_phone_movil',
					tc_azp_data_personal." . d_azp_data_personal_t_surnames . " AS 'lbl_azp_data_personal_t_surnames',
					tc_azp_data_personal." . d_azp_data_personal_v_id_azp_country . " AS 'lbl_azp_data_personal_v_id_azp_country',
					tc_azp_data_personal." . d_azp_data_personal_v_id_azp_document_type . " AS 'lbl_azp_data_personal_v_id_azp_document_type',
					tc_azp_social_media." . d_azp_social_media_t_facebook . " AS 'lbl_azp_social_media_t_facebook',
					tc_azp_social_media." . d_azp_social_media_t_google_plus . " AS 'lbl_azp_social_media_t_google_plus',
					tc_azp_social_media." . d_azp_social_media_t_linked_in . " AS 'lbl_azp_social_media_t_linked_in',
					tc_azp_social_media." . d_azp_social_media_t_twitter . " AS 'lbl_azp_social_media_t_twitter'
				FROM " . t_azp_user . " tc_azp_user
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_role . " tc_azp_role
					ON tc_azp_user." . d_azp_user_v_id_azp_role . " = tc_azp_role." . d_azp_role_id_azp_role . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_data_personal . " tc_azp_data_personal
					ON tc_azp_user." . d_azp_user_id_azp_user . " = tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_social_media ." tc_azp_social_media
					ON tc_azp_user." . d_azp_user_id_azp_user . " = tc_azp_social_media." . d_azp_social_media_v_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_user." . d_azp_user_id_azp_user . " = '" . $this->id . "'
					AND tc_azp_user." . d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_data_personal." . d_azp_data_personal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'profile/update/' . $_SESSION[SESS_APP_ID] . '/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_profile_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				//$empty_country = $this->db->scape($data['field_country']);
				$empty_email = $this->db->scape($data['field_email']);
				$empty_names = $this->db->scape($data['field_names']);
				$empty_surnames = $this->db->scape($data['field_surnames']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_names)) {
					throw new Exception('<b>Error:</b> El campo de nombres es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::only_letters($empty_names)) {
					throw new Exception('<b>Error:</b> El campo de nombres solo permite letras.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_names) > 255) {
					throw new Exception('<b>Error:</b> El campo de nombres permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_names, '  ')) {
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener más de un espacio en blanco seguido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_names)) {
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_surnames)) {
					throw new Exception('<b>Error:</b> El campo de apellidos es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::only_letters($empty_surnames)) {
					throw new Exception('<b>Error:</b> El campo de apellidos solo permite letras.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_surnames) > 255) {
					throw new Exception('<b>Error:</b> El campo de apellidos permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_surnames, '  ')) {
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener más de un espacio en blanco seguido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_surnames)) {
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_email)) {
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::is_email($empty_email)) {
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($empty_email) > 255) {
					throw new Exception('<b>Error:</b> El campo de correo electronico permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				/*if (Func::emp($empty_country) || $empty_country == 0) {
					throw new Exception('<b>Error:</b> El campo de pais es oblgitario.');
				}*/
				#--------------------------------------------------------------------------------------------------------------------
				/*if (!is_numeric($empty_country)) {
					throw new Exception('<b>Error:</b> El campo de pais solo permite numeros.');
				}*/
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar en la base de datos si existen el registro
				/*$sql_country = $this->db->select('*', t_azp_country, d_azp_country_id_azp_country . " = '" . $empty_country . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_country) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_country) == '') { $sql_country[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_country[0][0]) != strtolower($empty_country)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El pais seleccionado no se encuentra registrado.');
					}
				}*/
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_profile_update(array $data) : array {
			$var_error = $this->error_sql_zv_profile_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				//$empty_country = $this->db->scape($data['field_country']);
				$empty_email = $this->db->scape($data['field_email']);
				$empty_names = $this->db->scape($data['field_names']);
				$empty_surnames = $this->db->scape($data['field_surnames']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_user_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_user_m_date_modified => DATE_HOUR,
					d_azp_user_t_email => $empty_email,
				);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_data_personal_m_date_modified => DATE_HOUR,
					d_azp_data_personal_t_names => $empty_names,
					d_azp_data_personal_t_surnames => $empty_surnames,
					//d_azp_data_personal_v_id_azp_country => $empty_country,
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
		# Query Sql Select
		final public function sql_select_tc_azp_country() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_country, d_azp_country_m_deleted . " = '1' AND " . d_azp_country_m_status . " = '1'", "ORDER BY " . d_azp_country_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_document_type() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_document_type, d_azp_document_type_m_deleted . " = '1' ORDER BY " . d_azp_document_type_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>