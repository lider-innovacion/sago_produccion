<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrollador Programador');
	//------------------------------------------------
	final class m_azp_ibn_cameraModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_by_create() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_act_economic'])) { $var_sql_act_economic = ""; } else {
				if ($_GET['field_act_economic'] == '') { $var_sql_act_economic = ""; } else {
					$var_sql_act_economic = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_act_economic . " IN (" . trim($_GET['field_act_economic'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_establishment'])) { $var_sql_establishment = ""; } else {
				if ($_GET['field_establishment'] == '') { $var_sql_establishment = ""; } else {
					$var_sql_establishment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_establishment . " IN (" . trim($_GET['field_establishment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_representative'])) { $var_sql_legal_representative = ""; } else {
				if ($_GET['field_legal_representative'] == '') { $var_sql_legal_representative = ""; } else {
					$var_sql_legal_representative = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_representative . " IN (" . trim($_GET['field_legal_representative'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_rp_certificate'])) { $var_sql_legal_rp_certificate = ""; } else {
				if ($_GET['field_legal_rp_certificate'] == '') { $var_sql_legal_rp_certificate = ""; } else {
					$var_sql_legal_rp_certificate = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_rp_certificate . " IN (" . trim($_GET['field_legal_rp_certificate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_renewal_date'])) { $var_sql_renewal_date = ""; } else {
				if ($_GET['field_renewal_date'] == '') { $var_sql_renewal_date = ""; } else {
					$var_sql_renewal_date = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_renewal_date . " IN (" . trim($_GET['field_renewal_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_rup'])) { $var_sql_rup = ""; } else {
				if ($_GET['field_rup'] == '') { $var_sql_rup = ""; } else {
					$var_sql_rup = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_rup . " IN (" . trim($_GET['field_rup'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_total_active'])) { $var_sql_total_active = ""; } else {
				if ($_GET['field_total_active'] == '') { $var_sql_total_active = ""; } else {
					$var_sql_total_active = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_total_active . " IN (" . trim($_GET['field_total_active'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_company'])) { $var_sql_type_company = ""; } else {
				if ($_GET['field_type_company'] == '') { $var_sql_type_company = ""; } else {
					$var_sql_type_company = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_company . " IN (" . trim($_GET['field_type_company'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_organization'])) { $var_sql_type_organization = ""; } else {
				if ($_GET['field_type_organization'] == '') { $var_sql_type_organization = ""; } else {
					$var_sql_type_organization = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_organization . " IN (" . trim($_GET['field_type_organization'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_year'])) { $var_sql_year = ""; } else {
				if ($_GET['field_year'] == '') { $var_sql_year = ""; } else {
					$var_sql_year = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_year . " IN (" . trim($_GET['field_year'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_certified'])) { $var_sql_ibn_type_certified = ""; } else {
				if ($_GET['field_ibn_type_certified'] == '') { $var_sql_ibn_type_certified = ""; } else {
					$var_sql_ibn_type_certified = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_certified . " IN (" . trim($_GET['field_ibn_type_certified'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_t_name . " AS 'lbl_azp_ibn_type_certified_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name'
				FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_certified . " tc_azp_ibn_type_certified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . "
						= tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_id_azp_ibn_type_certified . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_act_economic . "
					" . $var_sql_address . "
					" . $var_sql_assessment . "
					" . $var_sql_business_name . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_establishment . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_legal_representative . "
					" . $var_sql_legal_rp_certificate . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_renewal_date . "
					" . $var_sql_rup . "
					" . $var_sql_total_active . "
					" . $var_sql_type_company . "
					" . $var_sql_type_organization . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_year . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_certified . "
					" . $var_sql_ibn_type_concept . "
				ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_camera." . d_azs_ibn_camera_id_azs_ibn_camera . " AS 'lbl_azs_ibn_camera_id_azs_ibn_camera',
					tc_azs_ibn_camera." . d_azs_ibn_camera_m_date_modified . " AS 'lbl_azs_ibn_camera_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_camera." . d_azs_ibn_camera_m_date_created . " AS 'lbl_azs_ibn_camera_m_date_created',
					tc_azs_ibn_camera." . d_azs_ibn_camera_m_date_modified . " AS 'lbl_azs_ibn_camera_m_date_modified',
					tc_azs_ibn_camera." . d_azs_ibn_camera_m_description . " AS 'lbl_azs_ibn_camera_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_act_economic . " AS 'lbl_azs_ibn_camera_t_act_economic',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_address . " AS 'lbl_azs_ibn_camera_t_address',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_assessment . " AS 'lbl_azs_ibn_camera_t_assessment',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_business_name . " AS 'lbl_azs_ibn_camera_t_business_name',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_causal_feasibility . " AS 'lbl_azs_ibn_camera_t_causal_feasibility',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_city . " AS 'lbl_azs_ibn_camera_t_city',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_consecutive . " AS 'lbl_azs_ibn_camera_t_consecutive',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_department . " AS 'lbl_azs_ibn_camera_t_department',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_establishment . " AS 'lbl_azs_ibn_camera_t_establishment',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_full_name . " AS 'lbl_azs_ibn_camera_t_full_name',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_identification . " AS 'lbl_azs_ibn_camera_t_identification',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_legal_representative . " AS 'lbl_azs_ibn_camera_t_legal_representative',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azs_ibn_camera_t_legal_rp_certificate',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_municipality . " AS 'lbl_azs_ibn_camera_t_municipality',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_nit . " AS 'lbl_azs_ibn_camera_t_nit',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_nro_registration . " AS 'lbl_azs_ibn_camera_t_nro_registration',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_observation . " AS 'lbl_azs_ibn_camera_t_observation',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_phone . " AS 'lbl_azs_ibn_camera_t_phone',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_renewal_date . " AS 'lbl_azs_ibn_camera_t_renewal_date',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_rup . " AS 'lbl_azs_ibn_camera_t_rup',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_total_active . " AS 'lbl_azs_ibn_camera_t_total_active',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_type_company . " AS 'lbl_azs_ibn_camera_t_type_company',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_type_organization . " AS 'lbl_azs_ibn_camera_t_type_organization',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_viable . " AS 'lbl_azs_ibn_camera_t_viable',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_well_viable . " AS 'lbl_azs_ibn_camera_t_well_viable',
					tc_azs_ibn_camera." . d_azs_ibn_camera_t_year . " AS 'lbl_azs_ibn_camera_t_year',
					tc_azs_ibn_camera." . d_azs_ibn_camera_u_ibn_state . " AS 'lbl_azs_ibn_camera_u_ibn_state',
					tc_azs_ibn_camera." . d_azs_ibn_camera_u_ibn_type_certified . " AS 'lbl_azs_ibn_camera_u_ibn_type_certified',
					tc_azs_ibn_camera." . d_azs_ibn_camera_u_ibn_type_concept . " AS 'lbl_azs_ibn_camera_u_ibn_type_concept'
				FROM " . t_azs_ibn_camera . " tc_azs_ibn_camera
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_camera." . d_azs_ibn_camera_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_camera." . d_azs_ibn_camera_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_camera." . d_azs_ibn_camera_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_camera." . d_azs_ibn_camera_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azs_ibn_camera." . d_azs_ibn_camera_v_id_azp_ibn_camera . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_camera." . d_azs_ibn_camera_m_date_modified . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_camera . "
				WHERE " . d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $this->id . "'
					AND " . d_azp_ibn_camera_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_camera);
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
					tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_t_name . " AS 'lbl_azp_ibn_type_certified_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name'
				FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_certified . " tc_azp_ibn_type_certified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . "
						= tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_id_azp_ibn_type_certified . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $this->id . "'
					AND tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			





			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_act_economic'])) { $var_sql_act_economic = ""; } else {
				if ($_GET['field_act_economic'] == '') { $var_sql_act_economic = ""; } else {
					$var_sql_act_economic = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_act_economic . " IN (" . trim($_GET['field_act_economic'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_establishment'])) { $var_sql_establishment = ""; } else {
				if ($_GET['field_establishment'] == '') { $var_sql_establishment = ""; } else {
					$var_sql_establishment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_establishment . " IN (" . trim($_GET['field_establishment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_representative'])) { $var_sql_legal_representative = ""; } else {
				if ($_GET['field_legal_representative'] == '') { $var_sql_legal_representative = ""; } else {
					$var_sql_legal_representative = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_representative . " IN (" . trim($_GET['field_legal_representative'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_rp_certificate'])) { $var_sql_legal_rp_certificate = ""; } else {
				if ($_GET['field_legal_rp_certificate'] == '') { $var_sql_legal_rp_certificate = ""; } else {
					$var_sql_legal_rp_certificate = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_rp_certificate . " IN (" . trim($_GET['field_legal_rp_certificate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_renewal_date'])) { $var_sql_renewal_date = ""; } else {
				if ($_GET['field_renewal_date'] == '') { $var_sql_renewal_date = ""; } else {
					$var_sql_renewal_date = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_renewal_date . " IN (" . trim($_GET['field_renewal_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_rup'])) { $var_sql_rup = ""; } else {
				if ($_GET['field_rup'] == '') { $var_sql_rup = ""; } else {
					$var_sql_rup = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_rup . " IN (" . trim($_GET['field_rup'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_total_active'])) { $var_sql_total_active = ""; } else {
				if ($_GET['field_total_active'] == '') { $var_sql_total_active = ""; } else {
					$var_sql_total_active = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_total_active . " IN (" . trim($_GET['field_total_active'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_company'])) { $var_sql_type_company = ""; } else {
				if ($_GET['field_type_company'] == '') { $var_sql_type_company = ""; } else {
					$var_sql_type_company = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_company . " IN (" . trim($_GET['field_type_company'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_organization'])) { $var_sql_type_organization = ""; } else {
				if ($_GET['field_type_organization'] == '') { $var_sql_type_organization = ""; } else {
					$var_sql_type_organization = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_organization . " IN (" . trim($_GET['field_type_organization'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_year'])) { $var_sql_year = ""; } else {
				if ($_GET['field_year'] == '') { $var_sql_year = ""; } else {
					$var_sql_year = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_year . " IN (" . trim($_GET['field_year'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_certified'])) { $var_sql_ibn_type_certified = ""; } else {
				if ($_GET['field_ibn_type_certified'] == '') { $var_sql_ibn_type_certified = ""; } else {
					$var_sql_ibn_type_certified = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_certified . " IN (" . trim($_GET['field_ibn_type_certified'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_t_name . " AS 'lbl_azp_ibn_type_certified_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name'
				FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_certified . " tc_azp_ibn_type_certified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . "
						= tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_id_azp_ibn_type_certified . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " = '3'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_act_economic . "
					" . $var_sql_address . "
					" . $var_sql_assessment . "
					" . $var_sql_business_name . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_establishment . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_legal_representative . "
					" . $var_sql_legal_rp_certificate . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_renewal_date . "
					" . $var_sql_rup . "
					" . $var_sql_total_active . "
					" . $var_sql_type_company . "
					" . $var_sql_type_organization . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_year . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_certified . "
					" . $var_sql_ibn_type_concept . "
				ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_act_economic'])) { $var_sql_act_economic = ""; } else {
				if ($_GET['field_act_economic'] == '') { $var_sql_act_economic = ""; } else {
					$var_sql_act_economic = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_act_economic . " IN (" . trim($_GET['field_act_economic'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_establishment'])) { $var_sql_establishment = ""; } else {
				if ($_GET['field_establishment'] == '') { $var_sql_establishment = ""; } else {
					$var_sql_establishment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_establishment . " IN (" . trim($_GET['field_establishment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_representative'])) { $var_sql_legal_representative = ""; } else {
				if ($_GET['field_legal_representative'] == '') { $var_sql_legal_representative = ""; } else {
					$var_sql_legal_representative = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_representative . " IN (" . trim($_GET['field_legal_representative'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_rp_certificate'])) { $var_sql_legal_rp_certificate = ""; } else {
				if ($_GET['field_legal_rp_certificate'] == '') { $var_sql_legal_rp_certificate = ""; } else {
					$var_sql_legal_rp_certificate = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_rp_certificate . " IN (" . trim($_GET['field_legal_rp_certificate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_renewal_date'])) { $var_sql_renewal_date = ""; } else {
				if ($_GET['field_renewal_date'] == '') { $var_sql_renewal_date = ""; } else {
					$var_sql_renewal_date = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_renewal_date . " IN (" . trim($_GET['field_renewal_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_rup'])) { $var_sql_rup = ""; } else {
				if ($_GET['field_rup'] == '') { $var_sql_rup = ""; } else {
					$var_sql_rup = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_rup . " IN (" . trim($_GET['field_rup'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_total_active'])) { $var_sql_total_active = ""; } else {
				if ($_GET['field_total_active'] == '') { $var_sql_total_active = ""; } else {
					$var_sql_total_active = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_total_active . " IN (" . trim($_GET['field_total_active'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_company'])) { $var_sql_type_company = ""; } else {
				if ($_GET['field_type_company'] == '') { $var_sql_type_company = ""; } else {
					$var_sql_type_company = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_company . " IN (" . trim($_GET['field_type_company'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_organization'])) { $var_sql_type_organization = ""; } else {
				if ($_GET['field_type_organization'] == '') { $var_sql_type_organization = ""; } else {
					$var_sql_type_organization = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_organization . " IN (" . trim($_GET['field_type_organization'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_year'])) { $var_sql_year = ""; } else {
				if ($_GET['field_year'] == '') { $var_sql_year = ""; } else {
					$var_sql_year = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_year . " IN (" . trim($_GET['field_year'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_certified'])) { $var_sql_ibn_type_certified = ""; } else {
				if ($_GET['field_ibn_type_certified'] == '') { $var_sql_ibn_type_certified = ""; } else {
					$var_sql_ibn_type_certified = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_certified . " IN (" . trim($_GET['field_ibn_type_certified'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}





			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_t_name . " AS 'lbl_azp_ibn_type_certified_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name'
				FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_certified . " tc_azp_ibn_type_certified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . "
						= tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_id_azp_ibn_type_certified . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_act_economic . "
					" . $var_sql_address . "
					" . $var_sql_assessment . "
					" . $var_sql_business_name . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_establishment . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_legal_representative . "
					" . $var_sql_legal_rp_certificate . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_renewal_date . "
					" . $var_sql_rup . "
					" . $var_sql_total_active . "
					" . $var_sql_type_company . "
					" . $var_sql_type_organization . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_year . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_certified . "
					" . $var_sql_ibn_type_concept . "
				ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_remove() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			





			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_act_economic'])) { $var_sql_act_economic = ""; } else {
				if ($_GET['field_act_economic'] == '') { $var_sql_act_economic = ""; } else {
					$var_sql_act_economic = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_act_economic . " IN (" . trim($_GET['field_act_economic'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_business_name'])) { $var_sql_business_name = ""; } else {
				if ($_GET['field_business_name'] == '') { $var_sql_business_name = ""; } else {
					$var_sql_business_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_business_name . " IN (" . trim($_GET['field_business_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_city'])) { $var_sql_city = ""; } else {
				if ($_GET['field_city'] == '') { $var_sql_city = ""; } else {
					$var_sql_city = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_city . " IN (" . trim($_GET['field_city'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_establishment'])) { $var_sql_establishment = ""; } else {
				if ($_GET['field_establishment'] == '') { $var_sql_establishment = ""; } else {
					$var_sql_establishment = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_establishment . " IN (" . trim($_GET['field_establishment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_representative'])) { $var_sql_legal_representative = ""; } else {
				if ($_GET['field_legal_representative'] == '') { $var_sql_legal_representative = ""; } else {
					$var_sql_legal_representative = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_representative . " IN (" . trim($_GET['field_legal_representative'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_legal_rp_certificate'])) { $var_sql_legal_rp_certificate = ""; } else {
				if ($_GET['field_legal_rp_certificate'] == '') { $var_sql_legal_rp_certificate = ""; } else {
					$var_sql_legal_rp_certificate = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_legal_rp_certificate . " IN (" . trim($_GET['field_legal_rp_certificate'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nit'])) { $var_sql_nit = ""; } else {
				if ($_GET['field_nit'] == '') { $var_sql_nit = ""; } else {
					$var_sql_nit = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nit . " IN (" . trim($_GET['field_nit'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_phone'])) { $var_sql_phone = ""; } else {
				if ($_GET['field_phone'] == '') { $var_sql_phone = ""; } else {
					$var_sql_phone = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_phone . " IN (" . trim($_GET['field_phone'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_renewal_date'])) { $var_sql_renewal_date = ""; } else {
				if ($_GET['field_renewal_date'] == '') { $var_sql_renewal_date = ""; } else {
					$var_sql_renewal_date = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_renewal_date . " IN (" . trim($_GET['field_renewal_date'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_rup'])) { $var_sql_rup = ""; } else {
				if ($_GET['field_rup'] == '') { $var_sql_rup = ""; } else {
					$var_sql_rup = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_rup . " IN (" . trim($_GET['field_rup'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_total_active'])) { $var_sql_total_active = ""; } else {
				if ($_GET['field_total_active'] == '') { $var_sql_total_active = ""; } else {
					$var_sql_total_active = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_total_active . " IN (" . trim($_GET['field_total_active'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_company'])) { $var_sql_type_company = ""; } else {
				if ($_GET['field_type_company'] == '') { $var_sql_type_company = ""; } else {
					$var_sql_type_company = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_company . " IN (" . trim($_GET['field_type_company'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_type_organization'])) { $var_sql_type_organization = ""; } else {
				if ($_GET['field_type_organization'] == '') { $var_sql_type_organization = ""; } else {
					$var_sql_type_organization = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_type_organization . " IN (" . trim($_GET['field_type_organization'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_year'])) { $var_sql_year = ""; } else {
				if ($_GET['field_year'] == '') { $var_sql_year = ""; } else {
					$var_sql_year = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_t_year . " IN (" . trim($_GET['field_year'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_certified'])) { $var_sql_ibn_type_certified = ""; } else {
				if ($_GET['field_ibn_type_certified'] == '') { $var_sql_ibn_type_certified = ""; } else {
					$var_sql_ibn_type_certified = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_certified . " IN (" . trim($_GET['field_ibn_type_certified'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_camera." .
						d_azp_ibn_camera_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_t_name . " AS 'lbl_azp_ibn_type_certified_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name'
				FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_certified . " tc_azp_ibn_type_certified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . "
						= tc_azp_ibn_type_certified." . d_azp_ibn_type_certified_id_azp_ibn_type_certified . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " = '2'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_act_economic . "
					" . $var_sql_address . "
					" . $var_sql_assessment . "
					" . $var_sql_business_name . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_city . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_establishment . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_legal_representative . "
					" . $var_sql_legal_rp_certificate . "
					" . $var_sql_limitation . "
					" . $var_sql_municipality . "
					" . $var_sql_nit . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_phone . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_renewal_date . "
					" . $var_sql_rup . "
					" . $var_sql_total_active . "
					" . $var_sql_type_company . "
					" . $var_sql_type_organization . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_year . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_certified . "
					" . $var_sql_ibn_type_concept . "
				ORDER BY tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " AS 'lbl_azp_ibn_camera_id_azp_ibn_camera',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . " AS 'lbl_azp_ibn_camera_m_by_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . " AS 'lbl_azp_ibn_camera_m_by_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_created . " AS 'lbl_azp_ibn_camera_m_date_created',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_date_modified . " AS 'lbl_azp_ibn_camera_m_date_modified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_description . " AS 'lbl_azp_ibn_camera_m_description',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . " AS 'lbl_azp_ibn_camera_m_level',
					tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . " AS 'lbl_azp_ibn_camera_m_status',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_act_economic . " AS 'lbl_azp_ibn_camera_t_act_economic',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_address . " AS 'lbl_azp_ibn_camera_t_address',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_assessment . " AS 'lbl_azp_ibn_camera_t_assessment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_business_name . " AS 'lbl_azp_ibn_camera_t_business_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_causal_feasibility . " AS 'lbl_azp_ibn_camera_t_causal_feasibility',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_city . " AS 'lbl_azp_ibn_camera_t_city',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_comment_legal . " AS 'lbl_azp_ibn_camera_t_comment_legal',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_concept . " AS 'lbl_azp_ibn_camera_t_concept',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_consecutive . " AS 'lbl_azp_ibn_camera_t_consecutive',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_department . " AS 'lbl_azp_ibn_camera_t_department',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_establishment . " AS 'lbl_azp_ibn_camera_t_establishment',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_full_name . " AS 'lbl_azp_ibn_camera_t_full_name',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_representative . " AS 'lbl_azp_ibn_camera_t_legal_representative',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_legal_rp_certificate . " AS 'lbl_azp_ibn_camera_t_legal_rp_certificate',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_limitation . " AS 'lbl_azp_ibn_camera_t_limitation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_municipality . " AS 'lbl_azp_ibn_camera_t_municipality',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nit . " AS 'lbl_azp_ibn_camera_t_nit',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_observation . " AS 'lbl_azp_ibn_camera_t_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_phone . " AS 'lbl_azp_ibn_camera_t_phone',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_renewal_date . " AS 'lbl_azp_ibn_camera_t_renewal_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_rup . " AS 'lbl_azp_ibn_camera_t_rup',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_total_active . " AS 'lbl_azp_ibn_camera_t_total_active',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_company . " AS 'lbl_azp_ibn_camera_t_type_company',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_type_organization . " AS 'lbl_azp_ibn_camera_t_type_organization',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_viable . " AS 'lbl_azp_ibn_camera_t_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_well_viable . " AS 'lbl_azp_ibn_camera_t_well_viable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_year . " AS 'lbl_azp_ibn_camera_t_year',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_returnable . " AS 'lbl_azp_ibn_camera_t_st_returnable',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_receipt . " AS 'lbl_azp_ibn_camera_t_st_receipt',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_date . " AS 'lbl_azp_ibn_camera_t_st_date',
					tc_azp_ibn_camera." . d_azp_ibn_camera_t_st_value . " AS 'lbl_azp_ibn_camera_t_st_value',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_control_panel',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_observation . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_observation',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_state',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_certified . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_certified',
					tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_camera_v_id_azp_ibn_type_concept'
				FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_camera." . d_azp_ibn_camera_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $this->id . "'
					AND tc_azp_ibn_camera." . d_azp_ibn_camera_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_camera_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_level . " = '2'");
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
		final public function sql_azp_ibn_camera_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_delete($data);
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
				$var_array = array(d_azp_ibn_camera_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_finish(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_finish'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_finish']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) != strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_act_economic . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna actividad economica.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_address . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna direccion.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_assessment . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna gravamen.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_business_name . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna razon social.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_causal_feasibility . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna causal viabilidad.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_city . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna ciudad.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_consecutive . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna consecutivo.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_department . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna departamento.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_establishment . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna establecimiento.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_full_name . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna nombre.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_identification . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna cedula.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_legal_representative . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna representante legal.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_legal_rp_certificate . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna cedula rp legal.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_municipality . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna municipio.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_nit . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna nit.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_nro_registration . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna matricula.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_phone . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna telefono.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_renewal_date . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna fecha renovacion.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_rup . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna rup.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_total_active . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna activo total.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_type_company . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo sociedad.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_type_organization . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo organizacion.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_viable . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna viable.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_t_year . " = '' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna año.');
					}
				}*/



				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_v_id_azp_ibn_state . " = '1' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna estado.');
					}
				}*/



				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_v_id_azp_ibn_type_certified . " = '1' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo certificado.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_camera_v_id_azp_ibn_type_concept . " = '1' AND " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '6'"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo concepto.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND (" . d_azp_ibn_camera_t_act_economic . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_address . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_assessment . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_business_name . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_causal_feasibility . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_city . " = ''" .
						//"OR" . " " . d_azp_ibn_camera_t_comment_legal . " = ''" .
						//"OR" . " " . d_azp_ibn_camera_t_concept . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_consecutive . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_department . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_establishment . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_full_name . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_identification . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_legal_representative . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_legal_rp_certificate . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_municipality . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_nit . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_nro_registration . " = ''" .
						//"OR" . " " . d_azp_ibn_camera_t_observation . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_phone . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_renewal_date . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_rup . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_total_active . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_type_company . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_type_organization . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_viable . " = ''" .
						//"OR" . " " . d_azp_ibn_camera_t_well_viable . " = ''" .
						"OR" . " " . d_azp_ibn_camera_t_year . " = ''" .
						//"OR" . " " . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = ''" .
						"OR" . " " . d_azp_ibn_camera_v_id_azp_ibn_state . " = '1'" .
						"OR" . " " . d_azp_ibn_camera_v_id_azp_ibn_type_certified . " = '1'" .
						"OR" . " " . d_azp_ibn_camera_v_id_azp_ibn_type_concept . " = '1'" . ")"
				);
				#-------------------------------------------------------------------------#
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				/*$sql_id = $this->db->select('*', t_azp_ibn_control_panel,
					d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_control_panel_t_mod_camera . " = 'SI'"
				);
				# Verificar si el resultado de la sql es verdadero o falso
				if (false != $sql_id) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_id[0][0]) == '') { $sql_id[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_id[0][0]) == strtolower($empty_id)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando ya se encuentra finalizada.');
					}
				}*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_camera_finish(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_finish($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_finish']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_control_panel_t_mod_camera => 'SI',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_control_panel, $var_array, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Base finalizada correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_import(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_im_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				$empty_control = $this->db->scape($data['field_im_control']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_im_file']['name'];
				$empty_type = $_FILES['field_im_file']['type'];
				$empty_tmp_name = $_FILES['field_im_file']['tmp_name'];
				$empty_error = $_FILES['field_im_file']['error'];
				$empty_size = $_FILES['field_im_file']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 1000; $empty_bytes = 1024;
				$empty_extension = array('csv',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
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
				#---------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (!in_array($empty_path_info, $empty_extension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo solo acepta formatos ' . implode(',', $empty_extension) . '.');
				}
				#---------------------------------------------#
				if ($empty_size > ($empty_tamanio * $empty_bytes)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 1 MB.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_camera_import(array $data) : array {
			//VALIDACION DE INFORMACION RECIBIDA EN LA RESPUESTA SE DEVUELVE UN ARRAY CON EL ERROR O UN  TRUE PARA SEGUIR CON LA EJECUCION
			$var_error = $this->error_sql_azp_ibn_camera_import($data);
			if (!is_bool($var_error)) {
				return $var_error; 
			}
			# CONTROL DE SESION
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesi�n ha caducado, vuelve a iniciar sesi�n dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				Helper::load('files');
				
				$empty_id = $this->db->scape($data['field_im_id']);

				// CAPTURA DEL ID DE LA SOLICITUD QUE ESTA ABIERTA
				$empty_control = $this->db->scape($data['field_im_control']);

				// #-------------------------------------------------------------------------#
				//CAPTURA DE DIFERENTES DATOS DEL ARCHIVO 
				$empty_name = $_FILES['field_im_file']['name'];
				$empty_error = $_FILES['field_im_file']['error'];
				$empty_size = $_FILES['field_im_file']['size'];
				$empty_tmp_name = $_FILES['field_im_file']['tmp_name']; //CAPTURA DE ARCHIVO TEMPORAL
				$empty_type = $_FILES['field_im_file']['type'];

				// #-------------------------------------------------------------------------#
				//CAPTURA DE LA RUTA DONDE ALMACENARA EL ARCHIVO , EL NOMBRE DEL FOLDER Y EL A�ADIDO NUMERICO Y DE HORA PARA QUE SEA UNICO
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_ibn_camera_import/';
				$empty_document = DATE_NUMBER . '_' . HOUR_NUMBER . '.csv';
				// #-------------------------------------------------------------------------#
				//CONTROL DE EXISTENCIA DE LA CARPETA  , SI NO EXISTE ENTONCES LA CREA 
				if (!is_dir($empty_route . $empty_folder)) {
					# Creacion de carpetas en el desarrollo
					Files::create_dir($empty_route . $empty_folder, 0777);
				}
				// #-------------------------------------------------------------------------#
				# Subida de archivos en el desarrollo
				Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_document)), $empty_tmp_name, $empty_route . $empty_folder, true);
				// #-------------------------------------------------------------------------#
				# Dar permisos a la ruta y archivo
				chmod($empty_route . $empty_folder . $empty_document, 0777);
				// #-------------------------------------------------------------------------#
				$var_search = array(
					'	', "'", '"', ';', ',', '', '`', '-', '~', '�', '	', '{', '}', '[', ']', '�',
					'�', '�', '�', '�', '�', '�', '�', '\n', '\r', '\t');
				$var_replace = array(
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
					'c', 'C', '', '', '', '', '', '', '', '');
				// #-------------------------------------------------------------------------#
				// # Obtener datos del archivo recibido y saltar lineas
				$var_file = file_get_contents($empty_route . $empty_folder . $empty_document);
				$var_file = explode("\n", $var_file);
				$var_file = array_filter($var_file);
				// CONTAR DESPUES DE LOS ENCABEZADOS 
				$var_file = array_slice($var_file, 1);

				$count_files_document = count($var_file);

				# Recorrer los datos del archivo y separarlos por coma o punto y coma
				foreach ($var_file as $key => $value) { 
					// $var_list[] = explode(",", $value); 
					$var_list[] =  preg_split("/;|,/", $value);
				}
				// #-------------------------------------------------------------------------#
				# Recorrer los datos divididos por filas y almacenarlos en la base
				//DECLARACION DE ARRAY VACIO PARA ALMACENAr lOS DATOS DEL FOREACH SIN TENER QUE POR CADA ITERACION HACER UN FOREACH(Este cambio permite una optimizacion de masivos)
				$array_main = [];

				foreach ($var_list as $key => $value) {
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[0])) { $import_00 = ''; } else {
						if ($value[0] != '' || $value[0] != NULL) {
							$import_00 = $this->db->scape($value[0]);
						} else { $import_00 = ''; }
					}
					
					if (empty($value[1])) { $import_01 = ''; } else {
						if ($value[1] != '' || $value[1] != NULL) {
							$import_01 = $this->db->scape($value[1]);
						} else { $import_01 = ''; }
					}
					
					if (empty($value[2])) { $import_02 = ''; } else {
						if ($value[2] != '' || $value[2] != NULL) {
							$import_02 = $this->db->scape($value[2]);
						} else { $import_02 = ''; }
					}
					
					if (empty($value[3])) { $import_03 = ''; } else {
						if ($value[3] != '' || $value[3] != NULL) {
							$import_03 = $this->db->scape($value[3]);
						} else { $import_03 = ''; }
					}

					if (empty($value[4])) { $import_04 = ''; } else {
						if ($value[4] != '' || $value[4] != NULL) {
							$import_04 = $this->db->scape($value[4]);
						} else { $import_04 = ''; }
					}

					if (empty($value[5])) { $import_05 = ''; } else {
						if ($value[5] != '' || $value[5] != NULL) {
							$import_05 = $this->db->scape($value[5]);
						} else { $import_05 = ''; }
					}

					if (empty($value[6])) { $import_06 = ''; } else {
						if ($value[6] != '' || $value[6] != NULL) {
							$import_06 = $this->db->scape($value[6]);
						} else { $import_06 = ''; }
					}

					if (empty($value[7])) { $import_07 = ''; } else {
						if ($value[7] != '' || $value[7] != NULL) {
							$import_07 = $this->db->scape($value[7]);
						} else { $import_07 = ''; }
					}

					if (empty($value[8])) { $import_08 = ''; } else {
						if ($value[8] != '' || $value[8] != NULL) {
							$import_08 = $this->db->scape($value[8]);
						} else { $import_08 = ''; }
					}

					if (empty($value[9])) { $import_09 = ''; } else {
						if ($value[9] != '' || $value[9] != NULL) {
							$import_09 = $this->db->scape($value[9]);
						} else { $import_09 = ''; }
					}

					if (empty($value[10])) { $import_10 = ''; } else {
						if ($value[10] != '' || $value[10] != NULL) {
							$import_10 = $this->db->scape($value[10]);
						} else { $import_10 = ''; }
					}

					if (empty($value[11])) { $import_11 = ''; } else {
						if ($value[11] != '' || $value[11] != NULL) {
							$import_11 = $this->db->scape($value[11]);
						} else { $import_11 = ''; }
					}

					if (empty($value[12])) { $import_12 = ''; } else {
						if ($value[12] != '' || $value[12] != NULL) {
							$import_12 = $this->db->scape($value[12]);
						} else { $import_12 = ''; }
					}

					if (empty($value[13])) { $import_13 = ''; } else {
						if ($value[13] != '' || $value[13] != NULL) {
							$import_13 = $this->db->scape($value[13]);
						} else { $import_13 = ''; }
					}

					if (empty($value[14])) { $import_14 = ''; } else {
						if ($value[14] != '' || $value[14] != NULL) {
							$import_14 = $this->db->scape($value[14]);
						} else { $import_14 = ''; }
					}

					if (empty($value[15])) { $import_15 = ''; } else {
						if ($value[15] != '' || $value[15] != NULL) {
							$import_15 = $this->db->scape($value[15]);
						} else { $import_15 = ''; }
					}

					if (empty($value[16])) { $import_16 = ''; } else {
						if ($value[16] != '' || $value[16] != NULL) {
							$import_16 = $this->db->scape($value[16]);
						} else { $import_16 = ''; }
					}

					if (empty($value[17])) { $import_17 = ''; } else {
						if ($value[17] != '' || $value[17] != NULL) {
							$import_17 = $this->db->scape($value[17]);
						} else { $import_17 = ''; }
					}

					if (empty($value[18])) { $import_18 = ''; } else {
						if ($value[18] != '' || $value[18] != NULL) {
							$import_18 = $this->db->scape($value[18]);
						} else { $import_18 = ''; }
					}

					if (empty($value[19])) { $import_19 = ''; } else {
						if ($value[19] != '' || $value[19] != NULL) {
							$import_19 = $this->db->scape($value[19]);
						} else { $import_19 = ''; }
					}
					
					if (empty($value[20])) { $import_20 = ''; } else {
						if ($value[20] != '' || $value[20] != NULL) {
							$import_20 = $this->db->scape($value[20]);
						} else { $import_20 = ''; }
					}

					if (empty($value[21])) { $import_21 = ''; } else {
						if ($value[21] != '' || $value[21] != NULL) {
							$import_21 = $this->db->scape($value[21]);
						} else { $import_21 = ''; }
					}

					if (empty($value[22])) { $import_22 = ''; } else {
						if ($value[22] != '' || $value[22] != NULL) {
							$import_22 = $this->db->scape($value[22]);
						} else { $import_22 = ''; }
					}

					if (empty($value[23])) { $import_23 = ''; } else {
						if ($value[23] != '' || $value[23] != NULL) {
							$import_23 = $this->db->scape($value[23]);
						} else { $import_23 = ''; }
					}

					if (empty($value[24])) { $import_24 = ''; } else {
						if ($value[24] != '' || $value[24] != NULL) {
							$import_24 = $this->db->scape($value[24]);
						} else { $import_24 = ''; }
					}

					if (empty($value[25])) { $import_25 = ''; } else {
						if ($value[25] != '' || $value[25] != NULL) {
							$import_25 = $this->db->scape($value[25]);
						} else { $import_25 = ''; }
					}

					if (empty($value[26])) { $import_26 = ''; } else {
						if ($value[26] != '' || $value[26] != NULL) {
							$import_26 = $this->db->scape($value[26]);
						} else { $import_26 = ''; }
					}

					if (empty($value[27])) { $import_27 = ''; } else {
						if ($value[27] != '' || $value[27] != NULL) {
							$import_27 = $this->db->scape($value[27]);
						} else { $import_27 = ''; }
					}

					if (empty($value[28])) { $import_28 = ''; } else {
						if ($value[28] != '' || $value[28] != NULL) {
							$import_28 = $this->db->scape($value[28]);
						} else { $import_28 = ''; }
					}

					if (empty($value[29])) { $import_29 = ''; } else {
						if ($value[29] != '' || $value[29] != NULL) {
							$import_29 = $this->db->scape($value[29]);
						} else { $import_29 = ''; }
					}

					if (empty($value[30])) { $import_30 = ''; } else {
						if ($value[30] != '' || $value[30] != NULL) {
							$import_30 = $this->db->scape($value[30]);
						} else { $import_30 = ''; }
					}

					if (empty($value[31])) { $import_31 = ''; } else {
						if ($value[31] != '' || $value[31] != NULL) {
							$import_31 = $this->db->scape($value[31]);
						} else { $import_31 = ''; }
					}

					// if (empty($value[32])) { $import_32 = ''; } else {
					// 	if ($value[32] != '' || $value[32] != NULL) {
					// 		$import_32 = $this->db->scape($value[32]);
					// 	} else { $import_32 = ''; }
					// }
				// 	#-------------------------------------------------------------------------#
				// 	# Reemplazar ciertos caracteres especificados de los valores recibidos
					$repl_00 = str_replace($var_search, $var_replace, $import_00);
					$repl_01 = str_replace($var_search, $var_replace, $import_01);
					$repl_02 = str_replace($var_search, $var_replace, $import_02);
					$repl_03 = str_replace($var_search, $var_replace, $import_03);
					$repl_04 = str_replace($var_search, $var_replace, $import_04);
					$repl_05 = str_replace($var_search, $var_replace, $import_05);
					$repl_06 = str_replace($var_search, $var_replace, $import_06);
					$repl_07 = str_replace($var_search, $var_replace, $import_07);
					$repl_08 = str_replace($var_search, $var_replace, $import_08);
					$repl_09 = str_replace($var_search, $var_replace, $import_09);
					$repl_10 = str_replace($var_search, $var_replace, $import_10);
					$repl_11 = str_replace($var_search, $var_replace, $import_11);
					$repl_12 = str_replace($var_search, $var_replace, $import_12);
					$repl_13 = str_replace($var_search, $var_replace, $import_13);
					$repl_14 = str_replace($var_search, $var_replace, $import_14);
					$repl_15 = str_replace($var_search, $var_replace, $import_15);
					$repl_16 = str_replace($var_search, $var_replace, $import_16);
					$repl_17 = str_replace($var_search, $var_replace, $import_17);
					$repl_18 = str_replace($var_search, $var_replace, $import_18);
					$repl_19 = str_replace($var_search, $var_replace, $import_19);
					$repl_20 = str_replace($var_search, $var_replace, $import_20);
					$repl_21 = str_replace($var_search, $var_replace, $import_21);
					$repl_22 = str_replace($var_search, $var_replace, $import_22);
					$repl_23 = str_replace($var_search, $var_replace, $import_23);
					$repl_24 = str_replace($var_search, $var_replace, $import_24);
					$repl_25 = str_replace($var_search, $var_replace, $import_25);
					$repl_26 = str_replace($var_search, $var_replace, $import_26);
					$repl_27 = str_replace($var_search, $var_replace, $import_27);
					$repl_28 = str_replace($var_search, $var_replace, $import_28);
					$repl_29 = str_replace($var_search, $var_replace, $import_29);
					$repl_30 = str_replace($var_search, $var_replace, $import_30);
					$repl_31 = str_replace($var_search, $var_replace, $import_31);
				// 	#-------------------------------------------------------------------------#
				// 	# Eliminar dobles vacios en los valores recibidos
					$preg_00 = trim(preg_replace('/\s+/',' ', $repl_00));
					$preg_01 = trim(preg_replace('/\s+/',' ', $repl_01));
					$preg_02 = trim(preg_replace('/\s+/',' ', $repl_02));
					$preg_03 = trim(preg_replace('/\s+/',' ', $repl_03));
					$preg_04 = trim(preg_replace('/\s+/',' ', $repl_04));
					$preg_05 = trim(preg_replace('/\s+/',' ', $repl_05));
					$preg_06 = trim(preg_replace('/\s+/',' ', $repl_06));
					$preg_07 = trim(preg_replace('/\s+/',' ', $repl_07));
					$preg_08 = trim(preg_replace('/\s+/',' ', $repl_08));
					$preg_09 = trim(preg_replace('/\s+/',' ', $repl_09));
					$preg_10 = trim(preg_replace('/\s+/',' ', $repl_10));
					$preg_11 = trim(preg_replace('/\s+/',' ', $repl_11));
					$preg_12 = trim(preg_replace('/\s+/',' ', $repl_12));
					$preg_13 = trim(preg_replace('/\s+/',' ', $repl_13));
					$preg_14 = trim(preg_replace('/\s+/',' ', $repl_14));
					$preg_15 = trim(preg_replace('/\s+/',' ', $repl_15));
					$preg_16 = trim(preg_replace('/\s+/',' ', $repl_16));
					$preg_17 = trim(preg_replace('/\s+/',' ', $repl_17));
					$preg_18 = trim(preg_replace('/\s+/',' ', $repl_18));
					$preg_19 = trim(preg_replace('/\s+/',' ', $repl_19));
					$preg_20 = trim(preg_replace('/\s+/',' ', $repl_20));
					$preg_21 = trim(preg_replace('/\s+/',' ', $repl_21));
					$preg_22 = trim(preg_replace('/\s+/',' ', $repl_22));
					$preg_23 = trim(preg_replace('/\s+/',' ', $repl_23));
					$preg_24 = trim(preg_replace('/\s+/',' ', $repl_24));
					$preg_25 = trim(preg_replace('/\s+/',' ', $repl_25));
					$preg_26 = trim(preg_replace('/\s+/',' ', $repl_26));
					$preg_27 = trim(preg_replace('/\s+/',' ', $repl_27));
					$preg_28 = trim(preg_replace('/\s+/',' ', $repl_28));
					$preg_29 = trim(preg_replace('/\s+/',' ', $repl_29));
					$preg_30 = trim(preg_replace('/\s+/',' ', $repl_30));
					$preg_31 = trim(preg_replace('/\s+/',' ', $repl_31));
				// 	#-------------------------------------------------------------------------#
				// 	# Validacion de valores recibidos para codificacion.
					$empty_00 = html_entity_decode(utf8_encode($preg_00));
					$empty_01 = html_entity_decode(utf8_encode($preg_01));
					$empty_02 = html_entity_decode(utf8_encode($preg_02));
					$empty_03 = html_entity_decode(utf8_encode($preg_03));
					$empty_04 = html_entity_decode(utf8_encode($preg_04));
					$empty_05 = html_entity_decode(utf8_encode($preg_05));
					$empty_06 = html_entity_decode(utf8_encode($preg_06));
					$empty_07 = html_entity_decode(utf8_encode($preg_07));
					$empty_08 = html_entity_decode(utf8_encode($preg_08));
					$empty_09 = html_entity_decode(utf8_encode($preg_09));
					$empty_10 = html_entity_decode(utf8_encode($preg_10));
					$empty_11 = html_entity_decode(utf8_encode($preg_11));
					$empty_12 = html_entity_decode(utf8_encode($preg_12));
					$empty_13 = html_entity_decode(utf8_encode($preg_13));
					$empty_14 = html_entity_decode(utf8_encode($preg_14));
					$empty_15 = html_entity_decode(utf8_encode($preg_15));
					$empty_16 = html_entity_decode(utf8_encode($preg_16));
					$empty_17 = html_entity_decode(utf8_encode($preg_17));
					$empty_18 = html_entity_decode(utf8_encode($preg_18));
					$empty_19 = html_entity_decode(utf8_encode($preg_19));
					$empty_20 = html_entity_decode(utf8_encode($preg_20));
					$empty_21 = html_entity_decode(utf8_encode($preg_21));
					$empty_22 = html_entity_decode(utf8_encode($preg_22));
					$empty_23 = html_entity_decode(utf8_encode($preg_23));
					$empty_24 = html_entity_decode(utf8_encode($preg_24));
					$empty_25 = html_entity_decode(utf8_encode($preg_25));
					$empty_26 = html_entity_decode(utf8_encode($preg_26));
					$empty_27 = html_entity_decode(utf8_encode($preg_27));
					$empty_28 = html_entity_decode(utf8_encode($preg_28));
					$empty_29 = html_entity_decode(utf8_encode($preg_29));
					$empty_30 = html_entity_decode(utf8_encode($preg_30));
					$empty_31 = html_entity_decode(utf8_encode($preg_31));

					/*****************************************************************************************************/

					// ARRAY ASOCIATIVOS CREADOS PARA CAPTURAR LOS VALORES Y RETORNARLOS CON SUS ID RESPECTIVOS SEGUN LA DB 

					
					$array_v_azp_ibn_state = [
						'NINGUNO' => '1',
						'ACTIVO' => '6',
						'CANCELADA' => '7',
						'NO REGISTRA' => '8',
					];

					$array_v_azp_ibn_type_certified = [
						'NINGUNO' => '1',
						'RM' => '2',
						'ESAL' => '3',
						'RUP' => '4',
						'AG' => '5',
						'RNT' => '6',
					];

					$array_v_azp_ibn_type_concept = [
						'NINGUNO' => '1',
						'CREAR' => '6',
						'ESTANDAR' => '7',
						'SIN EXPEDICION' => '8',
					];

					$array_v_azp_ibn_observation = [
						'NINGUNO' => '1',
						'MATRICULA CANCELADA' => '4',
						'ERROR EN EXPEDICION' => '5',
					];

					
					// CAPTURA DEL TEXTO ENVIADO DESDE EL CSV Y TRANFORMARLO EN ID SEGUN LA ESTRUCTURA DE LA BASE DE DATOS 	
					$asociative_v_azp_ibn_observation= $array_v_azp_ibn_observation[$empty_27] ?? $array_v_azp_ibn_observation['NINGUNO'];
					$asociative_v_azp_ibn_state = $array_v_azp_ibn_state[$empty_02] ?? $array_v_azp_ibn_state['NINGUNO'];
					$asociative_v_azp_ibn_type_concept = $array_v_azp_ibn_type_concept[$empty_23] ?? $array_v_azp_ibn_type_concept['NINGUNO'];
					$asociative_v_azp_ibn_type_certified = $array_v_azp_ibn_type_certified[$empty_09] ?? $array_v_azp_ibn_type_certified['NINGUNO'];

				#-------------------------------------------------------------------------#
				#-------------------------------------------------------------------------#
				# J  = ESTA FUNCION FUE CREADA PARA VALIDAR SI EXISTE LA CEDULA EN EL CONJUNTO , SI EXISTE SE LE ASIGNA EL MISMO VALOR CONSECUTIVO , SI NO , SE LE ASIGNA UNO  NUEVO BASADO EN EL VALOR TOTAL CONSECUTIVO 
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_control . "' AND " .
				d_azp_ibn_camera_t_identification . " = '" . $empty_00 . "' " .
				"GROUP BY " . d_azp_ibn_camera_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql){

					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value):
						# Asignar valores a una nueva variable
						$empty_consecutive = $value[d_azp_ibn_camera_t_consecutive];
					endforeach;

				} else {

					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("MAX(" . d_azp_ibn_camera_t_consecutive . ") AS 'lbl_max'", t_azp_ibn_camera,
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							# Asignar valores a una nueva variable
							$empty_consecutive = $value['lbl_max'] + 1;
						endforeach;
						
					} else { $empty_consecutive = 1; }
				}

					#-------------------------------------------------------------------------
				// 	# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						// section general 
						d_azp_ibn_camera_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_ibn_camera_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_camera_m_date_created => DATE_HOUR,
						d_azp_ibn_camera_m_date_modified => DATE_HOUR,
						d_azp_ibn_camera_m_deleted => '1',
						d_azp_ibn_camera_m_description => '',
						d_azp_ibn_camera_m_level => '2',
						d_azp_ibn_camera_m_status => '1',
						d_azp_ibn_camera_m_temp => '1',
						// --------------------------------------------------------------------------------
						// Actividiada economica 
						d_azp_ibn_camera_t_act_economic => strtoupper($empty_19), 
						// Direccion 
						d_azp_ibn_camera_t_address => strtoupper($empty_07),
						//Gravamen
						d_azp_ibn_camera_t_assessment => strtoupper($empty_24),
						//Razon Social 
						d_azp_ibn_camera_t_business_name => strtoupper($empty_18),
						//Causal Viabilidad
						d_azp_ibn_camera_t_causal_feasibility => strtoupper($empty_25),
						//Ciudad
						d_azp_ibn_camera_t_city => strtoupper($empty_04),
						//Comentario Juridico
						d_azp_ibn_camera_t_comment_legal => strtoupper($empty_26),
						//Cons
						d_azp_ibn_camera_t_consecutive => strtoupper($empty_consecutive),
						//Departamento 
						d_azp_ibn_camera_t_department => strtoupper($empty_05),
						//Establecimiento
						d_azp_ibn_camera_t_establishment => strtoupper($empty_16),
						//Nombre
						d_azp_ibn_camera_t_full_name => strtoupper($empty_01),
						//Cedula
						d_azp_ibn_camera_t_identification => strtoupper($empty_00),
						//Representate Legal
						d_azp_ibn_camera_t_legal_representative =>  strtoupper($empty_12),
						//Cedula Rp Legal
						d_azp_ibn_camera_t_legal_rp_certificate =>  strtoupper($empty_13),
						//Municipio
						d_azp_ibn_camera_t_municipality => strtoupper($empty_06),
						//NIT 
						d_azp_ibn_camera_t_nit => strtoupper($empty_17),
						//Matricula 
						d_azp_ibn_camera_t_nro_registration => strtoupper($empty_03),
						//Vacio 
						d_azp_ibn_camera_t_observation => strtoupper(''),
						//Telefono
						d_azp_ibn_camera_t_phone => strtoupper($empty_20),
						// Fecha Renovacion
						d_azp_ibn_camera_t_renewal_date => strtoupper($empty_08),
						// Rup 
						d_azp_ibn_camera_t_rup => strtoupper($empty_14),
						// Activo Total
						d_azp_ibn_camera_t_total_active => strtoupper($empty_21),
						//Tipo Sociedad
						d_azp_ibn_camera_t_type_company => strtoupper($empty_10),
						//Tipo Organizacion
						d_azp_ibn_camera_t_type_organization => strtoupper($empty_11),
						//Viable
						d_azp_ibn_camera_t_viable => strtoupper($empty_22),
						//Muy viable 
						d_azp_ibn_camera_t_well_viable => strtoupper(''),
						//A�o
						d_azp_ibn_camera_t_year => strtoupper($empty_15),
						//Reembolsable
						d_azp_ibn_camera_t_st_returnable => strtoupper($empty_28),
						//Recibido 
						d_azp_ibn_camera_t_st_receipt => strtoupper($empty_29),
						//Fecha 
						d_azp_ibn_camera_t_st_date => strtoupper($empty_30),
						//Valor
						d_azp_ibn_camera_t_st_value => strtoupper($empty_31),
						//Control panel
						d_azp_ibn_camera_v_id_azp_ibn_control_panel => $empty_control,
						//Section Captura de ID basado en la validacion de los Array Asociativos 
						d_azp_ibn_camera_v_id_azp_ibn_observation => $asociative_v_azp_ibn_observation,
						d_azp_ibn_camera_v_id_azp_ibn_state => $asociative_v_azp_ibn_state,
						d_azp_ibn_camera_v_id_azp_ibn_type_certified => $asociative_v_azp_ibn_type_certified,
						d_azp_ibn_camera_v_id_azp_ibn_type_concept => $asociative_v_azp_ibn_type_concept,
					);

					// ASIGNACION DE ITERACIONES A EL ARRAY DER ARRAYS PARA UNA SOLA SUBIDA DE INFORMACION 	
					// $array_main[] = $var_array;
					# Insertar valores en la tabla segun estructura de la tabla
					// $this->db->insert(t_azp_ibn_camera, $var_array);

					// SE ENVUELVE EL UPDATE EN UN TRY CATCH PARA QUE SI HAY ERRORES NO SE CANCELE TODA LA OPERACION UPDATE POR ITERACION 
					try {
						$this->db->update(
							t_azp_ibn_camera,$var_array,
							d_azp_ibn_camera_t_identification . "= '" . $empty_00 . "' AND " .
							d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'"
						);
					} catch (Exception $e) {
						echo 'Error al actualizar: ' . $e->getMessage();
					}

					// UPDATE EXTRAIDOS DEL DOCUMENTO m_azp_ibn_furnitureModel.php aquel que actualmente se encuentra en uso en PRODUCCION
					// $this->db->update(
					// 	t_azp_ibn_furniture_import, $var_array,
					// 	d_azp_ibn_furniture_import_t_identification . " = '" . $key_sql[d_azp_ibn_data_main_t_identification] . "' AND " .
					// 	d_azp_ibn_furniture_import_v_id_azp_ibn_control_panel . " = '" . $key_sql[d_azp_ibn_data_main_v_id_azp_ibn_control_panel] . "'"
					// );

					// $this->db->update(
					// 	t_azp_ibn_furniture, $var_array,
					// 	d_azp_ibn_furniture_t_identification . " = '" . $identification . "' AND " .
					// 	d_azp_ibn_furniture_import_v_id_azp_ibn_control_panel . " = '" . $controlPanel . "'"
					// );
				}
				
					return array(
						'success' => 1,
						'message' => '<b>�xito:</b> Archivo almacenado correctamente.<br><br>' .
									'<b>Procesado:</b> Registros importados en total: ' . $count_files_document,
					);
				#-------------------------------------------------------------------------#
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_azp_ibn_camera_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_act_economic'])) { throw new Exception('<b>Error:</b> El campo de act economica esta prohibido modificar.'); }
				if (!isset($data['field_cr_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				if (!isset($data['field_cr_assessment'])) { throw new Exception('<b>Error:</b> El campo de gravamen esta prohibido modificar.'); }
				if (!isset($data['field_cr_business_name'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
				if (!isset($data['field_cr_causal_feasibility'])) { throw new Exception('<b>Error:</b> El campo de causal viabilidad esta prohibido modificar.'); }
				if (!isset($data['field_cr_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_cr_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_cr_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_cr_establishment'])) { throw new Exception('<b>Error:</b> El campo de establecimiento esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_cr_legal_representative'])) { throw new Exception('<b>Error:</b> El campo de representante legal esta prohibido modificar.'); }
				if (!isset($data['field_cr_legal_rp_certificate'])) { throw new Exception('<b>Error:</b> El campo de cedula rp legal esta prohibido modificar.'); }
				if (!isset($data['field_cr_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_municipality'])) { throw new Exception('<b>Error:</b> El campo de municipio esta prohibido modificar.'); }
				if (!isset($data['field_cr_nit'])) { throw new Exception('<b>Error:</b> El campo de nit esta prohibido modificar.'); }
				if (!isset($data['field_cr_nro_registration'])) { throw new Exception('<b>Error:</b> El campo de matricula esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_phone'])) { throw new Exception('<b>Error:</b> El campo de telefono esta prohibido modificar.'); }
				if (!isset($data['field_cr_renewal_date'])) { throw new Exception('<b>Error:</b> El campo de fecha renovacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_rup'])) { throw new Exception('<b>Error:</b> El campo de rup esta prohibido modificar.'); }
				if (!isset($data['field_cr_total_active'])) { throw new Exception('<b>Error:</b> El campo de activo total esta prohibido modificar.'); }
				if (!isset($data['field_cr_type_company'])) { throw new Exception('<b>Error:</b> El campo de tipo de sociedad esta prohibido modificar.'); }
				if (!isset($data['field_cr_type_organization'])) { throw new Exception('<b>Error:</b> El campo de tipo de organizacion total esta prohibido modificar.'); }
				if (!isset($data['field_cr_viable'])) { throw new Exception('<b>Error:</b> El campo de viable esta prohibido modificar.'); }
				if (!isset($data['field_cr_well_viable'])) { throw new Exception('<b>Error:</b> El campo de bien viable esta prohibido modificar.'); }
				if (!isset($data['field_cr_year'])) { throw new Exception('<b>Error:</b> El campo de año esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_control_panel'])) { throw new Exception('<b>Error:</b> El campo de tablero de control esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_certified'])) { throw new Exception('<b>Error:</b> El campo de tipo de certificado esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_concept'])) { throw new Exception('<b>Error:</b> El campo de tipo de concepto esta prohibido modificar.'); }

				if (!isset($data['field_cr_ibn_observation'])) { throw new Exception('<b>Error:</b> El campo de lista observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_returnable'])) { throw new Exception('<b>Error:</b> El campo de reembolsable esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_receipt'])) { throw new Exception('<b>Error:</b> El campo de recibo esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_date'])) { throw new Exception('<b>Error:</b> El campo de fecha esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_value'])) { throw new Exception('<b>Error:</b> El campo de valor de certificado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_act_economic = $this->db->scape($data['field_cr_act_economic']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_assessment = $this->db->scape($data['field_cr_assessment']);
				$empty_business_name = $this->db->scape($data['field_cr_business_name']);
				$empty_causal_feasibility = $this->db->scape($data['field_cr_causal_feasibility']);
				$empty_city = $this->db->scape($data['field_cr_city']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_establishment = $this->db->scape($data['field_cr_establishment']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_legal_representative = $this->db->scape($data['field_cr_legal_representative']);
				$empty_legal_rp_certificate = $this->db->scape($data['field_cr_legal_rp_certificate']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_municipality = $this->db->scape($data['field_cr_municipality']);
				$empty_nit = $this->db->scape($data['field_cr_nit']);
				$empty_nro_registration = $this->db->scape($data['field_cr_nro_registration']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_phone = $this->db->scape($data['field_cr_phone']);
				$empty_renewal_date = $this->db->scape($data['field_cr_renewal_date']);
				$empty_rup = $this->db->scape($data['field_cr_rup']);
				$empty_total_active = $this->db->scape($data['field_cr_total_active']);
				$empty_type_company = $this->db->scape($data['field_cr_type_company']);
				$empty_type_organization = $this->db->scape($data['field_cr_type_organization']);
				$empty_viable = $this->db->scape($data['field_cr_viable']);
				$empty_well_viable = $this->db->scape($data['field_cr_well_viable']);
				$empty_year = $this->db->scape($data['field_cr_year']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				$empty_ibn_type_certified = $this->db->scape($data['field_cr_ibn_type_certified']);
				$empty_ibn_type_concept = $this->db->scape($data['field_cr_ibn_type_concept']);

				$empty_ibn_observation = $this->db->scape($data['field_cr_ibn_observation']);
				$empty_st_returnable = $this->db->scape($data['field_cr_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_cr_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_cr_st_date']);
				$empty_st_value = $this->db->scape($data['field_cr_st_value']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_nro_registration)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_nro_registration) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_nro_registration, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_nro_registration)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_viable) || strtolower($empty_viable) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_viable)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_control_panel) || strtolower($empty_ibn_control_panel) == strtolower('seleccionar') || $empty_ibn_control_panel == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tablero de control es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_control_panel)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tablero de control solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_state) || strtolower($empty_ibn_state) == strtolower('seleccionar') || $empty_ibn_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_concept) || strtolower($empty_ibn_type_concept) == strtolower('seleccionar') || $empty_ibn_type_concept == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_concept)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_control_panel = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_control_panel) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_control_panel) == '') { $sql_ibn_control_panel[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_control_panel[0][0]) != strtolower($empty_ibn_control_panel)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tablero de control seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_state = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_id_azp_ibn_state . " = '" . $empty_ibn_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_state) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_state) == '') { $sql_ibn_state[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_state[0][0]) != strtolower($empty_ibn_state)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_concept = $this->db->select('*', t_azp_ibn_type_concept, d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $empty_ibn_type_concept . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_concept) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_concept) == '') { $sql_ibn_type_concept[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_concept[0][0]) != strtolower($empty_ibn_type_concept)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de concepto seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_camera_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_act_economic = $this->db->scape($data['field_cr_act_economic']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_assessment = $this->db->scape($data['field_cr_assessment']);
				$empty_business_name = $this->db->scape($data['field_cr_business_name']);
				$empty_causal_feasibility = $this->db->scape($data['field_cr_causal_feasibility']);
				$empty_city = $this->db->scape($data['field_cr_city']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_establishment = $this->db->scape($data['field_cr_establishment']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_legal_representative = $this->db->scape($data['field_cr_legal_representative']);
				$empty_legal_rp_certificate = $this->db->scape($data['field_cr_legal_rp_certificate']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_municipality = $this->db->scape($data['field_cr_municipality']);
				$empty_nit = $this->db->scape($data['field_cr_nit']);
				$empty_nro_registration = $this->db->scape($data['field_cr_nro_registration']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_phone = $this->db->scape($data['field_cr_phone']);
				$empty_renewal_date = $this->db->scape($data['field_cr_renewal_date']);
				$empty_rup = $this->db->scape($data['field_cr_rup']);
				$empty_total_active = $this->db->scape($data['field_cr_total_active']);
				$empty_type_company = $this->db->scape($data['field_cr_type_company']);
				$empty_type_organization = $this->db->scape($data['field_cr_type_organization']);
				$empty_viable = $this->db->scape($data['field_cr_viable']);
				//$empty_well_viable = $this->db->scape($data['field_cr_well_viable']);
				$empty_year = $this->db->scape($data['field_cr_year']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				$empty_ibn_type_certified = $this->db->scape($data['field_cr_ibn_type_certified']);
				$empty_ibn_type_concept = $this->db->scape($data['field_cr_ibn_type_concept']);
				
				$empty_ibn_observation = $this->db->scape($data['field_cr_ibn_observation']);
				$empty_st_returnable = $this->db->scape($data['field_cr_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_cr_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_cr_st_date']);
				$empty_st_value = $this->db->scape($data['field_cr_st_value']);
				#-------------------------------------------------------------------------#
				if ($empty_viable != 'SI' || $empty_viable != 'NO') { $empty_well_viable = ''; }
				if ($empty_viable == 'SI') { $empty_well_viable = 'RM' . ' ' . $empty_nro_registration . ' ' . 'DE' . ' ' . $empty_city; }
				if ($empty_viable == 'NO') { $empty_well_viable = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
					d_azp_ibn_camera_t_identification . " = '" . $empty_identification . "' " .
					"GROUP BY " . d_azp_ibn_camera_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value):
						# Asignar valores a una nueva variable
						$empty_consecutive = $value[d_azp_ibn_camera_t_consecutive];
					endforeach;
				} else {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("MAX(" . d_azp_ibn_camera_t_consecutive . ") AS 'lbl_max'", t_azp_ibn_camera,
						d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							# Asignar valores a una nueva variable
							$empty_consecutive = $value['lbl_max'] + 1;
						endforeach;
					} else { $empty_consecutive = 1; }
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_camera_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_camera_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_camera_m_date_created => DATE_HOUR,
					d_azp_ibn_camera_m_date_modified => DATE_HOUR,
					d_azp_ibn_camera_m_deleted => '1',
					d_azp_ibn_camera_m_description => $empty_description,
					d_azp_ibn_camera_m_level => '2',
					d_azp_ibn_camera_m_status => '1',
					d_azp_ibn_camera_m_temp => '2',
					d_azp_ibn_camera_t_validate => '0',
					d_azp_ibn_camera_t_act_economic => strtoupper($empty_act_economic),
					d_azp_ibn_camera_t_address => strtoupper($empty_address),
					d_azp_ibn_camera_t_assessment => strtoupper($empty_assessment),
					d_azp_ibn_camera_t_business_name => strtoupper($empty_business_name),
					d_azp_ibn_camera_t_causal_feasibility => strtoupper($empty_causal_feasibility),
					d_azp_ibn_camera_t_city => strtoupper($empty_city),
					d_azp_ibn_camera_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_camera_t_concept => strtoupper($empty_concept),
					d_azp_ibn_camera_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_camera_t_department => strtoupper($empty_department),
					d_azp_ibn_camera_t_establishment => strtoupper($empty_establishment),
					d_azp_ibn_camera_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_camera_t_identification => strtoupper($empty_identification),
					d_azp_ibn_camera_t_legal_representative => strtoupper($empty_legal_representative),
					d_azp_ibn_camera_t_legal_rp_certificate => strtoupper($empty_legal_rp_certificate),
					d_azp_ibn_camera_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_camera_t_municipality => strtoupper($empty_municipality),
					d_azp_ibn_camera_t_nit => strtoupper($empty_nit),
					d_azp_ibn_camera_t_nro_registration => strtoupper($empty_nro_registration),
					d_azp_ibn_camera_t_observation => strtoupper($empty_observation),
					d_azp_ibn_camera_t_phone => strtoupper($empty_phone),
					d_azp_ibn_camera_t_renewal_date => strtoupper($empty_renewal_date),
					d_azp_ibn_camera_t_rup => strtoupper($empty_rup),
					d_azp_ibn_camera_t_total_active => strtoupper($empty_total_active),
					d_azp_ibn_camera_t_type_company => strtoupper($empty_type_company),
					d_azp_ibn_camera_t_type_organization => strtoupper($empty_type_organization),
					d_azp_ibn_camera_t_viable => strtoupper($empty_viable),
					d_azp_ibn_camera_t_well_viable => strtoupper($empty_well_viable),
					d_azp_ibn_camera_t_year => strtoupper($empty_year),
					d_azp_ibn_camera_t_st_returnable => strtoupper($empty_st_returnable),
					d_azp_ibn_camera_t_st_receipt => strtoupper($empty_st_receipt),
					d_azp_ibn_camera_t_st_date => strtoupper($empty_st_date),
					d_azp_ibn_camera_t_st_value => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_st_value))),
					d_azp_ibn_camera_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_camera_v_id_azp_ibn_observation => $empty_ibn_observation,
					d_azp_ibn_camera_v_id_azp_ibn_state => $empty_ibn_state,
					d_azp_ibn_camera_v_id_azp_ibn_type_certified => $empty_ibn_type_certified,
					d_azp_ibn_camera_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_camera, $var_array);
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_m_temp . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_id = $value[d_azp_ibn_camera_id_azp_ibn_camera];
					endforeach;
				} else { $empty_id = 0; }
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_m_temp . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_camera_v_id_azp_ibn_control_panel];

						$var_rg_reg = $value[d_azp_ibn_camera_t_nro_registration];
						$var_rg_via = $value[d_azp_ibn_camera_t_viable];
					endforeach;
				} else { $var_rg_cp_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_rg_cp_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cl_id = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_rg_cl_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				//$var_sql = $this->db->select('*', t_azp_ibn_regulation, d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "' AND " . d_azp_ibn_regulation_t_selector . " = 'SI'");
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
						tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . " AS 'lbl_azp_ibn_calification_id_azp_ibn_calification',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
						tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
					FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
							= tc_azp_user_created." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
							= tc_azp_user_modified." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
							= tc_azp_sys_level." . d_azp_sys_level_t_value . "
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
							= tc_azp_sys_state." . d_azp_sys_state_t_value . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cf_id = $value['lbl_azp_ibn_calification_id_azp_ibn_calification'];
						$var_rg_cf_pos = $value['lbl_azp_ibn_calification_t_principal'];
						$var_rg_cf_neg = $value['lbl_azp_ibn_calification_t_secondary'];
						$var_pc_one = $var_rg_cf_neg; $var_pc_two = $var_rg_cf_neg; $var_pc_three = $var_rg_cf_neg;
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_rg_cf_id == 2) { $var_rg_cf_2 = 2; } else if ($var_rg_cf_id == 3) { $var_rg_cf_3 = 3; } else { $var_rg_cf_2 = 0; $var_rg_cf_3 = 0; }
					endforeach;
				}
				#-------------------------------------------------------------------------#
				if ($var_rg_cf_2 == 2) { if ($var_rg_via == 'SI') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
				if ($var_rg_cf_3 == 3) { if ($var_rg_reg != '') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
				#-------------------------------------------------------------------------#
				if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_m_temp . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_m_temp . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_camera_v_id_azp_ibn_control_panel];
					endforeach;
				} else { $var_ibn_control_panel = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_id_client = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_id_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
						tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
						tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
					FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
							= tc_azp_user_created." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
							= tc_azp_user_modified." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
							= tc_azp_sys_level." . d_azp_sys_level_t_value . "
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
							= tc_azp_sys_state." . d_azp_sys_state_t_value . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
							= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '1'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_land_01 = $value['lbl_azp_ibn_concept_t_land_01'];
						$var_land_02 = $value['lbl_azp_ibn_concept_t_land_02'];
						$var_land_03 = $value['lbl_azp_ibn_concept_t_land_03'];
						$var_land_04 = $value['lbl_azp_ibn_concept_t_land_04'];
						$var_land_05 = $value['lbl_azp_ibn_concept_t_land_05'];
						$var_land_06 = $value['lbl_azp_ibn_concept_t_land_06'];
						$var_land_07 = $value['lbl_azp_ibn_concept_t_land_07'];
						$var_land_08 = $value['lbl_azp_ibn_concept_t_land_08'];
						$var_land_09 = $value['lbl_azp_ibn_concept_t_land_09'];
						$var_land_10 = $value['lbl_azp_ibn_concept_t_land_10'];
						$var_land_11 = $value['lbl_azp_ibn_concept_t_land_11'];
						$var_land_12 = $value['lbl_azp_ibn_concept_t_land_12'];
						$var_land_13 = $value['lbl_azp_ibn_concept_t_land_13'];
						$var_land_14 = $value['lbl_azp_ibn_concept_t_land_14'];
						$var_land_15 = $value['lbl_azp_ibn_concept_t_land_15'];
						$var_land_16 = $value['lbl_azp_ibn_concept_t_land_16'];
						$var_land_17 = $value['lbl_azp_ibn_concept_t_land_17'];
						$var_land_18 = $value['lbl_azp_ibn_concept_t_land_18'];
						$var_land_19 = $value['lbl_azp_ibn_concept_t_land_19'];
						$var_land_20 = $value['lbl_azp_ibn_concept_t_land_20'];
						$var_text_01 = $value['lbl_azp_ibn_concept_t_text_01'];
						$var_text_02 = $value['lbl_azp_ibn_concept_t_text_02'];
						$var_text_03 = $value['lbl_azp_ibn_concept_t_text_03'];
						$var_text_04 = $value['lbl_azp_ibn_concept_t_text_04'];
						$var_text_05 = $value['lbl_azp_ibn_concept_t_text_05'];
						$var_text_06 = $value['lbl_azp_ibn_concept_t_text_06'];
						$var_text_07 = $value['lbl_azp_ibn_concept_t_text_07'];
						$var_text_08 = $value['lbl_azp_ibn_concept_t_text_08'];
						$var_text_09 = $value['lbl_azp_ibn_concept_t_text_09'];
						$var_text_10 = $value['lbl_azp_ibn_concept_t_text_10'];
						$var_text_11 = $value['lbl_azp_ibn_concept_t_text_11'];
						$var_text_12 = $value['lbl_azp_ibn_concept_t_text_12'];
						$var_text_13 = $value['lbl_azp_ibn_concept_t_text_13'];
						$var_text_14 = $value['lbl_azp_ibn_concept_t_text_14'];
						$var_text_15 = $value['lbl_azp_ibn_concept_t_text_15'];
						$var_text_16 = $value['lbl_azp_ibn_concept_t_text_16'];
						$var_text_17 = $value['lbl_azp_ibn_concept_t_text_17'];
						$var_text_18 = $value['lbl_azp_ibn_concept_t_text_18'];
						$var_text_19 = $value['lbl_azp_ibn_concept_t_text_19'];
						$var_text_20 = $value['lbl_azp_ibn_concept_t_text_20'];
					endforeach;
				} else {
					$var_land_01 = '0'; $var_land_02 = '0'; $var_land_03 = '0'; $var_land_04 = '0'; $var_land_05 = '0';
					$var_land_06 = '0'; $var_land_07 = '0'; $var_land_08 = '0'; $var_land_09 = '0'; $var_land_10 = '0';
					$var_land_11 = '0'; $var_land_12 = '0'; $var_land_13 = '0'; $var_land_14 = '0'; $var_land_15 = '0';
					$var_land_16 = '0'; $var_land_17 = '0'; $var_land_18 = '0'; $var_land_19 = '0'; $var_land_20 = '0';
					#-------------------------------------------------------------------------#
					$var_text_01 = ''; $var_text_02 = ''; $var_text_03 = ''; $var_text_04 = ''; $var_text_05 = '';
					$var_text_06 = ''; $var_text_07 = ''; $var_text_08 = ''; $var_text_09 = ''; $var_text_10 = '';
					$var_text_11 = ''; $var_text_12 = ''; $var_text_13 = ''; $var_text_14 = ''; $var_text_15 = '';
					$var_text_16 = ''; $var_text_17 = ''; $var_text_18 = ''; $var_text_19 = ''; $var_text_20 = '';
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_01 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_01 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_01 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_02 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_02 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_02 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_03 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_03 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_03 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_04 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_04 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_04 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_05 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_05 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_05 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_06 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_06 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_06 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_07 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_07 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_07 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_08 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_08 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_08 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_09 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_09 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_09 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_10 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_10 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_10 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_11 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_11 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_11 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_12 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_12 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_12 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_13 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_13 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_13 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_14 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_14 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_14 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_15 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_15 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_15 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_16 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_16 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_16 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_17 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_17 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_17 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_18 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_18 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_18 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_19 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_19 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_19 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_20 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_20 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_20 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_index_01 != '') { $var_value_01 = $value[$var_index_01]; } else { $var_value_01 = ''; }
						if ($var_index_02 != '') { $var_value_02 = $value[$var_index_02]; } else { $var_value_02 = ''; }
						if ($var_index_03 != '') { $var_value_03 = $value[$var_index_03]; } else { $var_value_03 = ''; }
						if ($var_index_04 != '') { $var_value_04 = $value[$var_index_04]; } else { $var_value_04 = ''; }
						if ($var_index_05 != '') { $var_value_05 = $value[$var_index_05]; } else { $var_value_05 = ''; }
						if ($var_index_06 != '') { $var_value_06 = $value[$var_index_06]; } else { $var_value_06 = ''; }
						if ($var_index_07 != '') { $var_value_07 = $value[$var_index_07]; } else { $var_value_07 = ''; }
						if ($var_index_08 != '') { $var_value_08 = $value[$var_index_08]; } else { $var_value_08 = ''; }
						if ($var_index_09 != '') { $var_value_09 = $value[$var_index_09]; } else { $var_value_09 = ''; }
						if ($var_index_10 != '') { $var_value_10 = $value[$var_index_10]; } else { $var_value_10 = ''; }
						if ($var_index_11 != '') { $var_value_11 = $value[$var_index_11]; } else { $var_value_11 = ''; }
						if ($var_index_12 != '') { $var_value_12 = $value[$var_index_12]; } else { $var_value_12 = ''; }
						if ($var_index_13 != '') { $var_value_13 = $value[$var_index_13]; } else { $var_value_13 = ''; }
						if ($var_index_14 != '') { $var_value_14 = $value[$var_index_14]; } else { $var_value_14 = ''; }
						if ($var_index_15 != '') { $var_value_15 = $value[$var_index_15]; } else { $var_value_15 = ''; }
						if ($var_index_16 != '') { $var_value_16 = $value[$var_index_16]; } else { $var_value_16 = ''; }
						if ($var_index_17 != '') { $var_value_17 = $value[$var_index_17]; } else { $var_value_17 = ''; }
						if ($var_index_18 != '') { $var_value_18 = $value[$var_index_18]; } else { $var_value_18 = ''; }
						if ($var_index_19 != '') { $var_value_19 = $value[$var_index_19]; } else { $var_value_19 = ''; }
						if ($var_index_20 != '') { $var_value_20 = $value[$var_index_20]; } else { $var_value_20 = ''; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else { $var_idx_01 = $var_value_01; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else { $var_idx_02 = $var_value_02; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else { $var_idx_03 = $var_value_03; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else { $var_idx_04 = $var_value_04; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else { $var_idx_05 = $var_value_05; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else { $var_idx_06 = $var_value_06; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else { $var_idx_07 = $var_value_07; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else { $var_idx_08 = $var_value_08; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else { $var_idx_09 = $var_value_09; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else { $var_idx_10 = $var_value_10; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else { $var_idx_11 = $var_value_11; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else { $var_idx_12 = $var_value_12; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else { $var_idx_13 = $var_value_13; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else { $var_idx_14 = $var_value_14; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else { $var_idx_15 = $var_value_15; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else { $var_idx_16 = $var_value_16; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else { $var_idx_17 = $var_value_17; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else { $var_idx_18 = $var_value_18; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else { $var_idx_19 = $var_value_19; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else { $var_idx_20 = $var_value_20; }
						#-------------------------------------------------------------------------#
					endforeach;
				} else {
					$var_idx_01 = ''; $var_idx_02 = ''; $var_idx_03 = ''; $var_idx_04 = ''; $var_idx_05 = '';
					$var_idx_06 = ''; $var_idx_07 = ''; $var_idx_08 = ''; $var_idx_09 = ''; $var_idx_10 = '';
					$var_idx_11 = ''; $var_idx_12 = ''; $var_idx_13 = ''; $var_idx_14 = ''; $var_idx_15 = '';
					$var_idx_16 = ''; $var_idx_17 = ''; $var_idx_18 = ''; $var_idx_19 = ''; $var_idx_20 = '';
				}
				#-------------------------------------------------------------------------#
				$var_concept = '' .
					$var_text_01 . ' ' . $var_idx_01 . ' ' . $var_text_02 . ' ' . $var_idx_02 . ' ' .
					$var_text_03 . ' ' . $var_idx_03 . ' ' . $var_text_04 . ' ' . $var_idx_04 . ' ' .
					$var_text_05 . ' ' . $var_idx_05 . ' ' . $var_text_06 . ' ' . $var_idx_06 . ' ' .
					$var_text_07 . ' ' . $var_idx_07 . ' ' . $var_text_08 . ' ' . $var_idx_08 . ' ' .
					$var_text_09 . ' ' . $var_idx_09 . ' ' . $var_text_10 . ' ' . $var_idx_10 . ' ' .
					$var_text_11 . ' ' . $var_idx_11 . ' ' . $var_text_12 . ' ' . $var_idx_12 . ' ' .
					$var_text_13 . ' ' . $var_idx_13 . ' ' . $var_text_14 . ' ' . $var_idx_14 . ' ' .
					$var_text_15 . ' ' . $var_idx_15 . ' ' . $var_text_16 . ' ' . $var_idx_16 . ' ' .
					$var_text_17 . ' ' . $var_idx_17 . ' ' . $var_text_18 . ' ' . $var_idx_18 . ' ' .
					$var_text_19 . ' ' . $var_idx_19 . ' ' . $var_text_20 . ' ' . $var_idx_20;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_camera_m_deleted . " = '1' GROUP BY " . d_azp_ibn_camera_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_camera_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_camera,
							d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_camera_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_camera_id_azp_ibn_camera];
								$var_cedula2 = $value2[d_azp_ibn_camera_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_camera_t_acount => $var_union, d_azp_ibn_camera_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $var_id2 . "'");
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_m_temp . " = '2'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_camera_t_validate => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $value[d_azp_ibn_camera_id_azp_ibn_camera] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_m_temp . " = '2' AND " . d_azp_ibn_camera_t_validate . " = ''");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_m_temp . " = '2' AND " . d_azp_ibn_camera_t_validate . " IS NULL");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . " AS 'lbl_azp_ibn_camera_t_acount',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_city . " AS 'lbl_azp_ibn_data_main_t_city',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_code . " AS 'lbl_azp_ibn_data_main_t_code',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_consecutive . " AS 'lbl_azp_ibn_data_main_t_consecutive',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_data . " AS 'lbl_azp_ibn_data_main_t_data',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_department . " AS 'lbl_azp_ibn_data_main_t_department',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_full_name . " AS 'lbl_azp_ibn_data_main_t_full_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . " AS 'lbl_azp_ibn_data_main_t_identification',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_camera . " AS 'lbl_azp_ibn_data_main_t_image_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_furniture . " AS 'lbl_azp_ibn_data_main_t_image_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_property . " AS 'lbl_azp_ibn_data_main_t_image_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_vehicle . " AS 'lbl_azp_ibn_data_main_t_image_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_image_warranty . " AS 'lbl_azp_ibn_data_main_t_image_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_nro_obligation . " AS 'lbl_azp_ibn_data_main_t_nro_obligation',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_final . " AS 'lbl_azp_ibn_data_main_t_policy_final',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_effective . " AS 'lbl_azp_ibn_data_main_t_policy_effective',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_viability . " AS 'lbl_azp_ibn_data_main_t_policy_viability',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_camera . " AS 'lbl_azp_ibn_data_main_t_policy_e_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_e_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_property . " AS 'lbl_azp_ibn_data_main_t_policy_e_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_e_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_e_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_e_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_camera . " AS 'lbl_azp_ibn_data_main_t_policy_v_camera',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_furniture . " AS 'lbl_azp_ibn_data_main_t_policy_v_furniture',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_property . " AS 'lbl_azp_ibn_data_main_t_policy_v_property',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_vehicle . " AS 'lbl_azp_ibn_data_main_t_policy_v_vehicle',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_policy_v_warranty . " AS 'lbl_azp_ibn_data_main_t_policy_v_warranty',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_document . " AS 'lbl_azp_ibn_data_main_w_document',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_error . " AS 'lbl_azp_ibn_data_main_w_error',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_folder . " AS 'lbl_azp_ibn_data_main_w_folder',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_name . " AS 'lbl_azp_ibn_data_main_w_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_route . " AS 'lbl_azp_ibn_data_main_w_route',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_size . " AS 'lbl_azp_ibn_data_main_w_size',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_tmp_name . " AS 'lbl_azp_ibn_data_main_w_tmp_name',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_w_type . " AS 'lbl_azp_ibn_data_main_w_type',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_client . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_client',
						tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'
					FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . "
					WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_m_temp . " = '2'
						AND tc_azp_ibn_camera." . d_azp_ibn_camera_t_validate . " = '0'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
					GROUP BY tc_azp_ibn_camera." . d_azp_ibn_camera_t_acount . "
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(
							d_azp_ibn_data_main_m_by_created => $_SESSION[SESS_APP_ID],
							d_azp_ibn_data_main_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azp_ibn_data_main_m_date_created => DATE_HOUR,
							d_azp_ibn_data_main_m_date_modified => DATE_HOUR,
							d_azp_ibn_data_main_m_deleted => '1',
							d_azp_ibn_data_main_m_description => '',
							d_azp_ibn_data_main_m_level => '2',
							d_azp_ibn_data_main_m_status => '1',
							d_azp_ibn_data_main_m_temp => '1',
							d_azp_ibn_data_main_t_acount => $value['lbl_azp_ibn_camera_t_acount'],
							d_azp_ibn_data_main_t_city => $value['lbl_azp_ibn_data_main_t_city'],
							d_azp_ibn_data_main_t_code => $value['lbl_azp_ibn_data_main_t_code'],
							d_azp_ibn_data_main_t_consecutive => $value['lbl_azp_ibn_data_main_t_consecutive'],
							d_azp_ibn_data_main_t_data => $value['lbl_azp_ibn_data_main_t_data'],
							d_azp_ibn_data_main_t_department => $value['lbl_azp_ibn_data_main_t_department'],
							d_azp_ibn_data_main_t_full_name => $value['lbl_azp_ibn_data_main_t_full_name'],
							d_azp_ibn_data_main_t_identification => $value['lbl_azp_ibn_data_main_t_identification'],
							d_azp_ibn_data_main_t_image_camera => $value['lbl_azp_ibn_data_main_t_image_camera'],
							d_azp_ibn_data_main_t_image_furniture => $value['lbl_azp_ibn_data_main_t_image_furniture'],
							d_azp_ibn_data_main_t_image_property => $value['lbl_azp_ibn_data_main_t_image_property'],
							d_azp_ibn_data_main_t_image_vehicle => $value['lbl_azp_ibn_data_main_t_image_vehicle'],
							d_azp_ibn_data_main_t_image_warranty => $value['lbl_azp_ibn_data_main_t_image_warranty'],
							d_azp_ibn_data_main_t_nro_obligation => $value['lbl_azp_ibn_data_main_t_nro_obligation'],
							d_azp_ibn_data_main_t_policy_final => $value['lbl_azp_ibn_data_main_t_policy_final'],
							d_azp_ibn_data_main_t_policy_effective => $value['lbl_azp_ibn_data_main_t_policy_effective'],
							d_azp_ibn_data_main_t_policy_viability => $value['lbl_azp_ibn_data_main_t_policy_viability'],
							d_azp_ibn_data_main_t_policy_e_camera => $value['lbl_azp_ibn_data_main_t_policy_e_camera'],
							d_azp_ibn_data_main_t_policy_e_furniture => $value['lbl_azp_ibn_data_main_t_policy_e_furniture'],
							d_azp_ibn_data_main_t_policy_e_property => $value['lbl_azp_ibn_data_main_t_policy_e_property'],
							d_azp_ibn_data_main_t_policy_e_vehicle => $value['lbl_azp_ibn_data_main_t_policy_e_vehicle'],
							d_azp_ibn_data_main_t_policy_e_warranty => $value['lbl_azp_ibn_data_main_t_policy_e_warranty'],
							d_azp_ibn_data_main_t_policy_v_camera => $value['lbl_azp_ibn_data_main_t_policy_v_camera'],
							d_azp_ibn_data_main_t_policy_v_furniture => $value['lbl_azp_ibn_data_main_t_policy_v_furniture'],
							d_azp_ibn_data_main_t_policy_v_property => $value['lbl_azp_ibn_data_main_t_policy_v_property'],
							d_azp_ibn_data_main_t_policy_v_vehicle => $value['lbl_azp_ibn_data_main_t_policy_v_vehicle'],
							d_azp_ibn_data_main_t_policy_v_warranty => $value['lbl_azp_ibn_data_main_t_policy_v_warranty'],
							d_azp_ibn_data_main_w_document => $value['lbl_azp_ibn_data_main_w_document'],
							d_azp_ibn_data_main_w_error => $value['lbl_azp_ibn_data_main_w_error'],
							d_azp_ibn_data_main_w_folder => $value['lbl_azp_ibn_data_main_w_folder'],
							d_azp_ibn_data_main_w_name => $value['lbl_azp_ibn_data_main_w_name'],
							d_azp_ibn_data_main_w_route => $value['lbl_azp_ibn_data_main_w_route'],
							d_azp_ibn_data_main_w_size => $value['lbl_azp_ibn_data_main_w_size'],
							d_azp_ibn_data_main_w_tmp_name => $value['lbl_azp_ibn_data_main_w_tmp_name'],
							d_azp_ibn_data_main_w_type => $value['lbl_azp_ibn_data_main_w_type'],
							d_azp_ibn_data_main_v_id_azp_ibn_client => $value['lbl_azp_ibn_data_main_v_id_azp_ibn_client'],
							d_azp_ibn_data_main_v_id_azp_ibn_control_panel => $value['lbl_azp_ibn_data_main_v_id_azp_ibn_control_panel'],
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_ibn_data_main, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_data_main,
					d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
					d_azp_ibn_data_main_m_deleted . " = '1' GROUP BY " . d_azp_ibn_data_main_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_data_main_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_data_main,
							d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
							d_azp_ibn_data_main_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_data_main_id_azp_ibn_data_main];
								$var_cedula2 = $value2[d_azp_ibn_data_main_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_data_main_t_acount => $var_union, d_azp_ibn_data_main_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_data_main, $var_array, d_azp_ibn_data_main_id_azp_ibn_data_main . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_m_temp . " = '2' ");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.', 'register' => $empty_id);
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_multiple(array $data) {
			try {
				#-------------------------------------------------------------------------#
				/*if (!isset($data['field_up_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_up_id']);
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
				}*/
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_camera_multiple(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_multiple($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_ck = $this->db->scape($data['field_tb_ck']);
				#-------------------------------------------------------------------------#
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_ck);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) { $value; }
				#-------------------------------------------------------------------------#
				$var_id = $data['field_tb_id'];
				$var_ibn_state = $data['field_tb_ibn_state'];
				$var_nro_registration = $data['field_tb_nro_registration'];
				$var_city = $data['field_tb_city'];
				$var_department = $data['field_tb_department'];
				$var_municipality = $data['field_tb_municipality'];
				$var_address = $data['field_tb_address'];
				$var_renewal_date = $data['field_tb_renewal_date'];
				$var_ibn_type_certified = $data['field_tb_ibn_type_certified'];
				$var_type_company = $data['field_tb_type_company'];
				$var_type_organization = $data['field_tb_type_organization'];
				$var_legal_representative = $data['field_tb_legal_representative'];
				$var_legal_rp_certificate = $data['field_tb_legal_rp_certificate'];
				$var_rup = $data['field_tb_rup'];
				$var_year = $data['field_tb_year'];
				$var_establishment = $data['field_tb_establishment'];
				$var_nit = $data['field_tb_nit'];
				$var_business_name = $data['field_tb_business_name'];
				$var_act_economic = $data['field_tb_act_economic'];
				$var_phone = $data['field_tb_phone'];
				$var_total_active = $data['field_tb_total_active'];
				$var_assessment = $data['field_tb_assessment'];
				$var_viable = $data['field_tb_viable'];
				$var_well_viable = $data['field_tb_well_viable'];
				$var_ibn_type_concept = $data['field_tb_ibn_type_concept'];
				$var_causal_feasibility = $data['field_tb_causal_feasibility'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($var_id); $i++) {
					$empty_id = $this->db->scape($var_id[$i]);
					$empty_ibn_state = $this->db->scape($var_ibn_state[$i]);
					$empty_nro_registration = $this->db->scape($var_nro_registration[$i]);
					$empty_city = $this->db->scape($var_city[$i]);
					$empty_department = $this->db->scape($var_department[$i]);
					$empty_municipality = $this->db->scape($var_municipality[$i]);
					$empty_address = $this->db->scape($var_address[$i]);
					$empty_renewal_date = $this->db->scape($var_renewal_date[$i]);
					$empty_ibn_type_certified = $this->db->scape($var_ibn_type_certified[$i]);
					$empty_type_company = $this->db->scape($var_type_company[$i]);
					$empty_type_organization = $this->db->scape($var_type_organization[$i]);
					$empty_legal_representative = $this->db->scape($var_legal_representative[$i]);
					$empty_legal_rp_certificate = $this->db->scape($var_legal_rp_certificate[$i]);
					$empty_rup = $this->db->scape($var_rup[$i]);
					$empty_year = $this->db->scape($var_year[$i]);
					$empty_establishment = $this->db->scape($var_establishment[$i]);
					$empty_nit = $this->db->scape($var_nit[$i]);
					$empty_business_name = $this->db->scape($var_business_name[$i]);
					$empty_act_economic = $this->db->scape($var_act_economic[$i]);
					$empty_phone = $this->db->scape($var_phone[$i]);
					$empty_total_active = $this->db->scape($var_total_active[$i]);
					$empty_assessment = $this->db->scape($var_assessment[$i]);
					$empty_viable = $this->db->scape($var_viable[$i]);
					//$empty_well_viable = $this->db->scape($var_well_viable[$i]);
					$empty_ibn_type_concept = $this->db->scape($var_ibn_type_concept[$i]);
					$empty_causal_feasibility = $this->db->scape($var_causal_feasibility[$i]);
					#-------------------------------------------------------------------------#
					if ($empty_viable != 'SI' || $empty_viable != 'NO') { $empty_well_viable = ''; }
					if ($empty_viable == 'SI') { $empty_well_viable = 'RM' . ' ' . $empty_nro_registration . ' ' . 'DE' . ' ' . $empty_city; }
					if ($empty_viable == 'NO') { $empty_well_viable = ''; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_t_name . " = '" . $empty_ibn_state . "' AND " .
						d_azp_ibn_state_v_id_azp_ibn_module . " = '1'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_state = $value[d_azp_ibn_state_id_azp_ibn_state];
						endforeach;
					} else { $empty_ibn_state = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_certified, d_azp_ibn_type_certified_t_name . " = '" . $empty_ibn_type_certified . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_certified = $value[d_azp_ibn_type_certified_id_azp_ibn_type_certified];
						endforeach;
					} else { $empty_ibn_type_certified = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_concept, d_azp_ibn_type_concept_t_name . " = '" . $empty_ibn_type_concept . "' AND " .
						d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '1'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_concept = $value[d_azp_ibn_type_concept_id_azp_ibn_type_concept];
						endforeach;
					} else { $empty_ibn_type_concept = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql_select = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_select) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_select as $key_sql_select):
							$var_array = array(
								d_azs_ibn_camera_m_by_created => $_SESSION[SESS_APP_ID],
								d_azs_ibn_camera_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azs_ibn_camera_m_date_created => DATE_HOUR,
								d_azs_ibn_camera_m_date_modified => DATE_HOUR,
								d_azs_ibn_camera_m_deleted => $key_sql_select[d_azp_ibn_camera_m_deleted],
								d_azs_ibn_camera_m_description => $key_sql_select[d_azp_ibn_camera_m_description],
								d_azs_ibn_camera_m_level => $key_sql_select[d_azp_ibn_camera_m_level],
								d_azs_ibn_camera_m_status => $key_sql_select[d_azp_ibn_camera_m_status],
								d_azs_ibn_camera_m_temp => $key_sql_select[d_azp_ibn_camera_m_temp],
								d_azs_ibn_camera_t_act_economic => strtoupper($key_sql_select[d_azp_ibn_camera_t_act_economic]),
								d_azs_ibn_camera_t_address => strtoupper($key_sql_select[d_azp_ibn_camera_t_address]),
								d_azs_ibn_camera_t_assessment => strtoupper($key_sql_select[d_azp_ibn_camera_t_assessment]),
								d_azs_ibn_camera_t_business_name => strtoupper($key_sql_select[d_azp_ibn_camera_t_business_name]),
								d_azs_ibn_camera_t_causal_feasibility => strtoupper($key_sql_select[d_azp_ibn_camera_t_causal_feasibility]),
								d_azs_ibn_camera_t_city => strtoupper($key_sql_select[d_azp_ibn_camera_t_city]),
								d_azs_ibn_camera_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_camera_t_comment_legal]),
								d_azs_ibn_camera_t_concept => strtoupper($key_sql_select[d_azp_ibn_camera_t_concept]),
								d_azs_ibn_camera_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_camera_t_consecutive]),
								d_azs_ibn_camera_t_department => strtoupper($key_sql_select[d_azp_ibn_camera_t_department]),
								d_azs_ibn_camera_t_establishment => strtoupper($key_sql_select[d_azp_ibn_camera_t_establishment]),
								d_azs_ibn_camera_t_full_name => strtoupper($key_sql_select[d_azp_ibn_camera_t_full_name]),
								d_azs_ibn_camera_t_identification => strtoupper($key_sql_select[d_azp_ibn_camera_t_identification]),
								d_azs_ibn_camera_t_legal_representative => strtoupper($key_sql_select[d_azp_ibn_camera_t_legal_representative]),
								d_azs_ibn_camera_t_legal_rp_certificate => strtoupper($key_sql_select[d_azp_ibn_camera_t_legal_rp_certificate]),
								d_azs_ibn_camera_t_limitation => strtoupper($key_sql_select[d_azp_ibn_camera_t_limitation]),
								d_azs_ibn_camera_t_municipality => strtoupper($key_sql_select[d_azp_ibn_camera_t_municipality]),
								d_azs_ibn_camera_t_nit => strtoupper($key_sql_select[d_azp_ibn_camera_t_nit]),
								d_azs_ibn_camera_t_nro_registration => strtoupper($key_sql_select[d_azp_ibn_camera_t_nro_registration]),
								d_azs_ibn_camera_t_observation => strtoupper($key_sql_select[d_azp_ibn_camera_t_observation]),
								d_azs_ibn_camera_t_phone => strtoupper($key_sql_select[d_azp_ibn_camera_t_phone]),
								d_azs_ibn_camera_t_renewal_date => strtoupper($key_sql_select[d_azp_ibn_camera_t_renewal_date]),
								d_azs_ibn_camera_t_rup => strtoupper($key_sql_select[d_azp_ibn_camera_t_rup]),
								d_azs_ibn_camera_t_total_active => strtoupper($key_sql_select[d_azp_ibn_camera_t_total_active]),
								d_azs_ibn_camera_t_type_company => strtoupper($key_sql_select[d_azp_ibn_camera_t_type_company]),
								d_azs_ibn_camera_t_type_organization => strtoupper($key_sql_select[d_azp_ibn_camera_t_type_organization]),
								d_azs_ibn_camera_t_viable => strtoupper($key_sql_select[d_azp_ibn_camera_t_viable]),
								d_azs_ibn_camera_t_well_viable => strtoupper($key_sql_select[d_azp_ibn_camera_t_well_viable]),
								d_azs_ibn_camera_t_year => strtoupper($key_sql_select[d_azp_ibn_camera_t_year]),
								d_azs_ibn_camera_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_camera_v_id_azp_ibn_state]),
								d_azs_ibn_camera_u_ibn_type_certified => strtoupper($key_sql_select[d_azp_ibn_camera_v_id_azp_ibn_type_certified]),
								d_azs_ibn_camera_u_ibn_type_concept => strtoupper($key_sql_select[d_azp_ibn_camera_v_id_azp_ibn_type_concept]),
								d_azs_ibn_camera_v_id_azp_ibn_camera => $empty_id,
							);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azs_ibn_camera, $var_array);
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_ibn_camera_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_camera_m_date_modified => DATE_HOUR,
						//d_azp_ibn_camera_m_description => $empty_description,
						//d_azp_ibn_camera_m_status => $empty_state,
						d_azp_ibn_camera_t_act_economic => strtoupper($empty_act_economic),
						d_azp_ibn_camera_t_address => strtoupper($empty_address),
						d_azp_ibn_camera_t_assessment => strtoupper($empty_assessment),
						d_azp_ibn_camera_t_business_name => strtoupper($empty_business_name),
						d_azp_ibn_camera_t_causal_feasibility => strtoupper($empty_causal_feasibility),
						d_azp_ibn_camera_t_city => strtoupper($empty_city),
						//d_azp_ibn_camera_t_comment_legal => strtoupper($empty_comment_legal),
						//d_azp_ibn_camera_t_concept => strtoupper($empty_concept),
						//d_azp_ibn_camera_t_consecutive => strtoupper($empty_consecutive),
						d_azp_ibn_camera_t_department => strtoupper($empty_department),
						d_azp_ibn_camera_t_establishment => strtoupper($empty_establishment),
						//d_azp_ibn_camera_t_full_name => strtoupper($empty_full_name),
						//d_azp_ibn_camera_t_identification => strtoupper($empty_identification),
						d_azp_ibn_camera_t_legal_representative => strtoupper($empty_legal_representative),
						d_azp_ibn_camera_t_legal_rp_certificate => strtoupper($empty_legal_rp_certificate),
						//d_azp_ibn_camera_t_limitation => strtoupper($empty_limitation),
						d_azp_ibn_camera_t_municipality => strtoupper($empty_municipality),
						d_azp_ibn_camera_t_nit => strtoupper($empty_nit),
						d_azp_ibn_camera_t_nro_registration => strtoupper($empty_nro_registration),
						//d_azp_ibn_camera_t_observation => strtoupper($empty_observation),
						d_azp_ibn_camera_t_phone => strtoupper($empty_phone),
						d_azp_ibn_camera_t_renewal_date => strtoupper($empty_renewal_date),
						d_azp_ibn_camera_t_rup => strtoupper($empty_rup),
						d_azp_ibn_camera_t_total_active => strtoupper($empty_total_active),
						d_azp_ibn_camera_t_type_company => strtoupper($empty_type_company),
						d_azp_ibn_camera_t_type_organization => strtoupper($empty_type_organization),
						d_azp_ibn_camera_t_viable => strtoupper($empty_viable),
						d_azp_ibn_camera_t_well_viable => strtoupper($empty_well_viable),
						d_azp_ibn_camera_t_year => strtoupper($empty_year),
						//d_azp_ibn_camera_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
						d_azp_ibn_camera_v_id_azp_ibn_state => $empty_ibn_state,
						d_azp_ibn_camera_v_id_azp_ibn_type_certified => $empty_ibn_type_certified,
						d_azp_ibn_camera_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
							tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client'
						FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera

						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
							ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "

						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "

						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
							ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

						WHERE tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'
					");
					#-------------------------------------------------------------------------#
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_control_panel = $value['lbl_azp_ibn_control_panel_id_azp_ibn_control_panel'];
							$var_code_research = $value['lbl_azp_ibn_control_panel_t_code_research'];
							$var_identification = $value['lbl_azp_ibn_camera_t_identification'];
							$var_registration = $value['lbl_azp_ibn_camera_t_nro_registration'];
							$var_client_id = $value['lbl_azp_fct_client_id_azp_fct_client'];
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql2 = $this->db->query("
								SELECT
									tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
									tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
									tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt'
								FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

								INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
									ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
										= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "

								INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
									ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
										= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "

								INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
									ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
										= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

								WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_code_research . "'
									AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_identification . "'
									AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " = '2'
									-- AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_registration . "'
									AND tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_client_id . "'
									AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " = 'INV'
							");
							# Validar si la consulta es verdadera
							if (false != $var_sql2) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql2 as $key2 => $value2):
									$var_amount = $value2['lbl_azp_crt_request_data_t_rcb_amount'];
									$var_date_load = $value2['lbl_azp_crt_request_data_t_rcb_date_load'];
									$var_nro_receipt = $value2['lbl_azp_crt_request_data_t_rcb_nro_receipt'];
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_ibn_camera_t_st_located => 'SI',
										d_azp_ibn_camera_t_st_returnable => 'SI',
										d_azp_ibn_camera_t_st_receipt => $var_nro_receipt,
										d_azp_ibn_camera_t_st_date => $var_date_load,
										d_azp_ibn_camera_t_st_value => $var_amount,
									);
									# Insertar valores en la tabla segun estructura de la tabla
									$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");

									# Organizacion de los valores capturados y asignados a los campos a insertar
									/*$var_array = array(d_azp_crt_request_data_t_st_located => 'SI',);
									# Insertar valores en la tabla segun estructura de la tabla
									$this->db->update(t_azp_crt_request_data, $var_array,
										d_azp_crt_request_data_t_request_nro . " = '" . $var_code_research . "'"
										d_azp_crt_request_data_t_identification . " = '" . $var_identification . "'"
										d_azp_crt_request_data_v_id_azp_crt_request_type . " = '" . $var_registration . "'"
										d_azp_crt_request_data_t_applicant_entity . " = 'INV'"
									);*/

									# Actualizar datos en la tabla seleccionada segund el id
									$this->db->query("
										UPDATE " . t_azp_crt_request_data . " tc_azp_crt_request_data

										INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
											ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
												= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "

										INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
											ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
												= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "

										INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
											ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
												= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

										SET tc_azp_crt_request_data." . d_azp_crt_request_data_t_st_located . " = 'SI'
										
										WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_code_research . "'
											AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_identification . "'
											AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " = '2'
											-- AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_registration . "'
											AND tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_client_id . "'
											AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " = 'INV'
									");
								endforeach;
							}
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					/*$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_identification . " AS 'lbl_azp_ibn_camera_t_identification',
							tc_azp_ibn_camera." . d_azp_ibn_camera_t_nro_registration . " AS 'lbl_azp_ibn_camera_t_nro_registration',
							tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client'
						FROM " . t_azp_ibn_camera . " tc_azp_ibn_camera

						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
							ON tc_azp_ibn_camera." . d_azp_ibn_camera_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "

						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "

						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
							ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

						WHERE tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_id . "'
					");
					#-------------------------------------------------------------------------#
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_control_panel = $value['lbl_azp_ibn_control_panel_id_azp_ibn_control_panel'];
							$var_code_research = $value['lbl_azp_ibn_control_panel_t_code_research'];
							$var_identification = $value['lbl_azp_ibn_camera_t_identification'];
							$var_registration = $value['lbl_azp_ibn_camera_t_nro_registration'];
							$var_client_id = $value['lbl_azp_fct_client_id_azp_fct_client'];

							echo $var_client_id;
							# Consulta para identificar los nuevos registros en la tabla
							$var_sql2 = $this->db->query("
								SELECT
									tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_amount . " AS 'lbl_azp_crt_request_data_t_rcb_amount',
									tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_date_load . " AS 'lbl_azp_crt_request_data_t_rcb_date_load',
									tc_azp_crt_request_data." . d_azp_crt_request_data_t_rcb_nro_receipt . " AS 'lbl_azp_crt_request_data_t_rcb_nro_receipt'
								FROM " . t_azp_crt_request_data . " tc_azp_crt_request_data

								INNER JOIN " . t_azp_crt_client . " tc_azp_crt_client
									ON tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_client . "
										= tc_azp_crt_client." . d_azp_crt_client_id_azp_crt_client . "

								INNER JOIN " . t_azp_crt_bank . " tc_azp_crt_bank
									ON tc_azp_crt_client." . d_azp_crt_client_v_id_azp_crt_bank . "
										= tc_azp_crt_bank." . d_azp_crt_bank_id_azp_crt_bank . "

								INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
									ON tc_azp_crt_bank." . d_azp_crt_bank_v_id_azp_fct_client . "
										= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

								WHERE tc_azp_crt_request_data." . d_azp_crt_request_data_t_request_nro . " = '" . $var_code_research . "'
									AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_identification . " = '" . $var_identification . "'
									AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_registration . "'
									AND tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_client_id . "'
							");
							# Validar si la consulta es verdadera
							if (false != $var_sql2) {
								# Recorrer las filas de la consulta generada
								foreach ($var_sql2 as $key2 => $value2):
									$var_amount = $value2['lbl_azp_crt_request_data_t_rcb_amount'];
									$var_date_load = $value2['lbl_azp_crt_request_data_t_rcb_date_load'];
									$var_nro_receipt = $value2['lbl_azp_crt_request_data_t_rcb_nro_receipt'];
									# Organizacion de los valores capturados y asignados a los campos a insertar
									$var_array = array(
										d_azp_ibn_camera_t_st_returnable => 'SI',
										d_azp_ibn_camera_t_st_receipt => $var_nro_receipt,
										d_azp_ibn_camera_t_st_date => $var_date_load,
										d_azp_ibn_camera_t_st_value => $var_amount,
									);
									# Insertar valores en la tabla segun estructura de la tabla
									$this->db->update(t_azp_ibn_camera, $var_array,
										d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control_panel . "' AND " .
										d_azp_ibn_camera_t_identification . " = '" . $var_identification . "' AND " .
										d_azp_ibn_camera_t_nro_registration . " = '" . $var_registration . "'"
									);
								endforeach;
							}
						endforeach;
					}*/
					#-------------------------------------------------------------------------#
					$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
					$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cp_id = $value[d_azp_ibn_camera_v_id_azp_ibn_control_panel];

							$var_rg_reg = $value[d_azp_ibn_camera_t_nro_registration];
							$var_rg_via = $value[d_azp_ibn_camera_t_viable];
						endforeach;
					} else { $var_rg_cp_id = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_rg_cp_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cl_id = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
						endforeach;
					} else { $var_rg_cl_id = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					//$var_sql = $this->db->select('*', t_azp_ibn_regulation, d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "' AND " . d_azp_ibn_regulation_t_selector . " = 'SI'");
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
							tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
							tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
							tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
							tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
							tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
							tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . " AS 'lbl_azp_ibn_calification_id_azp_ibn_calification',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
							tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
							tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
						FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
								= tc_azp_user_created." . d_azp_user_id_azp_user . "
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
								= tc_azp_user_modified." . d_azp_user_id_azp_user . "
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
								= tc_azp_sys_level." . d_azp_sys_level_t_value . "
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
								= tc_azp_sys_state." . d_azp_sys_state_t_value . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
								= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
							ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
								= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
						-- ---------------------------------------------------------------
						WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
							AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
							AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
							AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "'
					");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cf_id = $value['lbl_azp_ibn_calification_id_azp_ibn_calification'];
							$var_rg_cf_pos = $value['lbl_azp_ibn_calification_t_principal'];
							$var_rg_cf_neg = $value['lbl_azp_ibn_calification_t_secondary'];
							$var_pc_one = $var_rg_cf_neg; $var_pc_two = $var_rg_cf_neg; $var_pc_three = $var_rg_cf_neg;
							# Control de validacion de variables y asignacion de valores a nuevas variables
							if ($var_rg_cf_id == 2) { $var_rg_cf_2 = 2; } else if ($var_rg_cf_id == 3) { $var_rg_cf_3 = 3; } else { $var_rg_cf_2 = 0; $var_rg_cf_3 = 0; }
						endforeach;
					}
					#-------------------------------------------------------------------------#
					if ($var_rg_cf_2 == 2) { if ($var_rg_via == 'SI') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
					if ($var_rg_cf_3 == 3) { if ($var_rg_reg != '') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
					#-------------------------------------------------------------------------#
					if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_camera_t_policy_effective => $var_policy_effective,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_camera_t_policy_viability => $var_policy_viability,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_ibn_control_panel = $value[d_azp_ibn_camera_v_id_azp_ibn_control_panel];
						endforeach;
					} else { $var_ibn_control_panel = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_id_client = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
						endforeach;
					} else { $var_id_client = 0; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
							tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
							tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
							tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
							tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
							tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
							tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
							tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
							tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
							tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
							tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
						FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_user . " tc_azp_user_created
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
								= tc_azp_user_created." . d_azp_user_id_azp_user . "
						INNER JOIN " . t_azp_user . " tc_azp_user_modified
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
								= tc_azp_user_modified." . d_azp_user_id_azp_user . "
						INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
								= tc_azp_sys_level." . d_azp_sys_level_t_value . "
						INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
								= tc_azp_sys_state." . d_azp_sys_state_t_value . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						-- ---------------------------------------------------------------
						INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
								= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
						-- ---------------------------------------------------------------
						WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
							AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '1'
					");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							$var_land_01 = $value['lbl_azp_ibn_concept_t_land_01'];
							$var_land_02 = $value['lbl_azp_ibn_concept_t_land_02'];
							$var_land_03 = $value['lbl_azp_ibn_concept_t_land_03'];
							$var_land_04 = $value['lbl_azp_ibn_concept_t_land_04'];
							$var_land_05 = $value['lbl_azp_ibn_concept_t_land_05'];
							$var_land_06 = $value['lbl_azp_ibn_concept_t_land_06'];
							$var_land_07 = $value['lbl_azp_ibn_concept_t_land_07'];
							$var_land_08 = $value['lbl_azp_ibn_concept_t_land_08'];
							$var_land_09 = $value['lbl_azp_ibn_concept_t_land_09'];
							$var_land_10 = $value['lbl_azp_ibn_concept_t_land_10'];
							$var_land_11 = $value['lbl_azp_ibn_concept_t_land_11'];
							$var_land_12 = $value['lbl_azp_ibn_concept_t_land_12'];
							$var_land_13 = $value['lbl_azp_ibn_concept_t_land_13'];
							$var_land_14 = $value['lbl_azp_ibn_concept_t_land_14'];
							$var_land_15 = $value['lbl_azp_ibn_concept_t_land_15'];
							$var_land_16 = $value['lbl_azp_ibn_concept_t_land_16'];
							$var_land_17 = $value['lbl_azp_ibn_concept_t_land_17'];
							$var_land_18 = $value['lbl_azp_ibn_concept_t_land_18'];
							$var_land_19 = $value['lbl_azp_ibn_concept_t_land_19'];
							$var_land_20 = $value['lbl_azp_ibn_concept_t_land_20'];
							$var_text_01 = $value['lbl_azp_ibn_concept_t_text_01'];
							$var_text_02 = $value['lbl_azp_ibn_concept_t_text_02'];
							$var_text_03 = $value['lbl_azp_ibn_concept_t_text_03'];
							$var_text_04 = $value['lbl_azp_ibn_concept_t_text_04'];
							$var_text_05 = $value['lbl_azp_ibn_concept_t_text_05'];
							$var_text_06 = $value['lbl_azp_ibn_concept_t_text_06'];
							$var_text_07 = $value['lbl_azp_ibn_concept_t_text_07'];
							$var_text_08 = $value['lbl_azp_ibn_concept_t_text_08'];
							$var_text_09 = $value['lbl_azp_ibn_concept_t_text_09'];
							$var_text_10 = $value['lbl_azp_ibn_concept_t_text_10'];
							$var_text_11 = $value['lbl_azp_ibn_concept_t_text_11'];
							$var_text_12 = $value['lbl_azp_ibn_concept_t_text_12'];
							$var_text_13 = $value['lbl_azp_ibn_concept_t_text_13'];
							$var_text_14 = $value['lbl_azp_ibn_concept_t_text_14'];
							$var_text_15 = $value['lbl_azp_ibn_concept_t_text_15'];
							$var_text_16 = $value['lbl_azp_ibn_concept_t_text_16'];
							$var_text_17 = $value['lbl_azp_ibn_concept_t_text_17'];
							$var_text_18 = $value['lbl_azp_ibn_concept_t_text_18'];
							$var_text_19 = $value['lbl_azp_ibn_concept_t_text_19'];
							$var_text_20 = $value['lbl_azp_ibn_concept_t_text_20'];
						endforeach;
					} else {
						$var_land_01 = '0'; $var_land_02 = '0'; $var_land_03 = '0'; $var_land_04 = '0'; $var_land_05 = '0';
						$var_land_06 = '0'; $var_land_07 = '0'; $var_land_08 = '0'; $var_land_09 = '0'; $var_land_10 = '0';
						$var_land_11 = '0'; $var_land_12 = '0'; $var_land_13 = '0'; $var_land_14 = '0'; $var_land_15 = '0';
						$var_land_16 = '0'; $var_land_17 = '0'; $var_land_18 = '0'; $var_land_19 = '0'; $var_land_20 = '0';
						#-------------------------------------------------------------------------#
						$var_text_01 = ''; $var_text_02 = ''; $var_text_03 = ''; $var_text_04 = ''; $var_text_05 = '';
						$var_text_06 = ''; $var_text_07 = ''; $var_text_08 = ''; $var_text_09 = ''; $var_text_10 = '';
						$var_text_11 = ''; $var_text_12 = ''; $var_text_13 = ''; $var_text_14 = ''; $var_text_15 = '';
						$var_text_16 = ''; $var_text_17 = ''; $var_text_18 = ''; $var_text_19 = ''; $var_text_20 = '';
					}
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_01 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_01 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_01 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_02 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_02 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_02 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_03 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_03 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_03 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_04 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_04 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_04 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_05 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_05 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_05 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_06 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_06 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_06 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_07 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_07 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_07 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_08 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_08 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_08 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_09 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_09 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_09 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_10 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_10 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_10 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_11 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_11 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_11 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_12 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_12 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_12 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_13 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_13 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_13 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_14 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_14 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_14 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_15 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_15 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_15 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_16 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_16 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_16 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_17 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_17 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_17 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_18 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_18 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_18 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_19 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_19 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_19 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_20 . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) { foreach ($var_sql as $key): $var_index_20 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_20 = ''; }
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Control de validacion de variables y asignacion de valores a nuevas variables
							if ($var_index_01 != '') { $var_value_01 = $value[$var_index_01]; } else { $var_value_01 = ''; }
							if ($var_index_02 != '') { $var_value_02 = $value[$var_index_02]; } else { $var_value_02 = ''; }
							if ($var_index_03 != '') { $var_value_03 = $value[$var_index_03]; } else { $var_value_03 = ''; }
							if ($var_index_04 != '') { $var_value_04 = $value[$var_index_04]; } else { $var_value_04 = ''; }
							if ($var_index_05 != '') { $var_value_05 = $value[$var_index_05]; } else { $var_value_05 = ''; }
							if ($var_index_06 != '') { $var_value_06 = $value[$var_index_06]; } else { $var_value_06 = ''; }
							if ($var_index_07 != '') { $var_value_07 = $value[$var_index_07]; } else { $var_value_07 = ''; }
							if ($var_index_08 != '') { $var_value_08 = $value[$var_index_08]; } else { $var_value_08 = ''; }
							if ($var_index_09 != '') { $var_value_09 = $value[$var_index_09]; } else { $var_value_09 = ''; }
							if ($var_index_10 != '') { $var_value_10 = $value[$var_index_10]; } else { $var_value_10 = ''; }
							if ($var_index_11 != '') { $var_value_11 = $value[$var_index_11]; } else { $var_value_11 = ''; }
							if ($var_index_12 != '') { $var_value_12 = $value[$var_index_12]; } else { $var_value_12 = ''; }
							if ($var_index_13 != '') { $var_value_13 = $value[$var_index_13]; } else { $var_value_13 = ''; }
							if ($var_index_14 != '') { $var_value_14 = $value[$var_index_14]; } else { $var_value_14 = ''; }
							if ($var_index_15 != '') { $var_value_15 = $value[$var_index_15]; } else { $var_value_15 = ''; }
							if ($var_index_16 != '') { $var_value_16 = $value[$var_index_16]; } else { $var_value_16 = ''; }
							if ($var_index_17 != '') { $var_value_17 = $value[$var_index_17]; } else { $var_value_17 = ''; }
							if ($var_index_18 != '') { $var_value_18 = $value[$var_index_18]; } else { $var_value_18 = ''; }
							if ($var_index_19 != '') { $var_value_19 = $value[$var_index_19]; } else { $var_value_19 = ''; }
							if ($var_index_20 != '') { $var_value_20 = $value[$var_index_20]; } else { $var_value_20 = ''; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else { $var_idx_01 = $var_value_01; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else { $var_idx_02 = $var_value_02; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else { $var_idx_03 = $var_value_03; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else { $var_idx_04 = $var_value_04; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else { $var_idx_05 = $var_value_05; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else { $var_idx_06 = $var_value_06; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else { $var_idx_07 = $var_value_07; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else { $var_idx_08 = $var_value_08; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else { $var_idx_09 = $var_value_09; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else { $var_idx_10 = $var_value_10; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else { $var_idx_11 = $var_value_11; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else { $var_idx_12 = $var_value_12; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else { $var_idx_13 = $var_value_13; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else { $var_idx_14 = $var_value_14; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else { $var_idx_15 = $var_value_15; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else { $var_idx_16 = $var_value_16; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else { $var_idx_17 = $var_value_17; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else { $var_idx_18 = $var_value_18; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else { $var_idx_19 = $var_value_19; }
							#-------------------------------------------------------------------------#
							# Validacion de las variables y consulta a otros modulos
							if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_state,
									d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_certified') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
									d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else { $var_idx_20 = $var_value_20; }
							#-------------------------------------------------------------------------#
						endforeach;
					} else {
						$var_idx_01 = ''; $var_idx_02 = ''; $var_idx_03 = ''; $var_idx_04 = ''; $var_idx_05 = '';
						$var_idx_06 = ''; $var_idx_07 = ''; $var_idx_08 = ''; $var_idx_09 = ''; $var_idx_10 = '';
						$var_idx_11 = ''; $var_idx_12 = ''; $var_idx_13 = ''; $var_idx_14 = ''; $var_idx_15 = '';
						$var_idx_16 = ''; $var_idx_17 = ''; $var_idx_18 = ''; $var_idx_19 = ''; $var_idx_20 = '';
					}
					#-------------------------------------------------------------------------#
					$var_concept = '' .
						$var_text_01 . ' ' . $var_idx_01 . ' ' . $var_text_02 . ' ' . $var_idx_02 . ' ' .
						$var_text_03 . ' ' . $var_idx_03 . ' ' . $var_text_04 . ' ' . $var_idx_04 . ' ' .
						$var_text_05 . ' ' . $var_idx_05 . ' ' . $var_text_06 . ' ' . $var_idx_06 . ' ' .
						$var_text_07 . ' ' . $var_idx_07 . ' ' . $var_text_08 . ' ' . $var_idx_08 . ' ' .
						$var_text_09 . ' ' . $var_idx_09 . ' ' . $var_text_10 . ' ' . $var_idx_10 . ' ' .
						$var_text_11 . ' ' . $var_idx_11 . ' ' . $var_text_12 . ' ' . $var_idx_12 . ' ' .
						$var_text_13 . ' ' . $var_idx_13 . ' ' . $var_text_14 . ' ' . $var_idx_14 . ' ' .
						$var_text_15 . ' ' . $var_idx_15 . ' ' . $var_text_16 . ' ' . $var_idx_16 . ' ' .
						$var_text_17 . ' ' . $var_idx_17 . ' ' . $var_text_18 . ' ' . $var_idx_18 . ' ' .
						$var_text_19 . ' ' . $var_idx_19 . ' ' . $var_text_20 . ' ' . $var_idx_20;
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_camera_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");

				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_camera_m_deleted . " = '1' GROUP BY " . d_azp_ibn_camera_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_camera_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_camera,
							d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_camera_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_camera_id_azp_ibn_camera];
								$var_cedula2 = $value2[d_azp_ibn_camera_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_camera_t_acount => $var_union, d_azp_ibn_camera_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_fl_remove(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_id_fl_remove'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_id_fl_remove']);
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
				$sql_id = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true != $sql_id) { throw new Exception('<b>Error:</b> El registro que está removiendo no se encuentra registrado.'); }
				#-------------------------------------------------------------------------#
				# Verificar si el registro existe en la tabla
				$sql_id = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "' AND " . d_azp_ibn_capture_m_deleted . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $sql_id) { foreach ($sql_id as $key => $value): throw new Exception('<b>Error:</b> El registro que está procesando ya se encuentra removido.'); endforeach; }
				#-------------------------------------------------------------------------#
				# Verificar si el registro fue creado por el usuario root
				$sql_session = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "' AND " . d_azp_ibn_capture_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_capture_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_capture, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "' AND " . d_azp_ibn_capture_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) { throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.'); }
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_camera_fl_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_fl_remove($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Control para caracteres especiales recibidos
				$empty_id = $this->db->scape($data['field_id_fl_remove']);
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_capture_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_capture, $var_array, d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_camera_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_level . " = '2'");
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
		final public function sql_azp_ibn_camera_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_remove($data);
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
				$var_array = array(d_azp_ibn_camera_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_camera_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_level . " = '2'");
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
		final public function sql_azp_ibn_camera_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_restore($data);
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
				$var_array = array(d_azp_ibn_camera_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_update(array $data) {
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
				if (!isset($data['field_up_act_economic'])) { throw new Exception('<b>Error:</b> El campo de act economica esta prohibido modificar.'); }
				if (!isset($data['field_up_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				if (!isset($data['field_up_assessment'])) { throw new Exception('<b>Error:</b> El campo de gravamen esta prohibido modificar.'); }
				if (!isset($data['field_up_business_name'])) { throw new Exception('<b>Error:</b> El campo de razon social esta prohibido modificar.'); }
				if (!isset($data['field_up_causal_feasibility'])) { throw new Exception('<b>Error:</b> El campo de causal viabilidad esta prohibido modificar.'); }
				if (!isset($data['field_up_city'])) { throw new Exception('<b>Error:</b> El campo de ciudad esta prohibido modificar.'); }
				if (!isset($data['field_up_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_up_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_up_establishment'])) { throw new Exception('<b>Error:</b> El campo de establecimiento esta prohibido modificar.'); }
				if (!isset($data['field_up_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de cedula esta prohibido modificar.'); }
				if (!isset($data['field_up_legal_representative'])) { throw new Exception('<b>Error:</b> El campo de representante legal esta prohibido modificar.'); }
				if (!isset($data['field_up_legal_rp_certificate'])) { throw new Exception('<b>Error:</b> El campo de cedula rp legal esta prohibido modificar.'); }
				if (!isset($data['field_up_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_up_municipality'])) { throw new Exception('<b>Error:</b> El campo de municipio esta prohibido modificar.'); }
				if (!isset($data['field_up_nit'])) { throw new Exception('<b>Error:</b> El campo de nit esta prohibido modificar.'); }
				if (!isset($data['field_up_nro_registration'])) { throw new Exception('<b>Error:</b> El campo de matricula esta prohibido modificar.'); }
				if (!isset($data['field_up_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_phone'])) { throw new Exception('<b>Error:</b> El campo de telefono esta prohibido modificar.'); }
				if (!isset($data['field_up_renewal_date'])) { throw new Exception('<b>Error:</b> El campo de fecha renovacion esta prohibido modificar.'); }
				if (!isset($data['field_up_rup'])) { throw new Exception('<b>Error:</b> El campo de rup esta prohibido modificar.'); }
				if (!isset($data['field_up_total_active'])) { throw new Exception('<b>Error:</b> El campo de activo total esta prohibido modificar.'); }
				if (!isset($data['field_up_type_company'])) { throw new Exception('<b>Error:</b> El campo de tipo de sociedad esta prohibido modificar.'); }
				if (!isset($data['field_up_type_organization'])) { throw new Exception('<b>Error:</b> El campo de tipo de organizacion total esta prohibido modificar.'); }
				if (!isset($data['field_up_viable'])) { throw new Exception('<b>Error:</b> El campo de viable esta prohibido modificar.'); }
				if (!isset($data['field_up_well_viable'])) { throw new Exception('<b>Error:</b> El campo de bien viable esta prohibido modificar.'); }
				if (!isset($data['field_up_year'])) { throw new Exception('<b>Error:</b> El campo de año esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_certified'])) { throw new Exception('<b>Error:</b> El campo de tipo de certificado esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_concept'])) { throw new Exception('<b>Error:</b> El campo de tipo de concepto esta prohibido modificar.'); }

				if (!isset($data['field_up_ibn_observation'])) { throw new Exception('<b>Error:</b> El campo de lista observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_st_returnable'])) { throw new Exception('<b>Error:</b> El campo de reembolsable esta prohibido modificar.'); }
				if (!isset($data['field_up_st_receipt'])) { throw new Exception('<b>Error:</b> El campo de recibo esta prohibido modificar.'); }
				if (!isset($data['field_up_st_date'])) { throw new Exception('<b>Error:</b> El campo de fecha esta prohibido modificar.'); }
				if (!isset($data['field_up_st_value'])) { throw new Exception('<b>Error:</b> El campo de valor de certificado esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_act_economic = $this->db->scape($data['field_up_act_economic']);
				$empty_address = $this->db->scape($data['field_up_address']);
				$empty_assessment = $this->db->scape($data['field_up_assessment']);
				$empty_business_name = $this->db->scape($data['field_up_business_name']);
				$empty_causal_feasibility = $this->db->scape($data['field_up_causal_feasibility']);
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_establishment = $this->db->scape($data['field_up_establishment']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_legal_representative = $this->db->scape($data['field_up_legal_representative']);
				$empty_legal_rp_certificate = $this->db->scape($data['field_up_legal_rp_certificate']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_municipality = $this->db->scape($data['field_up_municipality']);
				$empty_nit = $this->db->scape($data['field_up_nit']);
				$empty_nro_registration = $this->db->scape($data['field_up_nro_registration']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_phone = $this->db->scape($data['field_up_phone']);
				$empty_renewal_date = $this->db->scape($data['field_up_renewal_date']);
				$empty_rup = $this->db->scape($data['field_up_rup']);
				$empty_total_active = $this->db->scape($data['field_up_total_active']);
				$empty_type_company = $this->db->scape($data['field_up_type_company']);
				$empty_type_organization = $this->db->scape($data['field_up_type_organization']);
				$empty_viable = $this->db->scape($data['field_up_viable']);
				$empty_well_viable = $this->db->scape($data['field_up_well_viable']);
				$empty_year = $this->db->scape($data['field_up_year']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
				$empty_ibn_type_certified = $this->db->scape($data['field_up_ibn_type_certified']);
				$empty_ibn_type_concept = $this->db->scape($data['field_up_ibn_type_concept']);
				
				$empty_ibn_observation = $this->db->scape($data['field_up_ibn_observation']);
				$empty_st_returnable = $this->db->scape($data['field_up_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_up_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_up_st_date']);
				$empty_st_value = $this->db->scape($data['field_up_st_value']);
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
				/*if (Func::emp($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (!is_numeric($empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula solo permite numeros.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_identification) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_identification, ' ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite ningun espacio en blanco.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_identification)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de cedula no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_full_name) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_full_name, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_full_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de nombre no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				/*if (Func::emp($empty_nro_registration)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula es obligatorio.');
				}*/
				#---------------------------------------------#
				/*if (strlen($empty_nro_registration) > 255) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula permite maximo hasta 255 caracteres.');
				}*/
				#---------------------------------------------#
				/*if (strpos($empty_nro_registration, '  ')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula no permite tener más de un espacio en blanco seguido.');
				}*/
				#---------------------------------------------#
				/*if (preg_match('/^\s|\s$/', $empty_nro_registration)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de matricula no permite tener espacios en blanco al principio o al final.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_viable) || strtolower($empty_viable) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable es obligatorio.');
				}
				#---------------------------------------------#
				/*if (!is_numeric($empty_viable)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable solo permite numeros.');
				}*/
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_state) || strtolower($empty_ibn_state) == strtolower('seleccionar') || $empty_ibn_state == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_state)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ibn_type_concept) || strtolower($empty_ibn_type_concept) == strtolower('seleccionar') || $empty_ibn_type_concept == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_concept)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de concepto solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_camera_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "' AND " . d_azp_ibn_camera_m_level . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_session && false == $sql_level) {
					# Verificiar si el valor recibido de la sql es diferente del digitado
					throw new Exception('<b>Error:</b> No tienes suficientes permisos superiores para actualizar el registro.');
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_state = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_id_azp_ibn_state . " = '" . $empty_ibn_state . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_state) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_state) == '') { $sql_ibn_state[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_state[0][0]) != strtolower($empty_ibn_state)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_concept = $this->db->select('*', t_azp_ibn_type_concept, d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $empty_ibn_type_concept . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_concept) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_concept) == '') { $sql_ibn_type_concept[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_concept[0][0]) != strtolower($empty_ibn_type_concept)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de concepto seleccionado no se encuentra registrado.');
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
		final public function sql_azp_ibn_camera_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_update($data);
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
				$empty_act_economic = $this->db->scape($data['field_up_act_economic']);
				$empty_address = $this->db->scape($data['field_up_address']);
				$empty_assessment = $this->db->scape($data['field_up_assessment']);
				$empty_business_name = $this->db->scape($data['field_up_business_name']);
				$empty_causal_feasibility = $this->db->scape($data['field_up_causal_feasibility']);
				$empty_city = $this->db->scape($data['field_up_city']);
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_establishment = $this->db->scape($data['field_up_establishment']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_legal_representative = $this->db->scape($data['field_up_legal_representative']);
				$empty_legal_rp_certificate = $this->db->scape($data['field_up_legal_rp_certificate']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_municipality = $this->db->scape($data['field_up_municipality']);
				$empty_nit = $this->db->scape($data['field_up_nit']);
				$empty_nro_registration = $this->db->scape($data['field_up_nro_registration']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_phone = $this->db->scape($data['field_up_phone']);
				$empty_renewal_date = $this->db->scape($data['field_up_renewal_date']);
				$empty_rup = $this->db->scape($data['field_up_rup']);
				$empty_total_active = $this->db->scape($data['field_up_total_active']);
				$empty_type_company = $this->db->scape($data['field_up_type_company']);
				$empty_type_organization = $this->db->scape($data['field_up_type_organization']);
				$empty_viable = $this->db->scape($data['field_up_viable']);
				//$empty_well_viable = $this->db->scape($data['field_up_well_viable']);
				$empty_year = $this->db->scape($data['field_up_year']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
				$empty_ibn_type_certified = $this->db->scape($data['field_up_ibn_type_certified']);
				$empty_ibn_type_concept = $this->db->scape($data['field_up_ibn_type_concept']);
				
				$empty_ibn_observation = $this->db->scape($data['field_up_ibn_observation']);
				$empty_st_returnable = $this->db->scape($data['field_up_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_up_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_up_st_date']);
				$empty_st_value = $this->db->scape($data['field_up_st_value']);
				#-------------------------------------------------------------------------#
				if ($empty_viable != 'SI' || $empty_viable != 'NO') { $empty_well_viable = ''; }
				if ($empty_viable == 'SI') { $empty_well_viable = 'RM' . ' ' . $empty_nro_registration . ' ' . 'DE' . ' ' . $empty_city; }
				if ($empty_viable == 'NO') { $empty_well_viable = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql_select = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql_select) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql_select as $key_sql_select):
						$var_array = array(
							d_azs_ibn_camera_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_camera_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_camera_m_date_created => DATE_HOUR,
							d_azs_ibn_camera_m_date_modified => DATE_HOUR,
							d_azs_ibn_camera_m_deleted => $key_sql_select[d_azp_ibn_camera_m_deleted],
							d_azs_ibn_camera_m_description => $key_sql_select[d_azp_ibn_camera_m_description],
							d_azs_ibn_camera_m_level => $key_sql_select[d_azp_ibn_camera_m_level],
							d_azs_ibn_camera_m_status => $key_sql_select[d_azp_ibn_camera_m_status],
							d_azs_ibn_camera_m_temp => $key_sql_select[d_azp_ibn_camera_m_temp],
							d_azs_ibn_camera_t_act_economic => strtoupper($key_sql_select[d_azp_ibn_camera_t_act_economic]),
							d_azs_ibn_camera_t_address => strtoupper($key_sql_select[d_azp_ibn_camera_t_address]),
							d_azs_ibn_camera_t_assessment => strtoupper($key_sql_select[d_azp_ibn_camera_t_assessment]),
							d_azs_ibn_camera_t_business_name => strtoupper($key_sql_select[d_azp_ibn_camera_t_business_name]),
							d_azs_ibn_camera_t_causal_feasibility => strtoupper($key_sql_select[d_azp_ibn_camera_t_causal_feasibility]),
							d_azs_ibn_camera_t_city => strtoupper($key_sql_select[d_azp_ibn_camera_t_city]),
							d_azs_ibn_camera_t_comment_legal => strtoupper($key_sql_select[d_azp_ibn_camera_t_comment_legal]),
							d_azs_ibn_camera_t_concept => strtoupper($key_sql_select[d_azp_ibn_camera_t_concept]),
							d_azs_ibn_camera_t_consecutive => strtoupper($key_sql_select[d_azp_ibn_camera_t_consecutive]),
							d_azs_ibn_camera_t_department => strtoupper($key_sql_select[d_azp_ibn_camera_t_department]),
							d_azs_ibn_camera_t_establishment => strtoupper($key_sql_select[d_azp_ibn_camera_t_establishment]),
							d_azs_ibn_camera_t_full_name => strtoupper($key_sql_select[d_azp_ibn_camera_t_full_name]),
							d_azs_ibn_camera_t_identification => strtoupper($key_sql_select[d_azp_ibn_camera_t_identification]),
							d_azs_ibn_camera_t_legal_representative => strtoupper($key_sql_select[d_azp_ibn_camera_t_legal_representative]),
							d_azs_ibn_camera_t_legal_rp_certificate => strtoupper($key_sql_select[d_azp_ibn_camera_t_legal_rp_certificate]),
							d_azs_ibn_camera_t_limitation => strtoupper($key_sql_select[d_azp_ibn_camera_t_limitation]),
							d_azs_ibn_camera_t_municipality => strtoupper($key_sql_select[d_azp_ibn_camera_t_municipality]),
							d_azs_ibn_camera_t_nit => strtoupper($key_sql_select[d_azp_ibn_camera_t_nit]),
							d_azs_ibn_camera_t_nro_registration => strtoupper($key_sql_select[d_azp_ibn_camera_t_nro_registration]),
							d_azs_ibn_camera_t_observation => strtoupper($key_sql_select[d_azp_ibn_camera_t_observation]),
							d_azs_ibn_camera_t_phone => strtoupper($key_sql_select[d_azp_ibn_camera_t_phone]),
							d_azs_ibn_camera_t_renewal_date => strtoupper($key_sql_select[d_azp_ibn_camera_t_renewal_date]),
							d_azs_ibn_camera_t_rup => strtoupper($key_sql_select[d_azp_ibn_camera_t_rup]),
							d_azs_ibn_camera_t_total_active => strtoupper($key_sql_select[d_azp_ibn_camera_t_total_active]),
							d_azs_ibn_camera_t_type_company => strtoupper($key_sql_select[d_azp_ibn_camera_t_type_company]),
							d_azs_ibn_camera_t_type_organization => strtoupper($key_sql_select[d_azp_ibn_camera_t_type_organization]),
							d_azs_ibn_camera_t_viable => strtoupper($key_sql_select[d_azp_ibn_camera_t_viable]),
							d_azs_ibn_camera_t_well_viable => strtoupper($key_sql_select[d_azp_ibn_camera_t_well_viable]),
							d_azs_ibn_camera_t_year => strtoupper($key_sql_select[d_azp_ibn_camera_t_year]),
							d_azs_ibn_camera_t_st_returnable => strtoupper($key_sql_select[d_azp_ibn_camera_t_st_returnable]),
							d_azs_ibn_camera_t_st_receipt => strtoupper($key_sql_select[d_azp_ibn_camera_t_st_receipt]),
							d_azs_ibn_camera_t_st_date => strtoupper($key_sql_select[d_azp_ibn_camera_t_st_date]),
							d_azs_ibn_camera_t_st_value => strtoupper($key_sql_select[d_azp_ibn_camera_t_st_value]),
							d_azs_ibn_camera_u_ibn_control_panel => strtoupper($key_sql_select[d_azp_ibn_camera_v_id_azp_ibn_control_panel]),
							d_azs_ibn_camera_u_ibn_state => strtoupper($key_sql_select[d_azp_ibn_camera_v_id_azp_ibn_state]),
							d_azs_ibn_camera_u_ibn_type_certified => strtoupper($key_sql_select[d_azp_ibn_camera_v_id_azp_ibn_type_certified]),
							d_azs_ibn_camera_u_ibn_type_concept => strtoupper($key_sql_select[d_azp_ibn_camera_v_id_azp_ibn_type_concept]),
							d_azs_ibn_camera_v_id_azp_ibn_camera => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_camera, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_camera_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_camera_m_date_modified => DATE_HOUR,
					d_azp_ibn_camera_m_description => $empty_description,
					d_azp_ibn_camera_m_status => $empty_state,
					d_azp_ibn_camera_t_act_economic => strtoupper($empty_act_economic),
					d_azp_ibn_camera_t_address => strtoupper($empty_address),
					d_azp_ibn_camera_t_assessment => strtoupper($empty_assessment),
					d_azp_ibn_camera_t_business_name => strtoupper($empty_business_name),
					d_azp_ibn_camera_t_causal_feasibility => strtoupper($empty_causal_feasibility),
					d_azp_ibn_camera_t_city => strtoupper($empty_city),
					d_azp_ibn_camera_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_camera_t_concept => strtoupper($empty_concept),
					//d_azp_ibn_camera_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_camera_t_department => strtoupper($empty_department),
					d_azp_ibn_camera_t_establishment => strtoupper($empty_establishment),
					d_azp_ibn_camera_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_camera_t_identification => strtoupper($empty_identification),
					d_azp_ibn_camera_t_legal_representative => strtoupper($empty_legal_representative),
					d_azp_ibn_camera_t_legal_rp_certificate => strtoupper($empty_legal_rp_certificate),
					d_azp_ibn_camera_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_camera_t_municipality => strtoupper($empty_municipality),
					d_azp_ibn_camera_t_nit => strtoupper($empty_nit),
					d_azp_ibn_camera_t_nro_registration => strtoupper($empty_nro_registration),
					d_azp_ibn_camera_t_observation => strtoupper($empty_observation),
					d_azp_ibn_camera_t_phone => strtoupper($empty_phone),
					d_azp_ibn_camera_t_renewal_date => strtoupper($empty_renewal_date),
					d_azp_ibn_camera_t_rup => strtoupper($empty_rup),
					d_azp_ibn_camera_t_total_active => strtoupper($empty_total_active),
					d_azp_ibn_camera_t_type_company => strtoupper($empty_type_company),
					d_azp_ibn_camera_t_type_organization => strtoupper($empty_type_organization),
					d_azp_ibn_camera_t_viable => strtoupper($empty_viable),
					d_azp_ibn_camera_t_well_viable => strtoupper($empty_well_viable),
					d_azp_ibn_camera_t_year => strtoupper($empty_year),
					d_azp_ibn_camera_t_st_returnable => strtoupper($empty_st_returnable),
					d_azp_ibn_camera_t_st_receipt => strtoupper($empty_st_receipt),
					d_azp_ibn_camera_t_st_date => strtoupper($empty_st_date),
					d_azp_ibn_camera_t_st_value => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_st_value))),
					//d_azp_ibn_camera_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_camera_v_id_azp_ibn_observation => $empty_ibn_observation,
					d_azp_ibn_camera_v_id_azp_ibn_state => $empty_ibn_state,
					d_azp_ibn_camera_v_id_azp_ibn_type_certified => $empty_ibn_type_certified,
					d_azp_ibn_camera_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_camera_v_id_azp_ibn_control_panel];

						$var_rg_reg = $value[d_azp_ibn_camera_t_nro_registration];
						$var_rg_via = $value[d_azp_ibn_camera_t_viable];
					endforeach;
				} else { $var_rg_cp_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_rg_cp_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cl_id = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_rg_cl_id = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				//$var_sql = $this->db->select('*', t_azp_ibn_regulation, d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "' AND " . d_azp_ibn_regulation_t_selector . " = 'SI'");
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_id_azp_ibn_regulation . " AS 'lbl_azp_ibn_regulation_id_azp_ibn_regulation',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_created . " AS 'lbl_azp_ibn_regulation_m_date_created',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_date_modified . " AS 'lbl_azp_ibn_regulation_m_date_modified',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_description . " AS 'lbl_azp_ibn_regulation_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
						tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " AS 'lbl_azp_ibn_regulation_t_selector',
						tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . " AS 'lbl_azp_ibn_calification_id_azp_ibn_calification',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_concept . " AS 'lbl_azp_ibn_calification_t_concept',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_determination . " AS 'lbl_azp_ibn_calification_t_determination',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_principal . " AS 'lbl_azp_ibn_calification_t_principal',
						tc_azp_ibn_calification." . d_azp_ibn_calification_t_secondary . " AS 'lbl_azp_ibn_calification_t_secondary',
						tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_t_name . " AS 'lbl_azp_ibn_type_condition_t_name'
					FROM " . t_azp_ibn_regulation . " tc_azp_ibn_regulation
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_created . "
							= tc_azp_user_created." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_by_modified . "
							= tc_azp_user_modified." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_level . "
							= tc_azp_sys_level." . d_azp_sys_level_t_value . "
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . "
							= tc_azp_sys_state." . d_azp_sys_state_t_value . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_deleted . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_m_status . " = '1'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_t_selector . " = 'SI'
						AND tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . " = '" . $var_rg_cl_id . "'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cf_id = $value['lbl_azp_ibn_calification_id_azp_ibn_calification'];
						$var_rg_cf_pos = $value['lbl_azp_ibn_calification_t_principal'];
						$var_rg_cf_neg = $value['lbl_azp_ibn_calification_t_secondary'];
						$var_pc_one = $var_rg_cf_neg; $var_pc_two = $var_rg_cf_neg; $var_pc_three = $var_rg_cf_neg;
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_rg_cf_id == 2) { $var_rg_cf_2 = 2; } else if ($var_rg_cf_id == 3) { $var_rg_cf_3 = 3; } else { $var_rg_cf_2 = 0; $var_rg_cf_3 = 0; }
					endforeach;
				}
				#-------------------------------------------------------------------------#
				if ($var_rg_cf_2 == 2) { if ($var_rg_via == 'SI') { $var_pc_two = $var_rg_cf_pos; } else { $var_pc_two = $var_rg_cf_neg; } } else { $var_pc_two = $var_rg_cf_neg; }
				if ($var_rg_cf_3 == 3) { if ($var_rg_reg != '') { $var_pc_three = $var_rg_cf_pos; } else { $var_pc_three = $var_rg_cf_neg; } } else { $var_pc_three = $var_rg_cf_neg; }
				#-------------------------------------------------------------------------#
				if ($var_pc_two == $var_rg_cf_neg) { $var_policy_viability = $var_rg_cf_neg; } else if ($var_pc_two == $var_rg_cf_pos) { $var_policy_viability = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				if ($var_pc_three == $var_rg_cf_neg) { $var_policy_effective = $var_rg_cf_neg; } else if ($var_pc_three == $var_rg_cf_pos) { $var_policy_effective = $var_rg_cf_pos; }
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_camera_v_id_azp_ibn_control_panel];
					endforeach;
				} else { $var_ibn_control_panel = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_id_client = $value[d_azp_ibn_control_panel_v_id_azp_ibn_client];
					endforeach;
				} else { $var_id_client = 0; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_concept." . d_azp_ibn_concept_id_azp_ibn_concept . " AS 'lbl_azp_ibn_concept_id_azp_ibn_concept',
						tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
						tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_created . " AS 'lbl_azp_ibn_concept_m_date_created',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_date_modified . " AS 'lbl_azp_ibn_concept_m_date_modified',
						tc_azp_ibn_concept." . d_azp_ibn_concept_m_description . " AS 'lbl_azp_ibn_concept_m_description',
						tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
						tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_01 . " AS 'lbl_azp_ibn_concept_t_land_01',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_02 . " AS 'lbl_azp_ibn_concept_t_land_02',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_03 . " AS 'lbl_azp_ibn_concept_t_land_03',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_04 . " AS 'lbl_azp_ibn_concept_t_land_04',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_05 . " AS 'lbl_azp_ibn_concept_t_land_05',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_06 . " AS 'lbl_azp_ibn_concept_t_land_06',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_07 . " AS 'lbl_azp_ibn_concept_t_land_07',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_08 . " AS 'lbl_azp_ibn_concept_t_land_08',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_09 . " AS 'lbl_azp_ibn_concept_t_land_09',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_10 . " AS 'lbl_azp_ibn_concept_t_land_10',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_11 . " AS 'lbl_azp_ibn_concept_t_land_11',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_12 . " AS 'lbl_azp_ibn_concept_t_land_12',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_13 . " AS 'lbl_azp_ibn_concept_t_land_13',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_14 . " AS 'lbl_azp_ibn_concept_t_land_14',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_15 . " AS 'lbl_azp_ibn_concept_t_land_15',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_16 . " AS 'lbl_azp_ibn_concept_t_land_16',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_17 . " AS 'lbl_azp_ibn_concept_t_land_17',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_18 . " AS 'lbl_azp_ibn_concept_t_land_18',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_19 . " AS 'lbl_azp_ibn_concept_t_land_19',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_land_20 . " AS 'lbl_azp_ibn_concept_t_land_20',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_01 . " AS 'lbl_azp_ibn_concept_t_text_01',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_02 . " AS 'lbl_azp_ibn_concept_t_text_02',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_03 . " AS 'lbl_azp_ibn_concept_t_text_03',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_04 . " AS 'lbl_azp_ibn_concept_t_text_04',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_05 . " AS 'lbl_azp_ibn_concept_t_text_05',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_06 . " AS 'lbl_azp_ibn_concept_t_text_06',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_07 . " AS 'lbl_azp_ibn_concept_t_text_07',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_08 . " AS 'lbl_azp_ibn_concept_t_text_08',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_09 . " AS 'lbl_azp_ibn_concept_t_text_09',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_10 . " AS 'lbl_azp_ibn_concept_t_text_10',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_11 . " AS 'lbl_azp_ibn_concept_t_text_11',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_12 . " AS 'lbl_azp_ibn_concept_t_text_12',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_13 . " AS 'lbl_azp_ibn_concept_t_text_13',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_14 . " AS 'lbl_azp_ibn_concept_t_text_14',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_15 . " AS 'lbl_azp_ibn_concept_t_text_15',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_16 . " AS 'lbl_azp_ibn_concept_t_text_16',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_17 . " AS 'lbl_azp_ibn_concept_t_text_17',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_18 . " AS 'lbl_azp_ibn_concept_t_text_18',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_19 . " AS 'lbl_azp_ibn_concept_t_text_19',
						tc_azp_ibn_concept." . d_azp_ibn_concept_t_text_20 . " AS 'lbl_azp_ibn_concept_t_text_20',
						tc_azp_ibn_client." . d_azp_ibn_client_t_name . " AS 'lbl_azp_ibn_client_t_name',
						tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
					FROM " . t_azp_ibn_concept . " tc_azp_ibn_concept
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_user . " tc_azp_user_created
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_created . "
							= tc_azp_user_created." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_user . " tc_azp_user_modified
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_by_modified . "
							= tc_azp_user_modified." . d_azp_user_id_azp_user . "
					INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_level . "
							= tc_azp_sys_level." . d_azp_sys_level_t_value . "
					INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_m_status . "
							= tc_azp_sys_state." . d_azp_sys_state_t_value . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					-- ---------------------------------------------------------------
					INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
							= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
					-- ---------------------------------------------------------------
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '1'
				");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_land_01 = $value['lbl_azp_ibn_concept_t_land_01'];
						$var_land_02 = $value['lbl_azp_ibn_concept_t_land_02'];
						$var_land_03 = $value['lbl_azp_ibn_concept_t_land_03'];
						$var_land_04 = $value['lbl_azp_ibn_concept_t_land_04'];
						$var_land_05 = $value['lbl_azp_ibn_concept_t_land_05'];
						$var_land_06 = $value['lbl_azp_ibn_concept_t_land_06'];
						$var_land_07 = $value['lbl_azp_ibn_concept_t_land_07'];
						$var_land_08 = $value['lbl_azp_ibn_concept_t_land_08'];
						$var_land_09 = $value['lbl_azp_ibn_concept_t_land_09'];
						$var_land_10 = $value['lbl_azp_ibn_concept_t_land_10'];
						$var_land_11 = $value['lbl_azp_ibn_concept_t_land_11'];
						$var_land_12 = $value['lbl_azp_ibn_concept_t_land_12'];
						$var_land_13 = $value['lbl_azp_ibn_concept_t_land_13'];
						$var_land_14 = $value['lbl_azp_ibn_concept_t_land_14'];
						$var_land_15 = $value['lbl_azp_ibn_concept_t_land_15'];
						$var_land_16 = $value['lbl_azp_ibn_concept_t_land_16'];
						$var_land_17 = $value['lbl_azp_ibn_concept_t_land_17'];
						$var_land_18 = $value['lbl_azp_ibn_concept_t_land_18'];
						$var_land_19 = $value['lbl_azp_ibn_concept_t_land_19'];
						$var_land_20 = $value['lbl_azp_ibn_concept_t_land_20'];
						$var_text_01 = $value['lbl_azp_ibn_concept_t_text_01'];
						$var_text_02 = $value['lbl_azp_ibn_concept_t_text_02'];
						$var_text_03 = $value['lbl_azp_ibn_concept_t_text_03'];
						$var_text_04 = $value['lbl_azp_ibn_concept_t_text_04'];
						$var_text_05 = $value['lbl_azp_ibn_concept_t_text_05'];
						$var_text_06 = $value['lbl_azp_ibn_concept_t_text_06'];
						$var_text_07 = $value['lbl_azp_ibn_concept_t_text_07'];
						$var_text_08 = $value['lbl_azp_ibn_concept_t_text_08'];
						$var_text_09 = $value['lbl_azp_ibn_concept_t_text_09'];
						$var_text_10 = $value['lbl_azp_ibn_concept_t_text_10'];
						$var_text_11 = $value['lbl_azp_ibn_concept_t_text_11'];
						$var_text_12 = $value['lbl_azp_ibn_concept_t_text_12'];
						$var_text_13 = $value['lbl_azp_ibn_concept_t_text_13'];
						$var_text_14 = $value['lbl_azp_ibn_concept_t_text_14'];
						$var_text_15 = $value['lbl_azp_ibn_concept_t_text_15'];
						$var_text_16 = $value['lbl_azp_ibn_concept_t_text_16'];
						$var_text_17 = $value['lbl_azp_ibn_concept_t_text_17'];
						$var_text_18 = $value['lbl_azp_ibn_concept_t_text_18'];
						$var_text_19 = $value['lbl_azp_ibn_concept_t_text_19'];
						$var_text_20 = $value['lbl_azp_ibn_concept_t_text_20'];
					endforeach;
				} else {
					$var_land_01 = '0'; $var_land_02 = '0'; $var_land_03 = '0'; $var_land_04 = '0'; $var_land_05 = '0';
					$var_land_06 = '0'; $var_land_07 = '0'; $var_land_08 = '0'; $var_land_09 = '0'; $var_land_10 = '0';
					$var_land_11 = '0'; $var_land_12 = '0'; $var_land_13 = '0'; $var_land_14 = '0'; $var_land_15 = '0';
					$var_land_16 = '0'; $var_land_17 = '0'; $var_land_18 = '0'; $var_land_19 = '0'; $var_land_20 = '0';
					#-------------------------------------------------------------------------#
					$var_text_01 = ''; $var_text_02 = ''; $var_text_03 = ''; $var_text_04 = ''; $var_text_05 = '';
					$var_text_06 = ''; $var_text_07 = ''; $var_text_08 = ''; $var_text_09 = ''; $var_text_10 = '';
					$var_text_11 = ''; $var_text_12 = ''; $var_text_13 = ''; $var_text_14 = ''; $var_text_15 = '';
					$var_text_16 = ''; $var_text_17 = ''; $var_text_18 = ''; $var_text_19 = ''; $var_text_20 = '';
				}
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_01 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_01 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_01 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_02 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_02 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_02 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_03 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_03 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_03 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_04 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_04 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_04 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_05 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_05 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_05 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_06 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_06 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_06 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_07 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_07 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_07 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_08 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_08 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_08 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_09 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_09 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_09 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_10 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_10 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_10 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_11 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_11 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_11 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_12 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_12 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_12 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_13 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_13 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_13 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_14 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_14 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_14 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_15 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_15 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_15 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_16 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_16 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_16 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_17 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_17 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_17 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_18 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_18 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_18 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_19 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_19 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_19 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_table_field, d_azp_ibn_table_field_id_azp_ibn_table_field . " = '" . $var_land_20 . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) { foreach ($var_sql as $key): $var_index_20 = $key[d_azp_ibn_table_field_t_index]; endforeach; } else { $var_index_20 = ''; }
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_camera, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Control de validacion de variables y asignacion de valores a nuevas variables
						if ($var_index_01 != '') { $var_value_01 = $value[$var_index_01]; } else { $var_value_01 = ''; }
						if ($var_index_02 != '') { $var_value_02 = $value[$var_index_02]; } else { $var_value_02 = ''; }
						if ($var_index_03 != '') { $var_value_03 = $value[$var_index_03]; } else { $var_value_03 = ''; }
						if ($var_index_04 != '') { $var_value_04 = $value[$var_index_04]; } else { $var_value_04 = ''; }
						if ($var_index_05 != '') { $var_value_05 = $value[$var_index_05]; } else { $var_value_05 = ''; }
						if ($var_index_06 != '') { $var_value_06 = $value[$var_index_06]; } else { $var_value_06 = ''; }
						if ($var_index_07 != '') { $var_value_07 = $value[$var_index_07]; } else { $var_value_07 = ''; }
						if ($var_index_08 != '') { $var_value_08 = $value[$var_index_08]; } else { $var_value_08 = ''; }
						if ($var_index_09 != '') { $var_value_09 = $value[$var_index_09]; } else { $var_value_09 = ''; }
						if ($var_index_10 != '') { $var_value_10 = $value[$var_index_10]; } else { $var_value_10 = ''; }
						if ($var_index_11 != '') { $var_value_11 = $value[$var_index_11]; } else { $var_value_11 = ''; }
						if ($var_index_12 != '') { $var_value_12 = $value[$var_index_12]; } else { $var_value_12 = ''; }
						if ($var_index_13 != '') { $var_value_13 = $value[$var_index_13]; } else { $var_value_13 = ''; }
						if ($var_index_14 != '') { $var_value_14 = $value[$var_index_14]; } else { $var_value_14 = ''; }
						if ($var_index_15 != '') { $var_value_15 = $value[$var_index_15]; } else { $var_value_15 = ''; }
						if ($var_index_16 != '') { $var_value_16 = $value[$var_index_16]; } else { $var_value_16 = ''; }
						if ($var_index_17 != '') { $var_value_17 = $value[$var_index_17]; } else { $var_value_17 = ''; }
						if ($var_index_18 != '') { $var_value_18 = $value[$var_index_18]; } else { $var_value_18 = ''; }
						if ($var_index_19 != '') { $var_value_19 = $value[$var_index_19]; } else { $var_value_19 = ''; }
						if ($var_index_20 != '') { $var_value_20 = $value[$var_index_20]; } else { $var_value_20 = ''; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else { $var_idx_01 = $var_value_01; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else { $var_idx_02 = $var_value_02; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else { $var_idx_03 = $var_value_03; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else { $var_idx_04 = $var_value_04; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else { $var_idx_05 = $var_value_05; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else { $var_idx_06 = $var_value_06; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else { $var_idx_07 = $var_value_07; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else { $var_idx_08 = $var_value_08; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else { $var_idx_09 = $var_value_09; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else { $var_idx_10 = $var_value_10; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else { $var_idx_11 = $var_value_11; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else { $var_idx_12 = $var_value_12; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else { $var_idx_13 = $var_value_13; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else { $var_idx_14 = $var_value_14; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else { $var_idx_15 = $var_value_15; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else { $var_idx_16 = $var_value_16; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else { $var_idx_17 = $var_value_17; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else { $var_idx_18 = $var_value_18; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else { $var_idx_19 = $var_value_19; }
						#-------------------------------------------------------------------------#
						# Validacion de las variables y consulta a otros modulos
						if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_state') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_state,
								d_azp_ibn_state_id_azp_ibn_state . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_state_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_certified') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_certified,
								d_azp_ibn_type_certified_id_azp_ibn_type_certified . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_certified_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else { $var_idx_20 = $var_value_20; }
						#-------------------------------------------------------------------------#
					endforeach;
				} else {
					$var_idx_01 = ''; $var_idx_02 = ''; $var_idx_03 = ''; $var_idx_04 = ''; $var_idx_05 = '';
					$var_idx_06 = ''; $var_idx_07 = ''; $var_idx_08 = ''; $var_idx_09 = ''; $var_idx_10 = '';
					$var_idx_11 = ''; $var_idx_12 = ''; $var_idx_13 = ''; $var_idx_14 = ''; $var_idx_15 = '';
					$var_idx_16 = ''; $var_idx_17 = ''; $var_idx_18 = ''; $var_idx_19 = ''; $var_idx_20 = '';
				}
				#-------------------------------------------------------------------------#
				$var_concept = '' .
					$var_text_01 . ' ' . $var_idx_01 . ' ' . $var_text_02 . ' ' . $var_idx_02 . ' ' .
					$var_text_03 . ' ' . $var_idx_03 . ' ' . $var_text_04 . ' ' . $var_idx_04 . ' ' .
					$var_text_05 . ' ' . $var_idx_05 . ' ' . $var_text_06 . ' ' . $var_idx_06 . ' ' .
					$var_text_07 . ' ' . $var_idx_07 . ' ' . $var_text_08 . ' ' . $var_idx_08 . ' ' .
					$var_text_09 . ' ' . $var_idx_09 . ' ' . $var_text_10 . ' ' . $var_idx_10 . ' ' .
					$var_text_11 . ' ' . $var_idx_11 . ' ' . $var_text_12 . ' ' . $var_idx_12 . ' ' .
					$var_text_13 . ' ' . $var_idx_13 . ' ' . $var_text_14 . ' ' . $var_idx_14 . ' ' .
					$var_text_15 . ' ' . $var_idx_15 . ' ' . $var_text_16 . ' ' . $var_idx_16 . ' ' .
					$var_text_17 . ' ' . $var_idx_17 . ' ' . $var_text_18 . ' ' . $var_idx_18 . ' ' .
					$var_text_19 . ' ' . $var_idx_19 . ' ' . $var_text_20 . ' ' . $var_idx_20;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_camera_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_camera,
					d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_camera_m_deleted . " = '1' GROUP BY " . d_azp_ibn_camera_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_camera_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_camera,
							d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_camera_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_camera_id_azp_ibn_camera];
								$var_cedula2 = $value2[d_azp_ibn_camera_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_camera_t_acount => $var_union, d_azp_ibn_camera_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_camera, $var_array, d_azp_ibn_camera_id_azp_ibn_camera . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.', 'register' => $empty_id);
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_control_panel() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_m_deleted . " = '1' AND " . d_azp_ibn_control_panel_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_limitation() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_limitation,
				d_azp_ibn_limitation_m_deleted . " = '1' AND " .
				d_azp_ibn_limitation_m_status . " = '1' AND " .
				d_azp_ibn_limitation_v_id_azp_ibn_module . " = '1' "
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_state() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_m_deleted . " = '1' AND " .
				d_azp_ibn_state_m_status . " = '1' AND " .
				d_azp_ibn_state_v_id_azp_ibn_module . " = '1' "
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_certified() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_certified, d_azp_ibn_type_certified_m_deleted . " = '1' AND " . d_azp_ibn_type_certified_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_concept() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_m_deleted . " = '1' AND " .
				d_azp_ibn_type_concept_m_status . " = '1' AND " .
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '1'"
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_observation() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_observation,
				d_azp_ibn_observation_m_deleted . " = '1' AND " .
				d_azp_ibn_observation_v_id_azp_ibn_module . " = '1' AND " .
				d_azp_ibn_observation_m_status . " = '1' ORDER BY " .
				d_azp_ibn_observation_id_azp_ibn_observation . " ASC"
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_ibn_limitation() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_id_azp_ibn_limitation . " AS 'lbl_azp_ibn_limitation_id_azp_ibn_limitation',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_date_created . " AS 'lbl_azp_ibn_limitation_m_date_created',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_date_modified . " AS 'lbl_azp_ibn_limitation_m_date_modified',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_description . " AS 'lbl_azp_ibn_limitation_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_t_annotation . " AS 'lbl_azp_ibn_limitation_t_annotation',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_t_name . " AS 'lbl_azp_ibn_limitation_t_name',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_t_registered . " AS 'lbl_azp_ibn_limitation_t_registered',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_t_sentence_1 . " AS 'lbl_azp_ibn_limitation_t_sentence_1',
					tc_azp_ibn_limitation." . d_azp_ibn_limitation_t_sentence_2 . " AS 'lbl_azp_ibn_limitation_t_sentence_2',
					tc_azp_ibn_module." . d_azp_ibn_module_t_name . " AS 'lbl_azp_ibn_module_t_name'
				FROM " . t_azp_ibn_limitation . " tc_azp_ibn_limitation
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_limitation." . d_azp_ibn_limitation_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_deleted . " = '1'
					AND tc_azp_ibn_limitation." . d_azp_ibn_limitation_v_id_azp_ibn_module . " = '1'
				ORDER BY tc_azp_ibn_limitation." . d_azp_ibn_limitation_id_azp_ibn_limitation . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_research() {
			# Seleccionar los registros de la tabla
			return $this->db->select(d_azp_ibn_control_panel_t_code_research . " AS 'lbl_name'",
				t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $this->id . "'");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_limitation() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT " . d_azp_ibn_limitation_t_name . " AS 'lbl_azp_ibn_limitation_t_name'
				FROM " . t_azp_ibn_limitation . "
				WHERE " . d_azp_ibn_limitation_id_azp_ibn_limitation . " IN (" . $_GET['field_id'] . ")
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_type_concept_id() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					" . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					" . d_azp_ibn_type_concept_t_text . " AS 'lbl_azp_ibn_type_concept_t_text'
				FROM " . t_azp_ibn_type_concept . "
				WHERE " . d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $this->id . "'
					AND " . d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '1'"
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_type_concept_name() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					" . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					" . d_azp_ibn_type_concept_t_text . " AS 'lbl_azp_ibn_type_concept_t_text'
				FROM " . t_azp_ibn_type_concept . "
				WHERE " . d_azp_ibn_type_concept_t_name . " = '" . $_GET['field_text'] . "'
					AND " . d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '1'"
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_ibn_capture_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " AS 'lbl_azp_ibn_capture_id_azp_ibn_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_created . " AS 'lbl_azp_ibn_capture_m_date_created',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_modified . " AS 'lbl_azp_ibn_capture_m_date_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_description . " AS 'lbl_azp_ibn_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_document . " AS 'lbl_azp_ibn_capture_w_document',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_error . " AS 'lbl_azp_ibn_capture_w_error',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_folder . " AS 'lbl_azp_ibn_capture_w_folder',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_name . " AS 'lbl_azp_ibn_capture_w_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_route . " AS 'lbl_azp_ibn_capture_w_route',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_size . " AS 'lbl_azp_ibn_capture_w_size',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_tmp_name . " AS 'lbl_azp_ibn_capture_w_tmp_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_type . " AS 'lbl_azp_ibn_capture_w_type',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_module',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_cfpvw'
				FROM " . t_azp_ibn_capture . " tc_azp_ibn_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_camera . " tc_azp_ibn_camera
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " = '1'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " = '" . $this->id . "'
				ORDER BY tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_ibn_capture_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " AS 'lbl_azp_ibn_capture_id_azp_ibn_capture',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_created . " AS 'lbl_azp_ibn_capture_m_date_created',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_date_modified . " AS 'lbl_azp_ibn_capture_m_date_modified',
					tc_azp_ibn_capture." . d_azp_ibn_capture_m_description . " AS 'lbl_azp_ibn_capture_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_document . " AS 'lbl_azp_ibn_capture_w_document',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_error . " AS 'lbl_azp_ibn_capture_w_error',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_folder . " AS 'lbl_azp_ibn_capture_w_folder',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_name . " AS 'lbl_azp_ibn_capture_w_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_route . " AS 'lbl_azp_ibn_capture_w_route',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_size . " AS 'lbl_azp_ibn_capture_w_size',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_tmp_name . " AS 'lbl_azp_ibn_capture_w_tmp_name',
					tc_azp_ibn_capture." . d_azp_ibn_capture_w_type . " AS 'lbl_azp_ibn_capture_w_type',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_module',
					tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " AS 'lbl_azp_ibn_capture_v_id_azp_ibn_cfpvw'
				FROM " . t_azp_ibn_capture . " tc_azp_ibn_capture
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				-- ---------------------------------------------------------------
				INNER JOIN " . t_azp_ibn_camera . " tc_azp_ibn_camera
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_camera." . d_azp_ibn_camera_id_azp_ibn_camera . "
				-- ---------------------------------------------------------------
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $this->id . "'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_azp_ibn_camera_file(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_fl_id'])) { throw new Exception('<b>Error:</b> El campo de id esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				$empty_control = $this->db->scape($data['field_fl_control']);
				$empty_detection = $this->db->scape($data['field_fl_detection']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_fl_file']['name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				#-------------------------------------------------------------------------#
				$empty_tamanio = 1000; $empty_bytes = 1024;
				$empty_extension = array('pdf',);
				$empty_path_info = strtolower(pathinfo($empty_name, PATHINFO_EXTENSION));
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
				#---------------------------------------------#
				if (Func::emp($empty_name)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo es obligatorio.');
				}
				#---------------------------------------------#
				if (!in_array($empty_path_info, $empty_extension)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de archivo solo acepta formatos ' . implode(',', $empty_extension) . '.');
				}
				#---------------------------------------------#
				if ($empty_size > ($empty_tamanio * $empty_bytes)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El archivo seleccionado excede el tamaño de 1 MB.');
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_azp_ibn_camera_file(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_camera_file($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_fl_id']);
				$empty_control = $this->db->scape($data['field_fl_control']);
				$empty_detection = $this->db->scape($data['field_fl_detection']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_fl_file']['name'];
				$empty_error = $_FILES['field_fl_file']['error'];
				$empty_size = $_FILES['field_fl_file']['size'];
				$empty_tmp_name = $_FILES['field_fl_file']['tmp_name'];
				$empty_type = $_FILES['field_fl_file']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_ibn_control_panel/' . $empty_control . '/' . $empty_detection . '/';
				//$empty_document = 'CAMARAS' . '_' . $empty_detection . '_' . DATE_NUMBER . '_' . HOUR_NUMBER . '.pdf';
				//$empty_namdoc = 'CAMARAS' . '_' . $empty_detection . '_' . $empty_name;
				//$empty_namdoc = 'CAMARAS' . '_' . $empty_name;
				#-------------------------------------------------------------------------#
				$empty_document = $empty_detection . '_' . DATE_NUMBER . '_' . HOUR_NUMBER . '.pdf';
				$empty_namdoc = $empty_name;
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_capture_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_capture_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_capture_m_date_created => DATE_HOUR,
					d_azp_ibn_capture_m_date_modified => DATE_HOUR,
					d_azp_ibn_capture_m_deleted => '1',
					d_azp_ibn_capture_m_description => '',
					d_azp_ibn_capture_m_level => '2',
					d_azp_ibn_capture_m_status => '1',
					d_azp_ibn_capture_m_temp => '1',
					d_azp_ibn_capture_t_identification => $empty_detection,
					d_azp_ibn_capture_w_document => $empty_namdoc,
					d_azp_ibn_capture_w_error => $empty_error,
					d_azp_ibn_capture_w_folder => $empty_folder,
					d_azp_ibn_capture_w_name => $empty_namdoc,
					d_azp_ibn_capture_w_route => $empty_route,
					d_azp_ibn_capture_w_size => $empty_size,
					d_azp_ibn_capture_w_tmp_name => $empty_tmp_name,
					d_azp_ibn_capture_w_type => $empty_type,
					d_azp_ibn_capture_v_id_azp_ibn_control => $empty_control,
					d_azp_ibn_capture_v_id_azp_ibn_module => '1',
					d_azp_ibn_capture_v_id_azp_ibn_cfpvw => $empty_id,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->insert(t_azp_ibn_capture, $var_array);
				#-------------------------------------------------------------------------#
				# Contro de existencia de carpeta
				if (!is_dir($empty_route . $empty_folder)) { Files::create_dir($empty_route . $empty_folder, 0777); }
				#-------------------------------------------------------------------------#
				# Subida de archivos en el desarrollo
				Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_namdoc)), $empty_tmp_name, $empty_route . $empty_folder, true);
				#-------------------------------------------------------------------------#
				# Dar permisos a la ruta y archivo
				chmod($empty_route . $empty_folder . $empty_namdoc, 0777);
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Archivo almacenado correctamente.');
			}
		}















		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_acount(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_acount
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_act_economic(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_act_economic
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_address(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_address
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_assessment(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_assessment
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_business_name(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_business_name
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_causal_feasibility(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_causal_feasibility
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_city(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_city
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_comment_legal(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_comment_legal
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_concept(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_concept
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_consecutive(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_consecutive
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_department(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_department
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_establishment(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_establishment
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_full_name(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_full_name
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_identification(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_identification
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_legal_representative(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_legal_representative
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_legal_rp_certificate(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_legal_rp_certificate
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_limitation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_limitation
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_municipality(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_municipality
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_nit(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_nit
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_nro_registration(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_nro_registration
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_observation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_observation
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_phone(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_phone
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_policy_effective(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_policy_effective
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_policy_final(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_policy_final
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_policy_viability(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_policy_viability
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_renewal_date(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_renewal_date
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_rup(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_rup
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_total_active(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_total_active
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_type_company(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_type_company
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_type_organization(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_type_organization
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_viable(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_viable
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_well_viable(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_well_viable
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_t_year(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_camera,
				d_azp_ibn_camera_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_camera_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_camera_t_year
			);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_control_panel(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel,
				d_azp_ibn_control_panel_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_control_panel_t_code_research
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_state(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_v_id_azp_ibn_module . " = '1' AND " .
				d_azp_ibn_state_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_state_t_name
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_type_certified(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_certified,
				d_azp_ibn_type_certified_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_type_certified_t_name
			);
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_type_concept(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '1' AND " .
				d_azp_ibn_type_concept_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_type_concept_t_name
			);
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>