<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_pdf_cellModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " AS 'lbl_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_created . " AS 'lbl_azp_ibn_pdf_cell_m_date_created',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_modified . " AS 'lbl_azp_ibn_pdf_cell_m_date_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_description . " AS 'lbl_azp_ibn_pdf_cell_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_align . " AS 'lbl_azp_ibn_pdf_cell_t_align',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_border . " AS 'lbl_azp_ibn_pdf_cell_t_border',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_fill . " AS 'lbl_azp_ibn_pdf_cell_t_fill',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_height . " AS 'lbl_azp_ibn_pdf_cell_t_height',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_line . " AS 'lbl_azp_ibn_pdf_cell_t_line',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_link . " AS 'lbl_azp_ibn_pdf_cell_t_link',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_text . " AS 'lbl_azp_ibn_pdf_cell_t_text',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_width . " AS 'lbl_azp_ibn_pdf_cell_t_width',
					tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_t_name . " AS 'lbl_azp_ibn_interface_dit_t_name'
				FROM " . t_azp_ibn_pdf_cell . " tc_azp_ibn_pdf_cell
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_interface_dit . " tc_azp_ibn_interface_dit
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . "
						= tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_id_azp_ibn_interface_dit . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_id_azs_ibn_pdf_cell . " AS 'lbl_azs_ibn_pdf_cell_id_azs_ibn_pdf_cell',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_date_modified . " AS 'lbl_azs_ibn_pdf_cell_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_date_created . " AS 'lbl_azs_ibn_pdf_cell_m_date_created',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_date_modified . " AS 'lbl_azs_ibn_pdf_cell_m_date_modified',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_description . " AS 'lbl_azs_ibn_pdf_cell_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_align . " AS 'lbl_azs_ibn_pdf_cell_t_align',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_border . " AS 'lbl_azs_ibn_pdf_cell_t_border',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_fill . " AS 'lbl_azs_ibn_pdf_cell_t_fill',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_height . " AS 'lbl_azs_ibn_pdf_cell_t_height',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_line . " AS 'lbl_azs_ibn_pdf_cell_t_line',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_link . " AS 'lbl_azs_ibn_pdf_cell_t_link',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_text . " AS 'lbl_azs_ibn_pdf_cell_t_text',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_t_width . " AS 'lbl_azs_ibn_pdf_cell_t_width',
					tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_u_ibn_interface_dit . " AS 'lbl_azs_ibn_pdf_cell_u_ibn_interface_dit'
				FROM " . t_azs_ibn_pdf_cell . " tc_azs_ibn_pdf_cell
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_v_id_azp_ibn_pdf_cell . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_pdf_cell." . d_azs_ibn_pdf_cell_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_pdf_cell . "
				WHERE " . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $this->id . "'
					AND " . d_azp_ibn_pdf_cell_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_pdf_cell);
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " AS 'lbl_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_created . " AS 'lbl_azp_ibn_pdf_cell_m_date_created',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_modified . " AS 'lbl_azp_ibn_pdf_cell_m_date_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_description . " AS 'lbl_azp_ibn_pdf_cell_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_align . " AS 'lbl_azp_ibn_pdf_cell_t_align',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_border . " AS 'lbl_azp_ibn_pdf_cell_t_border',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_fill . " AS 'lbl_azp_ibn_pdf_cell_t_fill',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_height . " AS 'lbl_azp_ibn_pdf_cell_t_height',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_line . " AS 'lbl_azp_ibn_pdf_cell_t_line',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_link . " AS 'lbl_azp_ibn_pdf_cell_t_link',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_text . " AS 'lbl_azp_ibn_pdf_cell_t_text',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_width . " AS 'lbl_azp_ibn_pdf_cell_t_width',
					tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_t_name . " AS 'lbl_azp_ibn_interface_dit_t_name'
				FROM " . t_azp_ibn_pdf_cell . " tc_azp_ibn_pdf_cell
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_interface_dit . " tc_azp_ibn_interface_dit
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . "
						= tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_id_azp_ibn_interface_dit . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $this->id . "'
					AND tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " AS 'lbl_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_created . " AS 'lbl_azp_ibn_pdf_cell_m_date_created',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_modified . " AS 'lbl_azp_ibn_pdf_cell_m_date_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_description . " AS 'lbl_azp_ibn_pdf_cell_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_align . " AS 'lbl_azp_ibn_pdf_cell_t_align',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_border . " AS 'lbl_azp_ibn_pdf_cell_t_border',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_fill . " AS 'lbl_azp_ibn_pdf_cell_t_fill',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_height . " AS 'lbl_azp_ibn_pdf_cell_t_height',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_line . " AS 'lbl_azp_ibn_pdf_cell_t_line',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_link . " AS 'lbl_azp_ibn_pdf_cell_t_link',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_text . " AS 'lbl_azp_ibn_pdf_cell_t_text',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_width . " AS 'lbl_azp_ibn_pdf_cell_t_width',
					tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_t_name . " AS 'lbl_azp_ibn_interface_dit_t_name'
				FROM " . t_azp_ibn_pdf_cell . " tc_azp_ibn_pdf_cell
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_interface_dit . " tc_azp_ibn_interface_dit
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . "
						= tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_id_azp_ibn_interface_dit . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_deleted . " = '3'
				ORDER BY tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " AS 'lbl_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_created . " AS 'lbl_azp_ibn_pdf_cell_m_date_created',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_modified . " AS 'lbl_azp_ibn_pdf_cell_m_date_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_description . " AS 'lbl_azp_ibn_pdf_cell_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_align . " AS 'lbl_azp_ibn_pdf_cell_t_align',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_border . " AS 'lbl_azp_ibn_pdf_cell_t_border',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_fill . " AS 'lbl_azp_ibn_pdf_cell_t_fill',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_height . " AS 'lbl_azp_ibn_pdf_cell_t_height',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_line . " AS 'lbl_azp_ibn_pdf_cell_t_line',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_link . " AS 'lbl_azp_ibn_pdf_cell_t_link',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_text . " AS 'lbl_azp_ibn_pdf_cell_t_text',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_width . " AS 'lbl_azp_ibn_pdf_cell_t_width',
					tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_t_name . " AS 'lbl_azp_ibn_interface_dit_t_name'
				FROM " . t_azp_ibn_pdf_cell . " tc_azp_ibn_pdf_cell
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_interface_dit . " tc_azp_ibn_interface_dit
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . "
						= tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_id_azp_ibn_interface_dit . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_deleted . " = '1'
				ORDER BY tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " AS 'lbl_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_created . " AS 'lbl_azp_ibn_pdf_cell_m_date_created',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_modified . " AS 'lbl_azp_ibn_pdf_cell_m_date_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_description . " AS 'lbl_azp_ibn_pdf_cell_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_align . " AS 'lbl_azp_ibn_pdf_cell_t_align',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_border . " AS 'lbl_azp_ibn_pdf_cell_t_border',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_fill . " AS 'lbl_azp_ibn_pdf_cell_t_fill',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_height . " AS 'lbl_azp_ibn_pdf_cell_t_height',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_line . " AS 'lbl_azp_ibn_pdf_cell_t_line',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_link . " AS 'lbl_azp_ibn_pdf_cell_t_link',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_text . " AS 'lbl_azp_ibn_pdf_cell_t_text',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_width . " AS 'lbl_azp_ibn_pdf_cell_t_width',
					tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_t_name . " AS 'lbl_azp_ibn_interface_dit_t_name'
				FROM " . t_azp_ibn_pdf_cell . " tc_azp_ibn_pdf_cell
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_deleted . " = '2'
				ORDER BY tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " AS 'lbl_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . " AS 'lbl_azp_ibn_pdf_cell_m_by_created',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_modified . " AS 'lbl_azp_ibn_pdf_cell_m_by_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_created . " AS 'lbl_azp_ibn_pdf_cell_m_date_created',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_date_modified . " AS 'lbl_azp_ibn_pdf_cell_m_date_modified',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_description . " AS 'lbl_azp_ibn_pdf_cell_m_description',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_level . " AS 'lbl_azp_ibn_pdf_cell_m_level',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_status . " AS 'lbl_azp_ibn_pdf_cell_m_status',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_align . " AS 'lbl_azp_ibn_pdf_cell_t_align',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_border . " AS 'lbl_azp_ibn_pdf_cell_t_border',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_fill . " AS 'lbl_azp_ibn_pdf_cell_t_fill',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_height . " AS 'lbl_azp_ibn_pdf_cell_t_height',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_line . " AS 'lbl_azp_ibn_pdf_cell_t_line',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_link . " AS 'lbl_azp_ibn_pdf_cell_t_link',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_text . " AS 'lbl_azp_ibn_pdf_cell_t_text',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_t_width . " AS 'lbl_azp_ibn_pdf_cell_t_width',
					tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . " AS 'lbl_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit'
				FROM " . t_azp_ibn_pdf_cell . " tc_azp_ibn_pdf_cell
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_interface_dit . " tc_azp_ibn_interface_dit
					ON tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . "
						= tc_azp_ibn_interface_dit." . d_azp_ibn_interface_dit_id_azp_ibn_interface_dit . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $this->id . "'
					AND tc_azp_ibn_pdf_cell." . d_azp_ibn_pdf_cell_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_ibn_pdf_cell_delete(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_delete'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_delete']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está eliminando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está eliminando ya se encuentra eliminado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_pdf_cell_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_pdf_cell_delete($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_delete']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_pdf_cell_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_pdf_cell, $var_array, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_pdf_cell_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_align'])) { throw new Exception('<b>Error:</b> El campo de alineacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_border'])) { throw new Exception('<b>Error:</b> El campo de borde esta prohibido modificar.'); }
				if (!isset($data['field_cr_fill'])) { throw new Exception('<b>Error:</b> El campo de fondo esta prohibido modificar.'); }
				if (!isset($data['field_cr_height'])) { throw new Exception('<b>Error:</b> El campo de altura celda esta prohibido modificar.'); }
				if (!isset($data['field_cr_line'])) { throw new Exception('<b>Error:</b> El campo de salto linea esta prohibido modificar.'); }
				if (!isset($data['field_cr_link'])) { throw new Exception('<b>Error:</b> El campo de enlace esta prohibido modificar.'); }
				if (!isset($data['field_cr_text'])) { throw new Exception('<b>Error:</b> El campo de texto esta prohibido modificar.'); }
				if (!isset($data['field_cr_width'])) { throw new Exception('<b>Error:</b> El campo de ancho celdas esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_interface_dit'])) { throw new Exception('<b>Error:</b> El campo de dit esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_align = $this->db->scape($data['field_cr_align']);
				$empty_border = $this->db->scape($data['field_cr_border']);
				$empty_fill = $this->db->scape($data['field_cr_fill']);
				$empty_height = $this->db->scape($data['field_cr_height']);
				$empty_line = $this->db->scape($data['field_cr_line']);
				$empty_link = $this->db->scape($data['field_cr_link']);
				$empty_text = $this->db->scape($data['field_cr_text']);
				$empty_width = $this->db->scape($data['field_cr_width']);
				$empty_ibn_interface_dit = $this->db->scape($data['field_cr_ibn_interface_dit']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (strtolower($empty_border) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de borde es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_border)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de borde solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (strtolower($empty_line) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de salto linea es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_line)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de salto linea solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_align) || strtolower($empty_align) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de alineacion es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_align)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de alineacion solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (strtolower($empty_fill) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fondo es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_fill)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fondo solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_interface_dit) || strtolower($empty_ibn_interface_dit) == strtolower('seleccionar') || $empty_ibn_interface_dit == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dit es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_interface_dit)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dit solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_interface_dit = $this->db->select('*', t_azp_ibn_interface_dit,
					d_azp_ibn_interface_dit_id_azp_ibn_interface_dit . " = '" . $empty_ibn_interface_dit . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_interface_dit) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_interface_dit) == '') { $sql_ibn_interface_dit[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_interface_dit[0][0]) != strtolower($empty_ibn_interface_dit)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El dit seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$var_sql = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . " = '" . $empty_ibn_interface_dit . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($var_sql[0][0]) == strtolower($empty_ibn_interface_dit)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El dit seleccionado ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_ibn_pdf_cell_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_pdf_cell_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_align = $this->db->scape($data['field_cr_align']);
				$empty_border = $this->db->scape($data['field_cr_border']);
				$empty_fill = $this->db->scape($data['field_cr_fill']);
				$empty_height = $this->db->scape($data['field_cr_height']);
				$empty_line = $this->db->scape($data['field_cr_line']);
				$empty_link = $this->db->scape($data['field_cr_link']);
				$empty_text = $this->db->scape($data['field_cr_text']);
				$empty_width = $this->db->scape($data['field_cr_width']);
				$empty_ibn_interface_dit = $this->db->scape($data['field_cr_ibn_interface_dit']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_pdf_cell_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_pdf_cell_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_pdf_cell_m_date_created => DATE_HOUR,
					d_azp_ibn_pdf_cell_m_date_modified => DATE_HOUR,
					d_azp_ibn_pdf_cell_m_deleted => '1',
					d_azp_ibn_pdf_cell_m_description => $empty_description,
					d_azp_ibn_pdf_cell_m_level => '2',
					d_azp_ibn_pdf_cell_m_status => '1',
					d_azp_ibn_pdf_cell_m_temp => '1',
					d_azp_ibn_pdf_cell_t_align => strtoupper($empty_align),
					d_azp_ibn_pdf_cell_t_border => strtoupper($empty_border),
					d_azp_ibn_pdf_cell_t_fill => strtoupper($empty_fill),
					d_azp_ibn_pdf_cell_t_height => strtoupper($empty_height),
					d_azp_ibn_pdf_cell_t_line => strtoupper($empty_line),
					d_azp_ibn_pdf_cell_t_link => strtoupper($empty_link),
					d_azp_ibn_pdf_cell_t_text => strtoupper($empty_text),
					d_azp_ibn_pdf_cell_t_width => strtoupper($empty_width),
					d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit => $empty_ibn_interface_dit,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_pdf_cell, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_pdf_cell_remove(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_remove'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_remove']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_deleted . " = '1'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está removiendo ya se encuentra removido.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_pdf_cell_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_pdf_cell_remove($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_remove']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_pdf_cell_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_pdf_cell, $var_array, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_pdf_cell_restore(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_restore'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_restore']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está restaurando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está restaurando ya se encuentra restaurado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_pdf_cell_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_pdf_cell_restore($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_restore']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_pdf_cell_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_pdf_cell, $var_array, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_pdf_cell_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_up_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_up_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_align'])) { throw new Exception('<b>Error:</b> El campo de alineacion esta prohibido modificar.'); }
				if (!isset($data['field_up_border'])) { throw new Exception('<b>Error:</b> El campo de borde esta prohibido modificar.'); }
				if (!isset($data['field_up_fill'])) { throw new Exception('<b>Error:</b> El campo de fondo esta prohibido modificar.'); }
				if (!isset($data['field_up_height'])) { throw new Exception('<b>Error:</b> El campo de altura celda esta prohibido modificar.'); }
				if (!isset($data['field_up_line'])) { throw new Exception('<b>Error:</b> El campo de salto linea esta prohibido modificar.'); }
				if (!isset($data['field_up_link'])) { throw new Exception('<b>Error:</b> El campo de enlace esta prohibido modificar.'); }
				if (!isset($data['field_up_text'])) { throw new Exception('<b>Error:</b> El campo de texto esta prohibido modificar.'); }
				if (!isset($data['field_up_width'])) { throw new Exception('<b>Error:</b> El campo de ancho celdas esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_interface_dit'])) { throw new Exception('<b>Error:</b> El campo de modulo esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_align = $this->db->scape($data['field_up_align']);
				$empty_border = $this->db->scape($data['field_up_border']);
				$empty_fill = $this->db->scape($data['field_up_fill']);
				$empty_height = $this->db->scape($data['field_up_height']);
				$empty_line = $this->db->scape($data['field_up_line']);
				$empty_link = $this->db->scape($data['field_up_link']);
				$empty_text = $this->db->scape($data['field_up_text']);
				$empty_width = $this->db->scape($data['field_up_width']);
				$empty_ibn_interface_dit = $this->db->scape($data['field_up_ibn_interface_dit']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (strtolower($empty_border) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de borde es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_border)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de borde solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (strtolower($empty_line) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de salto linea es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_line)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de salto linea solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_align) || strtolower($empty_align) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de alineacion es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_align)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de alineacion solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (strtolower($empty_fill) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fondo es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_fill)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de fondo solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_interface_dit) || strtolower($empty_ibn_interface_dit) == strtolower('seleccionar') || $empty_ibn_interface_dit == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dit es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_interface_dit)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dit solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_state) || strtolower($empty_state) == strtolower('seleccionar') || $empty_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El registro que está actualizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_interface_dit = $this->db->select('*', t_azp_ibn_interface_dit,
					d_azp_ibn_interface_dit_id_azp_ibn_interface_dit . " = '" . $empty_ibn_interface_dit . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_interface_dit) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_interface_dit) == '') { $sql_ibn_interface_dit[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_interface_dit[0][0]) != strtolower($empty_ibn_interface_dit)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El dit seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$var_sql = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " != '" . $empty_id . "' AND " . d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit . " = '" . $empty_ibn_interface_dit . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($var_sql[0][0]) == strtolower($empty_ibn_interface_dit)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El dit seleccionado ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_state = $this->db->select('*', t_azp_sys_state, d_azp_sys_state_id_azp_sys_state . " = '" . $empty_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_state) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_state) == '') { $sql_state[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_state[0][0]) != strtolower($empty_state)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_pdf_cell_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_pdf_cell_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				$empty_align = $this->db->scape($data['field_up_align']);
				$empty_border = $this->db->scape($data['field_up_border']);
				$empty_fill = $this->db->scape($data['field_up_fill']);
				$empty_height = $this->db->scape($data['field_up_height']);
				$empty_line = $this->db->scape($data['field_up_line']);
				$empty_link = $this->db->scape($data['field_up_link']);
				$empty_text = $this->db->scape($data['field_up_text']);
				$empty_width = $this->db->scape($data['field_up_width']);
				$empty_ibn_interface_dit = $this->db->scape($data['field_up_ibn_interface_dit']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_pdf_cell, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_pdf_cell_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_pdf_cell_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_pdf_cell_m_date_created => DATE_HOUR,
							d_azs_ibn_pdf_cell_m_date_modified => DATE_HOUR,
							d_azs_ibn_pdf_cell_m_deleted => $key_sql_select[d_azp_ibn_pdf_cell_m_deleted],
							d_azs_ibn_pdf_cell_m_description => $key_sql_select[d_azp_ibn_pdf_cell_m_description],
							d_azs_ibn_pdf_cell_m_level => $key_sql_select[d_azp_ibn_pdf_cell_m_level],
							d_azs_ibn_pdf_cell_m_status => $key_sql_select[d_azp_ibn_pdf_cell_m_status],
							d_azs_ibn_pdf_cell_m_temp => $key_sql_select[d_azp_ibn_pdf_cell_m_temp],
							d_azp_ibn_pdf_cell_t_align => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_align]),
							d_azp_ibn_pdf_cell_t_border => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_border]),
							d_azp_ibn_pdf_cell_t_fill => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_fill]),
							d_azp_ibn_pdf_cell_t_height => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_height]),
							d_azp_ibn_pdf_cell_t_line => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_line]),
							d_azp_ibn_pdf_cell_t_link => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_link]),
							d_azp_ibn_pdf_cell_t_text => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_text]),
							d_azp_ibn_pdf_cell_t_width => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_t_width]),
							d_azs_ibn_pdf_cell_u_ibn_interface_dit => strtoupper($key_sql_select[d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit]),
							d_azs_ibn_pdf_cell_v_id_azp_ibn_pdf_cell => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_pdf_cell, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_pdf_cell_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_pdf_cell_m_date_modified => DATE_HOUR,
					d_azp_ibn_pdf_cell_m_description => $empty_description,
					d_azp_ibn_pdf_cell_m_status => $empty_state,
					d_azp_ibn_pdf_cell_t_align => strtoupper($empty_align),
					d_azp_ibn_pdf_cell_t_border => strtoupper($empty_border),
					d_azp_ibn_pdf_cell_t_fill => strtoupper($empty_fill),
					d_azp_ibn_pdf_cell_t_height => strtoupper($empty_height),
					d_azp_ibn_pdf_cell_t_line => strtoupper($empty_line),
					d_azp_ibn_pdf_cell_t_link => strtoupper($empty_link),
					d_azp_ibn_pdf_cell_t_text => strtoupper($empty_text),
					d_azp_ibn_pdf_cell_t_width => strtoupper($empty_width),
					d_azp_ibn_pdf_cell_v_id_azp_ibn_interface_dit => $empty_ibn_interface_dit,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_pdf_cell, $var_array, d_azp_ibn_pdf_cell_id_azp_ibn_pdf_cell . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_interface_dit() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_interface_dit, d_azp_ibn_interface_dit_m_deleted . " = '1' AND " . d_azp_ibn_interface_dit_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>