<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	# Url Reemplazo _ para la palabra completa del modulo
	define('d_zz_contact_url_delete', str_replace('_', '', 'zz_contact/eliminate/delete/'));
	define('d_zz_contact_url_remove', str_replace('_', '', 'zz_contact/read/remove/'));
	define('d_zz_contact_url_query', str_replace('_', '', 'zz_contact/read/query/'));
	//------------------------------------------------
	final class m_zz_contactModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_zz_contact(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_country = $this->db->scape($data['field_country']);
				$empty_transact = $this->db->scape($data['field_transact']);
				#--------------------------------------------------------------------------------------------------------------------
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_names'])) {
					throw new Exception('<b>Error:</b> El campo de nombres es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::only_letters($data['field_names'])) {
					throw new Exception('<b>Error:</b> El campo de nombres solo permite letras.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_names']) > 255) {
					throw new Exception('<b>Error:</b> El campo de nombres permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($data['field_names'], '  ')) {
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener más de un espacio en blanco seguido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $data['field_names'])) {
					throw new Exception('<b>Error:</b> El campo de nombres no permite tener espacios en blanco al principio o al final.');
				}#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_surnames'])) {
					throw new Exception('<b>Error:</b> El campo de apellidos es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::only_letters($data['field_surnames'])) {
					throw new Exception('<b>Error:</b> El campo de apellidos solo permite letras.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_surnames']) > 255) {
					throw new Exception('<b>Error:</b> El campo de apellidos permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($data['field_surnames'], '  ')) {
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener más de un espacio en blanco seguido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $data['field_surnames'])) {
					throw new Exception('<b>Error:</b> El campo de apellidos no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_phone_fixed']) < 1) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo debe tener minimo 1 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_phone_fixed']) > 8) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo permite maximo hasta 8 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($data['field_phone_fixed'], ' ')) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $data['field_phone_fixed'])) {
					throw new Exception('<b>Error:</b> El campo de telefono fijo no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_phone_movil'])) {
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($data['field_phone_movil'])) {
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_phone_movil']) != 10) {
					throw new Exception('<b>Error:</b> El campo de telefono movil permite solamente 10 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($data['field_phone_movil'], ' ')) {
					throw new Exception('<b>Error:</b> El campo de telefono movil no permite ningun espacio en blanco.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::is_email($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strlen($data['field_email']) > 255) {
					throw new Exception('<b>Error:</b> El campo de correo electronico permite maximo hasta 255 caracteres.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_country']) || $data['field_country'] == 0) {
					throw new Exception('<b>Error:</b> El campo de pais es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_affair'])) {
					throw new Exception('<b>Error:</b> El campo de asunto es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::only_letters($data['field_affair'])) {
					throw new Exception('<b>Error:</b> El campo de asunto solo permite letras.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_transact']) || $data['field_transact'] == 0) {
					throw new Exception('<b>Error:</b> El campo de tramite es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($data['field_message'])) {
					throw new Exception('<b>Error:</b> El campo de mensaje es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (strpos($data['field_message'], '  ')) {
					throw new Exception('<b>Error:</b> El campo de mensaje no permite tener más de un espacio en blanco seguido.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (preg_match('/^\s|\s$/', $data['field_message'])) {
					throw new Exception('<b>Error:</b> El campo de mensaje no permite tener espacios en blanco al principio o al final.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar en la base de datos si existen el registro
				$sql_country = $this->db->select('*', t_azp_country, d_azp_country_id_azp_country . " = '" . $empty_country . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_country) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_country) == '') { $sql_country[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_country[0][0]) != strtolower($empty_country)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El pais seleccionado no se encuentra registradao.');
					}
				}
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar en la base de datos si existen el registro
				$sql_transact = $this->db->select('*', t_azp_transact, d_azp_transact_id_azp_transact . " = '" . $empty_transact . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_transact) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_transact) == '') { $sql_transact[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_transact[0][0]) != strtolower($empty_transact)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tramite seleccionado no se encuentra registrado.');
					}
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_zz_contact(array $data) : array {
			$var_error = $this->error_sql_zz_contact($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			$var_rand = rand(2147483647, 1);
			$var_array = array(
				d_azp_contact_m_by_created => '1',
				d_azp_contact_m_by_modified => '1',
				d_azp_contact_m_date_created => DATE_HOUR,
				d_azp_contact_m_date_modified => DATE_HOUR,
				d_azp_contact_m_deleted => '1',
				d_azp_contact_m_level => '1',
				d_azp_contact_m_status => '1',
				d_azp_contact_m_temp => '1',
				d_azp_contact_t_affair => ucwords(strtolower($data['field_affair'])),
				d_azp_contact_t_code => $var_rand,
				d_azp_contact_t_date => date('Y-m-d'),
				d_azp_contact_t_email => $data['field_email'],
				d_azp_contact_t_message => $data['field_message'],
				d_azp_contact_t_names => ucwords(strtolower($data['field_names'])),
				d_azp_contact_t_phone_fixed => $data['field_phone_fixed'],
				d_azp_contact_t_phone_movil => $data['field_phone_movil'],
				d_azp_contact_t_surnames => ucwords(strtolower($data['field_surnames'])),
				d_azp_contact_v_id_azp_country => $data['field_country'],
				d_azp_contact_v_id_azp_transact => $data['field_transact'],
			);
			$this->db->insert(t_azp_contact, $var_array);
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente. Se generó el siguiente código ' . $var_rand . ' para darle respuesta a su inquietud solicitada.');
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_country() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_country, d_azp_country_m_deleted . " = '1' AND " . d_azp_country_m_status . " = '1'", "ORDER BY " . d_azp_country_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_transact() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_transact, d_azp_transact_m_deleted . " = '1' AND " . d_azp_transact_m_status . " = '1'", "ORDER BY " . d_azp_transact_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>