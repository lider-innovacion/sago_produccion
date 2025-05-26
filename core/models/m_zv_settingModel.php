<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_zv_settingModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_cancel . " AS 'lbl_azp_configuration_design_t_btn_cancel',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_change . " AS 'lbl_azp_configuration_design_t_btn_change',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_copy . " AS 'lbl_azp_configuration_design_t_btn_copy',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_create . " AS 'lbl_azp_configuration_design_t_btn_create',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_csv . " AS 'lbl_azp_configuration_design_t_btn_csv',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_delete . " AS 'lbl_azp_configuration_design_t_btn_delete',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_detail . " AS 'lbl_azp_configuration_design_t_btn_detail',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_email . " AS 'lbl_azp_configuration_design_t_btn_email',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_excel . " AS 'lbl_azp_configuration_design_t_btn_excel',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_import . " AS 'lbl_azp_configuration_design_t_btn_import',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_menu . " AS 'lbl_azp_configuration_design_t_btn_menu',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_pdf . " AS 'lbl_azp_configuration_design_t_btn_pdf',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_print . " AS 'lbl_azp_configuration_design_t_btn_print',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_remove . " AS 'lbl_azp_configuration_design_t_btn_remove',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_report . " AS 'lbl_azp_configuration_design_t_btn_report',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_restore . " AS 'lbl_azp_configuration_design_t_btn_restore',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sub_menu . " AS 'lbl_azp_configuration_design_t_btn_sub_menu_crud',
					tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sync . " AS 'lbl_azp_configuration_design_t_btn_sync',
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
					tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . " AS 'lbl_azp_configuration_design_t_table_report'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_id_azp_configuration_design . " = '" . $this->id . "'
					AND tc_azp_configuration_design." . d_azp_configuration_design_m_deleted . " = '1'
					AND tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'setting/update/' . $_SESSION[SESS_APP_ID] . '/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_modal() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_change . " AS 'lbl_azp_configuration_modal_t_md_change',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_create . " AS 'lbl_azp_configuration_modal_t_md_create',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_delete . " AS 'lbl_azp_configuration_modal_t_md_delete',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_detail . " AS 'lbl_azp_configuration_modal_t_md_detail',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_email . " AS 'lbl_azp_configuration_modal_t_md_email',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_import . " AS 'lbl_azp_configuration_modal_t_md_import',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_remove . " AS 'lbl_azp_configuration_modal_t_md_remove',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_report . " AS 'lbl_azp_configuration_modal_t_md_report',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_restore . " AS 'lbl_azp_configuration_modal_t_md_restore',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_sub_menu . " AS 'lbl_azp_configuration_modal_t_md_sub_menu',
					tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_update . " AS 'lbl_azp_configuration_modal_t_md_update'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_id_azp_configuration_modal . " = '" . $this->id . "'
					AND tc_azp_configuration_modal." . d_azp_configuration_modal_m_deleted . " = '1'
					AND tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'setting/update/' . $_SESSION[SESS_APP_ID] . '/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_panel() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
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
					tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . " AS 'lbl_azp_configuration_panel_t_pnl_update'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = tc_azp_user." . d_azp_user_id_azp_user . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_id_azp_configuration_panel . " = '" . $this->id . "'
					AND tc_azp_configuration_panel." . d_azp_configuration_panel_m_deleted . " = '1'
					AND tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'setting/update/' . $_SESSION[SESS_APP_ID] . '/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_action() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_action . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_cancel() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_cancel . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_change . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_close() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_close . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_column_toggle() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_column_toggle . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_colvis_column() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_column . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_colvis_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_restore . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_copy() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_copy . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_create . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_csv() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_csv . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_delete() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_delete . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_detail . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_email . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_excel() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_excel . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_export() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_export . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_import() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_import . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_menu . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_page_length() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_page_length . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_pdf() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_pdf . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_print() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_print . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_remove . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_report . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_restore . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_search() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_search . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_sub_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sub_menu . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_sync() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sync . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_template() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_template . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_update . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_btn_visible() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_visible . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_configuration_design_color() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_color." . d_azp_configuration_color_t_theme . " AS 'lbl_theme'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . " = tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_configuration_design_dimension() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_theme . " AS 'lbl_theme'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . " = tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_configuration_design_theme() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_theme." . d_azp_configuration_theme_t_theme . " AS 'lbl_theme'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_theme . " = tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_table_by_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_table_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_table_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_table_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_table_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_table_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cd_table_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_change . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_create . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_delete() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_delete . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_detail . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_email . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_import() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_import . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_remove . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_report . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_restore . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_sub_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_sub_menu . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cm_md_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_update . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_delete() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_import() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_sub_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		/*final public function sql_cp_pnl_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}*/










		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_action() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_action . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_cancel() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_cancel . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_change . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_close() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_close . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_column_toggle() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_column_toggle . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_colvis_column() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_column . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_colvis_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_colvis_restore . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_copy() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_copy . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_create . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_csv() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_csv . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_delete() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_delete . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_detail . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_email . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_excel() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_excel . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_export() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_export . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_file() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_file . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_import() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_import . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_menu . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_page_length() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_page_length . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_pdf() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_pdf . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_print() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_print . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_remove . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_report . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_restore . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_search() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_search . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_sub_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sub_menu . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_sync() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_sync . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_template() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_template . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_update . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_btn_visible() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_btn_visible . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_configuration_design_color() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_color." . d_azp_configuration_color_t_theme . " AS 'lbl_theme'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_color . " tc_azp_configuration_color
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_color . " = tc_azp_configuration_color." . d_azp_configuration_color_id_azp_configuration_color . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_configuration_design_dimension() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_dimension." . d_azp_configuration_dimension_t_theme . " AS 'lbl_theme'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_dimension . " tc_azp_configuration_dimension
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_dimension . " = tc_azp_configuration_dimension." . d_azp_configuration_dimension_id_azp_configuration_dimension . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_configuration_design_theme() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_theme." . d_azp_configuration_theme_t_theme . " AS 'lbl_theme'
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_theme . " tc_azp_configuration_theme
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_theme . " = tc_azp_configuration_theme." . d_azp_configuration_theme_id_azp_configuration_theme . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_table_by_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_by_create . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_table_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_change . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_table_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_detail . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_table_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_eliminate . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_table_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_read . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_table_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_table." . d_azp_configuration_table_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_table . " tc_azp_configuration_table
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_remove . " = tc_azp_configuration_table." . d_azp_configuration_table_id_azp_configuration_table . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cd_table_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_configuration_button." . d_azp_configuration_button_t_name . "
				FROM " . t_azp_configuration_design . " tc_azp_configuration_design
				INNER JOIN " . t_azp_configuration_button . " tc_azp_configuration_button
					ON tc_azp_configuration_design." . d_azp_configuration_design_t_table_report . " = tc_azp_configuration_button." . d_azp_configuration_button_id_azp_configuration_button . "
				WHERE tc_azp_configuration_design." . d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_change . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_create . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_delete() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_delete . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_detail . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_email . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_file() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_file . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_import() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_import . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_remove . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_report . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_restore . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_sub_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_sub_menu . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cm_md_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_modal_code." . d_azp_modal_code_t_text . " AS 'lbl_mc',
					tc_azp_modal_code." . d_azp_modal_code_v_id_azp_modal_category . " AS 'lbl_md'
				FROM " . t_azp_configuration_modal . " tc_azp_configuration_modal
				INNER JOIN " . t_azp_modal_code . " tc_azp_modal_code
					ON tc_azp_configuration_modal." . d_azp_configuration_modal_t_md_update . " = tc_azp_modal_code." . d_azp_modal_code_id_azp_modal_code . "
				WHERE tc_azp_configuration_modal." . d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_change . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_create() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_create . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_delete() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_delete . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_detail . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_email() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_email . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_file() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_file . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_import() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_import . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_remove . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_report() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_report . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_restore() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_restore . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_sub_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_sub_menu . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_cp_pnl_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- ---------------------------------------------------------------
				SELECT tc_azp_pallet_color." . d_azp_pallet_color_t_name . "  AS 'lbl_pnl'
				FROM " . t_azp_configuration_panel . " tc_azp_configuration_panel
				INNER JOIN " . t_azp_pallet_color . " tc_azp_pallet_color
					ON tc_azp_configuration_panel." . d_azp_configuration_panel_t_pnl_update . " = tc_azp_pallet_color." . d_azp_pallet_color_id_azp_pallet_color . "
				WHERE tc_azp_configuration_panel." . d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				LIMIT 1
			");
		}








		

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_setting_button_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				if (!isset($data['field_btn_cancel'])) { throw new Exception('<b>Error:</b> El campo de cancelar esta prohibido modificar.'); }
				if (!isset($data['field_btn_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_btn_copy'])) { throw new Exception('<b>Error:</b> El campo de copiar esta prohibido modificar.'); }
				if (!isset($data['field_btn_create'])) { throw new Exception('<b>Error:</b> El campo de nuevo esta prohibido modificar.'); }
				if (!isset($data['field_btn_csv'])) { throw new Exception('<b>Error:</b> El campo de csv esta prohibido modificar.'); }
				if (!isset($data['field_btn_delete'])) { throw new Exception('<b>Error:</b> El campo de eliminar esta prohibido modificar.'); }
				if (!isset($data['field_btn_detail'])) { throw new Exception('<b>Error:</b> El campo de detalle esta prohibido modificar.'); }
				if (!isset($data['field_btn_email'])) { throw new Exception('<b>Error:</b> El campo de correos esta prohibido modificar.'); }
				if (!isset($data['field_btn_excel'])) { throw new Exception('<b>Error:</b> El campo de excel esta prohibido modificar.'); }
				if (!isset($data['field_btn_import'])) { throw new Exception('<b>Error:</b> El campo de importar esta prohibido modificar.'); }
				if (!isset($data['field_btn_menu'])) { throw new Exception('<b>Error:</b> El campo de menu esta prohibido modificar.'); }
				if (!isset($data['field_btn_pdf'])) { throw new Exception('<b>Error:</b> El campo de pdf esta prohibido modificar.'); }
				if (!isset($data['field_btn_print'])) { throw new Exception('<b>Error:</b> El campo de imprimir esta prohibido modificar.'); }
				if (!isset($data['field_btn_remove'])) { throw new Exception('<b>Error:</b> El campo de remover esta prohibido modificar.'); }
				if (!isset($data['field_btn_report'])) { throw new Exception('<b>Error:</b> El campo de reporte esta prohibido modificar.'); }
				if (!isset($data['field_btn_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_btn_sub_menu_crud'])) { throw new Exception('<b>Error:</b> El campo de sub menu esta prohibido modificar.'); }
				if (!isset($data['field_btn_sync'])) { throw new Exception('<b>Error:</b> El campo de sincronizar esta prohibido modificar.'); }
				if (!isset($data['field_btn_update'])) { throw new Exception('<b>Error:</b> El campo de actualizar esta prohibido modificar.'); }
				if (!isset($data['field_btn_visible'])) { throw new Exception('<b>Error:</b> El campo de visible esta prohibido modificar.'); }
				#--------------------------------------------------------------------------------------------------------------------
				$empty_btn_cancel = $this->db->scape($data['field_btn_cancel']);
				$empty_btn_change = $this->db->scape($data['field_btn_change']);
				$empty_btn_copy = $this->db->scape($data['field_btn_copy']);
				$empty_btn_create = $this->db->scape($data['field_btn_create']);
				$empty_btn_csv = $this->db->scape($data['field_btn_csv']);
				$empty_btn_delete = $this->db->scape($data['field_btn_delete']);
				$empty_btn_detail = $this->db->scape($data['field_btn_detail']);
				$empty_btn_email = $this->db->scape($data['field_btn_email']);
				$empty_btn_excel = $this->db->scape($data['field_btn_excel']);
				$empty_btn_import = $this->db->scape($data['field_btn_import']);
				$empty_btn_menu = $this->db->scape($data['field_btn_menu']);
				$empty_btn_pdf = $this->db->scape($data['field_btn_pdf']);
				$empty_btn_print = $this->db->scape($data['field_btn_print']);
				$empty_btn_remove = $this->db->scape($data['field_btn_remove']);
				$empty_btn_report = $this->db->scape($data['field_btn_report']);
				$empty_btn_restore = $this->db->scape($data['field_btn_restore']);
				$empty_btn_sub_menu_crud = $this->db->scape($data['field_btn_sub_menu_crud']);
				$empty_btn_sync = $this->db->scape($data['field_btn_sync']);
				$empty_btn_update = $this->db->scape($data['field_btn_update']);
				$empty_btn_visible = $this->db->scape($data['field_btn_visible']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_cancel) || strtolower($empty_btn_cancel) == 'seleccionar' || $empty_btn_cancel == 0) {
					throw new Exception('<b>Error:</b> El campo de cancelar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_cancel)) {
					throw new Exception('<b>Error:</b> El campo de cancelar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_change) || strtolower($empty_btn_change) == 'seleccionar' || $empty_btn_change == 0) {
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_change)) {
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_copy) || strtolower($empty_btn_copy) == 'seleccionar' || $empty_btn_copy == 0) {
					throw new Exception('<b>Error:</b> El campo de copiar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_copy)) {
					throw new Exception('<b>Error:</b> El campo de copiar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_create) || strtolower($empty_btn_create) == 'seleccionar' || $empty_btn_create == 0) {
					throw new Exception('<b>Error:</b> El campo de nuevo es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_create)) {
					throw new Exception('<b>Error:</b> El campo de nuevo solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_csv) || strtolower($empty_btn_csv) == 'seleccionar' || $empty_btn_csv == 0) {
					throw new Exception('<b>Error:</b> El campo de csv es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_csv)) {
					throw new Exception('<b>Error:</b> El campo de csv solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_delete) || strtolower($empty_btn_delete) == 'seleccionar' || $empty_btn_delete == 0) {
					throw new Exception('<b>Error:</b> El campo de eliminar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_delete)) {
					throw new Exception('<b>Error:</b> El campo de eliminar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_detail) || strtolower($empty_btn_detail) == 'seleccionar' || $empty_btn_detail == 0) {
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_detail)) {
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_email) || strtolower($empty_btn_email) == 'seleccionar' || $empty_btn_email == 0) {
					throw new Exception('<b>Error:</b> El campo de correos es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_email)) {
					throw new Exception('<b>Error:</b> El campo de correos solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_excel) || strtolower($empty_btn_excel) == 'seleccionar' || $empty_btn_excel == 0) {
					throw new Exception('<b>Error:</b> El campo de excel es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_excel)) {
					throw new Exception('<b>Error:</b> El campo de excel solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_import) || strtolower($empty_btn_import) == 'seleccionar' || $empty_btn_import == 0) {
					throw new Exception('<b>Error:</b> El campo de importar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_import)) {
					throw new Exception('<b>Error:</b> El campo de importar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_menu) || strtolower($empty_btn_menu) == 'seleccionar' || $empty_btn_menu == 0) {
					throw new Exception('<b>Error:</b> El campo de menu es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_menu)) {
					throw new Exception('<b>Error:</b> El campo de menu solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_pdf) || strtolower($empty_btn_pdf) == 'seleccionar' || $empty_btn_pdf == 0) {
					throw new Exception('<b>Error:</b> El campo de pdf es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_pdf)) {
					throw new Exception('<b>Error:</b> El campo de pdf solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_print) || strtolower($empty_btn_print) == 'seleccionar' || $empty_btn_print == 0) {
					throw new Exception('<b>Error:</b> El campo de imprimir es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_print)) {
					throw new Exception('<b>Error:</b> El campo de imprimir solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_remove) || strtolower($empty_btn_remove) == 'seleccionar' || $empty_btn_remove == 0) {
					throw new Exception('<b>Error:</b> El campo de remover es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_remove)) {
					throw new Exception('<b>Error:</b> El campo de remover solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_report) || strtolower($empty_btn_report) == 'seleccionar' || $empty_btn_report == 0) {
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_report)) {
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_restore) || strtolower($empty_btn_restore) == 'seleccionar' || $empty_btn_restore == 0) {
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_restore)) {
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_sub_menu_crud) || strtolower($empty_btn_sub_menu_crud) == 'seleccionar' || $empty_btn_sub_menu_crud == 0) {
					throw new Exception('<b>Error:</b> El campo de sub menu es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_sub_menu_crud)) {
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_sync) || strtolower($empty_btn_sync) == 'seleccionar' || $empty_btn_sync == 0) {
					throw new Exception('<b>Error:</b> El campo de sincronizar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_sync)) {
					throw new Exception('<b>Error:</b> El campo de sincronizar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_update) || strtolower($empty_btn_update) == 'seleccionar' || $empty_btn_update == 0) {
					throw new Exception('<b>Error:</b> El campo de actualizar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_update)) {
					throw new Exception('<b>Error:</b> El campo de actualizar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_btn_visible) || strtolower($empty_btn_visible) == 'seleccionar' || $empty_btn_visible == 0) {
					throw new Exception('<b>Error:</b> El campo de visible es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_btn_visible)) {
					throw new Exception('<b>Error:</b> El campo de visible solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_setting_button_update(array $data) : array {
			$var_error = $this->error_sql_zv_setting_button_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_btn_cancel = $this->db->scape($data['field_btn_cancel']);
				$empty_btn_change = $this->db->scape($data['field_btn_change']);
				$empty_btn_copy = $this->db->scape($data['field_btn_copy']);
				$empty_btn_create = $this->db->scape($data['field_btn_create']);
				$empty_btn_csv = $this->db->scape($data['field_btn_csv']);
				$empty_btn_delete = $this->db->scape($data['field_btn_delete']);
				$empty_btn_detail = $this->db->scape($data['field_btn_detail']);
				$empty_btn_email = $this->db->scape($data['field_btn_email']);
				$empty_btn_excel = $this->db->scape($data['field_btn_excel']);
				$empty_btn_import = $this->db->scape($data['field_btn_import']);
				$empty_btn_menu = $this->db->scape($data['field_btn_menu']);
				$empty_btn_pdf = $this->db->scape($data['field_btn_pdf']);
				$empty_btn_print = $this->db->scape($data['field_btn_print']);
				$empty_btn_remove = $this->db->scape($data['field_btn_remove']);
				$empty_btn_report = $this->db->scape($data['field_btn_report']);
				$empty_btn_restore = $this->db->scape($data['field_btn_restore']);
				$empty_btn_sub_menu_crud = $this->db->scape($data['field_btn_sub_menu_crud']);
				$empty_btn_sync = $this->db->scape($data['field_btn_sync']);
				$empty_btn_update = $this->db->scape($data['field_btn_update']);
				$empty_btn_visible = $this->db->scape($data['field_btn_visible']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_configuration_design_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_design_m_date_modified => DATE_HOUR,
					d_azp_configuration_design_t_btn_cancel => $empty_btn_cancel,
					d_azp_configuration_design_t_btn_change => $empty_btn_change,
					d_azp_configuration_design_t_btn_copy => $empty_btn_copy,
					d_azp_configuration_design_t_btn_create => $empty_btn_create,
					d_azp_configuration_design_t_btn_csv => $empty_btn_csv,
					d_azp_configuration_design_t_btn_delete => $empty_btn_delete,
					d_azp_configuration_design_t_btn_detail => $empty_btn_detail,
					d_azp_configuration_design_t_btn_email => $empty_btn_email,
					d_azp_configuration_design_t_btn_excel => $empty_btn_excel,
					d_azp_configuration_design_t_btn_import => $empty_btn_import,
					d_azp_configuration_design_t_btn_menu => $empty_btn_menu,
					d_azp_configuration_design_t_btn_pdf => $empty_btn_pdf,
					d_azp_configuration_design_t_btn_print => $empty_btn_print,
					d_azp_configuration_design_t_btn_remove => $empty_btn_remove,
					d_azp_configuration_design_t_btn_report => $empty_btn_report,
					d_azp_configuration_design_t_btn_restore => $empty_btn_restore,
					d_azp_configuration_design_t_btn_sub_menu => $empty_btn_sub_menu_crud,
					d_azp_configuration_design_t_btn_sync => $empty_btn_sync,
					d_azp_configuration_design_t_btn_update => $empty_btn_update,
					d_azp_configuration_design_t_btn_visible => $empty_btn_visible,
				);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_configuration_design, $var_array, d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#--------------------------------------------------------------------------------------------------------------------
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
				#--------------------------------------------------------------------------------------------------------------------
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_setting_design_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				if (!isset($data['field_color'])) { throw new Exception('<b>Error:</b> El campo de color esta prohibido modificar.'); }
				if (!isset($data['field_dimension'])) { throw new Exception('<b>Error:</b> El campo de dimension esta prohibido modificar.'); }
				if (!isset($data['field_theme'])) { throw new Exception('<b>Error:</b> El campo de tema esta prohibido modificar.'); }
				#--------------------------------------------------------------------------------------------------------------------
				$empty_color = $this->db->scape($data['field_color']);
				$empty_dimension = $this->db->scape($data['field_dimension']);
				$empty_theme = $this->db->scape($data['field_theme']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_color) || strtolower($empty_color) == 'seleccionar' || $empty_color == 0) {
					throw new Exception('<b>Error:</b> El campo de color es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_color)) {
					throw new Exception('<b>Error:</b> El campo de color solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_dimension) || strtolower($empty_dimension) == 'seleccionar' || $empty_dimension == 0) {
					throw new Exception('<b>Error:</b> El campo de dimension es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_dimension)) {
					throw new Exception('<b>Error:</b> El campo de dimension solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_theme) || strtolower($empty_theme) == 'seleccionar' || $empty_theme == 0) {
					throw new Exception('<b>Error:</b> El campo de tema es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_theme)) {
					throw new Exception('<b>Error:</b> El campo de tema solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_setting_design_update(array $data) : array {
			$var_error = $this->error_sql_zv_setting_design_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_color = $this->db->scape($data['field_color']);
				$empty_dimension = $this->db->scape($data['field_dimension']);
				$empty_theme = $this->db->scape($data['field_theme']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_configuration_design_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_design_m_date_modified => DATE_HOUR,
					d_azp_configuration_design_t_color => $empty_color,
					d_azp_configuration_design_t_dimension => $empty_dimension,
					d_azp_configuration_design_t_theme => $empty_theme,
				);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_configuration_design, $var_array, d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#--------------------------------------------------------------------------------------------------------------------
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
				#--------------------------------------------------------------------------------------------------------------------
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_setting_table_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				if (!isset($data['field_table_by_create'])) { throw new Exception('<b>Error:</b> El campo de creado por esta prohibido modificar.'); }
				if (!isset($data['field_table_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_table_detail'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_table_eliminate'])) { throw new Exception('<b>Error:</b> El campo de eliminados esta prohibido modificar.'); }
				if (!isset($data['field_table_read'])) { throw new Exception('<b>Error:</b> El campo de registros esta prohibido modificar.'); }
				if (!isset($data['field_table_remove'])) { throw new Exception('<b>Error:</b> El campo de removidos esta prohibido modificar.'); }
				if (!isset($data['field_table_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				#--------------------------------------------------------------------------------------------------------------------
				$empty_table_by_create = $this->db->scape($data['field_table_by_create']);
				$empty_table_change = $this->db->scape($data['field_table_change']);
				$empty_table_detail = $this->db->scape($data['field_table_detail']);
				$empty_table_eliminate = $this->db->scape($data['field_table_eliminate']);
				$empty_table_read = $this->db->scape($data['field_table_read']);
				$empty_table_remove = $this->db->scape($data['field_table_remove']);
				$empty_table_report = $this->db->scape($data['field_table_report']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_table_by_create) || strtolower($empty_table_by_create) == 'seleccionar' || $empty_table_by_create == 0) {
					throw new Exception('<b>Error:</b> El campo de creado por es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_table_by_create)) {
					throw new Exception('<b>Error:</b> El campo de creado por solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_table_change) || strtolower($empty_table_change) == 'seleccionar' || $empty_table_change == 0) {
					throw new Exception('<b>Error:</b> El campo de cambios es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_table_change)) {
					throw new Exception('<b>Error:</b> El campo de cambios solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_table_detail) || strtolower($empty_table_detail) == 'seleccionar' || $empty_table_detail == 0) {
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_table_detail)) {
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_table_eliminate) || strtolower($empty_table_eliminate) == 'seleccionar' || $empty_table_eliminate == 0) {
					throw new Exception('<b>Error:</b> El campo de eliminados es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_table_eliminate)) {
					throw new Exception('<b>Error:</b> El campo de eliminados solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_table_read) || strtolower($empty_table_read) == 'seleccionar' || $empty_table_read == 0) {
					throw new Exception('<b>Error:</b> El campo de registros es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_table_read)) {
					throw new Exception('<b>Error:</b> El campo de registros solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_table_remove) || strtolower($empty_table_remove) == 'seleccionar' || $empty_table_remove == 0) {
					throw new Exception('<b>Error:</b> El campo de removidos es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_table_remove)) {
					throw new Exception('<b>Error:</b> El campo de removidos solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_table_report) || strtolower($empty_table_report) == 'seleccionar' || $empty_table_report == 0) {
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_table_report)) {
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_setting_table_update(array $data) : array {
			$var_error = $this->error_sql_zv_setting_table_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_table_by_create = $this->db->scape($data['field_table_by_create']);
				$empty_table_change = $this->db->scape($data['field_table_change']);
				$empty_table_detail = $this->db->scape($data['field_table_detail']);
				$empty_table_eliminate = $this->db->scape($data['field_table_eliminate']);
				$empty_table_read = $this->db->scape($data['field_table_read']);
				$empty_table_remove = $this->db->scape($data['field_table_remove']);
				$empty_table_report = $this->db->scape($data['field_table_report']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_data_personal_m_date_modified => DATE_HOUR,
					d_azp_configuration_design_t_table_by_create => $empty_table_by_create,
					d_azp_configuration_design_t_table_change => $empty_table_change,
					d_azp_configuration_design_t_table_detail => $empty_table_detail,
					d_azp_configuration_design_t_table_eliminate => $empty_table_eliminate,
					d_azp_configuration_design_t_table_read => $empty_table_read,
					d_azp_configuration_design_t_table_remove => $empty_table_remove,
					d_azp_configuration_design_t_table_report => $empty_table_report,
				);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_configuration_design, $var_array, d_azp_configuration_design_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#--------------------------------------------------------------------------------------------------------------------
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
				#--------------------------------------------------------------------------------------------------------------------
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_setting_modal_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				if (!isset($data['field_md_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_md_create'])) { throw new Exception('<b>Error:</b> El campo de nuevo esta prohibido modificar.'); }
				if (!isset($data['field_md_delete'])) { throw new Exception('<b>Error:</b> El campo de eliminar esta prohibido modificar.'); }
				if (!isset($data['field_md_detail'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_md_email'])) { throw new Exception('<b>Error:</b> El campo de correos esta prohibido modificar.'); }
				if (!isset($data['field_md_import'])) { throw new Exception('<b>Error:</b> El campo de importar esta prohibido modificar.'); }
				if (!isset($data['field_md_remove'])) { throw new Exception('<b>Error:</b> El campo de remover esta prohibido modificar.'); }
				if (!isset($data['field_md_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_md_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_md_sub_menu'])) { throw new Exception('<b>Error:</b> El campo de sub menu esta prohibido modificar.'); }
				if (!isset($data['field_md_update'])) { throw new Exception('<b>Error:</b> El campo de actualizar esta prohibido modificar.'); }
				#--------------------------------------------------------------------------------------------------------------------
				$empty_md_change = $this->db->scape($data['field_md_change']);
				$empty_md_create = $this->db->scape($data['field_md_create']);
				$empty_md_delete = $this->db->scape($data['field_md_delete']);
				$empty_md_detail = $this->db->scape($data['field_md_detail']);
				$empty_md_email = $this->db->scape($data['field_md_email']);
				$empty_md_import = $this->db->scape($data['field_md_import']);
				$empty_md_remove = $this->db->scape($data['field_md_remove']);
				$empty_md_report = $this->db->scape($data['field_md_report']);
				$empty_md_restore = $this->db->scape($data['field_md_restore']);
				$empty_md_sub_menu = $this->db->scape($data['field_md_sub_menu']);
				$empty_md_update = $this->db->scape($data['field_md_update']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_change) || strtolower($empty_md_change) == 'seleccionar' || $empty_md_change == 0) {
					throw new Exception('<b>Error:</b> El campo de cambios por es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_change)) {
					throw new Exception('<b>Error:</b> El campo de cambios por solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_create) || strtolower($empty_md_create) == 'seleccionar' || $empty_md_create == 0) {
					throw new Exception('<b>Error:</b> El campo de nuevo es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_create)) {
					throw new Exception('<b>Error:</b> El campo de nuevo solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_delete) || strtolower($empty_md_delete) == 'seleccionar' || $empty_md_delete == 0) {
					throw new Exception('<b>Error:</b> El campo de eliminar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_delete)) {
					throw new Exception('<b>Error:</b> El campo de eliminar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_detail) || strtolower($empty_md_detail) == 'seleccionar' || $empty_md_detail == 0) {
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_detail)) {
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_email) || strtolower($empty_md_email) == 'seleccionar' || $empty_md_email == 0) {
					throw new Exception('<b>Error:</b> El campo de correos es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_email)) {
					throw new Exception('<b>Error:</b> El campo de correos solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_import) || strtolower($empty_md_import) == 'seleccionar' || $empty_md_import == 0) {
					throw new Exception('<b>Error:</b> El campo de importar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_import)) {
					throw new Exception('<b>Error:</b> El campo de importar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_remove) || strtolower($empty_md_remove) == 'seleccionar' || $empty_md_remove == 0) {
					throw new Exception('<b>Error:</b> El campo de remover es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_remove)) {
					throw new Exception('<b>Error:</b> El campo de remover solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_report) || strtolower($empty_md_report) == 'seleccionar' || $empty_md_report == 0) {
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_report)) {
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_restore) || strtolower($empty_md_restore) == 'seleccionar' || $empty_md_restore == 0) {
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_restore)) {
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_sub_menu) || strtolower($empty_md_sub_menu) == 'seleccionar' || $empty_md_sub_menu == 0) {
					throw new Exception('<b>Error:</b> El campo de removidos sub menu oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_sub_menu)) {
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_md_update) || strtolower($empty_md_update) == 'seleccionar' || $empty_md_update == 0) {
					throw new Exception('<b>Error:</b> El campo de actualizar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_md_update)) {
					throw new Exception('<b>Error:</b> El campo de actualizar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_setting_modal_update(array $data) : array {
			$var_error = $this->error_sql_zv_setting_modal_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_md_change = $this->db->scape($data['field_md_change']);
				$empty_md_create = $this->db->scape($data['field_md_create']);
				$empty_md_delete = $this->db->scape($data['field_md_delete']);
				$empty_md_detail = $this->db->scape($data['field_md_detail']);
				$empty_md_email = $this->db->scape($data['field_md_email']);
				$empty_md_import = $this->db->scape($data['field_md_import']);
				$empty_md_remove = $this->db->scape($data['field_md_remove']);
				$empty_md_report = $this->db->scape($data['field_md_report']);
				$empty_md_restore = $this->db->scape($data['field_md_restore']);
				$empty_md_sub_menu = $this->db->scape($data['field_md_sub_menu']);
				$empty_md_update = $this->db->scape($data['field_md_update']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_configuration_modal_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_modal_m_date_modified => DATE_HOUR,
					d_azp_configuration_modal_t_md_change => $empty_md_change,
					d_azp_configuration_modal_t_md_create => $empty_md_create,
					d_azp_configuration_modal_t_md_delete => $empty_md_delete,
					d_azp_configuration_modal_t_md_detail => $empty_md_detail,
					d_azp_configuration_modal_t_md_email => $empty_md_email,
					d_azp_configuration_modal_t_md_import => $empty_md_import,
					d_azp_configuration_modal_t_md_remove => $empty_md_remove,
					d_azp_configuration_modal_t_md_report => $empty_md_report,
					d_azp_configuration_modal_t_md_restore => $empty_md_restore,
					d_azp_configuration_modal_t_md_sub_menu => $empty_md_sub_menu,
					d_azp_configuration_modal_t_md_update => $empty_md_update,
				);
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_configuration_modal, $var_array, d_azp_configuration_modal_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#--------------------------------------------------------------------------------------------------------------------
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
				#--------------------------------------------------------------------------------------------------------------------
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_zv_setting_panel_update(array $data) {
			try {
				#--------------------------------------------------------------------------------------------------------------------
				if (!isset($data['field_pnl_change'])) { throw new Exception('<b>Error:</b> El campo de cambios esta prohibido modificar.'); }
				if (!isset($data['field_pnl_create'])) { throw new Exception('<b>Error:</b> El campo de nuevo esta prohibido modificar.'); }
				if (!isset($data['field_pnl_delete'])) { throw new Exception('<b>Error:</b> El campo de eliminar esta prohibido modificar.'); }
				if (!isset($data['field_pnl_detail'])) { throw new Exception('<b>Error:</b> El campo de detalles esta prohibido modificar.'); }
				if (!isset($data['field_pnl_email'])) { throw new Exception('<b>Error:</b> El campo de correos esta prohibido modificar.'); }
				if (!isset($data['field_pnl_import'])) { throw new Exception('<b>Error:</b> El campo de importar esta prohibido modificar.'); }
				if (!isset($data['field_pnl_remove'])) { throw new Exception('<b>Error:</b> El campo de remover esta prohibido modificar.'); }
				if (!isset($data['field_pnl_report'])) { throw new Exception('<b>Error:</b> El campo de reportes esta prohibido modificar.'); }
				if (!isset($data['field_pnl_restore'])) { throw new Exception('<b>Error:</b> El campo de restaurar esta prohibido modificar.'); }
				if (!isset($data['field_pnl_sub_menu'])) { throw new Exception('<b>Error:</b> El campo de sub menu esta prohibido modificar.'); }
				if (!isset($data['field_pnl_update'])) { throw new Exception('<b>Error:</b> El campo de actualizar esta prohibido modificar.'); }
				#--------------------------------------------------------------------------------------------------------------------
				$empty_pnl_change = $this->db->scape($data['field_pnl_change']);
				$empty_pnl_create = $this->db->scape($data['field_pnl_create']);
				$empty_pnl_delete = $this->db->scape($data['field_pnl_delete']);
				$empty_pnl_detail = $this->db->scape($data['field_pnl_detail']);
				$empty_pnl_email = $this->db->scape($data['field_pnl_email']);
				$empty_pnl_import = $this->db->scape($data['field_pnl_import']);
				$empty_pnl_remove = $this->db->scape($data['field_pnl_remove']);
				$empty_pnl_report = $this->db->scape($data['field_pnl_report']);
				$empty_pnl_restore = $this->db->scape($data['field_pnl_restore']);
				$empty_pnl_sub_menu = $this->db->scape($data['field_pnl_sub_menu']);
				$empty_pnl_update = $this->db->scape($data['field_pnl_update']);
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_change) || strtolower($empty_pnl_change) == 'seleccionar' || $empty_pnl_change == 0) {
					throw new Exception('<b>Error:</b> El campo de cambios por es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_change)) {
					throw new Exception('<b>Error:</b> El campo de cambios por solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_create) || strtolower($empty_pnl_create) == 'seleccionar' || $empty_pnl_create == 0) {
					throw new Exception('<b>Error:</b> El campo de nuevo es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_create)) {
					throw new Exception('<b>Error:</b> El campo de nuevo solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_delete) || strtolower($empty_pnl_delete) == 'seleccionar' || $empty_pnl_delete == 0) {
					throw new Exception('<b>Error:</b> El campo de eliminar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_delete)) {
					throw new Exception('<b>Error:</b> El campo de eliminar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_detail) || strtolower($empty_pnl_detail) == 'seleccionar' || $empty_pnl_detail == 0) {
					throw new Exception('<b>Error:</b> El campo de detalles es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_detail)) {
					throw new Exception('<b>Error:</b> El campo de detalles solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_email) || strtolower($empty_pnl_email) == 'seleccionar' || $empty_pnl_email == 0) {
					throw new Exception('<b>Error:</b> El campo de correos es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_email)) {
					throw new Exception('<b>Error:</b> El campo de correos solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_import) || strtolower($empty_pnl_import) == 'seleccionar' || $empty_pnl_import == 0) {
					throw new Exception('<b>Error:</b> El campo de importar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_import)) {
					throw new Exception('<b>Error:</b> El campo de importar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_remove) || strtolower($empty_pnl_remove) == 'seleccionar' || $empty_pnl_remove == 0) {
					throw new Exception('<b>Error:</b> El campo de remover es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_remove)) {
					throw new Exception('<b>Error:</b> El campo de remover solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_report) || strtolower($empty_pnl_report) == 'seleccionar' || $empty_pnl_report == 0) {
					throw new Exception('<b>Error:</b> El campo de reportes es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_report)) {
					throw new Exception('<b>Error:</b> El campo de reportes solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_restore) || strtolower($empty_pnl_restore) == 'seleccionar' || $empty_pnl_restore == 0) {
					throw new Exception('<b>Error:</b> El campo de restaurar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_restore)) {
					throw new Exception('<b>Error:</b> El campo de restaurar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_sub_menu) || strtolower($empty_pnl_sub_menu) == 'seleccionar' || $empty_pnl_sub_menu == 0) {
					throw new Exception('<b>Error:</b> El campo de removidos sub menu oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_sub_menu)) {
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (Func::emp($empty_pnl_update) || strtolower($empty_pnl_update) == 'seleccionar' || $empty_pnl_update == 0) {
					throw new Exception('<b>Error:</b> El campo de actualizar es oblgitario.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				if (!is_numeric($empty_pnl_update)) {
					throw new Exception('<b>Error:</b> El campo de actualizar solo permite numeros.');
				}
				#--------------------------------------------------------------------------------------------------------------------
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_zv_setting_panel_update(array $data) : array {
			$var_error = $this->error_sql_zv_setting_panel_update($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#--------------------------------------------------------------------------------------------------------------------
				$empty_pnl_change = $this->db->scape($data['field_pnl_change']);
				$empty_pnl_create = $this->db->scape($data['field_pnl_create']);
				$empty_pnl_delete = $this->db->scape($data['field_pnl_delete']);
				$empty_pnl_detail = $this->db->scape($data['field_pnl_detail']);
				$empty_pnl_email = $this->db->scape($data['field_pnl_email']);
				$empty_pnl_import = $this->db->scape($data['field_pnl_import']);
				$empty_pnl_remove = $this->db->scape($data['field_pnl_remove']);
				$empty_pnl_report = $this->db->scape($data['field_pnl_report']);
				$empty_pnl_restore = $this->db->scape($data['field_pnl_restore']);
				$empty_pnl_sub_menu = $this->db->scape($data['field_pnl_sub_menu']);
				$empty_pnl_update = $this->db->scape($data['field_pnl_update']);
				#--------------------------------------------------------------------------------------------------------------------
				# Linea de codigo con una variable y array para actualizar los datos en la tabla
				$var_array = array(
					d_azp_configuration_panel_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_configuration_panel_m_date_modified => DATE_HOUR,
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
				# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
				$this->db->update(t_azp_configuration_panel, $var_array, d_azp_configuration_panel_v_id_azp_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#--------------------------------------------------------------------------------------------------------------------
				# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
				#--------------------------------------------------------------------------------------------------------------------
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_button() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_button, d_azp_configuration_button_m_deleted . " = '1' AND " . d_azp_configuration_button_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_color() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_color, d_azp_configuration_color_m_deleted . " = '1' AND " . d_azp_configuration_color_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_dimension() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_configuration_dimension, d_azp_configuration_dimension_m_deleted . " = '1' AND " . d_azp_configuration_dimension_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_configuration_theme() {
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
		final public function sql_select_tc_azp_modal_code() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_modal_code, d_azp_modal_code_m_deleted . " = '1' AND " . d_azp_modal_code_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_pallet_color() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_pallet_color, d_azp_pallet_color_m_deleted . " = '1' AND " . d_azp_pallet_color_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>