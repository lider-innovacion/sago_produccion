<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_fdp_benefitsModel extends Models implements OCREND {
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
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " AS 'lbl_azp_fdp_benefits_id_azp_fdp_benefits',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_created . " AS 'lbl_azp_fdp_benefits_m_date_created',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_modified . " AS 'lbl_azp_fdp_benefits_m_date_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_description . " AS 'lbl_azp_fdp_benefits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ano_prestacion . " AS 'lbl_azp_fdp_benefits_t_ano_prestacion',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_radicado_ipe . " AS 'lbl_azp_fdp_benefits_t_radicado_ipe',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_nvez . " AS 'lbl_azp_fdp_benefits_t_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ipe_nvez . " AS 'lbl_azp_fdp_benefits_t_ipe_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " AS 'lbl_azp_fdp_benefits_t_documento_identidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_docente . " AS 'lbl_azp_fdp_benefits_t_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_radicado_docente . " AS 'lbl_azp_fdp_benefits_t_fecha_radicado_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_prestacion_fomag1 . " AS 'lbl_azp_fdp_benefits_t_prestacion_fomag1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_tipo_de_solicitud . " AS 'lbl_azp_fdp_benefits_t_tipo_de_solicitud',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_prestacion_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1'

					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_observaciones_sustanciador . " AS 'lbl_azp_fdp_benefits_t_observaciones_sustanciador',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_estado_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_bandeja_on_base . " AS 'lbl_azp_fdp_benefits_t_bandeja_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_on_base . " AS 'lbl_azp_fdp_benefits_t_estado_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_informacion_al_consumidor_financiero . " AS 'lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_modalidad . " AS 'lbl_azp_fdp_benefits_t_modalidad',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_banco . " AS 'lbl_azp_fdp_benefits_t_banco',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_maxima_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_maxima_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_global . " AS 'lbl_azp_fdp_benefits_t_estado_global'
				FROM " . t_azp_fdp_benefits . " tc_azp_fdp_benefits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_deleted . " = '1'
					AND tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " = '" . $this->id . "'
				ORDER BY tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_id_azs_fdp_benefits . " AS 'lbl_azs_fdp_benefits_id_azs_fdp_benefits',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_date_modified . " AS 'lbl_azs_fdp_benefits_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_date_created . " AS 'lbl_azs_fdp_benefits_m_date_created',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_date_modified . " AS 'lbl_azs_fdp_benefits_m_date_modified',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_description . " AS 'lbl_azs_fdp_benefits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_ano_prestacion . " AS 'lbl_azs_fdp_benefits_t_ano_prestacion',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_radicado_ipe . " AS 'lbl_azs_fdp_benefits_t_radicado_ipe',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_nvez . " AS 'lbl_azs_fdp_benefits_t_nvez',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_ipe_nvez . " AS 'lbl_azs_fdp_benefits_t_ipe_nvez',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_documento_identidad . " AS 'lbl_azs_fdp_benefits_t_documento_identidad',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_docente . " AS 'lbl_azs_fdp_benefits_t_docente',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_fecha_radicado_docente . " AS 'lbl_azs_fdp_benefits_t_fecha_radicado_docente',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_prestacion_fomag1 . " AS 'lbl_azs_fdp_benefits_t_prestacion_fomag1',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_tipo_de_solicitud . " AS 'lbl_azs_fdp_benefits_t_tipo_de_solicitud',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_estado_prestacion_fomag_1 . " AS 'lbl_azs_fdp_benefits_t_estado_prestacion_fomag_1',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_estado_tramite_fomag_1 . " AS 'lbl_azs_fdp_benefits_t_estado_tramite_fomag_1',
					tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_fecha_de_tramite_fomag_1 . " AS 'lbl_azs_fdp_benefits_t_fecha_de_tramite_fomag_1'

					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_observaciones_sustanciador . " AS 'lbl_azs_fdp_benefits_t_observaciones_sustanciador',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_fecha_de_estudio_fomag_2 . " AS 'lbl_azs_fdp_benefits_t_fecha_de_estudio_fomag_2',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_estado_fomag_2 . " AS 'lbl_azs_fdp_benefits_t_estado_fomag_2',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_bandeja_on_base . " AS 'lbl_azs_fdp_benefits_t_bandeja_on_base',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_estado_on_base . " AS 'lbl_azs_fdp_benefits_t_estado_on_base',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_fecha_de_pago_fomag_1 . " AS 'lbl_azs_fdp_benefits_t_fecha_de_pago_fomag_1',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_informacion_al_consumidor_financiero . " AS 'lbl_azs_fdp_benefits_t_informacion_al_consumidor_financiero',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_fecha_de_pago . " AS 'lbl_azs_fdp_benefits_t_fecha_de_pago',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_modalidad . " AS 'lbl_azs_fdp_benefits_t_modalidad',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_banco . " AS 'lbl_azs_fdp_benefits_t_banco',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_fecha_maxima_de_pago . " AS 'lbl_azs_fdp_benefits_t_fecha_maxima_de_pago',
					-- tc_azs_fdp_benefits." . d_azs_fdp_benefits_t_estado_global . " AS 'lbl_azs_fdp_benefits_t_estado_global'
				FROM " . t_azs_fdp_benefits . " tc_azs_fdp_benefits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_fdp_benefits." . d_azs_fdp_benefits_v_id_azp_fdp_benefits . " = '" . $this->id . "'
				ORDER BY tc_azs_fdp_benefits." . d_azs_fdp_benefits_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_fdp_benefits . "
				WHERE " . d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $this->id . "'
					AND " . d_azp_fdp_benefits_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_fdp_benefits);
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
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " AS 'lbl_azp_fdp_benefits_id_azp_fdp_benefits',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_created . " AS 'lbl_azp_fdp_benefits_m_date_created',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_modified . " AS 'lbl_azp_fdp_benefits_m_date_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_description . " AS 'lbl_azp_fdp_benefits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ano_prestacion . " AS 'lbl_azp_fdp_benefits_t_ano_prestacion',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_radicado_ipe . " AS 'lbl_azp_fdp_benefits_t_radicado_ipe',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_nvez . " AS 'lbl_azp_fdp_benefits_t_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ipe_nvez . " AS 'lbl_azp_fdp_benefits_t_ipe_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " AS 'lbl_azp_fdp_benefits_t_documento_identidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_docente . " AS 'lbl_azp_fdp_benefits_t_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_radicado_docente . " AS 'lbl_azp_fdp_benefits_t_fecha_radicado_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_prestacion_fomag1 . " AS 'lbl_azp_fdp_benefits_t_prestacion_fomag1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_tipo_de_solicitud . " AS 'lbl_azp_fdp_benefits_t_tipo_de_solicitud',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_prestacion_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_observaciones_sustanciador . " AS 'lbl_azp_fdp_benefits_t_observaciones_sustanciador',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_estado_fomag_2',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_bandeja_on_base . " AS 'lbl_azp_fdp_benefits_t_bandeja_on_base',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_on_base . " AS 'lbl_azp_fdp_benefits_t_estado_on_base',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_informacion_al_consumidor_financiero . " AS 'lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_modalidad . " AS 'lbl_azp_fdp_benefits_t_modalidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_banco . " AS 'lbl_azp_fdp_benefits_t_banco',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_maxima_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_maxima_de_pago',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_global . " AS 'lbl_azp_fdp_benefits_t_estado_global'
				FROM " . t_azp_fdp_benefits . " tc_azp_fdp_benefits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $this->id . "'
					AND tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " AS 'lbl_azp_fdp_benefits_id_azp_fdp_benefits',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_created . " AS 'lbl_azp_fdp_benefits_m_date_created',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_modified . " AS 'lbl_azp_fdp_benefits_m_date_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_description . " AS 'lbl_azp_fdp_benefits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ano_prestacion . " AS 'lbl_azp_fdp_benefits_t_ano_prestacion',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_radicado_ipe . " AS 'lbl_azp_fdp_benefits_t_radicado_ipe',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_nvez . " AS 'lbl_azp_fdp_benefits_t_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ipe_nvez . " AS 'lbl_azp_fdp_benefits_t_ipe_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " AS 'lbl_azp_fdp_benefits_t_documento_identidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_docente . " AS 'lbl_azp_fdp_benefits_t_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_radicado_docente . " AS 'lbl_azp_fdp_benefits_t_fecha_radicado_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_prestacion_fomag1 . " AS 'lbl_azp_fdp_benefits_t_prestacion_fomag1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_tipo_de_solicitud . " AS 'lbl_azp_fdp_benefits_t_tipo_de_solicitud',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_prestacion_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1'

					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_observaciones_sustanciador . " AS 'lbl_azp_fdp_benefits_t_observaciones_sustanciador',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_estado_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_bandeja_on_base . " AS 'lbl_azp_fdp_benefits_t_bandeja_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_on_base . " AS 'lbl_azp_fdp_benefits_t_estado_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_informacion_al_consumidor_financiero . " AS 'lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_modalidad . " AS 'lbl_azp_fdp_benefits_t_modalidad',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_banco . " AS 'lbl_azp_fdp_benefits_t_banco',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_maxima_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_maxima_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_global . " AS 'lbl_azp_fdp_benefits_t_estado_global'
				FROM " . t_azp_fdp_benefits . " tc_azp_fdp_benefits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_deleted . " = '3'
					AND tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " = '" . $this->id . "'
				ORDER BY tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " AS 'lbl_azp_fdp_benefits_id_azp_fdp_benefits',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_created . " AS 'lbl_azp_fdp_benefits_m_date_created',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_modified . " AS 'lbl_azp_fdp_benefits_m_date_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_description . " AS 'lbl_azp_fdp_benefits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ano_prestacion . " AS 'lbl_azp_fdp_benefits_t_ano_prestacion',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_radicado_ipe . " AS 'lbl_azp_fdp_benefits_t_radicado_ipe',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_nvez . " AS 'lbl_azp_fdp_benefits_t_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ipe_nvez . " AS 'lbl_azp_fdp_benefits_t_ipe_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " AS 'lbl_azp_fdp_benefits_t_documento_identidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_docente . " AS 'lbl_azp_fdp_benefits_t_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_radicado_docente . " AS 'lbl_azp_fdp_benefits_t_fecha_radicado_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_prestacion_fomag1 . " AS 'lbl_azp_fdp_benefits_t_prestacion_fomag1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_tipo_de_solicitud . " AS 'lbl_azp_fdp_benefits_t_tipo_de_solicitud',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_prestacion_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1'

					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_observaciones_sustanciador . " AS 'lbl_azp_fdp_benefits_t_observaciones_sustanciador',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_estado_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_bandeja_on_base . " AS 'lbl_azp_fdp_benefits_t_bandeja_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_on_base . " AS 'lbl_azp_fdp_benefits_t_estado_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_informacion_al_consumidor_financiero . " AS 'lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_modalidad . " AS 'lbl_azp_fdp_benefits_t_modalidad',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_banco . " AS 'lbl_azp_fdp_benefits_t_banco',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_maxima_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_maxima_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_global . " AS 'lbl_azp_fdp_benefits_t_estado_global'
				FROM " . t_azp_fdp_benefits . " tc_azp_fdp_benefits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_deleted . " = '1'
					AND tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " = '" . $this->id . "'
				ORDER BY tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " AS 'lbl_azp_fdp_benefits_id_azp_fdp_benefits',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_created . " AS 'lbl_azp_fdp_benefits_m_date_created',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_modified . " AS 'lbl_azp_fdp_benefits_m_date_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_description . " AS 'lbl_azp_fdp_benefits_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ano_prestacion . " AS 'lbl_azp_fdp_benefits_t_ano_prestacion',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_radicado_ipe . " AS 'lbl_azp_fdp_benefits_t_radicado_ipe',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_nvez . " AS 'lbl_azp_fdp_benefits_t_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ipe_nvez . " AS 'lbl_azp_fdp_benefits_t_ipe_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " AS 'lbl_azp_fdp_benefits_t_documento_identidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_docente . " AS 'lbl_azp_fdp_benefits_t_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_radicado_docente . " AS 'lbl_azp_fdp_benefits_t_fecha_radicado_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_prestacion_fomag1 . " AS 'lbl_azp_fdp_benefits_t_prestacion_fomag1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_tipo_de_solicitud . " AS 'lbl_azp_fdp_benefits_t_tipo_de_solicitud',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_prestacion_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1'

					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_observaciones_sustanciador . " AS 'lbl_azp_fdp_benefits_t_observaciones_sustanciador',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_estado_fomag_2',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_bandeja_on_base . " AS 'lbl_azp_fdp_benefits_t_bandeja_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_on_base . " AS 'lbl_azp_fdp_benefits_t_estado_on_base',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_informacion_al_consumidor_financiero . " AS 'lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_modalidad . " AS 'lbl_azp_fdp_benefits_t_modalidad',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_banco . " AS 'lbl_azp_fdp_benefits_t_banco',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_maxima_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_maxima_de_pago',
					-- tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_global . " AS 'lbl_azp_fdp_benefits_t_estado_global'
				FROM " . t_azp_fdp_benefits . " tc_azp_fdp_benefits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_deleted . " = '2'
					AND tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " = '" . $this->id . "'
				ORDER BY tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " AS 'lbl_azp_fdp_benefits_id_azp_fdp_benefits',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . " AS 'lbl_azp_fdp_benefits_m_by_created',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_modified . " AS 'lbl_azp_fdp_benefits_m_by_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_created . " AS 'lbl_azp_fdp_benefits_m_date_created',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_date_modified . " AS 'lbl_azp_fdp_benefits_m_date_modified',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_description . " AS 'lbl_azp_fdp_benefits_m_description',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_level . " AS 'lbl_azp_fdp_benefits_m_level',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_status . " AS 'lbl_azp_fdp_benefits_m_status',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ano_prestacion . " AS 'lbl_azp_fdp_benefits_t_ano_prestacion',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_radicado_ipe . " AS 'lbl_azp_fdp_benefits_t_radicado_ipe',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_nvez . " AS 'lbl_azp_fdp_benefits_t_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_ipe_nvez . " AS 'lbl_azp_fdp_benefits_t_ipe_nvez',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_documento_identidad . " AS 'lbl_azp_fdp_benefits_t_documento_identidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_docente . " AS 'lbl_azp_fdp_benefits_t_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_radicado_docente . " AS 'lbl_azp_fdp_benefits_t_fecha_radicado_docente',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_prestacion_fomag1 . " AS 'lbl_azp_fdp_benefits_t_prestacion_fomag1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_tipo_de_solicitud . " AS 'lbl_azp_fdp_benefits_t_tipo_de_solicitud',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_prestacion_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_prestacion_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_estado_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_tramite_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_observaciones_sustanciador . " AS 'lbl_azp_fdp_benefits_t_observaciones_sustanciador',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_estudio_fomag_2',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_fomag_2 . " AS 'lbl_azp_fdp_benefits_t_estado_fomag_2',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_bandeja_on_base . " AS 'lbl_azp_fdp_benefits_t_bandeja_on_base',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_on_base . " AS 'lbl_azp_fdp_benefits_t_estado_on_base',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago_fomag_1',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_informacion_al_consumidor_financiero . " AS 'lbl_azp_fdp_benefits_t_informacion_al_consumidor_financiero',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_de_pago',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_modalidad . " AS 'lbl_azp_fdp_benefits_t_modalidad',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_banco . " AS 'lbl_azp_fdp_benefits_t_banco',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_fecha_maxima_de_pago . " AS 'lbl_azp_fdp_benefits_t_fecha_maxima_de_pago',
					tc_azp_fdp_benefits." . d_azp_fdp_benefits_t_estado_global . " AS 'lbl_azp_fdp_benefits_t_estado_global'
				FROM " . t_azp_fdp_benefits . " tc_azp_fdp_benefits
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_benefits." . d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $this->id . "'
					AND tc_azp_fdp_benefits." . d_azp_fdp_benefits_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_sxm_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_id_azp_fdp_sxm . " AS 'lbl_azp_fdp_sxm_id_azp_fdp_sxm',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_date_created . " AS 'lbl_azp_fdp_sxm_m_date_created',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_date_modified . " AS 'lbl_azp_fdp_sxm_m_date_modified',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_description . " AS 'lbl_azp_fdp_sxm_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_base . " AS 'lbl_azp_fdp_sxm_t_base',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_remitente . " AS 'lbl_azp_fdp_sxm_t_remitente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_radicado_de_entrada . " AS 'lbl_azp_fdp_sxm_t_radicado_de_entrada',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_radicado_de_entrada . " AS 'lbl_azp_fdp_sxm_t_fecha_radicado_de_entrada',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_nombre_docente . " AS 'lbl_azp_fdp_sxm_t_nombre_docente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ced_docente . " AS 'lbl_azp_fdp_sxm_t_ced_docente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_res . " AS 'lbl_azp_fdp_sxm_t_res',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_resolucion . " AS 'lbl_azp_fdp_sxm_t_fecha_resolucion',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_tipo_cesantia . " AS 'lbl_azp_fdp_sxm_t_tipo_cesantia',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_nombre_de_apoderado . " AS 'lbl_azp_fdp_sxm_t_nombre_de_apoderado',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_firma . " AS 'lbl_azp_fdp_sxm_t_firma',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_resultado_estudio . " AS 'lbl_azp_fdp_sxm_t_resultado_estudio',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_analisis_sustanciador_negadas . " AS 'lbl_azp_fdp_sxm_t_analisis_sustanciador_negadas',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_medio_de_liquidacion . " AS 'lbl_azp_fdp_sxm_t_medio_de_liquidacion',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ocasion_del_pago . " AS 'lbl_azp_fdp_sxm_t_ocasion_del_pago',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_de_actualizacion_dpe . " AS 'lbl_azp_fdp_sxm_t_fecha_de_actualizacion_dpe'
				FROM " . t_azp_fdp_sxm . " tc_azp_fdp_sxm
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_sxm." . d_azp_fdp_sxm_id_azp_fdp_sxm . " = '" . $this->id . "'
					AND tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_sxm_inner() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_id_azp_fdp_sxm . " AS 'lbl_azp_fdp_sxm_id_azp_fdp_sxm',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_date_created . " AS 'lbl_azp_fdp_sxm_m_date_created',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_date_modified . " AS 'lbl_azp_fdp_sxm_m_date_modified',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_description . " AS 'lbl_azp_fdp_sxm_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_base . " AS 'lbl_azp_fdp_sxm_t_base',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_remitente . " AS 'lbl_azp_fdp_sxm_t_remitente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_radicado_de_entrada . " AS 'lbl_azp_fdp_sxm_t_radicado_de_entrada',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_radicado_de_entrada . " AS 'lbl_azp_fdp_sxm_t_fecha_radicado_de_entrada',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_nombre_docente . " AS 'lbl_azp_fdp_sxm_t_nombre_docente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ced_docente . " AS 'lbl_azp_fdp_sxm_t_ced_docente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_res . " AS 'lbl_azp_fdp_sxm_t_res',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_resolucion . " AS 'lbl_azp_fdp_sxm_t_fecha_resolucion',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_tipo_cesantia . " AS 'lbl_azp_fdp_sxm_t_tipo_cesantia',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_nombre_de_apoderado . " AS 'lbl_azp_fdp_sxm_t_nombre_de_apoderado',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_firma . " AS 'lbl_azp_fdp_sxm_t_firma',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_resultado_estudio . " AS 'lbl_azp_fdp_sxm_t_resultado_estudio',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_analisis_sustanciador_negadas . " AS 'lbl_azp_fdp_sxm_t_analisis_sustanciador_negadas',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_medio_de_liquidacion . " AS 'lbl_azp_fdp_sxm_t_medio_de_liquidacion',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ocasion_del_pago . " AS 'lbl_azp_fdp_sxm_t_ocasion_del_pago',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_de_actualizacion_dpe . " AS 'lbl_azp_fdp_sxm_t_fecha_de_actualizacion_dpe'
				FROM " . t_azp_fdp_sxm . " tc_azp_fdp_sxm
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ced_docente . " = '" . $this->id . "'
					AND tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_deleted . " = '1'
				-- LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_sxm_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_id_azp_fdp_sxm . " AS 'lbl_azp_fdp_sxm_id_azp_fdp_sxm',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_date_created . " AS 'lbl_azp_fdp_sxm_m_date_created',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_date_modified . " AS 'lbl_azp_fdp_sxm_m_date_modified',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_description . " AS 'lbl_azp_fdp_sxm_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_base . " AS 'lbl_azp_fdp_sxm_t_base',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_remitente . " AS 'lbl_azp_fdp_sxm_t_remitente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_radicado_de_entrada . " AS 'lbl_azp_fdp_sxm_t_radicado_de_entrada',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_radicado_de_entrada . " AS 'lbl_azp_fdp_sxm_t_fecha_radicado_de_entrada',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_nombre_docente . " AS 'lbl_azp_fdp_sxm_t_nombre_docente',
					tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ced_docente . " AS 'lbl_azp_fdp_sxm_t_ced_docente'
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_res . " AS 'lbl_azp_fdp_sxm_t_res',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_resolucion . " AS 'lbl_azp_fdp_sxm_t_fecha_resolucion',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_tipo_cesantia . " AS 'lbl_azp_fdp_sxm_t_tipo_cesantia',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_nombre_de_apoderado . " AS 'lbl_azp_fdp_sxm_t_nombre_de_apoderado',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_firma . " AS 'lbl_azp_fdp_sxm_t_firma',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_resultado_estudio . " AS 'lbl_azp_fdp_sxm_t_resultado_estudio',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_analisis_sustanciador_negadas . " AS 'lbl_azp_fdp_sxm_t_analisis_sustanciador_negadas',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_medio_de_liquidacion . " AS 'lbl_azp_fdp_sxm_t_medio_de_liquidacion',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ocasion_del_pago . " AS 'lbl_azp_fdp_sxm_t_ocasion_del_pago',
					-- tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_fecha_de_actualizacion_dpe . " AS 'lbl_azp_fdp_sxm_t_fecha_de_actualizacion_dpe'
				FROM " . t_azp_fdp_sxm . " tc_azp_fdp_sxm
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_fdp_sxm." . d_azp_fdp_sxm_m_deleted . " = '1'
					AND tc_azp_fdp_sxm." . d_azp_fdp_sxm_t_ced_docente . " = '" . $this->id . "'
				ORDER BY tc_azp_fdp_sxm." . d_azp_fdp_sxm_id_azp_fdp_sxm . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_fdp_benefits_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fdp_benefits_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_level . " = '2'");
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
		final public function sql_azp_fdp_benefits_delete(array $data) : array {
			$var_error = $this->error_sql_azp_fdp_benefits_delete($data);
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
				$var_array = array(d_azp_fdp_benefits_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fdp_benefits, $var_array, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_fdp_benefits_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_ano_prestacion'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_radicado_ipe'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_nvez'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_ipe_nvez'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_documento_identidad'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_docente'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_fecha_radicado_docente'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_prestacion_fomag1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_tipo_de_solicitud'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_estado_prestacion_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_estado_tramite_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_fecha_de_tramite_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_observaciones_sustanciador'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_fecha_de_estudio_fomag_2'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_estado_fomag_2'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_bandeja_on_base'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_estado_on_base'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_fecha_de_pago_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_informacion_al_consumidor_financiero'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_fecha_de_pago'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_modalidad'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_banco'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_fecha_maxima_de_pago'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_estado_global'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_ano_prestacion = $this->db->scape($data['field_cr_ano_prestacion']);
				$empty_radicado_ipe = $this->db->scape($data['field_cr_radicado_ipe']);
				$empty_nvez = $this->db->scape($data['field_cr_nvez']);
				$empty_ipe_nvez = $this->db->scape($data['field_cr_ipe_nvez']);
				$empty_documento_identidad = $this->db->scape($data['field_cr_documento_identidad']);
				$empty_docente = $this->db->scape($data['field_cr_docente']);
				$empty_fecha_radicado_docente = $this->db->scape($data['field_cr_fecha_radicado_docente']);
				$empty_prestacion_fomag1 = $this->db->scape($data['field_cr_prestacion_fomag1']);
				$empty_tipo_de_solicitud = $this->db->scape($data['field_cr_tipo_de_solicitud']);
				$empty_estado_prestacion_fomag_1 = $this->db->scape($data['field_cr_estado_prestacion_fomag_1']);
				$empty_estado_tramite_fomag_1 = $this->db->scape($data['field_cr_estado_tramite_fomag_1']);
				$empty_fecha_de_tramite_fomag_1 = $this->db->scape($data['field_cr_fecha_de_tramite_fomag_1']);
				$empty_observaciones_sustanciador = $this->db->scape($data['field_cr_observaciones_sustanciador']);
				$empty_fecha_de_estudio_fomag_2 = $this->db->scape($data['field_cr_fecha_de_estudio_fomag_2']);
				$empty_estado_fomag_2 = $this->db->scape($data['field_cr_estado_fomag_2']);
				$empty_bandeja_on_base = $this->db->scape($data['field_cr_bandeja_on_base']);
				$empty_estado_on_base = $this->db->scape($data['field_cr_estado_on_base']);
				$empty_fecha_de_pago_fomag_1 = $this->db->scape($data['field_cr_fecha_de_pago_fomag_1']);
				$empty_informacion_al_consumidor_financiero = $this->db->scape($data['field_cr_informacion_al_consumidor_financiero']);
				$empty_fecha_de_pago = $this->db->scape($data['field_cr_fecha_de_pago']);
				$empty_modalidad = $this->db->scape($data['field_cr_modalidad']);
				$empty_banco = $this->db->scape($data['field_cr_banco']);
				$empty_fecha_maxima_de_pago = $this->db->scape($data['field_cr_fecha_maxima_de_pago']);
				$empty_estado_global = $this->db->scape($data['field_cr_estado_global']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (strlen($empty_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}
				#---------------------------------------------#
				if (strpos($empty_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}
				#---------------------------------------------#
				if (preg_match('/^\s|\s$/', $empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}
				#-------------------------------------------------------------------------#
				# Verificar si el valor ingresado se encuentra repetido en los demas registros
				$sql_name = $this->db->select(d_azp_fdp_benefits_t_name, t_azp_fdp_benefits, d_azp_fdp_benefits_t_name . " = '" . $empty_name . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_name) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_name[0][0]) == strtolower($empty_name)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El nombre digitado ya existe registrado.');
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
		final public function sql_azp_fdp_benefits_insert(array $data) : array {
			$var_error = $this->error_sql_azp_fdp_benefits_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_ano_prestacion = $this->db->scape($data['field_cr_ano_prestacion']);
				$empty_radicado_ipe = $this->db->scape($data['field_cr_radicado_ipe']);
				$empty_nvez = $this->db->scape($data['field_cr_nvez']);
				$empty_ipe_nvez = $this->db->scape($data['field_cr_ipe_nvez']);
				$empty_documento_identidad = $this->db->scape($data['field_cr_documento_identidad']);
				$empty_docente = $this->db->scape($data['field_cr_docente']);
				$empty_fecha_radicado_docente = $this->db->scape($data['field_cr_fecha_radicado_docente']);
				$empty_prestacion_fomag1 = $this->db->scape($data['field_cr_prestacion_fomag1']);
				$empty_tipo_de_solicitud = $this->db->scape($data['field_cr_tipo_de_solicitud']);
				$empty_estado_prestacion_fomag_1 = $this->db->scape($data['field_cr_estado_prestacion_fomag_1']);
				$empty_estado_tramite_fomag_1 = $this->db->scape($data['field_cr_estado_tramite_fomag_1']);
				$empty_fecha_de_tramite_fomag_1 = $this->db->scape($data['field_cr_fecha_de_tramite_fomag_1']);
				$empty_observaciones_sustanciador = $this->db->scape($data['field_cr_observaciones_sustanciador']);
				$empty_fecha_de_estudio_fomag_2 = $this->db->scape($data['field_cr_fecha_de_estudio_fomag_2']);
				$empty_estado_fomag_2 = $this->db->scape($data['field_cr_estado_fomag_2']);
				$empty_bandeja_on_base = $this->db->scape($data['field_cr_bandeja_on_base']);
				$empty_estado_on_base = $this->db->scape($data['field_cr_estado_on_base']);
				$empty_fecha_de_pago_fomag_1 = $this->db->scape($data['field_cr_fecha_de_pago_fomag_1']);
				$empty_informacion_al_consumidor_financiero = $this->db->scape($data['field_cr_informacion_al_consumidor_financiero']);
				$empty_fecha_de_pago = $this->db->scape($data['field_cr_fecha_de_pago']);
				$empty_modalidad = $this->db->scape($data['field_cr_modalidad']);
				$empty_banco = $this->db->scape($data['field_cr_banco']);
				$empty_fecha_maxima_de_pago = $this->db->scape($data['field_cr_fecha_maxima_de_pago']);
				$empty_estado_global = $this->db->scape($data['field_cr_estado_global']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fdp_benefits_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_fdp_benefits_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fdp_benefits_m_date_created => DATE_HOUR,
					d_azp_fdp_benefits_m_date_modified => DATE_HOUR,
					d_azp_fdp_benefits_m_deleted => '1',
					d_azp_fdp_benefits_m_description => $empty_description,
					d_azp_fdp_benefits_m_level => '2',
					d_azp_fdp_benefits_m_status => '1',
					d_azp_fdp_benefits_m_temp => '1',
					d_azp_fdp_benefits_t_ano_prestacion => $empty_ano_prestacion,
					d_azp_fdp_benefits_t_radicado_ipe => $empty_radicado_ipe,
					d_azp_fdp_benefits_t_nvez => $empty_nvez,
					d_azp_fdp_benefits_t_ipe_nvez => $empty_ipe_nvez,
					d_azp_fdp_benefits_t_documento_identidad => $empty_documento_identidad,
					d_azp_fdp_benefits_t_docente => $empty_docente,
					d_azp_fdp_benefits_t_fecha_radicado_docente => $empty_fecha_radicado_docente,
					d_azp_fdp_benefits_t_prestacion_fomag1 => $empty_prestacion_fomag1,
					d_azp_fdp_benefits_t_tipo_de_solicitud => $empty_tipo_de_solicitud,
					d_azp_fdp_benefits_t_estado_prestacion_fomag_1 => $empty_estado_prestacion_fomag_1,
					d_azp_fdp_benefits_t_estado_tramite_fomag_1 => $empty_estado_tramite_fomag_1,
					d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 => $empty_fecha_de_tramite_fomag_1,
					d_azp_fdp_benefits_t_observaciones_sustanciador => $empty_observaciones_sustanciador,
					d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 => $empty_fecha_de_estudio_fomag_2,
					d_azp_fdp_benefits_t_estado_fomag_2 => $empty_estado_fomag_2,
					d_azp_fdp_benefits_t_bandeja_on_base => $empty_bandeja_on_base,
					d_azp_fdp_benefits_t_estado_on_base => $empty_estado_on_base,
					d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 => $empty_fecha_de_pago_fomag_1,
					d_azp_fdp_benefits_t_informacion_al_consumidor_financiero => $empty_informacion_al_consumidor_financiero,
					d_azp_fdp_benefits_t_fecha_de_pago => $empty_fecha_de_pago,
					d_azp_fdp_benefits_t_modalidad => $empty_modalidad,
					d_azp_fdp_benefits_t_banco => $empty_banco,
					d_azp_fdp_benefits_t_fecha_maxima_de_pago => $empty_fecha_maxima_de_pago,
					d_azp_fdp_benefits_t_estado_global => $empty_estado_global,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_fdp_benefits, $var_array);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fdp_benefits_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fdp_benefits_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_level . " = '2'");
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
		final public function sql_azp_fdp_benefits_remove(array $data) : array {
			$var_error = $this->error_sql_azp_fdp_benefits_remove($data);
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
				$var_array = array(d_azp_fdp_benefits_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fdp_benefits, $var_array, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fdp_benefits_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fdp_benefits_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_level . " = '2'");
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
		final public function sql_azp_fdp_benefits_restore(array $data) : array {
			$var_error = $this->error_sql_azp_fdp_benefits_restore($data);
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
				$var_array = array(d_azp_fdp_benefits_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fdp_benefits, $var_array, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_fdp_benefits_update(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				if (!isset($data['field_up_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				//if (!isset($data['field_up_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				//$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				if (!isset($data['field_up_ano_prestacion'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_radicado_ipe'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_nvez'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_ipe_nvez'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_documento_identidad'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_docente'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_fecha_radicado_docente'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_prestacion_fomag1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_tipo_de_solicitud'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_estado_prestacion_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_estado_tramite_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_fecha_de_tramite_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_observaciones_sustanciador'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_fecha_de_estudio_fomag_2'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_estado_fomag_2'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_bandeja_on_base'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_estado_on_base'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_fecha_de_pago_fomag_1'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_informacion_al_consumidor_financiero'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_fecha_de_pago'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_modalidad'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_banco'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_fecha_maxima_de_pago'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_estado_global'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_ano_prestacion = $this->db->scape($data['field_cr_ano_prestacion']);
				$empty_radicado_ipe = $this->db->scape($data['field_cr_radicado_ipe']);
				$empty_nvez = $this->db->scape($data['field_cr_nvez']);
				$empty_ipe_nvez = $this->db->scape($data['field_cr_ipe_nvez']);
				$empty_documento_identidad = $this->db->scape($data['field_cr_documento_identidad']);
				$empty_docente = $this->db->scape($data['field_cr_docente']);
				$empty_fecha_radicado_docente = $this->db->scape($data['field_cr_fecha_radicado_docente']);
				$empty_prestacion_fomag1 = $this->db->scape($data['field_cr_prestacion_fomag1']);
				$empty_tipo_de_solicitud = $this->db->scape($data['field_cr_tipo_de_solicitud']);
				$empty_estado_prestacion_fomag_1 = $this->db->scape($data['field_cr_estado_prestacion_fomag_1']);
				$empty_estado_tramite_fomag_1 = $this->db->scape($data['field_cr_estado_tramite_fomag_1']);
				$empty_fecha_de_tramite_fomag_1 = $this->db->scape($data['field_cr_fecha_de_tramite_fomag_1']);
				$empty_observaciones_sustanciador = $this->db->scape($data['field_cr_observaciones_sustanciador']);
				$empty_fecha_de_estudio_fomag_2 = $this->db->scape($data['field_cr_fecha_de_estudio_fomag_2']);
				$empty_estado_fomag_2 = $this->db->scape($data['field_cr_estado_fomag_2']);
				$empty_bandeja_on_base = $this->db->scape($data['field_cr_bandeja_on_base']);
				$empty_estado_on_base = $this->db->scape($data['field_cr_estado_on_base']);
				$empty_fecha_de_pago_fomag_1 = $this->db->scape($data['field_cr_fecha_de_pago_fomag_1']);
				$empty_informacion_al_consumidor_financiero = $this->db->scape($data['field_cr_informacion_al_consumidor_financiero']);
				$empty_fecha_de_pago = $this->db->scape($data['field_cr_fecha_de_pago']);
				$empty_modalidad = $this->db->scape($data['field_cr_modalidad']);
				$empty_banco = $this->db->scape($data['field_cr_banco']);
				$empty_fecha_maxima_de_pago = $this->db->scape($data['field_cr_fecha_maxima_de_pago']);
				$empty_estado_global = $this->db->scape($data['field_cr_estado_global']);
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
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_fdp_benefits_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "' AND " . d_azp_fdp_benefits_m_level . " = '2'");
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
		final public function sql_azp_fdp_benefits_update(array $data) : array {
			$var_error = $this->error_sql_azp_fdp_benefits_update($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
				$empty_description = $this->db->scape($data['field_up_description']);
				//$empty_state = $this->db->scape($data['field_up_state']);
				#-------------------------------------------------------------------------#
				$empty_ano_prestacion = $this->db->scape($data['field_cr_ano_prestacion']);
				$empty_radicado_ipe = $this->db->scape($data['field_cr_radicado_ipe']);
				$empty_nvez = $this->db->scape($data['field_cr_nvez']);
				$empty_ipe_nvez = $this->db->scape($data['field_cr_ipe_nvez']);
				$empty_documento_identidad = $this->db->scape($data['field_cr_documento_identidad']);
				$empty_docente = $this->db->scape($data['field_cr_docente']);
				$empty_fecha_radicado_docente = $this->db->scape($data['field_cr_fecha_radicado_docente']);
				$empty_prestacion_fomag1 = $this->db->scape($data['field_cr_prestacion_fomag1']);
				$empty_tipo_de_solicitud = $this->db->scape($data['field_cr_tipo_de_solicitud']);
				$empty_estado_prestacion_fomag_1 = $this->db->scape($data['field_cr_estado_prestacion_fomag_1']);
				$empty_estado_tramite_fomag_1 = $this->db->scape($data['field_cr_estado_tramite_fomag_1']);
				$empty_fecha_de_tramite_fomag_1 = $this->db->scape($data['field_cr_fecha_de_tramite_fomag_1']);
				$empty_observaciones_sustanciador = $this->db->scape($data['field_cr_observaciones_sustanciador']);
				$empty_fecha_de_estudio_fomag_2 = $this->db->scape($data['field_cr_fecha_de_estudio_fomag_2']);
				$empty_estado_fomag_2 = $this->db->scape($data['field_cr_estado_fomag_2']);
				$empty_bandeja_on_base = $this->db->scape($data['field_cr_bandeja_on_base']);
				$empty_estado_on_base = $this->db->scape($data['field_cr_estado_on_base']);
				$empty_fecha_de_pago_fomag_1 = $this->db->scape($data['field_cr_fecha_de_pago_fomag_1']);
				$empty_informacion_al_consumidor_financiero = $this->db->scape($data['field_cr_informacion_al_consumidor_financiero']);
				$empty_fecha_de_pago = $this->db->scape($data['field_cr_fecha_de_pago']);
				$empty_modalidad = $this->db->scape($data['field_cr_modalidad']);
				$empty_banco = $this->db->scape($data['field_cr_banco']);
				$empty_fecha_maxima_de_pago = $this->db->scape($data['field_cr_fecha_maxima_de_pago']);
				$empty_estado_global = $this->db->scape($data['field_cr_estado_global']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_fdp_benefits, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_fdp_benefits_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_fdp_benefits_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_fdp_benefits_m_date_created => DATE_HOUR,
							d_azs_fdp_benefits_m_date_modified => DATE_HOUR,
							d_azs_fdp_benefits_m_deleted => $key_sql_select[d_azp_fdp_benefits_m_deleted],
							d_azs_fdp_benefits_m_description => $key_sql_select[d_azp_fdp_benefits_m_description],
							d_azs_fdp_benefits_m_level => $key_sql_select[d_azp_fdp_benefits_m_level],
							d_azs_fdp_benefits_m_status => $key_sql_select[d_azp_fdp_benefits_m_status],
							d_azs_fdp_benefits_m_temp => $key_sql_select[d_azp_fdp_benefits_m_temp],
							d_azs_fdp_benefits_t_ano_prestacion => $key_sql_select[d_azp_fdp_benefits_t_ano_prestacion],
							d_azs_fdp_benefits_t_radicado_ipe => $key_sql_select[d_azp_fdp_benefits_t_radicado_ipe],
							d_azs_fdp_benefits_t_nvez => $key_sql_select[d_azp_fdp_benefits_t_nvez],
							d_azs_fdp_benefits_t_ipe_nvez => $key_sql_select[d_azp_fdp_benefits_t_ipe_nvez],
							d_azs_fdp_benefits_t_documento_identidad => $key_sql_select[d_azp_fdp_benefits_t_documento_identidad],
							d_azs_fdp_benefits_t_docente => $key_sql_select[d_azp_fdp_benefits_t_docente],
							d_azs_fdp_benefits_t_fecha_radicado_docente => $key_sql_select[d_azp_fdp_benefits_t_fecha_radicado_docente],
							d_azs_fdp_benefits_t_prestacion_fomag1 => $key_sql_select[d_azp_fdp_benefits_t_prestacion_fomag1],
							d_azs_fdp_benefits_t_tipo_de_solicitud => $key_sql_select[d_azp_fdp_benefits_t_tipo_de_solicitud],
							d_azs_fdp_benefits_t_estado_prestacion_fomag_1 => $key_sql_select[d_azp_fdp_benefits_t_estado_prestacion_fomag_1],
							d_azs_fdp_benefits_t_estado_tramite_fomag_1 => $key_sql_select[d_azp_fdp_benefits_t_estado_tramite_fomag_1],
							d_azs_fdp_benefits_t_fecha_de_tramite_fomag_1 => $key_sql_select[d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1],
							d_azs_fdp_benefits_t_observaciones_sustanciador => $key_sql_select[d_azp_fdp_benefits_t_observaciones_sustanciador],
							d_azs_fdp_benefits_t_fecha_de_estudio_fomag_2 => $key_sql_select[d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2],
							d_azs_fdp_benefits_t_estado_fomag_2 => $key_sql_select[d_azp_fdp_benefits_t_estado_fomag_2],
							d_azs_fdp_benefits_t_bandeja_on_base => $key_sql_select[d_azp_fdp_benefits_t_bandeja_on_base],
							d_azs_fdp_benefits_t_estado_on_base => $key_sql_select[d_azp_fdp_benefits_t_estado_on_base],
							d_azs_fdp_benefits_t_fecha_de_pago_fomag_1 => $key_sql_select[d_azp_fdp_benefits_t_fecha_de_pago_fomag_1],
							d_azs_fdp_benefits_t_informacion_al_consumidor_financiero => $key_sql_select[d_azp_fdp_benefits_t_informacion_al_consumidor_financiero],
							d_azs_fdp_benefits_t_fecha_de_pago => $key_sql_select[d_azp_fdp_benefits_t_fecha_de_pago],
							d_azs_fdp_benefits_t_modalidad => $key_sql_select[d_azp_fdp_benefits_t_modalidad],
							d_azs_fdp_benefits_t_banco => $key_sql_select[d_azp_fdp_benefits_t_banco],
							d_azs_fdp_benefits_t_fecha_maxima_de_pago => $key_sql_select[d_azp_fdp_benefits_t_fecha_maxima_de_pago],
							d_azs_fdp_benefits_t_estado_global => $key_sql_select[d_azp_fdp_benefits_t_estado_global],
							d_azs_fdp_benefits_v_id_azp_fdp_benefits => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_fdp_benefits, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_fdp_benefits_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_fdp_benefits_m_date_modified => DATE_HOUR,
					d_azp_fdp_benefits_m_description => $empty_description,
					//d_azp_fdp_benefits_m_status => $empty_state,
					d_azp_fdp_benefits_t_ano_prestacion => $empty_ano_prestacion,
					d_azp_fdp_benefits_t_radicado_ipe => $empty_radicado_ipe,
					d_azp_fdp_benefits_t_nvez => $empty_nvez,
					d_azp_fdp_benefits_t_ipe_nvez => $empty_ipe_nvez,
					d_azp_fdp_benefits_t_documento_identidad => $empty_documento_identidad,
					d_azp_fdp_benefits_t_docente => $empty_docente,
					d_azp_fdp_benefits_t_fecha_radicado_docente => $empty_fecha_radicado_docente,
					d_azp_fdp_benefits_t_prestacion_fomag1 => $empty_prestacion_fomag1,
					d_azp_fdp_benefits_t_tipo_de_solicitud => $empty_tipo_de_solicitud,
					d_azp_fdp_benefits_t_estado_prestacion_fomag_1 => $empty_estado_prestacion_fomag_1,
					d_azp_fdp_benefits_t_estado_tramite_fomag_1 => $empty_estado_tramite_fomag_1,
					d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 => $empty_fecha_de_tramite_fomag_1,
					d_azp_fdp_benefits_t_observaciones_sustanciador => $empty_observaciones_sustanciador,
					d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 => $empty_fecha_de_estudio_fomag_2,
					d_azp_fdp_benefits_t_estado_fomag_2 => $empty_estado_fomag_2,
					d_azp_fdp_benefits_t_bandeja_on_base => $empty_bandeja_on_base,
					d_azp_fdp_benefits_t_estado_on_base => $empty_estado_on_base,
					d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 => $empty_fecha_de_pago_fomag_1,
					d_azp_fdp_benefits_t_informacion_al_consumidor_financiero => $empty_informacion_al_consumidor_financiero,
					d_azp_fdp_benefits_t_fecha_de_pago => $empty_fecha_de_pago,
					d_azp_fdp_benefits_t_modalidad => $empty_modalidad,
					d_azp_fdp_benefits_t_banco => $empty_banco,
					d_azp_fdp_benefits_t_fecha_maxima_de_pago => $empty_fecha_maxima_de_pago,
					d_azp_fdp_benefits_t_estado_global => $empty_estado_global,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_fdp_benefits, $var_array, d_azp_fdp_benefits_id_azp_fdp_benefits . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_azp_fdp_benefits_extra_import(array $data) {
			//$var_error = $this->error_sql_azp_gsc_import($data);
			//if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				$empty_id = $this->db->scape($data['field_import_id']);
				# --------------------------------------------------------------------------------------------------
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Datos importados correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final public function sql_azp_fdp_benefits_extra_file(string $var_name, string $var_type, string $var_tmp_name, string $var_error, string $var_size) {
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				# --------------------------------------------------------------------------------------------------
				# Eliminar registros de la tabla de importacion
				$this->db->query("TRUNCATE TABLE " . t_azp_fdp_benefits);
				# Eliminar registros de la tabla de importacion
				#$this->db->query("DELETE FROM " . t_azp_fdp_benefits);
				# Restaurar valor de la tabla desde el inicio para el nuevo cargue
				#$this->db->query("ALTER TABLE " . t_azp_fdp_benefits . " AUTO_INCREMENT = 1");
				# Eliminar registros de la tabla de importacion
				$this->db->query("TRUNCATE TABLE " . t_azp_fdp_sxm);
				# Eliminar registros de la tabla de importacion
				#$this->db->query("DELETE FROM " . t_azp_fdp_sxm);
				# Restaurar valor de la tabla desde el inicio para el nuevo cargue
				#$this->db->query("ALTER TABLE " . t_azp_fdp_sxm . " AUTO_INCREMENT = 1");
				# --------------------------------------------------------------------------------------------------
				# Imprimir los valores recibidos del archivo cargado
				$var_name; $var_type; $var_tmp_name; $var_error; $var_size;
				# Obtener datos del archivo recibido y saltar lineas
				$var_file = file_get_contents($var_tmp_name);
				$var_file = explode("\n", $var_file);
				$var_file = array_filter($var_file);
				# Recorrer los datos del archivo y separarlos por coma o punto y coma
				foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
				# Recorrer los datos divididos por filas y almacenarlos en la base
				foreach ($var_list as $key => $value) {
					# Captura de los datos a traves de post para ser revisados y asignados a una neuva variable
					$empty_ano_prestacion = $this->db->scape($value[0]);
					$empty_radicado_ipe = $this->db->scape($value[1]);
					$empty_nvez = $this->db->scape($value[2]);
					$empty_ipe_nvez = $this->db->scape($value[3]);
					$empty_documento_identidad = $this->db->scape($value[4]);
					$empty_docente = $this->db->scape($value[5]);
					$empty_fecha_radicado_docente = $this->db->scape($value[6]);
					$empty_prestacion_fomag1 = $this->db->scape($value[7]);
					$empty_tipo_de_solicitud = $this->db->scape($value[8]);
					$empty_estado_prestacion_fomag_1 = $this->db->scape($value[9]);
					$empty_estado_tramite_fomag_1 = $this->db->scape($value[10]);
					$empty_fecha_de_tramite_fomag_1 = $this->db->scape($value[11]);
					$empty_observaciones_sustanciador = $this->db->scape($value[12]);
					$empty_fecha_de_estudio_fomag_2 = $this->db->scape($value[13]);
					$empty_estado_fomag_2 = $this->db->scape($value[14]);
					$empty_bandeja_on_base = $this->db->scape($value[15]);
					$empty_estado_on_base = $this->db->scape($value[16]);
					$empty_fecha_de_pago_fomag_1 = $this->db->scape($value[17]);
					$empty_informacion_al_consumidor_financiero = $this->db->scape($value[18]);
					$empty_fecha_de_pago = $this->db->scape($value[19]);
					$empty_modalidad = $this->db->scape($value[20]);
					$empty_banco = $this->db->scape($value[21]);
					$empty_fecha_maxima_de_pago = $this->db->scape($value[22]);
					$empty_estado_global = $this->db->scape($value[23]);
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azp_fdp_benefits_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fdp_benefits_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fdp_benefits_m_date_created => DATE_HOUR,
						d_azp_fdp_benefits_m_date_modified => DATE_HOUR,
						d_azp_fdp_benefits_m_deleted => '1',
						d_azp_fdp_benefits_m_description => '',
						d_azp_fdp_benefits_m_level => '1',
						d_azp_fdp_benefits_m_status => '1',
						d_azp_fdp_benefits_m_temp => '1',
						d_azp_fdp_benefits_t_ano_prestacion => $empty_ano_prestacion,
						d_azp_fdp_benefits_t_radicado_ipe => $empty_radicado_ipe,
						d_azp_fdp_benefits_t_nvez => $empty_nvez,
						d_azp_fdp_benefits_t_ipe_nvez => $empty_ipe_nvez,
						d_azp_fdp_benefits_t_documento_identidad => $empty_documento_identidad,
						d_azp_fdp_benefits_t_docente => $empty_docente,
						d_azp_fdp_benefits_t_fecha_radicado_docente => $empty_fecha_radicado_docente,
						d_azp_fdp_benefits_t_prestacion_fomag1 => $empty_prestacion_fomag1,
						d_azp_fdp_benefits_t_tipo_de_solicitud => $empty_tipo_de_solicitud,
						d_azp_fdp_benefits_t_estado_prestacion_fomag_1 => $empty_estado_prestacion_fomag_1,
						d_azp_fdp_benefits_t_estado_tramite_fomag_1 => $empty_estado_tramite_fomag_1,
						d_azp_fdp_benefits_t_fecha_de_tramite_fomag_1 => $empty_fecha_de_tramite_fomag_1,
						d_azp_fdp_benefits_t_observaciones_sustanciador => $empty_observaciones_sustanciador,
						d_azp_fdp_benefits_t_fecha_de_estudio_fomag_2 => $empty_fecha_de_estudio_fomag_2,
						d_azp_fdp_benefits_t_estado_fomag_2 => $empty_estado_fomag_2,
						d_azp_fdp_benefits_t_bandeja_on_base => $empty_bandeja_on_base,
						d_azp_fdp_benefits_t_estado_on_base => $empty_estado_on_base,
						d_azp_fdp_benefits_t_fecha_de_pago_fomag_1 => $empty_fecha_de_pago_fomag_1,
						d_azp_fdp_benefits_t_informacion_al_consumidor_financiero => $empty_informacion_al_consumidor_financiero,
						d_azp_fdp_benefits_t_fecha_de_pago => $empty_fecha_de_pago,
						d_azp_fdp_benefits_t_modalidad => $empty_modalidad,
						d_azp_fdp_benefits_t_banco => $empty_banco,
						d_azp_fdp_benefits_t_fecha_maxima_de_pago => $empty_fecha_maxima_de_pago,
						d_azp_fdp_benefits_t_estado_global => $empty_estado_global,
					);
					# Insertar valores en la tabla segun estructura de la tabla
					$this->db->insert(t_azp_fdp_benefits, $var_array);
					# Captura de los datos a traves de post para ser revisados y asignados a una neuva variable
					$empty_base = $this->db->scape($value[24]);
					$empty_remitente = $this->db->scape($value[25]);
					$empty_radicado_de_entrada = $this->db->scape($value[26]);
					$empty_fecha_radicado_de_entrada = $this->db->scape($value[27]);
					$empty_nombre_docente = $this->db->scape($value[28]);
					$empty_ced_docente = $this->db->scape($value[29]);
					$empty_res = $this->db->scape($value[30]);
					$empty_fecha_resolucion = $this->db->scape($value[31]);
					$empty_tipo_cesantia = $this->db->scape($value[32]);
					$empty_nombre_de_apoderado = $this->db->scape($value[33]);
					$empty_firma = $this->db->scape($value[34]);
					$empty_resultado_estudio = $this->db->scape($value[35]);
					$empty_analisis_sustanciador_negadas = $this->db->scape($value[36]);
					$empty_medio_de_liquidacion = $this->db->scape($value[37]);
					$empty_ocasion_del_pago = $this->db->scape($value[38]);
					$empty_fecha_de_actualizacion_dpe = $this->db->scape($value[39]);
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azp_fdp_sxm_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_fdp_sxm_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_fdp_sxm_m_date_created => DATE_HOUR,
						d_azp_fdp_sxm_m_date_modified => DATE_HOUR,
						d_azp_fdp_sxm_m_deleted => '1',
						d_azp_fdp_sxm_m_description => '',
						d_azp_fdp_sxm_m_level => '1',
						d_azp_fdp_sxm_m_status => '1',
						d_azp_fdp_sxm_m_temp => '1',
						d_azp_fdp_sxm_t_base => $empty_base,
						d_azp_fdp_sxm_t_remitente => $empty_remitente,
						d_azp_fdp_sxm_t_radicado_de_entrada => $empty_radicado_de_entrada,
						d_azp_fdp_sxm_t_fecha_radicado_de_entrada => $empty_fecha_radicado_de_entrada,
						d_azp_fdp_sxm_t_nombre_docente => $empty_nombre_docente,
						d_azp_fdp_sxm_t_ced_docente => $empty_ced_docente,
						d_azp_fdp_sxm_t_res => $empty_res,
						d_azp_fdp_sxm_t_fecha_resolucion => $empty_fecha_resolucion,
						d_azp_fdp_sxm_t_tipo_cesantia => $empty_tipo_cesantia,
						d_azp_fdp_sxm_t_nombre_de_apoderado => $empty_nombre_de_apoderado,
						d_azp_fdp_sxm_t_firma => $empty_firma,
						d_azp_fdp_sxm_t_resultado_estudio => $empty_resultado_estudio,
						d_azp_fdp_sxm_t_analisis_sustanciador_negadas => $empty_analisis_sustanciador_negadas,
						d_azp_fdp_sxm_t_medio_de_liquidacion => $empty_medio_de_liquidacion,
						d_azp_fdp_sxm_t_ocasion_del_pago => $empty_ocasion_del_pago,
						d_azp_fdp_sxm_t_fecha_de_actualizacion_dpe => $empty_fecha_de_actualizacion_dpe,
					);
					# Insertar valores en la tabla segun estructura de la tabla
					$this->db->insert(t_azp_fdp_sxm, $var_array);
				}
				# --------------------------------------------------------------------------------------------------
				# Eliminar registros de la tabla de importacion
				$this->db->query("DELETE FROM " . t_azp_fdp_benefits . " WHERE " . d_azp_fdp_benefits_id_azp_fdp_benefits . " = '1'");
				# Eliminar registros de la tabla de importacion
				$this->db->query("DELETE FROM " . t_azp_fdp_sxm . " WHERE " . d_azp_fdp_sxm_id_azp_fdp_sxm . " = '1'");
			}
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>