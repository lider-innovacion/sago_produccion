<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	define('d_url', str_replace('_', '', 'password/error/'));
	//------------------------------------------------
	final class m_zz_recoverModel extends Models implements OCREND {
		public function __construct() {
			parent::__construct();
		}

		/*=========================================================================================================================*/
		# Enviar Correo Electronico
		final public function sql_zz_recover(array $data) : array {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_email = strtolower($this->db->scape($data['field_email']));
				$empty_login = strtolower($this->db->scape($data['field_login']));
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
				if (Func::emp($empty_login)) {
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!Strings::only_letters($empty_login)) {
					throw new Exception('<b>Error:</b> El campo de usuario solo permite letras.');
				}
				#--------------------------------------------------------------------------------------------------------------------
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
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$var_select = $this->db->select("*", t_azp_user, d_azp_user_m_temp . " = '2' AND " . d_azp_user_t_email . " = '" . $empty_email . "' AND " . d_azp_user_t_login . " = '" . $empty_login . "'", "LIMIT 1");
				#--------------------------------------------------------------------------------------------------------------------
				if (true == $var_select) { throw new Exception('<b>Error:</b> Ya se ha realizado la solicitud de una peticion de recuperacion de contraseña, te invitamos a que revises tu correo electronico.'); }
				#--------------------------------------------------------------------------------------------------------------------
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$var_sql = $this->db->select("*", t_azp_user, d_azp_user_m_temp . " = '1' AND " . d_azp_user_t_email . " = '" . $empty_email . "' AND " . d_azp_user_t_login . " = '" . $empty_login . "'", "LIMIT 1");
				#--------------------------------------------------------------------------------------------------------------------
				if (false == $var_sql) { throw new Exception('<b>Error:</b> El correo electronico o usuario digitados no coinciden con nuestra base de datos.'); }
				#--------------------------------------------------------------------------------------------------------------------
				$var_id_azp_user = $var_sql[0][d_azp_user_id_azp_user];
				$var_key_password = time() . time() . time();
				$var_key_password_temp = uniqid() . uniqid();
				$var_html = '
					<span class="text-info">Estimado, gracias por estar registrado en nuestra página web.</span>
					<br /><br />
					Recientemente solicitaste restablecer tu contraseña de tu cuenta ' . $empty_login . ' en nuestra pagina web <b>' . APP . '
					</b><br /><br />
					Por favor, haga clic en el siguiente enlace de abajo:
					<br /><br />
					<a href="' . URL . 'password/' . $var_key_password . '/" target="_blank">' . URL . 'password/' . $var_key_password . '/</a>.
					<br /><br />
					Saludos cordiales desde nuestro equipo, este mensaje fue enviado por el equipo de ' . APP . '
				';
				Helper::load('emails');
				$var_destination[$empty_email] = $var_sql[0][d_azp_user_t_login];
				$email = Emails::send_mail($var_destination,Emails::plantilla($var_html), APP . ': Restaurar Contraseña', true);
				if (true === $email) {
					# Linea de codigo con una variable y array para actualizar los datos en la tabla
					$var_array = array(d_azp_user_m_temp => '2', d_azp_user_t_key_password => $var_key_password, d_azp_user_t_key_password_temp => $var_key_password_temp,);
					# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
					$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $var_id_azp_user . "'", "LIMIT 1");
					# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
					return array('success' => 1, 'message' => '<b>Exito:</b> Te enviamos un mensaje a tu correo electronico, revisa tambien tu carpeta de spam.');
				} else {
					throw new Exception($email);
				}
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Actualizar Contraseña
		final public function sql_zz_recover_password() {
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$varl_sql = $this->db->select("*", t_azp_user, d_azp_user_t_key_password . " = '" . $this->id . "' AND " . d_azp_user_t_key_password . " <> '0'", "LIMIT 1");
			# Validar la sentencia sql
			if (false != $varl_sql) {
				# Cargar helper de cadenas de texto
				Helper::load('strings');
				# Obtener el id del usuario
				$var_id_azp_user = $varl_sql[0][d_azp_user_id_azp_user];
				# Obtener la contraseña temporal
				$var_password_temp = $varl_sql[0][d_azp_user_t_key_password_temp];
				# Codificar contraseña temporal con una seguridad extrema
				$var_hash = Strings::hash($var_password_temp);
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(d_azp_user_m_temp => '1', d_azp_user_t_password => $var_hash,);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $var_id_azp_user . "'");
				# Retornar la contraseña temporal
				return $var_password_temp;
			}
			# Retornar valores
			return false;
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>