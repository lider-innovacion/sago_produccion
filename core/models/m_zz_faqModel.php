<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	# Url Reemplazo _ para la palabra completa del modulo
	define('d_zz_faq_url_delete', str_replace('_', '', 'zz_faq/eliminate/delete/'));
	define('d_zz_faq_url_remove', str_replace('_', '', 'zz_faq/read/remove/'));
	define('d_zz_faq_url_query', str_replace('_', '', 'zz_faq/read/query/'));
	//------------------------------------------------
	final class m_zz_faqModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_faq." . d_azp_faq_id_azp_faq . " AS 'lbl_azp_faq_id_azp_faq',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_faq." . d_azp_faq_m_date_created . " AS 'lbl_azp_faq_m_date_created',
					tc_azp_faq." . d_azp_faq_m_date_modified . " AS 'lbl_azp_faq_m_date_modified',
					tc_azp_faq." . d_azp_faq_m_description . " AS 'lbl_azp_faq_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_faq." . d_azp_faq_t_answer . " AS 'lbl_azp_faq_t_answer',
					tc_azp_faq." . d_azp_faq_t_question . " AS 'lbl_azp_faq_t_question'
				FROM " . t_azp_faq . " tc_azp_faq
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_faq." . d_azp_faq_m_by_created . " = tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_faq." . d_azp_faq_m_by_modified . " = tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_faq." . d_azp_faq_m_level . " = tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_faq." . d_azp_faq_m_status . " = tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_faq." . d_azp_faq_m_deleted . " = '1'
				ORDER BY tc_azp_faq." . d_azp_faq_id_azp_faq . " ASC
			");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>