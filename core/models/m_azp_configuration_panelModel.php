<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_configuration_panelModel extends Models implements OCREND {
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
					tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " AS 'lbl_azp_configuration_panel_id_azp_configuration_panel',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_created . " AS 'lbl_azp_configuration_panel_m_date_created',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_modified . " AS 'lbl_azp_configuration_panel_m_date_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_description . " AS 'lbl_azp_configuration_panel_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_change',
					tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_create',
					tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_delete',
					tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_detail',
					tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_email',
					tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_import',
					tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_remove',
					tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_report',
					tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_restore',
					tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_sub_menu',
					tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_update',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_change
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . "
						= tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_create
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . "
						= tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_delete
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . "
						= tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_detail
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . "
						= tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_email
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . "
						= tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_import
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . "
						= tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_remove
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . "
						= tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_report
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . "
						= tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_restore
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . "
						= tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_sub_menu
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . "
						= tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_update
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . "
						= tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_configuration_panel." . d_azp_configuration_panel_m_deleted . " = '1'
				ORDER BY tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_configuration_panel." . d_azs_configuration_panel_id_azs_configuration_panel . " AS 'lbl_azs_configuration_panel_id_azs_configuration_panel',
					tc_azs_configuration_panel." . d_azs_configuration_panel_m_date_modified . " AS 'lbl_azs_configuration_panel_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_configuration_panel." . d_azs_configuration_panel_m_date_created . " AS 'lbl_azs_configuration_panel_m_date_created',
					tc_azs_configuration_panel." . d_azs_configuration_panel_m_date_modified . " AS 'lbl_azs_configuration_panel_m_date_modified',
					tc_azs_configuration_panel." . d_azs_configuration_panel_m_description . " AS 'lbl_azs_configuration_panel_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_change . " AS 'lbl_azs_configuration_panel_t_pnl_change',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_create . " AS 'lbl_azs_configuration_panel_t_pnl_create',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_delete . " AS 'lbl_azs_configuration_panel_t_pnl_delete',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_detail . " AS 'lbl_azs_configuration_panel_t_pnl_detail',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_email . " AS 'lbl_azs_configuration_panel_t_pnl_email',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_import . " AS 'lbl_azs_configuration_panel_t_pnl_import',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_remove . " AS 'lbl_azs_configuration_panel_t_pnl_remove',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_report . " AS 'lbl_azs_configuration_panel_t_pnl_report',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_restore . " AS 'lbl_azs_configuration_panel_t_pnl_restore',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_sub_menu . " AS 'lbl_azs_configuration_panel_t_pnl_sub_menu',
					tc_azs_configuration_panel." . d_azs_configuration_panel_t_pnl_update . " AS 'lbl_azs_configuration_panel_t_pnl_update',
					tc_azs_configuration_panel." . d_azs_configuration_panel_u_user . " AS 'lbl_azs_configuration_panel_u_user'
				FROM " . t_azs_configuration_panel . " tc_azs_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_configuration_panel." . d_azs_configuration_panel_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_configuration_panel." . d_azs_configuration_panel_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_configuration_panel." . d_azs_configuration_panel_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_configuration_panel." . d_azs_configuration_panel_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_configuration_panel." . d_azs_configuration_panel_v_id_azp_configuration_panel . " = '" . $this->id . "'
				ORDER BY tc_azs_configuration_panel." . d_azs_configuration_panel_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_configuration_panel . "
				WHERE " . d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $this->id . "'
					AND " . d_azp_configuration_panel_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_configuration_panel);
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
					tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " AS 'lbl_azp_configuration_panel_id_azp_configuration_panel',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_created . " AS 'lbl_azp_configuration_panel_m_date_created',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_modified . " AS 'lbl_azp_configuration_panel_m_date_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_description . " AS 'lbl_azp_configuration_panel_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_change',
					tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_create',
					tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_delete',
					tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_detail',
					tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_email',
					tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_import',
					tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_remove',
					tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_report',
					tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_restore',
					tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_sub_menu',
					tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_update',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_change
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . "
						= tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_create
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . "
						= tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_delete
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . "
						= tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_detail
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . "
						= tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_remove
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . "
						= tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_email
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . "
						= tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_import
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . "
						= tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_report
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . "
						= tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_restore
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . "
						= tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_sub_menu
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . "
						= tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_update
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . "
						= tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " AS 'lbl_azp_configuration_panel_id_azp_configuration_panel',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_created . " AS 'lbl_azp_configuration_panel_m_date_created',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_modified . " AS 'lbl_azp_configuration_panel_m_date_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_description . " AS 'lbl_azp_configuration_panel_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_change',
					tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_create',
					tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_delete',
					tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_detail',
					tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_email',
					tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_import',
					tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_remove',
					tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_report',
					tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_restore',
					tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_sub_menu',
					tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_update',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_change
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . "
						= tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_create
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . "
						= tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_delete
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . "
						= tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_detail
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . "
						= tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_email
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . "
						= tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_import
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . "
						= tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_remove
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . "
						= tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_report
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . "
						= tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_restore
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . "
						= tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_sub_menu
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . "
						= tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_update
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . "
						= tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_m_deleted . " = '3'
				ORDER BY tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " AS 'lbl_azp_configuration_panel_id_azp_configuration_panel',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_created . " AS 'lbl_azp_configuration_panel_m_date_created',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_modified . " AS 'lbl_azp_configuration_panel_m_date_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_description . " AS 'lbl_azp_configuration_panel_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_change',
					tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_create',
					tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_delete',
					tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_detail',
					tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_email',
					tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_import',
					tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_remove',
					tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_report',
					tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_restore',
					tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_sub_menu',
					tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_update',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_change
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . "
						= tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_create
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . "
						= tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_delete
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . "
						= tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_detail
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . "
						= tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_email
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . "
						= tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_import
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . "
						= tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_remove
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . "
						= tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_report
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . "
						= tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_restore
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . "
						= tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_sub_menu
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . "
						= tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_update
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . "
						= tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_m_deleted . " = '1'
				ORDER BY tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " AS 'lbl_azp_configuration_panel_id_azp_configuration_panel',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_created . " AS 'lbl_azp_configuration_panel_m_date_created',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_modified . " AS 'lbl_azp_configuration_panel_m_date_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_description . " AS 'lbl_azp_configuration_panel_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_change',
					tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_create',
					tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_delete',
					tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_detail',
					tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_email',
					tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_import',
					tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_remove',
					tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_report',
					tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_restore',
					tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_sub_menu',
					tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_t_name . " AS 'lbl_azp_configuration_panel_t_pnl_update',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_change
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . "
						= tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_create
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . "
						= tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_delete
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . "
						= tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_detail
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . "
						= tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_email
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . "
						= tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_import
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . "
						= tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_remove
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . "
						= tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_report
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . "
						= tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_restore
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . "
						= tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_sub_menu
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . "
						= tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_update
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . "
						= tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_id_azp_pallet_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_m_deleted . " = '2'
				ORDER BY tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " AS 'lbl_azp_configuration_panel_id_azp_configuration_panel',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . " AS 'lbl_azp_configuration_panel_m_by_created',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_modified . " AS 'lbl_azp_configuration_panel_m_by_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_created . " AS 'lbl_azp_configuration_panel_m_date_created',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_date_modified . " AS 'lbl_azp_configuration_panel_m_date_modified',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_description . " AS 'lbl_azp_configuration_panel_m_description',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . " AS 'lbl_azp_configuration_panel_m_level',
					tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . " AS 'lbl_azp_configuration_panel_m_status',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . " AS 'lbl_azp_configuration_panel_t_pnl_change',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . " AS 'lbl_azp_configuration_panel_t_pnl_create',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . " AS 'lbl_azp_configuration_panel_t_pnl_delete',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . " AS 'lbl_azp_configuration_panel_t_pnl_detail',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . " AS 'lbl_azp_configuration_panel_t_pnl_email',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . " AS 'lbl_azp_configuration_panel_t_pnl_import',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . " AS 'lbl_azp_configuration_panel_t_pnl_remove',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . " AS 'lbl_azp_configuration_panel_t_pnl_report',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . " AS 'lbl_azp_configuration_panel_t_pnl_restore',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . " AS 'lbl_azp_configuration_panel_t_pnl_sub_menu',
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . " AS 'lbl_azp_configuration_panel_t_pnl_update',
					tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " AS 'lbl_azp_configuration_panel_v_id_azp_user'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_panel_delete(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_panel_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_level . " = '2'");
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
		final public function sql_azp_configuration_panel_delete(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_panel_delete($data);
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
				$var_array = array(d_azp_configuration_panel_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_panel, $var_array, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_configuration_panel_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_create'])) { throw new Exception('<b>Error:</b> El campo de nuevo esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_delete'])) { throw new Exception('<b>Error:</b> El campo de eliminar esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_detail'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_email'])) { throw new Exception('<b>Error:</b> El campo de correos esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_import'])) { throw new Exception('<b>Error:</b> El campo de importar esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_remove'])) { throw new Exception('<b>Error:</b> El campo de remover esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_sub_menu'])) { throw new Exception('<b>Error:</b> El campo de sub menu esta prohibido modificar.'); }
				if (!isset($data['field_cr_pnl_update'])) { throw new Exception('<b>Error:</b> El campo de actualizar esta prohibido modificar.'); }
				if (!isset($data['field_cr_user'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_pnl_change = $this->db->scape($data['field_cr_pnl_change']);
				$empty_pnl_create = $this->db->scape($data['field_cr_pnl_create']);
				$empty_pnl_delete = $this->db->scape($data['field_cr_pnl_delete']);
				$empty_pnl_detail = $this->db->scape($data['field_cr_pnl_detail']);
				$empty_pnl_email = $this->db->scape($data['field_cr_pnl_email']);
				$empty_pnl_import = $this->db->scape($data['field_cr_pnl_import']);
				$empty_pnl_remove = $this->db->scape($data['field_cr_pnl_remove']);
				$empty_pnl_report = $this->db->scape($data['field_cr_pnl_report']);
				$empty_pnl_restore = $this->db->scape($data['field_cr_pnl_restore']);
				$empty_pnl_sub_menu = $this->db->scape($data['field_cr_pnl_sub_menu']);
				$empty_pnl_update = $this->db->scape($data['field_cr_pnl_update']);
				$empty_user = $this->db->scape($data['field_cr_user']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_user) || strtolower($empty_user) == strtolower('seleccionar') || $empty_user == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_user)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_change) || strtolower($empty_pnl_change) == strtolower('seleccionar') || $empty_pnl_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_create) || strtolower($empty_pnl_create) == strtolower('seleccionar') || $empty_pnl_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_delete) || strtolower($empty_pnl_delete) == strtolower('seleccionar') || $empty_pnl_delete == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_delete)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_detail) || strtolower($empty_pnl_detail) == strtolower('seleccionar') || $empty_pnl_detail == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_email) || strtolower($empty_pnl_email) == strtolower('seleccionar') || $empty_pnl_email == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_import) || strtolower($empty_pnl_import) == strtolower('seleccionar') || $empty_pnl_import == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_import)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_remove) || strtolower($empty_pnl_remove) == strtolower('seleccionar') || $empty_pnl_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_report) || strtolower($empty_pnl_report) == strtolower('seleccionar') || $empty_pnl_report == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_report)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_restore) || strtolower($empty_pnl_restore) == strtolower('seleccionar') || $empty_pnl_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_sub_menu) || strtolower($empty_pnl_sub_menu) == strtolower('seleccionar') || $empty_pnl_sub_menu == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_sub_menu)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_update) || strtolower($empty_pnl_update) == strtolower('seleccionar') || $empty_pnl_update == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_update)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_user = $this->db->select(d_azp_configuration_panel_v_id_azp_user, t_azp_configuration_panel, d_azp_configuration_panel_v_id_azp_user . " = '" . $empty_user . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_user) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_user[0][0]) == strtolower($empty_user)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El usuario seleccionado ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_user = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_user . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_user) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_user) == '') { $sql_user[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_user[0][0]) != strtolower($empty_user)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El usuario seleccionado no se encuentra registrado.');
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
		final public function sql_azp_configuration_panel_insert(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_panel_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_pnl_change = $this->db->scape($data['field_cr_pnl_change']);
				$empty_pnl_create = $this->db->scape($data['field_cr_pnl_create']);
				$empty_pnl_delete = $this->db->scape($data['field_cr_pnl_delete']);
				$empty_pnl_detail = $this->db->scape($data['field_cr_pnl_detail']);
				$empty_pnl_email = $this->db->scape($data['field_cr_pnl_email']);
				$empty_pnl_import = $this->db->scape($data['field_cr_pnl_import']);
				$empty_pnl_remove = $this->db->scape($data['field_cr_pnl_remove']);
				$empty_pnl_report = $this->db->scape($data['field_cr_pnl_report']);
				$empty_pnl_restore = $this->db->scape($data['field_cr_pnl_restore']);
				$empty_pnl_sub_menu = $this->db->scape($data['field_cr_pnl_sub_menu']);
				$empty_pnl_update = $this->db->scape($data['field_cr_pnl_update']);
				$empty_user = $this->db->scape($data['field_cr_user']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_configuration_panel_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_configuration_panel_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_panel_m_date_created => DATE_HOUR,
					d_azp_configuration_panel_m_date_modified => DATE_HOUR,
					d_azp_configuration_panel_m_deleted => '1',
					d_azp_configuration_panel_m_description => $empty_description,
					d_azp_configuration_panel_m_level => '1',
					d_azp_configuration_panel_m_status => '1',
					d_azp_configuration_panel_m_temp => '1',
					d_azp_configuration_panel_t_pnl_change => $empty_pnl_change,
					d_azp_configuration_panel_t_pnl_create => $empty_pnl_create,
					d_azp_configuration_panel_t_pnl_delete => $empty_pnl_delete,
					d_azp_configuration_panel_t_pnl_detail => $empty_pnl_detail,
					d_azp_configuration_panel_t_pnl_email => $empty_pnl_email,
					d_azp_configuration_panel_t_pnl_import => $empty_pnl_import,
					d_azp_configuration_panel_t_pnl_remove => $empty_pnl_remove,
					d_azp_configuration_panel_t_pnl_report => $empty_pnl_report,
					d_azp_configuration_panel_t_pnl_restore => $empty_pnl_restore,
					d_azp_configuration_panel_t_pnl_sub_menu => $empty_pnl_sub_menu,
					d_azp_configuration_panel_t_pnl_update => $empty_pnl_update,
					d_azp_configuration_panel_v_id_azp_user => $empty_user,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_configuration_panel, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_panel_remove(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_panel_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_level . " = '2'");
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
		final public function sql_azp_configuration_panel_remove(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_panel_remove($data);
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
				$var_array = array(d_azp_configuration_panel_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_panel, $var_array, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_panel_restore(array $data) {
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
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#-------------------------------------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_panel_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_level . " = '2'");
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
		final public function sql_azp_configuration_panel_restore(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_panel_restore($data);
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
				$var_array = array(d_azp_configuration_panel_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_panel, $var_array, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_panel_update(array $data) {
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
				if (!isset($data['field_up_pnl_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_create'])) { throw new Exception('<b>Error:</b> El campo de nuevo esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_delete'])) { throw new Exception('<b>Error:</b> El campo de eliminar esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_detail'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_email'])) { throw new Exception('<b>Error:</b> El campo de correos esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_import'])) { throw new Exception('<b>Error:</b> El campo de importar esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_remove'])) { throw new Exception('<b>Error:</b> El campo de remover esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_sub_menu'])) { throw new Exception('<b>Error:</b> El campo de sub menu esta prohibido modificar.'); }
				if (!isset($data['field_up_pnl_update'])) { throw new Exception('<b>Error:</b> El campo de actualizar esta prohibido modificar.'); }
				if (!isset($data['field_up_user'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_pnl_change = $this->db->scape($data['field_up_pnl_change']);
				$empty_pnl_create = $this->db->scape($data['field_up_pnl_create']);
				$empty_pnl_delete = $this->db->scape($data['field_up_pnl_delete']);
				$empty_pnl_detail = $this->db->scape($data['field_up_pnl_detail']);
				$empty_pnl_email = $this->db->scape($data['field_up_pnl_email']);
				$empty_pnl_import = $this->db->scape($data['field_up_pnl_import']);
				$empty_pnl_remove = $this->db->scape($data['field_up_pnl_remove']);
				$empty_pnl_report = $this->db->scape($data['field_up_pnl_report']);
				$empty_pnl_restore = $this->db->scape($data['field_up_pnl_restore']);
				$empty_pnl_sub_menu = $this->db->scape($data['field_up_pnl_sub_menu']);
				$empty_pnl_update = $this->db->scape($data['field_up_pnl_update']);
				$empty_user = $this->db->scape($data['field_up_user']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_id) || $empty_id == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_id)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_user) || strtolower($empty_user) == strtolower('seleccionar') || $empty_user == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_user)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de usuario solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_change) || strtolower($empty_pnl_change) == strtolower('seleccionar') || $empty_pnl_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_create) || strtolower($empty_pnl_create) == strtolower('seleccionar') || $empty_pnl_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_delete) || strtolower($empty_pnl_delete) == strtolower('seleccionar') || $empty_pnl_delete == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_delete)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_detail) || strtolower($empty_pnl_detail) == strtolower('seleccionar') || $empty_pnl_detail == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_email) || strtolower($empty_pnl_email) == strtolower('seleccionar') || $empty_pnl_email == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_import) || strtolower($empty_pnl_import) == strtolower('seleccionar') || $empty_pnl_import == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_import)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_remove) || strtolower($empty_pnl_remove) == strtolower('seleccionar') || $empty_pnl_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_report) || strtolower($empty_pnl_report) == strtolower('seleccionar') || $empty_pnl_report == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_report)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_restore) || strtolower($empty_pnl_restore) == strtolower('seleccionar') || $empty_pnl_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_sub_menu) || strtolower($empty_pnl_sub_menu) == strtolower('seleccionar') || $empty_pnl_sub_menu == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_sub_menu)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_pnl_update) || strtolower($empty_pnl_update) == strtolower('seleccionar') || $empty_pnl_update == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_pnl_update)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_state) || strtolower($empty_state) == strtolower('seleccionar') || $empty_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_panel_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "' AND " . d_azp_configuration_panel_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_user = $this->db->select(d_azp_configuration_panel_v_id_azp_user, t_azp_configuration_panel, d_azp_configuration_panel_id_azp_configuration_panel . " != '" . $empty_id . "' AND " . d_azp_configuration_panel_v_id_azp_user . " = '" . $empty_user . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_user) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_user[0][0]) == strtolower($empty_user)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El usuario seleccionado ya existe registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_user = $this->db->select('*', t_azp_user, d_azp_user_id_azp_user . " = '" . $empty_user . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_user) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_user) == '') { $sql_user[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_user[0][0]) != strtolower($empty_user)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El usuario seleccionado no se encuentra registrado.');
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
		final public function sql_azp_configuration_panel_update(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_panel_update($data);
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
				$empty_pnl_change = $this->db->scape($data['field_up_pnl_change']);
				$empty_pnl_create = $this->db->scape($data['field_up_pnl_create']);
				$empty_pnl_delete = $this->db->scape($data['field_up_pnl_delete']);
				$empty_pnl_detail = $this->db->scape($data['field_up_pnl_detail']);
				$empty_pnl_email = $this->db->scape($data['field_up_pnl_email']);
				$empty_pnl_import = $this->db->scape($data['field_up_pnl_import']);
				$empty_pnl_remove = $this->db->scape($data['field_up_pnl_remove']);
				$empty_pnl_report = $this->db->scape($data['field_up_pnl_report']);
				$empty_pnl_restore = $this->db->scape($data['field_up_pnl_restore']);
				$empty_pnl_sub_menu = $this->db->scape($data['field_up_pnl_sub_menu']);
				$empty_pnl_update = $this->db->scape($data['field_up_pnl_update']);
				$empty_user = $this->db->scape($data['field_up_user']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " AS 'lbl_azp_configuration_panel_id_azp_configuration_panel',
						tc_azp_configuration_panel." . d_azp_configuration_panel_m_deleted . " AS 'lbl_azp_configuration_panel_m_deleted',
						tc_azp_configuration_panel." . d_azp_configuration_panel_m_description . " AS 'lbl_azp_configuration_panel_m_description',
						tc_azp_configuration_panel." . d_azp_configuration_panel_m_level . " AS 'lbl_azp_configuration_panel_m_level',
						tc_azp_configuration_panel." . d_azp_configuration_panel_m_status . " AS 'lbl_azp_configuration_panel_m_status',
						tc_azp_configuration_panel." . d_azp_configuration_panel_m_temp . " AS 'lbl_azp_configuration_panel_m_temp',
						tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_change',
						tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_create',
						tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_delete',
						tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_detail',
						tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_email',
						tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_import',
						tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_remove',
						tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_report',
						tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_restore',
						tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_sub_menu',
						tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_t_name . " AS 'lbl_azp_pallet_color_pnl_update',
						tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
					FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_change
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . "
							= tc_azp_pallet_color_pnl_change." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_create
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . "
							= tc_azp_pallet_color_pnl_create." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_delete
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . "
							= tc_azp_pallet_color_pnl_delete." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_detail
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . "
							= tc_azp_pallet_color_pnl_detail." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_email
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . "
							= tc_azp_pallet_color_pnl_email." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_import
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . "
							= tc_azp_pallet_color_pnl_import." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_remove
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . "
							= tc_azp_pallet_color_pnl_remove." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_report
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . "
							= tc_azp_pallet_color_pnl_report." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_restore
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . "
							= tc_azp_pallet_color_pnl_restore." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_sub_menu
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . "
							= tc_azp_pallet_color_pnl_sub_menu." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color_pnl_update
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . "
							= tc_azp_pallet_color_pnl_update." . d_azp_pallet_color_id_azp_pallet_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user
						ON tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . "
							= tc_azp_user." . d_azp_user_id_azp_user . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'
					LIMIT 1
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_configuration_panel_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_configuration_panel_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_configuration_panel_m_date_created => DATE_HOUR,
							d_azs_configuration_panel_m_date_modified => DATE_HOUR,
							d_azs_configuration_panel_m_deleted => $key_sql_select['lbl_azp_configuration_panel_m_deleted'],
							d_azs_configuration_panel_m_description => $key_sql_select['lbl_azp_configuration_panel_m_description'],
							d_azs_configuration_panel_m_level => $key_sql_select['lbl_azp_configuration_panel_m_level'],
							d_azs_configuration_panel_m_status => $key_sql_select['lbl_azp_configuration_panel_m_status'],
							d_azs_configuration_panel_m_temp => $key_sql_select['lbl_azp_configuration_panel_m_temp'],
							d_azs_configuration_panel_t_pnl_change => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_change']),
							d_azs_configuration_panel_t_pnl_create => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_create']),
							d_azs_configuration_panel_t_pnl_delete => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_delete']),
							d_azs_configuration_panel_t_pnl_detail => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_detail']),
							d_azs_configuration_panel_t_pnl_email => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_email']),
							d_azs_configuration_panel_t_pnl_import => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_import']),
							d_azs_configuration_panel_t_pnl_remove => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_remove']),
							d_azs_configuration_panel_t_pnl_report => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_report']),
							d_azs_configuration_panel_t_pnl_restore => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_restore']),
							d_azs_configuration_panel_t_pnl_sub_menu => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_sub_menu']),
							d_azs_configuration_panel_t_pnl_update => strtolower($key_sql_select['lbl_azp_pallet_color_pnl_update']),
							d_azs_configuration_panel_u_user => strtolower($key_sql_select['lbl_azp_user_t_login']),
							d_azs_configuration_panel_v_id_azp_configuration_panel => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_configuration_panel, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_configuration_panel_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_panel_m_date_modified => DATE_HOUR,
					d_azp_configuration_panel_m_description => $empty_description,
					d_azp_configuration_panel_m_status => $empty_state,
					d_azp_configuration_panel_t_pnl_change => $empty_pnl_change,
					d_azp_configuration_panel_t_pnl_create => $empty_pnl_create,
					d_azp_configuration_panel_t_pnl_delete => $empty_pnl_delete,
					d_azp_configuration_panel_t_pnl_detail => $empty_pnl_detail,
					d_azp_configuration_panel_t_pnl_email => $empty_pnl_email,
					d_azp_configuration_panel_t_pnl_import => $empty_pnl_import,
					d_azp_configuration_panel_t_pnl_remove => $empty_pnl_remove,
					d_azp_configuration_panel_t_pnl_report => $empty_pnl_report,
					d_azp_configuration_panel_t_pnl_restore => $empty_pnl_restore,
					d_azp_configuration_panel_t_pnl_sub_menu => $empty_pnl_sub_menu,
					d_azp_configuration_panel_t_pnl_update => $empty_pnl_update,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_panel, $var_array, d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_pallet_color() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_pallet_color, d_azp_pallet_color_m_deleted . " = '1' AND " . d_azp_pallet_color_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_user() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_user, d_azp_user_m_deleted . " = '1' AND " . d_azp_user_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>