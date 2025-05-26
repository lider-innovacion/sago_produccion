<?php
	# Seguridad
	defined('INDEX_DIR') || exit('Developer Software');
	
	final class m_azp_ibn_propertyModel extends Models implements OCREND {
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		# Query Sql Select
		final public function sql_controller_by_create() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_area'])) { $var_sql_area = ""; } else {
				if ($_GET['field_area'] == '') { $var_sql_area = ""; } else {
					$var_sql_area = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_area . " IN (" . trim($_GET['field_area'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_market_value'])) { $var_sql_market_value = ""; } else {
				if ($_GET['field_market_value'] == '') { $var_sql_market_value = ""; } else {
					$var_sql_market_value = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_market_value . " IN (" . trim($_GET['field_market_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ownership'])) { $var_sql_ownership = ""; } else {
				if ($_GET['field_ownership'] == '') { $var_sql_ownership = ""; } else {
					$var_sql_ownership = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_ownership . " IN (" . trim($_GET['field_ownership'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_purchase_annotation'])) { $var_sql_purchase_annotation = ""; } else {
				if ($_GET['field_purchase_annotation'] == '') { $var_sql_purchase_annotation = ""; } else {
					$var_sql_purchase_annotation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_purchase_annotation . " IN (" . trim($_GET['field_purchase_annotation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_property'])) { $var_sql_ibn_type_property = ""; } else {
				if ($_GET['field_ibn_type_property'] == '') { $var_sql_ibn_type_property = ""; } else {
					$var_sql_ibn_type_property = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_property . " IN (" . trim($_GET['field_ibn_type_property'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
					tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
					tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
					tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
					tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
					tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
					tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
					tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
					tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
					tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
					tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_zmunicipality . " AS 'lbl_azp_ibn_property_t_zmunicipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_one . " AS 'lbl_azp_ibn_property_t_text_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_two . " AS 'lbl_azp_ibn_property_t_text_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_three . " AS 'lbl_azp_ibn_property_t_text_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_four . " AS 'lbl_azp_ibn_property_t_text_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_five . " AS 'lbl_azp_ibn_property_t_text_five',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_six . " AS 'lbl_azp_ibn_property_t_text_six',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_seven . " AS 'lbl_azp_ibn_property_t_text_seven',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_eight . " AS 'lbl_azp_ibn_property_t_text_eight',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_one . " AS 'lbl_azp_ibn_property_t_sel_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_two . " AS 'lbl_azp_ibn_property_t_sel_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_three . " AS 'lbl_azp_ibn_property_t_sel_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_four . " AS 'lbl_azp_ibn_property_t_sel_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_five . " AS 'lbl_azp_ibn_property_t_sel_five',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_property." . d_azp_ibn_type_property_t_name . " AS 'lbl_azp_ibn_type_property_t_name'
				FROM " . t_azp_ibn_property . " tc_azp_ibn_property
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_property . " tc_azp_ibn_type_property
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . "
						= tc_azp_ibn_type_property." . d_azp_ibn_type_property_id_azp_ibn_type_property . "
				
				WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_area . "
					" . $var_sql_assessment . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_market_value . "
					" . $var_sql_municipality . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_ownership . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_purchase_annotation . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_property . "
				ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_change() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azs_ibn_property." . d_azs_ibn_property_id_azs_ibn_property . " AS 'lbl_azs_ibn_property_id_azs_ibn_property',
					tc_azs_ibn_property." . d_azs_ibn_property_m_date_modified . " AS 'lbl_azs_ibn_property_m_date_modified',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azs_ibn_property." . d_azs_ibn_property_m_date_created . " AS 'lbl_azs_ibn_property_m_date_created',
					tc_azs_ibn_property." . d_azs_ibn_property_m_date_modified . " AS 'lbl_azs_ibn_property_m_date_modified',
					tc_azs_ibn_property." . d_azs_ibn_property_m_description . " AS 'lbl_azs_ibn_property_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azs_ibn_property." . d_azs_ibn_property_t_address . " AS 'lbl_azs_ibn_property_t_address',
					tc_azs_ibn_property." . d_azs_ibn_property_t_area . " AS 'lbl_azs_ibn_property_t_area',
					tc_azs_ibn_property." . d_azs_ibn_property_t_assessment . " AS 'lbl_azs_ibn_property_t_assessment',
					tc_azs_ibn_property." . d_azs_ibn_property_t_causal_feasibility . " AS 'lbl_azs_ibn_property_t_causal_feasibility',
					tc_azs_ibn_property." . d_azs_ibn_property_t_consecutive . " AS 'lbl_azs_ibn_property_t_consecutive',
					tc_azs_ibn_property." . d_azs_ibn_property_t_department . " AS 'lbl_azs_ibn_property_t_department',
					tc_azs_ibn_property." . d_azs_ibn_property_t_full_name . " AS 'lbl_azs_ibn_property_t_full_name',
					tc_azs_ibn_property." . d_azs_ibn_property_t_identification . " AS 'lbl_azs_ibn_property_t_identification',
					tc_azs_ibn_property." . d_azs_ibn_property_t_market_value . " AS 'lbl_azs_ibn_property_t_market_value',
					tc_azs_ibn_property." . d_azs_ibn_property_t_municipality . " AS 'lbl_azs_ibn_property_t_municipality',
					tc_azs_ibn_property." . d_azs_ibn_property_t_nro_registration . " AS 'lbl_azs_ibn_property_t_nro_registration',
					tc_azs_ibn_property." . d_azs_ibn_property_t_observation . " AS 'lbl_azs_ibn_property_t_observation',
					tc_azs_ibn_property." . d_azs_ibn_property_t_ownership . " AS 'lbl_azs_ibn_property_t_ownership',
					tc_azs_ibn_property." . d_azs_ibn_property_t_purchase_annotation . " AS 'lbl_azs_ibn_property_t_purchase_annotation',
					tc_azs_ibn_property." . d_azs_ibn_property_t_viable . " AS 'lbl_azs_ibn_property_t_viable',
					tc_azs_ibn_property." . d_azs_ibn_property_t_well_viable . " AS 'lbl_azs_ibn_property_t_well_viable',
					tc_azs_ibn_property." . d_azs_ibn_property_u_ibn_state . " AS 'lbl_azs_ibn_property_u_ibn_state',
					tc_azs_ibn_property." . d_azs_ibn_property_u_ibn_type_concept . " AS 'lbl_azs_ibn_property_u_ibn_type_concept',
					tc_azs_ibn_property." . d_azs_ibn_property_u_ibn_type_property . " AS 'lbl_azs_ibn_property_u_ibn_type_property'
				FROM " . t_azs_ibn_property . " tc_azs_ibn_property
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azs_ibn_property." . d_azs_ibn_property_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azs_ibn_property." . d_azs_ibn_property_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azs_ibn_property." . d_azs_ibn_property_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azs_ibn_property." . d_azs_ibn_property_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				WHERE tc_azs_ibn_property." . d_azs_ibn_property_v_id_azp_ibn_property . " = '" . $this->id . "'
				ORDER BY tc_azs_ibn_property." . d_azs_ibn_property_m_date_modified . " DESC
			");
		}

		# Query Sql Select Get Id
		final public function sql_controller_delete() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_azp_ibn_property . "
				WHERE " . d_azp_ibn_property_id_azp_ibn_property . " = '" . $this->id . "'
					AND " . d_azp_ibn_property_m_deleted . " = '2'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . url_query_azp_ibn_property);
				# Detener la ejecucion
				exit();
			}
		}

		# Query Sql Select Get Id
		final public function sql_controller_detail() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
					tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
					tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
					tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
					tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
					tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
					tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
					tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
					tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
					tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
					tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_zmunicipality . " AS 'lbl_azp_ibn_property_t_zmunicipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_one . " AS 'lbl_azp_ibn_property_t_text_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_two . " AS 'lbl_azp_ibn_property_t_text_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_three . " AS 'lbl_azp_ibn_property_t_text_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_four . " AS 'lbl_azp_ibn_property_t_text_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_five . " AS 'lbl_azp_ibn_property_t_text_five',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_six . " AS 'lbl_azp_ibn_property_t_text_six',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_seven . " AS 'lbl_azp_ibn_property_t_text_seven',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_eight . " AS 'lbl_azp_ibn_property_t_text_eight',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_one . " AS 'lbl_azp_ibn_property_t_sel_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_two . " AS 'lbl_azp_ibn_property_t_sel_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_three . " AS 'lbl_azp_ibn_property_t_sel_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_four . " AS 'lbl_azp_ibn_property_t_sel_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_five . " AS 'lbl_azp_ibn_property_t_sel_five',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_property." . d_azp_ibn_type_property_t_name . " AS 'lbl_azp_ibn_type_property_t_name'
				FROM " . t_azp_ibn_property . " tc_azp_ibn_property
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_property . " tc_azp_ibn_type_property
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . "
						= tc_azp_ibn_type_property." . d_azp_ibn_type_property_id_azp_ibn_type_property . "
				
				WHERE tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " = '" . $this->id . "'
					AND tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " = '1'
				LIMIT 1
			");
		}

		# Query Sql Select
		final public function sql_controller_eliminate() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_area'])) { $var_sql_area = ""; } else {
				if ($_GET['field_area'] == '') { $var_sql_area = ""; } else {
					$var_sql_area = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_area . " IN (" . trim($_GET['field_area'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_market_value'])) { $var_sql_market_value = ""; } else {
				if ($_GET['field_market_value'] == '') { $var_sql_market_value = ""; } else {
					$var_sql_market_value = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_market_value . " IN (" . trim($_GET['field_market_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ownership'])) { $var_sql_ownership = ""; } else {
				if ($_GET['field_ownership'] == '') { $var_sql_ownership = ""; } else {
					$var_sql_ownership = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_ownership . " IN (" . trim($_GET['field_ownership'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_purchase_annotation'])) { $var_sql_purchase_annotation = ""; } else {
				if ($_GET['field_purchase_annotation'] == '') { $var_sql_purchase_annotation = ""; } else {
					$var_sql_purchase_annotation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_purchase_annotation . " IN (" . trim($_GET['field_purchase_annotation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_property'])) { $var_sql_ibn_type_property = ""; } else {
				if ($_GET['field_ibn_type_property'] == '') { $var_sql_ibn_type_property = ""; } else {
					$var_sql_ibn_type_property = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_property . " IN (" . trim($_GET['field_ibn_type_property'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
					tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
					tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
					tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
					tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
					tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
					tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
					tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
					tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
					tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
					tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_zmunicipality . " AS 'lbl_azp_ibn_property_t_zmunicipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_one . " AS 'lbl_azp_ibn_property_t_text_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_two . " AS 'lbl_azp_ibn_property_t_text_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_three . " AS 'lbl_azp_ibn_property_t_text_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_four . " AS 'lbl_azp_ibn_property_t_text_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_five . " AS 'lbl_azp_ibn_property_t_text_five',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_six . " AS 'lbl_azp_ibn_property_t_text_six',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_seven . " AS 'lbl_azp_ibn_property_t_text_seven',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_eight . " AS 'lbl_azp_ibn_property_t_text_eight',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_one . " AS 'lbl_azp_ibn_property_t_sel_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_two . " AS 'lbl_azp_ibn_property_t_sel_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_three . " AS 'lbl_azp_ibn_property_t_sel_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_four . " AS 'lbl_azp_ibn_property_t_sel_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_five . " AS 'lbl_azp_ibn_property_t_sel_five',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_property." . d_azp_ibn_type_property_t_name . " AS 'lbl_azp_ibn_type_property_t_name'
				FROM " . t_azp_ibn_property . " tc_azp_ibn_property
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_property . " tc_azp_ibn_type_property
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . "
						= tc_azp_ibn_type_property." . d_azp_ibn_type_property_id_azp_ibn_type_property . "
				
				WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " = '3'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_area . "
					" . $var_sql_assessment . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_market_value . "
					" . $var_sql_municipality . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_ownership . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_purchase_annotation . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_property . "
				ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_read() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_area'])) { $var_sql_area = ""; } else {
				if ($_GET['field_area'] == '') { $var_sql_area = ""; } else {
					$var_sql_area = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_area . " IN (" . trim($_GET['field_area'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_market_value'])) { $var_sql_market_value = ""; } else {
				if ($_GET['field_market_value'] == '') { $var_sql_market_value = ""; } else {
					$var_sql_market_value = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_market_value . " IN (" . trim($_GET['field_market_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ownership'])) { $var_sql_ownership = ""; } else {
				if ($_GET['field_ownership'] == '') { $var_sql_ownership = ""; } else {
					$var_sql_ownership = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_ownership . " IN (" . trim($_GET['field_ownership'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_purchase_annotation'])) { $var_sql_purchase_annotation = ""; } else {
				if ($_GET['field_purchase_annotation'] == '') { $var_sql_purchase_annotation = ""; } else {
					$var_sql_purchase_annotation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_purchase_annotation . " IN (" . trim($_GET['field_purchase_annotation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_property'])) { $var_sql_ibn_type_property = ""; } else {
				if ($_GET['field_ibn_type_property'] == '') { $var_sql_ibn_type_property = ""; } else {
					$var_sql_ibn_type_property = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_property . " IN (" . trim($_GET['field_ibn_type_property'], ',') . ")";
				}
			}





			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
					tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
					tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
					tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
					tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
					tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
					tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
					tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
					tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
					tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
					tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_zmunicipality . " AS 'lbl_azp_ibn_property_t_zmunicipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_one . " AS 'lbl_azp_ibn_property_t_text_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_two . " AS 'lbl_azp_ibn_property_t_text_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_three . " AS 'lbl_azp_ibn_property_t_text_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_four . " AS 'lbl_azp_ibn_property_t_text_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_five . " AS 'lbl_azp_ibn_property_t_text_five',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_six . " AS 'lbl_azp_ibn_property_t_text_six',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_seven . " AS 'lbl_azp_ibn_property_t_text_seven',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_eight . " AS 'lbl_azp_ibn_property_t_text_eight',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_one . " AS 'lbl_azp_ibn_property_t_sel_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_two . " AS 'lbl_azp_ibn_property_t_sel_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_three . " AS 'lbl_azp_ibn_property_t_sel_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_four . " AS 'lbl_azp_ibn_property_t_sel_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_five . " AS 'lbl_azp_ibn_property_t_sel_five',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_property." . d_azp_ibn_type_property_t_name . " AS 'lbl_azp_ibn_type_property_t_name'
				FROM " . t_azp_ibn_property . " tc_azp_ibn_property
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_property . " tc_azp_ibn_type_property
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . "
						= tc_azp_ibn_type_property." . d_azp_ibn_type_property_id_azp_ibn_type_property . "
				
				WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " = '1'
					" . $var_sql_ibn_control_panel .  "

					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_area . "
					" . $var_sql_assessment . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_market_value . "
					" . $var_sql_municipality . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_ownership . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_purchase_annotation . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_property . "
				ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_remove() {
			# Condicion para validar la sentencia sql
			if (!isset($_GET['field_id'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_id'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $_GET['field_id'] . "'";
				}
			}
			




			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_acount'])) { $var_sql_acount = ""; } else {
				if ($_GET['field_acount'] == '') { $var_sql_acount = ""; } else {
					$var_sql_acount = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_acount . " IN (" . trim($_GET['field_acount'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_address'])) { $var_sql_address = ""; } else {
				if ($_GET['field_address'] == '') { $var_sql_address = ""; } else {
					$var_sql_address = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_address . " IN (" . trim($_GET['field_address'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_area'])) { $var_sql_area = ""; } else {
				if ($_GET['field_area'] == '') { $var_sql_area = ""; } else {
					$var_sql_area = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_area . " IN (" . trim($_GET['field_area'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_assessment'])) { $var_sql_assessment = ""; } else {
				if ($_GET['field_assessment'] == '') { $var_sql_assessment = ""; } else {
					$var_sql_assessment = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_assessment . " IN (" . trim($_GET['field_assessment'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_causal_feasibility'])) { $var_sql_causal_feasibility = ""; } else {
				if ($_GET['field_causal_feasibility'] == '') { $var_sql_causal_feasibility = ""; } else {
					$var_sql_causal_feasibility = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_causal_feasibility . " IN (" . trim($_GET['field_causal_feasibility'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_comment_legal'])) { $var_sql_comment_legal = ""; } else {
				if ($_GET['field_comment_legal'] == '') { $var_sql_comment_legal = ""; } else {
					$var_sql_comment_legal = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_comment_legal . " IN (" . trim($_GET['field_comment_legal'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_concept'])) { $var_sql_concept = ""; } else {
				if ($_GET['field_concept'] == '') { $var_sql_concept = ""; } else {
					$var_sql_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_concept . " IN (" . trim($_GET['field_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_consecutive'])) { $var_sql_consecutive = ""; } else {
				if ($_GET['field_consecutive'] == '') { $var_sql_consecutive = ""; } else {
					$var_sql_consecutive = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_consecutive . " IN (" . trim($_GET['field_consecutive'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_department'])) { $var_sql_department = ""; } else {
				if ($_GET['field_department'] == '') { $var_sql_department = ""; } else {
					$var_sql_department = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_department . " IN (" . trim($_GET['field_department'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_full_name'])) { $var_sql_full_name = ""; } else {
				if ($_GET['field_full_name'] == '') { $var_sql_full_name = ""; } else {
					$var_sql_full_name = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_full_name . " IN (" . trim($_GET['field_full_name'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_identification'])) { $var_sql_identification = ""; } else {
				if ($_GET['field_identification'] == '') { $var_sql_identification = ""; } else {
					$var_sql_identification = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_identification . " IN (" . trim($_GET['field_identification'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_limitation'])) { $var_sql_limitation = ""; } else {
				if ($_GET['field_limitation'] == '') { $var_sql_limitation = ""; } else {
					$var_sql_limitation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_limitation . " IN (" . trim($_GET['field_limitation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_market_value'])) { $var_sql_market_value = ""; } else {
				if ($_GET['field_market_value'] == '') { $var_sql_market_value = ""; } else {
					$var_sql_market_value = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_market_value . " IN (" . trim($_GET['field_market_value'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_municipality'])) { $var_sql_municipality = ""; } else {
				if ($_GET['field_municipality'] == '') { $var_sql_municipality = ""; } else {
					$var_sql_municipality = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_municipality . " IN (" . trim($_GET['field_municipality'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_nro_registration'])) { $var_sql_nro_registration = ""; } else {
				if ($_GET['field_nro_registration'] == '') { $var_sql_nro_registration = ""; } else {
					$var_sql_nro_registration = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_nro_registration . " IN (" . trim($_GET['field_nro_registration'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_observation'])) { $var_sql_observation = ""; } else {
				if ($_GET['field_observation'] == '') { $var_sql_observation = ""; } else {
					$var_sql_observation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_observation . " IN (" . trim($_GET['field_observation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ownership'])) { $var_sql_ownership = ""; } else {
				if ($_GET['field_ownership'] == '') { $var_sql_ownership = ""; } else {
					$var_sql_ownership = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_ownership . " IN (" . trim($_GET['field_ownership'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_effective'])) { $var_sql_policy_effective = ""; } else {
				if ($_GET['field_policy_effective'] == '') { $var_sql_policy_effective = ""; } else {
					$var_sql_policy_effective = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_effective . " IN (" . trim($_GET['field_policy_effective'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_final'])) { $var_sql_policy_final = ""; } else {
				if ($_GET['field_policy_final'] == '') { $var_sql_policy_final = ""; } else {
					$var_sql_policy_final = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_final . " IN (" . trim($_GET['field_policy_final'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_policy_viability'])) { $var_sql_policy_viability = ""; } else {
				if ($_GET['field_policy_viability'] == '') { $var_sql_policy_viability = ""; } else {
					$var_sql_policy_viability = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_policy_viability . " IN (" . trim($_GET['field_policy_viability'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_purchase_annotation'])) { $var_sql_purchase_annotation = ""; } else {
				if ($_GET['field_purchase_annotation'] == '') { $var_sql_purchase_annotation = ""; } else {
					$var_sql_purchase_annotation = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_purchase_annotation . " IN (" . trim($_GET['field_purchase_annotation'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_viable'])) { $var_sql_viable = ""; } else {
				if ($_GET['field_viable'] == '') { $var_sql_viable = ""; } else {
					$var_sql_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_viable . " IN (" . trim($_GET['field_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_well_viable'])) { $var_sql_well_viable = ""; } else {
				if ($_GET['field_well_viable'] == '') { $var_sql_well_viable = ""; } else {
					$var_sql_well_viable = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_t_well_viable . " IN (" . trim($_GET['field_well_viable'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			/*if (!isset($_GET['field_ibn_control_panel'])) { $var_sql_ibn_control_panel = ""; } else {
				if ($_GET['field_ibn_control_panel'] == '') { $var_sql_ibn_control_panel = ""; } else {
					$var_sql_ibn_control_panel = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " IN (" . trim($_GET['field_ibn_control_panel'], ',') . ")";
				}
			}*/
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_state'])) { $var_sql_ibn_state = ""; } else {
				if ($_GET['field_ibn_state'] == '') { $var_sql_ibn_state = ""; } else {
					$var_sql_ibn_state = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_state . " IN (" . trim($_GET['field_ibn_state'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_concept'])) { $var_sql_ibn_type_concept = ""; } else {
				if ($_GET['field_ibn_type_concept'] == '') { $var_sql_ibn_type_concept = ""; } else {
					$var_sql_ibn_type_concept = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_concept . " IN (" . trim($_GET['field_ibn_type_concept'], ',') . ")";
				}
			}
			#-------------------------------------------------------------------------#
			if (!isset($_GET['field_ibn_type_property'])) { $var_sql_ibn_type_property = ""; } else {
				if ($_GET['field_ibn_type_property'] == '') { $var_sql_ibn_type_property = ""; } else {
					$var_sql_ibn_type_property = "AND tc_azp_ibn_property." .
						d_azp_ibn_property_v_id_azp_ibn_type_property . " IN (" . trim($_GET['field_ibn_type_property'], ',') . ")";
				}
			}




			
			#-------------------------------------------------------------------------#
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
					tc_azp_user_created." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_created',
					tc_azp_user_modified." . d_azp_user_t_login . " AS 'lbl_azp_user_t_login_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
					tc_azp_sys_level." . d_azp_sys_level_t_name . " AS 'lbl_azp_sys_level_t_name',
					tc_azp_sys_state." . d_azp_sys_state_t_name . " AS 'lbl_azp_sys_state_t_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
					tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
					tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
					tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
					tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
					tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
					tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
					tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
					tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
					tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
					tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_zmunicipality . " AS 'lbl_azp_ibn_property_t_zmunicipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_one . " AS 'lbl_azp_ibn_property_t_text_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_two . " AS 'lbl_azp_ibn_property_t_text_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_three . " AS 'lbl_azp_ibn_property_t_text_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_four . " AS 'lbl_azp_ibn_property_t_text_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_five . " AS 'lbl_azp_ibn_property_t_text_five',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_six . " AS 'lbl_azp_ibn_property_t_text_six',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_seven . " AS 'lbl_azp_ibn_property_t_text_seven',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_eight . " AS 'lbl_azp_ibn_property_t_text_eight',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_one . " AS 'lbl_azp_ibn_property_t_sel_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_two . " AS 'lbl_azp_ibn_property_t_sel_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_three . " AS 'lbl_azp_ibn_property_t_sel_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_four . " AS 'lbl_azp_ibn_property_t_sel_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_five . " AS 'lbl_azp_ibn_property_t_sel_five',
					tc_azp_ibn_state." . d_azp_ibn_state_t_name . " AS 'lbl_azp_ibn_state_t_name',
					tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					tc_azp_ibn_type_property." . d_azp_ibn_type_property_t_name . " AS 'lbl_azp_ibn_type_property_t_name'
				FROM " . t_azp_ibn_property . " tc_azp_ibn_property
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				INNER JOIN " . t_azp_ibn_state . " tc_azp_ibn_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . "
						= tc_azp_ibn_state." . d_azp_ibn_state_id_azp_ibn_state . "
				
				INNER JOIN " . t_azp_ibn_type_concept . " tc_azp_ibn_type_concept
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . "
						= tc_azp_ibn_type_concept." . d_azp_ibn_type_concept_id_azp_ibn_type_concept . "
				
				INNER JOIN " . t_azp_ibn_type_property . " tc_azp_ibn_type_property
					ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . "
						= tc_azp_ibn_type_property." . d_azp_ibn_type_property_id_azp_ibn_type_property . "
				
				WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " = '2'
					" . $var_sql_ibn_control_panel .  "
					
					" . $var_sql_acount . "
					" . $var_sql_address . "
					" . $var_sql_area . "
					" . $var_sql_assessment . "
					" . $var_sql_causal_feasibility . "
					" . $var_sql_comment_legal . "
					" . $var_sql_concept . "
					" . $var_sql_consecutive . "
					" . $var_sql_department . "
					" . $var_sql_full_name . "
					" . $var_sql_identification . "
					" . $var_sql_limitation . "
					" . $var_sql_market_value . "
					" . $var_sql_municipality . "
					" . $var_sql_nro_registration . "
					" . $var_sql_observation . "
					" . $var_sql_ownership . "
					" . $var_sql_policy_effective . "
					" . $var_sql_policy_final . "
					" . $var_sql_policy_viability . "
					" . $var_sql_purchase_annotation . "
					" . $var_sql_viable . "
					" . $var_sql_well_viable . "
					" . $var_sql_ibn_state . "
					" . $var_sql_ibn_type_concept . "
					" . $var_sql_ibn_type_property . "
				ORDER BY tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " ASC
			");
		}

		# Query Sql Select Get Id
		final public function sql_controller_update() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property',
					tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . " AS 'lbl_azp_ibn_property_m_by_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . " AS 'lbl_azp_ibn_property_m_by_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_created . " AS 'lbl_azp_ibn_property_m_date_created',
					tc_azp_ibn_property." . d_azp_ibn_property_m_date_modified . " AS 'lbl_azp_ibn_property_m_date_modified',
					tc_azp_ibn_property." . d_azp_ibn_property_m_description . " AS 'lbl_azp_ibn_property_m_description',
					tc_azp_ibn_property." . d_azp_ibn_property_m_level . " AS 'lbl_azp_ibn_property_m_level',
					tc_azp_ibn_property." . d_azp_ibn_property_m_status . " AS 'lbl_azp_ibn_property_m_status',
					tc_azp_ibn_property." . d_azp_ibn_property_t_address . " AS 'lbl_azp_ibn_property_t_address',
					tc_azp_ibn_property." . d_azp_ibn_property_t_area . " AS 'lbl_azp_ibn_property_t_area',
					tc_azp_ibn_property." . d_azp_ibn_property_t_assessment . " AS 'lbl_azp_ibn_property_t_assessment',
					tc_azp_ibn_property." . d_azp_ibn_property_t_causal_feasibility . " AS 'lbl_azp_ibn_property_t_causal_feasibility',
					tc_azp_ibn_property." . d_azp_ibn_property_t_comment_legal . " AS 'lbl_azp_ibn_property_t_comment_legal',
					tc_azp_ibn_property." . d_azp_ibn_property_t_concept . " AS 'lbl_azp_ibn_property_t_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_t_consecutive . " AS 'lbl_azp_ibn_property_t_consecutive',
					tc_azp_ibn_property." . d_azp_ibn_property_t_department . " AS 'lbl_azp_ibn_property_t_department',
					tc_azp_ibn_property." . d_azp_ibn_property_t_full_name . " AS 'lbl_azp_ibn_property_t_full_name',
					tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
					tc_azp_ibn_property." . d_azp_ibn_property_t_limitation . " AS 'lbl_azp_ibn_property_t_limitation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_market_value . " AS 'lbl_azp_ibn_property_t_market_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_municipality . " AS 'lbl_azp_ibn_property_t_municipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
					tc_azp_ibn_property." . d_azp_ibn_property_t_observation . " AS 'lbl_azp_ibn_property_t_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_ownership . " AS 'lbl_azp_ibn_property_t_ownership',
					tc_azp_ibn_property." . d_azp_ibn_property_t_purchase_annotation . " AS 'lbl_azp_ibn_property_t_purchase_annotation',
					tc_azp_ibn_property." . d_azp_ibn_property_t_viable . " AS 'lbl_azp_ibn_property_t_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_well_viable . " AS 'lbl_azp_ibn_property_t_well_viable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_returnable . " AS 'lbl_azp_ibn_property_t_st_returnable',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_receipt . " AS 'lbl_azp_ibn_property_t_st_receipt',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_date . " AS 'lbl_azp_ibn_property_t_st_date',
					tc_azp_ibn_property." . d_azp_ibn_property_t_st_value . " AS 'lbl_azp_ibn_property_t_st_value',
					tc_azp_ibn_property." . d_azp_ibn_property_t_zmunicipality . " AS 'lbl_azp_ibn_property_t_zmunicipality',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_one . " AS 'lbl_azp_ibn_property_t_text_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_two . " AS 'lbl_azp_ibn_property_t_text_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_three . " AS 'lbl_azp_ibn_property_t_text_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_four . " AS 'lbl_azp_ibn_property_t_text_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_five . " AS 'lbl_azp_ibn_property_t_text_five',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_six . " AS 'lbl_azp_ibn_property_t_text_six',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_seven . " AS 'lbl_azp_ibn_property_t_text_seven',
					tc_azp_ibn_property." . d_azp_ibn_property_t_text_eight . " AS 'lbl_azp_ibn_property_t_text_eight',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_one . " AS 'lbl_azp_ibn_property_t_sel_one',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_two . " AS 'lbl_azp_ibn_property_t_sel_two',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_three . " AS 'lbl_azp_ibn_property_t_sel_three',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_four . " AS 'lbl_azp_ibn_property_t_sel_four',
					tc_azp_ibn_property." . d_azp_ibn_property_t_sel_five . " AS 'lbl_azp_ibn_property_t_sel_five',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_control_panel',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_observation . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_observation',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_state . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_state',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_concept . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_concept',
					tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_type_property . " AS 'lbl_azp_ibn_property_v_id_azp_ibn_type_property'
				FROM " . t_azp_ibn_property . " tc_azp_ibn_property
				
				INNER JOIN " . t_azp_user . " tc_azp_user_created
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_created . "
						= tc_azp_user_created." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_user . " tc_azp_user_modified
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_by_modified . "
						= tc_azp_user_modified." . d_azp_user_id_azp_user . "
				INNER JOIN " . t_azp_sys_level . " tc_azp_sys_level
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_level . "
						= tc_azp_sys_level." . d_azp_sys_level_t_value . "
				INNER JOIN " . t_azp_sys_state . " tc_azp_sys_state
					ON tc_azp_ibn_property." . d_azp_ibn_property_m_status . "
						= tc_azp_sys_state." . d_azp_sys_state_t_value . "
				
				WHERE tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " = '" . $this->id . "'
					AND tc_azp_ibn_property." . d_azp_ibn_property_m_deleted . " = '1'
				LIMIT 1
			");
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_property_delete(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_property_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_level . " = '2'");
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

		# Query Sql Update
		final public function sql_azp_ibn_property_delete(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_delete($data);
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
				$var_array = array(d_azp_ibn_property_m_deleted => '3',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro eliminado correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_property_finish(array $data) {
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_address . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_area . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna area.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_assessment . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_causal_feasibility . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_consecutive . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_department . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_full_name . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_identification . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_market_value . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna valor comercial.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_municipality . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_nro_registration . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_ownership . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna titularidad.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_purchase_annotation . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna anotacion compra.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_viable . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				}
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_t_well_viable . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna bien viable.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_v_id_azp_ibn_state . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_v_id_azp_ibn_type_concept . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
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
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND " .
					d_azp_ibn_property_v_id_azp_ibn_type_property . " = '' AND (" . d_azp_ibn_property_v_id_azp_ibn_state . " = '9' OR " . d_azp_ibn_property_v_id_azp_ibn_state . " = '12')"
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value): $var_count = $value['lbl_count']; endforeach;
					# Contro de validacion de datos
					if ($var_count > 0) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> La base que estás finalizando no tiene la informacion completa en la columna tipo inmueble.');
					}
				}*/
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				/*$var_sql = $this->db->select("COUNT(*) AS 'lbl_count'", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_id . "' AND (" . d_azp_ibn_property_t_address . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_area . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_assessment . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_causal_feasibility . " = ''" .
						//"OR" . " " . d_azp_ibn_property_t_comment_legal . " = ''" .
						//"OR" . " " . d_azp_ibn_property_t_concept . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_consecutive . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_department . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_full_name . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_identification . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_market_value . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_municipality . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_nro_registration . " = ''" .
						//"OR" . " " . d_azp_ibn_property_t_observation . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_ownership . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_purchase_annotation . " = ''" .
						//"OR" . " " . d_azp_ibn_property_t_viable . " = ''" .
						"OR" . " " . d_azp_ibn_property_t_well_viable . " = ''" .
						//"OR" . " " . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = ''" .
						"OR" . " " . d_azp_ibn_property_v_id_azp_ibn_state . " = '2'" .
						"OR" . " " . d_azp_ibn_property_v_id_azp_ibn_type_concept . " = '2'" .
						"OR" . " " . d_azp_ibn_property_v_id_azp_ibn_type_property . " = '1'" . ")"
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
					d_azp_ibn_control_panel_t_mod_property . " = 'SI'"
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

		# Query Sql Update
		final public function sql_azp_ibn_property_finish(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_finish($data);
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
				$var_array = array(d_azp_ibn_control_panel_t_mod_property => 'SI',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_control_panel, $var_array, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Base finalizada correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_property_import(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_property_import(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_import($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				# Consultar helper y sus opciones
				Helper::load('files');
				#-------------------------------------------------------------------------#
				$empty_id = $this->db->scape($data['field_im_id']);
				$empty_control = $this->db->scape($data['field_im_control']);
				#-------------------------------------------------------------------------#
				$empty_name = $_FILES['field_im_file']['name'];
				$empty_error = $_FILES['field_im_file']['error'];
				$empty_size = $_FILES['field_im_file']['size'];
				$empty_tmp_name = $_FILES['field_im_file']['tmp_name'];
				$empty_type = $_FILES['field_im_file']['type'];
				#-------------------------------------------------------------------------#
				$empty_route = '../systemfiles/filesproject/';
				$empty_folder = 'azp_ibn_property_import/';
				$empty_document = DATE_NUMBER . '_' . HOUR_NUMBER . '.csv';
				#-------------------------------------------------------------------------#
				# Contro de existencia de carpeta
				if (!is_dir($empty_route . $empty_folder)) {
					# Creacion de carpetas en el desarrollo
					Files::create_dir($empty_route . $empty_folder, 0777);
				}
				#-------------------------------------------------------------------------#
				# Subida de archivos en el desarrollo
				Files::upload_file(trim(preg_replace('/\s+/',' ', $empty_document)), $empty_tmp_name, $empty_route . $empty_folder, true);
				#-------------------------------------------------------------------------#
				# Dar permisos a la ruta y archivo
				chmod($empty_route . $empty_folder . $empty_document, 0777);
				#-------------------------------------------------------------------------#
				$var_search = array(
					'	', "'", '"', ';', ',', '', '`', '─', '~', '´', '	', '{', '}', '[', ']', '–',
					'ç', 'Ç', 'æ', 'Æ', 'ã', 'Ã', '°', '\n', '\r', '\t');
				$var_replace = array(
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
					'c', 'C', '', '', '', '', '', '', '', '');
				#-------------------------------------------------------------------------#
				# Eliminar registros de la tabla de importacion
				$this->db->query("DELETE FROM " . t_azp_ibn_property_import);
				# Eliminar registros de la tabla de importacion
				$this->db->query("ALTER TABLE " . t_azp_ibn_property_import . " AUTO_INCREMENT = 1");
				# Eliminar registros de la tabla de importacion
				#$this->db->query("DELETE FROM " . t_azp_ibn_property_import . " WHERE " . d_azp_ibn_property_import_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'");
				#-------------------------------------------------------------------------#
				# Obtener datos del archivo recibido y saltar lineas
				$var_file = file_get_contents($empty_route . $empty_folder . $empty_document);
				$var_file = explode("\n", $var_file);
				$var_file = array_filter($var_file);
				# Recorrer los datos del archivo y separarlos por coma o punto y coma
				foreach ($var_file as $key => $value) { $var_list[] = explode(";", $value); }
				#-------------------------------------------------------------------------#
				# Recorrer los datos divididos por filas y almacenarlos en la base
				foreach ($var_list as $key => $value) {
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[0])) { $import_00 = ''; } else {
						if ($value[0] != '' || $value[0] != NULL) {
							$import_00 = $this->db->scape($value[0]);
						} else { $import_00 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[1])) { $import_01 = ''; } else {
						if ($value[1] != '' || $value[1] != NULL) {
							$import_01 = $this->db->scape($value[1]);
						} else { $import_01 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[2])) { $import_02 = ''; } else {
						if ($value[2] != '' || $value[2] != NULL) {
							$import_02 = $this->db->scape($value[2]);
						} else { $import_02 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[3])) { $import_03 = ''; } else {
						if ($value[3] != '' || $value[3] != NULL) {
							$import_03 = $this->db->scape($value[3]);
						} else { $import_03 = ''; }
					}
					# Captura de los datos a traves de post para ser revisados y asignados a una nueva variable
					if (empty($value[4])) { $import_04 = ''; } else {
						if ($value[4] != '' || $value[4] != NULL) {
							$import_04 = $this->db->scape($value[4]);
						} else { $import_04 = ''; }
					}
					#-------------------------------------------------------------------------#
					# Reemplazar ciertos caracteres especificados de los valores recibidos
					$repl_00 = str_replace($var_search, $var_replace, $import_00);
					$repl_01 = str_replace($var_search, $var_replace, $import_01);
					$repl_02 = str_replace($var_search, $var_replace, $import_02);
					$repl_03 = str_replace($var_search, $var_replace, $import_03);
					$repl_04 = str_replace($var_search, $var_replace, $import_04);
					#-------------------------------------------------------------------------#
					# Eliminar dobles vacios en los valores recibidos
					$preg_00 = trim(preg_replace('/\s+/',' ', $repl_00));
					$preg_01 = trim(preg_replace('/\s+/',' ', $repl_01));
					$preg_02 = trim(preg_replace('/\s+/',' ', $repl_02));
					$preg_03 = trim(preg_replace('/\s+/',' ', $repl_03));
					$preg_04 = trim(preg_replace('/\s+/',' ', $repl_04));
					#-------------------------------------------------------------------------#
					# Validacion de valores recibidos para codificacion.
					$empty_00 = html_entity_decode(utf8_encode($preg_00));
					$empty_01 = html_entity_decode(utf8_encode($preg_01));
					$empty_02 = html_entity_decode(utf8_encode($preg_02));
					$empty_03 = html_entity_decode(utf8_encode($preg_03));
					$empty_04 = html_entity_decode(utf8_encode($preg_04));
					#-------------------------------------------------------------------------#
					# Organizacion de los valores capturados y asignados a los campos a insertar
					$var_array = array(
						d_azp_ibn_property_import_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_ibn_property_import_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_property_import_m_date_created => DATE_HOUR,
						d_azp_ibn_property_import_m_date_modified => DATE_HOUR,
						d_azp_ibn_property_import_m_deleted => '1',
						d_azp_ibn_property_import_m_description => '',
						d_azp_ibn_property_import_m_level => '2',
						d_azp_ibn_property_import_m_status => '1',
						d_azp_ibn_property_import_m_temp => '2',
						d_azp_ibn_property_import_t_load_data => 'Nuevos',
						d_azp_ibn_property_import_t_validate => '0',
						d_azp_ibn_property_import_t_acount => '0',
						d_azp_ibn_property_import_t_bcount => '0',
						d_azp_ibn_property_import_t_address => strtoupper($empty_04),
						d_azp_ibn_property_import_t_area => strtoupper(''),
						d_azp_ibn_property_import_t_assessment => strtoupper(''),
						d_azp_ibn_property_import_t_causal_feasibility => strtoupper(''),
						d_azp_ibn_property_import_t_consecutive => strtoupper(''),
						d_azp_ibn_property_import_t_department => strtoupper($empty_02),
						d_azp_ibn_property_import_t_full_name => strtoupper(''),
						d_azp_ibn_property_import_t_identification => strtoupper($empty_00),
						d_azp_ibn_property_import_t_market_value => strtoupper(''),
						d_azp_ibn_property_import_t_municipality => strtoupper($empty_03),
						d_azp_ibn_property_import_t_nro_registration => strtoupper($empty_01),
						d_azp_ibn_property_import_t_observation => strtoupper(''),
						d_azp_ibn_property_import_t_ownership => strtoupper(''),
						d_azp_ibn_property_import_t_policy_effective => strtoupper('Positivo'),
						d_azp_ibn_property_import_t_policy_final => strtoupper('Negativo'),
						d_azp_ibn_property_import_t_policy_viability => strtoupper('Negativo'),
						d_azp_ibn_property_import_t_purchase_annotation => strtoupper(''),
						d_azp_ibn_property_import_t_viable => strtoupper('No'),
						d_azp_ibn_property_import_t_well_viable => strtoupper(''),
						d_azp_ibn_property_import_t_st_located => strtoupper('NO'),
						d_azp_ibn_property_import_t_st_returnable => strtoupper('NO'),
						d_azp_ibn_property_import_t_st_receipt => strtoupper(''),
						d_azp_ibn_property_import_t_st_date => strtoupper(''),
						d_azp_ibn_property_import_t_st_value => strtoupper('0'),
						d_azp_ibn_property_import_t_zmunicipality => strtoupper(''),
						d_azp_ibn_property_import_t_text_one => strtoupper(''),
						d_azp_ibn_property_import_t_text_two => strtoupper(''),
						d_azp_ibn_property_import_t_text_three => strtoupper(''),
						d_azp_ibn_property_import_t_text_four => strtoupper(''),
						d_azp_ibn_property_import_t_text_five => strtoupper(''),
						d_azp_ibn_property_import_t_text_six => strtoupper(''),
						d_azp_ibn_property_import_t_text_seven => strtoupper(''),
						d_azp_ibn_property_import_t_text_eight => strtoupper(''),
						d_azp_ibn_property_import_t_sel_one => strtoupper('NO APLICA'),
						d_azp_ibn_property_import_t_sel_two => strtoupper('NO APLICA'),
						d_azp_ibn_property_import_t_sel_three => strtoupper('NO APLICA'),
						d_azp_ibn_property_import_t_sel_four => strtoupper('NO APLICA'),
						d_azp_ibn_property_import_t_sel_five => strtoupper('NO APLICA'),
						d_azp_ibn_property_import_v_id_azp_ibn_control_panel => $empty_control,
						d_azp_ibn_property_import_v_id_azp_ibn_observation => '2',
						d_azp_ibn_property_import_v_id_azp_ibn_state => '2',
						d_azp_ibn_property_import_v_id_azp_ibn_type_concept => '2',
						d_azp_ibn_property_import_v_id_azp_ibn_type_property => '1',
					);
					# Insertar valores en la tabla segun estructura de la tabla
					$this->db->insert(t_azp_ibn_property_import, $var_array);
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("*", t_azp_ibn_data_main, d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql):
						# Asignacion de valores a nuevas variables
						$var_identification = $key_sql[d_azp_ibn_data_main_t_identification];
						$var_control_panel = $key_sql[d_azp_ibn_data_main_v_id_azp_ibn_control_panel];
						$var_consecutive = $key_sql[d_azp_ibn_data_main_t_consecutive];
						$var_full_name = $key_sql[d_azp_ibn_data_main_t_full_name];
						$var_city = $key_sql[d_azp_ibn_data_main_t_city];
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_ibn_property_import_t_consecutive => $var_consecutive,
							d_azp_ibn_property_import_t_full_name => $var_full_name,
							d_azp_ibn_property_import_t_zmunicipality => $var_city,
						);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_property_import, $var_array,
							d_azp_ibn_property_import_t_identification . " = '" . $var_identification . "' AND " .
							d_azp_ibn_property_import_v_id_azp_ibn_control_panel . " = '" . $var_control_panel . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Eliminar registros de la tabla de importacion
				$this->db->query("DELETE FROM " . t_azp_ibn_property_import . " WHERE " . d_azp_ibn_property_import_id_azp_ibn_property_import . " = '1'");
				#-------------------------------------------------------------------------#
				# Organizacion de los valores capturados y asignados a los campos a insertar
				$var_array = array(d_azp_ibn_property_import_v_id_azp_ibn_control_panel => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property_import, $var_array, d_azp_ibn_property_import_v_id_azp_ibn_control_panel . " = ''");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("*", t_azp_ibn_property, d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value):
						# Asignacion de valores a nuevas variables
						$var_t_address = $value[d_azp_ibn_property_t_address];
						$var_t_department = $value[d_azp_ibn_property_t_department];
						$var_t_identification = $value[d_azp_ibn_property_t_identification];
						$var_t_municipality = $value[d_azp_ibn_property_t_municipality];
						$var_t_nro_registration = $value[d_azp_ibn_property_t_nro_registration];
						$var_t_control_panel = $value[d_azp_ibn_property_v_id_azp_ibn_control_panel];
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(d_azp_ibn_property_import_t_load_data => 'Duplicados',);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->update(t_azp_ibn_property_import, $var_array,
							d_azp_ibn_property_import_t_address . " = '" . $var_t_address . "' AND " .
							d_azp_ibn_property_import_t_department . " = '" . $var_t_department . "' AND " .
							d_azp_ibn_property_import_t_identification . " = '" . $var_t_identification . "' AND " .
							d_azp_ibn_property_import_t_municipality . " = '" . $var_t_municipality . "' AND " .
							d_azp_ibn_property_import_t_nro_registration . " = '" . $var_t_nro_registration . "' AND " .
							d_azp_ibn_property_import_v_id_azp_ibn_control_panel . " = '" . $var_t_control_panel . "'"
						);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("*", t_azp_ibn_property_import, d_azp_ibn_property_import_m_deleted . " = '1' AND " . d_azp_ibn_property_import_t_load_data . " = 'Nuevos' ORDER BY " . d_azp_ibn_property_import_t_consecutive . " ASC");
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					foreach ($var_sql as $key_sql):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_array = array(
							d_azp_ibn_property_m_by_created => $key_sql[d_azp_ibn_property_import_m_by_created],
							d_azp_ibn_property_m_by_modified => $key_sql[d_azp_ibn_property_import_m_by_modified],
							d_azp_ibn_property_m_date_created => $key_sql[d_azp_ibn_property_import_m_date_created],
							d_azp_ibn_property_m_date_modified => $key_sql[d_azp_ibn_property_import_m_date_modified],
							d_azp_ibn_property_m_deleted => $key_sql[d_azp_ibn_property_import_m_deleted],
							d_azp_ibn_property_m_description => $key_sql[d_azp_ibn_property_import_m_description],
							d_azp_ibn_property_m_level => $key_sql[d_azp_ibn_property_import_m_level],
							d_azp_ibn_property_m_status => $key_sql[d_azp_ibn_property_import_m_status],
							d_azp_ibn_property_m_temp => $key_sql[d_azp_ibn_property_import_m_temp],
							d_azp_ibn_property_t_validate => strtoupper($key_sql[d_azp_ibn_property_import_t_validate]),
							d_azp_ibn_property_t_acount => strtoupper($key_sql[d_azp_ibn_property_import_t_acount]),
							d_azp_ibn_property_t_bcount => strtoupper($key_sql[d_azp_ibn_property_import_t_bcount]),
							d_azp_ibn_property_t_address => strtoupper($key_sql[d_azp_ibn_property_import_t_address]),
							d_azp_ibn_property_t_area => strtoupper($key_sql[d_azp_ibn_property_import_t_area]),
							d_azp_ibn_property_t_assessment => strtoupper($key_sql[d_azp_ibn_property_import_t_assessment]),
							d_azp_ibn_property_t_causal_feasibility => strtoupper($key_sql[d_azp_ibn_property_import_t_causal_feasibility]),
							d_azp_ibn_property_t_consecutive => strtoupper($key_sql[d_azp_ibn_property_import_t_consecutive]),
							d_azp_ibn_property_t_department => strtoupper($key_sql[d_azp_ibn_property_import_t_department]),
							d_azp_ibn_property_t_full_name => strtoupper($key_sql[d_azp_ibn_property_import_t_full_name]),
							d_azp_ibn_property_t_identification => strtoupper($key_sql[d_azp_ibn_property_import_t_identification]),
							d_azp_ibn_property_t_market_value => strtoupper($key_sql[d_azp_ibn_property_import_t_market_value]),
							d_azp_ibn_property_t_municipality => strtoupper($key_sql[d_azp_ibn_property_import_t_municipality]),
							d_azp_ibn_property_t_nro_registration => strtoupper($key_sql[d_azp_ibn_property_import_t_nro_registration]),
							d_azp_ibn_property_t_observation => strtoupper($key_sql[d_azp_ibn_property_import_t_observation]),
							d_azp_ibn_property_t_ownership => strtoupper($key_sql[d_azp_ibn_property_import_t_ownership]),
							d_azp_ibn_property_t_policy_effective => strtoupper($key_sql[d_azp_ibn_property_import_t_policy_effective]),
							d_azp_ibn_property_t_policy_final => strtoupper($key_sql[d_azp_ibn_property_import_t_policy_final]),
							d_azp_ibn_property_t_policy_viability => strtoupper($key_sql[d_azp_ibn_property_import_t_policy_viability]),
							d_azp_ibn_property_t_purchase_annotation => strtoupper($key_sql[d_azp_ibn_property_import_t_purchase_annotation]),
							d_azp_ibn_property_t_viable => strtoupper($key_sql[d_azp_ibn_property_import_t_viable]),
							d_azp_ibn_property_t_well_viable => strtoupper($key_sql[d_azp_ibn_property_import_t_well_viable]),
							d_azp_ibn_property_t_st_located => strtoupper($key_sql[d_azp_ibn_property_import_t_st_located]),
							d_azp_ibn_property_t_st_returnable => strtoupper($key_sql[d_azp_ibn_property_import_t_st_returnable]),
							d_azp_ibn_property_t_st_receipt => strtoupper($key_sql[d_azp_ibn_property_import_t_st_receipt]),
							d_azp_ibn_property_t_st_date => strtoupper($key_sql[d_azp_ibn_property_import_t_st_date]),
							d_azp_ibn_property_t_st_value => strtoupper($key_sql[d_azp_ibn_property_import_t_st_value]),
							d_azp_ibn_property_t_zmunicipality => strtoupper($key_sql[d_azp_ibn_property_import_t_zmunicipality]),
							d_azp_ibn_property_t_text_one => strtoupper($key_sql[d_azp_ibn_property_import_t_text_one]),
							d_azp_ibn_property_t_text_two => strtoupper($key_sql[d_azp_ibn_property_import_t_text_two]),
							d_azp_ibn_property_t_text_three => strtoupper($key_sql[d_azp_ibn_property_import_t_text_three]),
							d_azp_ibn_property_t_text_four => strtoupper($key_sql[d_azp_ibn_property_import_t_text_four]),
							d_azp_ibn_property_t_text_five => strtoupper($key_sql[d_azp_ibn_property_import_t_text_five]),
							d_azp_ibn_property_t_text_six => strtoupper($key_sql[d_azp_ibn_property_import_t_text_six]),
							d_azp_ibn_property_t_text_seven => strtoupper($key_sql[d_azp_ibn_property_import_t_text_seven]),
							d_azp_ibn_property_t_text_eight => strtoupper($key_sql[d_azp_ibn_property_import_t_text_eight]),
							d_azp_ibn_property_t_sel_one => strtoupper($key_sql[d_azp_ibn_property_import_t_sel_one]),
							d_azp_ibn_property_t_sel_two => strtoupper($key_sql[d_azp_ibn_property_import_t_sel_two]),
							d_azp_ibn_property_t_sel_three => strtoupper($key_sql[d_azp_ibn_property_import_t_sel_three]),
							d_azp_ibn_property_t_sel_four => strtoupper($key_sql[d_azp_ibn_property_import_t_sel_four]),
							d_azp_ibn_property_t_sel_five => strtoupper($key_sql[d_azp_ibn_property_import_t_sel_five]),
							d_azp_ibn_property_v_id_azp_ibn_control_panel => $key_sql[d_azp_ibn_property_import_v_id_azp_ibn_control_panel],
							d_azp_ibn_property_v_id_azp_ibn_observation => $key_sql[d_azp_ibn_property_import_v_id_azp_ibn_observation],
							d_azp_ibn_property_v_id_azp_ibn_state => $key_sql[d_azp_ibn_property_import_v_id_azp_ibn_state],
							d_azp_ibn_property_v_id_azp_ibn_type_concept => $key_sql[d_azp_ibn_property_import_v_id_azp_ibn_type_concept],
							d_azp_ibn_property_v_id_azp_ibn_type_property => $key_sql[d_azp_ibn_property_import_v_id_azp_ibn_type_property],
						);
						# Insertar valores en la tabla segun estructura de la tabla
						$this->db->insert(t_azp_ibn_property, $var_array);
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("*", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_control . "' AND " .
					d_azp_ibn_property_m_deleted . " = '1' GROUP BY " . d_azp_ibn_property_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_property_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_property,
							d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_control . "' AND " .
							d_azp_ibn_property_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_property_id_azp_ibn_property];
								$var_cedula2 = $value2[d_azp_ibn_property_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_property_t_acount => $var_union, d_azp_ibn_property_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $var_id2 . "'");
							endforeach;
						}
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " AS 'lbl_azp_ibn_property_id_azp_ibn_property'
					FROM " . t_azp_ibn_property . " tc_azp_ibn_property
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " = '2'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'
						AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_property_t_validate => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $value['lbl_azp_ibn_property_id_azp_ibn_property'] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_property_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_m_temp . " = '2' AND " . d_azp_ibn_property_t_validate . " = ''");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_property_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_m_temp . " = '2' AND " . d_azp_ibn_property_t_validate . " IS NULL");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " AS 'lbl_azp_ibn_property_t_acount',
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
					FROM " . t_azp_ibn_property . " tc_azp_ibn_property
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_property." . d_azp_ibn_property_t_identification . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . "
					WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " = '2'
						AND tc_azp_ibn_property." . d_azp_ibn_property_t_validate . " = '0'
						AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_control . "'
					GROUP BY tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
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
							d_azp_ibn_data_main_t_acount => $value['lbl_azp_ibn_property_t_acount'],
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
					d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_control . "' AND " .
					d_azp_ibn_data_main_m_deleted . " = '1' GROUP BY " . d_azp_ibn_data_main_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_data_main_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_data_main,
							d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_control . "' AND " .
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
				$var_array = array(d_azp_ibn_property_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_m_temp . " = '2'");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_load_data_d'", t_azp_ibn_property_import, d_azp_ibn_property_import_t_load_data . " = 'Duplicados'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_load_data_d = $key_sql['lbl_load_data_d']; endforeach; } else { $var_load_data_d = 0; }
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_load_data_n'", t_azp_ibn_property_import, d_azp_ibn_property_import_t_load_data . " = 'Nuevos'");
				# Validar si la consulta es verdadera
				if (false != $var_sql) { foreach ($var_sql as $key_sql): $var_load_data_n = $key_sql['lbl_load_data_n']; endforeach; } else { $var_load_data_n = 0; }
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->select("COUNT(*) AS 'lbl_count_total'", t_azp_ibn_property_import);
				# Validar si la consulta es verdadera
				if (false != $var_sql) {
					# Recorrer las filas de la consulta generada
					foreach ($var_sql as $key_sql): $var_total_id = $key_sql['lbl_count_total']; endforeach;
					# Retornar el mensaje una vez ejecutada la rutina del proceso
					return array('success' => 1,
						'message' => '<b>Exito:</b>' .' ' . 'Archivo almacenado correctamente.' . '<br><br>' .
							'<b>Duplicados:</b>' . ' ' .'Registros No Cargados' . ' ' . $var_load_data_d . '.' . '<br>' .
							'<b>Nuevos:</b>' . ' ' .'Registros Si Cargados.' . ' ' . $var_load_data_n . '.'
					);
				}
				#-------------------------------------------------------------------------#
			}
		}

		# Control Errores Insert
		final private function error_sql_azp_ibn_property_insert(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_cr_description'])) { throw new Exception('<b>Error:</b> El campo de descripcion esta prohibido modificar.'); }
				if (!isset($data['field_cr_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				if (!isset($data['field_cr_area'])) { throw new Exception('<b>Error:</b> El campo de area esta prohibido modificar.'); }
				if (!isset($data['field_cr_assessment'])) { throw new Exception('<b>Error:</b> El campo de gravamen esta prohibido modificar.'); }
				if (!isset($data['field_cr_causal_feasibility'])) { throw new Exception('<b>Error:</b> El campo de causal viabilidad esta prohibido modificar.'); }
				if (!isset($data['field_cr_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_cr_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_cr_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_cr_identification'])) { throw new Exception('<b>Error:</b> El campo de identificacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_market_value'])) { throw new Exception('<b>Error:</b> El campo de vr comercial esta prohibido modificar.'); }
				if (!isset($data['field_cr_municipality'])) { throw new Exception('<b>Error:</b> El campo de municipio esta prohibido modificar.'); }
				if (!isset($data['field_cr_nro_registration'])) { throw new Exception('<b>Error:</b> El campo de nro matricula esta prohibido modificar.'); }
				if (!isset($data['field_cr_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_ownership'])) { throw new Exception('<b>Error:</b> El campo de titularidad esta prohibido modificar.'); }
				if (!isset($data['field_cr_purchase_annotation'])) { throw new Exception('<b>Error:</b> El campo de anotacion compra esta prohibido modificar.'); }
				if (!isset($data['field_cr_viable'])) { throw new Exception('<b>Error:</b> El campo de viable esta prohibido modificar.'); }
				if (!isset($data['field_cr_well_viable'])) { throw new Exception('<b>Error:</b> El campo de bien viable esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_returnable'])) { throw new Exception('<b>Error:</b> El campo de reembolsable esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_receipt'])) { throw new Exception('<b>Error:</b> El campo de recibo esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_date'])) { throw new Exception('<b>Error:</b> El campo de fecha esta prohibido modificar.'); }
				if (!isset($data['field_cr_st_value'])) { throw new Exception('<b>Error:</b> El campo de valor de certificado esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_one'])) { throw new Exception('<b>Error:</b> El campo 1 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_two'])) { throw new Exception('<b>Error:</b> El campo 2 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_three'])) { throw new Exception('<b>Error:</b> El campo 3 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_four'])) { throw new Exception('<b>Error:</b> El campo 4 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_five'])) { throw new Exception('<b>Error:</b> El campo 5 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_six'])) { throw new Exception('<b>Error:</b> El campo 6 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_seven'])) { throw new Exception('<b>Error:</b> El campo 7 esta prohibido modificar.'); }
				if (!isset($data['field_cr_text_eight'])) { throw new Exception('<b>Error:</b> El campo 8 esta prohibido modificar.'); }
				if (!isset($data['field_cr_sel_one'])) { throw new Exception('<b>Error:</b> El campo de lista 1 esta prohibido modificar.'); }
				if (!isset($data['field_cr_sel_two'])) { throw new Exception('<b>Error:</b> El campo de lista 2 esta prohibido modificar.'); }
				if (!isset($data['field_cr_sel_three'])) { throw new Exception('<b>Error:</b> El campo de lista 3 esta prohibido modificar.'); }
				if (!isset($data['field_cr_sel_four'])) { throw new Exception('<b>Error:</b> El campo de lista 4 esta prohibido modificar.'); }
				if (!isset($data['field_cr_sel_five'])) { throw new Exception('<b>Error:</b> El campo de lista 5 esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_control_panel'])) { throw new Exception('<b>Error:</b> El campo de tablero de control esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_observation'])) { throw new Exception('<b>Error:</b> El campo de lista observacion esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_concept'])) { throw new Exception('<b>Error:</b> El campo de tipo de concepto esta prohibido modificar.'); }
				if (!isset($data['field_cr_ibn_type_property'])) { throw new Exception('<b>Error:</b> El campo de tipo de inmueble esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_area = $this->db->scape($data['field_cr_area']);
				$empty_assessment = $this->db->scape($data['field_cr_assessment']);
				$empty_causal_feasibility = $this->db->scape($data['field_cr_causal_feasibility']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_market_value = $this->db->scape($data['field_cr_market_value']);
				$empty_municipality = $this->db->scape($data['field_cr_municipality']);
				$empty_nro_registration = $this->db->scape($data['field_cr_nro_registration']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_ownership = $this->db->scape($data['field_cr_ownership']);
				$empty_purchase_annotation = $this->db->scape($data['field_cr_purchase_annotation']);
				$empty_viable = $this->db->scape($data['field_cr_viable']);
				$empty_well_viable = $this->db->scape($data['field_cr_well_viable']);
				$empty_st_returnable = $this->db->scape($data['field_cr_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_cr_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_cr_st_date']);
				$empty_st_value = $this->db->scape($data['field_cr_st_value']);
				//$empty_zmunicipality = $this->db->scape($data['field_cr_zmunicipality']);
				$empty_text_one = $this->db->scape($data['field_cr_text_one']);
				$empty_text_two = $this->db->scape($data['field_cr_text_two']);
				$empty_text_three = $this->db->scape($data['field_cr_text_three']);
				$empty_text_four = $this->db->scape($data['field_cr_text_four']);
				$empty_text_five = $this->db->scape($data['field_cr_text_five']);
				$empty_text_six = $this->db->scape($data['field_cr_text_six']);
				$empty_text_seven = $this->db->scape($data['field_cr_text_seven']);
				$empty_text_eight = $this->db->scape($data['field_cr_text_eight']);
				$empty_sel_one = $this->db->scape($data['field_cr_sel_one']);
				$empty_sel_two = $this->db->scape($data['field_cr_sel_two']);
				$empty_sel_three = $this->db->scape($data['field_cr_sel_three']);
				$empty_sel_four = $this->db->scape($data['field_cr_sel_four']);
				$empty_sel_five = $this->db->scape($data['field_cr_sel_five']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_observation = $this->db->scape($data['field_cr_ibn_observation']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				$empty_ibn_type_concept = $this->db->scape($data['field_cr_ibn_type_concept']);
				$empty_ibn_type_property = $this->db->scape($data['field_cr_ibn_type_property']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
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
				if (Func::emp($empty_ibn_type_property) || strtolower($empty_ibn_type_property) == strtolower('seleccionar') || $empty_ibn_type_property == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de inmueble es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_property)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de inmueble solo permite numeros.');
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
				# Verificar en la base de datos si existen el registro
				$sql_ibn_type_property = $this->db->select('*', t_azp_ibn_type_property, d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $empty_ibn_type_property . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_property) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_property) == '') { $sql_ibn_type_property[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_property[0][0]) != strtolower($empty_ibn_type_property)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de inmueble seleccionado no se encuentra registrado.');
					}
				}
				#-------------------------------------------------------------------------#
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		# Query Sql Insert
		final public function sql_azp_ibn_property_insert(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_insert($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_description = $this->db->scape($data['field_cr_description']);
				$empty_address = $this->db->scape($data['field_cr_address']);
				$empty_area = $this->db->scape($data['field_cr_area']);
				$empty_assessment = $this->db->scape($data['field_cr_assessment']);
				$empty_causal_feasibility = $this->db->scape($data['field_cr_causal_feasibility']);
				$empty_comment_legal = $this->db->scape($data['field_cr_comment_legal']);
				$empty_department = $this->db->scape($data['field_cr_department']);
				$empty_full_name = $this->db->scape($data['field_cr_full_name']);
				$empty_identification = $this->db->scape($data['field_cr_identification']);
				$empty_limitation = $this->db->scape($data['field_cr_limitation']);
				$empty_market_value = $this->db->scape($data['field_cr_market_value']);
				$empty_municipality = $this->db->scape($data['field_cr_municipality']);
				$empty_nro_registration = $this->db->scape($data['field_cr_nro_registration']);
				$empty_observation = $this->db->scape($data['field_cr_observation']);
				$empty_ownership = $this->db->scape($data['field_cr_ownership']);
				$empty_purchase_annotation = $this->db->scape($data['field_cr_purchase_annotation']);
				$empty_viable = $this->db->scape($data['field_cr_viable']);
				//$empty_well_viable = $this->db->scape($data['field_cr_well_viable']);
				$empty_st_returnable = $this->db->scape($data['field_cr_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_cr_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_cr_st_date']);
				$empty_st_value = $this->db->scape($data['field_cr_st_value']);
				//$empty_zmunicipality = $this->db->scape($data['field_cr_zmunicipality']);
				$empty_text_one = $this->db->scape($data['field_cr_text_one']);
				$empty_text_two = $this->db->scape($data['field_cr_text_two']);
				$empty_text_three = $this->db->scape($data['field_cr_text_three']);
				$empty_text_four = $this->db->scape($data['field_cr_text_four']);
				$empty_text_five = $this->db->scape($data['field_cr_text_five']);
				$empty_text_six = $this->db->scape($data['field_cr_text_six']);
				$empty_text_seven = $this->db->scape($data['field_cr_text_seven']);
				$empty_text_eight = $this->db->scape($data['field_cr_text_eight']);
				$empty_sel_one = $this->db->scape($data['field_cr_sel_one']);
				$empty_sel_two = $this->db->scape($data['field_cr_sel_two']);
				$empty_sel_three = $this->db->scape($data['field_cr_sel_three']);
				$empty_sel_four = $this->db->scape($data['field_cr_sel_four']);
				$empty_sel_five = $this->db->scape($data['field_cr_sel_five']);
				$empty_ibn_control_panel = $this->db->scape($data['field_cr_ibn_control_panel']);
				$empty_ibn_observation = $this->db->scape($data['field_cr_ibn_observation']);
				$empty_ibn_state = $this->db->scape($data['field_cr_ibn_state']);
				$empty_ibn_type_concept = $this->db->scape($data['field_cr_ibn_type_concept']);
				$empty_ibn_type_property = $this->db->scape($data['field_cr_ibn_type_property']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_type_property, d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $empty_ibn_type_property . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value): $empty_itp_name = $value[d_azp_ibn_type_property_t_name]; endforeach;
				} else { $empty_itp_name = ''; }
				#-------------------------------------------------------------------------#
				if ($empty_viable != 'SI' || $empty_viable != 'NO') { $empty_well_viable = ''; }
				if ($empty_viable == 'SI') { $empty_well_viable = $empty_itp_name . ' FMI No ' . $empty_nro_registration; }
				if ($empty_viable == 'NO') { $empty_well_viable = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "' AND " .
					d_azp_ibn_property_t_identification . " = '" . $empty_identification . "' " .
					"GROUP BY " . d_azp_ibn_property_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key_sql => $value):
						# Asignar valores a una nueva variable
						$empty_consecutive = $value[d_azp_ibn_property_t_consecutive];
					endforeach;
				} else {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("MAX(" . d_azp_ibn_property_t_consecutive . ") AS 'lbl_max'", t_azp_ibn_property,
						d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'");
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
					d_azp_ibn_property_m_by_created => $_SESSION[SESS_APP_ID],
					d_azp_ibn_property_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_property_m_date_created => DATE_HOUR,
					d_azp_ibn_property_m_date_modified => DATE_HOUR,
					d_azp_ibn_property_m_deleted => '1',
					d_azp_ibn_property_m_description => $empty_description,
					d_azp_ibn_property_m_level => '2',
					d_azp_ibn_property_m_status => '1',
					d_azp_ibn_property_m_temp => '2',
					d_azp_ibn_property_t_validate => '0',
					d_azp_ibn_property_t_address => strtoupper($empty_address),
					d_azp_ibn_property_t_area => strtoupper($empty_area),
					d_azp_ibn_property_t_assessment => strtoupper($empty_assessment),
					d_azp_ibn_property_t_causal_feasibility => strtoupper($empty_causal_feasibility),
					d_azp_ibn_property_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_property_t_concept => strtoupper($empty_concept),
					d_azp_ibn_property_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_property_t_department => strtoupper($empty_department),
					d_azp_ibn_property_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_property_t_identification => strtoupper($empty_identification),
					d_azp_ibn_property_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_property_t_market_value => strtoupper($empty_market_value),
					d_azp_ibn_property_t_municipality => strtoupper($empty_municipality),
					d_azp_ibn_property_t_nro_registration => strtoupper($empty_nro_registration),
					d_azp_ibn_property_t_observation => strtoupper($empty_observation),
					d_azp_ibn_property_t_ownership => strtoupper($empty_ownership),
					d_azp_ibn_property_t_purchase_annotation => strtoupper($empty_purchase_annotation),
					d_azp_ibn_property_t_viable => strtoupper($empty_viable),
					d_azp_ibn_property_t_well_viable => strtoupper($empty_itp_name) . ' FMI No ' . $empty_nro_registration,
					d_azp_ibn_property_t_st_returnable => strtoupper($empty_st_returnable),
					d_azp_ibn_property_t_st_receipt => strtoupper($empty_st_receipt),
					d_azp_ibn_property_t_st_date => strtoupper($empty_st_date),
					d_azp_ibn_property_t_st_value => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_st_value))),
					//d_azp_ibn_property_t_zmunicipality => strtoupper($empty_zmunicipality),
					d_azp_ibn_property_t_text_one => strtoupper($empty_text_one),
					d_azp_ibn_property_t_text_two => strtoupper($empty_text_two),
					d_azp_ibn_property_t_text_three => strtoupper($empty_text_three),
					d_azp_ibn_property_t_text_four => strtoupper($empty_text_four),
					d_azp_ibn_property_t_text_five => strtoupper($empty_text_five),
					d_azp_ibn_property_t_text_six => strtoupper($empty_text_six),
					d_azp_ibn_property_t_text_seven => strtoupper($empty_text_seven),
					d_azp_ibn_property_t_text_eight => strtoupper($empty_text_eight),
					d_azp_ibn_property_t_sel_one => strtoupper($empty_sel_one),
					d_azp_ibn_property_t_sel_two => strtoupper($empty_sel_two),
					d_azp_ibn_property_t_sel_three => strtoupper($empty_sel_three),
					d_azp_ibn_property_t_sel_four => strtoupper($empty_sel_four),
					d_azp_ibn_property_t_sel_five => strtoupper($empty_sel_five),
					d_azp_ibn_property_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_property_v_id_azp_ibn_observation => $empty_ibn_observation,
					d_azp_ibn_property_v_id_azp_ibn_state => $empty_ibn_state,
					d_azp_ibn_property_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
					d_azp_ibn_property_v_id_azp_ibn_type_property => $empty_ibn_type_property,
				);
				# Query Sql Insert: Registrar valores en la tabla segun sus campos
				$this->db->insert(t_azp_ibn_property, $var_array);
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_m_temp . " = '2'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$empty_id = $value[d_azp_ibn_property_id_azp_ibn_property];
					endforeach;
				} else { $empty_id = 0; }
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_property_v_id_azp_ibn_control_panel];

						$var_rg_reg = $value[d_azp_ibn_property_t_nro_registration];
						$var_rg_via = $value[d_azp_ibn_property_t_viable];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					
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
				$var_array = array(d_azp_ibn_property_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_property_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_property_v_id_azp_ibn_control_panel];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
							= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
					
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '2'
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
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
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
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concepty,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
				$var_array = array(d_azp_ibn_property_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_property_m_deleted . " = '1' GROUP BY " . d_azp_ibn_property_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_property_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_property,
							d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_property_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_property_id_azp_ibn_property];
								$var_cedula2 = $value2[d_azp_ibn_property_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_property_t_acount => $var_union, d_azp_ibn_property_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT * FROM " . t_azp_ibn_property . " tc_azp_ibn_property
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_acount . "
					WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " = '2'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
				");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Array para asignar argumentos o valores a los elementos
						$var_array = array(d_azp_ibn_property_t_validate => '1',);
						# Query Sql Update: Actualizar valores de la tabla segun sus campos
						$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $value[d_azp_ibn_property_id_azp_ibn_property] . "'");
					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_property_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_m_temp . " = '2' AND " . d_azp_ibn_property_t_validate . " = ''");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_property_t_validate => '0',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_m_temp . " = '2' AND " . d_azp_ibn_property_t_validate . " IS NULL");
				#-------------------------------------------------------------------------#
				# Consulta para identificar los nuevos registros en la tabla
				$var_sql = $this->db->query("
					SELECT
						tc_azp_ibn_property." . d_azp_ibn_property_t_acount . " AS 'lbl_azp_ibn_property_t_acount',
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
					FROM " . t_azp_ibn_property . " tc_azp_ibn_property
					INNER JOIN " . t_azp_ibn_data_main . " tc_azp_ibn_data_main
						ON tc_azp_ibn_property." . d_azp_ibn_property_t_identification . "
							= tc_azp_ibn_data_main." . d_azp_ibn_data_main_t_identification . "
					WHERE tc_azp_ibn_property." . d_azp_ibn_property_m_temp . " = '2'
						AND tc_azp_ibn_property." . d_azp_ibn_property_t_validate . " = '0'
						AND tc_azp_ibn_data_main." . d_azp_ibn_data_main_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
						AND tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $empty_ibn_control_panel . "'
					GROUP BY tc_azp_ibn_property." . d_azp_ibn_property_t_acount . "
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
							d_azp_ibn_data_main_t_acount => $value['lbl_azp_ibn_property_t_acount'],
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
				$var_array = array(d_azp_ibn_property_m_temp => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_m_temp . " = '2' ");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.', 'register' => $empty_id);
			}
		}

		# Control Errores Insert
		final private function error_sql_azp_ibn_property_massive(array $data) {
			try {
				#-------------------------------------------------------------------------#
				if (!isset($data['field_ms_assessment'])) { throw new Exception('<b>Error:</b> El campo de gravamen esta prohibido modificar.'); }
				if (!isset($data['field_ms_causal_feasibility'])) { throw new Exception('<b>Error:</b> El campo de causal viabilidad esta prohibido modificar.'); }
				if (!isset($data['field_ms_market_value'])) { throw new Exception('<b>Error:</b> El campo de vr comercial esta prohibido modificar.'); }
				if (!isset($data['field_ms_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_ms_ownership'])) { throw new Exception('<b>Error:</b> El campo de titularidad esta prohibido modificar.'); }
				if (!isset($data['field_ms_purchase_annotation'])) { throw new Exception('<b>Error:</b> El campo de anotacion compra esta prohibido modificar.'); }
				if (!isset($data['field_ms_viable'])) { throw new Exception('<b>Error:</b> El campo de viable esta prohibido modificar.'); }
				if (!isset($data['field_ms_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				if (!isset($data['field_ms_ibn_type_concept'])) { throw new Exception('<b>Error:</b> El campo de tipo de concepto esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_assessment = $this->db->scape($data['field_ms_assessment']);
				$empty_causal_feasibility = $this->db->scape($data['field_ms_causal_feasibility']);
				$empty_market_value = $this->db->scape($data['field_ms_market_value']);
				$empty_observation = $this->db->scape($data['field_ms_observation']);
				$empty_ownership = $this->db->scape($data['field_ms_ownership']);
				$empty_purchase_annotation = $this->db->scape($data['field_ms_purchase_annotation']);
				$empty_viable = $this->db->scape($data['field_ms_viable']);
				$empty_ibn_state = $this->db->scape($data['field_ms_ibn_state']);
				$empty_ibn_type_concept = $this->db->scape($data['field_ms_ibn_type_concept']);
				#-------------------------------------------------------------------------#
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_assessment)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de gravamen es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_causal_feasibility)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de causal viabilidad es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_market_value)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de vr comercial es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_ownership)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de titularidad es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_purchase_annotation)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de anotacion compra es obligatorio.');
				}
				#-------------------------------------------------------------------------#
				if (Func::emp($empty_viable) || strtolower($empty_viable) == strtolower('seleccionar')) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de viable es obligatorio.');
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

		# Query Sql Insert
		final public function sql_azp_ibn_property_massive(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_massive($data);
			if (!is_bool($var_error)) { return $var_error; }
			if (!isset($_SESSION[SESS_APP_ID])) {
				# Redireccionar a una pagina segun el metodo cargado
				return array('error' => 1, 'message' => '<b>Error:</b> La sesión ha caducado, vuelve a iniciar sesión dando clic <a href="' . URL . 'login/?field_id=session">aqui</a>.');
			} else {
				#-------------------------------------------------------------------------#
				$empty_id = $data['field_ms_id'];
				$empty_assessment = $this->db->scape($data['field_ms_assessment']);
				$empty_causal_feasibility = $this->db->scape($data['field_ms_causal_feasibility']);
				$empty_market_value = $this->db->scape($data['field_ms_market_value']);
				$empty_observation = $this->db->scape($data['field_ms_observation']);
				$empty_ownership = $this->db->scape($data['field_ms_ownership']);
				$empty_purchase_annotation = $this->db->scape($data['field_ms_purchase_annotation']);
				$empty_viable = $this->db->scape($data['field_ms_viable']);
				$empty_ibn_state = $this->db->scape($data['field_ms_ibn_state']);
				$empty_ibn_type_concept = $this->db->scape($data['field_ms_ibn_type_concept']);
				# --------------------------------------------------------------------------------------------------
				# Separar la cadena usando un delimitador
				$var_array = explode(",", $empty_id);
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_array as $key => $value) {
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("*", t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $value . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$empty_id_id = $value[d_azp_ibn_property_id_azp_ibn_property];
							$empty_nro_registration = $value[d_azp_ibn_property_t_nro_registration];
							$empty_address = $value[d_azp_ibn_property_t_address];
							$empty_department = $value[d_azp_ibn_property_t_department];
							$empty_municipality = $value[d_azp_ibn_property_t_municipality];
							$empty_itp_id = $value[d_azp_ibn_property_v_id_azp_ibn_type_property];
						endforeach;
					}
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select("*", t_azp_ibn_type_property, d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $empty_itp_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value): $empty_itp_name = $value[d_azp_ibn_type_property_t_name]; endforeach;
					}
					#---------------------------------------#
					if ($empty_viable == 'NO') { $empty_well_viable = ''; } else if ($empty_viable == 'SI') {
						$empty_well_viable = $empty_itp_name . ' FMI No ' . $empty_nro_registration;
					}
					#---------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_ibn_property_m_by_created => $_SESSION[SESS_APP_ID],
						d_azp_ibn_property_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_property_m_date_created => DATE_HOUR,
						d_azp_ibn_property_m_date_modified => DATE_HOUR,
						//d_azp_ibn_property_m_deleted => '1',
						//d_azp_ibn_property_m_description => $empty_description,
						//d_azp_ibn_property_m_level => '2',
						//d_azp_ibn_property_m_status => '1',
						//d_azp_ibn_property_m_temp => '1',
						//d_azp_ibn_property_t_address => strtoupper($empty_address),
						//d_azp_ibn_property_t_area => strtoupper($empty_area),
						d_azp_ibn_property_t_assessment => strtoupper($empty_assessment),
						d_azp_ibn_property_t_causal_feasibility => strtoupper($empty_causal_feasibility),
						//d_azp_ibn_property_t_comment_legal => strtoupper($empty_comment_legal),
						//d_azp_ibn_property_t_concept => strtoupper($empty_concept),
						//d_azp_ibn_property_t_consecutive => strtoupper($empty_consecutive),
						//d_azp_ibn_property_t_department => strtoupper($empty_department),
						//d_azp_ibn_property_t_full_name => strtoupper($empty_full_name),
						//d_azp_ibn_property_t_identification => strtoupper($empty_identification),
						d_azp_ibn_property_t_market_value => strtoupper($empty_market_value),
						//d_azp_ibn_property_t_municipality => strtoupper($empty_municipality),
						//d_azp_ibn_property_t_nro_registration => strtoupper($empty_nro_registration),
						d_azp_ibn_property_t_observation => strtoupper($empty_observation),
						d_azp_ibn_property_t_ownership => strtoupper($empty_ownership),
						d_azp_ibn_property_t_purchase_annotation => strtoupper($empty_purchase_annotation),
						d_azp_ibn_property_t_viable => strtoupper($empty_viable),
						d_azp_ibn_property_t_well_viable => strtoupper($empty_well_viable),
						//d_azp_ibn_property_t_st_returnable => strtoupper($empty_st_returnable),
						//d_azp_ibn_property_t_st_receipt => strtoupper($empty_st_receipt),
						//d_azp_ibn_property_t_st_date => strtoupper($empty_st_date),
						//d_azp_ibn_property_t_st_value => strtoupper($empty_st_value),
						//d_azp_ibn_property_t_zmunicipality => strtoupper($empty_zmunicipality),
						//d_azp_ibn_property_t_text_one => strtoupper($empty_text_one),
						//d_azp_ibn_property_t_text_two => strtoupper($empty_text_two),
						//d_azp_ibn_property_t_text_three => strtoupper($empty_text_three),
						//d_azp_ibn_property_t_text_four => strtoupper($empty_text_four),
						//d_azp_ibn_property_t_text_five => strtoupper($empty_text_five),
						//d_azp_ibn_property_t_text_six => strtoupper($empty_text_six),
						//d_azp_ibn_property_t_text_seven => strtoupper($empty_text_seven),
						//d_azp_ibn_property_t_text_eight => strtoupper($empty_text_eight),
						//d_azp_ibn_property_t_sel_one => strtoupper($empty_sel_one),
						//d_azp_ibn_property_t_sel_two => strtoupper($empty_sel_two),
						//d_azp_ibn_property_t_sel_three => strtoupper($empty_sel_three),
						//d_azp_ibn_property_t_sel_four => strtoupper($empty_sel_four),
						//d_azp_ibn_property_t_sel_five => strtoupper($empty_sel_five),
						//d_azp_ibn_property_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
						//d_azp_ibn_property_v_id_azp_ibn_observation => $empty_ibn_observation,
						d_azp_ibn_property_v_id_azp_ibn_state => $empty_ibn_state,
						d_azp_ibn_property_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
						//d_azp_ibn_property_v_id_azp_ibn_type_property => $empty_ibn_type_property,
					);
					# Query Sql Insert: Registrar valores en la tabla segun sus campos
					$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id_id . "'");
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_property_m_deleted . " = '1' GROUP BY " . d_azp_ibn_property_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_property_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_property,
							d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_property_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_property_id_azp_ibn_property];
								$var_cedula2 = $value2[d_azp_ibn_property_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_property_t_acount => $var_union, d_azp_ibn_property_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_property_multiple(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_property_multiple(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_multiple($data);
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
				//$var_nro_registration = $data['field_tb_nro_registration'];
				//$var_department = $data['field_tb_department'];
				//$var_municipality = $data['field_tb_municipality'];
				//$var_address = $data['field_tb_address'];
				$var_ibn_state = $data['field_tb_ibn_state'];
				$var_ibn_type_property = $data['field_tb_ibn_type_property'];
				$var_area = $data['field_tb_area'];
				$var_purchase_annotation = $data['field_tb_purchase_annotation'];
				$var_market_value = $data['field_tb_market_value'];
				$var_ownership = $data['field_tb_ownership'];
				$var_assessment = $data['field_tb_assessment'];
				$var_ibn_type_concept = $data['field_tb_ibn_type_concept'];
				$var_causal_feasibility = $data['field_tb_causal_feasibility'];
				$var_viable = $data['field_tb_viable'];
				//$var_well_viable = $data['field_tb_well_viable'];
				//$var_st_returnable = $data['field_tb_st_returnable'];
				//$var_st_receipt = $data['field_tb_st_receipt'];
				//$var_st_date = $data['field_tb_st_date'];
				//$var_st_value = $data['field_tb_st_value'];
				//$var_zmunicipality = $data['field_tb_zmunicipality'];
				$var_text_one = $data['field_tb_text_one'];
				$var_text_two = $data['field_tb_text_two'];
				$var_text_three = $data['field_tb_text_three'];
				$var_text_four = $data['field_tb_text_four'];
				$var_text_five = $data['field_tb_text_five'];
				$var_text_six = $data['field_tb_text_six'];
				$var_text_seven = $data['field_tb_text_seven'];
				$var_text_eight = $data['field_tb_text_eight'];
				$var_sel_one = $data['field_tb_sel_one'];
				$var_sel_two = $data['field_tb_sel_two'];
				$var_sel_three = $data['field_tb_sel_three'];
				$var_sel_four = $data['field_tb_sel_four'];
				$var_sel_five = $data['field_tb_sel_five'];
				#-------------------------------------------------------------------------#
				# Recorrer los datos uno por uno segun los seleccionados
				for ($i = 0; $i < count($var_id); $i++) {
					$empty_id = $this->db->scape($var_id[$i]);
					//$empty_nro_registration = $this->db->scape($var_nro_registration[$i]);
					//$empty_department = $this->db->scape($var_department[$i]);
					//$empty_municipality = $this->db->scape($var_municipality[$i]);
					//$empty_address = $this->db->scape($var_address[$i]);
					$empty_ibn_state = $this->db->scape($var_ibn_state[$i]);
					$empty_ibn_type_property = $this->db->scape($var_ibn_type_property[$i]);
					$empty_area = $this->db->scape($var_area[$i]);
					$empty_purchase_annotation = $this->db->scape($var_purchase_annotation[$i]);
					$empty_market_value = $this->db->scape($var_market_value[$i]);
					$empty_ownership = $this->db->scape($var_ownership[$i]);
					$empty_assessment = $this->db->scape($var_assessment[$i]);
					$empty_ibn_type_concept = $this->db->scape($var_ibn_type_concept[$i]);
					$empty_causal_feasibility = $this->db->scape($var_causal_feasibility[$i]);
					$empty_viable = $this->db->scape($var_viable[$i]);
					//$empty_well_viable = $this->db->scape($var_well_viable[$i]);
					//$empty_st_returnable = $this->db->scape($var_st_returnable[$i]);
					//$empty_st_receipt = $this->db->scape($var_st_receipt[$i]);
					//$empty_st_date = $this->db->scape($var_st_date[$i]);
					//$empty_st_value = $this->db->scape($var_st_value[$i]);
					//$empty_zmunicipality = $this->db->scape($var_zmunicipality[$i]);
					$empty_text_one = $this->db->scape($var_text_one[$i]);
					$empty_text_two = $this->db->scape($var_text_two[$i]);
					$empty_text_three = $this->db->scape($var_text_three[$i]);
					$empty_text_four = $this->db->scape($var_text_four[$i]);
					$empty_text_five = $this->db->scape($var_text_five[$i]);
					$empty_text_six = $this->db->scape($var_text_six[$i]);
					$empty_text_seven = $this->db->scape($var_text_seven[$i]);
					$empty_text_eight = $this->db->scape($var_text_eight[$i]);
					$empty_sel_one = $this->db->scape($var_sel_one[$i]);
					$empty_sel_two = $this->db->scape($var_sel_two[$i]);
					$empty_sel_three = $this->db->scape($var_sel_three[$i]);
					$empty_sel_four = $this->db->scape($var_sel_four[$i]);
					$empty_sel_five = $this->db->scape($var_sel_five[$i]);
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) { foreach ($var_sql as $key_sql => $value): $empty_nro_registration = $value[d_azp_ibn_property_t_nro_registration]; endforeach; } else { $emptnro_registration = ''; }
					#-------------------------------------------------------------------------#
					if ($empty_viable != 'SI' || $empty_viable != 'NO') { $empty_well_viable = ''; }
					if ($empty_viable == 'SI') { $empty_well_viable = $empty_ibn_type_property . ' FMI No ' . $empty_nro_registration; }
					if ($empty_viable == 'NO') { $empty_well_viable = ''; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_state, d_azp_ibn_state_t_name . " = '" . $empty_ibn_state . "' AND " .
						d_azp_ibn_state_v_id_azp_ibn_module . " = '2'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_state = $value[d_azp_ibn_state_id_azp_ibn_state];
						endforeach;
					} else { $empty_ibn_state = 2; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_concept, d_azp_ibn_type_concept_t_name . " = '" . $empty_ibn_type_concept . "' AND " .
						d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '2'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_concept = $value[d_azp_ibn_type_concept_id_azp_ibn_type_concept];
						endforeach;
					} else { $empty_ibn_type_concept = 2; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_type_property, d_azp_ibn_type_property_t_name . " = '" . $empty_ibn_type_property . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key_sql => $value):
							$empty_ibn_type_property = $value[d_azp_ibn_type_property_id_azp_ibn_type_property];
						endforeach;
					} else { $empty_ibn_type_property = 1; }
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							$var_array = array(
								d_azs_ibn_property_m_by_created => $_SESSION[SESS_APP_ID],
								d_azs_ibn_property_m_by_modified => $_SESSION[SESS_APP_ID],
								d_azs_ibn_property_m_date_created => DATE_HOUR,
								d_azs_ibn_property_m_date_modified => DATE_HOUR,
								d_azs_ibn_property_m_deleted => $value[d_azp_ibn_property_m_deleted],
								d_azs_ibn_property_m_description => $value[d_azp_ibn_property_m_description],
								d_azs_ibn_property_m_level => $value[d_azp_ibn_property_m_level],
								d_azs_ibn_property_m_status => $value[d_azp_ibn_property_m_status],
								d_azs_ibn_property_m_temp => $value[d_azp_ibn_property_m_temp],
								d_azs_ibn_property_t_address => strtoupper($value[d_azp_ibn_property_t_address]),
								d_azs_ibn_property_t_area => strtoupper($value[d_azp_ibn_property_t_area]),
								d_azs_ibn_property_t_assessment => strtoupper($value[d_azp_ibn_property_t_assessment]),
								d_azs_ibn_property_t_causal_feasibility => strtoupper($value[d_azp_ibn_property_t_causal_feasibility]),
								d_azs_ibn_property_t_comment_legal => strtoupper($value[d_azp_ibn_property_t_comment_legal]),
								d_azs_ibn_property_t_concept => strtoupper($value[d_azp_ibn_property_t_concept]),
								d_azs_ibn_property_t_consecutive => strtoupper($value[d_azp_ibn_property_t_consecutive]),
								d_azs_ibn_property_t_consecutive => strtoupper($value[d_azp_ibn_property_t_consecutive]),
								d_azs_ibn_property_t_department => strtoupper($value[d_azp_ibn_property_t_department]),
								d_azs_ibn_property_t_full_name => strtoupper($value[d_azp_ibn_property_t_full_name]),
								d_azs_ibn_property_t_identification => strtoupper($value[d_azp_ibn_property_t_identification]),
								d_azs_ibn_property_t_limitation => strtoupper($value[d_azp_ibn_property_t_limitation]),
								d_azs_ibn_property_t_market_value => strtoupper($value[d_azp_ibn_property_t_market_value]),
								d_azs_ibn_property_t_municipality => strtoupper($value[d_azp_ibn_property_t_municipality]),
								d_azs_ibn_property_t_nro_registration => strtoupper($value[d_azp_ibn_property_t_nro_registration]),
								d_azs_ibn_property_t_observation => strtoupper($value[d_azp_ibn_property_t_observation]),
								d_azs_ibn_property_t_ownership => strtoupper($value[d_azp_ibn_property_t_ownership]),
								d_azs_ibn_property_t_purchase_annotation => strtoupper($value[d_azp_ibn_property_t_purchase_annotation]),
								d_azs_ibn_property_t_viable => strtoupper($value[d_azp_ibn_property_t_viable]),
								d_azs_ibn_property_t_well_viable => strtoupper($value[d_azp_ibn_property_t_well_viable]),
								d_azs_ibn_property_t_st_returnable => strtoupper($value[d_azp_ibn_property_t_st_returnable]),
								d_azs_ibn_property_t_st_receipt => strtoupper($value[d_azp_ibn_property_t_st_receipt]),
								d_azs_ibn_property_t_st_date => strtoupper($value[d_azp_ibn_property_t_st_date]),
								d_azs_ibn_property_t_st_value => strtoupper($value[d_azp_ibn_property_t_st_value]),
								d_azs_ibn_property_t_zmunicipality => strtoupper($value[d_azp_ibn_property_t_zmunicipality]),
								d_azs_ibn_property_t_text_one => strtoupper($value[d_azp_ibn_property_t_text_one]),
								d_azs_ibn_property_t_text_two => strtoupper($value[d_azp_ibn_property_t_text_two]),
								d_azs_ibn_property_t_text_three => strtoupper($value[d_azp_ibn_property_t_text_three]),
								d_azs_ibn_property_t_text_four => strtoupper($value[d_azp_ibn_property_t_text_four]),
								d_azs_ibn_property_t_text_five => strtoupper($value[d_azp_ibn_property_t_text_five]),
								d_azs_ibn_property_t_text_six => strtoupper($value[d_azp_ibn_property_t_text_six]),
								d_azs_ibn_property_t_text_seven => strtoupper($value[d_azp_ibn_property_t_text_seven]),
								d_azs_ibn_property_t_text_eight => strtoupper($value[d_azp_ibn_property_t_text_eight]),
								d_azs_ibn_property_t_sel_one => strtoupper($value[d_azp_ibn_property_t_sel_one]),
								d_azs_ibn_property_t_sel_two => strtoupper($value[d_azp_ibn_property_t_sel_two]),
								d_azs_ibn_property_t_sel_three => strtoupper($value[d_azp_ibn_property_t_sel_three]),
								d_azs_ibn_property_t_sel_four => strtoupper($value[d_azp_ibn_property_t_sel_four]),
								d_azs_ibn_property_t_sel_five => strtoupper($value[d_azp_ibn_property_t_sel_five]),
								d_azs_ibn_property_u_ibn_control_panel => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_control_panel]),
								d_azs_ibn_property_u_ibn_state => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_state]),
								d_azs_ibn_property_u_ibn_type_concept => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_type_concept]),
								d_azs_ibn_property_u_ibn_type_property => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_type_property]),
								d_azs_ibn_property_v_id_azp_ibn_property => $empty_id,
							);
							# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
							$this->db->insert(t_azs_ibn_property, $var_array);
						endforeach;
					}
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(
						d_azp_ibn_property_m_by_modified => $_SESSION[SESS_APP_ID],
						d_azp_ibn_property_m_date_modified => DATE_HOUR,
						//d_azp_ibn_property_m_description => $empty_description,
						//d_azp_ibn_property_m_status => $empty_state,
						//d_azp_ibn_property_t_address => strtoupper($empty_address),
						d_azp_ibn_property_t_area => strtoupper($empty_area),
						d_azp_ibn_property_t_assessment => strtoupper($empty_assessment),
						d_azp_ibn_property_t_causal_feasibility => strtoupper($empty_causal_feasibility),
						//d_azp_ibn_property_t_comment_legal => strtoupper($empty_comment_legal),
						//d_azp_ibn_property_t_concept => strtoupper($empty_concept),
						//d_azp_ibn_property_t_consecutive => strtoupper($empty_consecutive),
						//d_azp_ibn_property_t_department => strtoupper($empty_department),
						//d_azp_ibn_property_t_full_name => strtoupper($empty_full_name),
						//d_azp_ibn_property_t_identification => strtoupper($empty_identification),
						//d_azp_ibn_property_t_limitation => strtoupper($empty_limitation),
						d_azp_ibn_property_t_market_value => strtoupper($empty_market_value),
						//d_azp_ibn_property_t_municipality => strtoupper($empty_municipality),
						//d_azp_ibn_property_t_nro_registration => strtoupper($empty_nro_registration),
						//d_azp_ibn_property_t_observation => strtoupper($empty_observation),
						d_azp_ibn_property_t_ownership => strtoupper($empty_ownership),
						d_azp_ibn_property_t_purchase_annotation => strtoupper($empty_purchase_annotation),
						d_azp_ibn_property_t_viable => strtoupper($empty_viable),
						d_azp_ibn_property_t_well_viable => strtoupper($empty_well_viable),
						//d_azp_ibn_property_t_st_returnable => strtoupper($empty_st_returnable),
						//d_azp_ibn_property_t_st_receipt => strtoupper($empty_st_receipt),
						//d_azp_ibn_property_t_st_date => strtoupper($empty_st_date),
						//d_azp_ibn_property_t_st_value => strtoupper($empty_st_value),
						//d_azp_ibn_property_t_zmunicipality => strtoupper($empty_zmunicipality),
						d_azp_ibn_property_t_text_one => strtoupper($empty_text_one),
						d_azp_ibn_property_t_text_two => strtoupper($empty_text_two),
						d_azp_ibn_property_t_text_three => strtoupper($empty_text_three),
						d_azp_ibn_property_t_text_four => strtoupper($empty_text_four),
						d_azp_ibn_property_t_text_five => strtoupper($empty_text_five),
						d_azp_ibn_property_t_text_six => strtoupper($empty_text_six),
						d_azp_ibn_property_t_text_seven => strtoupper($empty_text_seven),
						d_azp_ibn_property_t_text_eight => strtoupper($empty_text_eight),
						d_azp_ibn_property_t_sel_one => strtoupper($empty_sel_one),
						d_azp_ibn_property_t_sel_two => strtoupper($empty_sel_two),
						d_azp_ibn_property_t_sel_three => strtoupper($empty_sel_three),
						d_azp_ibn_property_t_sel_four => strtoupper($empty_sel_four),
						d_azp_ibn_property_t_sel_five => strtoupper($empty_sel_five),
						//d_azp_ibn_property_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
						d_azp_ibn_property_v_id_azp_ibn_state => $empty_ibn_state,
						d_azp_ibn_property_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
						d_azp_ibn_property_v_id_azp_ibn_type_property => $empty_ibn_type_property,
					);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Consulta para identificar los nuevos registros en la tabla
					$var_sql = $this->db->query("
						SELECT
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . " AS 'lbl_azp_ibn_control_panel_id_azp_ibn_control_panel',
							tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_t_code_research . " AS 'lbl_azp_ibn_control_panel_t_code_research',
							tc_azp_ibn_property." . d_azp_ibn_property_t_identification . " AS 'lbl_azp_ibn_property_t_identification',
							tc_azp_ibn_property." . d_azp_ibn_property_t_nro_registration . " AS 'lbl_azp_ibn_property_t_nro_registration',
							tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " AS 'lbl_azp_fct_client_id_azp_fct_client'
						FROM " . t_azp_ibn_property . " tc_azp_ibn_property

						INNER JOIN " . t_azp_ibn_control_panel . " tc_azp_ibn_control_panel
							ON tc_azp_ibn_property." . d_azp_ibn_property_v_id_azp_ibn_control_panel . "
								= tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_id_azp_ibn_control_panel . "

						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_control_panel." . d_azp_ibn_control_panel_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "

						INNER JOIN " . t_azp_fct_client . " tc_azp_fct_client
							ON tc_azp_ibn_client." . d_azp_ibn_client_v_id_azp_fct_client . "
								= tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . "

						WHERE tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'
					");
					#-------------------------------------------------------------------------#
					# Validar si la consulta es verdadera
					if (false != $var_sql) {
						# Recorrer las filas de la consulta generada
						foreach ($var_sql as $key => $value):
							# Asignar valores a nuevas variables
							$var_control_panel = $value['lbl_azp_ibn_control_panel_id_azp_ibn_control_panel'];
							$var_code_research = $value['lbl_azp_ibn_control_panel_t_code_research'];
							$var_identification = $value['lbl_azp_ibn_property_t_identification'];
							$var_registration = $value['lbl_azp_ibn_property_t_nro_registration'];
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
									AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " = '3'
									AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_registration . "'
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
										d_azp_ibn_property_t_st_located => 'SI',
										d_azp_ibn_property_t_st_returnable => 'SI',
										d_azp_ibn_property_t_st_receipt => $var_nro_receipt,
										d_azp_ibn_property_t_st_date => $var_date_load,
										d_azp_ibn_property_t_st_value => $var_amount,
									);
									# Insertar valores en la tabla segun estructura de la tabla
									$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");

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
											AND tc_azp_crt_request_data." . d_azp_crt_request_data_v_id_azp_crt_request_type . " = '3'
											AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_plaque_enrollment . " = '" . $var_registration . "'
											AND tc_azp_fct_client." . d_azp_fct_client_id_azp_fct_client . " = '" . $var_client_id . "'
											AND tc_azp_crt_request_data." . d_azp_crt_request_data_t_applicant_entity . " = 'INV'
									");
								endforeach;
							}
						endforeach;
					}
					#-------------------------------------------------------------------------#
					$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
					$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_rg_cp_id = $value[d_azp_ibn_property_v_id_azp_ibn_control_panel];

							$var_rg_reg = $value[d_azp_ibn_property_t_nro_registration];
							$var_rg_via = $value[d_azp_ibn_property_t_viable];
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
						
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						
						INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
							ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
								= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
						
						INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
							ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
								= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
						
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
					$var_array = array(d_azp_ibn_property_t_policy_effective => $var_policy_effective,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Array para asignar argumentos o valores a los elementos
					$var_array = array(d_azp_ibn_property_t_policy_viability => $var_policy_viability,);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					#-------------------------------------------------------------------------#
					# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
					/*$var_sql_select = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					# Validar si la sentencia query ejecutada es correcta y no falsa
					if (false != $var_sql_select) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql_select as $key_sql_select):
							# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
							$var_sql = $this->db->select("*", t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $key_sql_select[d_azp_ibn_property_v_id_azp_ibn_type_property] . "'");
							# Validar si la sentencia query ejecutada es correcta y no falsa
							if (false != $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value):
									$empty_itp_name = $value[d_azp_ibn_type_property_t_name];
									# Array para asignar argumentos o valores a los elementos
									$var_array = array(d_azp_ibn_property_t_well_viable => $empty_itp_name . ' FMI No ' . $empty_nro_registration,);
									# Query Sql Update: Actualizar valores de la tabla segun sus campos
									$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
								endforeach;
							}
						endforeach;
					}*/
					#-------------------------------------------------------------------------#
					# Verificar en la base de datos si existen el registro
					$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
					# Verificar si el resultado de la sql es verdadero o falso
					if (true == $var_sql) {
						# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
						foreach ($var_sql as $key => $value):
							# Asignacion de valores a nuevas variables
							$var_ibn_control_panel = $value[d_azp_ibn_property_v_id_azp_ibn_control_panel];
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
						
						INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
								= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
						
						INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
							ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
								= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
						
						WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
							AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '2'
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
					$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
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
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_01 = ''; }
							} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_01 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_02 = ''; }
							} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_02 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_03 = ''; }
							} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_03 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_04 = ''; }
							} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_04 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_05 = ''; }
							} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_05 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_06 = ''; }
							} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_06 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_07 = ''; }
							} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_07 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_08 = ''; }
							} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_08 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_09 = ''; }
							} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_09 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_10 = ''; }
							} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_10 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_11 = ''; }
							} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_11 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_12 = ''; }
							} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_12 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_13 = ''; }
							} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_13 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_14 = ''; }
							} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_14 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_15 = ''; }
							} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_15 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_16 = ''; }
							} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_16 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_17 = ''; }
							} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_17 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_18 = ''; }
							} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_18 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_19 = ''; }
							} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_19 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
									d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
								} else { $var_idx_20 = ''; }
							} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_property') {
								# Verificar en la base de datos si existen el registro
								$var_sql = $this->db->select('*', t_azp_ibn_type_property,
									d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_20 . "'");
								if (true == $var_sql) {
									# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
									foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
					$var_array = array(d_azp_ibn_property_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
					# Query Sql Update: Actualizar valores de la tabla segun sus campos
					$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				}
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_property_m_deleted . " = '1' GROUP BY " . d_azp_ibn_property_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_property_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_property,
							d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_property_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_property_id_azp_ibn_property];
								$var_cedula2 = $value2[d_azp_ibn_property_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_property_t_acount => $var_union, d_azp_ibn_property_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registros completados correctamente.');
			}
		}
		
		# Control Errores Update
		final private function error_sql_azp_ibn_property_fl_remove(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_property_fl_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_fl_remove($data);
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

		# Control Errores Update
		final private function error_sql_azp_ibn_property_remove(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_deleted . " = '1'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_property_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_level . " = '2'");
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

		# Query Sql Update
		final public function sql_azp_ibn_property_remove(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_remove($data);
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
				$var_array = array(d_azp_ibn_property_m_deleted => '2',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro removido correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_property_restore(array $data) {
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
				$sql_id = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
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
				$sql_id = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_deleted . " = '2'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_property_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_level . " = '2'");
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

		# Query Sql Update
		final public function sql_azp_ibn_property_restore(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_restore($data);
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
				$var_array = array(d_azp_ibn_property_m_deleted => '1',);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro restaurado correctamente.');
			}
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_property_update(array $data) {
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
				if (!isset($data['field_up_address'])) { throw new Exception('<b>Error:</b> El campo de direccion esta prohibido modificar.'); }
				if (!isset($data['field_up_area'])) { throw new Exception('<b>Error:</b> El campo de area esta prohibido modificar.'); }
				if (!isset($data['field_up_assessment'])) { throw new Exception('<b>Error:</b> El campo de gravamen esta prohibido modificar.'); }
				if (!isset($data['field_up_causal_feasibility'])) { throw new Exception('<b>Error:</b> El campo de causal viabilidad esta prohibido modificar.'); }
				if (!isset($data['field_up_comment_legal'])) { throw new Exception('<b>Error:</b> El campo de comentario juridico esta prohibido modificar.'); }
				if (!isset($data['field_up_department'])) { throw new Exception('<b>Error:</b> El campo de departamento esta prohibido modificar.'); }
				if (!isset($data['field_up_full_name'])) { throw new Exception('<b>Error:</b> El campo de nombre esta prohibido modificar.'); }
				if (!isset($data['field_up_identification'])) { throw new Exception('<b>Error:</b> El campo de identificacion esta prohibido modificar.'); }
				if (!isset($data['field_up_limitation'])) { throw new Exception('<b>Error:</b> El campo de limitacion esta prohibido modificar.'); }
				if (!isset($data['field_up_market_value'])) { throw new Exception('<b>Error:</b> El campo de vr comercial esta prohibido modificar.'); }
				if (!isset($data['field_up_municipality'])) { throw new Exception('<b>Error:</b> El campo de municipio esta prohibido modificar.'); }
				if (!isset($data['field_up_nro_registration'])) { throw new Exception('<b>Error:</b> El campo de nro matricula esta prohibido modificar.'); }
				if (!isset($data['field_up_observation'])) { throw new Exception('<b>Error:</b> El campo de observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_ownership'])) { throw new Exception('<b>Error:</b> El campo de titularidad esta prohibido modificar.'); }
				if (!isset($data['field_up_purchase_annotation'])) { throw new Exception('<b>Error:</b> El campo de anotacion compra esta prohibido modificar.'); }
				if (!isset($data['field_up_viable'])) { throw new Exception('<b>Error:</b> El campo de viable esta prohibido modificar.'); }
				if (!isset($data['field_up_well_viable'])) { throw new Exception('<b>Error:</b> El campo de bien viable esta prohibido modificar.'); }
				if (!isset($data['field_up_st_returnable'])) { throw new Exception('<b>Error:</b> El campo de reembolsable esta prohibido modificar.'); }
				if (!isset($data['field_up_st_receipt'])) { throw new Exception('<b>Error:</b> El campo de recibo esta prohibido modificar.'); }
				if (!isset($data['field_up_st_date'])) { throw new Exception('<b>Error:</b> El campo de fecha esta prohibido modificar.'); }
				if (!isset($data['field_up_st_value'])) { throw new Exception('<b>Error:</b> El campo de valor de certificado esta prohibido modificar.'); }
				if (!isset($data['field_up_text_one'])) { throw new Exception('<b>Error:</b> El campo 1 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_two'])) { throw new Exception('<b>Error:</b> El campo 2 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_three'])) { throw new Exception('<b>Error:</b> El campo 3 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_four'])) { throw new Exception('<b>Error:</b> El campo 4 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_five'])) { throw new Exception('<b>Error:</b> El campo 5 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_six'])) { throw new Exception('<b>Error:</b> El campo 6 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_seven'])) { throw new Exception('<b>Error:</b> El campo 7 esta prohibido modificar.'); }
				if (!isset($data['field_up_text_eight'])) { throw new Exception('<b>Error:</b> El campo 8 esta prohibido modificar.'); }
				if (!isset($data['field_up_sel_one'])) { throw new Exception('<b>Error:</b> El campo de lista 1 esta prohibido modificar.'); }
				if (!isset($data['field_up_sel_two'])) { throw new Exception('<b>Error:</b> El campo de lista 2 esta prohibido modificar.'); }
				if (!isset($data['field_up_sel_three'])) { throw new Exception('<b>Error:</b> El campo de lista 3 esta prohibido modificar.'); }
				if (!isset($data['field_up_sel_four'])) { throw new Exception('<b>Error:</b> El campo de lista 4 esta prohibido modificar.'); }
				if (!isset($data['field_up_sel_five'])) { throw new Exception('<b>Error:</b> El campo de lista 5 esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_observation'])) { throw new Exception('<b>Error:</b> El campo de lista observacion esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_state'])) { throw new Exception('<b>Error:</b> El campo de estado esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_concept'])) { throw new Exception('<b>Error:</b> El campo de tipo de concepto esta prohibido modificar.'); }
				if (!isset($data['field_up_ibn_type_property'])) { throw new Exception('<b>Error:</b> El campo de tipo de inmueble esta prohibido modificar.'); }
				#-------------------------------------------------------------------------#
				$empty_address = $this->db->scape($data['field_up_address']);
				$empty_area = $this->db->scape($data['field_up_area']);
				$empty_assessment = $this->db->scape($data['field_up_assessment']);
				$empty_causal_feasibility = $this->db->scape($data['field_up_causal_feasibility']);
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_market_value = $this->db->scape($data['field_up_market_value']);
				$empty_municipality = $this->db->scape($data['field_up_municipality']);
				$empty_nro_registration = $this->db->scape($data['field_up_nro_registration']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_ownership = $this->db->scape($data['field_up_ownership']);
				$empty_purchase_annotation = $this->db->scape($data['field_up_purchase_annotation']);
				$empty_viable = $this->db->scape($data['field_up_viable']);
				$empty_well_viable = $this->db->scape($data['field_up_well_viable']);
				$empty_st_returnable = $this->db->scape($data['field_up_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_up_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_up_st_date']);
				$empty_st_value = $this->db->scape($data['field_up_st_value']);
				//$empty_zmunicipality = $this->db->scape($data['field_up_zmunicipality']);
				$empty_text_one = $this->db->scape($data['field_up_text_one']);
				$empty_text_two = $this->db->scape($data['field_up_text_two']);
				$empty_text_three = $this->db->scape($data['field_up_text_three']);
				$empty_text_four = $this->db->scape($data['field_up_text_four']);
				$empty_text_five = $this->db->scape($data['field_up_text_five']);
				$empty_text_six = $this->db->scape($data['field_up_text_six']);
				$empty_text_seven = $this->db->scape($data['field_up_text_seven']);
				$empty_text_eight = $this->db->scape($data['field_up_text_eight']);
				$empty_sel_one = $this->db->scape($data['field_up_sel_one']);
				$empty_sel_two = $this->db->scape($data['field_up_sel_two']);
				$empty_sel_three = $this->db->scape($data['field_up_sel_three']);
				$empty_sel_four = $this->db->scape($data['field_up_sel_four']);
				$empty_sel_five = $this->db->scape($data['field_up_sel_five']);
				$empty_ibn_observation = $this->db->scape($data['field_up_ibn_observation']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
				$empty_ibn_type_concept = $this->db->scape($data['field_up_ibn_type_concept']);
				$empty_ibn_type_property = $this->db->scape($data['field_up_ibn_type_property']);
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
				if (Func::emp($empty_ibn_type_property) || strtolower($empty_ibn_type_property) == strtolower('seleccionar') || $empty_ibn_type_property == 0) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de inmueble es obligatorio.');
				}
				#---------------------------------------------#
				if (!is_numeric($empty_ibn_type_property)) {
					# Informar un mensaje al usuario por medio de una excepcion
					throw new Exception('<b>Error:</b> El campo de tipo de inmueble solo permite numeros.');
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
				$sql_id = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
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
				$sql_session = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_azp_ibn_property_m_level . " = '1'");
				# Verificar si el registro creado es igual el valor del campo nivel al valor dos
				$sql_level = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "' AND " . d_azp_ibn_property_m_level . " = '2'");
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
				$sql_ibn_type_property = $this->db->select('*', t_azp_ibn_type_property, d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $empty_ibn_type_property . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (false == $sql_ibn_type_property) {
					# Verificar si el resultado devuleto no existe para asignar un valor especifico
					if (strtolower($sql_ibn_type_property) == '') { $sql_ibn_type_property[0][0] = 0; }
					# Verificiar si el valor recibido de la sql es diferente del digitado
					if (strtolower($sql_ibn_type_property[0][0]) != strtolower($empty_ibn_type_property)) {
						# Informar un mensaje al usuario por medio de una excepcion
						throw new Exception('<b>Error:</b> El tipo de inmueble seleccionado no se encuentra registrado.');
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

		# Query Sql Update
		final public function sql_azp_ibn_property_update(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_update($data);
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
				$empty_address = $this->db->scape($data['field_up_address']);
				$empty_area = $this->db->scape($data['field_up_area']);
				$empty_assessment = $this->db->scape($data['field_up_assessment']);
				$empty_causal_feasibility = $this->db->scape($data['field_up_causal_feasibility']);
				$empty_comment_legal = $this->db->scape($data['field_up_comment_legal']);
				$empty_department = $this->db->scape($data['field_up_department']);
				$empty_full_name = $this->db->scape($data['field_up_full_name']);
				$empty_identification = $this->db->scape($data['field_up_identification']);
				$empty_limitation = $this->db->scape($data['field_up_limitation']);
				$empty_market_value = $this->db->scape($data['field_up_market_value']);
				$empty_municipality = $this->db->scape($data['field_up_municipality']);
				$empty_nro_registration = $this->db->scape($data['field_up_nro_registration']);
				$empty_observation = $this->db->scape($data['field_up_observation']);
				$empty_ownership = $this->db->scape($data['field_up_ownership']);
				$empty_purchase_annotation = $this->db->scape($data['field_up_purchase_annotation']);
				$empty_viable = $this->db->scape($data['field_up_viable']);
				//$empty_well_viable = $this->db->scape($data['field_up_well_viable']);
				$empty_st_returnable = $this->db->scape($data['field_up_st_returnable']);
				$empty_st_receipt = $this->db->scape($data['field_up_st_receipt']);
				$empty_st_date = $this->db->scape($data['field_up_st_date']);
				$empty_st_value = $this->db->scape($data['field_up_st_value']);
				//$empty_zmunicipality = $this->db->scape($data['field_up_zmunicipality']);
				$empty_text_one = $this->db->scape($data['field_up_text_one']);
				$empty_text_two = $this->db->scape($data['field_up_text_two']);
				$empty_text_three = $this->db->scape($data['field_up_text_three']);
				$empty_text_four = $this->db->scape($data['field_up_text_four']);
				$empty_text_five = $this->db->scape($data['field_up_text_five']);
				$empty_text_six = $this->db->scape($data['field_up_text_six']);
				$empty_text_seven = $this->db->scape($data['field_up_text_seven']);
				$empty_text_eight = $this->db->scape($data['field_up_text_eight']);
				$empty_sel_one = $this->db->scape($data['field_up_sel_one']);
				$empty_sel_two = $this->db->scape($data['field_up_sel_two']);
				$empty_sel_three = $this->db->scape($data['field_up_sel_three']);
				$empty_sel_four = $this->db->scape($data['field_up_sel_four']);
				$empty_sel_five = $this->db->scape($data['field_up_sel_five']);
				$empty_ibn_observation = $this->db->scape($data['field_up_ibn_observation']);
				$empty_ibn_state = $this->db->scape($data['field_up_ibn_state']);
				$empty_ibn_type_concept = $this->db->scape($data['field_up_ibn_type_concept']);
				$empty_ibn_type_property = $this->db->scape($data['field_up_ibn_type_property']);
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select("*", t_azp_ibn_type_property, d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $empty_ibn_type_property . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value): $empty_itp_name = $value[d_azp_ibn_type_property_t_name]; endforeach;
				} else { $empty_itp_name = ''; }
				#-------------------------------------------------------------------------#
				if ($empty_viable != 'SI' || $empty_viable != 'NO') { $empty_well_viable = ''; }
				if ($empty_viable == 'SI') { $empty_well_viable = $empty_itp_name . ' FMI No ' . $empty_nro_registration; }
				if ($empty_viable == 'NO') { $empty_well_viable = ''; }
				#-------------------------------------------------------------------------#
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						$var_array = array(
							d_azs_ibn_property_m_by_created => $_SESSION[SESS_APP_ID],
							d_azs_ibn_property_m_by_modified => $_SESSION[SESS_APP_ID],
							d_azs_ibn_property_m_date_created => DATE_HOUR,
							d_azs_ibn_property_m_date_modified => DATE_HOUR,
							d_azs_ibn_property_m_deleted => $value[d_azp_ibn_property_m_deleted],
							d_azs_ibn_property_m_description => $value[d_azp_ibn_property_m_description],
							d_azs_ibn_property_m_level => $value[d_azp_ibn_property_m_level],
							d_azs_ibn_property_m_status => $value[d_azp_ibn_property_m_status],
							d_azs_ibn_property_m_temp => $value[d_azp_ibn_property_m_temp],
							d_azs_ibn_property_t_address => strtoupper($value[d_azp_ibn_property_t_address]),
							d_azs_ibn_property_t_area => strtoupper($value[d_azp_ibn_property_t_area]),
							d_azs_ibn_property_t_assessment => strtoupper($value[d_azp_ibn_property_t_assessment]),
							d_azs_ibn_property_t_causal_feasibility => strtoupper($value[d_azp_ibn_property_t_causal_feasibility]),
							d_azs_ibn_property_t_comment_legal => strtoupper($value[d_azp_ibn_property_t_comment_legal]),
							d_azs_ibn_property_t_concept => strtoupper($value[d_azp_ibn_property_t_concept]),
							d_azs_ibn_property_t_consecutive => strtoupper($value[d_azp_ibn_property_t_consecutive]),
							d_azs_ibn_property_t_consecutive => strtoupper($value[d_azp_ibn_property_t_consecutive]),
							d_azs_ibn_property_t_department => strtoupper($value[d_azp_ibn_property_t_department]),
							d_azs_ibn_property_t_full_name => strtoupper($value[d_azp_ibn_property_t_full_name]),
							d_azs_ibn_property_t_identification => strtoupper($value[d_azp_ibn_property_t_identification]),
							d_azs_ibn_property_t_limitation => strtoupper($value[d_azp_ibn_property_t_limitation]),
							d_azs_ibn_property_t_market_value => strtoupper($value[d_azp_ibn_property_t_market_value]),
							d_azs_ibn_property_t_municipality => strtoupper($value[d_azp_ibn_property_t_municipality]),
							d_azs_ibn_property_t_nro_registration => strtoupper($value[d_azp_ibn_property_t_nro_registration]),
							d_azs_ibn_property_t_observation => strtoupper($value[d_azp_ibn_property_t_observation]),
							d_azs_ibn_property_t_ownership => strtoupper($value[d_azp_ibn_property_t_ownership]),
							d_azs_ibn_property_t_purchase_annotation => strtoupper($value[d_azp_ibn_property_t_purchase_annotation]),
							d_azs_ibn_property_t_viable => strtoupper($value[d_azp_ibn_property_t_viable]),
							d_azs_ibn_property_t_well_viable => strtoupper($value[d_azp_ibn_property_t_well_viable]),
							d_azs_ibn_property_t_st_returnable => strtoupper($value[d_azp_ibn_property_t_st_returnable]),
							d_azs_ibn_property_t_st_receipt => strtoupper($value[d_azp_ibn_property_t_st_receipt]),
							d_azs_ibn_property_t_st_date => strtoupper($value[d_azp_ibn_property_t_st_date]),
							d_azs_ibn_property_t_st_value => strtoupper($value[d_azp_ibn_property_t_st_value]),
							d_azs_ibn_property_t_zmunicipality => strtoupper($value[d_azp_ibn_property_t_zmunicipality]),
							d_azs_ibn_property_t_text_one => strtoupper($value[d_azp_ibn_property_t_text_one]),
							d_azs_ibn_property_t_text_two => strtoupper($value[d_azp_ibn_property_t_text_two]),
							d_azs_ibn_property_t_text_three => strtoupper($value[d_azp_ibn_property_t_text_three]),
							d_azs_ibn_property_t_text_four => strtoupper($value[d_azp_ibn_property_t_text_four]),
							d_azs_ibn_property_t_text_five => strtoupper($value[d_azp_ibn_property_t_text_five]),
							d_azs_ibn_property_t_text_six => strtoupper($value[d_azp_ibn_property_t_text_six]),
							d_azs_ibn_property_t_text_seven => strtoupper($value[d_azp_ibn_property_t_text_seven]),
							d_azs_ibn_property_t_text_eight => strtoupper($value[d_azp_ibn_property_t_text_eight]),
							d_azs_ibn_property_t_sel_one => strtoupper($value[d_azp_ibn_property_t_sel_one]),
							d_azs_ibn_property_t_sel_two => strtoupper($value[d_azp_ibn_property_t_sel_two]),
							d_azs_ibn_property_t_sel_three => strtoupper($value[d_azp_ibn_property_t_sel_three]),
							d_azs_ibn_property_t_sel_four => strtoupper($value[d_azp_ibn_property_t_sel_four]),
							d_azs_ibn_property_t_sel_five => strtoupper($value[d_azp_ibn_property_t_sel_five]),
							d_azs_ibn_property_u_ibn_control_panel => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_control_panel]),
							d_azs_ibn_property_u_ibn_observation => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_observation]),
							d_azs_ibn_property_u_ibn_state => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_state]),
							d_azs_ibn_property_u_ibn_type_concept => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_type_concept]),
							d_azs_ibn_property_u_ibn_type_property => strtoupper($value[d_azp_ibn_property_v_id_azp_ibn_type_property]),
							d_azs_ibn_property_v_id_azp_ibn_property => $empty_id,
						);
						# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y asignados
						$this->db->insert(t_azs_ibn_property, $var_array);
					endforeach;
				}
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(
					d_azp_ibn_property_m_by_modified => $_SESSION[SESS_APP_ID],
					d_azp_ibn_property_m_date_modified => DATE_HOUR,
					d_azp_ibn_property_m_description => $empty_description,
					d_azp_ibn_property_m_status => $empty_state,
					d_azp_ibn_property_t_address => strtoupper($empty_address),
					d_azp_ibn_property_t_area => strtoupper($empty_area),
					d_azp_ibn_property_t_assessment => strtoupper($empty_assessment),
					d_azp_ibn_property_t_causal_feasibility => strtoupper($empty_causal_feasibility),
					d_azp_ibn_property_t_comment_legal => strtoupper($empty_comment_legal),
					//d_azp_ibn_property_t_concept => strtoupper($empty_concept),
					//d_azp_ibn_property_t_consecutive => strtoupper($empty_consecutive),
					d_azp_ibn_property_t_department => strtoupper($empty_department),
					d_azp_ibn_property_t_full_name => strtoupper($empty_full_name),
					d_azp_ibn_property_t_identification => strtoupper($empty_identification),
					d_azp_ibn_property_t_limitation => strtoupper($empty_limitation),
					d_azp_ibn_property_t_market_value => strtoupper($empty_market_value),
					d_azp_ibn_property_t_municipality => strtoupper($empty_municipality),
					d_azp_ibn_property_t_nro_registration => strtoupper($empty_nro_registration),
					d_azp_ibn_property_t_observation => strtoupper($empty_observation),
					d_azp_ibn_property_t_ownership => strtoupper($empty_ownership),
					d_azp_ibn_property_t_purchase_annotation => strtoupper($empty_purchase_annotation),
					d_azp_ibn_property_t_viable => strtoupper($empty_viable),
					d_azp_ibn_property_t_well_viable => strtoupper($empty_itp_name . ' FMI No ' . $empty_nro_registration),
					d_azp_ibn_property_t_st_returnable => strtoupper($empty_st_returnable),
					d_azp_ibn_property_t_st_receipt => strtoupper($empty_st_receipt),
					d_azp_ibn_property_t_st_date => strtoupper($empty_st_date),
					d_azp_ibn_property_t_st_value => str_replace('$ ', '', str_replace(',', '', str_replace('.00', '', $empty_st_value))),
					//d_azp_ibn_property_t_zmunicipality => strtoupper($empty_zmunicipality),
					d_azp_ibn_property_t_text_one => strtoupper($empty_text_one),
					d_azp_ibn_property_t_text_two => strtoupper($empty_text_two),
					d_azp_ibn_property_t_text_three => strtoupper($empty_text_three),
					d_azp_ibn_property_t_text_four => strtoupper($empty_text_four),
					d_azp_ibn_property_t_text_five => strtoupper($empty_text_five),
					d_azp_ibn_property_t_text_six => strtoupper($empty_text_six),
					d_azp_ibn_property_t_text_seven => strtoupper($empty_text_seven),
					d_azp_ibn_property_t_text_eight => strtoupper($empty_text_eight),
					d_azp_ibn_property_t_sel_one => strtoupper($empty_sel_one),
					d_azp_ibn_property_t_sel_two => strtoupper($empty_sel_two),
					d_azp_ibn_property_t_sel_three => strtoupper($empty_sel_three),
					d_azp_ibn_property_t_sel_four => strtoupper($empty_sel_four),
					d_azp_ibn_property_t_sel_five => strtoupper($empty_sel_five),
					//d_azp_ibn_property_v_id_azp_ibn_control_panel => $empty_ibn_control_panel,
					d_azp_ibn_property_v_id_azp_ibn_state => $empty_ibn_state,
					d_azp_ibn_property_v_id_azp_ibn_observation => $empty_ibn_observation,
					d_azp_ibn_property_v_id_azp_ibn_type_concept => $empty_ibn_type_concept,
					d_azp_ibn_property_v_id_azp_ibn_type_property => $empty_ibn_type_property,
				);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_rg_cf_2 = 0; $var_rg_cf_3 = 0;
				$var_pc_one = 'NEGATIVO'; $var_pc_two = 'NEGATIVO'; $var_pc_three = 'NEGATIVO'; $var_rg_cf_pos = 'POSITIVO'; $var_rg_cf_neg = 'NEGATIVO';
				# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (false != $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_rg_cp_id = $value[d_azp_ibn_property_v_id_azp_ibn_control_panel];

						$var_rg_reg = $value[d_azp_ibn_property_t_nro_registration];
						$var_rg_via = $value[d_azp_ibn_property_t_viable];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_calification . " tc_azp_ibn_calification
						ON tc_azp_ibn_regulation." . d_azp_ibn_regulation_v_id_azp_ibn_calification . "
							= tc_azp_ibn_calification." . d_azp_ibn_calification_id_azp_ibn_calification . "
					
					INNER JOIN " . t_azp_ibn_type_condition . " tc_azp_ibn_type_condition
						ON tc_azp_ibn_calification." . d_azp_ibn_calification_v_id_azp_ibn_type_condition . "
							= tc_azp_ibn_type_condition." . d_azp_ibn_type_condition_id_azp_ibn_type_condition . "
					
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
				$var_array = array(d_azp_ibn_property_t_policy_effective => $var_policy_effective,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Array para asignar argumentos o valores a los elementos
				$var_array = array(d_azp_ibn_property_t_policy_viability => $var_policy_viability,);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				# Verificar en la base de datos si existen el registro
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				# Verificar si el resultado de la sql es verdadero o falso
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Asignacion de valores a nuevas variables
						$var_ibn_control_panel = $value[d_azp_ibn_property_v_id_azp_ibn_control_panel];
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
					
					INNER JOIN " . t_azp_ibn_client . " tc_azp_ibn_client
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . "
							= tc_azp_ibn_client." . d_azp_ibn_client_id_azp_ibn_client . "
					
					INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
						ON tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . "
							= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
					
					WHERE tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_client . " = '" . $var_id_client . "'
						AND tc_azp_ibn_concept." . d_azp_ibn_concept_v_id_azp_ibn_module . " = '2'
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
				$var_sql = $this->db->select('*', t_azp_ibn_property, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
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
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_01 = ''; }
						} else if ($var_index_01 == '') { $var_idx_01 = ''; } else if ($var_index_01 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_01 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_01 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_02 = ''; }
						} else if ($var_index_02 == '') { $var_idx_02 = ''; } else if ($var_index_02 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_02 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_02 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_03 = ''; }
						} else if ($var_index_03 == '') { $var_idx_03 = ''; } else if ($var_index_03 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_03 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_03 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_04 = ''; }
						} else if ($var_index_04 == '') { $var_idx_04 = ''; } else if ($var_index_04 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_04 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_04 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_05 = ''; }
						} else if ($var_index_05 == '') { $var_idx_05 = ''; } else if ($var_index_05 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_05 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_05 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_06 = ''; }
						} else if ($var_index_06 == '') { $var_idx_06 = ''; } else if ($var_index_06 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_06 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_06 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_07 = ''; }
						} else if ($var_index_07 == '') { $var_idx_07 = ''; } else if ($var_index_07 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_07 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_07 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_08 = ''; }
						} else if ($var_index_08 == '') { $var_idx_08 = ''; } else if ($var_index_08 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_08 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_08 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_09 = ''; }
						} else if ($var_index_09 == '') { $var_idx_09 = ''; } else if ($var_index_09 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_09 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_09 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_10 = ''; }
						} else if ($var_index_10 == '') { $var_idx_10 = ''; } else if ($var_index_10 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_10 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_10 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_11 = ''; }
						} else if ($var_index_11 == '') { $var_idx_11 = ''; } else if ($var_index_11 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_11 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_11 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_12 = ''; }
						} else if ($var_index_12 == '') { $var_idx_12 = ''; } else if ($var_index_12 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_12 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_12 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_13 = ''; }
						} else if ($var_index_13 == '') { $var_idx_13 = ''; } else if ($var_index_13 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_13 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_13 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_14 = ''; }
						} else if ($var_index_14 == '') { $var_idx_14 = ''; } else if ($var_index_14 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_14 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_14 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_15 = ''; }
						} else if ($var_index_15 == '') { $var_idx_15 = ''; } else if ($var_index_15 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_15 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_15 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_16 = ''; }
						} else if ($var_index_16 == '') { $var_idx_16 = ''; } else if ($var_index_16 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_16 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_16 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_17 = ''; }
						} else if ($var_index_17 == '') { $var_idx_17 = ''; } else if ($var_index_17 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_17 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_17 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_18 = ''; }
						} else if ($var_index_18 == '') { $var_idx_18 = ''; } else if ($var_index_18 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_18 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_18 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_19 = ''; }
						} else if ($var_index_19 == '') { $var_idx_19 = ''; } else if ($var_index_19 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_19 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_19 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_concept') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_concept,
								d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_concept_t_name]; endforeach;
							} else { $var_idx_20 = ''; }
						} else if ($var_index_20 == '') { $var_idx_20 = ''; } else if ($var_index_20 == 'v_id_azp_ibn_type_property') {
							# Verificar en la base de datos si existen el registro
							$var_sql = $this->db->select('*', t_azp_ibn_type_property,
								d_azp_ibn_type_property_id_azp_ibn_type_property . " = '" . $var_value_20 . "'");
							if (true == $var_sql) {
								# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
								foreach ($var_sql as $key => $value): $var_idx_20 = $value[d_azp_ibn_type_property_t_name]; endforeach;
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
				$var_array = array(d_azp_ibn_property_t_concept => trim(preg_replace('/\s+/',' ', strtoupper($var_concept))),);
				# Query Sql Update: Actualizar valores de la tabla segun sus campos
				$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $empty_id . "'");
				#-------------------------------------------------------------------------#
				$var_sql = $this->db->select("*", t_azp_ibn_property,
					d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
					d_azp_ibn_property_m_deleted . " = '1' GROUP BY " . d_azp_ibn_property_t_identification
				);
				# Validar si la sentencia query ejecutada es correcta y no falsa
				if (true == $var_sql) {
					# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
					foreach ($var_sql as $key => $value):
						# Organizacion de los valores capturados y asignados a los campos a insertar
						$var_cedula = $value[d_azp_ibn_property_t_identification]; $var_suma = 1; $var_buma = 1;
						$var_number = $this->db->select("*", t_azp_ibn_property,
							d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_ibn_control_panel . "' AND " .
							d_azp_ibn_property_t_identification . " = '" . $var_cedula . "'"
						);
						# Validar si la sentencia query ejecutada es correcta y no falsa
						if (true == $var_number) {
							# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
							foreach ($var_number as $key2 => $value2):
								# Organizacion de los valores capturados y asignados a los campos a insertar
								$var_id2 = $value2[d_azp_ibn_property_id_azp_ibn_property];
								$var_cedula2 = $value2[d_azp_ibn_property_t_identification];
								$var_union = $var_cedula2 . '_' . $var_suma++;
								$var_bcount = $var_buma++;
								# Array para asignar argumentos o valores a los elementos
								$var_array = array(d_azp_ibn_property_t_acount => $var_union, d_azp_ibn_property_t_bcount => $var_bcount);
								# Query Sql Update: Actualizar valores de la tabla segun sus campos
								$this->db->update(t_azp_ibn_property, $var_array, d_azp_ibn_property_id_azp_ibn_property . " = '" . $var_id2 . "'");
							endforeach;
						}

					endforeach;
				}
				#-------------------------------------------------------------------------#
				# Retornar el mensaje una vez ejecutada la rutina del proceso
				return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.', 'register' => $empty_id);
			}
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_control_panel() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel, d_azp_ibn_control_panel_m_deleted . " = '1' AND " . d_azp_ibn_control_panel_m_status . " = '1'");
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_limitation() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_limitation,
				d_azp_ibn_limitation_m_deleted . " = '1' AND " .
				d_azp_ibn_limitation_m_status . " = '1' AND " .
				d_azp_ibn_limitation_v_id_azp_ibn_module . " = '2' "
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_state() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_m_deleted . " = '1' AND " .
				d_azp_ibn_state_m_status . " = '1' AND " .
				d_azp_ibn_state_v_id_azp_ibn_module . " = '2' "
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_concept() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_m_deleted . " = '1' AND " .
				d_azp_ibn_type_concept_m_status . " = '1' AND " .
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '2'"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_observation() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_observation,
				d_azp_ibn_observation_m_deleted . " = '1' AND " .
				d_azp_ibn_observation_v_id_azp_ibn_module . " = '2' AND " .
				d_azp_ibn_observation_m_status . " = '1' ORDER BY " .
				d_azp_ibn_observation_id_azp_ibn_observation . " ASC"
			);
		}
		
		# Query Sql Select
		final public function sql_select_tc_azp_ibn_type_property() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_property, d_azp_ibn_type_property_m_deleted . " = '1' AND " . d_azp_ibn_type_property_m_status . " = '1'");
		}

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
				
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_limitation." . d_azp_ibn_limitation_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				
				WHERE tc_azp_ibn_limitation." . d_azp_ibn_limitation_m_deleted . " = '1'
					AND tc_azp_ibn_limitation." . d_azp_ibn_limitation_v_id_azp_ibn_module . " = '2'
				ORDER BY tc_azp_ibn_limitation." . d_azp_ibn_limitation_id_azp_ibn_limitation . " ASC
			");
		}

		# Query Sql Select
		final public function sql_controller_research() {
			# Seleccionar los registros de la tabla
			return $this->db->select(d_azp_ibn_control_panel_t_code_research . " AS 'lbl_name'",
				t_azp_ibn_control_panel, d_azp_ibn_control_panel_id_azp_ibn_control_panel . " = '" . $this->id . "'");
		}

		# Query Sql Select
		final public function sql_controller_limitation() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT " . d_azp_ibn_limitation_t_name . " AS 'lbl_azp_ibn_limitation_t_name'
				FROM " . t_azp_ibn_limitation . "
				WHERE " . d_azp_ibn_limitation_id_azp_ibn_limitation . " IN (" . $_GET['field_id'] . ")
			");
		}

		# Query Sql Select
		final public function sql_controller_type_concept_id() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					" . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					" . d_azp_ibn_type_concept_t_text . " AS 'lbl_azp_ibn_type_concept_t_text'
				FROM " . t_azp_ibn_type_concept . "
				WHERE " . d_azp_ibn_type_concept_id_azp_ibn_type_concept . " = '" . $this->id . "'
					AND " . d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '2'"
			);
		}

		# Query Sql Select
		final public function sql_controller_type_concept_name() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					" . d_azp_ibn_type_concept_t_name . " AS 'lbl_azp_ibn_type_concept_t_name',
					" . d_azp_ibn_type_concept_t_text . " AS 'lbl_azp_ibn_type_concept_t_text'
				FROM " . t_azp_ibn_type_concept . "
				WHERE " . d_azp_ibn_type_concept_t_name . " = '" . $_GET['field_text'] . "'
					AND " . d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '2'"
			);
		}

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
				
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				
				INNER JOIN " . t_azp_ibn_property . " tc_azp_ibn_property
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . "
				
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . " = '2'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . " = '" . $this->id . "'
				ORDER BY tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " ASC
			");
		}

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
				
				INNER JOIN " . t_azp_ibn_module . " tc_azp_ibn_module
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_module . "
						= tc_azp_ibn_module." . d_azp_ibn_module_id_azp_ibn_module . "
				
				INNER JOIN " . t_azp_ibn_property . " tc_azp_ibn_property
					ON tc_azp_ibn_capture." . d_azp_ibn_capture_v_id_azp_ibn_cfpvw . "
						= tc_azp_ibn_property." . d_azp_ibn_property_id_azp_ibn_property . "
				
				WHERE tc_azp_ibn_capture." . d_azp_ibn_capture_id_azp_ibn_capture . " = '" . $this->id . "'
					AND tc_azp_ibn_capture." . d_azp_ibn_capture_m_deleted . " = '1'
				LIMIT 1
			");
		}

		# Control Errores Update
		final private function error_sql_azp_ibn_property_file(array $data) {
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

		# Query Sql Update
		final public function sql_azp_ibn_property_file(array $data) : array {
			$var_error = $this->error_sql_azp_ibn_property_file($data);
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
				//$empty_document = 'INMUEBLES' . '_' . $empty_detection . '_' . DATE_NUMBER . '_' . HOUR_NUMBER . '.pdf';
				//$empty_namdoc = 'INMUEBLES' . '_' . $empty_detection . '_' . $empty_name;
				//$empty_namdoc = 'INMUEBLES' . '_' . $empty_name;
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
					d_azp_ibn_capture_v_id_azp_ibn_module => '2',
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















		# Query Sql Select
		final public function sql_field_t_acount(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_acount
			);
		}

		# Query Sql Select
		final public function sql_field_t_address(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_address
			);
		}

		# Query Sql Select
		final public function sql_field_t_area(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_area
			);
		}

		# Query Sql Select
		final public function sql_field_t_assessment(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_assessment
			);
		}

		# Query Sql Select
		final public function sql_field_t_causal_feasibility(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_causal_feasibility
			);
		}

		# Query Sql Select
		final public function sql_field_t_comment_legal(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_comment_legal
			);
		}

		# Query Sql Select
		final public function sql_field_t_concept(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_concept
			);
		}

		# Query Sql Select
		final public function sql_field_t_consecutive(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_consecutive
			);
		}

		# Query Sql Select
		final public function sql_field_t_department(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_department
			);
		}

		# Query Sql Select
		final public function sql_field_t_full_name(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_full_name
			);
		}

		# Query Sql Select
		final public function sql_field_t_identification(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_identification
			);
		}

		# Query Sql Select
		final public function sql_field_t_limitation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_limitation
			);
		}

		# Query Sql Select
		final public function sql_field_t_market_value(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_market_value
			);
		}

		# Query Sql Select
		final public function sql_field_t_municipality(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_municipality
			);
		}

		# Query Sql Select
		final public function sql_field_t_nro_registration(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_nro_registration
			);
		}

		# Query Sql Select
		final public function sql_field_t_observation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_observation
			);
		}

		# Query Sql Select
		final public function sql_field_t_ownership(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_ownership
			);
		}

		# Query Sql Select
		final public function sql_field_t_policy_effective(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_policy_effective
			);
		}

		# Query Sql Select
		final public function sql_field_t_policy_final(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_policy_final
			);
		}

		# Query Sql Select
		final public function sql_field_t_policy_viability(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_policy_viability
			);
		}

		# Query Sql Select
		final public function sql_field_t_purchase_annotation(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_purchase_annotation
			);
		}

		# Query Sql Select
		final public function sql_field_t_viable(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_viable
			);
		}

		# Query Sql Select
		final public function sql_field_t_well_viable(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_property,
				d_azp_ibn_property_v_id_azp_ibn_control_panel . " = '" . $var_control . "' AND " .
				d_azp_ibn_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_property_t_well_viable
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_control_panel(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_control_panel,
				d_azp_ibn_control_panel_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_control_panel_t_code_research
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_state(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_state,
				d_azp_ibn_state_v_id_azp_ibn_module . " = '2' AND " .
				d_azp_ibn_state_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_state_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_type_concept(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_concept,
				d_azp_ibn_type_concept_v_id_azp_ibn_module . " = '2' AND " .
				d_azp_ibn_type_concept_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_type_concept_t_name
			);
		}

		# Query Sql Select
		final public function sql_field_v_id_azp_ibn_type_property(string $var_id) {
			if ($var_id != '') { $var_control = $var_id; } else { $var_control = 0; }
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_azp_ibn_type_property,
				d_azp_ibn_type_property_m_deleted . " = '1'" . " " .
				"GROUP BY " . d_azp_ibn_type_property_t_name
			);
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>