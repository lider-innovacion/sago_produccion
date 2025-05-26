<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_zz_applicationModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_zz_controller_update() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_application . "
				WHERE " . d_azp_application_id_azp_application . " = '" . $this->id . "'
					AND " . d_azp_application_m_deleted . " = '1'
					AND " . d_azp_application_m_status . " = '1'
				LIMIT 1
			");
			#$var_sql = $this->db->select("*", t_azp_application, d_azp_application_id_azp_application . " = '" . $this->id . "' AND " . d_azp_application_m_deleted . " = '1' AND " . d_azp_application_m_status . " = '1'", "LIMIT 1");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) { return $var_result[0]; } else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'dashboard/access/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zz_application_update() {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(d_azp_user_v_id_azp_application => $this->id,);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_user, $var_array, d_azp_user_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'dashboard/application/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>