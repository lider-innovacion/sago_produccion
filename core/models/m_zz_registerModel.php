<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_zz_registerModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct();
		}

		/*=========================================================================================================================*/
		# Control de errores
		final private function error_sql_zz_register(array $data) {
			try {
				#-----------------------------------------------------------------------------------------------------------------
				$empty_email = $this->db->scape($data['field_email']);
				$empty_login = $this->db->scape($data['field_login']);
				$empty_password = $this->db->scape($data['field_password']);
				$empty_password_confirm = $this->db->scape($data['field_password_confirm']);
				$empty_address = $this->db->scape($data['field_address']);
				$empty_birth_date = $this->db->scape($data['field_birth_date']);
				$empty_identification = $this->db->scape($data['field_identification']);
				$empty_names = $this->db->scape($data['field_names']);
				$empty_phone_fixed = $this->db->scape($data['field_phone_fixed']);
				$empty_phone_movil = $this->db->scape($data['field_phone_movil']);
				$empty_surnames = $this->db->scape($data['field_surnames']);
				$empty_country = $this->db->scape($data['field_country']);
				$empty_document_type = $this->db->scape($data['field_document_type']);
				#-----------------------------------------------------------------------------------------------------------------
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_email)) {
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!Strings::is_email($empty_email)) {
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_email) > 255) {
					throw new Exception('<b>Error:</b> El campo de correo electronico permite maximo hasta 255 caracteres.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_login)) {
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!Strings::only_letters($empty_login)) {
					throw new Exception('<b>Error:</b> El campo de usuario solo permite letras.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_login) > 15) {
					throw new Exception('<b>Error:</b> El campo de usuario permite maximo hasta 15 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($empty_login, '  ')) {
					throw new Exception('<b>Error:</b> El campo de usuario no permite tener más de un espacio en blanco seguido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_login)) {
					throw new Exception('<b>Error:</b> El campo de usuario no permite tener espacios en blanco al principio o al final.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_password)) {
					throw new Exception('<b>Error:</b> El campo de contraseña es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password) < 10) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener minimo 10 caracteres.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password) > 20) {
					throw new Exception('<b>Error:</b> El campo de contraseña permite maximo hasta 20 caracteres.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strpos($empty_password, ' ')) {
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_password)) {
					throw new Exception('<b>Error:</b> El campo de contraseña no permite tener espacios en blanco.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[a-z]`', $empty_password)) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra minúscula.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[A-Z]`', $empty_password)) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos una letra mayúscula.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[0-9]`', $empty_password)) {
					throw new Exception('<b>Error:</b> El campo de contraseña debe tener al menos caracter numérico.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password_confirm) < 10) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener minimo 10 caracteres.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_password_confirm) > 20) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña permite maximo hasta 20 caracteres.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strpos($empty_password_confirm, ' ')) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña no permite tener espacios en blanco.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[a-z]`', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra minúscula.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[A-Z]`', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos una letra mayúscula.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!preg_match('`[0-9]`', $empty_password_confirm)) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña debe tener al menos caracter numérico.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if ($empty_password != $empty_password_confirm) {
					throw new Exception('<b>Error:</b> Las contraseñas digitidas no son iguales.');
				}
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
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_document_type) || $empty_document_type == 0 || strtolower($empty_document_type) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de tipo documento es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_document_type)) {
					throw new Exception('<b>Error:</b> El campo de tipo documento solo permite numeros.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_identification)) {
					throw new Exception('<b>Error:</b> El campo de identificacion es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_identification)) {
					throw new Exception('<b>Error:</b> El campo de identificacion solo permite numeros.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_identification) > 255) {
					throw new Exception('<b>Error:</b> El campo de identificacion permite maximo hasta 255 caracteres.');
				}
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
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_birth_date) || $empty_birth_date == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (strlen($empty_birth_date) < 10 || strlen($empty_birth_date) > 10) {
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento está mal diligenciado, debe ser aaaa-mm-dd.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_country) || $empty_country == 0 || strtolower($empty_country) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de pais es oblgitario.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_country)) {
					throw new Exception('<b>Error:</b> El campo de pais solo permite numeros.');
				}
				#-----------------------------------------------------------------------------------------------------------------
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_email = $this->db->select('*', t_azp_user, d_azp_user_t_email . " = '" . $empty_email . "'");
				if (true == $sql_email) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_email[0][0]) != strtolower($empty_email)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El correo electronico digitado ya existe registrado.');
					}
				}
				#-----------------------------------------------------------------------------------------------------------------
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_login = $this->db->select('*', t_azp_user, d_azp_user_t_login . " = '" . $empty_login . "'");
				if (true == $sql_login) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_login[0][0]) != strtolower($empty_login)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El usuario digitado ya existe registrado.');
					}
				}
				#-----------------------------------------------------------------------------------------------------------------
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_identification = $this->db->select('*', t_azp_data_personal, d_azp_data_personal_t_identification . " = '" . $empty_identification . "'");
				if (true == $sql_identification) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_identification[0][0]) != strtolower($empty_identification)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La identificacion digitada ya existe registrado.');
					}
				}
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				$sql_country = $this->db->select('*', t_azp_country, d_azp_country_id_azp_country . " = '" . $empty_country . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_country) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_country) == '') { $sql_country[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_country[0][0]) != strtolower($empty_country)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El pais seleccionado no se encuentra registrado.');
					}
				}
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar si el registro existe en la tabla
				$sql_document_type = $this->db->select('*', t_azp_document_type, d_azp_document_type_id_azp_document_type . " = '" . $empty_document_type . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_document_type) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_document_type) == '') { $sql_document_type[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_document_type[0][0]) != strtolower($empty_document_type)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tramite seleccionado no se encuentra registrado.');
					}
				}
				#-----------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Registro
		final public function sql_zz_register(array $data) : array {
			$error = $this->error_sql_zz_register($data);
			if (!is_bool($error)) { return $error; }
			
			$empty_email = $this->db->scape($data['field_email']);
			$empty_login = $this->db->scape($data['field_login']);
			$empty_password = $this->db->scape($data['field_password']);
			$empty_password_confirm = $this->db->scape($data['field_password_confirm']);
			$empty_address = $this->db->scape($data['field_address']);
			$empty_birth_date = $this->db->scape($data['field_birth_date']);
			$empty_identification = $this->db->scape($data['field_identification']);
			$empty_names = $this->db->scape($data['field_names']);
			$empty_phone_fixed = $this->db->scape($data['field_phone_fixed']);
			$empty_phone_movil = $this->db->scape($data['field_phone_movil']);
			$empty_surnames = $this->db->scape($data['field_surnames']);
			$empty_country = $this->db->scape($data['field_country']);
			$empty_document_type = $this->db->scape($data['field_document_type']);

			$var_array = array(
				d_azp_user_m_by_created => '1',
				d_azp_user_m_by_modified => '1',
				d_azp_user_m_date_created => date("Y-m-d H:i:s"),
				d_azp_user_m_date_modified => date("Y-m-d H:i:s"),
				d_azp_user_m_deleted => '1',
				d_azp_user_m_description => '',
				d_azp_user_m_level => '1',
				d_azp_user_m_status => '1',
				d_azp_user_m_temp => '2',
				d_azp_user_t_email => strtolower($empty_email),
				d_azp_user_t_key_active => '1',
				d_azp_user_t_key_password => '1',
				d_azp_user_t_key_password_temp => '1',
				d_azp_user_t_key_status => '1',
				d_azp_user_t_login => strtolower($empty_login),
				d_azp_user_t_password => Strings::hash($empty_password),
				d_azp_user_t_session => '1',
				d_azp_user_t_session => DB_SESSION ? (time() + SESSION_TIME) : 0,
				d_azp_user_v_id_azp_application => '2',
				d_azp_user_v_id_azp_role => '2',
			);
			$this->db->insert(t_azp_user, $var_array);

			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_temp . " = '2'", "LIMIT 1");
			
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql):
					$var_array = array(
						d_azp_data_personal_m_by_created => '1',
						d_azp_data_personal_m_by_modified => '1',
						d_azp_data_personal_m_date_created => date("Y-m-d H:i:s"),
						d_azp_data_personal_m_date_modified => date("Y-m-d H:i:s"),
						d_azp_data_personal_m_deleted => '1',
						d_azp_data_personal_m_description => '',
						d_azp_data_personal_m_level => '1',
						d_azp_data_personal_m_status => '1',
						d_azp_data_personal_m_temp => '1',
						d_azp_data_personal_t_address => ucwords(strtolower($empty_address)),
						d_azp_data_personal_t_birth_date => $empty_birth_date,
						d_azp_data_personal_t_identification => $empty_identification,
						d_azp_data_personal_t_names => ucwords(strtolower($empty_names)),
						d_azp_data_personal_t_phone_fixed => $empty_phone_fixed,
						d_azp_data_personal_t_phone_movil => $empty_phone_movil,
						d_azp_data_personal_t_surnames => ucwords(strtolower($empty_surnames)),
						d_azp_data_personal_v_id_azp_country => $empty_country,
						d_azp_data_personal_v_id_azp_document_type => $empty_document_type,
						d_azp_data_personal_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_azp_data_personal, $var_array);
				endforeach;
			}

			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql = $this->db->select('*', t_azp_user, d_azp_user_m_temp . " = '2'", "LIMIT 1");
			
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql as $key_sql):
					$var_array = array(
						d_azp_configuration_design_m_by_created => '1',
						d_azp_configuration_design_m_by_modified => '1',
						d_azp_configuration_design_m_date_created => date("Y-m-d H:i:s"),
						d_azp_configuration_design_m_date_modified => date("Y-m-d H:i:s"),
						d_azp_configuration_design_m_deleted => '1',
						d_azp_configuration_design_m_description => '',
						d_azp_configuration_design_m_level => '1',
						d_azp_configuration_design_m_status => '1',
						d_azp_configuration_design_m_temp => '1',
						d_azp_configuration_design_t_btn_cancel => '11',
						d_azp_configuration_design_t_btn_change => '17',
						d_azp_configuration_design_t_btn_copy => '11',
						d_azp_configuration_design_t_btn_create => '13',
						d_azp_configuration_design_t_btn_csv => '11',
						d_azp_configuration_design_t_btn_delete => '16',
						d_azp_configuration_design_t_btn_detail => '17',
						d_azp_configuration_design_t_btn_excel => '11',
						d_azp_configuration_design_t_btn_menu => '17',
						d_azp_configuration_design_t_btn_pdf => '11',
						d_azp_configuration_design_t_btn_print => '11',
						d_azp_configuration_design_t_btn_remove => '16',
						d_azp_configuration_design_t_btn_report => '17',
						d_azp_configuration_design_t_btn_restore => '13',
						d_azp_configuration_design_t_btn_sub_menu_crud => '17',
						d_azp_configuration_design_t_btn_sync => '11',
						d_azp_configuration_design_t_btn_update => '13',
						d_azp_configuration_design_t_btn_visible => '11',
						d_azp_configuration_design_t_design => '3',
						d_azp_configuration_design_t_table_by_create => '13',
						d_azp_configuration_design_t_table_change => '14',
						d_azp_configuration_design_t_table_detail => '13',
						d_azp_configuration_design_t_table_eliminate => '16',
						d_azp_configuration_design_t_table_read => '13',
						d_azp_configuration_design_t_table_report => '13',
						d_azp_configuration_design_v_id_azp_user => $key_sql[d_azp_user_id_azp_user],
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_azp_configuration_design, $var_array);
				endforeach;
			}

			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(d_azp_user_m_temp => '1',);

			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_azp_user, $var_array, d_azp_user_m_temp . " = '2'");

			# Generamos la sesión
			#$_SESSION[SESS_APP_ID] = $this->db->lastInsertId();
			# Seguridad
			#$_SESSION['pe_time'][] = time() + 50;
			
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado con éxito, lo estamos redireccionando.');
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
			return $this->db->select('*', t_azp_document_type, d_azp_document_type_m_deleted . " = '1' AND " . d_azp_document_type_m_status . " = '1'", "ORDER BY " . d_azp_document_type_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>