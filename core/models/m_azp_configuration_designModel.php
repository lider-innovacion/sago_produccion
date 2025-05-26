<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_configuration_designModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " AS 'lbl_azp_configuration_design_id_azp_configuration_design',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_created . " AS 'lbl_azp_configuration_design_m_date_created',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_modified . " AS 'lbl_azp_configuration_design_m_date_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_description . " AS 'lbl_azp_configuration_design_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_color." . d_azp_configuration_color_t_name . " AS 'lbl_azp_configuration_color_t_name',
					tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_name . " AS 'lbl_azp_configuration_dimension_t_name',
					tc_azp_configuration_theme." . d_azp_configuration_theme_t_name . " AS 'lbl_azp_configuration_theme_t_name',
					-- tc_azp_configuration_table_by_create." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_by_create',
					-- tc_azp_configuration_table_change." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_change',
					-- tc_azp_configuration_table_detail." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_detail',
					-- tc_azp_configuration_table_eliminate." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_eliminate',
					-- tc_azp_configuration_table_read." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_read',
					-- tc_azp_configuration_table_remove." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_remove',
					-- tc_azp_configuration_table_report." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_report',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
						= tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . "
						= tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_theme . "
						= tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_by_create
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . "
						= tc_azp_configuration_table_by_create." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_change
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . "
						= tc_azp_configuration_table_change." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_detail
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . "
						= tc_azp_configuration_table_detail." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_eliminate
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . "
						= tc_azp_configuration_table_eliminate." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_read
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . "
						= tc_azp_configuration_table_read." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_remove
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . "
						= tc_azp_configuration_table_remove." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_report
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . "
						= tc_azp_configuration_table_report." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_configuration_design." . d_azp_configuration_design_m_deleted . " = '1'
				ORDER BY tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_configuration_design." . d_azs_configuration_design_id_azs_configuration_design . " AS 'lbl_azs_configuration_design_id_azs_configuration_design',
					tc_azs_configuration_design." . d_azs_configuration_design_m_date_modified . " AS 'lbl_azs_configuration_design_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_configuration_design." . d_azs_configuration_design_m_date_created . " AS 'lbl_azs_configuration_design_m_date_created',
					tc_azs_configuration_design." . d_azs_configuration_design_m_date_modified . " AS 'lbl_azs_configuration_design_m_date_modified',
					tc_azs_configuration_design." . d_azs_configuration_design_m_description . " AS 'lbl_azs_configuration_design_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_action . " AS 'lbl_azs_configuration_design_t_btn_action',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_cancel . " AS 'lbl_azs_configuration_design_t_btn_cancel',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_change . " AS 'lbl_azs_configuration_design_t_btn_change',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_close . " AS 'lbl_azs_configuration_design_t_btn_close',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_column_toggle . " AS 'lbl_azs_configuration_design_t_btn_column_toggle',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_colvis_column . " AS 'lbl_azs_configuration_design_t_btn_colvis_column',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_colvis_restore . " AS 'lbl_azs_configuration_design_t_btn_colvis_restore',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_copy . " AS 'lbl_azs_configuration_design_t_btn_copy',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_create . " AS 'lbl_azs_configuration_design_t_btn_create',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_csv . " AS 'lbl_azs_configuration_design_t_btn_csv',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_delete . " AS 'lbl_azs_configuration_design_t_btn_delete',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_detail . " AS 'lbl_azs_configuration_design_t_btn_detail',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_email . " AS 'lbl_azs_configuration_design_t_btn_email',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_excel . " AS 'lbl_azs_configuration_design_t_btn_excel',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_export . " AS 'lbl_azs_configuration_design_t_btn_export',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_import . " AS 'lbl_azs_configuration_design_t_btn_import',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_menu . " AS 'lbl_azs_configuration_design_t_btn_menu',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_page_length . " AS 'lbl_azs_configuration_design_t_btn_page_length',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_pdf . " AS 'lbl_azs_configuration_design_t_btn_pdf',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_print . " AS 'lbl_azs_configuration_design_t_btn_print',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_remove . " AS 'lbl_azs_configuration_design_t_btn_remove',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_report . " AS 'lbl_azs_configuration_design_t_btn_report',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_restore . " AS 'lbl_azs_configuration_design_t_btn_restore',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_search . " AS 'lbl_azs_configuration_design_t_btn_search',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_sub_menu . " AS 'lbl_azs_configuration_design_t_btn_sub_menu',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_sync . " AS 'lbl_azs_configuration_design_t_btn_sync',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_template . " AS 'lbl_azs_configuration_design_t_btn_template',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_update . " AS 'lbl_azs_configuration_design_t_btn_update',
					tc_azs_configuration_design." . d_azs_configuration_design_t_btn_visible . " AS 'lbl_azs_configuration_design_t_btn_visible',
					tc_azs_configuration_design." . d_azs_configuration_design_t_color . " AS 'lbl_azs_configuration_design_t_color',
					tc_azs_configuration_design." . d_azs_configuration_design_t_dimension . " AS 'lbl_azs_configuration_design_t_dimension',
					tc_azs_configuration_design." . d_azs_configuration_design_t_theme . " AS 'lbl_azs_configuration_design_t_theme',
					tc_azs_configuration_design." . d_azs_configuration_design_t_table_by_create . " AS 'lbl_azs_configuration_design_t_table_by_create',
					tc_azs_configuration_design." . d_azs_configuration_design_t_table_change . " AS 'lbl_azs_configuration_design_t_table_change',
					tc_azs_configuration_design." . d_azs_configuration_design_t_table_detail . " AS 'lbl_azs_configuration_design_t_table_detail',
					tc_azs_configuration_design." . d_azs_configuration_design_t_table_eliminate . " AS 'lbl_azs_configuration_design_t_table_eliminate',
					tc_azs_configuration_design." . d_azs_configuration_design_t_table_read . " AS 'lbl_azs_configuration_design_t_table_read',
					tc_azs_configuration_design." . d_azs_configuration_design_t_table_remove . " AS 'lbl_azs_configuration_design_t_table_remove',
					tc_azs_configuration_design." . d_azs_configuration_design_t_table_report . " AS 'lbl_azs_configuration_design_t_table_report',
					tc_azs_configuration_design." . d_azs_configuration_design_u_user . " AS 'lbl_azs_configuration_design_u_user'
				FROM " . t_azs_configuration_design . " tc_azs_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_configuration_design." . d_azs_configuration_design_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_configuration_design." . d_azs_configuration_design_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_configuration_design." . d_azs_configuration_design_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_configuration_design." . d_azs_configuration_design_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_configuration_design." . d_azs_configuration_design_v_id_azp_configuration_design . " = '" . $this->id . "'
				ORDER BY tc_azs_configuration_design." . d_azs_configuration_design_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_configuration_design . "
				WHERE " . d_azp_configuration_design_id_azp_configuration_design . " = '" . $this->id . "'
					AND " . d_azp_configuration_design_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_configuration_design);
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " AS 'lbl_azp_configuration_design_id_azp_configuration_design',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_created . " AS 'lbl_azp_configuration_design_m_date_created',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_modified . " AS 'lbl_azp_configuration_design_m_date_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_description . " AS 'lbl_azp_configuration_design_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_btn_action." . d_azp_configuration_design_t_btn_action . " AS 'lbl_azp_configuration_design_t_btn_action',
					tc_azp_configuration_btn_cancel." . d_azp_configuration_design_t_btn_cancel . " AS 'lbl_azp_configuration_design_t_btn_cancel',
					tc_azp_configuration_btn_change." . d_azp_configuration_design_t_btn_change . " AS 'lbl_azp_configuration_design_t_btn_change',
					tc_azp_configuration_btn_close." . d_azp_configuration_design_t_btn_close . " AS 'lbl_azp_configuration_design_t_btn_close',
					tc_azp_configuration_btn_column_toggle." . d_azp_configuration_design_t_btn_column_toggle . " AS 'lbl_azp_configuration_design_t_btn_column_toggle',
					tc_azp_configuration_btn_colvis_column." . d_azp_configuration_design_t_btn_colvis_column . " AS 'lbl_azp_configuration_design_t_btn_colvis_column',
					tc_azp_configuration_btn_colvis_restore." . d_azp_configuration_design_t_btn_colvis_restore . " AS 'lbl_azp_configuration_design_t_btn_colvis_restore',
					tc_azp_configuration_btn_copy." . d_azp_configuration_design_t_btn_copy . " AS 'lbl_azp_configuration_design_t_btn_copy',
					tc_azp_configuration_btn_create." . d_azp_configuration_design_t_btn_create . " AS 'lbl_azp_configuration_design_t_btn_create',
					tc_azp_configuration_btn_csv." . d_azp_configuration_design_t_btn_csv . " AS 'lbl_azp_configuration_design_t_btn_csv',
					tc_azp_configuration_btn_delete." . d_azp_configuration_design_t_btn_delete . " AS 'lbl_azp_configuration_design_t_btn_delete',
					tc_azp_configuration_btn_detail." . d_azp_configuration_design_t_btn_detail . " AS 'lbl_azp_configuration_design_t_btn_detail',
					tc_azp_configuration_btn_email." . d_azp_configuration_design_t_btn_email . " AS 'lbl_azp_configuration_design_t_btn_email',
					tc_azp_configuration_btn_excel." . d_azp_configuration_design_t_btn_excel . " AS 'lbl_azp_configuration_design_t_btn_excel',
					tc_azp_configuration_btn_export." . d_azp_configuration_design_t_btn_export . " AS 'lbl_azp_configuration_design_t_btn_export',
					tc_azp_configuration_btn_import." . d_azp_configuration_design_t_btn_import . " AS 'lbl_azp_configuration_design_t_btn_import',
					tc_azp_configuration_btn_menu." . d_azp_configuration_design_t_btn_menu . " AS 'lbl_azp_configuration_design_t_btn_menu',
					tc_azp_configuration_btn_page_length." . d_azp_configuration_design_t_btn_page_length . " AS 'lbl_azp_configuration_design_t_btn_page_length',
					tc_azp_configuration_btn_pdf." . d_azp_configuration_design_t_btn_pdf . " AS 'lbl_azp_configuration_design_t_btn_pdf',
					tc_azp_configuration_btn_print." . d_azp_configuration_design_t_btn_print . " AS 'lbl_azp_configuration_design_t_btn_print',
					tc_azp_configuration_btn_remove." . d_azp_configuration_design_t_btn_remove . " AS 'lbl_azp_configuration_design_t_btn_remove',
					tc_azp_configuration_btn_report." . d_azp_configuration_design_t_btn_report . " AS 'lbl_azp_configuration_design_t_btn_report',
					tc_azp_configuration_btn_restore." . d_azp_configuration_design_t_btn_restore . " AS 'lbl_azp_configuration_design_t_btn_restore',
					tc_azp_configuration_btn_search." . d_azp_configuration_design_t_btn_search . " AS 'lbl_azp_configuration_design_t_btn_search',
					tc_azp_configuration_btn_sub_menu." . d_azp_configuration_design_t_btn_sub_menu . " AS 'lbl_azp_configuration_design_t_btn_sub_menu',
					tc_azp_configuration_btn_sync." . d_azp_configuration_design_t_btn_sync . " AS 'lbl_azp_configuration_design_t_btn_sync',
					tc_azp_configuration_btn_template." . d_azp_configuration_design_t_btn_template . " AS 'lbl_azp_configuration_design_t_btn_template',
					tc_azp_configuration_btn_update." . d_azp_configuration_design_t_btn_update . " AS 'lbl_azp_configuration_design_t_btn_update',
					tc_azp_configuration_btn_visible." . d_azp_configuration_design_t_btn_visible . " AS 'lbl_azp_configuration_design_t_btn_visible',
					tc_azp_configuration_color." . d_azp_configuration_color_t_name . " AS 'lbl_azp_configuration_design_t_color',
					tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_name . " AS 'lbl_azp_configuration_design_t_dimension',
					tc_azp_configuration_theme." . d_azp_configuration_theme_t_name . " AS 'lbl_azp_configuration_design_t_theme',
					tc_azp_configuration_table_by_create." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_design_t_table_by_create',
					tc_azp_configuration_table_change." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_design_t_table_change',
					tc_azp_configuration_table_detail." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_design_t_table_detail',
					tc_azp_configuration_table_eliminate." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_design_t_table_eliminate',
					tc_azp_configuration_table_read." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_design_t_table_read',
					tc_azp_configuration_table_remove." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_design_t_table_remove',
					tc_azp_configuration_table_report." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_design_t_table_report',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_action
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_action . "
						= tc_azp_configuration_btn_action." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_cancel
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_cancel . "
						= tc_azp_configuration_btn_cancel." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_change
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_change . "
						= tc_azp_configuration_btn_change." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_close
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_close . "
						= tc_azp_configuration_btn_close." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_column_toggle
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_column_toggle . "
						= tc_azp_configuration_btn_column_toggle." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_colvis_column
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_column . "
						= tc_azp_configuration_btn_colvis_column." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_colvis_restore
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_restore . "
						= tc_azp_configuration_btn_colvis_restore." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_copy
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_copy . "
						= tc_azp_configuration_btn_copy." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_create
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_create . "
						= tc_azp_configuration_btn_create." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_csv
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_csv . "
						= tc_azp_configuration_btn_csv." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_delete
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_delete . "
						= tc_azp_configuration_btn_delete." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_detail
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_detail . "
						= tc_azp_configuration_btn_detail." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_email
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_email . "
						= tc_azp_configuration_btn_email." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_excel
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_excel . "
						= tc_azp_configuration_btn_excel." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_export
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_export . "
						= tc_azp_configuration_btn_export." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_import
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_import . "
						= tc_azp_configuration_btn_import." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_menu
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_menu . "
						= tc_azp_configuration_btn_menu." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_page_length
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_page_length . "
						= tc_azp_configuration_btn_page_length." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_pdf
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_pdf . "
						= tc_azp_configuration_btn_pdf." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_print
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_print . "
						= tc_azp_configuration_btn_print." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_remove
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_remove . "
						= tc_azp_configuration_btn_remove." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_report
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_report . "
						= tc_azp_configuration_btn_report." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_restore
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_restore . "
						= tc_azp_configuration_btn_restore." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_search
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_search . "
						= tc_azp_configuration_btn_search." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_sub_menu
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sub_menu . "
						= tc_azp_configuration_btn_sub_menu." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_sync
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sync . "
						= tc_azp_configuration_btn_sync." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_template
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_template . "
						= tc_azp_configuration_btn_template." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_update
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_update . "
						= tc_azp_configuration_btn_update." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_btn_visible
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_visible . "
						= tc_azp_configuration_btn_visible." . d_azp_configuration_button_id_azp_configuration_button . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
						= tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . "
						= tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_theme . "
						= tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_by_create
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . "
						= tc_azp_configuration_table_by_create." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_change
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . "
						= tc_azp_configuration_table_change." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_detail
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . "
						= tc_azp_configuration_table_detail." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_eliminate
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . "
						= tc_azp_configuration_table_eliminate." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_read
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . "
						= tc_azp_configuration_table_read." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_remove
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . "
						= tc_azp_configuration_table_remove." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_report
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . "
						= tc_azp_configuration_table_report." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " AS 'lbl_azp_configuration_design_id_azp_configuration_design',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_created . " AS 'lbl_azp_configuration_design_m_date_created',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_modified . " AS 'lbl_azp_configuration_design_m_date_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_description . " AS 'lbl_azp_configuration_design_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_color." . d_azp_configuration_color_t_name . " AS 'lbl_azp_configuration_color_t_name',
					tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_name . " AS 'lbl_azp_configuration_dimension_t_name',
					tc_azp_configuration_theme." . d_azp_configuration_theme_t_name . " AS 'lbl_azp_configuration_theme_t_name',
					tc_azp_configuration_table_by_create." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_by_create',
					tc_azp_configuration_table_change." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_change',
					tc_azp_configuration_table_detail." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_detail',
					tc_azp_configuration_table_eliminate." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_eliminate',
					tc_azp_configuration_table_read." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_read',
					tc_azp_configuration_table_remove." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_remove',
					tc_azp_configuration_table_report." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_report',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
						= tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . "
						= tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_theme . "
						= tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_by_create
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . "
						= tc_azp_configuration_table_by_create." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_change
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . "
						= tc_azp_configuration_table_change." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_detail
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . "
						= tc_azp_configuration_table_detail." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_eliminate
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . "
						= tc_azp_configuration_table_eliminate." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_read
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . "
						= tc_azp_configuration_table_read." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_remove
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . "
						= tc_azp_configuration_table_remove." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_report
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . "
						= tc_azp_configuration_table_report." . d_azp_configuration_table_id_azp_configuration_table . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_m_deleted . " = '3'
				ORDER BY tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " AS 'lbl_azp_configuration_design_id_azp_configuration_design',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_created . " AS 'lbl_azp_configuration_design_m_date_created',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_modified . " AS 'lbl_azp_configuration_design_m_date_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_description . " AS 'lbl_azp_configuration_design_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_color." . d_azp_configuration_color_t_name . " AS 'lbl_azp_configuration_color_t_name',
					tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_name . " AS 'lbl_azp_configuration_dimension_t_name',
					tc_azp_configuration_theme." . d_azp_configuration_theme_t_name . " AS 'lbl_azp_configuration_theme_t_name',
					-- tc_azp_configuration_table_by_create." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_by_create',
					-- tc_azp_configuration_table_change." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_change',
					-- tc_azp_configuration_table_detail." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_detail',
					-- tc_azp_configuration_table_eliminate." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_eliminate',
					-- tc_azp_configuration_table_read." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_read',
					-- tc_azp_configuration_table_remove." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_remove',
					-- tc_azp_configuration_table_report." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_report',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
						= tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . "
						= tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_theme . "
						= tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
				/*-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_by_create
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . "
						= tc_azp_configuration_table_by_create." . d_azp_configuration_table_id_azp_configuration_table . "*/
				/*-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_change
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . "
						= tc_azp_configuration_table_change." . d_azp_configuration_table_id_azp_configuration_table . "*/
				/*-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_detail
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . "
						= tc_azp_configuration_table_detail." . d_azp_configuration_table_id_azp_configuration_table . "*/
				/*-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_eliminate
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . "
						= tc_azp_configuration_table_eliminate." . d_azp_configuration_table_id_azp_configuration_table . "*/
				/*-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_read
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . "
						= tc_azp_configuration_table_read." . d_azp_configuration_table_id_azp_configuration_table . "*/
				/*-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_remove
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . "
						= tc_azp_configuration_table_remove." . d_azp_configuration_table_id_azp_configuration_table . "*/
				/*-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_report
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . "
						= tc_azp_configuration_table_report." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_m_deleted . " = '1'
				ORDER BY tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " AS 'lbl_azp_configuration_design_id_azp_configuration_design',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_created . " AS 'lbl_azp_configuration_design_m_date_created',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_modified . " AS 'lbl_azp_configuration_design_m_date_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_description . " AS 'lbl_azp_configuration_design_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_configuration_color." . d_azp_configuration_color_t_name . " AS 'lbl_azp_configuration_color_t_name',
					tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_name . " AS 'lbl_azp_configuration_dimension_t_name',
					tc_azp_configuration_theme." . d_azp_configuration_theme_t_name . " AS 'lbl_azp_configuration_theme_t_name',
					-- tc_azp_configuration_table_by_create." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_by_create',
					-- tc_azp_configuration_table_change." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_change',
					-- tc_azp_configuration_table_detail." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_detail',
					-- tc_azp_configuration_table_eliminate." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_eliminate',
					-- tc_azp_configuration_table_read." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_read',
					-- tc_azp_configuration_table_remove." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_remove',
					-- tc_azp_configuration_table_report." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_report',
					tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
						= tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . "
						= tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_theme . "
						= tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_by_create
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . "
						= tc_azp_configuration_table_by_create." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_change
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . "
						= tc_azp_configuration_table_change." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_detail
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . "
						= tc_azp_configuration_table_detail." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_eliminate
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . "
						= tc_azp_configuration_table_eliminate." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_read
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . "
						= tc_azp_configuration_table_read." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_remove
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . "
						= tc_azp_configuration_table_remove." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				/*INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_report
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . "
						= tc_azp_configuration_table_report." . d_azp_configuration_table_id_azp_configuration_table . "*/
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . "
						= tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_m_deleted . " = '2'
				ORDER BY tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " AS 'lbl_azp_configuration_design_id_azp_configuration_design',
					tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . " AS 'lbl_azp_configuration_design_m_by_created',
					tc_azp_configuration_design." . d_azp_configuration_design_m_by_modified . " AS 'lbl_azp_configuration_design_m_by_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_created . " AS 'lbl_azp_configuration_design_m_date_created',
					tc_azp_configuration_design." . d_azp_configuration_design_m_date_modified . " AS 'lbl_azp_configuration_design_m_date_modified',
					tc_azp_configuration_design." . d_azp_configuration_design_m_description . " AS 'lbl_azp_configuration_design_m_description',
					tc_azp_configuration_design." . d_azp_configuration_design_m_level . " AS 'lbl_azp_configuration_design_m_level',
					tc_azp_configuration_design." . d_azp_configuration_design_m_status . " AS 'lbl_azp_configuration_design_m_status',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_action . " AS 'lbl_azp_configuration_design_t_btn_action',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_cancel . " AS 'lbl_azp_configuration_design_t_btn_cancel',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_change . " AS 'lbl_azp_configuration_design_t_btn_change',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_close . " AS 'lbl_azp_configuration_design_t_btn_close',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_column_toggle . " AS 'lbl_azp_configuration_design_t_btn_column_toggle',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_column . " AS 'lbl_azp_configuration_design_t_btn_colvis_column',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_restore . " AS 'lbl_azp_configuration_design_t_btn_colvis_restore',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_copy . " AS 'lbl_azp_configuration_design_t_btn_copy',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_create . " AS 'lbl_azp_configuration_design_t_btn_create',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_csv . " AS 'lbl_azp_configuration_design_t_btn_csv',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_delete . " AS 'lbl_azp_configuration_design_t_btn_delete',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_detail . " AS 'lbl_azp_configuration_design_t_btn_detail',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_email . " AS 'lbl_azp_configuration_design_t_btn_email',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_excel . " AS 'lbl_azp_configuration_design_t_btn_excel',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_export . " AS 'lbl_azp_configuration_design_t_btn_export',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_import . " AS 'lbl_azp_configuration_design_t_btn_import',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_menu . " AS 'lbl_azp_configuration_design_t_btn_menu',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_page_length . " AS 'lbl_azp_configuration_design_t_btn_page_length',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_pdf . " AS 'lbl_azp_configuration_design_t_btn_pdf',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_print . " AS 'lbl_azp_configuration_design_t_btn_print',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_remove . " AS 'lbl_azp_configuration_design_t_btn_remove',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_report . " AS 'lbl_azp_configuration_design_t_btn_report',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_restore . " AS 'lbl_azp_configuration_design_t_btn_restore',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_search . " AS 'lbl_azp_configuration_design_t_btn_search',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sub_menu . " AS 'lbl_azp_configuration_design_t_btn_sub_menu',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sync . " AS 'lbl_azp_configuration_design_t_btn_sync',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_template . " AS 'lbl_azp_configuration_design_t_btn_template',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_update . " AS 'lbl_azp_configuration_design_t_btn_update',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_visible . " AS 'lbl_azp_configuration_design_t_btn_visible',
					tc_azp_configuration_design." . d_azp_configuration_design_t_color . " AS 'lbl_azp_configuration_design_t_color',
					tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . " AS 'lbl_azp_configuration_design_t_dimension',
					tc_azp_configuration_design." . d_azp_configuration_design_t_theme . " AS 'lbl_azp_configuration_design_t_theme',
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . " AS 'lbl_azp_configuration_design_t_table_by_create',
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . " AS 'lbl_azp_configuration_design_t_table_change',
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . " AS 'lbl_azp_configuration_design_t_table_detail',
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . " AS 'lbl_azp_configuration_design_t_table_eliminate',
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . " AS 'lbl_azp_configuration_design_t_table_read',
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . " AS 'lbl_azp_configuration_design_t_table_remove',
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . " AS 'lbl_azp_configuration_design_t_table_report',
					tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " AS 'lbl_azp_configuration_design_v_id_azp_user'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_configuration_design." . d_azp_configuration_design_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " = '" . $this->id . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_design_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_design_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_level . " = '2'");
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
		final public function sql_azp_configuration_design_delete(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_design_delete($data);
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
				$var_array = array(d_azp_configuration_design_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_design, $var_array, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_configuration_design_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_action'])) { throw new Exception('<b>Error:</b> El campo de accion esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_cancel'])) { throw new Exception('<b>Error:</b> El campo de cancelar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_close'])) { throw new Exception('<b>Error:</b> El campo de copiar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_column_toggle'])) { throw new Exception('<b>Error:</b> El campo de extender esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_colvis_column'])) { throw new Exception('<b>Error:</b> El campo de visible esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_colvis_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_copy'])) { throw new Exception('<b>Error:</b> El campo de copiar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_create'])) { throw new Exception('<b>Error:</b> El campo de nuevo esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_csv'])) { throw new Exception('<b>Error:</b> El campo de csv esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_delete'])) { throw new Exception('<b>Error:</b> El campo de eliminados esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_detail'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_email'])) { throw new Exception('<b>Error:</b> El campo de correos esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_excel'])) { throw new Exception('<b>Error:</b> El campo de excel esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_export'])) { throw new Exception('<b>Error:</b> El campo de exportar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_import'])) { throw new Exception('<b>Error:</b> El campo de importar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_menu'])) { throw new Exception('<b>Error:</b> El campo de menu esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_page_length'])) { throw new Exception('<b>Error:</b> El campo de mostrar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_pdf'])) { throw new Exception('<b>Error:</b> El campo de pdf esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_print'])) { throw new Exception('<b>Error:</b> El campo de imprimir esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_remove'])) { throw new Exception('<b>Error:</b> El campo de remover esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_search'])) { throw new Exception('<b>Error:</b> El campo de buscar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_sub_menu'])) { throw new Exception('<b>Error:</b> El campo de sub menu esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_sync'])) { throw new Exception('<b>Error:</b> El campo de sincronizar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_template'])) { throw new Exception('<b>Error:</b> El campo de plantilla esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_update'])) { throw new Exception('<b>Error:</b> El campo de actualizar esta prohibido modificar.'); }
				if (!isset($data['field_cr_btn_visible'])) { throw new Exception('<b>Error:</b> El campo de visible esta prohibido modificar.'); }
				if (!isset($data['field_cr_color'])) { throw new Exception('<b>Error:</b> El campo de color esta prohibido modificar.'); }
				if (!isset($data['field_cr_dimension'])) { throw new Exception('<b>Error:</b> El campo de dimension esta prohibido modificar.'); }
				if (!isset($data['field_cr_theme'])) { throw new Exception('<b>Error:</b> El campo de tema esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_by_create'])) { throw new Exception('<b>Error:</b> El campo de creado por esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_change'])) { throw new Exception('<b>Error:</b> El campo de listar esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_detail'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_eliminate'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_read'])) { throw new Exception('<b>Error:</b> El campo de eliminar esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_remove'])) { throw new Exception('<b>Error:</b> El campo de removidos esta prohibido modificar.'); }
				if (!isset($data['field_cr_table_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_cr_user'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_btn_action = $this->db->scape($data['field_cr_btn_action']);
				$empty_btn_cancel = $this->db->scape($data['field_cr_btn_cancel']);
				$empty_btn_change = $this->db->scape($data['field_cr_btn_change']);
				$empty_btn_close = $this->db->scape($data['field_cr_btn_close']);
				$empty_btn_column_toggle = $this->db->scape($data['field_cr_btn_column_toggle']);
				$empty_btn_colvis_column = $this->db->scape($data['field_cr_btn_colvis_column']);
				$empty_btn_colvis_restore = $this->db->scape($data['field_cr_btn_colvis_restore']);
				$empty_btn_copy = $this->db->scape($data['field_cr_btn_copy']);
				$empty_btn_create = $this->db->scape($data['field_cr_btn_create']);
				$empty_btn_csv = $this->db->scape($data['field_cr_btn_csv']);
				$empty_btn_delete = $this->db->scape($data['field_cr_btn_delete']);
				$empty_btn_detail = $this->db->scape($data['field_cr_btn_detail']);
				$empty_btn_email = $this->db->scape($data['field_cr_btn_email']);
				$empty_btn_excel = $this->db->scape($data['field_cr_btn_excel']);
				$empty_btn_export = $this->db->scape($data['field_cr_btn_export']);
				$empty_btn_import = $this->db->scape($data['field_cr_btn_import']);
				$empty_btn_menu = $this->db->scape($data['field_cr_btn_menu']);
				$empty_btn_page_length = $this->db->scape($data['field_cr_btn_page_length']);
				$empty_btn_pdf = $this->db->scape($data['field_cr_btn_pdf']);
				$empty_btn_print = $this->db->scape($data['field_cr_btn_print']);
				$empty_btn_remove = $this->db->scape($data['field_cr_btn_remove']);
				$empty_btn_report = $this->db->scape($data['field_cr_btn_report']);
				$empty_btn_restore = $this->db->scape($data['field_cr_btn_restore']);
				$empty_btn_search = $this->db->scape($data['field_cr_btn_search']);
				$empty_btn_sub_menu = $this->db->scape($data['field_cr_btn_sub_menu']);
				$empty_btn_sync = $this->db->scape($data['field_cr_btn_sync']);
				$empty_btn_template = $this->db->scape($data['field_cr_btn_template']);
				$empty_btn_update = $this->db->scape($data['field_cr_btn_update']);
				$empty_btn_visible = $this->db->scape($data['field_cr_btn_visible']);
				$empty_color = $this->db->scape($data['field_cr_color']);
				$empty_dimension = $this->db->scape($data['field_cr_dimension']);
				$empty_theme = $this->db->scape($data['field_cr_theme']);
				$empty_table_by_create = $this->db->scape($data['field_cr_table_by_create']);
				$empty_table_change = $this->db->scape($data['field_cr_table_change']);
				$empty_table_detail = $this->db->scape($data['field_cr_table_detail']);
				$empty_table_eliminate = $this->db->scape($data['field_cr_table_eliminate']);
				$empty_table_read = $this->db->scape($data['field_cr_table_read']);
				$empty_table_remove = $this->db->scape($data['field_cr_table_remove']);
				$empty_table_report = $this->db->scape($data['field_cr_table_report']);
				$empty_user = $this->db->scape($data['field_cr_user']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_color) || strtolower($empty_color) == strtolower('seleccionar') || $empty_color == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de color es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_color)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de color solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_dimension) || strtolower($empty_dimension) == strtolower('seleccionar') || $empty_dimension == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dimension es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_dimension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dimension solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_theme) || strtolower($empty_theme) == strtolower('seleccionar') || $empty_theme == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tema es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_theme)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tema solo permite numeros.');
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
				if (Func::emp($empty_btn_action) || strtolower($empty_btn_action) == strtolower('seleccionar') || $empty_btn_action == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de accion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_action)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de accion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_cancel) || strtolower($empty_btn_cancel) == strtolower('seleccionar') || $empty_btn_cancel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cancelar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_cancel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cancelar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_change) || strtolower($empty_btn_change) == strtolower('seleccionar') || $empty_btn_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_close) || strtolower($empty_btn_close) == strtolower('seleccionar') || $empty_btn_close == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cerrar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_close)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cerrar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_column_toggle) || strtolower($empty_btn_column_toggle) == strtolower('seleccionar') || $empty_btn_column_toggle == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de extender es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_column_toggle)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de extender solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_colvis_column) || strtolower($empty_btn_colvis_column) == strtolower('seleccionar') || $empty_btn_colvis_column == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_colvis_column)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_colvis_restore) || strtolower($empty_btn_colvis_restore) == strtolower('seleccionar') || $empty_btn_colvis_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_colvis_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_copy) || strtolower($empty_btn_copy) == strtolower('seleccionar') || $empty_btn_copy == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de copiar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_copy)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de copiar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_create) || strtolower($empty_btn_create) == strtolower('seleccionar') || $empty_btn_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_csv) || strtolower($empty_btn_csv) == strtolower('seleccionar') || $empty_btn_csv == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de csv es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_csv)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de csv solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_delete) || strtolower($empty_btn_delete) == strtolower('seleccionar') || $empty_btn_delete == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminados es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_delete)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminados solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_detail) || strtolower($empty_btn_detail) == strtolower('seleccionar') || $empty_btn_detail == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_email) || strtolower($empty_btn_email) == strtolower('seleccionar') || $empty_btn_email == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_excel) || strtolower($empty_btn_excel) == strtolower('seleccionar') || $empty_btn_excel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de excel es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_excel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de excel solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_export) || strtolower($empty_btn_export) == strtolower('seleccionar') || $empty_btn_export == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de exportar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_export)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de exportar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_import) || strtolower($empty_btn_import) == strtolower('seleccionar') || $empty_btn_import == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_import)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_menu) || strtolower($empty_btn_menu) == strtolower('seleccionar') || $empty_btn_menu == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de menu es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_menu)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de menu solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_page_length) || strtolower($empty_btn_page_length) == strtolower('seleccionar') || $empty_btn_page_length == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mostrar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_page_length)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mostrar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_pdf) || strtolower($empty_btn_pdf) == strtolower('seleccionar') || $empty_btn_pdf == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pdf es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_pdf)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pdf solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_print) || strtolower($empty_btn_print) == strtolower('seleccionar') || $empty_btn_print == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de imprimir es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_print)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de imprimir solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_remove) || strtolower($empty_btn_remove) == strtolower('seleccionar') || $empty_btn_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_report) || strtolower($empty_btn_report) == strtolower('seleccionar') || $empty_btn_report == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_report)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_restore) || strtolower($empty_btn_restore) == strtolower('seleccionar') || $empty_btn_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_search) || strtolower($empty_btn_search) == strtolower('seleccionar') || $empty_btn_search == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de buscar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_search)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de buscar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_sub_menu) || strtolower($empty_btn_sub_menu) == strtolower('seleccionar') || $empty_btn_sub_menu == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_sub_menu)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_sync) || strtolower($empty_btn_sync) == strtolower('seleccionar') || $empty_btn_sync == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sincronizar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_sync)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sincronizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_template) || strtolower($empty_btn_template) == strtolower('seleccionar') || $empty_btn_template == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_template)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_update) || strtolower($empty_btn_update) == strtolower('seleccionar') || $empty_btn_update == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_update)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_visible) || strtolower($empty_btn_visible) == strtolower('seleccionar') || $empty_btn_visible == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_visible)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_by_create) || strtolower($empty_table_by_create) == strtolower('seleccionar') || $empty_table_by_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de creado por es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_by_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de creado por solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_read) || strtolower($empty_table_read) == strtolower('seleccionar') || $empty_table_read == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de listar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_read)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de listar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_change) || strtolower($empty_table_change) == strtolower('seleccionar') || $empty_table_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_detail) || strtolower($empty_table_detail) == strtolower('seleccionar') || $empty_table_detail == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_eliminate) || strtolower($empty_table_eliminate) == strtolower('seleccionar') || $empty_table_eliminate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_eliminate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_remove) || strtolower($empty_table_remove) == strtolower('seleccionar') || $empty_table_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de removidos es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de removidos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_report) || strtolower($empty_table_report) == strtolower('seleccionar') || $empty_table_report == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_report)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_user = $this->db->select(d_azp_configuration_design_v_id_azp_user, t_azp_configuration_design, d_azp_configuration_design_v_id_azp_user . " = '" . $empty_user . "'");
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
		final public function sql_azp_configuration_design_insert(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_design_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_btn_action = $this->db->scape($data['field_cr_btn_action']);
				$empty_btn_cancel = $this->db->scape($data['field_cr_btn_cancel']);
				$empty_btn_change = $this->db->scape($data['field_cr_btn_change']);
				$empty_btn_close = $this->db->scape($data['field_cr_btn_close']);
				$empty_btn_column_toggle = $this->db->scape($data['field_cr_btn_column_toggle']);
				$empty_btn_colvis_column = $this->db->scape($data['field_cr_btn_colvis_column']);
				$empty_btn_colvis_restore = $this->db->scape($data['field_cr_btn_colvis_restore']);
				$empty_btn_copy = $this->db->scape($data['field_cr_btn_copy']);
				$empty_btn_create = $this->db->scape($data['field_cr_btn_create']);
				$empty_btn_csv = $this->db->scape($data['field_cr_btn_csv']);
				$empty_btn_delete = $this->db->scape($data['field_cr_btn_delete']);
				$empty_btn_detail = $this->db->scape($data['field_cr_btn_detail']);
				$empty_btn_email = $this->db->scape($data['field_cr_btn_email']);
				$empty_btn_excel = $this->db->scape($data['field_cr_btn_excel']);
				$empty_btn_export = $this->db->scape($data['field_cr_btn_export']);
				$empty_btn_import = $this->db->scape($data['field_cr_btn_import']);
				$empty_btn_menu = $this->db->scape($data['field_cr_btn_menu']);
				$empty_btn_page_length = $this->db->scape($data['field_cr_btn_page_length']);
				$empty_btn_pdf = $this->db->scape($data['field_cr_btn_pdf']);
				$empty_btn_print = $this->db->scape($data['field_cr_btn_print']);
				$empty_btn_remove = $this->db->scape($data['field_cr_btn_remove']);
				$empty_btn_report = $this->db->scape($data['field_cr_btn_report']);
				$empty_btn_restore = $this->db->scape($data['field_cr_btn_restore']);
				$empty_btn_search = $this->db->scape($data['field_cr_btn_search']);
				$empty_btn_sub_menu = $this->db->scape($data['field_cr_btn_sub_menu']);
				$empty_btn_sync = $this->db->scape($data['field_cr_btn_sync']);
				$empty_btn_template = $this->db->scape($data['field_cr_btn_template']);
				$empty_btn_update = $this->db->scape($data['field_cr_btn_update']);
				$empty_btn_visible = $this->db->scape($data['field_cr_btn_visible']);
				$empty_color = $this->db->scape($data['field_cr_color']);
				$empty_dimension = $this->db->scape($data['field_cr_dimension']);
				$empty_theme = $this->db->scape($data['field_cr_theme']);
				$empty_table_by_create = $this->db->scape($data['field_cr_table_by_create']);
				$empty_table_change = $this->db->scape($data['field_cr_table_change']);
				$empty_table_detail = $this->db->scape($data['field_cr_table_detail']);
				$empty_table_eliminate = $this->db->scape($data['field_cr_table_eliminate']);
				$empty_table_read = $this->db->scape($data['field_cr_table_read']);
				$empty_table_remove = $this->db->scape($data['field_cr_table_remove']);
				$empty_table_report = $this->db->scape($data['field_cr_table_report']);
				$empty_user = $this->db->scape($data['field_cr_user']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_configuration_design_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_configuration_design_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_design_m_date_created => DATE_HOUR,
					d_azp_configuration_design_m_date_modified => DATE_HOUR,
					d_azp_configuration_design_m_deleted => '1',
					d_azp_configuration_design_m_description => $empty_description,
					d_azp_configuration_design_m_level => '1',
					d_azp_configuration_design_m_status => '1',
					d_azp_configuration_design_m_temp => '1',
					d_azp_configuration_design_t_btn_action => $empty_btn_action,
					d_azp_configuration_design_t_btn_cancel => $empty_btn_cancel,
					d_azp_configuration_design_t_btn_change => $empty_btn_change,
					d_azp_configuration_design_t_btn_close => $empty_btn_close,
					d_azp_configuration_design_t_btn_column_toggle => $empty_btn_column_toggle,
					d_azp_configuration_design_t_btn_colvis_column => $empty_btn_colvis_column,
					d_azp_configuration_design_t_btn_colvis_restore => $empty_btn_colvis_restore,
					d_azp_configuration_design_t_btn_copy => $empty_btn_copy,
					d_azp_configuration_design_t_btn_create => $empty_btn_create,
					d_azp_configuration_design_t_btn_csv => $empty_btn_csv,
					d_azp_configuration_design_t_btn_delete => $empty_btn_delete,
					d_azp_configuration_design_t_btn_detail => $empty_btn_detail,
					d_azp_configuration_design_t_btn_email => $empty_btn_email,
					d_azp_configuration_design_t_btn_excel => $empty_btn_excel,
					d_azp_configuration_design_t_btn_export => $empty_btn_export,
					d_azp_configuration_design_t_btn_import => $empty_btn_import,
					d_azp_configuration_design_t_btn_menu => $empty_btn_menu,
					d_azp_configuration_design_t_btn_page_length => $empty_btn_page_length,
					d_azp_configuration_design_t_btn_pdf => $empty_btn_pdf,
					d_azp_configuration_design_t_btn_print => $empty_btn_print,
					d_azp_configuration_design_t_btn_remove => $empty_btn_remove,
					d_azp_configuration_design_t_btn_report => $empty_btn_report,
					d_azp_configuration_design_t_btn_restore => $empty_btn_restore,
					d_azp_configuration_design_t_btn_search => $empty_btn_search,
					d_azp_configuration_design_t_btn_sub_menu => $empty_btn_sub_menu,
					d_azp_configuration_design_t_btn_sync => $empty_btn_sync,
					d_azp_configuration_design_t_btn_template => $empty_btn_template,
					d_azp_configuration_design_t_btn_update => $empty_btn_update,
					d_azp_configuration_design_t_btn_visible => $empty_btn_visible,
					d_azp_configuration_design_t_color => $empty_color,
					d_azp_configuration_design_t_dimension => $empty_dimension,
					d_azp_configuration_design_t_theme => $empty_theme,
					d_azp_configuration_design_t_table_by_create => $empty_table_by_create,
					d_azp_configuration_design_t_table_change => $empty_table_change,
					d_azp_configuration_design_t_table_detail => $empty_table_detail,
					d_azp_configuration_design_t_table_eliminate => $empty_table_eliminate,
					d_azp_configuration_design_t_table_read => $empty_table_read,
					d_azp_configuration_design_t_table_remove => $empty_table_remove,
					d_azp_configuration_design_t_table_report => $empty_table_report,
					d_azp_configuration_design_v_id_azp_user => $empty_user,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_configuration_design, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_design_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_design_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_level . " = '2'");
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
		final public function sql_azp_configuration_design_remove(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_design_remove($data);
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
				$var_array = array(d_azp_configuration_design_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_design, $var_array, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_design_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_design_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_level . " = '2'");
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
		final public function sql_azp_configuration_design_restore(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_design_restore($data);
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
				$var_array = array(d_azp_configuration_design_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_design, $var_array, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_configuration_design_update(array $data) {
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
				if (!isset($data['field_up_btn_action'])) { throw new Exception('<b>Error:</b> El campo de accion esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_cancel'])) { throw new Exception('<b>Error:</b> El campo de cancelar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_close'])) { throw new Exception('<b>Error:</b> El campo de copiar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_column_toggle'])) { throw new Exception('<b>Error:</b> El campo de extender esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_colvis_column'])) { throw new Exception('<b>Error:</b> El campo de visible esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_colvis_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_copy'])) { throw new Exception('<b>Error:</b> El campo de copiar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_create'])) { throw new Exception('<b>Error:</b> El campo de nuevo esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_csv'])) { throw new Exception('<b>Error:</b> El campo de csv esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_delete'])) { throw new Exception('<b>Error:</b> El campo de eliminados esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_detail'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_email'])) { throw new Exception('<b>Error:</b> El campo de correos esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_excel'])) { throw new Exception('<b>Error:</b> El campo de excel esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_export'])) { throw new Exception('<b>Error:</b> El campo de exportar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_import'])) { throw new Exception('<b>Error:</b> El campo de importar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_menu'])) { throw new Exception('<b>Error:</b> El campo de menu esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_page_length'])) { throw new Exception('<b>Error:</b> El campo de mostrar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_pdf'])) { throw new Exception('<b>Error:</b> El campo de pdf esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_print'])) { throw new Exception('<b>Error:</b> El campo de imprimir esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_remove'])) { throw new Exception('<b>Error:</b> El campo de remover esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_search'])) { throw new Exception('<b>Error:</b> El campo de buscar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_sub_menu'])) { throw new Exception('<b>Error:</b> El campo de sub menu esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_sync'])) { throw new Exception('<b>Error:</b> El campo de sincronizar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_template'])) { throw new Exception('<b>Error:</b> El campo de plantilla esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_update'])) { throw new Exception('<b>Error:</b> El campo de actualizar esta prohibido modificar.'); }
				if (!isset($data['field_up_btn_visible'])) { throw new Exception('<b>Error:</b> El campo de visible esta prohibido modificar.'); }
				if (!isset($data['field_up_color'])) { throw new Exception('<b>Error:</b> El campo de color esta prohibido modificar.'); }
				if (!isset($data['field_up_dimension'])) { throw new Exception('<b>Error:</b> El campo de dimension esta prohibido modificar.'); }
				if (!isset($data['field_up_theme'])) { throw new Exception('<b>Error:</b> El campo de tema esta prohibido modificar.'); }
				if (!isset($data['field_up_table_by_create'])) { throw new Exception('<b>Error:</b> El campo de creado por esta prohibido modificar.'); }
				if (!isset($data['field_up_table_change'])) { throw new Exception('<b>Error:</b> El campo de listar esta prohibido modificar.'); }
				if (!isset($data['field_up_table_detail'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_up_table_eliminate'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_up_table_read'])) { throw new Exception('<b>Error:</b> El campo de eliminar esta prohibido modificar.'); }
				if (!isset($data['field_up_table_remove'])) { throw new Exception('<b>Error:</b> El campo de removidos esta prohibido modificar.'); }
				if (!isset($data['field_up_table_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_up_user'])) { throw new Exception('<b>Error:</b> El campo de usuario esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_btn_action = $this->db->scape($data['field_up_btn_action']);
				$empty_btn_cancel = $this->db->scape($data['field_up_btn_cancel']);
				$empty_btn_change = $this->db->scape($data['field_up_btn_change']);
				$empty_btn_close = $this->db->scape($data['field_up_btn_close']);
				$empty_btn_column_toggle = $this->db->scape($data['field_up_btn_column_toggle']);
				$empty_btn_colvis_column = $this->db->scape($data['field_up_btn_colvis_column']);
				$empty_btn_colvis_restore = $this->db->scape($data['field_up_btn_colvis_restore']);
				$empty_btn_copy = $this->db->scape($data['field_up_btn_copy']);
				$empty_btn_create = $this->db->scape($data['field_up_btn_create']);
				$empty_btn_csv = $this->db->scape($data['field_up_btn_csv']);
				$empty_btn_delete = $this->db->scape($data['field_up_btn_delete']);
				$empty_btn_detail = $this->db->scape($data['field_up_btn_detail']);
				$empty_btn_email = $this->db->scape($data['field_up_btn_email']);
				$empty_btn_excel = $this->db->scape($data['field_up_btn_excel']);
				$empty_btn_export = $this->db->scape($data['field_up_btn_export']);
				$empty_btn_import = $this->db->scape($data['field_up_btn_import']);
				$empty_btn_menu = $this->db->scape($data['field_up_btn_menu']);
				$empty_btn_page_length = $this->db->scape($data['field_up_btn_page_length']);
				$empty_btn_pdf = $this->db->scape($data['field_up_btn_pdf']);
				$empty_btn_print = $this->db->scape($data['field_up_btn_print']);
				$empty_btn_remove = $this->db->scape($data['field_up_btn_remove']);
				$empty_btn_report = $this->db->scape($data['field_up_btn_report']);
				$empty_btn_restore = $this->db->scape($data['field_up_btn_restore']);
				$empty_btn_search = $this->db->scape($data['field_up_btn_search']);
				$empty_btn_sub_menu = $this->db->scape($data['field_up_btn_sub_menu']);
				$empty_btn_sync = $this->db->scape($data['field_up_btn_sync']);
				$empty_btn_template = $this->db->scape($data['field_up_btn_template']);
				$empty_btn_update = $this->db->scape($data['field_up_btn_update']);
				$empty_btn_visible = $this->db->scape($data['field_up_btn_visible']);
				$empty_color = $this->db->scape($data['field_up_color']);
				$empty_dimension = $this->db->scape($data['field_up_dimension']);
				$empty_theme = $this->db->scape($data['field_up_theme']);
				$empty_table_by_create = $this->db->scape($data['field_up_table_by_create']);
				$empty_table_change = $this->db->scape($data['field_up_table_change']);
				$empty_table_detail = $this->db->scape($data['field_up_table_detail']);
				$empty_table_eliminate = $this->db->scape($data['field_up_table_eliminate']);
				$empty_table_read = $this->db->scape($data['field_up_table_read']);
				$empty_table_remove = $this->db->scape($data['field_up_table_remove']);
				$empty_table_report = $this->db->scape($data['field_up_table_report']);
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
				if (Func::emp($empty_color) || strtolower($empty_color) == strtolower('seleccionar') || $empty_color == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de color es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_color)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de color solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_dimension) || strtolower($empty_dimension) == strtolower('seleccionar') || $empty_dimension == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dimension es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_dimension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de dimension solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_theme) || strtolower($empty_theme) == strtolower('seleccionar') || $empty_theme == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tema es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_theme)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tema solo permite numeros.');
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
				if (Func::emp($empty_btn_action) || strtolower($empty_btn_action) == strtolower('seleccionar') || $empty_btn_action == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de accion es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_action)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de accion solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_cancel) || strtolower($empty_btn_cancel) == strtolower('seleccionar') || $empty_btn_cancel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cancelar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_cancel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cancelar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_change) || strtolower($empty_btn_change) == strtolower('seleccionar') || $empty_btn_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_close) || strtolower($empty_btn_close) == strtolower('seleccionar') || $empty_btn_close == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cerrar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_close)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cerrar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_column_toggle) || strtolower($empty_btn_column_toggle) == strtolower('seleccionar') || $empty_btn_column_toggle == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de extender es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_column_toggle)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de extender solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_colvis_column) || strtolower($empty_btn_colvis_column) == strtolower('seleccionar') || $empty_btn_colvis_column == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_colvis_column)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_colvis_restore) || strtolower($empty_btn_colvis_restore) == strtolower('seleccionar') || $empty_btn_colvis_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_colvis_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_copy) || strtolower($empty_btn_copy) == strtolower('seleccionar') || $empty_btn_copy == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de copiar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_copy)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de copiar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_create) || strtolower($empty_btn_create) == strtolower('seleccionar') || $empty_btn_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nuevo solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_csv) || strtolower($empty_btn_csv) == strtolower('seleccionar') || $empty_btn_csv == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de csv es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_csv)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de csv solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_delete) || strtolower($empty_btn_delete) == strtolower('seleccionar') || $empty_btn_delete == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminados es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_delete)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminados solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_detail) || strtolower($empty_btn_detail) == strtolower('seleccionar') || $empty_btn_detail == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_email) || strtolower($empty_btn_email) == strtolower('seleccionar') || $empty_btn_email == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_email)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de correos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_excel) || strtolower($empty_btn_excel) == strtolower('seleccionar') || $empty_btn_excel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de excel es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_excel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de excel solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_export) || strtolower($empty_btn_export) == strtolower('seleccionar') || $empty_btn_export == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de exportar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_export)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de exportar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_import) || strtolower($empty_btn_import) == strtolower('seleccionar') || $empty_btn_import == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_import)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de importar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_menu) || strtolower($empty_btn_menu) == strtolower('seleccionar') || $empty_btn_menu == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de menu es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_menu)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de menu solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_page_length) || strtolower($empty_btn_page_length) == strtolower('seleccionar') || $empty_btn_page_length == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mostrar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_page_length)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de mostrar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_pdf) || strtolower($empty_btn_pdf) == strtolower('seleccionar') || $empty_btn_pdf == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pdf es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_pdf)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de pdf solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_print) || strtolower($empty_btn_print) == strtolower('seleccionar') || $empty_btn_print == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de imprimir es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_print)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de imprimir solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_remove) || strtolower($empty_btn_remove) == strtolower('seleccionar') || $empty_btn_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de remover solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_report) || strtolower($empty_btn_report) == strtolower('seleccionar') || $empty_btn_report == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_report)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_restore) || strtolower($empty_btn_restore) == strtolower('seleccionar') || $empty_btn_restore == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_restore)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_search) || strtolower($empty_btn_search) == strtolower('seleccionar') || $empty_btn_search == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de buscar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_search)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de buscar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_sub_menu) || strtolower($empty_btn_sub_menu) == strtolower('seleccionar') || $empty_btn_sub_menu == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_sub_menu)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_sync) || strtolower($empty_btn_sync) == strtolower('seleccionar') || $empty_btn_sync == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sincronizar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_sync)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de sincronizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_template) || strtolower($empty_btn_template) == strtolower('seleccionar') || $empty_btn_template == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_template)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de plantilla solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_update) || strtolower($empty_btn_update) == strtolower('seleccionar') || $empty_btn_update == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_update)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de actualizar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_btn_visible) || strtolower($empty_btn_visible) == strtolower('seleccionar') || $empty_btn_visible == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_btn_visible)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de visible solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_by_create) || strtolower($empty_table_by_create) == strtolower('seleccionar') || $empty_table_by_create == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de creado por es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_by_create)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de creado por solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_change) || strtolower($empty_table_change) == strtolower('seleccionar') || $empty_table_change == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_change)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_detail) || strtolower($empty_table_detail) == strtolower('seleccionar') || $empty_table_detail == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_detail)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_eliminate) || strtolower($empty_table_eliminate) == strtolower('seleccionar') || $empty_table_eliminate == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_eliminate)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de eliminar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_read) || strtolower($empty_table_read) == strtolower('seleccionar') || $empty_table_read == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de listar es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_read)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de listar solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_remove) || strtolower($empty_table_remove) == strtolower('seleccionar') || $empty_table_remove == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de removidos es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_remove)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de removidos solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_table_report) || strtolower($empty_table_report) == strtolower('seleccionar') || $empty_table_report == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_table_report)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_configuration_design_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "' AND " . d_azp_configuration_design_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_user = $this->db->select(d_azp_configuration_design_v_id_azp_user, t_azp_configuration_design, d_azp_configuration_design_id_azp_configuration_design . " != '" . $empty_id . "' AND " . d_azp_configuration_design_v_id_azp_user . " = '" . $empty_user . "'");
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
		final public function sql_azp_configuration_design_update(array $data) : array {
			$var_error = $this->error_sql_azp_configuration_design_update($data);
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
				$empty_btn_action = $this->db->scape($data['field_up_btn_action']);
				$empty_btn_cancel = $this->db->scape($data['field_up_btn_cancel']);
				$empty_btn_change = $this->db->scape($data['field_up_btn_change']);
				$empty_btn_close = $this->db->scape($data['field_up_btn_close']);
				$empty_btn_column_toggle = $this->db->scape($data['field_up_btn_column_toggle']);
				$empty_btn_colvis_column = $this->db->scape($data['field_up_btn_colvis_column']);
				$empty_btn_colvis_restore = $this->db->scape($data['field_up_btn_colvis_restore']);
				$empty_btn_copy = $this->db->scape($data['field_up_btn_copy']);
				$empty_btn_create = $this->db->scape($data['field_up_btn_create']);
				$empty_btn_csv = $this->db->scape($data['field_up_btn_csv']);
				$empty_btn_delete = $this->db->scape($data['field_up_btn_delete']);
				$empty_btn_detail = $this->db->scape($data['field_up_btn_detail']);
				$empty_btn_email = $this->db->scape($data['field_up_btn_email']);
				$empty_btn_excel = $this->db->scape($data['field_up_btn_excel']);
				$empty_btn_export = $this->db->scape($data['field_up_btn_export']);
				$empty_btn_import = $this->db->scape($data['field_up_btn_import']);
				$empty_btn_menu = $this->db->scape($data['field_up_btn_menu']);
				$empty_btn_page_length = $this->db->scape($data['field_up_btn_page_length']);
				$empty_btn_pdf = $this->db->scape($data['field_up_btn_pdf']);
				$empty_btn_print = $this->db->scape($data['field_up_btn_print']);
				$empty_btn_remove = $this->db->scape($data['field_up_btn_remove']);
				$empty_btn_report = $this->db->scape($data['field_up_btn_report']);
				$empty_btn_restore = $this->db->scape($data['field_up_btn_restore']);
				$empty_btn_search = $this->db->scape($data['field_up_btn_search']);
				$empty_btn_sub_menu = $this->db->scape($data['field_up_btn_sub_menu']);
				$empty_btn_sync = $this->db->scape($data['field_up_btn_sync']);
				$empty_btn_template = $this->db->scape($data['field_up_btn_template']);
				$empty_btn_update = $this->db->scape($data['field_up_btn_update']);
				$empty_btn_visible = $this->db->scape($data['field_up_btn_visible']);
				$empty_color = $this->db->scape($data['field_up_color']);
				$empty_dimension = $this->db->scape($data['field_up_dimension']);
				$empty_theme = $this->db->scape($data['field_up_theme']);
				$empty_table_by_create = $this->db->scape($data['field_up_table_by_create']);
				$empty_table_change = $this->db->scape($data['field_up_table_change']);
				$empty_table_detail = $this->db->scape($data['field_up_table_detail']);
				$empty_table_eliminate = $this->db->scape($data['field_up_table_eliminate']);
				$empty_table_read = $this->db->scape($data['field_up_table_read']);
				$empty_table_remove = $this->db->scape($data['field_up_table_remove']);
				$empty_table_report = $this->db->scape($data['field_up_table_report']);
				$empty_user = $this->db->scape($data['field_up_user']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->query("
					-- ---------------------------------------------------------------
					SELECT
						tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " AS 'lbl_azp_configuration_design_id_azp_configuration_design',
						tc_azp_configuration_design." . d_azp_configuration_design_m_deleted . " AS 'lbl_azp_configuration_design_m_deleted',
						tc_azp_configuration_design." . d_azp_configuration_design_m_description . " AS 'lbl_azp_configuration_design_m_description',
						tc_azp_configuration_design." . d_azp_configuration_design_m_level . " AS 'lbl_azp_configuration_design_m_level',
						tc_azp_configuration_design." . d_azp_configuration_design_m_status . " AS 'lbl_azp_configuration_design_m_status',
						tc_azp_configuration_design." . d_azp_configuration_design_m_temp . " AS 'lbl_azp_configuration_design_m_temp',
						tc_azp_configuration_button_action." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_action',
						tc_azp_configuration_button_cancel." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_cancel',
						tc_azp_configuration_button_change." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_change',
						tc_azp_configuration_button_close." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_close',
						tc_azp_configuration_button_column_toggle." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_column_toggle',
						tc_azp_configuration_button_colvis_column." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_colvis_column',
						tc_azp_configuration_button_colvis_restore." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_colvis_restore',
						tc_azp_configuration_button_copy." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_copy',
						tc_azp_configuration_button_create." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_create',
						tc_azp_configuration_button_csv." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_csv',
						tc_azp_configuration_button_delete." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_delete',
						tc_azp_configuration_button_detail." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_detail',
						tc_azp_configuration_button_email." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_email',
						tc_azp_configuration_button_excel." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_excel',
						tc_azp_configuration_button_export." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_export',
						tc_azp_configuration_button_import." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_import',
						tc_azp_configuration_button_menu." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_menu',
						tc_azp_configuration_button_page_length." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_page_length',
						tc_azp_configuration_button_pdf." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_pdf',
						tc_azp_configuration_button_print." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_print',
						tc_azp_configuration_button_remove." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_remove',
						tc_azp_configuration_button_report." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_report',
						tc_azp_configuration_button_restore." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_restore',
						tc_azp_configuration_button_search." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_search',
						tc_azp_configuration_button_sub_menu." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_sub_menu',
						tc_azp_configuration_button_sync." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_sync',
						tc_azp_configuration_button_template." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_template',
						tc_azp_configuration_button_update." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_update',
						tc_azp_configuration_button_visible." . d_azp_configuration_button_t_name . " AS 'lbl_azp_configuration_button_visible',
						tc_azp_configuration_color." . d_azp_configuration_color_t_name . " AS 'lbl_azp_configuration_color',
						tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_name . " AS 'lbl_azp_configuration_dimension',
						tc_azp_configuration_theme." . d_azp_configuration_theme_t_name . " AS 'lbl_azp_configuration_theme',
						tc_azp_configuration_table_by_create." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_by_create',
						tc_azp_configuration_table_change." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_change',
						tc_azp_configuration_table_detail." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_detail',
						tc_azp_configuration_table_eliminate." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_eliminate',
						tc_azp_configuration_table_read." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_read',
						tc_azp_configuration_table_remove." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_remove',
						tc_azp_configuration_table_report." . d_azp_configuration_table_t_name . " AS 'lbl_azp_configuration_table_report',
						tc_azp_user." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login'
					FROM " . t_azp_configuration_design . " tc_azp_configuration_design
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_action
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_action . "
							= tc_azp_configuration_button_action." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_cancel
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_cancel . "
							= tc_azp_configuration_button_cancel." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_change
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_change . "
							= tc_azp_configuration_button_change." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_close
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_close . "
							= tc_azp_configuration_button_close." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_column_toggle
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_column_toggle . "
							= tc_azp_configuration_button_column_toggle." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_colvis_column
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_column . "
							= tc_azp_configuration_button_colvis_column." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_colvis_restore
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_restore . "
							= tc_azp_configuration_button_colvis_restore." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_copy
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_copy . "
							= tc_azp_configuration_button_copy." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_create
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_create . "
							= tc_azp_configuration_button_create." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_csv
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_csv . "
							= tc_azp_configuration_button_csv." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_delete
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_delete . "
							= tc_azp_configuration_button_delete." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_detail
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_detail . "
							= tc_azp_configuration_button_detail." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_email
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_email . "
							= tc_azp_configuration_button_email." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_excel
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_excel . "
							= tc_azp_configuration_button_excel." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_export
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_export . "
							= tc_azp_configuration_button_export." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_import
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_import . "
							= tc_azp_configuration_button_import." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_menu
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_menu . "
							= tc_azp_configuration_button_menu." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_page_length
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_page_length . "
							= tc_azp_configuration_button_page_length." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_pdf
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_pdf . "
							= tc_azp_configuration_button_pdf." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_print
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_print . "
							= tc_azp_configuration_button_print." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_remove
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_remove . "
							= tc_azp_configuration_button_remove." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_report
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_report . "
							= tc_azp_configuration_button_report." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_restore
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_restore . "
							= tc_azp_configuration_button_restore." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_search
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_search . "
							= tc_azp_configuration_button_search." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_sub_menu
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sub_menu . "
							= tc_azp_configuration_button_sub_menu." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_sync
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sync . "
							= tc_azp_configuration_button_sync." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_template
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_template . "
							= tc_azp_configuration_button_template." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_update
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_update . "
							= tc_azp_configuration_button_update." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button_visible
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_visible . "
							= tc_azp_configuration_button_visible." . d_azp_configuration_button_id_azp_configuration_button . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
							= tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
							= tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . "
							= tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_by_create
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . "
							= tc_azp_configuration_table_by_create." . d_azp_configuration_table_id_azp_configuration_table . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_change
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . "
							= tc_azp_configuration_table_change." . d_azp_configuration_table_id_azp_configuration_table . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_detail
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . "
							= tc_azp_configuration_table_detail." . d_azp_configuration_table_id_azp_configuration_table . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_eliminate
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . "
							= tc_azp_configuration_table_eliminate." . d_azp_configuration_table_id_azp_configuration_table . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_read
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . "
							= tc_azp_configuration_table_read." . d_azp_configuration_table_id_azp_configuration_table . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_remove
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . "
							= tc_azp_configuration_table_remove." . d_azp_configuration_table_id_azp_configuration_table . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table_report
						ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . "
							= tc_azp_configuration_table_report." . d_azp_configuration_table_id_azp_configuration_table . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user
						ON tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . "
							= tc_azp_user." . d_azp_user_id_azp_user . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'
					LIMIT 1
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_configuration_design_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_configuration_design_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_configuration_design_m_date_created => DATE_HOUR,
							d_azs_configuration_design_m_date_modified => DATE_HOUR,
							d_azs_configuration_design_m_deleted => $key_sql_select['lbl_azp_configuration_design_m_deleted'],
							d_azs_configuration_design_m_description => $key_sql_select['lbl_azp_configuration_design_m_description'],
							d_azs_configuration_design_m_level => $key_sql_select['lbl_azp_configuration_design_m_level'],
							d_azs_configuration_design_m_status => $key_sql_select['lbl_azp_configuration_design_m_status'],
							d_azs_configuration_design_m_temp => $key_sql_select['lbl_azp_configuration_design_m_temp'],
							d_azs_configuration_design_t_btn_action => strtolower($key_sql_select['lbl_azp_configuration_button_action']),
							d_azs_configuration_design_t_btn_cancel => strtolower($key_sql_select['lbl_azp_configuration_button_cancel']),
							d_azs_configuration_design_t_btn_change => strtolower($key_sql_select['lbl_azp_configuration_button_change']),
							d_azs_configuration_design_t_btn_close => strtolower($key_sql_select['lbl_azp_configuration_button_close']),
							d_azs_configuration_design_t_btn_column_toggle => strtolower($key_sql_select['lbl_azp_configuration_button_column_toggle']),
							d_azs_configuration_design_t_btn_colvis_column => strtolower($key_sql_select['lbl_azp_configuration_button_colvis_column']),
							d_azs_configuration_design_t_btn_colvis_restore => strtolower($key_sql_select['lbl_azp_configuration_button_colvis_restore']),
							d_azs_configuration_design_t_btn_copy => strtolower($key_sql_select['lbl_azp_configuration_button_copy']),
							d_azs_configuration_design_t_btn_create => strtolower($key_sql_select['lbl_azp_configuration_button_create']),
							d_azs_configuration_design_t_btn_csv => strtolower($key_sql_select['lbl_azp_configuration_button_csv']),
							d_azs_configuration_design_t_btn_delete => strtolower($key_sql_select['lbl_azp_configuration_button_delete']),
							d_azs_configuration_design_t_btn_detail => strtolower($key_sql_select['lbl_azp_configuration_button_detail']),
							d_azs_configuration_design_t_btn_email => strtolower($key_sql_select['lbl_azp_configuration_button_email']),
							d_azs_configuration_design_t_btn_excel => strtolower($key_sql_select['lbl_azp_configuration_button_excel']),
							d_azs_configuration_design_t_btn_export => strtolower($key_sql_select['lbl_azp_configuration_button_export']),
							d_azs_configuration_design_t_btn_import => strtolower($key_sql_select['lbl_azp_configuration_button_import']),
							d_azs_configuration_design_t_btn_menu => strtolower($key_sql_select['lbl_azp_configuration_button_menu']),
							d_azs_configuration_design_t_btn_page_length => strtolower($key_sql_select['lbl_azp_configuration_button_page_length']),
							d_azs_configuration_design_t_btn_pdf => strtolower($key_sql_select['lbl_azp_configuration_button_pdf']),
							d_azs_configuration_design_t_btn_print => strtolower($key_sql_select['lbl_azp_configuration_button_print']),
							d_azs_configuration_design_t_btn_remove => strtolower($key_sql_select['lbl_azp_configuration_button_remove']),
							d_azs_configuration_design_t_btn_report => strtolower($key_sql_select['lbl_azp_configuration_button_report']),
							d_azs_configuration_design_t_btn_restore => strtolower($key_sql_select['lbl_azp_configuration_button_restore']),
							d_azs_configuration_design_t_btn_search => strtolower($key_sql_select['lbl_azp_configuration_button_search']),
							d_azs_configuration_design_t_btn_sub_menu => strtolower($key_sql_select['lbl_azp_configuration_button_sub_menu']),
							d_azs_configuration_design_t_btn_sync => strtolower($key_sql_select['lbl_azp_configuration_button_sync']),
							d_azs_configuration_design_t_btn_update => strtolower($key_sql_select['lbl_azp_configuration_button_update']),
							d_azs_configuration_design_t_btn_template => strtolower($key_sql_select['lbl_azp_configuration_button_template']),
							d_azs_configuration_design_t_btn_visible => strtolower($key_sql_select['lbl_azp_configuration_button_visible']),
							d_azs_configuration_design_t_color => strtolower($key_sql_select['lbl_azp_configuration_color']),
							d_azs_configuration_design_t_dimension => strtolower($key_sql_select['lbl_azp_configuration_dimension']),
							d_azs_configuration_design_t_theme => strtolower($key_sql_select['lbl_azp_configuration_theme']),
							d_azs_configuration_design_t_table_by_create => strtolower($key_sql_select['lbl_azp_configuration_table_by_create']),
							d_azs_configuration_design_t_table_change => strtolower($key_sql_select['lbl_azp_configuration_table_change']),
							d_azs_configuration_design_t_table_detail => strtolower($key_sql_select['lbl_azp_configuration_table_detail']),
							d_azs_configuration_design_t_table_eliminate => strtolower($key_sql_select['lbl_azp_configuration_table_eliminate']),
							d_azs_configuration_design_t_table_read => strtolower($key_sql_select['lbl_azp_configuration_table_read']),
							d_azs_configuration_design_t_table_remove => strtolower($key_sql_select['lbl_azp_configuration_table_remove']),
							d_azs_configuration_design_t_table_report => strtolower($key_sql_select['lbl_azp_configuration_table_report']),
							d_azs_configuration_design_u_user => strtolower($key_sql_select['lbl_azp_user_t_login']),
							d_azs_configuration_design_v_id_azp_configuration_design => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_configuration_design, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_configuration_design_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_design_m_date_modified => DATE_HOUR,
					d_azp_configuration_design_m_description => $empty_description,
					d_azp_configuration_design_m_status => $empty_state,
					d_azp_configuration_design_t_btn_action => $empty_btn_action,
					d_azp_configuration_design_t_btn_cancel => $empty_btn_cancel,
					d_azp_configuration_design_t_btn_change => $empty_btn_change,
					d_azp_configuration_design_t_btn_close => $empty_btn_close,
					d_azp_configuration_design_t_btn_column_toggle => $empty_btn_column_toggle,
					d_azp_configuration_design_t_btn_colvis_column => $empty_btn_colvis_column,
					d_azp_configuration_design_t_btn_colvis_restore => $empty_btn_colvis_restore,
					d_azp_configuration_design_t_btn_copy => $empty_btn_copy,
					d_azp_configuration_design_t_btn_create => $empty_btn_create,
					d_azp_configuration_design_t_btn_csv => $empty_btn_csv,
					d_azp_configuration_design_t_btn_delete => $empty_btn_delete,
					d_azp_configuration_design_t_btn_detail => $empty_btn_detail,
					d_azp_configuration_design_t_btn_email => $empty_btn_email,
					d_azp_configuration_design_t_btn_excel => $empty_btn_excel,
					d_azp_configuration_design_t_btn_export => $empty_btn_export,
					d_azp_configuration_design_t_btn_import => $empty_btn_import,
					d_azp_configuration_design_t_btn_menu => $empty_btn_menu,
					d_azp_configuration_design_t_btn_page_length => $empty_btn_page_length,
					d_azp_configuration_design_t_btn_pdf => $empty_btn_pdf,
					d_azp_configuration_design_t_btn_print => $empty_btn_print,
					d_azp_configuration_design_t_btn_remove => $empty_btn_remove,
					d_azp_configuration_design_t_btn_report => $empty_btn_report,
					d_azp_configuration_design_t_btn_restore => $empty_btn_restore,
					d_azp_configuration_design_t_btn_search => $empty_btn_search,
					d_azp_configuration_design_t_btn_sub_menu => $empty_btn_sub_menu,
					d_azp_configuration_design_t_btn_sync => $empty_btn_sync,
					d_azp_configuration_design_t_btn_template => $empty_btn_template,
					d_azp_configuration_design_t_btn_update => $empty_btn_update,
					d_azp_configuration_design_t_btn_visible => $empty_btn_visible,
					d_azp_configuration_design_t_color => $empty_color,
					d_azp_configuration_design_t_dimension => $empty_dimension,
					d_azp_configuration_design_t_theme => $empty_theme,
					d_azp_configuration_design_t_table_by_create => $empty_table_by_create,
					d_azp_configuration_design_t_table_change => $empty_table_change,
					d_azp_configuration_design_t_table_detail => $empty_table_detail,
					d_azp_configuration_design_t_table_eliminate => $empty_table_eliminate,
					d_azp_configuration_design_t_table_read => $empty_table_read,
					d_azp_configuration_design_t_table_remove => $empty_table_remove,
					d_azp_configuration_design_t_table_report => $empty_table_report,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_configuration_design, $var_array, d_azp_configuration_design_id_azp_configuration_design . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_button() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_button, d_azp_configuration_button_m_deleted . " = '1' AND " . d_azp_configuration_button_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_color() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_color, d_azp_configuration_color_m_deleted . " = '1' AND " . d_azp_configuration_color_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_dimension() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_dimension, d_azp_configuration_dimension_m_deleted . " = '1' AND " . d_azp_configuration_dimension_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_theme() {
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_theme, d_azp_configuration_theme_m_deleted . " = '1' AND " . d_azp_configuration_theme_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_table() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_table, d_azp_configuration_table_m_deleted . " = '1' AND " . d_azp_configuration_table_m_status . " = '1'");
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