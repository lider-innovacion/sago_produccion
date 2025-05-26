<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class Lostpass extends Models implements OCREND {
		public function __construct() {
			parent::__construct();
		}
		# Envía el correo
		final public function RepairPass(array $data) : array {
			try {
				$mail = $this->db->scape($data['email']);
				#$user = $this->db->select('id,user', t_az_user ,"email='$mail'",'LIMIT 1');
				$user = $this->db->select("*", t_az_user, d_az_user_t_email . " = '" . $mail . "'", "LIMIT 1");
				# Filtro
				if (false == $user) { throw new Exception('El correo electronico digitado no existe en la base de datos.'); }
				$id = $user[0][d_az_user_id_az_user];
				$u = uniqid();
				$keypass = time();
				$HTML = 'Hola usuario <b>' . $user[0][d_az_user_t_login] . '</b>, has solicitado recuperar tu contraseña perdida, si no has realizado esta acción omite este mensaje o te invitamos a que realices un cambio de tu contraseña anterior.
					<br />
					<br />
					Para cambiar tu contraseña has <a href="' . URL . 'lostpass/cambiar/' . $keypass . '" target="_blank">clic aquí</a>.';
				Helper::load('emails');
				$dest[$mail] = $user[0][d_az_user_t_login];
				$email = Emails::send_mail($dest,Emails::plantilla($HTML),'AdisonZenemij: Recuperar Contraseña');
				if (true === $email) {
					$var_array = array(
						d_az_user_t_key_password => $keypass,
						d_az_user_t_key_password_temp => $u,
					);
					$this->db->update(t_az_user, $var_array, d_az_user_id_az_user . " = '" . $id . "'", "LIMIT 1");
					return array('success' => 1, 'message' => 'Hemos enviado un email al correo electronico: <b>' . $mail . '</b> para que recuperes tu contraseña.');
				} else {
					throw new Exception($email);
				}
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		# Actualiza la contraseña
		final public function UpdatePass() {
			$u = $this->db->select("*", t_az_user, d_az_user_t_key_password . " = '" . $this->id . "' AND " . d_az_user_t_key_password . " <> '0'", "LIMIT 1");
			if (false != $u) {
				Helper::load('strings');
				$id = $u[0][d_az_user_id_az_user];
				$pass = $u[0][d_az_user_t_key_password_temp];
				$hash = Strings::hash($pass);
				$var_array = array(
					d_az_user_t_key_password => 0,
					d_az_user_t_key_password_temp => '',
					d_az_user_t_password => $hash,
				);
				$this->db->update(t_az_user, $var_array, d_az_user_t_key_password . " = '" . $this->id . "' AND " . d_az_user_t_key_password . " <> '0' AND " . d_az_user_id_az_user . " = '" . $id . "'");
				return $pass;
			}
			return false;
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>