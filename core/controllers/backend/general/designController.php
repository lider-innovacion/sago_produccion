<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Desarrolador Programador');
	//------------------------------------------------
	class designController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			# Instanciando clases del modelo
			$var_m_zv_setting = new m_zv_settingModel;
			# Instanciando clases del modelo
			$var_m_zz_design = new m_zz_designModel;
			# Cargar plantilla
			echo $this->template->render('backend/general/design', array(
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_action' => $var_m_zv_setting->sql_controller_t_btn_action(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_cancel' => $var_m_zv_setting->sql_controller_t_btn_cancel(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_change' => $var_m_zv_setting->sql_controller_t_btn_change(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_create' => $var_m_zv_setting->sql_controller_t_btn_create(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_create_by' => $var_m_zv_setting->sql_controller_t_btn_create_by(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_detail' => $var_m_zv_setting->sql_controller_t_btn_detail(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_eliminate' => $var_m_zv_setting->sql_controller_t_btn_eliminate(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_menu' => $var_m_zv_setting->sql_controller_t_btn_menu(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_report' => $var_m_zv_setting->sql_controller_t_btn_report(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_remove' => $var_m_zv_setting->sql_controller_t_btn_remove(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_btn_update' => $var_m_zv_setting->sql_controller_t_btn_update(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_sql_controller_t_table_read' => $var_m_zv_setting->sql_controller_t_table_read(),
				# Consultar registros de la tabla por medio del modelo instanciado
				'df_show_full_tables' => $var_m_zz_design->show_full_tables()
			));
		}
	}
?>